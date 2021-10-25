<?php
	include "conn.php";
    $msg = "";

    if(isset($_POST['update']))
    {
        $task = $_POST['task'];
        if(ctype_alnum($task)){

        $id=$_GET['id'];
        $query=mysqli_query($conn," SELECT * from todo where id='$id'");
        $row=mysqli_fetch_array($query);


        if(isset($_POST['update'])) // when click on Update button
        {
            $task = $_POST['task'];
            
            $edit = mysqli_query($conn,"UPDATE
            todo set task='$task' where id='$id'");
            
            if($edit)
            {
                mysqli_close($conn); // Close connection
                header("location:index.php"); // redirects to all records page
                exit;
            }
            else
            {
                echo "mysqli_error()";
            }    	
        }
            

            }
            else{
                $msg = "Only alphanumeric allowed";
            }
            mysqli_close($conn);
        }

        
        
?>


<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="task" value="<?php echo $data['task'] ?>" placeholder="Enter Task" Required>


  <input type="submit" name="update" value="Update">
</form>
<p style="color: red;"><?php echo $msg ?></p>
<form action="index.php" method="POST">
    <input type="submit" value="Cancel">
</form>
<!-- <!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Task:</label><input type="text" value="<?php echo $row['task']; ?>" name="task">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html> -->