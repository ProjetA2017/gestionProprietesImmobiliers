<?php
require_once('./controler/Action.interface.php');
//require_once('./controler/RequestAjaxAction.interface.php');
require_once('./model/classes/GereAnnonce.php');
class ModifierAnnonceAction implements Action { //, RequestAjaxAction {
	public function execute(){
    if (!ISSET($_SESSION)) session_start();
    if (!ISSET($_SESSION['membre']) || empty($_SESSION['membre']))
      return "default";
		if(ISSET($_REQUEST['bModificationAnnonce'])) {
			GereAnnonce::modifierUneAnnonce();
			return "imagesAnnonces";
			//return "test";TODO: enlever les commentaires
		}
  }
}
?>
