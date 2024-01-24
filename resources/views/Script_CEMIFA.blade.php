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
