<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');

// Register hook EidTypeHook for jh_magnificpopup
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jh_magnificpopup']['EidTypeHook'][] = 'EXT:jh_magnificpopup_hookexamples/Classes/Hooks/EidTypeHook.php:Heilmann\JhMagnificpopupHookexamples\Hooks\EidTypeHook->ajax';