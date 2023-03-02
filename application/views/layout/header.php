<!doctype html>
<html lang="en">

<head>
    <base href="<?php echo base_url('assets/');?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>seekQuiz a online quiz creator</title>
    <link rel="stylesheet" href="css/cssstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <div class="container-fluid">
        <!-- ============================================Outer open============================================ -->
        <!-- ============================================Navbar============================================ -->
        <div class="row sticky-top" style="background-image: -webkit-linear-gradient(top,#3c3c3c 0,#222 100%);">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-lg " style="padding: 0px;">

                                <a class="navbar-brand" href="<?php echo base_url('Welcome/index'); ?>">
                                    <img src="images/FlexiQuizLogoExtraSmall.jpg" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                  </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-current="page" href="<?php echo base_url('Welcome/index'); ?>">Home</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo base_url('Welcome/feature');?>">Features</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo base_url('Welcome/plan');?>">Plans</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Help</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <form class="navbar-form navbar-right" role="form">
                                                <a href="<?php echo base_url('Welcome/signUp');?>"class="btn Button btn-sm px-3" style="background-color: #337AB7; color:white;" type="submit">SignUp</a>
        <a href="<?php echo base_url('Welcome/logIn');  ?>"class="btn btn-sm Button text-light" role="button" style="background-color: #0fb25c;" type="submit">Login</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!--=========================================nabvar==================================== -->
