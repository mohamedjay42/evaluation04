<?php

class AdherentModel
{
    private $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    public function create($adherent)
    {}

}