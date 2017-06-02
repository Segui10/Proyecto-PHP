<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<br><br><br><br>
	<?php
		include("functions.inc.php");
		//include DAOUser.php

		$daouser = new DAOUser();
		$rdo = $daouser->list_fetch_assoc_user();
		debug($rdo);

	?>
</body>
</html>