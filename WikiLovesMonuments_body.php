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
		'gh' => false, // Ghana
		'de' => 'http://de.wikipedia.org/wiki/Wikipedia:Wiki_Loves_Monuments_2012', // Germany (redirected from http://wikilovesmonuments.de/)
		'hu' => 'http://www.wikilovesmonuments.hu/', // Hungary custom
		'in' => 'http://www.wikilovesmonuments.in/', // India WP
		'il' => 'http://www.wlm.org.il/', // Israel WP
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

	/**
	 * Dates of beginning and end of the competitions
	 */
	/*const*/ static private $dates = array(
		2010 => array( 'default' => array( 'from' => '20100831220000', 'to' => '20100930215959' ) ),
		2011 => array( 'default' => array( 'from' => '20110831220000', 'to' => '20110930215959' ) ),
		2012 => array(
			'default' => array( 'from' => '20120831220000', 'to' => '20120930215959' ),
			'ph' => array( 'from' => '20120831160000', 'to' => '20120930155959' ),
			'in' => array( 'from' => '20120831183000', 'to' => '20120930185959' ),
			'ru' => array( 'from' => '20120831200000', 'to' => '20120930195959' ),
			'by' => array( 'from' => '20120831210000', 'to' => '20120930205959' ),
			'ke' => array( 'from' => '20120831210000', 'to' => '20120930205959' ),
			'ua' => array( 'from' => '20120831210000', 'to' => '20120930205959' ),
			'es' => array( 'to' => '20120930225959' ),
			'gh' => array( 'from' => '20120901000000', 'to' => '20120930235959' ),
			'ca' => array( 'from' => '20120901023000', 'to' => '20121001065959' ),
			'ar' => array( 'from' => '20120901030000', 'to' => '20121001025959' ),
			'cl' => array( 'from' => '20120901040000', 'to' => '20121001025959' ),
			'co' => array( 'from' => '20120901050000', 'to' => '20121001045959' ),
			'mx' => array( 'from' => '20120901050000', 'to' => '20121001065959' ),
			'pa' => array( 'from' => '20120901050000', 'to' => '20121001045959' ),
			'us' => array( 'from' => '20120901100100', 'to' => '20121001100059' ),
			'il' => array( 'from' => '20120913210000', 'to' => '20121014205959' ),
		),
	);

	/**
	 * @param $parser Parser
	 * @param $year
	 * @return string
	 */
	public static function countriesParserFunction( $parser, $year ) {
		$countries = self::countries( (int)$year, $parser->getFunctionLang()->getCode(), 'numeric' );

		if ( $countries === false ) {
			return '<strong class="error">' .
					wfMessage( 'wlm-no-contest-year', $year )->inLanguage( $parser->getFunctionLang() )->plain() .
					'</strong>';
		}
		
		return $parser->getFunctionLang()->listToText( $countries );
	}

	/**
	 * @param $year
	 * @param $langCode bool|string
	 * @param $keys string
	 * @return array|bool
	 */
	public static function countries( $year, $langCode = false, $keys = 'codes' ) {
		if ( !isset( self::$countries[$year] ) ) {
			return false;
		}

		if ( $langCode === false ) {
			return self::$countries[$year];
		}

		$countries = CountryNames::getNames( $langCode );

		$wlmCountries = array();
		foreach ( self::$countries[$year] as $wlmCountryCode ) {
			if ( $keys == 'codes' )
				$wlmCountries[$wlmCountryCode] = $countries[ strtoupper( $wlmCountryCode ) ];
			else
				$wlmCountries[] = $countries[ strtoupper( $wlmCountryCode ) ];
		}

		return $wlmCountries;
	}

	/**
	 * @param $parser Parser
	 * @param $year
	 * @return string
	 */
	public static function countryCount( $parser, $year ) {
		if ( !isset( self::$countries[(int)$year] ) ) {
			return '<strong class="error">' .
				wfMessage( 'wlm-no-contest-year', $year )->inLanguage( $parser->getFunctionLang() )->plain() .
			 	'</strong>';
		}
		
		return $parser->getFunctionLang()->formatNum( count( self::$countries[(int)$year] ) );
	}

	/**
	 * @param $countryCode string
	 * @return bool|string mixed the url to the WLM website for that country or false if it isn't a country code
	 */
	public static function getCountryWebsite( $countryCode ) {
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

	/**
	 * @param $skin Skin
	 * @param $bar array
	 * @return bool
	 */
	public static function onSkinBuildSidebar( Skin $skin, &$bar ) {
		global $wgLang, $wgWikiLovesMonumentsCountryPortlet;

		if ( !$wgWikiLovesMonumentsCountryPortlet || !class_exists( 'CountryNames' ) ) {
			return true;
		}

		$skipCountries = array();
		if ( $wgWikiLovesMonumentsCountryPortlet !== true ) {
			$skipCountries = (array)$wgWikiLovesMonumentsCountryPortlet;
		}

		$countries = self::countries( WikiLovesMonuments::activeEdition, $wgLang->getCode() );
		asort( $countries ); // Sort by local name
		$countries = array( 'int' => wfMsg( 'wlm-international-contest' ),  ) + $countries;

		$wlmSidebar = "			<ul>";
		foreach ( $countries as $countryCode => $name ) {
			if ( in_array( $countryCode, $skipCountries ) ) {
				continue;
			}

			$url = self::getCountryWebsite( $countryCode );

			if ( $url && $name ) {
				$wlmSidebar .= "\n\t\t\t\t" .
					Html::rawElement( 'li',
						array( 'id' => "wlm-country-$countryCode" ),
						Html::element( 'a' , array( 'href' => $url ),
							$name
						)
					);
			}

		}
		$wlmSidebar .= "\n			</ul>\n";

		$bar['wlm-sidebar-portlet'] = $wlmSidebar;
		return true;
	}

	/**
	 * @param $parser Parser
	 * @param $countryCode string
	 * @return string
	 */
	public static function countryWebsite( $parser, $countryCode ) {
		$url = self::getCountryWebsite( strtolower( $countryCode ) );

		if ( $url === false ) {
			return '<strong class="error">' .
				wfMessage( 'wlm-no-url-bad-country', $countryCode )->inLanguage( $parser->getFunctionLang() )->plain() .
				'</strong>';
		}

		return $url;
	}

	/**
	 * Provide the category for the images of this year.
	 * Precondition: $countryCode is the country code of a participating country,
	 * or the special value '*' for all the images from that year.
	 */
	public static function getCountryCategory( $year, $countryCode = '*' ) {
		if ( !class_exists( 'CountryNames' ) ) {
			throw new MWException( 'CLDR extension not loaded' );
		}

		if ( $countryCode == '*' )
			return "Images_from_Wiki_Loves_Monuments_$year";

		$countries = CountryNames::getNames( 'en' );

		if ( !isset( $countries[ strtoupper( $countryCode ) ] ) )
			return false;

		$country = $countries[ strtoupper( $countryCode ) ];

		// There's an article in front of the country name:
		static $theCountries = array( 'cz', 'nl', 'ph', 'us' );

		if ( in_array( $countryCode, $theCountries ) )
			$country = "the_$country";

		return "Images_from_Wiki_Loves_Monuments_{$year}_in_$country";
	}

	/**
	 * Provide the dates when the competition begins and/or ends for each country.
	 *
	 * @param $year int           WLM edition
	 * @param $countryCode mixed  country code for that country, true for an array
	 * of all countries or * for the union of all countries dates.
	 * @param $dates string 'begin' or 'end'
	 * @return mixed   MediaWiki timestamp, array of timestamps or array of arrays of timestamps
	 */
	public static function getCountryDate( $year, $countryCode, $dates = 'both' ) {
		if ( $countryCode === true ) {
			$countryDates = array();

			foreach ( self::countries( $year ) as $c ) {
				$countryDates[$c] = self::getCountryDate( $year, $c, $dates );
			}

			return $countryDates;
		}

		if ( $dates == 'both' ) {
			return array( self::getCountryDate( $year, $countryCode, 'begin' ), self::getCountryDate( $year, $countryCode, 'end' ) );
		}

		if ( $countryCode === '*' ) {
			static $begin, $end = null;
			if  ( is_null( $end ) ) {
				$begin = self::$dates[$year]['default']['from'];
				$end = self::$dates[$year]['default']['to'];
				foreach ( self::$dates[$year] as $entry ) {
					if ( isset( $entry['from'] ) )
						$begin = min( $begin, $entry['from'] );
					if ( isset( $entry['to'] ) )
						$end = max( $end, $entry['to'] );
				}
			}
			if ( $dates == 'begin' )
				return $begin;
			if ( $dates == 'end' )
				return $end;
			return array( $begin, $end );
		}

		switch ( $dates ) {
			case 'begin':
				return isset( self::$dates[$year][$countryCode]['from'] ) ? self::$dates[$year][$countryCode]['from'] : self::$dates[$year]['default']['from'];

			case 'end':
				return isset( self::$dates[$year][$countryCode]['to'] ) ? self::$dates[$year][$countryCode]['to'] : self::$dates[$year]['default']['to'];

			default:
				throw new MWException( 'Bad $dates passed to WikiLovesMonuments::getCountryDate()' );
		}
	}

	/**
	 * Provides parserfunction {{#wlm-is-running: year|countrycode|show if yes|before=show if before|after=show if ended|test=fakedate}}
	 * Only the first two parameters are mandatory.
	 */
	static function wlmIsRunning($parser, $frame, $args) {
		// As it's pre-expanded, we can't pass the year to newChild()
		$year = trim( $frame->expand( array_shift( $args ) ) );

		if ( !isset( self::$countries[(int)$year] ) ) {
			return '<strong class="error">' .
				wfMessage( 'wlm-no-contest-year', $year )->inLanguage( $parser->getFunctionLang() )->plain() .
				'</strong>';
		}

		$year = (int)$year;
		$frame = $frame->newChild( $args );

		$countryCode = $frame->getArgument( 1 );

		if ( $countryCode == false ) {
			return '<strong class="error">' .
				wfMessage( 'wlm-country-not-given' )->inLanguage( $parser->getFunctionLang() )->plain() .
				'</strong>';
		}

		$countryCode = trim( $countryCode );
		if ( ! in_array( $countryCode, self::$countries[$year] ) ) {
			return '<strong class="error">' .
				wfMessage( 'wlm-country-not-participating-year', self::countryName( $countryCode, $parser->getFunctionLang()->getCode(), $countryCode), $year )->inLanguage( $parser->getFunctionLang() )->plain() .
				'</strong>';
		}

		list( $begin, $end ) = self::getCountryDate( $year, $countryCode );

		$testDate = wfTimestamp( TS_MW, $frame->getArgument( 'test' ) );

		if ( $testDate < $begin )
			return $frame->getArgument( 'before' );

		if ( $testDate > $end )
			return $frame->getArgument( 'after' );

		return $frame->getArgument( 2 );
	}

	/**
	 * Converts a country code to the country name
	 * @param $countryCode string Country code
	 * @param $langCode string Target language to convert to
	 * @param $default mixed Value to return if the country code is not found (ie. it wasn't a country code)
	 */
	static function countryName( $countryCode, $langCode, $default = false ) {
		if ( !class_exists( 'CountryNames' ) ) {
			throw new MWException( 'CLDR extension not loaded' );
		}

		$countryCode = strtoupper( $countryCode );
		$countries = CountryNames::getNames( $langCode );

		if ( isset( $countries[ $countryCode ] ) )
			return $countries[ $countryCode ];

		return $default;
	}
}
