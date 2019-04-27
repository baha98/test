<HTML>
<head>
</head>
<body>
<?PHP

include "../core/blogc.php";
if (isset($_GET['id'])){
	$blogC=new blogC();
    $result=$blogC->recupererblog($_GET['id']);
	foreach($result as $row){
		
		$surnom=$row['surnom'];
		$commentaire=$row['commentaire'];
			$id=$row['id'];
	
?>
<form method="POST">
<table>
<caption>Modifier blog</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>surnom</td>
<td><input type="text" name="surnom" value="<?PHP echo $surnom ?>"></td>
</tr>
<tr>
<td>commentaire</td>
<td><input type="text" name="commentaire" value="<?PHP echo $commentaire ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){

	$blogC->modifierblog($_POST['surnom'],$_POST['commentaire'],$_POST['id']);
	header('Location: backblog.php');
}
?>
</body>
</HTMl>