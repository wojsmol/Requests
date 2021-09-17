<?php
/**
 * Capability interface declaring the known capabilities
 *
 * @package Requests
 * @subpackage Capability
 */

/**
 * Capability interface declaring the known capabilities
 *
 * This is used as discovery to figure out which capabilities can be queried.
 *
 * @package Requests
 * @subpackage Capability
 */
interface Requests_Capability {

	/**
	 * Support for SSL.
	 *
	 * @var string
	 */
	const SSL = 'ssl';

	/**
	 * Collection of all capabilities supported in Requests.
	 *
	 * Note: this does not automatically mean that the capability will be supported for your chosen transport!
	 *
	 * @var array<string>
	 */
	const ALL = array(
		self::SSL,
	);
}
