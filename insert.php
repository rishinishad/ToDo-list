<!-- <?php
$x="index.php";
include_once 'conn.php';
if(isset($_POST['submit']))
{    
     $task = $_POST['task'];
     $sql = "INSERT INTO todo (task)
     VALUES ('$task')";
     if ($conn->query($sql)) {
        echo "New record has been added successfully !";
        header("Location:$x");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?> -->