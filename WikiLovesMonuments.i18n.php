<?php

/**
 * Internationalization file for the 'WikiLovesMonuments' extension.
 *
 * This file contains translations for terms related to WLM.
 */

$messages = array();

$messages['en'] = array(
	'wlm-extension-desc' => 'Adds information and messages related to the Wiki Loves Monuments photographic contest',
	'wlm-no-contest-year' => 'There was no Wiki Loves Monument contest in $1.',
	'wlm-no-url-bad-country' => "We couldn't obtain the website for the local competition. $1 is not a valid country code.",
	'wlm-country-not-given' => "You need to provide a country code.",
	"wlm-country-not-participating-year" => "«$1» not participating in Wiki Loves Monuments $2",

	'wlm-sidebar-portlet' => 'Other countries',
	'wlm-international-contest' => 'International',

	'wlm-text-contact' => 'Contact',
	'wlm-text-contest' => 'Contest',
	'wlm-text-donate' => 'Donate',
	'wlm-text-faq' => 'FAQ',
	'wlm-text-jury' => 'Jury',
	'wlm-text-monuments' => 'Monuments',
	'wlm-text-news' => 'News',
	'wlm-text-participate' => 'Participate!',
	'wlm-text-prizes' => 'Prizes',
	'wlm-text-rules' => 'Rules',
	'wlm-text-sponsors' => 'Sponsors',
	'wlm-text-uploading' => 'Uploading',
);

/** Message documentation (Message documentation)
 * @author Platonides
 * @author Siebrand
 */
$messages['qqq'] = array(
	'wlm-extension-desc' => '{{desc}}',
	'wlm-no-contest-year' => 'Error message given when WLM parser functions get passed a parameter which is not a year in which there was (or is planned) a WLM edition. Parameters:
* $1 is a year.',
	'wlm-no-url-bad-country' => 'Error message given when {{#wlm-country-website: }} is given something that is not a country code.',
	'wlm-country-not-given' => 'Error message given when {{#wlm-is-running: }} is not given a country code.',
	'wlm-country-not-participating-year' => "Error message given when the country code given does not match the WLM edition.
It is recommended to use a neutral verb time when possible. Note that this could happen for:
* ''country'' didn't participate in Wiki Loves Monuments last
* ''country'' is not participating in Wiki Loves Monuments this year
* ''country'' is not scheduled to participate in Wiki Loves Monuments next year

However, you don't need to prepare for really off year values, since {{msg|wlm-no-contest-year}} will fire before this if there's no data about such competition.

Parameters:
* $1 is the country
* $2 is the year",
	'wlm-sidebar-portlet' => 'Title of the portlet listing on the sidebar the websites for the rest of countries.',
	'wlm-international-contest' => 'Naming of the link to the website of the international contest, shown in the portlet.',
	'wlm-text-contact' => 'Caption for a page about contacting the (local) organization.',
	'wlm-text-contest' => 'Contest, competition. What Wiki Loves Monuments is. Suitable as caption for a page talking about Wiki Loves Monuments.',
	'wlm-text-donate' => 'Caption for a page about donating to the chapter.',
	'wlm-text-faq' => 'Text suitable as caption for a link leading to a list of Questions and answers (Frequently Asked Questions) about the Wiki Loves Monuments contest',
	'wlm-text-jury' => 'Jury, people who will decide which photos are the best. Suitable as caption for a page talking about the local jury, presenting it, explaining how the best photos are selected or what kind of people will decide.',
	'wlm-text-monuments' => 'Monuments, what you photograph in Wiki Loves Monuments. Suitable as caption for a page talking about which monuments are eligible, or with the monument lists.',
	'wlm-text-news' => 'News, current events. Suitable as a caption for a page/blog giving the latest information about the contest.',
	'wlm-text-participate' => 'Text moving the user to participate in the Wiki Loves Monuments contest, preferably some kind of imperative. Suitable as caption for a link to a page explaining how to participate in a few simple steps.',
	'wlm-text-prizes' => 'Prizes, awards, what you will give to the authors of the best photos. Suitable for leading to a page describing them.',
	'wlm-text-rules' => "Rules, the thing that people must abide by for participating in Wiki Loves Monuments. Caption suitable for a page with a boring list of things that most people won't actually need.",
	'wlm-text-sponsors' => 'Caption suitable for leading to a page about the sponsors/partners of the Wiki Loves Monuments contest.',
	'wlm-text-uploading' => 'Text suitable for leading to a page with instructions / explaining how to upload the photos.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'wlm-extension-desc' => 'Voeg inligting en boodskappe oor Wiki Lief Monumente se fotowedstryd by',
	'wlm-no-contest-year' => "Daar was nie 'n Wiki Lief Monumente-wedstryd in $1 nie.",
	'wlm-no-url-bad-country' => "Ons kon nie die plaaslike kompetisie se webtuiste vind nie. $1 is nie 'n geldige landkode nie.",
	'wlm-sidebar-portlet' => 'Ander lande',
	'wlm-international-contest' => 'Internasionaal',
	'wlm-text-contact' => 'Kontak',
	'wlm-text-contest' => 'Wedstryd',
	'wlm-text-donate' => 'Skenk',
	'wlm-text-faq' => 'Algemene vrae',
	'wlm-text-jury' => 'Jurie',
	'wlm-text-monuments' => 'Monumente',
	'wlm-text-news' => 'Nuus',
	'wlm-text-participate' => 'Neem deel!',
	'wlm-text-prizes' => 'Pryse',
	'wlm-text-rules' => 'Reëls',
	'wlm-text-sponsors' => 'Borge',
	'wlm-text-uploading' => 'Laai op',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'wlm-sidebar-portlet' => 'دول أخرى',
	'wlm-international-contest' => 'دولي',
	'wlm-text-contact' => 'اتصال',
	'wlm-text-contest' => 'مسابقة',
	'wlm-text-donate' => 'تبرع',
	'wlm-text-faq' => 'الأسئلة المتكررة',
	'wlm-text-jury' => 'محلف',
	'wlm-text-monuments' => 'آثار',
	'wlm-text-news' => 'أخبار',
	'wlm-text-participate' => 'مشاركة!',
	'wlm-text-prizes' => 'الجوائز',
	'wlm-text-rules' => 'القواعد',
	'wlm-text-sponsors' => 'الرعاة',
	'wlm-text-uploading' => 'يرفع',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'wlm-extension-desc' => 'Amiesta información y mensaxes rellacionaos col concursu fotográficu Wiki Loves Monuments',
	'wlm-no-contest-year' => 'Nun hubo concursu Wiki Loves Monument en $1.',
	'wlm-no-url-bad-country' => 'Nun pudimos alcontrar el sitiu web de la competición llocal. $1 nun ye un códigu de país válidu.',
	'wlm-sidebar-portlet' => 'Otros paises',
	'wlm-international-contest' => 'Internacional',
	'wlm-text-contact' => 'Contactu',
	'wlm-text-contest' => 'Concursu',
	'wlm-text-donate' => 'Donativos',
	'wlm-text-faq' => 'EMF (entrugues más frecuentes)',
	'wlm-text-jury' => 'Xuráu',
	'wlm-text-monuments' => 'Monumentos',
	'wlm-text-news' => 'Noticies',
	'wlm-text-participate' => '¡Participa!',
	'wlm-text-prizes' => 'Premios',
	'wlm-text-rules' => 'Regles',
	'wlm-text-sponsors' => 'Patrocinadores',
	'wlm-text-uploading' => 'Cargar fotos',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'wlm-extension-desc' => 'Дадае інфармацыю і паведамленьні, датычныя конкурсу «Вікі любіць славутасьці»',
	'wlm-no-contest-year' => 'Конкурс «Вікі любіць славутасьці» ў $1 годзе не праводзіўся.',
	'wlm-no-url-bad-country' => 'У нас няма адрасу вэб-сайта мясцовага конкурсу. $1 — няслушны код краіны.',
	'wlm-country-not-given' => 'Неабходна пазначыць код краіны.',
	'wlm-country-not-participating-year' => '$1 ня ўзяла ўдзелу ў «Вікі любіць славутасьці $2»',
	'wlm-sidebar-portlet' => 'Іншыя краіны',
	'wlm-international-contest' => 'Міжнародны',
	'wlm-text-contact' => 'Кантакты',
	'wlm-text-contest' => 'Конкурс',
	'wlm-text-donate' => 'Ахвяраваньні',
	'wlm-text-faq' => 'Пытаньні і адказы',
	'wlm-text-jury' => 'Журы',
	'wlm-text-monuments' => 'Славутасьці',
	'wlm-text-news' => 'Навіны',
	'wlm-text-participate' => 'Удзельнічаць!',
	'wlm-text-prizes' => 'Прызы',
	'wlm-text-rules' => 'Правілы',
	'wlm-text-sponsors' => 'Спонсары',
	'wlm-text-uploading' => 'Загрузка здымкаў',
);

/** Catalan (català)
 * @author Elisardojm
 * @author Platonides
 * @author Toniher
 */
$messages['ca'] = array(
	'wlm-sidebar-portlet' => 'Preguntes freqüents',
	'wlm-international-contest' => 'Internacional',
	'wlm-text-contact' => 'Contacte',
	'wlm-text-contest' => 'Concurs',
	'wlm-text-donate' => 'Donar',
	'wlm-text-faq' => 'Preguntes freqüents',
	'wlm-text-jury' => 'Jurat',
	'wlm-text-monuments' => 'Monuments',
	'wlm-text-news' => 'Novetats',
	'wlm-text-participate' => 'Participa!',
	'wlm-text-prizes' => 'Premis',
	'wlm-text-rules' => 'Reglament',
	'wlm-text-sponsors' => 'Patrocinadors',
	'wlm-text-uploading' => "S'està carregant",
);

/** Czech (česky)
 * @author Chmee2
 * @author Limojoe
 * @author Mormegil
 */
$messages['cs'] = array(
	'wlm-extension-desc' => 'Přidává informace a zprávy související s fotografickou soutěží Wiki miluje památky',
	'wlm-no-contest-year' => 'V roce $1 soutěž Wiki miluje památky neprobíhala.',
	'wlm-no-url-bad-country' => 'Nepodařilo se najít soutěžní web pro danou lokalitu. $1 není platný kód země.',
	'wlm-sidebar-portlet' => 'Ostatní země',
	'wlm-international-contest' => 'Mezinárodní',
	'wlm-text-contact' => 'Kontakt',
	'wlm-text-contest' => 'Soutěž',
	'wlm-text-donate' => 'Podpořte nás',
	'wlm-text-faq' => 'Často kladené otázky',
	'wlm-text-jury' => 'Porota',
	'wlm-text-monuments' => 'Památky',
	'wlm-text-news' => 'Novinky',
	'wlm-text-participate' => 'Zapojte se!',
	'wlm-text-prizes' => 'Ceny',
	'wlm-text-rules' => 'Pravidla',
	'wlm-text-sponsors' => 'Sponzoři',
	'wlm-text-uploading' => 'Načítání',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'wlm-extension-desc' => 'Stellt Informationen und Nachrichten für den Fotowettbewerb „Wiki Loves Monuments“ bereit',
	'wlm-no-contest-year' => 'Im Jahr $1 gab es keinen Fotowettbewerb „Wiki Loves Monuments“.',
	'wlm-no-url-bad-country' => 'Wir konnten die Website für den lokalen Wettbewerb nicht abrufen. $1 ist kein gültiger Ländercode.',
	'wlm-country-not-given' => 'Du musst einen Ländercode angeben.',
	'wlm-country-not-participating-year' => '„$1“ nimmt nicht am Fotowettbewerb „Wiki Loves Monuments“ des Jahres $2 teil.',
	'wlm-sidebar-portlet' => 'Andere Staaten',
	'wlm-international-contest' => 'International',
	'wlm-text-contact' => 'Kontakt',
	'wlm-text-contest' => 'Wettbewerb',
	'wlm-text-donate' => 'Spenden',
	'wlm-text-faq' => 'Häufig gestellte Fragen',
	'wlm-text-jury' => 'Jury',
	'wlm-text-monuments' => 'Denkmäler',
	'wlm-text-news' => 'Neuigkeiten',
	'wlm-text-participate' => 'Mach mit!',
	'wlm-text-prizes' => 'Preise',
	'wlm-text-rules' => 'Regeln',
	'wlm-text-sponsors' => 'Sponsoren',
	'wlm-text-uploading' => 'Dateien hochladen',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'wlm-text-participate' => 'Machen Sie mit!',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'wlm-extension-desc' => 'Staja informacije a powěsći za fotowuběźowanje Wiki Loves Monuments k dispoziciji',
	'wlm-no-contest-year' => 'W lěśe $1 njejo žedno wuběźowanje Wiki Loves Monuments było.',
	'wlm-no-url-bad-country' => 'Njejsmy mógli websedło za lokalne wuběźowanje wótwołaś. $1 njejo płaśiwy krajny kod.',
	'wlm-country-not-given' => 'Musyš krajny kod pódaś.',
	'wlm-country-not-participating-year' => '"$1" njewobźělujo se na Wiki Loves Monuments $2',
	'wlm-sidebar-portlet' => 'Druge kraje',
	'wlm-international-contest' => 'Mjazynarodny',
	'wlm-text-contact' => 'Kontakt',
	'wlm-text-contest' => 'Wuběźowanje',
	'wlm-text-donate' => 'Pósćiś',
	'wlm-text-faq' => 'Ceste pšašanja',
	'wlm-text-jury' => 'Jury',
	'wlm-text-monuments' => 'Pomniki',
	'wlm-text-news' => 'Nowosći',
	'wlm-text-participate' => 'Wobźěl se!',
	'wlm-text-prizes' => 'Myta',
	'wlm-text-rules' => 'Pšawidła',
	'wlm-text-sponsors' => 'Sponsory',
	'wlm-text-uploading' => 'Nagraśe',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Platonides
 */
$messages['es'] = array(
	'wlm-extension-desc' => 'Añade información y traducciones sobre el concurso fotográfico Wiki Loves Monuments',
	'wlm-no-contest-year' => 'No hubo un concurso de Wiki Loves Monument en $1.',
	'wlm-no-url-bad-country' => 'No se pudo encontrar la web del concurso local. No hay un país con código $1.',
	'wlm-country-not-given' => 'Debes proporcionar un código de país.',
	'wlm-country-not-participating-year' => '«$1» no participa en Wiki Loves Monuments $2',
	'wlm-sidebar-portlet' => 'Otros países',
	'wlm-international-contest' => 'Internacional',
	'wlm-text-contact' => 'Contacto',
	'wlm-text-contest' => 'Concurso',
	'wlm-text-donate' => 'Donar',
	'wlm-text-faq' => 'FAQ',
	'wlm-text-jury' => 'Jurado',
	'wlm-text-monuments' => 'Monumentos',
	'wlm-text-news' => 'Novedades',
	'wlm-text-participate' => '¡Participa!',
	'wlm-text-prizes' => 'Premios',
	'wlm-text-rules' => 'Reglamento',
	'wlm-text-sponsors' => 'Patrocinadores',
	'wlm-text-uploading' => 'Subir fotos',
);

/** Estonian (eesti)
 * @author Pikne
 */
$messages['et'] = array(
	'wlm-extension-desc' => 'Lisab fotovõistlusega Wiki Loves Monuments seotud teabe ja sõnumid.',
	'wlm-no-contest-year' => 'Aastal $1 polnud võistlust Wiki Loves Monuments.',
	'wlm-no-url-bad-country' => 'Kohaliku võistluse veebilehte ei õnnestunud hankida. $1 pole kehtiv maakood.',
	'wlm-sidebar-portlet' => 'Teised maad',
	'wlm-international-contest' => 'Rahvusvaheline',
	'wlm-text-contact' => 'Kontakt',
	'wlm-text-contest' => 'Võistlus',
	'wlm-text-donate' => 'Annetamine',
	'wlm-text-faq' => 'KKK',
	'wlm-text-jury' => 'Žürii',
	'wlm-text-monuments' => 'Mälestised',
	'wlm-text-news' => 'Uudised',
	'wlm-text-participate' => 'Võta osa!',
	'wlm-text-prizes' => 'Auhinnad',
	'wlm-text-rules' => 'Reeglid',
	'wlm-text-sponsors' => 'Sponsorid',
	'wlm-text-uploading' => 'Üleslaadimine',
);

/** Basque (euskara)
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'wlm-text-contact' => 'Kontaktatu',
	'wlm-text-donate' => 'Dohaintza egin',
	'wlm-text-news' => 'Albisteak',
);

/** French (français)
 * @author Erkethan
 * @author Tititou36
 */
$messages['fr'] = array(
	'wlm-extension-desc' => 'Ajoute des informations et messages liés au concours photographique Wiki Loves Monuments',
	'wlm-no-contest-year' => "Il n'y n'avait aucun concours Wiki Loves Monument en $1.",
	'wlm-no-url-bad-country' => "Nous ne pouvons pas afficher le site Web.  $1 n'est pas un code de pays valide.",
	'wlm-country-not-given' => 'Vous devez fournir un code de pays.',
	'wlm-country-not-participating-year' => '« $1 » ne participe pas à Wiki Loves Monuments $2',
	'wlm-sidebar-portlet' => 'Autres pays',
	'wlm-international-contest' => 'International',
	'wlm-text-contact' => 'Nous contacter',
	'wlm-text-contest' => 'Concours',
	'wlm-text-donate' => 'Faire un don',
	'wlm-text-faq' => 'FAQ',
	'wlm-text-jury' => 'Jury',
	'wlm-text-monuments' => 'Monuments',
	'wlm-text-news' => 'Actualités',
	'wlm-text-participate' => 'Participez !',
	'wlm-text-prizes' => 'Prix',
	'wlm-text-rules' => 'Règles',
	'wlm-text-sponsors' => 'Sponsors',
	'wlm-text-uploading' => 'Téléversement',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'wlm-sidebar-portlet' => 'Ôtros payis',
	'wlm-international-contest' => 'Entèrnacionâl',
	'wlm-text-contact' => 'Contacte',
	'wlm-text-contest' => 'Concors',
	'wlm-text-donate' => 'Balyér',
	'wlm-text-faq' => 'Quèstions sovent posâyes',
	'wlm-text-jury' => 'Juri',
	'wlm-text-monuments' => 'Monuments',
	'wlm-text-news' => 'Novèles',
	'wlm-text-participate' => 'Participâd !',
	'wlm-text-prizes' => 'Prix',
	'wlm-text-rules' => 'Règlles',
	'wlm-text-sponsors' => 'Celos que pregnont en man',
	'wlm-text-uploading' => 'Tèlèchargement',
);

/** Galician (galego)
 * @author Elisardojm
 * @author Platonides
 * @author Toliño
 */
$messages['gl'] = array(
	'wlm-extension-desc' => 'Engade información e mensaxes en relación ao concurso fotográfico Wiki Loves Monuments',
	'wlm-no-contest-year' => 'Non houbo concurso de Wiki Loves Monuments ningún no ano $1.',
	'wlm-no-url-bad-country' => 'Non puidemos obter a páxina web da competición local. "$1" non é un código de país válido.',
	'wlm-country-not-given' => 'Cómpre achegar un código de país.',
	'wlm-country-not-participating-year' => '"$1" non participou no Wiki Loves Monuments do ano $2',
	'wlm-sidebar-portlet' => 'Outros países',
	'wlm-international-contest' => 'Internacional',
	'wlm-text-contact' => 'Contacto',
	'wlm-text-contest' => 'Concurso',
	'wlm-text-donate' => 'Doar',
	'wlm-text-faq' => 'Preguntas frecuentes',
	'wlm-text-jury' => 'Xurado',
	'wlm-text-monuments' => 'Monumentos',
	'wlm-text-news' => 'Novidades',
	'wlm-text-participate' => 'Participa!',
	'wlm-text-prizes' => 'Premios',
	'wlm-text-rules' => 'Regulamento',
	'wlm-text-sponsors' => 'Patrocinadores',
	'wlm-text-uploading' => 'Cargar fotos',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author ערן
 */
$messages['he'] = array(
	'wlm-extension-desc' => 'הוספת מידע והודעות בנושא תחרות ויקי אוהבת אתרי מורשת',
	'wlm-no-contest-year' => 'אין תחרות ויקי אוהבת אתרי מורשת ב־$1',
	'wlm-no-url-bad-country' => 'לא הצלחנו להשיג את האתר של התחרות המקומית. $1 הוא לא קוד מדינה תקין.',
	'wlm-country-not-given' => 'יש לציין קוד מדיונה.',
	'wlm-country-not-participating-year' => '$1 אינה משתתפת בתחרות ויקי אוהבת אתרי מורשת $2',
	'wlm-sidebar-portlet' => 'מדינות אחרות',
	'wlm-international-contest' => 'בין־לאומית',
	'wlm-text-contact' => 'יצירת קשר',
	'wlm-text-contest' => 'תחרות',
	'wlm-text-donate' => 'תרומה',
	'wlm-text-faq' => 'שאלות נפוצות',
	'wlm-text-jury' => 'חבר השופטים',
	'wlm-text-monuments' => 'אתרי מורשת',
	'wlm-text-news' => 'חדשות',
	'wlm-text-participate' => 'להשתתף!',
	'wlm-text-prizes' => 'פרסים',
	'wlm-text-rules' => 'חוקים',
	'wlm-text-sponsors' => 'נותני חסות',
	'wlm-text-uploading' => 'העלאה',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'wlm-extension-desc' => 'Staja informacije a powěsće za fotowubědźowanje Wiki Loves Monuments k dispoziciji',
	'wlm-no-contest-year' => 'W lěće $1 njeje žane wubědźowanje Wiki Loves Monuments było.',
	'wlm-no-url-bad-country' => 'Njemóžachmy websydło za lokalne wubědźowanje wotwołać. $1 płaćiwy krajny kod njeje.',
	'wlm-country-not-given' => 'Dyrbiš krajny kod podać.',
	'wlm-country-not-participating-year' => '"$1" njewobdźěla so na Wiki Loves Monuments $2',
	'wlm-sidebar-portlet' => 'Druhe kraje',
	'wlm-international-contest' => 'Mjezynarodny',
	'wlm-text-contact' => 'Kontakt',
	'wlm-text-contest' => 'Wubědźowanje',
	'wlm-text-donate' => 'Darić',
	'wlm-text-faq' => 'Huste prašenja',
	'wlm-text-jury' => 'Jury',
	'wlm-text-monuments' => 'Pomniki',
	'wlm-text-news' => 'Nowinki',
	'wlm-text-participate' => 'Wobdźěl so!',
	'wlm-text-prizes' => 'Myta',
	'wlm-text-rules' => 'Prawidła',
	'wlm-text-sponsors' => 'Sponsorojo',
	'wlm-text-uploading' => 'Nahraće',
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 * @author F. Cosoleto
 */
$messages['it'] = array(
	'wlm-extension-desc' => 'Aggiunge informazioni e messaggi riguardanti il concorso fotografico Wiki Loves Monuments',
	'wlm-no-contest-year' => "Non c'è stato nessun concorso di Wiki Loves Monuments nel $1.",
	'wlm-no-url-bad-country' => 'Non è stato trovare il sito web per la competizione locale, $1 non è un valido codice nazionale.',
	'wlm-country-not-given' => 'Devi fornire il codice di un paese.',
	'wlm-country-not-participating-year' => '«$1» non partecipa a Wiki Loves Monuments $2',
	'wlm-sidebar-portlet' => 'Altri paesi',
	'wlm-international-contest' => 'Internazionale',
	'wlm-text-contact' => 'Contatti',
	'wlm-text-contest' => 'Concorso',
	'wlm-text-donate' => 'Fai una donazione',
	'wlm-text-faq' => 'FAQ',
	'wlm-text-jury' => 'Giuria',
	'wlm-text-monuments' => 'Monumenti',
	'wlm-text-news' => 'Notizie',
	'wlm-text-participate' => 'Partecipa!',
	'wlm-text-prizes' => 'Premi',
	'wlm-text-rules' => 'Regole',
	'wlm-text-sponsors' => 'Sponsor',
	'wlm-text-uploading' => 'Carica',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'wlm-extension-desc' => 'ウィキラブモニュメント写真コンテスト関連の情報とテンプレートを追加する',
	'wlm-no-contest-year' => '$1 年は、ウィキラブモニュメントのコンテストはありません。',
	'wlm-country-not-given' => '国コードを入力する必要があります。',
	'wlm-country-not-participating-year' => '「$1」はウィキラブモニュメント $2 に参加していません',
	'wlm-sidebar-portlet' => 'その他の国',
	'wlm-text-contact' => '連絡先',
	'wlm-text-contest' => 'コンテスト',
	'wlm-text-donate' => '寄付',
	'wlm-text-faq' => 'よくある質問と回答',
	'wlm-text-monuments' => 'モニュメント',
	'wlm-text-news' => 'ニュース',
	'wlm-text-participate' => '参加してください!',
	'wlm-text-rules' => 'ルール',
	'wlm-text-sponsors' => 'スポンサー',
	'wlm-text-uploading' => 'アップロード中',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'wlm-sidebar-portlet' => 'სხვა ქვეყნები',
	'wlm-international-contest' => 'საერთაშორისო',
	'wlm-text-contact' => 'კონტაქტი',
	'wlm-text-contest' => 'კონკურსი',
	'wlm-text-donate' => 'შეწირულობები',
	'wlm-text-faq' => 'ხშირი შეკითხვები',
	'wlm-text-jury' => 'ჟიური',
	'wlm-text-monuments' => 'მონუმენტი',
	'wlm-text-news' => 'სიახლეები',
	'wlm-text-participate' => 'მონაწილეობა!',
	'wlm-text-prizes' => 'პრიზები',
	'wlm-text-rules' => 'წესები',
	'wlm-text-sponsors' => 'სპონსორები',
	'wlm-text-uploading' => 'ატვირთვა',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'wlm-extension-desc' => '위키 기념물 사랑 사진 경연 대회와 관련된 정보 및 메시지 추가',
	'wlm-no-contest-year' => '$1년에 위키 기념물 사랑 경연 대회가 없습니다.',
	'wlm-no-url-bad-country' => '우리는 현지 경쟁의 웹사이트를 얻을 수 없습니다. $1는 올바른 국가 코드가 아닙니다.',
	'wlm-country-not-given' => '국가 코드를 제공해야 합니다.',
	'wlm-country-not-participating-year' => '«$1» 국가는 $2년 위키 기념물 사랑에 참여하지 않습니다',
	'wlm-sidebar-portlet' => '다른 국가',
	'wlm-international-contest' => '국제',
	'wlm-text-contact' => '연락하기',
	'wlm-text-contest' => '대회',
	'wlm-text-donate' => '기부',
	'wlm-text-faq' => '자주 묻는 질문',
	'wlm-text-jury' => '배심원',
	'wlm-text-monuments' => '기념물',
	'wlm-text-news' => '뉴스',
	'wlm-text-participate' => '참여하세요!',
	'wlm-text-prizes' => '상',
	'wlm-text-rules' => '규칙',
	'wlm-text-sponsors' => '스폰서',
	'wlm-text-uploading' => '올리는 중',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'wlm-extension-desc' => 'Brängk Aanjaabe un Nohreeschte för dä Fottowätbewärb „Wiki Loves Monuments“ en et Wiki.',
	'wlm-no-contest-year' => 'Em Johr $1 johv_et keine Fottowätbewärb „Wiki Loves Monuments“',
	'wlm-no-url-bad-country' => 'Mer kunnte kein Wäbßait för dä Wätbewärb em Land fenge, weil „$1“ kein jöltesch Köözel för e Land es.',
	'wlm-country-not-given' => 'Do moß e Köözel för e Land aanjävve.',
	'wlm-country-not-participating-year' => '$1 määt em Johr $2 nit met beim Fottowätbewärb „Wiki Loves Monuments“',
	'wlm-sidebar-portlet' => 'Ander Länder',
	'wlm-international-contest' => 'Engernazjonahl',
	'wlm-text-contact' => 'Kumtak',
	'wlm-text-contest' => 'Wätbewärb',
	'wlm-text-donate' => 'Don jät en der Klengelbüggel',
	'wlm-text-faq' => 'Öff jeschtallte Froore',
	'wlm-text-jury' => 'Scheedsjereesch',
	'wlm-text-monuments' => 'Dängkmöhler',
	'wlm-text-news' => 'Neujeschkeite',
	'wlm-text-participate' => 'Metmaache!',
	'wlm-text-prizes' => 'Priise',
	'wlm-text-rules' => 'Rääjelle',
	'wlm-text-sponsors' => 'Schponsere',
	'wlm-text-uploading' => 'Aam Huhlaade',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'wlm-extension-desc' => 'Setzt Informatiounen a Message fir de Wiki Loves Monuments Foto-Concours derbäi',
	'wlm-no-contest-year' => 'Et gouf kee Wiki Loves Monuments Concours am Joer $1.',
	'wlm-no-url-bad-country' => "D'Internetsäit fir de lokale Concours konnt net fonnt ginn. $1 ass kee valabele Lännercode.",
	'wlm-country-not-given' => 'Dir musst e Lännercode uginn.',
	'wlm-country-not-participating-year' => '"$1" mécht net bäi Wiki Loves Monuments $2 mat',
	'wlm-sidebar-portlet' => 'Aner Länner:',
	'wlm-international-contest' => 'International',
	'wlm-text-contact' => 'Kontakt',
	'wlm-text-contest' => 'Concours',
	'wlm-text-donate' => 'Maacht en Don',
	'wlm-text-faq' => 'FAQ',
	'wlm-text-jury' => 'Jury',
	'wlm-text-monuments' => 'Monumenter',
	'wlm-text-news' => 'Neiegkeeten',
	'wlm-text-participate' => 'Maacht mat!',
	'wlm-text-prizes' => 'Präisser',
	'wlm-text-rules' => 'Regelen',
	'wlm-text-sponsors' => 'Sponsoren',
	'wlm-text-uploading' => 'Eroplueden',
);

/** Lazuri (Lazuri)
 * @author Erdemaslancan
 */
$messages['lzz'] = array(
	'wlm-text-news' => 'Ambari',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'wlm-extension-desc' => 'Додава информации и пораки во врска со фотоконкурсот „Вики ги сака спомениците“',
	'wlm-no-contest-year' => 'Во $1 г. не се одржа конкурс.',
	'wlm-no-url-bad-country' => 'Не можев да го добијам мрежното место за локалниот конкурс. $1 не претставува важечки код.',
	'wlm-country-not-given' => 'Ќе треба да укажете код за земја.',
	'wlm-country-not-participating-year' => '«$1» не учествува на „Вики ги сака спомениците $2“',
	'wlm-sidebar-portlet' => 'Други земји',
	'wlm-international-contest' => 'Меѓународен',
	'wlm-text-contact' => 'Контакт',
	'wlm-text-contest' => 'Конкурс',
	'wlm-text-donate' => 'Дарување',
	'wlm-text-faq' => 'ЧПП',
	'wlm-text-jury' => 'Жири',
	'wlm-text-monuments' => 'Споменици',
	'wlm-text-news' => 'Новости',
	'wlm-text-participate' => 'Земете учество!',
	'wlm-text-prizes' => 'Награди',
	'wlm-text-rules' => 'Правила',
	'wlm-text-sponsors' => 'Спонзори',
	'wlm-text-uploading' => 'Подигање',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'wlm-extension-desc' => 'Menambahkan maklumat dan pesanan yang berkaitan dengan peraduan gambar Wiki Loves Monuments',
	'wlm-no-contest-year' => 'Tiada peraduan Wiki Loves Monuments pada tahun $1.',
	'wlm-no-url-bad-country' => 'Kami tidak dapat memperoleh tapak web bagi peraduan setempat kerana $1 bukan kod negara yang sah.',
	'wlm-country-not-given' => 'Kod negara diperlukan.',
	'wlm-country-not-participating-year' => '$1 tidak menyertai Wiki Loves Monuments $2',
	'wlm-sidebar-portlet' => 'Negara lain',
	'wlm-international-contest' => 'Antarabangsa',
	'wlm-text-contact' => 'Hubungi',
	'wlm-text-contest' => 'Peraduan',
	'wlm-text-donate' => 'Derma',
	'wlm-text-faq' => 'Soalan Lazim',
	'wlm-text-jury' => 'Pengadil',
	'wlm-text-monuments' => 'Monumen',
	'wlm-text-news' => 'Berita',
	'wlm-text-participate' => 'Sertailah!',
	'wlm-text-prizes' => 'Hadiah',
	'wlm-text-rules' => 'Peraturan',
	'wlm-text-sponsors' => 'Penaja',
	'wlm-text-uploading' => 'Muat naik',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'wlm-extension-desc' => 'Voegt gegevens en berichten toe over de fotowedstrijd Wiki Loves Monuments',
	'wlm-no-contest-year' => 'Er was geen Wiki Loves Monumentswedstrijd in $1.',
	'wlm-no-url-bad-country' => 'Het was niet mogelijk de website voor de lokale wedstrijd te vinden. $1 is geen geldige landcode.',
	'wlm-country-not-given' => 'U moet een landcode opgeven.',
	'wlm-country-not-participating-year' => '"$1" neemt niet deel aan Wiki Loves Monuments $2',
	'wlm-sidebar-portlet' => 'Andere landen',
	'wlm-international-contest' => 'Internationaal',
	'wlm-text-contact' => 'Contact',
	'wlm-text-contest' => 'Wedstrijd',
	'wlm-text-donate' => 'Doneren',
	'wlm-text-faq' => 'Veel gestelde vragen',
	'wlm-text-jury' => 'Jury',
	'wlm-text-monuments' => 'Monumenten',
	'wlm-text-news' => 'Nieuws',
	'wlm-text-participate' => 'Meedoen!',
	'wlm-text-prizes' => 'Prijzen',
	'wlm-text-rules' => 'Spelregels',
	'wlm-text-sponsors' => 'Sponsoren',
	'wlm-text-uploading' => 'Uploaden',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Matma Rex
 */
$messages['pl'] = array(
	'wlm-extension-desc' => 'Dodaje informacje i wiadomości dotyczące konkursu fotograficznego Wiki Lubi Zabytki',
	'wlm-no-contest-year' => 'Konkurs Wiki Lubi Zabytki w $1 roku nie odbył się.',
	'wlm-no-url-bad-country' => 'Nie mogliśmy uzyskać otrzymać strony dla lokalnego konkursu. $1 nie jest prawidłowym kodem kraju.',
	'wlm-country-not-given' => 'Musisz podać kod kraju.',
	'wlm-country-not-participating-year' => '«$1» nie uczestniczy w Wiki Lubi Zabytki $2',
	'wlm-sidebar-portlet' => 'Inne kraje',
	'wlm-international-contest' => 'Międzynarodowy',
	'wlm-text-contact' => 'Kontakt',
	'wlm-text-contest' => 'Konkurs',
	'wlm-text-donate' => 'Dotuj',
	'wlm-text-faq' => 'FAQ',
	'wlm-text-jury' => 'Jury',
	'wlm-text-monuments' => 'Zabytki',
	'wlm-text-news' => 'Aktualności',
	'wlm-text-participate' => 'Weź udział!',
	'wlm-text-prizes' => 'Nagrody',
	'wlm-text-rules' => 'Regulamin',
	'wlm-text-sponsors' => 'Sponsorzy',
	'wlm-text-uploading' => 'Przesyłanie',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'wlm-sidebar-portlet' => 'نور هېوادونه',
	'wlm-international-contest' => 'نړيوال',
	'wlm-text-contact' => 'اړيکه',
	'wlm-text-contest' => 'سيالي',
	'wlm-text-donate' => 'بسپنه ورکول',
	'wlm-text-news' => 'خبرونه',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas Blade
 */
$messages['pt-br'] = array(
	'wlm-sidebar-portlet' => 'Outros países',
	'wlm-international-contest' => 'Internacional',
);

/** Russian (русский)
 * @author Kalan
 */
$messages['ru'] = array(
	'wlm-extension-desc' => 'Добавляет информацию и сообщения, связанные с фотоконкурсом «Вики любит памятники»',
	'wlm-no-contest-year' => 'Конкурс «Вики любит памятники» не проводился в $1.',
	'wlm-no-url-bad-country' => 'Не удалось определить сайт соревнования в данной местности. $1 — неверный код страны.',
	'wlm-sidebar-portlet' => 'Другие страны',
	'wlm-international-contest' => 'Международный',
	'wlm-text-contact' => 'Контактные данные',
	'wlm-text-contest' => 'Конкурс',
	'wlm-text-donate' => 'Пожертвования',
	'wlm-text-faq' => 'Вопросы и ответы',
	'wlm-text-jury' => 'Жюри',
	'wlm-text-monuments' => 'Памятники',
	'wlm-text-news' => 'Новости',
	'wlm-text-participate' => 'Участвовать!',
	'wlm-text-prizes' => 'Призы',
	'wlm-text-rules' => 'Правила',
	'wlm-text-sponsors' => 'Спонсоры',
	'wlm-text-uploading' => 'Как загружать фото',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Bebauautu
 */
$messages['sr-ec'] = array(
	'wlm-extension-desc' => 'Додаје информације и поруке везане за Wiki Loves Monuments фото-конкурс',
	'wlm-no-contest-year' => 'Није било Wiki Loves Monuments фото-конкурса у $1. години',
	'wlm-no-url-bad-country' => 'Вебсајт локалног такмичења није пронађен. $1 није валидан државни код.',
	'wlm-country-not-given' => 'Наведите државни код.',
	'wlm-country-not-participating-year' => '«$1» не учествује у Wiki Loves Monuments $2',
	'wlm-sidebar-portlet' => 'Остале земље',
	'wlm-international-contest' => 'Глобално такмичење',
	'wlm-text-contact' => 'Контакт',
	'wlm-text-contest' => 'Конкурс',
	'wlm-text-donate' => 'Донирај',
	'wlm-text-faq' => 'ЧПП',
	'wlm-text-jury' => 'Жири',
	'wlm-text-monuments' => 'Непокретна културна добра',
	'wlm-text-news' => 'Новости',
	'wlm-text-participate' => 'Учествуј!',
	'wlm-text-prizes' => 'Награде',
	'wlm-text-rules' => 'Правила',
	'wlm-text-sponsors' => 'Спонзори',
	'wlm-text-uploading' => 'Слање фотографија',
);

/** Swedish (svenska)
 * @author Ainali
 */
$messages['sv'] = array(
	'wlm-extension-desc' => 'Lägger till information och meddelanden relaterade till Wiki Loves Monuments fototävling',
	'wlm-no-contest-year' => 'Det fanns ingen Wiki Loves Monument tävling för  $1 .',
	'wlm-no-url-bad-country' => 'Vi kunde inte hämta webbplatsen för den lokala tävlingen.  $1  är inte en giltig landskod.',
	'wlm-country-not-given' => 'Du måste ange en landskod.',
	'wlm-country-not-participating-year' => '«$1» deltar inte i Wiki Loves Monuments $2',
	'wlm-sidebar-portlet' => 'Andra länder',
	'wlm-international-contest' => 'Internationell',
	'wlm-text-contact' => 'Kontakt',
	'wlm-text-contest' => 'Tävling',
	'wlm-text-donate' => 'Donera',
	'wlm-text-faq' => 'Vanliga frågor',
	'wlm-text-jury' => 'Jury',
	'wlm-text-monuments' => 'Monument',
	'wlm-text-news' => 'Nyheter',
	'wlm-text-participate' => 'Delta!',
	'wlm-text-prizes' => 'Priser',
	'wlm-text-rules' => 'Regler',
	'wlm-text-sponsors' => 'Sponsorer',
	'wlm-text-uploading' => 'Laddar upp',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'wlm-no-contest-year' => 'Hakukuwa na mashindano ya Wiki Yapenda Minara manmao $1.',
	'wlm-country-not-given' => 'Unahitaji kuwasilisha Kodi ya Nchi.',
	'wlm-country-not-participating-year' => '«$1» haishiriki katika Wiki Yapenda Minara $2',
	'wlm-sidebar-portlet' => 'Nchi zingine',
	'wlm-international-contest' => 'Ya kimataifa',
	'wlm-text-contact' => 'Mawasiliano',
	'wlm-text-contest' => 'Mashindano',
	'wlm-text-donate' => 'Changa',
	'wlm-text-monuments' => 'Minara',
	'wlm-text-news' => 'Habari',
	'wlm-text-participate' => 'Shiriki!',
	'wlm-text-prizes' => 'Zawadi',
	'wlm-text-rules' => 'Sheria',
	'wlm-text-sponsors' => 'Wahisani',
	'wlm-text-uploading' => 'Kupakia',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author Sky Harbor
 * @author TheSleepyhollow02
 */
$messages['tl'] = array(
	'wlm-extension-desc' => 'Nagdaragdag ng kabatiran at mga mensaheng may kaugnayan sa paligsahang panglitrato na Wiki Loves Monuments',
	'wlm-no-contest-year' => 'Walang paligsahang Wiki Loves Monument sa loob ng $1.',
	'wlm-no-url-bad-country' => 'Hindi namin makamtan ang websayt para sa lokal na paligsahan. Ang $1 ay hindi isang katanggap-tanggap na kodigo ng bansa.',
	'wlm-country-not-given' => 'Kailangan mong magbigay ng kodiko ng bansa.',
	'wlm-country-not-participating-year' => 'Ang «$1» ay hindi nakilahok sa Mapagmahal ang Wiki sa mga Bantayog noong $2',
	'wlm-sidebar-portlet' => 'Iba pang mga bansa',
	'wlm-international-contest' => 'Pandaigdig',
	'wlm-text-contact' => 'Kaugnayan',
	'wlm-text-contest' => 'Paligsahan',
	'wlm-text-donate' => 'Magkaloob',
	'wlm-text-faq' => 'Mga karaniwang itinatanong',
	'wlm-text-jury' => 'Inampalan',
	'wlm-text-monuments' => 'Mga bantayog',
	'wlm-text-news' => 'Balita',
	'wlm-text-participate' => 'Makilahok!',
	'wlm-text-prizes' => 'Mga gantimpala',
	'wlm-text-rules' => 'Mga patakaran',
	'wlm-text-sponsors' => 'Mga tagapagtaguyod',
	'wlm-text-uploading' => 'Ikinakargang paitaas',
);

/** Ukrainian (українська)
 * @author A1
 */
$messages['uk'] = array(
	'wlm-extension-desc' => 'Додає інформацію та повідомлення, що пов\'язані з конкурсом "Вікі любить пам\'ятки"',
	'wlm-no-contest-year' => 'Конкурс "Вікі любить пам\'ятки" в $1 не проводився.',
	'wlm-no-url-bad-country' => 'Немає інформації щодо сайту конкурсу країни $1.',
	'wlm-sidebar-portlet' => 'Інші країни',
	'wlm-international-contest' => 'Міжнародний',
	'wlm-text-contact' => 'Контакти',
	'wlm-text-contest' => 'Конкурс',
	'wlm-text-donate' => 'Пожертвувати',
	'wlm-text-faq' => 'ЧаП',
	'wlm-text-jury' => 'Журі',
	'wlm-text-monuments' => "Пам'ятки",
	'wlm-text-news' => 'Новини',
	'wlm-text-participate' => 'Взяти участь!',
	'wlm-text-prizes' => 'Призи',
	'wlm-text-rules' => 'Правила',
	'wlm-text-sponsors' => 'Спонсори',
	'wlm-text-uploading' => 'Завантаження',
);

/** Vietnamese (Tiếng Việt)
 * @author පසිඳු කාවින්ද
 */
$messages['vi'] = array(
	'wlm-text-contact' => 'Liên lạc',
	'wlm-text-news' => 'Tin tức',
);

