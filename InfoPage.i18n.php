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
	'wminc-unknownlang' => '(unknown language with code "$1")',
	'wminc-logo-wikipedia' => 'Wikipedia-logo-v2-en.svg', # only translate if necessary
	'wminc-logo-wiktionary' => 'Wiktionary-logo-en.svg', # only translate if necessary
	'wminc-logo-wikibooks' => 'Wikibooks-logo-en-noslogan.svg', # only translate if necessary
	'wminc-logo-wikinews' => 'Wikinews-logo-en.png', # only translate if necessary
	'wminc-logo-wikiquote' => 'Wikiquote-logo-en.svg', # only translate if necessary
	'wminc-logo-wikisource' => 'Wikisource-newberg-de.png', # only translate if necessary
	'wminc-logo-wikiversity' => 'Wikiversity-logo-en.svg', # only translate if necessary
	'wminc-logo-meta-wiki' => 'Metawiki.svg', # only translate if necessary
	'wminc-logo-wikimedia-commons' => 'Commons-logo-en.svg', # only translate if necessary
	'wminc-logo-wikispecies' => 'WikiSpecies.svg', # only translate if necessary
	'wminc-logo-mediawiki' => 'MediaWiki.svg', # only translate if necessary
	'wminc-manual-url' => 'Help:Manual', # only translate if necessary
	'wminc-infopage-title' => '$1 $2', # only translate if necessary
	'wminc-infopage-welcome' => 'Welcome to the Wikimedia Incubator, a project of the Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|About]])',

	'wminc-infopage-missingwiki-text' => 'A $1 in this language does not yet exist.',
	'wminc-infopage-option-startwiki' => 'If you want to start this wiki,
you can [{{fullurl:{{FULLPAGENAME}}|action=edit}} create the page] and follow [[{{MediaWiki:Wminc-manual-url}}|our manual]].',
	'wminc-infopage-option-languages-existing' => 'You can search for [http://www.$1.org existing language editions of $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'You can search for existing projects in this language:',
	'wminc-infopage-option-sisterprojects-other' => 'You can search for other projects in this language:',
	'wminc-infopage-option-multilingual' => 'You can go to a multilingual wiki:',
	'wminc-infopage-createmainpage' => 'Enter the word "Main Page" in this language:',
	'wminc-infopage-prefill' => '{{test wiki
| status = tocreate
| language = Language name in English
| meta = <!-- is there a request on Meta-Wiki? -->
}}', # do not translate
	'wminc-infopage-contribute' => 'If you know this language, you are encouraged to contribute!',

	'wminc-infopage-status-imported' => 'This Incubator wiki has been imported from $1 after the wiki was closed.',
	'wminc-infopage-status-created' => 'This project has been approved by the language committee and is now available at $1.',
	'wminc-infopage-status-beforeincubator' => 'This project was created before Wikimedia Incubator started and is available at $1.',
);

/** Message documentation (Message documentation)
 * @author SPQRobin
 */
$messages['qqq'] = array(
	'wminc-infopage-enter' => 'Text of a link to the Main Page of a test wiki at Incubator.',
	'wminc-infopage-welcome' => 'Do not change <tt><nowiki>{{MediaWiki:Aboutpage}}</nowiki></tt>.',
	'wminc-infopage-missingwiki-text' => "'''$1''' is a project: Wikipedia/Wiktionary/...",
	'wminc-infopage-option-languages-existing' => "'''$1''' is the project name (Wikipedia, Wikinews, ...).",
	'wminc-infopage-option-sisterprojects-existing' => 'Followed by clickable logos of projects Wikipedia, Wiktionary, Wikibooks, ...',
	'wminc-infopage-option-sisterprojects-other' => 'Followed by clickable logos of projects Wikipedia, Wiktionary, Wikibooks, ...',
	'wminc-infopage-option-multilingual' => 'Followed by clickable logos of Meta, Commons, Wikispecies and MediaWiki.',
	'wminc-infopage-createmainpage' => 'Followed by an input box to enter the translation for "Main Page".',
	'wminc-infopage-status-imported' => "'''$1''' is a URL to the closed wiki.",
	'wminc-infopage-status-created' => "'''$1''' is a URL to the existing wiki.",
	'wminc-infopage-status-beforeincubator' => "'''$1''' is a URL to the existing wiki.",
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'wminc-infopage-option-startwiki' => 'Калі Вы жадаеце распачаць гэтую вікі,
Вы можаце [{{fullurl:{{FULLPAGENAME}}|action=edit}} стварыць старонку] і выканаць [[{{MediaWiki:Wminc-manual-url}}|нашыя інструкцыі]].',
	'wminc-infopage-option-languages-existing' => 'Вы можаце пашукаць [http://www.$1.org існуючыя моўныя варыянты $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Вы можаце пашукаць існуючыя праекты на гэтай мове:',
	'wminc-infopage-option-sisterprojects-other' => 'Вы можаце пашукаць іншыя праекты на гэтай мове:',
	'wminc-infopage-option-multilingual' => 'Вы можаце перайсьці ў шматмоўную вікі:',
	'wminc-infopage-createmainpage' => 'Увядзіце словы «Галоўная старонка» на гэтай мове:',
	'wminc-infopage-contribute' => 'Калі Вы ведаеце гэтую мову, Вы можаце рабіць унёсак!',
	'wminc-infopage-status-imported' => 'Гэтая вікі ў інкубатары была імпартаваная з $1 пасьля таго, як вікі была закрытая.',
	'wminc-infopage-status-created' => 'Гэты праект быў зацьверджаны моўным камітэтам, і цяпер ён даступны на $1.',
	'wminc-infopage-status-beforeincubator' => 'Гэты праект быў створаны перад пачаткам функцыянаваньня Інкубатара фундацыі «Вікімэдыя» і ён даступны на $1.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Polletfa
 */
$messages['de'] = array(
	'wminc-infopage-enter' => 'Geh zur Haupseite',
	'wminc-unknownlang' => '(unbekannte Sprache mit Code „$1“)',
	'wminc-infopage-welcome' => 'Willkommen beim Wikimedia Incubator, einem Projekt der Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|Über]])',
	'wminc-infopage-missingwiki-text' => 'Ein $1 in dieser Sprache ist noch nicht vorhanden.',
	'wminc-infopage-option-startwiki' => 'Sofern du dieses Wiki starten möchtest,
kannst du [{{fullurl:{{FULLPAGENAME}}|action=edit}} die Seite erstellen] und gemäß [[{{MediaWiki:Wminc-manual-url}}|unserer Anleitung]] vorgehen.',
	'wminc-infopage-option-languages-existing' => 'Du kannst auf [http://www.$1.org nach vorhandenen Sprachausgaben von $1] suchen.',
	'wminc-infopage-option-sisterprojects-existing' => 'Du kannst nach vorhandenen Projekten in dieser Sprache suchen:',
	'wminc-infopage-option-sisterprojects-other' => 'Du kannst nach anderen Projekten in dieser Sprache suchen:',
	'wminc-infopage-option-multilingual' => 'Du kannst zu einem mehrsprachigen Wiki gehen:',
	'wminc-infopage-createmainpage' => 'Gib das Wort für „Hauptseite“ in dieser Sprache ein:',
	'wminc-infopage-contribute' => 'Sofern du diese Sprache beherrschst, bist du herzlich willkommen, mitzumachen!',
	'wminc-infopage-status-imported' => 'Dieses Wiki des Incubators wurde aus $1 importiert nach dem es geschlossen wurde.',
	'wminc-infopage-status-created' => 'Dieses Projekt wurde vom Ausschuss für Sprachen genehmigt und ist nun unter $1 verfügbar..',
	'wminc-infopage-status-beforeincubator' => 'Dieses Projekt wurde erstellt bevor es den Wikimedia Incubator gab und ist verfügbar unter $1',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 * @author Polletfa
 */
$messages['de-formal'] = array(
	'wminc-infopage-option-startwiki' => 'Sofern Sie dieses Wiki starten möchten,
können Sie [{{fullurl:{{FULLPAGENAME}}|action=edit}} die Seite erstellen] und gemäß [[{{MediaWiki:Wminc-manual-url}}|unserer Anleitung]] vorgehen.',
	'wminc-infopage-option-languages-existing' => 'Sie können auf [http://www.$1.org nach vorhandenen Sprachausgaben von $1] suchen.',
	'wminc-infopage-option-sisterprojects-existing' => 'Sie können nach vorhandenen Projekten in dieser Sprache suchen:',
	'wminc-infopage-option-sisterprojects-other' => 'Sie können nach anderen Projekten in dieser Sprache suchen:',
	'wminc-infopage-option-multilingual' => 'Sie können ein mehrsprachiges Wiki aufsuchen:',
	'wminc-infopage-createmainpage' => 'Geben Sie das Wort für „Hauptseite“ in dieser Sprache ein:',
	'wminc-infopage-contribute' => 'Wenn Sie diese Sprache beherrschen, sind Sie herzlich willkommen, mitzumachen!',
);

/** Spanish (Español)
 * @author Diotime
 */
$messages['es'] = array(
	'wminc-infopage-contribute' => '¡Si entiendes esta lengua, te animamos a contribuir!',
);

/** French (Français)
 * @author
 */
$messages['fr'] = array(
	'wminc-infopage-contribute' => 'Si vous parlez cette langue, vous êtes invités à contribuer !',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'wminc-infopage-enter' => 'vader al pagina principal',
	'wminc-unknownlang' => '(lingua incognite con codice "$1")',
	'wminc-infopage-welcome' => 'Benvenite a Wikimedia Incubator, un projecto del Fundation Wikimedia ([[{{MediaWiki:Aboutpage}}|a proposito]])',
	'wminc-infopage-missingwiki-text' => 'Un $1 in iste lingua non existe ancora.',
	'wminc-infopage-option-startwiki' => 'Si tu vole comenciar iste wiki,
tu pote [{{fullurl:{{FULLPAGENAME}}|action=edit}} crear le pagina] e sequer [[{{MediaWiki:Wminc-manual-url}}|nostre manual]].',
	'wminc-infopage-option-languages-existing' => 'Tu pote cercar [http://www.$1.org existente editiones de lingua de $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Tu pote cercar projectos existente in iste lingua:',
	'wminc-infopage-option-sisterprojects-other' => 'Tu pote cercar altere projectos in iste lingua:',
	'wminc-infopage-option-multilingual' => 'Tu pote vader a un wiki multilingue:',
	'wminc-infopage-createmainpage' => 'Entra le parola(s) pro "pagina principal" in iste lingua:',
	'wminc-infopage-contribute' => 'Si tu cognosce iste lingua, tu es incoragiate a contribuer!',
	'wminc-infopage-status-imported' => 'Iste wiki incubator ha essite importate ex $1 post le clausura del wiki.',
	'wminc-infopage-status-created' => 'Iste projecto ha essite approbate per le comité linguistic e es ora disponibile a $1.',
	'wminc-infopage-status-beforeincubator' => 'Iste projecto ha essite create ante le comenciamento de Wikimedia Incubator e es disponibile a $1.',
);

/** Korean (한국어)
 * @author Albamhandae
 */
$messages['ko'] = array(
	'wminc-infopage-contribute' => '이 시험판에 쓰여진 언어를 아신다면, 기여를 부탁드립니다!',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'wminc-infopage-contribute' => 'Wann De di Shprooch kanns, dann bes De opjeroofe, beizedraare!',
);

/** Lithuanian (Lietuvių)
 * @author Matasg
 */
$messages['lt'] = array(
	'wminc-infopage-contribute' => 'Jei suprantate, ar kalbate šią kalba, esate kviečiama(s) prisidėti!',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'wminc-infopage-enter' => 'оди на Главна страница',
	'wminc-unknownlang' => '(непознат јазик со код „$1“)',
	'wminc-logo-wikipedia' => 'Wikipedia-logo-v2-mk.svg',
	'wminc-infopage-welcome' => 'Добредојдовте на Инкубаторот на Викимедија - проект на Фондацијата Викимедија ([[{{MediaWiki:Aboutpage}}|За проектот]])',
	'wminc-infopage-missingwiki-text' => 'На овој јазик сè уште не постои $1.',
	'wminc-infopage-option-startwiki' => 'Ако сакате да го започнете ова вики,
тогаш можете да ја [{{fullurl:{{FULLPAGENAME}}|action=edit}} создадете страницата] и да го проследите [[{{MediaWiki:Wminc-manual-url}}|нашиот прирачник]].',
	'wminc-infopage-option-languages-existing' => 'Можете да ги пребарате [http://www.$1.org постоечките јазични изданија на $1].',
	'wminc-infopage-option-sisterprojects-existing' => 'Можете да ги пребарате постоечките проекти на овој јазик:',
	'wminc-infopage-option-sisterprojects-other' => 'Можете да пребарате други проекти на овој јазик:',
	'wminc-infopage-option-multilingual' => 'Можете да појдете на повеќејазично вики:',
	'wminc-infopage-createmainpage' => 'Внесете го зборот „Главна страница“ на овој јазик:',
	'wminc-infopage-contribute' => 'Ако имате познавања од овој јазик, ви препорачуваме да учествувате!',
	'wminc-infopage-status-imported' => 'Ова вики на Инкубаторот е увезено од $1, по затворањето на викито.',
	'wminc-infopage-status-created' => 'Овој проект е одобрен од јазичната комисија и сега е достапен на $1.',
	'wminc-infopage-status-beforeincubator' => 'Овој проект е создаден пред започнувањето на Инкубаторот на Викимедија и е достапен на $1.',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 */
$messages['nl'] = array(
	'wminc-infopage-enter' => 'ga naar de Hoofdpagina',
	'wminc-unknownlang' => '(onbekende taal met code "$1")',
	'wminc-infopage-welcome' => 'Welkom bij de Wikimedia Incubator, een project van de Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|Meer info]])',
	'wminc-infopage-missingwiki-text' => 'Een $1 in deze taal bestaat nog niet.',
	'wminc-infopage-option-startwiki' => 'Als u deze wiki wilt starten, kunt u [{{fullurl:{{FULLPAGENAME}}|action=edit}} de pagina aanmaken] en [[{{MediaWiki:Wminc-manual-url}}|onze handleiding]] volgen.',
	'wminc-infopage-option-languages-existing' => 'U kunt naar [http://www.$1.org bestaande taalversies van $1] zoeken.',
	'wminc-infopage-option-sisterprojects-existing' => 'U kunt naar bestaande projecten in deze taal zoeken:',
	'wminc-infopage-option-sisterprojects-other' => 'U kunt naar andere projecten in deze taal zoeken:',
	'wminc-infopage-option-multilingual' => 'U kunt naar een meertalige wiki gaan:',
	'wminc-infopage-createmainpage' => 'Geef het woord "Hoofdpagina" op in deze taal:',
	'wminc-infopage-contribute' => 'Als u deze taal kent, wordt u aangemoedigd om bij te dragen!',
	'wminc-infopage-status-imported' => 'Deze Incubator-wiki werd geïmporteerd van $1 nadat die wiki is gesloten.',
	'wminc-infopage-status-created' => 'Dit project werd goedgekeurd door het taalcomité en is nu beschikbaar op $1.',
	'wminc-infopage-status-beforeincubator' => 'Dit project is gemaakt voordat Wikimedia Incubator begon en is beschikbaar op $1.',
);

/** Portuguese (Português)
 * @author Carla404
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'wminc-infopage-enter' => 'ir para a Página principal',
	'wminc-unknownlang' => '(língua desconhecida, com o código "$1")',
	'wminc-infopage-welcome' => 'Bem-vindo(a) Incubadora Wikimedia, um projecto da Wikimedia Foundation ([[{{MediaWiki:Aboutpage}}|Sobre]])',
	'wminc-infopage-missingwiki-text' => 'Ainda não existe um projecto $1 nesta língua.',
	'wminc-infopage-option-startwiki' => 'Se pretende iniciar esta wiki,
pode [{{fullurl:{{FULLPAGENAME}}|action=edit}} criar a página] e seguir o [[{{MediaWiki:Wminc-manual-url}}|manual]].',
	'wminc-infopage-option-languages-existing' => 'Pode pesquisar as [http://www.$1.org edições de $1 nas línguas existentes].',
	'wminc-infopage-option-sisterprojects-existing' => 'Pode pesquisar os projectos existentes nesta língua:',
	'wminc-infopage-option-sisterprojects-other' => 'Pode pesquisar outros projectos nesta língua:',
	'wminc-infopage-option-multilingual' => 'Pode visitar uma wiki multilingue:',
	'wminc-infopage-createmainpage' => 'Introduza o termo "Página principal" nesta língua:',
	'wminc-infopage-contribute' => 'Se conhece esta língua, está convidado a colaborar!',
	'wminc-infopage-status-imported' => 'Esta wiki da Incubadora foi importada de $1 após a wiki ter sido fechada.',
	'wminc-infopage-status-created' => 'Este projecto foi aprovado pelo comité linguístico e está agora disponível em $1.',
	'wminc-infopage-status-beforeincubator' => 'Este projecto foi criado antes do início da Incubadora Wikimedia e está disponível em $1.',
);

/** Russian (Русский)
 * @author Amdf
 */
$messages['ru'] = array(
	'wminc-infopage-contribute' => 'Если вы понимаете этот язык, вы можете внести свой вклад!',
);

/** Rusyn (Русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'wminc-infopage-contribute' => 'Кідь розумієте тот язык, рекомендуєме, жебы сьте приспівали!',
);

/** Albanian (Shqip)
 * @author Olsi
 */
$messages['sq'] = array(
	'wminc-infopage-contribute' => 'Nëse e dini këtë gjuhë, jeni të inkurajuar të kontribuoni!',
);

/** Ukrainian (Українська)
 * @author Andrijko Z.
 */
$messages['uk'] = array(
	'wminc-infopage-contribute' => 'Якщо ви розумієте цю мову, ви можете внести свій вклад!',
);

/** Vietnamese (Tiếng Việt)
 * @author Kimkha
 */
$messages['vi'] = array(
	'wminc-infopage-contribute' => 'Nếu bạn biết ngôn ngữ này, rất hoan nghênh bạn đóng góp cho nó!',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Dalt
 */
$messages['zh-hans'] = array(
	'wminc-infopage-contribute' => '如果您会这门语言，欢迎您做出贡献！',
);

