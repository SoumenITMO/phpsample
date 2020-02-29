<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <form class="text-center border border-light p-5" action="/apis/public/index.php/loginuser" method = "post">
	@csrf
    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" name="password" placeholder="Password">

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
	</form>
	<!-- Default form login -->
  </div>
  <a href="/apis/public/index.php/showregister" class="button">Sign up</a>
</div>