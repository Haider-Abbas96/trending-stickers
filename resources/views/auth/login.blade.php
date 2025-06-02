<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
                margin-top: 80px;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn {
            width: 100%;
            margin-top: 10px;
        }
        .form-check {
            margin: 15px 0;
        }
        hr {
            margin: 20px 0;
        }
        .text-center {
            text-align: center;
            margin-top: 10px;
        }
        .card-container {
            max-width: 900px;
            margin: 0 auto;
                border: none;
        }
        .img-section img {
            width: 80%;
            height: 80%;
              margin-left: 50px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        @media (max-width: 768px) {
            .img-section img {
                border-top-right-radius: 0.375rem;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
        }
    </style>
</head>
<body>
    <div class="card-container card mb-3">
        <div class="row g-0">
            <!-- Form Section -->
            <div class="col-md-6">
                <div class="card-body p-4">
                    <h1>Login</h1>
                    
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        
                        
                        
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        
                       
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="termsCheck">
                            <label class="form-check-label" for="termsCheck">
                                I agree all statements in Terms of service
                            </label>
                        </div>
                        
                        <hr>
                        
                        <button type="submit" class="btn btn-primary">Login</button>
                        
                        <a href="{{ route('signup') }}"><p class="text-center mt-3">creat an account</p></a>
                    </form>
                </div>
            </div>
            
            <!-- Image Section -->
            <div class="col-md-6 img-section">
                <img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signin-image.jpg" alt="Signup image" class="img-fluid">
            </div>
        </div>
    </div>

</body>
</html>