<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>update customer</title>
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
                <form method="post" action="{{route('updatecustomer')}}">
                    @csrf
                    <input type="hidden" name="customer_id" value="{{$customerdata->customer_id}}">
                    <div class="md-3">
                        <label class="form-label">Customer_ID</label>
                        <input type="text" class="form-control"name="customer_id"  value="{{$customerdata->customer_id}}"  placeholder="Customer ID">
                        @error('customer_id')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror

                    </div>

                    <div class="md-3">
                        <label class="form-label">Customer_name</label>
                        <input type="text" class="form-control"name="customer_name"  value="{{$customerdata->customer_name}}"    placeholder="Name">
                        @error('customer_name')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-label">contact_number</label>
                        <input type="text" class="form-control"name="contact_number" value="{{$customerdata->contact_number}}"     placeholder="Contact Number">
                        @error('contact_number')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror
                    </div>

                    
                        <br>
                    </div> 
                   <button type="submit" class="btn btn-primary">Submit</button> 
                   <a href="{{route('displaycustomer')}}" class="btn btn-danger">Back</a>

                </form>
                </div>
            </div>
    </div>
    </body>
</html>