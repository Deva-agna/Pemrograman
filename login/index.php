<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login/php</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<div id="card">
		<div id="card-content">
  			<div id="card-title">
    			<h2>LOGIN</h2>
    			<div class="underline-title">
    			
    			</div>
  			</div>
		</div>
		<form method="post" class="form">
		<label for="user-email" style="padding-top:13px">&nbsp;Email</label>
  		<input
   			id="user-email"
   			class="form-content"
   			type="email"
   			name="email"
   			autocomplete="on"
   			required />
  		<div class="form-border"></div>
		<label for="user-password" style="padding-top:13px">&nbsp;Password</label>
  		<input
   			id="user-password"
   			class="form-content"
   			type="password"
   			name="password"
   			required />
  		<div class="form-border"></div>
		<a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
		<input id="submit-btn" type="submit" name="submit" value="LOGIN" /><a href="../signUp/signUp.html" id="signup">Sign Up</a>
		</form>
	</div>

</body>
</html>