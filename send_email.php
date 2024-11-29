<?
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // recuperer et securiser les donnees du formulaire
    $name= htmlspecialchars($_POST['fname']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);
    // configurer les parametres de l'e-mail
    $to="aguedelea2003@gmail.com";
    $subject="Nouveau message";
    $body= "Nom: $name\nE-mail:$email\nMessage:\n$message";
    $headers= "From: $email";

    //ENvoyer l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succes!";
    }
    else{
        echo "Echec de l'envoie du message.";
    }else{
        echo "Aucune données reçue.";
    }
}
?>