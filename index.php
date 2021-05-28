<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="select2/jquery/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
     
    
    <!--select2-->
    <link rel="stylesheet" href="select2/css/select2.min.css"> 
    <script src="select2/js/select2.min.js"></script>
    <!--datepicker-->
    <script src="datepicker/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="datepicker/css/bootstrap-datepicker.css"> 
    
    <script>
        
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });        
    </script>
    
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="col-sm-9 mt-4">
        <label for="">Ciudades</label>
        <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">
            <option value="AL">Alabama</option>
            <option value="WY">Wyoming</option>
            <option value="AL">Lima</option>
            <option value="WY">Bogota</option>
            <option value="AL">La Paz</option>
            <option value="WY">Buenos Aires</option>
        </select>
    </div>
    <div class="col-sm-9 mt-4">
        <label for="">Fecha</label>
        <div class="input-group date eventspicker">
            <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        </div>
    </div>
</div>
<script>
    $('.eventspicker').datepicker({
            format: "dd/mm/yyyy",
            language: "es"
        });
</script>
</body>
</html>