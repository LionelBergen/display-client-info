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
    function objectToString(object) {
		if (object === undefined) {
			return 'undefined';
		} else if (object === null) {
			return 'null';
		} else if (typeof object === 'function') {
			return object.toString();
		} else {
			return JSON.stringify(object);
		}
	}
	const navigatorListElement = document.getElementById("navigator");
	
	for (let prop in navigator) {
		let valuePrinted = objectToString(navigator[prop]);
		
		navigatorListElement.innerHTML += ("<li>" + prop + ":" + valuePrinted + "</li>");
	}
</script>