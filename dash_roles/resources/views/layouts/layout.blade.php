<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1, userscalable=yes">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/
3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/
3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background-color:black;
    }
</style>
<body>
    <div class="container justify-center" style="background-color:#fff"><h1>Tienda de peliculas</h1></div>
    <div class="container-fluid" style="margin-top: 100px">
        @yield('content')
    </div>
    <style type="text/css">
    .table {
        border-top: 2px solid #ccc;
        }
</style>
</body>
</html>