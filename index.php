<!doctype html>
<html lang="en">
  <head>
    <title>My Restaurant</title>

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link 
      rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
      crossorigin="anonymous" 
      referrerpolicy="no-referrer" 
    />

  </head>

  <body>
    <header>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <i class="fas fa-utensils"></i>My Restaurant
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#home" aria-current="page"
                  >Home <span class="visually-hidden">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#chefs">Chefs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#reviews">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact us</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>

      <section id="banner" class="container-fluid p-0">
        <div class="banner-img"
        style="position:relative ; background:url('images/banner.jpg') no-repeat center/cover; height: 400px;"
        >
          <div class="banner-text text-light" style="position:absolute; top:50%; left:50%; transform: translate(-50%,-50%); text-align:center;">
            <h1>My Restaurant</h1>
            <h3>The coolest place in the city to enjoy your the most delicious meals</h3>
            <a href="#menu" class="btn btn-primary">See the menu</a>
          </div>
        </div>
      </section>
    </header>

    <section id="id" class="container mt-4 text-center">
      <div class="jumbotron bg-dark text-light p-5">
        <h2>Discover the taste of Perú</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium veritatis quos commodi quaerat.
        </p>
      </div>
    </section>

    <main>
      <section id="chefs" class="container mt-5 text-center">
        <h3>Our Chefs</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="images/chefs/chef1.jpg" alt="a chef" class="car-img-top">
              <div class="card-body">
                <h4>Zea Mik</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dolores minima nemo expedita, delectus ratione ipsum officiis fugiat iure. Ullam laborum temporibus itaque iste, animi repellat in velit dolor voluptates.
                </p>
                <div class="social-icons mt-3">
                  <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                  <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="images/chefs/chef2.jpg" alt="a chef" class="car-img-top">
              <div class="card-body">
                <h4>Zea Mik</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dolores minima nemo expedita, delectus ratione ipsum officiis fugiat iure. Ullam laborum temporibus itaque iste, animi repellat in velit dolor voluptates.
                </p>
                <div class="social-icons mt-3">
                  <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                  <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="images/chefs/chef3.jpg" alt="a chef" class="car-img-top">
              <div class="card-body">
                <h4>Zea Mik</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dolores minima nemo expedita, delectus ratione ipsum officiis fugiat iure. Ullam laborum temporibus itaque iste, animi repellat in velit dolor voluptates.
                </p>
                <div class="social-icons mt-3">
                  <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                  <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="reviews" class="bg-light py-5">
        <div class="container">
          <h3 class="text-center mb-4">Reviews</h3>
          <div class="row">
            <div class="col-md-6 d-flex">
              <div class="card mb-4 w-100">
                <div class="card-body">
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos tenetur, corrupti aliquam, nam quibusdam iusto, facilis dolor impedit quis cumque doloremque magni praesentium voluptatum eveniet vitae? Libero hic quo quis.
                  </p>
                </div>
                <div class="card-footer">
                  <p class="text-muted">Oscar Uh</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex">
              <div class="card mb-4 w-100">
                <div class="card-body">
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit necessitatibus eum laborum rerum aliquam exercitationem illo enim non numquam tempora odio, culpa, corrupti nemo, atque provident ducimus voluptatem ratione velit.
                  </p>
                </div>
                <div class="card-footer">
                  <p class="text-muted">Juan  Valdez</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container mt-4">
        <h2 class="text-center">Our Menu</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col d-flex ">
            <div class="card">
              <img class="card-img-top" src="images/meals/meal1.jpg" alt="pancakes">
              <div class="card-body">
                <h5 class="card-title">Anticucho</h5>
                <p class="card-text small"><strong>Ingredients: </strong>Potato, Meat, sauce.</p>
                <p class="card-text">Price: <strong>$3.99</strong></p>
              </div>
            </div>
          </div>
          <div class="col d-flex ">
            <div class="card">
              <img class="card-img-top" src="images/meals/meal2.jpg" alt="pancakes">
              <div class="card-body">
                <h5 class="card-title">Burrito</h5>
                <p class="card-text small"><strong>Ingredients: </strong>Tortilla, meat, lettuce, tomato, avocado.</p>
                <p class="card-text">Price: <strong>$3.99</strong></p>
              </div>
            </div>
          </div>
          <div class="col d-flex ">
            <div class="card">
              <img class="card-img-top" src="images/meals/meal3.jpg" alt="pancakes">
              <div class="card-body">
                <h5 class="card-title">Pizza</h5>
                <p class="card-text small"><strong>Ingredients: </strong>Tomato, salame, cheese, wheat flour.</p>
                <p class="card-text">Price: <strong>$3.99</strong></p>
              </div>
            </div>
          </div>
          <div class="col d-flex ">
            <div class="card">
              <img class="card-img-top" src="images/meals/meal4.jpg" alt="pancakes">
              <div class="card-body">
                <h5 class="card-title">Arroz Chaufa</h5>
                <p class="card-text small"><strong>Ingredients: </strong>Rice, chicken, eggs, onions.</p>
                <p class="card-text">Price: <strong>$3.99</strong></p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container mt-4">
        <h2>Contact Us</h2>
      </section>
    </main>

    <footer class="bg-dark text-light text-center mt-5">
      <p>My Restaurant - made with 🩶 by Christian Soldevilla</p>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
