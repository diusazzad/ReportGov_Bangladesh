<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('welcome/css/svg.css') }}">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="line-container m-0">
        <svg viewBox="0 0 622 887" fill="none" preserveAspectRatio="xMidMax meet" class="h-full w-1/2 ">
            <path
                d="M0.5 1H259.5H490.64C509.22 1 527.474 5.88375 543.571 15.1617L567.431 28.9137C600.267 47.8384 620.5 82.8535 620.5 120.752V279.5V580V887"
                stroke="black" stroke-width="2" />
        </svg>
    </div>

    <section class="one">
        <h1 class="scrool" data-rate=".4" data-direction="vertical">oean stuff</h1>
        <p>big watermark</p>
    </section>

    <section class="one">
        <h1 class="scrool" data-rate=".2" data-direction="vertical">oean stuff</h1>
        <p>big watermark</p>
    </section>

</body>

</html>
<script src="{{ asset('welcome/js/svg.js') }}"></script>
