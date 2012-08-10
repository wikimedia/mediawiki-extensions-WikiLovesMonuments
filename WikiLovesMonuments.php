<?php

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'WikiLovesMonuments',
	'author' => 'Platonides',
	'descriptionmsg' => 'wlm-extension-desc',
 	'url' => 'https://www.mediawiki.org/wiki/Extension:Cite/Cite.php'
 );
  
$wgHooks['ParserFirstCallInit'][] = 'WikiLovesMonuments::registerParserFunctions';
$wgAutoloadClasses['WikiLovesMonuments'] = dirname( __FILE__ ) . "/WikiLovesMonuments_body.php";
$wgExtensionMessagesFiles['WikiLovesMonuments'] = dirname( __FILE__ ) . "/WikiLovesMonuments.i18n.php";
