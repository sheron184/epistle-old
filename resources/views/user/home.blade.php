<html>
    <head>
        <title>WELCOME TO EPISTLE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Ink&display=swap" rel="stylesheet">
        
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- BS4 | ANIMATE | FONT-AWESOME | VANTA.JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- MYCSS -->
        <link rel="stylesheet" href="{{url('/css/home.css')}}?{{uniqid()}}">
        <link rel="stylesheet" href="{{url('/css/btns.css')}}?{{uniqid()}}">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pl-0">
                    <x-home-header />
                </div>
            </div>
        </div>
        <x-home-content :booklets="$booklets" />
        <x-footer />
    </body>
</html>

