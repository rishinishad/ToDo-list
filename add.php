<?php
    include_once 'conn.php';

    $message = '';

    if(isset($_POST['submit']))
    {
        $task = $_POST['task'];
        if(ctype_alnum($task))
        {
            $sql = "INSERT INTO todo (task)
            VALUES ('$task')";
            if ($conn->query($sql)) {
                echo "New record has been added successfully !";
                header("Location:index.php");
            } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
        }
        else{
           $message = "Only alphanumeric allowed";
        }
        mysqli_close($conn);
    }
?>

<html lang="en">
        
    <body onload="document.addval.task.focus()">
        <div class="mail">    
ToDo List</h1>
    <form name="addval" action="#"  method="post">
    
    <label>Task:</label>
        <input type="text" name="task" required>

        <input type="submit" class="btn btn-primary" name="submit" value="Submit" onclick="return alphanumeric(document.addval.task)">
    </form>
    <p style="color: red;"><?php echo $message ?></p>

    <form action="index.php" method="POST">
    <input type="submit" value="Cancel">
    </form>
    </div>
  
    <head>
            <script>
                function alphanumeric(task)
                {
                    console.log(task);
                    var regEx = /^[0-9a-zA-Z]+$/;
                    if(task.value.match(regEx))
                    {
                        return true;
                    
                    }
                    else
                    {
                        alert('only alphanumeric');
                        return false;
                    }
                }

            </script>
        </head>

<!-- <script>
    function validateAdd()
    {
        let x = document.forms["myadd"]["task"].value;
        x=/^[0-9a-zA-Z]+$/;
        if(task.value.match(x))
        {
            alert("name must be filled");
            return false;
        }
    }
</script> -->
</body>

</html>