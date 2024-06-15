{{-- gae ngetes scroll --}}
{{-- <section class="h-[100vh]"></section> --}}

<style>
    input:focus {
        outline: none !important;
        border: none !important;
    }
</style>

<section id="phase1" class="relative w-full min-h-[479.427vw]">
    {{-- background & lightbulb --}}
    <div class="w-full h-full absolute z-[1]">
        <img id="lightbulb-off" src="/assets/home/lampu mati.jpg" alt="lightbulb"
            class="absolute max-w-full left-[50%] transform translate-x-[-50.6%] w-[22.3%]">
        <img id="lightbulb-on" src="/assets/home/lampu nyala.jpg" alt="lightbulb" class="absolute max-w-full opacity-[.4]"
            style="opacity: 0;">

    </div>

    <div class="absolute z-[2] w-full h-full">
        <img src="/assets/home/Header.png" alt="header" class="absolute max-w-full left-[1.5%]">
    </div>

    {{-- others --}}
    <div class="absolute z-[2] w-full h-full">
        {{-- lightbulb click area --}}
        <div id="lightbulb-placeholder"
            class="opacity-[0] bg-red-400 absolute z-[100] left-[50%] top-[1%] transform translate-x-[-50.6%] w-[20%] aspect-[8/13]">
        </div>

        {{-- lightbulb narrative --}}
        <img src="/assets/home/Light Off_Narrative cropped.png" alt="lightbulb narrative" id="lightbulb-narrative-off"
            class="absolute top-[0] w-[35%] top-[8.3%] left-[50%] transform translate-x-[-50%]">
        <img src="/assets/home/Light On_Narrative cropped.png" alt="lightbulb narrative" id="lightbulb-narrative-on"
            class="absolute top-[0] w-[14%] top-[8.2%] left-[50%] transform translate-x-[-50%]" style="opacity: 0;">


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
        <img src="/assets/home/Our Creation_Television Click Button (Big Ring).png" alt="click-button-big"
            class="absolute top-[29%] right-[31%] aspect-[1/1] w-[3%] hover:scale-110 cursor-pointer" id="tv-toggle">

        {{-- frame foto --}}
        <img src="/assets/home/frame foto.png" alt="photo frame" class="absolute top-[34.9%] transform w-[100%]">
        <a href="/website-day1">
            <img src="/assets/home/dummy model.jpg" alt="ke website day 1"
                class="absolute top-[37.47%] transform translate-x-[48%] w-[20.55%]">
        </a>
        <a href="/middle-years">
            <img src="/assets/home/dummy model.jpg" alt="ke home page"
                class="absolute top-[37.47%] transform translate-x-[192.7%] w-[20.55%]">
        </a>
        <a href="/website-day3">
            <img src="/assets/home/dummy model.jpg" alt="ke website day 3"
                class="absolute top-[37.47%] transform translate-x-[338%] w-[20.55%]">
        </a>

        {{-- art work narrative --}}
        <img src="/assets/home/Art Work_Narrative.png" alt="art work narrative"
            class="absolute w-[60%] top-[44.3%] left-[50%] transform translate-x-[-50%]">

        {{-- <div class="absolute w-full z-[2] top-[62.5%]">
            <img src="/assets/home/Our Collection Pop Up_No like card (without black BG)1.png" alt="pop up no like"
                class="absolute w-[45%] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-[3] w-[27.5%] aspect-square">
                <img src="/assets/home/foto luar 1.png" alt="foto luar 1" class="w-full h-full object-contain">
            </div>
            <div class="absolute left-[61.825%] bottom-[15.5%] bg-black w-[3.5%] aspect-[1/1]"></div>
            <img src="/assets/home/Our Collection Pop Up_Left Slide Icon.png" alt="left slide"
                class="absolute left-[18%] top-1/2 transform -translate-y-1/2 w-[10%]">
            <img src="/assets/home/Our Collection Pop Up_Right Slide Icon.png" alt="right slide">
        </div> --}}

        <div class="absolute w-full aspect-[96/108] top-[47.3%]">
            {{-- narative --}}
            <img src="/assets/home/Interactive_Narrative 01.png" alt="narrative"
                class="absolute w-[37%] top-[1.5%] left-[50%] transform translate-x-[-52%]">

            {{-- amplop time capsule --}}
            <img src="/assets/home/amplop kebuka time capsule.png" alt="amplop time capsule"
                class="absolute top-[52.5%] right-[3.3%] w-[40%]">

            {{-- interactive koran kanan --}}
            <img src="/assets/home/interactive koran kanan.png" alt="interactive koran kanan"
                class="absolute w-[51%] top-[1.6%] right-[-17.2%]">

            {{-- photocard tengah --}}
            <img src="/assets/home/interactive photocard tengah.png" alt="photocard tengah"
                class="absolute w-[39%] left-[20.8%] top-[5%]">

            {{-- tumpukan foto tengah --}}
            <img src="/assets/home/interactive tumpukan foto tengah.png" alt="tumpukan foto tengah"
                class="absolute w-[40.5%] left-[22.4%] top-[11.2%]">

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

            {{-- interactive foto kanan --}}
            <img src="/assets/home/interactive foto kanan.png" alt="interactive foto kanan"
                class="absolute w-[14.8%] top-[25.3%] right-[8.7%]">

            {{-- kacamata --}}
            <img src="/assets/home/interactive kacamata kanan.png" alt="kaca mata"
                class="absolute w-[23%] right-[-3%] top-[19.3%]">

            {{-- dear future me book --}}
            <img src="/assets/home/Interactive_Dear Future Me Book.png" alt="dear future me book"
                class="absolute w-[48.5%] left-[28.7%] top-[12%] cursor-pointer"
                data-modal-target="pop-up-modal" data-modal-toggle="pop-up-modal">

            {{-- heart --}}
            <img src="/assets/home/interactive hati tengah.png" alt="interactive hati tengah"
                class="absolute w-[15.2%] left-[55.3%] top-[24.4%] cursor-pointer"
                data-modal-target="pop-up-modal" data-modal-toggle="pop-up-modal">



            {{-- black background --}}
            {{-- <div class="w-full h-full bg-black opacity-[0.5]"></div> --}}

            {{-- amplop pop up --}}
            {{-- <img src="/assets/home/amplop pop up.png" alt="amplop pop up"
                class="absolute w-[68%] left-[50%] transform translate-x-[-50%] top-[4%]"> --}}

            {{-- kertas pop up wa --}}
            {{-- <img src="/assets/home/kertas pop up wa.png" alt="kertas pop up wa"
                class="absolute w-[72.5%] top-[65.45%] left-[50%] transform translate-x-[-50%]"> --}}

            {{-- our collection narrative --}}
            <img src="/assets/home/Our Collection_Narrative.png" alt="our collection narrative"
                class="absolute w-[37%] top-[52%] left-[50%] transform translate-x-[-50%]">

            <div id="popUp" class="hidden">
                <img id="imagePlaceHolder" src="/assets/home/Our Collection Pop Up_No like card (with black BG).png"
                    alt="pop up no like" class="absolute w-full top-[49%] left-1/2 transform -translate-x-1/2 z-[2]">
                <div class="absolute top-[60%] left-1/2 transform -translate-x-1/2 z-[3] w-[27.5%] aspect-square">
                    <img id="imagePopUp" src="/assets/home/foto luar 10.png" alt="foto luar 1"
                        class="w-full h-full object-contain">
                </div>
                <div id="likeButton" class="absolute left-[61.9%] bottom-[11%] w-[3.5%] z-[4] aspect-[1/1]">
                </div>
                <img src="/assets/home/Our Collection Pop Up_Left Slide Icon.png" id="slideLeft" alt="left slide"
                    class="absolute left-[18%] top-[65%] transform w-[15%] z-[3]">
                <img src="/assets/home/Our Collection Pop Up_Right Slide Icon.png" id="slideRight" alt="right slide"
                    class="absolute right-[18%] top-[65%] transform w-[15%] z-[3]">
                <img src="/assets/home/Our Collection Pop Up_Narrative.png" alt="pop up narrative"
                    class="absolute left-1/2 transform -translate-x-1/2 bottom-[-3.5%] transform w-[100%] z-[3]">

            </div>

            {{-- foto sebelah amplop --}}
            <img src="/assets/home/foto luar 1.png" alt="foto luar 1"
                class="absolute w-[20.7%] top-[61.7%] left-[4.5%] triggerPopUp">
            <img src="/assets/home/foto luar 2.png" alt="foto luar 2"
                class="absolute w-[16%] top-[66%] left-[7.6%] triggerPopUp">
            <img src="/assets/home/foto luar 3.png" alt="foto luar 3"
                class="absolute w-[18.7%] top-[57.5%] left-[11%] triggerPopUp">
            <img src="/assets/home/foto luar 4.png" alt="foto luar 4"
                class="absolute w-[24.3%] top-[63.3%] left-[15%] triggerPopUp">
            <img src="/assets/home/foto luar 5.png" alt="foto luar 5"
                class="absolute w-[24.5%] top-[59%] left-[18.5%] triggerPopUp">
            <img src="/assets/home/foto luar 6.png" alt="foto luar 6"
                class="absolute w-[19%] top-[62.3%] left-[21.5%] triggerPopUp">
            <img src="/assets/home/foto luar 7.png" alt="foto luar 7"
                class="absolute w-[21%] top-[68.3%] left-[24.5%] triggerPopUp">
            <img src="/assets/home/foto luar 8.png" alt="foto luar 8"
                class="absolute w-[17%] top-[64%] left-[28%] triggerPopUp">
            <img src="/assets/home/foto luar 9.png" alt="foto luar 9"
                class="absolute w-[20%] top-[68.1%] left-[31.4%] triggerPopUp">
            <img src="/assets/home/foto luar 10.png" alt="foto luar 10"
                class="absolute w-[23%] top-[70.1%] left-[33%] triggerPopUp">
            <img src="/assets/home/foto luar 11.png" alt="foto luar 11"
                class="absolute w-[14.2%] top-[63%] left-[36%] triggerPopUp">

        </div>

        {{-- closing section card --}}
        <img src="/assets/home/Closing Section_Card.png" alt="amplop closing"
            class="absolute bottom-[20.8%] w-[65.5%] left-[50%] transform translate-x-[-48.2%]">

        {{-- bioskop bawah --}}
        <div class="bg-white w-[100%] aspect-[5/2] absolute bottom-[8%]"></div>
        <img src="/assets/home/bioskop bawah.png" alt="bioskop bawah" class="absolute w-[100%] bottom-[0%]">

        {{-- bts narrative --}}
        <img src="/assets/home/BTS_Narrative.png" alt="bts narrative"
            class="absolute w-[47%] bottom-[6.6%] right-[3.5%]">

        {{-- footer --}}
        <div class="absolute bottom-[1.5%] left-[50%] transform translate-x-[-50%]">
            <div class="text-white text-xl">Learn more about <a href="https://www.instagram.com/in_betweenstories"
                    target="_blank" class="font-bold no-underline text-white">@in_betweenstories</a> of
                Pantjarona on Instagram</div>
        </div>
    </div>

    <!-- Pop up form -->
    <div id="pop-up-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative">
                <img src="/assets/home/pop_up_form.png" alt="pop up form" class="transform md:scale-[1.5] z-[10]">

                <form action=""class="absolute top-0 z-[11]" id="pop_up_form">
                    <div class="flex flex-row">
                        <div>
                            <input type="text" name="name" id="input_name" class="block p-0 text-sm bg-transparent border-0 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 mt-[22.5%] ml-[32.5%] w-[90%]" placeholder="Your name">

                            <input type="email" name="email" id="input_email" class="block p-0 text-sm bg-transparent border-0 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 mt-[19%] ml-[32.5%] w-[90%]" placeholder="youremail@gmail.com">
    
                            <input type="phone" name="wa" id="input_wa" class="block p-0 text-sm bg-transparent border-0 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 mt-[19%] ml-[32.5%] w-[90%]" placeholder="0812345678">
                        </div>

                        <div>
                            <textarea name="message" id="input_message" rows="11" class="flex block p-0 text-sm text-gray-900 bg-transparent border-0 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 mt-[39%] ml-[47.5%] w-[175%] resize-none text-left p-0 leading-[1.2]" placeholder="How are you doing?"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="border ml-[130%] mt-[10%] px-5 opacity-0">
                        <p>Submit</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
