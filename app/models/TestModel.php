<?php
/*
  +------------------------------------------------------------------------+
  | Mirage Micro Application                                               |
  +------------------------------------------------------------------------+
  | Copyright (c) 2018-2020                                                |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file LICENSE.txt.                             |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to help@aemirage.com so we can send you a copy immediately.            |
  +------------------------------------------------------------------------+
  | Authors: Ali Emamhadi <aliemamhadi@aemirage.com>                       |
  +------------------------------------------------------------------------+
*/

/**
 * This is part of Mirage Micro Service Application
 *
 * @author Ali Emamhadi <aliemamhadi@gmail.com>
 */

namespace App\Model;

final class TestModel extends \Mirage\App\Model
{
    /**
     * here we define model properties which are table's column name.
     * These properties should be public.
     */
    public $id;
    public $value;

    /**
     * This method should be overwrite in each model class.
     * For better performance you can ass parent::initialize().
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->setSource('test_table');
    }

    /**
     * This will calls before saving the model. $model->save();
     *
     * @return void
     */
    public function beforeSave(): void
    {
    }

    /**
     * This will calls after a model object is fetched from db.
     *
     * @return void
     */
    public function afterFetch(): void
    {
    }

    /**
     * Always calls after model was saved in db.
     *
     * @return void
     */
    public function afterSave(): void
    {
    }
}
