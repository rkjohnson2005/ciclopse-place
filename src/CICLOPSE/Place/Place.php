<?php
namespace CICLOPSE\Place;
use CICLOPSE;

class Place extends CICLOPSE\Standard
{
    public function __construct($id = '', $table = 'place', $database = 'Rickzilla')
    {
        parent::__construct($id, $table, $database);
    }
}