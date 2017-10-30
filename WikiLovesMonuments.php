<?php

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'WikiLovesMonuments',
	'author' => 'Platonides',
	'descriptionmsg' => 'wlm-extension-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:WikiLovesMonuments'
 );

$wgAutoloadClasses['WikiLovesMonuments'] = dirname( __FILE__ ) . "/WikiLovesMonuments_body.php";
$wgMessagesDirs['WikiLovesMonuments'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['WikiLovesMonumentsMagic'] = dirname( __FILE__ ) . "/WikiLovesMonuments.i18n.magic.php";

$wgResourceModules['ext.WikiLovesMonuments.piwik'] = array(
	'scripts' => 'piwik.js',
	'localBasePath' => dirname( __FILE__ ),
	'remoteExtPath' => 'WikiLovesMonuments',
);

$wgHooks['ParserFirstCallInit'][] = 'wfWikiLovesMonumentsRegisterParserFunctions';
$wgExtensionFunctions[] = 'wfWikiLovesMonumentsInit';


/**
 * Show the sidebar portlet with the countries participating in the active
 * WLM edition.
 * Values:
 *  - false -> Do not show the portlet.
 *  - true -> Show all the portlet with all the countries.
 *  - Country code or array of country codes -> Show all the countries but these (presumable because those would be self-links)
 */
$wgWikiLovesMonumentsCountryPortlet = false;


/**
 * Set to the piwik id of your country to automatically
 * track your pages at http://stats.wikilovesmonuments.org/
 */
$wgWikiLovesMonumentsCentralisedStatsId = false;


/**
 * Support adding some custom javascript to Piwik.
 * For instance, "piwikTracker.setDoNotTrack(true);" to not
 * track visits if the user has DNT header set.
 */
$wgPiwikCustomJS = "";

/**
 * @param $parser Parser
 * @return bool
 */
function wfWikiLovesMonumentsRegisterParserFunctions( $parser ) {
	if ( class_exists( 'CountryNames' ) ) {// Provided by cldr extension
		$parser->setFunctionHook( 'wlm-countries', 'WikiLovesMonuments::countriesParserFunction' );
	}
	$parser->setFunctionHook( 'wlm-country-count', 'WikiLovesMonuments::countryCount' );
	$parser->setFunctionHook( 'wlm-country-website', 'WikiLovesMonuments::countryWebsite' );
	$parser->setFunctionHook( 'wlm-is-running', 'WikiLovesMonuments::wlmIsRunning', Parser::SFH_OBJECT_ARGS );

	return true;
}

function wfWikiLovesMonumentsInit() {
	global $wgHooks, $wgWikiLovesMonumentsCountryPortlet, $wgPiwikCustomJS;
	global $wgOut, $wgWikiLovesMonumentsCentralisedStatsId;

	if ( $wgWikiLovesMonumentsCountryPortlet ) {
		$wgHooks['SkinBuildSidebar'][] = 'WikiLovesMonuments::onSkinBuildSidebar';
	}

	if ( $wgWikiLovesMonumentsCentralisedStatsId !== false ) {
		$piwikServer = '//stats.wikilovesmonuments.org';

		$wgOut->addModules( 'ext.WikiLovesMonuments.piwik' );
		$wgOut->addScript( Html::inlineScript( <<<JS
if(window.mw){ mw.loader.using( 'ext.WikiLovesMonuments.piwik', function() {
	try {
		var piwikTracker = window.Piwik.getTracker('$piwikServer/piwik.php', $wgWikiLovesMonumentsCentralisedStatsId);
		$wgPiwikCustomJS
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
	} catch( err ) {}
} ); }

JS
		) . "<noscript>" .
				"<p><img src=\"$piwikServer/piwik.php?idsite=$wgWikiLovesMonumentsCentralisedStatsId\" style=\"border: 0\" alt=\"\" /></p>" .
			"</noscript>"
		);
	}
}
