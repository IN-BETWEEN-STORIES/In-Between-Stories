<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <link rel="shortcut icon" href="/in_betweenstories.jpg" type="image/x-icon">
    <title>In Between Stories</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>

    {{-- jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {},
            corePlugins: {
                preflight: false,
            },
        };
    </script>

    <style>
        html {
            overflow-x: hidden;
        }

        body {
            font-family: 'system-ui', sans-serif;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        ::-webkit-scrollbar {
            width: 0;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
        }

        ::-webkit-scrollbar-track {
            width: 0;
            background-color: transparent;
        }
    </style>
</head>

<body>
    <main>
        <img src="/assets/website-day1/Website Day 1 (Tim VANRON)_FINAL_PANTJARONA.png" alt="website day 1" class="max-w-full block">
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.2/MotionPathPlugin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script> --}}

</body>

</html>