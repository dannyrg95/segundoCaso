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
                <button onclick="init('MAMIFEROS')">Mamifero</button>
            </li>
            <li class="item-animal">
                <button onclick="init('PECES')">Pez</button>
            </li>
            <li class="item-animal">
                <button onclick="init('AVES')">Ave</button>
            </li>
            <li class="item-animal">
                <button onclick="init('REPTILES')">Reptiles</button>
            </li>
            <li class="item-animal">
                <button onclick="init('ANFIBIOS')">Anfibios</button>
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
            <div class="col-6" id="container">
            </div>
        </div>
    </div>
</body>
<script>
    init("ANFIBIOS")
</script>
</html>