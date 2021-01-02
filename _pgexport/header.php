<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head>          
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">                                     
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body> 
        <div class="container-fluid yekan"> 
            <div class="row" style="height: 36px;background-color: #f9f9f9"> 
                <div class="col-ms-12 hidden-xs  hidden-sm text-right" style="font-size: 12pt"> 
                    <p id="text-header"><?php _e( 'به فروشگاه ما خوش امدید', 'xxx_xx' ); ?> <a href="login.html" style="text-decoration: none"><?php _e( 'ورود', 'xxx_xx' ); ?></a> <?php _e( 'یا', 'xxx_xx' ); ?> <a href="register.html" style="text-decoration: none"><?php _e( 'ثبت نام', 'xxx_xx' ); ?></a> </p> 
                </div>                 
            </div>             
        </div>
        <div class="container-fluid yekan"> 
            <div class="row" style="height: 91px;background-color: #ffffff"> 
                <div class=" col-md-3 hidden-xs hidden-sm" style="height: 91px"> 
                    <img id="brand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" width="160px"> 
                </div>                 
                <div class=" col-md-6 hidden-xs hidden-sm text-center" style="height: 91px"> 
                    <div id="btn_serch"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/search.png"> 
                    </div>                     
                    <input placeholder="جستجو کنید" id="input_serch" type="text"> 
                </div>                 
                <div class=" col-md-3 hidden-xs hidden-sm " style="height: 91px"> 
                    <div id="basket"> 
                        <div id="basket_left"> 
                            <div id="basket_total"> 
                                <p><?php _e( '0', 'xxx_xx' ); ?></p> 
                            </div>                             
                        </div>                         
                        <div id="basket_rigth"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/basket.png" width="28px" height="24px"> 
                            <p><?php _e( '0 تومان', 'xxx_xx' ); ?></p> 
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </div>         
        <?php
            PG_Smart_Walker_Nav_Menu::$options['template'] = '<div class="row {CLASSES}" id="{ID}"> 
                            <nav class="navbar navbar-default"> 
                                <div class="navbar-header"> 
                                    <div class="col-xs-1 col-sm-1  hidden-lg hidden-md"> 
                                        <img src="img/user-silhouette.png" width="24px" style="margin-top: 10px"> 
                                    </div>                         
                                    <div class="col-xs-1 col-sm-1  hidden-lg hidden-md"> 
                                        <img src="img/basket.png" width="24px" style="margin-top: 10px"> 
                                    </div>                         
                                    <div class="col-xs-1 col-sm-1  hidden-lg hidden-md"> 
                                        <img src="img/musica-searcher.png" width="24px" style="margin-top: 10px"> 
                                    </div>                         
                                    <div class="col-xs-4 col-sm-4  hidden-lg hidden-md"> 
                                        <img src="img/logo.png" width="100px"> 
                                    </div>                         
                                    <div class="col-xs-3 col-sm-3  hidden-lg hidden-md pull-right"> 
                                        <button type="button" data-target="#navdiv" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed"> 
                                            <span class="sr-only"></span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span> 
                                        </button>                             
                                    </div>                         
                                </div>                     
                                <div class="collapse navbar-collapse" id="navdiv"> 
                                    <ul id="navul" class="nav navbar-nav navbar-right"> 
                                        <li>
                                            <a {ATTRS}>{TITLE}</a>
                                        </li>                             
                                        <li>
                                            <a>تماس با ما</a>
                                        </li>                             
                                        <li>
                                            <a>حراجی</a>
                                        </li>                             
                                        <li>
                                            <a>دیسک</a>
                                        </li>                             
                                        <li>
                                            <a>اکانت</a>
                                        </li>                             
                                        <li>
                                            <a>خانه</a>
                                        </li>                             
                                    </ul>                         
                                </div>                     
                            </nav>                 
                        </div>';
            wp_nav_menu( array(
                'menu' => 'sss',
                'container' => '',
                'items_wrap' => '<div class="container-fluid yekan %2$s" id="%1$s">%3$s</div>',
                'walker' => new PG_Smart_Walker_Nav_Menu()
        ) ); ?> 
        <div class="container-fluid yekan"> 
            <div class="row"> 
                <div class="col-md-12" style="position: relative"> 
                    <div style="width: 80%" id="myCarousel" class="carousel slide" data-ride="carousel"> 
                        <!-- Indicators -->                         
                        <ol class="carousel-indicators"> 
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>                             
                            <li data-target="#myCarousel" data-slide-to="1"></li>                             
                            <li data-target="#myCarousel" data-slide-to="2"></li>                             
                        </ol>                         
                        <!-- Wrapper for slides -->                         
                        <div class="carousel-inner"> 
                            <div class="item active"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/20.jpg" alt="Los Angeles" style="width:auto;"> 
                            </div>                             
                            <div class="item"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/30.jpg" alt="Chicago" style="width:auto;"> 
                            </div>                             
                            <div class="item"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/40.jpg" alt="New york" style="width:auto"> 
                            </div>                             
                        </div>                         
                        <!-- Left and right controls -->                         
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only"><?php _e( 'Previous', 'xxx_xx' ); ?></span> </a> 
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only"><?php _e( 'Next', 'xxx_xx' ); ?></span> </a> 
                    </div>                     
                </div>                 
            </div>             
        </div>
        <div class="container-fluid yekan">