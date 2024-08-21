<?php 
$items = [
    [
        "name" => "HOTELS",
        "link" => "#hotels"

    ],
    [
        "name" => "RESTAURANTS",
        "link" => "#restaurants"

    ],
    /* [
        "name" => "BRUNCH & DESSERTS",
        "link" => "#brunchdesserts"

    ], */
    [
        "name" => "BARS & PUBS",
        "link" => "#barpubs"

    ],
    [
        "name" => "BOUTIQUES",
        "link" => "#boutiques"

    ],
    [
        "name" => "BEAUTY SALONS",
        "link" => "#beautysalons"

    ]
]
?>
<section class="sectionSantamarta">
    <img class="img-11" src="<?php echo IMG_BASE . 'img-11.png'; ?>" alt="">
    <img class="img-12" src="<?php echo IMG_BASE . 'img-12.webp'; ?>" alt="">
    <div class="sectionSantamarta__wrapper">
        <div class="sectionSantamarta__box">
            <h2 class="heading--122 color--A98417">Santa Marta</h2>
            <p class="heading--20 color--666">COLOMBIA</p>

            <div class="space space--30"></div>

            <p class="heading--20 color--666">
            We are very excited to celebrate our wedding in Santa Marta, the Pearl of America! As Colombia's oldest city, it welcomes everyone with its rich culture and diverse landscapes—from lush mountains to stunning beaches and the Sierra Nevada. Santa Marta offers a perfect blend of culture, history, and nature, making it a truly unique destination.
            </p>
            <div class="space space--19"></div>
            <p class="heading--20 color--666">
            Estamos muy emocionados de celebrar nuestra boda en Santa Marta, ¡La Perla de América! Como la ciudad más antigua de Colombia, da la bienvenida a todo el mundo con su rica cultura y diversos paisajes, desde exuberantes montañas hasta impresionantes playas y la Sierra Nevada. Santa Marta ofrece una mezcla perfecta de cultura, historia y naturaleza, lo que la convierte en un destino verdaderamente único.
            </p>
            
        </div>
        <ul>
            <?php foreach ($items as $key => $item) { ?>
                <li>
                    <a class="heading--40" href="/santamarta/<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>