<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="card col-md-8 bg-warning">
            <div class="card-body">
                <hr>
                <h3 class="text-center bg-dark text-light">USER REGISTER</h3>
                <hr>
                <form action="/register-user" method="post">
                    @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="name@example.com">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}">
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-primary">Register</button>
                <br>
                
                Already Registered?<a href="/login" class="text-decoration-none">Login</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>