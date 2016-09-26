@extends('layouts.app')

@section('title', 'only for creative minds.')

@section('content')
    <section class="container">
        <h2 class="hidden">Lorem Ipsum</h2>
        <?php $i = 1; ?>
        @foreach ($materials as $material)
        <article id="slider_content{{ $i }}">
            <h3>{{ $material->title }}</h3>
            <p>{{ $material->description }}</p>
            <a class="button" href="{{ $material->url }}">{{ $material->title }}</a>
        </article>
        <?php $i++; ?>
        @endforeach
        <article id="slider_content3">
            <h3>Lorem ipsum</h3>
            <p>Nicht einmal von der allmächtigen Interpunktion werden die Blindtexte beherrscht – ein geradezu unorthographisches Leben. <a href="javascript:void(0)" class="responsive_button">Mehr lesen...</a></p>
            <a class="button" href="javascript:void(0)">Mehr lesen</a>
        </article>
        <div id="slides">
            <img src="images/slider/dexter-mausoleum-1005284_1920.jpg" alt="Mmausoleum" />
            <img src="images/slider/home-1353389_1920.jpg" alt="Home" />
            <img src="images/slider/neuschwanstein-castle-467116_1920.jpg" alt="Neuschwanstein Castle" />
        </div>
    </section>

    <section id="spacer">
        <h2 class="hidden">Dolor sit amet</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</p>
        <div class="search">
            <form action="#">
                <input type="text" name="sitesearch" value="Enter a word..."/>
                <input type="submit" name="start_search" class="button" value="Search"/>
            </form>
        </div>
    </section>

    <section id="boxcontent">
        <h2 class="hidden">Adipiscing</h2>
        <article>
            <img src="images/icons/buzz-private-icon.png" alt="alt text about the private icon"/>
            <h3>Lorem ipsum</h3>
            <p>
                Eines Tages aber beschloß eine kleine Zeile Blindtext, ihr Name war Lorem Ipsum, hinaus zu gehen. 
            </p>
        </article>
        <article>
            <img src="images/icons/industry-engineering-icon.png" alt="alt text about the engineering icon"/>
            <h3>Consectetuer</h3>
            <p>
                Der große Oxmox riet ihr davon ab, da es dort wimmele von bösen Kommata, wilden Fragezeichen...
            </p>
        </article>
        <article>
            <img src="images/icons/cell-phones-iphone-icon.png" alt="alt text about the iphone icon"/>
            <h3>Dolor sit amet</h3>
            <p>
                Es packte seine sieben Versalien, schob sich sein Initial in den Gürtel und machte sich auf den Weg.
            </p>
        </article>
        <br class="clear"/>
    </section>

    <section id="four_columns">
        <h2>
            Lorem ipsum
        </h2>    
        <article class="img-item">
            <h3 class="hidden">Dolor sit amet</h3>
            <figure>  
                <a href="images/slider/example-slide-1.jpg" data-lightbox="image-1" data-title="My caption 1">
                    <span class="thumb-screen"></span>
                    <img src="images/slider/example-slide-1sml.jpg" alt="Some alt text"/>
                </a>
                <figcaption>
                    <strong>
                        Photo by: Some name 1
                    </strong>
                    Als es die ersten Hügel des Kursivgebirges erklommen hatte
                </figcaption>
            </figure>
        </article>
        <article class="img-item">
            <h3 class="hidden">Sit Amet</h3>
            <figure>
                <a href="images/slider/example-slide-2.jpg" rel="lightbox" title="Some title">
                    <span class="thumb-screen"></span>
                    <img src="images/slider/example-slide-2sml.jpg" alt="Some alt text"/>
                </a>
                <figcaption>
                    <strong>
                        Photo by: Some name 2
                    </strong>
                    warf es einen letzten Blick zurück auf die Skyline seiner Heimatstadt Buchstabhausen
                </figcaption>
            </figure>
        </article>
        <article class="img-item">
            <h3 class="hidden">Dolor Sit</h3>
            <figure>
                <a href="images/slider/example-slide-3.jpg" rel="lightbox" title="Some title">
                    <span class="thumb-screen"></span>
                    <img src="images/slider/example-slide-3sml.jpg" alt="Some alt text"/>
                </a>
                <figcaption>
                    <strong>
                        Photo by: Some name 3
                    </strong>
                    die Headline von Alphabetdorf und die Subline seiner eigenen Straße.
                </figcaption>
            </figure>
        </article>
        <article class="img-item">
            <h3 class="hidden">Lorem Ipsum</h3>
            <figure>
                <a href="images/slider/example-slide-4.jpg" rel="lightbox" title="Some title">
                    <span class="thumb-screen"></span>
                    <img src="images/slider/example-slide-4sml.jpg" alt="Some alt text"/>
                </a>
                <figcaption>
                    <strong>
                        Photo by: Some name 4
                    </strong>
                    Wehmütig lief ihm eine rhetorische Frage über die Wange.
                </figcaption>
            </figure>
        </article>
        <br class="clear"/>
    </section>

    <section id="text_columns">
        <h2 class="hidden">Blindtext</h2>
        <article class="column1">
            <h3>
                Dolor sit amet
            </h3>
            <p>Unterwegs traf es eine Copy. Die Copy warnte das Blindtextchen, da, wo sie herkäme wäre sie zigmal umgeschrieben worden und alles, was von ihrem Ursprung noch übrig wäre, sei das Wort "und" und das Blindtextchen solle umkehren und wieder in sein eigenes, sicheres Land zurückkehren.</p>
                <p>Doch alles Gutzureden konnte es nicht überzeugen und so dauerte es nicht lange, bis ihm ein paar heimtückische Werbetexter auflauerten, es mit Longe und Parole betrunken machten und es dann in ihre Agentur schleppten, wo sie es für ihre Projekte wieder und wieder mißbrauchten.</p>
        </article>
        <section class="column2">
            <h3 class="hidden">Lorem Impsum</h3>
            <article class="row">  
                <h4 class="hidden">Dolor sit</h4>      	
                <img src="images/icons//rocket-icon.png" width="80" class="rocket" alt="rocket"/>            
                <p>Und wenn es nicht umgeschrieben wurde, dann benutzen Sie es immernoch.</p>
            </article> 
            <article class="row">        	
                <h4 class="hidden">Ipsum</h4>
                <img src="images/icons/clock-icon.png" class="clock" width="80" alt="time"/>            
                <p>Doch alles Gutzureden konnte es nicht überzeugen und so dauerte es nicht lange.</p>
            </article>   
        </section>
    </section>

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

@endsection
