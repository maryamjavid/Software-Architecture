<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='stylesheet' href='/css/style.css' />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Hacker Rank</title>
</head>
<body>
    <div class="header-top">
        <div class="container">
             <p>contact-us</p>
             <p class="about-us">about-us</p>
        </div>
    </div>
    <div class="header container">
         <div class="logo">
            <a href="{{ route('index') }}"><img src="/files/images/logo.png" alt=""></a>
         </div>
         <!-- <div class="navbar">
            <ul>
                <li>Products</li>
                <li>Solutions</li>
                <li>Resources</li>
                <li>Pricing</li>
            </ul>
         </div> -->
         <div class="loginRegister ">
             <a class="login" href="{{ route('login') }}" >Login</a>
             <a class="register" href="{{ route('register') }}" >Register</a>
         </div>
    </div>
    @yield('content')
</body>
</html>