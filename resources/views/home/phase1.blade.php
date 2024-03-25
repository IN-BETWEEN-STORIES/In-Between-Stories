{{-- gae ngetes scroll --}}
{{-- <section class="h-[100vh]"></section> --}}

<section id="phase1" class="relative w-full">
    <img src="{{ asset('/assets/home/new_phase1/background.webp') }}" alt="Phase 1 BG" id="phase1_bg" loading="eager"
        class="w-screen z-[1]">

    <img src="{{ asset('/assets/home/new_phase1/kertas teks.webp') }}" alt="Kertas Teks" id="phase1_kertasText"
        loading="eager" class="absolute h-full top-0 left-[-37%] z-[50] cursor-pointer">

    {{-- Gedung 3 --}}
    <img src="{{ asset('/assets/home/new_phase1/gedung belakang atas.png') }}" alt="Gedung 3" id="phase1_gedung3"
        class="absolute w-[93%] top-0 right-[0%] z-[2]" loading="eager">

    {{-- Gedung 2 --}}
    <img src="{{ asset('/assets/home/new_phase1/gedung_2.png') }}" alt="Gedung 2" id="phase1_gedung2"
        class="absolute w-[72%] top-[12.55%] right-[-13.7%] z-[2]" loading="eager">

    {{-- cangkir & tangannya --}}
    <div>
        <div class="bg-[#ff0000] w-[6vw] h-[6vw] absolute top-[10%] left-[50%] z-[3] cursor-pointer"
            id="coffee_grp_placeholder"></div>
        {{-- Cangkir belakang --}}
        <img src="{{ asset('/assets/home/new_phase1/kopi_belakang.webp') }}" alt="Kopi" id="phase1_kopi_belakang"
            class="absolute w-[44%] top-[2.5%] left-[34.5%] z-[3] coffee_grp cursor-pointer" loading="eager">
        {{-- Coffee Pour --}}
        <img src="{{ asset('/assets/home/new_phase1/coffe_pour.png') }}" alt="Coffee Pour" id="phase1_pour"
            class="absolute w-[8.5%] top-[-16.75%] left-[49%] z-[4] coffee_grp cursor-pointer" loading="eager">
        {{-- Cangkir depan --}}
        <img src="{{ asset('/assets/home/new_phase1/kopi_depan.webp') }}" alt="Kopi" id="phase1_kopi_depan"
            class="absolute w-[44%] top-[2.5%] left-[34.5%] z-[5] coffee_grp cursor-pointer" loading="eager">
        {{-- Tangan megang kopi --}}
        <img src="{{ asset('/assets/home/new_phase1/tangan_kopi.webp') }}" alt="Kopi" id="phase1_tangan_kopi"
            class="absolute w-[67%] top-[8.25%] left-[31.5%] z-[5] coffee_grp cursor-pointer" loading="eager">
    </div>

    {{-- Gedung 1 --}}
    <img data-src="{{ asset('/assets/home/new_phase1/gedung1.webp') }}" alt="Gedung 1" id="phase1_gedung1"
        class="absolute w-[31%] top-[20.2%] left-[24.5%] z-[2] lazy-load" loading="lazy">

    {{-- Tanaman ijo sebelah kanan (balik e jam) --}}
    <img data-src="{{ asset('/assets/home/new_phase1/tanaman_depan_tangan_kopi.webp') }}" alt="Tanaman Depan"
        id="phase1_tanaman_depan" class="absolute w-[30%] top-[25.75%] right-0 z-[6] lazy-load" loading="lazy">

    {{-- gedung belakang maureen atas --}}
    <img data-src="{{ asset('/assets/home/new_phase1/gedung_belakang_maureen_atas.png') }}"
        alt="Gedung Belakang Maureen Atas" id="phase1_gedung_belakang_maureen_atas"
        class="absolute w-[86%] top-[29.5%] right-[2.35%] z-[4] lazy-load" loading="lazy">

    {{-- Koper & Lemari --}}
    <img data-src="{{ asset('/assets/home/new_phase1/koper_lemari.webp') }}" alt="Koper & Lemari"
        id="phase1_koper_lemari" class="absolute w-[95%] top-[41.5%] right-0 z-[6] lazy-load" loading="lazy">

    {{-- kertas2 jatuh --}}
    <div>
        {{-- Kertas jatuh 2 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_jatuh_2.png') }}" alt="Kertas Jatuh 2"
            id="phase1_kertas_jatuh_2" class="absolute w-[26%] top-[29.25%] left-[13%] z-[4] lazy-load" loading="lazy">
        {{-- Kertas jatuh 3 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_jatuh_3.png') }}" alt="Kertas Jatuh 3"
            id="phase1_kertas_jatuh_3" class="absolute w-[24%] top-[36.68%] left-[3%] z-[4] lazy-load" loading="lazy">
        {{-- Kertas jatuh 4 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_jatuh_4.png') }}" alt="Kertas Jatuh 4"
            id="phase1_kertas_jatuh_4" class="absolute w-[16%] top-[45.9%] left-[11.5%] z-[12] lazy-load"
            loading="lazy">
        {{-- Kertas jatuh 7 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_jatuh_7.png') }}" alt="Kertas Jatuh 7"
            id="phase1_kertas_jatuh_7" class="absolute w-[21.3%] top-[47.8%] left-[0%] z-[12] lazy-load" loading="lazy">
        {{-- Kertas jatuh 5 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_jatuh_5.png') }}" alt="Kertas Jatuh 5"
            id="phase1_kertas_jatuh_5" class="absolute w-[17%] top-[57.5%] left-[14%] z-[12] lazy-load" loading="lazy">
        {{-- Kertas jatuh 6 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_jatuh_6.png') }}" alt="Kertas Jatuh 6"
            id="phase1_kertas_jatuh_6" class="absolute w-[21.8%] top-[61.85%] left-[.86%] z-[12] lazy-load"
            loading="lazy">
    </div>

    {{-- Foto kirine jam / maureen --}}
    <img data-src="{{ asset('/assets/home/new_phase1/maureen.png') }}" alt="Foto Kiri" id="phase1_foto_kiri"
        class="absolute w-[51.5%] top-[25.75%] left-[20.5%] z-[4] cursor-pointer lazy-load" loading="lazy">
    <img data-src="{{ asset('/assets/home/new_phase1/maureen.png') }}" alt="Foto Kiri" id="phase1_foto_kiri_hidden"
        class="absolute w-[51.5%] top-[25.75%] left-[20.5%] z-[49] opacity-0 cursor-pointer lazy-load" loading="lazy">

    {{-- block dummy buat test maureen --}}
    <div class="absolute w-[51.5%] w-[6vw] h-[6vw] top-[35%] left-[42%] z-[3] cursor-pointer bg-red-600"
        id="dummymaureen"></div>

    {{-- anting2 --}}
    <div>
        {{-- anting kiri --}}
        <img data-src="{{ asset('/assets/home/new_phase1/anting1.png') }}" alt="Anting Kiri" id="anting_kiri"
            class="absolute w-[9.6%] top-[24.15%] left-[55.15%] z-[4] lazy-load" loading="lazy">
        {{-- anting kanan --}}
        <img data-src="{{ asset('/assets/home/new_phase1/anting2.png') }}" alt="Anting Kanan" id="anting_kanan"
            class="absolute w-[9.35%] top-[27.35%] left-[62.03%] z-[4] lazy-load" loading="lazy">
    </div>

    {{-- isi laci atas --}}
    <div>
        {{-- Laci 1 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/laci.webp') }}" alt="Laci 1" id="phase1_laci_1"
            class="absolute w-[79.5%] top-[44.46%] right-[-9.5%] z-[8] lazy-load" loading="lazy">

        {{-- block dummy buat test tgn pegang jam --}}
        <div class="absolute top-[36%] w-[6vw] h-[6vw] left-[83%] z-[7] cursor-pointer" id="dummy1"
            style="background-color: red;"></div>

        {{-- Jam --}}
        <img data-src="{{ asset('/assets/home/new_phase1/jam.webp') }}" alt="Jam" id="phase1_jam"
            class="absolute w-[31.75%] top-[21.75%] left-[68.5%] z-[7] cursor-pointer phase1_tgn_jam lazy-load"
            loading="lazy">

        {{-- Jarum jam --}}
        <img data-src="{{ asset('/assets/home/new_phase1/jarum_jam.png') }}" alt="Jarum Jam 1" id="phase1_jarum_jam"
            class="absolute w-[8.5%] top-[30.6%] left-[82.5%] z-[7] cursor-pointer phase1_tgn_jam jarum_jam lazy-load"
            loading="lazy">

        {{-- Jarum jam 2 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/jarum_jam_2.png') }}" alt="Jarum Jam 2"
            id="phase1_jarum_jam_2"
            class="absolute w-[12.5%] top-[29.75%] left-[80.5%] z-[7] cursor-pointer phase1_tgn_jam jarum_jam lazy-load"
            loading="lazy">

        {{-- Jarum jam 3 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/jarum_jam_3.png') }}" alt="Jarum Jam 3"
            id="phase1_jarum_jam_3"
            class="absolute w-[8.5%] top-[29.75%] left-[80.6%] z-[7] cursor-pointer phase1_tgn_jam jarum_jam lazy-load"
            loading="lazy">

        {{-- Jarum jam 4 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/jarum_jam_4.png') }}" alt="Jarum Jam 4"
            id="phase1_jarum_jam_4"
            class="absolute w-[10%] top-[32.1%] left-[77.5%] z-[7] cursor-pointer phase1_tgn_jam jarum_jam lazy-load"
            loading="lazy">

        {{-- Kertas laci 1 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_laci_1.png') }}" alt="Kertas Laci 1"
            id="phase1_kertas_laci_1" class="absolute w-[25%] top-[38.5%] left-[55%] z-[6] lazy-load" loading="lazy">
    </div>

    {{-- isi laci tengah --}}
    <div>
        {{-- Laci 2 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/laci.webp') }}" alt="Laci 2" id="phase1_laci_2"
            class="absolute w-[79.5%] top-[55.15%] right-[-9.5%] z-[9] lazy-load" loading="lazy">
        {{-- Kertas laci 2 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_laci_2.png') }}" alt="Laci"
            id="phase1_kertas_laci_2" class="absolute w-[32%] top-[48%] left-[31%] z-[8] lazy-load" loading="lazy">
    </div>

    {{-- isi laci bawah --}}
    <div>
        {{-- Laci 3 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/laci.webp') }}" alt="Laci 3" id="phase1_laci_3"
            class="absolute w-[79.5%] top-[65.84%] right-[-9.5%] z-[11] lazy-load" loading="lazy">
        {{-- Kertas laci 3 / kertas --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_laci_3.png') }}" alt="Kertas Laci 3"
            id="phase1_kertas_laci_3"
            class="absolute w-[33%] top-[59.02%] left-[66%] z-[9] lazy-load cursor-pointer kertas_bawah"
            loading="lazy">
        {{-- Kertas laci 4 / bunga --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_laci_4.png') }}" alt="Bunga"
            id="phase1_kertas_laci_4"
            class="absolute w-[24%] top-[59%] left-[75.1%] z-[10] lazy-load cursor-pointer kertas_bawah"
            loading="lazy">
    </div>

    {{-- Background pasir --}}
    <img data-src="{{ asset('/assets/home/new_phase1/bg_pasir_bawah.webp') }}" alt="Background Pasir"
        id="phase1_bg_pasir" class="absolute w-full bottom-0 z-[5] lazy-load" loading="lazy">

    {{-- Gedung + koper bawah --}}
    <div>
        {{-- Gedung bawah --}}
        <img data-src="{{ asset('/assets/home/new_phase1/gedung_bawah.webp') }}" alt="Gedung Bawah"
            id="phase1_gedung_bawah" class="absolute w-[68%] bottom-[14.75%] left-0 z-[12] lazy-load" loading="lazy">

        {{-- Koper bawah --}}
        <img data-src="{{ asset('/assets/home/new_phase1/koper_bawah.webp') }}" alt="Koper Bawah"
            id="phase1_koper_bawah" class="absolute w-[63.5%] bottom-[9.5%] right-0 z-[11] lazy-load" loading="lazy">
    </div>

    {{-- Jalan bawah + orang" --}}
    <div>
        {{-- Jalan bawah --}}
        <img data-src="{{ asset('/assets/home/new_phase1/jalan_bawah.webp') }}" alt="Jalan Bawah"
            id="phase1_jalan_bawah" class="absolute w-[61%] bottom-0 z-[12] lazy-load" loading="lazy">

        {{-- Mobil ijo tua --}}
        <img data-src="{{ asset('/assets/home/new_phase1/mobil_ijo.png') }}" alt="Mobil 1" id="phase1_mobil1"
            class="absolute w-[14.5%] bottom-[9.25%] left-[24.5%] z-[12] lazy-load" loading="lazy">

        {{-- Mobil merah --}}
        <img data-src="{{ asset('/assets/home/new_phase1/mobil_merah.png') }}" alt="Mobil 2" id="phase1_mobil2"
            class="absolute w-[26%] bottom-[4.25%] left-[20.25%] z-[12] lazy-load" loading="lazy">

        {{-- Mobil ijo muda --}}
        <img data-src="{{ asset('/assets/home/new_phase1/mobil_ijo_muda.png') }}" alt="Mobil 3" id="phase1_mobil3"
            class="absolute w-[16.6%] bottom-[5.75%] left-0 z-[12] lazy-load" loading="lazy">

        {{-- Orang kiri --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kim_bawah.png') }}" alt="Orang Bawah 1"
            id="phase1_orang_bawah1" class="absolute w-[9%] bottom-[8%] left-[15.25%] z-[12] lazy-load"
            loading="lazy">

        {{-- Orang tengah --}}
        <img data-src="{{ asset('/assets/home/new_phase1/karyn_bawah.png') }}" alt="Orang Bawah 2"
            id="phase1_orang_bawah2" class="absolute w-[13%] bottom-[0.85%] left-[37.5%] z-[12] lazy-load"
            loading="lazy">
    </div>

    {{-- Bawah kanan --}}
    <div>
        {{-- block dummy buat test pintu --}}
        <div class="absolute w-[6vw] h-[6vw] bottom-[10%] left-[80%] z-[15] cursor-pointer bg-red-600"
            id="dummy_pintu"></div>

        {{-- Box bawah --}}
        <img data-src="{{ asset('/assets/home/new_phase1/box_tas.png') }}" alt="Box Bawah" id="phase1_box_bawah"
            class="absolute w-[22.5%] bottom-[3.4%] left-[51.8%] z-[14] lazy-load" loading="lazy">

        {{-- Orang Kanan --}}
        <img data-src="{{ asset('/assets/home/new_phase1/maureen_bawah.png') }}" alt="Orang Bawah 3"
            id="phase1_orang_bawah3"
            class="absolute w-[14.35%] bottom-[1.9%] right-[16.75%] z-[20] lazy-load cursor-pointer" loading="lazy">

        {{-- Pintu --}}
        <img data-src="{{ asset('/assets/home/new_phase1/pintu.png') }}" alt="Pintu" id="phase1_pintu"
            class="absolute w-[26.75%] bottom-[4.25%] right-[7.35%] z-[17] lazy-load cursor-pointer" loading="lazy">

        {{-- Kalung biru --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kalung_biru.png') }}" alt="Kalung Biru"
            id="phase1_kalung_biru"
            class="absolute w-[11%] bottom-[20.1%] right-[15.5%] z-[18] lazy-load cursor-pointer" loading="lazy">

        {{-- Kalung pink --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kalung_pink.png') }}" alt="Kalung Pink"
            id="phase1_kalung_pink"
            class="absolute w-[12.25%] bottom-[15.75%] right-[9.25%] z-[18] lazy-load cursor-pointer" loading="lazy">

        {{-- Tangan --}}
        <img data-src="{{ asset('/assets/home/new_phase1/tangan_bawah.png') }}" alt="Tangan Bawah"
            id="phase1_tangan_bawah"
            class="absolute w-[17.75%] bottom-[4.35%] right-0 z-[19] lazy-load cursor-pointer" loading="lazy">

        {{-- Bunga --}}
        <img data-src="{{ asset('/assets/home/new_phase1/buket_bunga.png') }}" alt="Bunga" id="phase1_bunga"
            class="absolute w-[13%] bottom-[3.2%] right-0 z-[20] lazy-load cursor-pointer" loading="lazy">

        {{-- Tas --}}
        <div>
            {{-- Orange --}}
            <img data-src="{{ asset('/assets/home/new_phase1/tas_oren.png') }}" alt="Tas Orange"
                id="phase1_tas_orange" class="absolute w-[11.5%] bottom-[17%] right-[27%] z-[14] lazy-load"
                loading="lazy">
            <img data-src="{{ asset('/assets/home/new_phase1/tas_oren.png') }}" alt="Tas Orange"
                id="phase1_tas_orange_hidden"
                class="absolute w-[11.5%] bottom-[17%] right-[27%] z-[22] lazy-load cursor-pointer opacity-0"
                loading="lazy">

            {{-- Merah --}}
            <img data-src="{{ asset('/assets/home/new_phase1/tas_merah.png') }}" alt="Tas Merah"
                id="phase1_tas_merah" class="absolute w-[15%] bottom-[12.75%] right-[32%] z-[15] lazy-load"
                loading="lazy">

            {{-- Ijo --}}
            <img data-src="{{ asset('/assets/home/new_phase1/tas_ijo.png') }}" alt="Tas Ijo" id="phase1_tas_ijo"
                class="absolute w-[16%] bottom-[12%] right-[24.75%] z-[16] lazy-load" loading="lazy">
            <img data-src="{{ asset('/assets/home/new_phase1/tas_ijo.png') }}" alt="Tas Ijo"
                id="phase1_tas_ijo_hidden"
                class="absolute w-[16%] bottom-[12%] right-[24.75%] z-[21] lazy-load cursor-pointer opacity-0"
                loading="lazy">
        </div>

        {{-- Tumpukan barang --}}
        <img data-src="{{ asset('/assets/home/new_phase1/tumpukan_barang.png') }}" alt="Tumpukan Barang"
            id="phase1_tumpukan_barang" class="absolute w-[27%] bottom-[11.75%] right-[17.5%] z-[13] lazy-load"
            loading="lazy">

        {{-- Kertas & tumbuhan blkg pintu --}}
        <img data-src="{{ asset('/assets/home/new_phase1/kertas_tumbuhan_pintu.png') }}" alt="Kertas dan Tumbuhan"
            id="phase1_kertas_tumbuhan" class="absolute w-[18%] bottom-[5.4%] right-0 z-[13] lazy-load"
            loading="lazy">
    </div>

    {{-- Lebah --}}
    <div>
        {{-- Lebah telpon --}}
        <img data-src="{{ asset('/assets/home/new_phase1/lebah_telpon.png') }}" alt="Lebah Telpon"
            id="phase1_lebah_telpon" class="absolute w-[11%] bottom-[19.75%] right-[1.75%] z-[25] lazy-load"
            loading="lazy">
        {{-- lebah 4 Bawah --}}

        <div class="lebah4-container absolute w-[25%] bottom-[23%] right-[38%] z-[25]">
            <img src="{{ asset('/assets/home/new_phase1/lebah_4.png') }}" alt="Lebah 4" id="phase1_lebah_4"
                class="absolute w-[40%]" loading="eager">
            <svg viewBox="0 0 665 446" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="pathLebah4"
                    d="M82 108.5C-44.8301 256.903 -27.4442 330.964 174 445.5H269.5L333 365C419.712 422.781 474.478 424.738 581.5 382C699.369 303.627 693.351 251.339 551 143C431.214 -33.7885 330.03 -45.2092 82 108.5Z"
                    stroke="none" />
            </svg>
        </div>

        {{-- lebah 3 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/lebah_3.png') }}" alt="Lebah 3" id="phase1_lebah_3"
            class="absolute w-[11%] top-[21.25%] left-[11%] z-[25] lazy-load" loading="lazy">
        {{-- lebah 1 --}}
        <div class="lebah1-container absolute w-[11%] top-[10%] left-[16.75%] z-[25]">
            <img src="{{ asset('/assets/home/new_phase1/lebah_1.png') }}" alt="Lebah 1" id="phase1_lebah_1"
                class="absolute w-[100%]" loading="eager">
            <svg viewBox="0 0 253 668" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="pathLebah1"
                    d="M177.5 665.5C146.421 518.068 153.276 452.235 204 361.5C274.84 181.909 269.003 107.705 177.5 22.5C39.637 -25.9835 2.22524 1.17708 16.5 160C-23.3943 376.039 10.9961 486.869 177.5 665.5Z"
                    stroke="none" />
            </svg>

        </div>

        {{-- lebah2Atas --}}
        <div class="lebah2Atas-container absolute w-[19%] top-[12%] right-[5%] z-[25]">
            <img src="{{ asset('/assets/home/new_phase1/lebah_2.png') }}" alt="Lebah 2 atas"
                id="phase1_lebah_2_atas" class="absolute w-[37%]" loading="eager">
            <svg viewBox="0 0 461 599" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="pathLebah2Atas"
                    d="M 128.999 582.499 C 257.377 605.795 390.246 609.747 433.712 579.203 C 504.197 542.786 432.537 406.514 454.999 338 C 479.387 105.196 411.998 0.499 331.999 0.4995 C 252 0.5 187.013 18.844 115.499 91.9995 C -19.745 209.155 -3.298 280.815 95.381 425.31 C 134.148 484.048 29.595 554.533 128.999 582.499 Z"
                    stroke="none" />
            </svg>

        </div>

        {{-- lebah 2 --}}
        <img data-src="{{ asset('/assets/home/new_phase1/lebah_2.png') }}" alt="Lebah 2" id="phase1_lebah_2"
            class="absolute w-[11%] bottom-[1.5%] right-[-2.95%] z-[25] lazy-load" loading="lazy">
        {{-- lebah 4 atas --}}
        <div class="lebah4Atas-container absolute w-[8%] top-[4.5%] right-[23.4%] z-[25]">
            <img src="{{ asset('/assets/home/new_phase1/lebah_4.png') }}" alt="Lebah 4 atas"
                id="phase1_lebah_4_atas" class="absolute w-[100%]" loading="eager">
            <svg viewBox="0 0 146 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="pathLebah4Atas"
                    d="M145 1C43.4906 20.7739 -104.744 84.2574 114.394 180C49.306 126.057 64.6793 108.916 145 91.7071C68.8778 73.0773 68.7868 53.2371 145 1Z"
                    stroke="none" />
            </svg>
        </div>


    </div>


</section>
