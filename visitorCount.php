<?php
  // Connect to the database
  $conn = mysqli_connect("127.0.0.1", "root", "", "tutorials");
  
  // Increment the visitor count
  $sql = "UPDATE login SET count = count + 1";
  mysqli_query($conn, $sql);
  
  // Retrieve the current visitor count
  $sql = "SELECT count FROM login";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $visitorCount = $row['count'];
  
  // Return the visitor count
  echo $visitorCount;
?>
