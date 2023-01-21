@if(!\Illuminate\Support\Facades\Auth::check() ) 
  {{ redirect()->route('index') }}
@endif
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='stylesheet' href='/css/style.css' />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="/js/jquery.js" ></script>
    <title>Developer Dashboard</title>
    <style>
           .top-header{
            height: 60px;
            background: #39424e;
           }
           .top-header .container a >img{
               width:60px;
               float:left;
           }
           .top-header .container a > .logo{
            margin-top: 12px;
            float: left;
            color: white;
            font-size: 24px;
           }
           .top-header .dropdown {
            float: right;
            margin-top: 10px;
            cursor: pointer;
            color: #c8dfe2;
            border: solid #727272 2px;
            padding: 7px 12px;
            position:relative;
           }
           .top-header .dropdown .title{
            font-size: 15px;
            font-weight: bold;
            margin: 0 2px 0 4px;
           }
           .top-header .dropdown .fa-user{
            font-size: 17px;
           }
           .top-header .dropdown .fa-sort-down{
            margin-top: 2px;
            float: right;
            margin-left: 6px;
           }
           .dropdown-body{
            position: absolute;
            background: white;
            color: black;
            width: 120%;
            top: 127%;
            right: 0;
            box-shadow: 0 6px 10px 0 rgba(0,0,0,.2);
            display: none;
            padding: 0px 15px;
            border-radius: 5px;
            border: solid #ccc 1px;
            z-index:5;
           }
           .hackos{
            display: block;
            text-align: center;
            margin: 20px 0;
            background: #4691f6;
            color: white;
            padding: 8px 0px;
            border-radius: 3px;
            font-size: 17px;
            width: 100%;
           }
           .dropdown-body ul li{
           
           }
           .dropdown-body ul li a{
            color: #424242;
            border-bottom: solid #a0a0a0 1px;
            padding: 7px 0;
            margin: 12px 0;
            font-size: 16px;
            display: block;
           }
           .dropdown ul li i{
            font-size: 15px;
            margin-right: 7px;
            color: #565656;
           }
    </style>
</head>
<body style="background:#f3f7f7">
    <div class="top-header">
        <div class="container">
            <a href="{{route('index')}}"><img src="/files/images/logoWhite.png" alt=""><span class='logo'>HackerRank</span></a>
            <div class="dropdown">
                <i class="far fa-user"></i>
                <span class='title'>{{ Illuminate\Support\Facades\Auth::user()->name }}</span>
                <i class="fas fa-sort-down"></i>

                <div class="dropdown-body">
                    <span class="hackos">HackoS:101</span>
                    <ul>
                        @if(Illuminate\Support\Facades\Auth::user()->role == 'D' )
                            <li><a href="{{ route('developerDashboard') }}"><i class="fas fa-clipboard-list"></i>Dashboard</a></li>
                            <li><a href="{{ route('profileDeveloper') }}"><i class="far fa-address-card"></i>Profile</a></li>
                            <li><a href="{{ route('logoutDeveloper') }}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                        @endif
                        @if(Illuminate\Support\Facades\Auth::user()->role == 'C' )
                            <li><a href="{{ route('companyDashboard') }}"><i class="fas fa-clipboard-list"></i>Dashboard</a></li>
                            <li><a href="{{ route('profileCompany') }}"><i class="far fa-address-card"></i>Profile</a></li>
                            <li><a href="{{ route('logoutCompany') }}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                        @endif
                    </ul>
                </div>
            </div>
         </div>
    </div>
    @yield('content')
    <script>
        $('.dropdown').click(function(){
            $(this).find('.dropdown-body').slideToggle();
        })
    </script>
</body>
</html>