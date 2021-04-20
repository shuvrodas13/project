<html>

<head>
    <title>BD Sale laravel crud</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .header {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }
        body {
            background-color:  #64cc7e;
        }

    </style>

</head>

<body>
    <div>

     <div class="text-center header">

        <h1>Product Information</h1>
       

    </div>

    @section('sidebar')

    @show

<div style="padding-top: 80px;">
    <div class="container">
        @yield('content')
    </div>
</div>

    <div class="text-center footer">

        <h4>Name:Bipropod Das Shuvro</h4>
        <h4>ID:171-115-071
        <h4>Email:shuvro6589@gmail.com</h4>
        <h4> Github: www.github.com/shuvrodas13</h4>

    </div>
</div>

</body>

</html>
