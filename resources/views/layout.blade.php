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
                <a class="nav-link"href="{{ route ('home') }}">Home</a>
                <a class="nav-link" href="{{ route ('categoria') }}">Categoria</a>
                <a class="nav-link" href="{{ route ('cadastrar') }}">Cadastrar</a>
            </div>
        </div>
        <a href="{{ route('ver_carrinho')}}" class="btn btn-sm"><i class="fa fa-shopping-cart 5x"></i></a>
</nav>

    <div class="container"> 
        <div class="row">
            @yield("conteudo") 
        </div>
    </div>

</body>
</html>