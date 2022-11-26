<?php
if(isset($_POST["submit"])){
$user = $_POST["username"];
$password = $_POST["password"];


$conn = new mysqli("localhost","root","","student",3308);
// $query_str = "INSERT INTO info (username,password) VALUES ('$user','$password')";
// $res = $conn->query($query_str);

// if(!($res)){
//     echo "Failed\n";
// } else {
//     echo "Done.";
// }
$delete="DELETE FROM info WHERE username='$user'";
$del = $conn->query($delete);
if(!$del) {
    echo "Failed to delete\n";
} else {
    echo "Deleted successfully!\n";
}

}
?>