<?php

/**
 * Created by PhpStorm.
 * User: mirage
 * Date: 6/1/17
 * Time: 1:00 PM
 */

namespace App\Model;

class TestModel extends \Mirage\App\Model
{

    public $id;
    public $value;

    public function initialize()
    {
        $this->setSource('test_table');
    }

    /**
     * before saving record this functions is called
     */
    public function beforeSave()
    {
    }

    /**
     * after fetching record this functions is called
     */
    public function afterFetch()
    {
    }

    /**
     * after saving record this functions is called
     */
    public function afterSave()
    {
    }
}
