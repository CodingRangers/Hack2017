<?php
include_once('header.php');

?>

<?php
foreach ($_GET['chosen_magics'] as $key => $value) {

	echo $key." / ".$value."<br>";
}


?>

<?php
include_once('footer.php')



?>