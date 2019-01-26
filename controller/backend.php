<?php
/**
 * This file manages useful functions for the backend
 * package /[model]/[AdminManager.php]
 */

require_once('./model/AdminManager.php');

/**
 *  this function verify the password
 * @param [text] $login [the name]
 * @param[text] $pw[the password]
 * @use AdminManager
 *
 * @return [text] $message [error message]
 * or 1 if they is not error
 */
function verifiePws($login,$pw){
    $adminManager=new jeanForteroche\Model\AdminManager;
    $verify=$adminManager->verifiePw($login,$pw);
    if ($verify==true)
    { $message='';
        header("Location: index.php?action=adminAccueil&&message=$message");}
    else
    {$message='le nom d\'utilisateur et le mot de passe ne correspondent pas';
     require('view/frontend/password.php');}
}

/**
 *  this function is use to fill the admin table
 * @use AdminManager
 *
 * @link ['view/frontend/adminAccueil.php] [Accueil Admin]
 * @return [array] $resume [array containing the element of the chapter]
 * 
 */
function adminAccueil($message){
    $adminManager=new jeanForteroche\Model\AdminManager;
    $resume=$adminManager->resumeChapter();
    $resumecomments=$adminManager->getComments();
    $message=''.$message;
    require('view/backend/AccueilAdmin.php');}

/**
 *  this function is use to fill the admin table
 * @use AdminManager
 *
 * @link ['view/frontend/adminAccueil.php] [Accueil Admin]
 * @return [array] $post [array containing the element of the chapter]
 * @return [integer] $len [nombre de chapitre]
 *
 */
function adminAllComments($message){
    $adminManager=new jeanForteroche\Model\AdminManager;
    $resumecomments=$adminManager->getComments();
    $message=''.$message;
    require('view/backend/AdminAllComments.php');}

/**
 *  This function deletes the comment Selected and reload the page
 * @use 
 * @param[integer] $id id of seleted chapter
 * @param[text] from which page we arrive
 *
 * @link tne same at start
 * @return [array] $resume [array containing the element of the chapter]
 * @return [integer] $len [nombre de chapitre]
 *
 */
function deletComment($id,$from){
    $adminManager=new jeanForteroche\Model\AdminManager;
    $resume=$adminManager->resumeChapter();
    $resumecomments=$adminManager->getComments();
    $message=$adminManager->deletComments($id);
    
    switch ($from){
        case 'AllComment':
            header("Location: index.php?action=AllComments&&message=$message");
            break;
        case 'Accueil':
            header("Location: index.php?action=adminAccueil&&message=$message");
            break;
        default: require('view/frontend/erreur.php');
            break;
    }}
    /**
 *  This function deletes the comment Selected and reload the page
 * @use 
 * @param[integer] $id id of seleted chapter
 * @param[text] from which page we arrive
 *
 * @link tne same at start
 * @return [array] $resume [array containing the element of the chapter]
 * @return [integer] $len [nombre de chapitre]
 *
 */
function keep($id,$from){
    $adminManager=new jeanForteroche\Model\AdminManager;
    $resume=$adminManager->resumeChapter();
    $resumecomments=$adminManager->getComments();
    $message=$adminManager->keepComment($id);
    
    switch ($from){
        case 'AllComment':
            header("Location: index.php?action=AllComments&&message=$message");
            break;
        case 'Accueil':
            header("Location: index.php?action=adminAccueil&&message=$message");
            break;
        default: require('view/frontend/erreur.php');
            break;
    }}

/**
 *  this function change the password
 * @param [text] $login [the name]
 * @param[text] $pw[the password]
 * @use AdminManager
 *
 * @return [text] $message [error message]
 */
function newPws($name,$pwActuel,$pwNew){
    $adminManager=new jeanForteroche\Model\AdminManager;
    $verifypw=$adminManager->verifiePw($name,$pwActuel);
    if ($verifypw==true){
        
    $pass_hache = password_hash($pwNew, PASSWORD_DEFAULT);
    $newPW=$adminManager->changedPW($name,$pass_hache);
        header("Location: index.php?action=adminAccueil&&message=$newPW");
        
    }
else $message='le mot de passe et le nom ne correspondent pas.';
require("view/backend/Adminpassword.php");}
