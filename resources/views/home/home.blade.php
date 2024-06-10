{{-- gae ngetes scroll --}}
{{-- <section class="h-[100vh]"></section> --}}

<section id="phase1" class="relative w-full min-h-[479.427vw]">
    {{-- background & lightbulb --}}
    <div class="w-full h-full absolute z-[1]">
        <img id="lightbulb-off" src="/assets/home/lampu mati.jpg" alt="lightbulb"
            class="absolute max-w-full left-[50%] transform translate-x-[-50.6%] w-[22.3%]">
        <img id="lightbulb-on" src="/assets/home/lampu nyala.jpg" alt="lightbulb"
            class="absolute max-w-full opacity-[.4]" style="opacity: 0;">

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
        
        {{-- tv toggle on/off --}}
        <div class="bg-red-400 absolute top-[27.2%] right-[23.3%] opacity-[0] aspect-[1/1] w-[7%]" id="tv-toggle"></div>

        {{-- frame foto --}}
        <img src="/assets/home/frame foto.png" alt="photo frame" class="absolute top-[34.9%] transform w-[100%]">

        <div class="absolute w-full aspect-[96/108] top-[47.3%]">

            {{-- amplop time capsule --}}
            <img src="/assets/home/amplop kebuka time capsule.png" alt="amplop time capsule"
                class="absolute top-[52.5%] right-[3.3%] w-[40%]">

            {{-- interactive koran kanan --}}
            <img src="/assets/home/interactive koran kanan.png" alt="interactive koran kanan"
                class="absolute w-[49.2%] top-[1.7%] right-[-14.1%]">

            {{-- interactive buku tertutup kiri --}}
            <img src="/assets/home/interactive buku ketutup kiri.png" alt="interactive buku ketutup kiri"
                class="absolute top-[4.6%] w-[36.5%] left-[-9%]">

            {{-- interactive foto 1 kiri --}}
            <img src="/assets/home/interactive foto 1 kiri.png" alt="interactive foto 1 kiri"
                class="absolute top-[11.9%] w-[19.2%] left-[3.1%]">

            {{-- interactive foto 2 kiri --}}
            <img src="/assets/home/interactive foto 2 kiri.png" alt="interactive foto 2 kiri"
                class="absolute top-[19.3%] w-[19.9%] left-[-3.35%]">

            {{-- interactive foto 3 kiri --}}
            <img src="/assets/home/interactive foto 3 kiri.png" alt="interactive foto 3 kiri"
                class="absolute top-[29%] w-[19.5%] left-[.1%]">

            {{-- black background --}}
            <div class="w-full h-full bg-black opacity-[0.5]"></div>

            {{-- amplop pop up --}}
            <img src="/assets/home/amplop pop up.png" alt="amplop pop up"
                class="absolute w-[68%] left-[50%] transform translate-x-[-50%] top-[4%]">

            {{-- kertas pop up wa --}}
            <img src="/assets/home/kertas pop up wa.png" alt="kertas pop up wa"
                class="absolute w-[72.5%] top-[65.45%] left-[50%] transform translate-x-[-50%]">

        </div>

        {{-- amplop closing --}}
        <img src="/assets/home/amplop closing.png" alt="amplop closing"
            class="absolute bottom-[21.2%] w-[63%] left-[50%] transform translate-x-[-48%]">

        {{-- bioskop bawah --}}
        <div class="bg-white w-[100%] aspect-[5/2] absolute bottom-[8%]"></div>
        <img src="/assets/home/bioskop bawah.png" alt="bioskop bawah" class="absolute w-[100%] bottom-[0%]">

        {{-- footer --}}
        <div class="absolute bottom-[1.5%] left-[50%] transform translate-x-[-50%]">
            <div class="text-white text-xl">Learn more about <a href="https://www.instagram.com/in_betweenstories"
                    target="_blank" class="font-bold no-underline text-white">@in_betweenstories</a> of
                Pantjarona on Instagram</div>
        </div>
    </div>

</section>
