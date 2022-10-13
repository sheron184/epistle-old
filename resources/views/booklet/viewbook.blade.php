<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$booklet->topic}}</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- BS4 | ANIMATE | FONT-AWESOME | VANTA.JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- MYCSS -->
    <link rel="stylesheet" href="{{url('/css/booklet_view.css')}}?{{uniqid()}}">
    <link rel="stylesheet" href="{{url('/css/btns.css')}}?{{uniqid()}}">
</head>
<body>
    <input type="hidden" value="{{$booklet->content}}" id="bookContent">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pb-2 pt-2 shadow-sm border">
                <div class="d-flex">
                    <a href="/home" class="f-20"><i class="fa-solid fa-circle-left"></i></a>
                    <h4 class="capitalize ml-3">{{$booklet->topic}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <div class="p-2 d-flex justify-content-end">
                    <div class="d-flex align-items-center">
                        <a class="item-action heart f-30 ml-3" href="#"><i class="fa-regular fa-heart"></i></a>
                        <a class="item-action save f-30 ml-3" href="#"><i class="fa-regular fa-bookmark"></i></a>
                        <a class="item-action share f-30 ml-3" href="#"><i class="fa-solid fa-share"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-4">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 100vh mt-4">
                <div class="book-container-wrapper vh100">
                    <iframe title="description" id="bookContainer"></iframe>    
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>
<script>
    $(document).ready(function(){
        let iframe = document.getElementById("bookContainer");
        var parser = new DOMParser();
        var content = $("#bookContent").val();
        var html = parser.parseFromString(content,"text/html");
        var body = $("#bookContainer").contents().find("body");
        body.append(html.body.innerHTML);
        //iframe.contentWindow.document.open();
        //iframe.contentWindow.document.write(html);
        //iframe.body.innerHTML = html.body.innerHTML;
        //console.log(html.body.innerHTML)
        //$(".bookContainer").html(html.body.innerHTML);
    })
</script>
</html>