<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Login to your account</title>
</head>
<body>
<style>
    .head{
        background: #938882;
    }
    .cont{
        width: 100vw;
        height: 90vh;
        background: #daa;
    }
</style>
<div class="head px-4 py-2 d-flex justify-content-between">
    <h>Faith School</h>
    <nav>
        <a href="login" class="btn btn-success">Login</a>
        <a href="register" class="btn btn-success">Register</a>
    </nav>
</div>
<div class="cont d-flex align-items-center justify-content-center">
    <form action="login_user" method="post">
        @csrf
        <div class="mb-3">
            <p class="form-label text-center">Email address</p>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <p class="form-label text-center">Password</p>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>
</body>
</html>
