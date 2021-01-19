<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
    <a href="#" class="navbar-brand"> MyShop </a>
        <div class="collapse navbar-collapse">
             <div class="navbar-nav">
                <a class="nav-link"href="#">Home</a>
                <a class="nav-link" href="#">Categoria</a>
                <a class="nav-link" href="#">Cadastrar</a>
            </div>
        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
</nav>

    <div class="container"> 
        <div class="row">
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto1.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 1</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images\produto2.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 2</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images\produto3.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 3</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images\produto4.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 4</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images\produto5.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 5</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images\produto6.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 6</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>