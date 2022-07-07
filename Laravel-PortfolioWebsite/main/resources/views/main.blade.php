<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type= "text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="mainContainer">
    <div class="container1">
        <div class="backgroundPhoto">
            <div class="socialMediaCont">
                <img class="socialMedia" src="/img/fb.png" alt="">
                <img class="socialMedia" src="/img/ig.png" alt="">
                <img class="socialMedia" src="/img/twitter.png" alt="">
            </div>
        </div>   
    </div>

    <div class="container2">
        <header>
            <nav class="navbar">
                <i class="menuIcon material-icons">menu</i>
                <ul class="navul format bgcolor">
                    <li><a class="aboutMe" href="/index"> About me </a></li>
                    <li><a class="resume" href="/resume"> Resume </a></li>
                    <li><a class="portfolio" href="/portfolio"> Portfolio </a></li>
                    <li><a class="blog" href="/blog"> Blog </a></li>
                    <li><a class="codingChallenges" href="/codingchallenge"> Coding challenges </a></li>
                    <li><a class="contact" href="/contact"> Contact </a></li>
                </ul>
            </nav>
        </header>
        <div class="mycontent">
            @yield('content')
        </div>
        <footer>
        </footer>
    </div>

    

    <script src="/js/script.js"></script>

</body>
</html>