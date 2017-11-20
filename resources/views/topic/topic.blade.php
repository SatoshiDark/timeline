<!DOCTYPE HTML>
<html>
<head>
    <title>TimeLine</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    {!!Html::style('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900')!!}
    {!!Html::style('//cdn.knightlab.com/libs/timeline3/latest/css/timeline.css')!!}
    {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css')!!}
    {!!Html::style('styles/css/style.css')!!}
    {!!Html::style('styles/css/owl.carousel.css')!!}
    {!!Html::style('styles/css/magnific-popup.css')!!}

    {!!Html::script('styles/js/jquery.min.js')!!}
    {!!Html::script('styles/js/owl.carousel.js')!!}


    <!-- 68px-menu---->
    {!!Html::style('styles/css/jquery.mmenu.all.css')!!}
    {!!Html::script('styles/js/jquery.mmenu.js')!!}

</head>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Set a new topic</h2>
    <div class="form-group">
      <label for="topic">New Topic:</label>
      <input type="text" class="form-control" id="topic" placeholder="Enter new Topic" name="topic">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
  {!!link_to('#', $title='Save', $attributes = ['id'=>'registrar', 'class'=>'btn btn-primary'], $secure = null)!!}
  <button onclick="window.location.href='/'" class="btn btn-danger">Back</button>

  <h2>List</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Topic</th>
      </tr>
    </thead>
    <tbody id="topics">
    </tbody>
  </table>

</div>

</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script>
   $(document).ready(function() {
    getDataTable();
   });
  $("#registrar").click(function(){

      var topic = $("#topic").val();
      var pwd = $("#pwd").val();
      var route = "t0p1c";
      var postData = {
        topic: topic,
        pwd: pwd
      };
      $.ajax({
        url: route,
        type: 'POST',
        dataType: 'json',
        data: postData,
        success:function(msj){
          getDataTable();
          console.log('bien', msj)
        },
        error:function(msj){
          console.log('mal', msj)
        }
      });
  });

  function getDataTable () {
    var route = "t0p1c-get";
    var tablaDatos = $('#topics');
    tablaDatos.empty();
    $.ajax({
      url: route,
      type: 'GET',
      success:function(msj){
        var j = 0;
        jQuery.each(msj.data, function(i, val) {
          j++;
          tablaDatos.append("<tr><td>"+j+"</td><td>"+val.topic+"</td></tr>");
        });
        console.log('bien', msj.data)
      },
      error:function(msj){
        console.log('mal', msj)
      }
    });
  }

</script>
</html>