<?php

return [
    'about_assets_title'           => 'Über Assets',
    'about_assets_text'            => 'Assets sind Gegenstände die durch eine Seriennummer oder einem Asset-Tag identifiziert werden. Meistens sind diese Gegenstände von höherem Wert, weshalb es Sinn ergibt diese spezifisch zu kennzeichnen.',
    'archived'  				=> 'Archiviert',
    'asset'  					=> 'Asset',
    'bulk_checkout'             => 'Assets herausgeben',
    'bulk_checkin'              => 'Assets zurücknehmen',
    'checkin'  					=> 'Asset zurücknehmen',
    'checkout'  				=> 'Asset herausgeben',
    'clone'  					=> 'Asset duplizieren',
    'deployable'  				=> 'Einsetzbar',
    'deleted'  					=> 'Dieses Asset wurde gelöscht.',
    'delete_confirm'            => 'Bist du sicher, dass du dieses Asset löschen möchtest?',
    'edit'  					=> 'Asset bearbeiten',
    'model_deleted'  			=> 'Dieses Modell für Assets wurde gelöscht. Du musst das Modell wiederherstellen, bevor Du das Asset wiederherstellen kannst.',
    'model_invalid'             => 'Das Modell dieses Assets ist ungültig.',
    'model_invalid_fix'         => 'Das Asset sollte bearbeitet werden, um dies zu korrigieren, bevor versucht wird, es ein- oder auszuchecken.',
    'requestable'               => 'Anforderbar',
    'requested'				    => 'Angefordert',
    'not_requestable'           => 'Kann nicht angefordert werden',
    'requestable_status_warning' => 'Anforderbaren Status nicht ändern',
    'restore'  					=> 'Asset wiederherstellen',
    'pending'  					=> 'Ausstehende',
    'undeployable'  			=> 'Nicht einsetzbar',
    'undeployable_tooltip'  	=> 'Dieses Asset hat eine Statusbezeichnung, die nicht einsetzbar ist und zu diesem Zeitpunkt nicht ausgecheckt werden kann.',
    'view'  					=> 'Asset ansehen',
    'csv_error' => 'Es gibt einen Fehler in der CSV-Datei:',
    'import_text' => '<p>Laden Sie ein CSV hoch, das Assetverlauf enthält. Die Assets und Benutzer MÜSSEN bereits im System vorhanden oder sie werden übersprungen. Passende Assets für den History-Import geschieht mit dem Asset-Tag. Wir werden versuchen, einen passenden Benutzer zu finden, basierend auf dem von Ihnen angegebenen Benutzernamen und den Kriterien, die Sie unten auswählen. Wenn Sie keine Kriterien unten auswählen, es wird einfach versuchen, auf das Benutzernamensformat zu passen, das Sie in den <code>Admin- &gt; Allgemeine Einstellungen</code>konfiguriert haben.</p><p>Felder, die im CSV enthalten sind, müssen mit den Kopfzeilen übereinstimmen: <strong>Asset Tag, Name, Checkout Datum, Check-in Datum</strong>. Zusätzliche Felder werden ignoriert. </p><p>Check-in Datum: Leer oder zukünftiger Check-in Datum werden Elemente an zugeordnete Benutzer auschecken. Ohne die Spalte Check-in Datum wird ein Datum mit dem heutigen Datum erzeugt.</p>
    ',
    'csv_import_match_f-l' => 'Versuchen Sie, Benutzer im <strong>Vorname.Nachname</strong> (<code>jane.smith</code>) Format zu finden',
    'csv_import_match_initial_last' => 'Versuchen Sie, Benutzer im <strong>ersten ersten Nachnamen</strong> (<code>jsmith</code>) Format zu finden',
    'csv_import_match_first' => 'Versuchen Sie, Benutzer im <strong>Vorname</strong> (<code>jane</code>) Format zu finden',
    'csv_import_match_email' => 'Versuchen Sie, Benutzer mit <strong>E-Mail</strong> als Benutzername zu identifizieren',
    'csv_import_match_username' => 'Versuche Benutzer mit <strong>Benutzernamen</strong> zu identifizieren',
    'error_messages' => 'Fehlermeldungen:',
    'success_messages' => 'Erfolgsmeldungen:',
    'alert_details' => 'Siehe unten für Details.',
    'custom_export' => 'Benutzerdefinierter Export',
    'mfg_warranty_lookup' => ':manufacturer Garantiestatus Abfrage',
    'user_department' => 'Abteilung des Benutzers',
];
