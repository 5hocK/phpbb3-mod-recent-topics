<?php

/**
*
* @package - NV recent topics
* @version $Id$
* @copyright (c) nickvergessen ( http://mods.flying-bits.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECENT_TOPICS'						=> 'aktuelle Themen',
	'RECENT_TOPICS_MOD'					=> 'aktuelle Themen MOD',
	'RT_CONFIG'							=> 'Konfiguration von aktuelle Themen',
	'RT_ANTI_TOPICS'					=> 'ausgeschlossene Themen',
	'RT_ANTI_TOPICS_EXP'				=> 'mit , (Komma) trennen<br />Wenn kein Thema ausgeschlossen werden soll 0 eingeben.',
	'RT_NUMBER'							=> 'aktuelle Themen',
	'RT_NUMBER_EXP'						=> 'Anzahl der Themen die angezeigt werden',
	'RT_PAGE_NUMBER'					=> 'aktuelle Themen Seitenanzahl',
	'RT_PAGE_NUMBER_EXP'				=> 'Du kannst weiter akutelle Themen mit einer kleinen Seitennavigation anzeigen lassen. Um das Feature zu deaktivieren einfach 0 eintragen.',
	'RECENT_TOPICS_LIST'				=> 'unter "aktuelle Themen" anzeigen',
	'RECENT_TOPICS_LIST_EXPLAIN'		=> 'Sollen Themen aus diesem Forum "aktuelle Themen" angezeigt werden?',
	'RT_SAVED'							=> 'Einstellungen gespeichert.',

	'RT_VIEW_ON'		=> 'NV recent-topics anzeigen',
	'RT_MEMBERLIST'		=> 'Mitgliederliste',
	'RT_INDEX'			=> 'Index',
	'RT_SEARCH'			=> 'Suche',
	'RT_FAQ'			=> 'FAQ',
	'RT_MCP'			=> 'MCP (Moderations-Bereich)',
	'RT_UCP'			=> 'UCP (Persönlicher-Bereich)',
	'RT_VIEWFORUM'		=> 'Forum',
	'RT_VIEWTOPIC'		=> 'Thema',
	'RT_VIEWONLINE'		=> 'Online-Anzeige',
	'RT_POSTING'		=> 'Posten',
	'RT_REPORT'			=> 'Beitrag melden',
	'RT_OTHERS'			=> 'andere Seiten',
));

?>