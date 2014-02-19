<?php
/**
 * Internationalisation file for WikimediaIncubator extension.
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author SPQRobin
 */
$messages['en'] = array(
	'wminc-infopage-enter' => 'go to the Main Page',
	'wminc-unknownlang' => '(unknown language code)',
	'wminc-manual-url' => 'Help:Manual', # only translate if necessary
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
	'wminc-infopage-title-t' => 'Wiktionary $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikinews $1',
	'wminc-infopage-title-s' => 'Wikisource $1',
	'wminc-infopage-title-v' => 'Wikiversity $1',
	'wminc-infopage-title-y' => 'Wikivoyage $1',
	'wminc-infopage-welcome' => 'Welcome to the Wikimedia Incubator, a project of the Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|About]])',

	'wminc-infopage-missingwiki-text' => 'A $1 in this language does not yet exist.',
	'wminc-infopage-option-startwiki' => 'If you want to start this wiki, please follow
\'\'\'[$3 these steps]\'\'\' and [[{{MediaWiki:Wminc-manual-url}}|our manual]].',
	'wminc-infopage-option-startsister' => 'If you want to start this wiki, you can go to <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'You can search for [//www.$1.org existing language editions of $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'You can search for existing projects in this language:',
	'wminc-infopage-option-sisterprojects-other' => 'You can search for other projects in this language:',
	'wminc-infopage-option-multilingual' => 'Alternatively, you can go to a multilingual wiki:',
	'wminc-infopage-createmainpage' => 'Enter the word "Main Page" in this language:',
	'wminc-infopage-prefill' => '{{test wiki
| status = tocreate
| language = Language name in English
| meta = <!-- is there a request on Meta-Wiki? -->
}}', # do not translate
	'wminc-infopage-contribute' => 'If you know this language, you are encouraged to contribute!',

	'wminc-infopage-status-open' => 'This is an open wiki of Wikimedia Incubator.',
	'wminc-infopage-status-imported' => 'This Incubator wiki has been imported from $1 after the wiki was closed.',
	'wminc-infopage-status-closedsister' => 'This subdomain was closed. Go to <strong>$2</strong> to contribute to this wiki.',
	'wminc-infopage-status-approved' => 'This Incubator wiki has been approved by the [[meta:Special:MyLanguage/Language_committee|language committee]] and will be created soon.',
	'wminc-infopage-status-created' => 'This project has been approved by the language committee and is now available at $1.',
	'wminc-infopage-status-beforeincubator' => 'This project was created before Wikimedia Incubator started and is available at $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'This project is available at $1.',

	'wminc-infopage-error' => 'Error: {{#infopage}} can only be used on prefixed pages.',
	'wminc-infopage-links' => '', # do not translate
);

/** Message documentation (Message documentation)
 * @author Chaojoker
 * @author Kghbln
 * @author SPQRobin
 * @author Shirayuki
 * @author Umherirrender
 * @author Whym
 */
$messages['qqq'] = array(
	'wminc-infopage-enter' => 'Text of a link to the Main Page of a test wiki at Incubator.',
	'wminc-unknownlang' => "Added after the title ''Wiki[project] \"code\"'' when no language name is found for the language code.",
	'wminc-manual-url' => '{{notranslate}}
Used in:
* {{msg-mw|Wminc-infopage-option-startwiki}}
* {{msg-mw|Wminc-fs-settings-text}}',
	'wminc-infopage-title-p' => "This is the main title of the info page. Parameters:
* $1 - the language name from CLDR, i.e. it takes the name in your language if available. Otherwise, it's in English.
{{Identical|Wikipedia}}",
	'wminc-infopage-title-b' => "This is the main title of the info page. $1 is the language name from CLDR, i.e. it takes the name in your language if available. Otherwise, it's in English.",
	'wminc-infopage-title-t' => "This is the main title of the info page. $1 is the language name from CLDR, i.e. it takes the name in your language if available. Otherwise, it's in English.",
	'wminc-infopage-title-q' => "This is the main title of the info page. $1 is the language name from CLDR, i.e. it takes the name in your language if available. Otherwise, it's in English.",
	'wminc-infopage-title-n' => "This is the main title of the info page. $1 is the language name from CLDR, i.e. it takes the name in your language if available. Otherwise, it's in English.",
	'wminc-infopage-title-s' => "This is the main title of the info page. $1 is the language name from CLDR, i.e. it takes the name in your language if available. Otherwise, it's in English.",
	'wminc-infopage-title-v' => "This is the main title of the info page. $1 is the language name from CLDR, i.e. it takes the name in your language if available. Otherwise, it's in English.",
	'wminc-infopage-title-y' => "This is the main title of the info page. Parameters:
* $1 - the language name from CLDR, i.e. it takes the name in your language if available. Otherwise, it's in English.
{{Identical|Wikivoyage}}",
	'wminc-infopage-welcome' => '{{doc-important|Do not change <code><nowiki>{{MediaWiki:Aboutpage}}</nowiki></code>.}}
Refers to {{msg-mw|Aboutpage}}.',
	'wminc-infopage-missingwiki-text' => "'''$1''' is a project: Wikipedia/Wiktionary/...",
	'wminc-infopage-option-startwiki' => '{{doc-important|Do not change <code><nowiki>{{MediaWiki:Wminc-manual-url}}</nowiki></code>!}}
Refers to {{msg-mw|Wminc-manual-url}}.

Parameters:
* $1 - (Unused) the project name of $2
* $2 - (Unused) a link which points to either Wikisource or Wikiversity
* $3 - a URL which points to [[Special:IncubatorFirstSteps]]
See also:
* {{msg-mw|Wminc-infopage-option-startsister}} - if sister',
	'wminc-infopage-option-startsister' => 'Parameters:
* $1 - the project name of $2
* $2 - a link which points to either Wikisource or Wikiversity
* $3 - (Unused) a URL which points to [[Special:IncubatorFirstSteps]]
See also:
* {{msg-mw|Wminc-infopage-option-startwiki}} - if not sister',
	'wminc-infopage-option-languages-existing' => "'''$1''' is the project name (Wikipedia, Wikinews, ...).",
	'wminc-infopage-option-sisterprojects-existing' => 'Followed by clickable logos of projects Wikipedia, Wiktionary, Wikibooks, ...',
	'wminc-infopage-option-sisterprojects-other' => 'Followed by clickable logos of projects Wikipedia, Wiktionary, Wikibooks, ...',
	'wminc-infopage-option-multilingual' => 'Followed by clickable logos of Meta, Commons, Wikispecies, MediaWiki and Wikidata.',
	'wminc-infopage-createmainpage' => 'Followed by an input box to enter the translation for "Main Page".',
	'wminc-infopage-prefill' => '{{notranslate}}',
	'wminc-infopage-status-imported' => "'''$1''' is a URL to the closed wiki.",
	'wminc-infopage-status-closedsister' => 'Used for closed Wikisources or Wikiversities. $2 is a link to either project.',
	'wminc-infopage-status-approved' => 'Status for test wikis that have been approved and will get their own subdomain soon.',
	'wminc-infopage-status-created' => "'''$1''' is a URL to the existing wiki.",
	'wminc-infopage-status-beforeincubator' => "'''$1''' is a URL to the existing wiki.",
	'wminc-infopage-status-beforeincubator-sister' => "'''$1''' is a URL to the existing wiki.",
	'wminc-infopage-error' => 'Error message shown when trying to use <code>{{#infopage:}}</code> on a non-prefixed page (i.e. pages not starting with a Wx/xyz/ prefix).',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'wminc-infopage-enter' => 'gaan na die Hoofbladsy',
	'wminc-unknownlang' => '(onbekende taalkode)',
	'wminc-infopage-title-p' => 'Wikipedia in $1',
	'wminc-infopage-title-b' => 'Wikiboeke in $1',
	'wminc-infopage-title-t' => 'Wiktionary in $1',
	'wminc-infopage-title-q' => 'Wikiaanhalings in $1',
	'wminc-infopage-title-n' => 'Wikinuus in $1',
	'wminc-infopage-title-s' => 'Wikibron in $1',
	'wminc-infopage-title-v' => 'Wikiversity in $1',
	'wminc-infopage-title-y' => 'Wikivoyage in $1',
	'wminc-infopage-welcome' => "Welkom by die Wikimedia Inkubator, 'n projek van die Wikimedia-stigting ([[{{MediaWiki:Aboutpage}}|meer inligting]])",
	'wminc-infopage-missingwiki-text' => '$1 bestaan nog nie in hierdie taal nie.',
	'wminc-infopage-option-startwiki' => "As u hierdie wiki wil skep, volg asseblief '''[$3 hierdie stappe]''' en [[{{MediaWiki:Wminc-manual-url}}|ons handleiding]].",
	'wminc-infopage-option-startsister' => 'As u hierdie wiki wil begin, kan u na <strong>[$2 $1]</strong> gaan.',
	'wminc-infopage-option-languages-existing' => 'U kan na [//www.$1.org bestaande taalweergawes van $1] soek.',
	'wminc-infopage-option-sisterprojects-existing' => 'U kan na bestaande projekte in hierdie taal soek:',
	'wminc-infopage-option-sisterprojects-other' => 'U kan na ander projekte in hierdie taal soek:',
	'wminc-infopage-option-multilingual' => "U kan ook na 'n meertalige wiki gaan:",
	'wminc-infopage-createmainpage' => 'Verskaf die woord "Tuisblad" in hierdie taal:',
	'wminc-infopage-contribute' => 'As u hierdie taal ken, draag dan asseblief by!',
	'wminc-infopage-status-open' => "Hierdie is 'n open wiki van Wikimedia Inkubator.",
	'wminc-infopage-status-imported' => 'Hierdie Inkubator-wiki is vanaf $1 geïmporteer nadat die wiki gesluit is.',
	'wminc-infopage-status-closedsister' => 'Hierdie subdomein is gesluit. Gaan na <strong>$2</strong> om aan hierdie wiki by te dra.',
	'wminc-infopage-status-approved' => 'Hierdie Inkubator-wiki is deur die [[meta:Special:MyLanguage/Language_committee|taalkomissie]] goedgekeur en sal binnekort geskep word.',
	'wminc-infopage-status-created' => 'Die projek is deur die taalkomitee goedgekeur en is nou beskikbaar op $1.',
	'wminc-infopage-status-beforeincubator' => 'Die projek is begin voordat Wikimedia Inkubator geskep is en is beskikbaar op $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Die projek is beskikbaar op $1.',
	'wminc-infopage-error' => "Fout: {{#infopage}} kan slegs in bladsye met 'n voorvoegsel gebruik word.",
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'wminc-infopage-enter' => 'اذهب إلى الصفحة الرئيسية',
	'wminc-unknownlang' => '(كود لغة غير معروف)',
	'wminc-infopage-title-p' => 'ويكيبيديا $1',
	'wminc-infopage-title-b' => 'ويكي الكتب $1',
	'wminc-infopage-title-t' => 'ويكاموس $1',
	'wminc-infopage-title-q' => 'ويكي الاقتباس $1',
	'wminc-infopage-title-n' => 'ويكي الأخبار $1',
	'wminc-infopage-title-s' => 'ويكي مصدر $1',
	'wminc-infopage-title-v' => 'ويكي الجامعة $1',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 */
$messages['as'] = array(
	'wminc-infopage-enter' => 'বেটুপাতলৈ যাওক',
	'wminc-unknownlang' => '(অজ্ঞাত ভাষা কোড)',
	'wminc-infopage-title-p' => 'ৱিকিপিডিয়া', # Fuzzy
	'wminc-infopage-title-b' => 'ৱিকিপ্ৰন্থ $1',
	'wminc-infopage-title-t' => 'ৱিকি অভিধান $1',
	'wminc-infopage-title-q' => 'ৱিকি উক্তি $1',
	'wminc-infopage-title-n' => 'ৱিকিসংবাদ $1',
	'wminc-infopage-title-s' => 'ৱিকি উত্স $1',
	'wminc-infopage-title-v' => 'ৱিকি বিশ্ববিদ্যালয় $1',
	'wminc-infopage-welcome' => 'ৱিকিমিডিয়া ইনকিউবেটৰলৈ আপোনাক আদৰিছোঁ। ই ৱিকিমিডিয়া ফাউণ্ডেশ্যনৰ এটা সহযোগী প্ৰকল্প ([[{{MediaWiki:Aboutpage}}|সবিশেষ]])।',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'wminc-infopage-enter' => 'dir a la páxina principal',
	'wminc-unknownlang' => '(códigu de llingua desconocíu)',
	'wminc-infopage-title-p' => 'Uiquipedia en $1',
	'wminc-infopage-title-b' => 'Uiquillibros en $1',
	'wminc-infopage-title-t' => 'Uiccionariu en $1',
	'wminc-infopage-title-q' => 'Uiquicites en $1',
	'wminc-infopage-title-n' => 'Wikinews en $1',
	'wminc-infopage-title-s' => 'Wikisource en $1',
	'wminc-infopage-title-v' => 'Wikiversity en $1',
	'wminc-infopage-title-y' => 'Wikivoyage en $1',
	'wminc-infopage-welcome' => 'Bienveníos a Wikimedia Incubator, un proyeutu de la Fundación Wikimedia ([[{{MediaWiki:Aboutpage}}|Tocante a...]])',
	'wminc-infopage-missingwiki-text' => 'Inda nun esiste $1 nesta llingua.',
	'wminc-infopage-option-startwiki' => "Si quies principiar esta wiki, sigui '''[$3 estos pasos]''' ya'l [[{{MediaWiki:Wminc-manual-url}}|nuesu manual]].",
	'wminc-infopage-option-startsister' => 'Si quies principiar esta wiki, pues dir a <strong>[$1 en $2]</strong>.',
	'wminc-infopage-option-languages-existing' => "Pues guetar les [//www.$1.org ediciones de les llingües nes qu'esiste $1].",
	'wminc-infopage-option-sisterprojects-existing' => 'Pues guetar proyeutos esistentes nesta llingua:',
	'wminc-infopage-option-sisterprojects-other' => 'Pues guetar otros proyeutos nesta llingua:',
	'wminc-infopage-option-multilingual' => "D'otra miente, pues dir a una wiki multillingüe:",
	'wminc-infopage-createmainpage' => 'Escribi les pallabres "Páxina principal" nesta llingua:',
	'wminc-infopage-contribute' => '¡Si entiendes esta llingua, te afalamos a que collabores!',
	'wminc-infopage-status-open' => 'Esta ye una wiki abierta de Wikimedia Incubator.',
	'wminc-infopage-status-imported' => "Esta wiki d'Incubator s'importó de $1 dempués de que la wiki zarrara.",
	'wminc-infopage-status-closedsister' => 'Esti subdominiu se zarró. Visita <strong>$2</strong> pa collaborar nesta wiki.',
	'wminc-infopage-status-approved' => 'El [[meta:Special:MyLanguage/Language_committee|comité de llingües]] aprobó esta wiki de Incubadora y se creará aína.',
	'wminc-infopage-status-created' => "Esti proyeutu s'aprobó pol comité de llingües y agora ta disponible en $1.",
	'wminc-infopage-status-beforeincubator' => 'Esti proyeutu se creó enantes que principiara Wikimedia Incubator y ta disponible en $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Esti proyeutu ta disponible en $1.',
	'wminc-infopage-error' => 'Error: {{#infopage}} sólo se pue utilizar nes páxines con prefixu.',
);

/** Kotava (Kotava)
 * @author Wikimistusik
 */
$messages['avk'] = array(
	'wminc-infopage-enter' => 'Fira va telu bupu',
	'wminc-unknownlang' => '(megrupena avabeksa)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
	'wminc-infopage-title-t' => 'Wiktionary $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikinews $1',
	'wminc-infopage-title-s' => 'Wikisource $1',
	'wminc-infopage-title-v' => 'Wikiversity $1',
	'wminc-infopage-option-sisterprojects-existing' => 'Va tis abdumimaks koe bata ava rotaneyal',
	'wminc-infopage-option-sisterprojects-other' => 'Va ar abdumimaks koe bata ava rotaneyal',
	'wminc-infopage-option-multilingual' => 'Va jonavafi wiki rofil', # Fuzzy
	'wminc-infopage-createmainpage' => 'Va "Emudexo" ravlem ke bata ava bazel :',
	'wminc-infopage-contribute' => 'Ede va bata ava ul, gu webera zo bristul !',
	'wminc-infopage-status-imported' => 'Bati Incubator wiki mal $1 kaiki budera va wiki zo kobureyer.',
	'wminc-infopage-status-created' => 'Bat abdumimaks gan avaneda su zo vanovar nume dene $1 vere tir roderaykan.',
	'wminc-infopage-status-beforeincubator' => 'Bat abdumimaks abdi bokara va Wikimedia Incubator zo reduyur nume dene $1 tir roderaykan.',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'wminc-infopage-enter' => 'Ana Səhifəyə get',
	'wminc-infopage-title-p' => 'Vikipediya $1',
	'wminc-infopage-title-b' => 'Vikikitab $1',
	'wminc-infopage-title-t' => 'Vikilüğət $1',
	'wminc-infopage-title-q' => 'Vikisitat $1',
	'wminc-infopage-title-n' => 'Vikixəbər $1',
	'wminc-infopage-title-s' => 'Vikimənbə $1',
	'wminc-infopage-title-v' => 'Vikiversitet $1',
);

/** South Azerbaijani (تورکجه)
 * @author E THP
 * @author Mousa
 */
$messages['azb'] = array(
	'wminc-infopage-enter' => 'آنا صحیفه‌یه گئدین',
	'wminc-unknownlang' => '(بیلینمه‌ین دیل کودو)',
	'wminc-infopage-title-p' => '$1 ویکی‌پئدیا',
	'wminc-infopage-title-b' => '$1 ویکی‌کیتاب',
	'wminc-infopage-title-t' => '$1 ویکی‌سؤزلوک',
	'wminc-infopage-title-q' => '$1 ویکی‌سؤز',
	'wminc-infopage-title-n' => '$1 ویکی‌خبر',
	'wminc-infopage-title-s' => '$1 ویکی‌قایناق',
	'wminc-infopage-title-v' => '$1 ویکی‌وئرسیته',
	'wminc-infopage-title-y' => '$1 ویکی‌سفر',
	'wminc-infopage-welcome' => 'ویکی‌مئدیا اینکوباتور، ویکی‌مئدیا تشکیلاتینین بیر پروژه‌سینه، خوش گلمیسینیز
([[{{MediaWiki:Aboutpage}}|حاقیندا]])',
	'wminc-infopage-missingwiki-text' => 'بو دیل‌ده بیر $1 هله یوخدور.',
	'wminc-infopage-option-startwiki' => "اگر بو ویکی‌نین آچماغینی ایسته‌ییرسینیز، لوطفاً '''[$3 بو آددیملار]''' و [[{{MediaWiki:Wminc-manual-url}}|بیزیم درسلیگیمیز]]ی گئدین.",
	'wminc-infopage-option-startsister' => 'اگر بو ویکی‌نین آچماغینی ایسته‌ییرسینیز، <strong>[$2 $1]</strong>-ه گئده بیلرسینیز.',
	'wminc-infopage-option-languages-existing' => 'سیز [//www.$1.org $1-ین اولان دیل‌لری]نی آختارا بیلرسینیز.',
	'wminc-infopage-option-sisterprojects-existing' => 'سیز بو دیل‌ده اولان پروژه‌لری آختارا بیلرسینیز:',
	'wminc-infopage-option-sisterprojects-other' => 'سیز بو دیل‌ده اولان آیری پروژه‌لری آختارا بیلرسینیز:',
	'wminc-infopage-option-multilingual' => 'یا دا، سیز بیر نئچه‌دیل‌لی ویکی‌یه گئده بیلرسینیز:',
	'wminc-infopage-createmainpage' => 'بو دیل‌ده «آنا صحیفه‌نی» یازین:',
	'wminc-infopage-contribute' => 'اگر بو دیلی بیلیرسینیز، سیزی بو دیل‌ده چالیشماقا دعوت ائدیریک!',
	'wminc-infopage-status-open' => 'بو ویکی‌مئدیا اینکوباتورون بیر آچیق ویکی‌سی‌دیر.',
	'wminc-infopage-status-imported' => 'بو اینکوباتور ویکی، $1 ویکی‌سی باغلاناندان سونرا، گتیریلیب‌دیر.',
	'wminc-infopage-status-closedsister' => 'آلت‌دامنه باغلانیب‌دیر. بو ویکی‌ده چالیشماغا <strong>$2</strong>-ه گئدین.',
	'wminc-infopage-status-approved' => 'بو اینوکوباتور ویکی [[meta:Special:MyLanguage/Language_committee|دیل کومیته‌سینده]] تأیید اولونوب‌دور و بو یاخیندا یارادیلاجاق‌دیر.',
	'wminc-infopage-status-created' => 'بو پروژه دیل کومیته‌سینده تأیید اولونوب‌دور و $1-ده ال‌ده‌دیر.',
	'wminc-infopage-status-beforeincubator' => 'بو پروژه ویکی‌مئدیا اینکوباتور یاراناندان قاباق باشلانیب‌دیر و $1-ده ال‌ده‌دیر.',
	'wminc-infopage-status-beforeincubator-sister' => 'بو پروژه $1-ده ال‌ده‌دیر.',
	'wminc-infopage-error' => 'خطا: {{#infopage}}-ی یالنیز اؤن‌اکلی صحیفه‌لرده ایشلتمک اولار.',
);

/** Bashkir (башҡортса)
 * @author Assele
 * @author Haqmar
 */
$messages['ba'] = array(
	'wminc-infopage-enter' => 'Баш биткә күсергә',
	'wminc-unknownlang' => '(билдәһеҙ тел коды)',
	'wminc-infopage-title-p' => 'Википедия $1',
	'wminc-infopage-title-b' => 'Викикитаптар $1',
	'wminc-infopage-title-t' => 'Викиһүҙлек $1',
	'wminc-infopage-title-q' => 'Викиөҙөмтә $1',
	'wminc-infopage-title-n' => 'Викияңылыҡтар $1',
	'wminc-infopage-title-s' => 'Викикитапхана $1',
	'wminc-infopage-title-v' => 'Викиверситет $1',
);

/** Bavarian (Boarisch)
 * @author Mucalexx
 */
$messages['bar'] = array(
	'wminc-infopage-enter' => 'Gee zua da Hauptseiten',
	'wminc-unknownlang' => '(néd bekånnte Sprooch mid Code „$1“)', # Fuzzy
	'wminc-infopage-welcome' => 'Servas im Wikimedia Incubator, am Prójekt voh da Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|Ywer]])',
	'wminc-infopage-missingwiki-text' => 'A $1 in derer Sprooch is nó néd vurhånden.',
	'wminc-infopage-option-startwiki' => 'Wånn du dés Wiki starten mecherdst,
kåst du [{{fullurl:{{FULLPAGENAME}}|action=edit}} dé Seiten erstön] und noch [[{{MediaWiki:Wminc-manual-url}}|unserner Åloattung]] vurgeh.', # Fuzzy
	'wminc-infopage-option-languages-existing' => 'Du kåst auf [//www.$1.org noch vurhånderne Sproochausgom voh $1] suachen.',
	'wminc-infopage-option-sisterprojects-existing' => 'Du kåst noch vurhånderne Prójektt in derer Sprooch suachen:',
	'wminc-infopage-option-sisterprojects-other' => 'Du kåst noch ånderne Prójektt in derer Sprooch suachen:',
	'wminc-infopage-option-multilingual' => 'Du kåst zuaram mersprooching Wiki geh:', # Fuzzy
	'wminc-infopage-createmainpage' => 'Gibs Wort fyr „Hauptseiten“ in derer Sprooch eih:',
	'wminc-infopage-contribute' => 'Wånnst du dé Sprooch bherrschst, bist dert oiwei gern eihgloon, midzmochen!',
	'wminc-infopage-status-imported' => 'Dés Wiki vom Incubator is voh $1 importird worn, nochdéms gschlóssen worn is.',
	'wminc-infopage-status-created' => 'Dés Prójekt is vom Sproochkómmitee gnemigt worn und is iatz unter $1 vafiagbor.',
	'wminc-infopage-status-beforeincubator' => "Dés Prójekt is erstöd worn, bevurs 'n Wikimedia Incubator geem hod und is unter $1 vafiagbor.",
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Renessaince
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'wminc-infopage-enter' => 'перайсьці на Галоўную старонку',
	'wminc-unknownlang' => '(невядомы код мовы)',
	'wminc-infopage-title-p' => 'Вікіпэдыя $1',
	'wminc-infopage-title-b' => 'ВікіКнігі $1',
	'wminc-infopage-title-t' => 'ВікіСлоўнік $1',
	'wminc-infopage-title-q' => 'ВікіЦытаты $1',
	'wminc-infopage-title-n' => 'ВікіНавіны $1',
	'wminc-infopage-title-s' => 'ВікіКрыніца $1',
	'wminc-infopage-title-v' => 'Віківэрсытэт $1',
	'wminc-infopage-title-y' => '$1 Віківандроўка',
	'wminc-infopage-welcome' => 'Вітаем у Інкубатары Вікімэдыя, праекце Фундацыі «Вікімэдыя» ([[{{MediaWiki:Aboutpage}}|Падрабязьней]])',
	'wminc-infopage-missingwiki-text' => '$1 на гэтай мове яшчэ не існуе.',
	'wminc-infopage-option-startwiki' => "Калі Вы жадаеце распачаць гэтую вікі, выканайце
'''[$3 гэтыя крокі]''' і зьвяртайцеся да [[{{MediaWiki:Wminc-manual-url}}|нашых інструкцыяў]].",
	'wminc-infopage-option-startsister' => 'Калі Вы хочаце пачаць гэтую вікі, перайдзіце на <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Вы можаце пашукаць [//www.$1.org існуючыя моўныя варыянты $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Вы можаце пашукаць існуючыя праекты на гэтай мове:',
	'wminc-infopage-option-sisterprojects-other' => 'Вы можаце пашукаць іншыя праекты на гэтай мове:',
	'wminc-infopage-option-multilingual' => 'Апроч таго, вы можаце перайсьці да шматмоўнай вікі:',
	'wminc-infopage-createmainpage' => 'Увядзіце словы «Галоўная старонка» на гэтай мове:',
	'wminc-infopage-contribute' => 'Калі Вы ведаеце гэтую мову, Вы можаце рабіць унёсак!',
	'wminc-infopage-status-open' => 'Гэта адкрытая вікі ў Інкубатары Вікімэдыі.',
	'wminc-infopage-status-imported' => 'Гэтая вікі ў інкубатары была імпартаваная з $1 пасьля таго, як вікі была закрытая.',
	'wminc-infopage-status-closedsister' => 'Гэты паддамэн закрыты. Перайдзіце на <strong>$2</strong>, каб напісаць у гэтую вікі.',
	'wminc-infopage-status-approved' => 'Гэты інкубатарны праект быў ухвалены [[meta:Special:MyLanguage/Language_committee|Моўным камітэтам]] і хутка будзе створаны.',
	'wminc-infopage-status-created' => 'Гэты праект быў зацьверджаны моўным камітэтам, і цяпер ён даступны на $1.',
	'wminc-infopage-status-beforeincubator' => 'Гэты праект быў створаны перад пачаткам функцыянаваньня Інкубатара фундацыі «Вікімэдыя» і ён даступны на $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Гэты праект даступны па адрасе $1.',
	'wminc-infopage-error' => 'Памылка: {{#infopage}} можна выкарыстоўваць толькі на старонках з прэфіксам.',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'wminc-infopage-enter' => "mont d'ar Bajenn Degemer",
	'wminc-unknownlang' => '(kod yezh dianav)',
	'wminc-infopage-title-p' => 'Wikipedia e $1',
	'wminc-infopage-title-b' => 'Wikilevrioù e $1',
	'wminc-infopage-title-t' => 'Wikeriadur e $1',
	'wminc-infopage-title-q' => 'Wikiarroud e $1',
	'wminc-infopage-title-n' => 'Wikikeloù e $1',
	'wminc-infopage-title-s' => 'Wikimammenn e $1',
	'wminc-infopage-title-v' => 'Wikiskol-veur e $1',
	'wminc-infopage-welcome' => 'Degemer mat er Wikimedia Incubator, ur raktres eus Diazezadur Wikimedia ([[{{MediaWiki:Aboutpage}}|Diwar-benn]])',
	'wminc-infopage-missingwiki-text' => "N'eus ket a $1 er yezh-mañ.",
	'wminc-infopage-option-startwiki' => "Mar fell deoc'h sevel ar wiki-mañ,
e c'hallit [{{fullurl:{{FULLPAGENAME}}|action=edit}} kouiñ ar bajenn] ha heuliañ [[{{MediaWiki:Wminc-manual-url}}|hon dornlevr]].", # Fuzzy
	'wminc-infopage-option-startsister' => "Mar fell deoc'h boulc'hañ ar wiki-mañ e c'hallit mont da <strong>[$2 $1]</strong>.",
	'wminc-infopage-option-languages-existing' => 'Gallout a rit klask [//www.$1.org stummoù yezh zo anezho eus $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Gallout a rit klask raktresoù zo anezho er yezh-mañ :',
	'wminc-infopage-option-sisterprojects-other' => 'Gallout a rit klask raktresoù all er yezh-mañ :',
	'wminc-infopage-option-multilingual' => "Gallout a rit mont d'ur wiki liesyezhek :", # Fuzzy
	'wminc-infopage-createmainpage' => 'Merkit ar ger "Pajenn degemer" er yezh-mañ :',
	'wminc-infopage-contribute' => "Mard anavezit ar yezh-mañ e vroudomp ac'hanoc'h da gemer perzh !",
	'wminc-infopage-status-imported' => "Enporzhiet eo bet ar rakwiki-mañ eus $1 p'eo bet serret ar wiki.",
	'wminc-infopage-status-closedsister' => 'Serr eo an isdomani-mañ. Mont da <strong>$2</strong> evit kemer perzh er wiki-mañ.',
	'wminc-infopage-status-created' => "Aprouet eo bet ar raktres-mañ gant ar c'huzul yezh hag ez a en-dro bremañ war $1.",
	'wminc-infopage-status-beforeincubator' => "Savet e oa bet ar raktres-mañ a-raok na loc'hfe gorerez Wikimedia hag hegerz eo war $1.",
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'wminc-infopage-title-p' => 'Википеди кхечу маттахь «$1»',
);

/** Czech (čeština)
 * @author Koo6
 * @author Mormegil
 */
$messages['cs'] = array(
	'wminc-infopage-enter' => 'přejít na Hlavní stranu',
	'wminc-unknownlang' => '(neznámý kód jazyka)',
	'wminc-infopage-title-p' => 'Wikipedie v jazyce $1',
	'wminc-infopage-title-b' => 'Wikiknihy v jazyce $1',
	'wminc-infopage-title-t' => 'Wikislovník v jazyce $1',
	'wminc-infopage-title-q' => 'Wikicitáty v jazyce $1',
	'wminc-infopage-title-n' => 'Wikizprávy v jazyce $1',
	'wminc-infopage-title-s' => 'Wikizdroje v jazyce $1',
	'wminc-infopage-title-v' => 'Wikiverzita v jazyce $1',
	'wminc-infopage-title-y' => 'Wikivoyage v jazyce $1',
	'wminc-infopage-welcome' => 'Vítejte na Inkubátoru Wikimedia, projektu nadace Wikimedia ([[{{MediaWiki:Aboutpage}}|o projektu]])',
	'wminc-infopage-missingwiki-text' => 'Tato jazyková verze {{grammar:2sg|$1}} dosud neexistuje.',
	'wminc-infopage-option-startwiki' => "Pokud chcete tuto wiki založit, následujte prosím
'''[$3 tento postup]''' a [[{{MediaWiki:Wminc-manual-url}}|naši příručku]].",
	'wminc-infopage-option-startsister' => 'Chcete-li začít tuto wiki, můžete jít na <strong>[$2 {{grammar:4sg|$1}}]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Můžete zkusit hledat [//www.$1.org existující jazykové verze {{grammar:2sg|$1}}].',
	'wminc-infopage-option-sisterprojects-existing' => 'Můžete zkusit hledat existující projekty v tomto jazyce.',
	'wminc-infopage-option-sisterprojects-other' => 'Můžete zkusit hledat další projekty v tomto jazyce.',
	'wminc-infopage-option-multilingual' => 'Nebo můžete přejít na mnohojazyčnou wiki:',
	'wminc-infopage-createmainpage' => 'Zadejte výraz „Hlavní strana“ v tomto jazyce:',
	'wminc-infopage-contribute' => 'Pokud tento jazyk ovládáte, uvítáme vaše příspěvky!',
	'wminc-infopage-status-open' => 'Toto je otevřená wiki na Inkubátoru Wikimedia.',
	'wminc-infopage-status-imported' => 'Tato inkubační wiki byla naimportována z projektu $1 po jeho uzavření.',
	'wminc-infopage-status-closedsister' => 'Tato subdoména byla uzavřena. Přispívat do této wiki můžete na <strong>$2</strong>.',
	'wminc-infopage-status-approved' => 'Tato inkubační wiki byla schválena [[meta:Special:MyLanguage/Language_committee|jazykovou komisí]] a bude brzy založena.',
	'wminc-infopage-status-created' => 'Tento projekt byl schválen jazykovou komisí a je nyní dostupný na $1.',
	'wminc-infopage-status-beforeincubator' => 'Tento projekt vznikl před spuštěním Inkubátoru Wikimedia a je dostupný na $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Projekt je dostupný na $1.',
	'wminc-infopage-error' => 'Chyba: {{#infopage}} lze použít jen na stránkách s prefixem.',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 * @author Robin Owain
 */
$messages['cy'] = array(
	'wminc-infopage-enter' => "ewch i'r Hafan",
	'wminc-infopage-title-p' => 'Wicipedia $1',
	'wminc-infopage-title-b' => 'Wicilyfrau $1',
	'wminc-infopage-title-t' => 'Wiciadur $1',
	'wminc-infopage-title-s' => 'Wicidestun $1',
	'wminc-infopage-title-y' => 'Wicidaith $1',
);

/** German (Deutsch)
 * @author Kghbln
 * @author MF-Warburg
 * @author Metalhead64
 * @author Polletfa
 */
$messages['de'] = array(
	'wminc-infopage-enter' => 'Geh zur Hauptseite',
	'wminc-unknownlang' => '(unbekannter Sprachecode)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
	'wminc-infopage-title-t' => 'Wiktionary $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikinews $1',
	'wminc-infopage-title-s' => 'Wikisource $1',
	'wminc-infopage-title-v' => 'Wikiversity $1',
	'wminc-infopage-title-y' => 'Wikivoyage in $1',
	'wminc-infopage-welcome' => 'Willkommen beim Wikimedia Incubator, einem Projekt der Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|Über]])',
	'wminc-infopage-missingwiki-text' => 'Ein $1-Projekt in dieser Sprache ist noch nicht vorhanden.',
	'wminc-infopage-option-startwiki' => "Sofern du dieses Wiki starten möchtest, folge bitte
'''[$3 diesen Schritten]''' und [[{{MediaWiki:Wminc-manual-url}}|unserer Anleitung]].",
	'wminc-infopage-option-startsister' => 'Sofern du dieses Wiki starten möchtest, geh zu <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Du kannst nach [//www.$1.org vorhandenen Sprachausgaben von $1] suchen.',
	'wminc-infopage-option-sisterprojects-existing' => 'Du kannst nach vorhandenen Projekten in dieser Sprache suchen:',
	'wminc-infopage-option-sisterprojects-other' => 'Du kannst nach anderen Projekten in dieser Sprache suchen:',
	'wminc-infopage-option-multilingual' => 'Alternativ kannst du zu einem mehrsprachigen Wiki gehen:',
	'wminc-infopage-createmainpage' => 'Gib das Wort für „Hauptseite“ in dieser Sprache ein:',
	'wminc-infopage-contribute' => 'Sofern du diese Sprache beherrschst, bist du herzlich willkommen, mitzumachen!',
	'wminc-infopage-status-open' => 'Dies ist ein für Bearbeitungen offenes Wiki auf Wikimedia Incubator.',
	'wminc-infopage-status-imported' => 'Dieses Wiki des Incubators wurde von $1 importiert, nachdem es geschlossen wurde.',
	'wminc-infopage-status-closedsister' => 'Diese Subdomain wurde geschlossen. Geh zu <strong>$2</strong>, um zu diesem Wiki beizutragen.',
	'wminc-infopage-status-approved' => 'Dieses Incubator-Wiki wurde vom [[meta:Special:MyLanguage/Language_committee|Sprachkomitee]] genehmigt und wird bald erstellt werden.',
	'wminc-infopage-status-created' => 'Dieses Projekt wurde vom Sprachkomitee genehmigt und ist nun unter $1 verfügbar..',
	'wminc-infopage-status-beforeincubator' => 'Dieses Projekt wurde erstellt, bevor es den Wikimedia Incubator gab und ist unter $1 verfügbar.',
	'wminc-infopage-status-beforeincubator-sister' => 'Dieses Projekt ist unter $1 verfügbar.',
	'wminc-infopage-error' => 'Fehler: {{#infopage}} kann nur auf Seiten, die über ein Präfix verfügen, verwendet werden.',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 * @author Polletfa
 */
$messages['de-formal'] = array(
	'wminc-infopage-option-startwiki' => "Sofern Sie dieses Wiki starten möchten, folgen Sie bitte
'''[$3 diesen Schritten]''' und [[{{MediaWiki:Wminc-manual-url}}|unserer Anleitung]].",
	'wminc-infopage-option-startsister' => 'Sofern Sie dieses Wiki starten möchten, gehen Sie zu <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Sie können auf [//www.$1.org nach vorhandenen Sprachausgaben von $1] suchen.',
	'wminc-infopage-option-sisterprojects-existing' => 'Sie können nach vorhandenen Projekten in dieser Sprache suchen:',
	'wminc-infopage-option-sisterprojects-other' => 'Sie können nach anderen Projekten in dieser Sprache suchen:',
	'wminc-infopage-option-multilingual' => 'Sie können ein mehrsprachiges Wiki aufsuchen:', # Fuzzy
	'wminc-infopage-createmainpage' => 'Geben Sie das Wort für „Hauptseite“ in dieser Sprache ein:',
	'wminc-infopage-contribute' => 'Wenn Sie diese Sprache beherrschen, sind Sie herzlich willkommen, mitzumachen!',
	'wminc-infopage-status-closedsister' => 'Diese Subdomain wurde geschlossen. Gehen Sie zu <strong>$2</strong>, um zu diesem Wiki beizutragen.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'wminc-infopage-enter' => 'Şo Pela Seri',
	'wminc-unknownlang' => '(No kodê zıwani nêşınasiye)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikikıtabo $1',
	'wminc-infopage-title-t' => 'Wikiqısebendo $1',
	'wminc-infopage-title-q' => 'Wikiqıseyo $1',
	'wminc-infopage-title-n' => 'Wikixebera $1',
	'wminc-infopage-title-s' => 'Wikiçımeyo $1',
	'wminc-infopage-title-v' => 'Wikiversiteya $1',
	'wminc-infopage-title-y' => 'Wikigeyrayış $1',
	'wminc-infopage-welcome' => 'Şıma xeyr ameyê Wikimedia Incubatori. No ([[{{MediaWiki:Aboutpage}}|Haq dê]]) proceyan de Weqıf da Wikimediyao.',
	'wminc-infopage-missingwiki-text' => '$1, hewna na zıwan de çınya.',
	'wminc-infopage-option-startwiki' => 'Şımayê wazenê ke ena wikiyer dest pêkerê,
Şıma senê pela  $3 [{{fullurl:{{FULLPAGENAME}}|action=edit}} vırazê] u [[{{MediaWiki:Wminc-manual-url}}|xo manuel]] peşti bıdê.',
	'wminc-infopage-option-startsister' => 'Şıma qayılê ke ena wiki dest pêkerê se şırê tiya <strong>[$2 $1]</strong>',
	'wminc-infopage-option-languages-existing' => 'Qan dê [//www.$1.org zıwan versiyon dê $1 ] re cı geyrayış şenê bıkerê',
	'wminc-infopage-option-sisterprojects-existing' => 'Eno zıwan de şıma şenê proceyanê bina bıvinê',
	'wminc-infopage-option-sisterprojects-other' => 'Eno zıwan de şıma şenê proceyanê bina bıvinê',
	'wminc-infopage-option-multilingual' => 'Alternatif bo deye, Şıma şenê şı rê şarzıwanan de wiki:',
	'wminc-infopage-createmainpage' => 'Ena zıwan de metnê "Pela Seri" defiye de',
	'wminc-infopage-contribute' => 'Şıma enê zıwani zanê se, mayê şıma iştıraxin rê dawet kem !',
	'wminc-infopage-status-open' => 'Wikimedia Incubator dı ena wikiyer akerê.',
	'wminc-infopage-status-imported' => 'Ena Incubator wiki tesdiq nêbiya $1 ra yok gêriyaya.',
	'wminc-infopage-status-closedsister' => 'Bın domainê enay racneyayo. Qan dê iştıraxa şırê <strong>$2</strong>',
	'wminc-infopage-status-approved' => 'No inkubator terefê [[meta:Special:MyLanguage/Language_committee|Heyetê zıwani]] ra tesdiq biyo u nêzdi de beno a.',
	'wminc-infopage-status-created' => "Komitey zıwani ena proca kerda tesdiq u pelada $1'dı esta.",
	'wminc-infopage-status-beforeincubator' => "Dest pêkerdışê ena procer Wikimedia Incubator dı veror vıraziyayo u pela da $1'dı esto.",
	'wminc-infopage-status-beforeincubator-sister' => 'Procey $1 esto.',
	'wminc-infopage-error' => 'Xırab: peley veroleya ho ke {{#infopage}} dı karênê.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'wminc-infopage-enter' => 'źi ku głownemu bokoju',
	'wminc-unknownlang' => '(njeznaty rěcny kod)',
	'wminc-infopage-title-p' => 'Wikipedija $1',
	'wminc-infopage-title-b' => 'Wikiknigły $1',
	'wminc-infopage-title-t' => 'Wikisłownik $1',
	'wminc-infopage-title-q' => 'Wikicitat $1',
	'wminc-infopage-title-n' => 'Wikinowosći $1',
	'wminc-infopage-title-s' => 'Wikižrědło $1',
	'wminc-infopage-title-v' => 'Wikiwersita $1',
	'wminc-infopage-title-y' => 'Wikivoyage $1',
	'wminc-infopage-welcome' => 'Witaj do inkubatora Wikimedije, projekt załožby Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|Wó]])',
	'wminc-infopage-missingwiki-text' => '$1 hyšći njeeksistěrujo w toś tej rěcy.',
	'wminc-infopage-option-startwiki' => "Jolic coš toś ten wiki startowaś,
pšosym slěduj '''[$3 toś te kšace]''' a [[{{MediaWiki:Wminc-manual-url}}|našo rozpokazanje]].",
	'wminc-infopage-option-startsister' => 'Jolic coš toś ten wiki startowaś, móžoš k <strong>[$2 $1]</strong> hyś.',
	'wminc-infopage-option-languages-existing' => 'Móžoš za [//www.$1.org eksistěrujucymi rěcnymi wudaśami projekta $1] pytaś.',
	'wminc-infopage-option-sisterprojects-existing' => 'Móžoš za eksistěrujucymi projektami w toś tej rěcy pytaś:',
	'wminc-infopage-option-sisterprojects-other' => 'Móžoš za drugimi projektami w toś tej rěcy pytaś:',
	'wminc-infopage-option-multilingual' => 'Alternatiwnje móžoš k wěcejrěcnemu wikijeju hyś:',
	'wminc-infopage-createmainpage' => 'Zapódaj wuraz za "Głowny bok" w toś tej rěcy:',
	'wminc-infopage-contribute' => 'Jolic wumějoš toś tu rěc, buź witany a cyń sobu!',
	'wminc-infopage-status-open' => 'To jo wótwórjony wiki na Wikimedia Incubator.',
	'wminc-infopage-status-imported' => 'Toś ten wiki inkubatora jo se z $1 importěrował, za tym až jo se wiki zacynił.',
	'wminc-infopage-status-closedsister' => 'Toś ta póddomena jo se zacyniła. Źi k <strong>$2</strong>, aby k toś tomu wikijeju pśinosował.',
	'wminc-infopage-status-approved' => 'Toś ten Inkubatorowy wiki jo se wót [[meta:Special:MyLanguage/Language_committee|rěcnego komiteja]] pśizwolił a buźo se skóro napóraś.',
	'wminc-infopage-status-created' => 'Toś ten projekt jo se wót rěcnego komiteja pśizwólił a stoj něnto pód $1 k dispoziciji.',
	'wminc-infopage-status-beforeincubator' => 'Toś ten projekt jo se napórał, nježli až Wikimedia Incubator jo se startował a stoj pód $1 k dispoziciji.',
	'wminc-infopage-status-beforeincubator-sister' => 'Toś ten projekt stoj pód $1 k dispoziciji.',
	'wminc-infopage-error' => 'Zmólka: {{#infopage}} dajo se jano na bokach wužywaś, kótarež maju prefiks.',
);

/** Greek (Ελληνικά)
 * @author Crazymadlover
 * @author Glavkos
 */
$messages['el'] = array(
	'wminc-infopage-enter' => 'Πηγαίνετε στην κύρια σελίδα',
	'wminc-infopage-title-p' => 'Βικιπαίδεια $1',
	'wminc-infopage-title-b' => 'Βικιβιβλία $1',
	'wminc-infopage-title-t' => 'Βικιλεξικό $1',
	'wminc-infopage-title-q' => 'Βικιφθέγματα $1',
	'wminc-infopage-title-n' => 'Βικινέα $1',
	'wminc-infopage-title-s' => 'Βικιθήκη $1',
	'wminc-infopage-title-v' => 'Βικιεπιστήμιο $1',
	'wminc-infopage-title-y' => 'Βικιταξίδια $1',
	'wminc-infopage-welcome' => 'Καλώς ήλθατε στον Επωαστήρα του Wikimedia, ένα εγχείρημα του Ιδρύματος Wikimedia ([[{{MediaWiki:Aboutpage}}|Σχετικά]])',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'wminc-unknownlang' => '(nekonata lingvo kun kodo "$1")', # Fuzzy
	'wminc-infopage-title-p' => 'Vikipedio $1',
	'wminc-infopage-title-b' => 'Vikilibroj $1',
	'wminc-infopage-title-t' => 'Vikivortaro $1',
	'wminc-infopage-title-q' => 'Vikicitaro $1',
	'wminc-infopage-title-n' => 'Vikinovaĵoj $1',
	'wminc-infopage-title-s' => 'Vikifontaro $1',
	'wminc-infopage-title-v' => 'Vikiversitio $1',
	'wminc-infopage-missingwiki-text' => '$1 en ĉi tiu linvo ne jam ekzistas.',
	'wminc-infopage-option-sisterprojects-other' => 'Vi povas serĉi aliajn projektojn en ĉi tiu lingvo:',
	'wminc-infopage-createmainpage' => 'Eniru la vorton "Ĉefpaĝon" laŭ ĉi tiu lingvo:',
	'wminc-infopage-contribute' => 'Se vi scipovas ĉi tiun lingvon, vi estas kuraĝigita por kontribui!',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Diotime
 * @author Drini
 * @author Fitoschido
 * @author Imre
 */
$messages['es'] = array(
	'wminc-infopage-enter' => 'ir a la página principal',
	'wminc-unknownlang' => '(código de idioma desconocido)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikilibros $1',
	'wminc-infopage-title-t' => 'Wikcionario $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikinoticias $1',
	'wminc-infopage-title-s' => 'Wikisource $1',
	'wminc-infopage-title-v' => 'Wikiversidad $1',
	'wminc-infopage-title-y' => 'Wikivoyage $1',
	'wminc-infopage-welcome' => 'Bienvenidos a la Incubadora de Wikimedia, un proyecto de la Fundación Wikimedia ([[{{MediaWiki:Aboutpage}}|Acerca de]])',
	'wminc-infopage-missingwiki-text' => 'Un $1 en este idioma todavía no existe.',
	'wminc-infopage-option-startwiki' => "Si deseas comenzar este wiki,
sigue '''[$3 estos pasos]''' y [[{{MediaWiki:Wminc-manual-url}}|nuestro manual]].",
	'wminc-infopage-option-startsister' => 'Si deseas iniciar esta wiki, puedes ir a <strong>[$2 $1].</strong>',
	'wminc-infopage-option-languages-existing' => 'Puede buscar [//www.$1.org ediciones existentes en el idioma $1 ].',
	'wminc-infopage-option-sisterprojects-existing' => 'Puedes buscar proyectos existentes en este idioma:',
	'wminc-infopage-option-sisterprojects-other' => 'Puedes buscar otros proyectos en este idioma:',
	'wminc-infopage-option-multilingual' => 'Como alternativa, puedes ir a un wiki multilingüe:',
	'wminc-infopage-createmainpage' => 'Introduce las palabras «Página principal» en este idioma:',
	'wminc-infopage-contribute' => '¡Si entiendes esta lengua, te animamos a contribuir!',
	'wminc-infopage-status-open' => 'Este es un wiki abierto de Wikimedia Incubator.',
	'wminc-infopage-status-imported' => 'Este wiki de la Incubadora se importó desde $1 después de que el wiki fuera cerrado.',
	'wminc-infopage-status-closedsister' => 'Este subdominio se cerró. Ir a <strong>$2</strong> para contribuir a este wiki.',
	'wminc-infopage-status-approved' => 'Esta incubadora de wiki ha sido aprobada por el [[meta:Special:MyLanguage/Language_committee|comité de idioma]] y será creada pronto.',
	'wminc-infopage-status-created' => 'Este proyecto ha sido aprobado por el Comité de idiomas y ahora está disponible en $1.',
	'wminc-infopage-status-beforeincubator' => 'Este proyecto fue creado antes de que la Incubadora de Wikimedia comenzara y está disponible en $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Este proyecto está disponible en $1.',
	'wminc-infopage-error' => 'Error: {{#infopage}} sólo puede utilizarse en las páginas con prefijo.',
);

/** Estonian (eesti)
 * @author Pikne
 */
$messages['et'] = array(
	'wminc-infopage-enter' => 'mine esilehele',
	'wminc-unknownlang' => '(tundmatu keelekood)',
	'wminc-infopage-title-p' => '$1 Vikipeedia',
	'wminc-infopage-title-b' => '$1 Vikiõpikud',
	'wminc-infopage-title-t' => '$1 Vikisõnastik',
	'wminc-infopage-title-q' => '$1 Vikitsitaadid',
	'wminc-infopage-title-n' => '$1 Vikiuudised',
	'wminc-infopage-title-s' => '$1 Vikitekstid',
	'wminc-infopage-title-v' => '$1 Vikiülikool',
	'wminc-infopage-welcome' => 'Tere tulemast Wikimedia Inkubaatorisse. Tegu on Wikimedia Foundationi projektiga ([[{{MediaWiki:Aboutpage}}|teave]]).',
	'wminc-infopage-missingwiki-text' => '$1-projekt puudub seni selles keeles.',
	'wminc-infopage-option-startwiki' => "Kui soovid vikit alustada, läbi
'''[$3 need etapid]''' ja järgi [[{{MediaWiki:Wminc-manual-url}}|meie juhendit]].",
	'wminc-infopage-option-startsister' => 'Kui soovid seda vikit alustada, tee seda leheküljel <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Saad otsida [//www.$1.org $1-projekti olemasolevaid keeleversioone].',
	'wminc-infopage-option-sisterprojects-existing' => 'Saad otsida olemasolevaid samakeelseid projekte:',
	'wminc-infopage-option-sisterprojects-other' => 'Saad otsida teisi samakeelseid projekte:',
	'wminc-infopage-option-multilingual' => 'Teise võimalusena saad minna mitmekeelsetesse vikidesse:',
	'wminc-infopage-createmainpage' => 'Sisesta sõna "Esileht" selles keeles:',
	'wminc-infopage-contribute' => 'Kui oskad seda keelt, on sinu kaastöö oodatud!',
	'wminc-infopage-status-open' => 'See on avatud viki Wikimedia Inkubaatoris.',
	'wminc-infopage-status-imported' => 'See inkubaatori viki on pärast selle sulgemist imporditud asukohast $1.',
	'wminc-infopage-status-closedsister' => 'See alamdomeen suleti. Sellele vikile saad kaastööd teha asukohas <strong>$2</strong>.',
	'wminc-infopage-status-approved' => '[[meta:Special:MyLanguage/Language_committee|Keelekomitee]] on selle Inkubaatori-viki heaks kiitnud ja see luuakse peatselt.',
	'wminc-infopage-status-created' => 'Keelekomitee on selle projekti heaks kiitnud ja see on nüüd saadaval asukohas $1.',
	'wminc-infopage-status-beforeincubator' => 'Selle projektiga alustati enne Wikimedia Inkubaatori avamist ja see on saadaval asukohas $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'See projekt on saadaval asukohas $1.',
	'wminc-infopage-error' => 'Tõrge: {{#infopage}} on kasutatav ainult eesliitega lehekülgedel.',
);

/** Persian (فارسی)
 * @author Huji
 * @author Mjbmr
 * @author Pouyana
 * @author Reza1615
 */
$messages['fa'] = array(
	'wminc-infopage-enter' => 'رفتن به صفحهٔ اصلی',
	'wminc-unknownlang' => '(کد زبان ناشناخته)',
	'wminc-infopage-title-b' => 'ویکی‌نسک $1',
	'wminc-infopage-title-t' => 'ویکی‌واژه $1',
	'wminc-infopage-title-q' => 'ویکی‌گفتاورد $1',
	'wminc-infopage-title-n' => 'ویکی‌خبر $1',
	'wminc-infopage-title-s' => 'ویکی‌نبشته $1',
	'wminc-infopage-title-v' => 'ویکی‌دانشگاه $1',
	'wminc-infopage-title-y' => 'ویکی‌سفر $1',
	'wminc-infopage-welcome' => 'به ویکی‌رشد، پروژه‌ای از بنیاد ویکی‌مدیا خوش‌آمدید ([[{{MediaWiki:Aboutpage}}|درباره]])',
	'wminc-infopage-missingwiki-text' => 'یک $1 از این زبان، هنوز وجود ندارد.',
	'wminc-infopage-option-startwiki' => "اگر شما می‌خواهید این ویکی را شروع کنید،
'''[$3 این مراحل]''' و [[{{MediaWiki:Wminc-manual-url}}|راهنمای ما]] پیروی کنید.",
	'wminc-infopage-option-languages-existing' => 'شما می‌توانید به دنبال [//www.$1.org نسخه‌های زبان موجود از $1] بگردید.',
	'wminc-infopage-option-sisterprojects-existing' => 'شما می‌توانید به دنبال پروژه‌های موجود از این زبان بگردید:',
	'wminc-infopage-option-sisterprojects-other' => 'شما می‌توانید به دنبال پروژه‌های دیگر این زبان بگردید:',
	'wminc-infopage-option-multilingual' => 'همچنین، شما می‌توانید به ویکی چند زبانه بروید:',
	'wminc-infopage-createmainpage' => 'کلمه «صفحهٔ اصلی» برای این زبان را وارد کنید:',
	'wminc-infopage-contribute' => 'اگر شما این زبان را می‌دانید، شما به مشارکت در آن تشویق شده‌اید!',
	'wminc-infopage-status-imported' => 'این ویکی در حال رشد پس از بسته شدن از نشانی $1 وارد شده است.',
	'wminc-infopage-status-created' => 'این پروژه توسط کمیته زبان تصویب شده است و در نشانی $1 در دسترس است.',
	'wminc-infopage-status-beforeincubator' => 'این پروژه قبل از شروع ویکی‌رشد، ایجاد شده است و در نشانی $1 در دسترس است.',
);

/** Finnish (suomi)
 * @author Crt
 * @author Linnea
 * @author Nedergard
 * @author Nike
 * @author Olli
 * @author VezonThunder
 */
$messages['fi'] = array(
	'wminc-infopage-enter' => 'siirry etusivulle',
	'wminc-unknownlang' => '(tuntematon kielikoodi)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikikirjasto $1',
	'wminc-infopage-title-t' => 'Wikisanakirja $1',
	'wminc-infopage-title-q' => 'Wikisitaatit $1',
	'wminc-infopage-title-n' => 'Wikiuutiset $1',
	'wminc-infopage-title-s' => 'Wikiaineisto $1',
	'wminc-infopage-title-v' => 'Wikiopisto $1',
	'wminc-infopage-welcome' => 'Tervetuloa Wikimedia Hautomoon, Wikimedia Foundationin projektiin ([[{{MediaWiki:Aboutpage}}|tietoja]])',
	'wminc-infopage-missingwiki-text' => '$1-hanketta ei ole vielä tällä kielellä.',
	'wminc-infopage-option-startwiki' => 'Jos haluat aloittaa tämän wikin, voit [{{fullurl:{{FULLPAGENAME}}|action=edit}} luoda sivun] ja seurata [[{{MediaWiki:Wminc-manual-url}}|käsikirjamme ohjeita]].', # Fuzzy
	'wminc-infopage-option-startsister' => 'Jos haluat aloittaa tämän wikin, mene sivulle <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Voit etsiä [//www.$1.org sivuston $1 muita kieliversioita].',
	'wminc-infopage-option-sisterprojects-existing' => 'Voit etsiä nykyisiä hankkeita tällä kielellä:',
	'wminc-infopage-option-sisterprojects-other' => 'Voit etsiä muita hankkeita tällä kielellä:',
	'wminc-infopage-option-multilingual' => 'Voit siirtyä monikieliseen wikiin:', # Fuzzy
	'wminc-infopage-createmainpage' => 'Syötä sana "Etusivu" tällä kielellä:',
	'wminc-infopage-contribute' => 'Jos osaat tätä kieltä, muokkaa rohkeasti!',
	'wminc-infopage-status-open' => 'Tämä on Wikimedia Hautomon avoin wiki.',
	'wminc-infopage-status-imported' => 'Tämä Incubator-wiki on tuotu osoitteesta $1, kun wiki suljettiin.',
	'wminc-infopage-status-closedsister' => 'Tämä aliverkkotunnus on suljettu. Siirry osoitteeseen <strong>$2</strong>, jos haluat muokata wikiä.',
	'wminc-infopage-status-created' => 'Kielikomitea on hyväksynyt tämän projektin ja se on nyt saatavilla osoitteessa $1.',
	'wminc-infopage-status-beforeincubator' => 'Tämä projekti luotiin ennen kuin Wikimedia Incubator käynnistettiin ja se on saatavilla osoitteessa $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Tämä projekti on saatavilla osoitteessa $1.',
);

/** French (français)
 * @author Brunoperel
 * @author Crochet.david
 * @author DavidL
 * @author Gomoko
 * @author Hashar
 * @author Seb35
 * @author Tititou36
 * @author Urhixidur
 */
$messages['fr'] = array(
	'wminc-infopage-enter' => 'aller à la page d’accueil',
	'wminc-unknownlang' => '(code de langue inconnu)',
	'wminc-infopage-title-p' => 'Wikipédia en $1',
	'wminc-infopage-title-b' => 'Wikibooks en $1',
	'wminc-infopage-title-t' => 'Wiktionnaire en $1',
	'wminc-infopage-title-q' => 'Wikiquote en $1',
	'wminc-infopage-title-n' => 'Wikinews en $1',
	'wminc-infopage-title-s' => 'Wikisource en $1',
	'wminc-infopage-title-v' => 'Wikiversité en $1',
	'wminc-infopage-title-y' => 'Wikivoyage $1',
	'wminc-infopage-welcome' => 'Bienvenue sur l’Incubateur Wikimedia, un projet de la Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|à propos]])',
	'wminc-infopage-missingwiki-text' => '$1 n’existe pas encore dans cette langue.',
	'wminc-infopage-option-startwiki' => "Si vous voulez démarrer ce wiki, merci de suivre
'''[$3 ces étapes]''' et [[{{MediaWiki:Wminc-manual-url}}|notre manuel]].",
	'wminc-infopage-option-startsister' => 'Si vous voulez commencer ce wiki, vous pouvez vous rendre sur <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Vous pouvez chercher des [//www.$1.org versions linguistiques existantes de $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Vous pouvez chercher des projets existants dans cette langue :',
	'wminc-infopage-option-sisterprojects-other' => 'Vous pouvez chercher d’autres projets dans cette langue :',
	'wminc-infopage-option-multilingual' => 'À la place, vous pouvez aller vers un wiki multilingue:',
	'wminc-infopage-createmainpage' => 'Saisissez l’expression « Page d’accueil » dans cette langue :',
	'wminc-infopage-contribute' => 'Si vous parlez cette langue, vous êtes invités à contribuer !',
	'wminc-infopage-status-open' => 'Il s’agit d’un wiki ouvert de l’Incubateur Wikimedia.',
	'wminc-infopage-status-imported' => 'Ce wiki Incubateur a été importé depuis $1 après que le wiki ait été fermé.',
	'wminc-infopage-status-closedsister' => 'Ce sous-domaine a été fermé. Veuillez vous rendre sur <strong>$2</strong> pour contribuer à ce wiki.',
	'wminc-infopage-status-approved' => 'Ce wiki incubateur a été approuvé par le [[meta:Special:MyLanguage/Language_committee|Comité linguistique]] et sera bientôt créé.',
	'wminc-infopage-status-created' => 'Ce projet a été approuvé par le comité linguistique et est maintenant disponible sur $1.',
	'wminc-infopage-status-beforeincubator' => 'Ce projet, disponible sur $1, a été créé avant que l’Incubateur Wikimedia ait été lancé.',
	'wminc-infopage-status-beforeincubator-sister' => 'Ce projet est disponible sur $1 .',
	'wminc-infopage-error' => 'Erreur: {{#infopage}} ne peut être utilisé que sur des pages préfixées.',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'wminc-infopage-enter' => 'alar a la pâge principâla',
	'wminc-unknownlang' => '(code lengoua encognu)',
	'wminc-infopage-title-p' => 'Vouiquipèdia $1',
	'wminc-infopage-title-b' => 'Vouiquilévros $1',
	'wminc-infopage-title-t' => 'Vouiccionèro $1',
	'wminc-infopage-title-q' => 'Vouiquicitacions $1',
	'wminc-infopage-title-n' => 'Vouiquinovèles $1',
	'wminc-infopage-title-s' => 'Vouiquisôrsa $1',
	'wminc-infopage-title-v' => 'Vouiquivèrsitât $1',
	'wminc-infopage-welcome' => 'Benvegnua sur la Coviosa Wikimedia, un projèt de la Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|A propôs]])',
	'wminc-infopage-missingwiki-text' => '$1 dens cela lengoua ègziste pas.',
	'wminc-infopage-option-startwiki' => 'Se vos voléd emmodar cél vouiqui,
vos pouede [{{fullurl:{{FULLPAGENAME}}|action=edit}} fâre la pâge] et pués siuvre [[{{MediaWiki:Wminc-manual-url}}|noutron manuâl]].', # Fuzzy
	'wminc-infopage-option-languages-existing' => 'Vos pouede chèrchiér des [//www.$1.org vèrsions lengouistiques ègzistentes de $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Vos pouede chèrchiér des projèts ègzistents dens cela lengoua :',
	'wminc-infopage-option-sisterprojects-other' => 'Vos pouede chèrchiér d’ôtros projèts dens cela lengoua :',
	'wminc-infopage-option-multilingual' => 'Vos pouede alar vers un vouiqui multilingo :', # Fuzzy
	'wminc-infopage-createmainpage' => 'Buchiéd lo mot « Pâge principâla » dens voutra lengoua :',
	'wminc-infopage-status-imported' => 'Ceti vouiqui Covosa at étâ importâ dês $1 aprés que lo vouiqui èye étâ cllôs.',
	'wminc-infopage-status-created' => 'Ceti projèt at étâ aprovâ per lo comitât lengouistico et est ora disponiblo dessus $1.',
	'wminc-infopage-status-beforeincubator' => 'Ceti projèt at étâ fêt aprés que la Covosa Wikimedia èye étâ lanciê et est disponiblo dessus $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Ceti projèt est disponiblo dessus $1.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'wminc-infopage-enter' => 'ir á páxina principal',
	'wminc-unknownlang' => '(código de lingua descoñecido)',
	'wminc-infopage-title-p' => 'Wikipedia en $1',
	'wminc-infopage-title-b' => 'Wikibooks en $1',
	'wminc-infopage-title-t' => 'Wiktionary en $1',
	'wminc-infopage-title-q' => 'Wikiquote en $1',
	'wminc-infopage-title-n' => 'Wikinews en $1',
	'wminc-infopage-title-s' => 'Wikisource en $1',
	'wminc-infopage-title-v' => 'Wikiversity en $1',
	'wminc-infopage-title-y' => 'Wikivoyage en $1',
	'wminc-infopage-welcome' => 'Benvido á Incubadora da Wikimedia, un proxecto da Fundación Wikimedia ([[{{MediaWiki:Aboutpage}}|acerca de]])',
	'wminc-infopage-missingwiki-text' => 'Aínda non existe $1 nesta lingua.',
	'wminc-infopage-option-startwiki' => "Se quere comezar este wiki, siga
'''[$3 estes pasos]''' e mais [[{{MediaWiki:Wminc-manual-url}}|o noso manual]].",
	'wminc-infopage-option-startsister' => 'Se quere comezar este wiki, pode ir a <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Pode ollar [//www.$1.org as linguas nas que hai $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Pode ollar os proxectos que hai nesta lingua:',
	'wminc-infopage-option-sisterprojects-other' => 'Pode ollar outros proxectos que hai nesta lingua:',
	'wminc-infopage-option-multilingual' => 'Como alternativa, pode ir a un wiki multilingüe:',
	'wminc-infopage-createmainpage' => 'Escriba as palabras "Páxina principal" nesta lingua:',
	'wminc-infopage-contribute' => 'Se coñece esta lingua, animámolo a contribuír!',
	'wminc-infopage-status-open' => 'Este é un wiki aberto da Incubadora da Wikimedia.',
	'wminc-infopage-status-imported' => 'Este wiki da Incubadora foi importado desde $1 despois de que o wiki pechase.',
	'wminc-infopage-status-closedsister' => 'Este subdominio foi pechado. Vaia a <strong>$2</strong> para contribuír neste wiki.',
	'wminc-infopage-status-approved' => 'O [[meta:Special:MyLanguage/Language_committee|comité de linguas]] aprobou este wiki da Incubadora. Axiña ha estar dispoñible.',
	'wminc-infopage-status-created' => 'O comité de linguas aprobou este proxecto. Agora está dispoñible en $1.',
	'wminc-infopage-status-beforeincubator' => 'Este proxecto foi creado antes ca a Incubadora da Wikimedia e está dispoñible en $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Este proxecto está dispoñible en $1.',
	'wminc-infopage-error' => 'Erro: {{#infopage}} pódese utilizar unicamente nas páxinas con prefixo.',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 */
$messages['grc'] = array(
	'wminc-infopage-title-p' => 'Βικιπαιδεία $1',
	'wminc-infopage-title-b' => 'Βικιβιβλία $1',
	'wminc-infopage-title-t' => 'Βικιλεξικόν $1',
	'wminc-infopage-title-q' => 'Βικιφθέγματα $1',
	'wminc-infopage-title-n' => 'Βικιεπίκαιρα $1',
	'wminc-infopage-title-s' => 'Βικιθήκη $1',
	'wminc-infopage-title-v' => 'Βικιεπιστήμιον $1',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 */
$messages['gsw'] = array(
	'wminc-infopage-enter' => 'Gang uff d Hauptsyte',
	'wminc-unknownlang' => '(unbekannts Sproochechürzel)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
	'wminc-infopage-title-t' => 'Wiktionary $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikinews $1',
	'wminc-infopage-title-s' => 'Wikisource $1',
	'wminc-infopage-title-v' => 'Wikiversity $1',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author חיים
 */
$messages['he'] = array(
	'wminc-infopage-enter' => 'אל הדף הראשי',
	'wminc-unknownlang' => '(קוד שפה לא ידוע)',
	'wminc-infopage-title-p' => 'ויקיפדיה ב{{GRAMMAR:תחילית|$1}}',
	'wminc-infopage-title-b' => 'ויקיספר ב{{GRAMMAR:תחילית|$1}}',
	'wminc-infopage-title-t' => 'ויקימילון ב{{GRAMMAR:תחילית|$1}}',
	'wminc-infopage-title-q' => 'ויקיציטוט ב{{GRAMMAR:תחילית|$1}}',
	'wminc-infopage-title-n' => 'ויקיחדשות ב{{GRAMMAR:תחילית|$1}}',
	'wminc-infopage-title-s' => 'ויקיטקסט ב{{GRAMMAR:תחילית|$1}}',
	'wminc-infopage-title-v' => 'ויקיברסיטה ב{{GRAMMAR:תחילית|$1}}',
	'wminc-infopage-title-y' => 'ויקימסע ב$1',
	'wminc-infopage-welcome' => 'ברוכים הבאים לאינקובטור של ויקימדיה, מיזם של קרן ויקימדיה ([[{{MediaWiki:Aboutpage}}|אודות]])',
	'wminc-infopage-missingwiki-text' => 'מיזם $1 בשפה הזאת טרם נוצר.',
	'wminc-infopage-option-startwiki' => "אם אתם רוצים להתחיל את הוויקי הזה, נא לבצע את מה שכתוב
ב'''[$3 הצעדים האלה]''' וב[[{{MediaWiki:Wminc-manual-url}}|ספר ההוראות שלנו]].",
	'wminc-infopage-option-startsister' => 'אם אתם רוצים להתחיל את הוויקי הזה, תוכלו ללכת ל־<strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'אפשר לחפש [//www.$1.org מהדורות לשוניות קיימות של $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'אפשר לחפש מיזמים קיימים בשפה הזאת:',
	'wminc-infopage-option-sisterprojects-other' => 'אפשר לחפש מיזמים אחרים בשפה הזאת:',
	'wminc-infopage-option-multilingual' => 'לחלופין, באפשרותך לעבור אל ויקי רב לשוני:',
	'wminc-infopage-createmainpage' => 'כתבו את המילה "דף ראשי" בשפתכם:',
	'wminc-infopage-contribute' => 'אם אתם יודעים את השפה הזאת, אנו מפצירים בכם לתרום למיזם!',
	'wminc-infopage-status-open' => 'זהו ויקי פתוח באינקובטור של ויקימדיה.',
	'wminc-infopage-status-imported' => 'ויקי האינקובטור הזה יובא מ{{GRAMMAR:תחילית|$1}} אחרי שהוויקי ההוא נסגר.',
	'wminc-infopage-status-closedsister' => 'התת־מתחם הזה נסגר. לכו אל <strong>$2</strong> כדי לתרום לוויקי הזה.',
	'wminc-infopage-status-approved' => 'הוויקי הזה, שנמצא עכשיו באינקובטור, אושר על־ידי [[meta:Special:MyLanguage/Language_committee|הוועדה הלשונית]] וייווצר בקרוב.',
	'wminc-infopage-status-created' => 'הוועדה הלשונית אישרה את המיזם הזה ואפשר למצוא אותו ב{{GRAMMAR:תחילית|$1}}.',
	'wminc-infopage-status-beforeincubator' => 'המיזם הזה נוצר לפני שהוקם האינקובטור של ויקימדיה והוא זמין ב{{GRAMMAR:תחילית|$1}}.',
	'wminc-infopage-status-beforeincubator-sister' => 'המיזם הזה זמין בדף $1.',
	'wminc-infopage-error' => 'שגיאה: אפשר להשתמש ב־<span dir="ltr">{{#infopage}}</span> רק בדפים עם תחילית.',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Vibhijain
 */
$messages['hi'] = array(
	'wminc-infopage-enter' => 'मुख्य पृष्ठ पर जाएँ',
	'wminc-infopage-title-p' => 'विकिपीड़िया $1',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'wminc-infopage-enter' => 'dźi k hłownej stronje',
	'wminc-unknownlang' => '(njeznaty rěčny kod)',
	'wminc-infopage-title-p' => 'Wikipedija $1',
	'wminc-infopage-title-b' => 'Wikiknihi $1',
	'wminc-infopage-title-t' => 'Wikisłownik $1',
	'wminc-infopage-title-q' => 'Wikicitat $1',
	'wminc-infopage-title-n' => 'Wikinowinki $1',
	'wminc-infopage-title-s' => 'Wikižórło $1',
	'wminc-infopage-title-v' => 'Wikiwersita $1',
	'wminc-infopage-title-y' => 'Wikivoyage $1',
	'wminc-infopage-welcome' => 'Witaj do inkubatora Wikimedije, projekt załožby Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|Wo]])',
	'wminc-infopage-missingwiki-text' => '$1 w tutej rěči hišće njeeksistuje.',
	'wminc-infopage-option-startwiki' => "Jeli chceš tutón wiki startować,
prošu slěduj '''[$3 tute kroki]''' a [[{{MediaWiki:Wminc-manual-url}}|naš nawod]].",
	'wminc-infopage-option-startsister' => 'Jeli chceš tutón wiki startować, móžeš k <strong>[$2 $1]</strong> hić.',
	'wminc-infopage-option-languages-existing' => 'Móžeš za [//www.$1.org eksistowacymi rěčnymi wudaćemi projekta $1] pytać.',
	'wminc-infopage-option-sisterprojects-existing' => 'Móžeš za eksistowacymi projektami w tutej rěči pytać:',
	'wminc-infopage-option-sisterprojects-other' => 'Móžeš za druhimi projektami w tutej rěči pytać:',
	'wminc-infopage-option-multilingual' => 'Alternatiwnje móžeš k wjacerěčnemu wikijej hić:',
	'wminc-infopage-createmainpage' => 'Zapodaj wuraz za "Hłowna strona" w tutej rěči:',
	'wminc-infopage-contribute' => 'Jeli tutu rěč wobknježiš, budź witany a čiń sobu!',
	'wminc-infopage-status-open' => 'To je wotewrjeny wiki na Wikimedia Incubator.',
	'wminc-infopage-status-imported' => 'Tutón wiki inkubatora je so z $1 importował, po tym zo bě so wiki začinił.',
	'wminc-infopage-status-closedsister' => 'Tuta poddomena je so začiniła. Dźi k <strong>$2</strong>, zo by k tutomu wikijej přinošował.',
	'wminc-infopage-status-approved' => 'Tutón Inkubatorowy wiki je so wot [[meta:Special:MyLanguage/Language_committee|rěčneho komiteja]] schwalił a budźe so bórze wutworjeć.',
	'wminc-infopage-status-created' => 'Tutón projekt je so wot rěčneho komiteja schwalił a steji nětko pod $1 k dispoziciji.',
	'wminc-infopage-status-beforeincubator' => 'Tutón projekt je so wutworił, prjedy hač inkubator Wikimedije je so startował a steji pod $1 k dispoziciji.',
	'wminc-infopage-status-beforeincubator-sister' => 'Tutón projekt steji pod $1 k dispoziciji.',
	'wminc-infopage-error' => 'Zmylk: {{#infopage}} da so jenož na stronach wužiwać, kotrež prefiks maja.',
);

/** 湘语 (湘语)
 * @author YulouCN
 */
$messages['hsn'] = array(
	'wminc-infopage-title-p' => '維基百科 $1',
	'wminc-infopage-title-b' => '維基課本 $1',
	'wminc-infopage-title-t' => '維基詞典 $1',
	'wminc-infopage-title-q' => '維基語錄 $1',
	'wminc-infopage-title-n' => '維基要聞 $1',
	'wminc-infopage-title-s' => '維基藏書樓 $1',
	'wminc-infopage-title-v' => '維基學堂 $1',
);

/** Hungarian (magyar)
 * @author Dj
 * @author Xbspiro
 */
$messages['hu'] = array(
	'wminc-infopage-enter' => 'Tovább',
	'wminc-unknownlang' => '(ismeretlen nyelvkód)',
	'wminc-infopage-title-p' => '$1 Wikipédia',
	'wminc-infopage-title-b' => '$1 Wikikönyvek',
	'wminc-infopage-title-t' => '$1 Wikiszótár',
	'wminc-infopage-title-q' => '$1 Wikidézet',
	'wminc-infopage-title-n' => '$1 Wikihírek',
	'wminc-infopage-title-s' => '$1 Wikiforrás',
	'wminc-infopage-title-v' => '$1 Wikiegyetem',
	'wminc-infopage-welcome' => 'Üdvözöljük a Wikimédia Inkubátorban, amely a Wikimédia Alapítvány projektje ([[{{MediaWiki:Aboutpage}}|Névjegy]])',
	'wminc-infopage-missingwiki-text' => '$1 nem létezik ezen a nyelven.',
	'wminc-infopage-option-startwiki' => 'Ha el akarod kezdeni ezt a wikit,
[{{fullurl:{{FULLPAGENAME}}|action=edit}} hozd létre az oldalt] és kövesd a [[{{MediaWiki:Wminc-manual-url}}|felhasználói kézikönyvet]].', # Fuzzy
	'wminc-infopage-option-startsister' => 'Ha el akarod kezdeni ezt a wikit, menj ide: <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Keresheted [//www.$1.org $1 létező nyelvi változatát].',
	'wminc-infopage-option-sisterprojects-existing' => 'Kereshetsz létező projekteket ezen a nyelven:',
	'wminc-infopage-option-sisterprojects-other' => 'Kereshetsz más projekteket ezen a nyelven:',
	'wminc-infopage-option-multilingual' => 'Mehetsz egy többnyelvű wikibe:', # Fuzzy
	'wminc-infopage-createmainpage' => 'Add meg a „Főoldal” nevét ezen a nyelven:',
	'wminc-infopage-contribute' => 'Ha ismered ezt a nyelvet, akkor bátran működj közre a szerkesztésben!',
	'wminc-infopage-status-imported' => 'Ez az Inkubátor wiki innen lett importálva, miután lezárásra került: $1.',
	'wminc-infopage-status-closedsister' => 'Ez az aldomén lezárva. Az alábbi helyen tudsz közreműködni: <strong>$2</strong>.',
	'wminc-infopage-status-created' => 'Ez a projekt a nyelvi bizottság által elfogadásra került és most hozzáférhető itt: $1.',
	'wminc-infopage-status-beforeincubator' => 'Ez a projekt a Wikimedia Inkubátor előtt indult és elérhet itt: $1.',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'wminc-infopage-enter' => 'vader al pagina principal',
	'wminc-unknownlang' => '(codice de lingua incognite)',
	'wminc-infopage-title-p' => 'Wikipedia in $1',
	'wminc-infopage-title-b' => 'Wikibooks in $1',
	'wminc-infopage-title-t' => 'Wiktionary in $1',
	'wminc-infopage-title-q' => 'Wikiquote in $1',
	'wminc-infopage-title-n' => 'Wikinews in $1',
	'wminc-infopage-title-s' => 'Wikisource in $1',
	'wminc-infopage-title-v' => 'Wikiversity in $1',
	'wminc-infopage-welcome' => 'Benvenite a Wikimedia Incubator, un projecto del Fundation Wikimedia ([[{{MediaWiki:Aboutpage}}|a proposito]])',
	'wminc-infopage-missingwiki-text' => 'Un $1 in iste lingua non existe ancora.',
	'wminc-infopage-option-startwiki' => 'Si tu vole comenciar iste wiki,
tu pote [{{fullurl:{{FULLPAGENAME}}|action=edit}} crear le pagina] e sequer [[{{MediaWiki:Wminc-manual-url}}|nostre manual]].', # Fuzzy
	'wminc-infopage-option-startsister' => 'Si tu vole comenciar iste wiki, tu pote vader a <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Tu pote cercar [//www.$1.org existente editiones de lingua de $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Tu pote cercar projectos existente in iste lingua:',
	'wminc-infopage-option-sisterprojects-other' => 'Tu pote cercar altere projectos in iste lingua:',
	'wminc-infopage-option-multilingual' => 'Tu pote vader a un wiki multilingue:', # Fuzzy
	'wminc-infopage-createmainpage' => 'Entra le parola(s) pro "pagina principal" in iste lingua:',
	'wminc-infopage-contribute' => 'Si tu cognosce iste lingua, tu es incoragiate a contribuer!',
	'wminc-infopage-status-open' => 'Isto es un wiki aperte de Wikimedia Incubator.',
	'wminc-infopage-status-imported' => 'Iste wiki incubator ha essite importate ex $1 post le clausura del wiki.',
	'wminc-infopage-status-closedsister' => 'Iste subdominio ha essite claudite. Vade a <strong>$2</strong> pro contribuer a iste wiki.',
	'wminc-infopage-status-approved' => 'Iste wiki incubator ha essite approbate per le [[meta:Special:MyLanguage/Language_committee|comité de linguas]] e essera create tosto.',
	'wminc-infopage-status-created' => 'Iste projecto ha essite approbate per le comité linguistic e es ora disponibile a $1.',
	'wminc-infopage-status-beforeincubator' => 'Iste projecto ha essite create ante le comenciamento de Wikimedia Incubator e es disponibile a $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Iste projecto es disponibile a $1.',
	'wminc-infopage-error' => 'Error: {{#infopage}} pote esser usate solmente in paginas con prefixo.',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 */
$messages['id'] = array(
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
	'wminc-infopage-title-t' => 'Wiktionary $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikinews $1',
	'wminc-infopage-title-s' => 'Wikisource $1',
	'wminc-infopage-title-v' => 'Wikiversity $1',
	'wminc-infopage-title-y' => 'Wikivoyage $1',
	'wminc-infopage-welcome' => 'Selamat datang di Wikimedia Incubator, sebuah proyek dari Wikimedia Foundation ([[{{MediaWiki:Aboutpage}} |Tentang]])', # Fuzzy
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 * @author Nemo bis
 */
$messages['it'] = array(
	'wminc-infopage-enter' => 'vai alla pagina principale',
	'wminc-unknownlang' => '(codice lingua sconosciuto)',
	'wminc-infopage-title-p' => 'Wikipedia in $1',
	'wminc-infopage-title-b' => 'Wikibooks in $1',
	'wminc-infopage-title-t' => 'Wiktionary in $1',
	'wminc-infopage-title-q' => 'Wikiquote in $1',
	'wminc-infopage-title-n' => 'Wikinews in $1',
	'wminc-infopage-title-s' => 'Wikisource in $1',
	'wminc-infopage-title-v' => 'Wikiversity in $1',
	'wminc-infopage-title-y' => 'Wikivoyage in $1',
	'wminc-infopage-welcome' => 'Benvenuto nel Wikimedia Incubator, un progetto della Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|informazioni]])',
	'wminc-infopage-missingwiki-text' => '$1 in questa lingua non esiste ancora.',
	'wminc-infopage-option-startwiki' => "Se si desidera cominciare questo wiki, si prega di seguire '''[$3 questi passi]''' e [[{{MediaWiki:Wminc-manual-url}}|il manuale]].",
	'wminc-infopage-option-startsister' => 'Se vuoi cominciare questo wiki, puoi andare in <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Puoi fare una ricerca nelle [//www.$1.org versioni linguistiche di $1 esistenti].',
	'wminc-infopage-option-sisterprojects-existing' => 'Puoi cercare nei progetti esistenti in questa lingua:',
	'wminc-infopage-option-sisterprojects-other' => 'Puoi cercare altri progetti in questa lingua:',
	'wminc-infopage-option-multilingual' => 'In alternativa, puoi andare in un wiki multilingue:',
	'wminc-infopage-createmainpage' => 'Inserisci la traduzione di "Pagina principale" in questa lingua:',
	'wminc-infopage-contribute' => 'Se conosci questa lingua, sei invitato a contribuire!',
	'wminc-infopage-status-open' => 'Questo è un wiki aperto di Wikimedia Incubator.',
	'wminc-infopage-status-imported' => 'Questo wiki di Incubator è stato importato da $1 dopo che il wiki era stato chiuso.',
	'wminc-infopage-status-closedsister' => 'Questo sottodominio è stato chiuso. Vai a <strong>$2</strong> per partecipare a questo wiki.',
	'wminc-infopage-status-approved' => 'Questo wiki di Incubator è stato approvato dal [[meta:Special:MyLanguage/Language_committee|comitato linguistico]] e sarà creato presto.',
	'wminc-infopage-status-created' => "Questo progetto è stato approvato dal language committee ed è ora disponibile all'indirizzo $1",
	'wminc-infopage-status-beforeincubator' => "Questo progetto è stato creato prima della nascita di Wikimedia Incubator ed è disponibile all'indirizzo $1.",
	'wminc-infopage-status-beforeincubator-sister' => "Questo progetto è disponibile all'indirizzo $1.",
	'wminc-infopage-error' => 'Errore: {{#infopage}} può essere utilizzato solo su pagine con prefisso.',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Penn Station
 * @author Shirayuki
 */
$messages['ja'] = array(
	'wminc-infopage-enter' => 'メインページに戻る',
	'wminc-unknownlang' => '(不明な言語コード)',
	'wminc-infopage-title-p' => 'ウィキペディア$1',
	'wminc-infopage-title-b' => 'ウィキブックス$1',
	'wminc-infopage-title-t' => 'ウィクショナリー$1',
	'wminc-infopage-title-q' => 'ウィキクォート$1',
	'wminc-infopage-title-n' => 'ウィキニュース$1',
	'wminc-infopage-title-s' => 'ウィキソース$1',
	'wminc-infopage-title-v' => 'ウィキバーシティ$1',
	'wminc-infopage-title-y' => 'Wikivoyage$1',
	'wminc-infopage-welcome' => 'ウィキペディアインキュベーターにようこそ。これはウィキメディア財団([[{{MediaWiki:Aboutpage}}|About]])のプロジェクトです',
	'wminc-infopage-missingwiki-text' => 'この言語の$1はまだありません。',
	'wminc-infopage-option-startwiki' => "このウィキを開始したい場合は、'''[$3 これらの手順]'''と[[{{MediaWiki:Wminc-manual-url}}|マニュアル]]に従ってください。",
	'wminc-infopage-option-startsister' => 'このウィキを開始したい場合は、<strong>[$2 $1]</strong> に移動してください。',
	'wminc-infopage-option-languages-existing' => '[//www.$1.org 既存の言語版の$1]を検索できます。',
	'wminc-infopage-option-sisterprojects-existing' => 'この言語の既存のプロジェクトを検索できます:',
	'wminc-infopage-option-sisterprojects-other' => 'この言語の他のプロジェクトを検索できます:',
	'wminc-infopage-option-multilingual' => '多言語のウィキも利用できます:',
	'wminc-infopage-createmainpage' => '「Main Page」をこの言語で入力してください:',
	'wminc-infopage-contribute' => 'この言語を知っている場合は、貢献することをお勧めします!',
	'wminc-infopage-status-open' => 'これはウィキメディアインキュベーターのオープンなウィキです。',
	'wminc-infopage-status-imported' => 'このインキュベーターウィキは、ウィキの閉鎖後に $1 から取り込まれました。',
	'wminc-infopage-status-closedsister' => 'このサブドメインは閉鎖されました。このウィキに貢献するにはこちら: <strong>$2</strong>',
	'wminc-infopage-status-approved' => 'このインキュベーターウィキは[[meta:Special:MyLanguage/Language_committee|言語委員会]]によって承認されており、近いうちに作成されます。',
	'wminc-infopage-status-created' => 'このプロジェクトは言語委員会によって承認されており、$1 でアクセスできます。',
	'wminc-infopage-status-beforeincubator' => 'このプロジェクトはウィキメディアインキュベーターの開始以前に作成されました。$1 で利用できます。',
	'wminc-infopage-status-beforeincubator-sister' => 'このプロジェクトは $1 で利用できます。',
	'wminc-infopage-error' => 'エラー: {{#infopage}} は接頭辞付きのページでのみ使用できます。',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'wminc-infopage-enter' => 'მთავარ გვერდზე გადასვლა',
	'wminc-unknownlang' => '(უცნობი ენის კოდი)',
	'wminc-infopage-title-p' => 'ვიკიპედია $1',
	'wminc-infopage-title-b' => 'ვიკიწიგნები $1',
	'wminc-infopage-title-t' => 'ვიქსიკონი $1',
	'wminc-infopage-title-q' => 'ვიკიციტატა $1',
	'wminc-infopage-title-n' => 'ვიკისიახლენი $1',
	'wminc-infopage-title-s' => 'ვიკიწყარო $1',
	'wminc-infopage-title-v' => 'ვიკივერსიტეტი $1',
	'wminc-infopage-title-y' => 'ვიკივოიაჟი $1',
	'wminc-infopage-welcome' => 'კეთილი იყოს თქვენი მობრძანება ვიკიმედიის ინკუბატორში, ფონდი ვიკიმედიის პროექტი ([[{{MediaWiki:Aboutpage}}|პროექტის შესახებ]])',
	'wminc-infopage-missingwiki-text' => '$1 ამ ენაზე ჯერ არ არსებობს.',
	'wminc-infopage-option-startwiki' => "თუ თქვენ გსურთ დაიწყოთ ეს ვიკი, გთხოვთ შეასრულოთ
'''[$3 შემდეგი ნაბიჯები]''' და მიჰყვეთ [[{{MediaWiki:Wminc-manual-url}}|ჩვენ სახელმძღვანელოს]].",
	'wminc-infopage-option-startsister' => 'თუ თქვენ გსურთ ამ ვიკის დაწყება, თქვენ სეგიძლიათ გადახვიდეთ <strong>[ $2  $1 ] </strong>-თან.',
	'wminc-infopage-option-languages-existing' => 'თქვენ შეგიძლიათ მოძებნოთ [//www.$1.org არსებული ენობრივი განყოფილებები $1-თვის].',
	'wminc-infopage-option-sisterprojects-existing' => 'თქვენ შეგიძლიათ მოძებნოთ არსებული პროექტები ამ ენაზე:',
	'wminc-infopage-option-sisterprojects-other' => 'თქვენ შეგიძლიათ მოძებნოთ სხვა პროექტები ამ ენაზე:',
	'wminc-infopage-option-multilingual' => 'გარდა ამისა, თქვენ შეგიძლიათ გადახვიდეთ მრავალენოვან ვიკი-პროექტებზე:',
	'wminc-infopage-createmainpage' => 'შეიყვანეთ სიტყვა „მთავარი გვერდი“ ამ ენაზე:',
	'wminc-infopage-contribute' => 'თუ თქვენ გესმით ეს ენა, თქვენ შეგიძლიათ წვლილი შეიტანოთ მასში!',
	'wminc-infopage-status-open' => 'ეს არის ღია ვიკი ვიკიმედიის ინკუბატორში.',
	'wminc-infopage-status-imported' => 'ეს ვიკი გადმოტანილ იქნა ინკუბატორში პროექტიდან „$1“ მისი დახურვის შემდეგ.',
	'wminc-infopage-status-closedsister' => 'ეს ქვედომენი დაიხურა. გადადით <strong>$2</strong>-ზე რათა შეიტანოთ თქვენი წვლილი ამ ვიკიში.',
	'wminc-infopage-status-approved' => 'ეს ინკუბატორის ვიკი დაამტკიცა [[meta:Special:MyLanguage/Language_committee|ენის კომიტეტმა]] და ის მალე შეიქმნება.',
	'wminc-infopage-status-created' => 'ეს პროექტი დაამტკიცა ენის კომიტეტმა და ახლა ის ხელმისაწვდომია მისამართზე $1.',
	'wminc-infopage-status-beforeincubator' => 'ვიკიმედიის ინკუბატორის გაშვებამდე შექმნილი ეს პროექტი ხელმისაწვდომია მისამართზე $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'ეს პროექტი ხელმისაწვდომია მისამართზე $1.',
);

/** Khowar (کھوار)
 * @author Rachitrali
 */
$messages['khw'] = array(
	'wminc-infopage-enter' => 'آویلو صفحا بوغے',
	'wminc-unknownlang' => 'نامعلوم زبانو کوڈ',
	'wminc-infopage-title-p' => '$1 ویکیپیڈیا',
	'wminc-infopage-title-b' => '$1 ویکی کتاب',
	'wminc-infopage-title-t' => '$1 وکشنری',
	'wminc-infopage-title-q' => '$1 ویکی اقتباس',
	'wminc-infopage-title-n' => 'ویکی خبار $1',
	'wminc-infopage-title-s' => 'ویکی سورس $1',
	'wminc-infopage-title-v' => 'ویکی یونیورسٹی $1',
	'wminc-infopage-welcome' => 'ویکیپیڈیا اینکوبیٹرا رحمت عزیز چترالی پساتے خوشان گیور ریران, ویکی میڈیا فاونڈیشن اوچے کھوار اکیڈمیو ای کھوار پروجیکٹ ([[{{MediaWiki:Aboutpage}}|About]])',
);

/** Korean (한국어)
 * @author Albamhandae
 * @author Hym411
 * @author 아라
 */
$messages['ko'] = array(
	'wminc-infopage-enter' => '대문으로 가기',
	'wminc-unknownlang' => '(알 수 없는 언어 코드)',
	'wminc-infopage-title-p' => '위키백과 $1',
	'wminc-infopage-title-b' => '위키책 $1',
	'wminc-infopage-title-t' => '위키낱말사전 $1',
	'wminc-infopage-title-q' => '위키인용집 $1',
	'wminc-infopage-title-n' => '위키뉴스 $1',
	'wminc-infopage-title-s' => '위키문헌 $1',
	'wminc-infopage-title-v' => '위키배움터 $1',
	'wminc-infopage-title-y' => '위키여행 $1',
	'wminc-infopage-welcome' => '위키미디어 재단의 프로젝트인 위키미디어 인큐베이터에 오신 것을 환영합니다 ([[{{MediaWiki:Aboutpage}}|소개]])',
	'wminc-infopage-missingwiki-text' => '이 언어에서 $1 프로젝트가 아직 존재하지 않습니다.',
	'wminc-infopage-option-startwiki' => "이 위키를 시작하고자 한다면,
'''[$3 다음 단계]'''와 [[{{MediaWiki:Wminc-manual-url}}|매뉴얼]]을 따르세요.",
	'wminc-infopage-option-startsister' => '이 위키를 시작하기를 원한다면, <strong>[$2 $1]</strong>로 갈 수 있습니다.',
	'wminc-infopage-option-languages-existing' => '[//www.$1.org $1의 기존 언어 편집자]에 대해 검색할 수 있습니다.',
	'wminc-infopage-option-sisterprojects-existing' => '이 언어의 기존 프로젝트를 찾을 수 있습니다:',
	'wminc-infopage-option-sisterprojects-other' => '이 언어에서 기타 프로젝트에 대해 검색할 수 있습니다:',
	'wminc-infopage-option-multilingual' => '또는 다국어 위키로 갈 수 있습니다:',
	'wminc-infopage-createmainpage' => '이 언어에서 "Main Page"에 대한 단어를 입력하세요:',
	'wminc-infopage-contribute' => '이 시험판에 쓰여진 언어를 아신다면, 기여를 부탁드립니다!',
	'wminc-infopage-status-open' => '위키미디어 인큐베이터의 열린 위키입니다.',
	'wminc-infopage-status-imported' => '이 인큐베이터 위키는 $1이 폐쇄된 후 $1에서 가져왔습니다.',
	'wminc-infopage-status-closedsister' => '이 서브도메인은 닫혔습니다. 이 위키에 기여하려면 <strong>$2</strong>로 가세요.',
	'wminc-infopage-status-approved' => '이 인큐베이터는 [[meta:Special:MyLanguage/Language_committee|언어 위원회]]에 의해 승인되었고 곧 만들어질 것입니다.',
	'wminc-infopage-status-created' => '이 프로젝트는 언어 위원회의 승인을 받았으며 지금 $1에 존재합니다.',
	'wminc-infopage-status-beforeincubator' => '이 프로젝트는 위키미디어 인큐베이터가 시작하기 전에 만들어졌으며 $1에 존재합니다.',
	'wminc-infopage-status-beforeincubator-sister' => '이 프로젝트는 $1에 존재합니다.',
	'wminc-infopage-error' => '오류: {{#infopage}} 문서는 접두어 문서로만 사용할 수 있습니다.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'wminc-infopage-enter' => 'jangk op de Houpsigg',
	'wminc-unknownlang' => '(Schprooche-Köözel onbikannt)',
	'wminc-infopage-title-p' => 'Wikkipedija op $1',
	'wminc-infopage-title-b' => 'Bööscherwiki op $1',
	'wminc-infopage-title-t' => 'Wikiwööterbooch op $1',
	'wminc-infopage-title-q' => 'Zitaatewiki op $1',
	'wminc-infopage-title-n' => 'Neujeschkeitewiki op $1',
	'wminc-infopage-title-s' => 'Quällewiki op $1',
	'wminc-infopage-title-v' => 'Wikiväsitääd op $1',
	'wminc-infopage-title-y' => 'Op-Jöck-Wiki op $1',
	'wminc-infopage-welcome' => 'Wellkumme em Wikimedia Inkubator, enem Projäk vun der [[{{MediaWiki:Aboutpage}}|Wikimedija Schteftong]]',
	'wminc-infopage-missingwiki-text' => '{{ucfirst:{{GRAMMAR:e|{{ucfirst:$1}}}}}} en dä Schprooch jidd et noch nit.', # Fuzzy
	'wminc-infopage-option-startwiki' => 'Wann De met heh dämm Wiki loßlääje wells, donn Desch aan [$3 di Schredde] un aan [[{{MediaWiki:Wminc-manual-url}}|ons Aanleidong]] hallde.',
	'wminc-infopage-option-startsister' => 'Wann de met heh däm Wiki aanfange wells, kanns De noh <strong>[$2 $1]</strong> jonn.',
	'wminc-infopage-option-languages-existing' => 'Do kanns noh [//www.$1.org Schprooche_Ußjaabe {{GRAMMAR:vum|{{ucfirst:$1}}}} söhke].',
	'wminc-infopage-option-sisterprojects-existing' => 'Do kanns noh Projäkte en heh dä Schprooch söhke, di et ald jitt:',
	'wminc-infopage-option-sisterprojects-other' => 'Do kanns noh ander Projäkte en heh dä Schprooch söhke:',
	'wminc-infopage-option-multilingual' => 'Do kanns ävver och noh enem Wiki en ätlijje Schprooche jonn:',
	'wminc-infopage-createmainpage' => 'Jif dat Woot för „Houpsigg“ en dä Shprooch en:',
	'wminc-infopage-contribute' => 'Wann De di Shprooch kanns, dann bes De opjeroofe, beizedraare!',
	'wminc-infopage-status-open' => 'Dat heh es e offe Wiki om Wikimeedija <i lang="en">Incubator</i>.',
	'wminc-infopage-status-imported' => 'Dat Wiki heh es en der Wikimeedija <i lang="en">Incubator</i> vun $1 empotteet woode, nohdämm et doh zohjemaat woode wohr.',
	'wminc-infopage-status-closedsister' => 'Di Ongerdomäjn es zohjemaat. Jangk noh <strong>$2</strong>, öm en dämm Wiki heh jät ze donn.',
	'wminc-infopage-status-approved' => 'Heh dat Wiki es vum [[meta:Special:MyLanguage/Language_committee|Schprochekummittee]] jenehmeasch un sull no bahl aanjelaat wääde.',
	'wminc-infopage-status-created' => 'at Projäk heh wood vum Sprooche_Kummitee aanjenumme un es jäz onger $1 ze fenge.',
	'wminc-infopage-status-beforeincubator' => 'Dat Projäk wood ald bejunne, ih dat et dä Wikimedia <i lang="en">Incubator</i> joov, un et es op $1 ze fenge.',
	'wminc-infopage-status-beforeincubator-sister' => 'Heh dat Projäk es onger $1 ze fenge.',
	'wminc-infopage-error' => 'Fähler: {{#infopage}} kam_mer bloß op Sigge bruche, di e Köözel als Vörsaz han.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'wminc-infopage-enter' => "Gitt op d'Haaptsäit",
	'wminc-unknownlang' => '(onbekannte Sprooch-Code)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
	'wminc-infopage-title-t' => 'Wiktionnaire $1',
	'wminc-infopage-missingwiki-text' => '$1 gëtt et an dëser Sprooch nach net',
	'wminc-infopage-option-startsister' => 'Wann Dir dës Wiki ufänke wëllt, da gitt w.e.g. op <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Dir kënnt no [//www.$1.org Sproochversiounen, déi et vun $1 gëtt, sichen].',
	'wminc-infopage-option-sisterprojects-existing' => 'Dir kënnt no Projeten an dëser Sprooch sichen (déi et scho gëtt):',
	'wminc-infopage-option-sisterprojects-other' => 'Dir kënnt no anere Projeten an dëser Sprooch sichen:',
	'wminc-infopage-option-multilingual' => 'Alternativ, kënnt Dir op eng méisproocheg Wiki goen:',
	'wminc-infopage-createmainpage' => 'Gitt d\'Wuert "Haaptsäit" fir dës Sprooch an:',
	'wminc-infopage-contribute' => 'Wann Dir dës Sprooch beherrscht, sidd Dir häerzlech wëllkomm fir matzemaachen!',
	'wminc-infopage-status-imported' => "Dës Incubator-Wiki gouf vun $1 importéiert wéi d'Wiki zougemaach gouf.",
	'wminc-infopage-status-closedsister' => 'Dës Subdomain gouf zougemaach. Gitt op <strong>$2</strong> fir un dëser Wiki matzeschaffen.',
	'wminc-infopage-status-created' => 'Dëse Projet gouf vum Sproochecomité akzeptéiert an ass elo op $1 disponibel.',
	'wminc-infopage-status-beforeincubator' => 'Dëse Projet gouf ugeluecht ier et Wikimedia Incubator gouf an ass op $1 disponibel.',
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'wminc-infopage-enter' => "gank achter g'm veurblaaje",
	'wminc-unknownlang' => '(ónbekèndj spraok mid g\'r koeaj "$1")', # Fuzzy
	'wminc-infopage-welcome' => "Wèlkóm bie g'm Wikimedia Incubator, e perjèk dèr Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|mieër info]])",
);

/** لوری (لوری)
 * @author Mogoeilor
 */
$messages['lrc'] = array(
	'wminc-infopage-enter' => 'رو د سرآسونه',
	'wminc-unknownlang' => '(كد زون ناشناس)',
	'wminc-infopage-title-p' => 'ويكی پديا $1',
	'wminc-infopage-title-b' => 'ويكی كتاو $1',
	'wminc-infopage-title-t' => 'ويكی زون نامه $1',
	'wminc-infopage-title-q' => 'ويكی پورس $1',
	'wminc-infopage-title-n' => 'ويكی خور$1',
	'wminc-infopage-title-s' => 'ويكی سرچشمه $1',
	'wminc-infopage-title-v' => 'ويكی دونسمن گه$1',
	'wminc-infopage-title-y' => 'ويكی سفر $1',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Matasg
 */
$messages['lt'] = array(
	'wminc-infopage-enter' => 'eiti į Pagrindinį Puslapį',
	'wminc-unknownlang' => '(nežinoma kalba su kodu "$1")', # Fuzzy
	'wminc-infopage-title-p' => 'Vikipedija $1',
	'wminc-infopage-title-b' => 'Viki knygos $1',
	'wminc-infopage-title-t' => 'Viki žodynas $1',
	'wminc-infopage-title-q' => 'Viki citatos $1',
	'wminc-infopage-title-n' => 'Viki naujienos $1',
	'wminc-infopage-title-s' => 'Viki šaltiniai $1',
	'wminc-infopage-welcome' => 'Sveiki atvykę i Wikipedia Incubator, Wikipedia fondo projektą ([[{{MediaWiki:Aboutpage}}|Apie]])',
	'wminc-infopage-missingwiki-text' => '$1 šia kalba dar neegzistuoja.',
	'wminc-infopage-option-startsister' => 'Jei norite pradėti šia wiki, galite eiti į <strong>[$2 $1] </strong>.',
	'wminc-infopage-option-sisterprojects-existing' => 'Jūs galite ieškoti egzistuojančiu projektų, šia kalba:',
	'wminc-infopage-option-sisterprojects-other' => 'Jūs galite ieškoti kitų projektų, šia kalba:',
	'wminc-infopage-contribute' => 'Jei suprantate, ar kalbate šią kalba, esate kviečiama(s) prisidėti!',
);

/** Mizo (Mizo ţawng)
 * @author RMizo
 */
$messages['lus'] = array(
	'wminc-infopage-enter' => 'Phekpuiah kal rawh',
	'wminc-unknownlang' => '(ţawng thurûk hriat loh)',
	'wminc-infopage-title-p' => 'Wikizémpui $1',
	'wminc-infopage-title-b' => 'Wikilehkhabute $1',
	'wminc-infopage-title-t' => 'Wikifiahbu $1',
	'wminc-infopage-title-q' => 'Wikithusawi $1',
	'wminc-infopage-title-n' => 'Wikichinthar $1',
	'wminc-infopage-title-s' => 'Wikihnar $1',
	'wminc-infopage-title-v' => 'Wikizirnarunsang $1',
	'wminc-infopage-welcome' => 'Wikimedia Inmunna hmunah kan lo lawm takzet a che; hei hi Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|Chungchang]]) hna-hmachhawp pakhat a ni.',
	'wminc-infopage-missingwiki-text' => 'He ţawng hian $1 hi a la awm hrih lo.',
	'wminc-infopage-option-startwiki' => 'He wiki hi i ţan duh chuan, hemi phêk hi [{{fullurl:{{FULLPAGENAME}}|action=edit}} i siam ] thei ang; kan [[{{MediaWiki:Wminc-manual-url}}|kaihhruaina]] hi i zui dawn nia.', # Fuzzy
	'wminc-infopage-option-startsister' => 'He wiki bu hi i ţan duh a nih chuan <strong>[$2 $1]</strong>-ah hian i kal thei ang.',
	'wminc-infopage-option-languages-existing' => '[//www.$1.org $1 awmsana ţawng] i zawng thei ang.',
	'wminc-infopage-option-sisterprojects-existing' => 'He ţawnga hna-hmachhawp awmsa hi i zawng thei ang:',
	'wminc-infopage-option-sisterprojects-other' => 'He ţawnga hna-hmachhawp awm dang i zawng thei ang:',
	'wminc-infopage-option-multilingual' => 'Ţawng-ze-tin wiki-ah i kal thei ang:', # Fuzzy
	'wminc-infopage-createmainpage' => 'He ţawnga "Phekpui" an tihna hi ziak rawh:',
	'wminc-infopage-contribute' => 'He ţawng hi i thiam chuan i kut thawh ve ngei tùra duh i ni!',
	'wminc-infopage-status-open' => 'Hei hi Wikimedia Inmunna wiki inhawng a ni.',
	'wminc-infopage-status-imported' => 'He Inmunna wiki hi $1 aţanga a wiki an khar hnua lakluh a ni.',
	'wminc-infopage-status-closedsister' => 'He rambungpéng hi khar a ni tawh. He wiki-a kut thawh ve tur hian <strong>$2</strong>-ah hian kal rawh.',
	'wminc-infopage-status-created' => 'He hna-hmachhawp hi ţawng ngaihtuahtu pawlin a pawmpui tawh a, $1-ah hian tunah a awm mék.',
	'wminc-infopage-status-beforeincubator' => 'He hna-hmachhawp hi Wikimedia Inmunna inţan hmaa siam tawh a ni a, $1-ah en theihin a awm.',
);

/** Latvian (latviešu)
 * @author GreenZeb
 */
$messages['lv'] = array(
	'wminc-infopage-title-p' => 'Vikipēdija $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'wminc-infopage-enter' => 'оди на Главна страница',
	'wminc-unknownlang' => '(непознат јазичен код)',
	'wminc-infopage-title-p' => 'Википедија $1',
	'wminc-infopage-title-b' => 'Викикниги $1',
	'wminc-infopage-title-t' => 'Викиречник $1',
	'wminc-infopage-title-q' => 'Викицитат $1',
	'wminc-infopage-title-n' => 'Викивести $1',
	'wminc-infopage-title-s' => 'Викиизвор $1',
	'wminc-infopage-title-v' => 'Викиверзитет $1',
	'wminc-infopage-title-y' => 'Википатување $1',
	'wminc-infopage-welcome' => 'Добредојдовте на Инкубаторот на Викимедија - проект на Фондацијата Викимедија ([[{{MediaWiki:Aboutpage}}|За проектот]])',
	'wminc-infopage-missingwiki-text' => 'На овој јазик сè уште не постои $1.',
	'wminc-infopage-option-startwiki' => "Ако сакате да го отпочнете ова вики, проследете ги
'''[$3 овие чекори]''' и [[{{MediaWiki:Wminc-manual-url}}|нашето упатство]].",
	'wminc-infopage-option-startsister' => 'Ако сакате да го започнете ова вики, појдете на <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Можете да ги пребарате [//www.$1.org постоечките јазични изданија на $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Можете да ги пребарате постоечките проекти на овој јазик:',
	'wminc-infopage-option-sisterprojects-other' => 'Можете да пребарате други проекти на овој јазик:',
	'wminc-infopage-option-multilingual' => 'Или пак можете да појдете на повеќејазично вики:',
	'wminc-infopage-createmainpage' => 'Внесете го зборот „Главна страница“ на овој јазик:',
	'wminc-infopage-contribute' => 'Ако имате познавања од овој јазик, ви препорачуваме да учествувате!',
	'wminc-infopage-status-open' => 'Ова е отворено вики на Викимедииниот Инкубатор.',
	'wminc-infopage-status-imported' => 'Ова вики на Инкубаторот е увезено од $1, по затворањето на викито.',
	'wminc-infopage-status-closedsister' => 'Овој поддомен е затворен. Појдете на <strong>$2</strong> за да учествувате на ова вики.',
	'wminc-infopage-status-approved' => 'Ова инкубаторско вики е одобрено од [[meta:Special:MyLanguage/Language_committee|јазичниот комитет]] и наскоро ќе биде создадено.',
	'wminc-infopage-status-created' => 'Овој проект е одобрен од јазичната комисија и сега е достапен на $1.',
	'wminc-infopage-status-beforeincubator' => 'Овој проект е создаден пред започнувањето на Инкубаторот на Викимедија и е достапен на $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Проектот е достапен на $1.',
	'wminc-infopage-error' => 'Грешка: {{#infopage}} може да се користи само на страници со претставки.',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'wminc-infopage-enter' => 'പ്രധാന താളിലേയ്ക്ക് പോവുക',
	'wminc-unknownlang' => '(അപരിചിതമായ ഭാഷാ കോഡ്)',
	'wminc-infopage-title-p' => 'വിക്കിപീഡിയ $1',
	'wminc-infopage-title-b' => 'വിക്കിപാഠശാല $1',
	'wminc-infopage-title-t' => 'വിക്കിനിഘണ്ടു $1',
	'wminc-infopage-title-q' => 'വിക്കിചൊല്ലുകൾ $1',
	'wminc-infopage-title-n' => 'വിക്കിവാർത്തകൾ $1',
	'wminc-infopage-title-s' => 'വിക്കിഗ്രന്ഥശാല $1',
	'wminc-infopage-title-v' => 'വിക്കിസർവ്വകലാശാല $1',
	'wminc-infopage-title-y' => 'വിക്കിയാത്ര $1',
	'wminc-infopage-welcome' => 'വിക്കിമീഡിയ ഫൗണ്ടേഷൻ സംരംഭമായ വിക്കിമീഡിയ ഇൻകുബേറ്ററിലേയ്ക്ക് സ്വാഗതം ([[{{MediaWiki:Aboutpage}}|വിവരണം]])',
	'wminc-infopage-missingwiki-text' => 'ഈ ഭാഷയിൽ $1 നിലവിലില്ല.',
	'wminc-infopage-option-startwiki' => "താങ്കൾക്ക് ഈ വിക്കി തുടങ്ങണമെന്നുണ്ടെങ്കിൽ '''[$3 ഈ ഘട്ടങ്ങളും]''' [[{{MediaWiki:Wminc-manual-url}}|ഞങ്ങളുടെ വഴികാട്ടിയും]] പിന്തുടരുക.",
	'wminc-infopage-option-startsister' => 'താങ്കൾക്ക് ഈ വിക്കി തുടങ്ങണമെന്നുണ്ടെങ്കിൽ, <strong>[$2 $1]</strong> എന്ന താളിൽ ചെല്ലുക.',
	'wminc-infopage-option-languages-existing' => '[//www.$1.org $1 പദ്ധതിയുടെ നിലവിലുള്ള ഭാഷാപതിപ്പുകൾ] താങ്കൾക്ക് തിരയാവുന്നതാണ്.',
	'wminc-infopage-option-sisterprojects-existing' => 'ഈ ഭാഷയിൽ നിലവിലുള്ള സംരംഭങ്ങൾ താങ്കൾക്ക് തിരയാവുന്നതാണ്:',
	'wminc-infopage-option-sisterprojects-other' => 'ഈ ഭാഷയിൽ നിലവിലുള്ള ഇതര സംരംഭങ്ങൾ താങ്കൾക്ക് തിരയാവുന്നതാണ്:',
	'wminc-infopage-option-multilingual' => 'പകരമായി, താങ്കൾക്ക് ബഹുഭാഷാവിക്കിയിലേയ്ക്ക് പോകാവുന്നതാണ്:',
	'wminc-infopage-createmainpage' => 'ഈ ഭാഷയിൽ "പ്രധാന താൾ" എന്നതിനു സമാനമായ പദം നൽകുക:',
	'wminc-infopage-contribute' => 'താങ്കൾക്ക് ഈ ഭാഷ അറിയാമെങ്കിൽ, അതിൽ സംഭാവന ചെയ്യാൻ താത്പര്യപ്പെടുന്നു!',
	'wminc-infopage-status-open' => 'ഇത് വിക്കിമീഡിയ ഇൻകുബേറ്ററിലുള്ള ഒരു വിക്കിയാണ്.',
	'wminc-infopage-status-imported' => 'ഈ ഇൻകുബേറ്റർ വിക്കി $1 എന്നതിൽ നിന്നും വിക്കി അടച്ചശേഷം ഇറക്കുമതി ചെയ്തതാണ്.',
	'wminc-infopage-status-closedsister' => 'ഈ ഉപഡൊമൈൻ അടച്ചിരിക്കുന്നു. ഈ വിക്കിയിൽ സംഭാവന ചെയ്യാൻ <strong>$2</strong> എന്നതിലേയ്ക്ക് പോവുക.',
	'wminc-infopage-status-approved' => 'ഈ ഇൻകുബേറ്റർ വിക്കി [[meta:Special:MyLanguage/Language_committee|ഭാഷാ സമിതി]] അംഗീകരിച്ചിരിക്കുന്നു, ഉടൻ തന്നെ സൃഷ്ടിക്കപ്പെടുന്നതാണ്.',
	'wminc-infopage-status-created' => 'ഈ സംരംഭം ഭാഷാ കമ്മിറ്റി അംഗീകരിച്ചിരിക്കുന്നു, അതിപ്പോൾ $1 എന്നു ലഭ്യമാണ്.',
	'wminc-infopage-status-beforeincubator' => 'ഈ പദ്ധതി, വിക്കിമീഡിയ ഇൻകുബേറ്റർ തുടങ്ങുന്നതിനു മുമ്പേയുള്ളതാണ്, അത് $1-ൽ ലഭ്യമാണ്.',
	'wminc-infopage-status-beforeincubator-sister' => 'ഈ പദ്ധതി ഇപ്പോൾ $1 എന്ന വിലാസത്തിൽ ലഭ്യമാണ്.',
	'wminc-infopage-error' => 'പിഴവ്: പൂർവ്വപദമുള്ള താളുകളിൽ മാത്രമേ {{#infopage}} ഉപയോഗിക്കാൻ കഴിയുകയുള്ളു.',
);

/** Marathi (मराठी)
 * @author संतोष दहिवळ
 */
$messages['mr'] = array(
	'wminc-infopage-enter' => 'मुखपृष्ठाकडे जा',
	'wminc-unknownlang' => '(अज्ञात भाषा संकेत)',
	'wminc-infopage-title-p' => 'विकिपीडिया $1',
	'wminc-infopage-title-b' => 'विकिबुक्स $1',
	'wminc-infopage-title-t' => 'विक्शनरी $1',
	'wminc-infopage-title-q' => 'विकिकोट $1',
	'wminc-infopage-title-n' => 'विकिन्यूज $1',
	'wminc-infopage-title-s' => 'विकिस्रोत $1',
	'wminc-infopage-title-v' => 'विकिविद्यापीठ $1',
	'wminc-infopage-title-y' => 'विकिपर्यटन $1',
	'wminc-infopage-welcome' => 'विकिमिडिया इनक्यूबेटरवर आपले स्वागत आहे. हा ([[{{MediaWiki:Aboutpage}}|विकिमिडिया फाऊंडेशनचा ]]) एक सहप्रकल्प आहे.',
	'wminc-infopage-missingwiki-text' => 'A $1 या भाषेत आस्तित्वात नाही.',
	'wminc-infopage-option-startwiki' => "जर तुम्ही ही विकि चालू करणार असाल तर, कृपया आधी '''[$3 हे पान]''' आणि [[{{MediaWiki:Wminc-manual-url}}|आमचे माहितीपत्रक]] पाहा.",
	'wminc-infopage-option-startsister' => 'जर तुम्ही ही विकि चालू करणार असाल तर, येथे जा <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'यासाठी शोधू शकता [//www.$1.org existing language editions of $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'या भाषेचे आस्तित्वात असलेले प्रकल्प शोधू शकता:',
	'wminc-infopage-option-sisterprojects-other' => 'या भाषेचे आस्तित्वात असलेले अन्य प्रकल्प शोधू शकता:',
	'wminc-infopage-createmainpage' => 'या भाषेसाठी "मुखपृष्ठ" हा शब्द टाका:',
	'wminc-infopage-contribute' => 'जर तुम्ही या भाषेशी परिचित असाल तर योगदान देऊ शकता!',
	'wminc-infopage-status-open' => 'ही विकिमिडिया इनक्यूबेटरची खुली विकि आहे.',
	'wminc-infopage-status-imported' => 'ही इनक्यूबेटर विकि  $1 पासून विकि बंद केल्यानंतर आयात करण्यात आलेली आहे.',
	'wminc-infopage-status-created' => 'या प्रकल्पाला भाषा समितीने मान्यता दिलेली असून आता हा प्रकल्प $1 येथे उपलब्ध आहे.',
	'wminc-infopage-status-beforeincubator-sister' => 'हा प्रकल्प $1 येथे उपलब्ध आहे.',
	'wminc-infopage-error' => 'त्रूटी: {{#infopage}} फक्त प्रीफिक्स पानांवर वापरू शकता.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'wminc-infopage-enter' => 'pergi ke Laman Utama',
	'wminc-unknownlang' => '(kod bahasa tidak dikenali)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibuku $1',
	'wminc-infopage-title-t' => 'Wikikamus $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikiberita $1',
	'wminc-infopage-title-s' => 'Wikisumber $1',
	'wminc-infopage-title-v' => 'Wikiversiti $1',
	'wminc-infopage-title-y' => 'Wikivoyage $1',
	'wminc-infopage-welcome' => 'Selamat datang ke Wikimedia Incubator, satu projek Yayasan Wikimedia ([[{{MediaWiki:Aboutpage}}|Perihal]])',
	'wminc-infopage-missingwiki-text' => '$1 dalam bahasa ini belum wujud.',
	'wminc-infopage-option-startwiki' => "Jika anda mahu membuka wiki ini,
sila ikut '''[$3 langkah-langkah ini]''' dan [[{{MediaWiki:Wminc-manual-url}}|panduan kami]].",
	'wminc-infopage-option-startsister' => 'Jika anda ingin membuka wiki ini, anda boleh pergi ke <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Anda boleh mencari [//www.$1.org edisi-edisi bahasa sedia ada bagi $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Anda boleh mencari projek-projek yang sedia ada dalam bahasa ini:',
	'wminc-infopage-option-sisterprojects-other' => 'Anda boleh mencari projek-projek lain dalam bahasa ini:',
	'wminc-infopage-option-multilingual' => 'Ataupun anda boleh pergi ke wiki berbilang bahasa:',
	'wminc-infopage-createmainpage' => 'Isikan perkataan "Laman Utama" dalam bahasa ini:',
	'wminc-infopage-contribute' => 'Jika anda fasih dalam bahasa ini, anda dialu-alukan untuk menyumbang!',
	'wminc-infopage-status-open' => 'Ini merupakan wiki terbuka Wikimedia Incubator.',
	'wminc-infopage-status-imported' => 'Wiki Incubator ini telah diimport dari $1 setelah wiki itu ditutup.',
	'wminc-infopage-status-closedsister' => 'Subdomain ini ditutup. Pergi ke <strong>$2</strong> untuk menyumbang kepada wiki ini.',
	'wminc-infopage-status-approved' => 'Wiki Incubator ini telah diluluskan oleh [[meta:Special:MyLanguage/Language_committee|jawatankuasa bahasa]] dan akan dibuka tidak lama lagi.',
	'wminc-infopage-status-created' => 'Projek ini telah diluluskan oleh jawatankuasa bahasa dan kini boleh didapati di $1.',
	'wminc-infopage-status-beforeincubator' => 'Projek ini dibuka sebelum Wikimedia Incubator dimulakan, dan boleh didapati di $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Projek ini terdapat di $1.',
	'wminc-infopage-error' => 'Ralat: {{#infopage}} boleh digunakan di laman-laman berawalan sahaja.',
);

/** Norwegian Bokmål (norsk bokmål)
 */
$messages['nb'] = array(
	'wminc-infopage-enter' => 'gå til hovedsiden',
	'wminc-unknownlang' => '(ukjent språk med koden «$1»)', # Fuzzy
	'wminc-infopage-title-p' => 'Wikipedia på $1',
	'wminc-infopage-title-b' => 'Wikibøker på $1',
	'wminc-infopage-title-t' => 'Wiktionary på $1',
	'wminc-infopage-title-q' => 'Wikiquote på $1',
	'wminc-infopage-title-n' => 'Wikinytt på $1',
	'wminc-infopage-title-s' => 'Wikikilden på $1',
	'wminc-infopage-title-v' => 'Wikiversity på $1',
	'wminc-infopage-welcome' => 'Velkommen til Wikimedia Incubator, et Wikimedia Foundation-prosjekt ([[{{MediaWiki:Aboutpage}}|om]])',
	'wminc-infopage-missingwiki-text' => '$1 på dette språket finnes ikke ennå.',
	'wminc-infopage-option-startwiki' => 'Om du ønsker å starte denne wikien kan du [{{fullurl:{{FULLPAGENAME}}|action=edit}} opprette siden] og følge [[{{Mediawiki:Wminc-manual-url}}|manualen vår]].', # Fuzzy
	'wminc-infopage-option-startsister' => 'Om du ønsker å starte denne wikien kan du gå til <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Du kan søke etter [//www.$1.org eksisterende språkutgaver av $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Du kan søke etter eksisterende prosjekter på dette språket:',
	'wminc-infopage-option-sisterprojects-other' => 'Du kan søke etter andre prosjekter på dette språket:',
	'wminc-infopage-option-multilingual' => 'Du kan gå til en flerspråklig wiki:', # Fuzzy
	'wminc-infopage-createmainpage' => 'Skriv inn ordet «Hovedside» på dette språket:',
	'wminc-infopage-contribute' => 'Om du kan dette språket må du gjerne bidra!',
	'wminc-infopage-status-imported' => 'Denne Incubator-wikien har blitt importert fra $1 etter at wikien ble stengt.',
	'wminc-infopage-status-closedsister' => 'Dette underdomenet har blitt stengt. Gå til <strong>$1</strong> for å bidra på denne wikien.', # Fuzzy
	'wminc-infopage-status-created' => 'Dette prosjektet har blitt godkjent av språkkomiteen, og er nå tilgjengelig på $1.',
	'wminc-infopage-status-beforeincubator' => 'Dette prosjektet ble opprettet før Wikimedia Incubator startet, og er tilgjengelig på $1.',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'wminc-infopage-enter' => 'ga naar de Hoofdpagina',
	'wminc-unknownlang' => '(onbekende taalcode)',
	'wminc-infopage-title-p' => 'Wikipedia in het $1',
	'wminc-infopage-title-b' => 'Wikibooks in het $1',
	'wminc-infopage-title-t' => 'Wikiwoordenboek in het $1',
	'wminc-infopage-title-q' => 'Wikiquote in het $1',
	'wminc-infopage-title-n' => 'Wikinews in het $1',
	'wminc-infopage-title-s' => 'Wikisource in het $1',
	'wminc-infopage-title-v' => 'Wikiversity in het $1',
	'wminc-infopage-title-y' => 'Wikivoyage in het $1',
	'wminc-infopage-welcome' => 'Welkom bij de Wikimedia Incubator, een project van de Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|meer informatie]])',
	'wminc-infopage-missingwiki-text' => 'Het project $1 bestaat nog niet in deze taal.',
	'wminc-infopage-option-startwiki' => "Als u deze wiki wilt starten, volg dan '''[$3 deze stappen]''' en [[{{MediaWiki:Wminc-manual-url}}|onze handleiding]].",
	'wminc-infopage-option-startsister' => 'Als u deze wiki wilt starten, kunt u naar <strong>[$2 $1]</strong> gaan.',
	'wminc-infopage-option-languages-existing' => 'U kunt naar [//www.$1.org bestaande taalversies van $1] zoeken.',
	'wminc-infopage-option-sisterprojects-existing' => 'U kunt naar bestaande projecten in deze taal zoeken:',
	'wminc-infopage-option-sisterprojects-other' => 'U kunt naar andere projecten in deze taal zoeken:',
	'wminc-infopage-option-multilingual' => 'U kunt ook naar een meertalige wiki gaan:',
	'wminc-infopage-createmainpage' => 'Geef het woord "Hoofdpagina" op in deze taal:',
	'wminc-infopage-contribute' => 'Als u deze taal kent, draag dan bij!',
	'wminc-infopage-status-open' => 'Dit is een open wiki van Wikimedia Incubator.',
	'wminc-infopage-status-imported' => 'Deze Incubatorwiki is geïmporteerd van $1 nadat die wiki is gesloten.',
	'wminc-infopage-status-closedsister' => 'Dit subdomein is gesloten. Ga naar <strong>$2</strong> om bij te dragen aan deze wiki.',
	'wminc-infopage-status-approved' => 'Deze Incubatorwiki is goedgekeurd door de [[meta:Special:MyLanguage/Language_committee|taalcommissie]] en wordt binnenkort aangemaakt.',
	'wminc-infopage-status-created' => 'Dit project is goedgekeurd door het taalcomité en is nu beschikbaar op $1.',
	'wminc-infopage-status-beforeincubator' => 'Dit project is gemaakt voordat Wikimedia Incubator is opgericht en is beschikbaar op $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Dit project is beschikbaar op $1.',
	'wminc-infopage-error' => "Fout: {{#infopage}} kan alleen gebruikt worden in pagina's met een voorvoegsel.",
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 */
$messages['or'] = array(
	'wminc-infopage-enter' => 'ପ୍ରଧାନ ପୃଷ୍ଠାକୁ ଯିବେ',
	'wminc-infopage-title-p' => 'ଉଇକିପିଡ଼ିଆ $1',
);

/** Polish (polski)
 * @author Bartek50003
 * @author BeginaFelicysym
 * @author Sp5uhe
 * @author Ty221
 * @author WTM
 * @author Woytecr
 */
$messages['pl'] = array(
	'wminc-infopage-enter' => 'przejdź do strony głównej',
	'wminc-unknownlang' => '(nieznany kod języka)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikiksiążki $1',
	'wminc-infopage-title-t' => 'Wikisłownik $1',
	'wminc-infopage-title-q' => 'Wikicytaty $1',
	'wminc-infopage-title-n' => 'Wikinews $1',
	'wminc-infopage-title-s' => 'Wikiźródła $1',
	'wminc-infopage-title-v' => 'Wikiwersytet $1',
	'wminc-infopage-title-y' => 'Wikipodróże $1',
	'wminc-infopage-welcome' => 'Witaj w Inkubatorze Wikimedia, projekcie Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|o inkubatorze]])',
	'wminc-infopage-missingwiki-text' => '$1 w tym języku jeszcze nie istnieje',
	'wminc-infopage-option-sisterprojects-existing' => 'Możesz szukać istniejących projektów w tym języku:',
	'wminc-infopage-createmainpage' => 'Wpisz „Strona główna“ w tym języku',
	'wminc-infopage-contribute' => 'Jeśli znasz ten język zachęcamy Cię do wzięcia udziału w tworzeniu tej wiki!',
	'wminc-infopage-status-imported' => 'Do inkubatora wiki zaimportowano treść z $1 po tym jak wiki została zamknięta.',
	'wminc-infopage-status-closedsister' => 'Ta domena podrzędna została zamknięta. Przejdź pod adres <strong>$2</strong> jeśli chcesz współtworzyć tę wiki.',
	'wminc-infopage-status-created' => 'Projekt został zatwierdzony przez komisję językową i jest już dostępny pod adresem $1.',
	'wminc-infopage-status-beforeincubator' => 'Ten projekt został utworzony zanim został uruchomiony Inkubator Wikimedia i jest dostępny pod adresem $1.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'wminc-infopage-enter' => 'andé a la pàgina Prinsipal',
	'wminc-unknownlang' => '(còdes ëd lenga pa conossù)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
	'wminc-infopage-title-t' => 'Wiktionary $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikinews $1',
	'wminc-infopage-title-s' => 'Wikisource $1',
	'wminc-infopage-title-v' => 'Wikiversity $1',
	'wminc-infopage-title-y' => 'Wikivoyage $1',
	'wminc-infopage-welcome' => "Bin ëvnù a l'Incubator ëd Wikimedia, un proget ëd la Fondassion Wikimedia ([[{{MediaWiki:Aboutpage}}|A propòsit]])",
	'wminc-infopage-missingwiki-text' => 'Un $1 an costa lenga a esist ancor nen.',
	'wminc-infopage-option-startwiki' => "S'a veul ancaminé costa wiki, për piasì ch'a-j daga dament a
'''[$3 costi pass]''' e a [[{{MediaWiki:Wminc-manual-url}}|nòstr manual]].",
	'wminc-infopage-option-startsister' => "S'it veule ancaminé sta wiki, it peule andé a <strong>[$2 $1]</strong>.",
	'wminc-infopage-option-languages-existing' => "It peule serché [//www.$1.org j'edission esistente an lenga ëd $1].",
	'wminc-infopage-option-sisterprojects-existing' => 'A peul sërché dij proget esistent an costa lenga:',
	'wminc-infopage-option-sisterprojects-other' => "A peul sërché d'àutri proget an costa lenga:",
	'wminc-infopage-option-multilingual' => 'Com alternativa, it peule andé a na wiki multilenga:',
	'wminc-infopage-createmainpage' => "Ch'a anserissa le paròle «Pàgina Prinsipal» an costa lenga:",
	'wminc-infopage-contribute' => "S'a conòss costa lenga, a l'é ancoragià a contribuì!",
	'wminc-infopage-status-open' => "Costa a l'é na wiki duverta ëd l'Incubator ëd Wikimedia.",
	'wminc-infopage-status-imported' => "Costa wiki Incubator a l'é stàita amportà da $1 apress che la wiki a l'é stàita sarà.",
	'wminc-infopage-status-closedsister' => "Ës sot-domini a l'é stàit sarà. Ch'a vada a <strong>$2</strong> për contribuì a costa wiki.",
	'wminc-infopage-status-approved' => "Costa wiki d'Incubator a l'é staita aprovà dal [[meta:Special:MyLanguage/Language_committee|comità lenghìstich]] e a sarà tòst creà.",
	'wminc-infopage-status-created' => "Ës proget a l'é stàit aprovà dal comità lenghìstich e a l'é adess disponìbil a $1.",
	'wminc-infopage-status-beforeincubator' => "Ës proget a l'é stàit creà prima che l'Incubator ëd Wikipedia a partèissa e a l'é disponìbil a $1.",
	'wminc-infopage-status-beforeincubator-sister' => "Sto proget a l'é disponìbil a $1.",
	'wminc-infopage-error' => 'Eror: {{#infopage}} a peul mach esse dovrà dzora a dle pàgine prefissà..',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'wminc-infopage-enter' => 'آرنی مخ ته ورتلل',
	'wminc-infopage-title-p' => '$1 ويکيپېډيا',
	'wminc-infopage-title-b' => '$1 ويکيتابونه',
	'wminc-infopage-title-t' => '$1 ويکيسيند',
	'wminc-infopage-title-q' => 'ويکيوراشه $1',
	'wminc-infopage-title-n' => '$1 ويکيخبرونه',
	'wminc-infopage-title-v' => '$1 ويکيپوهنتون',
	'wminc-infopage-option-multilingual' => 'تاسې يوې څوژبنيزې ويکي ته ورتللی شی:', # Fuzzy
);

/** Portuguese (português)
 * @author Carla404
 * @author Hamilton Abreu
 * @author Luckas
 * @author Malafaya
 * @author SandroHc
 */
$messages['pt'] = array(
	'wminc-infopage-enter' => 'ir para a Página principal',
	'wminc-unknownlang' => '(código de língua desconhecido)',
	'wminc-infopage-welcome' => 'Bem-vindo(a) Incubadora Wikimedia, um projeto da Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|Sobre]])',
	'wminc-infopage-missingwiki-text' => 'Ainda não existe um projeto $1 nesta língua.',
	'wminc-infopage-option-startwiki' => 'Se pretende iniciar esta wiki,
pode [{{fullurl:{{FULLPAGENAME}}|action=edit}} criar a página] e seguir o [[{{MediaWiki:Wminc-manual-url}}|manual]].', # Fuzzy
	'wminc-infopage-option-startsister' => 'Se queres começar esta wiki, podes ir a <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Pode pesquisar as [//www.$1.org edições de $1 nas línguas existentes].',
	'wminc-infopage-option-sisterprojects-existing' => 'Pode pesquisar os projetos existentes nesta língua:',
	'wminc-infopage-option-sisterprojects-other' => 'Pode pesquisar outros projetos nesta língua:',
	'wminc-infopage-option-multilingual' => 'Pode visitar uma wiki multilingue:', # Fuzzy
	'wminc-infopage-createmainpage' => 'Introduza o termo "Página principal" nesta língua:',
	'wminc-infopage-contribute' => 'Se conhece esta língua, está convidado a colaborar!',
	'wminc-infopage-status-imported' => 'Esta wiki da Incubadora foi importada de $1 após a wiki ter sido fechada.',
	'wminc-infopage-status-closedsister' => 'Este subdomínio foi fechado. Vá a <strong>$2</strong> para contribuír nesta wiki.',
	'wminc-infopage-status-created' => 'Este projeto foi aprovado pelo comitê linguístico e está agora disponível em $1.',
	'wminc-infopage-status-beforeincubator' => 'Este projeto foi criado antes do início da Incubadora Wikimedia e está disponível em $1.',
	'wminc-infopage-error' => 'Erro: {{#infopage}} só pode ser usada em páginas com prefixos.',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Jaideraf
 * @author MetalBrasil
 * @author Pedroca cerebral
 * @author 555
 */
$messages['pt-br'] = array(
	'wminc-infopage-enter' => 'Vá para a página principal',
	'wminc-unknownlang' => '(código de idioma desconhecido)',
	'wminc-infopage-title-p' => 'Wikipédia em $1',
	'wminc-infopage-title-b' => 'Wikilivros em $1',
	'wminc-infopage-title-t' => 'Wikcionário em $1',
	'wminc-infopage-title-q' => 'Wikiquote em $1',
	'wminc-infopage-title-n' => 'Wikinotícias em $1',
	'wminc-infopage-title-s' => 'Wikisource em $1',
	'wminc-infopage-title-v' => 'Wikiversidade em $1',
	'wminc-infopage-welcome' => 'Bem vindo à Wikimedia Incubator, um projeto da Wikimedia Fundation ([[{{MediaWiki:Aboutpage}}|Sobre]])',
	'wminc-infopage-missingwiki-text' => 'Ainda não existe um projeto $1 nesta língua.',
	'wminc-infopage-option-startwiki' => 'Se você quiser começar esta wiki, você pode [{{fullurl:{{FULLPAGENAME}}|action=edit}} criar a página] e seguir [[{{MediaWiki:Wminc-manual-url}}|nosso manual]].', # Fuzzy
	'wminc-infopage-option-startsister' => 'Se você quer começar esta wiki, você pode ir a <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Você pode pesquisar por [//www.$1.org edições de $1 línguas existentes].',
	'wminc-infopage-option-sisterprojects-existing' => 'Você pode pesquisar por projetos existentes nesta língua.',
	'wminc-infopage-option-sisterprojects-other' => 'Você pode pesquisar por outros projetos nessa língua.',
	'wminc-infopage-option-multilingual' => 'Alternativamente, você pode ir a uma wiki multilíngue:',
	'wminc-infopage-createmainpage' => 'Digite a palavra "Página principal" nesta língua.',
	'wminc-infopage-contribute' => 'Se você conhece esta língua, você é convidado a contribuir!',
	'wminc-infopage-status-imported' => 'Esse Incubator wiki foi importado de $1 depois que o wiki foi fechado.',
	'wminc-infopage-status-closedsister' => 'Este subdomínio foi fechado. Vá a <strong>$2</strong> para contribuir nesta wiki.',
	'wminc-infopage-status-created' => 'Esse projeto foi aprovado pela comitê linguístico e agora é avaliável em $1.',
	'wminc-infopage-status-beforeincubator' => 'Esse projeto foi criado antes do inicio da Wikimedia Incubator e está avaliável em $1.',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'wminc-infopage-enter' => 'mergi la Pagina principală',
	'wminc-unknownlang' => '(cod de limbă necunoscut)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikimanuale $1',
	'wminc-infopage-title-t' => 'Wikționar $1',
	'wminc-infopage-title-q' => 'Wikicitat $1',
	'wminc-infopage-title-n' => 'Wikiștiri $1',
	'wminc-infopage-title-s' => 'Wikisursă $1',
	'wminc-infopage-title-v' => 'Wikiversitate $1',
	'wminc-infopage-title-y' => 'Wikivoiaj $1',
	'wminc-infopage-missingwiki-text' => '$1 în această limbă nu există.',
	'wminc-infopage-option-startsister' => 'Dacă doriți să porniți acest wiki, puteți merge la <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-sisterprojects-existing' => 'Puteți căuta proiecte existente în această limbă:',
	'wminc-infopage-option-sisterprojects-other' => 'Puteți căuta alte proiecte în această limbă:',
	'wminc-infopage-option-multilingual' => 'Puteți merge pe un wiki multilingvistic:', # Fuzzy
	'wminc-infopage-contribute' => 'Dacă cunoașteți această limbă, sunteți încurajat să contribuiți!',
	'wminc-infopage-status-beforeincubator-sister' => 'Acest proiect este disponibil la $1.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 * @author Reder
 */
$messages['roa-tara'] = array(
	'wminc-infopage-enter' => "scè ad 'a Pagene Prengepále",
	'wminc-unknownlang' => "(codece d'a lènghe scanosciute)",
	'wminc-infopage-title-p' => 'Uicchipèdie $1',
	'wminc-infopage-title-b' => 'Uicchibooks $1',
	'wminc-infopage-title-t' => 'Uicchitionary $1',
	'wminc-infopage-title-q' => 'Uicchiquote $1',
	'wminc-infopage-title-n' => 'Uicchinews $1',
	'wminc-infopage-title-s' => 'Uicchisource $1',
	'wminc-infopage-title-v' => 'Uicchiversity $1',
	'wminc-infopage-title-y' => 'Uicchivoyage $1',
	'wminc-infopage-welcome' => "Bovègne sus a Uicchimèdie Incubatore, 'nu pruggette d'a Funnazione Uicchimèdie ([[{{MediaWiki:Aboutpage}}|About]])",
	'wminc-infopage-missingwiki-text' => "'Nu $1 jndre 'stà lènga non ge 'stè angore.",
	'wminc-infopage-option-startwiki' => "Ce vuè ccrejà 'stà uicchi, pe piacere vide 
'''[$3 ste passe]''' e [[{{MediaWiki:Wminc-manual-url}}|'u manuale nuèstre]].",
	'wminc-infopage-option-startsister' => "Ce vuè ccrejà 'stà uicchi, puè scè a <strong>[$2 $1]</strong>.",
	'wminc-infopage-option-languages-existing' => "Tu puè acchijà pe' le [//www.$1.org versione lènguisteche esistende de $1].",
	'wminc-infopage-option-sisterprojects-existing' => "Tu puè acchijà pe' le pruggette esistende jndre 'stà lènga:",
	'wminc-infopage-option-sisterprojects-other' => "Tu puè acchijà pe' l'otre pruggette jndre 'stà lènga:",
	'wminc-infopage-option-multilingual' => "In alternative, puè scè jndre 'na uicchi multelènghe:",
	'wminc-infopage-createmainpage' => 'Sckaffe \'a parole "Pagene Prengepále" jndre \'stà lènga:',
	'wminc-infopage-contribute' => "Ce tu canosce 'stà lènga, sìnde 'ngoraggiate a condrebbuì!",
	'wminc-infopage-status-open' => "Queste jè 'na Uicchi aperte sus a UicchiMedia Ingubatore.",
	'wminc-infopage-status-imported' => "Quèste uicchi de l'Incubatore ha state 'mbortade da $1 nnande c'a uicchi ha state chiuse.",
	'wminc-infopage-status-closedsister' => "'Stù subdominie jè state chiuse. Scè a <strong>$2</strong> pe' conrebbuì a 'stà uicchi.",
	'wminc-infopage-status-approved' => "Quiste Ingubatore de uicchi ha state approvate da 'a [[meta:Special:MyLanguage/Language_committee|commissione de le lènghe]] e adda essere ccrejate subbite.",
	'wminc-infopage-status-created' => "'Stù pruggette ha state approvate da 'u language committee e mò se pòte acchijà sus a $1.",
	'wminc-infopage-status-beforeincubator' => "'Stù pruggette jè state ccrejète apprìme ca Uicchimèdie Incubatore accumenzasse a fatijà e jè disponibbele sus a $1.",
	'wminc-infopage-status-beforeincubator-sister' => 'Stu proggette hjè disponibbile sus a $1.',
	'wminc-infopage-error' => 'Errore: {{#infopage}} pò essere sulamende ausate sus a le pàggene cu prefisse.',
);

/** Russian (русский)
 * @author Amdf
 * @author Eugrus
 * @author Kaganer
 * @author Okras
 */
$messages['ru'] = array(
	'wminc-infopage-enter' => 'перейти на заглавную страницу',
	'wminc-unknownlang' => '(неизвестный код языка)',
	'wminc-infopage-title-p' => 'Википедия на языке «$1»',
	'wminc-infopage-title-b' => 'Викиучебник на языке «$1»',
	'wminc-infopage-title-t' => 'Викисловарь на языке «$1»',
	'wminc-infopage-title-q' => 'Викицитатник на языке «$1»',
	'wminc-infopage-title-n' => 'Викиновости на языке «$1»',
	'wminc-infopage-title-s' => 'Викитека на языке «$1»',
	'wminc-infopage-title-v' => 'Викиверситет на языке «$1»',
	'wminc-infopage-title-y' => 'Викигид $1',
	'wminc-infopage-welcome' => 'Добро пожаловать в Инкубатор Викимедиа, проект Фонда Викимедиа ([[{{MediaWiki:Aboutpage}}|о проекте]])',
	'wminc-infopage-missingwiki-text' => 'У проекта «$1» еще ​​нет раздела на этом языке.',
	'wminc-infopage-option-startwiki' => "Если вы хотите начать этот вики-проект,
выполните '''[$3 эти действия]''' и следуйте [[{{MediaWiki:Wminc-manual-url}}|нашему руководству]].",
	'wminc-infopage-option-startsister' => 'Если вы хотите начать этот вики-проект, вы можете перейти к <strong>[ $2  $1 ] </strong>.',
	'wminc-infopage-option-languages-existing' => 'Вы можете поискать [//www.$1.org существующие языковые разделы для $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Вы можете поискать существующие проекты на этом языке:',
	'wminc-infopage-option-sisterprojects-other' => 'Вы можете поискать другие проекты на этом языке:',
	'wminc-infopage-option-multilingual' => 'Кроме того, вы можете перейти к многоязычным вики-проектам:',
	'wminc-infopage-createmainpage' => 'Введите на этом языке выражение, означающее «Заглавная страница»:',
	'wminc-infopage-contribute' => 'Если вы понимаете этот язык, вы можете внести свой вклад!',
	'wminc-infopage-status-open' => 'Это открытая вики в Инкубаторе Викимедиа.',
	'wminc-infopage-status-imported' => 'Эта вики была импортирована в Инкубатор из проекта «$1» после его закрытия.',
	'wminc-infopage-status-closedsister' => 'Этот поддомен был закрыт. Перейти к <strong>$2</strong>, чтобы сделать свой вклад в эту вики.',
	'wminc-infopage-status-approved' => 'Этот инкубатор был одобрен [[meta:Special:MyLanguage/Language_committee|языковым комитетом]] и будет вскоре создан.',
	'wminc-infopage-status-created' => 'Этот проект был одобрен Языковым комитетом и теперь доступен по адресу $1 .',
	'wminc-infopage-status-beforeincubator' => 'Этот проект, созданный до запуска Инкубатора Викимедиа, доступен по адресу $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Этот проект доступен в $1.',
	'wminc-infopage-error' => 'Ошибка: {{#infopage}} может использоваться только на подстраницах.',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'wminc-infopage-contribute' => 'Кідь розумієте тот язык, рекомендуєме, жебы сьте приспівали!',
);

/** Sanskrit (संस्कृतम्)
 * @author Ansumang
 */
$messages['sa'] = array(
	'wminc-infopage-title-p' => 'विकिपीड़िया $1',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'wminc-infopage-enter' => 'මුල් පිටුව වෙත යන්න',
	'wminc-unknownlang' => '"$1" කේතය යොදා ඇති හදුනා නොගත් භාෂාව', # Fuzzy
	'wminc-infopage-title-p' => 'විකිපීඩියා $1',
	'wminc-infopage-title-b' => 'විකිපොත් $1',
	'wminc-infopage-title-t' => 'විකිෂනරි $1',
	'wminc-infopage-title-q' => 'විකීඋදෘත $1',
	'wminc-infopage-title-n' => 'විකිපුවත් $1',
	'wminc-infopage-title-s' => 'විකිමුලාශ්‍ර $1',
	'wminc-infopage-title-v' => 'විකිවර්සිටි $1',
	'wminc-infopage-title-y' => 'විකිවොයේජ් $1',
	'wminc-infopage-welcome' => 'විකිමාධ්‍ය ඉන්කිව්බේටර වෙත පිළිගනිමු, විකිමාධ්‍ය පදනමෙහි ව්‍යාපෘතියකි ([[{{MediaWiki:Aboutpage}}|පිලිබඳ]])',
	'wminc-infopage-missingwiki-text' => 'මෙම භාෂාවෙහි තිබෙන $1 තවම නොපවතියි.',
	'wminc-infopage-option-startwiki' => 'ඔබට මෙම විකිය ආරම්භ කිරීමට අවශ්‍යනම්,
[{{fullurl:{{FULLPAGENAME}}|action=edit}} පිටුව තනා] [[{{MediaWiki:Wminc-manual-url}}|අපගේ අත්පොත]]  අනුගමනය කල හැක.', # Fuzzy
	'wminc-infopage-option-startsister' => 'ඔබට මෙම විකිය ඇරඹීමට අවශ්‍ය නම්, ඔබට <strong>[$2 $1]</strong>වෙත යා හැකියි.',
	'wminc-infopage-option-languages-existing' => 'ඔබ හට [//www.$1.org $1 හී දැනටමත් පවත්නා භාෂා අනුවාදයන්] සඳහා ගවේෂණය කල හැක.',
	'wminc-infopage-option-sisterprojects-existing' => 'මෙම භාෂාවෙහි දැනටමත් පවතින ව්‍යාපෘතියන් ඔබට ගවේශනය කල හැක:',
	'wminc-infopage-option-sisterprojects-other' => 'මෙම භාෂාවෙහි වෙනත් ව්‍යාපෘතියන් ඔබට ගවේශනය කල හැක:',
	'wminc-infopage-option-multilingual' => 'ඔබට බහුභාෂාමය විකියකට යා හැකියි:', # Fuzzy
	'wminc-infopage-createmainpage' => "මෙම භාෂාවෙහිදී ''මුල් පිටුව'' යන වචනය යොදන්න:",
	'wminc-infopage-contribute' => 'ඔබ මෙම භාෂාව ගැන දන්නවානම්, දායකත්වය ලබා දීමට ඔබට අපි අනුබල දෙනවා!',
	'wminc-infopage-status-open' => 'මෙය විකිමාධ්‍ය ඉන්කිව්බේටරයෙහි විවෘත විකියයි.',
	'wminc-infopage-status-imported' => 'විකිය වැසීමෙන් පසුව මෙම ඉන්කිව්බේටර විකිය $1 වෙතින් ආයාත කර ඇත.',
	'wminc-infopage-status-closedsister' => 'මෙම උපවසම වසා ඇත. මෙම විකියට දායකවීමට <strong>$2</strong> වෙත යන්න.',
	'wminc-infopage-status-created' => 'භාෂා කමිටුව විසින් මෙම ව්‍යාපෘතිය අනුමත කල අතර $1 හීදී ලබාගත හැක.',
	'wminc-infopage-status-beforeincubator' => 'මෙම ව්‍යාපෘතිය තැනී ඇත්තේ විකිමාධ්‍ය ඉන්කිව්බේටරය ආරම්භ කිරීමට පෙර වන අතර $1 හීදී ලබා ගත හැක.',
	'wminc-infopage-status-beforeincubator-sister' => 'මෙම ව්‍යාපෘතිය $1 හීදී ලබා ගත හැක.',
	'wminc-infopage-error' => 'දෝෂය: {{#infopage}} උපසර්ගමය පිටුවල පමණක් භාවිතා කල හැක.',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 */
$messages['sl'] = array(
	'wminc-infopage-enter' => 'pojdi na glavno stran',
	'wminc-unknownlang' => '(neznana koda jezika)',
	'wminc-infopage-title-p' => 'Wikipedija $1',
	'wminc-infopage-title-b' => 'Wikiknjige $1',
	'wminc-infopage-title-t' => 'Wikislovar $1',
	'wminc-infopage-title-q' => 'Wikinavedek $1',
	'wminc-infopage-title-n' => 'Wikinovice $1',
	'wminc-infopage-title-s' => 'Wikivir $1',
	'wminc-infopage-title-v' => 'Wikiverza $1',
	'wminc-infopage-title-y' => 'Wikipotovanje $1',
	'wminc-infopage-welcome' => 'Dobrodošli na Wikimediinem Inkubatorju, projektu Fundacije Wikimedia ([[{{MediaWiki:Aboutpage}}|O projektu]])',
	'wminc-infopage-missingwiki-text' => '$1 v tem jeziku še ne obstaja.',
	'wminc-infopage-option-startwiki' => "Če želite zagnati wiki, sledite
'''[$3 tem korakom]''' in [[{{MediaWiki:Wminc-manual-url}}|našemu priročniku]].",
	'wminc-infopage-option-startsister' => 'Če želite zagnati ta wiki, pojdite na <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Iščete lahko [//www.$1.org obstoječe jezikovne izdaje $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Iščete lahko obstoječe projekte v tem jeziku:',
	'wminc-infopage-option-sisterprojects-other' => 'Iščete lahko druge projekte v tem jeziku:',
	'wminc-infopage-option-multilingual' => 'Lahko pa greste večjezikovni wiki:',
	'wminc-infopage-createmainpage' => 'Vnesite besedi »Glavna stran« v tem jeziku:',
	'wminc-infopage-contribute' => 'Če znate ta jezik, ste vabljeni k prispevanju!',
	'wminc-infopage-status-open' => 'To je odprti wiki Inkubatorja Wikimedie.',
	'wminc-infopage-status-imported' => 'Ta wiki Inkubatorja je bil uvožen iz $1 po zaprtju wikija.',
	'wminc-infopage-status-closedsister' => 'Poddomena je zaprta. Pojdite na <strong>$2</strong>, da prispevate k temu wikiju.',
	'wminc-infopage-status-approved' => 'Wiki Inkubatorja je odobril [[meta:Special:MyLanguage/Language_committee|jezikovni odbor]] in bo kmalu ustvarjen.',
	'wminc-infopage-status-created' => 'Projekt je odobril jezikovni odbor in je odslej na razpolago na naslovu $1.',
	'wminc-infopage-status-beforeincubator' => 'Projekt je nastal pred zagonom Wikimedijinega Inkubatorja in je na razpolago na naslovu $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Projekt je na voljo na $1.',
	'wminc-infopage-error' => 'Napaka: {{#infopage}} se lahko uporablja samo na straneh s predpono.',
);

/** Albanian (shqip)
 * @author Olsi
 */
$messages['sq'] = array(
	'wminc-infopage-contribute' => 'Nëse e dini këtë gjuhë, jeni të inkurajuar të kontribuoni!',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'wminc-infopage-enter' => 'иди на Главну страну',
	'wminc-unknownlang' => '(непознат језички код)',
	'wminc-infopage-welcome' => 'Добро дошли на Викимедијин Инкубатор — пројекат Задужбине Викимедија ([[{{MediaWiki:Aboutpage}}|О пројекту]])',
	'wminc-infopage-missingwiki-text' => 'На овом језику још не постоји $1.',
	'wminc-infopage-option-startwiki' => 'Ако желите да започнете овај вики,
онда можете да [{{fullurl:{{FULLPAGENAME}}|action=edit}} направите страницу] и да погледате [[{{MediaWiki:Wminc-manual-url}}|наш приручник]].', # Fuzzy
	'wminc-infopage-option-startsister' => 'Ако желите да започнете овај вики, идите на <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Можете да претражите [//www.$1.org постојећа језичка издања пројекта $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Можете да претражите постојеће пројекте на овом језику:',
	'wminc-infopage-option-sisterprojects-other' => 'Можете да претражите друге пројекте на овом језику:',
	'wminc-infopage-option-multilingual' => 'Можете да одете на вишејезички вики:', # Fuzzy
	'wminc-infopage-createmainpage' => 'Унесите реч „Главна страна“ на овом језику:',
	'wminc-infopage-contribute' => 'Ако познајете овај језик, препоручујемо вам да учествујете!',
	'wminc-infopage-status-imported' => 'Овај вики Инкубатор је увезен из $1, по затварању викија.',
	'wminc-infopage-status-closedsister' => 'Овај поддомен је затворен. Идите на <strong>$2</strong> да учествујете на овом викију.',
	'wminc-infopage-status-created' => 'Овај пројекат је одобрен од језичког одбора и сада је доступан на $1.',
	'wminc-infopage-status-beforeincubator' => 'Овај пројекат је направљен пре почетка рада Викимедијиног Инкубатора и доступан је на $1.',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 */
$messages['sr-el'] = array(
	'wminc-infopage-enter' => 'idi na Glavnu stranu',
	'wminc-unknownlang' => '(nepoznat jezički kod)',
	'wminc-infopage-welcome' => 'Dobro došli na Vikimedijin Inkubator — projekat Zadužbine Vikimedija ([[{{MediaWiki:Aboutpage}}|O projektu]])',
	'wminc-infopage-missingwiki-text' => 'Na ovom jeziku još ne postoji $1.',
	'wminc-infopage-option-startwiki' => 'Ako želite da započnete ovaj viki,
onda možete da [{{fullurl:{{FULLPAGENAME}}|action=edit}} napravite stranicu] i da pogledate [[{{MediaWiki:Wminc-manual-url}}|naš priručnik]].', # Fuzzy
	'wminc-infopage-option-startsister' => 'Ako želite da započnete ovaj viki, idite na <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Možete da pretražite [//www.$1.org postojeća jezička izdanja projekta $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Možete da pretražite postojeće projekte na ovom jeziku:',
	'wminc-infopage-option-sisterprojects-other' => 'Možete da pretražite druge projekte na ovom jeziku:',
	'wminc-infopage-option-multilingual' => 'Možete da odete na višejezički viki:', # Fuzzy
	'wminc-infopage-createmainpage' => 'Unesite reč „Glavna strana“ na ovom jeziku:',
	'wminc-infopage-contribute' => 'Ako poznajete ovaj jezik, preporučujemo vam da učestvujete!',
	'wminc-infopage-status-imported' => 'Ovaj viki Inkubator je uvezen iz $1, po zatvaranju vikija.',
	'wminc-infopage-status-closedsister' => 'Ovaj poddomen je zatvoren. Idite na <strong>$2</strong> da učestvujete na ovom vikiju.',
	'wminc-infopage-status-created' => 'Ovaj projekat je odobren od jezičkog odbora i sada je dostupan na $1.',
	'wminc-infopage-status-beforeincubator' => 'Ovaj projekat je napravljen pre početka rada Vikimedijinog Inkubatora i dostupan je na $1.',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Jopparn
 * @author Lokal Profil
 * @author Warrakkk
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'wminc-infopage-enter' => 'gå till huvudsidan',
	'wminc-unknownlang' => '(okänd språkkod)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
	'wminc-infopage-title-t' => 'Wiktionary $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikinews $1',
	'wminc-infopage-title-s' => 'Wikisource $1',
	'wminc-infopage-title-v' => 'Wikiversity $1',
	'wminc-infopage-title-y' => 'Wikivoyage $1',
	'wminc-infopage-welcome' => 'Välkommen till Wikimedia Incubator, ett projekt av Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|Om]])',
	'wminc-infopage-missingwiki-text' => 'En $1 på detta språk existerar inte ännu.',
	'wminc-infopage-option-startwiki' => "Om du vill starta denna wiki, var god följ
'''[$3 dessa steg]''' och [[{{MediaWiki:Wminc-manual-url}}|vår manual]].",
	'wminc-infopage-option-startsister' => 'Om du vill starta denna wiki, kan du gå till <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Du kan söka efter [//www.$1.org befintliga språkversioner av $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Du kan söka efter befintliga projekt på detta språk:',
	'wminc-infopage-option-sisterprojects-other' => 'Du kan söka efter andra projekt på detta språk:',
	'wminc-infopage-option-multilingual' => 'Alternativt kan du gå till en flerspråkig wiki:',
	'wminc-infopage-createmainpage' => 'Ange ordet "Huvudsida" i detta språk:',
	'wminc-infopage-contribute' => 'Om du kan detta språk, uppmuntras du att bidra!',
	'wminc-infopage-status-open' => 'Detta är en öppen wiki av Wikimedia Incubator.',
	'wminc-infopage-status-imported' => 'Denna Incubator-wiki har importerats från $1 efter det att wikin stängdes.',
	'wminc-infopage-status-closedsister' => 'Denna underdomän har stängts. Gå till <strong>$2</strong> för att bidra till denna wiki.',
	'wminc-infopage-status-approved' => 'Incubator-wikin har godkänts av [[meta:Special:MyLanguage/Language_committee|språkkommittén]] och kommer snart att skapas.',
	'wminc-infopage-status-created' => 'Detta projekt har godkänts av språkkommittén och finns nu på $1.',
	'wminc-infopage-status-beforeincubator' => 'Detta projekt skapades före Wikimedia Incubator startade och finns på $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Detta projekt finns på  $1.',
	'wminc-infopage-error' => 'Fel: {{#infopage}} kan endast användas på sidor med prefix.',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'wminc-infopage-enter' => 'முதற் பக்கத்திற்குச் செல்லவும்',
	'wminc-unknownlang' => '(அறியாத மொழிக் குறியீடு)',
	'wminc-infopage-title-p' => 'விக்கிப்பீடியா $1',
	'wminc-infopage-title-b' => 'விக்கிபுத்தகங்கள் $1',
	'wminc-infopage-title-t' => 'விக்சனரி$1',
	'wminc-infopage-title-q' => 'விக்கிமேற்கோள்$1',
	'wminc-infopage-title-n' => 'விக்கிசெய்திகள் $1',
	'wminc-infopage-title-s' => 'விக்கிமூலம் $1',
	'wminc-infopage-title-v' => 'விக்கிப்பல்கலைக்கழகம் $1',
	'wminc-infopage-missingwiki-text' => 'A  $1  இந்த மொழியில் இதுவரை இல்லை.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'wminc-infopage-title-p' => 'వికీపీడియా $1',
	'wminc-infopage-title-t' => 'విక్షనరీ $1',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'wminc-infopage-enter' => 'bá Pájina Mahuluk',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'wminc-infopage-enter' => 'pumunta sa Pangunahing Pahina',
	'wminc-unknownlang' => '(hindi nalalamang kodigo ng wika)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
	'wminc-infopage-title-t' => 'Wiktionary $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikinews $1',
	'wminc-infopage-title-s' => 'Wikisource $1',
	'wminc-infopage-title-v' => 'Wikiversity $1',
	'wminc-infopage-welcome' => 'Maligayang pagdating sa Palimliman ng Wikimedia, isang proyekto Pundasyon ng Wikimedia ([[{{MediaWiki:Aboutpage}}|Patungkol]])',
	'wminc-infopage-missingwiki-text' => 'Ang $1 na nasa ganitong wika ay hindi pa umiiral.',
	'wminc-infopage-option-startwiki' => "Kung nais mong simulan ang wiking ito, paki sundin ang 
'''[$3 ang aming mga hakbang]''' at ang [[{{MediaWiki:Wminc-manual-url}}|aming patnubay]].",
	'wminc-infopage-option-startsister' => 'Kung nais mong simulan ang wiking ito, maaari kang magpunta sa <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Maaari mong hanapin ang [//www.$1.org umiiral na mga edisyon ng wika ng $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Makapaghahanap ka ng umiiral na mga proyektong nasa ganitong wika:',
	'wminc-infopage-option-sisterprojects-other' => 'Makapaghahanap ka ng iba pang mga proyektong nasa ganitong wika:',
	'wminc-infopage-option-multilingual' => 'Makakapunta ka sa isang wiki na maramihan ang mga wika:', # Fuzzy
	'wminc-infopage-createmainpage' => 'Ipasok ang salitang "Pangunahing Pahina" sa wikang ito:',
	'wminc-infopage-contribute' => 'Kung alam mo ang wikang ito, hinihimok kang mag-ambag!',
	'wminc-infopage-status-open' => 'Isa itong bukas na wiki ng Pamisaan ng Wikimedia.',
	'wminc-infopage-status-imported' => 'Ang wiking Pamisaan na ito ay inangkat magmula sa $1 pagkaraang maisara ang wiki.',
	'wminc-infopage-status-closedsister' => 'Ang kabahaging nasasakupang ito ay naisara na. Magpunta sa <strong>$2</strong> upang makapag-ambag sa wiking ito.',
	'wminc-infopage-status-approved' => 'Ang wiking Limliman na ito ay pinayagan na ng [[meta:Special:MyLanguage/Language_committee|lupon ng wika]] at lilikhain na pagdaka.',
	'wminc-infopage-status-created' => 'Ang proyektong ito ay napayagan na ng lupon ng wika at makukuha na ngayon doon sa $1.',
	'wminc-infopage-status-beforeincubator' => 'Ang proyektong ito ay nalikha bago magsimula ang Limliman ng Wikimedia at makukuha roon sa $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Ang proyektong ito ay makukuha roon sa $1.',
	'wminc-infopage-error' => 'Kamalian: Ang {{#infopage}} ay magagamit lamang sa mga pahinang may unlapi.',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Joseph
 * @author Suelnur
 */
$messages['tr'] = array(
	'wminc-infopage-enter' => 'Ana sayfaya git',
	'wminc-unknownlang' => '(bilinmeyen dil kodu)',
	'wminc-infopage-title-p' => '$1 Vikipedi',
	'wminc-infopage-title-b' => '$1 Vikikitap',
	'wminc-infopage-title-t' => '$1 Vikisözlük',
	'wminc-infopage-title-q' => '$1 Vikisöz',
	'wminc-infopage-title-n' => '$1 Vikihaber',
	'wminc-infopage-title-s' => '$1 Vikikaynak',
	'wminc-infopage-title-v' => '$1 Vikiversite',
	'wminc-infopage-title-y' => '$1 Vikigezgin',
	'wminc-infopage-welcome' => "Bir Wikimedia Vakfı projesi olan Wikimedia Incubator'e hoş geldiniz. ([[{{MediaWiki:Aboutpage}}|Hakkında]])",
	'wminc-infopage-missingwiki-text' => '$1, bu dilde henüz mevcut değil.',
	'wminc-infopage-option-startwiki' => "Eğer bu vikiyi başlatmak istiyorsanız, lütfen
'''[$3 bu adımları]''' ve [[{{MediaWiki:Wminc-manual-url}}|el kitabımızı]] takip edin.",
	'wminc-infopage-option-startsister' => 'Bu vikiyi başlatmak istiyorsanız, <strong>[$2 $1]</strong> gidebilirsiniz.',
	'wminc-infopage-option-languages-existing' => '[//www.$1.org Mevcut dil sürümü $1] için arama yapabilirsiniz.',
	'wminc-infopage-option-sisterprojects-existing' => 'Bu dilde diğer projeler için arama yapabilirsiniz:',
	'wminc-infopage-option-sisterprojects-other' => 'Bu dilde diğer projeler için arama yapabilirsiniz:',
	'wminc-infopage-option-multilingual' => 'Alternatif olarak, çok dilli bir vikiye gidebilirsiniz:',
	'wminc-infopage-createmainpage' => 'Bu dilde "Ana Sayfa" sözcüğünü girin:',
	'wminc-infopage-contribute' => 'Eğer bu dili biliyorsanız, sizi katkıda bulunmaya davet ediyoruz!',
	'wminc-infopage-status-open' => "Bu viki Wikimedia Incubator'de açık bir vikidir.",
	'wminc-infopage-status-imported' => 'Bu kuvöz vikisi, viki kapatıldıktan sonra $1 sayfasından içeri aktarıldı.',
	'wminc-infopage-status-closedsister' => "Bu alt etki alanı kapatılmıştır. Bu vikiye katkıda bulunmak için <strong>$2</strong>'ye/ya gidin.",
	'wminc-infopage-status-approved' => 'Bu kuvöz vikisi [[meta:Special:MyLanguage/Language_committee|dil komitesi]] tarafından onaylandı ve yakında oluşturulacak.',
	'wminc-infopage-status-created' => 'Bu proje dil komitesi tarafından onaylandı ve $1 sayfasında mevcut.',
	'wminc-infopage-status-beforeincubator' => 'Bu proje Wikimedia Kuvöz başlamadan önce oluşturuldu ve $1 sayfasında mevcut.',
	'wminc-infopage-status-beforeincubator-sister' => 'Bu proje $1 sayfasında mevcut.',
	'wminc-infopage-error' => 'Hata: {{#infopage}} sadece ön ekli sayfalarda kullanılabilir.',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'wminc-infopage-enter' => 'ⴷⴷⵓ ⵖⵔ ⵜⴰⵙⵏⴰ ⵜⴰⵎⵣⵡⴰⵔⵓⵜ',
	'wminc-infopage-title-p' => 'ⵡⵉⴽⵉⴱⵉⴷⵢⴰ $1',
	'wminc-infopage-title-b' => 'ⵡⵉⴽⵉⴷⵍⵉⵙⵏ $1',
	'wminc-infopage-title-t' => 'ⵡⵉⴽⵉⵎⴰⵡⴰⵍ $1',
	'wminc-infopage-title-n' => 'ⵡⵉⴽⵉⵏⵖⵎⵉⵙⵏ $1',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Tel'et
 */
$messages['ug-arab'] = array(
	'wminc-infopage-title-t' => '$1 ۋىكىلۇغەت',
);

/** Ukrainian (українська)
 * @author Andrijko Z.
 * @author Base
 * @author Dim Grits
 * @author Ата
 * @author Тест
 */
$messages['uk'] = array(
	'wminc-infopage-enter' => 'до Головної сторінки',
	'wminc-unknownlang' => '(невідомий код мови)',
	'wminc-infopage-title-p' => 'Вікіпедія мовою «$1»',
	'wminc-infopage-title-b' => 'Вікіпідручник мовою «$1»',
	'wminc-infopage-title-t' => 'Вікісловник мовою «$1»',
	'wminc-infopage-title-q' => 'Вікіцитати мовою «$1»',
	'wminc-infopage-title-n' => 'Вікіновини мовою «$1»',
	'wminc-infopage-title-s' => 'Вікіджерела мовою «$1»',
	'wminc-infopage-title-v' => 'Віківерситет мовою «$1»',
	'wminc-infopage-title-y' => 'Віківояж мовою «$1»',
	'wminc-infopage-welcome' => 'Ласкаво просимо до Інкубатора Вікімедіа. [[{{MediaWiki:Aboutpage}}|Інформація]] про цей проект Фонду Вікімедіа',
	'wminc-infopage-missingwiki-text' => '$1 ще не має розділу цією мовою.',
	'wminc-infopage-option-startwiki' => "Якщо ви бажаєте започаткувати цей вікіпроект, будь ласка зробіть
'''[$3 ці кроки]''' та дотримуйтесь порад [[{{MediaWiki:Wminc-manual-url}}|нашої інструкції]].",
	'wminc-infopage-option-startsister' => 'Якщо ви хочете започаткувати цей вікіпроект, ви можете звернутися до <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Ви можете пошукати серед [//www.$1.org існуючих мовних розділів $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Ви можете пошукати існуючі проекти цією мовою:',
	'wminc-infopage-option-sisterprojects-other' => 'Ви можете пошукати інші проекти цією мовою:',
	'wminc-infopage-option-multilingual' => 'Крім того, Ви можете перейти до багатомовних вікіпроектів:',
	'wminc-infopage-createmainpage' => 'Введіть фразу «Головна сторінка» на цій мові:',
	'wminc-infopage-contribute' => 'Якщо Ви володієте цією мовою, Ви можете зробити свій внесок!',
	'wminc-infopage-status-open' => 'Це відкрита вікі в Інкубаторі Вікімедіа.',
	'wminc-infopage-status-imported' => 'Ця вікі була перенесена до Інкубатору з $1 після її закриття.',
	'wminc-infopage-status-closedsister' => 'Цей піддомен було закрито. Перейти до <strong>$2</strong>, щоб зробити внесок до цієї вікі.',
	'wminc-infopage-status-approved' => 'Ця інкубаторна вікі була затверджена [[meta:Special:MyLanguage/Language_committee|мовним комітетом]] і буде скоро створена.',
	'wminc-infopage-status-created' => 'Цей проект було схвалено мовним комітетом і тепер він доступний на $1.',
	'wminc-infopage-status-beforeincubator' => 'Цей проект було створено до існування Інкубатора Вікімедіа, доступний $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Цей проект доступний за адресою $1.',
	'wminc-infopage-error' => 'Помилка: {{#infopage}} може використовуватись лише на сторінках із префіксом.',
);

/** Vietnamese (Tiếng Việt)
 * @author Kimkha
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'wminc-infopage-enter' => 'đi đến Trang Chính',
	'wminc-unknownlang' => '(ngôn ngữ không rõ)',
	'wminc-infopage-title-p' => 'Wikipedia $1',
	'wminc-infopage-title-b' => 'Wikibooks $1',
	'wminc-infopage-title-t' => 'Wiktionary $1',
	'wminc-infopage-title-q' => 'Wikiquote $1',
	'wminc-infopage-title-n' => 'Wikinews $1',
	'wminc-infopage-title-s' => 'Wikisource $1',
	'wminc-infopage-title-v' => 'Wikiversity $1',
	'wminc-infopage-title-y' => 'Wikivoyage $1',
	'wminc-infopage-welcome' => 'Hoan nghênh bạn đến với Vườn ươm Wikimedia, một dự án của Quỹ Wikimedia ([[{{MediaWiki:Aboutpage}}|Giới thiệu]])',
	'wminc-infopage-missingwiki-text' => '$1 chưa có sẵn trong ngôn ngữ này.',
	'wminc-infopage-option-startwiki' => "Nếu bạn muốn bắt đầu xây dựng wiki này, xin vui lòng tiến hành '''[$3 các bước này]''' và thực hiện theo [[{{MediaWiki:Wminc-manual-url}}|sách hướng dẫn của chúng ta]].",
	'wminc-infopage-option-startsister' => 'Để bắt đầu wiki này, hãy ghé vào <strong>[$2 $1]</strong>.',
	'wminc-infopage-option-languages-existing' => 'Bạn có thể tìm kiếm [//www.$1.org phiên bản ngôn ngữ hiện có của $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Bạn có thể tìm kiếm các dự án hiện có trong ngôn ngữ này:',
	'wminc-infopage-option-sisterprojects-other' => 'Bạn có thể tìm kiếm các dự án khác dùng ngôn ngữ này:',
	'wminc-infopage-option-multilingual' => 'Hoặc bạn có thể ghé vào một wiki đa ngôn ngữ:',
	'wminc-infopage-createmainpage' => 'Nhập từ “Trang Chính” trong ngôn ngữ này:',
	'wminc-infopage-contribute' => 'Nếu bạn biết ngôn ngữ này, rất hoan nghênh bạn đóng góp cho nó!',
	'wminc-infopage-status-open' => 'Đây là một wiki đang mở cửa trực thuộc Vườn ươm Wikimedia.',
	'wminc-infopage-status-imported' => 'Wiki Vườn ươm này đã được nhập từ $1 sau khi wiki đó bị đóng cửa.',
	'wminc-infopage-status-closedsister' => 'Tên miền phụ này đã bị đóng cửa. Hãy ghé vào <strong>$2</strong> để đóng góp vào wiki này.',
	'wminc-infopage-status-approved' => 'Wiki Vườn ươm này đã được [[meta:Special:MyLanguage/Language_committee|ủy ban ngôn ngữ]] chấp nhận và sẽ được tạo ra không lâu.',
	'wminc-infopage-status-created' => 'Dự án đã được ủy ban ngôn ngữ chấp thuận và hiện có sẵn tại $1.',
	'wminc-infopage-status-beforeincubator' => 'Dự án này được tạo trước khi Vườn ươm Wikimedia mở cửa và hiện có sẵn tại $1.',
	'wminc-infopage-status-beforeincubator-sister' => 'Dự án này có sẵn tại $1.',
	'wminc-infopage-error' => 'Lỗi: Chỉ có thể sử dụng {{#infopage}} tại các trang có tiền tố.',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'wminc-infopage-title-p' => 'וויקיפעדיע $1',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Anakmalaysia
 * @author Dalt
 * @author Hydra
 * @author Liangent
 */
$messages['zh-hans'] = array(
	'wminc-infopage-enter' => '转至主页',
	'wminc-unknownlang' => '（未知的语言代码）',
	'wminc-infopage-title-p' => '$1维基百科',
	'wminc-infopage-title-b' => '$1维基教科书',
	'wminc-infopage-title-t' => '$1维基词典',
	'wminc-infopage-title-q' => '$1维基语录',
	'wminc-infopage-title-n' => '$1维基新闻',
	'wminc-infopage-title-s' => '$1维基文库',
	'wminc-infopage-title-v' => '$1维基学院',
	'wminc-infopage-title-y' => '$1维基导游',
	'wminc-infopage-welcome' => '欢迎来到维基孵育场，维基媒体基金会各有项目之一
（[[{{MediaWiki:Aboutpage}}|关于我们]]）',
	'wminc-infopage-missingwiki-text' => '这种语言的$1尚未存在。',
	'wminc-infopage-option-startwiki' => "若想创建这个维基项目，请跟从'''[$3 这些步骤]'''并按照我们所提供的[[{{MediaWiki:Wminc-manual-url}}|手册]]。",
	'wminc-infopage-option-startsister' => '若想创建这个维基项目，请转到<strong>[$2 $1]</strong>。',
	'wminc-infopage-option-languages-existing' => '您可以搜索[//www.$1.org $1所现有的语言版本]。',
	'wminc-infopage-option-sisterprojects-existing' => '您可以在这种语言中搜索现有项目：',
	'wminc-infopage-option-sisterprojects-other' => '您可以在这种语言搜索其他项目：',
	'wminc-infopage-option-multilingual' => '您可以另外转到一个多语种的维基项目：',
	'wminc-infopage-createmainpage' => '输入“主页”此词在这种语言的翻译：',
	'wminc-infopage-contribute' => '如果您会这门语言，欢迎您做出贡献！',
	'wminc-infopage-status-open' => '这是维基孵育场的一个开放测试维基。',
	'wminc-infopage-status-imported' => '该维基项目关闭后，这个孵育场维基已从$1导入。',
	'wminc-infopage-status-closedsister' => '此子域名已关闭。请转到<strong>$2</strong>为此维基项目作出贡献。',
	'wminc-infopage-status-approved' => '这个维基媒体孵育场的维基已被 [[meta:Special:MyLanguage/Language_committee|语言委员会]] 批准，此维基很快就会被创建了。',
	'wminc-infopage-status-created' => '此项目已经受语言委员会批准，现已在$1可以使用。',
	'wminc-infopage-status-beforeincubator' => '此项目已在维基孵育场开场之前创建，而在$1可以使用。',
	'wminc-infopage-status-beforeincubator-sister' => '此项目现在是在 $1 。',
	'wminc-infopage-error' => '错误：{{#infopage}} 只能在有字首的页面上利用。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Anakmalaysia
 * @author Oapbtommy
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'wminc-infopage-enter' => '轉到主頁',
	'wminc-unknownlang' => '（未知的語言代碼）',
	'wminc-infopage-title-p' => '$1維基百科',
	'wminc-infopage-title-b' => '$1維基教科書',
	'wminc-infopage-title-t' => '$1維基詞典',
	'wminc-infopage-title-q' => '$1維基語錄',
	'wminc-infopage-title-n' => '$1維基新聞',
	'wminc-infopage-title-s' => '$1維基文庫',
	'wminc-infopage-title-v' => '$1維基學院',
	'wminc-infopage-title-y' => '$1維基導遊',
	'wminc-infopage-welcome' => '歡迎來到維基孵育場，維基媒體基金會各有項目之一
（[[{{MediaWiki:Aboutpage}}|關於我們]]）',
	'wminc-infopage-missingwiki-text' => '這種語言的$1尚未存在。',
	'wminc-infopage-option-startwiki' => "若想創建這個維基項目，請按照'''[$3 這些步驟]'''和[[{{MediaWiki:Wminc-manual-url}}|這本手冊]]。",
	'wminc-infopage-option-startsister' => '若想創建這個維基項目，請轉到<strong>[$2 $1]</strong>。',
	'wminc-infopage-option-languages-existing' => '您可以搜尋[//www.$1.org $1所現有的語言版本]。',
	'wminc-infopage-option-sisterprojects-existing' => '您可以在這種語言中搜尋現有項目：',
	'wminc-infopage-option-sisterprojects-other' => '您可以在這種語言中搜尋其他項目：',
	'wminc-infopage-option-multilingual' => '或者您可以轉到一個多語種的維基項目：',
	'wminc-infopage-createmainpage' => '輸入「主頁」此詞在這種語言的翻譯：',
	'wminc-infopage-contribute' => '如果您會這門語言，歡迎您做出貢獻！',
	'wminc-infopage-status-open' => '這是維基孵育場的一個開放測試維基。',
	'wminc-infopage-status-imported' => '該維基項目關閉後，這個孵育場維基已從$1導入。',
	'wminc-infopage-status-closedsister' => '此子域名已關閉。請轉到<strong>$2</strong>為此維基項目作出貢獻。',
	'wminc-infopage-status-approved' => '這個維基媒體孵育場的維基已被[[meta:Special:MyLanguage/Language_committee|語言委員會]]批准，此維基很快就會被創建了。',
	'wminc-infopage-status-created' => '此項目已經受語言委員會批准，現已在$1可以使用。',
	'wminc-infopage-status-beforeincubator' => '此項目已在維基孵育場開場之前創建，而在$1可以使用。',
	'wminc-infopage-status-beforeincubator-sister' => '此項目現在是在 $1 。',
	'wminc-infopage-error' => '錯誤：{{#infopage}} 只能在有字首的頁面上利用。',
);
