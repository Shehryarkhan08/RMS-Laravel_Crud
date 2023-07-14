<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>update meal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
    <div class="container" style="margin-top: 20px;" >
            <div class="row">
                <div class="col-md-12">
                    <h2>Update Meal</h2>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                <form method="post" action="{{route('updatemeal')}}">
                    @csrf
                    <input type="hidden" name="meal_id" value="{{$mealdata->meal_id}}">
                    <div class="md-3">
                        <label class="form-label">Meal_ID</label>
                        <input type="text" class="form-control"name="meal_id"  value="{{$mealdata->meal_id}}"  placeholder="Meal ID">
                        @error('meal_id')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror

                    </div>

                    <div class="md-3">
                        <label class="form-label">meal_name</label>
                        <input type="text" class="form-control"name="meal_name"  value="{{$mealdata->meal_name}}"    placeholder="Name">
                        @error('meal_name')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control"name="description" value="{{$mealdata->description}}"     placeholder="description">
                        @error('description')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control"name="price" value="{{$mealdata->price}}"     placeholder="price">
                        @error('price')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        @enderror
                    </div>

                    
                        <br>
                    </div> 
                   <button type="submit" class="btn btn-primary">Submit</button> 
                   <a href="{{route('displaymeal')}}" class="btn btn-danger">Back</a>

                </form>
                </div>
            </div>
    </div>
    </body>
</html>