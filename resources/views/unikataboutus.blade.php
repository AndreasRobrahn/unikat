@extends('uk_layout')

@section('title')
<title>Unikat, Über uns Geschichte & Werte </title>
@endsection

@section('description')

<meta name="description" content="Wir über uns. Machen sie sich ihr eigenes Bild. Eine Beschreibung des Unternehmens. Arbeitsvermittlung & Personaldienstleistungen sind unser Metier. Wir wollen Unternehmen und Fachkraft zusammenbringen.">
@endsection
@section('content')

<div class="row m-0">
  <div class="col-md">
    <div class="row contentbreakw100">
        <h1 class="textsizeu3 m-2">Unikat Personaldienstleistungen</h1>
        <h2 class="textsizeu1 m-2">Über uns</h2>
    </div>
    <div class="row m-0">
        <p class="textsizeu2 ">
          Als verlässlicher, mittelständiger Personaldienstleister stellen wir Ihnen eine umfangreiche Auswahl an Services der Arbeitsvermittlung zur Verfügung. Mithilfe unserer erfahrenen und geschulten Mitarbeiter/-innen haben wir bereits mehrere Projekte erfolgreich abgeschlossen.
          Alle Mitarbeiter/-innen der Unikat Deutschland GmbH entsprechen den höchsten Ansprüchen an Qualität, Zuverlässigkeit und Kundenorientierung. Wenn sie gutes Personal suchen helfen wir Ihnen weiter!</p>
          <p>
            Besonders in der Vermittlung von Arbeitskräften in der Metallbranche und der Lagerlogistik sehen wir uns als ersten Ansprechpartner.
          </p>
    </div>

  </div>
  <div class="col-md center_items">
    <div class="row mt-4">
      <img src="{{asset('/images/image_lagerlogistik.jpg')}}" class="img-fluid" alt="Unikat über uns">
    </div>

  </div>
</div>
@endsection
