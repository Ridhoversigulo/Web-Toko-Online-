<!doctype HTML>
<html>
<head>
    <title>Login admin</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
      body {
        padding-top: 100px;
      }
		</style>
</head>
<body>
<div class="container">
    <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-body"> 
				<h2 style="text-muted" class="text-center">LOGIN PENGGUNA</h2>
				
					<form action="proses-login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <input type="submit" name="kirim" value="Login" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Reset" class="btn btn-danger">
                    <a href="index.php"><span class="glyphicon glyphicon-home pull-right"> Home</span> </a>
                </form>
			</div>		
			</div>
		</div>
    </div>
</div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>