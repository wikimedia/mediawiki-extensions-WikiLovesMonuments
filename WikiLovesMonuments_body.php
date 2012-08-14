<?php

class WikiLovesMonuments {
	/* Active WLM edition, either the last/running edition or in preparation */
	const activeEdition = 2012;

	/* const */ static $countries = array(
		2010 => array( 'nl'	),
		
		2011 => array( // https://commons.wikimedia.org/wiki/Commons:Wiki_Loves_Monuments_2011
				'ad', // Andorra
				'at', // Austria
				'be', // Belgium
				'dk', // Denmark
				'ee', // Estonia
				'fr', // France
				'de', // Germany
				'hu', // Hungary (21 September - 21 October)
				'lu', // Luxembourg
				'nl', // Netherlands
				'no', // Norway
				'pl', // Poland
				'pt', // Portugal
				'ro', // Romania
				'ru', // Russia (15 September - 30 September)
				'es', // Spain
				'se', // Sweden
				'ch', // Switzerland (1 July - 30 September)
			),
		
		2012 => array( // https://commons.wikimedia.org/wiki/Commons:Wiki_Loves_Monuments_2012/Participating_countries
				'ad', // Andorra
				'ar', // Argentina
				'at', // Austria
				'by', // Belarus
				'be', // Belgium
				'ca', // Canada
				'cl', // Chile
				'co', // Colombia
				'cz', // Czech Republic
				'dk', // Denmark
				'ee', // Estonia
				'fr', // France
				'de', // Germany
				'hu', // Hungary
				'in', // India
				'il', // Israel
				'it', // Italy
				'ke', // Kenya
				'lb', // Liechtenstein
				'lu', // Luxembourg
				'mx', // Mexico
				'nl', // Netherlands
				'pa', // Panama
				'ph', // Philippines
				'pl', // Poland
				'ro', // Romania
				'ru', // Russia
				'za', // South Africa
				'es', // Spain
				'se', // Sweden
				'ch', // Switzerland
				'ua', // Ukraine
				'us', // United States
			)
	);
	
	/**
	 * Web sites for the local competition of each country
	 */
	/*const*/ static $websites = array(
		'ad' => 'http://www.wikilovesmonuments.cat/', // Andorra and Catalan areas WP
		'ar' => false, // Argentina
		'at' => 'http://wikilovesmonuments.at/', // Austria WP
		'by' => false, // Belarus
		'be' => 'http://www.wikilovesmonuments.be/', // Belgium MW
		'ca' => 'http://wikimedia.ca/wlmca/', // Canada MW
		'cl' => 'http://www.wikilovesmonuments.cl/', // Chile WP
		'co' => 'http://www.wikilovesmonuments.co/', // Colombia WP
		'cz' => 'http://www.wikilovesmonuments.cz/', // Czech Republic WP
		'dk' => false, // Denmark
		'ee' => false, // Estonia
		'fr' => 'http://wikilovesmonuments.fr/', // France WP
		'de' => 'http://de.wikipedia.org/wiki/Wikipedia:Wiki_loves_monuments_2012', // Germany (redirected from http://wikilovesmonuments.de/)
		'hu' => 'http://www.wikilovesmonuments.hu/', // Hungary custom
		'in' => 'http://www.wikilovesmonuments.in/', // India WP
		'il' => false, // Israel
		'it' => 'http://www.wikilovesmonuments.it/', // Italy WP
		'ke' => false, // Kenya
		'lb' => false, // Liechtenstein
		'lu' => 'http://www.wikilovesmonuments.be/', // Luxembourg MW
		'mx' => false, // Mexico
		'nl' => 'http://www.wikilovesmonuments.nl/', // Netherlands WP
		'pa' => 'http://www.wlmpanama.org.pa/', // Panama WP
		'ph' => 'http://www.wikilovesmonuments.ph/', // Philippines WP
		'pl' => 'http://wikizabytki.pl/', // Poland WP
		'pt' => 'http://www.wikilovesmonuments.org.pt/', // Portugal custom+MW
		'ro' => 'http://wikilovesmonuments.ro/', // Romania WP
		'ru' => 'http://wikilovesmonuments.ru/', // Russia WP
		'rs' => 'http://wlm.wikimedia.rs/', // Serbia placeholder
		'za' => 'http://wikilovesmonuments.co.za/', // South Africa MW
		'es' => 'http://www.wikilm.es/', // Spain MW
		'se' => 'http://wikilovesmonuments.se/', // Sweden WP
		'ch' => 'http://wikilovesmonuments.ch/', // Switzerland WP
		'ua' => 'http://wlm.org.ua/', // Ukraine WP
		'us' => 'http://wikilovesmonuments.us/', // United States WP
	);

	static function registerParserFunctions( $parser ) {
		if ( class_exists( 'CountryNames' ) ) // Provided by cldr extension
			$parser->setFunctionHook( 'wlm-countries', 'WikiLovesMonuments::countries' );
		$parser->setFunctionHook( 'wlm-country-count', 'WikiLovesMonuments::countryCount' );
		
		return true;
	}
	
	public static function countries( $parser, $year ) {
		if ( !isset( self::$countries[(int)$year] ) ) {
			return '<strong class="error">' .
				wfMessage( 'wlm-no-contest-year', $year )->inLanguage( $parser->getFunctionLang() )->plain() .
			 	'</strong>';
		}
		$countries = CountryNames::getNames( $parser->getFunctionLang()->getCode() );
		
		$wlmCountries = array();
		foreach ( self::$countries[(int)$year] as $wlmCountryCode ) {
			$wlmCountries[] = $countries[ strtoupper( $wlmCountryCode ) ];
		}
		
		return $parser->getFunctionLang()->listToText( $wlmCountries );
	}
	
	public static function countryCount( $parser, $year ) {
		if ( !isset( self::$countries[(int)$year] ) ) {
			return '<strong class="error">' .
				wfMessage( 'wlm-no-contest-year', $year )->inLanguage( $parser->getFunctionLang() )->plain() .
			 	'</strong>';
		}
		
		return $parser->getFunctionLang()->formatNum( count( self::$countries[(int)$year] ) );
	}

	/**
	 * @return mixed the url to the WLM website for that country or false if it isn't a country code
	 */
	public static function getCountryWebsite($countryCode) {
		if ( isset( self::$websites[$countryCode] ) && self::$websites[$countryCode] )
			return self::$websites[$countryCode];

		if ( class_exists( 'CountryNames' ) ) {
			$countries = CountryNames::getNames( 'en' );

			// Fallback to the page in Wikimedia Commons
			if ( isset( $countries[ strtoupper( $countryCode ) ] ) )
				return 'https://commons.wikimedia.org/wiki/Commons:Wiki_Loves_Monuments_2012_in_' . $countries[ strtoupper( $countryCode ) ];
		}

		return false;
	}
}
