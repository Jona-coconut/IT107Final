<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $database = $_POST["database"];
  $host = $_POST["host"];
  
  // Get the privileges if they are set
  if(isset($_POST['privileges'])) {
    $privileges = $_POST['privileges'];
  }

  // Connect to the database
  $conn = mysqli_connect('localhost', 'root', 'Coco_nut12');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Implode the privileges array into a string
  $privileges = implode(", ", $privileges);
  
  // Create the user
  $query = "CREATE USER '$username'@'$host' IDENTIFIED BY '$password'";
  $result = mysqli_query($conn, $query);
  
  // Grant privileges to the user
  $query = "GRANT $privileges ON $database.* TO '$username'@'$host'";
  $result = mysqli_query($conn, $query);

  $query = "FLUSH PRIVILEGES";
  $result = mysqli_query($conn, $query);

  if ($result) {
    
    echo "New user created successfully <br>";
    $query = mysqli_query($conn, "SHOW GRANTS FOR '$username'@'$host'");

    if (!empty($query)) {
      while($row = mysqli_fetch_row($query)) {
        echo $row[0] . '<br>';
      }
    }
  } else {
    echo "Error: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>