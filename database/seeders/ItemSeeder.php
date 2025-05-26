<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formas = [
            "Comerse un cactus por curiosidad",
            "Tocar el enchufe con los dientes",
            "Jugar escondidas en una lavadora",
            "Correr con tijeras abiertas y tropezar",
            "Picar un panal de abejas con un palo",
            "Usar dinamita como vela de cumpleaños",
            "Tomar cloro creyendo que era sprite",
            "Dormir en medio de una autopista",
            "Pelar cables con los dientes mojados",
            "Gritarle a un oso por robar tu sandwich",
            "Hacer parkour en un techo de cartón",
            "Meter la cabeza en la boca de un león",
            "Usar un microondas como casco",
            "Saltar a una piscina sin agua",
            "Trollear a un ninja real por internet",
            "Hacer burpees en un campo minado",
            "Probar si los cuchillos rebotan",
            "Jugar piedra papel tijeras con una motosierra",
            "Tener una batalla de espadas... con rayos",
            "Usar un paraguas en una tormenta eléctrica",
            "Conectar tu cargador con la lengua",
            "Competir con una cabra montañesa",
            "Ir a cazar cocodrilos sin pantalones",
            "Hacer un TikTok colgado del tren",
            "Gritar 'soy invencible' y correr al tráfico",
            "Jugar Twister con cables eléctricos",
            "Correr con un rastrillo como zancos",
            "Saltar sobre una cama llena de clavos",
            "Beber lava como si fuera sopa",
            "Ponerse a bailar en una zona de tiro",
            "Trollear a Thor con una varilla de metal",
            "Probar si un horno puede tostarte a ti",
            "Encender fuegos artificiales... en tu bolsillo",
            "Intentar asar malvaviscos en un volcán",
            "Competir a ver quién respira más humo",
            "Tener un duelo de pistolas de verdad",
            "Entrar a una jaula de tigres enojados",
            "Practicar apnea en concreto",
            "Usar una turbina como secador de pelo",
            "Pintar una mina terrestre como carita feliz",
            "Saltar la cuerda con alambre de púas",
            "Jugar con gasolina cerca del asador",
            "Meter la mano en una trituradora por error",
            "Esquiar con sandalias por la montaña",
            "Lanzarse en trineo por una pista de aterrizaje",
            "Tocar la bocina en un barrio peligroso",
            "Usar un cinturón de explosivos como accesorio",
            "Lamer un poste en Siberia con la lengua",
            "Meterse en una licuadora para un reto viral"
        ];

        foreach ($formas as $i => $texto) {
            Item::create([
                'title' => "Forma tonta #".($i + 1),
                'description' => $texto,
                'image' => "https://via.placeholder.com/300x200?text=Muerte+".($i + 1),
                'tags' => "humor,fail,muerte"
            ]);
        }
    }
}
