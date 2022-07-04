<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" href="{{ asset('img/dot.png') }}">
    <title>Margaux K. Bofane | portfolio</title>
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BhuTuka+Expanded+One&family=Noto+Serif+Display:wght@300&family=Oswald:wght@200&family=Playfair+Display:ital@1&family=Poiret+One&display=swap" rel="stylesheet">
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main>
        @yield('content')
    </main>
    <footer>
        <div> 
            <a href="/downloadPdf" class="btn btn-transparent" id="download">
                <span class="me-3" id="downloadText">
                    download cv
                </span>
                <img src="{{asset('img/download.png')}}" alt="download" width="20px" id="downloadImg">
            </a>
        </div>
         <div id="iconeSocial">
             <div class="my-4">
                     {{-- github --}}
                 <a href="https://github.com/mukaji-k" target="_blank">
                     <img src="{{asset('img/github.png')}}" alt="github" width="50px">
                 </a>
             </div>
             <div>
                     {{-- linkedin --}}
                 <a href="https://www.linkedin.com/in/margaux-kabwanga-bofane/" target="_blank">
                     <img src="{{asset('img/linkedin.png')}}" alt="linkedin" width="50px">
                 </a>
             </div>
         </div>
    </footer>
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>