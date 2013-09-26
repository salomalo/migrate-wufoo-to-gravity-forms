<?php

/*
  Plugin Name: Wufoo to Gravity Importer
  Plugin URI: http://rtcamp.com/
  Description: Wufoo Form to Gravity Forms migrator!
  Version: 1.0
  Author: rtCamp
  Author URI: http://rtcamp.com
 */
if (!defined('RT_WUFOO_IMPORT_PAGE_SIZE'))
    define('RT_WUFOO_IMPORT_PAGE_SIZE', 25);
require_once('lib/Wufoo-PHP-API-Wrapper/WufooApiWrapper.php');
require_once('rtWufooAPI.php');
require_once('rtProgress.php');
require_once('rtWufoo.php');
new rtWufoo();


// require_once('lib/parsecsv.lib.php');
// require_once('rtCSV.php');
// new rtCSV();
?>
