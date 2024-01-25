@extends('welcome')

@section('title','notre cabinet')

@section('base')
{{-- <link rel="stylesheet" type="text/css" href="{{ asset ('css/PageCabinet.css')}}"> --}}
<body>
        <section class="section1">
            <img class="img-cab" src="Image_CEMIFA/CEMIFA_cadre1.jpg" alt="">
            <p><h1 class="posi-texte">@yield('title')</h1></p>
            <div class="ligne">
                <div class="article">
                    <h2>Présentation du cabinet CEMIFA</h2>
                    <p>Composée d’un expert-comptable, d’un diplômé de l’Ecole Supérieure de Commerce d’Abidjan (ESCA) et de
                        collaborateurs expérimentés, notre équipe sera à même de répondre à tous les besoins de la vie de
                        votre entreprise.</p>
                    <p>Sous la direction de sa responsable, notre cabinet met à votre disposition des collaborateurs
                        expérimentés en comptabilité, en audit comptable, en organisation, en droit fiscal et gestion de la
                        paie. Formée en permanence aux évolutions de ces différents domaines d’activités, notre équipe
                        dispose de compétences étendues pour vous accompagner et vous conseiller dans la gestion de votre
                        comptabilité, votre personnel, et au respect des réglementations fiscales et sociales.</p>
                </div>
                    <img class="photo" src="Image_CEMIFA/CEMIFA_img1.jpg" alt="">
            </div>
            <div class="secteur">
                <div>
                    <h2>Nos principaux <br> secteurs <br>d’intervention</h2>
                </div>
                <div>
                    <h3>Secteur privé</h3>
                    <ul>
                        <li>Télécoms...</li>
                        <li> Institutions financières (Microfinance)</li>
                        <li> Agro-industrie</li>
                        <li>Industries</li>
                        <li>Assurances</li>
                        <li>Aviations & transports</li>
                        <li>Energies</li>
                        <li>Distribution et produits de grande consommation</li>
                        <li>Bâtiments, travaux publics</li>
                    </ul>
                </div>
                <div>
                    <h3>Secteur public</h3>
                    <ul>
                        <li>Télécoms...</li>
                        <li> Institutions financières (Microfinance)</li>
                        <li> Agro-industrie</li>
                        <li>Industries</li>
                        <li>Assurances</li>
                        <li>Aviations & transports</li>
                        <li>Energies</li>
                        <li>Distribution et produits de grande consommation</li>
                        <li>Bâtiments, travaux publics</li>
                    </ul>
                </div>
            </div>
            <div class="ligne">
                <div class="article">
                    <h2>Notre Approche</h2>
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

                    <img class="photo" src="Image_CEMIFA/CEMIFA_img2.jpg" alt="">
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
        <section class="section2">
            <h2>Nos Experts</h2>
            <div class="lesexperts">
                <div class="expert">
                    <span class="photo_expert">
                        <img src="Image_CEMIFA/CEMIFA_img4.jpg" alt="">
                    </span>
                    <span class="desc_expert">
                        <p>Mme Dominique AGBALESSI-COFFI est titulaire du Diplôme d’Expertise Comptable Français depuis 2001
                            et du Certificat d’Audit et de Révision des comptes du Conservatoire National des Arts et
                            Métiers (CNAM) de Paris. Elle justifie d’une riche expérience professionnelle de plus de 27 ans
                            dans des cabinets de renommée internationale et dans des entreprises filiales de sociétés
                            françaises et anglo-saxonnes.</p>
                        <p>Elle a démarré sa carrière professionnelle au sein des cabinets Arthur Andersen et Ernst & Young
                            puis a assuré la fonction de Directeur Administratif et Financier dans plusieurs sociétés du
                            secteur des BTP, de la télécommunication et du cafécacao</p>
                        <p>Mme Dominique AGBALESSI-COFFI est associée au cabinet d’audit et d’expertise comptable Afric
                            Consulting & Audit où elle conduit et supervise des missions d’expertise comptable, d’audit
                            comptable et financier, de conseil et de formation pour des entreprises et institutions
                            publiques et privées.</p>
                    </span>
                </div>
                <div class="expert">
                    <span class="photo_expert">
                        <img src="Image_CEMIFA/CEMIFA_img5.jpg" alt="">
                    </span>
                    <span class="desc_expert">
                        <p>Mme Dominique AGBALESSI-COFFI est titulaire du Diplôme d’Expertise Comptable Français depuis 2001
                            et du Certificat d’Audit et de Révision des comptes du Conservatoire National des Arts et
                            Métiers (CNAM) de Paris. Elle justifie d’une riche expérience professionnelle de plus de 27 ans
                            dans des cabinets de renommée internationale et dans des entreprises filiales de sociétés
                            françaises et anglo-saxonnes.</p>
                        <p>Elle a démarré sa carrière professionnelle au sein des cabinets Arthur Andersen et Ernst & Young
                            puis a assuré la fonction de Directeur Administratif et Financier dans plusieurs sociétés du
                            secteur des BTP, de la télécommunication et du cafécacao</p>
                        <p>Mme Dominique AGBALESSI-COFFI est associée au cabinet d’audit et d’expertise comptable Afric
                            Consulting & Audit où elle conduit et supervise des missions d’expertise comptable, d’audit
                            comptable et financier, de conseil et de formation pour des entreprises et institutions
                            publiques et privées.</p>

                    </span>
                </div>
            </div>
        </section>


    </body>
    <style>
        body {
            font-family: "Montserrat", Sans-serif;
        }
            


    </style>

    </html>

@endsection
