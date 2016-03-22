<!DOCTYPE html>
<html>
    <head>
        <title>Timeline</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- 1 -->
        <link title="timeline-styles" rel="stylesheet" href="//cdn.knightlab.com/libs/timeline3/latest/css/timeline.css">
        <!-- 2 -->
        <script src="http://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-color: #080808;
                color: #dddddd;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Timeline</div>
            </div>
            <div id='timeline-embed' style="width: 100%; height: 600px"></div>
        </div>
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
                default_bg_color: {r:0, g:0, b:0},
                timenav_height: 250
            };
            timeline = new TL.Timeline('timeline-embed',
                    'https://docs.google.com/spreadsheets/d/1cWqQBZCkX9GpzFtxCWHoqFXCHg-ylTVUWlnrdYMzKUI/pubhtml',additionalOptions);
        </script>
    </body>
</html>

