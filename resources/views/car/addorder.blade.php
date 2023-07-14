<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Order</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }

        
        .dark-mode .container {
            background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
           
        }

        .dark-mode form {
            background-color: #222;
            
        }
    </style>
</head>
<body>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color: white;">Add Order</h2>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            
            <form class="animate__animated animate__fadeIn" method="post" action="{{ route('saveorder') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Order ID</label>
                    <input type="text" class="form-control" name="order_id" placeholder="Order ID">
                    @error('order_id')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Customer ID</label>
                    <input type="text" class="form-control" name="customer_id" placeholder="Customer ID">
                    @error('customer_id')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Meal ID</label>
                    <input type="text" class="form-control" name="meal_id" placeholder="Meal ID" readonly>
                    @error('meal_id')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="text" class="form-control" name="quantity" placeholder="Quantity">
                    @error('quantity')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Table No</label>
                    <select class="form-select" name="table_no">
                        @for ($i = 1; $i <= 20; $i++)
                            <option value="{{ $i }}">Table {{ $i }}</option>
                        @endfor
                    </select>
                    @error('table_no')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Menu</label>
                    <select class="form-select" name="menu">
                        <option value="1">Steak - 2000</option>
                        <option value="2">Pasta - 500</option>
                        <option value="3">Korma - 400</option>
                        <option value="4">Burger - 550</option>
                        <option value="5">Pizza - 1700</option>
                        <option value="6">Soup - 300</option>
                        <option value="7">Sandwich - 300</option>
                        <option value="8">Biryani - 400</option>
                        <option value="9">ChickenTika - 500</option>
                        <option value="10">Karahi - 1300</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Total</label>
                    <input type="text" class="form-control" name="total" placeholder="Total" readonly>
                    @error('total')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('displayorder') }}" class="btn btn-danger animate__animated animate__fadeInUp">Back</a>
            </form>
        </div>
    </div>
</div>

<button id="dark-mode-btn" onclick="toggleDarkMode()">Dark Mode</button>

<script>
    function toggleDarkMode() {
        const body = document.body;
        body.classList.toggle('dark-mode');
    }
    
    const quantityInput = document.querySelector('input[name="quantity"]');
    const menuSelect = document.querySelector('select[name="menu"]');
    const mealIdInput = document.querySelector('input[name="meal_id"]');
    const totalInput = document.querySelector('input[name="total"]');

    quantityInput.addEventListener('input', updateTotal);
    menuSelect.addEventListener('change', updateTotal);

    function updateTotal() {
        const quantity = parseInt(quantityInput.value);
        const menuValue = menuSelect.value;
        let price = 0;
        let mealId = "";

        if (menuValue === "1") {
            price = 2000;
            mealId = "1";
        } else if (menuValue === "2") {
            price = 500;
            mealId = "2";
        } else if (menuValue === "3") {
            price = 400;
            mealId = "3";
        } else if (menuValue === "4") {
            price = 550;
            mealId = "4";
        } else if (menuValue === "5") {
            price = 1700;
            mealId = "5";
        } else if (menuValue === "6") {
            price = 300;
            mealId = "6";
        } else if (menuValue === "7") {
            price = 300;
            mealId = "7";
        } else if (menuValue === "8") {
            price = 400;
            mealId = "8";
        } else if (menuValue === "9") {
            price = 500;
            mealId = "9";
        } else if (menuValue === "10") {
            price = 1300;
            mealId = "10";
        }

        
        const total = quantity * price;

        // Update the mealId and total input fields
        mealIdInput.value = mealId;
        totalInput.value = total;
    }
</script>

</body>
</html>
