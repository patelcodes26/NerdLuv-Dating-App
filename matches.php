<?php // This file is takes Name input to get relevent matches for the user.?>

<?php 
// The header is defined in common.php and it is accessed by invoking the function.
include('common.php');
head();
?>

<br><br>
	<span class="return_user">Returning User:</span>
	<form action="matches-submit.php" method="get" enctype="application/x-www-form-urlencoded" class="form_data">
		Name:&nbsp&nbsp <input type="text" size=16 name="name"><br><br>
		<input type="submit" value="View My Matches" class="submit">
	</form>
	
<div style="margin-left:50px;margin-top:40px;width:460px;">
<?php 
// The footer information is accessed by invoking foot().
	foot();
?>
</div>

</body>
</html>