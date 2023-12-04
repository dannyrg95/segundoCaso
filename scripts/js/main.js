"use strict";
var Especies;
(function (Especies) {
    Especies[Especies["MAMIFEROS"] = 0] = "MAMIFEROS";
    Especies[Especies["AVES"] = 1] = "AVES";
    Especies[Especies["REPTILES"] = 2] = "REPTILES";
    Especies[Especies["ANFIBIOS"] = 3] = "ANFIBIOS";
    Especies[Especies["PECES"] = 4] = "PECES";
})(Especies || (Especies = {}));
class Animal {
    Animal(especie, imagen) {
        this.especie = especie;
        this._imagen = imagen;
    }
}
const animales = new Array();
function init() {
    $(document).ready(() => {
        $("#main-h1").text("Loading...");
        $(".blackout").show();
        setTimeout(() => {
            const images = new Array();
            images.push("/leccion-11/images/people/people-icon-1.png");
            images.push("/leccion-11/images/people/people-icon-2.png");
            preload(images);
            const cardImg = $("#card-1 .card-img-top").get(0);
            cardImg.src = "/leccion-11/images/animales/iguana.png";
            $("#main-h1").text("Loaded");
            $(".blackout").hide();
        }, 3000);
    });
}
function preload(images) {
    $.each(images, (index, image) => {
        const imageElement = $("<img>").first();
        imageElement.src = image;
    });
}
//# sourceMappingURL=main.js.map