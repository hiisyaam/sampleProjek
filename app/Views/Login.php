<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | SIRISA</title>

    <!-- Custom fonts for this template-->
    <link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,900" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/template/css/sb-admin-2.min.css" rel="stylesheet">
    

</head>

<body>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-5 col-md-6">

                <div class="card shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Login SIRISA</h1>
                        </div>
                        <form class="user" method="POST" action="/login">
                            <?php if(session()->getFlashdata('msg')):?>
                                <div style="color:red;"><?= session()->getFlashdata('msg') ?></div>
                            <?php endif;?>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    id="exampleInputUsername" placeholder="Username" name="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Password" name="password">
                            </div>

                            <a href="/" class="btn btn-primary btn-block btn-user" type="submit">
                                Login
                            </a>
                        </form>
                        <div class="row justify-content-center mt-4" style="background-color: gray;">
                            <h3>ADA LOGO</h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/template/vendor/jquery/jquery.min.js"></script>
    <script src="/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/template/js/sb-admin-2.min.js"></script>

    
</body>

</html>
