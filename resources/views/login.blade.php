<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="col-md-8 card bg-warning">
            <div class="card-body">
                <hr>
                <h3 class="text-center bg-dark text-light">USER LOGIN</h3>
                <hr>
                <form action="/login-user" method="post">
                    @csrf
                <div class="mb-3">
                    
                       <label for="email"  class="form-label">Email address</label>
                       <input type="email" name="email" value="{{old('email')}}" class="form-control">
                       <span class="text-danger">@error('email'){{$message}}@enderror</span>
                        
                    </div>
                <div class="mb-3">
                    
                    <label for="password" class="form-label">Password</label>
                   <input type="password" class="form-control" name="password" value="">
                   <span class="text-danger">@error('password'){{$message}}@enderror</span>
                  
            </div>
                <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>                
                <br>
                 <span> New User?<a href="/registration" class="text-decoration-none">Register</a></span>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>