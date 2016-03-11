<?php

/*
 * PyPI plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-pypi
 * @package   hidev-pypi
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'pip' => [
                'class' => 'hidev\pypi\controllers\PipController',
            ],
            'pypi' => [
                'class' => 'hidev\pypi\controllers\PypiController',
            ],
            'setup.py' => [
                'class' => 'hidev\pypi\controllers\SetupPyController',
            ],
            'readme' => [
                'markdownBadges' => [
                    'pypi.version'  => '[![Version](https://img.shields.io/pypi/v/{{ config.pypi.name }}.svg)](https://pypi.python.org/pypi/{{ config.pypi.name }})',
                    'pypi.license'  => '[![License](https://img.shields.io/pypi/l/{{ config.pypi.name }}.svg)](https://pypi.python.org/pypi/{{ config.pypi.name }})',
                    'pypi.monthly'  => '[![Monthly Downloads](https://img.shields.io/pypi/dm/{{ config.pypi.name }}.svg)](https://pypi.python.org/pypi/{{ config.pypi.name }})',
                    'pypi.weekly'   => '[![Weekly Downloads](https://img.shields.io/pypi/dw/{{ config.pypi.name }}.svg)](https://pypi.python.org/pypi/{{ config.pypi.name }})',
                    'pypi.daily'    => '[![Daily Downloads](https://img.shields.io/pypi/dd/{{ config.pypi.name }}.svg)](https://pypi.python.org/pypi/{{ config.pypi.name }})',
                ],
            ],
            'vcsignore' => [
                'dist' => 'dist files',
            ],
        ],
    ],
];
