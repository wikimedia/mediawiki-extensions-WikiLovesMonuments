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
				'gh', // Ghana
				'hu', // Hungary
				'in', // India
				'il', // Israel
				'it', // Italy
				'ke', // Kenya
				'li', // Liechtenstein
				'lu', // Luxembourg
				'mx', // Mexico
				'nl', // Netherlands
				'no', // Norway
				'pa', // Panama
				'ph', // Philippines
				'pl', // Poland
				'ro', // Romania
				'ru', // Russia
				'rs', // Serbia
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
		'int' => 'http://www.wikilovesmonuments.org/',
		'eu' => 'http://www.wikilovesmonuments.eu/',

		'ad' => 'http://www.wikilovesmonuments.cat/', // Andorra and Catalan areas WP
		'ar' => 'http://wikilovesmonuments.com.ar', // Argentina WP
		'at' => 'http://wikilovesmonuments.at/', // Austria WP
		'by' => 'http://wikilovesmonuments.by/', // Belarus WP
		'be' => 'http://www.wikilovesmonuments.be/', // Belgium MW
		'ca' => 'http://wikimedia.ca/wlmca/', // Canada MW
		'cl' => 'http://www.wikilovesmonuments.cl/', // Chile WP
		'co' => 'http://www.wikilovesmonuments.co/', // Colombia WP
		'cz' => 'http://www.wikilovesmonuments.cz/', // Czech Republic WP
		'dk' => 'http://da.wikipedia.org/wiki/Wikipedia:Wiki_Loves_Monuments_2012', // Denmark (redirected from http://www.wikilovesmonuments.dk/)
		'ee' => 'http://wikilovesmonuments.ee/', // Estonia
		'fr' => 'http://wikilovesmonuments.fr/', // France WP
		'gh' => false; // Ghana
		'de' => 'http://de.wikipedia.org/wiki/Wikipedia:Wiki_Loves_Monuments_2012', // Germany (redirected from http://wikilovesmonuments.de/)
		'hu' => 'http://www.wikilovesmonuments.hu/', // Hungary custom
		'in' => 'http://www.wikilovesmonuments.in/', // India WP
		'il' => false, // Israel
		'it' => 'http://www.wikilovesmonuments.it/', // Italy WP
		'ke' => false, // Kenya
		'li' => false, // Liechtenstein
		'lu' => 'http://www.wikilovesmonuments.be/', // Luxembourg MW
		'mx' => 'http://wikilovesmonuments.mx/', // Mexico WP
		'nl' => 'http://www.wikilovesmonuments.nl/', // Netherlands WP
		'no' => false, // Norway
		'pa' => 'http://www.wlmpanama.org.pa/', // Panama WP
		'ph' => 'http://www.wikilovesmonuments.ph/', // Philippines WP
		'pl' => 'http://wikizabytki.pl/', // Poland WP
		'pt' => 'http://www.wikilovesmonuments.org.pt/', // Portugal custom+MW
		'ro' => 'http://wikilovesmonuments.ro/', // Romania WP
		'ru' => 'http://wikilovesmonuments.ru/', // Russia WP
		'rs' => 'http://wlm.wikimedia.rs/pocetna.php', // Serbia custom
		'za' => 'http://wikilovesmonuments.co.za/', // South Africa MW
		'es' => 'http://www.wikilm.es/', // Spain MW
		'se' => 'http://wikilovesmonuments.se/', // Sweden WP
		'ch' => 'http://wikilovesmonuments.ch/', // Switzerland WP
		'ua' => 'http://wlm.org.ua/', // Ukraine WP
		'us' => 'http://wikilovesmonuments.us/', // United States WP
	);

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

	public static function onSkinBuildSidebar( Skin $skin, &$bar ) {
		global $wgLang, $wgWikiLovesMonumentsCountryPortlet;

		if ( !$wgWikiLovesMonumentsCountryPortlet || !class_exists( 'CountryNames' ) ) {
			return true;
		}

		$skipCountries = array();
		if ( $wgWikiLovesMonumentsCountryPortlet !== true )
			$skipCountries = (array)$wgWikiLovesMonumentsCountryPortlet;

		$countryNames = CountryNames::getNames( $wgLang->getCode() );
		$countryNames['INT'] = wfMsg( 'wlm-international-contest' );

		$countries = WikiLovesMonuments::$countries[WikiLovesMonuments::activeEdition];
		sort( $countries ); // Sort by country code
		array_unshift( $countries, 'int' );

		$wlmSidebar = "			<ul>";
		foreach ( $countries as $countryCode ) {
			if ( in_array( $countryCode, $skipCountries ) )
				continue;

			$url = self::getCountryWebsite( $countryCode );
			$name = $countryNames[ strtoupper( $countryCode ) ];

			if ( $url && $name )
				$wlmSidebar .= "\n\t\t\t\t" . Html::rawElement( 'li', array( 'id' => "wlm-country-$countryCode" ), Html::element( 'a' , array( 'href' => $url ), $name ) );

		}
		$wlmSidebar .= "\n			</ul>\n";

		$bar['wlm-sidebar-portlet'] = $wlmSidebar;
		return true;
	}

	public static function countryWebsite( $parser, $countryCode ) {
		$url = self::getCountryWebsite( strtolower( $countryCode ) );

		if ( $url === false )
			return '<strong class="error">' .
				wfMessage( 'wlm-no-url-bad-country', $countryCode )->inLanguage( $parser->getFunctionLang() )->plain() .
				'</strong>';

		return $url;
	}
}
