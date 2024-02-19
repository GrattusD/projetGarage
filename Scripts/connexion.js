/*recupérer les données du formulaire de connexion*/
/*comparer les données avec la base de données*/
/*si ok ==>si admin renvoie vers page sécurisée admin*/
/*si pas ok ==> erreur mdp ou erreur requête*/


document.getElementById("form_connexion").addEventListener("submit" function(event){
    event.preventDefault();

    var formData= new FormData(this);

    /*envoi ver le fichier php des données récupérées*/
    var connex = new XMLHttpRequest();
    var url= "../PHP/verification_connexion.php;"
    connex.open("POST", url, true);
    connex.onreadystatechange= funtion(){
        if (connex.readyState === XMLHttpRequest.DONE){
            if (connex.status===200){
                /*connexion serveur réussie*/
                if (connex.responseTect === "connexion_reussie"){
                    window.location.href= "page_interne.html";
                }else{
                    alert("Nom d'utilisateur ou mot de passe incorrect");
                }
            }else{
                alert("erreue lors de la requête");
            }
        }
    };
    connex.send(formData);
});