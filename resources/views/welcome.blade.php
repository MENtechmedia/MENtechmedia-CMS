<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PRJCT Amsterdam || Music ensemble by Maarten Engeltjes</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,500,600" rel="stylesheet" type="text/css">
        <?php 
            $id = null; 
            
            if(Auth::check()){ 
                $id = json_encode(Auth::user()->id); 
            } 
        ?>

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                
            ]); ?>

            window.user_id =  <?php echo json_encode($id); ?>   
        </script>
    </head>
    <body>
          
        <div id="app">
            <div id='top' style="position: relative; z-index: 20"
                class="
                    container-fluid
                    lg-space-inside-sides-xl md-space-inside-sides-xl sm-space-inside-sides-xl
                    bg-main
                    shadow-xs">
                @include('partials.navigation')
            </div>

            <div>
                @include('partials.banner')
            </div>

            <div id='over' class="container-fluid space-inside-sides-xl xs-space-inside-sides-md  space-inside-lg bg-accent">

                <div class="row">
                    <div class="col-lg-12">
                        <editable-title id="1">
                            <h1 class="text-color-main text-bold">
                                <editable-text></editable-text>
                            </h1>
                        </editable-title>
                    </div>
                    <div class="col-lg-8">
                        <editable-section id="1">
                            <p class="space-outside-up-md font-md">
                                <editable-text></editable-text>
                            </p>
                        </editable-section>
                    </div>
                </div>
            </div>

            <div id="buy-tickets" class="container-fluid  space-inside-xl no-overflow">
                <div class="row all-row-centered">
                    <div class="col-lg-12 col-centered space-outside-down-xl">
                        <h1 class="text-color-main text-bold text-center ">Tickets bestellen</h1>
                    </div>
                    <div class="hidden-xs">
                        @forelse($tickets as $ticket)
                            @include('partials.homepage.ticket', [
                                'date' => $ticket->getDate() . " " . getMonthName($ticket->getMonth()) . " " . $ticket->getYear(),
                                'image' => $ticket->landscape,
                                'title' => $ticket->title,
                                'websiteAddress' => "https://" . $ticket->link,
                            ])
                        @empty
                            <p>Geen tickets</p>
                        @endforelse
                    </div>

                    <div class="visible-xs">
                        <p class="text-bold">Swipe naar links of rechts voor meer tickets</p>
                        <image-slider>
                            <slide height="520px">
                                <div slot="content" class="">
                                    @forelse($tickets as $ticket)
                                        @include('partials.homepage.ticket', [
                                            'date' => $ticket->date,
                                            'image' => $ticket->landscape,
                                            'title' => $ticket->title,
                                            'websiteAddress' => "https://" . $ticket->link,
                                        ])
                                    @empty
                                        <p>Geen tickets</p>
                                    @endforelse
                                </div>
                            </slide>
                        </image-slider>
                    </div>

                </div>
            </div>

            @if($project)
            <div id="projecten" class="container-fluid space-inside-sides-xl xs-space-inside-sides-md space-inside-lg   bg-accent">
                <div class="row">
                    <div class="col-lg-12 space-inside-down-lg">
                        <h1 class="text-color-main text-light ">{{ $project->title }} <span class="text-bold">  </span></h1>
                        <p class="font-lg space-outside-up-md text-italic"> Projecten </p>
                    </div>
                    <div class="col-lg-8 ">
                        <p class="font-md">
                             {!! nl2br(e($project->description)) !!}
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
            @endif


            <div class="container-fluid bg-accent space-inside-sides-xl xs-space-inside-sides-md">
                <div style="height: 1px;" class="divider bg-main bg-main-lighten-lg"></div>
                <div class="row text-center">
                    <div class="col-lg-12 space-outside-xl">
                        <h1 class="text-color-main ">Solisten <span class="text-light">&</span> muzikaal leiders</h1>
                    </div>
                    @forelse($musicians as $musician)
                    <div class="col-lg-4 text-center space-outside-xl">
                        <h1 class="text-color-main space-outside-down-xs font-lg ">{{ $musician->name }} <span class="text-light ">  </span> </h1>
                        <p class="space-outside-down-md">{{ $musician->function }}</p>
                        <div style="width: 200px; height: 200px;" class="image inline-block circle bg-main">
                            <img alt="{{ $musician->name }}" title="{{ $musician->name }}" src="{{ $musician->portrait }}">
                        </div>
                        <div class="inline-block space-inside-md space-inside-sides-lg xs-space-inside-sides-xs">
                            <p class=" font-md">
                                {{ $musician->description }}
                            </p>
                        </div>
                    </div>
                    @empty
                        <p>Geen muzikanten gevonden.</p>
                    @endforelse
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
        </div>
        @include('partials.footer')
    </div>
      

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
