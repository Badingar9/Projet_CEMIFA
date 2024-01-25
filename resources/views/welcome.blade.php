<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset ('css/Projet_CEMIFA.css')}}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     </head>

    <body>


            <nav class="navbar">
                <div class="logo-container">
                <a href="#" class="logo">CEMIFA Consulting</a>
                <a href="cemifa.png" class="logocemifa"><img src="Image_CEMIFA/cemifa.png" alt="Logo CEMIFA"></a>
                </div>

                    <div class="nav-liens">

                        <ul>
                            <li><a class="accueil" href="{{route('accueil')}}">ACCUEIL</a></li>
                            <li><a class="cabinet" href="{{ route('Cabinet')}}">LE CABINET</a></li>
                            <li><a class="nosservices" href="#">NOS SERVICES</a>
                            <ul class="services">
                                <li><a href="#">ETUDES ET CONSEILS</a></li>
                                <li><a href="#">COACHING</a></li>
                                <li><a href="#">AUDITS</a></li>
                            </ul>

                            </li>
                            <li><a class="formations" href="#">NOS FORMATIONS</a>
                            <ul class="nosformations">
                                <li><a href="{{route('gestion_financiere')}}">GESTION FINANCIERE</a></li>
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
                            <li><a class="actualites" href="{{route('actualite')}}">ACTUALITES</a></li>
                            <li><a class="faq" href="{{route('faq')}}">FAQ</a></li>
                            <li><a class="contact" href="{{route('contact')}}">CONTACTEZ-NOUS</a></li>

                        </ul>
                     </div>
             </nav>
<main>
        {{-- Appel de toute page --}}
        @yield('base')
    </main>
  <!-- Le pied de page -->
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

        {{-- fichiers JS pour tout le site --}}
        @include('Script_CEMIFA')

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
 </html>
