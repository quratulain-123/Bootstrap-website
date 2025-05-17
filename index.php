<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Web Page With Bootstrap</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
    <div class="row">
			<div class="col-12 px-0">
				<nav class="navbar navbar-expand-lg bg-dark-subtle shadow py-3">
				  <div class="container-fluid">
				    <a class="navbar-brand fs-2" href="#">Design Studio</a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="#">Home</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#">About Us</a>
				        </li>
				        <li class="nav-item dropdown">
				          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				            Landing
				          </a>
				          <ul class="dropdown-menu">
				            <li><a class="dropdown-item" href="#">Action</a></li>
				            <li><a class="dropdown-item" href="#">Another action</a></li>
				            <li><hr class="dropdown-divider"></li>
				            <li><a class="dropdown-item" href="#">Something else here</a></li>
				          </ul>
				        </li>
				      </ul>
				      <form class="d-flex" role="search">
				        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				        <button class="btn btn-outline-success" type="submit">Search</button>
				      </form>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
    <div class="row">
        <div class="col-12 px-0">
        <div class="card text-bg-dark">
        <img src="images/1.png" class="card-img img-fluid" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title fw-bolder">Design Studio</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
         </div>
        </div>
    </div>
    <div class="row">
        <h1 class="text-center my-3">Why Choose Us</h1>
        <hr>
        <div class="col-sm-4">
          <h3 class="align-left mx-3"> Expertise</h3> 
          <p class="align-left mx-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
        </div>
        <div class="col-sm-4">
        <h3 class="align-left mx-3">Experience</h3> 
        <p class="align-left mx-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
        </div>
        <div class="col-sm-4">
        <h3 class="align-left mx-3">Quality of products</h3> 
        <p class="align-left mx-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
        </div>
        </div>
        <div class="row mx-auto">
        <h1 class="text-center my-3">Project Portfolio</h1>
        <hr>
            <div class="col-sm-4 my-2">
            <div class="card" style="width: 20rem;">
              <img src="images/2.png" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h3 class="card-text">Cofee Shop<h3>
              </div>
            </div>
            </div>
            <div class="col-sm-4 col-md-4 my-2">
            <div class="card" style="width: 20rem;">
            <img src="images/3.png" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h3 class="card-text">Residential</h3>
            </div>
          </div>
            </div>
            <div class="col-sm-4 col-md-4 my-2">
            <div class="card" style="width: 20rem;">
           <img src="images/4.png" class="card-img-top img-fluid" alt="...">
           <div class="card-body">
              <h3 class="card-text">Tea House</h3>
           </div>
         </div>
            </div>
        </div>
        <div class="row mx-auto">
        <h1 class="text-center my-3">Our Amazing Team</h1>
        <hr>
            <div class="col-sm-4 col-md-4 my-2">
            <div class="card" style="width: 20rem;">
              <img src="images/5.png" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h3 class="card-text text-center">Nat Reynolds<h3>
                <p class="card-text text-center fs-5 fw-bolder">Worldwide Partner</p>   
              </div>
            </div>
            </div>
            <div class="col-sm-4 my-2">
            <div class="card" style="width: 20rem;">
            <img src="images/6.png" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h3 class="card-text text-center">Jennei Roberts</h3>
              <p class="card-text text-center fs-5 fw-bolder">Partner</p>  
            </div>
          </div>
            </div>
            <div class="col-sm-4 my-2">
            <div class="card" style="width: 20rem;">
           <img src="images/7.png" class="card-img-top img-fluid" alt="...">
           <div class="card-body">
              <h3 class="card-text text-center">Mila Parker</h3>
              <p class="card-text text-center fs-5 fw-bolder"> Partner</p>  
           </div>
         </div>
            </div>
        </div>
         <div class="row">
         <div id="carouselExampleFade" class="carousel slide carousel-fade">
           <div class="carousel-inner rounded my-3">
             <div class="carousel-item active">
               <img src="images/8.png" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
               <img src="images/9.png" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
               <img src="images/10.png" class="d-block w-100" alt="...">
             </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
            </div>
         </div>
         <div class="row shadow p-2 rounded bg-primary-subtle">
            <h1 class="text-center">Contact Us</h1>
            <p class="text-md-center text-center">Any questions or remarks? Just write us a message!</p>
         <form>
           <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Email address</label>
             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
           <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Password</label>
             <input type="password" class="form-control" id="exampleInputPassword1">
           </div>
           <button type="submit" class="btn btn-info col-sm-12 w-100 mx-auto">Submit</button>
         </form>
         </div>
          <div class="row mt-2">
            <div class="col-12 bg-dark-subtle py-3">                
              <p class="text-dark text-center">&copy; 2025 DesignStudio. All rights reserved.</p>
            </div>
              <!-- Footer -->
          </div>
    </div>

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>