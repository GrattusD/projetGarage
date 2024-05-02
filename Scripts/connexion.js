/*recupérer les données du formulaire de connexion*/
/*comparer les données avec la base de données*/
/*si ok ==>si admin renvoie vers page sécurisée admin*/
/*si pas ok ==> erreur mdp ou erreur requête*/


document.getElementById("form_connexion").addEventListener("submit", function(event){
    event.preventDefault();

    var formData= new FormData(this);

    fetch("../PHP/verification_connexion.php", {
        method: "POST",
        body: formData
    })
    
    .catch(error => {
        // Gérer les erreurs
        console.error("Erreur :", error);
        alert("Erreur lors de la requête au serveur");
    });
});








    /*envoi vers le fichier php des données récupérées*/
/*    var connex = new XMLHttpRequest();
    var url="../PHP/verification_connexion.php";
    connex.open("post", url, true);
    connex.onreadystatechange= function(){
        if (connex.readyState === XMLHttpRequest.DONE){
            if (connex.status===200){
                /*connexion serveur réussie*/
/*                if (connex.responseText !== "Nom d'utilisateur ou mot de passe incorrect"){
                    window.location.href= connex.responseText;
                }else{
                    alert("Nom d'utilisateur ou mot de passe incorrect JS");
                }
            }else{
                alert("erreue lors de la requête");
            }
        }
    };
    connex.send(formData);
});
*/