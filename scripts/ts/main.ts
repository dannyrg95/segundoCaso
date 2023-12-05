enum Especies {
    MAMIFEROS,
    AVES,
    REPTILES,
    ANFIBIOS,
    PECES,
    
}


interface TAnimal {
    especie: Especies;
}
interface AnimalJSON {
    especie: Especies;
    imagen: string,
    nombre: string
}


class Animal implements TAnimal {
    public especie!: Especies;
    private _imagen!: string;
    private nombre: string;

    constructor (especie: Especies, imagen: string, nombre: string) {
        this.especie = especie;
        this._imagen = imagen;
        this.nombre = nombre;
    }

    public getNombre():string {
        return this.nombre;
    }

    public getEspecie():Especies {
        return this.especie;
    }

    public getImagen():string {
        return this._imagen;
    }
}


async function request(animal: string):Promise<Array<AnimalJSON>> {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: "/leccion-11/api/rest/userApi.php",
            method: "POST",
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            data: "animales=1&especie=" + encodeURIComponent(animal)
        }).done(function(response) {
            resolve(JSON.parse(response));

        }).fail(function(error) {
            console.error("Error en la solicitud AJAX:", error);
            reject(error);
        });
    })
}
 


async function init(especie: keyof typeof Especies):Promise<void> {
    $(document).ready(() => {
        const animales: Array<Animal> = new Array<Animal>();

        $("#main-h1").text("Loading...")
        $(".blackout").show()

        setTimeout(async () => {
            const images: Array<string> = new Array<string>();

            const result: Array<AnimalJSON> = await request(especie);

            for (let i = 0; i < result.length; i++) {
                animales.push(new Animal(result[i].especie, result[i].imagen, result[i].nombre));
                images.push(result[i].imagen);
            }
            

            preload(images);
            let template: string = "";
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
                // const cardImg: HTMLImageElement = $("#card-1 .card-img-top").get(i) as HTMLImageElement;
                // cardImg.src = images[i];
            }
            console.log(template)

            $("#container").html(template);
            $("#main-h1").hide();
            $(".blackout").hide();
            // location.reload();
        }, 0)
    })

}


function preload(images: Array<string>):void {
    $.each(images, (index: number, image: string) => {
        const imageElement: HTMLImageElement = $("<img>").first() as any;
        imageElement.src = image;
    })
}