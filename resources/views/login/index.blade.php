<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="login">
				<form method="post" action="<?php echo route('login.authentication'); ?>">
					@csrf
					<label for="chk" aria-hidden="true">SEMAR</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>

			<div class="aktivasi">
				<form>
					<label for="chk" aria-hidden="true">Aktivasi/Lupa</label>
					<button>Aktivasi Akun</button>
                    <button>Lupa Password</button>
				</form>
			</div>
	</div>
</body>
</html>