<?php

namespace App\Http\Controllers;

use App\Http\Controllers\common_functions\LocationData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use MongoDB\Client;
use Illuminate\Support\Facades\Hash;
use MongoId;

class Registration extends Controller
{

    public function index($step = null){

        //Laravel Mongo
       $work =  DB::collection("user")->where("first_name","asddasd")->first();

     //  print_r($work);
        $locationData = new LocationData();

        $states = $locationData->USStates();

        $data['USStates'] = $states;

        if($step == null){
            $data["step"] = 0;
            return view("register-step1",compact("data"));
        }else if($step == 2){
            $data["step"] = 2;
            return view("register-step2",compact("data"));
        }else if($step == 3){
            $data["step"] = 3;
            return view("register-step3",compact("data"));
        }else{
            echo "404";
        }

    }

    function apiRegister($param = array()){



        /*
         * user_type=driver&
         * email=value2&
         * country=value3&
         * state=value3&
         * city=value3&
         * zip=value3&
         * street_address=value3
         * &zip=value3&
         * gender=value3
         * &password=value3
         * &last_name=value3
         * &first_name=value3
         */

        //echo implode(",",$param);
        print_r(http_build_query($param));

        $urlDetails = 'http://ec2-54-174-240-101.compute-1.amazonaws.com:3000/register';

        $url = $urlDetails;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query($param));
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        $urlData = curl_exec($curl);
        curl_close($curl);

        $returnData = json_decode($urlData);

        if(!empty($returnData->data->_id)){
            return $returnData->data->_id;
        }else{
            return false;
        }
       // return print_r(json_decode($urlData));

    }

    function registrationStep1(Request $request){

        $validatedData = $request->validate([
            'userEmail' => 'required',
            'password' => 'min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'confirm_Password' => 'required_with:password|same:password',
            'first_name' => 'required',
            'last_name' => 'required',
            'home_address' => 'required',
            'zip' => 'required',
        ]);


        $client = new \MongoDB\Client("mongodb://ec2-54-174-240-101.compute-1.amazonaws.com:27017");
        $collection = $client->vero->users;


        $find = array('userEmail'=>$request->input("userEmail"));
        $unique =  $collection->findOne($find);

        Session::put("register-form-1",$request->all());
        $param = array(
            "user_type" => "driver",
            "email" =>  $request->input("userEmail"),
            "country" => "USA",
            "state" => "IL",
            "city" => "Southern Pines",
            "zip" => $request->input("zip"),
            "street_address"=> $request->input("home_address"),
            "zip"=> $request->input("zip"),
            "gender"=> $request->input("gender"),
            "password"=> $request->input("password"),
            "last_name"=> $request->input("last_name"),
            "first_name"=> $request->input("first_name"),
        );


        /*if($unique){
            Session::flash('message', 'Email already registered!');
            return redirect(URL::to("/driver-register"));
        }*/

       $insertId = $this->apiRegister($param);
        if($insertId){
            $result = $request->all();
            $result['password']  = Hash::make($result['password']);
            //$result = $collection->insertOne(array("_id"=>new \MongoDB\BSON\ObjectId($insertId),$request));
            $result["_id"] =  new \MongoDB\BSON\ObjectId($insertId);
            $result["email"] = $request->input("userEmail");
            $result = $collection->insertOne($result);
            Session::put("register-id",$result->getInsertedId());
            return redirect(URL::to("/driver-register/2"));

        }else{
            Session::flash('message', 'Email already registered!');
            return redirect(URL::to("/driver-register"));
        }

    }


    public function registrationStep2(Request $request){


        $id = Session::get("register-id");

        $client = new \MongoDB\Client("mongodb://ec2-54-174-240-101.compute-1.amazonaws.com:27017");
        $collection = $client->vero->users;

        $result = $request->all();

        Session::put("register-form-2",$request->all());


        $result = $collection->updateOne(array("_id"=>new \MongoDB\BSON\ObjectId($id)),array('$set' => $request->all()));

        return redirect(URL::to("/driver-register/3"));

    }


    public function registrationStep3(Request $request){

       // $id = Session::get("register-id");
        $id = "5b05d7a456c7c72a8000126a";
        $allInsurance = array();


        $driver = $request->file("pic")["driver_license"];
        $carInsurance = $request->file("pic")["car_insurance"];
        $passport = $request->file("pic")["passport"];
        $profile = $request->file("pic")["profile"];
        $insurace = $request->file("pic")["insurance_pic"];

        //Move Uploaded File
        $destinationPath = 'uploads';
        $time = time();

        foreach($insurace as $insurance_pic){
                $allInsurance[] = $time."-".$insurance_pic->getClientOriginalName();
                $insurance_pic->move($destinationPath,$time."-".$insurance_pic->getClientOriginalName());                
        }

        
        $picDriver = $time."-".$driver->getClientOriginalName();
        $picCarInsurance = $time."-".$carInsurance->getClientOriginalName();
        $picPassport = $time."-".$passport->getClientOriginalName();
        $picProfile = $time."-".$profile->getClientOriginalName();

        $driver->move($destinationPath,$picDriver);
        $carInsurance->move($destinationPath,$picCarInsurance);
        $passport->move($destinationPath,$picPassport);
        $profile->move($destinationPath,$picProfile);


        $client = new \MongoDB\Client("mongodb://localhost:27017");
        $collection = $client->vero->users;


        $pics = array(
"pictures" => array("driver_license"=>$picDriver,"car_insurance"=>$picCarInsurance,"passport"=>$picPassport,"profile"=>$picProfile,
    "insurance_pic"=>$allInsurance)
        );

        $result = $collection->updateOne(array("_id"=>new \MongoDB\BSON\ObjectId($id)),array('$set' => $pics));

        Session::forget(["register-form-1","register-form-2"]);
        Session::flash('message', 'Registration successful!');
        return redirect(URL::to("/login"));

    }

    public function basic_email(){
        $data = array('name'=>"sdasd");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('zeeshan4971@gmail.com', 'sda')->subject
            ('Laravel Basic Testing Mail');
            $message->from('vero1@techopialabs.com','sdasd');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
}
