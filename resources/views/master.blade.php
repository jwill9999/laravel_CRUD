<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>    
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

    <div class="container">
    @include('./partials/header')
        <main role="main" class="container mt-5">
            <div class="row">
                @yield('content')
    @include('./partials/sidebar')
            </div>
        </main>
    </div>
    @include('./partials/footer')
    

</body>

</html>