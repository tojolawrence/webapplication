<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Carousel.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Student</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="web.php">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>    
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-lg-12 col-xl-12 col-xxl-12"> 
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img height="500" width="150" src="https://pbs.twimg.com/profile_images/1294626103533826048/m0BsTO0B.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="500" width="200" src="https://www.instagram.com/p/CERlBV4F1of/" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://s3.ap-southeast-1.amazonaws.com/images.deccanchronicle.com/dc-Cover-bsnudco08r3igtj44duecnr7m4-20180203230738.Medi.jpeg" class="d-block w-100" alt="...">    
                    </div>
                    <div class="carousel-item">
                        <img src="https://miro.medium.com/proxy/1*VWK_hk_UuSsksK0ao_xMUQ.jpeg" class="d-block w-100" alt="...">    
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.newindianexpress.com/uploads/user/imagelibrary/2018/10/8/w600X390/Fahad_Fazil.jpg" class="d-block w-100" alt="...">    
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.thenewsminute.com/sites/default/files/styles/news_detail/public/mohanlal_0001_750.jpg?itok=A_IGwfvO" class="d-block w-100" alt="...">    
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-lg-6 col-xl-6 col-xxl-6"> 
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Roll-No</td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Admission No</td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>college</td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td><input type="password" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Conform password</td>
                                <td><input type="password" class="form-control"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="btn btn-success">submit</button></td>
                            </tr>
                        </table>
                    </div>

 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>   
</body>
</html>