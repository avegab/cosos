<!doctype html>
<html>
<head>
<title>Weather Predictor</title>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap -->
    <link href="local/css/bootstrap.min.css" rel="stylesheet">
    <link href="local/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="local/css/main.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="local/js/jquery.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>
<body> 
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center">
                <h1 class="white center">Weather Predictor</h1>
                <p class="lead center white">
                    Introduce tu ciudad
                </p>

                <form>
                    <div class="form-group">
                        <input placeholder="Ej. Monterrey, Veracruz, Acapulco..." type="text" name="city" id="city" class="form-control"/>
                    </div>
                    <button id="btnWeather" class="btn btn-success btn-lg">¿Cuál es mi clima?</button>
                </form>
                <div id="success" class='alert alert-success'></div>
                <div id="fail" class='alert alert-danger'>
                    No se encontró información.
                </div>
            </div>
        </div>
    </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="local/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        $('#btnWeather').click(function(e){
            e.preventDefault();
            if ($('#city').val()!=''){
                $.get("scraper.php?city="+$('#city').val(),function(data){
                    if (data!=''){
                        $('#fail').fadeOut();
                        $('#success').html(data).fadeIn();
                    }else{
                        $('#success').fadeOut();
                        $('#fail').html('No se encontró información.');
                        $('#fail').fadeIn();
                    }
                });
            }else{
                $('#success').fadeOut();
                $('#fail').html('Por favor introduce una ciudad.');
                $('#fail').fadeIn();        
            }
        })
        // $('.page-container').css("height",$(window).height());
    </script>
</body>
</html>