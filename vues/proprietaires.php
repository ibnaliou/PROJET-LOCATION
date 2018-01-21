<!doctype html>
<html lang="fr">
    <head>
        <title>ADMIN</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="tabinter.css">
        
    </head>
    <body>
        <div class="container">
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="http://lacodeid.com">BienVenue</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="connection.php"><button style="color:blue; ">DECONNEXION</button></a>
      </div>
    </nav>

    
    <!-- Header - set the background image for the header in the line below -->
    <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
      <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=PROPPRIETAIRE" alt="">
    </header>

    <!-- Content section -->
    <section class="py-5">
      <div class="container">

          <!-- Begin # DIV Form -->
                <div id="div-forms" style="align:center">
                
                <form class="text-primary" "background-color:red" align="center" action="fonction_bd.php" method="POST" >
<u><h1>AJOUTER PROPRIETAIRE BIEN ET CONTRAT</h1>
<fieldset><legend><h3>PROPRIETAIRE</h3></legend>
<label for="n2">NCI* :</label><input type="number" placeholder="EXP:1254541900" name="numpiece"   id="n2"   required/>

<label for="n1">Nom*:</label><input type="text" placeholder="EXP:Maniouck BADIANE" name="nom"   id="n1"  required />


<label for="n5">Telephone*:</label><input type="text" placeholder="EXP:+221773731936" name="tel"   id="n5" size="25"  required/><p>

</fieldset>

<fieldset>
<legend>BIEN</legend>
 

<label for="n7">Nom*:</label><input type="text" placeholder="voiture" name="nombien"   id="n7" size="30"  required />
<label for="n7">Adresse*:</label><input type="text" placeholder="thies" name="n7"   id="n7" size="30"  required />
<label for="n7">Montant location*:</label><input type="number" placeholder="20000" name="n7"   id="n7" size="30"  required />
<label for="n7">Montant location*:</label><input type="number" placeholder="20000" name="n7"   id="n7" size="30"  required />

</fieldset>

<fieldset>
<legend>ADRESSES</legend>

<b><label for="n8">Email*:</label><input type="mail" placeholder="EXP:nom@gmail.com" name="n8"   id="n8" size="25" maxlength="70"  required/><p>
</b>
<b><label for="n9">T&eacute;l&eacute;phone*:</label><input type="text" placeholder="EXP:00221700258498" name="n9"   id="n9" size="25" maxlength="70" required /><p>
</b>
<b><label for="n10">Pays:</label><input type="text" placeholder="EXP:SENEGAL" name="n10"   id="n10" size="25" maxlength="70" /><p>
</b>
Villes*:<select  name="ville" required >
 <optgroup label="S&eacute;n&eacute;gal">
<option  > Dakar</option>
<option  > Thies</option>
<option  > Ziguinchor</option>
</optgroup>
<optgroup label="Mali">
<option  > kayes</option>
<option  >Bamako</option>
<option  > Kidal</option>
</optgroup>
<optgroup label="Gambie">
<option  >Banjul</option>
<option   >Farafenie</option>
<option > Goundiane</option>
</optgroup>

</select><p>
<!--ADRESSE -->
Adresse*:<br><textarea rows="2" cols="37" name="adr" placeholder="Dakar, Quartier Diepeul VILLA N°255" required ></textarea><p>

</fieldset>

<fieldset>

<legend><h3>SALARIE(E)?</h3></legend>

<!--BOUTON RADIO -->
Oui:<input type="radio" name="salaire" value="oui" checked> <!-- choix par defaut --> 
Non:<input type="radio" name="salaire" value="non" >
<!-- c bon -->



</fieldset>


<fieldset>
<legend><h3 style="color:RED">VIE PROFESSIONNELE</h3></legend><br>
Adresse Professionnelle :<br><textarea rows="2" cols="37" name="adp" placeholder="Thies, Quartier 10EM VILLA N°255"  ></textarea><p> 



<b><label for="n17">Entreprise*:</label><input type="text" placeholder="ISEP" name="n17"   id="n17" size="25" maxlength="70" required /><p>
</b>
<b><label for="n13">Fonction:</label><input type="text" placeholder="EXP:Etudiant" name="n13"   id="n13" size="25" maxlength="70" /><p>
Domaine de comp&eacute;t&eacute;nces:<br> 
<!-- Case a cocher -->





<input type="checkbox"  name="n20" value="R&eacute;seaux et T&eacute;l&eacute;com" /> R&eacute;seaux et T&eacute;l&eacute;com   <br>
<input type="checkbox"  name="n21" value= "Base de donn&eacute;es" />Base de donn&eacute;es   <br>
<input type="checkbox"  name="n22" value="programmation" />  programmation  <br>
<input type="checkbox"  name="n23" value="Maintenance Informatique"/>  Maintenance Informatique  <br>
<input type="checkbox"  name="n24" value="Adminstration Systèmes et R&eacute;seaux Informatiques" /> Adminstration Systèmes et R&eacute;seaux Informatiques   <br>

</b>
</fieldset>


<input type="submit"  value="envoyer"  />
<input type="reset"  value="cancel"  /><BR>
<a href="la_base.php">AFFICHER LES DONNEES SAISIS </a>
 </form>
 


			</div>
      
    <!-- Image Section - set the background image for the header in the line below -->
    <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
      <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
      <div style="height: 200px;"></div>
    </section>

    <!-- Content section -->
    <section class="py-5">
      <div class="container">
        
      </div>
    </section>

    



</div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
         <script src="script.js"></script>
         <script src="tabinter.js"></script>

         <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright© PROJET GROUP SONATEL ACADEMY 17/18  </p>
      </div>
      <!-- /.container -->
    </footer> 
    </body>
</html>