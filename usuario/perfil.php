<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
      
        .modal{
            width: 300px;
        }
        .modal-content{
            width: 300px;
        }
    </style>
</head>

<body>
    <nav class="navbar shadow" style="background-color: #304B47;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="assets/img/maozinha.png" class="img-fluid float-start rounded mx-auto d-block " width="10%" alt="">
            <h1 class="text-white">HelpHand</h1></img>
          </button>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> 
        </div>
      </nav>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">MENU</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
          
  <div class="container overflow-hidden text-center " style="padding: 10%" >
    <div class="row gx-5" >
      <div class="col">
       <div style=" height: 65%; width: 60%; border: 1px solid black; border-radius: 100%;">
      <img src="img/user 1.png" style="height: 100%; width: 100%;">
      </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Cadastrar Produto</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Tipo produto</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
      </div>
    </div>
  </div>
</body>
</html>