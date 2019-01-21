<?php
include "db_config.php";

class User extends Database
{
	/*get all user*/
	public function get_alluser()
	{
		$sql4="SELECT * FROM login";
		$result= mysqli_query($this->db,$sql4);
		while($row4=mysqli_fetch_array($result))
		{
			$uid=$row4['id'];
			$ustatus=$row4['status'];
			echo "<tr>
			<th scope='row'>".$row4['id']."</th>
			<td>".$row4['username']."</td>
			<td>".$row4['email']."</td>
			</tr>";
		}
	}

}
?>