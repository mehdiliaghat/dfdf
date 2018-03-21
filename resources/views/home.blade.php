
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود نجاه</title>
    <!-- Core CSS - Include with every page -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap4/home.css')}}">
    <style>
        body  {
            background-image: url('img/nejahHome.jpg');
            background-color: #cccccc;
            background-attachment: fixed;
            background-repeat:no-repeat;
            background-size:cover;


        }
    </style>
</head>
<body class="body-Login-back">

    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">Logo</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">ورود</a>
            </li>
        </ul>
    </nav>



<!-- Core Scripts - Include with every page -->

<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap4/bootstrap.min.js')}}"></script>
</body>
</html>