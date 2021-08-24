<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('_partials.css')
    
</head>
<body>

    @include('_partials.navbar')
      
        <div class="container-fluid my-5 px-5">
            @yield('content')
        </div>

    @include('_partials.js')
    @stack('custom-script')
</body>
</html>