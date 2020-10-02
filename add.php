<?php

require_once('includes/mysqli_connect.php'); // connect to the database
print "<p>Add a new record</p>";

if(isset($_REQUEST['submitted'])){
    $title = mysqli_real_escape_string($dbc, $_REQUEST['title']);
    $comment = mysqli_real_escape_string($dbc, $_REQUEST['comment']);
    $url = mysqli_real_escape_string($dbc, $_REQUEST['url']);
    $query = "INSERT INTO bookmark(title, comment, url) VALUES ('$title', '$comment', '$url')";

    $result = @mysqli_query($dbc, $query);

    if($result){
        print "<p>A new record has been added.</p>";
        print "<p><a href=\"index.php\">Show all records.</a></p>";
    }else{
        print "<p>The record could not be added due to a system error" . mysqli_error($dbc) . "</p>";
    }
}

mysqli_close($dbc); //close the connection

?>

<form action="add.php" method="POST">
    <p>Title <input type="text" name="title" size="50"></p>
    <p>URL <input type="text" name="url" size="50"></p>
    <p>Comment<br>
    <textarea name="comment" rows="3" cols="50"></textarea></p>
    <p><input type="submit" name="submitted" value="Submit"></p>
</form>