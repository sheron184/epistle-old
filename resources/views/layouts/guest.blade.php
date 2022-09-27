<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Reset password</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        
    </head>
    <body>
        <div class="container" style="height:100vh">
            <div class="row h-100 align-items-center h-100 justify-content-center">
                <div class="col-xl-6 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="p-5 shadow-sm border">
                        <form action="reset_link" class="p-2" method="post">
                            @csrf
                            <div class="pb-2 mb-3">
                                <h5 align="center">Enter your email</h5>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Enter your email to send resetting link">
                            </div>
                            <div class="form-group d-flex justify-content-end mt-3">
                                <input type="submit" value="Send" class="btn btn-sm btn-dark">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
