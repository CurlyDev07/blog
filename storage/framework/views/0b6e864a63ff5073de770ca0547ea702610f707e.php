<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<body>

        <h1>Get Request</h1>

        <input type="submit" value="getRequest" id="getRequest">
        

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function(){
            $('#getRequest').click(function(){
               $.get('getRequest-data', function(data){
                   console.log(data);
               })
            })
        });

    </script>
</body>
</html>