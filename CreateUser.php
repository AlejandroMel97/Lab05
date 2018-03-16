
<?php
$user = $_POST["username"];
//$user = $_POST["post"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "a169m422", "aiTh3aen", "a169m422");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if (ctype_space($user) || $user == '')
{
     echo "Username must be filled out.";
}
//if (ctype_space($post) || $post == '')
// {
//      echo "You need something to post!";
// }
else
{
     $query = "INSERT INTO Userz(user_id) VALUES ('$user')";
     //$query2 = "INSERT INTO Posts(author_id) VALUES ('$user')";
}
if ($mysqli->query($query)=== true){// && $mysqli->query($query2)=== true ){
     echo "New Username '$user' added successfully";
}
else{
     echo "\nUsername was not added";
}


/* close connection */
$mysqli->close();
?>
