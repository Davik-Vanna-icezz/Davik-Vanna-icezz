<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Icezz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
  
<main class="container">
    <div class="row">
        <div class="col">
            <h2>Add Category</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="email" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Image</label>
                    <input class="form-control" type="file" id="img">
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Note</label>
                    <textarea class="form-control" id="note" rows="3"></textarea>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    <a href="/category" type="button" class="btn btn-secondary mb-3">Cancel</a>
                </div>
            </form>
        </div>
    </div>


</main>
</body>
</html>
