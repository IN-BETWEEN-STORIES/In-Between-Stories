<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        body {
            font-family: 'system-ui', sans-serif;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
            background-color: lightskyblue;
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

    <link rel="stylesheet" href="{{ asset('/style/phase1.css') }}">
</head>

<body>
    <main class="w-screen h-fit">
        @include('home.phase1')
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="{{ asset('/script/home.js') }}"></script>
</body>

</html>
