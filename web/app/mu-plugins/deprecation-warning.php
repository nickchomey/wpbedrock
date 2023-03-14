<?php
/**
 * Plugin Name: Turn Off Deprecated Warnings
 * Description: Don't show deprecated warnings in error log
 * Author: Nick Chomey
 * Version: 1.0.0 * 
 */

//error_reporting(E_ALL & ~E_WARNING & ~E_DEPRECATED & ~E_USER_DEPRECATED & ~E_NOTICE);
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED );
