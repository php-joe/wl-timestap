<!DOCTYPE html>
<html>
<head>
<title>Unix Timestamp</title>
</head>
<body>
<h2>Problem: Create a readable unix timestamp date/time.</h2>

<?php
function dateTime() {
  return "Date: " . gmDate("m-d-Y") . "  |  Time: " . gmDate("H:i");
}
echo dateTime();
?>
</body>
</html>
