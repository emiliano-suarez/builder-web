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

        <script type="text/javascript" src="{!! asset('js/modernizr-custom.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/respond.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/jquery-3.1.0.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/lightbox.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/prefixfree.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/jquery.slides.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>

    </body>

</html>
