@extends('layouts.app')

@section('title', 'only for creative minds.')

@section('content')
    <!-- START PAGE META -->
    <div id="page-meta" class="container">

        <!-- SLOGAN -->
        <div class="slogan">
            <h2>Nuestros materiales destacados</h2>

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
@endsection
