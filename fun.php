<?php


// Base overview of a table to admin ... some id435190_info present ...

function upfnew()
{
        $con =mysqli_connect("localhost","id435190_bvcecweb99999999","bvcecweb99999999");
        mysqli_select_db($con,"id435190_info");
        $flag=0;
        $result = mysqli_query($con,"SELECT * FROM upfn");
        echo "<table id = 'stutable'>
		<tr>
			<th>Sno</th>
			<th>Name of Staff</th>
		</tr>
        <br>";

        while($row = mysqli_fetch_array($result))
        {
			
			echo "<tr><td>" . $row['no'] . "</td><td>" . $row['texto'] . "</td><td><a href='updata.php?No=".$row['no']."''>View Full Details</a></td></tr>";
		}

      	echo "</table>";
        mysqli_close($con);
}



?>