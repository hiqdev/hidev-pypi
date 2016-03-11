<?php

/*
 * PyPI plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-pypi
 * @package   hidev-pypi
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\pypi\controllers;

use Yii;

/**
 * Goal for Pip.
 */
class PipController extends \hidev\controllers\CommonController
{
    protected $_before = ['setup.py'];

    public function actionInstall()
    {
        return $this->runActions(['before', 'do-install', 'after']);
    }

    public function actionUpdate()
    {
        return $this->runActions(['before', 'do-update', 'after']);
    }

    public function actionDoInstall()
    {
        $dir = Yii::getAlias('@prjdir/env');

        return is_dir($dir) ? 0 : $this->run('install');
    }

    public function actionDoUpdate()
    {
        return $this->run('update');
    }

    public function run($command, $dir = null)
    {
        if ($dir === null) {
            $dir = Yii::getAlias('@prjdir');
        }
        if ($dir) {
            $args[] = '-d';
            $args[] = $dir;
        }
        $args[] = $command;
        return $this->passthru('pip', $args);
    }

    public function getName()
    {
        return $this->getConfiguration()->getName();
    }

    public function getConfiguration()
    {
        $conf = $this->takeGoal('setup.py');
        $conf->runAction('load');
        return $conf;
    }
}
