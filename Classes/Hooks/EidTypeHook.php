<?php
namespace Heilmann\JhMagnificpopupHookexamples\Hooks;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Jonathan Heilmann <mail@jonathan-heilmann.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * EidTypeHook
 */
class EidTypeHook {

	/**
	 *
	 *
	 * @param array $params params required by hook
	 * @param mixed $obj reference of $this
	 * @return array
	 */
	public function ajax(&$params, $obj) {
		// set machtedType to FALSE
		$conf = array('matchedType' => FALSE);
		if ($params['type'] == 'hookexample') {
			// the type matches,
			// set machtedType to TRUE
			// set a cObject name, add the cObject configuration and add a wrap for the lightbox
			$conf = array(
				'matchedType' => TRUE,
				'name'        => 'TEXT',
				'conf'        => array(
					'value'   => '',
				),
				'wrap'        => '<div class="white-popup-block">|</div>',
			);
			// set conf-value, depending on type of $params['hookConf']
			if (!empty($params['hookConf'])) {
				if (is_array($params['hookConf'])) {
					$conf['conf']['value'] = 'This is an easy example. Passed hookConf:<br/>' . \TYPO3\CMS\Core\Utility\DebugUtility::viewArray($params['hookConf']);
				} else {
					$conf['conf']['value'] = 'This is an easy example. Passed hookConf: ' . $params['hookConf'];
				}
			} else {
				$conf['conf']['value'] = 'This is an easy example.';
			}
		}
		// return configuration to jh_magnificpopup
		return $conf;
	}

}