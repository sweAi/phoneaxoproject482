
<!doctype html>

<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Signup</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    
    

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/signin.css" rel="stylesheet">
</head>
<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirmpassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';

  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';

  }
}
</script>
<body class="text-center">

<form class="form-signin" id="signupform" method="post" action="index.php">
    <h1 class="h3 mb-3 font-weight-normal">Phone Axo</h1>
        
        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="Email" required
           autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="password" class="form-control" name="pwd" placeholder="Password" style="margin-bottom: -1px;" onkeyup='check();' required>
    <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
    <input type="password" id="confirmpassword" class="form-control" name="cpwd" placeholder="Confirm Password" onkeyup='check();' required>   
    <span id='message'></span><br> 
</div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="sumbit"  >Sign-up</button>
    <p>Have an account? <a href="signin.html">sign-in!</a></p>
    <p class="mt-5 mb-3 text-muted">&copy;2020</p>

</form>


    
</body>
</html>