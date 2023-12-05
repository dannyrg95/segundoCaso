"use strict";
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
var Especies;
(function (Especies) {
    Especies[Especies["MAMIFEROS"] = 0] = "MAMIFEROS";
    Especies[Especies["AVES"] = 1] = "AVES";
    Especies[Especies["REPTILES"] = 2] = "REPTILES";
    Especies[Especies["ANFIBIOS"] = 3] = "ANFIBIOS";
    Especies[Especies["PECES"] = 4] = "PECES";
})(Especies || (Especies = {}));
class Animal {
    constructor(especie, imagen, nombre) {
        this.especie = especie;
        this._imagen = imagen;
        this.nombre = nombre;
    }
    getNombre() {
        return this.nombre;
    }
    getEspecie() {
        return this.especie;
    }
    getImagen() {
        return this._imagen;
    }
}
function request(animal) {
    return __awaiter(this, void 0, void 0, function* () {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "/leccion-11/api/rest/userApi.php",
                method: "POST",
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                data: "animales=1&especie=" + encodeURIComponent(animal)
            }).done(function (response) {
                resolve(JSON.parse(response));
            }).fail(function (error) {
                console.error("Error en la solicitud AJAX:", error);
                reject(error);
            });
        });
    });
}
function init(especie) {
    return __awaiter(this, void 0, void 0, function* () {
        $(document).ready(() => {
            const animales = new Array();
            $("#main-h1").text("Loading...");
            $(".blackout").show();
            setTimeout(() => __awaiter(this, void 0, void 0, function* () {
                const images = new Array();
                const result = yield request(especie);
                for (let i = 0; i < result.length; i++) {
                    animales.push(new Animal(result[i].especie, result[i].imagen, result[i].nombre));
                    images.push(result[i].imagen);
                }
                preload(images);
                let template = "";
                for (let i = 0; i < animales.length; i++) {
                    template += `
                <div id="card-1" class="card">
                    <img class="card-img-top" alt="" src="${images[i]}">
                    <div class="card-body"></div>
                    <div class="card-title">
                        ${animales[i].getNombre()}
                    </div>
                    <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit a magni officiis dolore deleniti? Modi, vel? Rem delectus perferendis quos dolorum? Saepe quo numquam ratione ipsa provident impedit vitae maxime.
                    </div>
                </div>`;
                }
                console.log(template);
                $("#container").html(template);
                $("#main-h1").hide();
                $(".blackout").hide();
            }), 0);
        });
    });
}
function preload(images) {
    $.each(images, (index, image) => {
        const imageElement = $("<img>").first();
        imageElement.src = image;
    });
}
//# sourceMappingURL=main.js.map