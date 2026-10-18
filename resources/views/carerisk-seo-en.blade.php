<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $page['title'] }} | CareRisk</title>
    <meta name="description" content="{{ $page['intro'] }}">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/en/' . request()->segment(2)) }}">
    <link rel="alternate" hreflang="de-AT" href="{{ url('/' . request()->segment(2)) }}">
    <link rel="alternate" hreflang="de-DE" href="{{ url('/' . request()->segment(2)) }}">
    <link rel="alternate" hreflang="en" href="{{ url('/en/' . request()->segment(2)) }}">
    <link rel="stylesheet" href="{{ asset('carerisk/launch.css') }}">
</head>

<body class="cr-en-page">
    <header class="cr-en-nav"><a class="cr-en-brand" href="/en">♥ Care<span>Risk</span></a>
        <nav><a href="/en">Home</a><a href="/en/features">Features</a><a href="/en/pilot-request">Pilot</a></nav><a
            class="cr-lang-switch" href="{{ url('/' . request()->segment(2)) }}">DE</a>
    </header>
    <main class="cr-en-article cr-en-wrap"><span class="cr-en-eyebrow">CARERISK · CARE RESOURCES</span>
        <h1>{{ $page['heading'] }}</h1>
        <p class="cr-en-lead">{{ $page['intro'] }}</p>
        @foreach ($page['sections'] as $section)
            <section>
                <h2>{{ $section['heading'] }}</h2>
                <p>{{ $section['body'] }}</p>
            </section>
            @endforeach @if (request()->segment(2) === 'sturzprotokoll-vorlage')
                <a class="cr-en-cta" href="/sturzprotokoll-vorlage.csv">Download free CSV template ↓</a>
            @endif
            <div class="cr-en-warning">
                CareRisk is not an emergency alarm system or a replacement for professional medical or nursing
                assessment. Availability of integrations must be verified.</div>
            <div class="cr-en-actions"><a class="cr-en-cta" href="https://app.westvsline.net/de" target="_blank"
                    rel="noopener noreferrer">Explore CareSignal AI ↗</a><a class="cr-en-outline"
                    href="/en/pilot-request">Pilot information</a></div>
            <h2>More resources</h2>
            <div class="cr-en-related">
                @foreach ($pages as $slug => $related)
                    <a href="{{ url('/en/' . $slug) }}">{{ $related['heading'] }} →</a>
                @endforeach
            </div>
    </main>
    <footer class="cr-en-footer">
        <div class="cr-en-wrap">CareRisk · Graz, Austria · <a href="/en">Home</a></div>
    </footer>
</body>

</html>
