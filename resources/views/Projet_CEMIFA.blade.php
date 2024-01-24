@extends('welcome')

@section('title', 'Bienvenu sur CEMIFA Consulting')

@section('base')

<body>


    <!-- Les grandes cartes centrales avec diaporama -->
    <div class="carte text-bg-dark" id="slideshow-container">
      <img src="Image_CEMIFA/CEMIFA_img1.jpg" class="card-image" alt="...">
      <div class="card-image-overlay">
        <h6 class="carte-title">Une Equipe d'Expert pour vous accompagner dans tout le processus de votre projet </h6>
        <p class="carte-text">CEMIFA Consulting est ce dont il vous faut.</p>
      </div>
      <a class="precedent" onclick="showSlide()">&#10094;</a>
      <a class="suivant" onclick="showSlide()">&#10095;</a>
    </div>

    <!-- Le texte du milieu -->
    <div class="texte-milieu">
      <p>Des Solutions durables proposées par<br> nos experts pour répondre à vos bésoins </p>
    </div>


    <!-- Les cadres du milieu -->
    <div class="cadre-container">
    <div class="cadre"><img src="Image_CEMIFA/CEMIFA_img1.jpg" class="image-cadre"></div>
    <div class="cadre"><img src="Image_CEMIFA/CEMIFA_img2.jpg" class="image-cadre"></div>
    <div class="cadre"><img src="Image_CEMIFA/CEMIFA_cadre2.jpg" class="image-cadre"></div>
    <div class="cadre"><img src="Image_CEMIFA/CEMIFA_img4.jpg" class="image-cadre"></div>
    <div class="cadre"><img src="Image_CEMIFA/CEMIFA_cadre3.jpg" class="image-cadre"></div>
    <div class="cadre"><img src="Image_CEMIFA/CEMIFA_img6.jpg" class="image-cadre"></div>
    <div class="cadre"><img src="Image_CEMIFA/CEMIFA_img7.jpg" class="image-cadre"></div>
    <div class="cadre"><img src="Image_CEMIFA/CEMIFA_img8.jpg" class="image-cadre"></div>
    <div class="cadre"><img src="Image_CEMIFA/CEMIFA_img9.jpg" class="image-cadre"></div>
    <div class="cadre"><img src="Image_CEMIFA/CEMIFA_cadre1.jpg" class="image-cadre"></div>
  </div>
  <div>
      <a id="prevBtn" onclick="prev()">&#10094;</a>
      <a id="nextBtn" onclick="next()">&#10095;</a>
  </div>

  <div class="evenement">
    <ion-icon name="calendar" class="Iconedate"></ion-icon>
    <p class="evenement-text">Evènements à venir</p>
  </div>


  <div class="cadre-evenement">
    <div class="cadre-carre"><p class="cadreEvenement-text">02 Février 2024<br>Formation en Comptabilité</p></div>
    <img src="Image_CEMIFA/CEMIFA_evenement.jpg" class="image-evenement">
    <p class="evenement-text1">Consultez nos évènements<br>pour rester à jour<br><a href="#" class="plus">Voir plus</a></p>
  </div>


     <!-- Les cates du bas -->
      <div class="center">
      <div class="card main-card card1" style="width: 18rem;">
        <img src="Image_CEMIFA/CEMIFA1.jpg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Etudes et Conseils</h5>
          <p class="card-text">Nous accompagnons les entreprises dans leurs réalisations de projets</p>
          <a href="#" class="btn btn-primary">En Savoir Plus</a>
        </div>
      </div>

      <div class="card main-card card2" style="width: 18rem;">
        <img src="Image_CEMIFA/CEMIFA2.jpg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Formations</h5>
          <p class="card-text">Nous accompagnons les entreprises dans leurs réalisations de projets</p>
          <a href="#" class="btn btn-primary">En Savoir Plus</a>
        </div>
      </div>

      <div class="card main-card card3" style="width: 18rem;">
        <img src="Image_CEMIFA/CEMIFA3.jpg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Expertise Comptable</h5>
          <p class="card-text">Nous accompagnons les entreprises dans leurs réalisations de projets</p>
          <a href="#" class="btn btn-primary">En Savoir Plus</a>
        </div>
      </div>

      <div class="card main-card card4" style="width: 18rem;">
        <img src="Image_CEMIFA/CEMIFA4.jpg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Audit de conformité</h5>
          <p class="card-text">Nous accompagnons les entreprises dans leurs réalisations de projets</p>
          <a href="#" class="btn btn-primary">En Savoir Plus</a>
        </div>
      </div>

      <div class="card main-card card5" style="width: 18rem;">
        <img src="Image_CEMIFA/CEMIFA5.jpg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Audit Institutionnel</h5>
          <p class="card-text">Nous accompagnons les entreprises dans leurs réalisations de projets</p>
          <a href="#" class="btn btn-primary">En Savoir Plus</a>
        </div>
      </div>

      <div class="card main-card card6" style="width: 18rem;">
        <img src="Image_CEMIFA/CEMIFA6.jpg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Audit Comptable et Financier</h5>
          <p class="card-text">Nous accompagnons les entreprises dans leurs réalisations de projets</p>
          <a href="#" class="btn btn-primary">En Savoir Plus</a>
        </div>
      </div>
      </div>




    <!-- Le js du diaporama -->




  </body>

@endsection

