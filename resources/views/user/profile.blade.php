<html>
    <head>
        <title>PROFILE | {{strtoupper($user->first_name)}} {{strtoupper($user->last_name)}}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{url('imgs/pngs/fav1.png')}}">
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url('/css/profile.css')}}">
        <link rel="stylesheet" href="{{url('/css/home.css')}}?{{uniqid()}}">
    </head>
    <body>
        <div class="container-fluid mb-4">
            <div class="row">
                <div class="col-12 pl-0 pr-0">
                    <x-ProfileHeader />
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                    <x-profilecard :user="$user" />
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="pt-4 pb-3">
                                <div class="devider-header">
                                    <h5>Your Booklets</h5>
                                    <div class="triangle"></div>    
                                </div>
                            </div>
                        </div>
                        @if(count($booklets)>0)
                            @foreach($booklets as $book)
                                <x-booklet :book="$book" :action="$action='edit'" />
                            @endforeach
                        @else 
                            <div class="col-12">
                                <div class="alert alert-danger" style="width:fit-content;">
                                    <h5>No Booklets Yet!</h5>
                                    <p align="center" class="mb-0 font-size-large">🙁</p>
                                </div>
                            </div>
                        @endif
                        <div class="col-12">
                            <div class="pt-4 pb-3">
                                <div class="devider-header">
                                    <h5>Your Projects</h5>
                                    <div class="triangle"></div>    
                                </div>
                            </div>
                        </div>
                        @if(count($booklets)>0)
                            @foreach($projects as $project)
                                <x-project :project="$project" :action="$action='edit'" />  
                            @endforeach 
                        @else 
                            <div class="col-12">
                                <div class="alert alert-danger" style="width:fit-content;">
                                    <h5>No Projects Yet!</h5>
                                    <p align="center" class="mb-0 font-size-large">🙁</p>
                                </div>
                            </div>
                        @endif
                        <div class="col-12">
                            <div class="pt-4 pb-3">
                                <div class="devider-header">
                                    <h5>Your Teams</h5>
                                    <div class="triangle"></div>    
                                </div>
                            </div>
                        </div>
                        <x-team />
                        <x-team />
                        <x-team />
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
    </body>
</html>