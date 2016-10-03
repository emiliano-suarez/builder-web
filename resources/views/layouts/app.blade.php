<!DOCTYPE html>

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Builder - @yield('title')</title>
        
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/lightbox.min.css" />

        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css' />

        <!--[if lt IE 9]>
            <style>
                header
                {
                    margin: 0 auto 20px auto;
                }
                #four_columns .img-item figure span.thumb-screen
                {
                    display:none;
                }  
            </style>
        <![endif]-->

    </head>

    <body>
        <header>
            <div class="toggleMobile">
                <span class="menu1"></span>
                <span class="menu2"></span>
                <span class="menu3"></span>
            </div>
            <div id="mobileMenu">
                <ul>
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Porfolio</a></li>
                    <li><a href="javascript:void(0)">About</a></li>
                </ul>
            </div>
            <h1>Builder</h1>
            <p>Asistiendo la construcción</p>
            
            <nav>
                <h2 class="hidden">Our navigation</h2>
                <ul>
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Porfolio</a></li>
                    <li><a href="javascript:void(0)">About</a></li>
                    <li><a href="javascript:void(0)">Contact</a></li>
                </ul>
            </nav>
        </header>

        @yield('content')

        <footer>
            <h2 class="hidden">Our footer</h2>
            <section id="copyright">
                <h3 class="hidden">Copyright notice</h3>
                <div class="wrapper">
                    <div class="social">
                        <a href="javascript:void(0)"><img src="images/icons/google-plus-icon.png" alt="google plus" width="25"/></a>
                        <a href="javascript:void(0)"><img src="images/icons/tumblr-icon.png" alt="tumblr" width="25"/></a>
                        <a href="javascript:void(0)"><img src="images/icons/youtube-icon.png" alt="youtube" width="25"/></a>
                        <a href="javascript:void(0)"><img src="images/icons/bebo-icon.png" alt="bebo" width="25"/></a>
                        <a href="javascript:void(0)"><img src="images/icons/xing-icon.png" alt="xing" width="25"/></a>
                    </div>
                    &copy; Copyright 2016 by <a href="http://www.builder.com">Builder</a>. All Rights Reserved.
                </div>
            </section>
            <section class="wrapper">
                <h3 class="hidden">Footer content</h3>
                <article class="column">
                    <h4>Lorem ipsum</h4>
                    Unterwegs traf es eine Copy. Die Copy warnte das Blindtextchen, da, wo sie herkäme wäre sie zigmal umgeschrieben worden und alles, was von ihrem Ursprung noch übrig wäre, sei das Wort "und" und das Blindtextchen solle umkehren und wieder in sein.</article>
                <article class="column midlist">
                    <h4>Consectetuer</h4>
                    <ul>
                        <li><a href="javascript:void(0)">Die Copy warnte das Blindtextchen</a></li>
                        <li><a href="javascript:void(0)">Unterwegs traf es eine Copy</a></li>
                        <li><a href="javascript:void(0)">Doch alles Gutzureden konnte</a></li>
                        <li><a href="javascript:void(0)">Als es die ersten Hügel</a></li>
                    </ul>
                </article>
                <article class="column rightlist">
                    <h4>Dolor sit amet</h4>
                    <ul>
                        <li><a href="javascript:void(0)"><img src="images/materials/arena.jpg" width="80" alt="some alt text"/><span>Unterwegs traf es eine Copy. Die Copy warnte.</span></a></li>
                        <li><a href="javascript:void(0)"><img src="images/materials/yeso.jpg" width="80" alt="some alt text"/><span>Doch alles Gutzureden konnte es nicht.</span></a></li>
                        <li><a href="javascript:void(0)"><img src="images/materials/ladrillo.jpg" width="80" alt="some alt text"/><span>Und es dann in ihre Agentur schleppten.</span></a></li>
                    </ul>
                </article>
            </section>
        </footer>

        <script type="text/javascript" src="{!! asset('js/modernizr-custom.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/respond.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/jquery-3.1.0.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/lightbox.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/prefixfree.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/jquery.slides.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>

    </body>

</html>
