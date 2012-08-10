<?php

class WikiLovesMonuments {
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
				'bd', // Bangladesh
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
}
