{{-- gae ngetes scroll --}}
{{-- <section class="h-[100vh]"></section> --}}

<section id="phase1" class="relative w-full min-h-[479.427vw]">
    {{-- background & lightbulb --}}
    <div class="w-full h-full absolute z-[1]">
        <img id="lightbulb-off" src="/assets/home/lampu mati.jpg" alt="lightbulb"
            class="absolute max-w-full left-[50%] transform translate-x-[-50.6%] w-[22.3%]">
        <img id="lightbulb-on" src="/assets/home/lampu nyala.jpg" alt="lightbulb" class="absolute max-w-full opacity-[.4]"
            style="opacity: 0;">

    </div>

    {{-- others --}}
    <div class="absolute z-[2] w-full h-full">
        {{-- lightbulb click area --}}
        <div id="lightbulb-placeholder"
            class="opacity-[0] bg-red-400 absolute z-[100] left-[50%] top-[1%] transform translate-x-[-50.6%] w-[20%] aspect-[8/13]">
        </div>

        {{-- tagline logo pantjarona --}}
        <img src="/assets/home/tagline & logo pantjarona.png" alt="tagline-logo-pantjarona"
            class="absolute left-[50%] top-[15.5%] transform translate-x-[-50%] w-[77%]">
    </div>

</section>
