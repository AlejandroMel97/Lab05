<?php
$name = $_POST["user"];
$post = $_POST["post"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "a169m422", "aiTh3aen", "a169m422");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if (ctype_space($name) || $name == '')
{
     echo "Username must be filled out.";
}
else if (ctype_space($post) || $post == '')
{
     echo "You must Enter a post!!";
}
else
{
     // $query2 = "INSERT INTO Posts(author_id) VALUES ('$name')"
     $query2 = "SELECT '*' from Userz where user_id = '$name'";
     $res_u = mysqli_query($mysqli, $query2);
     if (mysqli_num_rows($res_u) > 0)
     {
          //$query3="SELECT Posts.author_id, Userz.user_id from Posts inner join Userz on Posts.author_id=Userz.user_id";
          // echo "name does exist!";
          $query="INSERT INTO Postz(author_id, Content) VALUES ('$name', '$post')";
          //$query2 = "INSERT INTO Posts(Content) VALUES ('$post')"
          //$query3 = "UPDATE Posts set author_id = '$name' where Content = '$post'";
          if ($mysqli->query($query)=== true)
          {
               echo "Post was added!";
          }
          else{
               echo "Post was not added";
          }

     }
     else{
          echo "User does does not exist";
     }
}

?>
