<?php

/*
 * PyPI plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-pypi
 * @package   hidev-pypi
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\pypi\tests\unit\controllers;

use hidev\pypi\controllers\SetupPyController;

/**
 * Tests for SetupPyController.
 */
class SetupPyControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SetupPyController
     */
    protected $object;

    private $ops = [
        'name'          => 'test',
        'version'       => '0.0.0',
        'license'       => 'MIT',
        'url'           => 'http://url.url/url',
        'author'        => 'Some Body',
        'author_email'  => 'some@email',
    ];

    protected function setUp()
    {
        $this->object = new SetupPyController('setup.py', null, $this->ops);
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('hidev\base\Controller', $this->object);
    }

    public function testGetName()
    {
        $this->assertSame($this->ops['name'], $this->object->getName());
    }

    public function testGetVersion()
    {
        $this->assertSame($this->ops['version'], $this->object->getVersion());
    }

    public function testGetLicense()
    {
        $this->assertSame($this->ops['license'], $this->object->getLicense());
    }

    public function testGetPackages()
    {
        $this->assertSame($this->ops['name'], $this->object->getPackages());
    }

    public function testGetUrl()
    {
        $this->assertSame($this->ops['url'], $this->object->getUrl());
    }

    public function testGetAuthor()
    {
        $this->assertSame($this->ops['author'], $this->object->getAuthor());
    }

    public function testGetAuthorEmail()
    {
        $this->assertSame($this->ops['author_email'], $this->object->getAuthorEmail());
    }
}
