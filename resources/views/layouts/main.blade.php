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
        <ul>
            <li><img src="{{asset('images/dc-logo.png')}}" alt=""></li>
        <li><a href="{{route('comics')}}"><h4>comics</h4></a></li>
        <li><a href="{{route('contacts')}}">contacts</a></li>
        <li><a href="{{route('faq')}}">faq</a></li>
    </ul>
    </header>
    <main>
        @yield('main-content')
    </main>
    <footer>
        <footer>
            <ul>
                <li><h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolor sapiente, porro ducimus earum, quas iusto maxime voluptatem corporis doloremque perferendis nihil. Perferendis dignissimos odio itaque ullam neque repudiandae non.</h5></li>
                <li><h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolor sapiente, porro ducimus earum, quas iusto maxime voluptatem corporis doloremque perferendis nihil. Perferendis dignissimos odio itaque ullam neque repudiandae non.</h5></li><li><h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolor sapiente, porro ducimus earum, quas iusto maxime voluptatem corporis doloremque perferendis nihil. Perferendis dignissimos odio itaque ullam neque repudiandae non.</h5></li>
            </ul>
        </footer>
    </footer>
</body>
</html>