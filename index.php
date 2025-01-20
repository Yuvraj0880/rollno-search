<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            width: 100vw;
            height: 100vh;
        }

        .input {
            border: none;
            outline: none;
            border-radius: 100px;
            padding: 1em;
            background-color: #e1e2e3;
            box-shadow: inset 2px 5px 10px rgba(0, 0, 0, 0.3);
            transition: 300ms ease-in-out;
        }

        .input:focus {
            background-color: #ffffff;
            transform: scale(1.05);
            box-shadow: 13px 13px 100px #969696, -13px -13px 100px #ffffff;
        }

        /* From Uiverse.io by cssbuttons-io */
        .c-button {
            color: #000;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            padding: 0.9em 1.6em;
            cursor: pointer;
            display: inline-block;
            vertical-align: middle;
            position: relative;
            z-index: 1;
        }

        .c-button--gooey {
            color: #06c8d9;
            text-transform: uppercase;
            letter-spacing: 2px;
            border: 4px solid #06c8d9;
            border-radius: 0;
            position: relative;
            transition: all 700ms ease;
        }

        .c-button--gooey .c-button__blobs {
            height: 100%;
            filter: url(#goo);
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
            bottom: -3px;
            right: -1px;
            z-index: -1;
        }

        .c-button--gooey .c-button__blobs div {
            background-color: #06c8d9;
            width: 34%;
            height: 100%;
            border-radius: 100%;
            position: absolute;
            transform: scale(1.4) translateY(125%) translateZ(0);
            transition: all 700ms ease;
        }

        .c-button--gooey .c-button__blobs div:nth-child(1) {
            left: -5%;
        }

        .c-button--gooey .c-button__blobs div:nth-child(2) {
            left: 30%;
            transition-delay: 60ms;
        }

        .c-button--gooey .c-button__blobs div:nth-child(3) {
            left: 66%;
            transition-delay: 25ms;
        }

        .c-button--gooey:hover {
            color: #fff;
        }

        .c-button--gooey:hover .c-button__blobs div {
            transform: scale(1.4) translateY(0) translateZ(0);
        }

        .container1 {
            width: 100%;
            /* height: 100%; */
            --s: 200px;
            /* control the size */
            --c1: #1d1d1d;
            --c2: #4e4f51;
            --c3: #3c3c3c;

            background: repeating-conic-gradient(from 30deg,
                    #0000 0 120deg,
                    var(--c3) 0 180deg) calc(0.5 * var(--s)) calc(0.5 * var(--s) * 0.577),
                repeating-conic-gradient(from 30deg,
                    var(--c1) 0 60deg,
                    var(--c2) 0 120deg,
                    var(--c3) 0 180deg);
            background-size: var(--s) calc(var(--s) * 0.577);
        }
    </style>
</head>

<body>
    <?php
    $imglocation = "photo/1.png";
    if (isset($_POST['submit'])) {
        $imgname = $_POST['pic'];
        // echo $imgname;
        $imglocation = $imgname . '.jpg';
        // echo $imglocation;
    }
    ?>
    <div class="container1">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-white mt-5 mb-5">RCCI ROLLNO. SEARCH</h1>
                <h3 class='text-center text-white '>Type your name here</h3>
                <h3 class='text-center text-white '>👇👇👇👇👇👇👇👇👇👇</h3>
                <form action="#" method="POST">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center my-5">
                                <input placeholder="Write your name here." class="input" name="pic" autocomplete="off"
                                    type="text" />
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <!-- <button type="submit" name='img'>Submit</button> -->
                                <button class="c-button c-button--gooey" name="submit" type="submit">Search Rollno.
                                    <div class="c-button__blobs">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </button>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    style="display: block; height: 0; width: 0;">
                                    <defs>
                                        <filter id="goo">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur">
                                            </feGaussianBlur>
                                            <feColorMatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo">
                                            </feColorMatrix>
                                            <feBlend in="SourceGraphic" in2="goo"></feBlend>
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center text-white mt-5 mb-3">YOUR ROLLNO.</h1>
                            <h3 class='text-center text-white '>👇👇👇👇👇👇👇👇👇👇</h3>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <img src="<?php echo $imglocation;
                            ?>" width="300px" height="550px" />
                        </div>
                        <div class="col12 d-flex justify-content-center">
                            <a href="<?php echo $imglocation; ?>" download="<?php echo $imglocation; ?>" class="mt-3 mb-4">
                                <button class="c-button c-button--gooey" name="submit" type="submit">Download rollno.
                                    <div class="c-button__blobs">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </button>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    style="display: block; height: 0; width: 0;">
                                    <defs>
                                        <filter id="goo">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur">
                                            </feGaussianBlur>
                                            <feColorMatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo">
                                            </feColorMatrix>
                                            <feBlend in="SourceGraphic" in2="goo"></feBlend>
                                        </filter>
                                    </defs>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
