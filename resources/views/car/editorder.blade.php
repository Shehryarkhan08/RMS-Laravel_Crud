<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>update order</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
    <div class="container" style="margin-top: 20px;" >
            <div class="row">
                <div class="col-md-12">
                    <h2>Update Customer</h2>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <form method="post" action="{{route('updateorder')}}">
                    @csrf
                    <input type="hidden" name="order_id" value="{{$orderdata->order_id}}">
                    <div class="md-3">
                        <label class="form-label">Order_ID</label>
                        <input type="text" class="form-control"name="order_id"  value="{{$orderdata->order_id}}"  placeholder="order ID">
                        @error('order_id')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror

                    </div>

                    <div class="md-3">
                        <label class="form-label">Customer_id</label>
                        <input type="text" class="form-control"name="customer_id"  value="{{$orderdata->customer_id}}"    placeholder="Customer_id">
                        @error('customer_id')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-label">meal_id</label>
                        <input type="text" class="form-control"name="meal_id" value="{{$orderdata->meal_id}}"     placeholder="meal_id">
                        @error('meal_id')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-label">quantity</label>
                        <input type="text" class="form-control"name="quantity" value="{{$orderdata->quantity}}"     placeholder="quantity">
                        @error('quantity')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-label">table_no</label>
                        <input type="text" class="form-control"name="table_no" value="{{$orderdata->table_no}}"     placeholder="table_no">
                        @error('table_no')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror
                    </div>
                    
                    <div class="md-3">
                        <label class="form-label">total</label>
                        <input type="text" class="form-control"name="total" value="{{$orderdata->total}}"     placeholder="total">
                        @error('total')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror
                    </div>
                    
                        <br>
                    </div> 
                   <button type="submit" class="btn btn-primary">Submit</button> 
                   <a href="{{route('displayorder')}}" class="btn btn-danger">Back</a>

                </form>
                </div>
            </div>
    </div>
    </body>
</html>