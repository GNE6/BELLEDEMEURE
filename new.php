<?php 

session_start();
if ( isset($_SESSION['id_user']))
	{ echo ($_SESSION['id_user']); 
	}
if ( isset($_SESSION['nom']))
	{ echo ($_SESSION['nom']); 
	}
if ( isset($_SESSION['prenoms']))
	{ echo ($_SESSION['prenoms']); 
	}
if ( isset($_SESSION['statut']))
	{ echo ($_SESSION['statut']); 
	}
if ( isset($_SESSION['ddn']))
	{ echo ($_SESSION['ddn']); 
	}	
if ( isset($_SESSION['sexe']))
	{ echo ($_SESSION['sexe']); 
	}					
?>