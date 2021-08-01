@extends('uk_layout')

@section('title')
<title>Unikat GmbH, wir suchen Sie! Stellenangebote und mehr</title>
@endsection
@section('description')
<meta name="description" content="Die Unikat GmbH stellt vor welche Berufsgruppen grade besonders gute Chancen auf ein Jobangebot haben. Übertariflich bezahlt und abwechslungsreich">
@endsection

@section('content')

<div class="row m-0 center_items">
  <div class="col-md-8">
    <div class="row contentbreakw100">
      <img src="{{asset('images/worker.png')}}" alt="" class="joboffersimg">
      <h2 class="textsizeu3 m-2">FÜR BEWERBER</h2>
    </div>
    <div class="row mt-4 m-0">
      <p>
        Bewerben Sie sich jetzt bei Unikat und profitieren Sie von interessanten Arbeitgebern, attraktiven Tätigkeiten und den Vorteilen der familiären Atmosphäre.</p>
    </div>
    <div class="row mt-4">
        <img src="{{asset('images/resume.png')}}" alt="" class="joboffersimg">
        <h2 class="textsizeu3 m-2">STELLENANGEBOTE</h1>
    </div>
    <div class="row m-0">
      <p class="textsizeu2">Sie sind auf der Suche nach einem ansprechenden Job? Werfen Sie einen Blick in unsere aktuellen Stellenangebote und lassen Sie sich von der Vielfalt an beruflichen Möglichkeiten überzeugen.</p>
    </div>
    <div class="row">
      <h3 class="textsize2u m-2"><b>Lagerhelfer (m/w/d) ab sofort in Vollzeit</b></h3>
    </div>

  <div class="row mt-2">
    <h2 class="textsize2u m-2">Ihre Aufgaben</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Kommissionieren von Waren mittels Handscanner</li>
        <li>Verpacken nach Packvorschrift sowie Versandvorbereitung</li>
        <li>Etikettieren und Labeln der Pakete</li>
        <li>Durchführen von Qualitätskontrollen</li>
        <li>Bedienung des Handhubwagens zum innerbetrieblichen Transport</li>
      </ul>
    </div>

  </div>
  <div class="row mt-2">
    <h2 class="textsize2u m-2">Ihr Profil</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Erste Erfahrung im Lagerbereich von Vorteil</li>
        <li>Scanner-Erfahrung oder grundlegende PC-Kenntnisse</li>
        <li>Zuverlässigkeit, Belastbarkeit sowie eine engagierte Arbeitsweise</li>
        <li>Bereitschaft zur Arbeit im 2- Schichtsystem</li>
      </ul>
    </div>

  </div>
  <div class="row mt-2">
    <span class="textsize2u m-2">Unser Angebot</span>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Langfristige Einsatzmöglichkeit als Lagerhelfer bei einem namenhaften Logistikbetrieb</li>
        <li>Abwechslungsreiche und interessante Tätigkeiten</li>
        <li>Ein angenehmes und freundliches Betriebsklima</li>
        <li>Übertarifliche Bezahlung </li>
      </ul>

    </div>

  </div>
  <hr style="border: 2px solid black;">
  <div class="row ">
    <h3 class="textsize2u m-2"><b>Schlosser/Metallbauer (m/w/d) in Vollzeit</b></h3>
  </div>
  <div class="row mt-2">
    <h2 class="textsize2u m-2">Ihre Aufgaben</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Herstellung von Metallbaukonstruktionen nach Zeichnung im Anlagenbau</li>
        <li>Montage einzelner Bauteile/Baugruppen, Behältern, Vorrichtungen und Apparaten anhand technischer Zeichnungen und Stücklisten</li>
        <li>Metallbearbeitung (Schweißen, Biegen oder Trennen)</li>
        <li>Erfahrung an Metallbearbeitungsmaschinen (Bohr-, Schleifmaschinen, Trennschleifer, Schweißgerät, Drehen, Sägen, Abkanten)</li>
        <li>Gelegentliche Montage- und Servicearbeiten bei Kunden</li>
      </ul>
    </div>

  </div>
  <div class="row mt-2">
    <h2 class="textsize2u m-2">Ihr Profil</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Abgeschlossene Berufsausbildung im Metallbau oder im Schlosserhandwerk (Maschinenschlosser, Betriebsschlosser, Stahlbauschlosser oder ähnliches)</li>
        <li>Fundierte praktische Kenntnisse in der Metallverarbeitung zwingend erforderlich</li>
        <li>Erfahrung im Schweißen von Vorteil</li>
        <li>Teamfähigkeit</li>
        <li>Selbständige und zuverlässige Arbeitsweise</li>

      </ul>
    </div>

  </div>
  <div class="row mt-2">
    <h2 class="textsize2u m-2">Unser Angebot</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Langfristige Einsatzmöglichkeit als Schlosser/Metallbauer</li>
        <li>Abwechslungsreiche und interessante Tätigkeiten</li>
        <li>Ein angenehmes und freundliches Betriebsklima</li>
        <li>Übertarifliche Bezahlung </li>
      </ul>
    </div>

  </div>
  <hr style="border: 2px solid black;">


  <div class="col-12 m-3">
    <h2 class="textsize1"><b>Haben wir Ihr Interesse geweckt? Dann freuen wir uns auf Ihre aussagekräftige Bewerbung</b></h2>
    <p class="textsize1u mt-4">Telefonisch sind wir während unserer Öffnungszeiten unter 0159/06443495 oder alternativ unter 0172/4303133 erreichbar</p>
    <p class="textsize1u">Nutzen sie unser <b> <a id="contactformular" style="cursor:pointer;">Kontaktformular</a> </b></p>
    <p class="textsize1u">Oder schreibe uns einfach eine Email an <a href="mailto:info@unikat-deutschland.de" style="color:black;">info@unikat-deutschland.de</a> </p>
  </div>
    <hr style="border: 2px solid black;">


<div class="col-md-12 m-3 ">
  <div class="">
    <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
  </div>

</div>
<hr style="border: 2px solid black;">
</div>
</div>
@endsection

@section('additional_js')
<script type="text/javascript">
  $('#contactformular').click(function() {

    showContactModal()
    })
</script>
@endsection
