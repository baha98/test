<?php 

include "../core/blogc.php";
$blog1C=new blogc();
if (isset($_POST["id"])){
$blog1C->supprimerblog($_POST["id"]);
header('Location: backblog.php');
}
?>