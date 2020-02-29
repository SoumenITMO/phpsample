<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>

<form action="/apis/public/index.php/updateuser" method="POST">
@csrf
  <div class="form-group">
    <label for="email"><b>Firstname</b></label>
    <input type="text" placeholder="Firstname" name="fname" value="{{$data[0]->fname}}">
  </div>
  
  <div class="form-group">
    <label for="psw"><b>Lastname</b></label>
    <input type="text" placeholder="Lastname" name="lname" value="{{$data[0]->lname}}">
  </div>
  
  <div class="form-group">
    <label for="psw-repeat"><b>Phone</b></label>
    <input type="text" placeholder="Repeat Password" name="phone" value="{{$data[0]->phone}}">
  </div>
  
  <div class="form-group">
    <label for="psw-repeat"><b>Address</b></label>
    <input type="text" placeholder="Address" name="address" value="{{$data[0]->address}}">
	<input type="hidden" placeholder="Address" name="uid" value="{{$data[0]->id}}">
  </div> 
  </div> 
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>
