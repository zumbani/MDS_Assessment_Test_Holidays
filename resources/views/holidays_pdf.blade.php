<!DOCTYPE html>
<html>
<head>
    <title>South African Holidays</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>    
<div class="container mt-5">
    <h2 class="mb-4">South African Holidays</h2>
    <table class="table table-bordered holiday-datatable">
        <thead>
            <tr>
                <th>Date</th>
                <th>Holiday Name</th> 
                <th>Holiday Year</th>              
            </tr>
        </thead>
        <tbody>
        @foreach ($holidays as $holiday)
            <tr>
                <th>{{ $holiday['holiday_date'] }}</th>
                <th>{{ $holiday['holiday_name'] }}</th> 
                <th>{{ $holiday['holiday_year'] }}</th>              
            </tr>
      @endforeach
        </tbody>
    </table>
</div>   
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {    
    var table = $('.holiday-datatable').DataTable({ });    
  });
</script>
</html>