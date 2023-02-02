<?php
  // Connect to the database
  $conn = mysqli_connect("127.0.0.1", "root", "", "tutorials");
  
  // Check if the user has logged out
  if (isset($_GET['logout'])) {
    // Reset the visitor count to 0
    $sql = "UPDATE login SET count = 0";
    mysqli_query($conn, $sql);
  } else {
    // Increment the visitor count
    $sql = "UPDATE login SET count = count + 1";
    mysqli_query($conn, $sql);
  }
  
  // Retrieve the current visitor count
  $sql = "SELECT count FROM login";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $visitorCount = $row['count'];
  
  // Return the visitor count
  echo $visitorCount;
?>






<?php
session_start();
session_destroy();
header("location:login.php");
?>
