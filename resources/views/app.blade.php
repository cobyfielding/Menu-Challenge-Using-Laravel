<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    <link rel="stylesheet" href="css/main.css">

    <style>
        html, body {
            height: 100%;
        }
        h2 {
            font-size:16px;
        }
        img {
            height: 194px;
            width: 283px;
        }
        
    </style>
</head>
<body>
<h1 class="text-center"><a href="/"><img src="images/logo.png" alt=""></a></h1>
<div class="container">
    <div class="row">
@yield('content')
    </div>
</div>
</body>
</html>
