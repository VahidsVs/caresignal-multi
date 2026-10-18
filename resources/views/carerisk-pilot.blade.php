<!doctype html>
<html lang="{{ $english ? 'en' : 'de-AT' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $english ? 'Request a CareRisk pilot' : 'CareRisk Pilot-Demo anfragen' }}</title>
    <meta name="description"
        content="{{ $english ? 'Explore the CareRisk platform and discuss a pilot for your care facility.' : 'CareRisk kennenlernen und ein mögliches Pilotprojekt für Ihre Pflegeeinrichtung besprechen.' }}">
    <link rel="canonical" href="{{ url($english ? '/en/pilot-request' : '/pilot-anfrage') }}">
    <link rel="alternate" hreflang="de-AT" href="{{ url('/pilot-anfrage') }}">
    <link rel="alternate" hreflang="en" href="{{ url('/en/pilot-request') }}">
    <link rel="stylesheet" href="{{ asset('carerisk/launch.css') }}">
    <link rel="stylesheet" href="{{ asset('carerisk/conversion.css') }}">
</head>

<body class="cr-en-page">
    <header class="cr-en-nav"><a class="cr-en-brand" href="{{ $english ? '/en' : '/' }}">♥ Care<span>Risk</span></a>
        <nav><a href="{{ $english ? '/en/features' : '/funktionen' }}">{{ $english ? 'Features' : 'Funktionen' }}</a>
        </nav><a class="cr-lang-switch"
            href="{{ $english ? '/pilot-anfrage' : '/en/pilot-request' }}">{{ $english ? 'DE' : 'EN' }}</a>
    </header>
    <main class="cr-en-section cr-en-wrap">
        <div class="cr-en-center"><span
                class="cr-en-eyebrow">{{ $english ? 'CARE FACILITIES & PARTNERS' : 'PFLEGEEINRICHTUNGEN & PARTNER' }}</span>
            <h1>{{ $english ? 'Explore a CareRisk pilot' : 'CareRisk im Pilot kennenlernen' }}</h1>
            <p>{{ $english ? 'We are happy to discuss potential pilot collaboration. Explore the existing online platform or request a conversation below, when the contact form is available.' : 'Sie möchten ein Pilotprojekt besprechen? Sehen Sie sich unsere bestehende Online-Plattform an. Sobald das Kontaktformular rechtlich und technisch freigeschaltet ist, können Sie direkt eine Anfrage senden.' }}
            </p>
            <div class="cr-en-actions" style="justify-content:center"><a class="cr-en-cta"
                    href="https://app.westvsline.net/de" target="_blank"
                    rel="noopener noreferrer">{{ $english ? 'Open online platform ↗' : 'Online-Plattform öffnen ↗' }}</a><a
                    class="cr-en-outline"
                    href="{{ $english ? '/en' : '/' }}">{{ $english ? 'Back to homepage' : 'Zur Startseite' }}</a>
            </div>
        </div>
        <section class="cr8-form-card">
            <h2>{{ $english ? 'Contact our team' : 'Unser Team kontaktieren' }}</h2>
            <p>{{ $english ? 'For facility managers and care teams. Never include patient or resident data.' : 'Für Heimleitungen und Pflegeteams. Bitte keine Bewohner- oder Gesundheitsdaten eingeben.' }}
            </p>
            @if (session('lead_success'))
                <div class="cr8-alert success" role="status">
                    {{ $english ? 'Your request was sent.' : 'Ihre Anfrage wurde versendet.' }}</div>
            @endif
            @if (session('lead_error'))
                <div class="cr8-alert" role="alert">{{ session('lead_error') }}</div>
            @endif
            @if ($errors->any())
                <div class="cr8-alert" role="alert">
                    {{ $english ? 'Please check your entries.' : 'Bitte Eingaben prüfen.' }}</div>
            @endif
            @if (config('carerisk-leads.enabled') && config('carerisk-leads.email'))
                <form class="cr8-form" method="POST" action="{{ $english ? '/en/pilot-request' : '/pilot-anfrage' }}">
                    @csrf
                    <div class="cr8-form-grid"><label>{{ $english ? 'Name' : 'Name' }} *<input required name="name"
                                maxlength="120"
                                value="{{ old('name') }}"></label><label>{{ $english ? 'Work email' : 'Geschäftliche E-Mail' }}
                            *<input type="email" required name="email" maxlength="190"
                                value="{{ old('email') }}"></label></div>
                    <div class="cr8-form-grid"><label>{{ $english ? 'Organization' : 'Einrichtung / Träger' }} *<input
                                required name="organization" maxlength="160"
                                value="{{ old('organization') }}"></label><label>{{ $english ? 'Role' : 'Funktion' }}<input
                                name="role" maxlength="120" value="{{ old('role') }}"></label></div>
                    <label>{{ $english ? 'Message (optional)' : 'Nachricht (optional)' }}
                        <textarea name="message" maxlength="1500" rows="4">{{ old('message') }}</textarea>
                    </label>
                    <div class="cr8-hp" aria-hidden="true"><label>Website<input name="website" tabindex="-1"
                                autocomplete="off"></label></div>
                    <label class="cr8-check"><input type="checkbox" name="privacy_ack" value="1" required>
                        <span>{{ $english ? 'I have read the privacy information and agree to processing for a response.' : 'Ich habe die Datenschutzhinweise gelesen und bin mit der Verarbeitung zur Beantwortung einverstanden.' }}
                            <a
                                href="/datenschutz">{{ $english ? 'Privacy information' : 'Datenschutzhinweise' }}</a></span></label>
                    <button type="submit" class="cr-en-cta">{{ $english ? 'Send request' : 'Anfrage senden' }}
                        →</button>
                </form>
            @else<div class="cr8-alert">
                    {{ $english ? 'The inquiry form will be available once verified business contact and privacy details are configured.' : 'Das Anfrageformular wird nach Einrichtung der bestätigten Geschäftsadresse und vollständiger Datenschutzhinweise freigeschaltet.' }}
                </div>
            @endif
        </section>
    </main>
</body>

</html>
