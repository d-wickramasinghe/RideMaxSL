<?php
require 'config.php';

$sql="SELECT driver_id,first_name,last_name,licence_No,email,address,nic,phone_number,username,password FROM driver";

$result = $con->query($sql);

if($result->num_rows>0)
{
    echo "<table border='1'>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["driver_id"]."</td>"."<td>".$row["first_name"]."</td>"."<td>".$row["last_name"]."</td>"."<td>".$row["licence_No"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["nic"]."</td>"."<td>".$row["phone_number"]."</td>"."<td>".$row["username"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "No Results";
}

$con->close();
?>