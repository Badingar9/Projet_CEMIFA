@extends('welcome')

@section('title','Gestion financière')

@section('base')

<body>
    <section class="section1">
        <img class="img-cab" src="Image_CEMIFA/CEMIFA_cadre1.jpg" alt="">
        <p><h1 class="posi-texte">@yield('title')</h1></p>
        <div class="ligne">
          <div class="article">
            <h2>LA gestion financière</h2>
            <p>GESTION FINANCIERE <br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis hic aut sunt dolorum suscipit nisi illo itaque, rerum nostrum eius beatae facere. Ipsam eum eos vero ex beatae at ullam.</p>
        </div>
        <img class="photo" src="Image_CEMIFA/CEMIFA_cadre3.jpg" alt="">
    </div>
    <div class="ligne">

        <img class="photo" src="Image_CEMIFA/CEMIFA_img3.jpg" alt="">

    <div class="article">
        <h2>Notre équipe</h2>
        <p>Composée d’un expert-comptable, d’un diplômé de l’Ecole Supérieure de Commerce d’Abidjan (ESCA)
            et de collaborateurs expérimentés, notre équipe sera à même de répondre à tous les besoins de la
            vie de votre entreprise.</p>
        <p>Sous la direction de sa responsable, notre cabinet met à votre disposition des collaborateurs
            expérimentés en comptabilité, en audit comptable, en organisation, en droit fiscal et gestion de
            la paie. Formée en permanence aux évolutions de ces différents domaines d’activités, notre
            équipe dispose de compétences étendues pour vous accompagner et vous conseiller dans la gestion
            de votre comptabilité, votre personnel, et au respect des réglementations fiscales et sociales.
        </p>

    </div>
</div>
</section>

</body>

@endsection
