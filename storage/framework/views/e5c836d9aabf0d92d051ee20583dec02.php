<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CEMIFA Consulting</title>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('css/Projet_CEMIFA.css')); ?>">
</head>





<body>

  <nav class="navbar">
    <div class="logo-container">
      <a href="#" class="logo">CEMIFA Consulting</a>
      <a href="cemifa.png" class="logocemifa"><img src="Image_CEMIFA/cemifa.png" alt="Logo CEMIFA"></a>
    </div>

    <div class="nav-liens">

      <ul>
        <li><a class="accueil" href="#">ACCUEIL</a></li>
        <li><a class="cabinet" href="#">LE CABINET</a></li>
        <li><a class="nosservices" href="#">NOS SERVICES</a>
           <ul class="services">
               <li><a href="#">ETUDES ET CONSEILS</a></li>
               <li><a href="#">COACHING</a></li>
               <li><a href="#">AUDITS</a></li>
           </ul>

        </li>
        <li><a class="formations" href="#">NOS FORMATIONS</a>
           <ul class="nosformations">
               <li><a href="#">GESTION FINANCIERE</a></li>
               <li><a href="#">GRH</a></li>
               <li><a href="#">GESTION DES PROJETS</a></li>
               <li><a href="#">INFORMATIQUE: Sage 100 i7</a></li>
               <li><a href="#">COMPTABILITE</a></li>
               <li><a href="#">RH PAIE</a></li>
               <li><a href="#">GESTION COMMERCIALE</a></li>
               <li><a href="#">Ms PROJECT</a></li>
               <li><a href="#">COMPTABILITE</a></li>
               <li><a href="#">MICROSOFT OFFICE</a></li>
           </ul>
     
        </li>
        <li><a class="actualites" href="#">ACTUALITES</a></li>
        <li><a class="faq" href="#">FAQ</a></li>
        <li><a class="contact" href="#">CONTACTEZ-NOUS</a></li>

      </ul>
    </div>
  </nav>

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
  

  <!-- Le pied du page -->
  <footer>
    <div class="footer-top">
      <div class="footer-elt">
        <h3>A Propos</h3>
        <a href="#">Lien 1</a>
        <a href="#">Lien 2</a>
        <a href="#">Lien 3</a>
      </div>
      <div class="footer-elt">
        <h3>Contact</h3>
        <a href="#">Adresse</a>
        <a href="#">Téléphone</a>
        <a href="#">Email</a>
      </div>
      <div class="footer-elt">
        <h3>Réseaux sociaux</h3>
        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
        <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
      </div>
    </div>

    <div class="footer-middle">
      <h3>Restez à jour</h3>
      <form>
        <label for="newsletter">Inscrivez-vous à la newsletter pour rester à jour</label>
        <input type="email" name="newsletter" id="newsletter" required>
        <input type="submit" value="Inscription">
      </form>
    </div>

    <div class="footer-bottom">
            <p>&copy; 2024 CEFIMA Consulting. Tous droits réservés.</p>
    </div>
  </footer>

  <!-- Le js du diaporama -->
  <script>
    // Liste des images et textes du diaporama
    var slides = [
      { image: "Image_CEMIFA/CEMIFA_img1.jpg", title: "Une Equipe d'Expert pour vous accompagner dans tout le processus de votre projet", text: "Faites de vos projets une réalité avec CEMIFA Consulting" },
      { image: "Image_CEMIFA/CEMIFA_img2.jpg", title: "Audits et Comptabilité", text: "Une Expertise de qualité pour vous accompagner" },
      { image: "Image_CEMIFA/CEMIFA_img3.jpg", title: "Conseils et Orientations", text: "Des oreilles attentatives pour vous écouter et vous accompagner" },
      { image: "Image_CEMIFA/CEMIFA_img4.jpg", title: "Des Coatchs qualifiés pour vous amener au sommeil", text: "Faites-vous coatcher par des pros du secteur" },
      { image: "Image_CEMIFA/CEMIFA_img5.jpg", title: "Des outils de qualité pour votre accompagnement", text: "Les éxigences du numériques à jour pour votre succès" },

    ];

    var currentSlide = 0;
    var slideContainer = document.getElementById("slideshow-container");
    var cardImg = document.querySelector(".card-image");
    var cardTitle = document.querySelector(".carte-title");
    var cardText = document.querySelector(".carte-text");

    function showSlide() {
      var slide = slides[currentSlide];
      cardImg.src = slide.image;
      cardTitle.textContent = slide.title;
      cardText.textContent = slide.text;
      currentSlide = (currentSlide + 1) % slides.length;
    }

   
    setInterval(showSlide, 3000);
    showSlide();


    /*Js des cadres du milieu*/
    let currentIndex = 0;
  function showCardsNext() {
  const cardContainer = document.querySelector('.cadre-container');
  const cardWidth = document.querySelector('.cadre').offsetWidth + 20;
  cardContainer.classList.add('transition');
  cardContainer.style.transform = `translateX(${-cardWidth}px)`;
}

function showCardsPrev() {
  const cardContainer = document.querySelector('.cadre-container');
  const cardWidth = document.querySelector('.cadre').offsetWidth + 20;

  cardContainer.classList.add('transition');

  
  const lastCard = cardContainer.children[cardContainer.children.length - 1];
  cardContainer.insertBefore(lastCard, cardContainer.children[0]);

  
  cardContainer.style.transform = `translateX(${cardWidth}px)`;

  
  setTimeout(() => {
    cardContainer.style.transition = 'none';
    cardContainer.style.transform = 'translateX(0)';
    cardContainer.offsetHeight; 
    cardContainer.style.transition = ''; 
  }, 500); 
}





  function next() {
    const totalCards = document.querySelectorAll('.cadre').length;

    if (currentIndex < totalCards - 1) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }

    showCardsNext();
  }

  function prev() {
    const totalCards = document.querySelectorAll('.cadre').length;

    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = totalCards - 1;
    }

    showCardsPrev();
  }

  
  document.querySelector('.cadre-container').addEventListener('transitionend', function () {
    const cardContainer = document.querySelector('.cadre-container');
    cardContainer.classList.remove('transition');
    const firstCard = cardContainer.children[0];
    cardContainer.appendChild(firstCard);
    cardContainer.style.transition = 'none';
    cardContainer.style.transform = 'translateX(0)';
    cardContainer.offsetHeight;
    cardContainer.style.transition = '';
  });

  </script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
</body>
</html><?php /**PATH C:\Users\pc\Projet_CEMIFA\resources\views/Projet_CEMIFA.blade.php ENDPATH**/ ?>