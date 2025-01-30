<?php // This is the index page of website which contains link to sign-up page and check-matches page.?>

<?php 
// The header is defined in common.php and it is accessed by invoking the function.
include('common.php');
head();
?>

<div class="home_container">
	<h2>Welcome!</h2>
	<pre>&#9999; <a href="signup.php">Sign up for a new account</a></pre>
	<pre>&#x1F9E1; <a href="matches.php">Check your matches</a></pre>
<?php 
// The footer information is accessed by invoking foot().
	foot();
?>
</div>

</body>
</html>