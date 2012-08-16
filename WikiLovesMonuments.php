<?php

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'WikiLovesMonuments',
	'author' => 'Platonides',
	'descriptionmsg' => 'wlm-extension-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:WikiLovesMonuments'
 );
  
$wgAutoloadClasses['WikiLovesMonuments'] = dirname( __FILE__ ) . "/WikiLovesMonuments_body.php";
$wgExtensionMessagesFiles['WikiLovesMonuments'] = dirname( __FILE__ ) . "/WikiLovesMonuments.i18n.php";
$wgExtensionMessagesFiles['WikiLovesMonumentsMagic'] = dirname( __FILE__ ) . "/WikiLovesMonuments.i18n.magic.php";

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




function wfWikiLovesMonumentsRegisterParserFunctions( $parser ) {
	if ( class_exists( 'CountryNames' ) ) // Provided by cldr extension
		$parser->setFunctionHook( 'wlm-countries', 'WikiLovesMonuments::countries' );
	$parser->setFunctionHook( 'wlm-country-count', 'WikiLovesMonuments::countryCount' );
	$parser->setFunctionHook( 'wlm-country-website', 'WikiLovesMonuments::countryWebsite' );

	return true;
}

function wfWikiLovesMonumentsInit() {
	global $wgHooks, $wgWikiLovesMonumentsCountryPortlet;

	if ( $wgWikiLovesMonumentsCountryPortlet )
		$wgHooks['SkinBuildSidebar'][] = 'WikiLovesMonuments::onSkinBuildSidebar';
}
