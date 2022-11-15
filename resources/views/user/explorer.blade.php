<html>
    <head>
        <title>WELCOME TO EPISTLE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
        <link rel="icon" type="image/x-icon" href="{{url('imgs/pngs/fav1.png')}}">
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
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
        <link rel="stylesheet" href="{{url('/css/explorer.css')}}?{{uniqid()}}">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pl-0 pr-0">
                    <div class="p-3 shadow-sm d-flex align-items-center">
                        <a href="home"><h4 class="f-20 mb-0"><i class="fa-solid fa-house"></i></h4></a>
                        <h4 class="ml-3 ReemKufiInk mb-0">Explorer - </h4><h5 class="ml-1 mb-0">Search your tagged info</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <div class="pt-4">
                        <div class="d-flex">
                            <input type="text" placeholder="#hashmap" class="form-control search-input">
                            <button class="ml-3 button-71"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="container h-100vh mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="pb-3">
                        <h4 class="font-bold">Recent</h4>
                    </div>
                </div>
                <div class="col-12 block">
                    <div class="hash p-2">
                        <div class="border p-3">
                        <a href="#" class="hashtag font-bold">#forloopjava</a>
                        <div class="mt-2 component #hash">
                            <div class="rectangle">
                                <h5>For loop (java)</h5>
                                <p>
                                    for (statement 1; statement 2; statement 3) {<br>
                                    // code block to be executed <br> 
                                  }
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="hash p-2">
                        <div class="border p-3">
                        <a href="#" class="hashtag font-bold">#pythonSets</a>
                        <div class="mt-2 component #hash">
                            <div class="rectangle">
                                <h5>Sets in python</h5>
                                <p>
                                    thisset = {"apple", "banana", "cherry"} <br>
                                    print(thisset)<br> 
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="hash p-2">
                        <div class="border p-3">
                        <a href="#" class="hashtag font-bold">#stringtointCsharp</a>
                        <div class="mt-2 component #hash">
                            <div class="rectangle">
                                <h5>String to int C#</h5>
                                <p>
                                    int x = 12;
                                    string xx = Convert.ToInt32(x);
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="hash p-2">
                        <div class="border p-3">
                        <a href="#" class="hashtag font-bold">#forloopjava</a>
                        <div class="mt-2 component #hash">
                            <div class="rectangle">
                                <h5>For loop (java)</h5>
                                <p>
                                    for (statement 1; statement 2; statement 3) {<br>
                                    // code block to be executed <br> 
                                  }
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
    </body>
</html>

