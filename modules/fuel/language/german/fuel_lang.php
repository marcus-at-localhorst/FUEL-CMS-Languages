<?php

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'PORTAL CMS (DE)';
$lang['logged_in_as'] = 'Eingeloggt als:';
$lang['logout'] = 'Logout';
$lang['fuel_developed_by'] = 'FUEL CMS version %1s wurde entwickelt von <a href="http://www.thedaylightstudio.com" target="_blank">Daylight Studio</a> und baut auf dem <a href="http://www.codeigniter.com" target="_blank">CodeIgniter</a> Framework auf.';
$lang['fuel_copyright'] = 'Copyright &copy; %1s Daylight Studio. All Rights Reserved.';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = 'Bitte erneut <a href="%1s">einloggen</a>.';
$lang['error_missing_module'] = "Modul %1s wurde nicht gefunden.";
$lang['error_invalid_login'] = 'Ungültiger Login.';
$lang['error_max_attempts'] = 'Die Logininformationen waren falsch. Aussicherheitsgründen wurden Sie ausgelogged. Bitte versuchen Sie es erneut in %s Sekunden.';
$lang['error_empty_user_pwd'] = 'Bitte Nutzername und Kennwort eingeben.';
$lang['error_pwd_reset'] = 'Beim Zurücksetzen Ihres Passworts trat ein Fehler auf.';

$lang['error_pwd_too_short'] = 'Password entered does not meet the %1s character min length requirement.';
$lang['error_pwd_too_long'] = 'Password entered exceeds the %1s character max length requirement.';
$lang['error_pwd_invalid'] = 'Please choose a stronger password. Try a mix of %1s.';

$lang['error_invalid_email'] = 'Ungültiger Nutzername oder Passwort.';
$lang['error_invalid_password_match'] = 'Ungültiger Nutzername oder Passwort.';
$lang['error_empty_email'] = 'Bitte gütlige Email Adresse eingeben.';
$lang['error_folder_not_writable'] = 'Der Ordner %1s muss über Schreibrechte verfügen.';
$lang['error_invalid_folder'] = 'Ungültiger Ordner %1s';
$lang['error_file_already_exists'] = 'Datei %1s existiert bereits.';
$lang['error_zip'] = 'There was an error creating the zipped file.';
$lang['error_no_permissions'] = 'You do not have permissions to complete this action. <a href="%1s">Try logging in again</a>.';
$lang['error_no_lib_permissions'] = 'You do not have permission to execute methods on the %1s class.';
$lang['error_page_layout_variable_conflict'] = 'There is an error with this layout because it either doesn\'t exist or contains one or more of the following reserved words: %1s';
$lang['error_no_curl_lib'] = 'You must have the curl php extension to use these tools.';
$lang['error_inline_page_edit'] = 'This variable must either be saved in the admin or edited in the associated views/_variables file.';
$lang['error_saving'] = 'Beim Speichern trat ein Fehler auf.';
$lang['error_cannot_preview'] = 'There was an error in trying to preview this page.';
$lang['error_cannot_make_api_call'] = 'There was an error making the API call to %1s.';
$lang['error_sending_email'] = 'There was an error sending an email to %1s.';
$lang['error_upload'] = 'Beim Hochladen der Datei trat ein Fehler auf.';
$lang['error_create_nav_group'] = 'Bitte Navigationsgruppe erstellen';
$lang['error_requires_string_value'] = 'The name field should be a string value';
$lang['error_missing_params'] = 'You are missing parameters to view this page';
$lang['error_invalid_method'] = 'Invalid method name';
$lang['error_curl_page'] = 'Error loading page with CURL';
$lang['error_class_property_does_not_exist'] = 'Class property %1s does not exist';
$lang['error_class_method_does_not_exist'] = 'Class method %1s does not exist';
$lang['error_could_not_create_folder'] = 'Could not create folder %1s';
$lang['error_could_not_create_file'] = 'Could not create file %1s';
$lang['error_no_build'] = "No build setup for this module.\n";
$lang['error_invalid_record'] = "The module record does not exists.";


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>Wir empfehlen Ihnen dringend Ihr Passwort zu ändern <em>%1s</em></strong>.';
$lang['warn_not_published'] = 'This item is not published.';
$lang['warn_not_active'] = 'This %1s is not active.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s angemeldet";
$lang['logged_out'] = "%s abgemeldet";
$lang['dev_pwd_instructions'] = 'This site is currently in development and requires a password to view.';
$lang['login_forgot_pwd'] = 'Passwort vergessen?';
$lang['login_reset_pwd'] = 'Passwort zurücksetzen';
$lang['login_btn'] = 'Anmelden';
$lang['logout_restore_original_user'] = 'Ursprünglichen Nutzer wiederherstellen';

$lang['auth_log_pass_reset_request'] = "Password reset request for '%1s' from %2s";
$lang['auth_log_pass_reset'] = "Password reset for '%1s' from %2s";
$lang['auth_log_cms_pass_reset'] = "Password reset from CMS for '%1s' from %2s";
$lang['auth_log_login_success'] = "Successful login by '%1s' from %2s";
$lang['auth_log_failed_updating_login_info'] = "There was an error updating the login information for by '%1s' from %2s";
$lang['auth_log_failed_login'] = "Failed login by '%1s' from %2s, login attempts: %3s";
$lang['auth_log_account_lockout'] = "Account lockout for '%1s' from %2s";

$lang['pwd_requirements'] = '<p style="text-align: left; margin: 10px 0 5px 0;"><strong>Password must be:</strong></p>';
$lang['pwd_min_length_required'] = 'A minimum of %1s characters';
$lang['pwd_max_length_required'] = 'A maximum of %1s characters';
$lang['pwd_lowercase_required'] = 'One or more lower case letters';
$lang['pwd_uppercase_required'] = 'One or more upper case letters';
$lang['pwd_numbers_required'] = 'One or more numbers';
$lang['pwd_symbols_required'] = 'One or more symbols';

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'Dashboard';
$lang['dashboard_intro'] = 'Willkommen im FUEL CMS!';
$lang['dashboard_hdr_latest_activity'] = 'Letzte Aktivität';
$lang['dashboard_hdr_latest_news'] = 'Neuigkeiten vom FUEL Team';
$lang['dashboard_hdr_modified'] = 'Zuletzt geänderte Seiten';
$lang['dashboard_hdr_site_docs'] = 'Dokumentation';
$lang['dashboard_change_pwd'] = 'Passwort ändern';
$lang['dashboard_change_pwd_later'] = 'Passwort später ändern';
$lang['dashboard_subscribe_rss'] = 'Beim FUEL RSS Feed anmelden';
$lang['dashboard_view_all_pages'] = 'Alle Seiten anzeigen';
$lang['dashboard_view_all_activity'] = 'Gesamte Aktivität anzeigen';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'Mein Profil';
$lang['profile_instructions'] = 'Nutzerinformationen ändern:';


/*
|--------------------------------------------------------------------------
| My Modules
|--------------------------------------------------------------------------
*/
$lang['section_my_modules'] = 'Meine Module';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/
//$lang['pwd_reset'] = 'An email to confirm your password reset is on its way.';
$lang['pwd_reset_error'] = 'The email address entered does not have an active reset token, please resubmit the reset password form to get a new reset link.';
$lang['pwd_reset_success'] = 'Your password has been successfully reset, please login.';

$lang['pwd_reset_error_not_match'] = 'The passwords submitted do not match.';

$lang['pwd_reset_missing_token'] = 'Missing or invalid reset token.';
$lang['pwd_reset_success'] = 'Your password has been successfully reset, please login with your user name and password.';
$lang['pwd_reset'] = 'An email with your password reset link has been sent.';
$lang['pwd_reset_subject'] = "FUEL admin password reset request";
$lang['pwd_reset_email'] = "Click the following link to reset your FUEL password:\n%1s";
$lang['pwd_reset_subject_success'] = "FUEL admin password reset success";
//$lang['pwd_reset_email_success'] = "Your FUEL password has been reset to %1s. To change your password, login to the FUEL CMS admin with this password and click on your login name in the upper right to access your profile information.";
$lang['pwd_reset_email_success'] = 'An email with your password reset link has been sent.';
$lang['cache_cleared'] = "Site cache cleared explicitly";


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard']        = 'Dashboard';
$lang['module_pages'] = 'Seiten';
$lang['module_blocks'] = 'Blöcke';
$lang['module_navigation'] = 'Navigation';
$lang['module_categories'] = 'Kategorien';
$lang['module_tags'] = 'Tags';
$lang['module_assets'] = 'Dateien';
$lang['module_sitevariables'] = 'Seitenvariablen';
$lang['module_users'] = 'Benutzer';
$lang['module_permissions'] = 'Berechtigungen';
$lang['module_tools'] = 'Tools';
$lang['module_manage_cache'] = 'Cache';
$lang['module_manage_activity'] = 'Aktivität';
$lang['module_manage_settings'] = 'Einstellungen';
$lang['module_generate'] = 'Generiert';


$lang['section_site'] = 'Seite';
$lang['section_blog'] = 'Blog';
$lang['section_modules'] = 'Module';
$lang['section_manage'] = 'Verwalten';
$lang['section_tools'] = 'Tools';
$lang['section_settings'] = 'Einstellungen';
$lang['section_recently_viewed'] = 'Kürzlich Angesehen';


/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "%1s Element(e) <em>%2s</em> erstellt";
$lang['module_edited'] = "%1s Element(e) <em>%2s</em> bearbeitet";
$lang['module_deleted'] = "%1s Element(e) für <em>%2s</em> gelöscht";
$lang['module_multiple_deleted'] = "Mehrere <em>%1s</em> gelöscht";
$lang['module_restored'] = "%1s Element aus dem Archiv wiederhergestellt";
$lang['module_instructions_default'] = "Hier können Sie %1s bearbeiten.";
$lang['module_restored_success'] = 'Vorherige Version erfolgreich wiederhergestellt.';
$lang['module_replaced_success'] = 'Eintrag wurde erfolgreich ersetzt.';
$lang['module_incompatible'] = 'Modul ist nicht mit dieser FUEL Version '.FUEL_VERSION . ' kompatibel';

$lang['cannot_determine_module'] = "Cannot determine module.";
$lang['incorrect_route_to_module'] = "Incorrect route to access this module.";
$lang['data_saved'] = 'Daten gespeichert.';
$lang['data_deleted'] = 'Daten wurden gelöscht.';
$lang['data_not_deleted'] = 'Konnte nicht komplett gelöscht werden';
$lang['no_data'] = 'Nichts anzuzeigen.';
$lang['no_preview_path'] = 'Diesem Modul wurde kein Vorschau Pfad zugewiesen';
$lang['delete_item_message'] = 'Folgendes Element löschen:';
$lang['replace_item_message'] = 'Select a record from the list below that you would like to replace. Replacing will transfer the data from one record to the other and then delete the old record.';

// command line
$lang['module_install'] = "The '%1s' module has successfully been installed.\n";
$lang['module_install_error'] = "There was an error installing the '%1s' module.\n";

$msg = "The module %1s has been uninstalled in FUEL.\n\n";
$msg .= "However, removing a module from GIT is a little more work that we haven't automated yet. However, the below steps should help.\n\n";
$msg .= "1. Delete the relevant section from the .gitmodules file.\n";
$msg .= "2. Delete the relevant section from .git/config.\n";
$msg .= "3. Run git rm --cached %2s (no trailing slash).\n";
$msg .= "4. Commit and delete the now untracked submodule files.\n";
$lang['module_uninstall'] = $msg;

$lang['module_update'] = "The module %1s has been updated in FUEL.\n";

// build
$lang['module_build_asset'] = "%1s optimized and ouput to %2s\n";

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['migrate_success'] = "You have successfully migrated to version %s.\n";
$lang['migrate_nothing_todo'] = "No migrations were necessary.\n";

/*
|--------------------------------------------------------------------------
| List View
|--------------------------------------------------------------------------
*/
$lang['adv_search'] = 'Erweiterte Suche';
$lang['reset_search'] = 'Suche zurücksetzen';


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'The location specified has the following routes already specified in the routes file (%1s):';
$lang['page_controller_assigned'] = 'There is a controller method already assigned to this page.';
$lang['page_updated_view'] = 'There is an updated view file located at <strong>%1s</strong>. Would you like to upload it into the body of your page (if available)?';
$lang['page_not_published'] = 'This page is not published.';

$lang['page_no_upload'] = 'Nein, nicht hochladen';
$lang['page_yes_upload'] = 'Ja, hochladen';
$lang['page_information'] = 'Seiteninformationen';
$lang['page_layout_vars'] = 'Layout Variablen';

$lang['pages_instructions'] = 'Here you can manage the data associated with the page.';
$lang['pages_associated_navigation'] = 'Associated Navigation';
$lang['pages_success_upload'] = 'The page view was successfully uploaded.';
$lang['pages_upload_instructions'] = 'Select a view file and upload to a page below.';
$lang['pages_select_action'] = 'Auswählen';

// page specific form fields
$lang['form_label_layout'] = 'Layout';
$lang['form_label_cache'] = 'Cache';
$lang['pages_last_updated'] = 'Zuletzt geändert %1s';
$lang['pages_last_updated_by'] = 'Zuletzt geändert %1s von %2s';
$lang['pages_not_published'] = 'Diese Seite ist nicht veröffentlicht.';
$lang['pages_default_location'] = 'Beispiel: firmenname/impressum';

$lang['form_label_page'] = 'Seite';
$lang['form_label_target'] = 'Ziel';
$lang['form_label_class'] = 'Klasse';

$lang['navigation_related'] = 'Navigation erstellen';
$lang['navigation_quick_add'] = 'This field lets you quickly add a navigation item for this page. It only allows you to create a navigation item during page creation. To edit the navigation item, you must click on the\'Navigation\' link on the left, find the navigation item you want to change and click on the edit link.';

$lang['page_select_pages'] = 'Seiten';
$lang['page_select_pdfs'] = 'PDFs';

/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'There is an updated view file located at <strong>%1s</strong>. Would you like to import?';
$lang['blocks_success_upload'] = 'The block view was successfully uploaded.';
$lang['blocks_upload_instructions'] = 'Select a block view file and upload it below.';

$lang['form_label_view'] = 'Vorschau';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_import'] = 'Navigation importieren';
$lang['navigation_instructions'] = 'Here you create and edit the top menu items of the page.';
$lang['navigation_import_instructions'] = 'Select a navigation group and upload a file to import below. The file should contain the PHP array variable assigned in the variable field below (e.g. <strong>$nav</strong>). For a reference of the array format, please consult the <a href="http://docs.getfuelcms.com/general/navigation" target="_blank">user guide</a>.';
$lang['navigation_success_upload'] = 'The navigation was successfully uploaded.';
$lang['form_label_navigation_group'] = 'Navigationsgruppe:';
$lang['form_label_nav_key'] = 'Schlüssel';
$lang['form_label_parent_id'] = 'Elternelement';
$lang['form_label_attributes'] = 'Attribute';
$lang['form_label_selected'] = 'Ausgewählt';
$lang['form_label_hidden'] = 'Versteckt';

$lang['error_location_parents_match'] = 'Location and parents can\'t match.';

// for upload form
$lang['form_label_clear_first'] = 'Clear First';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = 'Here you can upload new assets. Select overwrite if you would like to overwrite a file with the same name.';
$lang['form_label_preview/kb'] = 'Preview/kb';
$lang['form_label_link'] = 'Link';
$lang['form_label_asset_folder'] = 'Datei-Ordner';
$lang['form_label_new_file_name'] = 'Neuer Dateiname';
$lang['form_label_subfolder'] = 'Unterordner';
$lang['form_label_overwrite'] = 'Überschreiben';
$lang['form_label_create_thumb'] = 'Vorschaubild erstellen';
$lang['form_label_resize_method'] = 'Resize Methode';
$lang['form_label_maintain_ratio'] = 'Verhältnisse beibehalten';
$lang['form_label_resize_and_crop'] = 'beschneiden fall nötig';
$lang['form_label_overwrite'] = 'Überschreiben';
$lang['form_label_width'] = 'Breite';
$lang['form_label_height'] = 'Höhe';
$lang['form_label_alt'] = 'Alt';
$lang['form_label_align'] = 'Align';
$lang['form_label_master_dim'] = 'Master dimension';
$lang['form_label_unzip'] = 'Zip Dateien entpacken';
$lang['assets_upload_action'] = 'Hochladen';
$lang['assets_select_action'] = 'Auswählen';
$lang['assets_comment_asset_folder'] = 'The asset folder that it will be uploaded to';
$lang['assets_comment_filename'] = 'If no name is provided, the filename that already exists will be used.';
$lang['assets_comment_subfolder'] = 'Will attempt to create a new subfolder to place your asset.';
$lang['assets_comment_overwrite'] = 'Overwrite a file with the same name. If unchecked, a new file will be uploaded with a version number appended to the end of it.';
$lang['assets_heading_general'] = 'General';
$lang['assets_heading_image_specific'] = 'Image Specific';
$lang['assets_comment_thumb'] = 'Create a thumbnail of the image.';
$lang['assets_comment_resize_method'] = 'Maintains the aspect ratio or resizes and crops the image to fit the provided dimensions. If "Create thumbnail" is selected, it will only effect the size of the thumbnail.';
$lang['assets_comment_width'] = 'Will change the width of an image to the desired amount. If "Create thumbnail" is selected, then it will only effect the size of the thumbnail.';
$lang['assets_comment_height'] = 'Will change the height of an image to the desired amount. If "Create thumbnail" is selected, it will only effect the size of the thumbnail.';
$lang['assets_comment_master_dim'] = 'Specifies the master dimension to use for resizing. If the source image size does not allow perfect resizing to those dimensions, this setting determines which axis should be used as the hard value. "auto" sets the axis automatically based on whether the image is taller then wider, or vice versa.';
$lang['assets_comment_unzip'] = 'Unzips a zip file';

/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'Here you can manage the site variables for your website.';
$lang['sitevariables_scope'] = 'Sichtbarkeit';


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'Here you can manage the data for users.';
$lang['permissions_heading'] = 'Rechte';
$lang['form_label_language'] = 'Sprache';
$lang['form_label_send_email'] = 'Email senden';
$lang['btn_send_email'] = 'Email senden';
$lang['new_user_email_subject'] = 'Ihr Account wurde erstellt';
$lang['new_user_email'] = 'Your FUEL CMS account has been created with the user name of "%1s". Click the following link to set your FUEL password:
%2s';
$lang['new_user_created_notification'] = 'The user information was successfully saved and a notification was sent to %1s.';
$lang['error_cannot_deactivate_yourself'] = 'You cannot deactivate yourself.';

/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'Here you can manage the permissions for FUEL modules and later assign them to users.';
$lang['form_label_other_perms'] = 'Generate related simple<br /> module permissions';

/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_cleared'] = 'Der Cache wurde geleert.';
$lang['cache_instructions'] = 'Sie sind dabei, den Seitencache (temporärer Speicher) zu leeren.';
$lang['cache_no_clear'] = 'Nein, Cache nicht leeren';
$lang['cache_yes_clear'] = 'Ja, Cache leeren';


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['settings_none'] = 'There are no settings for any advanced modules to manage.';
$lang['settings_manage'] = 'Manage the settings for the following advanced modules:';
$lang['settings_problem'] = 'There was a problem with the settings for the advanced module <strong>%1s</strong>. <br />Check that <strong>/fuel/modules/%1s/config/%1s.php</strong> config is configured to handle settings.';


/*
|--------------------------------------------------------------------------
| Generate
|--------------------------------------------------------------------------
*/
$lang['error_not_cli_request'] = 'This is not a CLI request.';
$lang['error_not_in_dev_mode'] = 'This will only run in dev mode.';
$lang['error_missing_generation_files'] = 'There are no generation files to create for %1s.';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'BEARBEITEN';
$lang['table_action_delete'] = 'LÖSCHEN';
$lang['table_action_view'] = 'VORSCHAU';
$lang['click_to_toggle'] = 'click to toggle';
$lang['table_action_login_as'] = 'ANGEMELDET ALS';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = 'Anzeigen:';
$lang['label_language'] = 'Sprache:';
$lang['label_restore_from_prev'] = 'Vorherige Version wiederherstellen...';
$lang['label_select_another'] = 'Weitere...';
$lang['label_select_one'] = 'Auswählen...';
$lang['label_belongs_to'] = 'Gehört zu';
$lang['label_select_a_language'] = 'Sprache auswählen...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = 'Liste';
$lang['btn_tree'] = 'Baum';
$lang['btn_create'] = 'Erstellen';
$lang['btn_delete_multiple'] = 'Mehrere löschen';
$lang['btn_rearrange'] = 'Umordnen';
$lang['btn_search'] = 'Suche';
$lang['btn_view'] = 'Ansicht';
$lang['btn_publish'] = 'Veröffentlichen';
$lang['btn_unpublish'] = 'Veröffentlichung aufheben';
$lang['btn_activate'] = 'Aktivieren';
$lang['btn_deactivate'] = 'Deaktivieren';
$lang['btn_delete'] = 'Löschen';
$lang['btn_duplicate'] = 'Duplizieren';
$lang['btn_replace'] = 'Ersetzen';
$lang['btn_ok'] = 'OK';
$lang['btn_upload'] = 'Hochladen';
$lang['btn_download'] = 'Herunterladen';
$lang['btn_export_data'] = 'Daten exportieren';

$lang['btn_no'] = 'Nein';
$lang['btn_yes'] = 'Ja';

$lang['btn_no_upload'] = 'Nein, nicht hochladen';
$lang['btn_yes_upload'] = 'Ja, hochladen';

$lang['btn_no_dont_delete'] = 'Nein, nicht löschen';
$lang['btn_yes_dont_delete'] = 'Ja,  löschen';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = 'Name';
$lang['form_label_title'] = 'Titel';
$lang['form_label_label'] = 'Label';
$lang['form_label_location'] = 'Speicherort';
$lang['form_label_published'] = 'Veröffentlicht';
$lang['form_label_active'] = 'Aktiv';
$lang['form_label_precedence'] = 'Priorität';
$lang['form_label_date_added'] = 'Hinzugefügt';
$lang['form_label_last_updated'] = 'Zuletzt geändert';
$lang['form_label_file'] = 'Datei';
$lang['form_label_file_drop'] = 'Drag & Drop';
$lang['form_label_value'] = 'Wert';
$lang['form_label_email'] = 'Email';
$lang['form_label_user_name'] = 'Nutzername';
$lang['form_label_first_name'] = 'Vorname';
$lang['form_label_last_name'] = 'Nachname';
$lang['form_label_super_admin'] = 'Super admin';
$lang['form_label_password'] = 'Passwort';
$lang['form_label_confirm_password'] = 'Passwort bestätigen';
$lang['form_label_new_password'] = 'Neues Passwort';
$lang['form_label_description'] = 'Beschreibung';
$lang['form_label_new_invite'] = 'Einladung an neuen Nutzer senden';
$lang['form_label_entry_date'] = 'Eintragedatum';
$lang['form_label_message'] = 'Nachricht';
$lang['form_label_image'] = 'Bild';
$lang['form_label_upload_image'] = 'Bild hochladen';
$lang['form_label_upload_images'] = 'Bilder hochladen';
$lang['form_label_headline'] = 'Überschrift';
$lang['form_label_content'] = 'Inhalt';
$lang['form_label_excerpt'] = 'Teasertext';
$lang['form_label_date'] = 'Datum';
$lang['form_label_permalink'] = 'Permalink';
$lang['form_label_slug'] = 'Slug';
$lang['form_label_url'] = 'URL';
$lang['form_label_link'] = 'Link';
$lang['form_label_pdf'] = 'PDF';
$lang['form_label_canonical'] = 'Canonical';
$lang['form_label_og_title'] = 'Open Graph Titel';
$lang['form_label_og_description'] = 'Open Graph Beschreibung';
$lang['form_label_og_image'] = 'Open Graph Bild';
$lang['form_label_category_id'] = 'Kategorie';

$lang['form_label_group_id'] = 'Gruppe';
$lang['form_label_or_select'] = 'ODER auswählen';

$lang['form_enum_option_yes'] = 'ja';
$lang['form_enum_option_no'] = 'nein';

$lang['required_text'] = 'Pflichtfelder';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_field_main_copy'] = 'This is the main layout to be used for your site.';
$lang['layout_field_page_title'] = 'Seitentitel';
$lang['layout_field_meta_description'] = 'SEO Beschreibung';
$lang['layout_field_meta_keywords'] = 'SEO Keywords';
$lang['layout_field_body'] = 'Hauptbereich';
$lang['layout_field_heading'] = 'Überschrift';
$lang['layout_field_main_bg'] = 'Hintergrundfoto';
$lang['layout_field_body_description'] = 'Hauptbereich der Seite';
$lang['layout_field_body_class'] = 'Hauptbereichsklasse';
$lang['layout_field_redirect_to'] = 'Weiterleiten';

$lang['layout_field_301_redirect_copy'] = 'This layout will do a 301 redirect to another page.';
$lang['layout_field_alias_copy'] = 'This layout is similar to a 301 redirect but the location of the page does not change and <br />the page content from the specified location is used to render the page.';
$lang['layout_field_sitemap_xml_copy'] = 'This layout is used to generate a sitemap. For this page to appear, a sitemap.xml must not exist on the server.';
$lang['layout_field_robots_txt_copy'] = 'This layout is used to generate a robots.txt file. For this page to appear, a robots.txt must not exist on the server.';
$lang['layout_field_none_copy'] = 'This layout is the equivalent of having no layout assigned.';

$lang['layout_field_frequency'] = 'Häufigkeit';
$lang['layout_field_frequency_always'] = 'immer';
$lang['layout_field_frequency_hourly'] = 'stündlich';
$lang['layout_field_frequency_daily'] = 'täglich';
$lang['layout_field_frequency_weekly'] = 'wöchentlich';
$lang['layout_field_frequency_monthly'] = 'monatlich';
$lang['layout_field_frequency_yearly'] = 'jährlich';
$lang['layout_field_frequency_never'] = 'niemals';


/*
|--------------------------------------------------------------------------
| Tooltips
|--------------------------------------------------------------------------
*/
$lang['tooltip_dbl_click_to_open'] = 'Doppelklick zum Öffnen';


/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/

$lang['pagination_prev_page'] = '&lt;';
$lang['pagination_next_page'] = '&gt;';
$lang['pagination_first_link'] = '&lsaquo; Erste';
$lang['pagination_last_link'] = 'Letzte &rsaquo;';


/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/
$lang['action_edit']    = 'Bearbeiten';
$lang['action_create']  = 'Erstellen';
$lang['action_delete']  = 'Löschen';
$lang['action_upload'] = 'Hochladen';
$lang['action_replace'] = 'Ersetzen';

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['database_migration_success'] = 'Successful database migration to version %1s';

//$lang['import'] = 'Import';

/*
|--------------------------------------------------------------------------
| Installation
|--------------------------------------------------------------------------
*/
$lang['install_cli_intro'] = "The FUEL CMS installer is an easy way to setup the CMS with common configurations. It will do the following:\n";
$lang['install_cli_intro'] .= "1) Automatically generate an encryption key in fuel/application/config/config.php.\n";
$lang['install_cli_intro'] .= "2) Set the session save path in fuel/application/config/config.php.\n";
$lang['install_cli_intro'] .= "3) Enable the CMS admin by changing the 'admin_enabled' config value in fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "4) Change the 'fuel_mode' config value in in fuel/application/config/MY_fuel.php to allow for pages to be created in the CMS.\n";
$lang['install_cli_intro'] .= "5) Change the 'site_name' config value in the fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "6) Setup your environments fuel/application/config/environments.php.\n";
$lang['install_cli_intro'] .= "7) Will make the fuel/application/logs, fuel/application/cache and assets/images folders writable.\n";
$lang['install_cli_intro'] .= "8) Update the fuel/application/config/database.php file with the inputted values.\n";
$lang['install_cli_intro'] .= "9) Create a database and install the fuel_schema.sql file using your local MySQL connection.\n";

$lang['install_session_path'] = 'By default, FUEL CMS saves sessions using the default "file" setting in the fuel/application/config/config.php file. Where would you like the session files be stored (leave blank to keep it as the default)?';
$lang['install_site_name'] = 'What would you like the site name to be for this FUEL CMS installation?';
$lang['install_environments_testing'] = 'What are the domains for your TESTING environment (e.g. myserver.com *.mystagingserver.com)?';
$lang['install_environments_production'] = 'What are the domains for your PRODUCTION environment (e.g. myserver.com *.myserver.com)?';
$lang['install_permissions'] = 'What permissions do you want for your writable folders (e.g. 0755, 0775, 0777)?';
$lang['install_db_name'] = 'What do you want the name of your database to be?';
$lang['install_db_user'] = 'What is the user name to connect to your database?';
$lang['install_db_pwd'] = 'What is the password for that user?';

$lang['install_success'] = 'Your FUEL CMS installation is complete!';
$lang['install_success_with_errors'] = "Your FUEL CMS installation is complete but the follow ERRORS did occur:\n%1s";
$lang['install_further_info'] = "Now, to access the FUEL CMS admin, browse to your installation folder in your browser enter '/fuel' (e.g. localhost/fuel) in your location bar.\n";
$lang['install_further_info'] .= "For additional configuration options, go to http://docs.getfuelcms.com/installation/configuration.\n";
$lang['install_further_info'] .= "For questions, or bug reports, go to https://github.com/daylightstudio/FUEL-CMS/issues or visit us at http://forums.getfuelcms.com.\n";

$lang['update_cli_intro'] = "FUEL CMS 1.4x is built on CodeIgniter 3. If you are upgrading from 1.3x or earlier, this updater will help fix some of the common issues when upgrading including:\n";
$lang['update_cli_intro'] .= "1) Upper-case first letter for models, libraries and controller file names.\n";
$lang['update_cli_intro'] .= "2) Will upper case common references to Base_module_model.php within model files.\n";
$lang['update_cli_intro'] .= "3) Update common method signatures in models and libraries like form_fields, _common_query and initialize to match their parent's signature.\n";
$lang['update_cli_intro'] .= "WARNING: Run this ONLY if you are using GIT in case you need to roll back!\n";
$lang['update_cli_intro'] .= "Do you wish to continue (y/n)";
$lang['update_success'] = 'Update complete!';

// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/english/fuel_lang.php */
