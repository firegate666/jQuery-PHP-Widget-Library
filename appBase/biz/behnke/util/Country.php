<?php

namespace biz\behnke\util;

/**
 * Description of Country
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class Country
{

	private function __construct()
	{
		// we want no objects
	}

	/**
	 * get country list of xmlnodes
	 *
	 * @see http://ws.geonames.org/
	 * @return array
	 */
	static function xmlList()
	{
		return simplexml_load_file('http://ws.geonames.org/countryInfo');
	}

}
