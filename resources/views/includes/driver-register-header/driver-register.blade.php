<h1>Driver Registration </h1>
<div class="steps-wrap">

    <ul class="steps">
        <li><a class="<?php if(empty($data["step"])){ echo "active"; } ?>" href="{{ URL::to("/driver-register") }}"><i class="glyphicon glyphicon-ok"></i></a></li>
        <li><a class="<?php if($data["step"] == 2){ echo "active"; } ?>" href="{{ URL::to("/driver-register/2") }}" href="#"><i class="glyphicon glyphicon-ok"></i></a></li>
        <li><a class="<?php if($data["step"] == 3){ echo "active"; } ?>" href="{{ URL::to("/driver-register/3") }}"  href="#"><i class="glyphicon glyphicon-ok"></i></a></li>
    </ul>
    <ul class="details">
        <li><p>Personal Information</p></li>
        <li><p>Vehicle Information</p></li>
        <li><p>Upload Documents</p></li>
    </ul>
</div><!--steps-wrap-->
