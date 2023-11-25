<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        html, body{
            height: 100%
        }
        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
        .form-signup{
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        .form-signup .checkbox{
            font-weight: 400;
        }
        .form-signup .form-floating:focus-within{
            z-index:2;
        }
        .form-signup input[type=email]{
            margin-bottom: -1px;
        }
        .form-signup input[type=password]{
            margin-bottom: 10px;
        }
        .form-floating{
            margin: 10px;
        }
        .btn{
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="text-center">
    <main class="form-signup">
        <form action="register.php" method="post">
            <img class="mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="Bootstrap logo" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Register</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name">
                <label for="floatingInput">Name</label>
            </div>
             <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Surname" name="surname">
                <label for="floatingInput">Surname</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="Email">
                <label for="floaitngInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingInput" placeholder="Password">
                <label for="floaitngInput">Password</label>
            </div>
            
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign Up</button>
            <span>Already have an account: </span> <a href="login.php">Sign in</a>
        </form>
    </main>
</body>
</html>