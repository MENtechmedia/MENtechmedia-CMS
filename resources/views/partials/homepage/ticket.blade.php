
<div style="min-width:345px; max-width: 345px;" class="col-lg-3 all-col-centered  space-outside-md">
    <div style="width: 100%; height: 100%;" class=" shadow-xs shadow-sm-hover transition-normal pointer">
        <div class="bg-secondary">
            <p class="text-color-light text-center space-inside-sm text-bold">{{ $date }}</p>
        </div>
        <div style="width: 100%; height: 210px;" class="image">
            <img class="width-auto" src="{{$image}}">
        </div>
        <div class=" space-inside-sides-sm space-inside-sm" style="min-height: 150px; height: 150px;">
            <h4 style="min-height: 40px;" class="">{{ $title }}</h4>
        </div>
        <div>
            <a target="_blank" href="{{$websiteAddress}}"
                style="position: relative;"
                class="
                    block
                    bg-accent
                    border-none
                    space-inside-sm
                    ripplelink
                    text-color-dark
            "> Tickets bestellen </a>
        </div>

    </div>
</div>
<!-- end of card -->