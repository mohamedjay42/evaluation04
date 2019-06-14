<?php                
//connexion à la bdd
function openDb()
{
    define("HOST","localhost");
    define("SQL_ID","root");
    define("SQL_PSW","");
    define("SQL_NAME","evaluation04");

    $bdd=new mysqli ("HOST", "SQL_ID", "SQL_PSW", "SQL_NAME");
    if ($bdd->connect_errno)
    {
        echo "Echec lors de la connexion à MySQL
        (" . $bdd->connect_errno . ") " . $bdd->connect_errno;
    }
}
?>