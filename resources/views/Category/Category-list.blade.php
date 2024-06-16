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
  
    <div class="container my-5">
  <div class="d-flex justify-content-between mb-3">
    <h4>hello</h4>
    <a href="/category/Create" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add</a>
  </div>
  <table class="table table-hover table-striped table-bordered">
    <thead>
      <tr>
        <th width="50px" class="text-center">#</th>
        <th class="text-center">Name</th>
        <th class="text-center">Image</th>
        <th width="200px" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="align-middle text-center">1</td>
        <td class="align-middle text-center">Water</td>
        <td class="text-center">
          <img width="40px" src="https://via.placeholder.com/150" alt="Water" class="img-thumbnail">
        </td>
        <td class="align-middle text-center">
          <a href="#" class="btn btn-primary btn-sm border"><i class="bi bi-pencil-square"></i> Edit</a>
          <a href="#" class="btn btn-danger btn-sm border"><i class="bi bi-trash3-fill"></i> Delete</a>
        </td>
      </tr>
      <tr>
        <td class="align-middle text-center">2</td>
        <td class="align-middle text-center">Food</td>
        <td class="text-center">
          <img width="40px" src="https://via.placeholder.com/150" alt="Food" class="img-thumbnail">
        </td>
        <td class="align-middle text-center">
          <a href="#" class="btn btn-primary btn-sm border"><i class="bi bi-pencil-square"></i> Edit</a>
          <a href="#" class="btn btn-danger btn-sm border"><i class="bi bi-trash3-fill"></i> Delete</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>