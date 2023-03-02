<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
</head>
<body>
<div style="hight: 100vh">
    <div class="clrow h-100 m-0ass container">
        <div class="card border-0 mx-auto w-50">
            <div class="card-header bg-transparent border-0">
                <h1 class="text-center text-primary text-uppercase">login<i class="fa-solid fa-right-to-bracket"></i></h1>
            </div>
            <div class="card-body">
                <form action="../actions/login.php" method="post" class="w-75 mx-auto">
                    <div class="row">
                        <label for="" class="col-md-3 text-secondary">Username</label>
                        <div class="col">
                            <input type="text" name="username" placeholder="Username" class="form-control mb-2" required autofocus>
                        </div>
                    </div>    
                    <div class="row">
                        <label for="" class="col-md-3 text-secondary">Password</label>
                        <div class="col">
                            <input type="password" name="password" placeholder="Password" class="form-control mb-5" required>
                        </div>  
                    </div>
                    <div class="row mb-3 g-2">
                        <div class="col">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </div> 
                    <div class="row mb-3 g-2">
                        <div class="col text-center">
                            <button type="button" class="btn btn-danger w-60" data-bs-toggle="modal" data-bs-target="#register">Create an Account</button>
                        </div>
                    </div> 
                </form>

                <!-- Modal registration-->
                <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body p-5">
                                <h1 class="text-danger text-center"><i class="fa-solid fa-user-plus"></i>Registration</h1>
                                <form action="" class="mx-auto w-75 pt-4 p-5">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="" class="col text-secondary">First Name</label>
                                            <input type="text" name="first_name" class="form-control mb-2" required autofocus>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="col text-secondary">Last Name</label>
                                            <input type="text" name="last_name" class="form-control mb-2" required autofocus>
                                        </div>
                                    </div>    
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label for="" class="col text-secondary">Userame</label>
                                            <input type="text" name="username" class="form-control mb-2" required autofocus>
                                        </div>
                                    </div>    
                                    <div class="row mb-4">
                                        <div class="col-md">
                                            <label for="" class="col text-secondary">Password</label>
                                            <input type="text" name="password" class="form-control mb-2" required autofocus>
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-md text-center">
                                            <button type="button" class="btn btn-danger w-100">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>