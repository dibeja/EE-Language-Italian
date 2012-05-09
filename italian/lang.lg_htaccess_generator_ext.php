<?php
/**
* Italian language file for LG .htaccess Generator
* @author Marco De Luca - marcodeluca@hotmail.it
* 
* Questo file deve essere salvato nella cartella
* /system/language/italian/ di ExpressionEngine.
*
* @package LgHtaccessGenerator
* @version 1.0.0
* @author Leevi Graham <http://leevigraham.com>
* @see http://leevigraham.com/cms-customisation/expressionengine/addon/lg-htaccess-generator/
* @copyright Copyright (c) 2007-2008 Leevi Graham
* @license {@link http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution-Share Alike 3.0 Unported} All source code commenting and attribution must not be removed. This is a condition of the attribution clause of the license.
*/

global $PREFS;

$L = array(

"lg_htaccess_generator_title" => "LG .htaccess Generator",

'access_rights' 			=> 'Accesso Estenzione',
'enable_extension_for_this_site' => 'Abilitare LG .htaccess Generator per questo sito?',

'which_groups_are_allowed_to_update_htaccess_label'	=> 'Quali gruppi utente possono generare file .htaccess?',
'which_weblogs_label' 		=> 'Quale ' . $PREFS->ini('weblog_nomenclature') . 'verr&#224; visualizzato nella scheda LG .htaccess?',
'no_weblogs_msg' 			=> 'Non ci sono '  . $PREFS->ini('weblog_nomenclature') . 'assegnati a questo sito.',

'no_weblogs_msg'			=> 'Nessun weblogs &#232; stato installato',

'htaccess_options'			=> 'Opzioni Generazione .htaccess',
'htaccess_options_info'		=> '<p>LG .htaccess Generator richiede che ci sia un file .htaccess gi&#224; esistente e che sia scrivibile. Se il file contiene delle regole queste non saranno modificate.</p>
								<p style="margin-top:9px">Le regole sotto saranno aggiunte al tuo file .htaccess dopo che i seguenti tag speciali saranno sostituiti:</p>
								<ul>
									<li><strong><code>{ee:template_groups}</code></strong> sar&#224; sostituito con un pipe che delimita la lista dei gruppi di modelli dei siti</li>
									<li><strong><code>{ee:pages}</code></strong> sar&#224; sostituito con un pipe che delimita la lista degli url delle pagine dei siti</li>
									<li><strong><code>{ee:404}</code></strong> verranno sostituiti con il percorso sites 404 es: site/404</li>
								</ul>
								<p>Read more about the "include method" of removing your sites index.php on the <a rel="external" target="_blank" href="http://expressionengine.com/index.php?affiliate=leevi&amp;page=/wiki/Remove_index.php_From_URLs/#Include_List_Method">ExpressionEngine Wiki</a>.',
'www_handling_label'		=> 'Come volete gestire www. nell&#145; url?',
'www_handling_nothing'		=> 'Non fare niente, lascier&#242; decidere al server',
'www_handling_add'			=> 'Aggiungi www. all&#145; url',
'www_handling_remove'		=> 'Rimuovi www. dall&#145; url',

'htaccess_path_label'		=> 'Cartella del server dove verr&#224; generato il tuo file .htaccess',
'htaccess_rules_label'		=> "Regole .htaccess",

'scripts' 					=> 'Scripts',
'scripts_info' 				=> 'LG .htaccess Generator richiede <a href="http://jquery.com">jQuery Core v1.2.6+</a> per funzionare correttamente.',
'jquery_core_path_label'	=> 'jQuery Core v1.2.6+ URL',

'check_for_updates_title' 	=> 'Controllare aggiornamenti?',
'check_for_updates_info' 	=> 'LG .htaccess Generator pu&#242; collegarsi al sito (<a href="http://leevigraham.com/">http://leevigraham.com</a>) e controllare gli aggiornamenti.',
'check_for_updates_label' 	=> 'Ti piacerebbe che questa estenzione controlli gli aggiornamenti e li visualizzi nella homepage del Pannello di Controllo?',

'donation'					=> 'Questa estenzione &#232; stata sviluppata da <a href="http://leevigraham.com">Leevi Graham</a>. <br />Supporta il suo sviluppo tramite una donazione.',
'lg_admin_title'			=> 'Opzioni LG Admin',
'show_donate_label'			=> 'Mostra il link della donazione in alto alla pagina delle impostazioni?',
'show_promos_label'			=> 'Mostra promo in alto alla pagina delle impostazioni?',

'htaccess_generated'		=> 'Il tuo file .htaccess &#232; stato generato con successo.',

'htaccess_not_writable'		=> 'Il tuo .htaccess non pu&#242; essere trovato o non &#232; scrivibile. Per favore che il file .htaccess esista e che abbia i giusti permessi.',
'dir_doesnt_exist'			=> 'La cartella per il file .htaccess non esiste.',
'htaccess_generated_error'	=> 'C&#145; &#232; un errore durante la generazione del file .htaccess.',

// END
''=>''
);
?>