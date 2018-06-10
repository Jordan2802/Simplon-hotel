<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Proza+Libre" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Simplon Hôtels</title>
  </head>

  <body>
		<header>
			<div id="main_title">
        <h1>Nous contacter</h1>
      </div>
        <!-- Menu Simplhotel -->
          <nav class="menu menu--simplhotel">
  					<ul class="menu__list">
  						<li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Accueil</a></li>
  						<li class="menu__item"><a href="hotels.html" class="menu__link">Hôtels</a></li>
  						<li class="menu__item"><a href="chambres.html" class="menu__link">Chambres</a></li>
  						<li class="menu__item"><a href="contact.html" class="menu__link">Nous contacter</a></li>
  						<li class="menu__item"><a href="reservation.html" class="menu__link">Réserver</a></li>
  					</ul>
  				</nav>
		     </header>

          <main class="main_contact_form">
<p>Bonjour ! Les éléments suivants ont été envoyés:</p>


<p>Nom:<?php echo $_POST['name']; ?> </p>
<p>Email:<?php echo $_POST['email']; ?> </p>
<p>Telephone:<?php echo $_POST['phone']; ?> </p>
<p>Message:<?php echo $_POST['info']; ?> </p>



<?php
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

// Messages d'erreur du formulaire
$message_erreur_formulaire = "Vous devez d'abord <a href=\"index.html\">envoyer le formulaire</a>.";
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";


// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email

  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  // Définit toutes les erreurs possibles


  if (!isset($_POST['name'])) {
    $nombreErreur++;
    $erreur1 = '<p>Vousa avez oublié de renseigner votre nom.</p>';
  } else {
    if (empty($_POST['email'])) {
      $nombreErreur++;
      $erreur2 = '<p>Vous avez oublié de renseigner votre email.</p>';
    }
  }
  if (!isset($_POST['phone'])) {
    $nombreErreur++;
    $erreur3 = '<p>Merci de renseigner votre telephone</p>';
  } else {
    if (empty($_POST['info'])) {
      $nombreErreur++;
      $erreur4 = '<p>Vous avez oublié de laisser un message</p>';
    }
  }

  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur5 = '<p>Il y a un problème avec la variable "email".</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
    if (empty($_POST['email'])) { // Si la variable est vide
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur6 = '<p>Vous avez oublié de donner votre email.</p>';
    }
  }






  // (3) Ici, il sera possible d'ajouter plus tard un code pour vérifier un captcha anti-spam.

  if ($nombreErreur==0) { // S'il n'y a pas d'erreur

    $nom     = htmlentities($_POST['name']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $telephone = htmlentities($_POST['phone']);
    $email     = htmlentities($_POST['email']);
    $info = htmlentities($_POST['info']);

    // Variables concernant l'email

    $destinataire = 'greg.labbe08@gmail.com'; // Adresse email du webmaster (à personnaliser)
    $sujet = 'formulaire de contact'; // Titre de l'email
    $contenu = '<html><head><title>Formulaire de contact</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom:</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Telephone:</strong>: '.$telephone.'</p>';
    $contenu .= '<p><strong>email:</strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Message:</strong>: '.$info.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

    // Envoyer l'email
    mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    echo '<h2>Message envoyé!</h2>';



  } else { // S'il y a un moins une erreur
    echo '<div style="border:1px solid #ff0000; padding:5px;">';
    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
    // (4) Ici, il sera possible d'ajouter un code d'erreur supplémentaire si un captcha anti-spam est erroné.
    echo '</div>';
  };
}
?>

</main>
<br><a href="#main_title" class="to-top"></a><br>

<footer>
  <div id="left">
    <div class="coordonnees">
      <i class="fas fa-home"></i>
      <p class="text_footer">Adresse</p>
    </div>
    <p class="text_footer_left">Simplon.co – 55 Rue de Vincennes – 93 100 Montreuil</p>
    <div class="coordonnees">
      <i class="fas fa-phone-volume"></i>
      <p class="text_footer">Téléphone</p>
    </div>
    <p class="text_footer_left">01 86 95 64 53</p>
    <div class="coordonnees">
      <i class="fas fa-at"></i>
      <p class="text_footer">E-mail</p>
    </div>
    <p class="text_footer_left">inbox@simplon.co</p>
  </div>
  <div id="right">
    <div id="aboutus">
      <h3>À Propos</h3>
      <p>Procedente igitur mox tempore cum adventicium nihil inveniretur, relicta ora maritima in Lycaoniam adnexam Isauriae se contulerunt ibique densis intersaepientes itinera praetenturis </p>
    </div>
    <div id="resos">
      <a href="#" class="fab fa-facebook"></a>
      <a href="#" class="fab fa-twitter-square"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-discord"></a>
    </div>
  </div>
</footer>
<script src="js/smoothscroll.js"></script>
</body>
</html>
