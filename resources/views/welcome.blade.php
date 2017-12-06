<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PRJCT Amsterdam || Music ensemble by Maarten Engeltjes</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,500,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}' };
        </script>
        <div id='top' style="position: relative; z-index: 20"
            class="
                container-fluid
                lg-space-inside-sides-xl md-space-inside-sides-xl sm-space-inside-sides-xl
                bg-main
                shadow-xs">
            @include('partials.navigation')
        </div>

        <div id="app">
            @include('partials.banner')
        </div>

        <div id='over' class="container-fluid space-inside-sides-xl xs-space-inside-sides-md  space-inside-lg bg-accent">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-color-main text-bold">Over</h1>
                </div>
                <div class="col-lg-8">
                    <p class="space-outside-up-md font-md">
                        <b>PRJCT Amsterdam</b> is een nieuw barokensemble rondom countertenor <b>Maarten Engeltjes</b> en is een combinatie van een vaste kern van uitmuntende, recent afgestudeerde en in Nederland woonachtige barokmusici die een eigen muzikale en vooraanstaande visie hebben, samen met vooraanstaande internationale barokmusici. Het ensemble wordt geleid door een concertmeester van internationale allure die per project gekozen wordt. Zo wordt een omgeving gecreëerd waarin jong en oud elkaar inspireren.
                    </p>

                    <p class="font-md space-inside-md">
                        Engeltjes is de nummer vijf van de meest gevraagde countertenoren ter wereld en studeerde cum laude af aan het Koninklijk Conservatorium in Den Haag, maar pas toen hij met de wereldtop mocht gaan zingen, ontdekte hij dat hij nog veel te leren had. Het kunstvakonderwijs kan in een dergelijk leerproces niet voorzien. Engeltjes wil daarom zijn naam en faam inzetten om <b>jonge musici </b> in een vroeg stadium de kans te bieden om <b>samen met de wereldtop</b> te musiceren , op een manier die past bij hun generatie.
                    </p>
                </div>
            </div>
        </div>

        <div id="buy-tickets" class="container-fluid  space-inside-xl no-overflow">
            <div class="row all-row-centered">
                <div class="col-lg-12 col-centered space-outside-down-xl">
                    <h1 class="text-color-main text-bold text-center ">Tickets bestellen</h1>
                </div>
                <div class="hidden-xs">
                    @include('partials.homepage.ticket', [
                        'date' => '27 september 2017',
                        'image' => '/images/sint-jansbasiliek.jpg',
                        'title' => 'Sint-Jansbasiliek, Laren',
                        'websiteAddress' => 'http://www.larenklassiek.nl/',
                    ])
                    @include('partials.homepage.ticket', [
                        'date' => '29 september 2017',
                        'image' => '/images/concertzaal-theaters.jpg',
                        'title' => 'Concertzaal Theaters, Tilburg ',
                        'websiteAddress' => 'http://theaterstilburg.nl/22/online-bestellen',
                    ])
                    @include('partials.homepage.ticket', [
                        'date' => '30 september 2017',
                        'image' => '/images/philharmonie.jpg',
                        'title' => 'De Philharmonie, Haarlem',
                        'websiteAddress' => 'https://www.theater-haarlem.nl/zoeken/?zoekwaarde=stabat+mater#modal=/programma/12374/Prachtstemmen_Stabat_Mater/Maarten_Engeltjes_PRJCT_Amsterdam/',
                    ])
                    @include('partials.homepage.ticket', [
                        'date' => '1 oktober 2017',
                        'image' => '/images/muziekgebouw-aan-t-ij.jpg',
                        'title' => 'Muziekgebouw aan ’t IJ, Amsterdam',
                        'websiteAddress' => 'http://www.muziekgebouw.nl/agenda/Concerten/6625/PRJCT_Amsterdam/De_troost_van_Stabat_Mater/',
                    ])
                    @include('partials.homepage.ticket', [
                        'date' => '24 november 2017',
                        'image' => '/images/chapelle-de-la-trinité.jpg',
                        'title' => 'Chapelle de la Trinité, Lyon',
                        'websiteAddress' => 'http://www.lachapelle-lyon.com/',
                    ])
                    @include('partials.homepage.ticket', [
                        'date' => '25 november 2017',
                        'image' => '/images/salle-gaveau.jpg',
                        'title' => 'Salle Gaveau, Parijs',
                        'websiteAddress' => 'http://www.sallegaveau.com/',
                    ])
                </div>

                <div id="app" class="visible-xs">
                    <p class="text-bold">Swipe naar links of rechts voor meer tickets</p>
                    <image-slider>
                        <slide height="520px">
                            <div slot="content" class="">
                                @include('partials.homepage.ticket', [
                                    'date' => '27 september 2017',
                                    'image' => '/images/foto1.jpg',
                                    'title' => 'Sint-Jansbasiliek, Laren',
                                    'websiteAddress' => 'http://www.larenklassiek.nl/',
                                ])
                            </div>
                        </slide>
                        <slide height="520px">
                            <div slot="content" class="">
                                @include('partials.homepage.ticket', [
                                    'date' => '27 september 2017',
                                    'image' => '/images/ticket1.jpg',
                                    'title' => 'Sint-Jansbasiliek, Laren',
                                    'websiteAddress' => 'http://www.larenklassiek.nl/',
                                ])
                            </div>
                        </slide>
                        <slide height="520px">
                            <div slot="content" class="">
                                @include('partials.homepage.ticket', [
                                    'date' => '27 september 2017',
                                    'image' => '/images/foto1.jpg',
                                    'title' => 'Sint-Jansbasiliek, Laren',
                                    'websiteAddress' => 'http://www.larenklassiek.nl/',
                                ])
                            </div>
                        </slide>
                    </image-slider>
                </div>

            </div>
        </div>

        <div id="projecten" class="container-fluid space-inside-sides-xl xs-space-inside-sides-md space-inside-lg   bg-accent">
            <div class="row">
                <div class="col-lg-12 space-inside-down-lg">
                    <h1 class="text-color-main text-light ">Pergolesi’s <span class="text-bold"> Stabat Mater </span></h1>
                    <p class="font-lg space-outside-up-md text-italic"> Projecten </p>
                </div>
                <div class="col-lg-8 ">
                    <p class="font-md">
                        Het eerste project van PRJCT Amsterdam is het Stabat Mater van Pergolesi, één van de beroemdste middeleeuws-Latijnse gedichten over de Moeder Gods in smart om haar zoon, de gekruisigde Christus. Voorafgaand aan het project zal schrijver P.F. Thomése spreken over de dood van zijn dochter. Deze voordracht breekt de muziek van Pergolesi over dezelfde thematiek open en verbindt de wereld van de literatuur aan die van de klassieke muziek.
                    </p>
                    <a
                        class="
                            space-outside-up-md
                            inline-block
                            bg-secondary
                            text-color-light text-uppercase
                            ripplelink
                            space-inside-sides-sm
                            space-inside-sm
                            shadow-xs
                        "
                     href="#buy-tickets"> Bestel uw tickets hier </a>
                </div>
            </div>
        </div>



        <div class="container-fluid bg-accent space-inside-sides-xl xs-space-inside-sides-md">
            <div style="height: 1px;" class="divider bg-main bg-main-lighten-lg"></div>
            <div class="row text-center">
                <div class="col-lg-12 space-outside-xl">
                    <h1 class="text-color-main ">Solisten <span class="text-light">&</span> muzikaal leiders</h1>
                </div>
                <div class="col-lg-4 text-center space-outside-xl">
                    <h1 class="text-color-main space-outside-down-xs font-lg ">Maarten <span class="text-light "> Engeltjes </span> </h1>
                    <p class="space-outside-down-md">Countertenor</p>
                    <div style="width: 200px; height: 200px;" class="image inline-block circle bg-main">
                        <img alt="Maarten Engeltjes" title="Maarten Engeltjes" src="/images/maarten-engeltjes.jpg">
                    </div>
                    <div class="inline-block space-inside-md space-inside-sides-lg xs-space-inside-sides-xs">
                        <p class=" font-md">
                            Maarten Engeltjes zingt al sinds hij vier jaar was en koestert van kleins af aan een voorliefde voor Händel en Bach. Hij is uitgegroeid tot één van de meest gevraagde countertenors ter wereld en behoort nu tot de absolute wereldtop van de klassieke muziek.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  text-center space-outside-xl">
                    <h1 class="text-color-main space-outside-down-xs font-lg ">Riccardo <span class="text-light "> Minasi </span> </h1>
                    <p class="space-outside-down-md">Dirigent/violist</p>
                    <div style="width: 200px; height: 200px;" class="image inline-block circle bg-main">
                        <img alt="Riccardo Minasi" title="Riccardo Minasi" src="/images/Riccardo Minasi.jpeg">
                    </div>
                    <div class="inline-block space-inside-md space-inside-sides-lg xs-space-inside-sides-xs">
                        <p class=" font-md">
                            Dirigent en violist Riccardo Minasi werd al eerder door The Guardian beschreven als een “outstanding musician”, en heeft in korte tijd een reputatie als één van de meest levendige talenten van de Europese muziekwereld van de afgelopen jaren weten te verkrijgen.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  text-center space-outside-xl">
                    <h1 class="text-color-main space-outside-down-xs font-lg ">Rosemary <span class="text-light "> Joshua </span> </h1>
                    <p class="space-outside-down-md">Sopraan</p>
                    <div style="width: 200px; height: 200px;" class="image inline-block circle bg-main">
                        <img alt="Rosemary Joshua" title="Rosemary Joshua" src="/images/Rosemary Joshua.jpeg">
                    </div>
                    <div class="inline-block space-inside-md space-inside-sides-lg xs-space-inside-sides-xs">
                        <p class=" font-md">
                            Befaamd sopraan Rosemary Joshua zong onder meer bij het Royal Opera House, het Teatro alla Scala, de Metropolitan Opera, de Bayerische Staatsoper en De Nationale Opera. Ook werkte zij als artistiek leidster bij DNOA, waar zij met veel toewijding en enthousiasme jonge operatalenten klaarstoomde voor de beroepspraktijk.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact" class="container-fluid space-inside-sides-xl space-inside-lg">
            <div class="row">
                <form method='POST' action='/mail'>
                    <div class="col-lg-12 space-inside-down-lg">
                        <h1 class="text-color-main text-bold">Contact</h1>
                    </div>
                    <div class="col-lg-4 clear-floats space-inside-xs">
                        <p class="space-inside-sm text-bold">Naam</p>
                        <input type="text" name="name"
                        class="
                            border border-accent border-curved
                            height-auto
                            bg-accent
                            space-inside-left-sm
                        " required>
                    </div>
                    <div class="col-lg-4 clear-floats space-inside-xs">
                        <p class="space-inside-sm text-bold">Telefoonnummer</p>
                        <input type="text" name="name"
                        class="
                            border border-accent border-curved
                            height-auto
                            bg-accent
                            text-color-dark
                            space-inside-left-sm
                        "
                        required>
                    </div>
                    <div class="col-lg-7 clear-floats space-inside-xs">
                        <p class="space-inside-sm text-bold">Uw bericht</p>
                        <textarea style="resize: none; min-height: 200px;" type="text" name="name"
                        class="
                            border border-accent border-curved
                            height-auto
                            bg-accent
                            text-color-dark
                            space-inside-left-sm
                            space-inside-up-sm
                        "
                        required> </textarea>
                    </div>
                    <button
                    class="
                      text-color-light
                      circle
                      border-none
                      bg-secondary bg-secondary-hover-darken-xs ripplelink
                      space-inside-xs space-inside-sides-sm space-outside-up-xs space-outside-left-sm
                      block
                      transition-normal
                    ">Versturen</button>

                </form>
            </div>


            @include('partials.top-scroll')
        </div>

       @include('partials.footer')

        <script type="text/javascript" src="/js/vue.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-96178157-1', 'auto');
          ga('send', 'pageview');

        </script>
        <script>
          new WOW().init();
        </script>
    </body>
</html>
