<?php
require (__DIR__.'/../config/config.php');

/**
 * Fonction permettant de se connecter à la base de donnees
 * @return PDO
 */
function connectPdo(){
    try{
        $pdo = new PDO ('mysql:host='.HOST.';dbname='.DBNAME, USER , PW , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        return $pdo ;
    }
    catch(PDOExeption $e)
    {
        echo "problème de connexion". $e->getMessage();
        return false;
    }
}

function connection($name, $password){
    $pdo = connectPdo();
    try{
        $db = $pdo->prepare("select * from admin where admin.nom = :name");
        $db->execute([':name' => $name]);
        $admin = $db->fetch(PDO::FETCH_OBJ);
        if($admin){
            if(password_verify($password, $admin->mot_de_pasee)){
                unset($admin->mot_de_passe);
                $_SESSION['admin'] = $admin;
            }
        }
    }catch (PDOException $e){
        echo "Erreur de connection". $e->getMessage();
    }
}

function createAdmin($name, $password){
    $pdo = connectPdo();
    $password = password_hash($password, PASSWORD_DEFAULT);
    try{
        $db = $pdo->prepare("insert into admin (admin.nom, admin.mot_de_passe) values (:name, :password)");
        $db->execute([':name' => $name, ':password' => $password]);
    }catch (PDOException $e){
        echo "Erreur de connection". $e->getMessage();
    }
}

function register($name, $fname, $mail, $society, $status){
    $pdo = connectPdo();
    try{
        $db = $pdo->prepare("insert into utilisateur (utilisateur.statut, utilisateur.nom, utilisateur.prenom, utilisateur.email, utilisateur.societe)
        values (:status, :lname, :fname, :mail, :society)");
        $db->execute([':status' => $status, ':lname' => $lname, ':fname' => $fname, ':mail' => $mail, ':society' => $society]);
    }catch (PDOException $e){
        echo "Erreur de connection". $e->getMessage();
    }
}

function getArticle(){
    $pdo = connectPdo();

    $query = $pdo->prepare('SELECT * FROM article');
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $query->closeCursor();
}