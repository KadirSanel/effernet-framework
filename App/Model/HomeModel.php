<?php

namespace App\Model;

use Effernet\Core\Data\Core;

class HomeModel
{
    /**
     * @var Core
     */
    private Core $database;

    /**
     *
     */
    public function __construct()
    {
        $this->database = new Core('dr_teeth_dental_db');
        $query = $this->database->runQuery('SELECT * FROM user_data');
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

    }

}