<?php // The common code including header and footer is placed in this file.?>

<?php

// logo of the dating site used in multiple files is defined in this function.
function head() {
	echo '
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>NerdLuv</title>
		<link rel="stylesheet" href="style.css">
		</head>
		<body>
		<img src="logo.png" alt="logo" width=250 height=80>
	';
}

// information related to site is defined in this function.
function foot(){
	echo '<p>This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin!</p>
	<p>Thank you for using our site.</p>
	<p>Results and page (C) CopyRight NerdLuv Inc.</p>
	<a href="index.php"><p>&#x25c0; Back to front page</p></a>
	<br>
	<a href="https://validator.w3.org/">
            <img src="w3c-html.png" alt="Valid HTML5">
        </a>
    <a href="https://jigsaw.w3.org/css-validator/">
            <img src="w3c-css.png" alt="Valid CSS">
    </a>
	';
}

// This function is used in matches-submit.php, when there is no input given by the user.
function noinput(){
	echo "<h2>Error! No data provided.</h2>
	<p>We're sorry. You submitted invalid user information. Please go back and try again.</p>";
}

// This function is invoked when there is no data related to the user in the file and it is used in matches-submit.php.
function nodata(){
	echo "<h2>Error! User data doesn't exist.</h2>
	<p>We're sorry. You submitted invalid user information. Please go back and try again.</p>";
}

// This function is called in signup-submit.php, when the input given by the user is not valid.
function invalidinput(){
	echo "<h2>Error! Invalid data.</h2>
	<p>We're sorry. You submitted invalid user information. Please go back and try again</p>";
}

// This function is invoked in signup-submit.php, when the data input by the user is already available in the file.
function dataexist(){
	echo "<h2>Error! Data already exists.</h2>
	<p>We're sorry. You submitted existing user information. Please go back and try again</p>";
}

?>