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
	# General messages
	'wminc-desc' => 'Test wiki system for Wikimedia Incubator',
	'wminc-manual' => 'Manual',
	'wminc-listwikis' => 'List of wikis',
	'wminc-testwiki' => 'Test wiki:',
	'wminc-testwiki-code' => 'Test wiki language:',
	'wminc-testwiki-none' => 'None/All',
	'wminc-testwiki-site' => '(Maintenance)',
	'wminc-recentchanges-all' => 'All recent changes',

	# Preferences
	'wminc-prefinfo-language' => 'Your interface language - independent from your test wiki',
	'wminc-prefinfo-code' => 'The ISO 639 code of the language you are working on here',
	'wminc-prefinfo-project' => 'Select the Wikimedia project you are working on here',
	'wminc-prefinfo-error' => 'You selected a project that needs a language code.',

	# Editing/creating pages errors
	'wminc-error-help' => 'Help:Contents',
	'wminc-error-move-unprefixed' => "Error: The page you are trying to move to [[{{MediaWiki:Wminc-error-help}}|is unprefixed or has a wrong prefix]]!",
	'wminc-error-wronglangcode' => "'''Error:''' This page contains a [[{{MediaWiki:Wminc-error-help}}|wrong language code]] \"$1\"!",
	'wminc-error-unprefixed' => "'''Error:''' This page is [[{{MediaWiki:Wminc-error-help}}|unprefixed]]!",
	'wminc-error-unprefixed-suggest' => "'''Error:''' This page is [[{{MediaWiki:Wminc-error-help}}|unprefixed]]! You can create a page at [[:$1]].",
	'wminc-error-wiki-exists' => 'This wiki already exists. You can find this page on $1. If the wiki was recently created, please wait a few hours or days until all content is imported.',
	'wminc-error-wiki-sister' => 'This page belongs to a project that is not hosted here. Please go to $1 to find the wiki.',

	# Special:RandomByTest
	'randombytest' => 'Random page by test wiki',
	'randombytest-nopages' => 'There are no pages in your test wiki, in the namespace: $1.',

	# Special:ViewUserLang
	'wminc-viewuserlang' => 'Look up user language and test wiki',
	'wminc-viewuserlang-user' => 'Username:',
	'wminc-viewuserlang-go' => 'Go',
	'wminc-userdoesnotexist' => 'The user "$1" does not exist.',
	'wminc-ip' => '"$1" is an IP address.',

	# User groups
	'right-viewuserlang' => 'View user language and test wiki',
	'group-test-sysop' => 'Test wiki administrators',
	'group-test-sysop-member' => '{{GENDER:$1|test wiki administrator}}',
	'grouppage-test-sysop' => '{{ns:project}}:Test wiki administrators',

	'group-test-sysop.css' => '/* CSS placed here will affect test wiki administrators only */', # only translate this message to other languages if you have to change it
	'group-test-sysop.js'  => '/* JS placed here will affect test wiki administrators only */', # only translate this message to other languages if you have to change it

	# Language codes
	'wminc-code-macrolanguage' => 'The [[wikipedia:$2 language|"$3" language]] is a [[wikipedia:ISO 639 macrolanguage|macrolanguage]], consisting of the following member languages:',
	'wminc-code-collective' => 'The code "$1" does not refer to a specific language, but to a collection of languages, namely the [[wikipedia:$2 language|"$3" languages]].',
	'wminc-code-retired' => 'This language code has been changed and no longer refers to the original language.',

	# Special:ListUsers
	'wminc-listusers-testwiki' => 'You are viewing users who have set their test wiki preference to $1.',

	# Search
	'wminc-search-nocreate-nopref' => 'You searched for "$1". Please set your [[Special:Preferences|test wiki preference]] so we can tell you which page you can create!',
	'wminc-search-nocreate-suggest' => 'You searched for "$1". You can create a page in your wiki at <strong>[[$2]]</strong>!',

	# SearchWiki
	'wminc-searchwiki' => 'Search for a wiki',
	'wminc-searchwiki-noproject' => 'You did not select a project.',
	'wminc-searchwiki-noresults' => 'No results. You can search by language codes, native names and names in your interface language or English.',
	'wminc-searchwiki-selectproject' => 'Search for:',
	'wminc-searchwiki-inputlanguage' => 'In language:',
	'wminc-searchwiki-go' => 'Go',
	'wminc-searchwiki-multiplematches' => 'Your search matches the following languages:',
	'wminc-searchwiki-match-langcode' => '"$1" is an ISO 639 language code for $2.',
	'wminc-searchwiki-match-userlangname' => '$1 is the name of a language.',
	'wminc-searchwiki-match-englishname' => '"$1" is the name for $2 in English.',
	'wminc-searchwiki-match-nativename' => '"$1" is the name for $2 in that language.',
	'wminc-searchwiki-goto' => '<strong>$1</strong> ($2)',
	'wminc-searchwiki-gotoinfopage' => 'info page',

	# Special:IncubatorFirstSteps
	'wminc-fs-pagetitle' => 'Getting started wizard - $1',
	'wminc-fs-langselect-title' => 'Select language',
	'wminc-fs-signup-title' => 'Sign up',
	'wminc-fs-settings-title' => 'Set your wiki preference',
	'wminc-fs-userpage-title' => 'Create your userpage',
	'wminc-fs-startwiki-title' => 'Start your wiki',
	'wminc-fs-pagetitle-done' => ' - done!',
	'wminc-fs-intro' => "Welcome to the {{SITENAME}} first steps wizard. You will be guided through the process of starting a new wiki.",
	'wminc-fs-langselect' => 'Proceed in $1 or $2',
	'wminc-fs-langselect-langs' => 'en,ar,de,eo,fr,es,id,it,ja,nl,pl,pt-br,ru,tr,zh', # do not translate
	'wminc-fs-signup-text' => 'If you already have a user account, please [$1 log in]. If you do not have one yet, please [$2 create a user account].
It is not required but strongly recommended and only takes a few seconds to create.',
	'wminc-fs-settings-image' => '[[File:Incubator wiki preference.png|thumb|350px]]', # do not translate
	'wminc-fs-settings-text' => 'Please now go to [[Special:Preferences|your preferences]] and change your test wiki setting.
At the right you see the relevant options you have on that page. The first one is your interface language, which you have chosen in the first step, but you can still change it.
The second one is the project you want to contribute to and the third one is the language code of the project you want to contribute to.
If you don\'t know the code, please consult our [[{{MediaWiki:Wminc-manual-url}}|manual]] or ask for [[{{MediaWiki:Portal-url}}|help]].',
	'wminc-fs-userpage-text' => 'Please now create your userpage $1 with some basic info about yourself. You can also see a link to it at the top of this page.',
	'wminc-fs-globaluser-text' => 'Your user account is local. It is recommended to make it global via $1 so you can use it on any Wikimedia wiki.',
	'wminc-fs-startwiki-text' => 'The prefix of your wiki is <strong>$1</strong>. You can start the wiki by creating the wiki\'s Main Page at <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'The prefix of your wiki is $1. The Main Page is at $2. You can now collaborate with other speakers of this language to build a community!
If you want to create a page, just type in the name in the search box above, and follow the link you will see.',
);

/** Message documentation (Message documentation)
 * @author Chaojoker
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Nike
 * @author Purodha
 * @author Raymond
 * @author SPQRobin
 * @author Siebrand
 * @author Umherirrender
 * @author Whym
 * @author Yekrats
 */
$messages['qqq'] = array(
	'wminc-desc' => '{{desc}}',
	'wminc-manual' => 'As in "handbook" (a page with a step-by-step guide).',
	'wminc-listwikis' => 'List of wikis that are in Wikimedia Incubator. Please keep it short as it is used in the sidebar.',
	'wminc-testwiki' => 'See [[:File:Incubator-testwiki-preference.jpg]].',
	'wminc-testwiki-code' => 'Used on Special:Preferences as the label for entering the language code of the test wiki.',
	'wminc-testwiki-none' => "* Used on Special:Preferences when the user didn't select a test wiki preference (yet).
* Used on Special:RecentChanges to show normal recent changes display.",
	'wminc-testwiki-site' => 'Used on Special:Preferences as an option for users not working on a specific test wiki',
	'wminc-recentchanges-all' => 'Used in the sidebar for a link to Special:RecentChanges (with default view of all changes).',
	'wminc-prefinfo-language' => 'See [[:File:Incubator-testwiki-preference.jpg]]. Extra clarification for the (normal) language selection.',
	'wminc-prefinfo-code' => 'See [[:File:Incubator-testwiki-preference.jpg]].',
	'wminc-prefinfo-project' => 'Explanation for a dropdown box in your preferences, with options: "None/All", "Wikipedia", "Wikibooks", "Wikinews", etc... and "Incubator". See [[:File:Incubator-testwiki-preference.jpg]].',
	'wminc-prefinfo-error' => 'See [[:File:Incubator-testwiki-preference.jpg]]. If the user selected a Wikimedia project but not a language code, this error message is shown.',
	'wminc-error-move-unprefixed' => 'Do not change <code><nowiki>{{MediaWiki:Wminc-error-help}}</nowiki></code>',
	'wminc-error-wronglangcode' => '* $1 is a language code.
* Do not change <code><nowiki>{{MediaWiki:Wminc-error-help}}</nowiki></code>',
	'wminc-error-unprefixed-suggest' => '* $1 is a new page title based on the page title the user is currently trying to edit. E.g. "Test" would become "Wx/xx/Test".
* Do not change <code><nowiki>{{MediaWiki:Wminc-error-help}}</nowiki></code>',
	'wminc-error-wiki-exists' => "'''$1''' is a URL to the existing wiki.",
	'wminc-error-wiki-sister' => '$1 is a link to either Wikisource or Wikiversity.',
	'randombytest' => '[[Special:Special:RandomByTest]] goes to a random page in a incubator wiki. 
For more information see: http://www.mediawiki.org/wiki/Extension:WikimediaIncubator',
	'wminc-viewuserlang' => 'Title of a special page to look up the language and test wiki of a user. See [[:File:Incubator-testwiki-viewuserlang.jpg]].',
	'wminc-viewuserlang-user' => 'Label for the input.

{{Identical|Username}}',
	'wminc-viewuserlang-go' => "Text on the submit button to view the user's language and test wiki.

{{Identical|Go}}",
	'wminc-userdoesnotexist' => 'Used on Special:ViewUserLang when the entered user does not exist.',
	'wminc-ip' => 'Used on Special:ViewUserLang which can only be used for logged in users. This error message is shown for IP addresses.',
	'right-viewuserlang' => '{{doc-right|viewuserlang}}
The message says (in the long form): (This group has) "The ability to view the language and test wiki of a user". A user can set his language and test wiki through Special:Preferences.',
	'group-test-sysop' => '{{doc-group|test-sysop}}
Name of the group of administrators of a specific test wiki on the Wikimedia Incubator.',
	'group-test-sysop-member' => '{{doc-group|test-sysop|member}}
An administrator of a specific test wiki on the Wikimedia Incubator.',
	'grouppage-test-sysop' => '{{doc-group|test-sysop|page}}',
	'group-test-sysop.css' => '{{doc-group|test-sysop|css}}',
	'group-test-sysop.js' => '{{doc-group|test-sysop|js}}',
	'wminc-code-macrolanguage' => "* '''$1''' is the language code (not used by default)
* '''$2''' is the language name in English
* '''$3''' is the translated language name from CLDR, if available (otherwise, English)
It is best '''not''' to change the link to the Wikipedia article about the language. The article about macrolanguage can be changed to point to a translated article.",
	'wminc-code-collective' => "* '''$1''' is the language code
* '''$2''' is the language name in English
* '''$3''' is the translated language name from CLDR, if available (otherwise, English) 
It is best '''not''' to change the link to the Wikipedia article about the language.",
	'wminc-listusers-testwiki' => 'Used on [[Special:ListUsers]]. $1 is either "Incubator" or a link to pages like "Wx/xyz".',
	'wminc-search-nocreate-nopref' => 'Used on Special:Search. $1 is the search term.',
	'wminc-search-nocreate-suggest' => 'Used on Special:Search. $1 is the search term, and $2 is the prefixed form of $1.',
	'wminc-searchwiki' => 'Title of Special:SearchWiki, to search *for* a wiki in a specific language (and *not* to search for pages!)',
	'wminc-searchwiki-noproject' => 'Error message',
	'wminc-searchwiki-noresults' => 'Error message',
	'wminc-searchwiki-selectproject' => 'Followed by a dropdown menu with projects (Wikipedia, Wiktionary, ...)',
	'wminc-searchwiki-inputlanguage' => 'Followed by an input box where you can enter a language name or code',
	'wminc-searchwiki-go' => 'Submit button',
	'wminc-searchwiki-multiplematches' => 'Followed by a list of matches when there are multiple matches',
	'wminc-searchwiki-match-langcode' => 'Parameters:
* $1 is the input;
* $2 is its language name in the user interface language',
	'wminc-searchwiki-match-userlangname' => 'Parameters:
* $1 is the input;
* $2 is its language name in the user interface language.',
	'wminc-searchwiki-match-englishname' => 'Parameters:
* $1 is the input;
* $2 is its language name in the user interface language.',
	'wminc-searchwiki-match-nativename' => 'Parameters:
* $1 is the input;
* $2 is its language name in the user interface language.',
	'wminc-searchwiki-goto' => '{{optional}}',
	'wminc-searchwiki-gotoinfopage' => 'Link text to go to the Wx/xyz info page',
	'wminc-fs-pagetitle' => '$1 is the step (one of the wminc-fs-*-title messages)',
	'wminc-fs-langselect-title' => 'Title: select the preferred interface language',
	'wminc-fs-signup-title' => 'Title: create an account',
	'wminc-fs-settings-title' => 'Title of the explanation to set the right test wiki preference',
	'wminc-fs-userpage-title' => 'Create your userpage',
	'wminc-fs-startwiki-title' => 'Start your wiki',
	'wminc-fs-pagetitle-done' => 'added to the title if that step is completed',
	'wminc-fs-langselect' => 'Parameters:
* $1 is the current language
* $2 is a list of alternative (clickable) languages.',
	'wminc-fs-signup-text' => '$1 is the link to log in, $2 to create an account',
	'wminc-fs-settings-text' => '"At the right you can see..." refers to an image being shown at the right side of the page. For RTL languages this is at the left.',
	'wminc-fs-userpage-text' => '$1 is a link to the user page',
	'wminc-fs-globaluser-text' => '$1 is a link to Special:MergeAccount',
	'wminc-fs-startwiki-text' => '$1 is the prefix (Wx/xyz), $2 is a link to its main page (Wx/xyz/Main_Page)',
	'wminc-fs-startwiki-exists-text' => 'Parameters:
* $1 is the prefix (Wx/xyz),
* $2 is a link to its main page (Wx/xyz/Main_Page).',
);

/** Tati (Tati)
 * @author Erdemaslancan
 */
$messages['ttt'] = array(
	'wminc-viewuserlang-go' => 'Buşu',
	'wminc-searchwiki-go' => 'Buşu',
);

/** Адыгэбзэ (Адыгэбзэ)
 * @author Celekan
 */
$messages['ady-cyrl'] = array(
	'wminc-desc' => 'Щыплъэк1у Вики систэмыр Викимедия Инкубаторым',
	'wminc-viewuserlang' => 'Нэбгырэм ибзэм еплъий плъэк1у Викир',
);

/** Achinese (Acèh)
 * @author Fadli Idris
 * @author Si Gam Acèh
 */
$messages['ace'] = array(
	'wminc-desc' => 'Sistem cuba wiki keu Wikimedia Incubator',
	'wminc-viewuserlang' => 'Kalon bahsa ureueng nguy ngon wiki neuujoe',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 * @author SPQRobin
 */
$messages['af'] = array(
	'wminc-desc' => 'Toets wiki-stelsel vir die Wikipedia Inkubator',
	'wminc-manual' => 'Handleiding',
	'wminc-listwikis' => "Lys van wiki's",
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-none' => 'Geen/alles',
	'wminc-recentchanges-all' => 'Alle onlangse veranderings',
	'wminc-prefinfo-language' => 'U koppelvlaktaal - onafhanklik van u toetswiki',
	'wminc-prefinfo-code' => 'Die ISO 639-taalkode',
	'wminc-prefinfo-project' => 'Kies die Wikimedia-projek (Inkubator-opsie is vir gebruikers wat nie algemeen werk doen nie)',
	'wminc-prefinfo-error' => "Jy het 'n projek gekies wat 'n taalkode benodig.",
	'randombytest' => 'Lukrake bladsy uit die toetswiki',
	'randombytest-nopages' => 'Daar is geen bladsye in jou toetswiki in die $1-naamruimte nie.',
	'wminc-viewuserlang' => 'Soek op gebruikerstaal en toetswiki',
	'wminc-viewuserlang-user' => 'Gebruikersnaam:',
	'wminc-viewuserlang-go' => 'OK',
	'wminc-userdoesnotexist' => 'Die gebruiker "$1" bestaan nie.',
	'wminc-ip' => '"$1" is \'n IP-adres.',
	'right-viewuserlang' => 'Sien gebruikerstaal en toetswiki',
);

/** Gheg Albanian (Gegë)
 * @author Mdupont
 */
$messages['aln'] = array(
	'wminc-desc' => 'Sistemi Test wiki për Wikimedia Inkubatori',
	'wminc-testwiki' => 'wiki Test:',
	'wminc-testwiki-none' => 'Asnjë / Të gjitha',
	'wminc-prefinfo-language' => 'Gjuha juaj interface - të pavarur nga testin tuaj wiki',
	'wminc-prefinfo-code' => 'Kodi i gjuhës ISO 639',
	'wminc-prefinfo-project' => 'Zgjidhni projekti Wikimedia (opsion Inkubatori është për përdoruesit që bëjnë punë të përgjithshme)',
	'wminc-prefinfo-error' => 'Ju zgjedhur një projekt që ka nevojë për një kod gjuhë.',
	'randombytest' => 'faqe të rastësishme nga wiki provë',
	'randombytest-nopages' => 'Nuk ka faqe në wiki në provim, në hapësirën: $1.',
	'wminc-viewuserlang' => 'Kërkoni gjuhën e përdoruesit dhe wiki provë',
	'wminc-viewuserlang-user' => 'Emri i përdoruesit:',
	'wminc-viewuserlang-go' => 'Shkoj',
	'right-viewuserlang' => 'Shikoni gjuhën përdoruesit dhe provë wiki',
);

/** Angika (अङ्गिका)
 * @author Angpradesh
 */
$messages['anp'] = array(
	'wminc-desc' => 'विकीपीडिया इनक्यूबेटर केरॊ टेस्ट विकी सिस्टम',
	'wminc-testwiki' => 'टेस्ट विकी',
	'wminc-testwiki-none' => 'कुच्छु नै / सबेभॆ',
	'wminc-prefinfo-language' => 'तोरॊ इंटरफेस भाषा - टेस्ट विकी सॆं अलग',
	'wminc-prefinfo-code' => 'ISO 639 भाषा कोड',
	'wminc-prefinfo-project' => 'विकीमीडिया प्रोजेक्ट केरॊ चयन करॊ (इनक्यूबेटर विकल्प सामान्य काम करै वाला लेली)',
	'wminc-prefinfo-error' => 'अपनॆ एगॊ प्रोजेक्ट चुनलॆ छियै, जेकरा लेली भाषा कोड के जरूरत छै.',
	'randombytest' => 'बेतरतीब पन्ना - प्रारंभिक विकी द्वारा.',
	'randombytest-nopages' => 'तोरॊ प्रारंभिक विकी मॆं $1 नामॊ के जग्घॊ पॆ कोय पन्ना नै छौं.',
	'wminc-viewuserlang' => 'भाषा उपयोगकर्ता आरू टेस्ट विकी सिस्टम कॆ देखॊ',
	'wminc-viewuserlang-user' => 'उपयोगकर्ता',
	'wminc-viewuserlang-go' => 'जा',
	'right-viewuserlang' => 'देखॊ user language and test wiki',
);

/** Arabic (العربية)
 * @author Ciphers
 * @author Meno25
 * @author Orango
 * @author OsamaK
 * @author روخو
 * @author زكريا
 */
$messages['ar'] = array(
	'wminc-desc' => 'جرّب نظام الويكي لحضانة ويكيميديا',
	'wminc-manual' => 'دليل',
	'wminc-listwikis' => 'قائمة الويكيات',
	'wminc-testwiki' => 'ويكي الاختبار:',
	'wminc-testwiki-code' => 'اختبر لغة الويكي',
	'wminc-testwiki-none' => 'لا شيء/الكل',
	'wminc-recentchanges-all' => 'كل التغييرات الحديثة',
	'wminc-prefinfo-language' => 'لغة واجهتك - مستقلة عن ويكي الاختبار',
	'wminc-prefinfo-code' => 'رمز ISO 639 للغة',
	'wminc-prefinfo-project' => 'إختر مشروع ويكيميديا (خيار الحضانة هو للمستخدمين الذين يقومون بعمل عام)',
	'wminc-prefinfo-error' => 'اخترت مشروعًا يختاج رمز لغة.',
	'wminc-error-move-unprefixed' => 'خطأ: الصفحة التي تحاول نقلها هي [[{{MediaWiki:Wminc-error-help}}|بلا بادئة أو ببادئة خاطئة]]!',
	'wminc-error-wronglangcode' => "'''خطأ:''' هذه الصفحة فيها [[{{MediaWiki:Wminc-error-help}}|رمز لغة خاطئ]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''خطأ:''' هذه الصفحة [[{{MediaWiki:Wminc-error-help}}|بلا بادئة]]!",
	'wminc-error-unprefixed-suggest' => "'''خطأ:''' هذه الصفحة [[{{MediaWiki:Wminc-error-help}}|بلا بادئة]]! يمكنك إنشاء صفحة في [[:$1]].",
	'wminc-error-wiki-exists' => 'هذا الويكي موجود بالفعل. يمكن إيجاد هذه الصفحة في $1. إذا كان الويكي قد أنشئ حديثا فانتظر لبضع ساعات أو أيام ريثما ينقل محتواه.',
	'wminc-error-wiki-sister' => 'الصفحة من مشروع ليس من المشاريع الموجودة هنا. اطلب $1 لإيجاد الويكي.',
	'randombytest' => 'صفحة عشوائية بواسطة ويكي الاختبار',
	'randombytest-nopages' => 'لا توجد صفحات في ويكي الاختبار الخاص بك، في النطاق: $1.',
	'wminc-viewuserlang' => 'أوجد لغة المستخدم و جرّب الويكي',
	'wminc-viewuserlang-user' => 'اسم المستخدم:',
	'wminc-viewuserlang-go' => 'اذهب',
	'wminc-userdoesnotexist' => 'المستخدم "$1" لا يوجد',
	'wminc-ip' => '"$1" عنوان بروتوكول إنترنت.',
	'right-viewuserlang' => 'رؤية لغة وويكي الاختبار الخاص بالمستخدم',
	'group-test-sysop' => 'إداريو ويكي التجربة',
	'group-test-sysop-member' => 'إداري ويكي التجربة',
	'grouppage-test-sysop' => '{{ns:project}}:إداريون ويكي التجربة',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|اللغة "$3"]] [[wikipedia:ISO 639 macrolanguage|لغة كبرى]]، تشمل اللغات الصغرى التالية:',
	'wminc-code-collective' => 'رمز "$1" لا يدل على لغة معينة، بل على مجموعة من اللغات، وهي [[wikipedia:$2 language|اللغات "$3"]].',
	'wminc-code-retired' => 'رمز اللغة قد تغير أو لم يعد يرمز به إلى اللغة الأصلية.',
	'wminc-listusers-testwiki' => 'ما تراه هو المستخدمون الذي عينوا تفضيل ويكي التجربة على $1',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'wminc-testwiki' => 'ܘܝܩܝ ܢܣܝܘܢܐ:',
	'wminc-testwiki-none' => 'ܠܐ ܡܕܡ/ܟܠ',
	'wminc-viewuserlang-user' => 'ܫܡܐ ܕܡܦܠܚܢܐ:',
	'wminc-viewuserlang-go' => 'ܙܠ',
);

/** Moroccan Spoken Arabic (Maġribi)
 * @author Enzoreg
 * @author زكريا
 */
$messages['ary'] = array(
	'wminc-desc' => 'L-Wiki dyal t-tést le Wikimédya Incubator',
	'wminc-testwiki' => "L-Wiki dyal 't-tést :",
	'wminc-testwiki-none' => 'Ḫṫa ḫaja / Kol ċi',
	'wminc-prefinfo-language' => "Loġṫ wajihṫek - mesṫaqela men 't-tést dyal l-Wiki dyalek",
	'wminc-prefinfo-code' => 'L-kod ISO 639 dyal l-loġa',
	'wminc-prefinfo-project' => 'Ĥṫar l-meċroĝ Wikimédya (l-opsyon Incubator mĥeṣeṣa le mosṫeĥdimin li ka iṣaybo ĥedma ĝama)',
	'wminc-prefinfo-error' => 'Ĥṫariṫi meċroĝ li ka iḫṫaj l-kod dyal l-loġa.',
	'randombytest' => "Ṣefḫa ĝel l-Lah men l-Wiki dyal 't-tést",
	'randombytest-nopages' => "L-Wiki dyal 't-tést ma fih ḫṫa ṣefḫa, fe l-maḫel dyal 's-smiyaṫ : $1.",
	'wminc-viewuserlang' => "Ha hiya loġaṫ l-mosṫeĥdim o l-Wiki dyal 't-tést dyalo",
	'wminc-viewuserlang-user' => 'smiṫ l-mosṫĥdim:',
	'wminc-viewuserlang-go' => 'Sir',
	'right-viewuserlang' => "Ċof loġṫ l-mosṫeĥdim o l-Wiki dyal 't-tést",
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'wminc-testwiki' => 'ويكى تجربه:',
	'wminc-testwiki-none' => 'ولاحاجه/كل',
	'wminc-viewuserlang-user' => 'اسم اليوزر:',
	'wminc-viewuserlang-go' => 'روح',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 */
$messages['as'] = array(
	'wminc-viewuserlang-user' => 'সদস্য নাম:',
	'wminc-viewuserlang-go' => 'যাওক',
	'wminc-searchwiki-selectproject' => 'ৰ কাৰণে সন্ধান কৰক',
	'wminc-searchwiki-go' => 'যাওক',
	'wminc-searchwiki-gotoinfopage' => 'পৰিচিতি পৃষ্ঠা',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'wminc-desc' => 'Sistema de wiki de pruebes pa Wikimedia Incubator',
	'wminc-manual' => 'Manual',
	'wminc-listwikis' => 'Llista de wikis',
	'wminc-testwiki' => 'Wiki de prueba:',
	'wminc-testwiki-code' => 'Llingua de la wiki de pruebes:',
	'wminc-testwiki-none' => 'Nengún/Toos',
	'wminc-testwiki-site' => '(Mantenimientu)',
	'wminc-recentchanges-all' => 'Tolos cambios recientes',
	'wminc-prefinfo-language' => 'La llingua de la interfaz - independiente de la to wiki de pruebes',
	'wminc-prefinfo-code' => 'El códigu ISO 639 de la llingua na que trabayes equí',
	'wminc-prefinfo-project' => "Seleiciona'l proyeutu de Wikimedia nel que tas trabayando equí",
	'wminc-prefinfo-error' => 'Seleicionasti un proyeutu que necesita un códigu de llingua.',
	'wminc-error-move-unprefixed' => 'Error: La páxina que tas intentando treslladar a [[{{MediaWiki:Wminc-error-help}}| nun tien prefixu o esti ye incorreutu]].',
	'wminc-error-wronglangcode' => "'''Error:''' ¡Esta páxina contien un [[{{MediaWiki:Wminc-error-help}}|códigu de llingua incorreutu]], \"\$1\"!",
	'wminc-error-unprefixed' => "'''Error:''' ¡Esta páxina [[{{MediaWiki:Wminc-error-help}}|nun tien prefixu]]!",
	'wminc-error-unprefixed-suggest' => "'''Error:''' ¡Esta páxina nun tien [[{{MediaWiki:Wminc-error-help}}|prefixu]]! Pues crear una páxina en [[:$1]].",
	'wminc-error-wiki-exists' => "Esta wiki yá esiste. Pues alcontrar esta páxina en $1. Si la wiki se creó recién, espera delles hores o díes mentanto s'importa tou'l conteníu.",
	'wminc-error-wiki-sister' => "Esta páxina pertenez a un proyeutu que nun ta agospiáu equí. Visita $1 p'alcontrar la wiki.",
	'randombytest' => 'Páxina al  debalu de la wiki de pruebes',
	'randombytest-nopages' => 'Nun hai páxines na to wiki de pruebes, nel espaciu de nomes: $1.',
	'wminc-viewuserlang' => 'Ver la llingua del usuariu y la wiki de pruebes',
	'wminc-viewuserlang-user' => "Nome d'usuariu:",
	'wminc-viewuserlang-go' => 'Dir',
	'wminc-userdoesnotexist' => 'L\'usuariu "$1" nun esiste.',
	'wminc-ip' => '"$1" ye una direición IP.',
	'right-viewuserlang' => 'Ver la llingua del usuariu y la wiki de pruebes',
	'group-test-sysop' => 'Alministradores de la wiki de pruebes',
	'group-test-sysop-member' => '{{GENDER:$1|alministrador|alministradora}} de la wiki de pruebes',
	'grouppage-test-sysop' => '{{ns:project}}: Alministradores de la wiki de pruebes',
	'wminc-code-macrolanguage' => 'La [[wikipedia:$2 language|llingua "$3"]] ye una [[wikipedia:ISO 639 macrolanguage|macrollingua]], compuesta poles siguientes llingües:',
	'wminc-code-collective' => 'El códigu "$1" nun fai referencia a una llingua específica, sinón a un conxuntu de llingües, en particular, a les [[wikipedia:$2 language|llingües "$3"]].',
	'wminc-code-retired' => 'Esti códigu de llingua camudó y yá nun fai referencia a la llingua orixinal.',
	'wminc-listusers-testwiki' => "Tas viendo la llista d'usuarios que seleicionaron la preferencia $1 pa la so wiki de pruebes.",
	'wminc-search-nocreate-nopref' => 'Ficisti una gueta de "$1". ¡Configura les tos [[Special:Preferences|preferencies de la wiki de pruebes]] de manera que podamos dicite qué páxina pues crear!',
	'wminc-search-nocreate-suggest' => 'Ficisti una gueta de "$1". Pues crear una páxina na to wiki en "<strong>[[$2]]</strong>"!',
	'wminc-searchwiki' => 'Guetar una wiki',
	'wminc-searchwiki-noproject' => 'Nun seleicionasti dengún proyeutu.',
	'wminc-searchwiki-noresults' => "Nun hai resultaos. Pues guetar por códigos de llingua, nomes nativos y nomes na llingua de la to interfaz o n'inglés.",
	'wminc-searchwiki-selectproject' => 'Buscar:',
	'wminc-searchwiki-inputlanguage' => 'Na llingua:',
	'wminc-searchwiki-go' => 'Dir',
	'wminc-searchwiki-multiplematches' => 'La gueta casa coles llingües siguientes:',
	'wminc-searchwiki-match-langcode' => '"$1" ye\'l códigu de llingua ISO 639 pa $2.',
	'wminc-searchwiki-match-userlangname' => "$1 ye'l nome d'una llingua.",
	'wminc-searchwiki-match-englishname' => '"$1" ye\'l nome de $2 n\'inglés.',
	'wminc-searchwiki-match-nativename' => '"$1" ye\'l nome de "$2" nesa llingua.',
	'wminc-searchwiki-gotoinfopage' => "páxina d'información",
	'wminc-fs-pagetitle' => 'Asistente pa los primeros pasos - $1',
	'wminc-fs-langselect-title' => 'Escueyi llingua',
	'wminc-fs-signup-title' => "Date d'alta",
);

/** Kotava (Kotava)
 * @author Wikimistusik
 */
$messages['avk'] = array(
	'wminc-desc' => 'Weslara va wiki bolk tori Wikimedia Incubator',
	'wminc-manual' => 'Kost',
	'wminc-listwikis' => 'Vexala dem wiki',
	'wminc-testwiki' => 'Weslara va wiki',
	'wminc-testwiki-code' => 'Weslara va wiki ava',
	'wminc-testwiki-none' => 'Mek / Kot',
	'wminc-recentchanges-all' => 'Noeltaf betakseem',
	'wminc-prefinfo-language' => 'Rinafa walasikifa ava - meruptesa va rinafi weslarafi wiki',
	'wminc-prefinfo-code' => 'ISO 639 avabeksa',
	'wminc-prefinfo-project' => 'Va Wikimedia abdumimaks rebal (Incubator ikatcuks tir tori giwebes favesik)',
	'wminc-prefinfo-error' => 'Va abdumimaks olegas va avabeksa su rebal.',
	'wminc-error-move-unprefixed' => 'ROKLA: Lagarrundanu bu van [[{{MediaWiki:Wminc-error-help}}|tir ostiskafu ik ostajakirafu]] !',
	'wminc-error-wronglangcode' => "'''ROKLA :''' Batu bu va \"\$1\" [[{{MediaWiki:Wminc-error-help}}|avabeksaja]] ruldar !",
	'wminc-error-unprefixed' => "'''ROKLA :''' Batu bu tir [[{{MediaWiki:Wminc-error-help}}|ostiskafu]]!",
	'wminc-error-unprefixed-suggest' => "'''ROKLA :''' Batu bu tir [[{{MediaWiki:Wminc-error-help}}|ostiskafu]]! Va bu dene [[:$1]] roredul.",
	'wminc-error-wiki-exists' => 'Bati wiki ixam krulder. Va batu bu dene $1 rotrasil. Ede bati wiki sure zo redur, vay kali koburera va varaf cek konakbartivon ok konakvielon kel.',
	'wminc-error-wiki-sister' => 'Batu bu va arlize janden abdumimaks pasur. Vay ta trasira va wiki va $1 zomel.',
	'randombytest' => 'Xuyavafu bu mal weslara va wiki',
	'randombytest-nopages' => 'Meku bu dene rinafi wiki, koe yoltxo : $1.',
	'wminc-viewuserlang' => 'Va favesikafa ava dizvel aze va wiki weslal',
	'wminc-viewuserlang-user' => 'Favesikyolt :',
	'wminc-viewuserlang-go' => 'Skú !',
	'wminc-userdoesnotexist' => '"$1" favesik me tir.',
	'wminc-ip' => '"$1" tir IP mane.',
	'right-viewuserlang' => 'Wira va ava ke favesik is weslara va wiki',
	'group-test-sysop' => 'Ristusik va weslarafi wiki',
	'group-test-sysop-member' => '{{GENDER:$1ristusik va weslarafi wiki}}',
	'grouppage-test-sysop' => '{{ns:project}}:ristusik va weslarafi wiki',
	'wminc-code-macrolanguage' => '[[wikipedia:$2ava|"$3" ava]] tir [[wikipedia:ISO 639 veyava|veyava]], nitesa va vlevefa bewafa ava :',
	'wminc-code-collective' => '"$1" avabeksa va aptafa ava vols doda dem ava, yoltkirafa gu [[wikipedia:$2 language|"$3" languages]] vuester.',
	'wminc-code-retired' => 'Bata avabeksa al zo betar nume va xantafa ava mea vuester.',
	'wminc-listusers-testwiki' => 'Va favesik plekuyus va abdualbaks ton $1 dun wil.',
	'wminc-search-nocreate-nopref' => 'Va "$1" aneyayal. Vay va [[Special:Preferences|abdualbaks va weslara va wiki]] plekul, batinde va toku roredunu bu pu rin rokalit !',
	'wminc-search-nocreate-suggest' => 'Va "$1" su aneyal. Va bu ko rinafi wiki dene <strong>[[$2]] roredul</strong>!',
	'wminc-searchwiki' => 'Aneyara va wiki',
	'wminc-searchwiki-noproject' => 'Va mek abdumimaks su rebal',
	'wminc-searchwiki-noresults' => 'Mek trasiks. Kare avabeksa rotaneyal, va omavaf yolt ik yolt koe rinafa walasikifa ava ik Englava.',
	'wminc-searchwiki-selectproject' => 'Aneyara va',
	'wminc-searchwiki-inputlanguage' => 'Koe ava :',
	'wminc-searchwiki-go' => 'Skú !',
	'wminc-searchwiki-multiplematches' => 'Va erk koe bata ava aneyal :',
	'wminc-searchwiki-match-langcode' => '"$1" tir ISO 639 avabeksa ke $2.',
	'wminc-searchwiki-match-userlangname' => '$1 tir avayolt.',
	'wminc-searchwiki-match-englishname' => '"$1" tir yolt ke $2 englavon.',
	'wminc-searchwiki-match-nativename' => '"$1" tir yolt ke $2 koe bata ava.',
	'wminc-searchwiki-gotoinfopage' => 'Givabu',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'wminc-manual' => 'Əl ilə',
	'wminc-listwikis' => 'Vikilərin siyahısı',
	'wminc-testwiki' => 'Test viki:',
	'wminc-testwiki-code' => 'Test viki dili:',
	'wminc-testwiki-none' => 'Heç biri/Hamısı',
	'wminc-recentchanges-all' => 'Bütün son dəyişikliklər',
	'wminc-prefinfo-code' => 'ISO 639 dil kodu',
	'randombytest' => 'Test vikisindən təsadüfi səhifə',
	'wminc-viewuserlang-user' => 'İstifadəçi adı:',
	'wminc-viewuserlang-go' => 'Keç',
	'wminc-userdoesnotexist' => 'İstifadəçi "$1" mövcud deyil',
	'wminc-ip' => '"$1" bir IP ünvanıdır.',
	'right-viewuserlang' => 'İstifadəçi dilini və test vikisini gör',
	'group-test-sysop' => 'Test viki idarəçiləri',
	'grouppage-test-sysop' => '{{ns:project}}:Test viki idarəçisi',
);

/** Bavarian (Boarisch)
 * @author Man77
 * @author Mucalexx
 */
$messages['bar'] = array(
	'wminc-desc' => 'Daméglécht Testwikis fyrn Wikimedia Incubator',
	'wminc-manual' => 'Åloattung',
	'wminc-listwikis' => 'Listen voh dé Wikis',
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-none' => 'Koane / Olle',
	'wminc-recentchanges-all' => 'Olle létzden Änderrungen',
	'wminc-prefinfo-language' => 'Sprooch voh deiner Benutzerówerflächen - vom Testwiki unobhängég',
	'wminc-prefinfo-code' => 'Da ISO-639-Sproochcode',
	'wminc-prefinfo-project' => '\'s Wikimedia-Prójekt, ån dém du do orweidst ("Incubator" fyr Benutzer, dé oigmoane Aufgom ywernemmern)',
	'wminc-prefinfo-error' => 'Bei dém Prójekt muass a Sproochcode ågeem wern!',
	'wminc-error-move-unprefixed' => 'Feeler: Dé Seiten, dé du vaschiam wüst, hod [[{{MediaWiki:Wminc-error-help}}|koah óder a foischs Präfix]].',
	'wminc-error-wronglangcode' => "'''Feeler:''' Dé Seiten enthoit an [[{{MediaWiki:Wminc-error-help}}|foischen Sproochcode]]: „$1“.",
	'wminc-error-unprefixed' => "'''Feeler:''' Dé Seiten hod [[{{MediaWiki:Wminc-error-help}}|koan Präfix]].",
	'wminc-error-unprefixed-suggest' => "'''Feeler:''' Dé Seiten hod [[{{MediaWiki:Wminc-error-help}}|koan Präfix]]. Du kåst unter [[:$1]] a Seiten åléng.",
	'wminc-error-wiki-exists' => 'Dés Wiki do gibts bereits schoh. Dé Seiten befindt sé auf $1. Wånns Wiki erst grod amoi erstöd worn is, bitt ma di um a por Stund Geduid, bis olle Inhoite durthih ywertrong worn san.',
	'randombytest' => "Zuafällige Seiten aus 'm Testwiki",
	'randombytest-nopages' => 'Es befinden sé koane Seiten im Nåmensraum "$1" voh deim Testwiki.',
	'wminc-viewuserlang' => 'Benutzersprooch und Testwiki åschauh',
	'wminc-viewuserlang-user' => 'Benutzernåm:',
	'wminc-viewuserlang-go' => 'Hoin',
	'wminc-userdoesnotexist' => 'Der Benutzer „$1“ existird néd.',
	'right-viewuserlang' => 'Benutzersprooch und Testwiki åschauh',
	'group-test-sysop' => 'Testadministraatorn',
	'group-test-sysop-member' => 'Testadministraator',
	'grouppage-test-sysop' => '{{ns:project}}:Testadministraatorn',
	'wminc-code-macrolanguage' => "Dé [[wikipedia:$2 language|Sprooch „$3“]] is a [[wikipedia:de:Makrosprache_(ISO_639)|Makrósprooch]], dé d' fóigenden Oahzelsproochn enthoit:",
	'wminc-code-collective' => 'Da Code „$1“ bziagt sé néd auf a bstimmte Sprooch, sondern auf a Gruppm voh Sproochen, nåmentlich dé [[wikipedia:$2 language|Sproochen „$3“]].',
	'wminc-code-retired' => "Der Sproochcode is gänderd worn und beziagt sé nimmer auf d' urspryngliche Sprooch.",
);

/** Belarusian (Taraškievica orthography) (‪беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Renessaince
 * @author Wizardist
 * @author Zedlik
 */
$messages['be-tarask'] = array(
	'wminc-desc' => 'Тэставая вікі-сыстэма для інкубатара Фундацыі «Вікімэдыя»',
	'wminc-manual' => 'Інструкцыя',
	'wminc-listwikis' => 'Сьпіс вікі',
	'wminc-testwiki' => 'Тэставая вікі:',
	'wminc-testwiki-code' => 'Мова тэставай вікі:',
	'wminc-testwiki-none' => 'Ніякая/усе',
	'wminc-recentchanges-all' => 'Усе апошнія зьмены',
	'wminc-prefinfo-language' => 'Вашая мова інтэрфэйсу — незалежная ад мовы Вашай тэставай вікі',
	'wminc-prefinfo-code' => 'Код мовы ISO 639',
	'wminc-prefinfo-project' => 'Выберыце праект фундацыі «Вікімэдыя» (выберыце варыянт Інкубатар, калі займаецеся агульнай працай)',
	'wminc-prefinfo-error' => 'Вы выбралі праект, які патрабуе код мовы.',
	'wminc-error-move-unprefixed' => 'Памылка: старонка, якую Вы спрабуеце перанесьці [[{{MediaWiki:Wminc-error-help}}|ня мае прэфіксу ці мае няслушны прэфікс]]!',
	'wminc-error-wronglangcode' => "'''Памылка:''' гэтая старонка утрымлівае [[{{MediaWiki:Wminc-error-help}}|няслушны код мовы]] «$1»!",
	'wminc-error-unprefixed' => "'''Памылка:''' гэтая старонка [[{{MediaWiki:Wminc-error-help}}|ня мае прэфіксу]]!",
	'wminc-error-unprefixed-suggest' => "'''Памылка:''' гэтая старонка [[{{MediaWiki:Wminc-error-help}}|не мае прэфіксу]]! Вы можаце стварыць старонку на [[:$1]].",
	'wminc-error-wiki-exists' => 'Гэтая вікі ўжо існуе. Вы можаце знайсьці гэтую старонку на $1. Калі вікі была створаная нядаўна, калі ласка, пачакайце некалькі гадзінаў ці дзён, пакуль будзе імпартаваны зьмест.',
	'wminc-error-wiki-sister' => 'Гэтая старонка адносіцца да праекту, які тут не разьмяшчаецца. Калі ласка, перайдзіце на $1, каб знайсьці вікі.',
	'randombytest' => 'Выпадковая старонка тэставай вікі',
	'randombytest-nopages' => 'Няма старонак ў Вашай тэставай вікі, у прасторы назваў: $1.',
	'wminc-viewuserlang' => 'Пошук мовы ўдзельніка і тэставай вікі',
	'wminc-viewuserlang-user' => 'Імя ўдзельніка:',
	'wminc-viewuserlang-go' => 'Перайсьці',
	'wminc-userdoesnotexist' => 'Удзельнік «$1» не існуе.',
	'wminc-ip' => '«$1» — IP-адрас.',
	'right-viewuserlang' => 'прагляд мовы ўдзельніка і тэставаньне вікі',
	'group-test-sysop' => 'Адміністратары тэставай вікі',
	'group-test-sysop-member' => '{{GENDER:$1|адміністратар|адміністратарка}} тэставай вікі',
	'grouppage-test-sysop' => '{{ns:project}}:Адміністратары тэставай вікі',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 мова|«$3» мова]] зьяўляецца [[wikipedia:ISO 639 macrolanguage|макрамовай]], якая ўтрымлівае наступную колькасьць моваў:',
	'wminc-code-collective' => 'Код «$1» адносіцца не да пэўнай мовы, а да набору моваў, а менавіта да [[wikipedia:$2 language|«$3»]].',
	'wminc-code-retired' => 'Гэты код мовы быў зьменены і болей не датычыцца арыгінальнай мовы.',
	'wminc-listusers-testwiki' => 'Вы праглядаеце ўдзельнікаў, якія ў сваёй тэставай вікі выбралі наладу $1.',
	'wminc-search-nocreate-nopref' => 'Вы шукалі «$1». Калі ласка, устанавіце Вашыя [[Special:Preferences|налады тэставай вікі]], каб мы маглі сказаць Вам, якія старонкі Вы можаце ствараць!',
	'wminc-search-nocreate-suggest' => 'Вы шукалі «$1». Вы можаце стварыць у {{GRAMMAR:месны|{{SITENAME}}}} старонку <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Пошук вікі',
	'wminc-searchwiki-noproject' => 'Вы ня выбралі праект.',
	'wminc-searchwiki-noresults' => 'Нічога ня знойдзена. Можна шукаць па коду мовы, уласнай назьве мовы, яе назьве на бягучай мове інтэрфэйсу, або на ангельскай.',
	'wminc-searchwiki-selectproject' => 'Шукаць праект:',
	'wminc-searchwiki-inputlanguage' => 'На мове:',
	'wminc-searchwiki-go' => 'Перайсьці',
	'wminc-searchwiki-multiplematches' => 'На ваш пошукавы запыт пасуюць наступныя мовы:',
	'wminc-searchwiki-match-langcode' => '«$1» — код для мовы $2 паводле ISO 639.',
	'wminc-searchwiki-match-userlangname' => '$1 — гэта назва мовы.',
	'wminc-searchwiki-match-englishname' => '«$1» — назва мовы $2 на ангельскай.',
	'wminc-searchwiki-match-nativename' => '«$1» — назва мовы $2 на той мове.',
	'wminc-searchwiki-gotoinfopage' => 'старонка даведкі',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Spiritia
 * @author Stanqo
 */
$messages['bg'] = array(
	'wminc-desc' => 'Тестова уики система за Уикимедия Инкубатор',
	'wminc-listwikis' => 'Списък уикита',
	'wminc-testwiki' => 'Тестово уики:',
	'wminc-testwiki-none' => 'Никои / Всички',
	'wminc-recentchanges-all' => 'Всички последни промени',
	'wminc-prefinfo-language' => 'Език на интерфейса (независим от езика на вашето тестово уики)',
	'wminc-prefinfo-code' => 'Езиковият код според стандарта ISO 639',
	'wminc-prefinfo-project' => 'Изберете проект на Уикимедия (Опцията инкубатор е за потребители, които извършват обща работа)',
	'wminc-prefinfo-error' => 'Избрали сте проект, който се нуждае от езиков код.',
	'randombytest' => 'Случайна страница от тестваното уики',
	'randombytest-nopages' => 'В тестваното уики няма страници в именно пространство $1.',
	'wminc-viewuserlang' => 'Справка за езика на потребителя и тестваното от него уики',
	'wminc-viewuserlang-user' => 'Потребител:',
	'wminc-viewuserlang-go' => 'Отваряне',
	'wminc-userdoesnotexist' => 'Не съществува потребител "$1".',
	'wminc-ip' => '"$1" е IP-адрес.',
	'right-viewuserlang' => 'Вижте езика на потребителя и езика на тестваното уики',
	'wminc-code-retired' => 'Този езиков код е бил променен и повече не се отнася към оригиналния език.',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'wminc-desc' => 'উইকিমিডিয়া ইনকিউবেটরের জন্য পরীক্ষামূলক উইকি ব্যবস্থা',
	'wminc-testwiki' => 'পরীক্ষামূলক উইকি:',
	'wminc-testwiki-none' => 'কিছু না/সমস্ত',
	'wminc-prefinfo-language' => 'আপনার ইন্টারফেস ভাষা - আপনার পরীক্ষামূলক উইকি হতে স্বাধীন',
	'wminc-prefinfo-code' => 'ISO 639 ভাষা কোড',
	'wminc-prefinfo-error' => 'আপনার নির্বাচিত প্রকল্পের ভাষার কোড প্রয়োজন।',
	'randombytest' => 'পরীক্ষামূলক উইকির অজানা পাতা',
	'wminc-viewuserlang' => 'ব্যবহারকারী ভাষা এবং পরীক্ষামূলক উইকি দেখুন',
	'wminc-viewuserlang-user' => 'ব্যবহারকারী নাম:',
	'wminc-viewuserlang-go' => 'যাও',
	'right-viewuserlang' => 'ব্যবহারকারী ভাষা এবং পরীক্ষামূলক উইকি দেখাও',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'wminc-desc' => 'Reizhiad amprouiñ wiki evit Wikimedia Incubator',
	'wminc-manual' => 'Dre zorn',
	'wminc-listwikis' => 'Roll ar wikioù',
	'wminc-testwiki' => 'Wiki testiñ :',
	'wminc-testwiki-code' => 'Yezh ar wiki amprouiñ :',
	'wminc-testwiki-none' => 'Hini ebet / An holl',
	'wminc-testwiki-site' => "(Trezalc'h)",
	'wminc-recentchanges-all' => 'An holl gemmoù diwezhañ',
	'wminc-prefinfo-language' => "Yezh hoc'h etrefas - distag diouzh hini ho wiki testiñ",
	'wminc-prefinfo-code' => 'Kod ISO 639 ar yezh',
	'wminc-prefinfo-project' => 'Diuzit ar raktres Wikimedia (miret eo an dibarzh Incubator evit an implijerien a gas da benn ul labour dre vras)',
	'wminc-prefinfo-error' => "Diuzet hoc'h eus ur raktres zo ezhomm ur c'hod yezh evitañ.",
	'wminc-error-move-unprefixed' => "Fazi : N'eus [[{{MediaWiki:Wminc-error-help}}|rakger ebet pe fall eo rakger]] ar bajenn emaoc'h o klask dilec'hiañ !",
	'wminc-error-wronglangcode' => "'''Fazi :''' Ur [[{{MediaWiki:Wminc-error-help}}|c'hod yezh fall]] \"\$1\" zo er bajenn-mañ !",
	'wminc-error-unprefixed' => "'''Fazi :''' N'eus [[{{MediaWiki:Wminc-error-help}}|rakger ebet]] d'ar bajenn-mañ !",
	'wminc-error-unprefixed-suggest' => "'''Fazi :''' N'eus [[{{MediaWiki:Wminc-error-help}}|rakger ebet]] d'ar bajenn-mañ ! Gallout a rit  krouiñ ur bajenn e [[:$1]].",
	'randombytest' => 'Pajenn dargouezhek gant ar wiki amprouiñ',
	'randombytest-nopages' => "N'eus pajenn ebet en ho wiki amprouiñ, en esaouenn anv : $1.",
	'wminc-viewuserlang' => 'Gwelet yezh an implijer hag e wiki testiñ',
	'wminc-viewuserlang-user' => 'Anv implijer :',
	'wminc-viewuserlang-go' => 'Mont',
	'wminc-userdoesnotexist' => 'N\'eus ket eus an implijer "$1".',
	'wminc-ip' => 'Ur chomlec\'h IP eo "$1"',
	'right-viewuserlang' => 'Gwelet yezh an implijer hag ar wiki testiñ',
	'group-test-sysop' => 'Merourien ar wiki arnod',
	'group-test-sysop-member' => '{{GENDER:$1|merour|merourez}} ar wiki arnod',
	'grouppage-test-sysop' => '{{ns:project}}:Merourien wiki arnod',
	'wminc-code-retired' => "Kemmet eo bet ar c'hod yezh-mañ. Ne ra ket dave d'ar yezh orin ken.",
	'wminc-listusers-testwiki' => "O sellet ouzh roll an implijerien o deus dibabet $1 en o wiki arnod emaoc'h.",
	'wminc-search-nocreate-nopref' => "Klasket hoc'h eus \"\$1\". Trugarez da gempenn [[Special:Preferences|penndibaboù ar wiki arnod]] evit ma c'hallfemp bezañ goeust da lavaret deoc'h pe bajenn a c'hallit krouiñ !",
	'wminc-search-nocreate-suggest' => 'Klasket hoc\'h eus "$1". Ur bajenn a c\'hallit krouiñ en ho wiki e <strong>[[$2]]</strong> !',
	'wminc-searchwiki' => 'Klask ur wiki bennak',
	'wminc-searchwiki-noproject' => "N'hoc'h eus diuzet raktres ebet.",
	'wminc-searchwiki-selectproject' => 'Klask :',
	'wminc-searchwiki-inputlanguage' => 'Er yezh:',
	'wminc-searchwiki-go' => 'Mont',
	'wminc-searchwiki-match-langcode' => '"$1" zo ur c\'hod ISO 639 evit $2.',
	'wminc-searchwiki-match-userlangname' => 'Anv ur yezh eo $1.',
	'wminc-searchwiki-match-englishname' => '"$1" eo anv $2 e saozneg.',
	'wminc-searchwiki-match-nativename' => '"$1" eo anv $2 er yezh-se.',
	'wminc-searchwiki-gotoinfopage' => 'Pajenn gelaouiñ',
	'wminc-fs-pagetitle' => "Heñcher loc'hañ - $1",
	'wminc-fs-langselect-title' => 'Dibab ar yezh',
	'wminc-fs-signup-title' => 'En em enskrivañ',
	'wminc-fs-settings-title' => 'Termeniñ ho penndibaboù evit ar wiki',
	'wminc-fs-userpage-title' => 'Krouiñ ho fajenn implijer',
	'wminc-fs-startwiki-title' => 'Kregiñ gant ho wiki',
	'wminc-fs-pagetitle-done' => ' - graet !',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'wminc-desc' => 'Testiranje wiki sistema za Wikimedia Incubator',
	'wminc-testwiki' => 'Testna wiki:',
	'wminc-testwiki-none' => 'Ništa/Sve',
	'wminc-recentchanges-all' => 'Sve nedavne izmjene',
	'wminc-prefinfo-language' => 'Vaš jezik interfejsa - nezavisno od Vaše testirane wiki',
	'wminc-prefinfo-code' => 'ISO 639 kod jezika',
	'wminc-prefinfo-project' => 'Odaberite Wikimedia projekat (Opcija u inkubatoru za korisnike koje rade opći posao)',
	'wminc-prefinfo-error' => 'Odabrali ste projekat koji zahtijeva kod jezika.',
	'randombytest' => 'Slučajna stranica od testirane wiki',
	'randombytest-nopages' => 'Nema stranica u Vašoj probnoj wiki, u imenskom prostoru: $1.',
	'wminc-viewuserlang' => 'Pregledaj korisnički jezik i testiranu wiki',
	'wminc-viewuserlang-user' => 'Korisničko ime:',
	'wminc-viewuserlang-go' => 'Idi',
	'right-viewuserlang' => 'Pregledavanje korisničkog jezika i probne wiki',
);

/** Catalan (català)
 * @author Paucabot
 * @author SMP
 * @author Solde
 */
$messages['ca'] = array(
	'wminc-testwiki-none' => 'Cap/Tots',
	'wminc-prefinfo-code' => 'El codi de llengua ISO 639',
	'wminc-viewuserlang-user' => "Nom d'usuari:",
	'wminc-viewuserlang-go' => 'Vés-hi!',
	'right-viewuserlang' => "Veure l'idioma i el wiki de prova",
);

/** Sorani Kurdish (کوردی)
 * @author Marmzok
 */
$messages['ckb'] = array(
	'wminc-testwiki' => 'تاقی‌کردنه‌وه‌ی ویکی:',
	'wminc-testwiki-none' => 'هیچیان\\هەموویان',
	'wminc-prefinfo-language' => 'ڕووکاری زمانی تۆ جیاوازه‌ له‌ تاقی کردنه‌وه‌ی ویکی',
	'wminc-prefinfo-code' => 'کۆدی زمانی ISO 639',
	'wminc-prefinfo-error' => 'پڕۆژەیەکت هەڵبژاردووه کە پێویستی بە کۆدی زمانە.',
	'wminc-viewuserlang-user' => 'ناوی بەکارهێنەری:',
	'wminc-viewuserlang-go' => 'بڕۆ',
);

/** Czech (česky)
 * @author Kuvaly
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'wminc-desc' => 'Testovací wiki systém pro Inkubátor Wikimedia',
	'wminc-testwiki' => 'Testovací wiki:',
	'wminc-testwiki-none' => 'Nic/vše',
	'wminc-prefinfo-language' => 'Váš jazyk rozhraní – nezávislý na vaší testovací wiki',
	'wminc-prefinfo-code' => 'Jazykový kód ISO 639',
	'wminc-prefinfo-project' => 'Vybrat projekt Wikimedia (možnost „Inkubátor“ je pro uživatele, kteří vykonávají všeobecnou činnost)',
	'wminc-prefinfo-error' => 'Vybrali jste projekt, který vyžaduje kód jazyku.',
	'randombytest' => 'Náhodná stránka z testovací wiki',
	'randombytest-nopages' => 'Ve vaší testovací wiki nejsou ve jmenném prostoru $1 žádné stránky.',
	'wminc-viewuserlang' => 'Vyhledat jazyk uživatele a testovací wiki',
	'wminc-viewuserlang-user' => 'Uživatelské jméno:',
	'wminc-viewuserlang-go' => 'Přejít',
	'right-viewuserlang' => 'Prohlížení uživatelského jazyka a testovací wiki',
	'wminc-searchwiki-multiplematches' => 'Vašemu hledání odpovídají následující jazyky:',
	'wminc-searchwiki-match-langcode' => '„$1“ je kód pro jazyk $2 podle ISO 639.',
	'wminc-searchwiki-match-userlangname' => '$1 je název jazyka.',
	'wminc-searchwiki-match-englishname' => '„$1“ je anglický název pro jazyk $2.',
	'wminc-searchwiki-match-nativename' => '„$1“ je název pro jazyk $2 v tomto jazyce.',
);

/** Danish (dansk)
 * @author Byrial
 * @author Froztbyte
 * @author Masz
 * @author Peter Alberti
 */
$messages['da'] = array(
	'wminc-desc' => 'Testwikisystem for Wikimedia Incubator',
	'wminc-manual' => 'Håndbog',
	'wminc-listwikis' => 'Liste over wikier',
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-code' => 'Testwiki-sprog:',
	'wminc-testwiki-none' => 'Ingen/Alle',
	'wminc-recentchanges-all' => 'Alle de seneste ændringer',
	'wminc-prefinfo-language' => 'Dit brugerfladesprog - uafhængigt af din testwiki',
	'wminc-prefinfo-code' => 'ISO 639-sprogkode',
	'randombytest-nopages' => 'Der er ikke nogen sider i din testwiki i navnerummet $1.',
	'wminc-viewuserlang-user' => 'Brugernavn:',
	'wminc-viewuserlang-go' => 'Gå',
	'wminc-userdoesnotexist' => 'Brugeren "$1" findes ikke.',
	'wminc-ip' => '"$1" er en IP-adresse.',
	'right-viewuserlang' => 'Vis brugersprog og testwiki',
	'group-test-sysop' => 'Testwiki-administratorer',
	'group-test-sysop-member' => '{{GENDER:$1|testwiki-administrator}}',
	'grouppage-test-sysop' => '{{ns:project}}:Testwiki-administratorer',
	'wminc-code-retired' => 'Denne sprogkode er blevet ændret og henviser ikke længere til det oprindelige sprog.',
);

/** German (Deutsch)
 * @author Geitost
 * @author Imre
 * @author Kghbln
 * @author MF-Warburg
 * @author Metalhead64
 * @author Umherirrender
 */
$messages['de'] = array(
	'wminc-desc' => 'Ermöglicht Testwikis für den Wikimedia Incubator',
	'wminc-manual' => 'Anleitung',
	'wminc-listwikis' => 'Liste der Wikis',
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-code' => 'Sprache des Testwikis:',
	'wminc-testwiki-none' => 'Keins/Alle',
	'wminc-testwiki-site' => '(Wartung)',
	'wminc-recentchanges-all' => 'Alle letzten Änderungen',
	'wminc-prefinfo-language' => 'Sprache deiner Benutzeroberfläche - vom Testwiki unabhängig',
	'wminc-prefinfo-code' => 'Der ISO-639-Code der Sprache mit der du hier arbeitest',
	'wminc-prefinfo-project' => 'Wähle das Wikimedia-Projekt aus, an dem du hier arbeitest',
	'wminc-prefinfo-error' => 'Bei diesem Projekt muss ein Sprachcode angeben werden!',
	'wminc-error-move-unprefixed' => "'''Fehler:''' Die Seite, die du verschieben willst, hat [[{{MediaWiki:Wminc-error-help}}|kein oder ein falsches Präfix]].",
	'wminc-error-wronglangcode' => "'''Fehler:''' Diese Seite enthält einen [[{{MediaWiki:Wminc-error-help}}|falschen Sprachcode]]: „$1“.",
	'wminc-error-unprefixed' => "'''Fehler:''' Diese Seite hat [[{{MediaWiki:Wminc-error-help}}|kein Präfix]].",
	'wminc-error-unprefixed-suggest' => "'''Fehler:''' Diese Seite hat [[{{MediaWiki:Wminc-error-help}}|kein Präfix]]. Du kannst unter [[:$1]] eine Seite anlegen.",
	'wminc-error-wiki-exists' => 'Dieses Wiki ist bereits vorhanden. Diese Seite befindet sich auf $1. Sofern das Wiki erst kürzlich erstellt wurde, bitten wir um ein paar Stunden Geduld, bis alle Inhalte dorthin übertragen wurden.',
	'wminc-error-wiki-sister' => 'Diese Seite gehört zu einem Projekt, das nicht hier gehostet ist. Geh bitte zu $1, um das Wiki zu finden.',
	'randombytest' => 'Zufällige Seite aus dem Testwiki',
	'randombytest-nopages' => 'Es befinden sich keine Seiten im Namensraum „$1“ deines Testwikis.',
	'wminc-viewuserlang' => 'Benutzersprache und Testwiki einsehen',
	'wminc-viewuserlang-user' => 'Benutzername:',
	'wminc-viewuserlang-go' => 'Holen',
	'wminc-userdoesnotexist' => 'Der Benutzer „$1“ ist nicht vorhanden.',
	'wminc-ip' => '„$1“ ist eine IP-Adresse.',
	'right-viewuserlang' => 'Benutzersprache und Testwiki anschauen',
	'group-test-sysop' => 'Testadministratoren',
	'group-test-sysop-member' => '{{GENDER:$1|Testwiki-Administrator|Testwiki-Administratorin}}',
	'grouppage-test-sysop' => '{{ns:project}}:Testadministratoren',
	'wminc-code-macrolanguage' => 'Die [[wikipedia:$2 language|Sprache „$3“]] ist eine [[wikipedia:de:Makrosprache_(ISO_639)|Makrosprache]], welche die folgenden Einzelsprachen enthält:',
	'wminc-code-collective' => 'Der Code „$1“ bezieht sich nicht auf eine bestimmte Sprache, sondern auf eine Gruppe von Sprachen, namentlich die [[wikipedia:$2 language|Sprachen „$3“]].',
	'wminc-code-retired' => 'Dieser Sprachcode wurde geändert und bezieht sich nicht mehr auf die ursprüngliche Sprache.',
	'wminc-listusers-testwiki' => 'Du siehst Benutzer, die ihre Testwikieinstellung auf $1 eingestellt haben.',
	'wminc-search-nocreate-nopref' => 'Du suchtest nach „$1“. Bitte lege die [[Special:Preferences|Einstellungen für Dein Testwiki]] fest, damit wir dir mitteilen können, welche Seite du erstellen kannst.',
	'wminc-search-nocreate-suggest' => 'Du suchtest nach „$1“. Du kannst in deinem Testwiki eine Seite unter <strong>[[$2]]</strong> erstellen.',
	'wminc-searchwiki' => 'Nach einem Wiki suchen',
	'wminc-searchwiki-noproject' => 'Du hast kein Projekt ausgewählt.',
	'wminc-searchwiki-noresults' => 'Keine Ergebnisse. Du kannst nach Sprachcodes, muttersprachlichen Bezeichnungen sowie Bezeichnungen in deiner voreingestellten Sprache oder in Englisch suchen.',
	'wminc-searchwiki-selectproject' => 'Suchen nach:',
	'wminc-searchwiki-inputlanguage' => 'In der Sprache:',
	'wminc-searchwiki-go' => 'Los',
	'wminc-searchwiki-multiplematches' => 'Die Suche ergab Treffer bei den folgenden Sprachen:',
	'wminc-searchwiki-match-langcode' => '„$1“ ist ein ISO-639-Sprachcode für $2.',
	'wminc-searchwiki-match-userlangname' => '$1 ist die Bezeichnung einer Sprache.',
	'wminc-searchwiki-match-englishname' => '„$1“ ist die Bezeichnung für $2 in englischer Sprache.',
	'wminc-searchwiki-match-nativename' => '„$1“ ist die Bezeichnung für $2 in dieser Sprache.',
	'wminc-searchwiki-gotoinfopage' => 'Infoseite',
	'wminc-fs-pagetitle' => 'Startassistent - $1',
	'wminc-fs-langselect-title' => 'Sprache auswählen',
	'wminc-fs-signup-title' => 'Registrieren',
	'wminc-fs-settings-title' => 'Wikieinstellungen festlegen',
	'wminc-fs-userpage-title' => 'Benutzerseite erstellen',
	'wminc-fs-startwiki-title' => 'Wiki starten',
	'wminc-fs-pagetitle-done' => ' – erledigt!',
	'wminc-fs-intro' => 'Willkommen beim Startassistenten von {{SITENAME}}. Er wird dich beim Starten eines neuen Wikis begleiten.',
	'wminc-fs-langselect' => 'Auf $1 oder $2 weitermachen',
	'wminc-fs-signup-text' => 'Falls du bereits ein Benutzerkonto hast, [$1 melde dich bitte an]. Falls du noch keines besitzt, [$2 erstelle bitte eines]. Es ist nicht erforderlich, wird jedoch sehr empfohlen und das Erstellen dauert nur einige Sekunden.',
	'wminc-fs-settings-text' => 'Bitte besuche jetzt [[Special:Preferences|deine Einstellungen]] und stelle deine Test-Wiki-Einstellungen ein.
Rechts siehst du die entsprechenden Optionen, die du auf der Seite hast. Die erste ist die Sprache deiner Benutzeroberfläche, die du im ersten Schritt ausgewählt hast, du kannst sie aber immer verändern.
Die zweite Option ist das Projekt, zu dem du beitragen willst, und die dritte steht für den Sprachcode der Sprache, in der du zu diesem Projekt beitragen willst.
Wenn du den Code nicht kennst, ziehe bitte unser [[{{MediaWiki:Wminc-manual-url}}|Handbuch]] zu Rate oder [[{{MediaWiki:Portal-url}}|frage nach]].',
	'wminc-fs-userpage-text' => 'Bitte erstelle jetzt deine Benutzerseite $1 mit einigen grundlegenden Informationen über dich selbst. Du findest hierzu auch einen Link oben auf dieser Seite.',
	'wminc-fs-globaluser-text' => 'Du hast ein lokales Benutzerkonto. Es wird empfohlen, es über $1 zu einem globalen Benutzerkonto zu machen, so dass du es auf jedem Wikimedia-Wiki benutzen kannst.',
	'wminc-fs-startwiki-text' => 'Das Präfix deines Wikis ist <strong>$1</strong>. Du kannst das Wiki mit dem Erstellen der Hauptseite unter <strong>$2</strong> starten.',
	'wminc-fs-startwiki-exists-text' => 'Das Präfix deines Wikis lautet $1. Die Hauptseite befindet sich auf $2. Du kannst jetzt mit anderen Sprechern dieser Sprache zusammenarbeiten, um eine Community aufzubauen!
Wenn du eine Seite erstellen möchtest, gib einfach den Seitennamen in das Suchfeld oben ein und folge dem Link, der erscheint.',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Geitost
 * @author Imre
 * @author Kghbln
 * @author MF-Warburg
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'wminc-prefinfo-language' => 'Sprache Ihrer Benutzeroberfläche - vom Testwiki unabhängig',
	'wminc-prefinfo-code' => 'Der ISO-639-Code der Sprache mit der Sie hier arbeiten',
	'wminc-prefinfo-project' => 'Wählen Sie das Wikimedia-Projekt aus, an dem Sie hier arbeiten',
	'wminc-error-move-unprefixed' => 'Fehler: Die Seite, die Sie verschieben wollen, hat entweder [[{{MediaWiki:Wminc-error-help}}|kein oder ein falsches Präfix]].',
	'wminc-error-unprefixed-suggest' => "'''Fehler:''' Diese Seite hat [[{{MediaWiki:Wminc-error-help}}|kein Präfix]]. Sie können unter [[:$1]] eine Seite anlegen.",
	'wminc-error-wiki-sister' => 'Diese Seite gehört zu einem Projekt, das nicht hier gehostet ist. Gehen Sie bitte zu $1, um das Wiki zu finden.',
	'randombytest-nopages' => 'Es befinden sich keine Seiten im Namensraum „$1“ Ihres Testwikis.',
	'wminc-listusers-testwiki' => 'Sie sehen Benutzer, die ihre Testwikieinstellung auf $1 eingestellt haben.',
	'wminc-search-nocreate-nopref' => 'Sie suchten nach „$1“. Bitte legen Sie die [[Special:Preferences|Einstellungen für Ihr Testwiki]] fest, damit wir Ihnen mitteilen können, welche Seite Sie erstellen können.',
	'wminc-search-nocreate-suggest' => 'Sie suchten nach „$1“. Sie können in Ihrem Testwiki eine Seite unter <strong>[[$2]]</strong> erstellen.',
	'wminc-searchwiki-noproject' => 'Sie haben kein Projekt ausgewählt.',
	'wminc-searchwiki-noresults' => 'Keine Ergebnisse. Sie können nach Sprachcodes, muttersprachlichen Bezeichnungen sowie Bezeichnungen in Ihrer voreingestellten Sprache oder in Englisch suchen.',
	'wminc-fs-intro' => 'Willkommen beim Startassistenten von {{SITENAME}}. Er wird Sie beim Starten eines neuen Wikis begleiten.',
	'wminc-fs-settings-text' => 'Bitte besuchen Sie jetzt [[Special:Preferences|Ihre Einstellungen]] und stellen Sie Ihre Test-Wiki-Einstellungen ein.
Rechts sehen Sie die entsprechenden Optionen, die Sie auf der Seite haben. Die erste ist die Sprache Ihrer Benutzeroberfläche, die Sie im ersten Schritt ausgewählt haben, Sie können sie aber immer verändern.
Die zweite Option ist das Projekt, zu dem Sie beitragen wollen, und die dritte steht für den Sprachcode der Sprache, in der Sie zu diesem Projekt beitragen wollen.
Wenn Sie den Code nicht kennen, ziehen Sie bitte unser [[{{MediaWiki:Wminc-manual-url}}|Handbuch]] zu Rate oder [[{{MediaWiki:Portal-url}}|fragen Sie nach]].',
	'wminc-fs-userpage-text' => 'Bitte erstellen Sie jetzt Ihre Benutzerseite $1 mit einigen grundlegenden Informationen über sich selbst. Sie finden hierzu auch einen Link oben auf dieser Seite.',
	'wminc-fs-globaluser-text' => 'Sie haben ein lokales Benutzerkonto. Es wird empfohlen, es über $1 zu einem globalen Benutzerkonto zu machen, so dass Sie es auf jedem Wikimedia-Wiki benutzen können.',
	'wminc-fs-startwiki-text' => 'Das Präfix Ihres Wikis ist <strong>$1</strong>. Sie können das Wiki mit dem Erstellen der Hauptseite unter <strong>$2</strong> starten.',
	'wminc-fs-startwiki-exists-text' => 'Das Präfix Ihres Wikis lautet $1. Die Hauptseite befindet sich auf $2. Sie können jetzt mit anderen Sprechern dieser Sprache zusammenarbeiten, um eine Community aufzubauen!
Wenn Sie eine Seite erstellen möchten, geben Sie einfach den Seitennamen in das Suchfeld oben ein und folgen Sie dem Link, der erscheint.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'wminc-desc' => 'Qan dê Wikimedia Incubatori sistemê test wikiya',
	'wminc-manual' => 'Rehber',
	'wminc-listwikis' => 'Listey wikiyan',
	'wminc-testwiki' => 'Test wiki:',
	'wminc-testwiki-code' => 'Zuwano ke bıcerbneyo:',
	'wminc-testwiki-none' => 'Teba nê/Pêron',
	'wminc-testwiki-site' => '(Weynayış)',
	'wminc-recentchanges-all' => 'Vurnayışê peyêni pêro',
	'wminc-prefinfo-language' => 'Temay zuwani- test wiki ra xoseri ya.',
	'wminc-prefinfo-code' => "Kodê ISO 639'i zıwan dê xo bıgurweynê",
	'wminc-prefinfo-project' => 'Xo rê proceyê de Wikimedia weçinê u bıgurweynê newke',
	'wminc-prefinfo-error' => 'Proceyo ke şıma mor kerdo kodê zıwaniyao.',
	'wminc-error-move-unprefixed' => 'Xırab: Pelaya ke şımayê kenê ahulnê [[{{MediaWiki:Wminc-error-help}}|veroley cı esto yana zi bêveroleyo]]!',
	'wminc-error-wronglangcode' => "'''Xırab:''' Miyanê pela da \"\$1\"'i dı [[{{MediaWiki:Wminc-error-help}}|zıwan kodiyo xırab ]] esto!",
	'wminc-error-unprefixed' => "'''Xırab:''' Ena pela [[{{MediaWiki:Wminc-error-help}}|nenusneyêna]]!",
	'wminc-error-unprefixed-suggest' => "'''Xırab:''' Ena pela [[{{MediaWiki:Wminc-error-help}}|nênusnêna]]! Tiya ra  [[:$1]] juna pela cırazê.",
	'wminc-error-wiki-exists' => 'Ena vikiya nêwanêna.to va ena pela $1.Wiki newe vıraziyaya sek, şıma ra recay ma çend seati yana çend roci pıpawe ke zerrey cı agozyo.',
	'wminc-error-wiki-sister' => 'Ena pela enê proci zerre dı asena. Şıma ra recay ma şırê $1 dı wiki bıvinê.',
	'randombytest' => 'Test wiki ra pelaya ke raştamê',
	'randombytest-nopages' => 'Test wiki dê şıma dı $1 nameya teba çınyo.',
	'wminc-viewuserlang' => 'Zıwanê karberi u test wikiya cı bıvin',
	'wminc-viewuserlang-user' => 'Namey karberi:',
	'wminc-viewuserlang-go' => 'Şo',
	'wminc-userdoesnotexist' => '"$1" dı karber çınyo.',
	'wminc-ip' => '"$1" jew IP adresiyo.',
	'right-viewuserlang' => 'Zıwanê karberi u test wikiya cı bıvin',
	'group-test-sysop' => 'Hizmetkare Test Viki',
	'group-test-sysop-member' => '{{GENDER:$1|Hizmetkare Test Wiki}}',
	'grouppage-test-sysop' => '{{ns:project}}:Hizmetkare test wiki',
	'group-test-sysop.css' => '/* Heruna CSS kewtışi tenya Xizmetkari şeni */',
	'group-test-sysop.js' => '/* Heruna JS kewtışi tenya Xizmetkari şeni */',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Zıwanê "$3" ]] literatur dı [[wikipedia:ISO 639 macrolanguage|herazıwano]], cêr dı xorê zewna zıwan bewni re:',
	'wminc-code-collective' => 'Kodê zıwan dê "$1" teba mana nêdano, feqet koleksiyonê zıwani, zek vacım [[wikipedia:$2 language|zıwano "$3"]]o.',
	'wminc-code-retired' => 'Ena koda zıwani vurneyaya yana orcinal zıwani referans nêgêna.',
	'wminc-listusers-testwiki' => "Şıma bıvinê kami tercihê test wikiya $1'i kenê kontrol.",
	'wminc-search-nocreate-nopref' => 'Pelaya ke şıma geyrenê "$1"\'a. Şıma ra reca sazanê xo [[Special:Preferences|tercihê test wiki]] dı bıvinê ke ma şıma rê vacım şıma şenê kanci pela vırazê!',
	'wminc-search-nocreate-suggest' => 'Xorê cı geyrê "$1"\'i. Şıma şenê viki da <strong>[[$2]]</strong> dı pela vırazê!',
	'wminc-searchwiki' => 'Wikidı cıgeyrê',
	'wminc-searchwiki-noproject' => 'Xorê proce me weçinê.',
	'wminc-searchwiki-noresults' => 'Netice çınyo.Xorê cı geyre kodan de zıwana, namey cıyo raştay u namey cıyo orcinal yana ingılızki.',
	'wminc-searchwiki-selectproject' => 'Bıgeyrê:',
	'wminc-searchwiki-inputlanguage' => 'Zıwanê cı:',
	'wminc-searchwiki-go' => 'Şo',
	'wminc-searchwiki-multiplematches' => 'Şımayê kanci zuwandı geyrenê çi:',
	'wminc-searchwiki-match-langcode' => '"$1" zuwan kodê ISO 639  $2\'o.',
	'wminc-searchwiki-match-userlangname' => "$1' eno/ena zuwandeyo.",
	'wminc-searchwiki-match-englishname' => 'Namey "$1"\'i zuwando bindı $2 zazakiyo.',
	'wminc-searchwiki-match-nativename' => 'Namay "$1"\'i zuwando bindı $2\'o(a)',
	'wminc-searchwiki-goto' => '<strong>$1</strong> ($2)',
	'wminc-searchwiki-gotoinfopage' => 'Peyaya destegi',
	'wminc-fs-pagetitle' => 'Seherbaze dest peke - $1',
	'wminc-fs-langselect-title' => 'Zıwan weçine',
	'wminc-fs-signup-title' => 'Qeyd bı',
	'wminc-fs-settings-title' => 'Tercihe wiki daşıma',
	'wminc-fs-userpage-title' => 'Pela karberi vıraze',
	'wminc-fs-startwiki-title' => 'Wikiya xo dest pekeri',
	'wminc-fs-pagetitle-done' => '- tamam!',
	'wminc-fs-langselect' => 'Ya raveri $1 yana raveri $2',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'wminc-desc' => 'Testowy wikijowy system za Wikimedia Incubator',
	'wminc-manual' => 'Pśirucka',
	'wminc-listwikis' => 'Lisćina wikijow',
	'wminc-testwiki' => 'Testowy wiki:',
	'wminc-testwiki-code' => 'Rěc testowego wikija',
	'wminc-testwiki-none' => 'Žeden/Wše',
	'wminc-testwiki-site' => '(Wótwardowanje)',
	'wminc-recentchanges-all' => 'Wšykne nowe změny',
	'wminc-prefinfo-language' => 'Rěc twójogo wužywarskego pówjercha - wót twójogo testowego wikija njewótwisna',
	'wminc-prefinfo-code' => 'Rěcny kod ISO 639 rěcy, z kótarejuž how źěłaš',
	'wminc-prefinfo-project' => 'Wubjeŕ Wikimedijowy projekt, na kótaremž how źěłaš',
	'wminc-prefinfo-error' => 'Sy projekt wubrał, kótaryž se rěcny kod pomina.',
	'wminc-error-wronglangcode' => "'''Zmólka:''' Toś ten bok wopśimujo [[{{MediaWiki:Wminc-error-help}}|wopacny rěcny kod]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Zmólka:''' Toś ten bok [[{{MediaWiki:Wminc-error-help}}|njama prefiks]]!",
	'wminc-error-unprefixed-suggest' => "'''Zmólka:''' Toś ten bok [[{{MediaWiki:Wminc-error-help}}|njama prefiks]]! Móžoš bok z titelom [[:$1]] napóraś.",
	'wminc-error-wiki-sister' => 'Toś ten bok słuša k projektoju, kótaryž njejo how hostowany. Pšosym źi k $1, aby ten wiki namakał.',
	'randombytest' => 'Pśipadny bok pó testowem wikiju',
	'randombytest-nopages' => 'W twójom testowem wikiju w mjenjowem rumje $1 boki njejsu.',
	'wminc-viewuserlang' => 'Wužywarsku rěc a testowy wiki se woglědaś',
	'wminc-viewuserlang-user' => 'Wužywarske mě:',
	'wminc-viewuserlang-go' => 'Pokazaś',
	'wminc-userdoesnotexist' => 'Wužywaŕ "$1" njeeksistěrujo.',
	'wminc-ip' => '"$1" jo IP-adresa.',
	'right-viewuserlang' => 'Wužywarsku rěc a testowy wiki se woglědaś',
	'group-test-sysop' => 'Administratory testowego wikija',
	'group-test-sysop-member' => '{{GENDER:$1|administrator|administratorka}} testowego wikija',
	'grouppage-test-sysop' => '{{ns:project}}:Administratory testowego wikija',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Rěc "$3"]] jo [[wikipedia:ISO 639 macrolanguage|makrorěc]], kótaraž zestaja se ze slědujucych jadnotliwych rěcow:',
	'wminc-code-collective' => 'Kod "$1" njepósěgujo se na wěstu rěc, ale na kupku rěcow, ale na [[wikipedia:$2 language|rěcy "$3"]].',
	'wminc-code-retired' => 'Toś ten rěcny kod jo se změnił a wěcej njepóśěgujo na spócetnu rěc.',
	'wminc-listusers-testwiki' => 'Wiźiš wužywarjow, kótarež su swójo nastajenje testowego wikija na $1 nastajili.',
	'wminc-search-nocreate-nopref' => 'Sy za "$1" pytał. Pšosym staj swójo [[Special:Preferences|nastajenje testowego wikija]], aby my śi k wěsći dalii, kótary bok móžoš napóraś!',
	'wminc-search-nocreate-suggest' => 'Sy za "$1" pytał. Móžoš bok w swójom wikiju pód <strong>[[$2]]</strong> napóraś!',
	'wminc-searchwiki' => 'Za wikijom pytaś',
	'wminc-searchwiki-noproject' => 'Njejsy projekt wubrał.',
	'wminc-searchwiki-noresults' => 'Žedne wuslědki. Móžoš pó rěcnych kodach, maminorěcnych mjenjach a mjenjach w rěcy swójogo wužywarskego powjercha abo w engelšćinje pytaś.',
	'wminc-searchwiki-selectproject' => 'Pytaś za:',
	'wminc-searchwiki-inputlanguage' => 'W rěcy:',
	'wminc-searchwiki-go' => 'Pytaś',
	'wminc-searchwiki-multiplematches' => 'Wuslědki pytanja wótpowěduju slědujucym rěcam:',
	'wminc-searchwiki-match-langcode' => '"$1" jo rěcny kod ISO 639 za $2.',
	'wminc-searchwiki-match-userlangname' => '$1 jo mě rěcy.',
	'wminc-searchwiki-match-englishname' => '"$1" jo mě za $2 engelski.',
	'wminc-searchwiki-match-nativename' => '"$1" jo mě za $2 w tej rěcy.',
	'wminc-searchwiki-gotoinfopage' => 'Infobok',
	'wminc-fs-pagetitle' => 'Startowy asistent - $1',
	'wminc-fs-langselect-title' => 'Rěc wubraś',
	'wminc-fs-signup-title' => 'Registrěrowaś',
	'wminc-fs-settings-title' => 'Wikinastajenja póstajiś',
	'wminc-fs-userpage-title' => 'Twój wužywarski bok napóraś',
	'wminc-fs-startwiki-title' => 'Wiki startowaś',
	'wminc-fs-pagetitle-done' => ' - wótbyte!',
	'wminc-fs-intro' => 'Witaj k startowemu asistentoju {{GRAMMAR:genitiw|{{SITENAME}}}}. Buźo śi pśez proces startowanja nowego wikija wjasć.',
	'wminc-fs-langselect' => 'W $1 abo $2 dalej cyniś',
	'wminc-fs-userpage-text' => 'Pšosym napóraj wužywarski bok $1 z někotarymi informacijami wó sebje. Móžoš teke wótkaz k njomu górjejce na boku wiźeś.',
	'wminc-fs-globaluser-text' => 'Twójo wužywarske konto jo lokalne. Pśiraźujo se jo pśez $1 globalne cyniś, aby mógał jo na kuždem wikiju Wikimedije wužywaś.',
	'wminc-fs-startwiki-text' => '<strong>$1</strong> jo prefiks twójogo wikija. Móžoš wiki startowaś, napórajucy głowny bok wikija na <strong>$2</string>.',
);

/** Central Dusun (Dusun Bundu-liwan)
 * @author FRANCIS5091
 */
$messages['dtp'] = array(
	'wminc-desc' => 'Nuludan pogumbalan wiki montok Pongongomut Wikimodia',
	'wminc-testwiki' => 'Wiki pogumbalan',
	'wminc-testwiki-none' => 'Aiso/Oinsanan',
	'wminc-prefinfo-language' => 'Woyoboros gunoonnu - poinsuai mantad wiki pogumbalannu',
	'wminc-prefinfo-code' => 'Kod woyoboros tumanud ISO 639',
	'wminc-prefinfo-project' => 'Pilio purujik wikimodia (Pongongomut nopo nga pipilion montok momomoguno di pigosusuaian wonsoion)',
	'wminc-prefinfo-error' => 'Minomili ko di purujik di momoguno kod woyoboros',
	'randombytest' => 'Songkobolikon do wiki pogumbalan',
	'randombytest-nopages' => 'Ingaa bobolikon id wiki pogumbalannu, it koingaran do: $1.',
	'wminc-viewuserlang' => 'Ihumo boros momoguno om pogumbalan wiki',
	'wminc-viewuserlang-user' => 'Ngarannu:',
	'wminc-viewuserlang-go' => 'Ongoi',
	'right-viewuserlang' => 'Intaai woyoboros momomoguno om wiki pogumbalan',
);

/** Ewe (eʋegbe) */
$messages['ee'] = array(
	'wminc-viewuserlang-go' => 'Yi',
);

/** Greek (Ελληνικά)
 * @author Crazymadlover
 * @author Geraki
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'wminc-desc' => 'Δοκιμή του συστήματος βίκι για το Wikimedia Incubator',
	'wminc-manual' => 'Εγχειρίδιο',
	'wminc-listwikis' => 'Λίστα των βίκι',
	'wminc-testwiki' => 'Δοκιμαστικό wiki:',
	'wminc-testwiki-none' => 'Κανένα/Όλα',
	'wminc-recentchanges-all' => 'Όλες οι πρόσφατες αλλαγές',
	'wminc-prefinfo-language' => 'Η γλώσσα συστήματος - ανεξάρτητη από το δοκιμαστικό σας βίκι',
	'wminc-prefinfo-code' => 'Ο κωδικός γλώσσας ISO 639',
	'wminc-prefinfo-project' => 'Επιλογή του εγχειρήματος Wikimedia (η επιλογή Incubator είναι για όσους χρήστες κάνουν γενική δουλειά)',
	'wminc-prefinfo-error' => 'Επιλέξατε ένα σχέδιο που χρειάζεται ένα κωδικό γλώσσας.',
	'randombytest' => 'Τυχαία σελίδα από το δοκιμαστικό wiki',
	'randombytest-nopages' => 'Δεν υπάρχουν σελίδες στο wiki δοκιμής σας, στις περιοχές ονομάτων: $1.',
	'wminc-viewuserlang' => 'Ανατρέξτε στη γλώσσα χρήστη και στο δοκιμαστικό βίκι',
	'wminc-viewuserlang-user' => 'Όνομα χρήστη:',
	'wminc-viewuserlang-go' => 'Μετάβαση',
	'wminc-userdoesnotexist' => 'Ο χρήστης "$1" δεν υπάρχει.',
	'wminc-ip' => '"$1" είναι μια διεύθυνση IP.',
	'right-viewuserlang' => 'Προβολή της γλώσσας χρήστη και του δοκιμαστικού βίκι',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'wminc-desc' => 'Testa vikisistemo por Wikimedia-Inkubatoro',
	'wminc-manual' => 'Manlibro',
	'wminc-listwikis' => 'Listo de vikioj',
	'wminc-testwiki' => 'Prova vikio:',
	'wminc-testwiki-code' => 'Testi vikian lingvon:',
	'wminc-testwiki-none' => 'Nenio/Ĉio',
	'wminc-recentchanges-all' => 'Ĉiuj lastatempaj ŝanĝoj',
	'wminc-prefinfo-language' => 'Via interfaca lingvo - sendepende de via prova vikio',
	'wminc-prefinfo-code' => 'La lingvo kodo ISO 639',
	'wminc-prefinfo-project' => 'Elektu la Wikimedia-projekton (Kovejo elekto estas por uzantoj kiuj faras ĝeneralan laboron)',
	'wminc-prefinfo-error' => 'Vi elektis projekton kiu bezonas lingvan kodon.',
	'wminc-error-move-unprefixed' => 'Eraro: La paĝo kiun vi provas aliri [[{{MediaWiki:Wminc-error-help}}|estas senprefiksa aŭ havas malĝustan prefikson]]!',
	'wminc-error-wronglangcode' => "'''Eraro:''' Ĉi tiu paĝo enhavas [[{{MediaWiki:Wminc-error-help}}|malĝustan lingvokodon]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Eraro:''' Ĉi tiu paĝo estas [[{{MediaWiki:Wminc-error-help}}|senprefiksa]]!",
	'wminc-error-unprefixed-suggest' => "'''Eraro:''' Ĉi tiu paĝo estas [[{{MediaWiki:Wminc-error-help}}|senprefiksa]]! Vi povas krei paĝon ĉe [[:$1]].",
	'wminc-error-wiki-exists' => 'Ĉi tiu vikio jam ekzistas. Vi povas trovi ĉi tiun paĝon en $1. Se la vikio estis lastatempe kreita, bonvolu atendi kelkajn horojn aŭ tagojn ĝis ĉiuj datenoj estas importitaj.',
	'wminc-error-wiki-sister' => 'Ĉi tiu paĝo apartenas projekton ne gastigata ĉi tie. Bonvolu iri al $1 por trovi la vikio.',
	'randombytest' => 'Hazarda paĝo de testvikio',
	'randombytest-nopages' => 'Mankas paĝoj en via testvikio en la nomspaco: $1.',
	'wminc-viewuserlang' => 'Trarigardi uzulan lingvon kaj testi vikion',
	'wminc-viewuserlang-user' => 'Salutnomo:',
	'wminc-viewuserlang-go' => 'Ek',
	'wminc-userdoesnotexist' => 'La uzanto "$1" ne ekzistas.',
	'wminc-ip' => '"$1" estas IP-adreso.',
	'right-viewuserlang' => 'Vidi uzulan lingvon kaj testvikion',
	'group-test-sysop' => 'Administrantoj de la test vikio',
	'group-test-sysop-member' => '{{GENDER:$1|administranto de la testa vikio|administrantino de la testa vikio}}',
	'grouppage-test-sysop' => '{{ns:project}}:Test wiki - Administrantoj de la testa vikio',
	'wminc-code-macrolanguage' => 'La [[wikipedia:$2 lingvo|lingvo "$3"]] estas [[wikipedia:ISO 639 makrolingvo|makrolingvo]], enhavanta la jenajn membraj lingvoj:',
	'wminc-code-collective' => 'La lingvo-kodo "$1" ne referencas specifan lingvo, sed aro da lingvoj, ĉefe la [[wikipedia:$2 language|"$3" lingvoj]].',
	'wminc-code-retired' => 'Ĉi tiu lingvo-kodo estis ŝanĝita kaj ne plu referencas la originalan lingvon.',
	'wminc-listusers-testwiki' => 'Vi rigardas uzantojn kiu agordas vikian preferon al $1.',
);

/** Spanish (español)
 * @author Antur
 * @author Armando-Martin
 * @author Crazymadlover
 * @author Drini
 * @author Fitoschido
 * @author Translationista
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'wminc-desc' => 'Sistema de wiki de prueba para Wikimedia Incubator',
	'wminc-manual' => 'Manual',
	'wminc-listwikis' => 'Lista de wikis',
	'wminc-testwiki' => 'Wiki de prueba:',
	'wminc-testwiki-code' => 'Idioma del wiki de pruebas:',
	'wminc-testwiki-none' => 'Ninguno/Todo',
	'wminc-testwiki-site' => '(Mantenimiento)',
	'wminc-recentchanges-all' => 'Todos los cambios recientes',
	'wminc-prefinfo-language' => 'Tu idioma de interface - independiente de tu wiki de prueba',
	'wminc-prefinfo-code' => 'El código ISO 639 del idioma en el que estás trabajando aquí',
	'wminc-prefinfo-project' => 'Selecciona el proyecto de Wikimedia en el que estás trabajando',
	'wminc-prefinfo-error' => 'Seleccionaste un proyecto que necesita un código de lenguaje.',
	'wminc-error-move-unprefixed' => 'Error: La página que estás intentando trasladar a [[{{MediaWiki:Wminc-error-help}}|tiene el prefijo equivocado o carece del mismo]].',
	'wminc-error-wronglangcode' => "'''Error:''' Esta página contiene un [[{{MediaWiki:Wminc-error-help}}|código de idioma equivocado]], \"\$1\".",
	'wminc-error-unprefixed' => "'''Error:''' Esta página [[{{MediaWiki:Wminc-error-help}}|carece de prefijo]].",
	'wminc-error-unprefixed-suggest' => "'''Error:''' Esta página [[{{MediaWiki:Wminc-error-help}}|carece de prefijo]]. Puedes crearla en [[:$1]].",
	'wminc-error-wiki-exists' => 'Esta wiki ya existe, puedes encontrarla en $1. Si la wiki es de reciente creación, por favor espera un par de días hasta que todo el contenido sea importado.',
	'wminc-error-wiki-sister' => 'Esta página pertenece a un proyecto que no está hospedado aquí. Por favor acuda a $1 para encontrar la wiki.',
	'randombytest' => 'Página aleatoria para probar wiki',
	'randombytest-nopages' => 'No hay páginas en su wiki de prueba, en el espacio de nombres: $1.',
	'wminc-viewuserlang' => 'Ver lenguaje de usuario y wiki de prueba',
	'wminc-viewuserlang-user' => 'Nombre de usuario:',
	'wminc-viewuserlang-go' => 'Ir',
	'wminc-userdoesnotexist' => 'El usuario «$1» no existe.',
	'wminc-ip' => '"$1" es una dirección IP.',
	'right-viewuserlang' => 'Ver idioma de usuario y prueba wiki',
	'group-test-sysop' => 'Administradores de wiki de prueba',
	'group-test-sysop-member' => '{{GENDER:$1|administrador|administradora}} del wiki de pruebas',
	'grouppage-test-sysop' => '{{ns:project}}:Administradores de wiki de pruebas',
	'wminc-code-macrolanguage' => 'El [[wikipedia:$2 language|$3]] es una [[wikipedia:es:Macrolengua|macrolengua]], que se compone de los siguientes idiomas:',
	'wminc-code-collective' => 'El código "$1" no se refiere a un idioma específico sino a una colección de idiomas, específicamente los [[wikipedia:$2 language|idiomas "$3"]].',
	'wminc-code-retired' => 'Este código de idioma ha cambiado o ya no se refiere al idioma original.',
	'wminc-listusers-testwiki' => 'Estás mirando la lista de usuarios que han seleccionado su opción de wiki de pruebas a $1.',
	'wminc-search-nocreate-nopref' => 'Hizo una búsqueda de "$1". ¡Configure sus [[Special:Preferences|preferencias del wiki de pruebas]] de forma que podamos decirle qué la página que puede crear!',
	'wminc-search-nocreate-suggest' => 'Buscaste "$1". Puedes crear una página en tu wiki en <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Búsqueda de un wiki',
	'wminc-searchwiki-noproject' => 'No ha seleccionado un proyecto.',
	'wminc-searchwiki-noresults' => 'No hay resultados. Puede buscar por códigos de idioma, nombres nativos y nombres en el idioma de su interfaz o en inglés.',
	'wminc-searchwiki-selectproject' => 'Buscar por:',
	'wminc-searchwiki-inputlanguage' => 'En idioma:',
	'wminc-searchwiki-go' => 'Ir',
	'wminc-searchwiki-multiplematches' => 'Su búsqueda coincide en los siguientes idiomas:',
	'wminc-searchwiki-match-langcode' => '"$1" es un código de idioma ISO 639 para  $2 .',
	'wminc-searchwiki-match-userlangname' => '$1 es el nombre de un idioma.',
	'wminc-searchwiki-match-englishname' => '"$1" es el nombre de $2 en inglés.',
	'wminc-searchwiki-match-nativename' => '"$1" es el nombre de $2 en ese idioma.',
	'wminc-searchwiki-gotoinfopage' => 'página de información',
	'wminc-fs-pagetitle' => 'Asistente para los primeros pasos - $1',
	'wminc-fs-langselect-title' => 'Seleccionar idioma',
	'wminc-fs-signup-title' => 'Registrarse',
	'wminc-fs-settings-title' => 'Definir tus preferencias de wiki',
	'wminc-fs-userpage-title' => 'Crear tu página de usuario',
	'wminc-fs-startwiki-title' => 'Comienza tu wiki',
	'wminc-fs-pagetitle-done' => '- ¡hecho!',
	'wminc-fs-intro' => 'Bienvenido al asistente de primeros pasos de {{SITENAME}}. Te guiará a través del proceso de poner en marcha un nuevo wiki.',
	'wminc-fs-langselect' => 'Continuar en $1 o $2',
	'wminc-fs-signup-text' => 'Si ya tienes una cuenta de usuario, por favor [$1 inicia sesión]. Si todavía no tienes una, por favor [$2 crea una cuenta de usuario].
No es obligatorio pero es muy recomendable y sólo se tarda unos segundos en crearla.',
	'wminc-fs-settings-text' => 'Ahora vaya a [[Special:Preferences|sus preferencias]] y cambie la configuración de su wiki de pruebas.
A la derecha verá las opciones más importantes que tiene en esa página. La primera es el idioma de la interfaz, que eligió en el primer paso, pero todavía puede modificarla.
La segunda es el proyecto al que quiere contribuir y la tercera es el código de idioma del proyecto al que quiere contribuir.
Si no sabe el código, consulte nuestro [[{{MediaWiki:Wminc-manual-url}}|manual]] o pida [[{{MediaWiki:Portal-url}}|ayuda]].',
	'wminc-fs-userpage-text' => 'Cree ahora su página de usuario $1 con alguna información básica acerca de usted. También puede ver un enlace a la misma en la parte superior de esta página.',
	'wminc-fs-globaluser-text' => 'Su cuenta de usuario es local. Se recomienda hacerla global a través de $1 para que pueda utilizarla en cualquier wiki de Wikimedia.',
	'wminc-fs-startwiki-text' => 'El prefijo de tu wiki es <strong>$1</strong>. Puedes iniciar el wiki creando la página principal del wiki en <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'El prefijo de tu wiki es $1. La página principal está en $2. ¡Ahora puedes colaborar con otros hablantes de este idioma para construir una comunidad!
Si deseas crear una página, simplemente escribe el nombre en el cuadro de búsqueda de arriba y sigue el enlace que verás.',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'wminc-desc' => 'Katsevikide süsteem Wikimedia Inkubaatori jaoks',
	'wminc-manual' => 'Käsiraamat',
	'wminc-listwikis' => 'Vikide nimekiri',
	'wminc-testwiki' => 'Katseviki:',
	'wminc-testwiki-code' => 'Katseviki keel:',
	'wminc-testwiki-none' => 'Puudub/Kõik',
	'wminc-testwiki-site' => '(Korrashoid)',
	'wminc-recentchanges-all' => 'Kõik viimased muudatused',
	'wminc-prefinfo-language' => 'Sinu liidese keel (katsevikist olenematu)',
	'wminc-prefinfo-code' => 'Sinu kaastöö keele ISO 639 kood',
	'wminc-prefinfo-project' => 'Vali Wikimedia projekt, millele kaastööd teed',
	'wminc-prefinfo-error' => 'Koos valitud projektiga tuleb määrata ka keelekood.',
	'wminc-error-move-unprefixed' => 'Tõrge: Lehekülg, mida üritad teisaldada, [[{{MediaWiki:Wminc-error-help}}|on eesliiteta või vale eesliitega]]!',
	'wminc-error-wronglangcode' => "'''Tõrge:''' See lehekülg sisaldab [[{{MediaWiki:Wminc-error-help}}|vale keelekoodi]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Tõrge:''' See lehekülg on [[{{MediaWiki:Wminc-error-help}}|eesliiteta]]!",
	'wminc-error-unprefixed-suggest' => "'''Tõrge:''' See lehekülg on [[{{MediaWiki:Wminc-error-help}}|eesliiteta]]! Uue lehekülje saad luua asukohas [[:$1]].",
	'wminc-error-wiki-exists' => 'See viki on juba olemas. Selle lehekülje leiad asukohast $1. Kui viki loodi hiljuti, oota palun mõned tunnid või päevad, kuni kogu sisu on imporditud.',
	'wminc-error-wiki-sister' => 'See lehekülg on osa projektist, mida ei peeta siin. Mine palun asukohta $1, et see viki leida.',
	'randombytest' => 'Juhuslik katseviki lehekülg',
	'randombytest-nopages' => 'Sinu katseviki nimeruumis "$1" pole lehekülgi.',
	'wminc-viewuserlang' => 'Kasutaja keele ja katseviki vaatamine',
	'wminc-viewuserlang-user' => 'Kasutajanimi:',
	'wminc-viewuserlang-go' => 'Mine',
	'wminc-userdoesnotexist' => 'Kasutajat "$1" pole olemas.',
	'wminc-ip' => '$1 on IP-aadress.',
	'right-viewuserlang' => 'Vaadata kasutaja keelt ja katsevikit',
	'group-test-sysop' => 'Katseviki administraatorid',
	'group-test-sysop-member' => 'katseviki administraator',
	'grouppage-test-sysop' => '{{ns:project}}:Katseviki administraatorid',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|$3 keel]] on [[wikipedia:ISO 639 macrolanguage|makrokeel]], mis koosneb järgmistest keeltest:',
	'wminc-code-collective' => 'Keelekood "$1" ei viita kindlale keelele, vaid järgmisele keelterühmale: [[wikipedia:$2 language|$3 keeled]].',
	'wminc-code-retired' => 'Seda keelekoodi on muudetud ja see ei viita enam esialgsele keelele.',
	'wminc-listusers-testwiki' => 'Vaatad kasutajaid, kes on oma katsevikiks määranud $1.',
	'wminc-search-nocreate-nopref' => 'Otsisid märksõna "$1". Palun määra oma [[Special:Preferences|katseviki eelistus]], et saaksime sulle näidata, millist lehekülge alustada.',
	'wminc-search-nocreate-suggest' => 'Otsisid märksõna "$1". Enda vikis saad lehekülge alustada asukohas <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Viki otsimine',
	'wminc-searchwiki-noproject' => 'Sa ei valinud projekti.',
	'wminc-searchwiki-noresults' => 'Tulemusteta. Saad otsida keelekoodide, omakeelsete nimetuste, oma liidese keeles nimetuste või ingliskeelsete nimetuste järgi.',
	'wminc-searchwiki-selectproject' => 'Otsitav:',
	'wminc-searchwiki-inputlanguage' => 'Keel:',
	'wminc-searchwiki-go' => 'Mine',
	'wminc-searchwiki-multiplematches' => 'Sinu otsingule vastavad järgmised keeled:',
	'wminc-searchwiki-match-langcode' => '"$1" on $2 keele ISO 639 kood.',
	'wminc-searchwiki-match-userlangname' => '"$1" on osa keelenimetusest.',
	'wminc-searchwiki-match-englishname' => '"$1" on $2 keele ingliskeelne nimetus.',
	'wminc-searchwiki-match-nativename' => '"$1" on $2 keele nimetus selles keeles.',
	'wminc-searchwiki-gotoinfopage' => 'teabeleht',
	'wminc-fs-pagetitle' => 'Alustamisviisard – $1',
	'wminc-fs-langselect-title' => 'Keele valimine',
	'wminc-fs-signup-title' => 'Registreerumine',
	'wminc-fs-settings-title' => 'Vikieelistuste määramine',
	'wminc-fs-userpage-title' => 'Kasutajalehekülje loomine',
	'wminc-fs-startwiki-title' => 'Vikiga alustamine',
	'wminc-fs-pagetitle-done' => ' – valmis!',
	'wminc-fs-intro' => 'Tere tulemast võrgukoha {{SITENAME}} alustusviisardisse. Sind juhendatakse uue viki alustamise juures.',
	'wminc-fs-langselect' => 'Jätka $1 keeles või mõnes järgmistest keeltest: $2',
	'wminc-fs-signup-text' => 'Kui sul juba on kasutajakonto, [$1 logi palun sisse]. Kui sul pole seda veel, [$2 loo palun endale kasutajakonto].
Konto loomist ei nõuta, aga see on ülimalt soovitatav ja võtab vaid mõne sekundi.',
	'wminc-fs-settings-text' => 'Palun mine nüüd [[Special:Preferences|eelistuste leheküljele]] ja vali oma katseviki säte.
Paremal näed asjakohaseid suvandeid, mida sellel leheküljel valida. Esimene on liidese keel, mille valisid esimeses etapis ja mida saad soovi korral muuta.
Teine on projekt, millele soovid kaastööd teha ja kolmas on keelekood, mis vastab keelele, milles projektile kaastööd soovid teha.
Kui sa ei tea koodi, uuri palun meie [[{{MediaWiki:Wminc-manual-url}}|juhendit]] või [[{{MediaWiki:Portal-url}}|küsi abi]].',
	'wminc-fs-userpage-text' => 'Nüüd alusta palun oma kasutajalehekülge $1, kus võiks olla sinu kohta kirjas mõned põhiandmed. Lingi kasutajaleheküljele leiad ka selle lehekülje ülaservast.',
	'wminc-fs-globaluser-text' => 'Sul on kohalik kasutajakonto. Soovitatav on luua leheküljel $1 ühendkonto, et saaksid kasutada seda kõigis Wikimedia vikides.',
	'wminc-fs-startwiki-text' => 'Sinu viki eesliide on <strong>$1</strong>. Saad selle vikiga alustada, kui lood esilehe asukohas <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'Sinu viki eesliide on $1. Viki esileht on asukohas $2. Saad nüüd teiste selle keele kõnelejatega koostööd teha, et luua kaastööliskond!
Kui soovid lehekülge luua, sisesta pealkiri lihtsalt ülalolevale otsiribale ja järgi linki, mida näed.',
);

/** Basque (euskara)
 * @author An13sa
 * @author Kobazulo
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'wminc-desc' => 'Wikimedia Incubatorrerako wiki proba sistema',
	'wminc-manual' => 'Eskuliburua',
	'wminc-testwiki' => 'Probazko wikia:',
	'wminc-testwiki-none' => 'Bat ere ez/Guztiak',
	'wminc-testwiki-site' => '(Mantenketa)',
	'wminc-recentchanges-all' => 'Aldaketa berri guztiak',
	'wminc-prefinfo-language' => 'Zure interfazearen hizkuntza - Wiki probatik independentea da',
	'wminc-prefinfo-code' => 'Lanean ari zaren hizkuntzaren ISO 639 hizkuntza kodea',
	'wminc-prefinfo-project' => 'Aukeratu lanean ari zaren Wikimedia proiektua',
	'wminc-prefinfo-error' => 'Hizkuntza-kodea behar duen proiektua aukeratu duzu.',
	'randombytest' => 'Wiiki testaren ausazko orria',
	'randombytest-nopages' => 'Ez dago orrialderik zure proba wikian, $1 izen-tartearekin.',
	'wminc-viewuserlang' => 'Lankidearen hizkuntza eta probazko wikia ikusi',
	'wminc-viewuserlang-user' => 'Erabiltzaile izena:',
	'wminc-viewuserlang-go' => 'Joan',
	'right-viewuserlang' => 'Ikusi lankide hizkuntza eta wiki testa',
	'wminc-searchwiki-go' => 'Joan',
);

/** Persian (فارسی)
 * @author Huji
 * @author Mehran
 * @author MehranVB
 * @author Mjbmr
 * @author Sahim
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'wminc-desc' => 'سامانهٔ ویکی آزمایشی برای ویکی‌رشد ویکی‌مدیا',
	'wminc-manual' => 'راهنمای کاربر',
	'wminc-listwikis' => 'فهرست ویکی‌ها',
	'wminc-testwiki' => 'ویکی آزمایشی:',
	'wminc-testwiki-code' => 'امتحان‌کردن زبان ویکی:',
	'wminc-testwiki-none' => 'هیچ‌کدام/همه',
	'wminc-testwiki-site' => '(نگهداری)',
	'wminc-recentchanges-all' => 'همهٔ تغییرات اخیر',
	'wminc-prefinfo-language' => 'زبان رابط کاربری شما - مستقل از ویکی آزمایشی شما',
	'wminc-prefinfo-code' => 'کد زبان ایزو ۶۳۹',
	'wminc-prefinfo-project' => 'پروژه ویکی‌مدیا را انتخاب کنید (گزینه ویکی‌رشد برای کاربرانی که کار عمومی انجام می‌دهند)',
	'wminc-prefinfo-error' => 'شما یک پروژه‌ای را انتخاب کرده‌اید که به یک کد زبان احتیاج دارد.',
	'wminc-error-move-unprefixed' => 'خطا: صفحه‌ای که شما قصد انتقال آن را دارید [[{{MediaWiki:Wminc-error-help}}|فاقد پیشوند و یا دارای پیشوند نادرست]] می‌باشد!',
	'wminc-error-wronglangcode' => "'''خطا:''' یک [[{{MediaWiki:Wminc-error-help}}|کد زبان نادرست]] در این صفحه به کار رفته‌است: «$1»",
	'wminc-error-unprefixed' => "'''خطا:''' این صفحه [[{{MediaWiki:Wminc-error-help}}|فاقد پیشوند]] می‌باشد!",
	'wminc-error-unprefixed-suggest' => "'''خطا:''' این صفحه [[{{MediaWiki:Wminc-error-help}}|فاقد پیشوند]] می‌باشد! شما می‌توانید یک صفحه در [[:$1]] ایجاد کنید.",
	'wminc-error-wiki-exists' => 'این ویکی در حال حاضر وجود دارد. شما می‌توانید این صفحه را در $1 پیدا کنید. اگر ویکی به تازگی ایجاد شده است، لطفاً چند ساعت یا چند روز صبر کنید تا تمامی محتوا وارد شوند.',
	'wminc-error-wiki-sister' => 'این صفحه متعلق به پروژه‌ای است که در اینجا میزبانی نمی‌شود. لطفاً به $1 بروید و ویکی را پیدا کنید.',
	'randombytest' => 'صفحه تصادفی بر اساس ویکی آزمایشی',
	'randombytest-nopages' => 'هیچ صفحه‌ای در ویکی آزمایشی شما وجود ندارد، در فضای نامی: $1.',
	'wminc-viewuserlang' => 'مشاهده زبان و ویکی آزمایشی کاربر',
	'wminc-viewuserlang-user' => 'نام کاربری:',
	'wminc-viewuserlang-go' => 'برو',
	'wminc-userdoesnotexist' => 'کاربر «$1» وجود ندارد.',
	'wminc-ip' => '«$1» یک نشانی آی‌پی است.',
	'right-viewuserlang' => 'مشاهده زبان و ویکی آزمایشی کاربر',
	'group-test-sysop' => 'مدیران ویکی آزمایشی',
	'group-test-sysop-member' => 'مدیر ویکی آزمایشی',
	'grouppage-test-sysop' => '{{ns:project}}:مدیران ویکی آزمایشی',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|زبان «$3»]] یک [[wikipedia:ISO 639 macrolanguage|زبان بزرگ]] می‌باشد، که ترکیبی از زبان‌های مقابل می‌باشد:',
	'wminc-code-collective' => 'کد "$1" به زبان خاصی ارجاع نمی‌دهد، ولی به مجموعه‌ای از زبان‌ها ارجاع می‌دهد، یعنی [[wikipedia:$2 language|زبان‌های «$3»]].',
	'wminc-code-retired' => 'کد زبان تغییر کرده است و دیگر به زبان اصلی ارجاع نمی‌دهد.',
	'wminc-listusers-testwiki' => 'شما در حال مشاهدهٔ کاربرانی هستید که ترجیح ویکی آزمایشی خود به $1 تنظیم کرده‌اند.',
	'wminc-searchwiki' => 'جستجو برای یک ویکی',
	'wminc-searchwiki-selectproject' => 'جستجو برای:',
	'wminc-searchwiki-inputlanguage' => 'به زبان:',
	'wminc-searchwiki-go' => 'برو',
	'wminc-searchwiki-gotoinfopage' => 'صفحهٔ اطلاعات',
	'wminc-fs-langselect-title' => 'انتخاب زبان',
	'wminc-fs-signup-title' => 'ثبت نام',
	'wminc-fs-startwiki-title' => 'آغاز ویکی‌تان',
	'wminc-fs-pagetitle-done' => ' - انجام شد!',
);

/** Finnish (suomi)
 * @author Beluga
 * @author Cimon Avaro
 * @author Crt
 * @author Nedergard
 * @author Nike
 * @author Olli
 * @author Silvonen
 * @author Str4nd
 * @author Varusmies
 */
$messages['fi'] = array(
	'wminc-desc' => 'Testiwiki-järjestelmä Wikimedia-hautomoa varten',
	'wminc-manual' => 'Ohje',
	'wminc-listwikis' => 'Wikiluettelo',
	'wminc-testwiki' => 'Testiwiki:',
	'wminc-testwiki-code' => 'Testiwikin kieli:',
	'wminc-testwiki-none' => 'Ei lainkaan/Kaikki',
	'wminc-recentchanges-all' => 'Kaikki viimeisimmät muutokset',
	'wminc-prefinfo-language' => 'Käyttöliittymän kieli – riippumaton testiwikistäsi',
	'wminc-prefinfo-code' => 'ISO 639 -kielikoodi',
	'wminc-prefinfo-project' => 'Valitse Wikimedia-projekti (Hautomo on käyttäjille, jotka tekevät yleisluontoisia askareita)',
	'wminc-prefinfo-error' => 'Olet valinnut projektin, joka tarvitsee kielikoodin.',
	'wminc-error-move-unprefixed' => 'Virhe: Sivulla, jota yrität siirtää [[{{MediaWiki:Wminc-error-help}}|ei ole etuliitettä tai etuliite on väärin]]!',
	'wminc-error-wronglangcode' => "'''Virhe:''' Tällä sivulla on [[{{MediaWiki:Wminc-error-help}}|väärä kielikoodi]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Virhe:''' Tällä sivulla [[{{MediaWiki:Wminc-error-help}}|ei ole etuliitettä]]!",
	'wminc-error-unprefixed-suggest' => "'''Virhe:''' Tällä sivulla [[{{MediaWiki:Wminc-error-help}}|ei ole etuliitettä]]! Voit luoda sivun napsauttamalla: [[:$1]].",
	'wminc-error-wiki-exists' => 'Tämä wiki on jo olemassa. Se löytyy osoitteesta $1. Jos wiki luotiin äskettäin, odota muutamia tunteja tai päiviä, kunnes kaikki sisältö on tuotu.',
	'wminc-error-wiki-sister' => 'Tämä sivu kuuluu projektiin, jonka tiedostot eivät sijaitse tällä palvelimella. Siirry osoitteeseen $1 ja etsi wikiä sieltä.',
	'randombytest' => 'Satunnainen sivu testiwikistä',
	'randombytest-nopages' => 'Testiwikisi nimiavaruudessa $1 ei ole sivuja.',
	'wminc-viewuserlang' => 'Hae esiin käyttäjän kieli ja testiwiki',
	'wminc-viewuserlang-user' => 'Käyttäjätunnus:',
	'wminc-viewuserlang-go' => 'Siirry',
	'wminc-userdoesnotexist' => 'Käyttäjää "$1" ei ole olemassa.',
	'wminc-ip' => '$1 on IP-osoite.',
	'right-viewuserlang' => 'Tarkastella käyttäjän kieltä ja testiwikiä',
	'group-test-sysop' => 'testiwikin ylläpitäjät',
	'group-test-sysop-member' => '{{GENDER:$1|testiwikin ylläpitäjä}}',
	'grouppage-test-sysop' => '{{ns:project}}:Testiwikin ylläpitäjät',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Kieli "$3"]] on [[wikipedia:ISO 639 macrolanguage|makrokieli]], joka koostuu seuraavista kielistä:',
	'wminc-code-collective' => 'Koodi "$1" ei viittaa tiettyyn kieleen, vaan kielikokoelmaan nimeltä [[wikipedia:$2 language|"$3" kielet]].',
	'wminc-code-retired' => 'Tämä kielikoodi on muutettu, ja se ei enää viittaa alkuperäiseen kieleen.',
	'wminc-listusers-testwiki' => 'Katselet käyttäjiä, jotka ovat asettaneet testiwikinsä asetukseksi $1.',
	'wminc-search-nocreate-nopref' => 'Etsit hakusanalla "$1". Aseta [[Special:Preferences|testiwikin asetukset]], jotta voimme kertoa sinulle minkä sivun voit luoda!',
	'wminc-search-nocreate-suggest' => 'Etsit hakusanalla ”$1”. Voit luoda sivun <strong>[[$2]]</strong> tähän wikiin!',
	'wminc-searchwiki-selectproject' => 'Etsi seuraavaa:',
	'wminc-searchwiki-inputlanguage' => 'Kielellä:',
	'wminc-searchwiki-go' => 'Siirry',
	'wminc-fs-signup-title' => 'Rekisteröidy',
	'wminc-fs-pagetitle-done' => ' - valmis!',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author IAlex
 * @author PieRRoMaN
 * @author Seb35
 * @author Shirayuki
 * @author Sylvain2803
 * @author Tpt
 * @author Urhixidur
 */
$messages['fr'] = array(
	'wminc-desc' => 'Système de test de wiki pour Wikimedia Incubator',
	'wminc-manual' => 'Manuel',
	'wminc-listwikis' => 'Liste des wikis',
	'wminc-testwiki' => 'Wiki de test :',
	'wminc-testwiki-code' => 'Langue du wiki de test :',
	'wminc-testwiki-none' => 'Aucun / tous',
	'wminc-testwiki-site' => '(Maintenance)',
	'wminc-recentchanges-all' => 'Toutes les modifications récentes',
	'wminc-prefinfo-language' => 'Votre langue d’interface - indépendante de celle de votre wiki de test',
	'wminc-prefinfo-code' => 'Le code ISO 639 de la langue sur laquelle vous travaillez ici',
	'wminc-prefinfo-project' => 'Sélectionnez le projet Wikimedia sur lequel vous travaillez ici',
	'wminc-prefinfo-error' => 'Vous avez sélectionné un projet qui nécessite un code de langue.',
	'wminc-error-move-unprefixed' => "Erreur : La page vers laquelle vous tentez de renommer [[{{MediaWiki:Wminc-error-help}}|n'a pas de préfixe ou a un préfixe erroné]] !",
	'wminc-error-wronglangcode' => "'''Erreur :''' cette page contient un [[{{MediaWiki:Wminc-error-help}}|code de langue erroné]] \"\$1\" !",
	'wminc-error-unprefixed' => "'''Erreur :''' cette page n’a [[{{MediaWiki:Wminc-error-help}}|pas de préfixe]] !",
	'wminc-error-unprefixed-suggest' => "'''Erreur :''' cette page n’a [[{{MediaWiki:Wminc-error-help}}|pas de préfixe]] ! Vous pouvez créer une page sur : [[:$1]].",
	'wminc-error-wiki-exists' => 'Ce wiki existe déjà. Vous pouvez trouver cette page sur $1. Si le wiki a été récemment créé, veuillez attendre quelques heures ou jours afin que tout le contenu soit importé.',
	'wminc-error-wiki-sister' => "Cette page appartient à un projet qui n'est pas hébergé ici. Merci d'aller en $1 pour trouver le wiki.",
	'randombytest' => 'Page aléatoire par le wiki de test',
	'randombytest-nopages' => 'Votre wiki de test ne contient pas de page dans l’espace de noms : $1.',
	'wminc-viewuserlang' => 'Voir la langue de l’utilisateur et son wiki de test',
	'wminc-viewuserlang-user' => 'Nom d’utilisateur :',
	'wminc-viewuserlang-go' => 'Aller',
	'wminc-userdoesnotexist' => 'L’utilisateur « $1 » n’existe pas.',
	'wminc-ip' => '« $1 » est une adresse IP.',
	'right-viewuserlang' => 'Voir la langue de l’utilisateur et le wiki de test',
	'group-test-sysop' => 'Administrateurs du wiki de test',
	'group-test-sysop-member' => '{{GENDER:$1|administrateur du wiki de test}}',
	'grouppage-test-sysop' => '{{ns:project}}:Test wiki - Administrateurs',
	'wminc-code-macrolanguage' => 'La [[wikipedia:$2 language|langue « $3 »]] est une [[wikipedia:fr:macro-langue|macro-langue]], comprenant les langues suivantes :',
	'wminc-code-collective' => 'Le code « $1 » ne se réfère pas à une langue spécifique, mais à une collection de langues, en particulier les [[wikipedia:$2 language|langues « $3 »]]',
	'wminc-code-retired' => 'Ce code de langue a été changé est ne fait plus référence à la langue d’origine.',
	'wminc-listusers-testwiki' => 'Vous êtes en train de visualiser les utilisateurs qui ont mis leur préférence de wiki de test à $1.',
	'wminc-search-nocreate-nopref' => 'Vous avez recherché « $1 ». Merci de régler vos [[Special:Preferences|préférences du wiki de test]] de manière à ce que nous puissions vous dire quelle page vous pouvez créer !',
	'wminc-search-nocreate-suggest' => 'Vous avez recherché « $1 ». Vous pouvez créer une page dans votre wiki à <strong>[[$2]]</strong> !',
	'wminc-searchwiki' => 'Recherche d’un wiki',
	'wminc-searchwiki-noproject' => 'Vous n’avez pas sélectionné de projet.',
	'wminc-searchwiki-noresults' => 'Aucun résultat. Vous pouvez rechercher par code de langue ou par nom de langue (dans sa langue propre, dans la langue de votre interface ou en anglais). Par exemple : es, español, espagnol, Spanish.',
	'wminc-searchwiki-selectproject' => 'Rechercher :',
	'wminc-searchwiki-inputlanguage' => 'Dans cette langue :',
	'wminc-searchwiki-go' => 'Aller',
	'wminc-searchwiki-multiplematches' => 'Votre recherche correspond aux langues suivantes :',
	'wminc-searchwiki-match-langcode' => '« $1 » est un code de langue ISO 639 pour « $2 ».',
	'wminc-searchwiki-match-userlangname' => '$1 est le nom d’une langue.',
	'wminc-searchwiki-match-englishname' => '« $1 » est le nom de  $2  en anglais.',
	'wminc-searchwiki-match-nativename' => '« $1 » est le nom de $2 dans cette langue.',
	'wminc-searchwiki-gotoinfopage' => 'page d’information',
	'wminc-fs-pagetitle' => 'Guide de démarrage - $1',
	'wminc-fs-langselect-title' => 'Sélectionner la langue',
	'wminc-fs-signup-title' => 'Créer un compte',
	'wminc-fs-settings-title' => 'Définir vos préférences du wiki',
	'wminc-fs-userpage-title' => 'Créer votre page utilisateur',
	'wminc-fs-startwiki-title' => 'Démarrer votre wiki',
	'wminc-fs-pagetitle-done' => ' - fait !',
	'wminc-fs-intro' => 'Bienvenue dans l’Assistant premiers pas {{SITENAME}}. Vous serez guidé tout au long du processus de démarrage d’un nouveau wiki.',
	'wminc-fs-langselect' => 'Procédez en $1 ou en $2',
	'wminc-fs-signup-text' => 'Si vous avez déjà un compte d’utilisateur, veuillez [$1 vous connecter]. Si vous n’en avez pas encore, veuillez [$2 créer un compte utilisateur]. !N !Ce n’est pas requis mais c’est fortement recommandé et ne prend que quelques secondes à créer.',
	'wminc-fs-settings-text' => 'Maintenant allez à [[Special:Preferences|vos préférences]] et modifiez votre choix de wiki de test. !N !À droite, vous voyez les options pertinentes que vous avez sur cette page. La première est votre langue d’interface, que vous avez choisie lors de la première étape, mais que vous pouvez encore modifier. !N !La seconde est le projet auquel vous souhaitez contribuer, et la troisième est le code de langue de ce projet. !N !Si vous ne connaissez pas le code, consultez notre [[{{MediaWiki:Wminc-manual-url}}|manuel]] ou demandez de [[{{MediaWiki:Portal-url}}|l’aide]].',
	'wminc-fs-userpage-text' => 'Veuillez maintenant créer votre page d’utilisateur $1 avec quelques informations vous décrivant. Un lien vers votre page d’utilisateur se trouve en haut de cette page.',
	'wminc-fs-globaluser-text' => 'Votre compte d’utilisateur est local. Il est recommandé d’en faire un compte global grâce à $1, ce qui vous permettra de l’utiliser sur tous les wikis de Wikimedia.',
	'wminc-fs-startwiki-text' => 'Le préfixe de votre wiki est <strong>$1</strong>. Vous pouvez démarrer le wiki en créant sa page d’accueil à <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'Le préfixe de votre wiki est $1. La page d’accueil se trouve à $2. Maintenant, vous pouvez collaborer avec d’autres locuteurs de cette langue et bâtir une communauté ! !N !Si vous souhaitez créer une page, tapez simplement son nom dans la boîte de recherche ci-dessus et cliquez sur le lien que vous verrez.',
);

/** Franco-Provençal (arpetan)
 * @author Cedric31
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'wminc-desc' => 'Sistèmo de vouiqui d’èprôva por Wikimedia Covosa.',
	'wminc-manual' => 'Manuâl',
	'wminc-listwikis' => 'Lista des vouiquis',
	'wminc-testwiki' => 'Vouiqui d’èprôva :',
	'wminc-testwiki-code' => 'Lengoua du vouiqui d’èprôva :',
	'wminc-testwiki-none' => 'Nion / tôs',
	'wminc-testwiki-site' => '(Mantegnence)',
	'wminc-recentchanges-all' => 'Tôs los dèrriérs changements',
	'wminc-prefinfo-language' => 'Voutra lengoua d’entèrface - endèpendenta de cela de voutron vouiqui d’èprôva',
	'wminc-prefinfo-code' => 'Lo code ISO 639 de la lengoua',
	'wminc-prefinfo-project' => 'Chouèsésséd lo projèt Wikimedia (lo chouèx Covosa est dèstinâ ux usanciérs que font un travâly g·ènèral)',
	'wminc-prefinfo-error' => 'Vos éd chouèsi un projèt qu’at fôta d’un code lengoua.',
	'wminc-error-move-unprefixed' => 'Èrror : la pâge de vers laquinta vos tâchiéd de renomar [[{{MediaWiki:Wminc-error-help}}|at gins de prèfixo ou ben at un prèfixo fôx]] !',
	'wminc-error-wronglangcode' => "'''Èrror :''' cela pâge contint un [[{{MediaWiki:Wminc-error-help}}|code lengoua fôx]] « $1 » !",
	'wminc-error-unprefixed' => "'''Èrror :''' cela pâge at [[{{MediaWiki:Wminc-error-help}}|gins de prèfixo]] !",
	'wminc-error-unprefixed-suggest' => "'''Èrror :''' cela pâge at [[{{MediaWiki:Wminc-error-help}}|gins de prèfixo]] ! Vos pouede fâre una pâge dessus [[:$1]].",
	'wminc-error-wiki-exists' => 'Cél vouiqui ègziste ja. Vos pouede trovar ceta pâge dessus $1. Se lo vouiqui at étâ fêt dèrriérement, volyéd atendre doux-três hores ou ben jorns por que tot lo contegnu seye importâ.',
	'wminc-error-wiki-sister' => 'Cela pâge est a un projèt qu’est pas hèbèrgiê ique. Grant-marci d’alar en $1 por trovar lo vouiqui.',
	'randombytest' => 'Pâge a l’hasârd per lo vouiqui d’èprôva',
	'randombytest-nopages' => 'Voutron vouiqui d’èprôva contint gins de pâge dens l’èspâço de noms : $1.',
	'wminc-viewuserlang' => 'Vêre la lengoua a l’usanciér et lo vouiqui d’èprôva',
	'wminc-viewuserlang-user' => 'Nom d’usanciér :',
	'wminc-viewuserlang-go' => 'Alar trovar',
	'wminc-userdoesnotexist' => 'L’usanciér « $1 » ègziste pas.',
	'wminc-ip' => '« $1 » est una adrèce IP.',
	'right-viewuserlang' => 'Vêre la lengoua a l’usanciér et lo vouiqui d’èprôva',
	'group-test-sysop' => 'Administrators du vouiqui d’èprôva',
	'group-test-sysop-member' => 'administrat{{GENDER:$1|or|rice}} du vouiqui d’èprôva',
	'grouppage-test-sysop' => '{{ns:project}}:Administrators du vouiqui d’èprôva',
	'wminc-code-macrolanguage' => 'La [[wikipedia:$2 language|lengoua « $3 »]] est una [[wikipedia:fr:macro-langue|macro-lengoua]], composâ de cetes lengoues :',
	'wminc-code-collective' => 'Lo code « $1 » regârde pas una lengoua spècefica, mas una colèccion de lengoues, en particuliér les [[wikipedia:$2 language|lengoues « $3 »]].',
	'wminc-code-retired' => 'Ceti code lengoua at étâ changiê et fât pas més refèrence a la lengoua d’origina.',
	'wminc-listusers-testwiki' => 'Vos éte aprés vêre los usanciérs qu’ont betâs lor prèference de vouiqui d’èprôva a $1.',
	'wminc-searchwiki' => 'Rechèrche d’un vouiqui',
	'wminc-searchwiki-inputlanguage' => 'En lengoua :',
	'wminc-searchwiki-go' => 'Alar trovar',
	'wminc-searchwiki-match-langcode' => '« $1 » est un code lengoua ISO 639 por $2.',
	'wminc-searchwiki-match-userlangname' => '$1 est lo nom d’una lengoua.',
	'wminc-searchwiki-match-englishname' => '« $1 » est lo nom de $2 en anglès.',
	'wminc-searchwiki-match-nativename' => '« $1 » est lo nom de $2 dens cela lengoua.',
	'wminc-searchwiki-gotoinfopage' => 'pâge d’enformacion',
	'wminc-fs-pagetitle' => 'Guido d’emmodâ - $1',
	'wminc-fs-langselect-title' => 'Chouèsir la lengoua',
	'wminc-fs-signup-title' => 'Enscrîde-vos',
	'wminc-fs-settings-title' => 'Dèfenir voutres prèferences du vouiqui',
	'wminc-fs-userpage-title' => 'Fâre voutra pâge utilisator',
	'wminc-fs-startwiki-title' => 'Emmodar voutron vouiqui',
	'wminc-fs-pagetitle-done' => ' - fêt !',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'wminc-viewuserlang-user' => 'Ainm úsáideora:',
	'wminc-viewuserlang-go' => 'Gabh',
	'wminc-searchwiki-go' => 'Gabh',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'wminc-desc' => 'Sistema wiki de probas para a Incubadora da Wikimedia',
	'wminc-manual' => 'Manual',
	'wminc-listwikis' => 'Lista dos wikis',
	'wminc-testwiki' => 'Wiki de probas:',
	'wminc-testwiki-code' => 'Lingua do wiki de probas:',
	'wminc-testwiki-none' => 'Ningún/Todos',
	'wminc-testwiki-site' => '(Mantemento)',
	'wminc-recentchanges-all' => 'Todos os cambios recentes',
	'wminc-prefinfo-language' => 'A súa lingua da interface (independente do seu wiki de probas)',
	'wminc-prefinfo-code' => 'O código ISO 639 da lingua na que está traballando aquí',
	'wminc-prefinfo-project' => 'Seleccione o proxecto da Wikimedia no que está traballando aquí',
	'wminc-prefinfo-error' => 'Escolleu un proxecto que precisa dun código de lingua.',
	'wminc-error-move-unprefixed' => 'Erro: A páxina de destino [[{{MediaWiki:Wminc-error-help}}|non ten prefixo ou este é incorrecto]]!',
	'wminc-error-wronglangcode' => "'''Erro:''' Esta páxina contén un [[{{MediaWiki:Wminc-error-help}}|código de lingua incorrecto]] (\"\$1\")!",
	'wminc-error-unprefixed' => "'''Erro:''' Esta páxina [[{{MediaWiki:Wminc-error-help}}|non ten prefixo]]!",
	'wminc-error-unprefixed-suggest' => "'''Erro:''' Esta páxina [[{{MediaWiki:Wminc-error-help}}|non ten prefixo]]! Pode crear unha páxina en \"[[:\$1]]\".",
	'wminc-error-wiki-exists' => 'Este wiki xa existe. Pode atopar esta páxina en $1. Se o wiki é de recente creación, agarde unhas poucas horas ou días ata que remate a importación de todos os contidos.',
	'wminc-error-wiki-sister' => 'Esta páxina pertence a un proxecto que non está aloxado aquí. Vaia a $1 para atopar o wiki.',
	'randombytest' => 'Páxina ao chou para o wiki de probas',
	'randombytest-nopages' => 'O seu wiki de probas aínda non ten páxinas no espazo de nomes: $1.',
	'wminc-viewuserlang' => 'Olle a lingua de usuario e o wiki de probas',
	'wminc-viewuserlang-user' => 'Nome de usuario:',
	'wminc-viewuserlang-go' => 'Ir',
	'wminc-userdoesnotexist' => 'O usuario "$1" non existe.',
	'wminc-ip' => '"$1" é un enderezo IP.',
	'right-viewuserlang' => 'Ver a lingua do usuario e o wiki de probas',
	'group-test-sysop' => 'Administradores do wiki de probas',
	'group-test-sysop-member' => '{{GENDER:$1|administrador|administradora}} do wiki de probas',
	'grouppage-test-sysop' => '{{ns:project}}:Administradores do wiki de probas',
	'group-test-sysop.css' => '/* O CSS que se coloque aquí afectará soamente aos administradores do wiki de probas */',
	'group-test-sysop.js' => '/* O JS que se coloque aquí afectará soamente aos administradores do wiki de probas */',
	'wminc-code-macrolanguage' => 'A [[wikipedia:$2 language|lingua "$3"]] é unha [[wikipedia:ISO 639 macrolanguage|macrolingua]], composta polas seguintes linguas:',
	'wminc-code-collective' => 'O código "$1" non se refire a unha lingua específica, senón a un conxunto de linguas, en particular, as [[wikipedia:$2 language|linguas "$3"]].',
	'wminc-code-retired' => 'Este código de lingua cambiou e xa non se refire á lingua orixinal.',
	'wminc-listusers-testwiki' => 'Está ollando os usuarios que estableceron as súas preferencias do wiki de probas en $1.',
	'wminc-search-nocreate-nopref' => 'Fixo unha procura de "$1". Defina as súas [[Special:Preferences|preferencias do wiki de probas]] de xeito que poidamos dicirlle a páxina que pode crear!',
	'wminc-search-nocreate-suggest' => 'Fixo unha procura de "$1". Pode crear unha páxina no wiki en "<strong>[[$2]]</strong>"!',
	'wminc-searchwiki' => 'Procurar un wiki',
	'wminc-searchwiki-noproject' => 'Non seleccionou proxecto ningún.',
	'wminc-searchwiki-noresults' => 'Non houbo resultados. Pode procurar segundo códigos de lingua, nomes nativos e nomes na lingua da interface ou en inglés.',
	'wminc-searchwiki-selectproject' => 'Buscar:',
	'wminc-searchwiki-inputlanguage' => 'En lingua:',
	'wminc-searchwiki-go' => 'Ir',
	'wminc-searchwiki-multiplematches' => 'A procura coincide coas seguintes linguas:',
	'wminc-searchwiki-match-langcode' => '"$1" é o código de lingua ISO 639 de $2.',
	'wminc-searchwiki-match-userlangname' => '"$1" é o nome dunha lingua.',
	'wminc-searchwiki-match-englishname' => '"$1" é o nome de "$2" en inglés.',
	'wminc-searchwiki-match-nativename' => '"$1" é o nome de "$2" nesa lingua.',
	'wminc-searchwiki-gotoinfopage' => 'páxina de información',
	'wminc-fs-pagetitle' => 'Asistente para dar os primeiros pasos: $1',
	'wminc-fs-langselect-title' => 'Seleccionar a lingua',
	'wminc-fs-signup-title' => 'Rexístrese',
	'wminc-fs-settings-title' => 'Defina as preferencias do seu wiki',
	'wminc-fs-userpage-title' => 'Cree a súa páxina de usuario',
	'wminc-fs-startwiki-title' => 'Comece o seu wiki',
	'wminc-fs-pagetitle-done' => '; feito!',
	'wminc-fs-intro' => 'Dámoslle a benvida ao asistente para dar os primeiros pasos de {{SITENAME}}. Esta guía será de axuda durante o proceso de creación dun novo wiki.',
	'wminc-fs-langselect' => 'Continuar en $1 ou $2',
	'wminc-fs-signup-text' => 'Se xa ten unha conta de usuario, [$1 acceda ao sistema]. Se aínda non a ten, [$2 cree unha nova conta].
Non é obrigatoria, pero recomendámoslle que a cree; facelo leva uns poucos segundos.',
	'wminc-fs-settings-text' => 'Agora vaia ás [[Special:Preferences|súas preferencias]] e cambie a configuración do seu wiki de probas.
Á dereita pode ollar as opcións relevantes que ten nesa páxina. A primeira é a lingua da interface, que elixiu no primeiro paso, pero aínda pode modificala.
A segunda é o proxecto no que quere contribuír e a terceira é o código de lignua do proxecto no que quere contribuír.
Se non sabe o código, consulte o noso [[{{MediaWiki:Wminc-manual-url}}|manual]] ou pida [[{{MediaWiki:Portal-url}}|axuda]].',
	'wminc-fs-userpage-text' => 'Agora cree a súa páxina de usuario $1 con algunha información básica sobre vostede. Tamén pode ollar unha ligazón ata ela na parte superior desta páxina.',
	'wminc-fs-globaluser-text' => 'A súa conta de usuario é local. Recoméndase facela global a través de $1 de xeito que poida utilizala en calquera wiki da Wikimedia.',
	'wminc-fs-startwiki-text' => 'O prefixo do seu wiki é <strong>$1</strong>. Pode comezar o seu wiki creando a páxina principal en <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'O prefixo do seu wiki é $1. A páxina principal está en $2. Agora pode colaborar con outros falantes desta lingua para construír unha comunidade!
Se quere crear unha páxina, escriba o nome na caixa de procuras superior e siga a ligazón que aparecerá.',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'wminc-manual' => 'χειροκίνητος',
	'wminc-testwiki' => 'Βίκι δοκιμή:',
	'wminc-testwiki-none' => 'Οὐδέν/Ἅπαντα',
	'wminc-prefinfo-code' => 'Ὁ κῶδιξ γλώσσης ISO 639',
	'wminc-viewuserlang-user' => 'Ὄνομα χρωμένου:',
	'wminc-viewuserlang-go' => 'Ἰέναι',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'wminc-desc' => 'Teschtwiki-Syschtem fir dr Wikimedia Incubator',
	'wminc-manual' => 'Handbuech',
	'wminc-listwikis' => 'Lischt vu dr Wiki',
	'wminc-testwiki' => 'Teschtwiki:',
	'wminc-testwiki-code' => 'Sprooch vum Teschtwiki:',
	'wminc-testwiki-none' => 'Keis/Alli',
	'wminc-recentchanges-all' => 'Alli letschti Änderige',
	'wminc-prefinfo-language' => 'Sproch vu Dyyre Benutzeroberflächi - nit abhängig vum Teschtwiki',
	'wminc-prefinfo-code' => 'Dr ISO-639-Sprochcode',
	'wminc-prefinfo-project' => 'S Wikimedia-Projäkt, wu du dra schaffsch („Incubator“ fir Benutzer, wu allgmeini Ufgabe ibernämme)',
	'wminc-prefinfo-error' => 'Du hesch e Projäkt uusgwehlt, wu s e Sprochcode derfir brucht.',
	'wminc-error-move-unprefixed' => 'Fääler: D Syte, wo du verschiebe wottsch, het [[{{MediaWiki:Wminc-error-help}}|ke oder e falschs Präfix]].',
	'wminc-error-wronglangcode' => "'''Fääler:''' Die Syte het en [[{{MediaWiki:Wminc-error-help}}|falsche Sproochcode]]: „$1“.",
	'wminc-error-unprefixed' => "'''Fääler:''' Die Syte het [[{{MediaWiki:Wminc-error-help}}|kei Präfix]].",
	'wminc-error-unprefixed-suggest' => "'''Fääler:''' Die Syte het [[{{MediaWiki:Wminc-error-help}}|kei Präfix]]. Du chasch unter [[:$1]] e Syte aafange.",
	'wminc-error-wiki-exists' => "Des Wiki git's scho. Die Syte befindet sich uff $1. Wänn s Wiki nit vor churzem erstellt worde isch, no wart bitte e paar Stund oder Dääg, bis alli Inhalt importiert worde isch.",
	'wminc-error-wiki-sister' => 'Die Syte ghört zumene Projäkt, wo doo nit ghoschtet isch. Gang bitte uff $1, zume s Wiki z finde.',
	'randombytest' => 'Zuefallssyte no Teschtwiki',
	'randombytest-nopages' => 'S git kei Syte im Namensruum $1 in Dyym Teschtwiki.',
	'wminc-viewuserlang' => 'Benutzersproch un Teschtwiki aaluege',
	'wminc-viewuserlang-user' => 'Benutzername:',
	'wminc-viewuserlang-go' => 'Gang ane',
	'wminc-userdoesnotexist' => 'Dr Benutzer „$1“ git s nit.',
	'wminc-ip' => '„$1“ isch e IP-Adräss.',
	'right-viewuserlang' => 'D Benutzersproch und s Teschtwiki aaluege',
	'group-test-sysop' => 'Test-Wiki-Ammanne',
	'group-test-sysop-member' => '{{GENDER:$1|Testwikiammann|Testwikiamtsfrou}}',
	'grouppage-test-sysop' => '{{ns:project}}: Test-Wiki-Ammanne',
	'wminc-code-macrolanguage' => 'D [[wikipedia:$2 language|Sprooch „$3“]] isch e [[wikipedia:als:Makrosprache_(ISO_639)|Makrosprooch]], wo die Einzelsprooche dezueghöre:',
	'wminc-code-collective' => 'S Chürzel „$1“ beziegt sich nit uff ei bstimmti Sprooch, sundern uff e Grupp vo Sprooche, un zwar d [[wikipedia:$2 language|Sprooche „$3“]].',
	'wminc-code-retired' => 'Des Sproochchürzel isch gänderet un beziegt sich nümme uff di ursprünglichi Sprooch.',
	'wminc-listusers-testwiki' => 'Du gseesch Benutzer, wo ihri Teschtwiki-Yystellige uff $1 yygstellt hen.',
	'wminc-search-nocreate-nopref' => 'Du hesch nooch „$1“ gsuecht. Bitte due d [[Special:Preferences|Yystellige für dyn Teschtwiki]] festlege, demit mer dir chönne mitteile, welli Syte du chasch erstelle.',
	'wminc-search-nocreate-suggest' => 'Du hesch nooch „$1“ gsuecht. Du chasch in dym Teschtwiki e Syte unter <strong>[[$2]]</strong> erstelle.',
	'wminc-searchwiki-selectproject' => 'Sueche no:',
	'wminc-searchwiki-inputlanguage' => 'In de Sprooch:',
	'wminc-searchwiki-go' => 'Gang',
	'wminc-searchwiki-multiplematches' => 'Dyni Suechyygab het in dänne Sprooche en Dräffer ergee:',
	'wminc-searchwiki-match-langcode' => '„$1“ isch e ISO-639-Sproochchürzel für $2.',
	'wminc-searchwiki-match-userlangname' => '$1 isch d Bezeichnig vunere Sprooch.',
	'wminc-searchwiki-match-englishname' => '„$1“ isch d Bezeichnig für $2 uff Änglisch.',
	'wminc-searchwiki-match-nativename' => '„$1“ isch d Bezeichnig für $2 in dere Sprooch.',
	'wminc-searchwiki-gotoinfopage' => 'Infosyte',
);

/** Gujarati (ગુજરાતી)
 * @author Ashok modhvadia
 */
$messages['gu'] = array(
	'wminc-desc' => 'વિકિમીડિયા ઇનક્યુબેટર માટે પરિક્ષણ વિકિ પ્રણાલી',
	'wminc-testwiki' => 'પરિક્ષણ વિકિ:',
	'wminc-testwiki-none' => 'કોઇ પણ નહીં/તમામ',
	'wminc-prefinfo-language' => 'તમારી ઇન્ટરફેસ ભાષા - તમારા પરિક્ષણ વિકિથી સ્વતંત્ર',
	'wminc-prefinfo-code' => 'ISO ૬૩૯ ભાષા સંજ્ઞા',
	'wminc-prefinfo-project' => 'વિકિમીડિયા યોજના પસંદ કરો (સામાન્ય કાર્ય કરતા સભ્ય માટે ઇનક્યુબેટર વિકલ્પ)',
	'wminc-prefinfo-error' => 'તમે પસંદ કરેલ યોજના માટે ભાષા સંજ્ઞા જરૂરી છે.',
	'wminc-viewuserlang' => 'સભ્ય ભાષા અને પરિક્ષણ વિકિ જુઓ',
	'wminc-viewuserlang-user' => 'સભ્યનામ:',
	'wminc-viewuserlang-go' => 'જાઓ',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'wminc-desc' => 'מערכת אתרי ויקי ניסיוניים עבור האינקובטור של ויקימדיה',
	'wminc-manual' => 'ספר הוראות',
	'wminc-listwikis' => 'רשימת אתרי ויקי',
	'wminc-testwiki' => 'אתר ויקי ניסיוני:',
	'wminc-testwiki-code' => 'שפת ויקי הבדיקה:',
	'wminc-testwiki-none' => 'הכול/לא כלום',
	'wminc-testwiki-site' => '(תחזוקה)',
	'wminc-recentchanges-all' => 'כל השינויים האחרונים',
	'wminc-prefinfo-language' => 'שפת הממשק שלכם – בלתי תלויה באתר הוויקי הניסיוני שלכם',
	'wminc-prefinfo-code' => 'קוד ISO 639 של השפה שאתם עובדים עליה כאן',
	'wminc-prefinfo-project' => 'בחרו אחד ממיזמי ויקימדיה (האפשרות "אינקובטור" מיועדת למשתמשים המבצעים עבודה כללית)',
	'wminc-prefinfo-error' => 'בחרתם במיזם הדורש קוד שפה.',
	'wminc-error-move-unprefixed' => 'שגיאה: הדף שאתם מנסים להעביר אליו [[{{MediaWiki:Wminc-error-help}}|אינו בעל תחילית או שהוא בעלת תחילית שאינה נכונה]]!',
	'wminc-error-wronglangcode' => "'''שגיאה:''' הדף הזה מכיל את [[{{MediaWiki:Wminc-error-help}}|קוד השפה השגוי]] \"\$1\"!",
	'wminc-error-unprefixed' => 'שגיאה: לדף הזה [[{{MediaWiki:Wminc-error-help}}|אין תחילית]]!',
	'wminc-error-unprefixed-suggest' => 'שגיאה: לדף הזה [[{{MediaWiki:Wminc-error-help}}|אין תחילית]]! אפשר ליצור דף בשם [[:$1]].',
	'wminc-error-wiki-exists' => 'הוויקי הזה כבר קיים. אפשר למצוא את הדף הזה בשם $1. אם הוויקי נוצר לאחרונה, נא לחכות מספר שעות או ימים עד שכל התוכן ייובא.',
	'wminc-error-wiki-sister' => 'הדף הזה שייך למיזם שלא מתארח כאן. הוויקי הזה נמצא באתר $1.',
	'randombytest' => 'דף אקראי באתר ויקי ניסיוני',
	'randombytest-nopages' => 'אין דפים באתר הוויקי הניסיוני שלכם, במרחב השם: $1.',
	'wminc-viewuserlang' => 'חיפוש שפת משתמש ואתר ויקי ניסיוני',
	'wminc-viewuserlang-user' => 'שם המשתמש:',
	'wminc-viewuserlang-go' => 'הצגה',
	'wminc-userdoesnotexist' => 'המשתמש "$1" אינו קיים.',
	'wminc-ip' => '„$1” היא כתובת IP.',
	'right-viewuserlang' => 'צפייה ב[[Special:ViewUserLang|שפת המשתמש ואתר הוויקי הניסיוני]]',
	'group-test-sysop' => 'מפעילי ויקי לבדיקה',
	'group-test-sysop-member' => '{{GENDER:$1|מפעיל|מפעילת}} ויקי לבדיקה',
	'grouppage-test-sysop' => '{{ns:project}}:מפעילי ויקי לבדיקה',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|השפה "$3"]] היא [[wikipedia:ISO 639 macrolanguage|מקרו־שפה]], שמורכבת מהשפות הבאות:',
	'wminc-code-collective' => 'הקוד "$1" לא מתייחס לשפה מסוימת, אלא לאוסף שפות, [[wikipedia:$2 language|"$3"]].',
	'wminc-code-retired' => 'קוד השפה הזה השתנה וכבר אינו מתייחס לשפה המקורית.',
	'wminc-listusers-testwiki' => 'זוהי רשימת משתמשים שבחרו ב־$1 בתור ויקי הבדיקה שלהם.',
	'wminc-search-nocreate-nopref' => 'חיפשתם "$1". אנא הגדירו את [[Special:Preferences|העדפות ויקי הבדיקות שלכם]] כדי שנוכל לומר לכם איזה דף אתם יכולים ליצור!',
	'wminc-search-nocreate-suggest' => 'חיפשתם "$1". אפשר ליצור דף בוויקי שלכם ב־<strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'חיפוש ויקי',
	'wminc-searchwiki-noproject' => 'לא בחרת מיזם.',
	'wminc-searchwiki-noresults' => 'אין תוצאות. אפשר לחפש לפי קודי שפה, שמות ילידיים ושמות בשפת הממשק שלך או באנגלית.',
	'wminc-searchwiki-selectproject' => 'לחפש:',
	'wminc-searchwiki-inputlanguage' => 'בשפה:',
	'wminc-searchwiki-go' => 'קדימה',
	'wminc-searchwiki-multiplematches' => 'החיפוש שלך תואם לשפות הבאות:',
	'wminc-searchwiki-match-langcode' => '"$1" זה קוד שפה לפי ISO 639 עבור $2.',
	'wminc-searchwiki-match-userlangname' => '$1 זה שם של שפה.',
	'wminc-searchwiki-match-englishname' => '"$1" זה השם של $2 באנגלית.',
	'wminc-searchwiki-match-nativename' => '"$1" זה השם של $2 באותה השפה.',
	'wminc-searchwiki-gotoinfopage' => 'דף מידע',
	'wminc-fs-pagetitle' => 'אשף תחילת העבודה - $1',
	'wminc-fs-langselect-title' => 'נא לבחור בשפה',
	'wminc-fs-signup-title' => 'הרשמה',
	'wminc-fs-settings-title' => 'הגדרת העדפות הוויקי שלך',
	'wminc-fs-userpage-title' => 'יצירת עמוד המשתמש שלך',
	'wminc-fs-startwiki-title' => 'הפעלת ויקי משלך',
	'wminc-fs-pagetitle-done' => ' - בוצע!',
	'wminc-fs-intro' => 'ברוך בואך לאשף השלבים הראשונים בוויקי {{SITENAME}}. האשף ידריך אותך במהלך פתיחת ויקי חדש.',
	'wminc-fs-langselect' => 'להמשיך ב$1 או ב$2',
	'wminc-fs-signup-text' => 'אם כבר יש לכם חשבון משתמש, נא [$1 להיכנס]. אם עוד אין לכם, נא [$2 ליצור חשבון משתמש]. זה לא נחוץ, אבל זה מומלץ מאוד וזה לוקח רק כמה שניות.',
	'wminc-fs-settings-text' => 'עכשיו נא להיכנס לדף [[Special:Preferences|ההעדפות שלכם]] ולשנות את הגדרות הוויקי שלכם.
מצד שמאל אפשר לראות את האפשרויות הרלוונטיות באותו הדף. הראשונה היא שפת הממשק שבחרתם בצעד הראשון, אבל אפשר לשנות אותה שוב.
השנייה היא המיזם שברצונכם לתרום לו והשלישית היא קוד השפה של המיזם שאתם רוצים לתרום לו.
אם אינכם יודעים את הקוד, נא לבדוק ב[[{{MediaWiki:Wminc-manual-url}}|ספר ההוראות]] או לבקש [[{{MediaWiki:Portal-url}}|עזרה]].',
	'wminc-fs-userpage-text' => 'נא ליצור דףך משתמש $1 עם מידע בסיס על עצמכם. אפשר גם לראות קישור אליו בראש הדף הזה.',
	'wminc-fs-globaluser-text' => 'החשבון שלכם מקומי. מומלץ להפוך אותו לגלובלי דרך הדף $1 כדי שאפשר יהיה להשתמש בו בכל ויקי של ויקימדיה.',
	'wminc-fs-startwiki-text' => 'התחילית של הוויקי הזה היא <strong>$1</strong>. אפשר להתחיל ביצירת הדף הראשי של הוויקי בדף <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'התחילית של הוויקי הזה היא $1. הדך הראשי הוא $2. עכשיו אפשר לעבוד יחד עם דוברים אחרים של השפה הזאת כדי לבנות קהילה!
אם אתם רוצים ליצור דף, פשוט כתבו את שמו בתיבת החיפוש למעלה ולחצו על הקישור שתראו.',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Vibhijain
 * @author रोहित रावत
 */
$messages['hi'] = array(
	'wminc-desc' => 'विकीमीडिया ऊष्मानियंत्रक के लिए विकि प्रणाली का परीक्षण',
	'wminc-manual' => 'मदद',
	'wminc-listwikis' => 'विकियोंकी सूची',
	'wminc-testwiki' => 'परीक्षण विकी',
	'wminc-testwiki-code' => 'परीक्षण विकी भाषा',
	'wminc-testwiki-none' => 'कोई नहीं/सब',
	'wminc-recentchanges-all' => 'हाल के हुए सब परिवर्तन',
	'wminc-prefinfo-language' => 'आपकी इंटरफ़ेस भाषा - आपकी परीक्षण विकी से स्वतंत्र',
	'wminc-prefinfo-code' => 'ISO 639 भाषा कोड',
	'wminc-prefinfo-project' => 'विकिमीडिया परियोजना का चयन करें (विकिमीडिया ऊष्मानियंत्रक विकल्प सामान्य कार्य कर रहे उपयोगकर्ताओं के लिए है)',
	'wminc-prefinfo-error' => 'आपके द्वारा चयनित परियोजना को भाषा कोड की जरूरत है।',
	'wminc-error-move-unprefixed' => 'त्रुटि: को पृष्ठ का आप स्थान - परिवर्तन करने की कोशिश कर रहे है, वह [[{{MediaWiki:Wminc-error-help}}|अउपसर्गित है या एक गलत उपसर्ग है]]!',
	'wminc-error-wronglangcode' => "''' त्रुटि: ''' इस पृष्ठ में एक [[{{MediaWiki:Wminc-error-help}}|गलत भाषा कोड]] शामिल हैं \"\$1\"!",
	'wminc-error-unprefixed' => "''' त्रुटि: ''' यह पृष्ठ [[{{MediaWiki:Wminc-error-help}}|अउपसर्गित]] है!",
	'wminc-error-unprefixed-suggest' => "' ' त्रुटि: ' ' यह पृष्ठ [[{{MediaWiki:Wminc-error-help}} |अनउपसर्गित]] है! आप [[: $1 ]] पर एक पृष्ठ बना सकते हैं।",
	'wminc-error-wiki-exists' => 'यह विकि पहले से मौजूद है। आप $1 पर इस पृष्ठ को पा सकते हैं। यदि विकी हाल ही में बनाई गई है, कृपया सभी सामग्री आयात किए जाने तक कुछ घंटे या दिन प्रतीक्षा करें।',
	'wminc-error-wiki-sister' => 'यह पृष्ठ एक परियोजना को संबंध रखता है जो कि यहाँ होस्ट नहीं होती। कृपया विकि जाने के लिए $1  पर जाए।',
	'randombytest' => 'परीक्षण विकि द्वारा यादृच्छिक पृष्ठ',
	'randombytest-nopages' => 'आपकी परीक्षण विकी में, नामस्थान: $1, पर कोई पृष्ठ नहीं हैं।',
	'wminc-viewuserlang' => 'उपयोगकर्ता भाषा और परीक्षण विकि देखे',
	'wminc-viewuserlang-user' => 'सदस्यनाम:',
	'wminc-viewuserlang-go' => 'जाइए',
	'wminc-userdoesnotexist' => 'उपयोगकर्ता " $1 " मौजूद नहीं है।',
	'wminc-ip' => '" $1 " एक आईपी पता है।',
	'right-viewuserlang' => 'उपयोगकर्ता भाषा और परीक्षण विकि देखे',
	'group-test-sysop' => 'परीक्षण विकी प्रबंधक',
	'group-test-sysop-member' => '{{GENDER:$1|परीक्षण विकि प्रबंधक}}',
	'grouppage-test-sysop' => '{{ns:project}}:परीक्षण विकी प्रबंधक',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|"$3" भाषा]] एक [[wikipedia:ISO 639 macrolanguage|वृहत्भाषा]] है, जो निम्नलिखित भाषाओं से युक्त है:',
	'wminc-code-retired' => 'यह भाषा कोड बदल दिया गया है और अब मूल भाषा को संदर्भित नहीं करता है।',
	'wminc-listusers-testwiki' => 'आप उन प्रयोक्ताओं को देख रहे हैं जिन्होंने अपनी परिक्षण विकी वरीयता $1 निर्धारित की है।',
);

/** Hiligaynon (Ilonggo)
 * @author Tagimata
 */
$messages['hil'] = array(
	'wminc-desc' => 'Testing nga sistema wiki para sa Wikimedia Inkyubeytor',
	'wminc-testwiki' => 'Pagtilaw wiki:',
	'wminc-testwiki-none' => 'Wala/Tanan',
	'wminc-prefinfo-language' => 'Ang imo hambalanon nga interface - kahilwayan halin sa imo pagtilaw wiki',
	'wminc-prefinfo-code' => 'Ang ISO 639 lengwahe koda',
	'wminc-prefinfo-project' => 'Pilion ang Wikimedia proyekto (Inkyubeytor pilili-an ar para sa mga user nga nagahimo sang kabilugan nga obra)',
	'wminc-prefinfo-error' => 'Ginpili mo nga proyekto nga naga kilanlan sang lengwahe koda.',
	'randombytest' => 'Ginpalagpat-pagpili nga pahina sang test wiki',
	'randombytest-nopages' => 'Wala sang mga pahina sa imo nga test wiki, sa may ngalanespasyo: $1.',
	'wminc-viewuserlang' => 'Tan-awon ang user halamabalanon kag pagtilaw wiki',
	'wminc-viewuserlang-user' => 'Usarngalan:',
	'wminc-viewuserlang-go' => 'Lakat',
	'right-viewuserlang' => 'Tan-awon user lengwahe kag pagtilaw wiki',
);

/** Croatian (hrvatski)
 * @author Bugoslav
 * @author Ex13
 * @author Tivek
 */
$messages['hr'] = array(
	'wminc-desc' => 'Testni wiki sustav za Wikimedia Incubator',
	'wminc-testwiki' => 'Testni wiki:',
	'wminc-testwiki-none' => 'Nijedno/Sve',
	'wminc-recentchanges-all' => 'Sve nedavne promjene',
	'wminc-prefinfo-language' => 'Vaš jezik sučelja - neovisno o Vašem testnom wikiju',
	'wminc-prefinfo-code' => 'ISO 639 kôd jezika',
	'wminc-prefinfo-project' => 'Odaberi Wikimedia projekt (opcija Inkubator je za suradnike koji rade opće poslove)',
	'wminc-prefinfo-error' => 'Odabrali ste projekt koji zahtijeva kôd jezika.',
	'randombytest' => 'Slučajna stranica prema testnom wikiju',
	'randombytest-nopages' => 'Nema stranica u Vašem testnom wikiju, u imenskom prostoru: $1.',
	'wminc-viewuserlang' => 'Potraži jezik i testni wiki suradnika',
	'wminc-viewuserlang-user' => 'Suradničko ime:',
	'wminc-viewuserlang-go' => 'Idi',
	'wminc-userdoesnotexist' => 'Suradnik "$1" ne postoji.',
	'right-viewuserlang' => 'Pogledaj suradnikov jezik i testni wiki',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'wminc-desc' => 'Testowy wikijowy system za Wikimedia Incubator',
	'wminc-manual' => 'Nawod',
	'wminc-listwikis' => 'Lisćina wikijow',
	'wminc-testwiki' => 'Testowy wiki:',
	'wminc-testwiki-code' => 'Rěč testoweho wikija',
	'wminc-testwiki-none' => 'Žadyn/Wšě',
	'wminc-testwiki-site' => '(Wothladowanje)',
	'wminc-recentchanges-all' => 'Wšě nowe změny',
	'wminc-prefinfo-language' => 'Rěč twojeho wužiwarskeho powjercha - wot twojeho testoweho wikija njewotwisna',
	'wminc-prefinfo-code' => 'Rěčny kod ISO 639 rěče, z kotrejž tu dźěłaš',
	'wminc-prefinfo-project' => 'Wubjer Wikimedijowy projekt, na kotrymž tu dźěłaš',
	'wminc-prefinfo-error' => 'Sy projekt wubrał, kotryž sej rěčny kod wužaduje.',
	'wminc-error-move-unprefixed' => 'Zmylk: Strona, kotruž pospytuješ přesunyć, [[{{MediaWiki:Wminc-error-help}}|nima prefiks abo ma wopačny prefiks]]!',
	'wminc-error-wronglangcode' => "'''Zmylk:''' Tuta strona wobsahuje [[{{MediaWiki:Wminc-error-help}}|wopačny rěčny kod]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Zmylk:''' Tuta strona [[{{MediaWiki:Wminc-error-help}}|nima prefiks]]!",
	'wminc-error-unprefixed-suggest' => "'''Zmylk:''' Tuta strona [[{{MediaWiki:Wminc-error-help}}|nima prefiks]]! Móžeš stronu z titulom [[:$1]] wutworić.",
	'wminc-error-wiki-exists' => 'Tutón wiki hižo eksistuje. Móžeš tutu stronu na $1 namakać. Jeli wiki je so njedawno wutworił, prošu čakaj něšto hodźin abo dnjow, doniž wobsah njeje importowany.',
	'wminc-error-wiki-sister' => 'Tuta strona słuša k projektej, kotryž njeje tu hostowany. Prošu dźi k $1, zo by tón wiki namakał.',
	'randombytest' => 'Připadna strona po testowym wikiju',
	'randombytest-nopages' => 'W twojim testowym wikiju w mjenowym rumje $1 strony njejsu.',
	'wminc-viewuserlang' => 'Wužiwarsku rěč a testowy wiki sej wobhladać',
	'wminc-viewuserlang-user' => 'Wužiwarske mjeno:',
	'wminc-viewuserlang-go' => 'Pokazać',
	'wminc-userdoesnotexist' => 'Wužiwar "$1" njeeksistuje.',
	'wminc-ip' => '"$1" je IP-adresa.',
	'right-viewuserlang' => 'Wužiwarsku rěč a testowy wiki sej wobhladać',
	'group-test-sysop' => 'Administratorojo testoweho wikija',
	'group-test-sysop-member' => '{{GENDER:$1|administrator|administratorka}} testoweho wikija',
	'grouppage-test-sysop' => '{{ns:project}}:Administratorojo testoweho wikija',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Rěč "$3"]] je [[wikipedia:ISO 639 macrolanguage|makrorěč]], kotraž so ze slědowacych jednotliwych rěčow zestaja:',
	'wminc-code-collective' => 'Kod "$1" njepoćahuje so na wěstu rěč, ale na skupinu rěčow, ale na [[wikipedia:$2 language|rěče "$3"]].',
	'wminc-code-retired' => 'Tutón rěčny kod je so změnił a hižo njepoćahuje na prěnjotnu rěč.',
	'wminc-listusers-testwiki' => 'Widźiš wužiwarjow, kotřiž su swoje nastajenje testoweho wikija na $1 nastajili.',
	'wminc-search-nocreate-nopref' => 'Sy za "$1" pytał. Prošu staj swoje [[Special:Preferences|nastajenje testoweho wikija]], zo bychmy ći zdźělili, kotru stronu móžeš wutworić!',
	'wminc-search-nocreate-suggest' => 'Sy za "$1" pytał. Móžeš stronu w swojim wikiju pod <strong>[[$2]]</strong> wutworić!',
	'wminc-searchwiki' => 'Za wikijom pytać',
	'wminc-searchwiki-noproject' => 'Njejsy projekt wubrał.',
	'wminc-searchwiki-noresults' => 'Žane wuslědki. Móžeš po rěčnych kodach, maćernorěčnych mjenach a mjenach w rěči swojeho wužiwarskeho powjercha abo w jendźelšćinje pytać.',
	'wminc-searchwiki-selectproject' => 'Pytać za:',
	'wminc-searchwiki-inputlanguage' => 'W rěči:',
	'wminc-searchwiki-go' => 'Pytać',
	'wminc-searchwiki-multiplematches' => 'Wuslědki pytanja wotpowěduja slědowacym rěčam:',
	'wminc-searchwiki-match-langcode' => '"$1" je rěčny kod ISO 639 za $2.',
	'wminc-searchwiki-match-userlangname' => '$1 je mjeno rěče.',
	'wminc-searchwiki-match-englishname' => '"$1" je mjeno za $2 jendźelsce.',
	'wminc-searchwiki-match-nativename' => '"$1" je mjeno za $2 w tej rěči.',
	'wminc-searchwiki-gotoinfopage' => 'Infostrona',
	'wminc-fs-pagetitle' => 'Startowy asistent - $1',
	'wminc-fs-langselect-title' => 'Rěč wubrać',
	'wminc-fs-signup-title' => 'Registrować',
	'wminc-fs-settings-title' => 'Wikinastajenja postajić',
	'wminc-fs-userpage-title' => 'Wužiwarsku stronu wutworić',
	'wminc-fs-startwiki-title' => 'Wiki startować',
	'wminc-fs-pagetitle-done' => ' - sčinjene!',
	'wminc-fs-intro' => 'Witaj k startowemu asistentej {{GRAMMAR:genitiw|{{SITENAME}}}}. Budźe će přez proces startowanja noweho wikija wjesć.',
	'wminc-fs-langselect' => 'W $1 abo $2 dale činić',
	'wminc-fs-signup-text' => 'Jeli maš hižo wužiwarske konto, prošu [$1 přizjew so]. Jeli hišće nimaš žane konto, prošu [$2 załož wužiwarske konto].
Wono trěbne njeje, ale doporuča so naležnje a traje jenož por sekundow, zo by jo załožiło.',
	'wminc-fs-settings-text' => 'Prošu dźi nětko k [[Special:Preferences|swojim nastajenjam]] a změń nastajenje swojeho testoweho wikija.
Naprawo widźiš relewantne opcije, kotrež maš na tej stronje. Prěnja je twoja rěč za wužiwarski powjerch, kotruž sy w prěnim kroku wubrał, ale móžeš ju hišće změnić.
Druha je projekt, ke kotremuž chceš přinošować, a třeća je rěčny kod projekta, ke kotremuž chceš přinošować.
Jeli kod njewěš, skonsultuj našu [[{{MediaWiki:Wminc-manual-url}}|přiručku]] abo poproš wo [[{{MediaWiki:Portal-url}}|pomoc]].',
	'wminc-fs-userpage-text' => 'Prošu wutwor wužiwarsku stronu $1 z něšto informacijemi wo sebi. Móžeš tež wotkaz k njej horjeka na stronje widźeć.',
	'wminc-fs-globaluser-text' => 'Twoje wužiwarske konto je lokalne. Poruča so jo přez $1 globalne činić, zo by móhł jo na kóždym wikiju Wikimedije wužiwać.',
	'wminc-fs-startwiki-text' => '<strong>$1</strong> je prefiks twojeho wikija. Móžeš wiki startować, wutworjejo hłownu stronu wikija na <strong>$2</string>.',
	'wminc-fs-startwiki-exists-text' => 'Prefiks twojeho wikija je $1. Hłowna strona je na $2. Móžeš nětko z druhimi rěčnikami tuteje rěče hromadźe dźěłać, zo by zhromadźenstwo tworił!
Jeli chceš stronu wutworić, zapisaj jenož mjeno horjeka do pytanskeho pola a slěduj wotkazej, kotryž budźeš widźeć.',
);

/** Hungarian (magyar)
 * @author Bdamokos
 * @author Dj
 * @author Glanthor Reviol
 * @author Xbspiro
 */
$messages['hu'] = array(
	'wminc-desc' => 'Tesztwiki rendszer a Wikimédia Inkubátorhoz',
	'wminc-manual' => 'Kézikönyv',
	'wminc-listwikis' => 'Projektjeink listája',
	'wminc-testwiki' => 'Tesztwiki:',
	'wminc-testwiki-code' => 'Tesztwiki nyelv:',
	'wminc-testwiki-none' => 'Egyik sem/Mind',
	'wminc-recentchanges-all' => 'Minden friss változtatás',
	'wminc-prefinfo-language' => 'A felhasználói felületed nyelve – független a teszt wikidtől',
	'wminc-prefinfo-code' => 'Az ISO 639 szerinti nyelvkód. A fenti beállítás kiegészítése: a kettő együtt határozza meg, hogy melyik lesz az elsődleges tesztprojekted.',
	'wminc-prefinfo-project' => 'Melyik tesztprojektben dolgozol elsődlegesen? Ennek kezdőlapja és friss változtatásainak listája az oldalmenüben külön is elérhető lesz.',
	'wminc-prefinfo-error' => 'Olyan projektet választottál, amihez szükség van nyelvkódra.',
	'wminc-error-move-unprefixed' => 'Hiba: A mozgatni próbált oldal [[{{MediaWiki:Wminc-error-help}}|nincs prefixelve, vagy rossz a prefix]].',
	'wminc-error-wronglangcode' => "'''Hiba:''' Ez a lap [[{{MediaWiki:Wminc-error-help}}|rossz nyelvi kódot tartalmaz]]: \"\$1\".",
	'randombytest' => 'Véletlen lap a tesztwikiből',
	'randombytest-nopages' => 'Nincsenek lapok a tesztwikid $1 névterében.',
	'wminc-viewuserlang' => 'Felhasználó nyelvének és a tesztwikinek a felkeresése',
	'wminc-viewuserlang-user' => 'Felhasználói név:',
	'wminc-viewuserlang-go' => 'Menj',
	'wminc-userdoesnotexist' => 'Nem létezik „$1” nevű szerkesztő.',
	'wminc-ip' => '„$1” egy IP-cím.',
	'right-viewuserlang' => 'felhasználó nyelv és tesztwiki megjelenítése',
	'group-test-sysop' => 'Tesztwiki adminisztrátorok',
	'group-test-sysop-member' => '{{GENDER:$1|tesztwiki adminisztrátor}}',
	'grouppage-test-sysop' => '{{ns:project}}:Tesztwiki adminisztrátorok',
	'wminc-search-nocreate-suggest' => 'Erre kerestél rá: „$1”. Létrehozhatsz egy lapot a wikidben itt: <strong>[[$2]]</strong>.',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'wminc-desc' => 'Systema pro wikis de test in Wikimedia Incubator',
	'wminc-manual' => 'Manual',
	'wminc-listwikis' => 'Lista de wikis',
	'wminc-testwiki' => 'Wiki de test:',
	'wminc-testwiki-code' => 'Lingua del wiki de test:',
	'wminc-testwiki-none' => 'Nulle/Totes',
	'wminc-testwiki-site' => '(Mantenentia)',
	'wminc-recentchanges-all' => 'Tote le modificationes recente',
	'wminc-prefinfo-language' => 'Le lingua de tu interfacie - independente de tu wiki de test',
	'wminc-prefinfo-code' => 'Le codice ISO 639 del lingua in le qual tu travalia hic',
	'wminc-prefinfo-project' => 'Selige le projecto Wikimedia in le qual tu travalia hic',
	'wminc-prefinfo-error' => 'Tu seligeva un projecto que require un codice de lingua.',
	'wminc-error-move-unprefixed' => 'Error: Le nove nomine de pagina [[{{MediaWiki:Wminc-error-help}}|non ha prefixo o ha un prefixo incorrecte]]!',
	'wminc-error-wronglangcode' => "'''Error:''' Iste pagina contine un [[{{MediaWiki:Wminc-error-help}}|codice de lingua incorrecte]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Error:''' Iste pagina [[{{MediaWiki:Wminc-error-help}}|non ha prefixo]]!",
	'wminc-error-unprefixed-suggest' => "'''Error:''' Iste pagina [[{{MediaWiki:Wminc-error-help}}|non ha prefixo]]! Tu pote crear un pagina con le nomine [[:$1]].",
	'wminc-error-wiki-exists' => 'Iste wiki jam existe. Tu pote trovar iste pagina a $1. Si le wiki esseva create recentemente, per favor attende alcun horas o dies usque tote le contento ha essite importate.',
	'wminc-error-wiki-sister' => 'Iste pagina pertine a un projecto que non es albergate hic. Per favor vade a $1 pro cercar le wiki.',
	'randombytest' => 'Pagina aleatori per le wiki de test',
	'randombytest-nopages' => 'Le wiki de test non ha paginas in le spatio de nomines: $1',
	'wminc-viewuserlang' => 'Vider le lingua de un usator e su wiki de test',
	'wminc-viewuserlang-user' => 'Nomine de usator:',
	'wminc-viewuserlang-go' => 'Va',
	'wminc-userdoesnotexist' => 'Le usator "$1" non existe.',
	'wminc-ip' => '"$1" es un adresse IP.',
	'right-viewuserlang' => 'Vider le lingua e wiki de test de usatores',
	'group-test-sysop' => 'Administratores del wiki de test',
	'group-test-sysop-member' => '{{GENDER:$1|administrator|administratrice}} del wiki de test',
	'grouppage-test-sysop' => '{{ns:project}}:Administratores del wiki de test',
	'wminc-code-macrolanguage' => 'Le [[wikipedia:$2 language|lingua "$3"]] es un [[wikipedia:ISO 639 macrolanguage|macrolingua]] que se compone del sequente linguas membros:',
	'wminc-code-collective' => 'Le codice "$1" non refere a un lingua specific, ma a un collection de linguas, a saper le [[wikipedia:$2 language|linguas "$3"]].',
	'wminc-code-retired' => 'Iste codice de lingua ha essite cambiate e non plus refere al lingua original.',
	'wminc-listusers-testwiki' => 'Tu vide le usatores que ha mittite lor preferentias de wiki de test a $1.',
	'wminc-search-nocreate-nopref' => 'Tu cercava "$1". Per favor specifica tu [[Special:Preferences|preferentias de wiki de test]] de sorta que nos pote dicer te le pagina que tu pote crear!',
	'wminc-search-nocreate-suggest' => 'Tu cercava "$1". Tu pote crear un pagina in tu wiki a <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Cercar un wiki',
	'wminc-searchwiki-noproject' => 'Tu non seligeva un projecto.',
	'wminc-searchwiki-noresults' => 'Nulle resultato. Es possibile cercar per codice de lingua, per nomine native, e per nomine in le tue lingua de interfacie o in anglese.',
	'wminc-searchwiki-selectproject' => 'Cercar:',
	'wminc-searchwiki-inputlanguage' => 'In lingua:',
	'wminc-searchwiki-go' => 'Va',
	'wminc-searchwiki-multiplematches' => 'Le recerca corresponde al sequente linguas:',
	'wminc-searchwiki-match-langcode' => '"$1" es un codice de lingua ISO 639 pro $2.',
	'wminc-searchwiki-match-userlangname' => '$1 es le nomine de un lingua.',
	'wminc-searchwiki-match-englishname' => '"$1" es le nomine de $2 in anglese.',
	'wminc-searchwiki-match-nativename' => '"$1" es le nomine de $2 in iste lingua.',
	'wminc-searchwiki-gotoinfopage' => 'information',
	'wminc-fs-pagetitle' => 'Assistente de initiation - $1',
	'wminc-fs-langselect-title' => 'Selige lingua',
	'wminc-fs-signup-title' => 'Crear conto',
	'wminc-fs-settings-title' => 'Fixar tu preferentia de wiki',
	'wminc-fs-userpage-title' => 'Crear tu pagina de usator',
	'wminc-fs-startwiki-title' => 'Comenciar tu wiki',
	'wminc-fs-pagetitle-done' => ' - finite!',
	'wminc-fs-intro' => 'Benvenite al assistente de prime passos de {{SITENAME}}. Illo te guidara per le processo de comenciar un nove wiki.',
	'wminc-fs-langselect' => 'Continuar in $1 o $2',
	'wminc-fs-signup-text' => 'Si tu jam possede un conto de usator, per favor [$1 aperi session]. Si tu non ancora ha un, per favor [$2 crea un conto].
Isto non es obligatori ma es multo recommendate, e le creation del conto prende solmente alcun pauc secundas.',
	'wminc-fs-settings-text' => 'Nunc, per favor vade al [[Special:Preferences|Preferentias]] pro fixar le configuration de tu wiki de test.
Al dextra tu vide le relevante optiones que tu ha in iste pagina. Le prime es tu lingua de interfacie, le qual tu seligeva in le prime passo, ma tu pote ancora cambiar lo.
Le secunde es le projecto al qual tu vole contribuer e le tertie es le codice del lingua del mesme projecto.
Si tu non cognosce le codice, per favor consulta nostre [[{{MediaWiki:Wminc-manual-url}}|manual]] o demanda [[{{MediaWiki:Portal-url}}|adjuta]].',
	'wminc-fs-userpage-text' => 'Ora crea tu pagina de usator $1 con alcun informationes de base sur te. Tu pote anque vider un ligamine a illo al initio de iste pagina.',
	'wminc-fs-globaluser-text' => 'Tu conto de usator es local. Es recommendate render lo global via $1 a fin que tu pote usar lo in omne wiki de Wikimedia.',
	'wminc-fs-startwiki-text' => 'Le prefixo de tu wiki es $1. Tu pote crear le pagina principal del wiki a $2.',
	'wminc-fs-startwiki-exists-text' => 'Le prefixo de tu wiki es $1. Le pagina principal es a $2. Ora tu pote collaborar con altere parlantes de iste lingua pro realisar un communitate!
Si tu vole crear un pagina, scribe le nomine in le quadro de recerca hic supra, e seque le ligamine que apparera.',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Irwangatot
 * @author IvanLanin
 * @author Kandar
 * @author Rex
 */
$messages['id'] = array(
	'wminc-desc' => 'Sistem wiki pengujian untuk Inkubator Wikimedia',
	'wminc-testwiki' => 'Wiki pengujian:',
	'wminc-testwiki-none' => 'Tidak ada/Semua',
	'wminc-prefinfo-language' => 'Bahasa antarmuka Anda - tidak terpengaruh oleh wiki pengujian Anda',
	'wminc-prefinfo-code' => 'Kode bahasa ISO 639',
	'wminc-prefinfo-project' => 'Pilih proyek Wikimedia (pilihan Inkubator adalah untuk pengguna-pengguna yang melakukan kerja umum)',
	'wminc-prefinfo-error' => 'Anda memilih sebuah proyek yang membutuhkan sebuah kode bahasa.',
	'randombytest' => 'Halaman sembarang oleh wiki percobaan',
	'randombytest-nopages' => 'Tidak ada halaman  wiki pengujian anda, dalam ruangnama: $1.',
	'wminc-viewuserlang' => 'Cari bahasa pengguna dan wiki pengujian',
	'wminc-viewuserlang-user' => 'Nama pengguna:',
	'wminc-viewuserlang-go' => 'Tuju ke',
	'wminc-userdoesnotexist' => 'Pengguna "$1" tidak ditemukan.',
	'right-viewuserlang' => 'Lihat bahasa pengguna dan wiki pengujian',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'wminc-testwiki' => 'Dàmatu wiki:',
	'wminc-testwiki-none' => 'Enwerö/Hánilé',
	'wminc-viewuserlang-go' => 'Gá',
);

/** Italian (italiano)
 * @author Annayram
 * @author Beta16
 * @author Darth Kule
 * @author F. Cosoleto
 * @author Gianfranco
 * @author HalphaZ
 * @author Melos
 * @author OrbiliusMagister
 * @author Ximo17
 */
$messages['it'] = array(
	'wminc-desc' => 'Sistema wiki di test per Wikimedia Incubator',
	'wminc-manual' => 'Guida',
	'wminc-listwikis' => 'Elenco di wiki',
	'wminc-testwiki' => 'Test wiki:',
	'wminc-testwiki-code' => 'Lingua del wiki di prova:',
	'wminc-testwiki-none' => 'Nessuno/Tutti',
	'wminc-testwiki-site' => '(Manutenzione)',
	'wminc-recentchanges-all' => 'Tutte le modifiche recenti',
	'wminc-prefinfo-language' => "La lingua dell'interfaccia - indipendente dal tuo wiki di test",
	'wminc-prefinfo-code' => 'Il codice ISO 639 per la lingua su cui vuoi lavorare qui',
	'wminc-prefinfo-project' => 'Seleziona il progetto Wikimedia su cui vuoi lavorare qui',
	'wminc-prefinfo-error' => 'Hai selezionato un progetto che ha bisogno di un codice di linguaggio',
	'wminc-error-move-unprefixed' => 'Errore: La pagina che stai cercando di spostare a [[{{MediaWiki:Wminc-error-help}}|è senza prefisso o ha un prefisso sbagliato]]!',
	'wminc-error-wronglangcode' => "'''Errore:''' Questa pagina contiene un [[{{MediaWiki:Wminc-error-help}}|codice lingua errato]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Errore:''' Questa pagina è [[{{MediaWiki:Wminc-error-help}}|senza prefisso]]!",
	'wminc-error-unprefixed-suggest' => "'''Errore:''' Questa pagina è [[{{MediaWiki:Wminc-error-help}}|senza prefisso]]! Puoi creare la pagina [[:$1]].",
	'wminc-error-wiki-exists' => 'Questa wiki già esiste. Si può trovare questa pagina su $1. Se la wiki è stata creata di recente, attendere qualche ora o anche alcuni giorni finché il contenuto non verrà completamente importato.',
	'wminc-error-wiki-sister' => 'Questa pagina appartiene a un progetto che non è ospitato qui. Vai a $1 per trovare questa wiki.',
	'randombytest' => 'Una pagina a caso dalla wiki di test',
	'randombytest-nopages' => 'Non ci sono pagine nella tua wiki di test, per il namespace: $1.',
	'wminc-viewuserlang' => 'Ricerca della lingua utente e del wiki di test',
	'wminc-viewuserlang-user' => 'Nome utente:',
	'wminc-viewuserlang-go' => 'Vai',
	'wminc-userdoesnotexist' => 'L\'utente "$1" non esiste.',
	'wminc-ip' => '"$1" è un indirizzo IP.',
	'right-viewuserlang' => 'Visualizza il linguaggio utente e prova il wiki',
	'group-test-sysop' => 'Amministratori del wiki di prova',
	'group-test-sysop-member' => '{{GENDER:$1|amministratore|amministratrice|amministratore/trice}} del wiki di prova',
	'grouppage-test-sysop' => '{{ns:project}}:Amministratori del wiki di prova',
	'wminc-code-macrolanguage' => 'La [[wikipedia:$2 language|lingua "$3"]] è una [[wikipedia:ISO 639 macrolanguage|macrolingua]], composta dalle seguenti lingue:',
	'wminc-code-collective' => 'Il codice "$1" non fa riferimento a un linguaggio specifico, ma a un insieme di lingue, vedi [[wikipedia:$2 language|lingue "$3"]].',
	'wminc-code-retired' => 'Questo codice lingua è stato modificato e non si riferisce più alla lingua originale.',
	'wminc-listusers-testwiki' => 'Stai vedendo gli utenti che hanno impostato la preferenza del wiki di prova su $1.',
	'wminc-search-nocreate-nopref' => 'Hai effettuato una ricerca per "$1". Si prega di impostare le [[Special:Preferences|preferenze del wiki di prova]] così possiamo dirti quale pagina puoi creare!',
	'wminc-search-nocreate-suggest' => 'Hai effettuato una ricerca per "$1". Si può creare una pagina nella tua wiki a <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Cerca un wiki',
	'wminc-searchwiki-noproject' => 'Non è stato selezionato alcun progetto.',
	'wminc-searchwiki-noresults' => "Nessun risultato. È possibile cercare per codici di lingua, nomi originari e nomi nella vostra lingua d'interfaccia o in inglese.",
	'wminc-searchwiki-selectproject' => 'Cerca per:',
	'wminc-searchwiki-inputlanguage' => 'Nella lingua:',
	'wminc-searchwiki-go' => 'Vai',
	'wminc-searchwiki-multiplematches' => 'La tua ricerca ha trovato le seguenti lingue:',
	'wminc-searchwiki-match-langcode' => '"$1" è un codice linguistico ISO 639 per $2.',
	'wminc-searchwiki-match-userlangname' => '$1 è il nome di una lingua.',
	'wminc-searchwiki-match-englishname' => '"$1" è il nome di $2 in inglese.',
	'wminc-searchwiki-match-nativename' => '"$1"è il nome di $2 in quella lingua.',
	'wminc-searchwiki-gotoinfopage' => 'informazioni pagina',
	'wminc-fs-pagetitle' => 'Percorso guidato per i primi passi - $1',
	'wminc-fs-langselect-title' => 'Seleziona lingua',
	'wminc-fs-signup-title' => 'Registrati',
	'wminc-fs-settings-title' => 'Imposta la preferenze per il wiki',
	'wminc-fs-userpage-title' => 'Crea la tua pagina utente',
	'wminc-fs-startwiki-title' => 'Avvia il tuo wiki',
	'wminc-fs-pagetitle-done' => '- fatto!',
	'wminc-fs-intro' => 'Benvenuto nel percorso guidato per i primi passi di {{SITENAME}}.  Sarai guidato nel processo di avvio di un nuovo wiki.',
	'wminc-fs-langselect' => 'Continuare in $1 o $2',
	'wminc-fs-signup-text' => "Se si dispone già di un'utenza [$1 effettuare l'accesso]. Se non se ne ha ancora una, [$2 creare un'utenza]. Non è necessario farlo ma è fortemente consigliato e ci vogliono solo pochi secondi per crearla.",
	'wminc-fs-settings-text' => 'Andare nelle [[Special:Preferences|proprie preferenze]] e cambiare le impostazioni del wiki di test.
Sulla destra sono visibili le opzioni più importanti presenti in quella pagina. La prima è la lingua della propria interfaccia, che è stata scelta nel primo passo ma è ancora possibile cambiare.
La seconda è il progetto a cui si vuole contribuire e la terza è il codice linguistico del progetto a cui si vuole contribuire.
Se non si conosce il codice, consultare il [[{{MediaWiki:Wminc-manual-url}}|manuale]] o chiedere [[{{MediaWiki:Portal-url}}|aiuto]].',
	'wminc-fs-userpage-text' => 'Creare la propria pagina utente $1 con alcune informazioni personali essenziali. È presente un link a essa anche nella parte superiore di questa pagina.',
	'wminc-fs-globaluser-text' => 'Il tuo account utente è locale. Si consiglia di renderlo globale tramite $1 in modo da poterlo utilizzare su qualsiasi wiki di Wikimedia.',
	'wminc-fs-startwiki-text' => 'Il prefisso del tuo wiki è <strong>$1</strong>. È possibile avviare il wiki creando la pagina principale del wiki su <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'Il prefisso del tuo wiki è $1. La pagina principale è a $2. Ora si può collaborare con le altre persone che parlano questa lingua per creare una comunità. Se si desidera creare una pagina è sufficiente scriverne il nome nella casella di ricerca qui sopra e seguire il collegamento che sarà visibile.',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author Marine-Blue
 * @author Shirayuki
 * @author 青子守歌
 */
$messages['ja'] = array(
	'wminc-desc' => 'ウィキメディアインキュベーター用の試験版ウィキシステム',
	'wminc-manual' => 'マニュアル',
	'wminc-listwikis' => 'ウィキの一覧',
	'wminc-testwiki' => '試験版ウィキ:',
	'wminc-testwiki-code' => '試験版ウィキの言語:',
	'wminc-testwiki-none' => 'なし/すべて',
	'wminc-recentchanges-all' => '最近の更新をすべて表示',
	'wminc-prefinfo-language' => 'あなたのインターフェイス言語 (あなたの試験版ウィキとは独立しています)',
	'wminc-prefinfo-code' => '自分が作業している言語の ISO 639 コード',
	'wminc-prefinfo-project' => 'ここで作業しているウィキメディアプロジェクトを選択',
	'wminc-prefinfo-error' => 'あなたが選択したプロジェクトは言語コードが必要です。',
	'wminc-error-move-unprefixed' => 'エラー: あなたが移動しようとしているページは[[{{MediaWiki:Wminc-error-help}}|接頭辞を誤っています]]!',
	'wminc-error-wronglangcode' => 'エラー: このページには[[{{MediaWiki:Wminc-error-help}}|正しくない言語コード]] 「$1」が含まれています。',
	'wminc-error-unprefixed' => "'''エラー:''' このページには[[{{MediaWiki:Wminc-error-help}}|接頭辞がありません]]!",
	'wminc-error-unprefixed-suggest' => "'''エラー:''' このページには[[{{MediaWiki:Wminc-error-help}}|接頭辞がありません]]! [[:$1]]というページ名で作成することができます。",
	'wminc-error-wiki-exists' => '指定されたウィキは既に作成されています。この項目は $1 にあります。そのウィキが最近作成されたばかりの場合は、インポートが完了するまで数時間から数日間お待ちください。',
	'wminc-error-wiki-sister' => 'このページはここではホストされていないプロジェクトのページです。$1 でウィキをお探しください。',
	'randombytest' => '試験版ウィキによるおまかせ表示',
	'randombytest-nopages' => 'あなたの試験版ウィキには名前空間 $1 にページがありません。',
	'wminc-viewuserlang' => '利用者の言語と試験版ウィキを探す',
	'wminc-viewuserlang-user' => '利用者名：',
	'wminc-viewuserlang-go' => '表示',
	'wminc-userdoesnotexist' => '利用者アカウント「$1」は存在しません。',
	'wminc-ip' => '「$1」はIPアドレスです。',
	'right-viewuserlang' => '利用者の言語を閲覧しウィキをテスト',
	'group-test-sysop' => '試験版ウィキ管理者',
	'group-test-sysop-member' => '{{GENDER:$1|試験版ウィキ管理者}}',
	'grouppage-test-sysop' => '{{ns:project}}:試験版ウィキ管理者',
	'group-test-sysop.css' => '/* ここに記述したCSSはテストウィキ管理者のみに影響します */',
	'group-test-sysop.js' => '/* ここに記述したJSはテストウィキ管理者のみに影響します */',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|言語「$3」]] は[[wikipedia:ISO 639 macrolanguage|マクロ言語]]であり、以下の言語から構成されます：',
	'wminc-code-collective' => 'コード "$1" は特定の言語を指すわけではなく、言語の集合、すなわち[[wikipedia:$2 language|$3群]]を指します。',
	'wminc-code-retired' => 'この言語コードには変更があり、元の言語を指さないようになりました。',
	'wminc-listusers-testwiki' => 'あなたは試験版ウィキの設定を $1 にしている利用者を表示しています。',
	'wminc-search-nocreate-nopref' => 'あなたは「$1」を検索しました。どのページを作成できるのか、あなたに知らせられるように[[Special:Preferences|試験版ウィキの設定]]を行ってください。',
	'wminc-search-nocreate-suggest' => '「$1」を検索しました。<strong>[[$2]]</strong> で、このウィキにページを作成できます。',
	'wminc-searchwiki' => 'wiki を検索',
	'wminc-searchwiki-noproject' => 'プロジェクトを選択しませんでした。',
	'wminc-searchwiki-noresults' => '結果はありません。言語コード、ネイティブ名、あなたのインターフェイス言語での名前、英語のいずれかで検索できます。',
	'wminc-searchwiki-selectproject' => '検索対象:',
	'wminc-searchwiki-inputlanguage' => '以下の言語で：',
	'wminc-searchwiki-go' => '実行',
	'wminc-searchwiki-multiplematches' => '検索の結果、以下の言語に一致しました：',
	'wminc-searchwiki-match-langcode' => '"$1" は、$2 の ISO 639 言語コードです。',
	'wminc-searchwiki-match-userlangname' => '$1 は言語名です。',
	'wminc-searchwiki-match-englishname' => '"$1" は $2 の英語での名前です。',
	'wminc-searchwiki-match-nativename' => '"$1" は $2 のその言語での名前です。',
	'wminc-searchwiki-goto' => '<strong>$1</strong> ($2)',
	'wminc-searchwiki-gotoinfopage' => '情報ページ',
	'wminc-fs-pagetitle' => '開始準備ウィザード - $1',
	'wminc-fs-langselect-title' => '言語を選択',
	'wminc-fs-signup-title' => '利用者登録',
	'wminc-fs-settings-title' => 'ウィキの設定の変更',
	'wminc-fs-userpage-title' => '自分の利用者ページを作成',
	'wminc-fs-startwiki-title' => '自分のウィキを開始',
	'wminc-fs-pagetitle-done' => ' - 完了!',
	'wminc-fs-globaluser-text' => 'あなたの利用者アカウントはローカルです。$1でグローバルにして、ウィキメディアのあらゆるウィキで使用できるようにすることをお勧めします。',
);

/** Jamaican Creole English (Patois)
 * @author Hazard-SJ
 */
$messages['jam'] = array(
	'randombytest' => 'Random piej by tess wiki',
	'wminc-userdoesnotexist' => 'Di yusa "$1" no hexist.',
);

/** Javanese (Basa Jawa)
 * @author Pras
 */
$messages['jv'] = array(
	'wminc-desc' => 'Sistem pangujian wiki kanggo Inkubator Wikimedia',
	'wminc-testwiki' => 'Wiki pangujian:',
	'wminc-testwiki-none' => 'Ora ana/Kabèh',
	'wminc-prefinfo-language' => 'Basa adu-rai panjenengan - indhepèndhen saka wiki pacoban panjenengan',
	'wminc-prefinfo-code' => 'Kodhe basa ISO 639',
	'wminc-prefinfo-project' => 'Pilih proyèk Wikimedia (pilihan inkubator iku kanggo para panganggo sing ngayahi kerja umum)',
	'wminc-prefinfo-error' => 'Panjenengan milih sawijining proyèk sing mbutuhaké sawijining kodhe basa.',
	'wminc-viewuserlang' => 'Golèki basa panganggo lan wiki pangujian',
	'wminc-viewuserlang-user' => 'Jeneng panganggo:',
	'wminc-viewuserlang-go' => 'Tumuju menyang',
	'right-viewuserlang' => 'Pirsani basa panganggo lan wiki pacoban',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author David1010
 */
$messages['ka'] = array(
	'wminc-manual' => 'დოკუმენტაცია',
	'wminc-testwiki' => 'ტესტური ვიკი:',
	'wminc-testwiki-code' => 'ტესტური ვიკის ენა:',
	'wminc-testwiki-none' => 'არა/ყველა',
	'wminc-recentchanges-all' => 'ყველა ბოლო ცვლილება',
	'wminc-viewuserlang-user' => 'მომხმარებლის სახელი:',
	'wminc-viewuserlang-go' => 'მიდი',
	'wminc-ip' => '"$1" IP-მომხმარებელია.',
	'group-test-sysop' => 'ტესტური ვიკის ადმინისტრატორები',
	'group-test-sysop-member' => '{{GENDER:$1|ტესტური ვიკის ადმინისტრატორი}}',
	'grouppage-test-sysop' => '{{ns:project}}:ტესტური ვიკის ადმინისტრატორები',
	'wminc-searchwiki' => 'ვიკიში ძიება',
	'wminc-searchwiki-selectproject' => 'ძიება:',
	'wminc-searchwiki-inputlanguage' => 'ენის მიხედვით:',
	'wminc-searchwiki-go' => 'მიდი',
	'wminc-searchwiki-gotoinfopage' => 'საინფორმაციო გვერდი',
	'wminc-fs-langselect-title' => 'აირჩიეთ ენა',
	'wminc-fs-signup-title' => 'დარეგისტრირდით',
	'wminc-fs-startwiki-title' => 'დაიწყეთ თქვენი ვიკი',
	'wminc-fs-pagetitle-done' => ' - გაკეთდა!',
);

/** Khmer (ភាសាខ្មែរ)
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'wminc-desc' => 'សាកល្បង​ប្រព័ន្ធ​វិគី​សម្រាប់​ Wikimedia Incubator',
	'wminc-testwiki' => 'សាកល្បង​វីគី៖',
	'wminc-testwiki-none' => 'គ្មាន​/ទាំងអស់​',
	'wminc-prefinfo-code' => 'លេខ​កូដ​ភាសា​ ISO 639',
	'wminc-prefinfo-error' => 'អ្នក​បាន​ជ្រើសរើស​គម្រោង​មួយ​ដែល​ត្រូវការ​លេខ​កូដ​ភាសា​។',
	'wminc-viewuserlang' => 'រក​មើល​ភាសា​អ្នក​ប្រើប្រាស់​និង​សាក​ល្បង​វិគី​',
	'wminc-viewuserlang-user' => 'អ្នកប្រើប្រាស់​៖',
	'wminc-viewuserlang-go' => 'ទៅ​',
	'right-viewuserlang' => 'មើល​ភាសា​អ្នកប្រើប្រាស់​និងធ្វើការ​សាកល្បង​វិគី',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 * @author VASANTH S.N.
 */
$messages['kn'] = array(
	'wminc-manual' => 'ಕೈಪಿಡಿ',
	'wminc-viewuserlang-user' => 'ಬಳಕೆದಾರ ಹೆಸರು:',
	'wminc-viewuserlang-go' => 'ಹೋಗು',
	'wminc-searchwiki-selectproject' => 'ಹುಡುಕಿ',
	'wminc-searchwiki-go' => 'ಹೋಗು',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author Pakman
 * @author 아라
 */
$messages['ko'] = array(
	'wminc-desc' => '위키미디어 인큐베이터의 테스트 위키 시스템',
	'wminc-manual' => '사용법',
	'wminc-listwikis' => '위키 목록',
	'wminc-testwiki' => '테스트 위키:',
	'wminc-testwiki-code' => '테스트 위키 언어:',
	'wminc-testwiki-none' => '없음/모두',
	'wminc-testwiki-site' => '(유지 관리)',
	'wminc-recentchanges-all' => '모든 최근 바뀜',
	'wminc-prefinfo-language' => '당신의 인터페이스 언어 - 테스트 위키에서 독립',
	'wminc-prefinfo-code' => '여기에 작업하는 언어의 ISO 639 언어 코드',
	'wminc-prefinfo-project' => '여기에 작업하는 위키미디어 프로젝트 선택',
	'wminc-prefinfo-error' => '언어 코드가 필요한 프로젝트를 선택했습니다.',
	'wminc-error-move-unprefixed' => '오류: 이동하려고 하는 문서가 [[{{MediaWiki:Wminc-error-help}}|접두어나 없거나 잘못된 접두어로 되어있습니다]]!',
	'wminc-error-wronglangcode' => "'''오류:''' 이 문서는 [[{{MediaWiki:Wminc-error-help}}|잘못된 \"\$1\" 언어 코드]]를 포함합니다!",
	'wminc-error-unprefixed' => "'''오류:''' 이 문서는 [[{{MediaWiki:Wminc-error-help}}|접두어가 없습니다]]!",
	'wminc-error-unprefixed-suggest' => "'''오류:''' 이 문서는 [[{{MediaWiki:Wminc-error-help}}|접두어가 없습니다]]! [[:$1]]에 문서를 만들 수 있습니다.",
	'wminc-error-wiki-exists' => '이 위키가 이미 있습니다. $1에서 이 문서를 찾을 수 있습니다. 위키를 최근에 만들었다면 모든 내용을 가져올 때까지 몇 시간 또는 며칠을 기다리세요.',
	'wminc-error-wiki-sister' => '이 문서는 여기에 호스트하지 않는 프로젝트에 속합니다. 위키를 찾으려면 $1(으)로 가세요.',
	'randombytest' => '테스트 위키에 의한 임의 문서',
	'randombytest-nopages' => '당신의 테스트 위키에는 이름공간에 문서가 없습니다: $1.',
	'wminc-viewuserlang' => '사용자 언어와 테스트 위키 찾기',
	'wminc-viewuserlang-user' => '사용자 이름:',
	'wminc-viewuserlang-go' => '찾기',
	'wminc-userdoesnotexist' => '"$1" 사용자는 존재하지 않습니다.',
	'wminc-ip' => '"$1"(은)는 IP 주소입니다.',
	'right-viewuserlang' => '사용자 언어와 테스트 위키 보기',
	'group-test-sysop' => '테스트 위키 관리자',
	'group-test-sysop-member' => '{{GENDER:$1|테스트 위키 관리자}}',
	'grouppage-test-sysop' => '{{ns:project}}:테스트 위키 관리자',
	'group-test-sysop.css' => '/* 이 CSS 설정은 테스트 위키 관리자에만 적용됩니다 */',
	'group-test-sysop.js' => '/* 이 자바스크립트 설정은 테스트 위키 관리자에만 적용됩니다 */',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|"$3" 언어]]는 다음과 같은 멤버 언어로 구성된 [[wikipedia:ISO 639 macrolanguage|매크로 언어]]입니다:',
	'wminc-code-collective' => '"$1" 코드는 특정 언어를 참고하지만 [[wikipedia:$2 language|"$3" 언어]]로 된 언어의 모음집을 참고하지 않습니다.',
	'wminc-code-retired' => '이 언어 코드가 바뀌었고 더 이상 원래 언어를 참고하지 않습니다.',
	'wminc-listusers-testwiki' => '당신은 $1에서 테스트 위키 환경 설정으로 설정한 사용자를 보고 있습니다.',
	'wminc-search-nocreate-nopref' => '"$1"에 대해 찾았습니다. 만들 수 있는 문서로 우리가 말할 수 있도록 [[Special:Preferences|테스트 위키 환경 설정]]을 설정하세요!',
	'wminc-search-nocreate-suggest' => '"$1"에 대해 찾았습니다. 당신의 위키에서 <strong>[[$2]]</strong> 문서를 만들 수 있습니다!',
	'wminc-searchwiki' => '위키에서 찾기',
	'wminc-searchwiki-noproject' => '프로젝트를 선택하지 않았습니다.',
	'wminc-searchwiki-noresults' => '결과가 없습니다. 언어 코드, 기본 이름과 당신의 인터페이스 언어 이름이나 영어 이름으로 검색할 수 있습니다.',
	'wminc-searchwiki-selectproject' => '찾을 대상:',
	'wminc-searchwiki-inputlanguage' => '언어:',
	'wminc-searchwiki-go' => '찾기',
	'wminc-searchwiki-multiplematches' => '검색어는 다음 언어와 일치합니다:',
	'wminc-searchwiki-match-langcode' => '"$1"(은)는 $2에 대한 ISO 639 언어 코드입니다.',
	'wminc-searchwiki-match-userlangname' => '$1(은)는 언어 이름입니다.',
	'wminc-searchwiki-match-englishname' => '"$1"(은)는 영어에서 $2에 대한 이름입니다.',
	'wminc-searchwiki-match-nativename' => '"$1"(은)는 해당 언어에서 $2에 대한 이름입니다.',
	'wminc-searchwiki-gotoinfopage' => '정보 문서',
	'wminc-fs-pagetitle' => '시작 마법사 - $1',
	'wminc-fs-langselect-title' => '언어 선택',
	'wminc-fs-signup-title' => '가입하기',
	'wminc-fs-settings-title' => '위키 환경 설정',
	'wminc-fs-userpage-title' => '내 사용자 문서 만들기',
	'wminc-fs-startwiki-title' => '위키 시작',
	'wminc-fs-pagetitle-done' => ' - 완료!',
	'wminc-fs-intro' => '{{SITENAME}} 첫 단계 마법에 온 것을 환영합니다. 당신은 새 위키를 시작하는 과정을 거치게 됩니다.',
	'wminc-fs-langselect' => '$1 또는 $2에서 진행',
	'wminc-fs-signup-text' => '사용자 계정이 이미 있다면 [$1 로그인]하세요. 아직 계정이 없다면, [$2 사용자 계정을 만드세요].
필요하지는 않지만 만드는 것이 좋으며 만드는 데에 몇 초 걸리지 않습니다.',
	'wminc-fs-settings-text' => '이제 [[Special:Preferences|사용자 환경 설정]]으로 가서 테스트 위키 설정을 바꾸시기 바랍니다.
오른쪽에서 문서에 있는 관련 옵션을 참고하세요. 첫 번째는 첫 번째 단계에서 선택한 사용자 인터페이스 언어이지만 여전히 언어를 바꿀 수 있습니다.
두 번째 단계는 기여하고 싶은 프로젝트이고 세 번째 단계는 기여하고 싶은 프로젝트의 언어 코드입니다.
코드를 모른다면 [[{{MediaWiki:Wminc-manual-url}}|매뉴얼]]을 참조하거나 [[{{MediaWiki:Portal-url}}|도움말]]에 물어보시기 바랍니다.',
	'wminc-fs-userpage-text' => '지금 자신에 대한 몇 가지 기본 정보를 사용하여 $1 사용자 토론을 만드세요. 또한 이 문서의 위에 이에 대한 링크를 볼 수 있습니다.',
	'wminc-fs-globaluser-text' => '사용자 계정이 로컬 계정입니다. 모든 위키미디어 위키에 사용할 수 있도록 $1을 통해 계정을 통합하는 것을 권장합니다.',
	'wminc-fs-startwiki-text' => '위키의 접두어는 <strong>$1</strong>입니다. <strong>$2</strong>에서 위키의 대문 만들기로 위키를 시작할 수 있습니다.',
	'wminc-fs-startwiki-exists-text' => '위키 접두어는 $1입니다. 대문은 $2에 있습니다. 이제 커뮤니티를 구축하기 위해 이 언어의 다른 사용자와 함께 공동 작업을 할 수 있습니다!
이 문서를 만들려면 위의 찾기 상자에 이름을 입력하고 보여지는 링크를 클릭하세요.',
);

/** Komi-Permyak (Перем Коми)
 * @author Enye Lav
 */
$messages['koi'] = array(
	'wminc-viewuserlang-user' => 'Уджкерисьлöн ним:',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'wminc-desc' => 'Süßtemm för Versöhkß-Wikis för dä Inkubator vun de Wikimedia Shtefftung',
	'wminc-manual' => 'Handbooch',
	'wminc-listwikis' => 'Leß met de Wikis',
	'wminc-testwiki' => 'Et Versöhkß-Wiki:',
	'wminc-testwiki-code' => 'Dem Versöhkß-Wikis sing Schprooch:',
	'wminc-testwiki-none' => 'Kein/All',
	'wminc-testwiki-site' => '(Waadong)',
	'wminc-recentchanges-all' => 'All de {{LCFIRST:{{int:recentchanges}}}}',
	'wminc-prefinfo-language' => 'Ding Shprooch för däm Wiki sing Bovverfläsch un et Wiki ze bedeene — hät nix met Dingem Versöhkß-Wiki singe Shprooch ze donn',
	'wminc-prefinfo-code' => 'Dat Köözel för di Shprooch noh dä Norrem ISO 639',
	'wminc-prefinfo-project' => 'Donn dat Projäk ußwähle — „Incubator“ is för Lück met alljemein Werk.',
	'wminc-prefinfo-error' => 'Bei dämm Projäk moß och e Köözel för de Shprooch aanjejovve wääde.',
	'wminc-error-move-unprefixed' => 'Dat es jeiht nit: Dä neue Name för di Sigg hät [[{{MediaWiki:Wminc-error-help}}|kei udder e verkeeht Köözel]] am Aanfang!',
	'wminc-error-wronglangcode' => "'''Dat es jeiht nit:''' Di Sigg häd [[{{MediaWiki:Wminc-error-help}}|e verkeeht Köözel för de Shprooch]], dat es: „$1“",
	'wminc-error-unprefixed' => "'''Dat es jeiht nit:''' Di Sigg hät kei [[{{MediaWiki:Wminc-error-help}}|Köözel am Aanfang]]!",
	'wminc-error-unprefixed-suggest' => "'''Dat es jeiht nit:''' Di Sigg hät kei [[{{MediaWiki:Wminc-error-help}}|Köözel am Aanfang]]! Do kanns en Sigg onger [[:$1]] aanlääje.",
	'wminc-error-wiki-exists' => 'Dat Wiki jidd_et ald. Do kanns di Sigg op $1 fenge. Wann dat Wiki jraad neu opjemaat woode sin sullt, donn e paa Shtonde udder a paa Dääsch waade, bes dat alle Sigg von heh noh doh erövver jehollt woode sen.',
	'wminc-error-wiki-sister' => 'Di Sigg heh jehüürt bei e Projäk, wat mer heh nit han. Jangk noh $1, öm noh däm Wiki ze looere.',
	'randombytest' => 'En zohfällije Sigg uss_em Versöhkß-Wiki',
	'randombytest-nopages' => 'En Appachtemang $1 sin kein Sigge uß Dingem Versöhkß-Wiki.',
	'wminc-viewuserlang' => 'Däm Metmaacher sing Shprooch un sing Versöhkß-Wiki aanloore',
	'wminc-viewuserlang-user' => 'Däm Metmaacher singe Name:',
	'wminc-viewuserlang-go' => 'Lohß Jonn!',
	'wminc-userdoesnotexist' => 'Ene Metmaacher „$1“ jidd_et nit.',
	'wminc-ip' => '„$1“ es en <span lang=en"">IP</span>-Adräß.',
	'right-viewuserlang' => 'De Metmaacher ier Shprooch un Versöhkß-Wiki beloore',
	'group-test-sysop' => 'Köbeße för e Versöhkß-Wiki',
	'group-test-sysop-member' => '{{GENDER:$1|Köbes för e Versöhkß-Wiki}}',
	'grouppage-test-sysop' => '{{ns:project}}:Köbeße för Versöhkß-Wikis',
	'group-test-sysop.css' => '/* dat CSS heh aan dä Stell wirrek nur bei de Wiki_Köbeße vum Versöhkß-Wikis */',
	'group-test-sysop.js' => '/* dat JavaSkrep heh aan dä Stell wirrek nur bei de Wiki_Köbeße vum Versöhkß-Wikis */',
	'wminc-code-macrolanguage' => 'De Sprooch „[[wikipedia:$2 language|$3]]“ is en [[wikipedia:ksh:Makroshprooch (ISO 639-3)|Makroshprooch noh ISO 639-3]], woh heh di Shprooche bei jehüre:',
	'wminc-code-collective' => 'Dat Köözel „$1“ es nit för en bestemmpte Shprooch, söndern för en Sammlong vun Shprooche, nämmlesch de [[wikipedia:$2 language|$3 Shprooche]].',
	'wminc-code-retired' => 'Dat Köözel fö di Shprooch wood jeändert un deiht nit mieh för di Shprooch.',
	'wminc-listusers-testwiki' => 'Heh kütt en Leß met dä Metmaacher, dänne ier Ennställonge em Versöhkß-Wiki op „$1“ jesaz sin.',
	'wminc-search-nocreate-nopref' => 'Do bes noh „$1“ aam Söhke. Bes esu jood un donn de [[Special:Preferences|Ennställonge för Ding Versöhkß-Wiki]] faßlääje, esu dat mer Der aanzeije künne, wat för en Sigge De aanlääje kanns.',
	'wminc-search-nocreate-suggest' => 'Do has noh „$1“ jesöhk. Do kanns en Dingem Versöhkswiki en Sigg onger <strong>[[$2]]</strong> aanlääje.',
	'wminc-searchwiki' => 'Noh enem Wiki söhke',
	'wminc-searchwiki-noproject' => 'Do hä kei Projäk usjesöhk.',
	'wminc-searchwiki-noresults' => 'Nix jefonge. Do kanns övver e Köözel för en Schprooch, övver der eije Naame, övver der Name en Dinger Schprooch un op Änglesch söhke.',
	'wminc-searchwiki-selectproject' => 'Söhk noh:',
	'wminc-searchwiki-inputlanguage' => 'En dä Schprooch:',
	'wminc-searchwiki-go' => 'Lohß Jonn!',
	'wminc-searchwiki-multiplematches' => 'Ding Träffer en heh dä Schprooche:',
	'wminc-searchwiki-match-langcode' => '„$1“ es e Köözel för $2 en dä ISO 639.',
	'wminc-searchwiki-match-userlangname' => '„$1“ es der Naame för en Schprooch.',
	'wminc-searchwiki-match-englishname' => '„$1“ es der Naame för $2 en Änglesch.',
	'wminc-searchwiki-match-nativename' => '„$1“ es der Naame för $2 en dä Schprooch.',
	'wminc-searchwiki-gotoinfopage' => 'Sigg met Enfommazjuhne',
	'wminc-fs-langselect-title' => 'En Schprooch ußwähle',
	'wminc-fs-signup-title' => 'Aanmälde',
	'wminc-fs-settings-title' => 'Don Din Enschtällonge för et Wiki faßlääje',
	'wminc-fs-userpage-title' => 'Don Ding Metmaachersigg aanlääje',
	'wminc-fs-startwiki-title' => 'Fang met Dingem Wiki aan',
	'wminc-fs-pagetitle-done' => ' - jedonn!',
	'wminc-fs-settings-text' => 'Jangk jäds_op [[Special:Preferences|Ding Enschtällonge]] un änder Ding Versöhks-Wiki.
Wat De op dä Sigg han kanns, sühs De aam Rand.
Et eezde es de Schprooch, di et Wiki met Der kalle sull, di De ald usjesöhk häs, ävver heh kanns De se norr_ens ändere.
Et zweite es dat Projäk, woh De draan metmaache wells.
Als Drettes kütt dat Köözel för di Schprooch vun däm Projäk, woh De dren schriive un jät beidraare wells.
wann dät Közel nit weiß, loor en em [[{{MediaWiki:Wminc-manual-url}}|Handbooch]] noh udder frooch noh [[{{MediaWiki:Portal-url}}|Hölp]].',
);

/** Kurdish (Latin script) (‪Kurdî (latînî)‬)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'wminc-prefinfo-code' => 'Koda ISO 639 a ziman',
	'wminc-viewuserlang-user' => 'Navê bikarhêner:',
	'wminc-viewuserlang-go' => 'Biçe',
	'wminc-searchwiki-go' => 'Biçe',
);

/** Cornish (kernowek)
 * @author Kernoweger
 * @author Kw-Moon
 * @author Nrowe
 */
$messages['kw'] = array(
	'wminc-testwiki-none' => 'Nagonen/Oll',
	'wminc-prefinfo-code' => 'Koden ISO 639 an yeth',
	'wminc-viewuserlang-user' => 'Hanow usyer:',
	'wminc-viewuserlang-go' => 'Mos',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'wminc-desc' => 'Testwiki-System fir de Wikimedia-Incubator',
	'wminc-manual' => 'Handbuch',
	'wminc-listwikis' => 'Lëscht vun de Wikien',
	'wminc-testwiki' => 'Test-Wiki:',
	'wminc-testwiki-code' => 'Sprooch vun der Testwiki:',
	'wminc-testwiki-none' => 'Keen/All',
	'wminc-recentchanges-all' => 'All rezent Ännerungen',
	'wminc-prefinfo-language' => 'Sprooch vun ärem Interface - onofhängeg vun Ärer Test-Wiki',
	'wminc-prefinfo-code' => 'Den ISO 639 Sprooche-Code vun der Sprooch an där Dir hei schafft',
	'wminc-prefinfo-project' => 'Wielt de Wikimediaprojet  un deem Dir hei schafft',
	'wminc-prefinfo-error' => 'Dir hutt e Projet gewielt deen e Sproochecode brauch.',
	'wminc-error-wronglangcode' => "'''Feeler:''' Op dëser Säit ass e [[{{MediaWiki:Wminc-error-help}}|falsche Sproochecode]] \"\$1\"!",
	'randombytest' => 'Zoufallssäit duerch Test Wiki',
	'randombytest-nopages' => 'Et si keng Säiten op Ärer Test-Wiki, am Nummraum: $1.',
	'wminc-viewuserlang' => 'Benotzersprooch an Test-Wiki nokucken',
	'wminc-viewuserlang-user' => 'Benotzernumm:',
	'wminc-viewuserlang-go' => 'Lass',
	'wminc-userdoesnotexist' => "De Benotzer ''$1'' gëtt et net.",
	'wminc-ip' => '"$1" ass eng IP-Adress.',
	'right-viewuserlang' => 'Benotzersprooch an Test-Wiki weisen',
	'group-test-sysop' => 'Adminstrateure vun der Testwiki',
	'group-test-sysop-member' => '{{GENDER:$1|Adminstrateur|Administratrice}} vun der Testwiki',
	'wminc-code-collective' => 'De Code "$1" bezitt sech net op eng bestëmmte Sprooch, mä op eng Grupp vu Sproochen, an zwar op [[wikipedia:$2 language|"$3"-Sproochen]].',
	'wminc-code-retired' => "Dëse Sproochcode gouf geännert a bezitt sech net méi op d'Original-Sprooch.",
	'wminc-listusers-testwiki' => 'Dir gesitt Benotzer déi hir Test-Wiki Astellung op $1 gesat hunn',
	'wminc-search-nocreate-suggest' => 'Dir hutt no "$1" gesicht. Dir kënnt eng Säit ënner <strong>[[$2]]</strong> an Ärer Wiki uleeën!',
	'wminc-searchwiki' => 'No enger Wiki sichen',
	'wminc-searchwiki-noproject' => 'Dir hutt kee Projet erausgesicht.',
	'wminc-searchwiki-selectproject' => 'Sichen no:',
	'wminc-searchwiki-inputlanguage' => 'An der Sprooch:',
	'wminc-searchwiki-go' => 'Lass',
	'wminc-searchwiki-match-langcode' => '"$1" ass en ISO 639 Sproochcode fir $2.',
	'wminc-searchwiki-match-userlangname' => '$1 ass den Numm vun enger Sprooch.',
	'wminc-searchwiki-match-englishname' => '"$1" ass den Numm fir $2 op Englesch.',
	'wminc-searchwiki-match-nativename' => '"$1" ass den Numm fir $2 an där Sprooch.',
	'wminc-searchwiki-gotoinfopage' => 'Info-Säit',
	'wminc-fs-langselect-title' => 'Sprooch eraussichen',
	'wminc-fs-signup-title' => 'Mellt Iech un',
	'wminc-fs-settings-title' => 'Leet Är Wiki-Astellunge fest',
	'wminc-fs-startwiki-title' => 'Fänkt mat Ärer Wiki un',
	'wminc-fs-pagetitle-done' => ' - fäerdeg!',
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'wminc-desc' => 'Teswikisysteem veur Wikimedia Inkubater',
	'wminc-manual' => 'Handjleiding',
	'wminc-listwikis' => 'Lies ven wikieër',
	'wminc-testwiki' => 'Teswiki:',
	'wminc-testwiki-code' => 'Teswikispraok:',
	'wminc-testwiki-none' => 'Gein/al',
	'wminc-recentchanges-all' => 'Als recènt angeringer',
	'wminc-prefinfo-language' => 'Dien oeterliksspraok - ónaafhenkelik van diene teswiki',
	'wminc-prefinfo-code' => 'De ISO 639-spraokcode',
	'wminc-prefinfo-project' => "Selecteer 't Wikimediaprojek (inkubateroptie is veur gebroekers die algemein wèrk doon)",
	'wminc-prefinfo-error' => "Doe selecteerdes e projek det 'n spraokcode gebroek.",
	'wminc-error-move-unprefixed' => 'Fówtj: De mikpaasj wohaerstoe trachs te verplaatsje [[{{MediaWiki:Wminc-error-help}}|haet geitj ódder e verkieërdj veurvoogsel]]!',
	'wminc-error-wronglangcode' => "'''Fówtj:''' Dees paasj óntvatj 'n [[{{MediaWiki:Wminc-error-help}}|verkieërdj spraokkoeaj]] ''$1''.",
	'wminc-error-unprefixed' => "'''Fówtj:''' Dees paasj haet [[{{MediaWiki:Wminc-error-help}}|gei veurvoogsel]]!",
	'wminc-error-unprefixed-suggest' => "'''Fówtj:''' Dees paasj haet [[{{MediaWiki:Wminc-error-help}}|gei veurvoogsel]]. Doe kins 'n paasj aanmaken óp [[:$1]].",
	'wminc-error-wiki-exists' => 'Deze wiki besteit sjoean. Doe kins dees paasj vinjen óp $1. Es de wiki recèntelik gemaak gewaoren is, wach den inkel oer ódder daag toetbies als inhaadj ingeveurdj gewaore zie.',
	'wminc-error-wiki-sister' => "Dees paasj behuuerdj toet 'nem perjèkte det hie neet haeraangelaote wuuerdj. Gank nao $1 óm de wiki te vinje.",
	'randombytest' => 'Willekäörige pazjena oete teswiki',
	'randombytest-nopages' => "d'r Zeen gein pazjena's in diene teswiki inne naamruumdje $1.",
	'wminc-viewuserlang' => 'Zeuk de gebroekersspraok en teswiki óp',
	'wminc-viewuserlang-user' => 'Gebroekersnaam:',
	'wminc-viewuserlang-go' => 'Gank',
	'wminc-userdoesnotexist' => 'De gebroeker "$1" besteit neet.',
	'wminc-ip' => '"$1" is e-n IP-heimsnómmer.',
	'right-viewuserlang' => 'Bekiek gebroekersspraok en teswiki',
	'group-test-sysop' => 'teswikibehieërder',
	'group-test-sysop-member' => 'teswikibehieërder',
	'grouppage-test-sysop' => '{{ns:project}}:Teswikibehieërder',
	'wminc-code-macrolanguage' => 'De [[wikipedia:$2 language|spraok "$3"]] is \'n [[wikipedia:nl:Macrotaal|euverspraok]], die besteit oet g\'r nègksvóggendjer spräök:',
	'wminc-code-collective' => 'De koeaj "$1" verwies neet achter \'ner specefieker spraok, mer achter \'n gaedering aan spräök, naomelik de [[wikipedia:$2 language|"$3"-spräök.]]',
	'wminc-code-retired' => "Dees spraokkoeaj is angerdj èn verwies nimmieër achter g'r oearsprónkeliker spraok.",
	'wminc-listusers-testwiki' => 'Doe bekiekes gebroeker die häör teswiki-instèllinger óp $1 vas höbbe gezadj.',
	'wminc-search-nocreate-nopref' => 'Doe haes gezóch achter "$1". Stèl dien [[Special:Preferences|teswikiveurkäör]] in zoeadet v\'r dich kinnen aangaeve wèlch paasj destoe kins aanmake.',
	'wminc-search-nocreate-suggest' => 'Doe haes gezóch achter "$1". Doe kins \'n paasj in dienem teswikieë aanmaken óp <strong>[[$2]]</strong>.',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Hugo.arg
 */
$messages['lt'] = array(
	'wminc-desc' => 'Wiki testasvimo sistema Vikimedija Inkubatoriui',
	'wminc-manual' => 'Instrukcija',
	'wminc-listwikis' => 'Wiki, sąrašas',
	'wminc-testwiki' => 'Testavimo wiki:',
	'wminc-testwiki-code' => 'Bandymo viki kalba:',
	'wminc-testwiki-none' => 'Nei vienas/Visi',
	'wminc-recentchanges-all' => 'Visi naujausi pakeitimai',
	'wminc-prefinfo-language' => 'Jūsų sąsajos kalba - nepriklausomai nuo jūsų testavimo wiki',
	'wminc-prefinfo-code' => 'ISO 639 kalbos kodas',
	'wminc-prefinfo-error' => 'Jūs pasirinkote projektą, kuriam reikia kalbos kodo.',
	'wminc-error-wiki-exists' => 'Ši viki jau egzistuoja.  Jus galite rasti šį puslapį $1. Jei viki buvo neseniai sukurta, prašome  palaukti kelias valandas ar dienas kol bus importuotas visas tūrinis.',
	'wminc-error-wiki-sister' => 'Šis puslapis priklauso projektui, kuris nepatalpintas čia. Prašome grįžti į $1 , kad rasti wiki .',
	'randombytest' => 'Atsitiktinis puslapis iš testavimo wiki',
	'wminc-viewuserlang' => 'Ieškoti vartotojo kalbos ir testavimo wiki',
	'wminc-viewuserlang-user' => 'Naudotojo vardas:',
	'wminc-viewuserlang-go' => 'Eiti',
	'wminc-userdoesnotexist' => 'Vartotojas " $1 "neegzistuoja.',
	'wminc-ip' => '" $1 " yra IP adresas.',
	'right-viewuserlang' => 'Žiūrėti naudotojo kalbą ir testavimo wiki',
	'group-test-sysop' => 'Bandyti wiki administratorius',
	'group-test-sysop-member' => 'bandyti wiki administratorių',
	'grouppage-test-sysop' => '{{ns:project}}:Test wiki administrators',
	'wminc-code-retired' => 'Šios kalbos kodas buvo pakeistas ir nebėra nuoroda į originalo kalba.',
	'wminc-listusers-testwiki' => 'Jūs matote naudotojams, kurie nustatė bandymo Wiki pirmenybę $1.',
	'wminc-searchwiki-selectproject' => 'Ieškoti:',
	'wminc-searchwiki-inputlanguage' => 'Kalba:',
	'wminc-searchwiki-go' => 'Eiti',
	'wminc-searchwiki-multiplematches' => 'Jūsų paieška atitinka šias kalbas:',
	'wminc-searchwiki-gotoinfopage' => 'informacijos puslapis',
);

/** Lushai (Mizo ţawng)
 * @author RMizo
 */
$messages['lus'] = array(
	'wminc-desc' => 'Wikimedia Inmunna (Incubator) tana wiki chhinna',
	'wminc-manual' => 'Kaihhruaina',
	'wminc-listwikis' => 'Wiki zawng zawng',
	'wminc-testwiki' => 'Wiki chhinna',
	'wminc-testwiki-code' => 'Wiki chhinna tawng',
	'wminc-testwiki-none' => 'Pakhatmah/A vaiin',
	'wminc-recentchanges-all' => 'Tun hnaia tihdanglam thar zawng zawng',
	'wminc-prefinfo-language' => 'Hmanna ţawng - i chhinna wiki ni kher lo',
	'wminc-prefinfo-code' => 'ISO-639 ţawng thurûk (code)',
	'wminc-prefinfo-project' => 'Wikimedia hna-hmachhawp thlang rawh le (Incubator hi chu vantlang hna thawk tan chauhva thlan theih )',
	'wminc-prefinfo-error' => 'Tawng thurûk(language code) mamawh hna-hmachhawp i thlang',
	'wminc-error-move-unprefixed' => 'I kal tumna phek [[{{MediaWiki:Wminc-error-help}}]] hi thuhmabet nei lo a nih loh vek pawhin thuhmabet dik lo hmang a ni ang.',
	'wminc-error-wronglangcode' => "'''Dik lo: tihsual palh''' He phêkah hian [[{{MediaWiki:Wminc-error-help}}|tawng thurûk dik lo]] a awm\"\$1\"!",
	'wminc-error-unprefixed' => "'''Tihsual palh a awm!''' He phek hi [[{{MediaWiki:Wminc-error-help}}|thuhmabet nei lo ]] a ni!",
	'wminc-error-unprefixed-suggest' => "'''Dik lo:''' He phek hi [[{{MediaWiki:Wminc-error-help}}|thuhmabet nei lo a ni]]! He phek hi [[:$1]]-ah hian i siam thei ang.",
	'wminc-error-wiki-exists' => 'He wiki hi a awm tawh. He phek hi $1-ah i en thei ang. He wiki hi siam thar a nih chuan darkar hnih-khat vel emaw ni hnih khat, a chhunga awm zawng zawng lak luh a nih hma chu nghâk hram phawt ang che.',
	'wminc-error-wiki-sister' => 'He phek hi heta enkawl loh hna-hmachhawp a ni. Khawngaihin $1-ah he wiki hi en turin kal hram ang che.',
	'randombytest' => 'Wiki chhinna phêk kahpah',
	'randombytest-nopages' => 'I wiki chhinna-ah hian phêk a awm lo, he hminghmun (namespace): $1-ah hian.',
	'wminc-viewuserlang' => 'Hmangtu tawng leh wiki chhinna en rawh.',
	'wminc-viewuserlang-user' => 'Hmangtuhming:',
	'wminc-viewuserlang-go' => 'Khai le',
	'wminc-userdoesnotexist' => 'Hmangtu "$1" a awm lo tlat.',
	'wminc-ip' => '"$1" hi chenhmun-IP (IP address) a ni.',
	'right-viewuserlang' => 'Hmangtu  ţawng leh wiki chhinna en rawh.',
	'group-test-sysop' => 'Wiki chhinna roreltute',
	'group-test-sysop-member' => 'Wiki chhinna roreltu {{GENDER:$1|te}}',
	'grouppage-test-sysop' => '{{ns:project}}:Wiki chhinna roreltute',
	'wminc-code-macrolanguage' => '[[wikipedia:$2  ţawng|"$3"  ţawng]] hi [[wikipedia:ISO 639  ţawnglian(macrolanguage)| ţawnglian(macrolanguage)]] a ni a, a hnuaia  ţawngte khu a huam:',
	'wminc-code-collective' => 'Thurûk "$1" hian  ţawng bîk kawh nei lovin  ţawng huho, hêng: [[wikipedia:$2 language|"$3"  ţawngte]] te hi a kâwk.',
	'wminc-code-retired' => 'He  ţawng thurûk (code) hi thlâk tawh a ni a, a ţawng hlui pangngai a kâwk lo.',
	'wminc-listusers-testwiki' => 'Wiki chhinna duhthlanna  $1-a thlâk tawh hmangtuteho i en mek a ni.',
	'wminc-search-nocreate-nopref' => '"$1" hi i zawng a ni awm a. I [[Special:Preferences|wiki chhinna duhdàn]] siamrem la, tichuan i phêk siam theih kan lo hrilh ang che!',
	'wminc-search-nocreate-suggest' => '"$1" hi i zawng a ni awm a. I wiki <strong>[[$2]]</strong>-ah hian a phêk i siam thei ang.',
	'wminc-searchwiki' => 'Wiki zawng rawh',
	'wminc-searchwiki-noproject' => 'Hna-hmachhawp thlan i nei lo.',
	'wminc-searchwiki-noresults' => 'Hmuh tùr a awm lo tlat;  ţawng thurûk leh an hnam hming leh i hmanna  ţawng hming emaw sap  ţawngin emaw i zawng thei ang.',
	'wminc-searchwiki-selectproject' => 'Hei hi zawng rawh:',
	'wminc-searchwiki-inputlanguage' => 'He  ţawng hian:',
	'wminc-searchwiki-go' => 'Khai le',
	'wminc-searchwiki-multiplematches' => 'I thil zawn hian hêng  ţawngte hi a mil:',
	'wminc-searchwiki-match-langcode' => '"$1" hi $2 tana ISO 639  ţawng thurûk a ni.',
	'wminc-searchwiki-match-userlangname' => '$1 hi  ţawng hming a ni.',
	'wminc-searchwiki-match-englishname' => '"$1" hi Sap  ţawnga $2 hming a ni.',
	'wminc-searchwiki-match-nativename' => '"$1" hi chu  ţawnga $2 an sawina a ni.',
	'wminc-searchwiki-gotoinfopage' => 'Hriattirna phêk',
);

/** Latvian (latviešu)
 * @author Papuass
 * @author Xil
 */
$messages['lv'] = array(
	'wminc-manual' => 'Rokasgrāmata',
	'wminc-testwiki' => 'Testa projekts:',
	'wminc-prefinfo-language' => 'Tava interfeisa valoda - nav saistīta ar testa projektu, kurā tu piedalies',
	'wminc-prefinfo-code' => 'ISO 639 valodas kods',
	'wminc-prefinfo-project' => 'Izvēlēties Wikimedia projektu (iespēja Incubator ir domāta tiem lietotājiem, kuri darbojas inkubatorā vispār, nevis konkrētos testa projektos)',
	'wminc-prefinfo-error' => 'Jūs izvēlējāties projektu, bet nenorādījāt valodas kodu',
	'wminc-viewuserlang' => 'Sameklēt lietotāja valodu un testa projektu',
	'wminc-viewuserlang-user' => 'Lietotājvārds:',
	'wminc-viewuserlang-go' => 'Aiziet!',
	'wminc-ip' => '"$1" ir IP adrese.',
	'right-viewuserlang' => 'Apskatīt lietotāja valodu un testa projektu',
);

/** Lazuri (Lazuri)
 * @author Bombola
 */
$messages['lzz'] = array(
	'wminc-prefinfo-code' => "ISO 639 nena k'odi",
	'wminc-viewuserlang-go' => 'İgzali',
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'wminc-testwiki' => 'Wiki fanandramana :',
	'wminc-testwiki-none' => 'Tsy misy / izy rehetra',
	'wminc-prefinfo-language' => "Ny ten'ny rindrankajy ho anao - tsy mifatotra amin'ny wiki fanandramanao",
	'wminc-prefinfo-code' => 'Kaody ISO 639 ny teny',
	'wminc-prefinfo-error' => 'Nisafidy tetikasa mila kaodim-piteny ianao.',
	'wminc-viewuserlang-user' => 'Solonanarana :',
	'wminc-viewuserlang-go' => 'Andana',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'wminc-desc' => 'Пробен вики-систем за Викимедииниот Инкубатор',
	'wminc-manual' => 'Прирачник',
	'wminc-listwikis' => 'Список на викија',
	'wminc-testwiki' => 'Пробно вики:',
	'wminc-testwiki-code' => 'Јазик на пробното вики:',
	'wminc-testwiki-none' => 'Ништо/Сè',
	'wminc-testwiki-site' => '(Одржување)',
	'wminc-recentchanges-all' => 'Сите скорешни промени',
	'wminc-prefinfo-language' => 'Јазикот на вашиот посредник - назависно од вашето пробно вики',
	'wminc-prefinfo-code' => 'ISO 639 код на јазикот на којшто работите тука',
	'wminc-prefinfo-project' => 'Изберете го Викимедииниот проект на којшто работите тука',
	'wminc-prefinfo-error' => 'Избравте проект на кој му треба јазичен код.',
	'wminc-error-move-unprefixed' => 'Грешка: Страницата што сакате да ја преместите на [[{{MediaWiki:Wminc-error-help}}|нема префикс или префиксот ѝ е грешен]]!',
	'wminc-error-wronglangcode' => "'''Грешка:''' Страницава содржи [[{{MediaWiki:Wminc-error-help}}|погрешен јазичен код]] „$1“!",
	'wminc-error-unprefixed' => "'''Грешка:''' Страницава [[{{MediaWiki:Wminc-error-help}}|нема префикс]]!",
	'wminc-error-unprefixed-suggest' => "'''Грешка:''' Страницава [[{{MediaWiki:Wminc-error-help}}|нема префикс]]! Можете да создадете страница на [[:$1]].",
	'wminc-error-wiki-exists' => 'Ова вики веќе постои. Страницата ќе ја најдете на $1. Ако в икито е новосоздадено, почекајте неколку часа или дена за да се увезат сите содржини.',
	'wminc-error-wiki-sister' => 'Оваа страница припаѓа на проект што не е вдомен тука. Појдете на $1 за да го пронајдете викито.',
	'randombytest' => 'Случајна страница од пробното вики',
	'randombytest-nopages' => 'Не постојат страници на вашето пробно вики, во именскиот простор: $1.',
	'wminc-viewuserlang' => 'Провери го јазикот на корисникот и неговото пробно вики',
	'wminc-viewuserlang-user' => 'Корисничко име:',
	'wminc-viewuserlang-go' => 'Оди',
	'wminc-userdoesnotexist' => 'Корисникот „$1“ не постои.',
	'wminc-ip' => '„$1“ е IP-адреса.',
	'right-viewuserlang' => 'Погледајте кориснички јазик и текст вики',
	'group-test-sysop' => 'Администратори на пробно вики',
	'group-test-sysop-member' => '{{GENDER:$1|администратор на пробно вики}}',
	'grouppage-test-sysop' => '{{ns:project}}:Администратори на пробни викија',
	'group-test-sysop.css' => '/* Тука поставениот CSS ќе се применува само врз администраторите на пробно вики */',
	'group-test-sysop.js' => '/* Тука поставениот JS ќе се применува само врз администраторите на пробно вики */',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Јазикот „$3“]] е [[wikipedia:ISO 639 macrolanguage|макројазик]], кој се состои од следниве јазици:',
	'wminc-code-collective' => 'Кодот „$1“ не се однесува на поединечен јазик, туку на збирот јазици наречен [[wikipedia:$2 language|„$3“ јазици]].',
	'wminc-code-retired' => 'Овој јазичен код е изменет и повеќе не се однесува на првоназначениот јазик.',
	'wminc-listusers-testwiki' => 'Гледате корисници кои пробното вики го наместиле на $1.',
	'wminc-search-nocreate-nopref' => 'Го баравте поимот „$1“. Задајте го [[Special:Preferences|нагодувањето на пробното вики]] за да ви соопштиме која страница можете да ја создадете!',
	'wminc-search-nocreate-suggest' => 'Го баравте поимот „$1“. Можете да создадете страница во вашето вики на <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Пребарај вики',
	'wminc-searchwiki-noproject' => 'Не избравте проект.',
	'wminc-searchwiki-noresults' => 'Нема резултати. Можете да пребарувате по јазични кодови, изворни имиња и имињата на вашиот јазик (или англиски).',
	'wminc-searchwiki-selectproject' => 'Пребарај:',
	'wminc-searchwiki-inputlanguage' => 'На следниов јазик:',
	'wminc-searchwiki-go' => 'Оди',
	'wminc-searchwiki-multiplematches' => 'Пребараното одговара на следниве јазици:',
	'wminc-searchwiki-match-langcode' => '„$1“ е јазичен код на $2 според ISO 639.',
	'wminc-searchwiki-match-userlangname' => '$1 е име на јазик.',
	'wminc-searchwiki-match-englishname' => '„$1“ е името на $2 на англиски.',
	'wminc-searchwiki-match-nativename' => '„$1“ е името на $2 на тој јазик.',
	'wminc-searchwiki-gotoinfopage' => 'инфостраница',
	'wminc-fs-pagetitle' => 'Помошник „Како да започнете“ - $1',
	'wminc-fs-langselect-title' => 'Одберете јазик',
	'wminc-fs-signup-title' => 'Регистрација',
	'wminc-fs-settings-title' => 'Задајте вики-поставки',
	'wminc-fs-userpage-title' => 'Создајте своја корисничка страница',
	'wminc-fs-startwiki-title' => 'Започнете го вашето вики',
	'wminc-fs-pagetitle-done' => '- завршено!',
	'wminc-fs-intro' => 'Добредојдовте на помошникот со првите чекори на {{SITENAME}}. Тој ќе ве води по постапката за започнување на ново вики.',
	'wminc-fs-langselect' => 'Продолжете на $1 или $2',
	'wminc-fs-signup-text' => 'Доколку веќе имате корисничка сметка, тогаш [$1 најавете се]. Ако немате, [$2 направете си сметка].
Имањето на сметка не е задолжително, но навистина се препорачува. Ќе ви земе само неколку секунди.',
	'wminc-fs-settings-text' => 'Сега појдете на [[Special:Preferences|нагодувањата]] и сменете ги поставките на вашето пробно вики.
Од десната страна ќе ги видите релевантните можности за таа страница. Првата е за јазик на посредникот, што го одбравте во првиот чекор, но сега можете повторно да го измените.
Втората е проектот кајшто сакате да учествувате, а третата е јазичниот код на проектот во кој ќе учествувате.
Ако не го знаете кодот, консултирајте го [[{{MediaWiki:Wminc-manual-url}}|прирачникот]] или побарајте [[{{MediaWiki:Portal-url}}|помош]].',
	'wminc-fs-userpage-text' => 'Сега создајте си ја корисничката страница $1 и внесете основни информации за вас. На врвот од страницата ќе забележите и врска до неа.',
	'wminc-fs-globaluser-text' => 'Корисничката сметка ви е локална. Се препорачува да ја глобализирате преку $1 за да можете да ја користите на сите викија на Викимедија.',
	'wminc-fs-startwiki-text' => 'Префиксот на вашето вики гласи <strong>$1</strong>. Отпочнете го викито со создавање на Главната страница на <strong>$2</strong>..',
	'wminc-fs-startwiki-exists-text' => 'Префиксот на вашето вики гласи $1. Главната страница се наоѓа на $2. Сега можете да соработувате со други говорници на овој јазик и така да создадете заедница!
Ако сакате да создадете страница, само внесете го името во полето за пребарување (погоре), и стиснете на врската што ќе ви се прикаже.',
);

/** Malayalam (മലയാളം)
 * @author Junaidpv
 * @author Praveenp
 */
$messages['ml'] = array(
	'wminc-desc' => 'വിക്കിമീഡിയ ഇൻകുബേറ്ററിനുള്ള പരീക്ഷണ വിക്കി വ്യവസ്ഥ',
	'wminc-manual' => 'സഹായഗ്രന്ഥം',
	'wminc-listwikis' => 'വിക്കികളുടെ പട്ടിക',
	'wminc-testwiki' => 'പരീക്ഷണ വിക്കി:',
	'wminc-testwiki-code' => 'പരീക്ഷണ വിക്കിയുടെ ഭാഷ:',
	'wminc-testwiki-none' => 'ഒന്നുമില്ല/എല്ലാം',
	'wminc-testwiki-site' => '(പരിപാലനം)',
	'wminc-recentchanges-all' => 'എല്ലാ സമീപകാല മാറ്റങ്ങളും',
	'wminc-prefinfo-language' => 'താങ്കളുടെ സമ്പർക്കമുഖ ഭാഷ - താങ്കളുടെ പരീക്ഷണ വിക്കിയിൽ നിന്ന് സ്വതന്ത്രം',
	'wminc-prefinfo-code' => 'താങ്കൾ ഇവിടെ ഉപയോഗിക്കുന്ന ഭാഷയുടെ ISO 639 കോഡ്',
	'wminc-prefinfo-project' => 'താങ്കൾ ഇവിടെ പ്രവർത്തിക്കുന്ന വിക്കിമീഡിയ പദ്ധതി തിരഞ്ഞെടുക്കുക',
	'wminc-prefinfo-error' => 'ഭാഷാ കോഡ് വേണ്ട ഒരു പദ്ധതിയാണ് താങ്കൾ തിരഞ്ഞെടുത്തിരിക്കുന്നത്.',
	'wminc-error-move-unprefixed' => 'പിഴവ്: താങ്കൾ മാറ്റാൻ ശ്രമിക്കുന്ന താൾ [[{{MediaWiki:Wminc-error-help}}|പൂർവ്വപദം ഇല്ലാത്തതോ തെറ്റായി പൂർവ്വപദത്തോടു കൂടിയതോ ആണ്]]!',
	'wminc-error-wronglangcode' => "'''പിഴവ്:''' ഈ താളിൽ [[{{MediaWiki:Wminc-error-help}}|തെറ്റായ ഭാഷാ കോഡ്]] \"\$1\" ആണുള്ളത്!",
	'wminc-error-unprefixed' => "'''പിഴവ്:''' ഈ താളിന് [[{{MediaWiki:Wminc-error-help}}|പൂർവ്വപദമില്ല]]!",
	'wminc-error-unprefixed-suggest' => "'''പിഴവ്:''' ഈ താളിന് [[{{MediaWiki:Wminc-error-help}}|പൂർവ്വപദമില്ല]]! താങ്കൾക്ക് [[:$1]]-ൽ ഒരു താൾ സൃഷ്ടിക്കാവുന്നതാണ്.",
	'wminc-error-wiki-exists' => 'ഈ വിക്കി നിലവിലുണ്ട്. ഈ താൾ താങ്കൾക്ക് $1-ൽ കാണാവുന്നതാണ്. ഈ വിക്കി സമീപകാലത്ത് സൃഷ്ടിച്ചതാണെങ്കിൽ, എല്ലാ ഉള്ളടക്കവും ഇറക്കുമതി ചെയ്യാനായി ഏതാനം മണിക്കൂറുകളോ ദിവസങ്ങളോ ദയവായി കാത്തിരിക്കുക.',
	'wminc-error-wiki-sister' => 'ഈ താൾ മറ്റെവിടെയോ ഹോസ്റ്റ് ചെയ്തിട്ടുള്ള പദ്ധതിയുടെ ഭാഗമാണ്. ദയവായി  $1 സന്ദർശിച്ച് വിക്കിയേതാണെന്ന് കണ്ടെത്തുക.',
	'randombytest' => 'പരീക്ഷണ വിക്കിയിൽ നിന്നും ക്രമരഹിതമായി എടുത്ത താൾ',
	'randombytest-nopages' => 'ഈ നാമമേഖലയിൽ പരീക്ഷണ വിക്കിയിൽ താങ്കൾക്ക് ഒരു താളും ഇല്ല: $1.',
	'wminc-viewuserlang' => 'താങ്കളുടെ പരീക്ഷണ വിക്കിയും ഉപയോക്തൃഭാഷയും നോക്കുക',
	'wminc-viewuserlang-user' => 'ഉപയോക്തൃനാമം:',
	'wminc-viewuserlang-go' => 'പോകൂ',
	'wminc-userdoesnotexist' => '"$1" എന്ന ഉപയോക്താവ് നിലവിലില്ല.',
	'wminc-ip' => '"$1" ഒരു ഐ.പി. വിലാസമാണ്.',
	'right-viewuserlang' => 'ഉപയോക്തൃഭാഷയും പരീക്ഷണ വിക്കിയും കാണുക',
	'group-test-sysop' => 'പരീക്ഷണവിക്കി കാര്യനിർവ്വാഹകർ',
	'group-test-sysop-member' => '{{GENDER:$1|പരീക്ഷണവിക്കി കാര്യനിർവാഹകൻ|പരീക്ഷണവിക്കി കാര്യനിർവാഹക}}',
	'grouppage-test-sysop' => '{{ns:project}}:പരീക്ഷണവിക്കി കാര്യനിർവ്വാഹകർ',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|"$3" എന്ന ഭാഷ]] ഒരു [[wikipedia:ISO 639 macrolanguage|ചെറുഭാഷയാണ്]], അത് ഉൾക്കൊള്ളുന്ന അംഗഭാഷകൾ ഇനി നൽകുന്നു:',
	'wminc-code-collective' => '"$1" എന്ന കോഡ് ഒരു പ്രത്യേക ഭാഷയെ പ്രതിനിധീകരിക്കുന്നില്ല, മറിച്ച് [[wikipedia:$2 language|"$3" ഭാഷകൾ]] എന്ന ഒരു കൂട്ടം ഭാഷകളാണ്.',
	'wminc-code-retired' => 'ഈ ഭാഷാ കോഡ് മാറിയിരിക്കുന്നു, യഥാർത്ഥ ഭാഷയെ അത് പ്രതിനിധീകരിക്കുന്നില്ല.',
	'wminc-listusers-testwiki' => 'തങ്ങളുടെ പരീക്ഷണവിക്കി ക്രമീകരണങ്ങൾ $1 ആയി സജ്ജീകരിച്ചിട്ടുള്ള ഉപയോക്താക്കളെയാണ് താങ്കൾ കാണുന്നത്.',
	'wminc-search-nocreate-nopref' => 'താങ്കൾ തിരഞ്ഞത് "$1" എന്ന പദമാണ്. താങ്കളുടെ [[Special:Preferences|പരീക്ഷണ വിക്കി മുൻഗണനകൾ]] സജ്ജീകരിക്കുകയാണെങ്കിൽ, ഏതേതു താളുകളാണ് താങ്കൾക്ക് സൃഷ്ടിക്കാനാവുക എന്ന് ഞങ്ങൾക്ക് പറയാനാകും!',
	'wminc-search-nocreate-suggest' => 'താങ്കൾ തിരഞ്ഞത് "$1" എന്നതിനാണ്. താങ്കളുടെ വിക്കിയിൽ <strong>[[$2]]</strong> എന്ന താൾ താങ്കൾക്ക് സൃഷ്ടിക്കാവുന്നതാണ്!',
	'wminc-searchwiki' => 'വിക്കിയ്ക്കായി തിരയുക',
	'wminc-searchwiki-noproject' => 'താങ്കളൊരു പദ്ധതി തിരഞ്ഞെടുത്തിട്ടില്ല.',
	'wminc-searchwiki-noresults' => 'ഫലങ്ങൾ ലഭ്യമല്ല. താങ്കൾക്ക് ഭാഷാ കോഡ് ഉപയോഗിച്ചോ, താങ്കളുടെ സമ്പർക്കമുഖ ഭാഷയിലോ ഇംഗ്ലീഷിലോ ഉള്ള പ്രാദേശിക നാമങ്ങൾ ഉപയോഗിച്ചോ തിരയാവുന്നതാണ്.',
	'wminc-searchwiki-selectproject' => 'ഇതു കണ്ടെത്തുക:',
	'wminc-searchwiki-inputlanguage' => 'ഭാഷ:',
	'wminc-searchwiki-go' => 'പോകൂ',
	'wminc-searchwiki-multiplematches' => 'ഇനിക്കൊടുക്കുന്ന ഭാഷകളിൽ ഒത്തുപോകുന്നവ തിരയുക:',
	'wminc-searchwiki-match-langcode' => '"$1" എന്നത് $2 എന്നതിന്റെ  ISO 639 കോഡ് ആണ്  .',
	'wminc-searchwiki-match-userlangname' => '$1 എന്നത് ഒരു ഭാഷയുടെ പേരാണ്.',
	'wminc-searchwiki-match-englishname' => '$2 എന്നതിന്റെ മലയാളം പേരാണ് "$1".',
	'wminc-searchwiki-match-nativename' => '"$1" എന്നത് ആ ഭാഷയിൽ $2 എന്നതിന്റെ പേരാണ്.',
	'wminc-searchwiki-gotoinfopage' => 'വിവരണ താൾ',
	'wminc-fs-pagetitle' => 'ചുവടുവെക്കാനൊരു സഹായി -$1',
	'wminc-fs-langselect-title' => 'ഭാഷ തിരഞ്ഞെടുക്കുക',
	'wminc-fs-signup-title' => 'അംഗത്വമെടുക്കുക',
	'wminc-fs-settings-title' => 'താങ്കളുടെ വിക്കി ക്രമീകരണങ്ങൾ സജ്ജീകരിക്കുക',
	'wminc-fs-userpage-title' => 'താങ്കളുടെ ഉപയോക്തൃതാൾ സൃഷ്ടിക്കുക',
	'wminc-fs-startwiki-title' => 'താങ്കളുടെ വിക്കി തുടങ്ങുക',
	'wminc-fs-pagetitle-done' => '- ചെയ്തു കഴിഞ്ഞു!',
	'wminc-fs-intro' => '{{SITENAME}} ആദ്യചുവടുകൾ സഹായിയിലേക്ക് സ്വാഗതം. പുതിയ വിക്കി തുടങ്ങുന്ന പ്രക്രിയകളിലേയ്ക്ക് താങ്കൾ നയിക്കപ്പെടുന്നതാണ്.',
	'wminc-fs-langselect' => '$1 അല്ലെങ്കിൽ $2 എടുത്ത് തുടരുക',
	'wminc-fs-signup-text' => 'താങ്കൾക്ക് ഉപയോക്തൃ അംഗത്വമുണ്ടെങ്കിൽ, ദയ്വായി [$1 പ്രവേശിക്കുക]. താങ്കൾ ഇതുവരെ അംഗത്വമെടുത്തിട്ടില്ലെങ്കിൽ ദയവായി [$2 ഒരെണ്ണം സൃഷ്ടിക്കുക]. ഇത് നിർബന്ധമൊന്നുമല്ല, പക്ഷേ ചെയ്തിരിക്കണമെന്ന് ആഗ്രഹിക്കുന്നു, ഒരെണ്ണമെടുക്കാൻ ഏതാനം സെക്കൻഡുകൾ മാത്രമേ ചിലവാകൂ.',
);

/** Mongolian (монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'wminc-viewuserlang-user' => 'Хэрэглэгчийн нэр:',
	'wminc-viewuserlang-go' => 'Явах',
);

/** Marathi (मराठी)
 * @author Shantanoo
 * @author संतोष दहिवळ
 */
$messages['mr'] = array(
	'wminc-desc' => 'विकि प्रणालीवर विकिमीडिया उष्णयंत्रचे परिक्षण करा.',
	'wminc-manual' => 'माहिती',
	'wminc-listwikis' => 'विकिंची यादी',
	'wminc-testwiki' => 'विकी परिक्षण',
	'wminc-testwiki-code' => 'विकि भाषा परिक्षण',
	'wminc-testwiki-none' => 'काही नाहि/सर्व',
	'wminc-recentchanges-all' => 'सर्व अलीकडील बदल',
	'wminc-prefinfo-code' => 'आय.एस.ओ. ६३९ भाषा संकेतोक',
	'wminc-prefinfo-project' => 'विकिमीडिया प्रकल्प निवडा (उबवण पात्र पर्याय सामान्य काम करणाऱ्या सदस्यांसाठी आहे)',
	'wminc-prefinfo-error' => 'आपण निवडलेल्या प्रकल्पाला भाषा संकेतांकाची जरूरी आहे.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aurora
 * @author Yosri
 */
$messages['ms'] = array(
	'wminc-desc' => 'Sistem wiki ujian untuk Wikimedia Incubator',
	'wminc-manual' => 'Manual',
	'wminc-listwikis' => 'Senarai wiki',
	'wminc-testwiki' => 'Wiki ujian:',
	'wminc-testwiki-code' => 'Bahasa wiki ujian:',
	'wminc-testwiki-none' => 'Tiada/Semua',
	'wminc-testwiki-site' => '(Penyelenggaraan)',
	'wminc-recentchanges-all' => 'Semua perubahan terkini',
	'wminc-prefinfo-language' => 'Bahasa antaramuka anda - bebas dari wiki ujian anda',
	'wminc-prefinfo-code' => 'Kod ISO 639 untuk bahasa yang anda usahakan di sini',
	'wminc-prefinfo-project' => 'Pilih projek Wikimedia yang anda usahakan di sini',
	'wminc-prefinfo-error' => 'Anda memilih projek yang memerlukan kod bahasa.',
	'wminc-error-move-unprefixed' => 'Ralat: Laman yang anda cuba pindahkan itu [[{{MediaWiki:Wminc-error-help}}|tiada awalan atau tersalah awalan]]!',
	'wminc-error-wronglangcode' => "'''Ralat:''' Laman ini mengandungi [[{{MediaWiki:Wminc-error-help}}|kod bahasa yang salah]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Ralat:''' Laman ini [[{{MediaWiki:Wminc-error-help}}|tiada awalan]]!",
	'wminc-error-unprefixed-suggest' => "'''Ralat:''' Laman ini [[{{MediaWiki:Wminc-error-help}}|tiada awalan]]! Anda boleh membuat laman baru di [[:$1]].",
	'wminc-error-wiki-exists' => 'Wiki ini sudah wujud. Anda boleh mencari laman ini di $1. Jika wiki itu baru dibuka, sila tunggu beberapa jam atau beberapa hari sehingga semua kandungan diimport.',
	'wminc-error-wiki-sister' => 'Laman ini tergolong dalam projek yang tidak dihoskan di sini. Sila ke $1 untuk mencari wikinya.',
	'randombytest' => 'Laman rawak oleh wiki ujian',
	'randombytest-nopages' => 'Tidak terdapat laman dalam wiki ujian anda, dalam ruang nama: $1.',
	'wminc-viewuserlang' => 'Lihat bahasa pengguna dan wiki ujian',
	'wminc-viewuserlang-user' => 'Nama pengguna:',
	'wminc-viewuserlang-go' => 'Pergi',
	'wminc-userdoesnotexist' => 'Pengguna "$1" tidak wujud.',
	'wminc-ip' => '"$1" ialah alamat IP.',
	'right-viewuserlang' => 'Melihat bahasa pengguna dan wiki ujian',
	'group-test-sysop' => 'Pentadbir wiki ujian',
	'group-test-sysop-member' => '{{GENDER:$1|pentadir wiki ujian}}',
	'grouppage-test-sysop' => '{{ns:project}}:Pentadbir wiki ujian',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Bahasa "$3"]] ialah sejenis [[wikipedia:ISO 639 macrolanguage|bahasa makro]], yang terdiri daripada bahasa-bahasa ahli yang berikut:',
	'wminc-code-collective' => 'Kod "$1" tidak merujuk kepada satu bahasa yang tertentu, sebaliknya merujuk kepada koleksi bahasa, iaitu [[wikipedia:$2 language|rumpun bahasa "$3"]].',
	'wminc-code-retired' => 'Kod bahasa ini sudah berubah dan tidak lagi merujuk kepada bahasa asal.',
	'wminc-listusers-testwiki' => 'Anda sedang melihat pengguna-pengguna yang menetapkan keutamaan wiki ujian mereka kepada $1.',
	'wminc-search-nocreate-nopref' => 'Anda mencari "$1". Sila tetapkan [[Special:Preferences|keutamaan wiki ujian]] anda supaya kami boleh memberitahu anda laman yang mana boleh anda buat!',
	'wminc-search-nocreate-suggest' => 'Anda mencari "$1". Anda boleh membuat halaman dalam wiki anda di <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Cari sesebuah wiki',
	'wminc-searchwiki-noproject' => 'Anda tidak memilih projek.',
	'wminc-searchwiki-noresults' => 'Tiada hasil. Anda boleh mencari mengikut kod bahasa, nama asli dan nama dalam bahasa Melayu atau bahasa Inggeris.',
	'wminc-searchwiki-selectproject' => 'Cari:',
	'wminc-searchwiki-inputlanguage' => 'Dalam bahasa:',
	'wminc-searchwiki-go' => 'Pergi',
	'wminc-searchwiki-multiplematches' => 'Pencarian anda berpadan dengan bahasa-bahasa yang berikut:',
	'wminc-searchwiki-match-langcode' => '"$1" ialah kod bahasa ISO 639 untuk $2.',
	'wminc-searchwiki-match-userlangname' => '$1 ialah nama bahasa.',
	'wminc-searchwiki-match-englishname' => '"$1" ialah nama $2 dalam bahasa Melayu.',
	'wminc-searchwiki-match-nativename' => '"$1" ialah nama $2 dalam bahasa itu.',
	'wminc-searchwiki-gotoinfopage' => 'laman maklumat',
	'wminc-fs-pagetitle' => 'Pendeta permulaan - $1',
	'wminc-fs-langselect-title' => 'Pilih bahasa',
	'wminc-fs-signup-title' => 'Daftar diri',
	'wminc-fs-settings-title' => 'Laraskan keutamaan wiki anda',
	'wminc-fs-userpage-title' => 'Cipta laman pengguna anda',
	'wminc-fs-startwiki-title' => 'Lancarkan wiki anda',
	'wminc-fs-pagetitle-done' => '- siap!',
	'wminc-fs-intro' => 'Selamat datang ke pendeta permulaan {{SITENAME}}. Anda akan dibimbing sepanjang proses pembukaan wiki baru.',
	'wminc-fs-langselect' => 'Teruskan dalam $1 atau $2',
	'wminc-fs-signup-text' => 'Jika anda sudah pun memiliki akaun pengguna, sila [$1 log masuk]. Jika belum, sila [$2 buka akaun pengguna].
Anda tidak diwajibkan tetapi amat disaran supaya membuka akaun, dan proses pembukaan akaun ini hanya memakan masa beberapa saat.',
	'wminc-fs-settings-text' => 'Sila pergi ke [[Special:Preferences|keutamaan anda]] sekarang, dan ubah tetapan wiki ujian anda.
Di sebelah kanan halaman itu, anda boleh melihat pilihan-pilihan yang bersesuaian dengan anda. Yang pertama ialah bahasa antara muka yang telah anda pilih dalam langkah pertama, tetapi anda masih boleh menukarnya.
Yang kedua ialah projek yang ingin anda usahakan, dan yang ketiga ialah kod bahasa bagi projek yang anda ingin usahakan itu.
Jika anda tidak tahu akan kodnya, sila rujuk [[{{MediaWiki:Wminc-manual-url}}|manual]] kami atau minta [[{{MediaWiki:Portal-url}}|tolong]].',
	'wminc-fs-userpage-text' => 'Sila wujudkan halaman pengguna anda $1 sekarang dengan maklumat asas tentang diri anda. Anda juga boleh melihat pautan kepadanya di bahagian atas halaman ini.',
	'wminc-fs-globaluser-text' => 'Akaun pengguna anda adalah setempat. Anda disaran agar menjadikannya sejagat melalui $1 supaya anda boleh menggunakannya di mana-mana wiki Wikimedia.',
	'wminc-fs-startwiki-text' => 'Awalan wiki anda ialah <strong>$1</strong>. Anda boleh membuat Halaman Utama wiki ini di <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'Awalan wiki anda ialah $1. Halaman Utama berada di $2. Kini, anda boleh bekerjasama dengan penutur-penutur bahasa ini yang lain untuk membina komuniti!
Jika anda hendak membuka halaman baru, taipkan sahaja namanya dalam ruangan carian di atas, kemudian ikuti pautan yang akan dipaparkan.',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'wminc-viewuserlang-go' => 'Mur',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'wminc-testwiki-none' => 'Мезеяк/Весе',
	'wminc-viewuserlang-user' => 'Сёрмадыцянь леметь:',
);

/** Norwegian Bokmål (‪norsk (bokmål)‬)
 * @author Audun
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'wminc-desc' => 'Testwikisystem for Wikimedia Incubator',
	'wminc-manual' => 'Manual',
	'wminc-listwikis' => 'Liste over wikier',
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-code' => 'Testwikispråk:',
	'wminc-testwiki-none' => 'Ingen/Alle',
	'wminc-recentchanges-all' => 'Alle nylige endringer',
	'wminc-prefinfo-language' => 'Ditt grensesnittspråk - uavhengig av din testwiki',
	'wminc-prefinfo-code' => 'ISO 639-språkkoden',
	'wminc-prefinfo-project' => 'Velg Wikimedia-prosjektet (alternativet Incubator er for brukere som gjør generelt arbeid)',
	'wminc-prefinfo-error' => 'Du valgte et prosjekt som krever en språkkode.',
	'wminc-error-move-unprefixed' => 'Feil: Siden du prøvde å flytte til [[{{MediaWiki:Wminc-error-help}}|har ingen eller feil prefiks]]!',
	'wminc-error-wronglangcode' => "'''Feil:''' Denne siden inneholder en [[{{MediaWiki:Wminc-error-help}}|gal språkkode]] «$1»!",
	'wminc-error-unprefixed' => "'''Feil:''' Denne siden har [[{{MediaWiki:Wminc-error-help}}|ingen prefiks]]!",
	'wminc-error-unprefixed-suggest' => "'''Feil:''' Denne siden har [[{{Mediawiki:Helppage}}|ingen prefiks]]! Du kan opprette en side på [[:$1]].",
	'wminc-error-wiki-exists' => 'Denne wikien finnes allerede. Du kan finne denne siden på $1. Om wikien ble opprettet nylig, vent noen timer eller dager til alt innholdet er importert.',
	'wminc-error-wiki-sister' => 'Denne siden hører til et prosjekt som ikke ligger her. Gå til $1 for å finne wikien.',
	'randombytest' => 'Tilfeldig side fra testwiki',
	'randombytest-nopages' => 'Det er ingen sider i din testwiki, i navnerommet: $1.',
	'wminc-viewuserlang' => 'Slå opp brukerspråk og testwiki',
	'wminc-viewuserlang-user' => 'Brukernavn:',
	'wminc-viewuserlang-go' => 'Gå',
	'wminc-userdoesnotexist' => 'Brukeren «$1» finnes ikke.',
	'wminc-ip' => '«$1» er en IP-adresse.',
	'right-viewuserlang' => 'Vis brukerspråk og testwiki',
	'group-test-sysop' => 'Testwikiadministratorer',
	'group-test-sysop-member' => '{{GENDER:$1|testwikiadministrator}}',
	'grouppage-test-sysop' => '{{ns:project}}:Testwikiadministratorer',
	'wminc-code-macrolanguage' => 'Språket [[wikipedia:$2 language|«$3»]] er et [[wikipedia:ISO 639 macrolanguage|makrospråk]] som består av følgende enkeltspråk:',
	'wminc-code-collective' => 'Koden «$1» refererer ikke til et spesifikt språk, men til en samling av språk, nemlig [[wikipedia:$2 language|«$3-språkene»]].',
	'wminc-code-retired' => 'Denne språkkoden har blitt endret, og refererer ikke lenger til det opprinnelige språket.',
	'wminc-listusers-testwiki' => 'Du ser brukere som har satt testwikiinnstillingene sine til $1.',
	'wminc-search-nocreate-nopref' => 'Du søkte etter «$1». Vennligst sett [[Special:Preferences|testwikiinnstillingene dine]] så vi kan si hvilken side du kan opprette!',
	'wminc-search-nocreate-suggest' => 'Du søkte etter «$1». Du kan opprette en side på din wiki på <strong>[[$2]]</strong>!',
);

/** Nedersaksisch (Nedersaksisch)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'wminc-desc' => 'Testwikisysteem veur de Wikimedia Incubator',
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-none' => 'Gien/alles',
	'wminc-prefinfo-language' => 'De gebrukerstaal - onaofhankelik van joew testwiki',
	'wminc-prefinfo-code' => 'De ISO 639-kode van de taal waoran jie hier warken',
	'wminc-prefinfo-project' => 'Kies t Wikimedia-projekt waoran jie warken',
	'wminc-prefinfo-error' => "Je hebben ekeuzen veur n projekt waor da'j n taalkode veur neudig hebben.",
	'wminc-viewuserlang' => 'Gebrukerstaal en testwiki opzeuken',
	'wminc-viewuserlang-user' => 'Gebrukersnaam:',
	'wminc-viewuserlang-go' => 'Zeuken',
);

/** Nepali (नेपाली)
 * @author RajeshPandey
 */
$messages['ne'] = array(
	'wminc-desc' => 'विकीमीडिया इनक्युबेटर को लागि विकि प्रणाली को परीक्षण',
	'wminc-manual' => 'मद्दत',
	'wminc-listwikis' => 'विकिहरूको सूची',
	'wminc-testwiki' => 'परीक्षण विकी',
	'wminc-testwiki-code' => 'परीक्षण विकी भाषा:',
	'wminc-testwiki-none' => 'कुनै पनि होइन/सबै',
	'wminc-recentchanges-all' => 'सबै नयाँ परिवर्तनहरू',
	'wminc-prefinfo-language' => 'तपाईंको इन्टरफेस भाषा - तपाईंको परीक्षण विकी संग संबन्ध नभएको',
	'wminc-prefinfo-code' => 'आइ.एस.ओ. ६३९ को भाषा संकेतांक',
	'wminc-prefinfo-project' => 'विकिमीडिया परियोजना को चयन गर्नुहोस (इन्क्युबेटर को विकल्प साधारण काम गर्ने उपयोगकर्ताहरु को लागि मात्र हो)',
	'wminc-prefinfo-error' => 'तपाईंले चयन गरेको परियोजना को लागि भाषा कोड चाहिन्छ।',
	'wminc-error-move-unprefixed' => 'त्रुटि: तपाईंले स्थान - परिवर्तन गर्न खोजेको पृष्ठ  [[{{MediaWiki:Wminc-error-help}}|अउपसर्गित छ या यो एक गलत उपसर्ग हो]]!',
	'wminc-error-wronglangcode' => "''' त्रुटि: ''' यस पृष्ठ मा रहेको \"\$1\" एक [[{{MediaWiki:Wminc-error-help}}|गलत भाषा कोड]]  हो!",
	'wminc-error-unprefixed' => "''' त्रुटि:''' यो पृष्ठ मा [[{{MediaWiki:Wminc-error-help}}|उपसर्ग]] छैन!",
	'wminc-error-unprefixed-suggest' => "'''त्रुटि:''' यो पृष्ठ मा [[{{MediaWiki:Wminc-error-help}}|उपसर्ग]] छैन! तपाइले [[:$1]] मा एक पृष्ठ बनाउन सक्नुहुन्छ।",
	'wminc-error-wiki-exists' => 'यो विकि पहिल्यै देखि रहेको छ। तपाईं यस पृष्ठलाइ $1 मा पाउन सक्नुहुन्छ। यदि यो विकी हालै मा बनाइएको भए, कृपया सबै सामाग्री आयात भएर सकिने समय सम्म केहि घन्टा या दिनसम्म प्रतीक्षा गर्नुहोला।',
	'wminc-error-wiki-sister' => 'यो पृष्ठ एक परियोजना संग सम्बन्ध राख्दछ जुन कि यहाँ होस्ट गरिएको छैन। कृपया यो विकिमा जान को लागि $1 मा जानुहोला।',
	'randombytest' => 'परीक्षण विकि को कुनै यौटा पृष्ठ',
	'randombytest-nopages' => 'तपाईंको परीक्षण विकीको नामस्थान: $1 मा कुनै पनि पृष्ठ छैनन्।',
	'wminc-viewuserlang' => 'प्रयोगकर्ता भाषा र परीक्षण विकि खोज्नुहोस',
	'wminc-viewuserlang-user' => 'प्रयोगकर्ता :',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'wminc-desc' => 'Testwikisysteem voor Wikimedia Incubator',
	'wminc-manual' => 'Handleiding',
	'wminc-listwikis' => "Lijst met wiki's",
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-code' => 'Testwikitaal:',
	'wminc-testwiki-none' => 'Geen/alle',
	'wminc-testwiki-site' => '(Onderhoud)',
	'wminc-recentchanges-all' => 'Alle recente wijzigingen',
	'wminc-prefinfo-language' => 'Uw interfacetaal - onafhankelijk van uw testwiki',
	'wminc-prefinfo-code' => 'De ISO 639-code van de taal waar u hier aan werkt',
	'wminc-prefinfo-project' => 'Selecteer het Wikimedia-project waar u aan werkt',
	'wminc-prefinfo-error' => 'U hebt een project geselecteerd dat een taalcode nodig heeft.',
	'wminc-error-move-unprefixed' => 'Fout: De doelpagina waarnaar u probeert te hernoemen [[{{MediaWiki:Wminc-error-help}}|heeft geen of een verkeerd voorvoegsel]]!',
	'wminc-error-wronglangcode' => "'''Fout:''' Deze pagina bevat een [[{{MediaWiki:Wminc-error-help}}|verkeerde taalcode]] \"\$1\".",
	'wminc-error-unprefixed' => "'''Fout:''' Deze pagina heeft [[{{MediaWiki:Wminc-error-help}}|geen voorvoegsel]]!",
	'wminc-error-unprefixed-suggest' => "'''Fout:''' Deze pagina heeft [[{{MediaWiki:Wminc-error-help}}|geen voorvoegsel]]. U kunt een pagina aanmaken op [[:$1]].",
	'wminc-error-wiki-exists' => 'Deze wiki bestaat al. U kunt deze pagina vinden op $1. Als de wiki onlangs gemaakt is, wacht dan enkele uren of dagen totdat alle inhoud is geïmporteerd.',
	'wminc-error-wiki-sister' => 'Deze pagina behoort tot een project dat hier niet wordt gehost. Ga naar $1 om de wiki te vinden.',
	'randombytest' => 'Willekeurige pagina uit testwiki',
	'randombytest-nopages' => "Er zijn geen pagina's in uw testwiki in de naamruimte $1.",
	'wminc-viewuserlang' => 'Gebruikerstaal en testwiki opzoeken',
	'wminc-viewuserlang-user' => 'Gebruikersnaam:',
	'wminc-viewuserlang-go' => 'OK',
	'wminc-userdoesnotexist' => 'De gebruiker "$1" bestaat niet.',
	'wminc-ip' => '"$1" is een IP-adres.',
	'right-viewuserlang' => 'Gebruikerstaal en testwiki bekijken',
	'group-test-sysop' => 'testwikibeheerders',
	'group-test-sysop-member' => '{{GENDER:$1|testwikibeheerder}}',
	'grouppage-test-sysop' => '{{ns:project}}:Testwikibeheerders',
	'wminc-code-macrolanguage' => 'De [[wikipedia:$2 language|taal "$3"]] is een [[wikipedia:nl:Macrotaal|macrotaal]], die bestaat uit de volgende talen:',
	'wminc-code-collective' => 'De code "$1" verwijst niet naar een specifieke taal, maar naar een verzameling talen, namelijk de [[wikipedia:$2 language|"$3" talen.]]',
	'wminc-code-retired' => 'Deze taalcode is gewijzigd en verwijst niet meer naar de oorspronkelijke taal.',
	'wminc-listusers-testwiki' => 'U bekijkt gebruikers die hun testwiki-instelling op $1 hebben gezet.',
	'wminc-search-nocreate-nopref' => 'U hebt gezocht naar "$1". Stel uw [[Special:Preferences|testwikivoorkeur]] in zodat we u kunnen aangeven welke pagina u kunt aanmaken.',
	'wminc-search-nocreate-suggest' => 'U hebt gezocht naar "$1". U kunt een pagina in uw testwiki aanmaken op <strong>[[$2]]</strong>.',
	'wminc-searchwiki' => 'Een wiki zoeken',
	'wminc-searchwiki-noproject' => 'U hebt geen project geselecteerd.',
	'wminc-searchwiki-noresults' => 'Geen resultaten. U kunt zoeken op taalcodes, autoniemen en namen in uw interfacetaal of in het Engels.',
	'wminc-searchwiki-selectproject' => 'Zoeken naar:',
	'wminc-searchwiki-inputlanguage' => 'In taal:',
	'wminc-searchwiki-go' => 'OK',
	'wminc-searchwiki-multiplematches' => 'Uw zoekopdracht komt overeen met de volgende talen:',
	'wminc-searchwiki-match-langcode' => '"$1" is een ISO 639-taalcode voor $2.',
	'wminc-searchwiki-match-userlangname' => '$1 is de naam van een taal.',
	'wminc-searchwiki-match-englishname' => '"$1" is de naam voor $2 in het Engels.',
	'wminc-searchwiki-match-nativename' => '"$1" is de naam voor $2 in die taal.',
	'wminc-searchwiki-gotoinfopage' => 'informatiepagina',
	'wminc-fs-pagetitle' => 'Aan de slag - $1',
	'wminc-fs-langselect-title' => 'Taal selecteren',
	'wminc-fs-signup-title' => 'Registreren',
	'wminc-fs-settings-title' => 'Stel uw wikivoorkeur in',
	'wminc-fs-userpage-title' => 'Uw gebruikerspagina aanmaken',
	'wminc-fs-startwiki-title' => 'Uw wiki starten',
	'wminc-fs-pagetitle-done' => ' - afgerond!',
	'wminc-fs-intro' => 'Welkom bij de wizard van {{SITENAME}} om u op weg te helpen. Hieronder wordt u door het proces heengeleid om een nieuwe wiki te starten.',
	'wminc-fs-langselect' => 'Doorgaan in het $1 of $2',
	'wminc-fs-signup-text' => 'Als u al een gebruiker hebt, [$1 meld u dan aan]. Als u er nog geen hebt, [$2 maak er dan een aan].
Het is niet verplicht maar wordt sterk aanbevolen en duurt slechts enkele seconden.',
	'wminc-fs-settings-text' => 'Ga nu naar [[Special:Preferences|uw voorkeuren]] en wijzig uw testwiki-instellingen.
Rechts ziet u de relevante opties die u op die pagina hebt. De eerste is uw interfacetaal, die u als eerste stap hebt gekozen, maar nog altijd kunt veranderen.
De tweede is het project waaraan u wilt bijdragen en de derde is de taalcode van de taal waaraan u wilt bijdragen.
Als u de code niet kent, raadpleeg dan onze [[{{MediaWiki:Wminc-manual-url}}|handleiding]] of [[{{MediaWiki:Portal-url}}|vraag om hulp]].',
	'wminc-fs-userpage-text' => 'Maak nu uw gebruikerspagina $1 aan met wat gegevens over uzelf. U ziet bovenaan deze pagina ook een verwijzing naar die pagina.',
	'wminc-fs-globaluser-text' => 'Uw gebruiker is lokaal. Het is aanbevolen om deze globaal te maken via $1 zodat u deze voor elke Wikimediawiki kunt gebruiken.',
	'wminc-fs-startwiki-text' => 'Het voorvoegsel van uw wiki is <strong>$1</strong>. U kunt de wiki beginnen door de hoofdpagina van de wiki aan te maken op <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'Het voorvoegsel van uw wiki is $1. De Hoofdpagina is te vinden op $2. U kunt nu samenwerken met andere sprekers van deze talen om een gemeenschap op te bouwen!
Als u een pagina wil aanmaken, typ gewoon de naam in het zoekvak bovenaan, en volg de verwijzing die u ziet.',
);

/** Norwegian Nynorsk (‪norsk (nynorsk)‬)
 * @author Gunnernett
 */
$messages['nn'] = array(
	'wminc-desc' => 'Testwikisystem for Wikimedia Incubator',
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-none' => 'Ingen/alle',
	'wminc-prefinfo-language' => 'Ditt grensesnittspråk - uavhengig av testwikien din',
	'wminc-prefinfo-code' => 'ISO 639-språkkode',
	'wminc-prefinfo-project' => 'Vél Wikimediaprosjekt (alternativet Incubator er for brukarar som gjer generelt arbeid)',
	'wminc-prefinfo-error' => 'Du valde eit prosjekt som krev ei språkkode.',
	'randombytest' => 'Tilfelleleg side frå testwiki',
	'randombytest-nopages' => 'Det er ingen sider i testwikien din, i namneromet:  $1.',
	'wminc-viewuserlang' => 'Slå opp brukarspråk og testwiki',
	'wminc-viewuserlang-user' => 'Brukarnamn:',
	'wminc-viewuserlang-go' => 'Gå',
	'right-viewuserlang' => 'Vis brukarspråk og testwiki',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'wminc-desc' => 'Sistèma de tèst de wiki per Wikimedia Incubator',
	'wminc-testwiki' => 'Wiki de tèst :',
	'wminc-testwiki-none' => 'Pas cap / totes',
	'wminc-prefinfo-language' => "Vòstra lenga de l'interfàcia - independenta de vòstre wiki de tèst",
	'wminc-prefinfo-code' => 'Lo còde ISO 639 de la lenga',
	'wminc-prefinfo-project' => "Seleccionatz lo projècte Wikimedia (l'opcion Incubator es destinada als utilizaires que fan un trabalh general)",
	'wminc-prefinfo-error' => 'Avètz seleccionat un projècte que necessita un còde de lenga.',
	'randombytest' => 'Pagina aleatòria pel wiki de tèst',
	'randombytest-nopages' => "Vòstre wiki de tèst conten pas de pagina dins l'espaci de noms : $1.",
	'wminc-viewuserlang' => "Veire la lenga de l'utilizaire e son wiki de tèst",
	'wminc-viewuserlang-user' => "Nom d'utilizaire :",
	'wminc-viewuserlang-go' => 'Anar',
	'right-viewuserlang' => 'Vejatz lenga de l’utilizaire e lo wiki de tèst',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 */
$messages['or'] = array(
	'wminc-listwikis' => 'ଉଇକି ଗୋଠର ତାଲିକା',
	'wminc-testwiki' => 'ଟେଷ୍ଟ ଉଇକି:',
	'wminc-testwiki-code' => 'ଟେଷ୍ଟ ଉଇକି ଭାଷା:',
	'wminc-recentchanges-all' => 'ସବୁ ନଗଦ ବଦଳ',
	'wminc-viewuserlang-user' => 'ବ୍ୟବହାରକାରୀଙ୍କ ନାମ:',
	'group-test-sysop-member' => '{{GENDER:$1|ଟେଷ୍ଟ ଉଇକି ପରିଚାଳକ}}',
	'grouppage-test-sysop' => '{{ns:project}}:ଟେଷ୍ଟ ଉଇକି ପରିଚାଳକଗଣ',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'wminc-testwiki-none' => 'Ken/All',
	'wminc-viewuserlang-user' => 'Yuuser-Naame:',
	'wminc-viewuserlang-go' => 'Hole',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'wminc-searchwiki-inputlanguage' => 'Inde Schbrooch:',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Leinad
 * @author Sp5uhe
 * @author ToSter
 */
$messages['pl'] = array(
	'wminc-desc' => 'Testowa wiki dla Inkubatora Wikimedia',
	'wminc-manual' => 'Podręcznik',
	'wminc-listwikis' => 'Spis wiki',
	'wminc-testwiki' => 'Testowa wiki',
	'wminc-testwiki-code' => 'Język testowej wiki',
	'wminc-testwiki-none' => 'Żadna lub wszystkie',
	'wminc-recentchanges-all' => 'Wszystkie ostatnie zmiany',
	'wminc-prefinfo-language' => 'Język interfejsu (niezależny od języka testowej wiki)',
	'wminc-prefinfo-code' => 'Kod języka według ISO 639',
	'wminc-prefinfo-project' => 'Wybierz projekt Wikimedia, na którym będziesz pracować',
	'wminc-prefinfo-error' => 'Został wybrany projekt, który wymaga podania kodu języka.',
	'wminc-error-move-unprefixed' => 'Błąd – strona, którą próbujesz przenieść [[{{MediaWiki:Wminc-error-help}}|nie ma lub ma zły przedrostek]]!',
	'wminc-error-wronglangcode' => "'''Błąd''' – w treści strony odnaleziono [[{{MediaWiki:Wminc-error-help}}|błędny kod języka]] „$1“!",
	'wminc-error-unprefixed' => "'''Błąd''' – ta strona nie ma [[{{MediaWiki:Wminc-error-help}}|przedrostka]]!",
	'wminc-error-unprefixed-suggest' => "'''Błąd''' – ta strona nie ma [[{{MediaWiki:Wminc-error-help}}|przedrostka]]! Możesz utworzyć stronę [[:$1]].",
	'wminc-error-wiki-exists' => 'Taka wiki już istnieje. Możesz odnaleźć tę stronę na $1. Jeśli wiki została utworzona niedawno, poczekaj kilka godzin lub dni, aż cała zawartość zostanie zaimportowana.',
	'wminc-error-wiki-sister' => 'Niniejsza strona znajduje się w projekcie, który nie znajduje się tutaj. Przejdź do $1, aby znaleźć właściwą wiki.',
	'randombytest' => 'Losowa strona testowej wiki',
	'randombytest-nopages' => 'W Twojej testowej wiki brak jest stron w przestrzeni nazw $1.',
	'wminc-viewuserlang' => 'Sprawdzanie języka użytkownika i testowej wiki',
	'wminc-viewuserlang-user' => 'Nazwa użytkownika',
	'wminc-viewuserlang-go' => 'Pokaż',
	'wminc-userdoesnotexist' => 'Użytkownik „$1” nie istnieje.',
	'wminc-ip' => '„$1“ to adres IP.',
	'right-viewuserlang' => 'Podgląd języka użytkownika oraz testowej wiki',
	'group-test-sysop' => 'Administratorzy testowej wiki',
	'group-test-sysop-member' => '{{GENDER:$1|administrator|administratorka}} testowej wiki',
	'grouppage-test-sysop' => '{{ns:project}}:Administratorzy testowej wiki',
	'wminc-code-macrolanguage' => '[[Wikipedia:$2 language|Język $3]] jest [[wikipedia:ISO 639 macrolanguage|makrojęzykiem]], zawierającym następujące warianty języka:',
	'wminc-code-collective' => 'Kod „$1“ nie odnosi się do jednego języka, a do kolekcji języków – [[wikipedia:$2 language|$3]].',
	'wminc-code-retired' => 'Ten kod języka został zmieniony i nie odnosi się do wcześniej przypisanego mu języka.',
	'wminc-listusers-testwiki' => 'Przeglądasz użytkowników, którzy ustawili w swoich preferencjach testową wiki na $1.',
	'wminc-search-nocreate-nopref' => 'Wyszukiwano " $1 ". Ustaw [[Special:Preferences|preferencje testowe wiki]] by można było wskazać strony jakie można utworzyć!',
	'wminc-search-nocreate-suggest' => 'Wyszukiwano "$1". Można utworzyć stronę w wiki na <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Wyszukaj wiki',
	'wminc-searchwiki-noproject' => 'Nie wybrano projektu.',
	'wminc-searchwiki-noresults' => 'Brak wyników. Można wyszukiwać według kodów języka, macierzystych nazw w języku interfejsu lub angielskim.',
	'wminc-searchwiki-selectproject' => 'Wyszukaj:',
	'wminc-searchwiki-inputlanguage' => 'W języku:',
	'wminc-searchwiki-go' => 'Przejdź',
	'wminc-searchwiki-multiplematches' => 'Wyszukiwania pasuje do następujących języków:',
	'wminc-searchwiki-match-langcode' => '" $1 " jest kodem języka: $2 w standardzie ISO 639.',
	'wminc-searchwiki-match-userlangname' => '$1 jest nazwą języka.',
	'wminc-searchwiki-match-englishname' => '" $1 " jest nazwą  $2  w języku angielskim.',
	'wminc-searchwiki-match-nativename' => '" $1 " jest nazwą  $2  w tym języku.',
	'wminc-searchwiki-gotoinfopage' => 'strony informacyjnej',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'wminc-desc' => 'Preuva ël sistema ëd wiki për Wikimedia Incubator',
	'wminc-manual' => 'Manual',
	'wminc-listwikis' => 'Lista ëd wiki',
	'wminc-testwiki' => 'Preuva wiki:',
	'wminc-testwiki-code' => 'Lenga dla wiki ëd preuva:',
	'wminc-testwiki-none' => 'Gnun/Tùit',
	'wminc-recentchanges-all' => "Tute j'ùltime modìfiche",
	'wminc-prefinfo-language' => "Toa lenga d'antërfacia - andipendenta da toa wiki ëd preuva",
	'wminc-prefinfo-code' => 'Ël còdes ISO 639 dla lenga',
	'wminc-prefinfo-project' => "Selession-a ël proget Wikimedia (l'opsion Incubator a l'é për utent che a fan travaj general)",
	'wminc-prefinfo-error' => "It l'has selessionà un proget che a l'ha dbzògn d'un còdes ëd lenga.",
	'wminc-error-move-unprefixed' => "Eror: La pàgina ch'a l'ha provà a tramudé a [[{{MediaWiki:Wminc-error-help}}|a l'ha pa 'd prefiss o a l'ha un prefiss cioch]]!",
	'wminc-error-wronglangcode' => "'''Eror:''' Costa pàgina a conten un [[{{MediaWiki:Wminc-error-help}}|còdes ëd lenga cioch]] «$1»!",
	'wminc-error-unprefixed' => "'''Eror:''' Costa pagina a l'ha [[{{MediaWiki:Wminc-error-help}}|pa 'd prefiss]]!",
	'wminc-error-unprefixed-suggest' => "'''Eror:''' Costa pàgina a l'ha [[{{MediaWiki:Wminc-error-help}}|pa 'd prefiss]]! A peul creé na pàgina a [[:$1]].",
	'wminc-error-wiki-exists' => "Sta wiki a esist già. A peul trové sa pàgina su $1. Se la wiki a l'é stàita creà da pòch, për piasì ch'a speta chèich ore o di fin a che ël contnù a sia amportà.",
	'wminc-error-wiki-sister' => "Costa pàgina a aparten a un proget ch'a l'é pa ospità ambelessì. Për piasì, ch'a va a $1 për trové la wiki.",
	'randombytest' => 'Pàgina a cas da wiki ëd preuva',
	'randombytest-nopages' => 'A-i son pa ëd pàgine ant toa wiki ëd preuva, ant lë spassi nominal: $1:',
	'wminc-viewuserlang' => "varda la lenga dl'utent e preuva la wiki",
	'wminc-viewuserlang-user' => 'Nòm utent:',
	'wminc-viewuserlang-go' => 'Va',
	'wminc-userdoesnotexist' => 'L\'utent "$1" a esist pa.',
	'wminc-ip' => '"$1" a l\'é n\'adrëssa IP.',
	'right-viewuserlang' => "Visualisa lenga dl'utent e wiki ëd preuva",
	'group-test-sysop' => 'Aministrator ëd la wiki ëd preuva',
	'group-test-sysop-member' => '{{GENDER:$1|aministrator ëd la wiki ëd preuva}}',
	'grouppage-test-sysop' => '{{ns:project}}:Aministrator ëd la wiki ëd preuva',
	'wminc-code-macrolanguage' => "La [[wikipedia:$2 language|lenga «$3»]] a l'é na [[wikipedia:ISO 639 macrolenga|macrolenga]], ch'a consist ëd le lenghe sì-dapress:",
	'wminc-code-collective' => 'Ël còdes «$1» as riferiss pa a na lenga spessìfica, ma a na colession ëd lenghe, visadì le [[wikipedia:$2 language|lenghe «$3»]].',
	'wminc-code-retired' => "Cost còdes ëd lenga a l'é stàit cangià e as arferiss pa pi a la lenga originaria.",
	'wminc-listusers-testwiki' => "A l'é an camin ch'a vëd j'utent ch'a l'han ampostà ij sò gust ëd wiki ëd preuva a $1.",
	'wminc-search-nocreate-nopref' => "A l'ha arsercà «$1». Për piasì, ch'a ampòsta ij [[Special:Preferences|sò gust dla wiki ëd preuva]] parèj i podoma dije che pàgina a peul creé!",
	'wminc-search-nocreate-suggest' => "A l'ha arsercà «$1». A peul creé na pàgina an soa wiki a <strong>[[$2]]</strong>!",
);

/** Pontic (Ποντιακά)
 * @author Omnipaedista
 */
$messages['pnt'] = array(
	'wminc-viewuserlang-go' => 'Δέβα',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'wminc-listwikis' => 'د ويکي ګانو لړليک',
	'wminc-testwiki' => 'د آزمېښت ويکي:',
	'wminc-testwiki-code' => 'د ويکي ژبه آزمويل:',
	'wminc-testwiki-none' => 'هېڅ/ټول',
	'wminc-recentchanges-all' => 'ټول وروستي بدلونونه',
	'wminc-prefinfo-code' => 'د ISO 639 ژبې کوډ',
	'wminc-viewuserlang-user' => 'کارن-نوم:',
	'wminc-viewuserlang-go' => 'ورځه',
	'wminc-userdoesnotexist' => 'د $1 په نوم کارن نشته.',
	'wminc-ip' => '"$1" يوه آی پي پته ده.',
	'wminc-searchwiki' => 'د يو ويکي پلټنه',
	'wminc-searchwiki-selectproject' => 'پلټنه د:',
	'wminc-searchwiki-inputlanguage' => 'په ژبې د:',
	'wminc-searchwiki-go' => 'ورځه',
	'wminc-searchwiki-gotoinfopage' => 'د مخ مالومات',
	'wminc-fs-langselect-title' => 'ژبه ټاکل',
	'wminc-fs-startwiki-title' => 'ويکي مو پيل کړۍ',
	'wminc-fs-pagetitle-done' => ' - ترسره شو!',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Lijealso
 * @author Malafaya
 * @author MetalBrasil
 * @author SandroHc
 * @author Waldir
 */
$messages['pt'] = array(
	'wminc-desc' => 'Sistema de wikis de testes para a Incubadora Wikimedia',
	'wminc-manual' => 'Manual',
	'wminc-listwikis' => 'Lista de wikis',
	'wminc-testwiki' => 'Wiki de testes:',
	'wminc-testwiki-code' => 'Língua da wiki de teste:',
	'wminc-testwiki-none' => 'Nenhum/Tudo',
	'wminc-recentchanges-all' => 'Todas as mudanças recentes',
	'wminc-prefinfo-language' => 'A língua da interface - independente da língua da sua wiki de testes',
	'wminc-prefinfo-code' => 'O código ISO 639 da língua em que está a trabalhar',
	'wminc-prefinfo-project' => 'Seleccione o projecto Wikimedia em que está a trabalhar',
	'wminc-prefinfo-error' => 'Seleccionou um projecto que necessita de um código de língua.',
	'wminc-error-move-unprefixed' => 'Erro: A página de destino [[{{MediaWiki:Wminc-error-help}}|não tem prefixo ou tem um prefixo incorrecto]]!',
	'wminc-error-wronglangcode' => "'''Erro:''' A página contém um [[{{MediaWiki:Wminc-error-help}}|código de língua incorrecto]]: \"\$1\"!",
	'wminc-error-unprefixed' => "'''Erro:''' Esta página [[{{MediaWiki:Wminc-error-help}}|não tem prefixo]]!",
	'wminc-error-unprefixed-suggest' => "'''Erro:''' Esta página [[{{MediaWiki:Wminc-error-help}}|não tem prefixo]]! Pode criar uma página em [[:$1]].",
	'wminc-error-wiki-exists' => 'Esta wiki já existe. Encontra esta página em $1. Se a wiki foi criada recentemente, aguarde algumas horas ou dias até que todo o conteúdo tenha sido importado.',
	'wminc-error-wiki-sister' => 'Esta página pertence a um projeto que não é hospedado aqui. Por favor, encaminhe-se para $1 para achar a wiki.',
	'randombytest' => 'Página aleatória da wiki de testes',
	'randombytest-nopages' => 'Não há páginas na sua wiki de testes, no espaço nominal: $1.',
	'wminc-viewuserlang' => 'Procurar a língua do utilizador e a wiki de testes',
	'wminc-viewuserlang-user' => 'Nome de utilizador:',
	'wminc-viewuserlang-go' => 'Prosseguir',
	'wminc-userdoesnotexist' => 'O utilizador "$1" não existe.',
	'wminc-ip' => '"$1" é um endereço de IP.',
	'right-viewuserlang' => 'Ver língua do utilizador e wiki de testes',
	'group-test-sysop' => 'Administradores da wiki de testes',
	'group-test-sysop-member' => 'administrador da wiki de testes',
	'grouppage-test-sysop' => '{{ns:project}}:Administradores da wiki de testes',
	'wminc-code-macrolanguage' => 'A [[wikipedia:$2 language|língua "$3"]] é uma [[wikipedia:ISO 639 macrolanguage|macrolíngua]], composta pelas seguintes línguas:',
	'wminc-code-collective' => 'O código "$1" não se refere a uma língua específica, mas sim a um conjunto de línguas, nomeadamente as [[wikipedia:$2 language|línguas "$3"]].',
	'wminc-code-retired' => 'O código de língua foi alterado e já não se refere à língua original.',
	'wminc-listusers-testwiki' => 'Você está a visualizar os usuários que tem suas preferências de test wiki a $1.',
	'wminc-search-nocreate-nopref' => 'Tu procuras-te "$1". Por favor, coloca a tua [[Special:Preferences|preferência de wiki de testes]] para nós podermos dizer-te que página podes criar!',
	'wminc-search-nocreate-suggest' => 'Tu procuras-te "$1". Podes criar uma página na tua wiki em <strong>[[$2]]</strong>!',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 * @author Helder.wiki
 * @author Heldergeovane
 * @author Jaideraf
 * @author MetalBrasil
 * @author Pedroca cerebral
 */
$messages['pt-br'] = array(
	'wminc-desc' => 'Sistema de wikis de teste para a Incubadora Wikimedia',
	'wminc-manual' => 'Manual',
	'wminc-listwikis' => 'Lista de wikis',
	'wminc-testwiki' => 'Wiki de teste:',
	'wminc-testwiki-code' => 'Língua da wiki de teste:',
	'wminc-testwiki-none' => 'Nenhum/Tudo',
	'wminc-recentchanges-all' => 'Todas as mudanças recentes',
	'wminc-prefinfo-language' => 'Seu idioma de interface - independente do seu wiki de teste',
	'wminc-prefinfo-code' => 'O código de língua ISO 639',
	'wminc-prefinfo-project' => 'Selecione o projeto Wikimedia (a opção Incubadora é para usuários que fazem trabalho geral)',
	'wminc-prefinfo-error' => 'Você selecionou um projeto que necessita de um código de língua.',
	'wminc-error-move-unprefixed' => 'Erro: A página que você está tentando mover para [[{{MediaWiki:Wminc-error-help}}|é aprefixada ou tem um prefixo incorreto]]!',
	'wminc-error-wronglangcode' => "'''Erro:''' Esta página contém um [[{{MediaWiki:Wminc-error-help}}|código de linguagem errado]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Erro:''' Esta página é [[{{MediaWiki:Wminc-error-help}}|aprefixada]]!",
	'wminc-error-unprefixed-suggest' => "'''Erro:''' Esta página é [[{{MediaWiki:Wminc-error-help}}|aprefixada]]! Você pode criar uma página em [[:$1]].",
	'wminc-error-wiki-exists' => 'Este wiki já existe. Encontre esta página em $1. Se o wiki foi criado recentemente, aguarde algumas horas ou dias até que todo o conteúdo seja importado.',
	'wminc-error-wiki-sister' => 'Essa página pertence a um projeto que não está hospedado aqui. Por favor, vá para $1 para achar o wiki.',
	'randombytest' => 'Página aleatória da wiki de testes',
	'randombytest-nopages' => 'Não há páginas em sua wiki de testes no domínio: $1',
	'wminc-viewuserlang' => 'Procurar idioma do utilizador e wiki de teste',
	'wminc-viewuserlang-user' => 'Nome de usuário:',
	'wminc-viewuserlang-go' => 'Ir',
	'wminc-userdoesnotexist' => 'A conta de usuário "$1" não existe.',
	'wminc-ip' => '"$1" é um endereço de IP.',
	'right-viewuserlang' => 'Ver idioma do usuário e wiki de teste',
	'group-test-sysop' => 'Administradores da Test wiki',
	'group-test-sysop-member' => '{{GENDER:$1|administrador|administradora}} da wiki de testes',
	'grouppage-test-sysop' => '{{ns:project}}:Administradores da Testwiki',
	'wminc-code-macrolanguage' => 'A [[wikipedia:$2 língua|"$3" língua]] é uma [[wikipedia:ISO 639 macrolíngua|macrolíngua]], consistindo das seguintes línguas:',
	'wminc-code-collective' => 'O código "$1" não se refere a uma mensagem específica, mas a uma coleção de línguas, nomeadas a [[wikipedia:$2 language|"$3" línguas]].',
	'wminc-code-retired' => 'Este código de idioma foi mudado e já não se refere à língua original.',
	'wminc-listusers-testwiki' => 'Você está visualizando os usuários que criaram sua preferência de teste para $1.',
	'wminc-search-nocreate-nopref' => 'Você procura por "$1". Por favor, configure sua [[Special:Preferences|preferência de wiki de testes]] para nós podermos lhe dizer que página poderá criar!',
	'wminc-search-nocreate-suggest' => 'Você procura por "$1 ". Você pode criar uma página na sua wiki em <strong>[[$2]]</strong>!',
);

/** Runa shimi (Runa shimi)
 * @author Sylvain2803
 */
$messages['qug'] = array(
	'wminc-manual' => 'Yachachik kamu',
	'wminc-listwikis' => 'Tukuy wikikuna',
	'wminc-testwiki' => 'Nara wiñachishka wiki',
	'wminc-testwiki-code' => 'Nara wiñachishka wikipak shimi:',
	'wminc-testwiki-none' => 'Nishuk/Tukuykuna',
	'wminc-recentchanges-all' => 'Tukuy mushuk killkaykuna',
	'wminc-prefinfo-language' => "Kikinpak ''interface'' shimi (shina kakpi, mana kikinpak wikipak shimi shina kanka)",
	'wminc-prefinfo-code' => 'ISO 639 shimi yupay',
	'wminc-prefinfo-project' => "Maykan Wikimedia proyectota nipay (maypipash llankanata munakpi, ''Incubator''-ta churapay)",
	'wminc-prefinfo-error' => 'Chay proyectota akllashkamanta, shimi yupayta charanami kapanki',
	'wminc-error-move-unprefixed' => 'Maykanpash pankaman chayta apakuna munapanki, chay pankaka [[{{MediaWiki:Wminc-error-help}}|nalli prefixota charinchu]]!',
	'wminc-error-wronglangcode' => "'''Pantay:''' chay pankaka shuk [[{{MediaWiki:Wminc-error-help}}|pandashka shimi yupayta]] charinmi (\"\$1\")!",
	'wminc-error-unprefixed' => "'''Pantay:''' Kay pankaka [[{{MediaWiki:Wminc-error-help}}|prefixota illan]]!",
);

/** Romanian (română)
 * @author Emily
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Minisarm
 */
$messages['ro'] = array(
	'wminc-desc' => 'Sistemul wiki de testare pentru Wikimedia Incubator',
	'wminc-manual' => 'Manual de utilizare',
	'wminc-listwikis' => 'Listă de wikiuri',
	'wminc-testwiki' => 'Wiki de test:',
	'wminc-testwiki-code' => 'Limba wikiului de test:',
	'wminc-testwiki-none' => 'Niciunul/Toți',
	'wminc-testwiki-site' => '(Întreținere)',
	'wminc-recentchanges-all' => 'Toate modificările recente',
	'wminc-prefinfo-language' => 'Limba interfeței dumneavoastră – independentă de wikiul de test',
	'wminc-prefinfo-code' => 'Codul ISO 639 al limbii cu care lucrați aici',
	'wminc-prefinfo-project' => 'Selectați proiectul Wikimedia la care lucrați aici',
	'wminc-prefinfo-error' => 'Ați selectat un proiect care are nevoie de un cod de limbă.',
	'wminc-error-move-unprefixed' => 'Eroare: Pagina pe care încercați să o redenumiți [[{{MediaWiki:Wminc-error-help}}|este fără prefix sau are un prefix greșit]]!',
	'wminc-error-wronglangcode' => "'''Eroare:''' Această pagină conține un [[{{MediaWiki:Wminc-error-help}}|cod de limbă greșit]]: „$1”!",
	'wminc-error-unprefixed' => "'''Eroare:''' Această pagină este [[{{MediaWiki:Wminc-error-help}}|fără prefix]]!",
	'wminc-error-unprefixed-suggest' => "'''Eroare:''' Această pagină este [[{{MediaWiki:Wminc-error-help}}|fără prefix]]! Puteți crea o pagină la [[:$1]].",
	'wminc-error-wiki-exists' => 'Acest wiki există deja. Puteți găsi această pagină pe $1. Dacă acest wiki a fost creat recent, așteptați câteva ore sau zile până când tot conținutul este importat.',
	'wminc-error-wiki-sister' => 'Această pagină aparține unui proiect care nu este găzduit aici. Mergeți la $1 pentru a găsi wikiul.',
	'randombytest' => 'Pagina aleatorie de wiki de încercare',
	'randombytest-nopages' => 'Nu există pagini în acest wiki de încercare, în spațiul de nume: $1.',
	'wminc-viewuserlang' => 'Căutare limba utilizatorului și wikiul de test',
	'wminc-viewuserlang-user' => 'Nume de utilizator:',
	'wminc-viewuserlang-go' => 'Du-te',
	'wminc-userdoesnotexist' => 'Utilizatorul „$1” nu există.',
	'wminc-ip' => '„$1” este o adresă IP.',
	'right-viewuserlang' => 'Vizualizează limba utilizatorului și testează wikiul',
	'group-test-sysop' => 'Administratori wiki de încercare',
	'group-test-sysop-member' => '{{GENDER:$1|administrator de wiki destinat testelor}}',
	'grouppage-test-sysop' => '{{ns:project}}:Administratori wiki de încercare',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Limba „$3”]] este o [[wikipedia:ro:ISO 639 macrolimbă|macrolimbă]], incluzând următoarele limbi:',
	'wminc-searchwiki-noproject' => 'Nu ați selectat un proiect.',
	'wminc-searchwiki-selectproject' => 'De căutat:',
	'wminc-searchwiki-inputlanguage' => 'În limba:',
	'wminc-searchwiki-go' => 'Du-te',
	'wminc-searchwiki-multiplematches' => 'Căutarea dumneavoastră corespunde următoarelor limbi:',
	'wminc-searchwiki-match-langcode' => '„$1” este un cod de limbă ISO 639 pentru $2.',
	'wminc-searchwiki-match-userlangname' => '$1 este numele unei limbi.',
	'wminc-searchwiki-match-englishname' => '„$1” este numele limbii $2 în engleză.',
	'wminc-searchwiki-match-nativename' => '„$1” este numele limbii $2 în respectiva limbă.',
	'wminc-searchwiki-gotoinfopage' => 'pagină informativă',
	'wminc-fs-langselect-title' => 'Selectare limbă',
	'wminc-fs-signup-title' => 'Înregistrare',
	'wminc-fs-userpage-title' => 'Creați-vă pagina de utilizator',
	'wminc-fs-pagetitle-done' => ' – realizat!',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'wminc-desc' => 'Test pu sisteme Uicchi pe UicchiMedia Incubatore',
	'wminc-manual' => 'Manuale',
	'wminc-listwikis' => 'Elenghe de le Uicchi',
	'wminc-testwiki' => 'Test de Uicchi:',
	'wminc-testwiki-code' => "Lènghe d'a uicchi de test:",
	'wminc-testwiki-none' => 'Nisciune/Tutte',
	'wminc-testwiki-site' => '(Manutenzione)',
	'wminc-recentchanges-all' => "Tutte l'urteme cangiaminde",
	'wminc-prefinfo-language' => "L'inderfacce indipendende de lènghe da 'u teste tue de Uicchi",
	'wminc-prefinfo-code' => "'U codece ISO 639 d'a lènghe sus a 'u quale tu ste fatìe",
	'wminc-prefinfo-project' => "Scacchie 'u proggette UicchiMedia sus a 'u quale tu vuè ccu fatìe",
	'wminc-prefinfo-error' => "Tu è scacchiate 'nu proggette ca abbesogne de 'nu codece de lènghe.",
	'wminc-error-unprefixed' => "'''Errore:''' Sta pàgene jè [[{{MediaWiki:Wminc-error-help}}|senza prefisse]]!",
	'wminc-error-unprefixed-suggest' => "'''Errore:''' Sta pàgene jè [[{{MediaWiki:Wminc-error-help}}|senza prefisse]]! Tu puè ccreja 'na pàgene a [[:$1]].",
	'randombytest' => 'Pàgene a uecchie pe testà Uicchi',
	'randombytest-nopages' => "Non ge stonne pàggene jndr'à Uicchi de test, jndr'à 'u namespace: $1.",
	'wminc-viewuserlang' => "Combronde 'mbrà 'a lènghe de l'utende e 'u teste de Uicchi",
	'wminc-viewuserlang-user' => "Nome de l'utende:",
	'wminc-viewuserlang-go' => 'Veje',
	'wminc-userdoesnotexist' => 'L\'utende "$1" non g\'esiste.',
	'wminc-ip' => '"$1" jè \'n\'indirizze IP.',
	'right-viewuserlang' => "Vide 'a lènghe de l'utende e teste Uicchi",
	'group-test-sysop' => 'Test amministrature de uicchi',
	'group-test-sysop-member' => "{{GENDER:$1|amministratore d'a uicchi de test}}",
	'grouppage-test-sysop' => '{{ns:project}}:Test amministrature de uicchi',
	'wminc-searchwiki-go' => 'Véje',
	'wminc-fs-pagetitle-done' => '- apposte!',
);

/** Russian (русский)
 * @author Adata80
 * @author Alexandr Efremov
 * @author Ferrer
 * @author Kaganer
 * @author Kv75
 * @author MaxSem
 * @author Renessaince
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'wminc-desc' => 'Пробная вики-система для Инкубатора Викимедиа',
	'wminc-manual' => 'Руководство',
	'wminc-listwikis' => 'Список наших проектов',
	'wminc-testwiki' => 'Пробная вики:',
	'wminc-testwiki-code' => 'Язык пробной вики:',
	'wminc-testwiki-none' => 'Нет/все',
	'wminc-recentchanges-all' => 'Все недавние правки',
	'wminc-prefinfo-language' => 'Ваш язык интерфейса не зависит от вашей пробной вики',
	'wminc-prefinfo-code' => 'Код языка по ISO 639',
	'wminc-prefinfo-project' => 'Выбор проекта Викимедиа (выберите Инкубатор, если занимаетесь общими вопросами)',
	'wminc-prefinfo-error' => 'Вы выбрали проект, для которого необходимо указать код языка.',
	'wminc-error-move-unprefixed' => 'Ошибка. Страница, в которую вы пытаетесь переименовать, [[{{MediaWiki:Wminc-error-help}}|имеет ошибочный префикс или не имеет его вообще]]!',
	'wminc-error-wronglangcode' => "'''Ошибка.''' Страница содержит [[{{MediaWiki:Wminc-error-help}}|неправильный код языка]] «$1»!",
	'wminc-error-unprefixed' => "'''Ошибка.''' Эта страница [[{{MediaWiki:Wminc-error-help}}|не имеет префикса]]!",
	'wminc-error-unprefixed-suggest' => "'''Ошибка.''' Эта страница [[{{MediaWiki:Wminc-error-help}}|не имеет префикса]]! Вы можете создать страницу [[:$1]].",
	'wminc-error-wiki-exists' => 'Эта вики уже существует. Вы можете найти эту страницу на $1. Если вики была создана недавно, пожалуйста, подождите несколько часов или дней, пока все содержимое импортируется.',
	'wminc-error-wiki-sister' => 'Эта страница относится к проекту, который здесь не располагается. Пожалуйста, перейдите на $1, чтобы найти вики.',
	'randombytest' => 'Случайная страница пробной вики',
	'randombytest-nopages' => 'В вашей пробной вики нет страниц в пространстве имён $1.',
	'wminc-viewuserlang' => 'Поиск языковых настроек участника и его пробной вики',
	'wminc-viewuserlang-user' => 'Имя участника:',
	'wminc-viewuserlang-go' => 'Найти',
	'wminc-userdoesnotexist' => 'Участник «$1» не существует',
	'wminc-ip' => '«$1» не является IP-адресом.',
	'right-viewuserlang' => 'просматривать языковые настройки участника и его пробную вики',
	'group-test-sysop' => 'Администраторы пробной вики',
	'group-test-sysop-member' => '{{GENDER:$1|Администратор пробной вики}}',
	'grouppage-test-sysop' => '{{ns:project}}:Администраторы пробной вики',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Язык «$3»]] считается [[wikipedia:ISO 639 macrolanguage|макроязыком]], состоящим из следующих языков:',
	'wminc-code-collective' => 'Код «$1» относится не к конкретному языку, а к группе из нескольких языков, под общим названием [[wikipedia:$2 language|«$3»]].',
	'wminc-code-retired' => 'Этот код языка был изменён и больше не ссылается на определённый язык.',
	'wminc-listusers-testwiki' => 'Вы просматриваете список участников, в персональных настройках которых в качестве пробной вики указан проект $1.',
	'wminc-search-nocreate-nopref' => 'Вы искали «$1». Пожалуйста, задайте свои [[Special:Preferences|персональные настройки пробной вики]], чтобы мы могли подсказать вам, какие страницы вы можете создавать!',
	'wminc-search-nocreate-suggest' => 'Вы искали «$1». Вы можете создать в своей вики страницу <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Поиск по вики',
	'wminc-searchwiki-noproject' => 'Вы не выбрали проект.',
	'wminc-searchwiki-noresults' => 'Нет результатов. Вы можете искать коды языков, исходные названия и названия на своём языке интерфейса или на английском.',
	'wminc-searchwiki-selectproject' => 'Поиск по:',
	'wminc-searchwiki-inputlanguage' => 'по языку:',
	'wminc-searchwiki-go' => 'Перейти',
	'wminc-searchwiki-multiplematches' => 'Вашему запросу соответствуют следующие языки:',
	'wminc-searchwiki-match-langcode' => '«$1» — это код ISO 639 для языка «$2».',
	'wminc-searchwiki-match-userlangname' => '$1— название языка.',
	'wminc-searchwiki-match-englishname' => '«$1» — английское название языка «$2».',
	'wminc-searchwiki-match-nativename' => '«$1» — самоназвание языка «$2».',
	'wminc-searchwiki-gotoinfopage' => 'страница информации',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'wminc-desc' => 'Тестова вікі про Інкубатор Вікімедіа',
	'wminc-manual' => 'Інштрукція',
	'wminc-listwikis' => 'Список вікіпроєктів',
	'wminc-testwiki' => 'Вікі про тестованя:',
	'wminc-testwiki-none' => 'Ніч/Вшытко',
	'wminc-recentchanges-all' => 'Вшыткы послїднї зміны',
	'wminc-prefinfo-language' => 'Ваш язык інтерфейсу не залежыть од языка тестовой вікі',
	'wminc-prefinfo-code' => 'Языковый код ISO 639',
	'wminc-prefinfo-project' => 'Выбрати проєкт Вікімедія (варіант Інкубатор про тых, што ся занимають общов роботов)',
	'wminc-prefinfo-error' => 'Выбрали сьте проєкт, котрый потребує код языка.',
	'wminc-error-move-unprefixed' => 'Хыба: Сторінка на яку пробуєте переменовати на [[{{MediaWiki:Wminc-error-help}}|не мать префікс або мать планый префікс]]!',
	'wminc-error-wronglangcode' => "'''Хыба:''' Тота сторінка обсягує [[{{MediaWiki:Wminc-error-help}}|неплатный код языка]] \"\$1\"!",
	'wminc-error-unprefixed' => "''Хыва:''' Тота сторінка [[{{MediaWiki:Wminc-error-help}}|не обсягує префіксы]]!",
	'wminc-error-unprefixed-suggest' => "'''Хыба:''' Тота сторінка [[{{MediaWiki:Wminc-error-help}}|не обсягує префікс]]! Можете створити сторінку [[:$1]].",
	'wminc-error-wiki-exists' => 'Тота вікі уж екзістує. Тоту сторінку можете найти на $1. Кідь тота вікі была недавно створена, просиме почекайте пару годин або днїв докы цалый обсяг є імпортованый.',
	'wminc-error-wiki-sister' => 'Тота сторінка належыть до проєкту, котрый не є гостованый ту. Просиме, ідьте до $1, жебы сьте тоту вікі нашли.',
	'randombytest' => 'Трафункова сторінка з тестовой вікі',
	'randombytest-nopages' => 'Во вашій тестовій вікі немає сторінок у просторі мен $1.',
	'wminc-viewuserlang' => 'Выглядати язык тай тестову вікі хоснователя',
	'wminc-viewuserlang-user' => 'Мено хоснователя:',
	'wminc-viewuserlang-go' => 'Перейти',
	'wminc-userdoesnotexist' => 'Хоснователь "$1" не єствує.',
	'wminc-ip' => '"$1" не є IP-адреса.',
	'right-viewuserlang' => 'Відїти языковы наставлиня хоснователя і його тестову вікі',
	'group-test-sysop' => 'Адміністраторы тестовой вікі',
	'group-test-sysop-member' => 'Адміністратор тестовой вікі',
	'grouppage-test-sysop' => '{{ns:project}}:Адміністраторытестовой вікі',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|"$3" язык]] є [[wikipedia:ISO 639 macrolanguage|макроязыком]], што ся складать з наступных языків:',
	'wminc-code-collective' => 'Код "$1" ся не односить до конкретного языка, але до дакількох здруженых під назвов [[wikipedia:$2 language|"$3"]].',
	'wminc-code-retired' => 'Тот код языка быв зміненый і веце не реферує на конкретный язык',
	'wminc-listusers-testwiki' => 'Перезерате хоснователїв, котры наставили їх тест вікі наставлїня на $1.',
);

/** Sanskrit (संस्कृतम्)
 * @author Ansumang
 */
$messages['sa'] = array(
	'wminc-manual' => 'शास्त्र',
	'wminc-listwikis' => 'विकयः सूचि',
	'wminc-viewuserlang-user' => 'योजकनामन्:',
);

/** Sakha (саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'wminc-desc' => 'Бикимиэдьийэ Инкубаатарын тургутар биики-систиэмэтэ',
	'wminc-testwiki' => 'Тургутуллар биики:',
	'wminc-testwiki-none' => 'Суох/Барыта',
	'wminc-prefinfo-language' => 'Эн тылыҥ туруоруута тургутар биикигиттэн тутулуга суох',
	'wminc-prefinfo-code' => 'Тыл ISO 639 тиһилигэр анаммыт куода',
	'wminc-prefinfo-project' => 'Бикимиэдьийэ бырайыактарыттан талыы (уопсай боппуруостарынан дьарыктаныаххын баҕарар буоллаххына Инкубаатары тал)',
	'wminc-viewuserlang' => 'Кыттааччы тыллары талыытын уонна тургутар биикитин көрдөөһүн',
	'wminc-viewuserlang-user' => 'Кытааччы аата:',
	'wminc-viewuserlang-go' => 'Бул',
);

/** Sardinian (sardu)
 * @author Andria
 */
$messages['sc'] = array(
	'wminc-testwiki-none' => 'Nudda/Totu',
	'wminc-viewuserlang-user' => 'Nùmene usuàriu:',
	'wminc-viewuserlang-go' => 'Bae',
);

/** Sicilian (sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'wminc-viewuserlang-go' => "Va'",
);

/** Samogitian (žemaitėška)
 * @author Hugo.arg
 */
$messages['sgs'] = array(
	'wminc-desc' => 'Wiki testasvėma sėstema Vikimedėjės inkubatoriō',
	'wminc-manual' => 'Žėnīns',
	'wminc-listwikis' => 'Viki sārošos',
	'wminc-testwiki' => 'Testavėma wiki:',
	'wminc-testwiki-code' => 'Testavėma wiki kalba:',
	'wminc-testwiki-none' => 'Anėvėins/Vėsė',
	'wminc-recentchanges-all' => 'Vėsė vielībė̄jė pakeitėmā',
	'wminc-prefinfo-language' => 'Tamstas paskīruos kalba - neprėklausuomā nu Tamstas testavėma wiki',
	'wminc-prefinfo-code' => 'ISO 639 kalbuos kuods',
	'wminc-prefinfo-project' => 'Pasirinkat Wikimedia pruojekta (inkobatorė opcėjė īr nauduotuojam katrėi dėrb bendrus darbus)',
	'wminc-prefinfo-error' => 'Tamsta pasėrinkuot pruojekta, katros netor kalbuos kuoda.',
	'wminc-error-move-unprefixed' => 'Klaida: Poslapis, katra nuorat pervadintė [[{{MediaWiki:Wminc-error-help}}|netor prīšdielė aba ons īr bluogs]]!',
	'wminc-error-wronglangcode' => "'''Klaida:''' Tas poslapis tor [[{{MediaWiki:Wminc-error-help}}|bluoga kalbuos kuoda]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Klaida:''' Tas poslapis [[{{MediaWiki:Wminc-error-help}}|netor prīšdielė]]!",
	'wminc-error-unprefixed-suggest' => "'''Klaida:''' Tas poslapis [[{{MediaWiki:Wminc-error-help}}|netor prīšdielė]]! Tamsta galat ana sokortė čiuonās: [[:$1]].",
	'randombytest' => 'Bikuoks poslapis ėš testavėma wiki',
	'wminc-viewuserlang-user' => 'Nauduotuojė vards:',
	'wminc-viewuserlang-go' => 'Ēk',
	'wminc-userdoesnotexist' => 'Nauduotuojė "$1" nier.',
	'wminc-ip' => '" $1 " īr IP adresos.',
	'right-viewuserlang' => 'Veizietė nauduotuojė kalba ė testavėma wiki',
	'grouppage-test-sysop' => '{{ns:project}}: Testavėma wiki admėnėstratuorē',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 kalba|"$3" kalba]] īr [[wikipedia:ISO 639 makrokalba|makrokalba]], katra sodara šėtas kalbas:',
);

/** Tachelhit (Tašlḥiyt/ⵜⴰⵛⵍⵃⵉⵜ)
 * @author Dalinanir
 */
$messages['shi'] = array(
	'wminc-desc' => 'Arm wiki anagraw i Wikimidya Ankubatur',
	'wminc-testwiki' => 'Arm n wiki',
	'wminc-testwiki-none' => 'Walu/kullu',
	'wminc-prefinfo-language' => 'Udm n tutlayt nk.  tbḍa d arm  n wiki',
	'wminc-prefinfo-code' => 'Asngl ISO 639 n tutlayt',
	'wminc-prefinfo-project' => 'Sti tawuri n Wikipedya (Astay n tusnkert ittuyzlay s imsxdamn li skarni tawuri ur ittiyslayn)',
	'wminc-prefinfo-error' => 'Tstit yat tuwuri li iran asngl n tutlayt',
	'randombytest' => 'Tasna nn ḥlli s astay n wiki',
	'randombytest-nopages' => 'Ur gis kra n tasna ɣ warm n wiki, li ittafn assaɣ: $1.',
	'wminc-viewuserlang' => 'Af tutlayt nu amsdaqc tarmt wiki',
	'wminc-viewuserlang-user' => 'Assaɣ nu-msxdan',
	'wminc-viewuserlang-go' => 'Balak',
	'right-viewuserlang' => 'Ẓr Tutlayt nu umsxdam d arm n  wiki',
);

/** Sinhala (සිංහල)
 * @author Calcey
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'wminc-desc' => 'විකි මීඩියා ආසීනකාරකය සඳහා විකි පද්ධතිය පරීක්ෂා කරන්න',
	'wminc-manual' => 'අත්පොත',
	'wminc-listwikis' => 'විකියන් ලැයිස්තුව',
	'wminc-testwiki' => 'විකිය පරීක්ෂා කරන්න:',
	'wminc-testwiki-code' => 'පරීක්ෂක විකි භාෂාව:',
	'wminc-testwiki-none' => 'කිසිවක් නොවේ/සියල්ලම',
	'wminc-testwiki-site' => '(නඩත්තුව)',
	'wminc-recentchanges-all' => 'සියලුම මෑත වෙනස්වීම්',
	'wminc-prefinfo-language' => 'ඔබේ අතුරු මුහුණත් භාෂාව - ඔබේ විකි පරීක්ෂාවෙන් ස්වායත්ත වේ',
	'wminc-prefinfo-code' => 'ISO  639 භාෂා කේතය',
	'wminc-prefinfo-project' => 'විකි මීඩියා ව්‍යාපෘතිය තෝරන්න.(ආසීනකාරක තොරාගැනීම සාමාන්‍ය කාර්යයන් කරන පරිශීලකයන් සඳහා වේ)',
	'wminc-prefinfo-error' => 'භාෂා කේතයක් අවශ්‍ය වන ව්‍යාපෘතියක් ඔබ විසින්  තෝරා ගෙන ඇත.',
	'wminc-error-move-unprefixed' => 'දෝෂය: ඔබ විසින් [[{{MediaWiki:Wminc-error-help}}| වෙත ගෙනයාමට තැත්කරන පිටුව උපසර්ග නොකර ඇත හෝ වැරදි උපසර්ගයක් ඇත]]!',
	'wminc-error-wronglangcode' => "'''දෝෂය:''' මෙම පිටුවෙහි [[{{MediaWiki:Wminc-error-help}}|වැරදි භාෂා කේතය]] \"\$1\" අඩංගු වේ!",
	'wminc-error-unprefixed' => "'''දෝෂය:''' මෙම පිටුව [[{{MediaWiki:Wminc-error-help}}|උපසර්ග කොට නොමැත]]!",
	'wminc-error-unprefixed-suggest' => "'''දෝෂය:''' මෙම පිටුව [[{{MediaWiki:Wminc-error-help}}|උපසර්ග කොට නොමැත]]! ඔබට [[:$1]] හීදී පිටුවක් තැනිය හැක.",
	'wminc-error-wiki-exists' => 'මෙම විකිය දැනටමත් පවතියි. ඔබට $1 හීදි මෙම පිටුව සොයාගත හැක. විකිය මෑතකදී තනා ඇත්නම්, කරුණාකර සියලු අන්තර්ගතයන් ආයාත වෙනතුරු පැය කිහිපයක් හෝ දින කිහිපයක් රැඳී සිටින්න.',
	'wminc-error-wiki-sister' => 'මෙම පිටුව මෙහි සත්කාරකත්වය නොලබන ව්‍යාපෘතියකට අයත් වේ. විකිය සොයාගැනීමට $1 වෙත යන්න.',
	'randombytest' => 'විකි පරීක්ෂාවකින් සසම්භාවී පිවුවක්',
	'randombytest-nopages' => '$1 නාම අවකාශය තුළ,ඔබේ විකි පරීක්ෂාවේ කිසිදු පිටුවක් නොමැත.',
	'wminc-viewuserlang' => 'පරිශීලක භාෂාව බලා විකිය පරීක්ෂා කරන්න.',
	'wminc-viewuserlang-user' => 'පරිශීලක නාමය:',
	'wminc-viewuserlang-go' => 'යන්න',
	'wminc-userdoesnotexist' => '↓ "$1"  පරිශීලක ගිණුම නොපවතියි.',
	'wminc-ip' => '"$1" IP ලිපිනයකි.',
	'right-viewuserlang' => ' පරිශීලක භාෂාව හා විකි පරීක්ෂාව බලන්න.',
	'group-test-sysop' => 'පරීක්ෂක විකි පරිපාලකවරු',
	'group-test-sysop-member' => '{{GENDER:$1|පරීක්ෂක විකි පරිපාලක}}',
	'grouppage-test-sysop' => '{{ns:project}}:පරීක්ෂක විකි පරිපාලකවරු',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|"$3" භාෂාව]] යනු [[wikipedia:ISO 639 macrolanguage|විශාල භාෂාවකි]], එය මෙම භාෂා සමූහයෙන් සමන්විතයි:',
	'wminc-code-collective' => '"$1" කේතය විශේෂිත භාෂාවකට යොමු නොවේ, නමුත් භාෂා එකතුව වෙත, නාමික වශයෙන් [[wikipedia:$2 language|"$3" languages]].',
	'wminc-code-retired' => 'මෙම භාෂා කේතය වෙනස් වී ඇති අතර තව දුරටත් නියම භාෂාවට යොමු කල නොහැක.',
	'wminc-listusers-testwiki' => 'ඔබ නරඹමින් සිටින්නේ  $1 වෙත ඔවුන්ගේ පරීක්ෂක විකි අභිරුචිය සකසා ඇති පරිශීලකයන් වේ.',
	'wminc-search-nocreate-nopref' => '"$1" සඳහා ඔබ සොයන ලදී. කරුණාකර ඔබේ [[Special:Preferences|පරීක්ෂක විකි අභිරුචිය]] සකසන්න එවිට ඔබට තැනිය හැක්කේ කුමන පිටුවද කියා අපට කිව හැක!',
	'wminc-search-nocreate-suggest' => '"$1" සඳහා ඔබ සොයන ලදී. <strong>[[$2]]</strong> හීදී ඔබට ඔබේ විකියේ පිටුවක් තැනිය හැක!',
	'wminc-searchwiki' => 'විකියක් සඳහා සොයන්න',
	'wminc-searchwiki-noproject' => 'ඔබ විසින් ව්‍යාපෘතියක් තෝරාගෙන නොමැත.',
	'wminc-searchwiki-selectproject' => 'මේ සඳහා සොයන්න:',
	'wminc-searchwiki-inputlanguage' => 'භාෂාවෙහි:',
	'wminc-searchwiki-go' => 'යන්න',
	'wminc-searchwiki-match-userlangname' => '$1 යනු භාෂාවක නමකි.',
	'wminc-searchwiki-gotoinfopage' => 'තොරතුරු පිටුව',
	'wminc-fs-pagetitle' => 'පටන් ගැනීමේ මායා අඳුන - $1',
	'wminc-fs-langselect-title' => 'භාෂාව තෝරන්න',
	'wminc-fs-signup-title' => 'ලියාපදිංචි වන්න',
	'wminc-fs-settings-title' => 'ඔබේ විකි අභිරුචිය සකසන්න',
	'wminc-fs-userpage-title' => 'ඔබේ පරිශීලක පිටුව තනන්න',
	'wminc-fs-startwiki-title' => 'ඔබේ විකිය අරඹන්න',
	'wminc-fs-pagetitle-done' => ' - හරි!',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'wminc-desc' => 'Testovací wiki systém pre Inkubátor Wikimedia',
	'wminc-testwiki' => 'Testovacia wiki:',
	'wminc-testwiki-none' => 'Žiadna/všetky',
	'wminc-prefinfo-language' => 'Jazyk vášho rozhrania - nezávisle od vašej testovacej wiki',
	'wminc-prefinfo-code' => 'ISO 639 kód jazyka',
	'wminc-prefinfo-project' => 'Vybrať projekt Wikimedia (voľba Inkubátor je pre používateľov, ktorí vykonávajú všeobecnú prácu)',
	'wminc-prefinfo-error' => 'Vybrali ste projekt, ktorý potrebuje kód jazyka.',
	'randombytest' => 'Náhodná stránka z testovacej wiki',
	'randombytest-nopages' => 'Vo vašej testovacej wiki neexistujú stránky v mennom priestore $1.',
	'wminc-viewuserlang' => 'Vyhľadať jazyk používateľa a testovaciu wiki',
	'wminc-viewuserlang-user' => 'Používateľské meno:',
	'wminc-viewuserlang-go' => 'Vykonať',
	'right-viewuserlang' => 'Zobraziť jazyk používateľa a testovaciu wiki',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'wminc-desc' => 'Preizkusni sistem wiki za Wikimedia Incubator',
	'wminc-manual' => 'Priročnik',
	'wminc-listwikis' => 'Seznam wikijev',
	'wminc-testwiki' => 'Preizkusni wiki:',
	'wminc-testwiki-code' => 'Jezik preizkusnega wikija:',
	'wminc-testwiki-none' => 'Nič/Vse',
	'wminc-recentchanges-all' => 'Vse zadnje spremembe',
	'wminc-prefinfo-language' => 'Vaš jezik vmesnika – neodvisen od vašega preizkusnega wikija',
	'wminc-prefinfo-code' => 'Koda jezika ISO 639, v katerem delate tukaj',
	'wminc-prefinfo-project' => 'Izberite projekt Wikimedie, na katerem tukaj delate',
	'wminc-prefinfo-error' => 'Izbrali ste projekt, ki zahteva kodo jezika.',
	'wminc-error-move-unprefixed' => 'Napaka: Stran, na katero skušate prestaviti, [[{{MediaWiki:Wminc-error-help}}|nima predpone ali ima napačno predpono]]!',
	'wminc-error-wronglangcode' => "'''Napaka:''' Stran vsebuje [[{{MediaWiki:Wminc-error-help}}|napačno kodo jezika]] »$1«!",
	'wminc-error-unprefixed' => "'''Napaka:''' Stran [[{{MediaWiki:Wminc-error-help}}|nima predpone]]!",
	'wminc-error-unprefixed-suggest' => "'''Napaka:''' Stran [[{{MediaWiki:Wminc-error-help}}|nima predpone]]! Stran lahko ustvarite na [[:$1]].",
	'wminc-error-wiki-exists' => 'Wiki že obstaja. Stran lahko najdete na $1. Če je bil wiki ustvarjen pred kratkim, počakajte nekaj ur ali dni, dokler vsa vsebina ni uvožena.',
	'wminc-error-wiki-sister' => 'Ta stran pripada projektu, katerega tukaj ne gostujemo. Prosimo, pojdite na $1, da najdete wiki.',
	'randombytest' => 'Naključna stran preizkusnega wikija',
	'randombytest-nopages' => 'Na vašem wikiju ni strani v imenskem prostoru: $1.',
	'wminc-viewuserlang' => 'Poiščite jezik in preizkusni wiki uporabnika',
	'wminc-viewuserlang-user' => 'Uporabniško ime:',
	'wminc-viewuserlang-go' => 'Pojdi',
	'wminc-userdoesnotexist' => 'Uporabnik »$1« ne obstaja.',
	'wminc-ip' => '»$1« je IP-naslov.',
	'right-viewuserlang' => 'Vpogled v jezik in preizkusni wiki uporabnika',
	'group-test-sysop' => 'Administratorji poskusnega wikija',
	'group-test-sysop-member' => '{{GENDER:$1|administrator|administratorka}} poskusnega wikija',
	'grouppage-test-sysop' => '{{ns:project}}:Administratorji poskusnega wikija',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Jezik »$3«]] je [[wikipedia:ISO 639 macrolanguage|makrojezik]], sestavljen iz naslednjih jezikovnih članov:',
	'wminc-code-collective' => 'Koda »$1« se ne nanaša na določen jezik, ampak na skupino jezikov, in sicer [[wikipedia:$2 language|jeziki »$3«]].',
	'wminc-code-retired' => 'Koda jezika je spremenjena in se več ne nanaša na izvirni jezik.',
	'wminc-listusers-testwiki' => 'Ogledujete si uporabnike, ki so nastavili svojo nastavitev preizkusnega wikija na $1.',
	'wminc-search-nocreate-nopref' => 'Iskali ste »$1«. Prosimo, nastavite svoje [[Special:Preferences|nastavitve preizkusnega wikija]], tako da vam lahko povemo, katere strani lahko ustvarite!',
	'wminc-search-nocreate-suggest' => 'Iskali ste »$1«. Ustvarite lahko stran v vašem wikiju na <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Iskanje wikija',
	'wminc-searchwiki-noproject' => 'Niste izbrali projekta.',
	'wminc-searchwiki-noresults' => 'Ni zadetkov. Iščete lahko po kodah jezika, lokalnih imenih in imenih v vašem jeziku vmesnika ali angleščini.',
	'wminc-searchwiki-selectproject' => 'Išči:',
	'wminc-searchwiki-inputlanguage' => 'V jeziku:',
	'wminc-searchwiki-go' => 'Pojdi',
	'wminc-searchwiki-multiplematches' => 'Vaše iskanje se ujema z naslednjimi jeziki:',
	'wminc-searchwiki-match-langcode' => '»$1« je koda jezika ISO 639 za jezik $2.',
	'wminc-searchwiki-match-userlangname' => '$1 je ime jezika.',
	'wminc-searchwiki-match-englishname' => '»$1« je ime jezika $2 v angleščini.',
	'wminc-searchwiki-match-nativename' => '»$1« je ime jezika $2 v tem jeziku.',
	'wminc-searchwiki-gotoinfopage' => 'stran z informacijami',
);

/** Albanian (shqip) */
$messages['sq'] = array(
	'wminc-listwikis' => 'Lista e projekteve',
);

/** Serbian (Cyrillic script) (‪српски (ћирилица)‬)
 * @author Rancher
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'wminc-desc' => 'Пробни вики-систем за Викимедијин инкубатор',
	'wminc-manual' => 'Приручник',
	'wminc-listwikis' => 'Списак викија',
	'wminc-testwiki' => 'Пробни вики:',
	'wminc-testwiki-code' => 'Језик пробног викија:',
	'wminc-testwiki-none' => 'Ништа/све',
	'wminc-recentchanges-all' => 'Све скорашње измене',
	'wminc-prefinfo-language' => 'Језик корисничког окружења — независно од вашег пробног викија',
	'wminc-prefinfo-code' => 'Језички ISO 639 код',
	'wminc-prefinfo-project' => 'Изаберите пројекат (могућност за Инкубатор је за кориснике који обављају опште задатке)',
	'wminc-prefinfo-error' => 'Изабрали сте пројекат који захтева језички код.',
	'wminc-error-move-unprefixed' => 'Грешка: страница коју желите да преместите [[{{MediaWiki:Wminc-error-help}}|нема предметка или је он погрешан]].',
	'wminc-error-wronglangcode' => "'''Грешка:''' страница садржи [[{{MediaWiki:Wminc-error-help}}|погрешан језички код]] „$1“.",
	'wminc-error-unprefixed' => "'''Грешка:''' страница [[{{MediaWiki:Wminc-error-help}}|нема префикс]].",
	'wminc-error-unprefixed-suggest' => "'''Грешка:''' страница [[{{MediaWiki:Wminc-error-help}}|нема префикс]]. Можете да направите страницу на [[:$1]].",
	'wminc-error-wiki-exists' => 'Овај вики већ постоји. Страницу можете наћи на $1. Ако је вики недавно направљен, сачекајте неколико сати или дана док се не увезе сав садржај.',
	'wminc-error-wiki-sister' => 'Ова страница припада пројекту који се не покреће одавде. Идите на $1 да пронађете вики.',
	'randombytest' => 'Случајна страница од пробног викија',
	'randombytest-nopages' => 'Нема страница у вашем пробном викију, у именском простору: $1.',
	'wminc-viewuserlang' => 'Провери језик корисника и његов пробни вики',
	'wminc-viewuserlang-user' => 'Корисничко име:',
	'wminc-viewuserlang-go' => 'Иди',
	'wminc-userdoesnotexist' => 'Корисник „$1“ не постоји.',
	'wminc-ip' => '„$1“ је ИП адреса.',
	'right-viewuserlang' => 'прегледање корисничког језика и пробног викија',
	'group-test-sysop' => 'Администратори пробног викија',
	'group-test-sysop-member' => '{{GENDER:$1|администратор пробног викија|администраторка пробног викија|администратор пробног викија}}',
	'grouppage-test-sysop' => '{{ns:project}}:Администратори пробног викија',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Језик „$3“]] је [[wikipedia:ISO 639 macrolanguage|макројезик]], који се састоји од следећих језика:',
	'wminc-code-collective' => 'Код „$1“ се не односи на појединачни језик, већ на збир језика под називом [[wikipedia:$2 language|„$3“ језици]].',
	'wminc-code-retired' => 'Овај језички код је измењен и више се не односи на првобитни језик.',
	'wminc-listusers-testwiki' => 'Прегледате кориснике који су пробни вики наместили на $1.',
	'wminc-search-nocreate-nopref' => 'Тражите појам „$1“. Поставите [[Special:Preferences|поставке пробног викија]] да бисмо вам саопштили коју страницу можете да направите.',
	'wminc-search-nocreate-suggest' => 'Тражите појам „$1“. Можете да направите страницу на вашем викију на <strong>[[$2]]</strong>.',
);

/** Serbian (Latin script) (‪srpski (latinica)‬)
 * @author Michaello
 */
$messages['sr-el'] = array(
	'wminc-desc' => 'Probni viki sistem za Vikimedijin Inkubator',
	'wminc-manual' => 'Priručnik',
	'wminc-listwikis' => 'Spisak vikija',
	'wminc-testwiki' => 'Test-Viki:',
	'wminc-testwiki-code' => 'Jezik probnog vikija:',
	'wminc-testwiki-none' => 'Ništa/Sve',
	'wminc-recentchanges-all' => 'Sve skorašnje izmene',
	'wminc-prefinfo-language' => 'Jezik korisničkog okruženja — nezavisno od vašeg probnog vikija',
	'wminc-prefinfo-code' => 'Jezički kod ISO 639',
	'wminc-prefinfo-project' => 'Izaberite projekat (mogućnost za Inkubator je za korisnike koji obavljaju opšte zadatke)',
	'wminc-prefinfo-error' => 'Izabrali ste projekat koji zahteva jezički kod.',
	'wminc-error-move-unprefixed' => 'Greška: stranica koju želite da premestite [[{{MediaWiki:Wminc-error-help}}|nema predmetka ili je on pogrešan]].',
	'wminc-error-wronglangcode' => "'''Greška:''' stranica sadrži [[{{MediaWiki:Wminc-error-help}}|pogrešan jezički kod]] „$1“.",
	'wminc-error-unprefixed' => "'''Greška:''' stranica [[{{MediaWiki:Wminc-error-help}}|nema predmetak]].",
	'wminc-error-unprefixed-suggest' => "'''Greška:''' stranica [[{{MediaWiki:Wminc-error-help}}|nema predmetak]]. Možete da napravite stranicu na [[:$1]].",
	'wminc-error-wiki-exists' => 'Ovaj viki već postoji. Stranicu možete naći na $1. Ako je viki nedavno napravljen, sačekajte nekoliko sati ili dana dok se ne uveze sav sadržaj.',
	'wminc-error-wiki-sister' => 'Ova stranica pripada projektu koji se ne pokreće odavde. Idite na $1 da pronađete viki.',
	'randombytest' => 'Slučajna stranica od probnog vikija',
	'randombytest-nopages' => 'Nema stranica u vašem probnom vikiju, u imenskom prostoru: $1.',
	'wminc-viewuserlang' => 'Proveri jezik korisnika i njegov probni viki',
	'wminc-viewuserlang-user' => 'Korisničko ime:',
	'wminc-viewuserlang-go' => 'Idi',
	'wminc-userdoesnotexist' => 'Korisnik „$1“ ne postoji.',
	'wminc-ip' => '„$1“ je IP adresa.',
	'right-viewuserlang' => 'pregledanje korisničkog jezika i probnog vikija',
	'group-test-sysop' => 'Administratori probnog vikija',
	'group-test-sysop-member' => '{{GENDER:$1|administrator probnog vikija|administratorka probnog vikija|administrator probnog vikija}}',
	'grouppage-test-sysop' => '{{ns:project}}:Administratori probnog vikija',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Jezik „$3“]] je [[wikipedia:ISO 639 macrolanguage|makrojezik]], koji se sastoji od sledećih jezika:',
	'wminc-code-collective' => 'Kod „$1“ se ne odnosi na pojedinačni jezik, već na zbir jezika pod nazivom [[wikipedia:$2 language|„$3“ jezici]].',
	'wminc-code-retired' => 'Ovaj jezički kod je izmenjen i više se ne odnosi na prvobitni jezik.',
	'wminc-listusers-testwiki' => 'Pregledate korisnike koji su probni viki namestili na $1.',
	'wminc-search-nocreate-nopref' => 'Tražite pojam „$1“. Postavite [[Special:Preferences|postavke probnog vikija]] da bismo vam saopštili koju stranicu možete da napravite.',
	'wminc-search-nocreate-suggest' => 'Tražite pojam „$1“. Možete da napravite stranicu na vašem vikiju na <strong>[[$2]]</strong>.',
);

/** Sundanese (Basa Sunda)
 * @author Kandar
 */
$messages['su'] = array(
	'wminc-prefinfo-code' => 'Sandi basa ISO 639',
	'wminc-prefinfo-project' => 'Pilih proyék Wikimédia (pilihan Inkubator pikeun pamaké nu ngahanca pagawéan umum)',
	'wminc-prefinfo-error' => 'Anjeun milih proyék anu merlukeun sandi basa.',
);

/** Swedish (svenska)
 * @author Boivie
 * @author Diupwijk
 * @author Gabbe.g
 * @author Lokal Profil
 * @author Najami
 * @author Ozp
 * @author Poxnar
 * @author Warrakkk
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'wminc-desc' => 'Testwikisystem för Wikimedia Incubator',
	'wminc-manual' => 'Manuell',
	'wminc-listwikis' => 'Lista över wikier',
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-code' => 'Testwiki-språk',
	'wminc-testwiki-none' => 'Ingen/Alla',
	'wminc-recentchanges-all' => 'Alla de senaste ändringarna',
	'wminc-prefinfo-language' => 'Ditt gränssnittsspråk - oavhängigt från din testwiki',
	'wminc-prefinfo-code' => 'ISO 639-språkkoden',
	'wminc-prefinfo-project' => 'Välj Wikimediaprojekt (alternativet Incubator för användare som gör allmänt arbete)',
	'wminc-prefinfo-error' => 'Du valde ett projekt som kräver en språkkod.',
	'wminc-error-move-unprefixed' => 'Fel: Sidan du försöker flytta [[{{MediaWiki:Wminc-error-help}}|är oprefigerad eller har ett felaktigt prefix]]!',
	'wminc-error-wronglangcode' => "'''Fel:''' Denna sida innehåller ett [[{{MediaWiki:Wminc-error-help}}|felaktig språkkod]] \"\$1\"!",
	'wminc-error-unprefixed' => "'''Fel:''' Denna sida är [[{{MediaWiki:Wminc-error-help}}|oprefigerad]]!",
	'wminc-error-unprefixed-suggest' => "'''Fel:''' Denna sida är [[{{MediaWiki:Wminc-error-help}}|oprefigerad]]! Du kan skapa en sida på [[:$1]].",
	'wminc-error-wiki-exists' => 'Denna wiki finns redan. Du hittar denna sida på $1. Om wikin har nyligen skapats, vänta några timmar eller dagar tills allt innehåll har importerats.',
	'wminc-error-wiki-sister' => 'Denna sida tillhör ett projekt som inte finns här. Gå till $1 att hitta wikin.',
	'randombytest' => 'Slumpvis sida från testwiki',
	'randombytest-nopages' => 'Det finns inga sidor i din textwiki, i namnrymden: $1.',
	'wminc-viewuserlang' => 'Kolla upp användarspråk och testwiki',
	'wminc-viewuserlang-user' => 'Användarnamn:',
	'wminc-viewuserlang-go' => 'Gå till',
	'wminc-userdoesnotexist' => 'Användaren "$1" finns inte.',
	'wminc-ip' => '"$1" är en IP-adress.',
	'right-viewuserlang' => 'Visa användarspråk och testwiki',
	'group-test-sysop' => 'Testwiki-administratörer',
	'group-test-sysop-member' => '{{GENDER:$1|testwiki-administratör}}',
	'grouppage-test-sysop' => '{{ns:project}}:Testwiki-administratörer',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|Språket "$3"]] är en [[wikipedia:ISO 639 macrolanguage|makrospråk]], som består av följande medlemsspråk:',
	'wminc-code-collective' => 'Koden "$1" refererar inte till ett visst språk, utan en samling av språk, nämligen [[wikipedia:$2 language|"$3"-språken]].',
	'wminc-code-retired' => 'Denna språkkod har ändrats och hänvisar inte längre till det ursprungliga språket.',
	'wminc-listusers-testwiki' => 'Du visar användare som har ställt in sina testwiki-inställningar på $1.',
	'wminc-search-nocreate-nopref' => 'Du sökte på "$1". Vänligen ange dina [[Special:Preferences|inställningar för testwiki]] så att vi kan tala om vilken sida du kan skapa!',
	'wminc-search-nocreate-suggest' => 'Du sökte på "$1". Du kan skapa en sida i din wiki på <strong>[[$2]]</strong>!',
	'wminc-searchwiki-selectproject' => 'Sök efter:',
	'wminc-searchwiki-inputlanguage' => 'På språk:',
	'wminc-searchwiki-go' => 'Gå',
	'wminc-searchwiki-multiplematches' => 'Din sökning matchar följande språk:',
	'wminc-searchwiki-gotoinfopage' => 'infosida',
	'wminc-fs-pagetitle' => 'Guide för att komma igång - $1',
	'wminc-fs-langselect-title' => 'Välj språk',
	'wminc-fs-signup-title' => 'Registrera',
	'wminc-fs-settings-title' => 'Ställ in dina wiki-inställningar',
	'wminc-fs-userpage-title' => 'Skapa din användarsida',
	'wminc-fs-startwiki-title' => 'Starta din wiki',
	'wminc-fs-pagetitle-done' => ' – klart!',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 * @author Lloffiwr
 */
$messages['sw'] = array(
	'wminc-listwikis' => 'Orodha ya Wiki',
	'wminc-recentchanges-all' => 'Mabadiliko yote ya juzi',
	'wminc-viewuserlang-user' => 'Jina la mtumiaji:',
	'wminc-viewuserlang-go' => 'Nenda',
	'wminc-searchwiki-inputlanguage' => 'Kwa lugha ya:',
	'wminc-searchwiki-go' => 'Nenda',
	'wminc-fs-langselect-title' => 'Chagua lugha',
	'wminc-fs-signup-title' => 'Jisajili',
	'wminc-fs-userpage-title' => 'Umba ukurasa wako wa mtumiaji',
	'wminc-fs-startwiki-title' => 'Anza Wiki yako',
	'wminc-fs-pagetitle-done' => '- imefanyika!',
);

/** Silesian (ślůnski)
 * @author Britscher
 * @author Ozi64
 */
$messages['szl'] = array(
	'wminc-desc' => 'Testowo wiki lo Inkubatůra Wikimedia',
	'wminc-testwiki' => 'Testowo wiki',
	'wminc-testwiki-none' => 'Żodno/Wszyjske',
	'wminc-prefinfo-language' => 'Godka interface (ńyznoleżno na godce testowyj wiki)',
	'wminc-prefinfo-code' => 'Kod godki podug ISO 639',
	'wminc-prefinfo-project' => 'Uobjer projekt Wikimedia (uopcyjo uobjyrańo Inkubatůra je zuůnaczůno lo używaczůw, kere robjům uogůlne roboty)',
	'wminc-prefinfo-error' => 'Uostoł uobrany projekt, przi kerym trza podać kod godki.',
	'randombytest' => 'Losowo zajta testowyj wiki',
	'randombytest-nopages' => 'We twojij testowyj wiki ńyma zajtůw we raumje mjan $1',
	'wminc-viewuserlang' => 'Nojdowańy godki używacza a testowyj wiki',
	'wminc-viewuserlang-user' => 'Mjano używacza:',
	'wminc-viewuserlang-go' => 'Pokoż',
	'wminc-userdoesnotexist' => 'Ńyma używacza ze mjanym "$1"',
	'right-viewuserlang' => 'Uobocz zajta używacza a testowo wiki',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'wminc-manual' => 'கைமுறை',
	'wminc-listwikis' => 'விக்கிகளின் பட்டியல்',
	'wminc-testwiki' => 'சோதனை விக்கி:',
	'wminc-testwiki-code' => 'சோதனை விக்கி மொழி:',
	'wminc-testwiki-none' => 'ஏதுமில்லை/எல்லாம்',
	'wminc-recentchanges-all' => 'எல்லா சமீபத்திய மாற்றங்களும்',
	'wminc-prefinfo-code' => 'ISO 639 மொழி குறியீடு',
	'wminc-prefinfo-error' => 'நீங்கள் தேர்ந்தெடுத்த திட்டத்திற்கு மொழி குறியீடு தேவைப்படுகிறது .',
	'randombytest' => 'சோதனை விக்கியின் தற்போக்குப் பக்கம்',
	'wminc-viewuserlang-user' => 'பயனர் பெயர்:',
	'wminc-viewuserlang-go' => 'செல்',
	'wminc-userdoesnotexist' => ' "$1"  என்னும் பயனர் யாரும் இல்லை',
	'wminc-ip' => "'' $1 '' ஒரு IP முகவரி.",
	'right-viewuserlang' => 'பயனர் மொழி மற்றும் சோதனை விக்கியைக் காண்',
	'group-test-sysop' => 'சோதனை விக்கி நிர்வாகிகள்',
	'group-test-sysop-member' => '{{GENDER:$1|சோதனை விக்கி நிர்வாகி}}',
	'grouppage-test-sysop' => '{{ns:project}}:சோதனை விக்கி நிர்வாகிகள்',
	'wminc-searchwiki' => 'விக்கி ஒன்றைத் தேடு.',
	'wminc-searchwiki-noproject' => 'நீங்கள் ஒரு திட்டத்தைத் தெரிவு செய்யவில்லை.',
	'wminc-searchwiki-selectproject' => 'இதை தேடு:',
	'wminc-searchwiki-inputlanguage' => 'இந்த மொழியில்:',
	'wminc-searchwiki-go' => 'செல்',
	'wminc-searchwiki-match-userlangname' => '$1 என்பது ஒரு மொழியின் பெயராகும்.',
	'wminc-searchwiki-gotoinfopage' => 'தகவல் பக்கம்',
	'wminc-fs-langselect-title' => 'மொழியைத் தேர்ந்தெடு',
	'wminc-fs-signup-title' => 'பதிவுசெய்',
	'wminc-fs-settings-title' => 'உங்கள் விக்கி விருப்பங்களை அமை',
	'wminc-fs-userpage-title' => 'உங்கள் பயனர் பக்கத்தை உருவாக்கவும்',
	'wminc-fs-startwiki-title' => 'உங்கள் விக்கியைத் தொடங்கவும்',
	'wminc-fs-pagetitle-done' => ' - ஆச்சு!',
);

/** Tulu (ತುಳು)
 * @author VASANTH S.N.
 */
$messages['tcy'] = array(
	'wminc-listwikis' => 'ವಿಕಿ ಪೀಡಿಯಾಲೆನ ತಖ್ತೆ',
	'wminc-testwiki' => 'ಪ್ರಯೋಗಡುಪ್ಪಿನ ವಿಕಿ',
);

/** Telugu (తెలుగు)
 * @author Kiranmayee
 * @author Veeven
 */
$messages['te'] = array(
	'wminc-desc' => 'వికీమీడియా ఇంక్యుబేటర్ కొరకు పరీక్షా వికీ సిస్టం',
	'wminc-listwikis' => 'వికీల జాబితా',
	'wminc-testwiki' => 'పరీక్షా వికీ:',
	'wminc-testwiki-code' => 'పరీక్షా వికీ భాష:',
	'wminc-testwiki-none' => 'ఏమికాదు/అన్నీ',
	'wminc-recentchanges-all' => 'అన్ని ఇటీవలి మార్పులు',
	'wminc-prefinfo-code' => 'మీరు ఇక్కడ పనిచేస్తున్న భాష యొక్క ISO 639 సంకేతం',
	'wminc-prefinfo-error' => 'భాష కోడు కావాల్సిన ఒక ప్రాజెక్టును మీరు ఎన్నుకున్నారు.',
	'randombytest' => 'పరీక్షా వికీ ద్వారా ఒక యాధృచిక పేజి',
	'wminc-viewuserlang-user' => 'వాడుకరి పేరు:',
	'wminc-viewuserlang-go' => 'వెళ్ళు',
	'wminc-userdoesnotexist' => 'వాడుకరి "$1" లేనే లేరు.',
	'wminc-ip' => '"$1" అనేది ఐపీ చిరునామా.',
	'right-viewuserlang' => 'వాడుకరి భాషను చూడగలగడం మరియు వికీని పరీక్షించడం',
	'wminc-searchwiki-inputlanguage' => 'ఈ భాషలో:',
	'wminc-searchwiki-go' => 'వెళ్ళు',
	'wminc-fs-pagetitle-done' => ' - పూర్తయ్యింది!',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'wminc-viewuserlang-user' => "Naran uza-na'in:",
	'wminc-userdoesnotexist' => 'Uza-na\'in "$1" la iha.',
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'wminc-testwiki' => 'Санҷиши вики:',
	'wminc-testwiki-none' => 'Ҳеҷ/Ҳама',
	'wminc-viewuserlang-user' => 'Номи корбарӣ:',
	'wminc-viewuserlang-go' => 'Рав',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'wminc-testwiki' => 'Sançişi viki:',
	'wminc-testwiki-none' => 'Heç/Hama',
	'wminc-viewuserlang-user' => 'Nomi korbarī:',
	'wminc-viewuserlang-go' => 'Rav',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'wminc-testwiki' => 'Test wiki:',
	'wminc-viewuserlang-user' => 'Ulanyjy ady:',
	'wminc-viewuserlang-go' => 'Git',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'wminc-desc' => 'Sistemang pangsubok ng wiki para sa Pisaan ng Wikimedia',
	'wminc-manual' => 'Aklat na Panggabay',
	'wminc-listwikis' => 'Listahan ng mga wiki',
	'wminc-testwiki' => 'Wiking sinusubok:',
	'wminc-testwiki-code' => 'Wika ng pangsubok na wiki:',
	'wminc-testwiki-none' => 'Wala/Lahat',
	'wminc-testwiki-site' => '(Pagpapanatili)',
	'wminc-recentchanges-all' => 'Lahat ng kamakailang mga pagbabago',
	'wminc-prefinfo-language' => 'Ang wika ng pangtawid-mukha mo - malaya mula sa iyong wiking sinusubok',
	'wminc-prefinfo-code' => 'Ang kodigo ng wika ng ISO 639 na tinatrabaho mo rito',
	'wminc-prefinfo-project' => 'Piliin ang proyekto ng Wikimedia na tinatrabaho mo rito',
	'wminc-prefinfo-error' => 'Nakapili ka ng isang proyektong nangangailangan ng isang kodigong pangwika.',
	'wminc-error-move-unprefixed' => 'Kamakailan: Ang pahinang sinusubukan mong ilipat papunta sa [[{{MediaWiki:Wminc-error-help}}|ay walang unlapi o mayroong isang maling unlapi]]!',
	'wminc-error-wronglangcode' => "'''Kamalian:''' Ang pahinang ito ay naglalaman ng isang  [[{{MediaWiki:Wminc-error-help}}|maling kodigo ng wika]] na \"\$1\"!",
	'wminc-error-unprefixed' => "'''Kamalian:''' Ang pahinang ito ay [[{{MediaWiki:Wminc-error-help}}|walang unlapi]]!",
	'wminc-error-unprefixed-suggest' => "'''Kamalian:''' Ang pahinang ito ay [[{{MediaWiki:Wminc-error-help}}|walang unlapi]]! Makakalikha ka ng isang pahina roon sa [[:$1]].",
	'wminc-error-wiki-exists' => 'Umiiral na ang wiking ito. Matatagpuan mo ang pahinang ito sa $1. Kung ang wiki ay nilikha kamakailan lamang, paki maghintay ng mangilan-ngilang mga oras o mga araw hanggang sa ang lahat ng nilalaman ay naangkat na.',
	'wminc-error-wiki-sister' => 'Ang pahinang ito ay kaanib sa isang proyekto na hindi pinasisinayahan dito. Paki pumunta sa $1 upang mahanap ang wiki.',
	'randombytest' => 'Alinmang pahina ayon sa wiking sinusubukan',
	'randombytest-nopages' => 'Walang mga pahina sa loob ng iyong wiking sinusubok, sa loob ng puwang ng pangalan: $1.',
	'wminc-viewuserlang' => 'Hanapin ang wika ng tagagamit ang wiking sinusubok',
	'wminc-viewuserlang-user' => 'Pangalan ng tagagamit:',
	'wminc-viewuserlang-go' => 'Gawin',
	'wminc-userdoesnotexist' => 'Hindi umiiral ang tagagamit na si "$1".',
	'wminc-ip' => 'Ang "$1" ay isang tirahan ng IP.',
	'right-viewuserlang' => 'Tingnan ang wika ng tagagamit at wiking sinusubukan',
	'group-test-sysop' => 'Mga tagapangasiwa ng pangsubok na wiki',
	'group-test-sysop-member' => '{{GENDER:$1|tagapangasiwa ng pangsubok na wiki}}',
	'grouppage-test-sysop' => '{{ns:project}}:Mga tagapangasiwa ng pangsubok na wiki',
	'group-test-sysop.css' => '/* Ang Mga Pilas ng Estilong Lumalagaslas (Cascading Style Sheets o CSS) na inilagay dito ay makakaapekto lamang sa mga tagapangasiwa ng sinusubukang wiki */',
	'group-test-sysop.js' => '/* Ang JavaScript o JS na inilagay dito ay makakaapekto lamang sa mga tagapangasiwa ng sinusubukang wiki */',
	'wminc-code-macrolanguage' => 'Ang [[wikipedia:$2 language|wikang "$3"]] ay isang [[wikipedia:ISO 639 macrolanguage|makro-wika]], na binubuo ng sumusunod na kasaping mga wika:',
	'wminc-code-collective' => 'Ang kodigong "$1" ay hindi tumutukoy sa isang tiyak na wika, bagkus ay sa isang kalipunan ng mga wika, na sa makatuwid ay ang [[wikipedia:$2 language|mga wikang "$3"]].',
	'wminc-code-retired' => 'Nabago na ang kodigo ng wikang ito at hindi na tumutukoy sa orihinal na wika.',
	'wminc-listusers-testwiki' => 'Tinatanaw mo ang mga tagagamit na nagtakda sa kanilang nais sa wiking pangsubok upang maging $1.',
	'wminc-search-nocreate-nopref' => 'Hinanap mo ang "$1". Paki itakda ang iyong [[Special:Preferences|kanaisan sa pangsubok na wiki]] upang masabi namin sa iyo kung aling pahina ang malilikha mo!',
	'wminc-search-nocreate-suggest' => 'Naghanap ka ng "$1". Makakalikha ka ng isang pahina sa loob ng wiki mo roon sa <strong>[[$2]]</strong>!',
	'wminc-searchwiki' => 'Maghanap ng isang wiki',
	'wminc-searchwiki-noproject' => 'Hindi ka pumili ng isang proyekto.',
	'wminc-searchwiki-noresults' => 'Walang mga resulta. Makapaghahanap ka ayon sa mga kodigo ng wika, katutubong mga pangalan at mga pangalang nasa wika ng iyong ugnayang-mukha o Ingles.',
	'wminc-searchwiki-selectproject' => 'Hanapin ang:',
	'wminc-searchwiki-inputlanguage' => 'Nasa wikang:',
	'wminc-searchwiki-go' => 'Gawin',
	'wminc-searchwiki-multiplematches' => 'Ang paghahanap mo ay tumutugma sa sumusunod na mga wika:',
	'wminc-searchwiki-match-langcode' => 'Ang "$1" ay isang kodigo ng wika ng ISO 639 para sa $2.',
	'wminc-searchwiki-match-userlangname' => 'Ang $1 ay ang pangalan ng isang wika.',
	'wminc-searchwiki-match-englishname' => 'Ang "$1" ay ang pangalan para sa $2 sa Ingles.',
	'wminc-searchwiki-match-nativename' => 'Ang "$1" ay ang pangalan para sa $2 sa wikang iyan.',
	'wminc-searchwiki-goto' => '<strong>$1</strong> ($2)',
	'wminc-searchwiki-gotoinfopage' => 'pahina ng kabatiran',
	'wminc-fs-pagetitle' => 'Masalamangkang pagsisimula - $1',
	'wminc-fs-langselect-title' => 'Pumili ng wika',
	'wminc-fs-signup-title' => 'Magpatala',
	'wminc-fs-settings-title' => 'Itakda ang nais mo sa wiki',
	'wminc-fs-userpage-title' => 'Lumikha ng iyong pahina ng tagagamit',
	'wminc-fs-startwiki-title' => 'Simulan ang wiki mo',
	'wminc-fs-pagetitle-done' => ' - gawa na!',
	'wminc-fs-intro' => 'Maligayang pagdating sa masalamangkang unang mga hakbang ng {{SITENAME}}. Papatnubayan ka sa proseso ng pagsisimula ng isang bagong wiki.',
	'wminc-fs-langselect' => 'Magpatuloy na nasa $1 o $2',
	'wminc-fs-signup-text' => 'Kung mayroon ka nang isang akawnt ng tagagamit, paki [$1 lumagda]. Kung wala ka pang isa, paki [$2 lumikha ng isang akawnt ng tagagamit]. Hindi ito kinakailangan subalit mahigpit na iminumungkahi at gumugugol lamang ng isang mangilan-ngilang mga segundo upang malikha.',
	'wminc-fs-settings-text' => 'Paki pumunta na ngayon sa [[Special:Preferences|mga kanaisan mo]] at baguhin ang iyong katakdaan para sa pangsubok na wiki.
Sa kanan ay makikita mo ang kaukol na mga mapagpipilian na mayroon ka sa pahinang iyan. Ang una ay ang iyong wika ng ugnayang-mukha, na napili mo sa unang hakbang, subalit mababago mo pa ito.
Ang pangalawa ay ang proyektong nais mong pag-ambagan at ang pangatlo ay ang kodigo ng wika ng proyektong nais mong ambagan.
Kung hindi mo alam ang kodigo, paki sumangguni sa aming [[{{MediaWiki:Wminc-manual-url}}|pamatnubay]] o humingi ng [[{{MediaWiki:Portal-url}}|tulong]].',
	'wminc-fs-userpage-text' => 'Paki likhain na ngayon ang iyong pahina ng tagagamit na $1 na mayroong saligang kabatiran hinggil sa sarili mo. Matitingnan mo rin ang isang kawing na papunta rito na nasa itaas ng pahinang ito.',
	'wminc-fs-globaluser-text' => 'Katutubo ang iyong akawnt ng tagagamit. Iminumungkahi na gawin itong pangglobo sa mamagitan ng $1 upang magamit mo ito sa anumang wiki ng Wikimedia.',
	'wminc-fs-startwiki-text' => 'Ang unlapi ng wiki mo ay <strong>$1</strong>. Masisimulan mo ang wiki sa pamamagitan ng paglikha ng Pangunahing Pahina ng wiki roon sa <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'Ang unlapi ng wiki mo ay $1. Ang Pangunahing Pahina ay naroon sa $2. Maaari ka nang makipagtulungan sa iba pang mga tagapagsalita ng wikang ito upang makabuo ng isang pamayanan!
Kung nais mong lumikha ng isang pahina, tipahin lamang ang pangalan sa loob ng kahong panghanap na nasa itaas, at sundan ang kawing na makikita mo.',
);

/** толышә зывон (толышә зывон)
 * @author Erdemaslancan
 */
$messages['tly'] = array(
	'wminc-searchwiki-go' => 'Давардеј',
);

/** Turkish (Türkçe)
 * @author Cekli829
 * @author Emperyan
 * @author Joseph
 * @author Karduelis
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'wminc-desc' => 'Vikimedya İnkübatör için test viki sistemi',
	'wminc-manual' => 'Kılavuz',
	'wminc-listwikis' => 'Vikilerin listesi',
	'wminc-testwiki' => 'Test viki:',
	'wminc-testwiki-code' => 'Denenecek viki dili:',
	'wminc-testwiki-none' => 'Hiçbiri/Tümü',
	'wminc-recentchanges-all' => 'Tüm son değişiklikler',
	'wminc-prefinfo-language' => 'Arayüz diliniz - test vikinizden bağımsız',
	'wminc-prefinfo-code' => 'ISO 639 dil kodu',
	'wminc-prefinfo-project' => 'Vikimedya projesini seçin (İnkübatör seçeneği genel çalışma yapan kullanıcılar için)',
	'wminc-prefinfo-error' => 'Bir dil kodu gereken bir proje seçtiniz.',
	'wminc-error-move-unprefixed' => 'Hata: Taşımaya çalıştığınız sayfa [[{{MediaWiki:Wminc-error-help}}|öneksiz ya da yanlış bir öneki var]]!',
	'randombytest' => 'Test vikisinden rastgele sayfa',
	'randombytest-nopages' => 'Test vikinizdeki $1 isim alanında herhangi bir sayfa bulunmuyor.',
	'wminc-viewuserlang' => 'Kullanıcı dili ve test vikisine bak',
	'wminc-viewuserlang-user' => 'Kullanıcı adı:',
	'wminc-viewuserlang-go' => 'Git',
	'wminc-userdoesnotexist' => '"$1" kullanıcısı mevcut değil.',
	'wminc-ip' => '"$1" bir IP adresidir.',
	'right-viewuserlang' => 'Kullanıcı dilini ve test vikisini gör',
	'group-test-sysop' => 'Test Viki hizmetlisi',
	'group-test-sysop-member' => '{{GENDER:$1|test viki hizmetlisi}}',
	'grouppage-test-sysop' => '{{ns:project}}:Test viki hizmetlisi',
);

/** Tatar (Cyrillic script) (татарча)
 * @author Ajdar
 */
$messages['tt-cyrl'] = array(
	'wminc-desc' => 'Викимедиа Инкубаторы өчен тикшерелмә вики-система',
	'wminc-manual' => 'Әсбап',
	'wminc-listwikis' => 'Викилар исемлеге',
	'wminc-testwiki' => 'Тикшерелүче вики',
	'wminc-testwiki-none' => 'Юк/барысы да',
	'wminc-recentchanges-all' => 'Барлык соңгы үзгәртүләр',
	'wminc-prefinfo-language' => 'Сезнең интерфейс теле сезнең тикшерелүче викига бәйле түгел',
	'wminc-prefinfo-code' => 'Телнең ISO 639 буенча коды',
	'wminc-prefinfo-project' => 'Викимедиа проектын сайлау (әгәр гомуми мәсьәләләр белән шөгыльләнсәгез, Инкубаторны сайлагыз)',
	'wminc-prefinfo-error' => 'Сез тел кодын күрсәтү мәҗбүри булган проектны сайладыгыз.',
	'wminc-error-move-unprefixed' => 'Хата. Сез күчерергә теләгән бит [[{{MediaWiki:Wminc-error-help}}|хаталы префикска ия яки аның префиксы бөтенләй юк]]!',
	'wminc-error-wronglangcode' => "'''Хата:''' Сез үзгәртергә теләгән биттә  [[{{MediaWiki:Wminc-error-help}}|дөрес булмаган тел коды бар]]",
	'wminc-error-unprefixed' => "'''Хата:''' Сез үзгәртергә теләгән битнең  [[{{MediaWiki:Wminc-error-help}}|префиксы юк]]!",
	'randombytest' => 'Тикшерелүче викиның очраклы мәкаләсе',
	'randombytest-nopages' => 'Сезнең тикшерелүче викида $1 исемнәр аланындагы битләр юк',
	'wminc-viewuserlang' => 'Кулланучының һәм аның тикшерелүче викиенең тел көйләнмәләрен эзләү',
	'wminc-viewuserlang-user' => 'Кулланучы исеме:',
	'wminc-viewuserlang-go' => 'Табарга',
	'wminc-userdoesnotexist' => '"$1" дигән кулланучы юк',
	'group-test-sysop' => 'Тикшерелүче вики идарәчеләре',
	'group-test-sysop-member' => 'тикшерелүче вики идарәчесе',
	'grouppage-test-sysop' => '{{ns:project}}:Тикшерелүче вики идарәчеләре',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'wminc-testwiki' => 'wiki سىناش:',
	'wminc-testwiki-none' => 'ھەممىسى/يوق',
	'wminc-prefinfo-language' => 'سىزنىڭ كۆرۈنمە تىلىڭىز - wiki سىناشتىن مۇستەقىل تۇرىدۇ',
	'wminc-prefinfo-code' => 'ISO 639 تىل كودى',
	'wminc-viewuserlang' => 'ئىشلەتكۈچى تىلىنى كۆرۈپ، wiki سىناش',
	'wminc-viewuserlang-user' => 'ئىشلەتكۈچى ئاتى:',
	'wminc-viewuserlang-go' => 'يۆتكەل',
);

/** Ukrainian (українська)
 * @author AS
 * @author Aleksandrit
 * @author Dim Grits
 */
$messages['uk'] = array(
	'wminc-desc' => 'Тестова вікі для Інкубатора Вікімедіа',
	'wminc-manual' => 'Інструкція',
	'wminc-listwikis' => 'Перелік вікіпроектів',
	'wminc-testwiki' => 'Тестова вікі:',
	'wminc-testwiki-code' => 'Мова тестової вікі:',
	'wminc-testwiki-none' => 'Жодна або всі',
	'wminc-recentchanges-all' => 'Усі останні зміни',
	'wminc-prefinfo-language' => 'Мова інтерфейсу (залежить від мови тестової вікі)',
	'wminc-prefinfo-code' => 'Код мови згідно з ISO 639',
	'wminc-prefinfo-project' => 'Оберіть проект Вікімедіа (варіант Інкубатор для тих, хто займається загальними питаннями)',
	'wminc-prefinfo-error' => 'Ви обрали проект, для якого необхідно вказати код мови.',
	'wminc-error-move-unprefixed' => 'Помилка: Сторінка на яку ви намагаєтеся перейти [[{{MediaWiki:Wminc-error-help}}|немає префікса або він помилковий]]!',
	'wminc-error-wronglangcode' => "'''Помилка:''' ця сторінка містить [[{{MediaWiki:Wminc-error-help}}|неправильний код мови]] \"\$1\"!",
	'wminc-error-unprefixed' => "''Помилка:''' Ця сторінка [[{{MediaWiki:Wminc-error-help}}|не містить префіксів]]!",
	'wminc-error-unprefixed-suggest' => "'''Помилка:''' Ця сторінка [[{{MediaWiki:Wminc-error-help}}|не містить префікса]]! Ви можете створити сторінку [[:$1]].",
	'wminc-error-wiki-exists' => 'Ця вікі вже існує. Ви можете знайти цю сторінку на $1. Якщо вікі було створено недавно, будь ласка, зачекайте кілька годин чи днів, поки весь вміст імпортується.',
	'wminc-error-wiki-sister' => 'Ця сторінка належить до проекту, який не розміщено тут. Будь ласка, перейдіть на $1, щоб знайти цей вікіпроект.',
	'randombytest' => 'Випадкова сторінка тестової вікі',
	'randombytest-nopages' => 'У вашій тестовій вікі немає сторінок у просторі імен $1.',
	'wminc-viewuserlang' => 'Проглянути мову й тестову вікі користувача',
	'wminc-viewuserlang-user' => 'Ім’я користувача:',
	'wminc-viewuserlang-go' => 'Пошук',
	'wminc-userdoesnotexist' => 'Користувач "$1" не існує.',
	'wminc-ip' => '"$1" не є IP-адресою.',
	'right-viewuserlang' => 'Переглядати мовні налаштування користувача і його тестову вікі',
	'group-test-sysop' => 'Адміністратори тестової вікі',
	'group-test-sysop-member' => 'Адміністратор тестової вікі',
	'grouppage-test-sysop' => '{{ns:project}}:Адміністратори тестової вікі',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|"$3" мова]] є [[wikipedia:ISO 639 macrolanguage|макромовою]], що складається з наступних мов:',
	'wminc-code-collective' => 'Код "$1" відноситься не до конкретної мови, а до декількох, об\'єднаних під загальною назвою [[wikipedia:$2 language|"$3"]].',
	'wminc-code-retired' => 'Цей код мови було змінено, код більше не посилається на конкретну мову.',
	'wminc-listusers-testwiki' => 'Ви переглядаєте користувачів, які встановили налаштування тестової вікі  $1.',
	'wminc-search-nocreate-nopref' => 'Ви шукали "$1". Будь ласка, задайте власні [[Special:Preferences|налаштування тестової вікі]], аби ми могли підказати, які сторінки ви можете створити!',
	'wminc-search-nocreate-suggest' => 'Ви шукали "$1". Можете створити сторінку <strong>[[$2]]</strong>!',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'wminc-manual' => 'دستی',
	'wminc-testwiki-site' => '(بحالی)',
	'wminc-recentchanges-all' => 'سب سے حالیہ تبدیلیاں',
	'wminc-viewuserlang-user' => 'صارف کا نام:',
	'wminc-viewuserlang-go' => 'جانا',
	'wminc-searchwiki-go' => 'جانا',
	'wminc-searchwiki-gotoinfopage' => 'معلومات کے صفحہ',
	'wminc-fs-langselect-title' => 'زبان کا انتخاب کریں',
	'wminc-fs-signup-title' => 'سائن اپ کریں',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'wminc-testwiki' => 'Kodvwiki:',
	'wminc-testwiki-none' => 'Ei ole/Kaik',
	'wminc-prefinfo-code' => "ISO 639-kel'kod",
	'wminc-viewuserlang-user' => 'Kävutajan nimi:',
	'wminc-viewuserlang-go' => 'Ectä',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Trần Nguyễn Minh Huy
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'wminc-desc' => 'Hệ thống wiki thử nghiệm của Vườn ươm Wikimedia',
	'wminc-manual' => 'Hướng dẫn',
	'wminc-listwikis' => 'Danh sách các wiki',
	'wminc-testwiki' => 'Wiki thử:',
	'wminc-testwiki-code' => 'Ngôn ngữ wiki thử nghiệm:',
	'wminc-testwiki-none' => 'Không có / tất cả',
	'wminc-testwiki-site' => '(Bảo trì)',
	'wminc-recentchanges-all' => 'Mọi thay đổi gần đây',
	'wminc-prefinfo-language' => 'Ngôn ngữ giao diện của bạn – có thể khác với wiki thử',
	'wminc-prefinfo-code' => 'Mã ISO 639 của ngôn ngữ tại đây mà bạn đang đóng góp vào',
	'wminc-prefinfo-project' => 'Chọn dự án Wikimedia tại đây mà bạn đang đóng góp vào',
	'wminc-prefinfo-error' => 'Bạn đã chọn một dự án bắt phải có mã ngôn ngữ.',
	'wminc-error-move-unprefixed' => 'Lỗi: Tên mới của trang [[{{MediaWiki:Wminc-error-help}}|thiếu tiền tố hoặc có tiền tố sai]]!',
	'wminc-error-wronglangcode' => "'''Lỗi:''' Trang này có [[{{MediaWiki:Wminc-error-help}}|mã ngôn ngữ sai]] “$1”!",
	'wminc-error-unprefixed' => "'''Lỗi:''' Trang này [[{{MediaWiki:Wminc-error-help}}|thiếu tiền tố]]!",
	'wminc-error-unprefixed-suggest' => "'''Lỗi:''' Trang này [[{{MediaWiki:Wminc-error-help}}|thiếu tiền tố]]! Bạn có thể tạo trang tại “[[:$1]]” thay thế.",
	'wminc-error-wiki-exists' => 'Wiki này đã tồn tại: bạn có thể truy cập trang tại $1. Nếu wiki mới được mở cửa gần đây, xin vui lòng chờ một vài giờ hoặc ngày cho đến khi tất cả nội dung được nhập xong.',
	'wminc-error-wiki-sister' => 'Trang này trực thuộc một dự án không được bao gồm tại đây. Xin ghé vào wiki tại $1.',
	'randombytest' => 'Trang ngẫu nhiên theo wiki thử',
	'randombytest-nopages' => 'Không có trang này tại wiki thử của bạn trong không gian tên “$1”.',
	'wminc-viewuserlang' => 'Ngôn ngữ và wiki thử của người dùng',
	'wminc-viewuserlang-user' => 'Tên hiệu:',
	'wminc-viewuserlang-go' => 'Xem',
	'wminc-userdoesnotexist' => 'Thành viên “$1” không tồn tại.',
	'wminc-ip' => '“$1” là một địa chỉ IP.',
	'right-viewuserlang' => 'Xem ngôn ngữ và wiki thử của người dùng',
	'group-test-sysop' => 'Bảo quản viên tại wiki thử nghiệm',
	'group-test-sysop-member' => '{{GENDER:$1}}bảo quản viên tại wiki thử nghiệm',
	'grouppage-test-sysop' => '{{ns:project}}:Bảo quản viên tại wiki thử nghiệm',
	'wminc-code-macrolanguage' => '[[Wikipedia:$2 language|Tiếng “$3”]] là một [[Wikipedia:ISO 639 macrolanguage|ngôn ngữ vĩ mô]] bao gồm các ngôn ngữ này:',
	'wminc-code-collective' => 'Mã “$1” không phải chỉ đến một ngôn ngữ riêng mà chỉ đến nhóm ngôn ngữ [[wikipedia:$2 language|tiếng “$3”]].',
	'wminc-code-retired' => 'Mã ngôn ngữ này đã thay đổi và không còn chỉ đến ngôn ngữ ban đầu.',
	'wminc-listusers-testwiki' => 'Đây là danh sách những thành viên đã đặt tùy chọn wiki thử nghiệm là $1.',
	'wminc-search-nocreate-nopref' => 'Bạn đã tìm kiếm cho “$1”. Xin vui lòng đặt [[Special:Preferences|tùy chọn wiki thử nghiệm]] để cho chúng tôi có thể cho biết bạn có thể tạo ra trang mới ở đâu!',
	'wminc-search-nocreate-suggest' => "Bạn đã tìm kiếm cho “$1”. Bạn có thể tạo ra trang mới trong wiki thử nghiệm của bạn tại “'''[[$2]]'''”!",
	'wminc-searchwiki' => 'Tìm wiki',
	'wminc-searchwiki-noproject' => 'Bạn chưa chọn một dự án.',
	'wminc-searchwiki-noresults' => 'Không có kết quả. Bạn có thể tìm kiếm theo mã ngôn ngữ, tên tự xưng, và tên trong ngôn ngữ giao diện hoặc tiếng Anh.',
	'wminc-searchwiki-selectproject' => 'Tìm:',
	'wminc-searchwiki-inputlanguage' => 'Ngôn ngữ:',
	'wminc-searchwiki-go' => 'Tìm kiếm',
	'wminc-searchwiki-multiplematches' => 'Truy vấn của bạn trùng với các ngôn ngữ sau:',
	'wminc-searchwiki-match-langcode' => '“$1” là mã ngôn ngữ ISO 639 của $2.',
	'wminc-searchwiki-match-userlangname' => '“$1” là một tên ngôn ngữ.',
	'wminc-searchwiki-match-englishname' => '“$1” là tên của $2 trong tiếng Anh.',
	'wminc-searchwiki-match-nativename' => '“$1” là tên của $2 trong ngôn ngữ đó.',
	'wminc-searchwiki-gotoinfopage' => 'trang thông tin',
	'wminc-fs-pagetitle' => 'Trình Thuật sĩ Bắt đầu – $1',
	'wminc-fs-langselect-title' => 'Chọn ngôn ngữ',
	'wminc-fs-signup-title' => 'Đăng ký',
	'wminc-fs-settings-title' => 'Đặt các tùy chọn wiki của bạn',
	'wminc-fs-userpage-title' => 'Tạo trang cá nhân của bạn',
	'wminc-fs-startwiki-title' => 'Bắt đầu wiki mới',
	'wminc-fs-pagetitle-done' => ' – xong!',
	'wminc-fs-intro' => 'Hoan nghênh, trình thuật sĩ bước đầu của {{SITENAME}} sẽ hướng dẫn bạn bắt đầu xây dựng một wiki mới.',
	'wminc-fs-langselect' => 'Tiếp tục trong $1 hoặc $2',
	'wminc-fs-signup-text' => 'Nếu bạn đã có tài khoản, xin vui lòng [$1 đăng nhập]. Nếu chưa có, xin vui lòng [$2 mở tài khoản mới].
Bạn không nhất thiết phải đăng ký nhưng rất khuyên khích dành một chút xíu để mở tài khoản mới.',
	'wminc-fs-settings-text' => 'Bây giờ xin vui lòng mở [[Special:Preferences|Tùy chọn]] để thay đổi wiki thử nghiệm của bạn.
Ở bên phải có các tùy chọn có liên quan tại trang đó. Cái đầu tiên là ngôn ngữ giao diện mà bạn đã lựa chọn nhưng lúc nào có thể thay đổi.
Cái thứ hai là dự án để đóng góp vào, và sau đó là mã ngôn ngữ của dự án để đóng góp vào.
Nếu bạn không biết mã ngôn ngữ, hãy tham khảo [[{{MediaWiki:Wminc-manual-url}}|hướng dẫn]] hoặc [[{{MediaWiki:Portal-url}}|yêu cầu trợ giúp]].',
	'wminc-fs-userpage-text' => 'Hãy tạo trang cá nhân $1 để chia sẻ những thông tin cơ bản về chính bạn. Một liên kết ở đầu trang này cũng dẫn đến trang cá nhân.',
	'wminc-fs-globaluser-text' => 'Bạn đang sử dụng một tài khoản địa phương. Gợi ý bạn làm nó thành một tài khoản toàn cầu tại $1 để cho có thể sử dụng nó tại bất cứ wiki nào trực thuộc Wikimedia.',
	'wminc-fs-startwiki-text' => 'Tiền tố của wiki là <strong>$1</strong>. Hãy bắt đầu wiki này với một Trang Chính tại <strong>$2</strong>.',
	'wminc-fs-startwiki-exists-text' => 'Tiền tố của wiki là $1, và Trang Chính có sẵn tại $2. Bây giờ bạn có thể cộng tác với những người khác cũng nói ngôn ngữ này để xây dựng một cộng đồng!
Để tạo ra trang mới, chỉ việc nhập tên trang vào hộp tìm kiếm ở trên và theo dõi liên kết xuất hiện.',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'wminc-listwikis' => 'ליסטע פון וויקיס',
	'wminc-testwiki' => 'פרווו וויקי',
	'wminc-testwiki-code' => 'פרואוו וויקי שפראך:',
	'wminc-testwiki-none' => 'קיינע/אלע',
	'wminc-recentchanges-all' => 'אלע לעצטיקע ענדערונגען',
	'wminc-viewuserlang-user' => 'באַניצער נאָמען:',
	'wminc-viewuserlang-go' => 'גיין',
	'wminc-userdoesnotexist' => 'נישט פאראן קיין באניצער "$1".',
	'wminc-ip' => '"$1" איז אן IP אדרעס.',
	'wminc-searchwiki-go' => 'גיין',
);

/** Cantonese (粵語)
 * @author Shinjiman
 */
$messages['yue'] = array(
	'wminc-desc' => 'Wikimedia Incubator嘅測試wiki系統',
	'wminc-testwiki' => '測試wiki:',
	'wminc-testwiki-none' => '無/全部',
	'wminc-prefinfo-language' => '你嘅界面語言 - 響你嘅測試wiki獨立嘅',
	'wminc-prefinfo-code' => 'ISO 639語言碼',
	'wminc-prefinfo-project' => '揀Wikimedia計劃 (Incubator選項用來做一般嘅嘢)',
	'wminc-prefinfo-error' => '你揀咗一個需要語言碼嘅計劃。',
	'wminc-viewuserlang' => '睇用戶語言同測試wiki',
);

/** Simplified Chinese (‪中文（简体）‬)
 * @author Anakmalaysia
 * @author Bencmq
 * @author Hydra
 * @author Jimmy xu wrk
 * @author Liangent
 * @author Linforest
 * @author PhiLiP
 * @author Shinjiman
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'wminc-desc' => '维基孵育场测试维基系统',
	'wminc-manual' => '手动',
	'wminc-listwikis' => 'Wiki列表',
	'wminc-testwiki' => '测试维基：',
	'wminc-testwiki-code' => '测试Wiki语言：',
	'wminc-testwiki-none' => '无/所有',
	'wminc-testwiki-site' => '（维护）',
	'wminc-recentchanges-all' => '所有最近的更改',
	'wminc-prefinfo-language' => '你的界面语言-从你的测试维基独立',
	'wminc-prefinfo-code' => '您正在操作的语言的ISO 639语言代码',
	'wminc-prefinfo-project' => '选择您正在操作的维基媒体项目',
	'wminc-prefinfo-error' => '你选择了需要语言代码的项目。',
	'wminc-error-move-unprefixed' => '错误：您要移动页面到的目的地 [[{{MediaWiki:Wminc-error-help}}|没有前缀或有错误的前缀]] ！',
	'wminc-error-wronglangcode' => "'''错误'''：该页面包含了[[{{MediaWiki:Wminc-error-help}}|错误的语言代码]]“$1”！",
	'wminc-error-unprefixed' => "'''错误'''：该页面[[{{MediaWiki:Wminc-error-help}}|无法前缀]]！",
	'wminc-error-unprefixed-suggest' => "'''错误'''：该页面[[{{MediaWiki:Wminc-error-help}}|无法前缀]]！您可以在[[:$1]]创建页面。",
	'wminc-error-wiki-exists' => '该wiki已经存在。您可以在$1找到该页面。如果该wiki是近期创建的，请耐心等待数小时至数日，以便所有内容都被导入。',
	'wminc-error-wiki-sister' => '此页面是属于不在此处托管的项目，请转到$1找到该维基项目。',
	'randombytest' => '测试维基随机页面',
	'randombytest-nopages' => '您的测试wiki的名字空间$1中没有页面。',
	'wminc-viewuserlang' => '查看用户语言与测试维基',
	'wminc-viewuserlang-user' => '用户名：',
	'wminc-viewuserlang-go' => '提交',
	'wminc-userdoesnotexist' => '用户 "$1" 并不存在。',
	'wminc-ip' => '" $1 "是一个IP地址。',
	'right-viewuserlang' => '请查看用户语言与测试维基',
	'group-test-sysop' => '测试wiki管理员',
	'group-test-sysop-member' => '{{GENDER:$1|测试维基管理员}}',
	'grouppage-test-sysop' => '{{ns:project}}:测试wiki管理员',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|$3]]是[[wikipedia:ISO 639 macrolanguage|宏语言]]之一，由以下成员语言组成：',
	'wminc-code-collective' => '代码“$1”并不是一种语言，而是一系列语言的集合，即[[wikipedia:$2 language|$3语言]]。',
	'wminc-code-retired' => '该语言代码已更改，并且不再指向原来的语言。',
	'wminc-listusers-testwiki' => '您正在查看将测试维基首选项设置为$1的用户。',
	'wminc-search-nocreate-nopref' => '您在寻找“$1”。请更改您的[[Special:Preferences|测试维基参数设置]]，以便我们可以告诉您适合创建的页面种类！',
	'wminc-search-nocreate-suggest' => '您在寻找“$1”。您可以转到<strong>[[$2]]</strong>以在您的维基项目中创建新一个页！',
	'wminc-searchwiki' => '搜索一个维基站点',
	'wminc-searchwiki-noproject' => '您没有选择一个项目。',
	'wminc-searchwiki-noresults' => '没有结果。您可以按照语言代码、 原生名称和采用您的界面语言或英语的名称进行搜索。',
	'wminc-searchwiki-selectproject' => '搜索：',
	'wminc-searchwiki-inputlanguage' => '采用语言：',
	'wminc-searchwiki-go' => '转到',
	'wminc-searchwiki-multiplematches' => '您的搜索与下列语言相匹配：',
	'wminc-searchwiki-match-langcode' => '"$1"是$2的 ISO 639 语言代码',
	'wminc-searchwiki-match-userlangname' => '$1是语言名称。',
	'wminc-searchwiki-match-englishname' => '"$1"是$2的英文名称。',
	'wminc-searchwiki-match-nativename' => '"$1"是$2在该语言中的名称。',
	'wminc-searchwiki-gotoinfopage' => '信息页面',
	'wminc-fs-pagetitle' => '入门向导 - $1',
	'wminc-fs-langselect-title' => '选择语言',
	'wminc-fs-signup-title' => '注册',
	'wminc-fs-settings-title' => '设置您的wiki首选项',
	'wminc-fs-userpage-title' => '创建您的用户页',
	'wminc-fs-startwiki-title' => '开始使用您的wiki',
	'wminc-fs-pagetitle-done' => ' - 完成！',
);

/** Traditional Chinese (‪中文（繁體）‬)
 * @author Anakmalaysia
 * @author Horacewai2
 * @author Liangent
 * @author Mark85296341
 * @author Shinjiman
 * @author Simon Shek
 * @author Waihorace
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'wminc-desc' => '維基孵育場的測試 wiki 系統',
	'wminc-manual' => '手冊',
	'wminc-listwikis' => '維基名單',
	'wminc-testwiki' => '測試 wiki:',
	'wminc-testwiki-code' => '測試Wiki語言：',
	'wminc-testwiki-none' => '無/所有',
	'wminc-testwiki-site' => '（維修）',
	'wminc-recentchanges-all' => '所有最近的更改',
	'wminc-prefinfo-language' => '您的介面語言 - 在您的測試 wiki 中為獨立的',
	'wminc-prefinfo-code' => 'ISO 639 語言代碼',
	'wminc-prefinfo-project' => '選擇維基媒體計劃 （孵育場選項用作一般用途）',
	'wminc-prefinfo-error' => '您已選擇一個需要語言代碼的計畫。',
	'wminc-error-move-unprefixed' => '錯誤：您想要移動頁面到的目的地[[{{MediaWiki:Wminc-error-help}}|沒有前綴或有錯誤的前綴]]！',
	'wminc-error-wronglangcode' => "'''錯誤'''：此頁面包含了[[{{MediaWiki:Wminc-error-help}}|錯誤的語言代碼]]「$1」!",
	'wminc-error-unprefixed' => "'''錯誤'''：此頁面[[{{MediaWiki:Wminc-error-help}}|沒有前綴]]！",
	'wminc-error-unprefixed-suggest' => "'''錯誤'''：此頁面[[{{MediaWiki:Wminc-error-help}}|沒有前綴]]！您可以在[[:$1]]創建頁面。",
	'wminc-error-wiki-exists' => '這項維基項目已存在，就在$1找到該頁面。如果該維基項目是近期創建的，請耐心等待數小時至數天，以便所有內容都被導入。',
	'wminc-error-wiki-sister' => '此頁面是屬於不在此處託管的項目，請轉到$1找到該維基項目。',
	'randombytest' => '測試維基上的隨機頁面',
	'randombytest-nopages' => '在你的測試網頁的 $1 名字空間中，沒有頁面。',
	'wminc-viewuserlang' => '檢視使用者語言與測試 wiki',
	'wminc-viewuserlang-user' => '使用者名稱：',
	'wminc-viewuserlang-go' => '轉到',
	'wminc-userdoesnotexist' => '用戶「$1」不存在。',
	'wminc-ip' => '「$1」是一個IP地址。',
	'right-viewuserlang' => '檢視使用者語言和測試 wiki',
	'group-test-sysop' => '測試維基管理員',
	'group-test-sysop-member' => '{{GENDER:$1|測試維基管理員}}',
	'grouppage-test-sysop' => '{{ns:project}}:測試維基管理員',
	'wminc-code-macrolanguage' => '[[wikipedia:$2 language|$3]]是[[wikipedia:ISO 639 macrolanguage|宏語言]]之一，由以下成員語言組成：',
	'wminc-code-collective' => '代碼「$1」並不指一種語言，而指一系列語言的集合，即[[wikipedia:$2 language|$3語言]]。',
	'wminc-code-retired' => '此語言代碼已更改，並且不再指向原來的語言。',
	'wminc-listusers-testwiki' => '您正在查看將測試維基首選項設置為$1的用戶。',
	'wminc-search-nocreate-nopref' => '您在尋找「$1」。請更改您的[[Special:Preferences|測試維基參數設定]]，以便我們可以告訴您適合創建的頁面種類！',
	'wminc-search-nocreate-suggest' => '您在尋找“$1”。您可以轉到<strong>[[$2]]</strong>以在您的維基項目中創新一個頁面！',
	'wminc-searchwiki-noproject' => '您沒有選擇一個項目。',
	'wminc-searchwiki-noresults' => '沒有結果。您可以按語言代碼、該語言、您的介面語言、或英語進行搜索。',
	'wminc-searchwiki-selectproject' => '尋找：',
	'wminc-searchwiki-match-userlangname' => '$1是語言名稱。',
	'wminc-fs-langselect-title' => '選擇語言',
	'wminc-fs-pagetitle-done' => ' - 完成！',
);

