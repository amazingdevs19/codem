<body >
<form name="loginform"  id="loginform" action="http://testing.wam360.com/domain/<?=$_GET['webname']?>/wp-login.php" method="post" style="display:none;">
	<p>
		<label for="user_login">Username or Email<br />
		<input type="text" name="log" id="user_login" class="input" value="wam360" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="qawsed1234" size="20" /></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
		<input type="hidden" name="redirect_to" value="http://testing.wam360.com/domain/<?=$_GET['webname']?>/wp-admin/" />
		
	</p>
</form>
</body>
<script>

document.getElementById('wp-submit').click();

</script>utologin