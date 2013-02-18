<?php

// Database sugar
function DB($dsn = null)
{
	static $db = array();
    empty($db[$dsn]) && $db[$dsn] = adapter_DB::connect(null === $dsn ? $GLOBALS['CONFIG']['DSN'] : $dsn);
    return $db[$dsn];
}

$CONFIG += array(
	'DSN' => 'mysqli://user:password@localhost/database',
);
