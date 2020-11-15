<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>Notari Filippo Contacts</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/styleForm.css">
    <link rel="stylesheet" href="style/styleNav.css">
    <script src="script/script.js"></script>
  </head>
  <body>
            
    <header>
      <br>
      <img src="img/logo.png" id="logo" alt="logo">
    </header>
      <span  onclick="openNav()" id="buttonMenu">&#9776;</span>

         

    <div id="menu" class="sidenav">
      <ul>
        <li>  <a href="javascript:void(0)" class="closebtn" id="closebtn" onclick="closeNav()">&times;</a></li>
        <li><a  href="index.html">Home</a></li>
        <li><a  href="videoclip.html">Videclip</a></li>
        <li><a href="#ShortFilm">ShortFilms</a></li>
        <li><a class="active" href="contacts.html">Contact</a></li>
      </ul>
    </div>  
    <div class="content">
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-0de64e59-1fd6-408f-b697-2ce75ee26616"></div>
      
      <form action="" method="post">
        <label for="fname">Nome</label>
        <input type="text" id="fname" name="nome" placeholder="Your name.." require>
                
        <label for="lname">Cognome</label>
        <input type="text" id="lname" name="cognome" placeholder="Your last name.." require>

        <label for="lemail">E-mail</label>
        <input type="text" id="lemail" name="email" placeholder="Your email" require>
                
        <label for="subject">Corpo</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" require></textarea>
                
        <input type="submit" value="Submit">
      </form>

    </div>
            
      <?php
        if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["email"])&& isset($_POST["subject"])){
            
          $name = $_POST["nome"];
          $surname = $_POST["cognome"];
          $email = $_POST["email"];
          $message = $_POST["subject"];
              
          $EmailTo = "notari.filippo@outlook.it";
          $Subject = "Messaggio dal sito";
              
          // prepare email body text
          $Body .= "Nome: ";
          $Body .= $name;
          $Body .= $surname;
          $Body .= "\n";
              
          $Body .= "Email: ";
          $Body .= $email;
          $Body .= "\n";
              
          $Body .= "Messaggio: ";
          $Body .= $message;
          $Body .= "\n";
              
          // send email
          $success = mail($EmailTo, $Subject, $Body, "From:".$email);
              
          // redirect to success page
          if ($success){
            echo "success";
          }else{
            echo "invalid";
          }
        }else{      
        }
      ?>   
    <script>!function(d,l,e,s,c){e=d.createElement("script");e.src="//ad.altervista.org/js.ad/size=728X90/?ref="+encodeURIComponent(l.hostname+l.pathname)+"&r="+Date.now();s=d.scripts;c=d.currentScript||s[s.length-1];c.parentNode.insertBefore(e,c)}(document,location)</script>      
  </body>
</html>