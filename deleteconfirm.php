<?php
require_once('includes/mysqli_connect.php'); // connect to the database
$id = mysqli_real_escape_string($dbc, $_REQUEST['id']);
$query = "SELECT * FROM bookmark WHERE id=$id";
$result = @mysqli_query($dbc, $query);

while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    print "<p>Title: $row[title] </p>";
    print "<p>URL: $row[url] </p>";
}

print "<p>Are you syre that you want to delete this record?</p>";
print "<p><a href=\"delete.php?id=$id\">YES</a>";
print "<p><a href=\"index.php\">NO</a>";
mysqli_close($dbc);
?>