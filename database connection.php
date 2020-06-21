<?php
function dbconnect()
	{
		$con = new mysqli("localhost","root","", "hosbital");
	    if($con->connect_error)
	    {
	    	die("Connection Error");
	    }
	    return $con;}
	    const TABLE_NAME ="users";
    function tableDisplay($res)
    {
	      if ($res -> num_rows >0)
	      {
	       echo "<table border='1' style='margin-left=600px;'>";                                                                                                                                                                 
	       echo "<th>name</th>
	              <th>admision/th>" ;
	             
		       while ($row=$res->fetch_assoc()) 
		       {
		       	$x = $row["name"];
		        $y = $row["admisions"];
		       	echo "<tr>";
		       	echo "<td>$x</td>";
		       	echo "<td>$y</td>";
		      
		       	echo "</tr>";
		       }
		    echo "</table>"; 
	      }
	     else //num rows =0
	     {echo "Table is empty";}
    }  
?>