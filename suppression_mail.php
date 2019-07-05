<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style/cv-responsive.css">
</head>
<body>
	<h1>Suppression du mail</h1>

	<?php
	
	if($_GET['email']){
		$adresseMail = $_GET['email'];
		$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

		$selectall = $db->query('SELECT * FROM clevasseurMail WHERE email="'.$adresseMail.'"');
        $result = $selectall->fetch();
        $counttable = (count($result));

        if($counttable >= 1){
            $delete = $db->prepare('DELETE FROM clevasseurMail WHERE email="'.$adresseMail.'"');
            $delete->execute();
        }	

		echo('Votre &ecirc;tes bien desabonn&eacute; de notre liste de diffusion');
}
	?>

</body>
</html>