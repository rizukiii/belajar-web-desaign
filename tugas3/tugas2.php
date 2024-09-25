<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- <div class="container d-flex">
        <div class="mx-auto mt-5 w-50">
            <div class="card-header text-center">
                <h2>Login</h2>
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
    <input class="form-control" type="text" placeholder="Email Anda" aria-label="default input example">
    <input class="form-control form-control-sm" type="text" placeholder="Password Anda" aria-label=".form-control-sm example">
    </div>
    </div>
    </div> -->
    <div class="container-fluid">
        <form class="mx-auto" style="width:24%">
            <h4 class="text-center mt-5">Login</h4>
            <div class="mb-3 mt-5">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="email" class="form-control box-shadow:none; border: none; border-bottom: 1px solid border-radius:4px 4px" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                <div id="emailHelp" class="form-text">Forget Password?</div>
            </div>
            
            <button type="submit" class="btn btn-primary" style="width:100%; border: none; border-radius:50px;">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>