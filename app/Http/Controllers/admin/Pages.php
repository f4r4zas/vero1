<?php 
	
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;


class Pages extends Controller{

	public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index(){
    	return view("admin.dashboard");
    }

    public function users(){

    	$client = new \MongoDB\Client("mongodb://ec2-54-174-240-101.compute-1.amazonaws.com:27017");
        $collection = $client->vero->users;
        $collectionData = $collection->find();

    	return view("admin.user")->with('users',$collectionData);	
    }

    public function pages(){


        $client = new \MongoDB\Client("mongodb://ec2-54-174-240-101.compute-1.amazonaws.com:27017");
        $collection = $client->vero->pages;
        $collectionData = $collection->find();

        return view("admin.pages")->with('pages',$collectionData);
    
    }

    public function createPage(){
        return view("admin.page_create");        
    }

}


?>