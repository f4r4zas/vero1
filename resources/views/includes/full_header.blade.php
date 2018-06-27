<div class="home-reg-banner	">
    <div class="top-nav-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo-wrap">
                        <a href="{{ URL::to("/") }}"><img src="images/ver-logo.png"></a>
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
                                        <li><a href="{{ URL::to("/how-it-works") }}">How it works</a></li>
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