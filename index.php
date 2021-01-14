<h1>PROTOCOL</h1>
<?php
echo $_SERVER['REQUEST_METHOD'];
?>

<h1>REQUEST:</h1>
<?php
var_dump($_GET); 
?>

<h1>PATH:</h1>
<?php
echo $_SERVER['REQUEST_URI'];
?>

<h1>PROTOCOL:</h1>
<?php
echo $_SERVER['SERVER_PROTOCOL'];
?>

<h1>BODY:</h1>
<?php
echo file_get_contents('php://input');
?>


<h1>HEADERS:</h1>
<?php
foreach (getallheaders() as $name => $value) {
    echo "$name: $value<br />";
}
?>

<h1>Whole SERVER:</h1>
<?php
var_dump($_SERVER);
?>

<h1>Navigator:</h1>
<ol id="navigator"></ol>

<script>
	const navigatorListElement = document.getElementById("navigator");
	
	for (let prop in navigator) { 
		navigatorListElement.innerHTML += ("<li>" + prop + ":" + navigator[prop].toString() + "</li>");
	}
</script>