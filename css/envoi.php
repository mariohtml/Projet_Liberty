
<?php
if(isset($_POST))
{
	extract($_POST);
	$ip = $_SERVER['REMOTE_ADDR'];
	if(!empty($user_name) && !empty($user_mail) && !empty($user_message))
	{
		$destinataire='o.marius@hotmail.fr';
		$sujet="Email envoye depuis le formulaire de contact du site FLEXMANIA";
		$message="Informations envoye depuis le formulaire de contact du site FLEXMANIA :\n
			Adresse IP : $ip \n
			Nom : $user_name 
			Email : $user_mail
			Message : $user_message
	
			Merci de repondre a ce mail a l'adresse suivante : $user_mail";
		$entete="From: $user_name, $ip \n";
		mail($destinataire,$sujet,$message,$entete);
		echo "<center> <font color='green'>Le Formulaire a été Envoyer avec Succes !<br/></center>";
	
	}
	else
	{
		echo "<font color='black'>Vous n'avez pas rempli tout les champs du formulaire";
		if($envoi) header("location: C:\UwAmp\www\myhost-exemple\index.html");
	}
}	
else
{
	echo'Echec envoi !!! ';
}
?>



<!-- <?php echo  strip_tags ( isset ($_POST['prenom']) ) ? $_POST['prenom'] : ''; ?></u>
(<?php echo  strip_tags ( isset ($_POST['choix']) ) ? $_POST['choix'] : ''; ?>/5) :<br />
«<?php echo strip_tags ( isset ($_POST['message']) ) ? $_POST['message'] : ''; ?>»<br /> -->