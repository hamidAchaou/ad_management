    <?php 
    // session_start();
    include 'logIn.php'; 
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ad management</title>
    <!-- link bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <!-- link font awesome library -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- link CSS -->
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" id="nav">
      <!-- Container wrapper -->
      <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
          <img
            src="image/logo.png"
            height="16"
            alt="MDB Logo"
            loading="lazy"
            style="margin-top: -1px"
          />
        </a>

        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarButtonsExample"
          aria-controls="navbarButtonsExample"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mr-4">
              <a class="nav-link text-white" href="#">Home</a>
            </li>
          </ul>

          <!-- Button SIGN UP -->
          <button
            type="button"
            class="btn nav-link px-3 me-2 text-white d-flex align-items-center gap-1 sign-in"
            data-toggle="modal"
            data-target="#addAnnonceModal"
          >
            <span>Sign Up</span>
            <i class="fa-solid fa-user-plus"></i>
          </button>
          <!-- button LOG IN -->
          <div class="d-flex align-items-center">
            <a
              type="button"
              class="btn nav-link px-3 me-2 text-white d-flex align-items-center gap-1 sign-in"
              data-toggle="modal"
              data-target="#btn-signin"
            >
              Log In
              <i class="fa-solid fa-user"></i>
            </a>
          </div>
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>

    <main>
      <!-- ========== div serch by city and type and categories and price ==========-->
      <div class="" id="slider-three">
        <div id="btn-serch">
          <div class="form-filter d-flex">
            <form
              action="search.php"
              method="POST"
              class="w-100 d-flex justify-content-center align-items-center gap-1"
            >
              <label for="" class="d-flex gap-1">
                <span>city:</span>
                <select
                  class="form-select form-select-sm"
                  aria-label=".form-select-sm example"
                  name="type"
                >
                  <option value="Tanger">Tanger</option>
                  <option value="Rabat">Rabat</option>
                  <option value="Marakech">Marakech</option>
                  <option value="Fes">Fes</option>
                </select>
              </label>
              <label for="" class="d-flex ml-1 gap-1">
                <span>type:</span>
                <select
                  class="form-select form-select-sm"
                  aria-label=".form-select-sm example"
                  name="type"
                >
                  <option value="apartment">apartment</option>
                  <option value="House">House</option>
                  <option value="Villa">Villa</option>
                  <option value="desk">desk</option>
                  <option value="ground">ground</option>
                </select>
              </label>
              <label for="" class="d-flex ml-1 gap-1">
                <span>categories:</span>
                <select
                  class="form-select form-select-sm"
                  aria-label=".form-select-sm example"
                  name="type"
                >
                  <option value="Rent">For Rent</option>
                  <option value="Sale">For Sale</option>
                </select>
              </label>
              <label for="" class="d-flex ml-1 gap-1" id="max-price">
                <span>Max Price: </span>
                <input name="max_Price" type="number" min="0" />
              </label>
              <label for="" class="d-flex ml-1 gap-1" id="min-Price">
                <span>Min Price:</span>
                <input name="min_Price" type="number" min="0" />
              </label>
              <button
                name="searchbtn"
                type="submit"
                class="btn btn-primary ml-4"
                id="btn-search"
              >
                Search
              </button>
            </form>
          </div>
        </div>
      </div>
      <!-- ========== show cards ==========-->
      <div class="container mt-5 d-flex flex-wrap gap-5 justify-content-center">
        <div class="card wow" style="width: 19rem; height: 430px">
          <img
            class="card-img-top"
            src="image/image5.jpg"
            alt="Card image cap"
          />
          <div class="type-annonce">
            <h4>SALE</h4>
          </div>
          <div class="card-body" id="details">
            <h5 class="card-title text-center">Villa Nord</h5>
            <div>
              <p><span>Type: </span>Villa</p>
              <p><span>address: </span>gznaya Rabat Road</p>
            </div>
            <div class="d-flex justify-content-between">
              <p><span>Area: </span>Tanger</p>
              <h2 class="d-flex justify-content-end">120000$</h2>
            </div>
            <a
              href="#"
              class="btn d-flex w-100 text-center justify-content-center"
              id="mor-details"
              data-toggle="modal"
              data-target="#btn-morInfo"
              >More Details</a
            >
          </div>
        </div>

        <div class="card wow" style="width: 19rem; height: 430px">
          <img
            class="card-img-top"
            src="image/image5.jpg"
            alt="Card image cap"
          />
          <div class="type-annonce">
            <h4>SALE</h4>
          </div>
          <div class="card-body" id="details">
            <h5 class="card-title text-center">Villa Nord</h5>
            <div>
              <p><span>Type: </span>Villa</p>
              <p><span>address: </span>gznaya Rabat Road</p>
            </div>
            <div class="d-flex justify-content-between">
              <p><span>Area: </span>Tanger</p>
              <h2 class="d-flex justify-content-end">120000$</h2>
            </div>
            <a
              href="#"
              class="btn d-flex w-100 text-center justify-content-center"
              id="mor-details"
              data-toggle="modal"
              data-target="#btn-morInfo"
              >More Details</a
            >
          </div>
        </div>

        <div class="card wow" style="width: 19rem; height: 430px">
          <img
            class="card-img-top"
            src="image/image5.jpg"
            alt="Card image cap"
          />
          <div class="type-annonce">
            <h4>SALE</h4>
          </div>
          <div class="card-body" id="details">
            <h5 class="card-title text-center">Villa Nord</h5>
            <div>
              <p><span>Type: </span>Villa</p>
              <p><span>address: </span>gznaya Rabat Road</p>
            </div>
            <div class="d-flex justify-content-between">
              <p><span>Area: </span>Tanger</p>
              <h2 class="d-flex justify-content-end">120000$</h2>
            </div>
            <a
              href="#"
              class="btn d-flex w-100 text-center justify-content-center"
              id="mor-details"
              data-toggle="modal"
              data-target="#btn-morInfo"
              >More Details</a
            >
          </div>
        </div>

        <div class="card wow" style="width: 19rem; height: 430px">
          <img
            class="card-img-top"
            src="image/image5.jpg"
            alt="Card image cap"
          />
          <div class="type-annonce">
            <h4>SALE</h4>
          </div>
          <div class="card-body" id="details">
            <h5 class="card-title text-center">Villa Nord</h5>
            <div>
              <p><span>Type: </span>Villa</p>
              <p><span>address: </span>gznaya Rabat Road</p>
            </div>
            <div class="d-flex justify-content-between">
              <p><span>Area: </span>Tanger</p>
              <h2 class="d-flex justify-content-end">120000$</h2>
            </div>
            <a
              href="#"
              class="btn d-flex w-100 text-center justify-content-center"
              id="mor-details"
              data-toggle="modal"
              data-target="#btn-morInfo"
              >More Details</a
            >
          </div>
        </div>

        <div class="card wow" style="width: 19rem; height: 430px">
          <img
            class="card-img-top"
            src="image/image5.jpg"
            alt="Card image cap"
          />
          <div class="type-annonce">
            <h4>SALE</h4>
          </div>
          <div class="card-body" id="details">
            <h5 class="card-title text-center">Villa Nord</h5>
            <div>
              <p><span>Type: </span>Villa</p>
              <p><span>address: </span>gznaya Rabat Road</p>
            </div>
            <div class="d-flex justify-content-between">
              <p><span>Area: </span>Tanger</p>
              <h2 class="d-flex justify-content-end">120000$</h2>
            </div>
            <a
              href="#"
              class="btn d-flex w-100 text-center justify-content-center"
              id="mor-details"
              data-toggle="modal"
              data-target="#btn-morInfo"
              >More Details</a
            >
          </div>
        </div>

        <div class="card wow" style="width: 19rem; height: 430px">
          <img
            class="card-img-top"
            src="image/image5.jpg"
            alt="Card image cap"
          />
          <div class="type-annonce">
            <h4>SALE</h4>
          </div>
          <div class="card-body" id="details">
            <h5 class="card-title text-center">Villa Nord</h5>
            <div>
              <p><span>Type: </span>Villa</p>
              <p><span>address: </span>gznaya Rabat Road</p>
            </div>
            <div class="d-flex justify-content-between">
              <p><span>Area: </span>Tanger</p>
              <h2 class="d-flex justify-content-end">120000$</h2>
            </div>
            <a
              href="#"
              class="btn d-flex w-100 text-center justify-content-center"
              id="mor-details"
              data-toggle="modal"
              data-target="#btn-morInfo"
              >More Details</a
            >
          </div>
        </div>
      </div>
    </main>
    <!-- ================= Modal Log in =================-->


    <!-- ================= Modal Sign up =================-->
    <!-- Modal -->
    <div
      class="modal fade"
      id="addAnnonceModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <img
                src="image/Real_Estate_logo_-_Fait_avec_PosterMyWall__1_-removebg-preview.png"
                style="width: 185px"
                alt="logo"
              />
              <h4 class="">Create Your Account</h4>
            </div>

            <form  action="clients.php" method = "POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="firstName">First Name:</label>
                    <input
                      type="text"
                      id="firstName"
                      class="form-control form-control-lg"
                      name="firstName"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="lastName">Last Name:</label>
                    <input
                      type="text"
                      id="lastName"
                      class="form-control form-control-lg"
                      name="lastName"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <label class="form-label" for="emailAddress">Email:</label>
                    <input
                      type="email"
                      id="emailAddress"
                      class="form-control form-control-lg"
                      name="email"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <label class="form-label" for="phoneNumber"
                      >Phone Number:</label
                    >
                    <input
                      type="tel"
                      id="phoneNumber"
                      class="form-control form-control-lg"
                      name="phonNumber"
                      required
                    />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <label class="form-label" for="emailAddress">Password:</label>
                    <input
                      type="password"
                      id="emailAddress"
                      class="form-control form-control-lg"
                      name="password"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <label class="form-label" for="phoneNumber"
                      >confirm password:</label
                    >
                    <input
                      type="password"
                      id="phoneNumber"
                      namee="confirmPassword"
                      class="form-control form-control-lg"
                      required
                    />
                  </div>
                </div>
              </div>

              <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn w-100 btn-log-in" onclick="signUp()" type="submit" name="sign_up">
                  Sign Up
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- ====== MODAL MOR INFO ============== -->
    <div
      class="modal fade bd-example-modal-lg"
      id="btn-morInfo"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
     >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">More Details</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body container">
            <!-- slider image -->
            <div class="row mt-4">
              <img
                src="image/r-architecture-T6d96Qrb5MY-unsplash.jpg"
                class="d-block w-50 h-50"
                alt="image"
              />
              <div class="row w-50">
                <img
                  src="image/r-architecture-T6d96Qrb5MY-unsplash.jpg"
                  class="d-block w-50 h-50 mb-1"
                  alt="image"
                />
                <img
                  src="image/r-architecture-T6d96Qrb5MY-unsplash.jpg"
                  class="d-block w-50 h-50 mb-1"
                  alt="image"
                />
                <img
                  src="image/r-architecture-T6d96Qrb5MY-unsplash.jpg"
                  class="d-block w-50 h-50"
                  alt="image"
                />
                <img
                  src="image/r-architecture-T6d96Qrb5MY-unsplash.jpg"
                  class="d-block w-50 h-50"
                  alt="image"
                />
              </div>
            </div>
            <div>
              <h2>Title</h2>
              <p>category</p>
              <p>type</p>
              <p>area</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ footer ================= -->
    <footer class="bg-light text-center text-white mt-5">
      <!-- Grid container -->
      <div class="container p-4 pb-0 bg-light">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #3b5998"
            href="#!"
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>

          <!-- Twitter -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #55acee"
            href="#!"
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>

          <!-- Google -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #dd4b39"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #ac2bac"
            href="#!"
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>

          <!-- Linkedin -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #0082ca"
            href="#!"
            role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <!-- Github -->
          <a
            class="btn text-white btn-floating m-1"
            style="background-color: #333333"
            href="#!"
            role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023
      </div>
      <!-- Copyright -->
    </footer>

    <!--============== link script bootsrap ================ -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <!-- librarry JS sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- link JS -->
    <script src="script.js"></script>
  </body>
</html>
