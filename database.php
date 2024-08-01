
<?php  
 
$serverName = "localhost"; 
$userName = "root"; 
$password = ""; 
$dbName = "myfirstdatabase"; 
 
// Create connection 
$conn = mysqli_connect($serverName, $userName, $password, $dbName); 
 
// Check connection 
if (!$conn) { 
  die("Connection failed: " . mysqli_connect_error()); 
} 
echo "Connected successfully"; 
 
if (isset($_POST['Up'])) { 
    echo "U"; 
    $sql = "INSERT INTO table2 (value) VALUES ('U')"; 
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $conn->error;
    }
} elseif (isset($_POST['Stop'])) { 
    echo "S"; 
    $sql = "INSERT INTO table2 (value) VALUES ('S')"; 
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $conn->error;
    }
} elseif (isset($_POST['Down'])) { 
    echo "D"; 
    $sql = "INSERT INTO table2 (value) VALUES ('U')"; 
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $conn->error;
    }
} elseif (isset($_POST['Right'])) { 
    echo "R"; 
    $sql = "INSERT INTO table2 (value) VALUES ('R')"; 
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $conn->error;
    }
} elseif (isset($_POST['Left'])) { 
    echo "L"; 
    $sql = "INSERT INTO table2 (value) VALUES ('L')"; 
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $conn->error;
    }
}

// Close connection
$conn->close();

?>