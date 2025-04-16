<?php 
function createUser($pdo)
{
    try {
        $query = 'insert into user(userName, userSurname, userlogin, userMDP, userEmail, userRole)
         values (:userName, :userSurname, :userlogin, :userMDP, :userEmail, :userRole)';
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'userName' => $_POST["nom"],
            'userSurname' => $_POST["prenom"],
            'userPhoneNumber' => $_POST["phone_number"],
            'userlogin' => $_POST["login"],
            'userMDP' => $_POST["mot_de_passe"],
            'userEmail' => $_POST["email"],
            'userRole' => 'user'
            ]);   

    }   catch (PDOException $e) {
        $message = $e->getMessage();
        die($message); }
}


function connectUser($pdo)
{
    try {
        $query = 'select * from user where userlogin = :userlogin and userMDP = :userMDP';
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'userlogin'  => $_POST["login"],
            'userMDP'  => $_POST["mot_de_passe"]
        ]);
        $user = $connectUser->fetch();
        if (!$user){
            return false;
        }
        else{
            $_SESSION["user"] = $user;
            return true;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}