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
<span id="client_info_dump">
<?php
var_dump($_SERVER);
?>
</span>

<h1>WHOLE REQUEST:</h1>
<?php
var_dump($_REQUEST);
?>

<h1> Navigator type test</h1>
<span id='navigatorTypeTest' class="red"></span>
<script>
	if (Object.getPrototypeOf(navigator) !=== Navigator.prototype) {
		document.getElementById("navObjectProperties").innerHTML += 'FAIL! was: ' + Object.getPrototypeOf(navigator);
	}
</script>

<h1> Navigator Object.properties (Should be empty!)</h1>
<p id="navObjectProperties" class="red"></p>
<script>document.getElementById("navObjectProperties").innerHTML += Object.getOwnPropertyNames(navigator)</script>
<script>document.getElementById("navObjectProperties").innerHTML += Object.keys(navigator);</script>

<h1>Navigator:</h1>
<ol id="navigatorOl"></ol>

<script>
    function objectToString(object) {
		if (object === undefined) {
			return 'undefined';
		} else if (object === null) {
			return 'null';
		} else if (typeof object === 'function') {
			return object.toString();
		} else if (Array.isArray(object) && object.length >= 1) {
			let formattedPrint = "[";
			for (let i=0; i<object.length; i++) {
				formattedPrint += objectToString(object[i]);
				if (i != object.length) {
					formattedPrint += ",";
				}
			}
			return formattedPrint + "]";
		} else if (typeof object === 'object') {
			let formattedPrint = "{";
			for (let objectProperty in object) {
				formattedPrint += (objectProperty + ":" + object[objectProperty]);
				formattedPrint += ",";
			}
			return formattedPrint + "}";
		} else {
			return object;//JSON.stringify(object);
		}
	}
	const navigatorListElement = document.getElementById("navigatorOl");
	console.log('navigator.test: ' + navigator.test);
	for (let prop in navigator) {
		let valuePrinted = objectToString(navigator[prop]);
		
		navigatorListElement.innerHTML += ("<li>" + prop + ":" + valuePrinted + "</li>");
	}
	
	document.addEventListener("DOMContentLoaded", function() {
		console.log('navigator.test: ' + navigator.test);
	});
</script>

<style>
	.red {
		color: red;
	}
</style>
