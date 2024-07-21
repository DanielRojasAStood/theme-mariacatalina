<?php
$places = [
    [
        "img"  => "santamarta-1.png",
        "name" => "QUINTA DE SAN PEDRO ALEJANDRINA",
        "copy" => "The hacienda where the Liberator Simón Bolívar died on 17 December 1830. Surrounded by century-old trees, preserves some of the furnishings of the time and is home to the Bolivarian Museum of Contemporary Art."
    ],
    [
        "img"  => "santamarta-2.png",
        "name" => "PARQUE NACIONAL NATURAL TAYRONA",
        "copy" => "A place considered one of the most beautiful in the world by Condé Nast Traveler magazine and the British newspaper The Guardian. Walk on its white and soft sandy beaches, where the turquoise waves of the sea reach your feet creating a sense of peace and tranquillity."
    ],
    [
        "img"  => "santamarta-3.png",
        "name" => "PUEBLO Y PLAYAS DE TAGANGA",
        "copy" => "A fishing village located fifteen minutes north of Santa Marta in a bay surrounded by mountains, travellers can learn to dive at several certified centres. In the evenings it is possible to watch breathtaking sunsets over the sea."
    ],
    [
        "img"  => "santamarta-1.png",
        "name" => "QUINTA DE SAN PEDRO ALEJANDRINA",
        "copy" => "The hacienda where the Liberator Simón Bolívar died on 17 December 1830. Surrounded by century-old trees, preserves some of the furnishings of the time and is home to the Bolivarian Museum of Contemporary Art."
    ],
    [
        "img"  => "santamarta-2.png",
        "name" => "PARQUE NACIONAL NATURAL TAYRONA",
        "copy" => "A place considered one of the most beautiful in the world by Condé Nast Traveler magazine and the British newspaper The Guardian. Walk on its white and soft sandy beaches, where the turquoise waves of the sea reach your feet creating a sense of peace and tranquillity."
    ],
    [
        "img"  => "santamarta-3.png",
        "name" => "PUEBLO Y PLAYAS DE TAGANGA",
        "copy" => "A fishing village located fifteen minutes north of Santa Marta in a bay surrounded by mountains, travellers can learn to dive at several certified centres. In the evenings it is possible to watch breathtaking sunsets over the sea."
    ],
]
?>
<section class="sectionPlaces">
    <div class="sectionPlaces__wrapper">
        <div class="sectionPlaces__title">
            <h2 class="heading--122 color--A98417">Places to Visit</h2>
            <p class="heading--20 color--666">LUGARES PARA VISITAR</p>
            <div class="space space--44"></div>

            <div class="slickPlaces">
                <?php foreach ($places as $key => $place) { ?>
                    <div class="sectionPlaces__padding">
                        <div class="sectionPlaces__item">
                            <img src="<?php echo IMG_BASE . $place['img']; ?>" alt="">
                            <div class="sectionPlaces__info">
                                <h3 class="heading--20 color--4D4D4D"><?php echo $place['name']; ?></h3>
                                <p class="heading--14 color--666"><?php echo $place['copy']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>