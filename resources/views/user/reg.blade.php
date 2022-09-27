<html>
    <head>
        <title>USER AREA</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url('/css/reg.css')}}?{{uniqid()}}">
    </head>
    <body>
        <div class="container">
            <div class="row d-flex align-items-center h-100">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                    <div class="reg-img p-4 w-40 shadow"></div>
                    <div id="regFormContainer" class="w-60 shadow bl p-4 animate__animated">
                        <div class="pb-3">
                            <h4 align="center">Sign Up</h4>
                        </div>
                        <form action="signup" method="post"> 
                            <div class="f-wrapper">
                            @csrf
                            <div class="form-group">
                                <label for="">First name</label>
                                <input type="text" class="" placeholder="First name.." name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="">Last name</label>
                                <input type="text" class="" placeholder="Last name.." name="last_name">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="" placeholder="Email.." name="email">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" class="" placeholder="Password.." name="password">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm password</label>
                                <input type="text" class="" placeholder="Confirm password..">
                            </div>
                            <div class="form-group d-flex pt-3 mb-0 justify-content-center align-items-center">
                                <input type="submit" value="Sign Up" class="btn-reg">
                                <span class="ml-3 mr-3 font-bold">Or</span>
                                <a class="gotologin">Login</button>
                            </div>
                            </div>  
                        </form>
                    </div>
                    <div id="loginFormContainer" class="w-60 shadow p-4 bl hide animate__animated">
                        <div class="pb-3">
                            <h4 align="center">Sign In</h4>
                        </div>
                        <form action="login" method="post">
                            <div class="f-wrapper">
                            @csrf
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="" placeholder="Email..">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="password" class="" placeholder="Password..">
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
        </div>
    </body>
    <script>
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
        })
    </script>
</html>