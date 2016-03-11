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

/**
 * Goal for `setup.py` file.
 */
class SetupPyController extends \hidev\controllers\FileController
{
    protected $_file = 'setup.py';

    public function actionLoad()
    {
        parent::actionLoad();
        $sets = [
            'name'          => $this->getName(),
            'packages'      => $this->getPackages(),
            'version'       => $this->getVersion(),
            'license'       => $this->getLicense(),
            'description'   => $this->takePackage()->title,
            'keywords'      => $this->takePackage()->keywords,
            'url'           => $this->getUrl(),
            'author'        => $this->getAuthor(),
            'author_email'  => $this->getAuthorEmail(),
        ];
        $this->setItems($sets, 'first');
        foreach ($sets as $k => $v) {
            if (!$this->get($k)) {
                $this->delete($k);
            }
        }
    }

    public function getUrl()
    {
        return $this->rawItem('url') ?: $this->takePackage()->homepage;
    }

    public function getName()
    {
        return $this->getItem('name') ?: $this->takePackage()->name;
    }

    public function getVersion()
    {
        return $this->getItem('version') ?: $this->takePackage()->getVersion();
    }

    public function getLicense()
    {
        return $this->getItem('license') ?: $this->takePackage()->getLicense();
    }

    public function getPackages()
    {
        return $this->getItem('packages') ?: $this->getName();
    }

    public function getAuthorData($field)
    {
        return reset($this->takePackage()->authors)[$field];
    }

    public function getAuthor()
    {
        return $this->getItem('author') ?: $this->getAuthorData('name');
    }

    public function getAuthorEmail()
    {
        return $this->getItem('author_email') ?: $this->getAuthorData('email');
    }
}
