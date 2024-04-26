<?php

return [
    'ad'				        => 'Director activ',
    'ad_domain'				    => 'Domeniu Active Directory',
    'ad_domain_help'			=> 'Acest lucru este uneori același cu domeniul dvs. de e-mail, dar nu întotdeauna.',
    'ad_append_domain_label'    => 'Adăugare nume domeniu',
    'ad_append_domain'          => 'Adăugaţi numele de domeniu la câmpul de utilizator',
    'ad_append_domain_help'     => 'Utilizatorul nu este necesar pentru a scrie "username@domain.local", ei pot scrie doar "username".',
    'admin_cc_email'            => 'CC e-mail',
    'admin_cc_email_help'       => 'Dacă doriți să trimiteți o copie a e-mailurilor de predare/ primire trimise utilizatorilor către un cont de e-mail suplimentar, introduceți-l aici. În caz contrar, lăsați acest câmp necompletat.',
    'admin_settings'            => 'Setări Admin',
    'is_ad'				        => 'Acesta este un server Active Directory',
    'alerts'                	=> 'Alerte',
    'alert_title'               => 'Actualizați setările notificărilor',
    'alert_email'				=> 'Trimite alerte catre',
    'alert_email_help'    => 'Adrese de e-mail sau liste de distribuție la care doriți să fie trimise alerte, separate prin virgulă',
    'alerts_enabled'			=> 'Alerte activată',
    'alert_interval'			=> 'Termenul de expirare a alertelor (în zile)',
    'alert_inv_threshold'		=> 'Ajustarea pragului de inventar',
    'allow_user_skin'           => 'Permite Skin-ul Utilizatorului',
    'allow_user_skin_help_text' => 'Bifarea acestei cutii va permite unui utilizator să suprascrie pielea interfeței cu una diferită.',
    'asset_ids'					=> 'ID-uri de active',
    'audit_interval'            => 'Interval de audit',
    'audit_interval_help'       => 'Dacă vi se cere să vă auditați fizic în mod regulat, introduceți intervalul în luni pe care îl folosiți. Dacă actualizați această valoare, toate „următoarele date de audit” pentru activele cu o dată viitoare de audit vor fi actualizate.',
    'audit_warning_days'        => 'Prag de avertizare privind auditul',
    'audit_warning_days_help'   => 'Câte zile în avans trebuie să vă avertizăm când activele sunt scadente pentru audit?',
    'auto_increment_assets'		=> 'Generează tag-uri de active cu auto-incrementare',
    'auto_increment_prefix'		=> 'Prefix (optional)',
    'auto_incrementing_help'    => 'Permite auto-incrementarea tag-urilor de active pentru a seta acest lucru',
    'backups'					=> 'Copiile de rezervă',
    'backups_help'              => 'Creează, descarcă și restaurează copii de rezervă ',
    'backups_restoring'         => 'Restaurare din Backup',
    'backups_upload'            => 'Încărcare copie de rezervă',
    'backups_path'              => 'Copiile de rezervă de pe server sunt stocate în <code>:path</code>',
    'backups_restore_warning'   => 'Utilizaţi butonul de restaurare <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> pentru a restaura dintr-o copie de rezervă anterioară. (Acest lucru nu funcționează în prezent cu stocarea fișierului S3 sau cu Docker.<br><br>Întreaga bază de date <strong>cu :app_name şi orice fişiere încărcate vor fi înlocuite complet</strong> cu ce se află în fişierul de rezervă.  ',
    'backups_logged_out'         => 'Toți utilizatorii existenți, inclusiv dvs., vor fi deconectați odată ce restaurarea este completă.',
    'backups_large'             => 'Copiile de rezervă foarte mari pot expira în încercarea de restaurare și s-ar putea să trebuiască să fie rulate prin linia de comandă. ',
    'barcode_settings'			=> 'Setări cod de bare',
    'confirm_purge'			    => 'Confirmați purjarea',
    'confirm_purge_help'		=> 'Introduceți textul "DELETE" în caseta de mai jos pentru a șterge înregistrările șterse. Această acțiune nu poate fi anulată și va șterge definitiv toate articolele și utilizatorii șterși. (Ar trebui mai întâi să faceți o copie de rezervă doar pentru a fi în siguranță.)',
    'custom_css'				=> 'CSS personalizat',
    'custom_css_help'			=> 'Introduceți orice suprascrieri personalizate CSS pe care doriți să le utilizați. Nu includeți etichetele &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Adresă URL personalizată pentru resetarea parolei',
    'custom_forgot_pass_url_help'	=> 'Acest lucru înlocuiește URL-ul de parolă uitată încorporat pe ecranul de conectare, util pentru a direcționa utilizatorii către funcția de resetare parole LDAP internă sau găzduită. Acesta va dezactiva efectiv funcționalitatea parolei uitate de utilizatorul local.',
    'dashboard_message'			=> 'Mesajul din tabloul de bord',
    'dashboard_message_help'	=> 'Acest text va apărea în tabloul de bord pentru orice persoană cu permisiunea de a vizualiza tabloul de bord.',
    'default_currency'  		=> 'Moneda implicita',
    'default_eula_text'			=> 'EULA implicita',
    'default_language'			=> 'Limba implicita',
    'default_eula_help_text'	=> 'De asemenea, puteți asocia clauze personalizate personalizate cu anumite categorii de active.',
    'display_asset_name'        => 'Afiseaza nume activ',
    'display_checkout_date'     => 'Arata data predare',
    'display_eol'               => 'Arata EOL in tabel',
    'display_qr'                => 'Afișați codurile pătrată',
    'display_alt_barcode'		=> 'Afișați coduri de bare 1D',
    'email_logo'                => 'Logo e-mail',
    'barcode_type'				=> 'Tip de cod de bare 2D',
    'alt_barcode_type'			=> 'Tip de cod de bare 1D',
    'email_logo_size'       => 'Logo-urile pătrate în e-mail arată cel mai bine. ',
    'enabled'                   => 'Activat',
    'eula_settings'				=> 'Setările EULA',
    'eula_markdown'				=> 'Această licență EULA permite <a href="https://help.github.com/articles/github-flavored-markdown/">Github aromdown markdown</a>.',
    'favicon'                   => 'Pictogramă',
    'favicon_format'            => 'Tipurile de fișiere acceptate sunt ico, png și gif. Este posibil ca alte formate de imagine să nu funcționeze în toate browserele.',
    'favicon_size'          => 'Favicoanele trebuie să fie imagini pătrate, 16x16 pixeli.',
    'footer_text'               => 'Textul suplimentar în subsol ',
    'footer_text_help'          => 'Acest text va apărea în subsolul din dreapta. Linkurile sunt permise folosind <a href="https://help.github.com/articles/github-flavored-markdown/">marcaje de tip Github</a>. Pauzele de linii, anteturile, imaginile etc. pot avea rezultate imprevizibile.',
    'general_settings'			=> 'setari generale',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
    'general_settings_help'     => 'EULA implicită și altele',
    'generate_backup'			=> 'Generați Backup',
    'google_workspaces'         => 'Spaţii de lucru Google',
    'header_color'              => 'Culoarea antetului',
    'info'                      => 'Aceste setari va lasa sa modificati anumite aspecte ale instalarii.',
    'label_logo'                => 'Sigla etichetei',
    'label_logo_size'           => 'Logo-urile pătrate arată cel mai bine - vor fi afișate în partea dreaptă sus a fiecărei etichete de active. ',
    'laravel'                   => 'Versiune Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Grupul de permisiuni implicit',
    'ldap_default_group_info'   => 'Selectați un grup pentru a atribui noilor utilizatori sincronizați. Amintiți-vă că un utilizator ia permisiunile grupului care sunt alocate.',
    'no_default_group'          => 'Niciun grup implicit',
    'ldap_help'                 => 'LDAP/Active Director',
    'ldap_client_tls_key'       => 'Cheie client LDAP TLS',
    'ldap_client_tls_cert'      => 'Certificat TLS client LDAP',
    'ldap_enabled'              => 'LDAP activat',
    'ldap_integration'          => 'Integrarea LDAP',
    'ldap_settings'             => 'Setări LDAP',
    'ldap_client_tls_cert_help' => 'Certificatul TLS client și cheia pentru conexiunile LDAP sunt de obicei utile doar în configurațiile Google Workspace cu "Secure LDAP". Ambele sunt necesare.',
    'ldap_location'             => 'Locație LDAP',
'ldap_location_help'             => 'Câmpul de locație Ldap ar trebui să fie utilizat dacă <strong>un OU nu este utilizat în baza DN.</strong> Lăsați acest câmp necompletat dacă o căutare OU este utilizată.',
    'ldap_login_test_help'      => 'Introduceți un nume de utilizator LDAP și o parolă valabilă din DN-ul de bază pe care l-ați specificat mai sus pentru a testa dacă datele de conectare LDAP sunt configurate corect. TREBUIE SĂ SAȚI PRIMUL SETĂRI LDAP ACTUALIZATE.',
    'ldap_login_sync_help'      => 'Acest lucru testează numai faptul că LDAP poate sincroniza corect. Dacă interogarea dvs. de autentificare LDAP nu este corectă, este posibil ca utilizatorii să nu se poată conecta. TREBUIE SĂ ACTUALIZAȚI SETĂRILE LDAP MAI ÎNTÂI.',
    'ldap_manager'              => 'Manager LDAP',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Acest lucru ar trebui să înceapă cu ldap: // (pentru TCP sau TLS) sau ldaps: // (pentru SSL)',
    'ldap_server_cert'			=> 'Validarea certificatelor SSL pentru LDAP',
    'ldap_server_cert_ignore'	=> 'Permiteți certificatul SSL nevalid',
    'ldap_server_cert_help'		=> 'Bifați această casetă de selectare dacă utilizați un certificat SSL auto-semnat și doriți să acceptați un certificat SSL nevalid.',
    'ldap_tls'                  => 'Utilizați TLS',
    'ldap_tls_help'             => 'Acest lucru trebuie verificat numai dacă executați STARTTLS pe ​​serverul LDAP.',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_dept'                 => 'Departamentul LDAP',
    'ldap_phone'                => 'Număr de telefon LDAP',
    'ldap_jobtitle'             => 'Titlu Job LDAP',
    'ldap_country'              => 'Țară LDAP',
    'ldap_pword'                => 'Parola de legare LDAP',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Filtrul LDAP',
    'ldap_pw_sync'              => 'Sincronizare parolă LDAP',
    'ldap_pw_sync_help'         => 'Debifați această casetă dacă nu doriți să păstrați parolele LDAP sincronizate cu parolele locale. Dacă dezactivați acest lucru, este posibil ca utilizatorii dvs. să nu poată să se conecteze dacă serverul dvs. LDAP nu este accesibil din anumite motive.',
    'ldap_username_field'       => 'Nume câmp',
    'ldap_lname_field'          => 'Numele de familie',
    'ldap_fname_field'          => 'Numele LDAP',
    'ldap_auth_filter_query'    => 'Solicitare de autentificare LDAP',
    'ldap_version'              => 'Versiunea LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'Această valoare este folosită pentru a determina dacă un utilizator sincronizat se poate conecta la Snipe-IT. <strong>Nu afectează abilitatea de a verifica elementele în sau în afara lor</strong>, și ar trebui să fie numele de atribut <strong></strong> în cadrul AD/LDAP, <strong>nu valoarea</strong>. <br><br>Dacă acest câmp este setat la un nume de câmp care nu există în AD/LDAP, sau valoarea din câmpul AD/LDAP este setat la <code>0</code> sau <code>false</code>, Utilizatorul <strong>va fi dezactivat</strong>. Dacă valoarea din câmpul AD/LDAP este setat la <code>1</code> sau <code>true</code> sau <em>, orice alt text</em> înseamnă că utilizatorul se poate conecta. Când câmpul este gol în AD-ul dvs., respectăm atributul <code>userAccountControl</code> , care de obicei permite utilizatorilor care nu sunt suspendați să se autentifice.',
    'ldap_emp_num'              => 'Numărul angajatului LDAP',
    'ldap_email'                => 'LDAP e-mail',
    'ldap_test'                 => 'Testează LDAP',
    'ldap_test_sync'            => 'Testează sincronizarea LDAP',
    'license'                   => 'Licență software',
    'load_remote'               => 'Use Gravatar',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load images from Gravatar.',
    'login'                     => 'Încercări de conectare',
    'login_attempt'             => 'Încercare de conectare',
    'login_ip'                  => 'Adresă IP',
    'login_success'             => 'Succes?',
    'login_user_agent'          => 'Agent utilizator',
    'login_help'                => 'Lista tentativelor de autentificare',
    'login_note'                => 'Conectați-vă Notă',
    'login_note_help'           => 'Opțional includeți câteva propoziții în ecranul de conectare, de exemplu, pentru a ajuta persoanele care au găsit un dispozitiv pierdut sau furat. Acest câmp acceptă markdown <a href="https://help.github.com/articles/github-flavored-markdown/">Github aromdown</a>',
    'login_remote_user_text'    => 'Opțiuni de conectare la utilizatorul de la distanță',
    'login_remote_user_enabled_text' => 'Activați autentificarea cu Antet utilizator la distanță',
    'login_remote_user_enabled_help' => 'Această opțiune permite autentificarea prin intermediul antetului REMOTE_USER în conformitate cu "Interfața comună a gateway-ului (rfc3875)"',
    'login_common_disabled_text' => 'Dezactivați alte mecanisme de autentificare',
    'login_common_disabled_help' => 'Această opțiune dezactivează alte mecanisme de autentificare. Activați această opțiune numai dacă sunteți sigur că datele dvs. de conectare REMOTE_USER funcționează deja',
    'login_remote_user_custom_logout_url_text' => 'Adresa URL de ieșire personalizată',
    'login_remote_user_custom_logout_url_help' => 'Dacă este furnizată aici o adresă URL, utilizatorii vor fi redirecționați către această adresă URL după ce utilizatorul va ieși din Snipe-IT. Acest lucru este util pentru a închide corect sesiunile de utilizator ale furnizorului dvs. de autentificare.',
    'login_remote_user_header_name_text' => 'Antet nume utilizator personalizat',
    'login_remote_user_header_name_help' => 'Folosește antetul specificat în loc de REMOTE_USER',
    'logo'                    	=> 'Siglă',
    'logo_print_assets'         => 'Utilizați la imprimare',
    'logo_print_assets_help'    => 'Utilizați brand-urie pe listele de materiale tipărite ',
    'full_multiple_companies_support_help_text' => 'Restricționarea utilizatorilor (inclusiv a administratorilor) atribuite companiilor activelor companiei lor.',
    'full_multiple_companies_support_text' => 'Suport complet pentru multiple companii',
    'show_in_model_list'   => 'Afișați în lista de selecție de model',
    'optional'					=> 'facultativ',
    'per_page'                  => 'Rezultate pe pagina',
    'php'                       => 'Versiune PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, sistem, info',
    'php_overview_help'         => 'Informaţii sistem PHP',
    'php_gd_info'               => 'Trebuie sa instalati php-gd ca sa afisati coduri QR, verificati instructiunile de instalare.',
    'php_gd_warning'            => 'PHP Image Processing si GD plugin NU sunt instalate.',
    'pwd_secure_complexity'     => 'Complexitatea parolei',
    'pwd_secure_complexity_help' => 'Selectați oricare dintre regulile de complexitate a parolei pe care doriți să le impuneți.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Parola nu poate fi identică cu prenumele, prenumele, e-mailul sau numele de utilizator',
    'pwd_secure_complexity_letters' => 'Necesită cel puțin o literă',
    'pwd_secure_complexity_numbers' => 'Necesită cel puțin un număr',
    'pwd_secure_complexity_symbols' => 'Necesită cel puțin un simbol',
    'pwd_secure_complexity_case_diff' => 'Solicitați cel puțin o majusculă și o minusculă',
    'pwd_secure_min'            => 'Caractere minime de caractere',
    'pwd_secure_min_help'       => 'Valoarea minimă admisă este de 8',
    'pwd_secure_uncommon'       => 'Împiedicați parolele comune',
    'pwd_secure_uncommon_help'  => 'Acest lucru va interzice utilizatorilor să folosească parole comune din primele 10.000 de parole raportate în încălcare.',
    'qr_help'                   => 'Activeaza codurile QR inainte sa setati asta',
    'qr_text'                   => 'Text cod QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Actualizare setări SAML',
    'saml_help'                 => 'Setări SAML',
    'saml_enabled'              => 'SAML activat',
    'saml_integration'          => 'Integrare SAML',
    'saml_sp_entityid'          => 'ID entitate',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL (Automatic Translation)',
    'saml_sp_sls_url'           => 'URL unic de deconectare (SLS)',
    'saml_sp_x509cert'          => 'Certificat public',
    'saml_sp_metadata_url'      => 'URL metadata',
    'saml_idp_metadata'         => 'SAML IdP Metadate',
    'saml_idp_metadata_help'    => 'Puteți specifica metadatele IdP folosind un URL sau un fișier XML.',
    'saml_attr_mapping_username' => 'Mapare atribut - Utilizator',
    'saml_attr_mapping_username_help' => 'ID-ul de nume va fi folosit dacă maparea atributelor nu este specificată sau este invalidă.',
    'saml_forcelogin_label'     => 'Autentificare forțată SAML',
    'saml_forcelogin'           => 'Faceți ca SAML să fie autentificarea principală',
    'saml_forcelogin_help'      => 'Poți folosi \'/login?nosaml\' pentru a ajunge la pagina normală de autentificare.',
    'saml_slo_label'            => 'Autentificare unică SAML',
    'saml_slo'                  => 'Trimite o cerere de deconectare către IdP la deconectare',
    'saml_slo_help'             => 'Acest lucru va face ca utilizatorul să fie mai întâi redirecționat către IdP de la deconectare. Lăsați debifat în cazul în care IdP nu acceptă SAML inițiat de SP.',
    'saml_custom_settings'      => 'Setări personalizate SAML',
    'saml_custom_settings_help' => 'Puteți specifica setări suplimentare în biblioteca onelogin/php-saml. Utilizați pe propria răspundere.',
    'saml_download'             => 'Descarcă metadate',
    'setting'                   => 'Setare',
    'settings'                  => 'Setari',
    'show_alerts_in_menu'       => 'Afișați alertele din meniul de sus',
    'show_archived_in_list'     => 'Active arhivate',
    'show_archived_in_list_text'     => 'Arată activele arhivate în lista cu toate activele',
    'show_assigned_assets'      => 'Arată activele atribuite activelor',
    'show_assigned_assets_help' => 'Afiseaza active care au fost alocate celorlalte active in Vezi utilizator -> Active, Vezi Utilizator -> Info -> Imprima Toate Atribuirile si in Cont -> Vezi Activele Asociate.',
    'show_images_in_email'     => 'Afișați imaginile în e-mailuri',
    'show_images_in_email_help'   => 'Debifați această casetă dacă instalarea dvs. Snipe-IT se află în spatele unei rețele VPN sau închisă, iar utilizatorii din afara rețelei nu vor putea încărca imagini din această instalare în e-mailurile lor.',
    'site_name'                 => 'Nume site',
    'integrations'               => 'Integrări',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Webhook general',
    'ms_teams'                  => 'Echipele Microsoft',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Testează pentru a salva',
    'webhook_title'               => 'Actualizați setările Webhook-ului',
    'webhook_help'                => 'Setări de integrare',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => 'Canal :app',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => 'Setări :app',
    'webhook_test'                 =>'Testează integrarea :app',
    'webhook_integration_help'    => 'Integrarea :app este opțională, totuși punctul final și canalul sunt necesare dacă doriți să îl folosiți. Pentru a configura integrarea :app, trebuie să creați mai întâi <a href=":webhook_link" target="_new" rel="noopener">un webhook</a> primit pe contul dvs. :app. Faceți clic pe butonul <strong>Test :app Integration</strong> pentru a confirma că setările sunt corecte înainte de salvare. ',
    'webhook_integration_help_button'    => 'Odată ce ați salvat informațiile dvs. de :app, va apărea un buton de testare.',
    'webhook_test_help'           => 'Testează dacă integrarea ta :app este configurată corect. TREBUIE SĂ VĂ APĂSAȚI ACTUALIZAT :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT versiune',
    'support_footer'            => 'Legăturile de suport in subsol ',
    'support_footer_help'       => 'Specificați cine vede legăturile la informațiile despre asistența Snipe-IT și la Manualul utilizatorilor',
    'version_footer'            => 'Versiune în subsol ',
    'version_footer_help'       => 'Specificați cine vede versiunea Snipe-IT și numărul de construcție.',
    'system'                    => 'Informatii sistem',
    'update'                    => 'Actualizeaza setari',
    'value'                     => 'Valoare',
    'brand'                     => 'Branding',
    'brand_keywords'            => 'footer, logo, print, temă, piele, antet, culori, culoare, css',
    'brand_help'                => 'Logo, Nume site',
    'web_brand'                 => 'Tip de Branding Web',
    'about_settings_title'      => 'Despre Setări',
    'about_settings_text'       => 'Aceste setări vă permit să personalizați anumite aspecte ale instalării.',
    'labels_per_page'           => 'Etichete pe pagină',
    'label_dimensions'          => 'Dimensiunile etichetelor (inci)',
    'next_auto_tag_base'        => 'Următoarea creștere automată',
    'page_padding'              => 'Marjele paginii (inci)',
    'privacy_policy_link'       => 'Legătura cu la politica de confidențialitate',
    'privacy_policy'            => 'Politica de confidenţialitate',
    'privacy_policy_link_help'  => 'Dacă este inclus aici o adresă URL, un link către politica dvs. de confidențialitate va fi inclus în subsolul aplicației și în orice e-mailuri trimise de sistem, în conformitate cu GDPR. ',
    'purge'                     => 'Eliminați înregistrările șterse',
    'purge_deleted'             => 'Curăță Șters ',
    'labels_display_bgutter'    => 'Etichetați jgheabul de jos',
    'labels_display_sgutter'    => 'Eticheta jgheab',
    'labels_fontsize'           => 'Dimensiunea fontului etichetei',
    'labels_pagewidth'          => 'Etichetă lățime foaie',
    'labels_pageheight'         => 'Înălțimea foii de etichete',
    'label_gutters'        => 'Intervalele etichetelor (inci)',
    'page_dimensions'        => 'Dimensiunile paginii (inci)',
    'label_fields'          => 'Etichetați câmpurile vizibile',
    'inches'        => 'inch',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link către Snipe-IT în e-mailuri',
    'show_url_in_emails_help_text'      => 'Debifați această casetă dacă nu doriți să vă conectați la instalarea dvs. Snipe-IT în subsolul dvs. de e-mail. Utile dacă majoritatea utilizatorilor dvs. nu se înregistrează niciodată.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max înălțime miniatură',
    'thumbnail_max_h_help'   => 'Înălțimea maximă în pixeli pe care miniaturile ar putea să o afișeze în vizualizarea înregistrării. Min 25, max 500.',
    'two_factor'        => 'Două autentificare cu factori',
    'two_factor_secret'        => 'Codul cu doi factori',
    'two_factor_enrollment'        => 'Înscrierea în doi factori',
    'two_factor_enabled_text'        => 'Activați doi factori',
    'two_factor_reset'        => 'Resetați secretul cu două factori',
    'two_factor_reset_help'        => 'Acest lucru va forța utilizatorul să înregistreze din nou dispozitivul cu aplicația de autentificare. Acest lucru poate fi util dacă dispozitivul înscris în prezent este pierdut sau furat. ',
    'two_factor_reset_success'          => 'Aparatul cu două factori se resetează',
    'two_factor_reset_error'          => 'Restabilirea dispozitivului cu două factori a eșuat',
    'two_factor_enabled_warning'        => 'Dacă activați două factori dacă nu este activat în prezent, vă forțați imediat să vă autentificați cu un dispozitiv Google Auth înscris. Veți avea capacitatea de a vă înregistra dispozitivul dacă nu sunteți înscris în prezent.',
    'two_factor_enabled_help'        => 'Aceasta va activa autentificarea cu doi factori utilizând Google Authenticator.',
    'two_factor_optional'        => 'Selectiv (Utilizatorii pot activa sau dezactiva dacă este permis)',
    'two_factor_required'        => 'Obligatoriu pentru toți utilizatorii',
    'two_factor_disabled'        => 'invalid',
    'two_factor_enter_code'	=> 'Introduceți codul cu doi factori',
    'two_factor_config_complete'	=> 'Trimiteți codul',
    'two_factor_enabled_edit_not_allowed' => 'Administratorul nu vă permite să editați această setare.',
    'two_factor_enrollment_text'	=> "Este necesară autentificarea cu două factori, cu toate acestea, dispozitivul dvs. nu a fost încă înscris. Deschideți aplicația Google Authenticator și scanați codul QR de mai jos pentru a vă înregistra dispozitivul. După ce ați înscris dispozitivul, introduceți codul de mai jos",
    'require_accept_signature'      => 'Solicită semnătura',
    'require_accept_signature_help_text'      => 'Activarea acestei funcții va impune utilizatorilor să se deconecteze fizic la acceptarea unui activ.',
    'left'        => 'stânga',
    'right'        => 'dreapta',
    'top'        => 'top',
    'bottom'        => 'fund',
    'vertical'        => 'vertical',
    'horizontal'        => 'orizontală',
    'unique_serial'                => 'Numere de serie unice',
    'unique_serial_help_text'                => 'Verificarea acestei casete va impune o constrângere de unicitate în serialele de active',
    'zerofill_count'        => 'Lungimea etichetelor de activ, inclusiv zerofill',
    'username_format_help'   => 'Această setare va fi folosită de procesul de import doar dacă un nume de utilizator nu este furnizat și trebuie să generăm un nume de utilizator pentru tine.',
    'oauth_title' => 'Setări API OAuth',
    'oauth' => 'OAuth',
    'oauth_help' => 'Setări Oauth final',
    'asset_tag_title' => 'Actualizați setările etichetei de active',
    'barcode_title' => 'Actualizați setările codului de bare',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Setări Bare &amp; QR',
    'barcodes_help' => 'Acest lucru va încerca să șteargă codurile de bare din cache Acest lucru ar fi de obicei utilizat numai în cazul în care setările codului de bare s-au modificat, sau dacă URL-ul Snipe-IT s-a schimbat. Codurile de bare vor fi regenerate când sunt accesate ulterior.',
    'barcodes_spinner' => 'Se încearcă ștergerea fișierelor...',
    'barcode_delete_cache' => 'Ştergeţi Cache cod de bare',
    'branding_title' => 'Actualizați setările de branding',
    'general_title' => 'Actualizare Setări Generale',
    'mail_test' => 'Trimite test',
    'mail_test_help' => 'Aceasta va încerca să trimită un e-mail de test la :replyto.',
    'filter_by_keyword' => 'Filtrează după setarea cuvântului cheie',
    'security' => 'Securitate',
    'security_title' => 'Actualizați setările de securitate',
    'security_keywords' => 'parolă, parole, cerințe, doi factori, doi factori, parole comune, conectare la distanță, deconectare, autentificare',
    'security_help' => 'Dublu factor, Restricții la parolă',
    'groups_keywords' => 'permisiuni, grupuri de permisiuni, autorizare',
    'groups_help' => 'Grupuri permisiuni cont',
    'localization' => 'Localizare',
    'localization_title' => 'Actualizați setările de localizare',
    'localization_keywords' => 'localizare, monedă, locală, zonă-orar, fus orar, internațional, internatinalizare, limbă, limbă, traducere',
    'localization_help' => 'Limba, afişarea datei',
    'notifications' => 'Notificări',
    'notifications_help' => 'Setări Alerte & Audit Email',
    'asset_tags_help' => 'Creștere și prefixe',
    'labels' => 'Etichete',
    'labels_title' => 'Actualizați setările etichetei',
    'labels_help' => 'Setări etichete &amp;',
    'purge' => 'Purge',
    'purge_keywords' => 'şterge permanent',
    'purge_help' => 'Eliminați înregistrările șterse',
    'ldap_extension_warning' => 'Nu arată ca și cum extensia LDAP este instalată sau activată pe acest server. Încă puteți salva setările, dar va trebui să activați extensia LDAP pentru PHP înainte ca logarea sau sincronizarea LDAP să funcționeze.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Număr angajat',
    'create_admin_user' => 'Creează un utilizator ::',
    'create_admin_success' => 'Succes! Utilizatorul dvs. admin a fost adăugat!',
    'create_admin_redirect' => 'Apasă aici pentru a te autentifica în aplicație!',
    'setup_migrations' => 'Migrarea bazei de date ::',
    'setup_no_migrations' => 'Nu a fost nimic de migrat. Tabelele bazei de date au fost deja configurate!',
    'setup_successful_migrations' => 'Tabelele bazei de date au fost create',
    'setup_migration_output' => 'Rezultatul migrării:',
    'setup_migration_create_user' => 'Următorul: Creare utilizator',
    'ldap_settings_link' => 'Pagina de setări LDAP',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integrare',
    'label2_enable'           => 'Etichetă nouă',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Șablon',
    'label2_template_help'    => 'Selectați ce șablon să utilizați pentru generarea etichetei',
    'label2_title'            => 'Titlu',
    'label2_title_help'       => 'Titlul care va fi afișat pe etichetele care îl suportă',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Foloseste Logo Asset',
    'label2_asset_logo_help'  => 'Utilizați logo-ul activului&apos;s alocat, mai degrabă decât valoarea la <code>:setting_name</code>',
    'label2_1d_type'          => 'Tip cod de bare 1D',
    'label2_1d_type_help'     => 'Format pentru coduri de bare 1D',
    'label2_2d_type'          => 'Tip de cod de bare 2D',
    'label2_2d_type_help'     => 'Format pentru coduri de bare 2D',
    'label2_2d_target'        => 'Ținta codului de bare 2D',
    'label2_2d_target_help'   => 'URL-ul codului de bare 2D indică la momentul scanării',
    'label2_fields'           => 'Definiții câmp',
    'label2_fields_help'      => 'Câmpurile pot fi adăugate, șterse și reordonate în coloana din stânga. Pentru fiecare câmp, mai multe opțiuni pentru Etichetă și Sursă pot fi adăugate, eliminate și reordonate în coloana din dreapta.',
    'help_asterisk_bold'    => 'Textul introdus ca <code>**text**</code> va fi afișat ca îngroșat',
    'help_blank_to_use'     => 'Lăsați necompletat pentru a utiliza valoarea de la <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> va utiliza valoarea de la <code>:setting_name</code>. <br>Reține că valoarea codurilor de bare trebuie să respecte specificațiile corespunzătoare ale codului de bare pentru a fi generată cu succes. Pentru mai multe detalii, vezi documentaţia <a href="https://snipe-it.readme.io/docs/barcodes"> <i class="fa fa-external-link"></i></a>. ',
    'default'               => 'Implicit',
    'none'                  => 'Niciunul',
    'google_callback_help' => 'Acesta ar trebui introdus ca URL de apel invers în setările aplicației Google OAuth din organizația dvs.&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Setări Autentificare în Spațiul de lucru Google',
    'enable_google_login'  => 'Permite utilizatorilor să se autentifice cu Google Workspace',
    'enable_google_login_help'  => 'Utilizatorii nu vor fi furnizați automat. Ei trebuie să aibă un cont existent aici ŞI în Google Workspace, şi numele lor de utilizator trebuie să se potrivească cu adresa lor de e-mail Google Workspace ',
    'mail_reply_to' => 'Răspunde la adresa',
    'mail_from' => 'Adresă Mail',
    'database_driver' => 'Șofer bază de date',
    'bs_table_storage' => 'Stocare tabel',
    'timezone' => 'Timezone',

];