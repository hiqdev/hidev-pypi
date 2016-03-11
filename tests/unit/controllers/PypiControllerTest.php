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

use hidev\pypi\controllers\PypiController;

/**
 * Tests for PypiController.
 */
class PypiControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PypiController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new PypiController('pypi', null);
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('hidev\base\Controller', $this->object);
    }
}
