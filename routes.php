<?php declare(strict_types=1);

use Automation\Framework\Facades\{Router, View};

Router::view('/', 'homepage');
Router::view('/program/add', 'program.add');