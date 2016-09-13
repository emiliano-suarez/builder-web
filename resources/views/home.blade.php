<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9" class="ie" lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie" lang="en-US">
<![endif]-->
<!--[if !IE]>
<html lang="en-US">
<![endif]-->

<!-- START HEAD -->
<head>
    <meta charset="UTF-8"/>

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes"/>

    <title>Builder | only for creative minds.</title>

    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css"/>
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css"/>
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="style.css"/>

    <link rel='stylesheet' id='custom-css' href='css/custom.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css' href='css/responsive.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='tipsy-css' href='css/tipsy.css' type='text/css' media='all'/>

    <link rel='stylesheet' id='fonts-css' href='css/font-awesome.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='slide-details-css' href='portfolios/pinterest/css/style.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='shortcode-css' href='css/shortcodes.css' type='text/css' media='all'/>

    <link rel='stylesheet' id='colorbox-css' href='css/colorbox.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='custom-button-mfast-3-css' href='css/buttons/mfast-3.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='flexslider-css' href='sliders/flexslider-elegant/css/slider.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='rs-css' href='sliders/revolution-slider/css/slider.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='rs-settings-css' href='sliders/revolution-slider/rs-plugin/css/settings.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='rs-captions-css' href='sliders/revolution-slider/rs-plugin/css/captions.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='cycle-slider-css' href='sliders/cycle/css/cycle.css' type='text/css' media='all'/>


    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png"/>
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png"/>
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png"/>

    <link rel='stylesheet' id='thickbox-css' href='js/thickbox/thickbox.css' type='text/css' media='all'/>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
</head>
<!-- END HEAD -->

<!-- START BODY -->
<body class="home page no_js responsive stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">

<!-- START WRAPPER -->
<div id="wrapper" class="container group">
<!-- START TOP BAR -->

@foreach ($materials as $material)
    <p>Material: {{ $material->title }}</p>
@endforeach

<!-- START TOP BAR -->
<div id="topbar">
    <div class="container">
        <div class="row">
            <div id="last-tweets-3" class="widget-first span6 widget last-tweets">
                <h3>Last Tweets</h3>

                <div class="list-tweets-3"></div>

                <script type="text/javascript">
                    jQuery(function ($) {
                        $('#last-tweets-3 .list-tweets-3').tweetable({
                            listClass: 'tweets-widget-3',
                            username: 'YIW',
                            time: false,
                            limit: 3,
                            replies: false
                        });
                    });
                </script>

            </div>

            <div id="text-8" class=" widget-last span6 widget widget_text">
                <div class="textwidget">
                    <a href="# " class="socials-small facebook-small" title="Facebook">facebook</a>

                    <a href="#" class="socials-small rss-small" title="Rss">rss</a>

                    <a href="#" class="socials-small twitter-small" title="Twitter">twitter</a>

                    <a href="#" class="socials-small google-small" title="Google">google</a>

                    <a href="#" class="socials-small linkedin-small" title="Linkedin">linkedin</a>

                    <a href="#" class="socials-small pinterest-small" title="Pinterest">pinterest</a></div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(function ($) {
        var twitterSlider = function () {
            $('#topbar .last-tweets ul').addClass('slides');
            $('#topbar .last-tweets').flexslider({
                animation: "fade",
                slideshowSpeed: 5 * 1000,
                animationDuration: 700,
                directionNav: false,
                controlNav: false,
                keyboardNav: false
            });
        };
        $('#topbar .last-tweets > div').bind('tweetable_loaded', function () {
            twitterSlider();
        });
    });
</script>

<!-- END TOP BAR -->

<!-- START HEADER -->
<div id="header" class="group">
    <div class="group container">
        <div class="row">
            <div class="span12">

                <div class="row">
                    <!-- START LOGO -->
                    <div id="logo" class="span4 group">
                        <a id="logo-img" href="index.html" title="celestino">
                            <img src="images/celestino1.png" title="celestino" alt="celestino" />
                        </a>

                        <p id="tagline">only for creative minds.</p>
                    </div>
                    <!-- END LOGO -->
                    <div id="menu" class="span8 group">
                        <!-- START MAIN NAVIGATION -->
                        <div class="menu">
                            <ul id="nav" class="sf-menu">
                                <li class="nav-icon-hi current_page_item">
                                    <a href="index.html">
                                        Home
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-icon-open-small current-menu-item">
                                            <a href="home-ii.html">
                                                Home Version II
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-folder-small">
                                            <a href="home-iii.html">
                                                Home Version III
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-target-small">
                                            <a href="home-iv.html">
                                                Home Version IV
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-design-small">
                                            <a href="home-v.html">
                                                Home Version V
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-cert-small">
                                            <a href="home-vi.html">
                                                Home Version VI (Grid slider)
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-book-small">
                                            <a href="home-vii.html">
                                                Home Version VII
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-cake-small">
                                            <a href="home-viii.html">
                                                Home Version VIII
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-bulb-small ">
                                            <a href="home-ix.html">
                                                Home version IX (Blog)
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-icon-monitor">
                                    <a href="#">
                                        Sliders
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="revolution-slider.html">
                                                Revolution Slider
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="images-grid.html">Images Grid
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sliders-thumbnails.html">Thumbnails
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elastic.html">
                                                Elastic
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="slider-flexslider-classic.html">
                                                Flexslider Classic
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="flexslider-elegant.html">
                                                Flexslider Elegant
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cycle.html">
                                                Cycle
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="slider-flash.html">
                                                Slider Flash
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-icon-doc">
                                    <a href="#">
                                        Pages
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-icon-team-small ">
                                            <a href="pages-about.html">
                                                About
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-bubble-small ">
                                            <a href="pages-testimonials.html">
                                                Testimonials
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-contact-small ">
                                            <a href="pages-contact.html">
                                                Contact
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-bomb-small">
                                            <a href="error-404.html">
                                                Error 404
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-icon-works">
                                    <a href="#">
                                        Portfolio
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="portfolio-pinterest-style.html">
                                                Portfolio Pinterest Style
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-detail.html">
                                                Portfolio Slide Detail
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-filterable.html">
                                                Portfolio Filterable
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-2-columns.html">
                                                Portfolio 2 Columns
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-3-columns.html">
                                                Portfolio 3 Columns
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-4-columns.html">
                                                Portfolio 4 Columns
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-big-image.html">
                                                Portfolio Big Image
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-slider.html">
                                                Portfolio Slider
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-full-description.html">
                                                Portfolio Full Description
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-icon-newspaper">
                                    <a href="#">
                                        Blog
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-big-image.html">
                                                Big image
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-small-image.html">
                                                Small image
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-elegant.html">
                                                Elegant
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-blog-pinterest-style.html">
                                                Pinterest Style
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-icon-lab">
                                    <a href="#">
                                        Shortcodes
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="sc-typography.html">
                                                Typography
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-icon-section.html">
                                                Icon section
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-alert-box-buttons.html">
                                                Alert box &#038; Buttons
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-table-box-prices.html">
                                                Table &#038; Box prices
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-media-widgets.html">
                                                Media &#038; Widgets
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-mix-various.html">
                                                Mix &#038; Various
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END MAIN NAVIGATION -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="border-header"></div>
</div>
<!-- END HEADER -->

<!-- START SLIDER -->
<div id="slider-cycle" class="slider slider-cycle cycle no-responsive slider_cycle group" style="height:485px;">
    <ul class="slider">
        <li>
            <div class="slide-holder" style="background:  url('images/slider/003.jpg') no-repeat center; height:483px;">
                <div class="slide-content-holder container" style="height:483px;">
                    <div class="slide-content-holder-content" style="position: absolute; top:80px;left:500px;">
                        <div class="slide-title">
                            <h2 style="color:#fff">
                                CELESTINO. <span>STRONG. INTERACTIVE.</span>
                            </h2>
                        </div>
                        <div class="slide-content" style="color:#fff">
                            <p>Nam id quam a odio euismod pellentesque. Etiam congue rutrum risus non vestibulum.
                                Quisque a diam at ligula blandit consequat. Mauris ac mi velit, a tempor neque</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="slide-holder" style="background:  url('images/slider/002.jpeg') no-repeat center; height:483px;">
                <div class="slide-content-holder container" style="height:483px;">
                </div>
            </div>
        </li>
    </ul>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var yit_slider_cycle_fx = 'easing',
                yit_slider_cycle_speed = 800,
                yit_slider_cycle_timeout = 3000,
                yit_slider_cycle_directionNav = true,
                yit_slider_cycle_directionNavHide = true,
                yit_slider_cycle_autoplay = true;


        if ($.browser.msie && parseInt($.browser.version.substr(0, 1), 10) <= '8') {
            $('#slider-cycle ul.slider').anythingSlider({
                expand: true,
                startStopped: false,
                buildArrows: yit_slider_cycle_directionNav,
                buildNavigation: false,
                buildStartStop: false,
                delay: yit_slider_cycle_timeout,
                animationTime: yit_slider_cycle_speed,
                easing: yit_slider_cycle_fx,
                autoPlay: yit_slider_cycle_autoplay ? true : false,
                pauseOnHover: true,
                toggleArrows: false,
                resizeContents: true
            });
        } else {
            $('#slider-cycle ul.slider').anythingSlider({
                expand: true,
                startStopped: false,
                buildArrows: yit_slider_cycle_directionNav,
                buildNavigation: false,
                buildStartStop: false,
                delay: yit_slider_cycle_timeout,
                animationTime: yit_slider_cycle_speed,
                easing: yit_slider_cycle_fx,
                autoPlay: yit_slider_cycle_autoplay ? true : false,
                pauseOnHover: true,
                toggleArrows: yit_slider_cycle_directionNavHide ? true : false,
                onSlideComplete: function (slider) {
                },
                resizeContents: true,
                onSlideBegin: function (slider) {

                },
                onSlideComplete: function (slider) {

                }
            });

        }
    });
</script>
<div class="mobile-slider cycle">
    <div class="slider fixed-image container">
        <img src="images/fixed.jpeg" alt=""/>
    </div>
</div>

<!-- START PAGE META -->
<div id="page-meta" class="container">

    <!-- SLOGAN -->
    <div class="slogan">
        <h2>Another example of portfolio in home page</h2>

        <h3>...the 'pinterest' style!</h3>
    </div>

</div>
<!-- END PAGE META -->

<!-- START PRIMARY -->
<div id="primary" class="sidebar-no">
<div class="container group">
<div class="row">

<!-- START CONTENT -->
<div class="span12 content group">

<div class="page type-page status-publish hentry group">

<script>
    jQuery(document).ready(function ($) {
        $('.sidebar').remove();

        if (!$('#primary').hasClass('sidebar-no')) {
            $('#primary').removeClass().addClass('sidebar-no');
            $('.content').removeClass('span9').addClass('span12');
        }

    });
</script>

<div class="row">
<ul id="portfolio" class="pinterest pinterest thumbnails">
<li class="first work span3">
    <div class="thumbnail">
        <div class="picture_overlay">
            <img width="260" height="124" src="images/portfolios/001-260x124.jpg" class="attachment-thumb_portfolio_pinterest"
                 alt="001"/>

            <div class="overlay">
                <div>
                    <p>
                        <a href="images/portfolios/001.jpg" rel="lightbox" class="ch-info-lightbox">
                            <img src="images/icons/zoom.png" alt="Open Lightbox"/>
                        </a>

                        <a href="pinterest-bobmiler.html">
                            <img src="images/icons/project.png" alt=""/>
                        </a>
                    </p>

                    <p class="title">Bob Miller</p>

                    <p class="subtitle">photoshop</p>
                </div>
            </div>
        </div>


        <h4>
            <a href="pinterest-bobmiler.html">
                Bob Miller
            </a>
        </h4>

        <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, [...]</p>

        <div class="work-skillsdate">
            <p class="categories paragraph-links">
                <span class="meta-label">Project:</span> first
            </p>

            <p class="customer">
                <span class="meta-label">Customer:</span> Bob Miller - <a href="http://bmiller.com">bmiller.com</a>
            </p>

            <p class="workdate">
                <span class="meta-label">Year:</span> 2012
            </p>
        </div>


    </div>
</li>

<li class="work span3">
    <div class="thumbnail">

        <div class="picture_overlay">
            <img width="260" height="246" src="images/portfolios/00310-260x246.jpg" class="attachment-thumb_portfolio_pinterest"
                 alt="003"/>

            <div class="overlay">
                <div>
                    <p>
                        <a href="images/portfolios/00310.jpg" rel="lightbox" class="ch-info-lightbox">
                            <img src="images/icons/zoom.png" alt="Open Lightbox"/>
                        </a>

                        <a href="#">
                            <img src="images/icons/project.png" alt=""/>
                        </a>
                    </p>

                    <p class="title">Nili Studios</p>

                    <p class="subtitle">photoshop</p>
                </div>
            </div>
        </div>


        <h4>
            <a href="#">Nili Studios</a>
        </h4>

        <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum.
            Donec dapibus lacus nec sapien faucibus eget suscipit lorem [...]</p>

        <div class="work-skillsdate">
            <p class="customer">
                <span class="meta-label">Customer:</span> Nili Studios - <a href="http://nili.com">nili.com</a>
            </p>

            <p class="workdate">
                <span class="meta-label">Year:</span> 2011
            </p>
        </div>
    </div>
</li>


<li class="work span3">
    <div class="thumbnail">

        <div class="picture_overlay">
            <img width="260" height="164" src="images/portfolios/0029-260x164.jpg" class="attachment-thumb_portfolio_pinterest"
                 alt="002"/>

            <div class="overlay">
                <div>
                    <p>
                        <a href="images/portfolios/0022.jpg" rel="lightbox" class="ch-info-lightbox">
                            <img src="images/icons/zoom.png" alt="Open Lightbox"/>
                        </a>

                        <a href="#">
                            <img src="images/icons/project.png" alt=""/>
                        </a>
                    </p>

                    <p class="title">Vitale Premium</p>

                    <p class="subtitle">illustrator</p>
                </div>
            </div>
        </div>


        <h4>
            <a href="#">
                Vitale Premium
            </a>
        </h4>

        <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, [...]</p>

        <div class="work-skillsdate">
            <p class="customer">
                <span class="meta-label">Customer:</span> Vitale Premium
            </p>

            <p class="workdate">
                <span class="meta-label">Year:</span> 2008
            </p>
        </div>
    </div>
</li>


<li class="work span3">
    <div class="thumbnail">

        <div class="picture_overlay">
            <img width="260" height="377" src="images/portfolios/00410-260x377.jpg" class="attachment-thumb_portfolio_pinterest"
                 alt="004"/>

            <div class="overlay">
                <div>
                    <p>
                        <a href="images/portfolios/00410.jpg" rel="lightbox" class="ch-info-lightbox">
                            <img src="images/icons/zoom.png" alt="Open Lightbox"/>
                        </a>

                        <a href="#">
                            <img src="images/icons/project.png" alt=""/>
                        </a>
                    </p>

                    <p class="title">Digitpool Medien</p>

                    <p class="subtitle">brand identity</p>
                </div>
            </div>
        </div>

        <h4>
            <a href="#">
                Digitpool Medien
            </a>
        </h4>

        <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum.
            Donec dapibus lacus nec sapien faucibus eget suscipit lorem mattis.</p>

        <p>Donec non mauris ac nulla [...]</p>

        <div class="work-skillsdate">
            <p class="customer">
                <span class="meta-label">Customer:</span> Digitpool Medien
            </p>

            <p class="workdate">
                <span class="meta-label">Year:</span> 2005
            </p>
        </div>
    </div>
</li>


<li class="work span3">
    <div class="thumbnail">

        <div class="picture_overlay">
            <img width="260" height="450" src="images/portfolios/0078.jpg" class="attachment-thumb_portfolio_pinterest" alt="007"/>

            <div class="overlay">
                <div>
                    <p>
                        <a href="images/portfolios/0078.jpg" rel="lightbox" class="ch-info-lightbox">
                            <img src="images/icons/zoom.png" alt="Open Lightbox"/>
                        </a>
                        <a href="#">
                            <img src="images/icons/project.png" alt=""/>
                        </a>
                    </p>

                    <p class="title">Kimeda</p>

                    <p class="subtitle">logo design</p>
                </div>
            </div>
        </div>


        <h4>
            <a href="#">Kimeda</a>
        </h4>

        <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, [...]</p>

        <div class="work-skillsdate">
            <p class="customer">
                <span class="meta-label">Customer:</span> Kimeda - <a href="http://kimeda.com">kimeda.com</a>
            </p>

            <p class="workdate">
                <span class="meta-label">Year:</span> 2012
            </p>
        </div>
    </div>
</li>


<li class="work span3">
    <div class="thumbnail">

        <div class="picture_overlay">
            <img width="260" height="225" src="images/portfolios/0069-260x225.jpg" class="attachment-thumb_portfolio_pinterest"
                 alt="006"/>

            <div class="overlay">
                <div>
                    <p>
                        <a href="images/portfolios/006.jpg" rel="lightbox" class="ch-info-lightbox">
                            <img src="images/icons/zoom.png" alt="Open Lightbox"/>
                        </a>
                        <a href="#">
                            <img src="images/icons/project.png" alt=""/>
                        </a>
                    </p>

                    <p class="title">Black Mamba</p>

                    <p class="subtitle">corporate</p>
                </div>
            </div>
        </div>

        <h4>
            <a href="#">Black Mamba</a>
        </h4>

        <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum.
            Donec dapibus lacus nec [...]</p>

        <div class="work-skillsdate">
            <p class="customer">
                <span class="meta-label">Customer:</span> Black Mamba - <a
                    href="http://blackmamba.com">blackmamba.com</a>
            </p>

            <p class="workdate">
                <span class="meta-label">Year:</span> 2003
            </p>
        </div>

    </div>
</li>

<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">
            <img width="260" height="227" src="images/portfolios/00510-260x227.jpg" class="attachment-thumb_portfolio_pinterest"
                 alt="005"/>

            <div class="overlay">
                <div>
                    <p>
                        <a href="images/portfolios/0051.jpg" rel="lightbox" class="ch-info-lightbox">
                            <img src="images/icons/zoom.png" alt="Open Lightbox"/>
                        </a>

                        <a href="#">
                            <img src="images/icons/project.png" alt=""/>
                        </a>
                    </p>

                    <p class="title">Colorful Oktopus</p>

                    <p class="subtitle">oktopus</p>
                </div>
            </div>
        </div>

        <h4>
            <a href="#">Colorful Oktopus</a>
        </h4>

        <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, [...]</p>

        <div class="work-skillsdate">
            <p class="customer">
                <span class="meta-label">Customer:</span> Colorful Oktopus
            </p>

            <p class="workdate">
                <span class="meta-label">Year:</span> 2009
            </p>
        </div>
    </div>
</li>

<li class="last work span3">
    <div class="thumbnail">
        <div class="picture_overlay">
            <img width="260" height="346" src="images/portfolios/0097-260x346.jpg" class="attachment-thumb_portfolio_pinterest"
                 alt="009"/>

            <div class="overlay">
                <div>
                    <p>
                        <a href="images/portfolios/0097.jpg" rel="lightbox" class="ch-info-lightbox">
                            <img src="images/icons/zoom.png" alt="Open Lightbox"/>
                        </a>
                        <a href="#">
                            <img src="images/icons/project.png" alt=""/>
                        </a>
                    </p>

                    <p class="title">Guanacos</p>

                    <p class="subtitle">corporate</p>
                </div>
            </div>
        </div>

        <h4>
            <a href="#">Guanacos</a>
        </h4>

        <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum.
            Donec dapibus lacus nec [...]</p>

        <div class="work-skillsdate">
            <p class="customer">
                <span class="meta-label">Customer:</span> Guanacos - <a href="http://guanacos.net">guanacos.net</a>
            </p>

            <p class="workdate"><span class="meta-label">Year:</span> 2012</p>
        </div>

    </div>
</li>

</ul>

<div class='general-pagination group'>
    <a href='home-ii.html' class='selected'>1</a>
    <a href='#'>2</a>
    <a href='#'>&rsaquo;</a>
</div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var container = $('#portfolio');
        container.imagesLoaded(function () {
            container.masonry({
                itemSelector: '.span3'
            });
        });

        $(window).resize(function () {
            $('#portfolio').masonry({
                itemSelector: '.span3'
            });
        })
    });
</script>
</div>
<!-- START COMMENTS -->
<div id="comments"></div>
<!-- END COMMENTS -->
</div>
<!-- END CONTENT -->

<!-- START EXTRA CONTENT -->
<!-- END EXTRA CONTENT -->

</div>
</div>
</div>
<!-- END PRIMARY -->

<!-- START FOOTER -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div>
                <div class="widget-first widget span3 recent-posts">
                    <h3>From my blog</h3>
                    <div class="recent-post">
                        <div class="post type-post status-publish format-gallery hentry category-web-design group">

                            <div class="date">
                                <span class="month">Oct</span>
                                <span class="day">8</span>
                            </div>

                            <div class="text">
                                <h3>
                                    <a href="blog-detail.html" title="This is the title of the first article. Enjoy it.">
                                        This is the title of the first article. Enjoy it.
                                    </a>
                                </h3>
                                <p>by
                                    <a href="author-celestino.html" title="Posts by celestino" rel="author">
                                        celestino
                                    </a> -

                                    <a href="blog-detail.html#respond" title="Comment on This is the title of the first article. Enjoy it.">
                                        0 comments
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="post type-post status-publish format-standard hentry category-elegant-vintage group">

                            <div class="date">
                                <span class="month">Sep</span>
                                <span class="day">12</span>
                            </div>

                            <div class="text">
                                <h3>
                                    <a href="#" title="Nice &amp; Clean. The best for your blog!">
                                        Nice &amp; Clean. The best for your blog!
                                    </a>
                                </h3>

                                <p>by
                                    <a href="#" title="Posts by celestino" rel="author">
                                        celestino
                                    </a> -
                                    <a href="#" title="Comment on Nice &amp; Clean. The best for your blog!">
                                        0 comments
                                    </a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget span3 widget_flickrRSS">
                    <h3>My Flickr</h3>

                    <a title="1P4B6832" href="http://www.flickr.com/photos/gordonkw41/8756237357/"><img alt="1P4B6832" src="http://farm9.staticflickr.com/8553/8756237357_32d559d451_s.jpg"></a>
                    <a title="DSC03253" href="http://www.flickr.com/photos/dovz/8756237387/"><img alt="DSC03253" src="http://farm8.staticflickr.com/7422/8756237387_1c3013358d_s.jpg"></a>
                    <a title="Tappas in Hondarribia" href="http://www.flickr.com/photos/francolupo/8756237389/"><img alt="Tappas in Hondarribia" src="http://farm3.staticflickr.com/2867/8756237389_faae5159f8_s.jpg"></a>
                    <a title="P1000624" href="http://www.flickr.com/photos/24690780@N02/8756237421/"><img alt="P1000624" src="http://farm9.staticflickr.com/8393/8756237421_43de542797_s.jpg"></a>
                    <a title="" href="http://www.flickr.com/photos/chioushibo/8756237483/"><img alt="" src="http://farm6.staticflickr.com/5454/8756237483_9a8805a3d4_s.jpg"></a>
                    <a title="P1010059" href="http://www.flickr.com/photos/uzagaku/8756237507/"><img alt="P1010059" src="http://farm4.staticflickr.com/3777/8756237507_e6e45db22a_s.jpg"></a>
                    <a title="Berlijn 2013" href="http://www.flickr.com/photos/carlawiddershoven/8756237559/"><img alt="Berlijn 2013" src="http://farm3.staticflickr.com/2809/8756237559_16964e44ea_s.jpg"></a>
                    <a title="20130518-_DSC9574" href="http://www.flickr.com/photos/fomalhaut/8757363666/"><img alt="20130518-_DSC9574" src="http://farm3.staticflickr.com/2857/8757363666_cce1ef7ea5_s.jpg"></a>
                    <a title="20130519_144623.jpg" href="http://www.flickr.com/photos/lewisdgriffin/8757363718/"><img alt="20130519_144623.jpg" src="http://farm4.staticflickr.com/3817/8757363718_64d870995a_s.jpg"></a>
                    <a title="baden-württenmberg und bayern 2013 1 284" href="http://www.flickr.com/photos/russianchild007/8757363726/"><img alt="baden-württenmberg und bayern 2013 1 284" src="http://farm4.staticflickr.com/3773/8757363726_e7c9ed61a7_s.jpg"></a>
                </div>
                <div  class="widget span3 contact-info">
                    <h3>Get in touch</h3>
                    <div class="sidebar-nav">
                        <ul>
                            <li>
                                <i class="icon-map-marker" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Address:</span> Celestino, 115 Avenue - Italy
                            </li>
                            <li>
                                <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Mobile:</span> +39 3471717174
                            </li>
                            <li>
                                <i class="icon-print" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Fax:</span> +39 0035 356 765
                            </li>
                            <li>
                                <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Email:</span> celestino@yit.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="last-tweets-2" class=" widget span3 last-tweets">
                    <h3>Last Tweets</h3>
                    <div class="list-tweets-2">

                    </div>

                    <script type="text/javascript">
                        jQuery(function($){
                            $('#last-tweets-2 .list-tweets-2').tweetable({
                                listClass: 'tweets-widget-2',
                                username: 'envato',
                                time: true,
                                limit: 2,
                                replies: true
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->

</div>
<!-- END WRAPPER -->

</div>
<!-- END BG SHADOW -->

<!-- START CUSTOM SCRIPT -->
<!-- END CUSTOM SCRIPT -->

<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/jquery.tweetable.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.plugins.min.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.revolution.js'></script>
<script type='text/javascript' src='portfolios/filterable/js/jquery.filterable.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
<script type='text/javascript' src='js/shortcodes.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type="text/javascript" src="js/jquery.cycle.min.js"></script>
<script type="text/javascript" src="sliders/cycle/js/jquery.anythingslider.js"></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>

</body>
<!-- END BODY -->
</html>