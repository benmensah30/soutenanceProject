@extends('layout.base')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>
    @if (Auth::user()->isadmin === 1)
    @include('adminNavbar')
    @else
    <nav class="container  border-bottom border-black">
        <div class="row gap-2" style="height: 50px; margin-top: 20px;">
            <div class="col">
                <div class="image6"></div>
            </div>
            <div class="col"><a class="nav-link active" href="">connessance c++</a></div>
            <div class="col"><a class="nav-link active" href="{{ route('dashboard') }}">Aceuil</a></div>
            <div class="col"><a class="nav-link active" href="{{ route('profile.edit') }}">profil</a></div>
            <div class="col"><a class="nav-link active" href="{{ route('epreuves.index') }}">Epreuves</a></div>
            <div class="col"><a class="nav-link active" href="{{ route('logout') }}">Deconnexion</a></div>
        </div>
    </nav>
    @endif
    <div class="container-center">
        <div class="container1">
            <div class="container3">
                <h1>
                    la connai<span>ssance c++
                        qui Booste votre</span> visibilité
                    en plus
                </h1>
                <p>
                    Laissez notre agence SEO vous guider vers le succès en ligne en concevant une stratégie de référencement sur-mesure, axée sur les résultatsLaissez notre agence SEO vous guider vers le succès en ligne en concevant une stratégie de référencement sur-mesure, axée sur les résultatsvvLaissez notre agence SEO vous guider vers le succès en ligne en concevant une stratégie de référencement sur-mesure, axée sur les résultatsLaissez notre agence SEO vous guider vers le succès en ligne en concevant une stratégie de référencement sur-mesure, axée sur les résultatsLaissez notre agence SEO vous guider vers le succès en ligne en concevant une stratégie de référencement sur-mesure, axée sur les résultatsLaissez notre
                </p>
                <div class="container2">
                    <div class="img-content">
                        <div class="image1">
                        </div>
                        <div class="image2">
                        </div>
                    </div>
                    <button class="btnn">
                        plus de Detail
                    </button>

                </div>
            </div>
            <div class="conte">
                <div class="image4">
                </div>
                <div class="image3">
                </div>
            </div>
        </div>
    </div>
    <div class="container-center">
        <div class="containe">
            <div class="bordue">
                <h2>
                    Quelques details sur le fonctionnements
                    de la plateforme
                </h2>
            </div>
            <div class="conte2">

                <div class="image5">
                </div>

                <div>
                    <h3>
                        Warketing Studio, une agence digitale en France et au Togo, accompagne les entreprises de toutes tailles pour améliorer leur visibilité sur le web. Forte d'une expérience de plus de 5 ans, notre agence SEO met en œuvre des stratégies digitales personnalisées qui répondent à vos besoins.  Notre goût du challenge et de
                        <br /><br /><br />
                        l'excellence, nous ont permis d'accroître le chiffre d'affaires de plusieurs entreprises.
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-center">
        <div class="barniere">
            <div class="image7">
                <div class="color0">
                    <h2>Les tâches disponibles</h2>
                </div>
                <a href="{{ route('epreuves.index') }}">
                    <div class="color1 txt-center">
                        Les Epréuves
                    </div>
                </a>

                <div class="color2 txt-center">
                    <a href="">Quelques Qcm</>
                </div>
                <div class="color3 txt-center">
                    <a href="">Abonnements</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-center">
        <div class="div-other">
            <div class="containe01">
                <div class="bordue">
                    <h2>
                        Quelques documents en cas du besoins
                    </h2>
                </div>
                <div class="conte3">

                    <div class="image8">
                    </div>

                    <div class="image9">
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="img-content">
                    <div class="image1">
                    </div>
                    <div class="image2">
                    </div>
                </div>
                <button class="btnn">
                    plus de Detail
                </button>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-grid">
            <div class="barre">
                <div class="image01">
                </div>
                <br />
                <p>
                    Warketing Studio est une agence digitale spécialisée en SEO. Elle accompagne les entreprises de toutes tailles pour améliorer leur visibilité sur le web.
                </p>
                <br />
                <i class="fa-solid fa-phone" style="color: #030303;"></i>
                <span>+228 93588975</span>
                <br />
                <i class="fa-solid fa-phone" style="color: #030303;"></i>
                <span>+228 98434164</span>
            </div>
            <div class="txt-left pad-grid">
                <h5>À propos de nous</h5>
                <a href="">Plan du site</a><br />
                <a href="">Mentions legal</a><br />
                <a href="">Confidentialité</a><br />
                <h5 class="bar">Infos utiles</h5>

                <div class="foot">
                    <div>
                        <i class="fa-brands fa-facebook" style="color: #000000;"></i>
                    </div>
                    <div>
                        <i class="fa-brands fa-square-whatsapp" style="color: #000000;"></i>
                    </div>
                    <div>
                        <i class="fa-brands fa-linkedin" style="color: #000000;"></i>
                    </div>
                </div>
            </div>

            <div class="txt-left pad-grid">
                <h5>Infos utiles</h5>
                <a href="">Plan du site</a><br />
                <a href="">Mentions legal</a><br />
                <a href="">Confidentialité</a><br />
                <a href="">politique</a><br />
            </div>
            <div class="txt-left pad-grid">
                <h5>Nos expertises</h5>
                <a href="">Plan du site</a><br />
                <a href="">Mentions legal</a><br />
                <a href="">Confidentialité</a><br />
                <a href="">politique</a><br />
            </div>
        </div>
        <h6>@ 2024 copy write connaissance c++</h6>
    </footer>
</body>

</html>