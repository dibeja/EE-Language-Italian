<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

function admin_notify_mailinglist_title()
{
return <<<EOF
Qualcuno si è iscritto alla mailing list
EOF;
}

function admin_notify_mailinglist()
{
return <<<EOF
Una nuova iscrizione alla mailing list è stata accettata

Indirizzo Email: {email}
Mailing List: {mailing_list}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

function admin_notify_entry_title()
{
return <<<EOF
Un nuovo articolo di weblog è stato pubblicato
EOF;
}

function admin_notify_entry()
{
return <<<EOF
Un nuovo articolo è stato pubblicato nel seguente weblog: 
{weblog_name}

Il titolo dell'articolo è:
{entry_title}

Pubblicato da: {name}
Email: {email}

Per leggere l'articolo visitare: 
{entry_url}

EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

function admin_notify_reg_title()
{
return <<<EOF
Notifica di registrazione di un nuovo utente
EOF;
}

function admin_notify_reg()
{
return <<<EOF
La seguente persona ha richiesto di essere iscritto:{name} 

Dal sito: {site_name}

URL del vostro pannello di controllo: {control_panel_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

function admin_notify_comment_title()
{
return <<<EOF
Avete appena ricevuto un commento
EOF;
}

function admin_notify_comment()
{
return <<<EOF
Avete appena ricevuto un commento da questo weblog:
{weblog_name}

Il titolo dell' articolo è:
{entry_title}

Situato su: 
{comment_url}

Pubblicato da: {name}
Email: {email}
URL: {url}
Luogo: {location}

{comment}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Trackback
//--------------------------------------------------

function admin_notify_trackback_title()
{
return <<<EOF
Avete appena ricevuto un trackback
EOF;
}

function admin_notify_trackback()
{
return <<<EOF
Avete appena ricevuto un trackback dal seguente articolo:
{entry_title}

Situato su: 
{comment_url}

Il trackback è sato inviato dal seguente weblog:
{sending_weblog_name}

Titolo dell'Articolo:
{sending_entry_title}

URL del Weblog:
{sending_weblog_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

function mbr_activation_instructions_title()
{
return <<<EOF
Il vostro codice di attivazione è allegato
EOF;
}

function mbr_activation_instructions()
{
return <<<EOF
Grazie di esservi iscritti.

Per attivare il vostro nuovo account, cliccate sul seguente link:

{unwrap}{activation_url}{/unwrap}

Grazie!

{site_name}

{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

function forgot_password_instructions_title()
{
return <<<EOF
Dati per il login
EOF;
}

function forgot_password_instructions()
{
return <<<EOF
{name},

Per cambiare la vostra password, andate alla seguente pagina:

{reset_url}

La vostra password sarà automaticamente resettata, e vi sarà inviata una nuova password.

Se non desiderate cambiare la vostra password, ignorate questo messaggio. Scadrà dopo 24 ore. 

{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

function reset_password_notification_title()
{
return <<<EOF
Nuovi dati per il Login
EOF;
}

function reset_password_notification()
{
return <<<EOF
{name},

Ecco i vostri nuovi dati per il Login:

Nome Utente: {username}
Password: {password}

{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

function validated_member_notify_title()
{
return <<<EOF
La vostra iscrizione è stata attivata

EOF;
}

function validated_member_notify()
{
return <<<EOF
{name},

La vostra iscrizione è stata attivata ed è pronta per l'uso.

Grazie!

{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

function decline_member_validation_title()
{
return <<<EOF
La vostra iscrizione è stata rifiutata
EOF;
}

function decline_member_validation()
{
return <<<EOF
{name},

Siamo spiacenti ma il nostro personale non ha validato la vostra iscrizione.

{site_name}
{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

function mailinglist_activation_instructions_title()
{
return <<<EOF
Conferma per Email
EOF;
}

function mailinglist_activation_instructions()
{
return <<<EOF
Grazie per esservi iscritti alla mailing list {mailing_list}!

Per favore cliccare sul link sotto per confermare la vostra email.

Se non volete essere agguinti alla nostra mailing list, ignorate quest' email.

{unwrap}{activation_url}{/unwrap}

Grazie!

{site_name}
EOF;
}
/* END */



//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

function comment_notification_title()
{
return <<<EOF
Qualcuno ha risposto al vostro commento
EOF;
}

function comment_notification()
{
return <<<EOF
Qualcuno ha risposto all'articolo a cui vi siete iscritti, su:
{weblog_name}

Il titolo dell'articolo è:
{entry_title}

Potete leggere il commento al seguente URL:
{comment_url}

{comment}

Per non ricevere più notifiche per questo commento, cliccate qui:
{notification_removal_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

function admin_notify_gallery_comment_title()
{
return <<<EOF
Avete ricevuto un commento
EOF;
}

function admin_notify_gallery_comment()
{
return <<<EOF
Avete ricevuto un commento per la seguente foto gallery:
{gallery_name}

Il titolo della gallery è:
{entry_title}

Situato su:
{comment_url}

{comment}
EOF;
}
/* END */

//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

function gallery_comment_notification_title()
{
return <<<EOF
Qualcuno ha risposto al vostro commento
EOF;
}

function gallery_comment_notification()
{
return <<<EOF
Qualcuno ha risposto alle foto a cui vi siete iscritti:
{gallery_name}

Potete vedere il commento al seguente URL:
{comment_url}

{comment}

Per non ricevere più notifiche per questo commento, cliccate qui:
{notification_removal_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

function admin_notify_forum_post_title()
{
return <<<EOF
Qualcuno ha scritto una nuovo post nel forum: {forum_name}
EOF;
}

function admin_notify_forum_post()
{
return <<<EOF
{name_of_poster} ha scritto una nuovo post in {forum_name}

L'oggetto del thread è:
{title}

Il post si trova su:
{post_url}

{body}
EOF;
}
// END


//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

function forum_post_notification_title()
{
return <<<EOF
Qualcuno ha scritto un post in {forum_name}
EOF;
}

function forum_post_notification()
{
return <<<EOF
Qualcuno ha scritto un post nel thread a cui siete iscritti:
{forum_name}

L'oggetto del thread è:
{title}

Il post si trova su:
{post_url}

{body}

Per non ricevere più notifiche per questo commento, cliccate qui:
{notification_removal_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

function private_message_notification_title()
{
return <<<EOF
Qualcuno vi ha mandato un messaggio privato
EOF;
}

function private_message_notification()
{
return <<<EOF

{recipient_name},

{sender_name} vi ha mandato un messaggio privato intitolato '{message_subject}'.

Per leggere il Messaggio Privato, accedete al vostro account e guardate nella casella di posta in arrivo: {site_url}

Per non ricevere più notifiche di Messaggi Privati, disattivare l'opzione nelle I mpostazioni Email:
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/

function pm_inbox_full_title()
{
return <<<EOF
La vostra casella di posta è piena
EOF;
}

function pm_inbox_full()
{
return <<<EOF
{recipient_name},

{sender_name} ha cercato d'inviarvi un messaggio privato,
ma la vostra casella di posta in arrivo è piena, oltrepassando il limite autorizzato di {pm_storage_limit}.

Fare il login e rimuovere messaggi indesiderati dalla vostra casella di posta in arrivo:
{site_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/

function forum_moderation_notification_title()
{
return <<<EOF
Notifica di moderazione su {forum_name}
EOF;
}

function forum_moderation_notification()
{
return <<<EOF
{name_of_recipient}, un moderatore ha {moderation_action} il vostro thread.

Il titolo del thread è:
{title}

Il thread si trova su:
{thread_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/

function forum_report_notification_title()
{
return <<<EOF
Post segnalato in {forum_name}
EOF;
}

function forum_report_notification()
{
return <<<EOF

{reporter_name} ha segnalato un post scritto da {author} in:
{forum_name}

Motivo della segnalazione:
{reasons}

Note supplementari da {reporter_name}:
{notes} 

Il post si trova su:
{post_url}

Contenuto del post segnalato:
{body}
EOF;
}
/* END */



/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/

function offline_template()
{
return <<<EOF
<html>
<head>

<title>Sistema Non in Linea</title>

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>

</head>

<body>

<div id="content">

<h1>Sistema Non in Linea</h1>

<p>Questo sito non è attualmente in linea</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/

function message_template()
{
return <<<EOF
<html>
<head>

<title>{title}</title>

<meta http-equiv='content-type' content='text/html; charset={charset}' />

{meta_refresh}

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>

</head>

<body>

<div id="content">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/

function mailinglist_template()
{
return <<<EOF
{message_text}

Per rimuovere la vostra email da questa mailin list, cliccate qui:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
}
/* END */


?>