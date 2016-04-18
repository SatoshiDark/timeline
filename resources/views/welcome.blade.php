<!DOCTYPE html>
<html>
<head>
    <title>Timeline</title>
    <link title="timeline-styles" rel="stylesheet" href="//cdn.knightlab.com/libs/timeline3/latest/css/timeline.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="jquery-2.2.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <script src="http://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

</head>
<body>
<div class="container">
    <div class="content">
        <form action="{{ url('/timeline') }}"
              method="GET"
              class="form-horizontal">
            <div class="title"><h1>Timeline</h1></div>
            <h2>Ingresa los criterios de busqueda</h2>

            <div class="col-lg-12">
                <div class="input-group">
                    <select class="js-example-basic-multiple form-control"
                            multiple="multiple"
                            id="tagSelect" name="tags[]">
                        {{--<option value="3620194" selected="selected">select2/select2</option>--}}
                    </select>

                    <div class="input-group-btn">
                        <button type="button"
                                class="btn btn-info"
                                aria-label="Ayuda">
                                <span class="glyphicon glyphicon-question-sign">
                                </span>
                        </button>
                        <button type="submit"
                                class="btn btn-primary">
                            Enviar
                        </button>
                    </div>
                </div>
            </div>


        </form>
        <br><br><br>

        <div id='timeline' style="width: 100%; height: 600px"></div>

    </div>
</div>

<script type="text/javascript">
    var lolox = "";
    function formatRepo(repo) {
        if (repo.loading) return repo.name;

        var markup = '<div class="clearfix">' +
//                '<div class="col-sm-1">' +
//                '<img src="' + repo.owner.avatar_url + '" style="max-width: 100%" />' +
//                '</div>' +
                '<div clas="col-sm-10">' +
                '<div class="clearfix">' +
                '<div class="col-sm-6">' + repo.name + '</div>' +
//                '<div class="col-sm-3"><i class="fa fa-code-fork"></i> ' + repo.forks_count + '</div>' +
//                '<div class="col-sm-2"><i class="fa fa-star"></i> ' + repo.stargazers_count + '</div>' +
                '</div>';

        if (repo.name) {
            markup += '<div>' + repo.name + '</div>';
        }
        markup += '</div></div>';
        return markup;
    }

    function formatRepoSelection(repo) {
        return (repo.name);
    }
    $('.js-example-basic-multiple').select2({
        placeholder: "Escribe los tags que desees buscar",
        multiple: true,
        ajax: {
//            url: "http://www.erbol.com.bo/taxonomy/autocomplete/field_tags/" + that.lolox,
            url: "tago",
            type: 'GET',
            dataType: 'json',
            delay: 250,
            jsonp: false,
            data: function(params){
//                queryParameters = {
//                    q: params.term
//                };
//                return queryParameters;
                return {q: params.term};
            },

            processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used

                console.log(data);
                params.page = params.page || 1;

                return {
                    results: data,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) {
            return markup;
        }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatRepo, // omitted for brevity, see the source of this page
        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page

    });


</script>


<script type="text/javascript">
    var additionalOptions = {
        start_at_end: true,
        timenav_height: 250
    };

</script>
<script>
    var totoro = {!!empty($json) ? "'marktwain.json'" : "JSON.parse($json);"!!};
    var timeline = new TL.Timeline('timeline', totoro, {
        start_at_end: true,
        language: 'es',
        timenav_mobile_height_percentage: 40,
        timenav_position: 'top',
        timenav_height_percentage: 25
    });
</script>


</body>
</html>
