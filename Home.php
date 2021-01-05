<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tasty Makla</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="test.css">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      </head>  


    <body >
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">ACCEUILS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Villes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Recettes</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">A propos</a></li>
                    <li class="nav-item "><a class="nav-link User" data-toggle="modal" data-target="#exampleModalCenter">S'AUTHENTIFIER</a> </li>
                    <li class="nav-item "><a class="nav-link User1" data-toggle="modal" data-target="#modalinscription">S'INSCRIRE</a></li>
                </ul>
            </div>
        </div>
    </nav>

     <!-- Masthead-->
     <header class="masthead">
      <div class="container">
          <div class="masthead-heading text-uppercase">
          <div class="text-center">
            VENEZ<br><span style="color:#FCCD45">DECOUVRIR</span><br>LES<span style="color:#FCCD45"><br>MEILLEURS</span><br>RESTAURANTS
          </div>
          <div class="form-control w-100 ">
            <input class=" recherche w-50" type="search" placeholder="EX : Rabat,Fes..." aria-label="Search" style="padding-left: 5px;">
            <button class="btn  btn-primary " type="submit" style="margin-left: 1%;">Rechercher</button>
          </div>
          
      </div>
  </header>

  <!-- Villes-->
  <section class="page-section">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase" style="color :#FCCD45">Villes</h2>
            <h4 class="section-subheading text-muted">Voici le périmètre de notre service</h4>
        </div>
        <div class="row text-center">
            <div class="col-md-3 mb-3 mt-5">
              <a href="#"><img src="rabat.jpg" class="w-100 h-100"></a>
                <h4 class="my-3">Rabat</h4>
                
            </div>
            <div class="col-md-3 mb-3 mt-5">
              <a href="#"><img src="casablanca.jpg" class="w-100 h-100"></a>
              <h4 class="my-3">Casablanca</h4>
                
            </div>
            <div class="col-md-3 mb-3 mt-5">
              <a href="#"><img src="fes.jpg" class="w-100 h-100"></a>
              <h4 class="my-3">Fes</h4>
            </div>
            <div class="col-md-3 mb-3 mt-5">
              <a href="#"><img src="marrakech.jpg" class="w-100 h-100"></a>
              <h4 class="my-3">Marrakech</h4>
            </div>
        </div>
    </div>
  </section>

  <div class="mt-5">
    <p  id='tit2'>
      OSEZ LE FAIT-MAISON <br> ECHANGEZ <span style="color:#FCCD45">LES RECETTES</span> FACILES <br>  ET <span style="color:#FCCD45">LES CONSEILS </span> CUISINE 
    </p>
    <div id="carouselExampleIndicators" class="carousel slide w-75 h-50" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="pexels-cheryl-wee-2262182.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="pexels-lisa-fotios-1279330.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="cesar.PNG" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
   
  </div>

   <!-- Team-->
   <section class="page-section bg-light mt-5" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"  style="color :#FCCD45">Notre equipe</h2>
            <h4 class="section-subheading text-muted">DES ELEVES INGENIEURS EN GINIE INFORMATIQUE A L'ECOLE MOHAMMEDIA D'INGENIEURS</h4>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="patient.png" alt="" />
                    <h5>HIND BELHARMA</h5>
                    <ul class="social-icons">
                      <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                      <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="team-member">
                  <img class="mx-auto rounded-circle" src="kenza.jpg" alt="" />
                  <h5>KENZA EL KHATTAR</h5>
                  <ul class="social-icons" >
                    <li><a class="facebook" href="#" ><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
                  </ul>
              </div>
          </div>
          
      </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="team-member">
                <img class="mx-auto rounded-circle" src="guita.jpg" alt="" />
                <h5>GUITA DOUAZI</h5>
                <ul class="social-icons">
                  <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                  <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
          <div class="team-member">
              <img class="mx-auto rounded-circle" src="abd.jpg" alt="" />
              <h5>ABDERRAHMANE EL HARCHI</h5>
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
              </ul>
          </div>
        </div>
    </div>
  </div>
</section>

  
      <!-- Modal Authentifier-->
      <div class="modal fade" id="exampleModalCenter" role="dialog">
        <div class="modal-dialog modal-dialog-centered ">
          <!-- Modal content-->
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">S'AUTHENTIFIER</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
            <div class="modal-body" >
              <form action="Connection.php" method="post">
                <div class="input-group form-group">
                    <input type="text" name="Username" class="form-control Coord" placeholder="Nom d'utilisateur">
                </div>
                <div class="input-group form-group mt-1">
                    <input type="password" name="Password" class="form-control Coord" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="submit" value="Login" class="btn float-right login_btn">
                </div>
              </form>
               
            </div>
            
            <div class="d-flex justify-content-center">
              <a href="#">Mot de passe oublié ?</a>
            </div>
    
            <div class="modal-footer">
              <div class="links">
              Vous n'avez pas de compte ?<a href="#">Inscrivez-vous</a>
              </div>
            </div>
    
          </div>
        </div>
      </div> 
    
      <!-- Modal inscription-->
      <div class="modal fade" id="modalinscription" role="dialog">
        <div class="modal-dialog modal-dialog-centered ">
          <!-- Modal content-->
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">S'INSCRIRE</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
            <div class="modal-body">
              <form action="Inscription.php" method="post">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputName1">Nom</label>
                    <input type="text" name="Nom" class="form-control Coord" id="inputName1" required >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputName">Prenom</label>
                    <input type="text" name="Prenom" class="form-control Coord" id="inputName" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputName">Username</label>
                    <input type="text"name="User" class="form-control Coord" id="inputName" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="Email" name="mail" class="form-control Coord" id="inputEmail" required>
                </div>
                <div class="form-group">
                  <label for="inputPassword"">Mot de passe</label>
                  <input type="password" name="MotDePasse" class="form-control Coord" id="inputPassword" required>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCountry">Pays</label>
                    <input type="text" name="Pays" class="form-control Coord" id="inputCountry">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputCity">Ville</label>
                    <input type="text" name="Ville" class="form-control Coord" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Sexe</label>
                    <select id="inputState" class="form-control Coord">
                      <option>Masculin</option>
                      <option>Feminin</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck" style="color :#FCCD45;">
                      Accepter les conditions d'utilisation
                    </label>
                  </div>
                </div>
                <div class="form-group">
                <input type="submit" value="S'inscrire" class="btn float-right login_btn">
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>


      

     <!--footer section -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>OBJECTIFS</h6>
            <p class="text-justify">
              Notre projet <span style="font-weight: bold; color: #FCCD45;">TastyMakla </span>est la réponse à toute ces
              questions, on a pensé un site qui a comme mission
              principale : Dénicher les bons coins où sortir et
              principalement où manger, et ce, adapté à tous les
              budgets et tous les goûts.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Liens</h6>
            <ul class="footer-links">
              <li><a href="#">ACCEUILS</a></li>
              <li><a href="#">VILLES</a></li>
              <li><a href="#">RECETTES</a></li>
              <li><a href="#">CONTACT</a></li>
              <li><a href="#">A PROPOS</a></li>
            </ul>
          </div>
          
          <div class="col-xs-6 col-md-3">
            <h6>CONTACTS</h6>
            <ul class="footer-links">
              <li> <span><i class="fas fa-phone"></i> &nbsp; 0678367437</span></li>
              <li> <span><i class="fas fa-envelope"></i> &nbsp; tastymakla@gmail.com</span></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">TastyMakla</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
            </ul>
          </div>
        </div>
      </div>
</footer>
     
    </body>
</html>