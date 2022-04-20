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
<div class="container">
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
</html>