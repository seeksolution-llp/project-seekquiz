<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url('assets/');?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</head>
<body style="background-color: #c4e4ec;font-family: 'Poppins', sans-serif;">
    <div id="heght" class="px-4">
        <h3 class="text-center py-4">Seek Quiz</h3>
        <h5 style="text-align:center;">Log in to SeekQuiz</h5>
        <form action="">
            <div class="input-group flex-nowrap">
                <input type="text" class="inpt p-1" placeholder="Email/Username"  aria-label="Username" aria-describedby="addon-wrapping">
              </div>
              <div class="input-group d-flex flex-row justify-center mt-3">
                <input type="text" class="inpt p-1" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
              <div class="input-group my-3 justify-content-around flex-wrap ">
                <div>
                <input type="checkbox"> <span class="mx-2 text-secondary">Remember me?</span>
              </div>
                <a href="" style="text-decoration: none;" class="mx-2"> Forget Password?</a>
              </div>
              <div class="login-btn">
              <a href="" class="btn btn-primary mb-5">Log In</a>
            </div>
              
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>