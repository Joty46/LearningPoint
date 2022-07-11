<?php
$conn = mysqli_connect("localhost", "root", "", "web");
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>my project</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
      </head>
    <body>
        <div class="homepage">
            <img id ="hpm" src="homePageImage.jpg" alt="No">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container-fluid">
                  <div class="title">
                      <a class="navbar-brand" href="#">Learning Point</a>
                  </div>
  
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#togglePart" aria-controls="togglePart" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
  
                  <div class="collapse navbar-collapse" id="togglePart">
                      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                              <a class="nav-link active" href="homePage.html">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" href="aboutUs.html">About Us</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" href="edit.html">Edit</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" href="upload.html">Upload</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" href="http://localhost/LearningPoint/logout.php">Logout</a>
                          </li>
  
                      </ul>
                  </div>
              </div>
          </nav>
          <div class="homepageDes">
            <h1 class="hforhome">Welcome ,<?php echo strtoupper($username) ?> !</h1>
            <p class="pforhome">Get the best and Easiest way to learn things.We will try to be your best partner.</p>
            </div>
          </div>
            
        </div> 
        
        <div class="detaileddes">
          <div class="headForDes"><h1>Our Catagories</h1></div>
          <div class="row">
            <div class="col-md-4 ">
              <div class="card mb-4 text-white bg-dark">
                 <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
                 <div class="card-body">
                    <h5 class="card-title">WEB</h5>
                    <p class="card-text">Learn everything about web development</p>
                    <h3>75 Courses</h3>
                    <a href="" class="btn btn-outline-light btn-sm">Learn Detail</a>
                 </div>
              </div>
           </div>
           <div class="col-md-4">
            <div class="card mb-4 text-white bg-dark">
               <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
               <div class="card-body">
                  <h5 class="card-title">Data Structure</h5>
                  <p class="card-text">Learn Easily about Data Structure</p>
                  <h3>35 Courses</h3>
                  <a href="" class="btn btn-outline-light btn-sm">Learn Detail</a>
               </div>
            </div>
         </div>
         <div class="col-md-4 ">
          <div class="card mb-4 text-white bg-dark">
             <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
             <div class="card-body">
                <h5 class="card-title">Algorithm Analysis</h5>
                <p class="card-text">Learn Algorithm easily</p>
                <h3>23 Courese</h3>
                <a href="" class="btn btn-outline-light btn-sm">Learn Detail</a>
             </div>
          </div>
         </div>
         <div class="col-md-4 ">
          <div class="card mb-4 text-white bg-dark">
             <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
             <div class="card-body">
                <h5 class="card-title">Object oriented programming</h5>
                <p class="card-text">Learn Object oriented programming from basic.</p>
                <h3>40 Courses</h3>
                <a href="" class="btn btn-outline-light btn-sm">Learn Detail</a>
             </div>
          </div>
         </div>
         <div class="col-md-4 ">
          <div class="card mb-4 text-white bg-dark">
             <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
             <div class="card-body">
                <h5 class="card-title">Android development</h5>
                <p class="card-text">Become a android developer easily.</p>
                <h3>43 Courses</h3>
                <a href="" class="btn btn-outline-light btn-sm">Learn Detail</a>
             </div>
          </div>
         </div>
         <div class="col-md-4 ">
          <div class="card mb-4 text-white bg-dark">
             <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
             <div class="card-body">
                <h5 class="card-title">Python</h5>
                <p class="card-text"> Learn Python</p>
                <h3>45 Courses</h3>
                <a href="" class="btn btn-outline-light btn-sm">Learn Detail</a>
             </div>
          </div>
         </div>
          
         </div>
       </div>
    </body>
</html>