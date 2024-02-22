<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <script src="script.min.js"></script>
    <link rel="stylesheet" href="style.min.css" />
    <link rel="stylesheet" href="resources/css/style.css" />
    <link rel="stylesheet" href="vendors/font-aweome/css/all.css" />
    <title>Blogen Admin UI</title>
  </head>
  <body>
    <!-- NAVIGATION-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
      <div class="container">
        <a href="index.html" class="navbar-brand">Infant Immunization</a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarNav"
        ></button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item px-2">
              <a href="index.html" class="nav-link active">Dashboard</a>
            </li>
            <li class="nav-item px-2">
              <a href="post.html" class="nav-link">Post</a>
            </li>
            <li class="nav-item px-2">
              <a href="categories.html" class="nav-link">Categories</a>
            </li>
            <li class="nav-item px-2">
              <a href="users.html" class="nav-link">Users</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-3">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                ><i class="fa fa-user"> Welcome Admin</i></a
              >
              <div class="dropdown-menu">
                <a href="profile.html" class="dropdown-item">
                  <i class="fa fa-user-circle"> Profile</i>
                </a>
                <a href="settings.html" class="dropdown-item">
                  <i class="fa fa-gear"> Settings</i>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a href="login.html" class="nav-link">
                <i class="fa fa-user-times"> Logout</i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1><i class="fa fa-gear"></i> Settings</h1>
          </div>
        </div>
      </div>
    </header>
    <!--ACTIONS BUTTONS-->

    <section id="action" class="py-4 mb-4 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-3 mr-auto">
            <a href="index.html" class="btn btn-light btn-block"
              ><i class="fa fa-arrow-left"></i> Back to dashboard</a
            >
          </div>
          <div class="col-md-3">
            <a href="#" class="btn btn-success btn-block"
              ><i class="fa fa-check"> Save Changes</i></a
            >
          </div>
        </div>
      </div>
    </section>

    <section id="settings">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h4>Edit Settings</h4>
              </div>
              <div class="card-body">
                <form>
                  <fieldset class="form-group">
                    <legend>Allow user Registration</legend>
                    <div class="form-check">
                      <label for="" class="form-check-label">
                        <input
                          type="radio"
                          name=""
                          id=""
                          class="form-check-input"
                          value="Yes"
                          checked
                        />
                        Yes
                      </label>
                    </div>
                    <div class="form-check">
                      <label for="" class="form-check-label">
                        <input
                          type="radio"
                          name=""
                          id=""
                          class="form-check-input"
                          value="No"
                          checked
                        />
                        No
                      </label>
                    </div>
                  </fieldset>
                  <fieldset class="form-group">
                    <legend>Home Page Formats</legend>
                    <div class="form-check">
                      <label for="" class="form-check-label">
                        <input
                          type="radio"
                          name=""
                          id=""
                          class="form-check-input"
                          value="post"
                          checked
                        />
                        Post Index
                      </label>
                    </div>
                    <div class="form-check">
                      <label for="" class="form-check-label">
                        <input
                          type="radio"
                          name=""
                          id=""
                          class="form-check-input"
                          value="single"
                          checked
                        />
                        Single Page
                      </label>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <p class="lead text-center">Copywright &copy; 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!--  Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="resources/js/script.js"></script>
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace("editor1");
    </script>
  </body>
</html>
