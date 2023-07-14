<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Customer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        .container {
            background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            opacity: 0;
            animation: fadeIn 1s forwards;
            animation-delay: 0.2s;
        }

        .form-label {
            animation: fadeInUp 1s;
            animation-delay: 0.2s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    
<div class="container" style="margin-top: 20px;" >
    <div class="row">
        <div class="col-md-12">
            <h2 style="color: white;">Add Customer</h2>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <form class="animate__animated animate__fadeIn" method="post" action="{{ route('savecustomer') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label animate__animated animate__fadeInUp"></label>
                    <input type="text" class="form-control animate__animated animate__fadeInUp" name="customer_id" placeholder="Customer ID" >
                    @error('customer_id')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label animate__animated animate__fadeInUp"></label>
                    <input type="text" class="form-control animate__animated animate__fadeInUp" name="customer_name" placeholder="Customer Name">
                    @error('customer_name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label animate__animated animate__fadeInUp"></label>
                    <input type="text" class="form-control animate__animated animate__fadeInUp" name="contact_number" placeholder="Contact Number">
                    @error('contact_number')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label animate__animated animate__fadeInUp">Email</label>
                    <input type="text" class="form-control animate__animated animate__fadeInUp" name="email" placeholder="email">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary animate__animated animate__fadeInUp">Submit</button>
                <a href="{{ route('displaycustomer') }}" class="btn btn-danger animate__animated animate__fadeInUp">Back</a>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.js"></script>
</body>
</html>