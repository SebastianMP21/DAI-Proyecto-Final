<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tienda de pelicula</title>
    <style>
        body {
            background-color: black;
            background-image: url('/img/fondo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            
            }       
        
    </style>
</head>
<body class="antialiased justify-center">
    <br><br>
    <h1 class="text-center"style="color:white">PeliFazzzt </h1>
    <h1 class="text-center"><img src="img/logo.png"  height=50px></h1>  
        <div class="relative flex justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed right-0 top-0 px-6 py-4 sm:block" style="float:right">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 btn btn-danger" role="button">Home</a>
                        
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-white-700 dark:text-white-500  btn btn-danger" role="button">Iniciar Sesión</a>
                    @if (Route::has('register'))
                    

                        <a href="{{ route('register') }}" class="ml-4 text-sm text-white-700 dark:text-white-500 btn btn-danger" role="button">Registrarse</a>
                    
                            
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
    </body>
</html>