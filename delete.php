<?php
require_once('includes/mysqli_connect.php'); // connect to the database
$id = mysqli_real_escape_string($dbc, $_REQUEST['id']);
$query = "DELETE FROM bookmark WHERE id=$id";
$result = @mysqli_query($dbc, $query);

if($result){
    print "The selected record has been deleted.";
}else{
    print "The selected record could not be deleted.";
}

print "<p><a href=\"index.php\">Go back to the main page</p>";
mysqli_close($dbc);
?>