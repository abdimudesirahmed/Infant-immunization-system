<!DOCTYPE html>
<html lang="En">
  <script src="script.min.js"></script>
  <link rel="stylesheet" href="pstyle.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,400;1,600&display=swap"
    rel="stylesheet"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300;1,400;1,600&family=Raleway:wght@500;600;800&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
    integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm"
    crossorigin="anonymous"
  />
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>Home page</title>
    <style>
      * {
  font-family: Poppins;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  color: black;
  scroll-behavior: smooth;
}
      body {
  background-image: url(f.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.all {
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  padding: 0px 10% 0;
  justify-content: space-between;
}
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;

  z-index: -1;
  pointer-events: none;
}
      .firstp {
  color: white;
  margin-right: 300px;
  max-width: 600px;
  justify-content: flex-start;
  padding: 10px;
  position: absolute;
  left: 140px;
  top: 200px;
}
      .firstp h1 {
  font-size: 54px;
  font-weight: 700;
}
.paragraph {
  padding: 15px 0;
  font-size: 18px;
}
      .picture {
  display: inline-flex;
  width: 400px;
  height: 400px;
  background-image: gray;
}

      .glowing-circle {
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 50%;
  background-image: red;
}
.image {
  width: 380px;
  height: 400px;
  border-radius: 50%;
}
    </style>
  </head>
  <body>
    <nav>
      <a href="index.html">Back</a>
    </nav>
    <section class="all">  
          <div class="firstp">        
              <h1><strong>Admin Info</strong></h1> 
              <p class="paragraph">
              Name: 
              </br>
              Age:
            </br>
              Sex:
            </br>
              Profession:
            </br>
              Role in Seto Semero Kebele health center:
              </p>
               
              <div class="links">   
                <a href=mailto:“hermela.hailegiorgis@gmail.com">Email</a>            
              </div>    
            </p>       
          </div>
          <div class="picture">
      <div class="glowing-circle">
       <img class="image" src="photo.jpg" alt="insert a photo here">
      </div>
          </section>
  </body>
</html>
