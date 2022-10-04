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
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.11/lib/draggable.bundle.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
    <!-- MYCSS -->
    <link rel="stylesheet" href="{{url('/css/booklet_view.css')}}?{{uniqid()}}">
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12 pl-0">
                <div class="elements-bar p-2 h-100vh">
                    <x-elements />
                </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="canvas-wrapper p-2 border d-flex justify-content-center">
                    <div id="dropbox" class="canvas"></div>
                </div>
            </div>
            <div class="col-12">
                <div>
                    <form action="/pdf" method="post" class="p-2">
                        @csrf
                        <textarea id="html_content" type="text" name="html" class="form-control"></textarea>
                        <input type="submit" value="PDF" class="btn btn-sm btn-danger">
                      </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{url('/js/booklet.js')}}?{{uniqid()}}"></script>
</html>