<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->
    <link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.ico')}}"/>
    <link href="{{asset('css/bootstrap-5.0.1-dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('js/slick-1.8.1/slick/slick.css')}}"/> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">/ -->
    <!-- <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('css/main.css')}}"/> -->
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('css/mainUK.css')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c869b225f8.js" crossorigin="anonymous"></script>
    <!-- jquery-->
    <script  src="{{asset('js/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
    <script  src="{{asset('css/bootstrap-5.0.1-dist/js/bootstrap.min.js')}}"></script>
    @yield('description')
    <meta name="keywords" content="Unikat, Personaldienstleistungen, Arbeitsvermittlung, Vermittlung von Arbeitskräften, Metallbranche, Lagerlogistik, Dortmund, Stellenangebote">
    <meta name="author" content="John Gelotti">
    @yield('title')
    <!-- Styles -->
    <style media="screen">

    .mapouter{
      position:relative;
      text-align:right;
      height:100%;
      width:100%;
    }
    .gmap_canvas {
      overflow:hidden;
      background:none!important;
      height:100%;
      width:100%;
      padding: 15px;
    }

    #stickynav
    {
      color: white;
      background: RGBA(221, 65, 36,0.2);
    }
    .customdg-input
    {
      width: 100%;
      border-radius: 15px;
      padding: 5px;
    }
    .customdg-input:focus{
      border: 3px solid rgba(0,0,255, 0.5) ;
    }
    .customdg-input:hover{
      border: 2px solid rgba(0,0,255, 0.8) ;
    }
    #stickynavmob{
      display:none;
    }
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {

      #stickynav{
        display:none;
      }
      #stickynavmob{
        display:flex;
        /* background: RGBA(221, 65, 36,0.2); */
      }
    }
    .dropdownright
    {
      animation: fadeInTop 3s forwards;
      overflow: hidden;
    }
    .mobileHeading
    {
      display:none;
    }
    @media only screen and (max-height: 400px) {

      #stickynav{
        display:none;
      }
      #stickynavmob{
        display:flex;
        background-color: rgba(221, 65, 36,0.5);
      }
    }
    @media only screen and (max-width: 601px){

      .mobileHeading
      {
        display:block ;
      }
    }

    @media only screen and (min-width: 601px){

      #stickynavmob{
        display:none;
        /* background: RGBA(221, 65, 36,0.2); */
      }

      .hoverdropdown
      {
        animation: fadeInTop2 3s forwards;
        overflow: hidden;
      }
    }
    </style>
    <body>
      <div class="toogleMenu">
        <input type="checkbox" id="hamburg" onclick="openSidemenu1()">
            <label for="hamburg" class="hamburg">
              <div class="h-100 w-100">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </label>
          </div>
        </div>
          <div class="menuSmartphone" id="sidemenu1">
            <div class="m-0 center_items h-100" >
              <div class="row center_items text-white">
                <div class="col-5 m-1 sameheight125"  style="">
                  <div class="w-100 h-100 d-flex p-1 linkitem ukColor-translucent center_items">
                    <a href="{{route('unikataboutus')}}" class="text-white">
                      <p class="hoveritem text-center">Über uns</p>
                    </a>
                    </div>
                  </div>
                  <!-- <hr> -->

              <div class="col-5 m-1 sameheight125">
                  <div class="w-100 h-100 d-flex p-1 linkitem ukColor-translucent center_items" >
                      <a href="{{route('joboffers')}}" class="text-white">
                      <p class="hoveritem text-center">
                        Stellen <br> angebote</p>
                        </p>
                    </a>
                  </div>
              </div>
              <div class="col-5 m-1 sameheight125">
                  <div class="w-100 h-100 d-flex p-1 linkitem ukColor-translucent center_items" >
                      <a onclick="toggleContactModal()" class="text-white">
                      <p class="hoveritem">
                        Kontakt</p>
                        </p>
                    </a>
                  </div>
              </div>
              <div class="col-5 m-1 sameheight125">
                  <div class="w-100 h-100 d-flex p-1 linkitem ukColor-translucent center_items" >
                      <a href="{{route('unikatSpeciality')}}" class="text-white">
                      <p class="hoveritem p-1">
                        Kompetenzen</p>
                        </p>
                    </a>
                  </div>
              </div>
              <div class="col-5 m-1 sameheight125">
                  <div class="w-100 h-100 d-flex p-1 linkitem ukColor-translucent center_items" >
                    <a href="{{route('unikat')}}" class="text-white">
                      <p class="hoveritem p-1" >
                        <span class="material-icons f5">
                          home
                        </span>
                        </p>
                      </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      <div class="container-fluid p-0">
        <div class="p-0" style="display:block;">
          <div style="position:relative; display: flex; justify-content: center; height: 10em;">
            <div class="head_with_logo" style="margin-top: 55px; ">
            </div>
            <div class="head_with_logo" style="margin-top: 155px;">
            </div>
            <div class="test" style="position:absolute; height: 250px; width: 250px;border-radius: 50%;background-color: #614e3f; display: flex; justify-content: center; align-items: center;">
            <div class="" style="position:relative; height: 80%; width: 80%;border-radius: 50%; border: 4px solid white;display:flex; align-items: center;">
              <a href="{{route('unikat')}}"><img src="{{asset('images/unikat_logo_grey-removebg-preview.png')}}" alt="Teamlogo" class="unikat_logo" style=""></a>
            </div>
              </div>
            </div>
          </div>
        <div class="row hiddenonmobile align-items-center" style="">
                <div class="col-3  mb-1 center_items linkitem">
                  <a href="{{route('unikat')}}" >
                    <span class="material-icons">
                      <b class=" hoveritem f4">home</b>
                    </span>
                  </a>
                </div>
                <div class="col-2 center_items linkitem">
                  <a href="{{route('unikataboutus')}}">
                    <p class="hoveritem f2">Über uns</p>
                  </a>
                </div>
                <div class="col-3 offset-2 center_items linkitem" style="position: relative;">
                  <div class="" style="display: block; position: relative;">
                  <div class="dropdownactivate p-1" id="dropdownactivate">
                    <p class="hoveritem f2">Unsere Leistungen</p>
                  </div>
                  <div class="hoverdropdown  p-1" id="">

                    <!-- <hr> -->
                    <div class="dropdownitem linkitem p-1 ukColor-translucent center_items">
                      <a href="{{route('joboffers')}}" class="text-white">
                        <p class="hoveritem">Stellenangebote</p>
                      </a>
                    </div>
                    <!-- <hr> -->

                    <div class="dropdownitem linkitem p-1 ukColor-translucent center_items">
                      <a href="{{route('unikatSpeciality')}}" class="text-white">
                        <p class="hoveritem">Kompetenzen</p>
                      </a>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 center_items linkitem ">
                  <p class="hoveritem f2" onclick="toggleContactModal()">Kontakt</p>
                </div>
              </div>
      <div class="container-fluid w-100 m-0 p-0" style="min-height: 69vh;">
        @yield('content')
      </div>

      <div class="row mt-2 justify-content-center">
        <div class="col-6 center_items p-0">
          <a href="{{route('impressum')}}">Impressum</a>
        </div>
        <div class="col-6 center_items p-0">
          <a href="{{route('datasecurity')}}">Datenschutz</a>
        </div>
      </div>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Deine Angaben</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="toggleContactModal()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="" action="{{route('notification.customer')}}" method="post">
              @csrf
              <div class="row m-0 mt-2">
                <div class="col-sm">
                  <div class="form-group">
                    <label for="surname">Vorname</label>
                    <input type="text" class="form-control input1 " name="surname" value="" id="surname">
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group">
                    <label for="lastname">Nachname</label>
                    <input type="text" class="form-control input1" name="lastname" value="" id="lastname">
                  </div>
                </div>
              </div>
              <div class="row m-0 mt-2">
                <div class="col">
                  <div class="form-group">
                  <label for="email">Emailadresse</label>
                    <input type="text" class="form-control input1" name="email" value="" required id="email">
                </div>
              </div>
              </div>
              <div class="row m-0 mt-2">
                <div class="col">
                  <div class="form-group">
                    <label for="phone">Telefonnummer für eine Rückmeldung</label>
                    <input type="text" class="form-control input1" name="phone" value="" id="phone">
                  </div>
                </div>
                </div>
              <div class="row m-0 mt-2">
                <div class="col">
                  <div class="form-group">
                    <h5>Deine Nachricht</h5>
                    <textarea name="message" class="form-control input1" rows="8" cols="80" style="width: 100%;"></textarea>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <button type="submit" name="button" class="btn btn-success btn-block btn-outline">Absenden</button>
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>


@if(!Session::get('cookies'))

<div class="cookieDisclaimer bg-light border border-dark" id="cookiedisclaimer" style="position:fixed; bottom: 10px; height: auto; width:100%; z-index:99; text-align:center; color: black; ">

  Diese Seite verwendet technische notwendige Cookies. Durch die Nutzung unserer Dienste stimmst du der Verwendung zu.<br>

  <button type="button" name="button" class="btn btn-outline-dark" onclick="setCookieSession()" style="z-index: 201;">Verstanden</button>
</div>
@endif

  </body>
    <script  src="{{asset('js/main.js')}}"></script>
    <script  src="{{asset('js/app.js')}}"></script>
    @yield('additional_js')
  </html>
