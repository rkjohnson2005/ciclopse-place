<?php
namespace CICLOPSE\Place;
use CICLOPSE;

class Place extends CICLOPSE\Standard
{
    public function __construct($table_id = '')
    {
        parent::__construct('place', 'Rickzilla', $table_id);
    }
}