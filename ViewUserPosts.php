<?php
     $option = $_POST['user'];
     //echo $option;
     $mysqli = new mysqli("mysql.eecs.ku.edu", "a169m422", "aiTh3aen", "a169m422");
     if ($mysqli->connect_errno) {
         printf("Connect failed: %s\n", $mysqli->connect_error);
         exit();
     }
     $query = "SELECT author_id='$option',Content from Postz where author_id='$option'";
     //$query= "SELECT user_id FROM Userz INNER JOIN Postz ON Userz.user_id = Postz.content;"
     //echo "'$query'";
     $result = $mysqli->query($query);
     if ($result->num_rows > 0) {
         // output data of each row
         echo "<center><table border = 3px>";
         echo "<th>User: ".$option."</th>";
         echo "</tr></center>";
         while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" .$row["Content"]."</td>";
              echo "</tr>";
         }
     }
     else {
          echo "No Posts!";
     }
?>
