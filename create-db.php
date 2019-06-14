<?php
require_once("./include/sql_connect.php");

class DbEvaluation04
{
   protected $sql;

   public function __construct()
   {

   }
   /*public function openDataBase()
   {
      function openDb();
   }*/
   public function createTable()
   {
      $sql = "CREATE TABLE `utilisateurs` ( 
         `id` int(10) unsigned NOT NULL auto_increment, 
         `nom` varchar(40) NOT NULL, 
         `prenom` varchar(40) NOT NULL, 
         `adresse` varchar(40) NOT NULL, 
         `code_postal` varchar(40) NOT NULL, 
         `ville` varchar(40) NOT NULL, 
         `telephone` varchar(40) NOT NULL, 
         `email` varchar(40) NOT NULL, 
         `photo` varchar(40) NOT NULL, 
         `mdp` varchar(40) NOT NULL, 
         PRIMARY KEY (`id`) 
      )";
      $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
   }
   public function 
}
