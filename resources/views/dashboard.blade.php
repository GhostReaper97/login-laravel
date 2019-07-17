<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">   
</head>
<body>

    <div class="container">
        <div style="margin-top:70px" class="card">
            <div class="card-header">
                <h1>Bienvenid@ {{ auth() -> user() -> name }} </h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">

                        <label for="">Opciones</label>
                        <a href="{{ route('Salir') }}" class="btn btn-primary">Salir</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>