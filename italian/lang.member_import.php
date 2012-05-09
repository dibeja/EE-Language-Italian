<?php

$L = array(

'alphanumeric_not_allowed' =>
'Non sono permessi le delimitazioni alfanumeriche (a-z / 0-9)',

'assign_fields' =>
'Assegnare campi',

'assign_fields_blurb' =>
'Far corrispondere i campi di dati a quelli di ExpressionEngine.',

'comma' =>
'Virgola',

'confirm_details' =>
'Confermare Dettagli',

'confirm_details_blurb' =>
'Per favore controllare i dettagli sotto prima di importare i dati. Se avete sbagliato qualcosa, ritornate indietro per fare le modifiche necessarie.',

'confirm_field_assignment' =>
'Confermare l&#39;assegnazione dei campi',

'confirm_field_assignment_blurb' =>
'Controllare l&#39;assegnazione dei campi. Se avete sbagliato qualcosa, ritornate indietro per fare le modifiche necessarie.',

'convert_from_delimited' =>
'Convertire il testo delimitato in XML',

'convert_from_delimited_blurb' =>
'Vi permette di creare un documento XML degli utenti di ExpressionEngine da un documento di testo di un&#39;altro programma software.',

'daylight_savings' =>
'Ora Legale',

'default_group_id' =>
'ID di un Gruppo predefinito',

'default_settings' =>
'Fornire i Parametri per l&#39;Impostazione Predefinita',

'default_settings_blurb' =>
'Configurate i parametri che volete come impostazione predefinita. Notate che questi parametri predefiniti sarranno utilizzati soltanto quando non c&#39;&#232 un valore
implicito nel documento XML. Questi parametri NON anulleranno i dati XML.',

'delimited_file_loc' =>
'Percorso del file Utenti',

'delimiter' =>
'Carattere di Delimitazione',

'delimiter_blurb' =>
'Questo carattere separer&#224; i dati come il tab, la virgola, il simbolo pipe, il cancelletto ecc.',

'download' =>
'Scaricare il documento XML',

'dst_enabled' =>
'DST Abilitato',

'duplicate_email' =>
'Duplicare email: ',

'duplicate_field_assignment' =>
'Duplicare l&#39;assegnazione del campo: %x',

'duplicate_member_id' =>
'Duplicare ID dell&#39;Utente: "%x"<br /> &#200; consigliabile che non utiliziate il tag &lt;member_id&gt; ma che consentiate a ExpressionEngine ad auto-incrementare il  member_id',

'duplicate_screen_name' =>
'Duplicare Nome Schermo: ',

'duplicate_username' =>
'Duplicare il nome utente: ',

'enclosure' =>
'Carattere di Chiusura',

'enclosure_blurb' =>
'Questo carattere, se fornito, circonda i vostri dati. Nell&#39;esempio che segue, il carattere di chiusura &#232; una doppia virgoletta: "<br />',

'enclosure_example' =>
'"Mario Rossi", "mrossi", "mario@esempio.com", ...',

'enclosure_label' =>
'Chiusura: ',

'encrypted_passwords' =>
'Le Password sono gi&#224; criptate',

'file_loc_blurb' =>
'Il percorso del file dev&#39;essere relativo alla cartella del pannello di controllo del sito. Per esempio: ../utenti.txt, se lo avete messo nella cartella principale del sito.',

'group_id' =>
'Gruppo di Utenti Predefinito',

'import' =>
'Importare!',

'import_from_xml' =>
'Importare da un documento XML',

'import_from_xml_blurb' =>
'Vi permette di importare gli utenti da un documento XML con il formato XML degli utenti ExpressionEngine',

'import_info' =>
'Informazione dell&#39;Importazione',

'import_success' =>
'Gli utenti sono stati importati',

'import_success_blurb' =>
'I dati XML degli utenti sono stati importati nel vostro database!',

'info_blurb' =>
'Per utilizzare questa utility, dovete prima caricare il documento che contiene i dati esportati degli utenti sul vostro server, e poi specificare il percorso del file.',

'invalid_element' =>
'Elemento Assente o Invalido - era previsto &lt;member&gt;',

'invalid_path' =>
'PERCORSO INVALIDO! Il file non esiste: ',

'invalid_tag' =>
'Tag XML Invalido!',

'invalid_xml' =>
'C&#39;&#232; un problema con il vostro documento XML. Controllate la documentazione di ExpressionEngine riguardante il formato XML dei file utente.',

'language' =>
'Lingua Predefinita',

'member_fields' =>
'Campi Utente',

'member_id_warning' =>
'ATTENZIONE: se avete i tag &lt;member_id&gt; nel documento XML, gli utenti preesistenti con lo stesso member_id verranno SOSTIUITI! Procedere con cautela!',

'member_import_utility' =>
'Utility per l&#39;Importazione degli Utenti',

'member_import_welcome' =>
'Questa utility vi permette di importare utenti da altri programmi in ExpressionEngine',

'missing_birthday_child' =>
'Assente Elemento(i) figlio di  &lt;compleanno&gt;: &lt;giorno&gt; &lt;mese&gt; &lt;anno&gt; previsto',

'missing_email_field' =>
'Dovete assegnare un campo per "email"',

'missing_screen_name_field' =>
'Dovete assegnare un campo per "Nome Schermo"',

'missing_username_field' =>
'Dovete assegnare un campo per "Nome Utente"',

'no' =>
'No',

'no_delimiter' =>
'Dovete fornire un carattere di delimitazione con il parametro "%x".',

'no_file_submitted' =>
'Dovete fornire un percorso relativo al vostro file per i dati utente',

'no_read_access' =>
'Impossibile leggere il file: ',

'none' =>
'Nessun',

'not_enough_fields' =>
'Dovete avere almeno 3 campi: nome utente, nome visualizzato, e indirizzo email',

'option' =>
'Opzione',

'other' =>
'Altro:',

'password_field_warning' =>
'Nota: Se non fate corrispondere nessuno dei campi a "Password", saranno assegnate delle password criptate casualmete e gli utenti importati dovranno utilizzare il link "Hai dimenticato la password" per connettersi.',

'password_warning' =>
'Avvertimento Password',

'password_warning_blurb' =>
'Se non &#232; stata fornita una password, gli utenti importati dovranno utilizzare il link "Hai dimenticato la password" per connettersi. Inoltre, se le impostazioni di criptazione di ExpressionEngine (sha1/md5) non corrispondono al tipo di criptazione dei dati importati, le password non funzioneranno e gli utenti dovranno utilizzare il link "Hai dimenticato la password". Le password di tipo="testo" saranno criptate durante la procedura d&#39;imporatzione.',

'plaintext_passwords' =>
'Le password sono in testo semplice',

'required_fields' =>
'* &#200; obbligatorio fornire il Nome Utente, il Nome di Schermo, e l&#39;Indirizzo Email.',

'tab' =>
'Scheda',

'time_format' =>
'Formato dell&#39;ora Predefinito',

'timezone' =>
'Fuso Orario Predefinito',

'total_members_imported' =>
'Un totale di %x utenti sono stati importati.',

'value' =>
'Valore',

'view_in_browser' =>
'Visualizza nel Browser',

'view_xml' =>
'Visualizza XML',

'within_user_record' =>
'nella voce per l&#39;utente',

'xml_file' =>
'Documento XML',

'xml_file_loc' =>
'Percorso del file XML degli Utenti',

'xml_file_loc_blurb' =>
'Il percorso del file dev&#39;essere relativo alla cartella per il pannello di controllo del sito. Per esempio: ../utenti.xml, se lo avete messo nella cartella principale del sito.',

'xml_imported' =>
'Dati XML Utente Importati',

'yes' =>
'S&#236;',

'your_data' =>
'I Vostri Dati',

// END
''=>''
);
?>