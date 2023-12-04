enum Especies {
    MAMIFEROS,
    AVES,
    REPTILES,
    ANFIBIOS,
    PECES
}


interface TAnimal {
    especie: Especies;
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



const animales: Array<Animal> = new Array<Animal>();

function init():void {
    $(document).ready(() => {
        $("#main-h1").text("Loading...")
        $(".blackout").show()
        
        setTimeout(() => {
            const images: Array<string> = new Array<string>();
            const type:string = "";
            const imageName:string = "";
            const especie:Especies = Especies.ANFIBIOS;

            //Hacer los if's para los tipos de animales y traer los datos de la base de datos
            for (let i = 0; i < 6; i++) {
                animales.push(new Animal(especie, `/leccion-11/images/animales/${type}/${imageName}-${i + 1}`, "algo"));
                images.push(`/leccion-11/images/animales/${type}/${imageName}-${i + 1}`);
            }
            
            preload(images);
            

            for (let i = 0; i < 6; i++) {
                const template:string = `
                <div id="card-1" class="card">
                    <img class="card-img-top" alt="" src="${images[i]}">
                    <div class="card-body"></div>
                    <div class="card-title">
                        
                    </div>
                    <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit a magni officiis dolore deleniti? Modi, vel? Rem delectus perferendis quos dolorum? Saepe quo numquam ratione ipsa provident impedit vitae maxime.
                    </div>
                </div>`;
                // const cardImg: HTMLImageElement = $("#card-1 .card-img-top").get(i) as HTMLImageElement;
                // cardImg.src = images[i];
            }
            
            $("#main-h1").text("Loaded");
            $(".blackout").hide();
        }, 0)
    })

}


function preload(images: Array<string>):void {
    $.each(images, (index: number, image: string) => {
        const imageElement: HTMLImageElement = $("<img>").first() as any;
        imageElement.src = image;
    })
}