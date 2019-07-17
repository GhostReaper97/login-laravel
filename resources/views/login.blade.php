<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container-fluid">
        <div style="margin-top:100px" class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('Entrar') }}">

                            {{ csrf_field() }}

                            <div class="form-group">

                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Ingrese su email" class="form-control" required>

                            </div>

                            <div class="form-group">

                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Ingrese su email" class="form-control" required>

                            </div>  

                            <button class="btn btn-dark btn-block" type="submit">Entrar</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>