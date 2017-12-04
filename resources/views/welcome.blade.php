<!DOCTYPE HTML>
<html>
<head>
    <title>TimeLine</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {!!Html::style('//cdn.knightlab.com/libs/timeline3/latest/css/timeline.css')!!}
    {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css')!!}
    {!!Html::style('vendor/bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style('vendor/font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('vendor/simple-line-icons/css/simple-line-icons.css')!!}
    {!!Html::style('styles/style.css')!!}

    {!!Html::script('vendor/jquery/jquery.js')!!}
    {!!Html::script('vendor/jquery-easing/jquery.easing.js')!!}
    {!!Html::script('vendor/bootstrap/js/bootstrap.bundle.min.js')!!}
    <script
      src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
      integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
      crossorigin="anonymous"></script>

</head>
<body  id="page-top">
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



<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
  <i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <li class="sidebar-brand">
      <a class="js-scroll-trigger" href="#page-top">Timeline de Noticias</a>
    </li>
    <li class="sidebar-nav-item">
      <a class="js-scroll-trigger" href="#page-top">Inicio</a>
    </li>
    <li class="sidebar-nav-item">
      <a class="js-scroll-trigger" href="#about">¿Qué es el Timeline de Noticias?</a>
    </li>
    <li class="sidebar-nav-item">
      <a class="js-scroll-trigger" href="#mastin">Acerca de Nostros</a>
    </li>
    <li class="sidebar-nav-item">
      <a class="js-scroll-trigger" href="#contact">Contáctenos</a>
    </li>
  </ul>
</nav>

<!-- Header -->
<header class="masthead d-flex">
  <div class="container text-center my-auto">

  </div>
  <div class="overlay"></div>
</header>

<!-- About -->
<section class="content-section bg-light bg-lines" id="about">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <h2>¿Qué es el Timeline de Noticias?</h2>
        <p class="lead mt-5">Esta es una plataforma digital que busca brindar mayor y mejor información a la ciudadanía, evitando la
          búsqueda aislada, individual y desordenada de información.</p>
        <p class="lead mb-5">A través de esta plataforma usted podrá conocer ordenada y cronológicamente la información de temas que han
          merecido tratamiento noticioso en un formato que refleja el histórico del tema buscado, facilitándole la
          visualización, revisión y análisis integral de una manera ilustrativa y didáctica del material
          informativo</p>
      </div>
    </div>
  </div>
</section>

<!-- Timeline -->
<section class="content-section bg-primary text-white p-5">


  <div class="container">

    <div class="row">
      <div class="col-6  text-right">
        Busca los eventos que necesites en la linea de tiempo:
      </div>
      <div class="col-6">
        <form class="form-inline mx-auto" action="{{ url('/timeline') }}" method="GET" role="search">
          <div class="form-group">
            <label for="inputPassword2" class="sr-only">Buscar</label>
            <input type="text"
                 class="js-example-basic-multiple form-control"
                        multiple="multiple"
                        id="tagSelect"
                        name="tags"/>
          </div>
          @if(!empty($response))
              <h3>No se encontraron resultados :(</h3>
          @endif
          <button type="submit" class="btn btn-success" id="Buscar">BUSCAR EVENTO</button>
        </form>
      </div>
    </div>
    {!!Html::style('styles/css/slippry.css')!!}
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
    <div id='timeline' style="width: 90%; margin:2rem auto; height: 600px"></div>
    <div class="fb-share-button" data-href="http://boliviatimeline.mastin.org/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fboliviatimeline.mastin.org%2F&amp;src=sdkpreparse">Compartir</a></div>


  </div>
</section>


<section class="content-section" id="mastin">
  <div class="container">
    <div class="content-section-heading">
      <h3 class="text-secondary text-center mb-0">Acerca de Nostros</h3>
      <h2 class="mb-5 text-center">MASTINtips</h2>
      <div class="row">
        <div class="col-md-6">
          {!! HTML::image('images/mastin.png' ,null,  ['WIDTH'=> 400, 'HEIGHT'=>400]) !!}
        </div>
        <div class="col-md-6">
          <p>MASTINtips® es una empresa que se encuentra en La Paz, Bolivia. De hecho, más que una empresa, es una
            herramienta para aquellos clientes que buscan tener una imagen en su negocio, idea, proyecto o
            producto.</p>
          <p>Formada y fundada por talentosos jóvenes, su misión es llevar adelante la creatividad mediante el
            diseño, desde un simple logo hasta el desarrollo de aplicaciones móviles y diseño de sitios web.</p>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- Call to Action -->
<section class="content-section bg-primary text-white" id="contact">
  <div class="container text-center">
    <h2 class="mb-4">Contáctenos</h2>
    <div class="row">
      <div class="col-md-6">
        <form>
          <div class="form-group">
            <div class="input-group mb-2 mb-sm-0">
              <div class="input-group-addon"><i class="fa fa-user-o"></i></div>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nombre" required="">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-2 mb-sm-0">
              <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" required="">
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comenta, siempre estamos dispuestos a escuchar tu opinion."></textarea>
          </div>
          <button type="submit" class="btn btn-secondary" id="Buscar">ENVIAR</button>
        </form>
      </div>
      <div class="col-md-4">
        {!! HTML::image('images/contacto.png' ,null,  ['WIDTH'=> 400, 'HEIGHT'=>400]) !!}
      </div>
    </div>
  </div>
</section>



<!-- Footer -->
<footer class="footer text-center">
  <div class="container">
    <ul class="list-inline mb-5">
      <li class="list-inline-item">
        <a class="social-link rounded-circle text-white mr-3" href="#">
          <i class="icon-social-facebook"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="social-link rounded-circle text-white mr-3" href="#">
          <i class="icon-social-twitter"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="social-link rounded-circle text-white" href="#">
          <i class="icon-social-google"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="container">
    <h3>Una iniciativa de</h3>
    <ul class="list-inline mb-5">
      <li class="list-inline-item">
        {!! HTML::image('images/logoerbol.svg' ,null, ['WIDTH'=> 100, 'HEIGHT'=>60]) !!}
      </li>
      <li class="list-inline-item">
        {!! HTML::image('images/aplp-logo.png' ,null) !!}
      </li>
      <li class="list-inline-item">
        {!! HTML::image('images/cato_logo.jpg' ,null,  ['WIDTH'=> 50, 'HEIGHT'=>70]) !!}
      </li>
    </ul>
    <p class="text-muted mb-0">© 2017 Todos los derechos Reservados.<a href="http://www.mastin.org/" target="_blank"> MASTINtips®</a><br/><a href="/t0p1c">API Topic</a></p>
  </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>



<script src="http://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
{!!Html::script('js/script.js')!!}

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
