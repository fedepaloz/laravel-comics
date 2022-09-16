<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{'css/app.css'}}">
    <title>Document</title>
</head>
<body>
    <header>
         @include('includes.header')
    </header>
    <main>
        @yield('main-content')
    </main>
    <footer>
       <h1>footer</h1>
    </footer>
</body>
</html>