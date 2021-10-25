<head>
<style>
table,tr,td{
    color:   green;
    font-size: larger;
    border: 1px solid red;
    border-collapse: collapse;
    text-align-last: center;
}

table,tr,th{
    border: 1px solid red;
}
table{
    width: 50%;
}
th{
    height: 40px;
}
/* input{
    position: relative; 

    
} */

</style>
</head>

<body>
    
<h1 style="color: blue;" align="center">TO DO List <form method="POST" action="add.php">
   <input type="Submit" value="Add Task">
</form></h1>
<table align="center">
<tr>
<th> SNo.</th>
<th> Task</th>
<th> Date</th>
<td>Edit</td>
<td>Delete</td>
</tr>
<p>hello world</p>
<p>cricred</p>
<?php


include_once 'conn.php';
// if(isset($_POST['submit']))
// {    
//      $name = $_POST['task'];
//      $sql = "INSERT INTO users (task)
//      VALUES ('task')";
//      if (mysqli_query($conn, $sql)) {
//         echo "New record has been added successfully !";
//      } else {
//         echo "Error: " . $sql . ":-" . mysqli_error($conn);
//      }
//      mysqli_close($conn);
// }

   
    // echo "Connected successfully";

    $sql = "SELECT id, task, created_at FROM todo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) 
    
    // {
    //     echo "SNo: " . $row["id"]. " - Task: " . $row["task"]. " - Date: " . $row["created_at"]. "<br>";
    //     }
    
        {
            echo " <tr>";
            
            echo "<td> " . $row["id"]. "</td>";
            echo "<td> " . $row["task"]. " </td>";
            echo "<td> " . $row["created_at"]. "</td>";
            echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a>";
            echo "<td><a onClick=\"javascript: return confirm('Are you sure want to delete:');\" href=\"delete.php?id=$row[id]\" >Delete</a>";
        


        } 
       
    }
    else {
    echo "0 results";
        }
        $conn->close();


?>

<!-- 
<tr>
<td colspan="4"> 1 </td>
<td colspan="4">Sleep</td>
<td colspan="4">30</td>
</tr>
<tr>
<td colspan="4">6</td>
<td colspan="4">Study</td>
<td colspan="4">31</td>
</tr>
<tr>
<td colspan="4">3</td>
<td colspan="4">WPrepare teaork</td>
<td colspan="4">1</td>
</tr> -->

<!-- <form method="POST" action="add.php">
   <input type="Submit" value="Add">
</form> -->
</table>
</body>