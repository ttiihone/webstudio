<?php

if(isset($_POST['email'])) {   
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "tommi.tiihonen@gmail.com";
    $email_subject = "--------Offer---------";
	
	
	// SE MITÄ RUUDULLE SIT TULEE KIMMOLLE!!!!!
	
	
	$web = $_POST['web'];
	$google = $_POST['google'];
	$facebook = $_POST['facebook'];
	
	$miksaus = $_POST['miksaus'];
	$masterointi = $_POST['masterointi'];
	$grafiikka = $_POST['grafiikka'];
	$promo = $_POST['promo'];

	$general = $_POST['general'];
	$info = $_POST['info'];
	
	
	$toive = $_POST['toive'];
	
    $first_name = $_POST['etunimi']; // not required
    $last_name = $_POST['sukunimi']; // not required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required

    $error_message = "";

    $email_exp = '/^[A-Öa-ö0-9._%-]+@[A-Öa-ö0-9.-]+\.[A-Öa-ö]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
     $error_message .= 'Tarkista sähköpostiosoitteesi!<br />';
  }

/*
    $string_exp = "/^[A-Öa-ö .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Tarkista etunimesi!<br />';
  }

  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Tarkista sukunimesi!<br />';
  }
*/

    $email_message = "Offer request below.\n\n";

    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Web: ".clean_string($web)."\n";
    $email_message .= "Google: ".clean_string($google)."\n";
    $email_message .= "Facebook: ".clean_string($facebook)."\n";

    $email_message .= "Miksaus: ".clean_string($miksaus)."\n";
    $email_message .= "Masterointi: ".clean_string($masterointi)."\n";
    $email_message .= "Grafiikka: ".clean_string($grafiikka)."\n";
    $email_message .= "Promo: ".clean_string($promo)."\n";

    $email_message .= "Yleistä kysyttävää: ".clean_string($general)."\n";
    $email_message .= "Lisätietoja halutaan: ".clean_string($info)."\n";
    $email_message .= "Toiveita + infoa: ".clean_string($toive)."\n";

    $email_message .= "Etunimi: ".clean_string($first_name)."\n";
    $email_message .= "Sukunimi: ".clean_string($last_name)."\n";
    $email_message .= "E-mail: ".clean_string($email_from)."\n";
    $email_message .= "Puhelin: ".clean_string($telephone)."\n";

 
 
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
 
 
<!DOCTYPE html>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

</head>

<body>
<table align="center" width="100%" height="100%" style="position: fixed">
<tr>
<td align="center" valign="middle">

<p><span class="notification-blue">Kiitoksia tarjouspyynnöstänne! Olen teihin päin yhteydessä mahdollisimman pian.</span><br />
</p>

<FORM>
 <INPUT Type="BUTTON" VALUE="ETUSIVULLE" ONCLICK="window.location.href='http://www.music-studio.fi'"> 
</FORM>

</td>
</tr>

</table>

</body>
</html>
 
<?php
}
?>
