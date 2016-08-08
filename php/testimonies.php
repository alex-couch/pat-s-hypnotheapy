<?php
	if($_POST["testimonies"]){
		mail("alcouch65@gmail.com", "Test", $_POST["testimonies"], "testimony@patriciaeaston.com");
	}
?>