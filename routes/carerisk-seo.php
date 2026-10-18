<?php

use Illuminate\Support\Facades\Route;

// CareRisk V4 SEO pages. Existing homepage routes remain unchanged.
$careRiskSeoPages = json_decode(<<<'CARERISK_JSON'
{"pflegeheim-software": {"title": "Pflegeheim Software ergänzen – ohne Systemwechsel", "heading": "Pflegeheim Software für Österreich und Deutschland", "intro": "Digitale Pflegeassistenz kann bestehende Pflegesoftware sinnvoll ergänzen. Entscheidend sind klare Abläufe, sichere Datenwege und die Akzeptanz im Team.", "sections": [{"heading": "Was sollte eine gute Ergänzung leisten?", "body": "Eine zusätzliche Anwendung sollte vorhandene Dokumentation nicht verdoppeln. Sie sollte relevante Informationen bündeln, Zuständigkeiten transparent machen und Informationen für Leitung und Pflegeteam verständlich aufbereiten."}, {"heading": "Excel, CSV und Schnittstellen", "body": "Für einen ersten Überblick können strukturierte Dateien ein pragmatischer Ausgangspunkt sein. API-Anbindungen müssen je nach Hersteller, Datenmodell und Berechtigung technisch und vertraglich geprüft werden."}, {"heading": "Was Heimleitungen vor der Einführung prüfen sollten", "body": "Klären Sie Datenschutzrollen, Datenflüsse, Zugriffsrechte, Schulungsaufwand, Exportmöglichkeiten und die tatsächliche Entlastung im Alltag. Testen Sie neue Abläufe zunächst mit Beispieldaten."}, {"heading": "CareSignal AI kennenlernen", "body": "Die bestehende Plattform CareSignal AI kann online angesehen werden. Ob und welche Funktionen für eine konkrete Einrichtung verfügbar sind, wird im persönlichen Pilotgespräch geklärt."}]}, "sturzpraevention-pflegeheim": {"title": "Sturzprävention im Pflegeheim: dokumentieren und auswerten", "heading": "Sturzprävention im Pflegeheim", "intro": "Ein strukturiertes Sturzprotokoll hilft, Ereignisse und Beinahe-Stürze nachvollziehbar zu erfassen. Digitale Auswertungen können Muster sichtbar machen, ersetzen aber keine fachliche Beurteilung.", "sections": [{"heading": "Welche Angaben gehören ins Sturzprotokoll?", "body": "Hilfreich sind Datum, Uhrzeit, Wohnbereich, Ort, Art des Ereignisses, beobachtete Umstände, eingeleitete Maßnahmen und verantwortliche Rolle. Personenbezogene Gesundheitsdaten sollten nur in dafür freigegebenen Systemen verarbeitet werden."}, {"heading": "Muster erkennen, ohne Wirksamkeit zu versprechen", "body": "Die Betrachtung von Zeitpunkten, Bereichen und wiederkehrenden Situationen kann Teams bei der Qualitätssicherung unterstützen. Daraus folgt nicht automatisch, dass ein Sensor oder eine Software Stürze verhindert."}, {"heading": "Sicherheit geht vor", "body": "CareRisk ersetzt weder ein Notrufsystem noch die medizinische oder pflegerische Einschätzung. Für einen Echtzeit-Alarmweg sind gesonderte Zuverlässigkeits- und Sicherheitsnachweise erforderlich."}, {"heading": "Kostenlose Vorlage nutzen", "body": "Eine neutrale CSV-Vorlage für die Dokumentation von Ereignissen steht zum Download bereit. Sie enthält ausschließlich Beispieldaten."}]}, "digitale-schichtuebergabe": {"title": "Digitale Schichtübergabe in der Pflege", "heading": "Digitale Schichtübergabe: relevante Informationen schneller finden", "intro": "Bei der Schichtübergabe müssen wichtige Ereignisse, offene Aufgaben und Zuständigkeiten verständlich und aktuell verfügbar sein.", "sections": [{"heading": "Worauf kommt es bei der Übergabe an?", "body": "Eine gute Übergabe ist kurz, strukturiert und nachvollziehbar. Relevante Ereignisse und offene Maßnahmen sollten sichtbar sein, ohne sensible Informationen unnötig zu vervielfältigen."}, {"heading": "Digital unterstützen statt zusätzlich dokumentieren", "body": "Bestehende Pflegeinformationen sollten möglichst weiterverwendet werden. Für Schnittstellen müssen Datenqualität, Zugriffsrechte und tatsächliche technische Verfügbarkeit geprüft werden."}, {"heading": "CareSignal AI als bestehende Plattform", "body": "CareSignal AI wird als digitale Unterstützung für den Pflegealltag vorgestellt. Nutzen Sie die Online-Ansicht und besprechen Sie konkrete Funktionen und den Pilotumfang mit dem Team."}, {"heading": "Datenschutz und menschliche Kontrolle", "body": "Automatisch aufbereitete Hinweise müssen überprüfbar bleiben. Pflegefachliche Entscheidungen liegen beim zuständigen Personal."}]}, "sturzprotokoll-vorlage": {"title": "Sturzprotokoll Vorlage – kostenlose CSV herunterladen", "heading": "Sturzprotokoll Vorlage für Pflegeheime", "intro": "Laden Sie eine einfache CSV-Musterdatei für Sturzereignisse und Beinahe-Stürze herunter. Die Datei ist ein Arbeitsbeispiel und keine medizinische Empfehlung.", "sections": [{"heading": "Was enthält die Vorlage?", "body": "Spalten für Datum, Uhrzeit, Wohnbereich, anonymisierte Kennung, Ereignistyp, Situation, Maßnahmen, Zuständigkeit und Status. Eine Beispielzeile zeigt die Struktur."}, {"heading": "So verwenden Sie die Datei", "body": "Öffnen Sie die CSV-Datei in Excel oder einer Tabellenkalkulation, passen Sie die Felder an Ihre internen Abläufe an und legen Sie geeignete Zugriffsrechte fest."}, {"heading": "Datenschutz beachten", "body": "Verwenden Sie für den Test ausschließlich Beispieldaten. Reale Bewohnerdaten gehören nicht in ungesicherte Dateien, E-Mail-Anhänge oder öffentliche Online-Tools."}, {"heading": "Digitale Auswertung als nächster Schritt", "body": "Wenn Sie Ereignisse regelmäßig auswerten möchten, sprechen Sie mit uns über einen Pilot und die Voraussetzungen für einen sicheren Datenimport."}]}, "pflegepersonal-entlasten": {"title": "Pflegepersonal entlasten – digitale Abläufe verbessern", "heading": "Pflegepersonal entlasten: weniger Suchaufwand, klarere Abläufe", "intro": "Entlastung entsteht nicht durch zusätzliche Eingabemasken, sondern durch weniger Doppelerfassung und einen schnelleren Überblick über wichtige Informationen.", "sections": [{"heading": "Doppeldokumentation vermeiden", "body": "Erfassen Sie, welche Angaben mehrfach dokumentiert werden und welche Informationen bereits in Ihrer Pflegesoftware vorhanden sind. Jede zusätzliche Schnittstelle sollte einen klaren Nutzen bringen."}, {"heading": "Ereignisse nachvollziehbar organisieren", "body": "Ein einheitlicher Ablauf für Ereignismeldung, Bestätigung und Nachverfolgung kann helfen, offene Aufgaben zu erkennen. Alarmmengen und Fehlalarme müssen dabei berücksichtigt werden."}, {"heading": "Erfolg im Pilot messbar machen", "body": "Messen Sie mit dem Team den Zeitbedarf für Dokumentation und Übergabe vor und nach der Einführung. Sammeln Sie qualitative Rückmeldungen und prüfen Sie, ob neue Arbeitsschritte entstehen."}, {"heading": "Technik unterstützt Fachkräfte", "body": "Digitale Assistenz soll Fachpersonal unterstützen, nicht pflegefachliche Entscheidungen automatisiert ersetzen."}]}}
CARERISK_JSON, true, 512, JSON_THROW_ON_ERROR);

foreach ($careRiskSeoPages as $slug => $page) {
    Route::get('/'.$slug, function () use ($page, $careRiskSeoPages) {
        return view('carerisk-seo', ['page' => $page, 'pages' => $careRiskSeoPages]);
    })->name('carerisk.seo.'.$slug);
}

Route::get('/sturzprotokoll-vorlage.csv', function () {
    $csv = "Datum;Uhrzeit;Wohnbereich;Bewohnerkennung_pseudonym;Ereignistyp;Situation;Massnahmen;Zustaendigkeit;Status\n".
        "2026-01-01;08:30;Beispielbereich;DEMO-001;Beinahe-Sturz;Beispielsituation;Fachliche Pruefung;Pflegefachkraft;Offen\n";
    return response("\xEF\xBB\xBF".$csv, 200, [
        'Content-Type' => 'text/csv; charset=UTF-8',
        'Content-Disposition' => 'attachment; filename="sturzprotokoll-vorlage.csv"',
        'X-Content-Type-Options' => 'nosniff',
    ]);
})->name('carerisk.sturzprotokoll.download');

// Sitemap contains only indexable public landing pages in both languages.
Route::get('/sitemap.xml', function () use ($careRiskSeoPages) {
    $pairs = [['/', '/en'], ['/funktionen','/en/features'], ['/pilot-anfrage','/en/pilot-request']];
    foreach (array_keys($careRiskSeoPages) as $slug) $pairs[] = ['/'.$slug, '/en/'.$slug];
    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">';
    foreach ($pairs as [$de,$en]) {
        foreach ([$de,$en] as $path) {
            $xml .= '<url><loc>'.htmlspecialchars(url($path),ENT_XML1,'UTF-8').'</loc>';
            $xml .= '<xhtml:link rel="alternate" hreflang="de-AT" href="'.htmlspecialchars(url($de),ENT_XML1,'UTF-8').'" />';
            $xml .= '<xhtml:link rel="alternate" hreflang="de-DE" href="'.htmlspecialchars(url($de),ENT_XML1,'UTF-8').'" />';
            $xml .= '<xhtml:link rel="alternate" hreflang="en" href="'.htmlspecialchars(url($en),ENT_XML1,'UTF-8').'" />';
            $xml .= '</url>';
        }
    }
    $xml .= '<url><loc>'.htmlspecialchars(url('/wissen'),ENT_XML1,'UTF-8').'</loc></url>';
    $xml .= '</urlset>';
    return response($xml,200,['Content-Type'=>'application/xml; charset=UTF-8']);
})->name('carerisk.sitemap');

Route::get('/robots.txt', function () {
    return response("User-agent: *\nAllow: /\nSitemap: ".url('/sitemap.xml')."\n",200,['Content-Type'=>'text/plain; charset=UTF-8']);
})->name('carerisk.robots');
