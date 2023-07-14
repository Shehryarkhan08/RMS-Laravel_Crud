<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
            background-size: cover;
            background-position: center;
        }

        .container {
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
        }

        .addcustomer a {
            float: right;
            margin-right: 30px;
        }

        .table th,
        .table td {
            padding-left: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Customer List</h2>

                <div class="addcustomer">
                    <a href="{{route('addcustomer')}}" class="btn btn-primary">Add Customers</a><br><br>
                </div>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="table-responsive">
                    <table id="customer-table" class="table">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customerdata as $cust)
                                <tr>
                                    <td>{{$cust->customer_id}}</td>
                                    <td>{{$cust->customer_name}}</td>
                                    <td>{{$cust->contact_number}}</td>
                                    <td>{{$cust->email}}</td>
                                    <td>
                                        <a href="{{ route('editcustomer', ['customer_id' => $cust->customer_id]) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('deletecustomer', ['customer_id' => $cust->customer_id]) }}" class="btn btn-danger">Delete</a> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#customer-table').DataTable();
        });
    </script>
</body>
</html>
