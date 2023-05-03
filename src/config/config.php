<?php
date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_TIME, "pt_BR", "pt_BR.utf-8", "portuguese");

// General Constants
define("DAILY_TIME", 60 * 60 * 8);

// Folders
define("MODEL_PATH", realpath(dirname(__FILE__) . "/../models"));
define("VIEW_PATH", realpath(dirname(__FILE__) . "/../views"));
define("TEMPLATE_PATH", realpath(dirname(__FILE__) . "/../views/template"));
define("CONTROLLER_PATH", realpath(dirname(__FILE__) . "/../controllers"));
define("EXECEPTION_PATH", realpath(dirname(__FILE__) . "/../exceptions"));

// Files
require_once(realpath(dirname(__FILE__) . "/Database.php"));
require_once(realpath(dirname(__FILE__) . "/loader.php"));
require_once(realpath(dirname(__FILE__) . "/session.php"));
require_once(realpath(dirname(__FILE__) . "/date_utils.php"));
require_once(realpath(dirname(__FILE__) . "/utils.php"));
require_once(realpath(MODEL_PATH . "/Model.php"));
require_once(realpath(MODEL_PATH . '/User.php'));
require_once(realpath(EXECEPTION_PATH . "/AppException.php"));
require_once(realpath(EXECEPTION_PATH . "/ValidationException.php"));