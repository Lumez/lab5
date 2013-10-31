<?php
$db = new mysqli("comp2203.ecs.soton.ac.uk", "comp2203-lab5", "WL2133r1lM7lzp1706Ne", "comp2203-lab5");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
}
?>