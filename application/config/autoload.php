<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array();
$autoload['libraries'][]='database';

$autoload['drivers'] = array();
$autoload['helper'] = array();
$autoload['helper'][] = 'url';

$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array();
$autoload['model'][] = 'Emp_model';
