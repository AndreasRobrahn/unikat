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
        <h1 class="textsizeu3 m-2">Unikat Arbeitsvermittlung</h1>
        <h2 class="textsizeu1 m-2">Über uns</h2>
    </div>
    <div class="row m-0">
        <p class="textsizeu2 ">
          Das Unternehmen Unikat GmbH kann auf eine Erfahrung zurückblicken, die wir gern mit Ihnen teilen möchten.
          Ganz gleich, ob Sie als Auftraggeber auf der Suche nach professionellen Dienstleistern sind oder sich als Bewerber
          neuen Herausforderungen stellen möchten. Wir wünschen uns, dass Sie zufrieden sind. Daher bieten wir Ihnen die
          Möglichkeit, sich vorab umfassend über unsere Dienstleistungen zu informieren.
          </p>
          <p>Unser Ziel ist es neben der persönlichen und individuellen Beratung und Betreuung von arbeitssuchenden Menschen, eine zeitnahe Vermittlung und eine optimale Vorbereitung auf den künftigen Arbeitsplatz zu gewährleisten.
          Wir legen Wert auf hohe Qualitätsstandards bei der Vermittlung von Arbeitssuchenden.
          Ein Service, auf den Sie vertrauen können.
          Sprechen Sie uns an, wir vermitteln Sie in Arbeit!
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
