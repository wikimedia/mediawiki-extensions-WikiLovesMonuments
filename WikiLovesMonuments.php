<?php

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'WikiLovesMonuments',
	'author' => 'Platonides',
	'descriptionmsg' => 'wlm-extension-desc',
 	'url' => 'https://www.mediawiki.org/wiki/Extension:Cite/Cite.php'
 );
  
$wgAutoloadClasses['WikiLovesMonuments'] = dirname( __FILE__ ) . "/WikiLovesMonuments_body.php";
$wgExtensionMessagesFiles['WikiLovesMonuments'] = dirname( __FILE__ ) . "/WikiLovesMonuments.i18n.php";
$wgExtensionMessagesFiles['WikiLovesMonumentsMagic'] = dirname( __FILE__ ) . "/WikiLovesMonuments.i18n.magic.php";

$wgHooks['ParserFirstCallInit'][] = 'WikiLovesMonuments::registerParserFunctions';
$wgHooks['SkinBuildSidebar'][] = 'WikiLovesMonuments::onSkinBuildSidebar';

/**
 * Show the sidebar portlet with the countries participating in the active
 * WLM edition.
 * Values:
 *  - false -> Do not show the portlet.
 *  - true -> Show all the portlet with all the countries.
 *  - Country code or array of country codes -> Show all the countries but these (presumable because those would be self-links)
 */
$wgWikiLovesMonumentsCountryPortlet = false;
