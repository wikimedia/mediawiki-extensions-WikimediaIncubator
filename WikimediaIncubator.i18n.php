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
	'wminc-desc' => 'Test wiki system for Wikimedia Incubator',
	'wminc-viewuserlang' => 'Look up user language and test wiki',
	'wminc-testwiki' => 'Test wiki:',
	'wminc-testwiki-none' => 'None/All',
	'wminc-prefinfo-language' => 'Your interface language - independent from your test wiki',
	'wminc-prefinfo-code' => 'The ISO 639 language code',
	'wminc-prefinfo-project' => 'Select the Wikimedia project (Incubator option is for users who do general work)',
	'wminc-prefinfo-error' => 'You selected a project that needs a language code.',
	'wminc-warning-unprefixed' => "'''Warning:''' The page you are editing is unprefixed!",
	'wminc-warning-suggest' => 'You can create a page at [[$1]].',
	'wminc-warning-suggest-move' => 'You can [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} move this page to $1].',
);

/** Message documentation (Message documentation)
 * @author SPQRobin
 */
$messages['qqq'] = array(
	'wminc-desc' => 'Short description of this extension, shown on [[Special:Version]].',
	'wminc-viewuserlang' => 'Title of a special page to look up the language and test wiki of a user. See [[:File:Incubator-testwiki-viewuserlang.jpg]].',
	'wminc-testwiki' => 'See [[:File:Incubator-testwiki-preference.jpg]].',
	'wminc-testwiki-none' => "* Used on Special:Preferences when the user didn't select a test wiki preference (yet).
* Used on Special:RecentChanges to show normal recent changes display.",
	'wminc-prefinfo-language' => 'See [[:File:Incubator-testwiki-preference.jpg]]. Extra clarification for the (normal) language selection.',
	'wminc-prefinfo-code' => 'See [[:File:Incubator-testwiki-preference.jpg]].',
	'wminc-prefinfo-project' => 'See [[:File:Incubator-testwiki-preference.jpg]].',
	'wminc-prefinfo-error' => 'See [[:File:Incubator-testwiki-preference.jpg]]. If the user selected a Wikimedia project but not a language code, this error message is shown.',
	'wminc-warning-unprefixed' => 'This warning is shown when creating or editing a page that does not match <code>/W[bnpqt]\\/[a-z][a-z][a-z]?/</code>.',
	'wminc-warning-suggest' => '* $1 is user prefix + current page title (for example "Wp/nl/Pagina" when creating "Pagina").',
	'wminc-warning-suggest-move' => '* $1 is user prefix + current page title (for example "Wp/nl/Pagina" when creating "Pagina").
* $2 is the same, but for use in URLs.
* $3 is the current page title.',
);

/** Arabic (العربية)
 * @author OsamaK
 */
$messages['ar'] = array(
	'wminc-testwiki' => 'ويكي الاختبار:',
	'wminc-testwiki-none' => 'لا شيء/الكل',
	'wminc-prefinfo-code' => 'رمز ISO 639 للغة',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'wminc-desc' => 'Тэставая вікі-сыстэма для інкубатара фундацыі «Вікімэдыя»',
	'wminc-viewuserlang' => 'Пошук мовы ўдзельніка і тэставай вікі',
	'wminc-testwiki' => 'Тэставая вікі:',
	'wminc-testwiki-none' => 'Ніякая/усе',
	'wminc-prefinfo-language' => 'Вашая мова інтэрфэйсу — незалежная ад мовы Вашай тэставай вікі',
	'wminc-prefinfo-code' => 'Код мовы ISO 639',
	'wminc-prefinfo-project' => 'Выберыце праект фундацыі «Вікімэдыя» (устаноўка інкубатара для ўдзельнікаў, якія займаецца асноўнай працай)',
	'wminc-prefinfo-error' => 'Вы выбралі праект, які патрабуе код мовы.',
	'wminc-warning-unprefixed' => 'Папярэджаньне: старонка, якую Вы рэдагуеце, ня мае прэфікса!',
	'wminc-warning-suggest' => 'Вы можаце стварыць старонку [[$1]].',
	'wminc-warning-suggest-move' => 'Вы можаце [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} перанесьці гэту старонку ў $1].',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'wminc-desc' => 'Testiranje wiki sistema za Wikimedia Incubator',
	'wminc-viewuserlang' => 'Pregledaj korisnički jezik i testiranu wiki',
	'wminc-testwiki' => 'Testna wiki:',
	'wminc-testwiki-none' => 'Ništa/Sve',
	'wminc-prefinfo-language' => 'Vaš jezik interfejsa - nezavisno od Vaše testirane wiki',
	'wminc-prefinfo-code' => 'ISO 639 kod jezika',
	'wminc-prefinfo-project' => 'Odaberite Wikimedia projekat (Opcija u inkubatoru za korisnike koje rade opći posao)',
	'wminc-prefinfo-error' => 'Odabrali ste projekat koji zahtijeva kod jezika.',
	'wminc-warning-unprefixed' => 'Upozorenje: stranica koju uređujete nema prefiksa!',
	'wminc-warning-suggest' => 'Možete napraviti stranicu na [[$1]].',
	'wminc-warning-suggest-move' => 'Možete [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} premjestiti ovu stranicu na $1].',
);

/** Catalan (Català)
 * @author Solde
 */
$messages['ca'] = array(
	'wminc-testwiki-none' => 'Cap/Tots',
);

/** German (Deutsch)
 * @author MF-Warburg
 */
$messages['de'] = array(
	'wminc-desc' => 'Testwiki-System für den Wikimedia Incubator',
	'wminc-viewuserlang' => 'Benutzersprache und Testwiki einsehen',
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-none' => 'Keins/Alle',
	'wminc-prefinfo-language' => 'Sprache deiner Benutzeroberfläche - vom Testwiki unabhängig',
	'wminc-prefinfo-code' => 'Der ISO-639-Sprachcode',
	'wminc-prefinfo-project' => 'Das Wikimedia-Projekt, an dem du hier arbeitest („Incubator“ für Benutzer, die allgemeine Aufgaben übernehmen)',
	'wminc-prefinfo-error' => 'Bei diesem Projekt muss ein Sprachcode angeben werden!',
	'wminc-warning-unprefixed' => 'Achtung: Du bearbeitest eine Seite ohne Präfix!',
	'wminc-warning-suggest' => 'Du kannst hier eine Seite erstellen: [[$1]].',
	'wminc-warning-suggest-move' => 'Du kannst [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} diese Seite nach $1 verschieben].',
);

/** German (formal address) (Deutsch (Sie-Form))
 * @author MF-Warburg
 */
$messages['de-formal'] = array(
	'wminc-prefinfo-language' => 'Sprache Ihrer Benutzeroberfläche - vom Testwiki unabhängig',
	'wminc-prefinfo-project' => 'Das Wikimedia-Projekt, an dem Sie hier arbeiten („Incubator“ für Benutzer, die allgemeine Aufgaben übernehmen)',
	'wminc-warning-unprefixed' => 'Achtung: Sie bearbeiten eine Seite ohne Präfix!',
	'wminc-warning-suggest' => 'Sie können hier eine Seite erstellen: [[$1]].',
	'wminc-warning-suggest-move' => 'Sie können [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} diese Seite nach $1 verschieben].',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'wminc-desc' => 'Testowy wikijowy system za Wikimedia Incubator',
	'wminc-viewuserlang' => 'Wužywarsku rěc a testowy wiki se woglědaś',
	'wminc-testwiki' => 'Testowy wiki:',
	'wminc-testwiki-none' => 'Žeden/Wše',
	'wminc-prefinfo-language' => 'Rěc twójogo wužywarskego pówjercha - wót twójogo testowego wikija njewótwisna',
	'wminc-prefinfo-code' => 'Rěcny kod ISO 639',
	'wminc-prefinfo-project' => 'Wikimedijowy projekt wubraś (Incubatorowa opcija jo za wužywarjow, kótarež cynje powšykne źěło)',
	'wminc-prefinfo-error' => 'Sy projekt wubrał, kótaryž se rěcny kod pomina.',
	'wminc-warning-unprefixed' => 'Warnowanje: bok, kótaryž wobźěłujoš, njama prefiks!',
	'wminc-warning-suggest' => 'Móžoš na [[$1]] bok napóraś.',
	'wminc-warning-suggest-move' => 'Móžoš [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} toś ten bok do $1 pśesunuś].',
);

/** Greek (Ελληνικά)
 * @author Omnipaedista
 */
$messages['el'] = array(
	'wminc-testwiki' => 'Δοκιμαστικό wiki:',
	'wminc-testwiki-none' => 'Κανένα/Όλα',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'wminc-testwiki' => 'Prova vikio:',
);

/** Spanish (Español)
 * @author Crazymadlover
 */
$messages['es'] = array(
	'wminc-desc' => 'Sistema de wiki de prueba para Wikimedia Incubator',
	'wminc-viewuserlang' => 'Ver lenguaje de usuario y wiki de prueba',
	'wminc-testwiki' => 'Wiki de prueba:',
	'wminc-testwiki-none' => 'Ninguno/Todo',
	'wminc-prefinfo-language' => 'Tu lenguaje de interface - independiente de tu wiki de prueba',
	'wminc-prefinfo-code' => 'El código de lenguaje ISO 639',
	'wminc-prefinfo-project' => 'Seleccionar el proyecto wikimedia (opción Incubator es para usuarios que hacen trabajo general)',
	'wminc-prefinfo-error' => 'Seleccionaste un proyecto que necesita un código de lenguaje.',
	'wminc-warning-unprefixed' => 'Advertencia: la página que estás editando está sin prefijo!',
	'wminc-warning-suggest' => 'Puedes crear una página en [[$1]].',
	'wminc-warning-suggest-move' => 'Puedes [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} mover esta página a $1].',
);

/** French (Français)
 * @author IAlex
 */
$messages['fr'] = array(
	'wminc-desc' => 'Système de test de wiki pour Wikimedia Incubator',
	'wminc-viewuserlang' => "Voir la langue de l'utilisateur et son wiki de test",
	'wminc-testwiki' => 'Wiki de test :',
	'wminc-testwiki-none' => 'Aucun / tous',
	'wminc-prefinfo-language' => "Votre langue de l'interface - indépendante de votre wiki de test",
	'wminc-prefinfo-code' => 'Le code ISO 639 de la langue',
	'wminc-prefinfo-project' => "Sélectionnez le projet Wikimedia (l'option Incubator est destinée aux utilisateurs qui font un travail général)",
	'wminc-prefinfo-error' => 'Vous avez sélectionné un projet qui nécessite un code de langue.',
	'wminc-warning-unprefixed' => "Attention : la page que vous modifiez n'a pas de préfixe !",
	'wminc-warning-suggest' => 'Vous pouvez créer la page à [[$1]].',
	'wminc-warning-suggest-move' => 'Vous pouvez [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} renommer cette page vers $1].',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'wminc-desc' => 'Sistema wiki de probas para a Incubadora da Wikimedia',
	'wminc-viewuserlang' => 'Olle a lingua de usuario e o wiki de proba',
	'wminc-testwiki' => 'Wiki de proba:',
	'wminc-testwiki-none' => 'Ningún/Todos',
	'wminc-prefinfo-language' => 'A súa lingua da interface (independente do seu wiki de proba)',
	'wminc-prefinfo-code' => 'O código de lingua ISO 639',
	'wminc-prefinfo-project' => 'Seleccione o proxecto Wikimedia (a opción da Incubadora é para os usuarios que fan traballo xeral)',
	'wminc-prefinfo-error' => 'Escolleu un proxecto que precisa dun código de lingua.',
	'wminc-warning-unprefixed' => 'Aviso: a páxina que está editando non ten prefixo!',
	'wminc-warning-suggest' => 'Pode crear a páxina en "[[$1]]".',
	'wminc-warning-suggest-move' => 'Pode [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} mover esta páxina a "$1"].',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'wminc-desc' => 'Teschtwiki-Syschtem fir dr Wikimedia Incubator',
	'wminc-viewuserlang' => 'Benutzersproch un Teschtwiki aaluege',
	'wminc-testwiki' => 'Teschtwiki:',
	'wminc-testwiki-none' => 'Keis/Alli',
	'wminc-prefinfo-language' => 'Sproch vu Dyyre Benutzeroberflächi - nit abhängig vum Teschtwiki',
	'wminc-prefinfo-code' => 'Dr ISO-639-Sprochcode',
	'wminc-prefinfo-project' => 'S Wikimedia-Projäkt, wu du dra schaffsch („Incubator“ fir Benutzer, wu allgmeini Ufgabe ibernämme)',
	'wminc-prefinfo-error' => 'Du hesch e Projäkt uusgwehlt, wu s e Sprochcode derfir brucht.',
	'wminc-warning-unprefixed' => 'Obacht: Du bearbeitsch e Syte ohni Präfix!',
	'wminc-warning-suggest' => 'Do chasch e Syte aalege: [[$1]].',
	'wminc-warning-suggest-move' => 'Du chasch [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} die Syte no $1 verschiebe].',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'wminc-desc' => 'Testowy wikijowy system za Wikimedia Incubator',
	'wminc-viewuserlang' => 'Wužiwarsku rěč a testowy wiki sej wobhladać',
	'wminc-testwiki' => 'Testowy wiki:',
	'wminc-testwiki-none' => 'Žadyn/Wšě',
	'wminc-prefinfo-language' => 'Rěč twojeho wužiwarskeho powjercha - wot twojeho testoweho wikija njewotwisna',
	'wminc-prefinfo-code' => 'Rěčny kod ISO 639',
	'wminc-prefinfo-project' => 'Wikimedijowy projekt wubrać (Incubatorowa opcija je za wužiwarjow, kotřiž powšitkowne dźěło činja)',
	'wminc-prefinfo-error' => 'Sy projekt wubrał, kotryž sej rěčny kod wužaduje.',
	'wminc-warning-unprefixed' => 'Warnowanje: strona, kotruž wobdźěłuješ, nima prefiks!',
	'wminc-warning-suggest' => 'Móžeš na [[$1]] stronu wutworić.',
	'wminc-warning-suggest-move' => 'Móžeš [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} tutu stronu do $1 přesunyć].',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'wminc-desc' => 'Systema pro essayar wikis in Wikimedia Incubator',
	'wminc-viewuserlang' => 'Vider le lingua de un usator e su wiki de test',
	'wminc-testwiki' => 'Wiki de test:',
	'wminc-testwiki-none' => 'Nulle/Totes',
	'wminc-prefinfo-language' => 'Le lingua de tu interfacie - independente de tu wiki de test',
	'wminc-prefinfo-code' => 'Le codice ISO 639 del lingua',
	'wminc-prefinfo-project' => 'Selige le projecto Wikimedia (le option Incubator es pro usatores qui face labor general)',
	'wminc-prefinfo-error' => 'Tu seligeva un projecto que require un codice de lingua.',
	'wminc-warning-unprefixed' => 'Attention: le pagina que tu modifica es sin prefixo!',
	'wminc-warning-suggest' => 'Tu pote crear un pagina a [[$1]].',
	'wminc-warning-suggest-move' => 'Tu pote [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} renominar iste pagina verso $1].',
);

/** Japanese (日本語)
 * @author Fryed-peach
 */
$messages['ja'] = array(
	'wminc-desc' => 'ウィキメディア・インキュベーター用の試験版ウィキシステム',
	'wminc-viewuserlang' => '利用者の言語と試験版ウィキを探す',
	'wminc-testwiki' => '試験版ウィキ:',
	'wminc-testwiki-none' => 'なし/すべて',
	'wminc-prefinfo-language' => 'あなたのインタフェース言語（あなたの試験版ウィキとは独立しています）',
	'wminc-prefinfo-code' => 'ISO 639 言語コード',
	'wminc-prefinfo-project' => 'ウィキメディア・プロジェクトを選択する (「Incubator」オプションは全般的な作業を行う利用者のためのものです)',
	'wminc-prefinfo-error' => 'あなたが選択したプロジェクトは言語コードが必要です。',
	'wminc-warning-unprefixed' => '警告: あなたが編集しているページには接頭辞が付いていません！',
	'wminc-warning-suggest' => 'あなたは [[$1]] にページを作りました。',
	'wminc-warning-suggest-move' => '[{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} このページを $1 に移動]できます。',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'wminc-desc' => 'Täß-Wiki Süßtemm för dä Inkubator vun de Wikimedia Shtefftung',
	'wminc-viewuserlang' => 'Däm Metmaacher sing Shprooch un sing Täß-Wiki aanloore',
	'wminc-testwiki' => 'Täß-Wiki:',
	'wminc-testwiki-none' => 'Kein/All',
	'wminc-prefinfo-language' => 'De Shprooch för däm Wiki sing Bovverfläsch un et Wiki ze Bedeene — hät nix met Dingem Täß-Wiki singe Shprooch ze donn',
	'wminc-prefinfo-code' => 'Dat Köözel för de Shprooch noh dä Norrem ISO 639',
	'wminc-prefinfo-project' => 'Donn dat Projak ußwähle — „Incubator“ is för Lück met alljemein Werk.',
	'wminc-prefinfo-error' => 'Bei dämm Projäk moß och en Köözel för de Shprooch aanjejovve wääde.',
	'wminc-warning-unprefixed' => 'Opjepaß: Do bes en Sigg oohne ene Namess-Försatz för et Projäk un en Shprooch am beärbeide!',
	'wminc-warning-suggest' => 'De kanns en Sigg aanlääje als [[$1]].',
	'wminc-warning-suggest-move' => 'Do kanns hee di Sigg [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} op $1 ömnänne].',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'wminc-desc' => 'Testwiki-System fir de Wikimedia-Incubator',
	'wminc-viewuserlang' => 'Benotzersprooch an Test-Wiki nokucken',
	'wminc-testwiki' => 'Test-Wiki:',
	'wminc-testwiki-none' => 'Keen/All',
	'wminc-prefinfo-language' => 'Sprooch vun ärem Interface - onofhängeg vun Ärer Test-Wiki',
	'wminc-prefinfo-code' => 'Den ISO 639 Sprooche-Code',
	'wminc-prefinfo-project' => "Wielt de Wikimediaprojet (D'Optioun 'Incubator' ass fir Benotzer déi allgemeng Aufgaben erledigen)",
	'wminc-prefinfo-error' => 'Dir hutt e Projet gewielt deen e Sproochecode brauch.',
	'wminc-warning-unprefixed' => "Opgepasst: d'Säit déi Dir ännert huet kee Prefix!",
	'wminc-warning-suggest' => 'Dir kënnt eng Säit op [[$1]] uleeën.',
	'wminc-warning-suggest-move' => 'Dir kënnt [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} dës Säit op $1 réckelen].',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 */
$messages['nl'] = array(
	'wminc-desc' => 'Testwiki-systeem voor Wikimedia Incubator',
	'wminc-viewuserlang' => 'Gebruikerstaal en testwiki opzoeken',
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-none' => 'Geen/alles',
	'wminc-prefinfo-language' => 'Uw interfacetaal - onafhankelijk van uw testwiki',
	'wminc-prefinfo-code' => 'De ISO 639-taalcode',
	'wminc-prefinfo-project' => 'Selecteer het Wikimedia-project (Incubator-optie is voor gebruikers die algemeen werk doen)',
	'wminc-prefinfo-error' => 'U selecteerde een project dat een taalcode nodig heeft.',
	'wminc-warning-unprefixed' => 'Waarschuwing: de pagina die u aan het bewerken bent, heeft geen voorvoegsel!',
	'wminc-warning-suggest' => 'U kunt een pagina aanmaken op [[$1]].',
	'wminc-warning-suggest-move' => 'U kunt [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} deze pagina hernoemen naar $1].',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'wminc-desc' => 'Sistèma de tèst de wiki per Wikimedia Incubator',
	'wminc-viewuserlang' => "Veire la lenga de l'utilizaire e son wiki de tèst",
	'wminc-testwiki' => 'Wiki de tèst :',
	'wminc-testwiki-none' => 'Pas cap / totes',
	'wminc-prefinfo-language' => "Vòstra lenga de l'interfàcia - independenta de vòstre wiki de tèst",
	'wminc-prefinfo-code' => 'Lo còde ISO 639 de la lenga',
	'wminc-prefinfo-project' => "Seleccionatz lo projècte Wikimedia (l'opcion Incubator es destinada als utilizaires que fan un trabalh general)",
	'wminc-prefinfo-error' => 'Avètz seleccionat un projècte que necessita un còde de lenga.',
	'wminc-warning-unprefixed' => 'Atencion : la pagina que modificatz a pas de prefixe !',
	'wminc-warning-suggest' => 'Podètz crear la pagina a [[$1]].',
	'wminc-warning-suggest-move' => 'Podètz [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} tornar nomenar aquesta pagina cap a $1].',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'wminc-desc' => 'Testowa wiki dla Inkubatora Wikimedia',
	'wminc-testwiki' => 'Testowa wiki',
	'wminc-testwiki-none' => 'Żadna lub wszystkie',
	'wminc-prefinfo-language' => 'Język interfejsu (niezależny od języka testowej wiki)',
	'wminc-prefinfo-code' => 'Kod języka według ISO 639',
	'wminc-warning-suggest' => 'Możesz utworzyć stronę „[[$1]]”.',
	'wminc-warning-suggest-move' => 'Możesz [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} przenieść tę stronę do „$1”].',
);

/** Portuguese (Português)
 * @author Waldir
 */
$messages['pt'] = array(
	'wminc-desc' => 'Sistema de wikis de teste para a Incubadora Wikimedia',
	'wminc-viewuserlang' => 'Procurar idioma de utilizador e wiki de teste',
	'wminc-testwiki' => 'Wiki de teste:',
	'wminc-testwiki-none' => 'Nenhum/Tudo',
	'wminc-prefinfo-language' => 'A seu idioma de interface - independente do seu wiki de teste',
	'wminc-prefinfo-code' => 'O código de língua ISO 639',
	'wminc-prefinfo-project' => 'Selecione o projeto Wikimedia (a opção Incubadora é para usuários que fazem trabalho geral)',
	'wminc-prefinfo-error' => 'Você selecionou um projeto que necessita de um código de língua.',
	'wminc-warning-unprefixed' => 'Aviso: a página que você está a editar não tem prefixo!',
	'wminc-warning-suggest' => 'Você pode criar uma página em [[$1]].',
	'wminc-warning-suggest-move' => 'Você pode [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} mover esta página para $1].',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 */
$messages['pt-br'] = array(
	'wminc-desc' => 'Sistema de wikis de teste para a Incubadora Wikimedia',
	'wminc-viewuserlang' => 'Procurar idioma do utilizador e wiki de teste',
	'wminc-testwiki' => 'Wiki de teste:',
	'wminc-testwiki-none' => 'Nenhum/Tudo',
	'wminc-prefinfo-language' => 'Seu idioma de interface - independente do seu wiki de teste',
	'wminc-prefinfo-code' => 'O código de língua ISO 639',
	'wminc-prefinfo-project' => 'Selecione o projeto Wikimedia (a opção Incubadora é para usuários que fazem trabalho geral)',
	'wminc-prefinfo-error' => 'Você selecionou um projeto que necessita de um código de língua.',
	'wminc-warning-unprefixed' => 'Aviso: a página que você está editando não tem prefixo!',
	'wminc-warning-suggest' => 'Você pode criar uma página em [[$1]].',
	'wminc-warning-suggest-move' => 'Você pode [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} mover esta página para $1].',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'wminc-testwiki-none' => 'Nisciune/Tutte',
);

/** Russian (Русский)
 * @author Ferrer
 */
$messages['ru'] = array(
	'wminc-warning-suggest' => 'Вы можете создать страницу на [[$1]].',
	'wminc-warning-suggest-move' => 'Вы можете [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} переименовать эту страницу в $1].',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'wminc-desc' => 'Testovací wiki systém pre Inkubátor Wikimedia',
	'wminc-viewuserlang' => 'Vyhľadať jazyk používateľa a testovaciu wiki',
	'wminc-testwiki' => 'Testovacia wiki:',
	'wminc-testwiki-none' => 'Žiadna/všetky',
	'wminc-prefinfo-language' => 'Jazyk vášho rozhrania - nezávisle od vašej testovacej wiki',
	'wminc-prefinfo-code' => 'ISO 639 kód jazyka',
	'wminc-prefinfo-project' => 'Vybrať projekt Wikimedia (voľba Inkubátor je pre používateľov, ktorí vykonávajú všeobecnú prácu)',
	'wminc-prefinfo-error' => 'Vybrali ste projekt, ktorý potrebuje kód jazyka.',
	'wminc-warning-unprefixed' => 'Upozornenie: stránka, ktorú upravujete je bez predpony!',
	'wminc-warning-suggest' => 'Môžete vytvoriť stránku na [[$1]].',
	'wminc-warning-suggest-move' => 'Môžete [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} presunúť túto stránku na $1].',
);

/** Swedish (Svenska)
 * @author Gabbe.g
 * @author Najami
 */
$messages['sv'] = array(
	'wminc-desc' => 'Testwikisystem för Wikimedia Incubator',
	'wminc-viewuserlang' => 'Kolla upp användarspråk och testwiki',
	'wminc-testwiki' => 'Testwiki:',
	'wminc-testwiki-none' => 'Ingen/Alla',
	'wminc-prefinfo-language' => 'Ditt gränssnittsspråk - oavhängigt från din testwiki',
	'wminc-prefinfo-code' => 'ISO 639-språkkoden',
	'wminc-prefinfo-project' => 'Välj Wikimediaprojekt (alternativet Incubator för användare som gör allmänt arbete)',
	'wminc-prefinfo-error' => 'Du valde ett projekt som kräver en språkkod.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'wminc-testwiki' => 'పరీక్షా వికీ:',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'wminc-desc' => 'Hệ thống wiki thử của Wikimedia Incubator',
	'wminc-viewuserlang' => 'Ngôn ngữ và wiki thử của người dùng',
	'wminc-testwiki' => 'Wiki thử:',
	'wminc-testwiki-none' => 'Không có / tất cả',
	'wminc-prefinfo-language' => 'Ngôn ngữ giao diện của bạn – có thể khác với wiki thử',
	'wminc-prefinfo-code' => 'Mã ngôn ngữ ISO 639',
	'wminc-prefinfo-project' => 'Hãy chọn dự án Wikimedia (hay Incubator để làm việc chung)',
	'wminc-prefinfo-error' => 'Bạn đã chọn một dự án bắt phải có mã ngôn ngữ.',
	'wminc-warning-unprefixed' => 'Cảnh báo: bạn đang sửa đổi trang chưa có tiền tố!',
	'wminc-warning-suggest' => 'Bạn có thể tạo trang “[[$1]]”.',
	'wminc-warning-suggest-move' => 'Bạn có thể [{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} di chuyển trang này đến $1].',
);

/** Yue (粵語)
 * @author Shinjiman
 */
$messages['yue'] = array(
	'wminc-desc' => 'Wikimedia Incubator嘅測試wiki系統',
	'wminc-viewuserlang' => '睇用戶語言同測試wiki',
	'wminc-testwiki' => '測試wiki:',
	'wminc-testwiki-none' => '無/全部',
	'wminc-prefinfo-language' => '你嘅界面語言 - 響你嘅測試wiki獨立嘅',
	'wminc-prefinfo-code' => 'ISO 639語言碼',
	'wminc-prefinfo-project' => '揀Wikimedia計劃 (Incubator選項用來做一般嘅嘢)',
	'wminc-prefinfo-error' => '你揀咗一個需要語言碼嘅計劃。',
	'wminc-warning-unprefixed' => '警告: 你編輯嘅版未加入前綴！',
	'wminc-warning-suggest' => '你可以響[[$1]]開版。',
	'wminc-warning-suggest-move' => '你可以[{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} 搬呢一版到$1]。',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Shinjiman
 */
$messages['zh-hans'] = array(
	'wminc-desc' => '维基孵育场的测试wiki系统',
	'wminc-viewuserlang' => '查看用户语言与测试wiki',
	'wminc-testwiki' => '测试wiki:',
	'wminc-testwiki-none' => '无/所有',
	'wminc-prefinfo-language' => '您的接口语言 - 在您的测试wiki中为独立的',
	'wminc-prefinfo-code' => 'ISO 639语言代码',
	'wminc-prefinfo-project' => '选择维基媒体计划 (孵育场选项用作一般用途)',
	'wminc-prefinfo-error' => '您已选择一个需要语言代码的计划。',
	'wminc-warning-unprefixed' => '警告: 您编辑的页面尚未加入前缀！',
	'wminc-warning-suggest' => '您可以在[[$1]]开新页面。',
	'wminc-warning-suggest-move' => '您可以[{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} 移动这个页面到$1]。',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Shinjiman
 */
$messages['zh-hant'] = array(
	'wminc-desc' => '維基孵育場的測試wiki系統',
	'wminc-viewuserlang' => '查看用戶語言與測試wiki',
	'wminc-testwiki' => '測試wiki:',
	'wminc-testwiki-none' => '無/所有',
	'wminc-prefinfo-language' => '您的界面語言 - 在您的測試wiki中為獨立的',
	'wminc-prefinfo-code' => 'ISO 639語言代碼',
	'wminc-prefinfo-project' => '選擇維基媒體計劃 (孵育場選項用作一般用途)',
	'wminc-prefinfo-error' => '您已選擇一個需要語言代碼的計劃。',
	'wminc-warning-unprefixed' => '警告: 您編輯的頁面尚未加入前綴！',
	'wminc-warning-suggest' => '您可以在[[$1]]開新頁面。',
	'wminc-warning-suggest-move' => '您可以[{{fullurl:Special:MovePage/$3|wpNewTitle=$2}} 移動這個頁面到$1]。',
);

