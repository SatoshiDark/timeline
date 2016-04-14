<!DOCTYPE html>
<html>
    <head>
        <title>Timeline</title>

        {{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}
        <!-- 1 -->
        <link title="timeline-styles" rel="stylesheet" href="//cdn.knightlab.com/libs/timeline3/latest/css/timeline.css">
        <!-- 2 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="jquery-2.2.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <script src="http://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>

        {{--select2 libraries --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

    </head>
    <body>
    {{--<nav class="navbar navbar-inverse navbar-fixed-top">--}}
        {{--<div class="container">--}}
            {{--<h1>Timeline!</h1>--}}
        {{--</div>--}}
    {{--</nav>--}}
        <div class="container">
            <div class="content">
            <form action="{{ url('/timeline') }}" method="GET" class="form-horizontal">
                        {{--{!! csrf_field() !!}--}}

                <div class="title"><h1>Timeline</h1></div>
                <h2>Ingresa los criterios de busqueda</h2>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    {{--<input type="text" class="form-control" aria-label="Text input with multiple buttons"> --}}
                                        <select class="js-example-basic-multiple form-control" multiple="multiple" name="tags[]">

                                        </select>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-info" aria-label="Ayuda">
                                            <span class="glyphicon glyphicon-question-sign"></span></button>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>

                            </div>
                            {{--<div class="col-lg-12">--}}
                            {{--<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1YhqpF_vZnYYW4clqpT6zOdbAcZPBhwRc6IQpieJ5ulA&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='650' frameborder='0'></iframe>--}}
                            {{--</div>--}}

                                <script type="text/javascript">
                                $(".js-example-basic-multiple").select2();


                                </script>

        </form>
                            <div id='timeline' style="width: 100%; height: 600px"></div>

            </div>
        </div>

        <script type="text/javascript">
          $('select').select2({
                  placeholder: "Escribe los tags que desees buscar",
                      tags: true
                  });


        </script>
        <!-- 3 -->
        <script type="text/javascript">
            // The TL.Timeline constructor takes at least two arguments:
            // the id of the Timeline container (no '#'), and
            // the URL to your JSON data file or Google spreadsheet.
            // the id must refer to an element "above" this code,
            // and the element must have CSS styling to give it width and height
            // optionally, a third argument with configuration options can be passed.
            // See below for more about options.
            var additionalOptions = {
                start_at_end: true,
                timenav_height: 250
            };

//            timeline = new TL.Timeline('timeline-embed',
//                    'https://docs.google.com/spreadsheets/d/1cWqQBZCkX9GpzFtxCWHoqFXCHg-ylTVUWlnrdYMzKUI/pubhtml',additionalOptions);
        </script>
        <script>
            var totoro = {!! empty($json)?"'marktwain.json'":"JSON.parse($json);" !!};
            var timeline = new TL.Timeline('timeline', totoro, {
                start_at_end: true,
                language: 'es',
                timenav_mobile_height_percentage: 40,
                timenav_position: 'top',
                timenav_height_percentage: 25

//                timenav_height: 250
            });
        </script>
    </body>
</html>

