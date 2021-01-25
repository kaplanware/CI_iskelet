<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array("session","encryption","form_validation","database");    //"database","session","encryption","form_validation"

$autoload['drivers'] = array();

$autoload['helper'] = array("tools","url","form","date");  //"tools","url","form","date"

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array("basic_model");
