
        <!-- //////////////////////////////////
	//////////////MAIN HEADER///////////// 
	////////////////////////////////////-->
        <div class="top-main-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="<?php echo base_url(); ?>" class="logo mt5">
                            <img src="<?php echo base_url(); ?>vito.png" style="max-height: 70px;max-width: 70px;" alt="Image Alternative text" title="Image Title" />
                        </a>
                    </div>
                    <div class="col-md-6 col-md-offset-4">
                        <div class="pull-right">
                            <ul class="header-features">
                                <li><i class="fa fa-phone"></i>
                                    <div class="header-feature-caption">
                                        <h5 class="header-feature-title">+1-202-555-0140</h5>
                                        <p class="header-feature-sub-title">24/7 phone assistance</p>
                                    </div>
                                </li>
                                <li><i class="fa fa-truck"></i>
                                    <div class="header-feature-caption">
                                        <h5 class="header-feature-title">Free Delivery</h5>
                                        <p class="header-feature-sub-title">on all orders over $100</p>
                                    </div>
                                </li>
                                <li><i class="fa fa-asterisk"></i>
                                    <div class="header-feature-caption">
                                        <h5 class="header-feature-title">Huge Bonuses</h5>
                                        <p class="header-feature-sub-title">shopping with ease</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav class="navmenu">
                            <ul>
                            	<li class="active"><a href="<?php echo base_url(); ?>">Home</a></li><li>
                            	<a href="#">Category</a>
                            		<ul id="col-3-menu">
                            		<?php foreach($Category as $Cat){ ?>
                            			<li id="multicol"><a href="#"><?=$Cat?></a></li>
                            		<?php } ?>
                            		</ul>
                            	</li><li>
                            	<a href="#">Top Stores</a>
                            		<ul id="col-3-menu">
                            			<?php foreach($Category as $Cat){ ?>
                            				<li id="multicol"><a href="#"><?=$Cat?></a></li>
                            			<?php } ?>
                            		</ul>
                            	</li><li>
                            		<a href="#">Local Offers</a>
                            		<ul id="col-3-menu">
	                            		<?php foreach($Category as $Cat){ ?>
	                            			<li id="multicol"><a href="#"><?=$Cat?></a></li>
	                            		<?php } ?>
                            		</ul>
                            	</li><li>
                            		<a href="#">Bank Offers</a>
                            		<ul id="col-3-menu">
	                            		<?php foreach($Category as $Cat){ ?>
	                            			<li id="multicol"><a href="#"><?=$Cat?></a></li>
	                            		<?php } ?>
                            		</ul>
                            	</li><li>
                            		<a href="#">Top Offers</a>
                            		<ul id="col-2-menu">
	                            		<li id="multicol"><a href="#">Top offer here</a></li>
	                            		<li id="multicol"><a href="#">Top offer here</a></li>
	                            		<li id="multicol"><a href="#">Top offer here</a></li>
	                            		<li id="multicol"><a href="#">Top offer here</a></li>
	                            		<li id="multicol"><a href="#">Top offer here</a></li>
	                            		<li id="multicol"><a href="#">Top offer here</a></li>
                            		</ul>
                            	</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4">
                        <ul class="login-register">
                            <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>Sign in</a>
                            </li>
                            <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i class="fa fa-edit"></i>Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- LOGIN REGISTER LINKS CONTENT -->
        <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-sign-in dialog-icon"></i>
            <h3>Member Login</h3>
            <h5>Welcome back, friend. Login to get started</h5>
            <form class="dialog-form">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@domain.com" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" class="form-control">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me
                    </label>
                </div>
                <input type="submit" value="Sign in" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
                <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
                </li>
                <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
                </li>
            </ul>
        </div>


        <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-edit dialog-icon"></i>
            <h3>Member Register</h3>
            <h5>Ready to get best offers? Let's get started!</h5>
            <form class="dialog-form">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@domain.com" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" placeholder="Type your password again" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Your Area</label>
                            <input type="password" placeholder="Boston" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Postal/Zip</label>
                            <input type="password" placeholder="12345" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Get hot offers via e-mail
                    </label>
                </div>
                <input type="submit" value="Sign up" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
                <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
                </li>
            </ul>
        </div>


        <div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="icon-retweet dialog-icon"></i>
            <h3>Password Recovery</h3>
            <h5>Fortgot your password? Don't worry we can deal with it</h5>
            <form class="dialog-form">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="span12">
                <input type="submit" value="Request new password" class="btn btn-primary">
            </form>
        </div>
        <!-- END LOGIN REGISTER LINKS CONTENT -->
        
        
		<!-- SEARCH AREA -->
        <form class="search-area form-group search-area-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 clearfix">
                        <label><i class="fa fa-search"></i><span>I am searching for</span>
                        </label>
                        <div class="search-area-division search-area-division-input">
                            <input class="form-control" type="text" placeholder="Travel Vacation" />
                        </div>
                    </div>
                    <div class="col-md-3 clearfix">
                        <label><i class="fa fa-map-marker"></i><span>In</span>
                        </label>
                        <div class="search-area-division search-area-division-location">
                            <input class="form-control" type="text" placeholder="Boston" />
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END SEARCH AREA -->

        <div class="gap"></div>
