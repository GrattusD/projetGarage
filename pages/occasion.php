<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon projet Garage</title>
    <link rel="stylesheet" href="../CSS/headerfooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/occasion.css">
    
</head>

<body>
    <header>
        <div class="topbar">
            retrouvez nos dernières offres
        </div>
        <div class="container flex">
            <div>
                <img class="logoParrot" src="../ressources/images/logogarageVParrot01.png" alt="logo garage V.Parrot">
            </div>

            <nav>
                <ul class="flex">
                    <li><a href="../index.php"> Accueil </a></li>
                    <li><a href="../pages/reparations.php"> Carrosserie et Réparation </a></li>
                    <li class="selectedPage"><a href="../pages/occasion.php"> Véhicules d'occasion </a></li>
                    <li><a href="../pages/interne.php"> Interne </a></li>
                    <li><a href="../pages/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="bandeau shadow container-fluid">
            <div class="row">
                <div class="col-12">
                    <img src="../ressources/images/mathieu-renier-4WBvCqeMaDE-unsplash.jpg" class="img-fluid img-header" alt="voiture d'occasion">
                    <h1>Nos véhicules d'occasion</h1>
                </div>
            </div>
        </div>
        
        <section>
            <!-- ici on position la partie filtre avec les différents filtres-->
            <aside id="filters" class="shadow">
                <h2>Filtres</h2>
                <div class="filterContent">
                    <div class="filterGroup">
                        <h4>Marques</h4>
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input" id="marque_renault" name="marque" value="Renault">
                            <label class="form-check-label" for="marque_renault">Renault</label>
                        </div>
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input" id="marque_skoda" name="marque" value="Skoda">
                            <label class="form-check-label" for="marque_skoda">Skoda</label>
                        </div>
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input" id="marque_toyota" name="marque" value="Toyota">
                            <label class="form-check-label" for="marque_toyota">Toyota</label>
                        </div>
                    </div>
                    <div class="filterContent">
                        <div class="filterGroup">
                            <h4>Prix</h4>
                            <div class="minMax">
                                <div>
                                    <label for="price_min">Min.</label>
                                    <input type="text" id="price_min" placeholder="0" value>
                                </div>
                                <div>
                                    <label for="price_max">Max.</label>
                                    <input type="text" id="price_max" placeholder="50000" value>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="filterContent">
                        <div class="filterGroup">
                            <h4>Année</h4>
                            <div class="minMax">
                                <div>
                                    <label for="year_min">Min.</label>
                                    <input type="text" id="year_min" placeholder="1980" value>
                                </div>
                                <div>
                                    <label for="year_max">Max.</label>
                                    <input type="text" id="year_max" placeholder="2023" value>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="filterContent">
                        <div class="filterGroup">
                            <h4>Kilomètrage</h4>
                            <div class="minMax">
                                <div>
                                    <label for="km_min">Min.</label>
                                    <input type="text" id="km_min" placeholder="0" value>
                                </div>
                                <div>
                                    <label for="km_max">Max.</label>
                                    <input type="text" id="km_max" placeholder="50000" value>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="filtrer" class="btn">Filtrer </div>
                </div>
            </aside>
            
            <!--Dans cette section nous ferons apparaitre les résultats avec les cartes des véhicules-->
            <section class="flex" id="listVehicules">
                <div class="container row row-cols-1 row-cols-sm-2 row-cols-md-3 g-0">
                    <div class="col">
                        <div class="card shadow" >
                            <img src="../ressources/images/photosvoitures/renault.png" class="card-img-top" alt="la voiture">
                            <div class="card-body">
                                <h5 class="card-title">Modèle véhicule</h5>
                                <p class="card-text">Prix :20000 </br>Année : 2018 </br>Kilomètrage : 78700 km</p>
                                <a href="#" class="btn">Choisir ce véhicule</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card shadow" >
                            <img src="../ressources/images/photosvoitures/renault.png" class="card-img-top" alt="la voiture">
                            <div class="card-body">
                                <h5 class="card-title">Modèle véhicule</h5>
                                <p class="card-text">Prix :20000 </br>Année : 2018 </br>Kilomètrage : 78700 km</p>
                                <a href="#" class="btn">Choisir ce véhicule</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card shadow" >
                            <img src="../ressources/images/photosvoitures/renault.png" class="card-img-top" alt="la voiture">
                            <div class="card-body">
                                <h5 class="card-title">Modèle véhicule</h5>
                                <p class="card-text">Prix :20000 </br>Année : 2018 </br>Kilomètrage : 78700 km</p>
                                <a href="#" class="btn">Choisir ce véhicule</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card shadow" >
                            <img src="../ressources/images/photosvoitures/renault.png" class="card-img-top" alt="la voiture">
                            <div class="card-body">
                                <h5 class="card-title">Modèle véhicule</h5>
                                <p class="card-text">Prix :20000 </br>Année : 2018 </br>Kilomètrage : 78700 km</p>
                                <a href="#" class="btn">Choisir ce véhicule</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    
    <?php
include_once '../php/footer.php';
?>

                    <script src=”occasion.js”></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                </body>
                </html>
