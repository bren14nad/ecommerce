@section('detailProd')
  <style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      filter: invert(100%);
    }
    
    .carousel-control-prev,
    .carousel-control-next {
      color: black;
    }
  </style>
  <br>
  <br>
  <br>
  <div class="card border-0 shadow-lg rounded-lg">
    <div class="container">
      <div class="d-flex flex-row mb-4">

        <div class="card" style="width: 400px; height: 500px; background-color: white; border: none;">
          <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('img/image1.webp') }}" class="d-block w-100 img-responsive" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/image2.webp') }}" class="d-block w-200 h-200 img-responsive" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/image3.webp') }}" class="d-block w-100 img-responsive" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/image4.webp') }}" class="d-block w-100 img-responsive" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        &ensp;&ensp;&ensp;
        <div class="card" style="width: 800px; height: 800px; background-color:white; border: none;">
          <div class="card-body">
            <div class="col-9 end"><br>
              <p class="user-select-all" style="font-weight: bold; font-family: 'Engravers MT', sans-serif; text-align: left;">Imou 2K Caméra Surveillance WiFi Intérieure Caméra 360° Connectée Smartphone avec Détection Humaine AI Suivi Intelligent Sirène Audio Bidirectionnel Compatible Alexa pour Bébé/Animaux
                <br><span class="user-select-auto" style="font-weight: normal; font-family: 'Time New Roman'; color: orange;">Visiter la boutique 2N CORPORATE</span>
                <br><span style="color: green;">&#9733;&#9733;&#9733;&#9733;</span>
                <br><br><span class="user-select-auto" style="font-weight: normal; font-family: 'Time New Roman'; color: orange;">Actuellement Indisponible</span>
                <br><span class="user-select-auto" style="font-weight: normal; font-family: 'Time New Roman';">Nous ne savons pas quand cet article sera de nouveau approvisionné ni s'il le sera.</span>
                <br><br><span class="user-select-auto" style="font-weight: normal; font-family: 'Time New Roman';">Caracteristiques du produit</span>
                <div class="row">
                  <span class="user-select-auto col-sm-3" style="font-weight: bold; font-family: 'Time New Roman';">Usages recommandés pour le produit</span>
                  <span class="user-select-auto col-sm-4" style="font-weight: normal; font-family: 'Time New Roman';">Surveillance, Surveillance d'animal domestique, Surveillance de bébé</span>
                </div>
                <br>
                <div class="row">
                  <span class="user-select-auto col-sm-3" style="font-weight: bold; font-family: 'Time New Roman';">Marque</span>
                  <span class="user-select-auto col-sm-4" style="font-weight: normal; font-family: 'Time New Roman';">Imou</span>
                </div>
                <br>
                <div class="row">
                  <span class="user-select-auto col-sm-3" style="font-weight: bold; font-family: 'Time New Roman';">Nom du modele</span>
                  <span class="user-select-auto col-sm-4" style="font-weight: normal; font-family: 'Time New Roman';">Ranger 2C</span>
                </div>
                <br>
                <div class="row">
                  <span class="user-select-auto col-sm-3" style="font-weight: bold; font-family: 'Time New Roman';">Technologie de connectivité</span>
                  <span class="user-select-auto col-sm-4" style="font-weight: normal; font-family: 'Time New Roman';">WiFi 2,4 GHz</span>
                </div>
                <br>
                <div class="row">
                  <span class="user-select-auto col-sm-3" style="font-weight: bold; font-family: 'Time New Roman';">Appareils compatibles</span>
                  <span class="user-select-auto col-sm-4" style="font-weight: normal; font-family: 'Time New Roman';">Ordinateur, Alexa, NVR, Tablette, Smartphone</span>
                </div>
                <br>
                <div class="row">
                  <span class="user-select-auto col-sm-3" style="font-weight: bold; font-family: 'Time New Roman';">Protocole de connectivité</span>
                  <span class="user-select-auto col-sm-4" style="font-weight: normal; font-family: 'Time New Roman';">Wi-Fi</span>
                  <br>&ensp;&ensp;&ensp;
                </div>
                  <div class="d-flex justify-content-center">
                    <button class="btn" style="background-color: rgba(255, 0, 0, 0.88); color: white;">
                      &ensp;&ensp;&ensp;<i class="fas fa-shopping-cart mr-2"></i>&ensp; Ajouter au panier
                    </button>
                  </div>
              
                
                <a class="user-select-auto" style="font-weight: normal; font-family: 'Raleway';">Voir plus</a>
                {{-- <ul>
                  <li>Résolution : La caméra Imou 2K offre une résolution vidéo de 2K, ce qui correspond à une définition de 2304 x 1296 pixels. Cela permet d'obtenir des images nettes et détaillées.
                    Détection de mouvement : La caméra est dotée d'une fonction de détection de mouvement qui envoie des notifications sur votre smartphone ou votre ordinateur chaque fois qu'un mouvement est détecté dans la zone surveillée.
                  </li> --}}
                  {{-- <li>Vision nocturne : Elle est équipée de LED infrarouges qui permettent une vision nocturne claire jusqu'à une certaine distance, ce qui assure une surveillance continue même dans l'obscurité.
                    Stockage : La caméra Imou 2K prend en charge le stockage local via une carte microSD (jusqu'à un certaine capacité) et offre également la possibilité de stocker les enregistrements sur le cloud, moyennant un abonnement.
                  </li>
                  <li>Champ de vision : La caméra Imou 2K offre un large champ de vision pour couvrir une zone étendue. Les caméras Imou peuvent avoir différents angles de vue, allant généralement de 110° à 140°.
                    Connectivité : La caméra peut être connectée à votre réseau Wi-Fi domestique, ce qui vous permet de visualiser les flux vidéo en direct, de recevoir des alertes et de gérer les paramètres depuis votre smartphone via une application dédiée.
                  </li> --}}
                {{-- </ul> --}}
              </p>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>

 
@endsection