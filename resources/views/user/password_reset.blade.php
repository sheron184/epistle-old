<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/x-icon" href="{{url('imgs/pngs/fav1.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height:100vh;">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="p-3 shadow"> 
                        <form action="/pswdreset" method="post" class="p-2">
                            @csrf 
                            <div class="form-group">
                                <h5>Reset Password</h5>
                            </div>
                            <div class="form-group">
                                <input type="password" name="new_password" class="form-control" placeholder="Enter new password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm password">
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="{{$email}}" name="email">
                                <input type="submit" class="btn btn-sm btn-success" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>