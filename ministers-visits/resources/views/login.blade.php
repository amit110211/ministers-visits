<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 bg-light text-end">
                <a href="{{ route('donerDashboard') }}" class="btn btn-primary mx-5">Login through Parichay</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto ">
                <div class="card mt-5">
                    <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">                    
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
                </div>
                </div>
            

            </div>
        </div>
    
    </div>
    

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>