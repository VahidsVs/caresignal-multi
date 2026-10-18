<!doctype html>
<html lang="de-AT">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#0a2944">
    <title>{{ $page['title'] }} | CareRisk</title>
    <meta name="description" content="{{ $page['intro'] }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="de-AT" href="{{ url('/' . request()->segment(1)) }}">
    <link rel="alternate" hreflang="de-DE" href="{{ url('/' . request()->segment(1)) }}">
    <link rel="alternate" hreflang="en" href="{{ url('/en/' . request()->segment(1)) }}">
    <meta name="robots" content="index,follow">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $page['title'] }} | CareRisk">
    <meta property="og:description" content="{{ $page['intro'] }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="stylesheet" href="{{ asset('carerisk/style.css') }}">
    <link rel="stylesheet" href="{{ asset('carerisk/launch.css') }}">
</head>

<body>
    <header class="cr-topbar"><a href="/"><b>♥ Care<span class="green">Risk</span></b></a><a
            href="/#ratgeber">Ratgeber & Vorlagen</a><a class="cr-lang-switch"
            href="{{ url('/en/' . request()->segment(1)) }}" lang="en">EN</a><a class="cr-demo"
            href="https://app.westvsline.net/de" target="_blank" rel="noopener noreferrer">Live-Demo ↗</a></header>
    <main class="cr-article">
        <div class="cr-kicker">CARERISK · PFLEGEWISSEN</div>
        <h1>{{ $page['heading'] }}</h1>
        <p class="cr-lead">{{ $page['intro'] }}</p>
        @foreach ($page['sections'] as $section)
            <section>
                <h2>{{ $section['heading'] }}</h2>
                <p>{{ $section['body'] }}</p>
            </section>
            @endforeach @if (request()->is('sturzprotokoll-vorlage'))
                <div class="cr-actions"><a href="{{ route('carerisk.sturzprotokoll.download') }}">Kostenlose
                        CSV-Vorlage herunterladen ↓</a></div>
            @endif
            <div class="cr-note">
                <strong>Hinweis:</strong> CareRisk ist kein Notrufsystem und ersetzt keine medizinische oder
                pflegefachliche Beurteilung. Beschriebene Integrationen sind einrichtungsabhängig zu prüfen.
            </div>
            <div class="cr-actions"><a href="https://app.westvsline.net/de" target="_blank"
                    rel="noopener noreferrer">CareSignal AI online ansehen ↗</a><a class="secondary" href="/#demo">Zur
                    CareRisk-Demo</a></div>
            <h2>Weitere Themen</h2>
            <nav class="cr-related">
                @foreach ($pages as $slug => $related)
                    <a href="{{ url('/' . $slug) }}">{{ $related['heading'] }} →</a>
                @endforeach
            </nav>
            <p><small>Gründerteam aus Graz · <a
                        href="https://www.diepresse.com/41261729/start-up-steckbrief-weniger-aufwand-im-pflegealltag-mit-ki"
                        target="_blank" rel="noopener noreferrer">CareSignal AI in Die Presse ↗</a></small></p>
    </main>
    <footer>
        <div class="wrap foot"><a href="/">CareRisk – Startseite</a><span>Rechtliche Pflichtangaben vor
                Veröffentlichung ergänzen</span></div>
    </footer>
</body>

</html>
