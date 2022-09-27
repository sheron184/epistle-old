<html>
    <head>
        <title>WELCOME TO EPISTLE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
        <meta name="google-signin-client_id" content="447463456961-1101g31d1hhjcr5onkhimk82chkkffbg.apps.googleusercontent.com">
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
        
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- BS4 | ANIMATE | FONT-AWESOME | VANTA.JS | SPLIDE.JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.22/dist/vanta.net.min.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- splide -->
        <script src="{{url('/splide/dist/js/splide.min.js')}}"></script>
        <link rel="stylesheet" href="{{url('/splide/dist/css/splide.min.css')}}">
        <!-- MYCSS -->
        <link rel="stylesheet" href="{{url('/css/welcome.css')}}?{{uniqid()}}">
        <link rel="stylesheet" href="{{url('/css/welcomeContent.css')}}?{{uniqid()}}">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 pl-0 pr-0">
                    <div class="outer-wrapper position-relative">
                        <div class="welcome-container shadow h-100">
                            <div class="content-side pt-3 position-relative">
                                <div>
                                    <div class="pr-4">
                                        <h2 class="epistle">EPISTLE</h2>
                                    </div>
                                    <div class="pr-4">
                                        <h5 class="des-h h5">Let's learn harder<br> but in a smart way!</h5>
                                    </div>
                                    <div class="pr-4"><p class="des-h p">(Strictly for developers)</p></div>
                                    <div class="letsgo d-flex pr-4 pb-3">
                                        <a href="check" class="btn-lesgo">Let's go! <i class="fa-solid fa-rocket ml-2 animate__animated animate__heartBeat text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="slider-side d-flex justify-content-end">
                                @if(!session("logged_in"))
                                <div class="slider-content pb-5 pr-5 pl-5 pt-3 hideme animate__animated userareaModule">
                                    <button class="closeme text-white position-absolute"><i class="fa-regular fa-circle-xmark"></i></button>
                                    <div class="regorlog-container">
                                        <div id="regFormContainer">
                                            <div class="pt-2 pb-3">
                                                <h3 align="center" class="h-regorlog text-white">Sign Up</h3>
                                            </div>
                                            <form action="signup" method="post"> 
                                                <div class="f-wrapper">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">First name</label>
                                                        <input type="text" class="form-control-edited" placeholder="First name.." name="first_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Last name</label>
                                                        <input type="text" class="form-control-edited" placeholder="Last name.." name="last_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="text" class="form-control-edited" placeholder="Email.." name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Password</label>
                                                        <input type="text" class="form-control-edited" placeholder="Password.." name="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Confirm password</label>
                                                        <input type="text" class="form-control-edited" placeholder="Confirm password..">
                                                    </div>
                                                    <div class="form-group d-flex pt-3 mb-0 justify-content-center align-items-center">
                                                        <input type="submit" value="Sign Up" class="btn-reg">
                                                        <span class="ml-3 mr-3 font-bold">Or</span>
                                                        <a href="#" class="gotologin">Login</a>
                                                    </div>
                                                    <div class="signup-api-btns mt-3 pt-3">
                                                        <div class="g-signin2 d-flex justify-content-center" data-width="250" data-longtitle="true" data-text="signup_with" data-onsuccess="onSignIn" onclick="signInWithGoogle()"></div>                
                                                    </div>
                                                </div>  
                                            </form>
                                            <form id="signInWithGoogle" action="gauth" method="post">
                                                @csrf
                                                <input type="hidden" name="gid" id="gid">
                                                <input type="hidden" name="first_name" id="gfname">
                                                <input type="hidden" name="last_name" id="glname">
                                                <input type="hidden" name="gmail" id="gmail"> 
                                                <input type="hidden" name="password" value="">
                                            </form>
                                        </div>
                                        <div id="loginFormContainer" class="w-60 p-4 bl hide animate__animated">
                                            <div class="pb-3">
                                                <h4 class="h-regorlog text-white" align="center">Sign In</h4>
                                            </div>
                                            <form action="login" method="post">
                                                <div class="f-wrapper">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="text" name="email" class="form-control-edited" placeholder="Email..">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input type="text" name="password" class="form-control-edited" placeholder="Password..">
                                                </div>
                                                <div class="form-group d-flex justify-content-center align-items-center mb-0 pt-3">
                                                    <input type="submit" value="Sign In" class="btn-reg">
                                                    <span class="ml-3 mr-3 font-bold">Or</span>
                                                    <button class="gotoreg">Sign Up</button>
                                                </div>
                                                <div class="d-flex justify-content-center pt-3"><a href="forgot-password">Forgot password..?</a></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                            </div>
                            @endif
                            <div class="slider-content splide_slider">
                                @if(!session("logged_in"))
                                <button class="btn btn-1 btn-sep icon-info position-absolute loginModule">login</button>
                                @endif
                                <section class="splide" aria-label="Splide Basic HTML Example">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide text-white">
                                                <div class="h-100 slider-1">
                                                    <div style="background:#1111117f;position:fixed;" class="h-100 w-100 d-flex align-items-center">
                                                        <div>
                                                            <div class="p-3">
                                                                <h3 class="slider-text text-center">Are you a <span class="dev">developer<br></span> or an <span class="it">IT</span> student?</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide text-white">
                                                <div class="h-100 slider-2">
                                                    <div style="background:#1111117f;position:fixed;" class="h-100 w-100 d-flex align-items-center">
                                                        <div>
                                                            <div class="p-3">
                                                                <h3 class="slider-text text-center">Struggling to learn various new technologies?</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide text-white">
                                                <div class="h-100 slider-3">
                                                    <div style="background:#1111117f;position:fixed;" class="h-100 w-100 d-flex align-items-center justify-content-center">
                                                        <div>
                                                            <div class="p-3">
                                                                <h3 class="slider-text text-center">We are here to<br> help you learn.</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide text-white">
                                                <div class="h-100 slider-4">
                                                    <div style="background:#1111117f;position:fixed;" class="h-100 w-100 d-flex align-items-center">
                                                        <div>
                                                            <div class="p-3">
                                                                <h3 class="slider-text text-center">Create booklets, projects, teams and much more.</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide text-white">
                                                <div class="h-100 slider-5">
                                                    <div style="background:#1111117f;position:fixed;" class="h-100 w-100 d-flex align-items-center justify-content-center">
                                                        <div>
                                                            <div class="p-3">
                                                                <h3 class="slider-text text-center">Let's win the world!</h3>
                                                                <div class="d-flex justify-content-center">
                                                                    @if(session("logged_in"))
                                                                        <a href="home" class="button-85 btn">Get Started</a>
                                                                    @else
                                                                        <button class="button-85 loginModule">Join Us</button>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>            
                                    </div>    
                                </section>    
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
         </div>
        </div>
        <x-content />
        <x-footer />
    </body>
    <script>
        //splide slider
        const splide = new Splide( '.splide', {
            type    : 'fade',
            rewind:true,
            interval:4000,
            autoplay: 'playing',
            speed:1000,
            pauseOnHover:true,
            pagination:false,
            arrows:false,
            perPage : 1,
        });
        splide.mount();
        //vanta js background
        VANTA.NET({
            el: ".outer-wrapper",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x64f61,
            backgroundColor: 0x18161e,
            maxDistance: 22.00,
            spacing: 18.00
        });
        function write(str){
            i=0;
            setInterval(() => {
                $(".header").append(str[i]);
                i++;
            }, 130);
        }
        write("What do you get at epistle..?");
        $(".widget").each(function(i,ele){
            setTimeout(() => {
                $(ele).removeClass("hide");
                $(ele).addClass('animate__backInDown');
            }, (i+1)*600);      
        });
        $(document).ready(function(){
            $(".gotologin").click(function (e) { 
                e.preventDefault();
                $("#regFormContainer").addClass("animate__fadeOutDown");
                $("#regFormContainer").addClass("hide");
                $("#regFormContainer").removeClass("animate__fadeInUp");

                $("#loginFormContainer").removeClass("hide");
                $("#loginFormContainer").addClass("animate__fadeInUp");
                $("#loginFormContainer").removeClass("animate__fadeOutDown");
            });
            $(".gotoreg").click(function (e) { 
                e.preventDefault();
                $("#regFormContainer").removeClass("hide");
                $("#regFormContainer").removeClass("animate__fadeOutDown");

                $("#regFormContainer").addClass("animate__fadeInUp");
                $("#loginFormContainer").addClass("animate__fadeOutDown");

                $("#loginFormContainer").removeClass("animate__fadeInUp");
                $("#loginFormContainer").addClass("hide");
            });
        });
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var name = profile.getName();
            var names = name.split(" ");
            $("#gid").val(profile.getId());
            $("#gfname").val(names[0]);
            $("#glname").val(names[1]);
            $("#gmail").val(profile.getEmail());

            //$("#signInWithGoogle").submit();
            /*
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            */
        }
        function signInWithGoogle(){
            if($("#gid").val() != ""){
                $("#signInWithGoogle").submit();
            }else{
                onSignIn();
                signInWithGoogle();
            }
            
        }
        
        $(".loginModule").click(function(){
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut();
            $(".userareaModule").removeClass("hideme").addClass("animate__slideInRight").removeClass("animate__slideOutLeft");
            $(".splide_slider").addClass("hideme").addClass("animate__slideOutLeft").removeClass("animate__slideInRight");
        })
        $(".closeme").click(function(){
            $(".userareaModule").addClass("hideme").removeClass("animate__slideInRight").addClass("animate__slideOutLeft");
            $(".splide_slider").removeClass("animate__slideOutLeft").addClass("animate__slideInRight").removeClass("hideme");
        })
</script>
</html>
