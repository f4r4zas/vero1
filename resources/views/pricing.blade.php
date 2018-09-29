@include("includes.header")
<span class="howhide">

@include("includes.full_header")
</span>
<style type="text/css">

	.form-horizontal{
		padding:100px;	
	}

	
</style>

<div class="container">
	<p class="clearfix"></p>
	<div class="col-md-12">


		<form class="form-horizontal">

			<h2>Fare Estimate</h2>

			<br>
			<br>

			<div class="col-md-4">
				<input type="text" placeholder="Enter pick-up Location" class="form-control">
			</div>
			<div class="col-md-4">
				<input type="text" placeholder="Enter drop-off Location" class="form-control">
			</div>
			<div class="col-md-4">
				<input type="button" class="form-control btn-primary" value="Get Estimate">
			</div>
		
		</form>

	</div><!-- Form -->
</div>

@include('includes.footer')