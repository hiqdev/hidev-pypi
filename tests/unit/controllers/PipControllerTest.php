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

use hidev\pypi\controllers\PipController;

/**
 * Tests for PipController.
 */
class PipControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PipController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new PipController('pip', null);
    }

    protected function tearDown()
    {
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('hidev\base\Controller', $this->object);
    }
}
