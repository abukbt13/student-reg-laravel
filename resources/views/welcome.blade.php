<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Faith School</title>
</head>
<body>
<style>
    .head{
        background: #938882;
    }
    .main{
        width: 100vw;
        height: 60vh;
        background: #BEA99F;
    }
    .footer{
        background: #E4F1F4;
        color: black;
    }
</style>
<div class="head px-4 py-2 d-flex justify-content-between">
    <h>Faith School</h>
    <nav>
        <a href="login" class="btn btn-success">Login</a>
        <a href="register" class="btn btn-success">Register</a>
    </nav>
</div>
@if(session()->has('message'))
    <p class="bg-info p-4 ">{{ session('message') }}</p>
@endif
<div class="main  d-flex flex-column justify-content-center align-items-center">
    <p>Welcome to Faith School a school that transform children to mature </p>

    <p>men and women who can be dependable on the society. </p>

    </p>This  is the kind of school you deserve.  </p>

    <p>Your Future is created here </p>
</div>
<div class="footer d-flex px-4">
    <div class="cont1 d-flex flex-column align-items-center justify-content-center">
        <h2  class="border-bottom border-success">Academics</h2>
       <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquid autem consectetur dicta doloremque dolores eum explicabo in, maiores natus non odio repellendus rerum sapiente sit unde, veniam. Doloribus dolorum eligendi optio.
       </p>
    </div>
    <div class="cont1 d-flex flex-column align-items-center justify-content-center">
        <h2 class="border-bottom border-success">Academics</h2>
       <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquid autem consectetur dicta doloremque dolores eum explicabo in, maiores natus non odio repellendus rerum sapiente sit unde, veniam. Doloribus dolorum eligendi optio.
       </p>
    </div>
    <div class="cont1 d-flex flex-column align-items-center justify-content-center">
        <h2 class="border-bottom border-success">Academics</h2>
       <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquid autem consectetur dicta doloremque dolores eum explicabo in, maiores natus non odio repellendus rerum sapiente sit unde, veniam. Doloribus dolorum eligendi optio.
       </p>
    </div>
</div>
</body>
</html>
