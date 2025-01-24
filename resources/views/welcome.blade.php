<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Davide Cinardo</title>

    @vite('resources/js/app.js');
</head>

<body>

    <nav>
        <div class="container-fluid ">
            <div class="row">
                <div class="col">
                    <a class="tastoLogo" href="#">
                        <img src="{{ asset('Immagini/LogoNav.png') }}" alt="" width="200" height="150"
                            class="img-left">
                        <strong>Davide Cinardo</strong>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="col">
            <img src="{{ asset('Immagini/emoticonHand.png') }}" alt="" width="100" height="100">
            <p id="titolone">Ciao a tutti, sono <strong>Davide</strong></p>
        </div>

        <h1>Sono un Full stack developer da Milano, Italia!</h1>


    </div>










</body>




</html>
