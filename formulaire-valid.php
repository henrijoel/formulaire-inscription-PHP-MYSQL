
<?php 
    $serveur = "localhost"; 
    $dbname = "cours" ;
    $user = "root" ;
    $pass = "" ;

    //on recupere les valeurs et on creer une fonction
    $prenom = valid_donnees($_POST["prenom"]) ;
    $email = valid_donnees($_POST["email"]) ;
    $age = valid_donnees($_POST["age"]) ;
    $sexe = valid_donnees($_POST["sexe"]) ;
    $pays = valid_donnees($_POST["pays"]) ;

    function valid_donnees($donnees) {
        $donnees = trim($donnees) ;
        $donnees = stripslashes($donnees) ;
        $donnees = htmlspecialchars($donnees) ;
        return $donnees ;
    }

    /*si les champs prenom et email ne sont pas vides et si les donnees ont 
    bien la forme attendue...*/
    if (!empty($prenom)
        && strlen($prenom) <= 20 
        && preg_match("^[A-Za-z '-]+$^", $prenom)
        && !empty($email)
        && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        try {
            //on se connecte a la bd
            $connexion = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
            $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
            //insertion des données recus
             $insertion = $connexion->prepare("
                         INSERT INTO form(prenom, email, age, sexe, pays)             
                         VALUES(:prenom, :email, :age, :sexe, :pays)");
              
            $insertion->bindParam(':prenom', $prenom); 
            $insertion->bindParam(':email', $email); 
            $insertion->bindParam(':age', $age); 
            $insertion->bindParam(':sexe', $sexe);           
            $insertion->bindParam(':pays', $pays); 

            $insertion->execute() ;

            //on renvoi vers:
             header("Location:form-merci.html") ;
        }
        catch(PDOException $e){
             echo 'Erreur: de validation ' .$e->getMessage();
        }
    }
    //Le PHP nous offre différentes options pour sécuriser nos formulaires en testant la validité des données envoyées :
    //on va pouvoir utiliser des fonctions, des filtres, des expressions régulières, etc.
        

/*Que fait-on ici ? Lorsque le formulaire est envoyé, on commence par utiliser notre 
fonction valid_donnees() pour échapper les caractères dangereux potentiellement 
envoyées et effectuer un premier nettoyage des données du formulaire. On place alors le 
résultat dans nos variables $prenom, $mail, etc.

Ensuite, on ne va vouloir enregistrer les données en base de données que si elles nous 
conviennent. On va donc déjà tester les données envoyées avec un if : si le format est 
satisfaisant, alors on les enregistre et en envoie l’utilisateur vers la page de remerciement. 
Sinon (else), on renvoie l’utilisateur vers le formulaire pour qu’il le remplisse à nouveau.

Ici, notre if teste :

1. Que notre variable $prenom ne soit pas vide ;
2. ET que notre variable $prenom ne fasse pas plus de 20 caractères avec la 
    fonction strlen() qui calcule la taille d’une chaine de caractères ;
3. ET que notre variable $prenom ait bien la forme attendue avec le 
    fonction preg_match() à laquelle on passe une regex ;
4. ET que notre variable $mail ne soit pas vide ;
5. ET que notre variable $mail ait bien la forme attendue avec le 
    fonction filter_var() et le filtre FILTER_VALIDATE_EMAIL
*/
?>

