<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESET PASSWORD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height:100vh;">
            <div class="col-6">
                <div class="shadow p-3">
                    <form action="reset_link" method="POST" class="p-2">
                        @csrf
                        <div class="form-group pb-3">
                            <h5>Add your email to send verification email</h5>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email..">
                            <input type="submit" value="Send Verification Link" class="btn btn-sm btn-dark mt-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>