<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Indonesian to English Translation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Indonesian to English Translation</h1>
      <form>
        <div class="form-group">
          <label for="indonesian">Indonesian:</label>
          <input type="text" class="form-control" id="indonesian" onchange="arti();">
        </div>
        
        <div id="translated-text"></div>

      </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    
    function arti(){
      var bahasa = $('#indonesian').val();
      $.ajax({
         url: "api/api_db.php",
         type:'POST',
         data: { indonesian: bahasa},
           success: function(data)
                {
                  $("#translated-text").html(data);
                }
      });
    }
    </script>
  </body>
</html>