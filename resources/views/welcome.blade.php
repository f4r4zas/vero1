@include('includes.header')
<div class="home-reg-banner	">
    <div class="top-nav-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo-wrap">
                        <a href=""><img src="images/ver-logo.png"></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="top-nav">
                        <nav class="navbar-default" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbarCollapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse navbarCollapse">
                                    <ul>
                                        <li><a href="#">Overview</a></li>
                                        <li><a href="#">How it works</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Magazine</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="login-wrap">
                        <a href="{{ URL::to("/login") }}">login</a>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--top-nav-bg-->

    <div class="container">
        <div class="col-sm-12 home-banner-wrap">
            <div class="banner-opt">
                <h1>Bibendum Auctor nisi elit</h1>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
                <input type="text" name="" value="Zip/Postal Code"><label class="location"></label>
            </div>
        </div>
    </div>
</div><!--drive-reg-banner-->
<div class="body-content">
    <div class="container">
        <div class="block-row-1">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-data-1">
                        <h2>Bibendum Auctor nisi elit</h2>
                        <p>Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor</p>
                        <a href="#"><img src="images/appstore-button.png"></a>
                        <a href="#"><img src="images/playstore-button.png"></a>
                    </div>
                </div>
            </div><!--row-->
        </div>
        <div class="block-row-2">
            <div class="row">
                <div class="col-sm-12">
                    <h2>How It Works</h2>
                    <div class="how-row-1">
                        <div class="how-col-1">
                            <img src="images/choos-works.png">
                        </div>
                        <div class="how-col-2">
                            <h5>Choose Your Destination</h5>
                            <p>
                                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                            </p>
                        </div>
                    </div>
                    <div class="how-row-1 space">
                        <div class="how-col-1">
                            <img src="images/order-works.png">
                        </div>
                        <div class="how-col-2">
                            <h5>Place an Order</h5>
                            <p>
                                Consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan.
                            </p>
                        </div>
                    </div>
                    <div class="how-row-1 space2">
                        <div class="how-col-1">
                            <img src="images/collect-works.png">
                        </div>
                        <div class="how-col-collect-2">
                            <h5>Collect and Enjoy</h5>
                            <p>
                                Nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                            </p>
                        </div>
                    </div>
                </div>
                <hr></hr>
            </div><!--row-->
        </div>
        <div class="block-row-3">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-data-3">
                        <h2>The Better Way to Order</h2>
                        <p>
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
                            <br><br>
                            Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti
                        </p>
                    </div>
                </div>
            </div><!--row-->
        </div>
    </div><!---container-->
</div>
<div class="services-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="services-colum ">
                    <img src="images/nocash-ico.png">
                    <h6>No cash? No problem!</h6>
                    <p>
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="services-colum">
                    <img src="images/heart-ico.png">
                    <h6>Stores & Restaurants love Vero1</h6>
                    <p>
                        It cuts down on card processing time and streamlines the process of purchasing food and drink. Your order status will be clearly updated as the bar or restaurant actons your order.
                    </p>
                </div>
            </div>
        </div>
    </div><!--container-->
</div><!--services-wrap-->
<div class="register-block">
    <div class="container">
        <div class="col-sm-12">
            <div class="cont-row">
                <h1>Register Now</h1>
                <h4>Contact us now</h4>
                <a href="#">info@vero1.com</a>
                <span>Are you a Rider, Retailer or a Restaurant?</span>
            </div>
        </div>
    </div><!--container-->
</div><!--register-block-->
@include('includes.footer')