<?php // This file is used to signup the user.?>

<?php 
// The header is defined in common.php and it is accessed by invoking the function.
include('common.php');
head();
?>

	<span class="new_user">New User Signup:</span>
	<form action="signup-submit.php" method="post" class="newuser_data">
		<pre>Name:               <input type="text" size=16 maxlength=16 name="fullname"></pre>
		<pre>Gender:             <input type="radio" name="gen" value="M"> Male  <input type="radio" name="gen" value="F" checked> Female</pre>
		<pre>Age:                <input type="text" size=6 maxlength=2 name="age"></pre>
		<pre>Personality type:   <input type="text" name="ptype" size=6 maxlength=4> <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Dont know your type?)</a></pre>
		<pre>Favourite type:     <select name="fav">
		<option value="Windows" selected>Windows</option>
		<option value="Mac">Mac OS X</option>
		<option value="Linux">Linux</option>
		</select></pre>
		<pre>Seeking age:        <input type="text" size=6 maxlength=2 placeholder="min" name="minage"> to <input type="text" size=6 maxlength=2 placeholder="max" name="maxage"></pre>
		<pre>Seeking Gender(s):  <input type="checkbox" name="genpref[]" value="M" id="cb1" checked> <label for="cb1">Male</label>  <input type="checkbox" name="genpref[]" value="F" id="cb2"> <label for="cb2">Female</label></pre>
		<input type="submit" value="Sign Up" class="submit">
	</form>

<div style="margin-left:60px;margin-top:40px;width:500px;">
<?php
// The footer information is accessed by invoking foot().
	foot();
?>
</div>

</body>
</html>