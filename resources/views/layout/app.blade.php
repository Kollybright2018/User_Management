<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <title>@yield('title')  </title>
</head>
<body>
     {{-- @include('layout.include.navbar') --}}

     <nav class="navbar navbar-expand-sm navbar-light bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{route('/')}} ">Home</a>
                    <a class="nav-link active" aria-current="page" href=" {{route('users')}} ">All Users</a>
                    
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center my-4 ">
            <h2 class=" mx-auto text-center">User Management System</h2>
         @yield('content');
    
        </div>
    </div>
</body>
</html>