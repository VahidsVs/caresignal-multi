<!doctype html>
<html lang="de-AT">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="canonical" href="{{ url('/') }}">
    <link rel="alternate" hreflang="de-AT" href="{{ url('/') }}">
    <link rel="alternate" hreflang="de-DE" href="{{ url('/') }}">
    <link rel="alternate" hreflang="en" href="{{ url('/en') }}">
    <link rel="alternate" hreflang="x-default" href="{{ url('/') }}">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="#0a2944">
    <title>CareRisk | Pflegeheim Software, Sturzprotokoll & digitale Pflegeassistenz</title>
    <meta name="description"
        content="CareRisk ergänzt bestehende Pflegesoftware: Ereignisdokumentation, digitale Schichtübergabe und Sturzprävention im Pflegeheim. Demo von CareSignal AI ansehen.">
    <meta property="og:title" content="CareRisk – Digitale Pflegeassistenz ohne Systemwechsel">
    <meta property="og:description"
        content="Sturzrisiken besser erkennen, Pflegeteams entlasten. Für Smartphone, Tablet und Laptop.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" href="{{ asset('carerisk/style.css') }}">
    <link rel="stylesheet" href="{{ asset('carerisk/launch.css') }}">
    <script type="application/ld+json">{"\u0040context":"https://schema.org","\u0040type":"SoftwareApplication","name":"CareRisk","applicationCategory":"HealthApplication","operatingSystem":"Webbrowser","description":"Digitale Pflegeassistenz und Risikoanalyse für Pflegeeinrichtungen"}</script>
    <link rel="stylesheet" href="{{ asset('carerisk/conversion.css') }}">
    <link rel="stylesheet" href="{{ asset('carerisk/v9.css') }}">
    <link rel="stylesheet" href="{{ asset('carerisk/v10.css') }}">
    <link rel="stylesheet" href="{{ asset('carerisk/contact.css') }}">
</head>

<body>
    <header class="nav" id="site-header">
        <a class="brand" href="/"><span class="brandmark">♥</span><span>Care<span
                    class="green">Risk</span><small>Sicher. Entlastet. Gemeinsam.</small></span></a>
        <button class="menu" type="button" aria-label="Menü öffnen" aria-expanded="false"
            aria-controls="site-navigation"
            onclick="const n=document.getElementById('site-navigation');const o=n.classList.toggle('open');this.setAttribute('aria-expanded',o?'true':'false');this.setAttribute('aria-label',o?'Menü schließen':'Menü öffnen')">☰</button>
        <nav id="site-navigation" aria-label="Hauptnavigation">
            <a href="/funktionen">Software</a><a href="/pflegeheim-software">Für Pflegeheime</a><a
                href="/sturzprotokoll-vorlage">Gratis-Vorlage</a><a href="#loesung">Lösung</a><a
                href="#vorteile">Vorteile</a><a href="#integration">Integration</a><a href="#team">Über uns</a><a
                href="#demo">Online-Plattform</a>
            <a class="nav-mobile-cta" href="https://app.westvsline.net/" target="_blank"
                rel="noopener noreferrer">Software öffnen ↗</a>
        </nav>
        <a class="cr-lang-switch" href="/en" lang="en" hreflang="en" aria-label="Switch to English">EN</a><a
            class="btn blue nav-cta" href="/pilot-anfrage">Demo anfragen ↗</a>
    </header>
    <main id="top">
        <section class="hero">
            <div class="wrap hero-grid">
                <div>
                    <div class="eyebrow">DIE INTELLIGENTE ASSISTENZ FÜR PFLEGEEINRICHTUNGEN</div>
                    <h1>Pflegeinformationen <em>klar priorisieren.</em><br>Teams entlasten.<br>Übergaben verbessern.
                    </h1>
                    <p class="lead">CareRisk ergänzt Pflegeeinrichtungen in Österreich und Deutschland: relevante
                        Veränderungen sichtbar machen, Aufgaben priorisieren und Schichtübergaben unterstützen – <b>ohne
                            Wechsel Ihrer bestehenden Pflegesoftware.</b></p>
                    <div class="ticks"><span>✓ Kostenloses Pilotprojekt anfragen</span><span>✓ Smartphone, Tablet &
                            Laptop</span><span>✓ Excel, CSV, API oder manuelle Eingabe</span><span>✓ Vorbereitung auf
                            smarte Sensorik</span></div>
                    <div class="actions"><a class="btn primary" href="#demo">Online-Software entdecken →</a><a
                            class="btn outline" href="#ablauf">So funktioniert CareRisk ▶</a></div>
                    <div class="cr-press-mini"><span class="cr-press-dot"></span><span>Unser Pflege-Tech-Startup in
                            <b>Die Presse</b> vorgestellt</span><a
                            href="https://www.diepresse.com/41261729/start-up-steckbrief-weniger-aufwand-im-pflegealltag-mit-ki"
                            target="_blank" rel="noopener noreferrer">Artikel lesen ↗</a></div>
                    <p class="micro">Startup-Konzept · Funktionen und Integrationen abhängig vom Entwicklungs- und
                        Pilotstatus</p>
                </div>
                <div class="hero-art">
                    <div class="ambient"></div>
                    <div class="portrait">
                        <div class="face">👩🏼‍⚕️</div>
                        <div class="face senior">👵🏻</div>
                        <div class="care-text">Menschliche Pflege.<br><b>Intelligent unterstützt.</b></div>
                    </div>
                    <div class="alert floating"><span>♨</span>
                        <div><b>Risiko-Hinweis</b><small>Zimmer 12 · Prüfung empfohlen</small></div>
                    </div>
                    <div class="watch floating"><span>⌚</span><b>Smart Alert</b><small>Beispielansicht</small></div>
                </div>
            </div>
        </section>
        <section class="strip">
            <div class="wrap strip-grid">
                <div><strong>♧</strong><span><b>Prävention</b><small>Risiken frühzeitig erkennen</small></span></div>
                <div><strong>♙</strong><span><b>Entlastung</b><small>Mehr Überblick für Pflegeteams</small></span></div>
                <div><strong>⬡</strong><span><b>Dokumentation</b><small>Nachvollziehbare Ereignisse</small></span></div>
                <div><strong>◷</strong><span><b>Einfach starten</b><small>Ohne Systemwechsel</small></span></div>
            </div>
        </section>
        <section class="cr-trust" aria-label="Über CareRisk">
            <div class="wrap">
                <div class="cr-trust-heading"><span class="eyebrow">AUS GRAZ · FÜR DIE PFLEGE</span>
                    <h2>Eine echte Plattform. Ein Team mit Pflege- und IT-Erfahrung.</h2>
                    <p>Vertrauen durch nachvollziehbare Informationen – keine erfundenen Bewertungen oder Kundenzahlen.
                    </p>
                </div>
                <div class="cr-trust-grid"><a
                        href="https://www.diepresse.com/41261729/start-up-steckbrief-weniger-aufwand-im-pflegealltag-mit-ki"
                        target="_blank" rel="noopener noreferrer"><strong>Die Presse
                            ↗</strong><span>Startup-Vorstellung in einer österreichischen Tageszeitung</span></a><a
                        href="#team"><strong>Gründer aus Graz</strong><span>Softwareentwicklung und praktische
                            Pflegeerfahrung</span></a><a href="https://app.westvsline.net/" target="_blank"
                        rel="noopener noreferrer"><strong>Online-Plattform ↗</strong><span>Bestehende
                            CareSignal-AI-Software kennenlernen</span></a></div>
                <div class="cr-trust-ticker" aria-label="Vorteile von CareRisk">
                    <div class="cr-trust-track"><span>✓ Ohne Austausch der Pflegesoftware</span><span>✓
                            Pflegefachkräfte entscheiden</span><span>✓ Schichtübergaben unterstützen</span><span>✓
                            Relevante Veränderungen im Blick</span><span aria-hidden="true">✓ Ohne Austausch der
                            Pflegesoftware</span><span aria-hidden="true">✓ Pflegefachkräfte entscheiden</span><span
                            aria-hidden="true">✓ Schichtübergaben unterstützen</span><span aria-hidden="true">✓
                            Relevante Veränderungen im Blick</span></div>
                </div>
            </div>
        </section>
        <section class="cr9-section" id="alltag" aria-labelledby="cr9-compare-title">
            <div class="cr9-container">
                <p class="cr9-kicker">PFLEGEALLTAG IM FOKUS</p>
                <h2 id="cr9-compare-title">Weniger suchen. Mehr Überblick.</h2>
                <p class="cr9-lead">So kann ein ergänzendes digitales System die Abläufe in Pflegeeinrichtungen
                    unterstützen.</p>
                <div class="cr9-comparison">
                    <article class="cr9-before"><span class="cr9-tag">Ohne zusätzliche Übersicht</span>
                        <h3>Informationen sind verteilt</h3>
                        <ul>
                            <li>Relevante Informationen aus verschiedenen Quellen zusammenführen</li>
                            <li>Veränderungen im Team manuell abstimmen</li>
                            <li>Offene Aufgaben bei der Übergabe nachverfolgen</li>
                        </ul>
                    </article>
                    <article class="cr9-after"><span class="cr9-tag">Mit CareRisk als Ergänzung</span>
                        <h3>Relevantes im Blick behalten</h3>
                        <ul>
                            <li>Wichtige Hinweise übersichtlich aufbereiten</li>
                            <li>Veränderungen strukturiert besprechen</li>
                            <li>Verantwortlichkeiten und nächste Schritte transparenter machen</li>
                        </ul>
                    </article>
                </div>
                <p class="cr9-fine">Die Darstellung beschreibt mögliche Anwendungsszenarien, keine nachgewiesene
                    Zeitersparnis oder garantierte Sturzvermeidung. Funktionen und Integrationen sind im Pilot zu
                    prüfen.</p>
            </div>
        </section>
        <section class="cr9-section cr9-tint" id="ablauf">
            <div class="cr9-container">
                <p class="cr9-kicker">SO FUNKTIONIERT DIE ZUSAMMENARBEIT</p>
                <h2>In drei Schritten zum sinnvollen Pilotprojekt</h2>
                <div class="cr9-steps">
                    <article><span>01</span>
                        <h3>Ausgangssituation verstehen</h3>
                        <p>Gemeinsam besprechen wir Abläufe, Datenquellen und konkrete Herausforderungen Ihrer
                            Einrichtung.</p>
                    </article>
                    <article><span>02</span>
                        <h3>Machbarkeit prüfen</h3>
                        <p>Wir klären verfügbare Funktionen, Datenschutz, Berechtigungen und mögliche Schnittstellen.
                        </p>
                    </article>
                    <article><span>03</span>
                        <h3>Pilot und Wirkung bewerten</h3>
                        <p>Wir definieren nachvollziehbare Ziele und prüfen die Ergebnisse gemeinsam mit Ihrem Team.</p>
                    </article>
                </div>
                <div class="cr9-action"><a href="/pilot-anfrage">Pilot-Demo anfragen →</a><a class="cr9-textlink"
                        href="/funktionen">Funktionen kennenlernen</a></div>
            </div>
        </section>
        <section class="section wrap two" id="loesung">
            <div>
                <div class="eyebrow">DIE LÖSUNG</div>
                <h2>So unterstützt <span class="green">CareRisk</span><br>Ihren Pflegealltag</h2>
                <p>Pflegekräfte brauchen klare Informationen statt zusätzlicher Komplexität. CareRisk bündelt Daten und
                    macht mögliche Risiken verständlich sichtbar.</p>
                <div class="features" id="funktionen">
                    <article><i class="violet">⌁</i>
                        <div><b>Sturz- und Bewegungsrisiken</b><small>Risikoindikatoren und auffällige Muster
                                übersichtlich darstellen.</small></div>
                    </article>
                    <article><i class="red">♨</i>
                        <div><b>Benachrichtigungen</b><small>Hinweise auf mobilen Geräten und am Computer – abhängig von
                                angeschlossenen Datenquellen.</small></div>
                    </article>
                    <article><i class="cyan">▤</i>
                        <div><b>Dokumentation & Berichte</b><small>Einträge, Verlauf und Exporte nachvollziehbar
                                organisieren.</small></div>
                    </article>
                    <article><i class="teal">↔</i>
                        <div><b>Flexible Dateneingabe</b><small>Manuell, Excel, CSV und über geeignete
                                API-Schnittstellen.</small></div>
                    </article>
                    <article><i class="amber">♧</i>
                        <div><b>Für das gesamte Team</b><small>Pflegedienstleitung, Pflegefachkräfte und
                                Einrichtungsmanagement.</small></div>
                    </article>
                </div>
            </div>
            <div class="devices" id="ablauf">
                <div class="laptop">
                    <div class="screen">
                        <div class="sidebar"><b>Care<span class="green">Risk</span></b><span>◫
                                Übersicht</span><span>♧ Bewohner</span><span>♨ Ereignisse</span><span>▤
                                Berichte</span><span>⚙ Einstellungen</span></div>
                        <div class="dashboard"><b>Übersicht</b><small>Demo-Daten · Beispieloberfläche</small>
                            <div class="stats">
                                <div><strong>1</strong>Hinweis</div>
                                <div><strong>3</strong>Beobachtungen</div>
                                <div><strong>28</strong>Stabil</div>
                            </div><b class="tabletitle">Aktuelle Ereignisse</b>
                            <div class="tr"><span>14:32</span><span>Zimmer 12</span><b>Risiko-Hinweis</b></div>
                            <div class="tr"><span>13:15</span><span>Zimmer 5</span><b>Aktivität</b></div>
                            <div class="tr"><span>11:03</span><span>Zimmer 8</span><b>Dokumentiert</b></div>
                        </div>
                    </div>
                </div>
                <div class="phone">
                    <div class="notch"></div><b>Care<span
                            class="green">Risk</span></b><small>Beispielansicht</small>
                    <div class="phonealert">♨<b>Risiko-Hinweis</b><span>Zimmer 12</span></div><button
                        onclick="this.textContent='Hinweis bestätigt ✓'">Hinweis bestätigen</button><span
                        class="phonelink">Verlauf anzeigen</span>
                </div>
            </div>
        </section>
        <section class="section light" id="vorteile">
            <div class="wrap">
                <div class="center">
                    <div class="eyebrow">IHRE VORTEILE</div>
                    <h2>Für Menschen gemacht. Für den Pflegealltag entwickelt.</h2>
                    <p>Weniger Informationsinseln, bessere Übersicht und ein Einstieg ohne aufwendigen Systemwechsel.
                    </p>
                </div>
                <div class="cards">
                    <article>
                        <div>♡</div>
                        <h3>Für Pflegefachkräfte</h3>
                        <p>Wichtige Hinweise auf einen Blick, auch unterwegs auf dem Smartphone.</p>
                    </article>
                    <article>
                        <div>▣</div>
                        <h3>Für die Pflegedienstleitung</h3>
                        <p>Berichte und Risikoübersichten als Grundlage für fundierte Entscheidungen.</p>
                    </article>
                    <article>
                        <div>◇</div>
                        <h3>Für Träger & Partner</h3>
                        <p>Modulares Konzept, flexible Datenwege und Potenzial für Schnittstellenkooperationen.</p>
                    </article>
                </div>
            </div>
        </section>
        <section class="section wrap" id="integration">
            <div class="center">
                <div class="eyebrow">FLEXIBEL INTEGRIERBAR</div>
                <h2>Ihre Pflegesoftware bleibt. <span class="green">CareRisk ergänzt.</span></h2>
                <p>Sie entscheiden, wie Daten in CareRisk gelangen. Bestehende Systeme müssen nicht ersetzt werden.</p>
            </div>
            <div class="pipeline">
                <div><span>✎</span><b>Manuelle Eingabe</b><small>Direkt im Browser</small></div>
                <div><span>▦</span><b>Excel & CSV</b><small>Strukturierter Import</small></div>
                <div><span>⌘</span><b>API</b><small>Geplante Schnittstellen</small></div>
                <div class="focus"><span>♥</span><b>CareRisk</b><small>Analyse & Übersicht</small></div>
                <div><span>▣</span><b>Alle Endgeräte</b><small>Mobil, Tablet, Desktop</small></div>
            </div>
            <p class="micro center">Kompatibilität mit konkreten Drittanbietersystemen wird im Rahmen einer technischen
                Integration geprüft.</p>
        </section>
        <section class="section light" id="geraete">
            <div class="wrap">
                <div class="center">
                    <div class="eyebrow">SMART DEVICES</div>
                    <h2>Offen für intelligente <span class="green">Sturzsensoren</span></h2>
                    <p>Wearables und Sensoren können wertvolle zusätzliche Hinweise liefern. Wir prüfen die Anbindung
                        geeigneter Geräte mit dokumentierten Schnittstellen.</p>
                </div>
                <div class="cards gadgets">
                    <article>
                        <div class="gadget watchg">
                            <div class="strap"></div>
                            <div class="dial">SOS<small>Fall Alert</small></div>
                        </div>
                        <h3>Smartwatch mit Sturzerkennung</h3>
                        <p>Konzeptbeispiel: tragbares Gerät mit SOS-Funktion und möglicher automatischer Sturzerkennung.
                        </p><small>Illustration · keine bestätigte Geräteintegration</small>
                    </article>
                    <article>
                        <div class="gadget pendant">
                            <div class="cord"></div>
                            <div class="pendantbody">SOS</div>
                        </div>
                        <h3>Notruf-Anhänger mit Fallsensor</h3>
                        <p>Konzeptbeispiel: leicht tragbarer Notrufknopf, optional mit Sturzerkennung je nach Modell.
                        </p><small>Illustration · keine bestätigte Geräteintegration</small>
                    </article>
                    <article class="motion">
                        <div class="motion-track"><span class="sensor">⌚</span><span
                                class="pulse">········→</span><span class="phoneicon">▣<small>Hinweis</small></span>
                        </div>
                        <h3>Vom Sensor zum Team</h3>
                        <p>Ein möglicher Ablauf: Gerät erkennt ein Ereignis → Schnittstelle übermittelt Daten → CareRisk
                            zeigt den Hinweis.</p><small>Animierte Konzeptdarstellung</small>
                    </article>
                </div>
                <p class="micro center">Keine Sturzerkennung ist fehlerfrei. Genauigkeit, Fehlalarme, Datenschutz und
                    Zuverlässigkeit müssen für jedes Gerät separat validiert werden.</p>
            </div>
        </section>

        <section class="cr-proof section" id="team" aria-labelledby="cr-team-heading">
            <div class="wrap cr-proof-grid">
                <div>
                    <div class="eyebrow">AUS GRAZ · IN DER PRESSE</div>
                    <h2 id="cr-team-heading">Hinter der Idee stehen <span class="green">Menschen aus der Praxis und
                            Technologie.</span></h2>
                    <p>CareSignal AI wurde von <strong>Dr. Seyedhadi Seyedin</strong> und <strong>Seyed Vahid
                            Seyedin</strong> in Graz gegründet. Das Team entwickelt digitale Assistenz für
                        Pflegeeinrichtungen und wird nach eigenen Angaben vom Grazer Wissenschafts- und Technologiepark
                        unterstützt.</p>
                    <div class="cr-proof-actions"><a class="btn primary"
                            href="https://www.diepresse.com/41261729/start-up-steckbrief-weniger-aufwand-im-pflegealltag-mit-ki"
                            target="_blank" rel="noopener noreferrer">Bericht in Die Presse lesen ↗</a><a
                            class="btn outline" href="#demo">Software kennenlernen ↓</a></div>
                    <p class="micro">Pressebericht über das Startup und CareSignal AI. Die Veröffentlichung ist keine
                        unabhängige medizinische Validierung.</p>
                </div>
                <aside class="cr-press-card" aria-label="Presseerwähnung"><span class="cr-press-kicker">IN DEN
                        MEDIEN</span>
                    <div class="cr-press-wordmark">Die Presse<span class="cr-press-asterisk">✳</span></div>
                    <div class="cr-press-rule"></div>
                    <p class="cr-press-title">„Weniger Aufwand im Pflegealltag mit KI“</p>
                    <p class="cr-press-description">Startup-Steckbrief über die digitale Pflegeassistenz des Grazer
                        Gründerteams.</p><a
                        href="https://www.diepresse.com/41261729/start-up-steckbrief-weniger-aufwand-im-pflegealltag-mit-ki"
                        target="_blank" rel="noopener noreferrer">Originalartikel öffnen <span
                            aria-hidden="true">↗</span></a>
                </aside>
            </div>
        </section>
        <section class="cr-books section" id="buecher" aria-labelledby="cr-books-heading">
            <div class="wrap">
                <div class="cr-books-intro">
                    <div class="eyebrow">AUTOR & PFLEGEWISSEN</div>
                    <h2 id="cr-books-heading">Fachwissen aus der Pflege – auch als Buch</h2>
                    <p>Dr. Seyedhadi Seyedin ist Autor zweier deutschsprachiger Lernbücher zur Vorbereitung auf die
                        Pflegeausbildung und auf Prüfungen. Die Bücher sind unabhängig von der CareRisk-Software
                        erhältlich.</p>
                </div>
                <div class="cr-books-grid">
                    <article class="cr-book-card">
                        <div class="cr-book-cover cr10-book-cover"><img
                                src="{{ asset('carerisk/books/erfolgreich-in-die-pflege.webp') }}"
                                alt="Erfolgreich in die Pflege – original book cover" loading="lazy" width="350"
                                height="472"></div>
                        <div class="cr-book-body"><span class="cr-book-tag">BUCH · PFLEGEAUSBILDUNG</span>
                            <h3>Erfolgreich in die Pflege</h3>
                            <p class="cr-book-subtitle">Vorbereitung auf die Pflegeausbildung</p>
                            <p>Ein praxisnaher Einstieg in Pflegesprache, Grundlagen und Alltag in Pflegeheim und
                                Krankenhaus.</p><a class="cr-book-link" href="https://www.amazon.de/dp/B0H7QJ7QCG"
                                target="_blank" rel="noopener noreferrer sponsored">Buch auf Amazon ansehen ↗</a>
                        </div>
                    </article>
                    <article class="cr-book-card">
                        <div class="cr-book-cover cr10-book-cover"><img
                                src="{{ asset('carerisk/books/pflege-apostel.webp') }}"
                                alt="Pflege-Apostel – original book cover" loading="lazy" width="350"
                                height="472"></div>
                        <div class="cr-book-body"><span class="cr-book-tag">BUCH · PFLEGEAUSBILDUNG</span>
                            <h3>Pflege-Apostel</h3>
                            <p class="cr-book-subtitle">Kompaktwissen für Pflegeausbildung & Prüfungsvorbereitung</p>
                            <p>Kompaktes Lern- und Prüfungswissen für Pflegeassistenz, Pflegefachassistenz und weitere
                                Pflegeausbildungen.</p><a class="cr-book-link"
                                href="https://www.amazon.de/dp/B0H6RDD77W" target="_blank"
                                rel="noopener noreferrer sponsored">Buch auf Amazon ansehen ↗</a>
                        </div>
                    </article>
                </div>
                <p class="cr-books-disclaimer">Die Bücher sind externe Amazon-Angebote. Sternebewertungen,
                    Verkaufszahlen und Produktpreise werden hier bewusst nicht übernommen.</p>
            </div>
        </section>
        <section class="cr-demo section" id="demo" aria-labelledby="cr-demo-heading">
            <div class="wrap cr-demo-grid">
                <div>
                    <div class="eyebrow">SOFTWARE LIVE ENTDECKEN</div>
                    <h2 id="cr-demo-heading">Nicht nur eine Idee: <span class="green">Unsere Plattform ist
                            online.</span></h2>
                    <p>Entdecken Sie die bestehende Software <strong>CareSignal AI</strong> direkt im Browser. CareRisk
                        stellt ergänzende Konzepte rund um Sturzereignisse, Dokumentation und die Anbindung geeigneter
                        Datenquellen vor.</p>
                    <div class="cr-demo-points"><span>✓ Bestehende Online-Plattform</span><span>✓ Für
                            Pflegeeinrichtungen entwickelt</span><span>✓ Einblick in die digitale Pflegeassistenz</span>
                    </div>
                    <div class="cr-proof-actions"><a class="btn primary" href="https://app.westvsline.net/"
                            target="_blank" rel="noopener noreferrer">Zur CareSignal AI Plattform ↗</a><a
                            class="btn outline" href="#kontakt">Pilotgespräch anfragen</a></div>
                    <p class="micro">Der Link führt zur extern gehosteten Plattform. Ein öffentlich zugänglicher
                        Testzugang ist nicht zugesichert; ggf. ist eine Anmeldung erforderlich.</p>
                </div>
                <div class="cr-demo-visual">
                    <div class="cr-demo-top"><span class="cr-demo-lights">● ● ●</span><span>CareSignal AI ·
                            Plattform</span></div>
                    <div class="cr-demo-screen"><span class="cr-demo-label">LIVE-SOFTWARE</span>
                        <div class="cr-demo-symbol">♥</div>
                        <h3>CareSignal <span>AI</span></h3>
                        <p>Digitale Unterstützung für den Pflegealltag</p><a href="https://app.westvsline.net/"
                            target="_blank" rel="noopener noreferrer">Plattform öffnen ↗</a>
                    </div><small>Illustrative Vorschau – kein Screenshot des Produktes</small>
                </div>
            </div>
        </section>
        <section class="section wrap">
            <div class="center">
                <div class="eyebrow">HÄUFIGE FRAGEN</div>
                <h2>Einfach erklärt</h2>
            </div>
            <div class="faq">
                <details open>
                    <summary>Müssen wir unsere bisherige Pflegesoftware ersetzen?</summary>
                    <p>Nein. CareRisk ist als ergänzende Anwendung konzipiert. Daten können manuell oder aus
                        strukturierten Dateien übernommen werden; API-Anbindungen hängen vom jeweiligen System ab.</p>
                </details>
                <details>
                    <summary>Funktioniert CareRisk auf iPad, Android, Windows und Mac?</summary>
                    <p>Die Weboberfläche ist für moderne Browser und verschiedene Bildschirmgrößen ausgelegt. Eine
                        native App für jedes Betriebssystem ist damit nicht automatisch verfügbar.</p>
                </details>
                <details>
                    <summary>Ist CareRisk kostenlos?</summary>
                    <p>Aktuell sind das Kennenlerngespräch und die individuell vereinbarte Pilotnutzung kostenlos.
                        Umfang und Zugang werden vorab abgestimmt; spätere Angebote können kostenpflichtig sein.</p>
                </details>
                <details>
                    <summary>Kann CareRisk Stürze zuverlässig verhindern?</summary>
                    <p>CareRisk soll Teams bei der Einschätzung von Risiken unterstützen. Eine Verhinderung von Stürzen
                        oder medizinische Wirksamkeit kann ohne entsprechende Validierung nicht zugesichert werden.</p>
                </details>
                <details>
                    <summary>Kann ich CareRisk herunterladen und selbst installieren?</summary>
                    <p>Die bestehende CareSignal AI Plattform ist online erreichbar. Eine öffentliche
                        Self-Hosting-Installationsversion von CareRisk wird hier nicht angeboten. <a
                            href="https://app.westvsline.net/" target="_blank" rel="noopener noreferrer">Zur
                            Online-Plattform ↗</a></p>
                </details>
            </div>
        </section>
        <section class="section cr-seo-home" id="ratgeber">
            <div class="wrap">
                <div class="center">
                    <div class="eyebrow">WISSEN & WERKZEUGE FÜR PFLEGEEINRICHTUNGEN</div>
                    <h2>Praktische Lösungen für <span class="green">Pflegeheimleitung und Pflegeteams</span></h2>
                    <p>Informieren Sie sich über digitale Abläufe und nutzen Sie unsere kostenlose
                        Sturzprotokoll-Vorlage.</p>
                </div>
                <div class="cr-seo-grid"><a class="cr-seo-tile" href="/pflegeheim-software"><b>Pflegeheim
                            Software</b><span>Digitale Unterstützung ohne sofortigen Systemwechsel</span><strong>Mehr
                            erfahren →</strong></a><a class="cr-seo-tile"
                        href="/digitale-schichtuebergabe"><b>Digitale Schichtübergabe</b><span>Informationen
                            strukturiert für den Dienstwechsel aufbereiten</span><strong>Mehr erfahren →</strong></a><a
                        class="cr-seo-tile" href="/sturzprotokoll-vorlage"><b>Kostenlose
                            Sturzprotokoll-Vorlage</b><span>CSV-Musterdatei für Ereignisdokumentation
                            herunterladen</span><strong>Vorlage ansehen →</strong></a><a class="cr-seo-tile"
                        href="/sturzpraevention-pflegeheim"><b>Sturzprävention im Pflegeheim</b><span>Ereignisse
                            dokumentieren, Maßnahmen nachvollziehen</span><strong>Ratgeber lesen →</strong></a><a
                        class="cr-seo-tile" href="/pflegepersonal-entlasten"><b>Pflegepersonal
                            entlasten</b><span>Weniger Doppeldokumentation, bessere Übersicht</span><strong>Tipps
                            ansehen →</strong></a></div>
            </div>
        </section>
        <section class="cta" id="kontakt">
            <div class="wrap cta-grid">
                <div>
                    <div class="eyebrow">GEMEINSAM WEITERDENKEN</div>
                    <h2>Mehr Sicherheit beginnt mit einem Gespräch.</h2>
                    <p>Für Pflegeheime, Pflegedienstleitungen, Träger und Technologiepartner in Österreich und
                        Deutschland.</p><a class="btn primary" href="/pilot-anfrage">Pilot-Demo anfragen →</a>
                    <div class="cr11-contact" aria-label="CareRisk Kontakt">
                        <p class="cr11-free">Aktuell kostenlos: Kennenlerngespräch und Pilotnutzung nach Vereinbarung
                        </p>
                        <p class="cr11-note">Wir möchten Pflegeeinrichtungen den Einstieg erleichtern. Für die derzeit
                            vereinbarte Pilotphase erheben wir keine Nutzungsgebühr. Umfang und Zugang werden persönlich
                            abgestimmt; spätere Angebote können kostenpflichtig sein.</p>
                        <div class="cr11-links"><a href="mailto:ertebatbama@gmail.com">✉
                                <span><strong>E-Mail</strong><small>ertebatbama@gmail.com</small></span></a><a
                                href="https://wa.me/989197044123" target="_blank" rel="noopener noreferrer">◉
                                <span><strong>WhatsApp</strong><small>+43 681 816 17567</small></span></a><a
                                href="tel:+4368181617567">☎ <span><strong>Telefon Österreich</strong><small>+43 681 816
                                        17567</small></span></a></div>
                        <p class="cr11-privacy">Bitte keine personenbezogenen Gesundheitsdaten oder
                            Bewohnerinformationen per E-Mail oder WhatsApp übermitteln.</p>
                    </div>
                    <p class="micro">Pilotgespräche werden nach persönlicher Abstimmung vereinbart; keine
                        Bewohnerdaten über die Website senden.</p>
                </div>
                <div class="cta-art">♥<span>CareRisk</span><small>Pflege trifft intelligente Assistenz</small></div>
            </div>
        </section>
    </main>
    <footer>
        <div class="wrap foot"><b>Care<span class="green">Risk</span></b><span>CareRisk · CareSignal AI · Gründerteam
                aus Graz</span><span>Rechtliche Pflichtangaben vor Veröffentlichung ergänzen</span></div>
    </footer>
    <script src="{{ asset('carerisk/site.js') }}" defer></script><a class="cr9-mobile-cta" href="/pilot-anfrage">Pilot-Demo anfragen →</a>
</body>

</html>
