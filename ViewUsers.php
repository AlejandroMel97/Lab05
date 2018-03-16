<?php
     $mysqli = new mysqli("mysql.eecs.ku.edu", "a169m422", "aiTh3aen", "a169m422");
     if ($mysqli->connect_errno) {
         printf("Connect failed: %s\n", $mysqli->connect_error);
         exit();
     }
     $query = "SELECT user_id from Userz";
     //echo "'$query'";
     $result = $mysqli->query($query);
     if ($result->num_rows > 0) {
         // output data of each row
         echo "<center><table border = 3px>";
         echo "<th>Users</th>";
         echo "</tr></center>";
         while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" .$row["user_id"]."</td>";
              echo "</tr>";
         }
     }
     else {
          echo "<center><h2>There are no Entries :[</h2></center>";
     }
?>
