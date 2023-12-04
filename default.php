<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/forms.css">
    <link rel="stylesheet" href="styles/animales.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="scripts/js/main.js"></script>
</head>
<body>
    <header class="header-animal">
        <ul class="list-items-animal">
            <li class="item-animal">
                <a href="">Mamifero</a>
            </li>
            <li class="item-animal">
                <a href="">Pez</a>
            </li>
            <li class="item-animal">
                <a href="">Ave</a>
            </li>
            <li class="item-animal">
                <a href="">Reptiles</a>
            </li>
            <li class="item-animal">
                <a href="">Anfibios</a>
            </li>
        </ul>
    </header>

    <div class="blackout"></div>

    <div class="container" style="width: 100%, margin: 5px">
        <div class="row">
            <div class="col-12">
                <h1 id="main-h1">...</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div id="card-1" class="card">
                    <img class="card-img-top" alt="">
                    <div class="card-body"></div>
                    <div class="card-title">
                        Iguana
                    </div>
                    <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit a magni officiis dolore deleniti? Modi, vel? Rem delectus perferendis quos dolorum? Saepe quo numquam ratione ipsa provident impedit vitae maxime.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card"></div>
            </div>
        </div>
    </div>
    <script>
        init()
    </script>
</body>
</html>