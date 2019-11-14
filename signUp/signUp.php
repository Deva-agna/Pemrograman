<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sign up</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<div id="card">
		<div id="card-content">
  			<div id="card-title">
    			<h2>Sign Up</h2>
    			<div class="underline-title"></div>
  			</div>
		</div>
		<form method="post" class="form">
		<label for="user-email" style="padding-top:10px">&nbsp;Email</label>
  		<input
   			id="user-email"
   			class="form-content"
   			type="email"
   			name="email"
   			autocomplete="on"
   			required />
  		<div class="form-border"></div>
  		<label for="user-nama-lengkap" style="padding-top:10px">&nbsp;Nama Lengkap</label>
  		<input
   			id="user-nama-lengkap"
   			class="form-content"
   			type="text"
   			name="name"
   			autocomplete="on"
   			required />
  		<div class="form-border"></div>
  		<label for="user-telpon" style="padding-top:10px">&nbsp;No Telpon</label>
  		<input
   			id="user-telpon"
   			class="form-content"
   			type="text"
   			name="telpon"
   			autocomplete="on"
   			required />
  		<div class="form-border"></div>
		<label for="user-password" style="padding-top:10px">&nbsp;Password</label>
  		<input
   			id="user-password"
   			class="form-content"
   			type="password"
   			name="password"
   			required />
  		<div class="form-border"></div>
  		<label for="user-confrim-password" style="padding-top:10px">&nbsp;Confrim Password</label>
  		<input
   			id="user-confrim-password"
   			class="form-content"
   			type="password"
   			name="password"
   			required />
  		<div class="form-border"></div>
		<input id="submit-btn" type="submit" name="submit" value="Register Now" />
		</form>
	</div>

</body>
</html>