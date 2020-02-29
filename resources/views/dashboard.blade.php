<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>

<h2>User Details Page</h2>
  
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Action</th>
            </tr>
        </thead>
        <tbody>
			@foreach($data as $userdata) 
				<tr>
					<td>{{$userdata->id}}</td>
					<td>{{$userdata->fname}}</td>
					<td>{{$userdata->lname}}</td>
					<td>{{$userdata->phone}}</td>
					<td>{{$userdata->address}}</td>
					<td><a href="/apis/public/index.php/edituser/{{$userdata->id}}">Edit </a> | 
					<a href="/apis/public/index.php/deleteuser/{{$userdata->id}}"> Delete </a></td>
				</tr>
            @endforeach   
        </tbody>
        <tfoot>
            <tr>
                 <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Action</th>
            </tr>
        </tfoot>
    </table>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>
