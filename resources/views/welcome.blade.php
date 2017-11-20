<!DOCTYPE HTML>
<html>
<head>
    <title>TimeLine</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {!!Html::style('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900')!!}
    {!!Html::style('//cdn.knightlab.com/libs/timeline3/latest/css/timeline.css')!!}
    {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css')!!}
    {!!Html::style('styles/css/style.css')!!}
    {!!Html::style('styles/css/owl.carousel.css')!!}
    {!!Html::style('styles/css/magnific-popup.css')!!}

    {!!Html::script('styles/js/jquery.min.js')!!}
    {!!Html::script('styles/js/owl.carousel.js')!!}


    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 4,
                lazyLoad: true,
                autoPlay: true,
                navigation: true,
                navigationText: ["", ""],
                rewindNav: false,
                scrollPerPage: false,
                pagination: false,
                paginationNumbers: false,
            });
        });
    </script>
    <!-- 68px-menu---->
    {!!Html::style('styles/css/jquery.mmenu.all.css')!!}
    {!!Html::script('styles/js/jquery.mmenu.js')!!}
    <script type="text/javascript">
        //  The menu on the left
        $(function () {
            $('nav#menu-left').mmenu();
        });
    </script>
    <!--/768px-menu-->
</head>
<body>
<!-- Facebook Share Plugin-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9&appId=414071505637260";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- start header -->
<div class="header_bg">
    <center>
        <a href="/t0p1c">API Topic</a>
    </center>
</div>
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="/">
                    {!! HTML::image('images/logo_time_line.png' ,null, ['WIDTH'=> 178, 'HEIGHT'=>120]) !!}
                    <hr style="color:#ffffff">
                    <SPAN STYLE="color: white; font-size: 20pt; font-family: Comic Sans MS">MÁS QUE UNA PLATAFORMA UNA HERRAMIENTA DE INFORMACIÓN AL ALCANCE DE TUS MANOS</SPAN>
                </a>
            </div>
            <div class="text">
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="banner" id="move-top">
    <!----start-image-slider---->
    <div data-scroll-reveal="enter bottom but wait 0.7s" class="img-slider" id="home">
        <div class="wrap">
            <div class="slider">
                <ul id="jquery-demo">
                    <li>
                        <a href="#slide1">
                        </a>
                        <div data-scroll-reveal="enter bottom but wait 0.7s" class="slider-detils">
                            <h3>La Noticia</h3>
                            <span>al alcance de tus manos</span>
                        </div>
                    </li>
                    <li>
                        <a href="#slide2">
                        </a>
                        <div data-scroll-reveal="enter bottom but wait 1s" class="slider-detils">
                            <h3>Informando</h3>
                            <span>a nuestro Pais</span>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="simple-text">
    <br>
    <div class="wrap">
        <h4>Timeline de Noticias</h4>
        <p>A través de esta plataforma usted podrá conocer ordenada y cronológicamente la información de temas que han
            merecido tratamiento noticioso en un formato que refleja el histórico del tema buscado, facilitándole la
            visualización, revisión y análisis integral de una manera ilustrativa y didáctica del material
            informativo</p>
    </div>
</div>

<!-- start header -->
<div class="header_btm">
    <div class="wrap">
        <!------start-768px-menu---->
        <div id="page">
            <div id="header">
                <a class="navicon" href="#menu-left"> </a>
            </div>
            <nav id="menu-left">
                <ul>
                    <li class="active"><a href="/">Busca ya!</a></li>
                    <!--<li><a href="about.html">Hacerca de Nosotros</a></li>
                        <li><a href="contact.html">Contactenos</a></li>-->
                </ul>
            </nav>
        </div>
        <!------start-768px-menu---->
        <div class="header_sub">
            <div class="h_menu">
                <ul>
                    <li class="active"><a href="/">Busca ya!</a></li>
                    <!--<li><a href="about.html">Hacerca de Nosotros</a></li>
                    <li><a href="contact.html">Contactenos</a></li>-->
                </ul>
            </div>
            <div class="h_search" style="width: 75%">
                <form action="{{ url('/timeline') }}"
                      method="GET"
                      role="search"
                      class="navbar-form navbar-left">

                    @if(!empty($response))
                        <h3>No se encontraron resultados :(</h3>
                    @endif
                    <div class="form-group">
                    <input type="text"
                         class="js-example-basic-multiple form-control"
                                multiple="multiple"
                                id="tagSelect"
                                name="tags"
                                style="width: 760px">
                        <input type="submit" value="BUSCAR" id="Buscar">
                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!---start-banner---->
<!---slider---->
{!!Html::style('styles/css/slippry.css')!!}
{!!Html::script('styles/js/jquery-ui.js')!!}
{!!Html::script('styles/js/scripts-f0e4e0c2.js')!!}
<script>
    jQuery('#jquery-demo').slippry({
        // general elements & wrapper
        slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
        // options
        adaptiveHeight: false, // height of the sliders adapts to current slide
        useCSS: false, // true, false -> fallback to js if no browser support
        autoHover: false,
        transition: 'fade'
    });
</script>
<!---scrooling-script--->
<!----//End-image-slider---->

<div class="last_posts"><!-- start last_posts -->
    <div class="wrap">
        <div class="l-grids">
            <div class="l-grid-1">
                <div class="desc">
                    <!--Timelinehere-->
                    <div class="content" id="timelinediv">
                        <div id='timeline' style="width: 1024px; height: 600px"></div>
                    </div>
                    <div class="fb-share-button" data-href="http://boliviatimeline.mastin.org/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fboliviatimeline.mastin.org%2F&amp;src=sdkpreparse">Compartir</a></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="testimonial"><!-- start last_posts -->
    <div class="wrap">
        <h5 class="heading">Nosotros</h5>
        <div class="test-grids">
            <div class="test-desc">
                <h3>Nosotros</h3>
                <p>MASTINtips® es una empresa que se encuentra en La Paz, Bolivia. De hecho, más que una empresa, es una
                    herramienta para aquellos clientes que buscan tener una imagen en su negocio, idea, proyecto o
                    producto.</p>
                <p>Formada y fundada por talentosos jóvenes, su misión es llevar adelante la creatividad mediante el
                    diseño, desde un simple logo hasta el desarrollo de aplicaciones móviles y diseño de sitios web.</p>
            </div>
            <div class="img_1">
                {!! HTML::image('images/mastin newlogo.png' ,null, ['WIDTH'=> 90, 'HEIGHT'=>90]) !!}
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>


<div class="get_in_touch"><!-- start last_posts -->
    <div class="wrap">
        <h5 class="heading"></h5>
        <div class="get-left">
            <p>Contactenos</p>
        </div>
        <div class="get-right">
            <form>
                <ul>
                    <li class="name">
                        <a href="#" class="icon user"> </a>
                        <input type="text" placeholder="Nombre" required="">
                        <div class="clear"></div>
                    </li>
                    <li class="email_1">
                        <a href="#" class="icon mail"> </a>
                        <input type="email" placeholder="Correo@email.com" required="">
                        <div class="clear"></div>
                    </li>
                    <div class="clear"></div>
                    <li>
                        <textarea class="plain buffer" placeholder="Comenta, siempre estamos dispuestos a escuchar tu opinion."></textarea>
                    </li>
                    <input class="send" type="submit" value="Enviar"/>
                    <!--
                <div class="send">
                        <a href="#">SEND</a>
                </div>
                -->
                </ul>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>


<div class="footer">
    <div class="wrap">
        <div class="footer-left">
            <h3>Acerca de Nosotros</h3>
            <p>Como Ubicarnos.</p>
            <br>
            <div class="soc_icons soc_icons1">
                <ul>
                    <li><a class="icon1" href="#"> </a></li>
                    <li><a class="icon2" href="#"> </a></li>
                    <li><a class="icon3" href="#"> </a></li>
                    <div class="clear"></div>
                </ul>

            </div>
        </div>
        <div class="footer-right">
            <h3>Facebook</h3>
            <div class="comments1">
                <p>Como Ubicarnos.</p>

            </div>

        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="simple-text">
    <br>
    <div class="wrap">
        <h4>Esta es una plataforma digital que busca brindar mayor y mejor información a la ciudadanía, evitando la
            búsqueda aislada, individual y desordenada de información. Una iniciativa de:</h4>
        <div style="text-align: center;">
            <br>
            {!! HTML::image('images/logoerbol.svg' ,null, ['WIDTH'=> 150, 'HEIGHT'=>60]) !!}
            {!! HTML::image('images/aplp-logo.png' ,null) !!}&nbsp&nbsp&nbsp&nbsp
            {!! HTML::image('images/cato_logo.jpg' ,null,  ['WIDTH'=> 90, 'HEIGHT'=>75]) !!}

        </div>


    </div>
</div>

<div class="copy">
    <p>© 2017 Todos los derechos Reservados.<a href="http://www.mastin.org/" target="_blank"><font color="#fff">MASTINtips®</font></a>
    </p>
</div>


<script src="http://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>


<script src="js/script.js"></script>

<script>
    var totoro = {!!empty($json) ? "'marktwain.json'" : "JSON.parse($json);"!!};
    var timeline = new TL.Timeline('timeline', totoro, {
        start_at_end: true,
        scale_factor: 0.5,
        language: 'es',
        timenav_mobile_height_percentage: 40,
        timenav_position: 'top',
        timenav_height_percentage: 25
    });
</script>
</body>
</html>