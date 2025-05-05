<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <div class="container">
    <div class="login-container bg-light p-3 rounded -3" style="width: 50%; margin: 0 auto">
        <!-- Display error message if authentication fails -->
        @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> 
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <form method="POST" action="{{ route('login.auth') }}" >
            @csrf
            <div class="container text-center">
            <p style="font-size: 50px; ">Welcome!</p>
            <p style="font-size: 15px; ">This is a platform for user's information.</p>
            </div>
            <div class="form-group">
                <label class = "form-label" style="font-weight: bold; ">Email</label>
                <input class = "form-control" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); border-color:#1C7D33;" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label class = "form-label" style="font-weight: bold;">Password</label>
                <input class = "form-control" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); border-color:#1C7D33;" type="password" name="password" required>
            </div>
            <div class="buttons pt-3 text-center">
                <button class = "btn btn-primary" type ="submit" style="background-color:#1C7D33">Log In</button> 
                <button class = "btn btn-primary" data-bs-toggle = "modal" data-bs-target = "#register">Register</button>
            </div>
        </form>
    </div>

        <!-- Register -->
         
        <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header" style="background-color:#1C7D33">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('register') }}" >
                            @csrf
                            <div class="form-group">
                                <label class = "form-label" >Name</label>
                                <input class = "form-control" type="text" name="name" required>
                            </div>
                            <div class="form-group">
                                <label class = "form-label" >Email</label>
                                <input class = "form-control" type="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label class = "form-label" >Password</label>
                                <input class = "form-control" type="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label class = "form-label" >Confirm Password</label>
                                <input class = "form-control" type="password" name="password_confirmation" required>
                            </div>
                            
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="  submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
                </div>
    </div>
</body>
</html>