@extends('uk_layout')

@section('title')
<title>Unikat, Arbeitsvermittlung & Personaldienstleistungen in Dortmund</title>
@endsection

@section('description')

<meta name="description" content="Die Unikat GmbH ist ein Unternehmen für Personaldienstleistungen und Vermittlung von Arbeitskräften, speziell der Lagerlogistik und Metallbranche. Wir stellen deutschlandweit ein">
@endsection

@section('content')

<div class="row m-0 justify-content-center " style="">
  <div class="col-sm-9 contentbreakw100">
      <h1 class="textsizeu3 mt-4 ">Herzlich Willkommen bei der Unikat GmbH</h1>

      <h2 class="textsizeu1 mt-4">Arbeitsvermittlung & Personaldienstleistungen</h2>

    <p class="textsizeu2 m-2" style="">
      Die Unikat GmbH ist auf die Arbeitnehmerüberlassung von Fachkräften spezialisiert. Suchen Sie nach qualifizierten Personal aus der Metallbranche oder im Bereich der Lagerlogistik?
      Von unserem Firmensitz in Dortmund helfen wir Ihnen in der Arbeitsvermittlung dem Abschluss Ihrer Projekt.  Profitieren sie von unseren längjahrigen Erfahrungen und Kontakten im Bereich der Personaldienstleistungen.
      Wir sehen uns sowohl als verlässlichen Partner als auch als nachhaltiger Arbeitgeber. Denn wir wissen, dass wir nur durch unsere Mitarbeiter unseren Erfolg erreichen können.
    </p>
  </div>

</div>
<div class="row m-0 justify-content-center">
  <div class="col-sm-9 p-1 contentbreak">
      <h3 class="p-2 textsizeu1">Social Media, treffen Sie uns auf den Sozialen Medien</h3>
    <p><a class="fa fa-facebook socmedbutton facebookcolor" href="https://www.facebook.com/Unikat-110609097951924/"></a>  <a class="fa fa-instagram socmedbutton instacolor" href="https://www.instagram.com/unikat_gmbh"></a></p>
  </div>
</div>
  <div class="row m-0 justify-content-center text-black"  style="height: 60vh; overflow: hidden; color:black !important; font-weight: 900;">
    <div class="imageoverlay p-0 h-100">
      <img src="{{asset('images/backgroundimage2.jpg')}}" alt="hintergrundbild" class="" style="height: 100%; width: 100%; object-fit: cover;">
      <div class="h-100 w-100" style="position: absolute; top: 5px; left: 5px; background-color: rgba(255,255,255, 0.6);">
        <h3 class="textsizeu3 text-shadow hiddenonmobile" style="font-weight: 900;"> Kontaktieren Sie unser kompetentes Team bei</h3>
          <h3 class="mobileHeading mt-2" style="font-weight: 900;">Kontaktieren Sie unser kompetentes Team bei</h3>

          <p class="picturetextmobile" style="font-weight: 900;">
            * Auftragsspitzen <br>
            * Personalengpässen <br>
            * Terminaufträgen <br>
            * Stillstandsarbeiten <br>
            * Bedarf an Mitarbeitern mit speziellen Zulassungen <br>
          </p>
        <div class="" style="position: absolute; bottom: -5px;">
          <p class="textsize1 text-shadow" style="font-weight: 900;">Ihre Zufriedenheit ist unser Beruf!</p>
        </div>
 
      </div>
    </div>
  </div>
  <div class="row justify-content-center m-0">
    <h2 class="text-center textsizeu3 contentbreak">Unsere Dienstleistungen für Sie</h2>
    <div class="row contentbreak">

    </div>
        <div class="col-sm-5 m-1 ">
          <a href="{{route('unikatSpeciality')}}">
            <div class="row center_items m-3">
              <img src="{{asset('images/image_metallbranche.jpg')}}" title="Jobs in der Mettalbranche" alt="Schweißen, Funken fliegen" class="img-fluid img-departments linkitem" style="">
            </div>
            <div class="row">
              <span class="text-dark textsizeu1 text-center">Metallbranche</span>
            </div>
          </a>
        </div>
      </a>
      <div class="col-sm-5 ">
        <a href="{{route('unikatSpeciality')}}">
          <div class="row m-3">
            <img src="{{asset('images/image_lagerlogistik.jpg')}}" title="Jobs in der Logistik" alt="eine große Lagerhalle" class="img-fluid img-departments linkitem">
          </div>
          <div class="row">
            <span class="text-dark textsizeu1 text-center">Lagerlogistik</span>
          </div>
        </a>
      </div>
  </div>
  <p class="contentbreak"></p>
    <div class="row m-0 center_items">
      <div class="col-sm-5 m-2 p-1 order-sm-last order-md-first contentbreakw100">
        <div class="row m-2 border-bottom " >
          <h3 class="headline1"><strong>Zusätzliche Informationen</strong></h3>
        </div>
        <div class="row m-2 justify-content-center ">
          <p>Adresse: Sonnenscheineck 16, 44278 Dortmund</p>
        </div>
        <div class="row m-2 justify-content-center ">
          <p>Email: info@unikat-deutschland.de</p>
        </div>
        <div class="row m-2 justify-content-center ">
          <p>Social Media: <a class="fa fa-facebook facebookcolor text-white" href="https://www.facebook.com/Unikat-110609097951924/"></a>  <a class="fa fa-instagram instacolor text-white" href="https://www.instagram.com/unikat_gmbh"></a></p>
        </div>
        <div class="row m-2  justify-content-center ">
          <div class="col">
            <button type="button" name="button" class="btn btn-block border-rounded border border-white bg-dark-outline" onclick="showContactModal()">Kontaktformular aufrufen</button>
          </div>

        </div>
      </div>
      <div class="col-sm-5 p-0 order-sm-first order-md-last">
        <div class="mapouter" style="height: 350px; width: 100%;padding: 5px;">
          <div class="gmap_canvas p-0 center_items">
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Sonnenscheineck%2016,%2044287%20Dortmund&t=&z=13&ie=UTF8&iwloc=&output=embed" style="width: 90%;height: 350px;"></iframe><br>
            <br>
            </style>
          </div>
        </div>
      </div>
    </div>

@endsection
