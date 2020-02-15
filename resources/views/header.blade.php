 
<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>Webmarket HTML Template - Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">

    <!--  Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>
    
    <!-- Twitter Bootstrap -->
    <link href="webmarket/stylesheets/bootstrap.css" rel="stylesheet">
    <link href="webmarket/stylesheets/responsive.css" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="webmarket/js/rs-plugin/css/settings.css" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="webmarket/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="webmarket/js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
    <!-- main styles -->
     
    <link href="webmarket/stylesheets/main.css" rel="stylesheet">
     
    

    <!-- Modernizr -->
    <script src="webmarket/js/modernizr.custom.56918.js"></script>    

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="webmarket/images/apple-touch/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="webmarket/images/apple-touch/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="webmarket/images/apple-touch/72.png">
    <link rel="apple-touch-icon-precomposed" href="webmarket/images/apple-touch/57.png">
    <link rel="shortcut icon" href="webmarket/images/apple-touch/57.png">
  </head>

   
  <body class="">
    
    <div class="master-wrapper">
     
    <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
    <header id="header">
        <div class="container">
            <div class="row">
                
                <!--  ==========  -->
                <!--  = Logo =  -->
                <!--  ==========  -->
                <div class="span7">
                    <a class="brand" href="/">
                        <img src="webmarket/images/logo.png" alt="Webmarket Logo" width="48" height="48" /> 
                        <span class="pacifico">CheshmeSaran</span> 
                        <span class="tagline">چشمه ساران</span> 
                    </a>
                </div>
                
                <!--  ==========  -->
                <!--  = Social Icons =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="topmost-line">
                        <div class="lang-currency">
                            {{-- <div class="dropdown js-selectable-dropdown">
                                <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text"><i class="famfamfam-flag-gb"></i> انگلیسی (EN)</span> <b class="caret"></b></a>
                                <!-- for all available country flags look the styles in lib/components/_flags.scss -->
                                <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                                    <li><a href="#"><i class="famfamfam-flag-gb"></i> انگلیسی (EN)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-si"></i> اسلوانیایی (SI)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-de"></i> آلمانی (DE)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-fr"></i> فرانسوی (FR)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-es"></i> اسپانیولی (ES)</a></li>
                                </ul>
                            </div>
                            <div class="dropdown js-selectable-dropdown">
                                <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text">USD ($)</span> <b class="caret"></b></a>
                                <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                                    <li><a href="#">USD ($)</a></li>
                                    <li><a href="#">EUR (€)</a></li>
                                    <li><a href="#">YEN (¥)</a></li>
                                    <li><a href="#">GBP (£)</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="top-right">
                        <div class="icons">
                            <a href="http://www.facebook.com/ProteusNet"><span class="zocial-facebook"></span></a>
                            {{-- <a href="skype:primozcigler?call"><span class="zocial-skype"></span></a> --}}
                            <a href="https://twitter.com/proteusnetcom"><span class="zocial-twitter"></span></a>
                            {{-- <a href="http://eepurl.com/xFPYD"><span class="zocial-rss"></span></a>
                            <a href="#"><span class="zocial-wordpress"></span></a>
                            <a href="#"><span class="zocial-android"></span></a>
                            <a href="#"><span class="zocial-html5"></span></a>
                            <a href="#"><span class="zocial-windows"></span></a>
                            <a href="#"><span class="zocial-apple"></span></a> --}}
                        </div>
                        <div class="register">
                            <a href="#loginModal" role="button" data-toggle="modal">ورود</a> یا  
                            <a href="#registerModal" role="button" data-toggle="modal">ثبت نام</a>
                        </div>
                    </div>
                </div> <!-- /social icons -->
            </div>
        </div>
    </header>
    
    <!--  ==========  -->
    <!--  = Main Menu / navbar =  -->
    <!--  ==========  -->
    <div class="navbar navbar-static-top" id="stickyNavbar">
      <div class="navbar-inner">
        <div class="container">
          <div class="row">
            <div class="span9">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                
                <!--  ==========  -->
                <!--  = Menu =  -->
                <!--  ==========  -->
                <div class="nav-collapse collapse">
                  <ul class="nav" id="mainNavigation">
                    <li class="dropdown active">
                        <a href="index.html" class="dropdown-toggle"> دسته بندی کالا <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown active">
                                <a href="/showmobile"><i class="icon-caret-left pull-right visible-desktop"></i> موبایل</a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="index.html"> سامسونگ </a></li>
                                    <li><a href="index-grass-green.html"> اپل </a></li>
                                    <li><a href="index-oil-green.html"> شیائومی </a></li>
                                    <li><a href="index-gray.html"> آنر </a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="index-boxed-solid.html"><i class="icon-caret-left pull-right visible-desktop"></i> لپتاپ </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-boxed-solid.html"> ایسوس </a></li>
                                    <li><a href="index-boxed-pattern.html"> لنوو </a></li>
                                    <li><a href="index-boxed-pattern.html"> سونی </a></li>
                                    <li><a href="index-boxed-pattern.html"> دل </a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="index-boxed-solid.html"><i class="icon-caret-left pull-right visible-desktop"></i> دوربین </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-boxed-solid.html"> کنون </a></li>
                                    <li><a href="index-boxed-pattern.html"> نیکون </a></li>
                                    <li><a href="index-boxed-pattern.html"> سامسونگ </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="shop.html" class="dropdown-toggle"> تخفیف ها و پیشنهادها <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.html"> کالاهای شگفت انگیز </a></li>
                            <li><a href="/digitalkala"> کالای دیجیتال </a></li>
                            {{-- <li><a href="product.html">محصول تکی</a></li>
                            <li><a href="shop-search.html">نتایج جستجو</a></li> --}}
                        </ul>
                    </li>
                    {{-- <li class="dropdown">
                        <a href="blog.html" class="dropdown-toggle">بلاگ <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">قالب بندی پیش فرض</a></li>
                            <li><a href="blog-single.html">تک نوشته</a></li>
                            <li><a href="blog-search.html">نتایج جستجو</a></li>
                            <li><a href="404.html">صفحه 404</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="features.html" class="dropdown-toggle">امکانات <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li><a href="icons.html">آیکن ها</a></li>
                            <li class="dropdown">
                                <a href="features.html" class="dropdown-toggle"><i class="icon-caret-left pull-right visible-desktop"></i> همه امکانات</a>
                                <ul class="dropdown-menu">
                                    <li><a href="features.html#headings">سرخط ها</a></li>
                                    <li><a href="features.html#alertBoxes">جعبه های هشدار</a></li>
                                    <li><a href="features.html#tabs">تب ها</a></li>
                                    <li><a href="features.html#buttons">دکمه ها</a></li>
                                    <li><a href="features.html#toggles">تاگل ها</a></li>
                                    <li><a href="features.html#quotes">نقل قول ها</a></li>
                                    <li><a href="features.html#gallery">گرید های گالری</a></li>
                                    <li><a href="features.html#code">کد</a></li>
                                    <li><a href="features.html#columns">ستون ها</a></li>
                                    <li><a href="features.html#maps">نقشه ها</a></li>
                                    <li><a href="features.html#progress">نوار های پیشرفت</a></li>
                                    <li><a href="features.html#tables">جداول</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    <li><a href="about-us.html">درباره ما</a></li>
                    <li><a href="contact.html">تماس با ما</a></li>
                  </ul>
                  
                  <!--  ==========  -->
                  <!--  = Search form =  -->
                  <!--  ==========  -->
                  <form class="navbar-form pull-right" action="#" method="get">
                      <button type="submit"><span class="icon-search"></span></button>
                      <input type="text" class="span1" name="search" id="navSearchInput">
                  </form>
                </div><!-- /.nav-collapse -->
            </div>
            
            <!--  ==========  -->
            <!--  = Cart =  -->
            <!--  ==========  -->
            <div class="span3">
                <div class="cart-container" id="cartContainer">
                    <div class="cart">
                        <p class="items">سبد خرید <span class="dark-clr">(3)</span></p>
                        <p class="dark-clr hidden-tablet">$1816.90</p>
                        <a href="/checkout-step1" class="btn btn-danger">
                            <!-- <span class="icon icons-cart"></span> -->
                            <i class="icon-shopping-cart"></i>
                        </a>
                    </div>
                    <div class="open-panel">
                         
                        <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="webmarket/images/dummy/cart-items/cart-item-1.jpg" width="124" height="124" alt="cart item" />
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">کلاه زمستانی</a></strong>
                                <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>$4957</strong>
                            </div>
                        </div>
                         
                        <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="webmarket/images/dummy/cart-items/cart-item-2.jpg" width="124" height="124" alt="cart item" />
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">کمربند اسپورت</a></strong>
                                <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>$1318</strong>
                            </div>
                        </div>
                         
                        <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="webmarket/images/dummy/cart-items/cart-item-3.jpg" width="124" height="124" alt="cart item" />
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">کیف پول مردانه</a></strong>
                                <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>$3840</strong>
                            </div>
                        </div>
                         
                        <div class="summary">
                            <div class="line">
                                <div class="row-fluid">
                                    <div class="span6">هزینه ارسال :</div>
                                    <div class="span6 align-right">$4.99</div>
                                </div>
                            </div>
                            <div class="line">
                                <div class="row-fluid">
                                    <div class="span6">جمع کل :</div>
                                    <div class="span6 align-right size-16">$357.81</div>
                                </div>
                            </div>
                        </div>
                        <div class="proceed">
                            <a href="/checkout-step1" class="btn btn-danger pull-right bold higher">تصویه حساب <i class="icon-shopping-cart"></i></a>
                            <small>هزینه ارسال بر اساس منطقه جغرافیایی محاسبه میشود. <a href="#">اطلاعات بیشتر</a></small>
                        </div>
                    </div>
                </div>
            </div> <!-- /cart -->
          </div>
        </div>
      </div>
    </div> <!-- /main menu -->
    </div>
    
    
    