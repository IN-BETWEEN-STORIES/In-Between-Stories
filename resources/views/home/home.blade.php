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
        <img id="logo-tagline-pantjarona" src="/assets/home/tagline & logo pantjarona.png" alt="tagline-logo-pantjarona"
            class="absolute left-[50%] top-[15.2%] transform translate-x-[-50%] w-[77%]" style="opacity: 0;">

        {{-- video --}}
        <video id="tv-video" class="absolute left-[50%] top-[-3%] transform translate-x-[-65%] w-[40%] h-[65%]"
            src="/assets/home/spongebob.mp4" type="video/mp4" muted="true">
        </video>

        {{-- tv --}}
        <img src="/assets/home/tv.png" alt="tv"
            class="absolute left-[50%] top-[25%] transform translate-x-[-50%] w-[65%]">

        {{-- frame foto --}}
        <img src="/assets/home/frame foto.png" alt="photo frame" class="absolute top-[34.9%] transform w-[100%]">

        <div class="absolute w-full aspect-[96/108] top-[47.3%]">

            {{-- black background --}}
            <div class="w-full h-full bg-black opacity-[0.5]"></div>

        </div>

        {{-- amplop closing --}}
        <img src="/assets/home/amplop closing.png" alt="amplop closing"
            class="absolute bottom-[21.2%] w-[63%] left-[50%] transform translate-x-[-48%]">

        {{-- bioskop bawah --}}
        <div class="bg-white w-[100%] aspect-[5/2] absolute bottom-[8%]"></div>
        <img src="/assets/home/bioskop bawah.png" alt="bioskop bawah" class="absolute w-[100%] bottom-[0%]">

        {{-- footer --}}
        <div class="absolute bottom-[1.5%] left-[50%] transform translate-x-[-50%]">
            <div class="text-white text-2xl">Learn more about <a href="https://www.instagram.com/in_betweenstories" target="_blank"
                    class="font-bold no-underline text-white">@in_betweenstories</a> of
                Pantjarona on Instagram</div>
        </div>
    </div>

</section>
