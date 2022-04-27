<!DOCTYPE html>
   <html>
      <head>
	     <title>formulaire php</title>
	     <meta charset="utf-8"/>
		 <meta http-equiv="X-UA compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.O">
		

		 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> telecharger bootstap cdn.css sans integrity-->
		 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> telecharger sur jquery cdn de googlev version 1-->  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
		 		<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>telecharger bootstap cdn.js sans integrity-->


		 <!--bootstrap css--> <!--npm install jquery--> <!--npm install bootstrap-->
         <!--<link rel="stylesheet" href="assets/css/bootstrap.css"> --> 
         <link rel="stylesheet" href="assets/css/formulaire.css"> 

	  </head>
	  <body>
          <!--menu de navigation avec flexbox-->
        <header>
          <!--  <div class="container-fluid">
                <div class="conteneurnav">
                    <a class="" href="#"><img src="assets/image/igslogo.png" alt="logo fb" width="30" height="24" class="d-inline-block align-text-top">Javascript</a>
                </div> -->
                
                <div> 
                <nav class="navbar">
                    <h1>HenriJDream</h1>
                    <ul>
                        <li class="active"><a href="#">Home &ensp;</a>
                            <ul class="responsivmenu-sous">
						      <li><a href="#">presentation</a></li>
						      <li><a href="#">formation</a></li>
							  <li><a href="#">competence</a></li>
						   </ul> 
                        </li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Project &ensp;</a> 
                            <!-- <ul class="responsivmenu-sous">
						      <li><a href="#">Client</a></li>
						      <li><a href="#">Work</a></li>
						      <li><a href="#">partner</a></li>
						   </ul> -->
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                </div>
            </div>
        </header>
        <section>
            <!--<form method = "POST" action = "formulaire2.php">-->
            <form method = "POST" action = "formulaire-valid.php">
                <fieldset> 
                    <legend>Information generale</legend>
                <div class="c100">
                    <label for = "prenom">Entrez votre prenom :</label>
                    <input type = "text" name = "prenom" id = "prenom" placeholder = "ex: henri" required = "required"/>
                </div>

                <div class="c100">
                    <label for = "email">Adresse email :</label>
                    <input type = "email" name = "email" id = "email" placeholder = "Entrez votre reponse" required = "required"/>
                </div>
            
                 <div class="c100">
                    <label for = "age">votre age :</label>
                    <input type = "number" name = "age" id = "age" placeholder = "age"/>
                </div>
                
                <div class="c100">votre genre: 
                    <input type = "radio" name = "sexe" value = "homme" id = "homme"/>
                    <label for = "homme">Homme</label>
                    
                    <input type = "radio" name = "sexe" value = "femme" id = "femme"/>
                    <label for = "femme">Femme</label>
                </div>
                
               <div class="c100">
                    <label for = "pays">Pays de residence :</label>
                    <select name = "pays" id = "pays">
                        <optgroup label = "Afrique">
                            <option value = "ivory coast">ivory coast</option>
                            <option value = "nigeria">nigeria</option>
                            <option value = "togo">togo</option>
                            <option value = "ghana">ghana</option>
                        </optgroup>
                        <optgroup label = "Europe">
                            <option value = "frane">France</option>
                            <option value = "Italie">Italie</option>
                            <option value = "espagne">espagne</option>
                            <option value = "engleterre">engleterre</option>
                        </optgroup>
                    </select>
                </div> 


                <div class="c100" id="submit">
                    <input type = "submit" value = "Envoyer"/>
                </div>
                </fieldset>
            </form>
             
             
        </section>
        <footer>

        </footer>
        
        <script src="assets/js/jquerymin.js"></script>       
		<script src="assets/js/bootstrap.js"></script> 
       <!-- <script src='assets/js/sitejs.js' async></script> -->     
	  </body>
   </html>