@extends('layouts.app')
@section('title', 'Privacy / Datenschutzerklärung')

@section('meta_title', 'Privacy / Datenschutzerklärung - Fabian Ternis')
@section('meta_description', 'Privacy information for visitors of Fabian Ternis\'s websites.')
@section('meta_keywords', 'Privacy, Datenschutzerklärung, GDPR, Fabian Ternis')

@section('content')
<section class="py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-6 max-w-3xl">
        <div class="mb-16" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">
                Privacy / Datenschutzerklärung
            </h1>
            <p class="text-xl text-gray-400 max-w-3xl">
                Detailed information on how personal data is processed on this website.
            </p>
        </div>

        <!-- English version -->
        <div class="group bg-slate-800 p-8 rounded-lg shadow-md border border-slate-700 hover:border-blue-500 transition-all duration-300 hover:shadow-lg"
            data-aos="fade-up">
            <h2 class="text-3xl font-bold text-white mb-4">Privacy Policy (English)</h2>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">1. Controller</h3>
            <p class="text-lg text-gray-300 mb-6">
                Controller in the sense of the GDPR: <br>
                Fabian Elias Ternis<br>
                Alzeyer Str. 97, 67592 Flörsheim-Dalsheim, Germany<br>
                E-Mail: <a href="mailto:f.ternis@xpsystems.eu"
                    class="text-blue-400 hover:underline">f.ternis@xpsystems.eu</a>
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">2. General Information</h3>
            <p class="text-lg text-gray-300 mb-6">
                This website is operated non-commercially. Below we inform about the processing of personal data
                when using this website.
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">3. Purposes & Legal Bases</h3>
            <p class="text-lg text-gray-300 mb-6">
                Collected data (e.g., from contact form): Name, email, message, IP address, timestamp. Legal
                basis: Consent (Art. 6(1)(a) GDPR) or for the fulfillment of legitimate interests (Art. 6(1)(f)
                GDPR), e.g., to ensure security and operation.
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">4. Contact Form</h3>
            <p class="text-lg text-gray-300 mb-6">
                If you use the contact form, the data you enter will be stored and transmitted to us by email.
                The legal basis is your consent or the processing to handle the inquiry.
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">5. Storage Duration</h3>
            <p class="text-lg text-gray-300 mb-6">
                Personal data will be deleted or blocked as soon as the purpose ceases and statutory retention
                periods have expired (e.g., tax law obligations).
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">6. Rights of the Data Subject</h3>
            <p class="text-lg text-gray-300 mb-6">
                You have the right to information, rectification, erasure, restriction of processing, data
                portability, and objection. To exercise these rights, please contact: <a
                    href="mailto:f.ternis@xpsystems.eu"
                    class="text-blue-400 hover:underline">f.ternis@xpsystems.eu</a>.
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">7. Right to Lodge a Complaint</h3>
            <p class="text-lg text-gray-300 mb-6">
                You can lodge a complaint with the competent supervisory authority. For Rhineland-Palatinate:
                State Commissioner for Data Protection and Freedom of Information, Hintere Bleiche 34, 55116
                Mainz, Germany, Phone: 06131 8920-0, E-Mail: poststelle@datenschutz.rlp.de.
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">8. Changes to this Privacy Policy</h3>
            <p class="text-lg text-gray-300 mb-6">
                This privacy policy may be updated from time to time. Last update: {{ date('d.m.Y') }}.
            </p>
        </div>

        <!-- German version -->
        <div class="group bg-slate-800 p-8 rounded-lg shadow-md border border-slate-700 hover:border-blue-500 transition-all duration-300 hover:shadow-lg mt-8"
            data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-3xl font-bold text-white mb-4">Datenschutzerklärung (Deutsch)</h2>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">1. Verantwortlicher</h3>
            <p class="text-lg text-gray-300 mb-6">
                Verantwortlicher im Sinne der DSGVO: <br>
                Fabian Elias Ternis<br>
                Alzeyer Str. 97, 67592 Flörsheim-Dalsheim, Deutschland<br>
                E-Mail: <a href="mailto:f.ternis@xpsystems.eu"
                    class="text-blue-400 hover:underline">f.ternis@xpsystems.eu</a>
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">2. Allgemeine Informationen</h3>
            <p class="text-lg text-gray-300 mb-6">
                Diese Webseite wird nicht kommerziell betrieben. Nachfolgend informieren wir über die
                Verarbeitung personenbezogener Daten bei Nutzung dieses Webangebots.
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">3. Zwecke & Rechtsgrundlagen</h3>
            <p class="text-lg text-gray-300 mb-6">
                Gesammelte Daten (z. B. bei Kontaktformular): Name, E-Mail, Nachricht, IP-Adresse, Zeitstempel.
                Rechtsgrundlage: Einwilligung (Art.6(1)(a) DSGVO) bzw. zur Erfüllung berechtigter Interessen
                (Art.6(1)(f) DSGVO) z. B. zur Gewährleistung von Sicherheit und Betrieb.
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">4. Kontaktformular</h3>
            <p class="text-lg text-gray-300 mb-6">
                Wenn du das Kontaktformular nutzt, werden die von dir eingegebenen Daten gespeichert und per
                E-Mail an uns übermittelt. Rechtsgrundlage ist deine Einwilligung bzw. die Verarbeitung zur
                Bearbeitung der Anfrage.
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">5. Speicherdauer</h3>
            <p class="text-lg text-gray-300 mb-6">
                Personenbezogene Daten werden gelöscht oder gesperrt, sobald der Zweck entfällt und
                gesetzliche Aufbewahrungsfristen abgelaufen sind (z. B. steuerrechtliche Pflichten).
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">6. Rechte der betroffenen Person</h3>
            <p class="text-lg text-gray-300 mb-6">
                Du hast das Recht auf Auskunft, Berichtigung, Löschung, Einschränkung der Verarbeitung,
                Datenübertragbarkeit und Widerspruch. Zur Ausübung wende dich bitte an: <a
                    href="mailto:f.ternis@xpsystems.eu"
                    class="text-blue-400 hover:underline">f.ternis@xpsystems.eu</a>.
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">7. Beschwerderecht</h3>
            <p class="text-lg text-gray-300 mb-6">
                Du kannst eine Beschwerde bei der zuständigen Aufsichtsbehörde einreichen. Für Rheinland-Pfalz:
                Landesbeauftragter für den Datenschutz und die Informationsfreiheit, Hintere Bleiche 34, 55116
                Mainz, Deutschland, Telefon: 06131 8920-0, E-Mail: poststelle@datenschutz.rlp.de.
            </p>

            <h3 class="text-xl font-semibold text-blue-400 mb-2">8. Änderungen dieser Datenschutzerklärung</h3>
            <p class="text-lg text-gray-300 mb-6">
                Diese Datenschutzerklärung kann von Zeit zu Zeit aktualisiert werden. Letzte Aktualisierung: {{
                date('d.m.Y') }}.
            </p>
        </div>
    </div>
</section>
@endsection