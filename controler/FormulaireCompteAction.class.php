<?php
require_once('./controler/Action.interface.php');
class FormulaireCompteAction implements Action {
	public function execute(){
			if (!ISSET($_SESSION)) session_start();
			UNSET($_SESSION["membre"]);
			return "pageCreationCompte";
		}
	}
?>
