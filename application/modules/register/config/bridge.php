<?php

$config['use_forum_bridge'] = true;

/**
 * Default support:
 * phpbb, ipb, smf, mybb
 */
$config['forum_bridge'] = "mybb";
$config['forum_table_prefix'] = "mybb_";

$config['bridge']['hostname'] = "localhost";
$config['bridge']['username'] = "root";
$config['bridge']['password'] = "asmodeos123";
$config['bridge']['database'] = "foro";
$config['bridge']['dbdriver'] = "mysqli";
$config['bridge']['dbprefix'] = "";
$config['bridge']['pconnect'] = TRUE;
$config['bridge']['db_debug'] = TRUE;
$config['bridge']['cache_on'] = FALSE;
$config['bridge']['cachedir'] = "";
$config['bridge']['char_set'] = "utf8";
$config['bridge']['dbcollat'] = "utf8_general_ci";
$config['bridge']['swap_pre'] = "";
$config['bridge']['autoinit'] = TRUE;
$config['bridge']['stricton'] = FALSE;