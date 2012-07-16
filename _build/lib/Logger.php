<?php
interface Logger
{
	const EMERG   = 1; 
	const ALERT   = 2; 
	const CRIT    = 4; 
	const ERR     = 8; 
	const WARNING = 16; 
	const NOTICE  = 32; 
	const INFO    = 64; 
	const DEBUG   = 128; 
	
	public function log( $msg, $severity = self::DEBUG, $category = null);
}
# vim:encoding=utf8:syntax=php
