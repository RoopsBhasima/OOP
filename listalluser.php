<?php
include('class.user.php');
$User= new User();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<?php
		$User->get_alluser();
		?>
	</table>

</body>
</html>