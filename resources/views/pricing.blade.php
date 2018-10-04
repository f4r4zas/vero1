@include("includes.header")
<span class="howhide">

@include("includes.full_header")
</span>
<style type="text/css">
.bgofrow {
	background: url(images/bgabout.png) repeat 100% 100% !important;
	padding: 45px 0px;
}
.bgofrow h1 {
	font-size: 54px;
	color: #fff;
	font-weight: 700;
}
.form-horizontal {
	padding: 30px 0px;
}
 h2 {
	font-size: 42px;
	font-weight: 200;
	padding: 30px 0 0 0;
	margin: 0;
	text-transform: uppercase;
}
.inputtype {
	font-size: 1rem;
	min-height: 55px;
	padding: 31px 47px;
	border: 0;
	border-radius: .5rem;
	box-shadow: inset 0 2px 0 0 rgba(17,17,31,.25);
	transition: box-shadow .5s cubic-bezier(.19,1,.22,1);
	width: 100%;
	color: #11111f;
	margin-bottom: 8px;
	background: #f3f3f5;
}
.col-md-4.paddingsadj {
	padding-left: 0;
}
.s7mFmX {
	position: relative;
	top: -44px;
	left: 19px;
}
.btna .login-wrap a {
	padding: 18px 65px;
	margin: 0;
	border: 3px solid #ff9200;
	border-radius: 50px;
	color: #000;
	font-size: 13px;
	font-family: 'Montserrat', sans-serif;
	text-transform: uppercase;
	font-weight: bold;
	/* margin-top: 8px !important; */
	position: relative;
	top: 5px;
}
.form-control.inputtype {
	font-size: 18px;
}
.discalmers {
	max-width: 724px;
	margin: 25px 0px;
	font-size: 13px;
}
</style>
<div class="bgofrow">
			<div class="container text-center">
				<h1>Pricing</h1>
				
			</div>
	</div>
<div class="container">
	<p class="clearfix"></p>
	<div class="col-md-12">


		<form class="form-horizontal">

			<h2>Fare Estimate</h2>

			<br>
			<br>

			<div class="col-md-4 paddingsadj">
				<input type="text" placeholder="Enter pick-up Location" class="form-control inputtype">
				<div class="s7mFmX" data-reactid="88"><svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="1em" width="1em" viewBox="0 0 500 500" class="_2x-x95 T7qYZp" style="vertical-align:middle;" data-reactid="89"><g data-reactid="90"><circle cx="243.056" cy="243.056" r="243.056" transform="translate(6.944 6.944)" stroke="#000" data-reactid="91"></circle></g></svg></div>
			</div>
			<div class="col-md-4">
				<input type="text" placeholder="Enter drop-off Location" class="form-control inputtype">
				<div class="s7mFmX" data-reactid="88"><svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="1em" width="1em" viewBox="0 0 500 500" class="_2x-x95 T7qYZp" style="vertical-align:middle;" data-reactid="89"><g data-reactid="90"><circle cx="243.056" cy="243.056" r="243.056" transform="translate(6.944 6.944)" stroke="#000" data-reactid="91"></circle></g></svg></div>
			</div>
			
			
			<div class="col-sm-4 btna">
                    <div class="login-wrap">
                        <a href="#">Get Estimate</a>
                    </div>
                </div>
			
				
		
		
		</form>
		<div class="clear"></div>
		<p class="discalmers">Sample fares are ride share estimates only and do not reflect variations due to discounts, traffic delays or other factors. Actual fares may vary. You agree to pay the fare shown upon confirming your ride request. If your route or destination changes on trip, your fare may change based on the rates above and other applicable taxes, tolls, charges and adjustments. Subject to VERO1 Terms of Service.<p>

	</div><!-- Form -->
</div>

@include('includes.footer')