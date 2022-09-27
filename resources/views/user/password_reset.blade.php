<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <form action="/pswdreset" method="post">
                    @csrf 
                    <input type="text" value="{{$email}}" name="email">
                    <div class="form-group">
                        <input type="text" name="new_password" class="form-control" placeholder="Enter new password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Confirm password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-success" value="Reset">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>