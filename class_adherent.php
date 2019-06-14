<?php
 class Adherent
 {
    public $nom;
    public $prenom;
    public $adresse;
    public $cp;
    public $ville;
    public $tel;
    public $mail;
    public $photo;
    public $mdp;

    public function __construct($aData)
    {
        if (is_string($aData['nom'])) {
            $this->nom = htmlentities($aData['nom']);
        }
        if (is_string($aData['prenom'])) {
            $this->prenom = htmlentities($aData['prenom']);
        }
        if (is_string($aData['prenom'])) {
            $this->prenom = htmlentities($aData['prenom']);
        }
        
    }
 }