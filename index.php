<h1>PROTOCOL</h1>
<?php
$_SERVER['REQUEST_METHOD']
?>

<h1>REQUEST</h1>
<?php
var_dump($_GET); 
?>

<h1>HEADERS:</h1>
<?php
foreach (getallheaders() as $name => $value) {
    echo "$name: $value<br />";
}
?>

<h1>Navigator:</h1>