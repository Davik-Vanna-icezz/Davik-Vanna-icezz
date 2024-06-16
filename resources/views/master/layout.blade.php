<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Icezz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .navbar-brand img {
            margin-right: 0.5rem;
        }
        .card-img {
            object-fit: cover;
            height: 350px;
        }
        .e{
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/image/logo1.png" alt="Logo" width="40" height="40" class="d-inline-block align-top">
                Super Icezz
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/category">Media</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Details</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="container my-5 d-flex justify-content-center">
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="bg-light border h-100 d-flex flex-column justify-content-center p-3 rounded">
                <h5>150</h5>
                <p>New Order</p>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-light border h-100 d-flex flex-column justify-content-center p-3 rounded">
                <h5>53%</h5>
                <p>Bounce Rate</p>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-light border h-100 d-flex flex-column justify-content-center p-3 rounded">
                <h5>Rectangle 3</h5>
                <p>This is the third rectangle.</p>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-light border h-100 d-flex flex-column justify-content-center p-3 rounded">
                <h5>Rectangle 4</h5>
                <p>This is the fourth rectangle.</p>
            </div>
        </div>
    </div>
</div> -->
<br>

<main class="container">
  <div class="row">
          <h2>Dashboard</h2>
  </div>
        <div class="row">
            <div class="col-6 col-lg-3 mb-3">
                <div class="bg-primary text-white p-3 rounded">
                      <h1>150</h1>
                      <p>Total User</p>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3">
                <div class="bg-success text-white p-3 rounded">
                      <h1>10</h1>
                      <p>Total Category</p>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3">
                <div class="bg-warning  p-3 rounded">
                      <h1>100</h1>
                      <p>Total Product</p>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3">
                <div class="bg-danger text-white p-3 rounded">
                      <h1>300</h1>
                      <p>Total Oder</p>
                </div>
            </div>
        </div>
        

</main>
</body>
</html>