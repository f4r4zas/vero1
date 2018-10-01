@include("includes.header")
<span class="howhide">

@include("includes.full_header")
</span>
	<style>
.steps-wrap .steps.step2 li {
	margin: 0;
	display: block;
	float: left;
	width: 29%;
	margin-bottom: 30px;
	padding: 0 !important;
	text-align: center;
}
	
.dets {
	padding: 0;
	margin: 0;
	color: #464646;
	font-size: 16px;
	font-weight: 600;
	margin-top: -18px;
	border-top: 3px solid #FF9200;
	margin-left: 55px;
	margin-top: -14px;
}
.nobod {
	border: none;
}
.dets12 {
	padding: 0;
	margin: 0;
	color: #464646;
	font-size: 16px;
	font-weight: 600;
	margin-top: 34px;
	position: relative;
	
}
.block-row-21 {
	text-align: center;
	height: 85px;
}
.block-row-21 h2 {
	font-size: 46px;
	font-weight: 200;
}
.bgofrow {
	background: url(images/bgabout.png) repeat 100% 100% !important;
	padding: 45px 0px;
}
.bgofrow h1 {
	font-size: 54px;
	color: #fff;
	font-weight: 700;
}
.block-row-2.nopadd {
	padding-top: 0px;
}

.backgorundofiphone {
	background: url("images/illsu.jpg");
	height: 542px;
	margin-bottom: 91px;
}

.iphonescreen {
	background: url("https://cdn.lyft.com/pagelauncherdatastore/phone@1x.c7273ad8.png");
	position: relative;

	background-position: center;
	background-repeat: no-repeat;
}

.carousel-inner {
	position: relative;
	width: 354px;
	overflow: hidden;
	margin: 0 auto;
	height: 800px;
}
.active {
	display: block !important;
}
.iphonescreen img {
	height: 597px !important;
	padding-top: 162px;
	width: 299px !important;
	padding-left: 59px;
}
#myCarousel22 .glyphicon {
	color: white;
}
.sliderin li {
	display: none;
}
.zropad{
	
	padding:0 !important;
}
	</style>
	<body>
		<div class="bgofrow">
			<div class="container text-center">
				<h1>How It Works</h1>
				
			</div>
	</div>
		
		<div class="body-content12 zropad">
		<div class="backgorundofiphone">
		<div class="container">
  
  <div class="iphonescreen">
  <div id="myCarousel22" class="carousel slide" data-ride="carousel" data-interval="1000">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Los Angeles" style="width:100%;">
		
      </div>

      <div class="item">
        <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="Chicago" style="width:100%;">
		
      </div>
    
      <div class="item">
        <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="New york" style="width:100%;">
		
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel22" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel22" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	</div>
	





  </div>
			
			</div>	
				
				
			
        <div class="block-row-2 nopadd">
            <div class="row11">
                <div class="col-sm-12">
                   <ul class="sliderin">
                   <li class="active">
					<div class="how-row-1">
                        <div class="how-col-1">
                            <img src="images/choos-works.png">
                        </div>
                        <div class="how-col-2">
                            <h5>Choose Your Service</h5>
                            <p>
                                Select which service you need : package pick-up and delivery, item purchase, item exchange/return, eats delivery, ride sharing, or professional services.    
                            </p>
                        </div>
                    </div>
					</li><li>
                    <div class="how-row-1 space">
                        <div class="how-col-1">
                            <img src="images/order-works.png">
                        </div>
                        <div class="how-col-2">
                            <h5>Place Your Order:</h5>
                            <p>
                         Provide the requested app details and information needed to service your request.<br>Get  your cost estimate upfront.<br>Submit your request.       
                            </p>
                        </div>
                    </div>
					</li><li>
                    <div class="how-row-1 space2">
                        <div class="how-col-1">
                            <img src="images/collect-works.png">
                        </div>
                        <div class="how-col-collect-2">
                            <h5>Receive and Enjoy:</h5>
                            <p>
                               Enjoy all the convenience, time, and money you have saved as your driver/professional promptly fulfills your service request.  
                            </p>
                        </div>
                    </div></li>
					<li>
                    <div class="how-row-1 space2">
                        <div class="how-col-1">
                            <img src="images/collect-works.png">
                        </div>
                        <div class="how-col-collect-2">
                            <h5>Receive and Enjoy:</h5>
                            <p>
                               Enjoy all the convenience, time, and money you have saved as your driver/professional promptly fulfills your service request.  
                            </p>
                        </div>
                    </div></li>
					</ul>
                </div>
               
            </div><!--row-->
        </div>
		
			
			</div>
    </div><!--container-->
</div>
<script>

$('#myCarousel22').bind('slide.bs.carousel', function (e) {

if(e.direction == 'left')
{
		if($('.sliderin').find('.active').next().length){
			$('.sliderin').find('.active').removeClass('active').next().addClass('active');
		} else {
			$('.sliderin').find('.active').removeClass('active');
			$('.sliderin > li').first().addClass('active');
		}
} else if(e.direction == 'right')
{
	if($('.sliderin').find('.active').prev().length){
			$('.sliderin').find('.active').removeClass('active').prev().addClass('active');
		} else {
			$('.sliderin').find('.active').removeClass('active');
			$('.sliderin > li').last().addClass('active');
		}
}
		
});


</script>
<div id="body2">
@include("includes.footer")
</div>