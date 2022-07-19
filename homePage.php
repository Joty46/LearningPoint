<?php
$conn = mysqli_connect("localhost", "root", "", "web");
session_start();
$findweb="select * from courses where coursename='Web';";
$findds="select * from courses where coursename='Data Structure';";
$findalgo="select * from courses where coursename='Algorithm Analysis';";
$findoop="select * from courses where coursename='Object Oriented Programming';";
$findandr="select * from courses where coursename='Android Development';";
$findpython="select * from courses where coursename='Python';";
$queryweb=mysqli_query($conn,$findweb);
$queryds=mysqli_query($conn,$findds);
$queryalgo=mysqli_query($conn,$findalgo);
$queryoop=mysqli_query($conn,$findoop);
$queryandr=mysqli_query($conn,$findandr);
$querypython=mysqli_query($conn,$findpython);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>my project</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/31a20b87d9.js" crossorigin="anonymous"></script>
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
                              <a class="nav-link active" href="#aboutus">About Us</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" href="signIn.php">Sign In</a>
                          </li>
  
                      </ul>
                  </div>
              </div>
          </nav>
          <div class="homepageDes">
            <h1 class="hforhome">Get The Best</h1>
            <p class="pforhome">Get the best and Easiest way to learn things.We will try to be your best partner.</p>
            </div>
          </div>
            
        </div> 
        
        <div class="detaileddes">
          <div class="headForDes"><h1>Our Categories</h1></div>
          <div class="row">
            <div class="col-md-4 ">
              <div class="card mb-4 text-white bg-dark">
                 <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
                 <div class="card-body">
                    <h5 class="card-title">WEB </h5>
                    <p class="card-text">Learn everything about web development</p>
                    <h3><?php echo mysqli_num_rows($queryweb); ?>  Topics</h3>
                    <a href="http://localhost/LearningPoint/webtopics.php?role=Web" class="btn btn-outline-light btn-sm web"> Learn Detail</a>
                 </div>
              </div>
           </div>
           <div class="col-md-4">
            <div class="card mb-4 text-white bg-dark">
               <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
               <div class="card-body">
                  <h5 class="card-title">Data Structure
                  </h5>
                  <p class="card-text">Learn Easily about Data Structure</p>
                  <h3><?php echo mysqli_num_rows($queryds); ?> Topics</h3>
                  <a href="http://localhost/LearningPoint/webtopics.php?role=Data Structure" class="btn btn-outline-light btn-sm ds">Learn Detail</a>
               </div>
            </div>
         </div>
         <div class="col-md-4 ">
          <div class="card mb-4 text-white bg-dark">
             <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
             <div class="card-body">
                <h5 class="card-title">Algorithm Analysis
                </h5>
                <p class="card-text">Learn Algorithm easily</p>
                <h3><?php echo mysqli_num_rows($queryalgo); ?> Topics</h3>
                <a href="http://localhost/LearningPoint/webtopics.php?role=Algorithm Analysis" class="btn btn-outline-light btn-sm" id="aa">Learn Detail</a>
             </div>
          </div>
         </div>
         <div class="col-md-4 ">
          <div class="card mb-4 text-white bg-dark">
             <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
             <div class="card-body">
                <h5 class="card-title">Object Oriented Programming
                </h5>
                <p class="card-text">Learn Object oriented programming from basic.</p>
                <h3><?php echo mysqli_num_rows($queryoop); ?> Topics</h3>
                <a href="http://localhost/LearningPoint/webtopics.php?role=Object Oriented Programming" class="btn btn-outline-light btn-sm" id="oop">Learn Detail</a>
             </div>
          </div>
         </div>
         <div class="col-md-4 ">
          <div class="card mb-4 text-white bg-dark">
             <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
             <div class="card-body">
                <h5 class="card-title">Android Development
                </h5>
                <p class="card-text">Become a android developer easily.</p>
                <h3><?php echo mysqli_num_rows($queryandr); ?> Topics</h3>
                <a href="http://localhost/LearningPoint/webtopics.php?role=Android Development" class="btn btn-outline-light btn-sm" id="ad">Learn Detail</a>
             </div>
          </div>
         </div>
         <div class="col-md-4 ">
          <div class="card mb-4 text-white bg-dark">
             <img class="card-img-top" src="cardForHome.png" alt="Card image cap" width="100%" height="225">
             <div class="card-body">
                <h5 class="card-title">Python
                </h5>
                <p class="card-text"> Learn Python</p>
                <h3><?php echo mysqli_num_rows($querypython); ?> Topics</h3>
                <a href="http://localhost/LearningPoint/webtopics.php?role=Python" class="btn btn-outline-light btn-sm" id="py">Learn Detail</a>
             </div>
          </div>
         </div>
          
         </div>
       </div>
       <div id="aboutus">
            <section id="footer">
               <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li class="list-inline-item"><a href="https://github.com/Joty46"><i class="fa-brands fa-github"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa-brands fa-linkedin"></i></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                 <li class="list-inline-item"><a href="taslimajoty14@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
                           </ul>
                        </div>
                        <hr>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                           <p><u><a href="homePage.php">Learning Point</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                           <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
                        </div>
                        <hr>
                     </div>
               </div>
            </section>
         </div>
    </body>
</html>