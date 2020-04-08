<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Link Up</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../../css/style_contact.css">
</head>
<body>
<a href="#" onclick='appendParameter("../Index.html")'><img class = "logo" src="../../Logo_2.png"></a>
	<header>
	  <a href="#" onclick='appendParameter("../Index.html")' id="home">TEXT</a>
    <a href="#" onclick='appendParameter("about.html")' id="about">TEXT</a>
 		<a href="#" onclick='appendParameter("my_work.html")'  id="mywork">TEXT</a>
		<a href="#" onclick='appendParameter("prestation.html")' id="pricing">TEXT</a>
		<a href="#" onclick='appendParameter("contact.html")'  id="contact">TEXT</a>
		<button type="button" onclick='toogleLang("en")' id="btnEn">EN</button>
		<button type="button" onclick='toogleLang("fr")' id="btnFr">FR</button>

	</header>


		<h1>Contact</h1>
<br /><br /><br />
<div id="whole" style="justify-content: center; display: grid; grid-template-columns: 48% 4% 48%;">
  <form name="monformulaire"  method="post" style="grid-column: 1; padding-left: 10%;" method="post" action="mail.php">
    <br /><br /><br />
      <input type="text" name="name" placeholder="nom" style="width: 70%;"><br />
      <input type="mail" name="mail" placeholder="e-mail"style="width: 70%;">
      <br />
      <input type="text" name="Objet" placeholder="Objet" style="width: 70%;">
      <br />
      <input type="file" name="file" accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv" aria-invalid="false" style="">
      <br />
      <textarea placeholder="message" aria-required="true" name="message" style="height: 300px; width: 70%;"></textarea>
      <br \>
      <input type="submit" name="envoyer" value="envoyer">
  </form>

  <?php if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('destinataire@free.fr', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }?>

  <div style="grid-column: 2;"></div>
  
  <div style="grid-column: 3;">
      <img src="D:\timot\Pictures/Annotation 2020-03-27 195742.png" value="Une image de ma mere en train de travailler." style="width: 93%; padding-left: 4%;">
  </div>  
</div>
</div>





<script>
var traduction = {
  about: {
    en:"About Me",
    fr:"Qui suis-je"
  },
  mywork: {
    en:"My work",
    fr:"Mes travaux"
  },
  pricing: {
    en:"Rates",
    fr:"Tarifs"
  },
  contact: {
    en:"Contact",
    fr:"Contact"
  },
  home: {
    en:"Home",
    fr:"Accueil"
  },
  mail: {
    en:"contact mail en",
    fr:"contact mail fr"
  },
  phone: {
    en:"tel en",
    fr:"tel fr"
  }

};
  var urlParams = new URLSearchParams(window.location.search);
  var lang = urlParams.get('lang') || "fr";
  var btnEn = document.getElementById('btnEn');
  var btnFr = document.getElementById('btnFr');
    
  
 function translate() {
   if(lang === "fr") {
    btnFr.classList.add("activeBtn");
    btnEn.classList.remove("activeBtn");
   } else {
    btnFr.classList.remove("activeBtn");
    btnEn.classList.add("activeBtn");
   }

   var linkAbout = document.getElementById('about');
  linkAbout.innerHTML = traduction.about[lang];
  
  var linkMyWork = document.getElementById('mywork');
  linkMyWork.innerHTML = traduction.mywork[lang];
    
  var linkHome = document.getElementById('home');
  linkHome.innerHTML = traduction.home[lang];

  var linkContact = document.getElementById('contact');
  linkContact.innerHTML = traduction.contact[lang];

  var linkPricing = document.getElementById('pricing');
  linkPricing.innerHTML = traduction.pricing[lang];

  var mail = document.getElementById('mail');
  mail.innerHTML = traduction.mail[lang];

  var phone = document.getElementById('phone');
  phone.innerHTML = traduction.phone[lang];
    }
    
  function toogleLang(plang) {  
     lang = plang;

      urlParams.set('lang', lang);
      window.location.search = urlParams;
    }
    function appendParameter(link) {  
      window.location = link+"?lang="+lang ;
    }

    function toogleLang(plang) {  
     lang = plang;

      urlParams.set('lang', lang);
      window.location.search = urlParams;
    }
    function appendParameter(link) {  
      window.location = link+"?lang="+lang ;
    }

  translate();
</script>


</body>
</html>