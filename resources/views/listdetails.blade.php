<!doctype html>
<html lang="en">
  <head>
  	<title>List Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	</head>
	<body>

	<section class="ftco-section">
		<div class="container">
		<table class="table">
			<thead>
				<tr>
				<th>Order ID</th>
                <th>Products List</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Total Cost</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->product_names }}</td>
                    <td>{{ $order->user_name }}</td>
                    <td>{{ $order->user_email }}</td>
                    <td>{{ $order->total_cost }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                </tr>
            @endforeach
			</tbody>
		</table>
		<div class="text-center">
		<!-- <a href="{{ route('logout') }}" class="btn btn-info" role="button">Log Out</a> -->
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Logout</button>
		</form>
		</div>
		</div>
	</section>	

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>

