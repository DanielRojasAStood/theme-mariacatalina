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
    [
        "name" => "BRUNCH & DESSERTS",
        "link" => "#brunch-desserts"

    ],
    [
        "name" => "BARS & PUBS",
        "link" => "#bars-pubs"

    ],
    [
        "name" => "BOUTIQUES",
        "link" => "#boutiques"

    ],
    [
        "name" => "BEAUTY SALONS",
        "link" => "#beauty-salons"

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
            We are very excited to celebrate our wedding in Santa Marta, the Pearl of America! This historic city, founded in 1525, is the oldest in the country and stands out for its diversity in landscape, people and culture, making all visitors feel at home.
            </p>
            <div class="space space--19"></div>
            <p class="heading--20 color--666">
            Santa Marta is unique for its unforgettable landscapes: the green vegetation, the mountains, the blue sea, the yellow sun and the beaches that contrast with the white Sierra Nevada. The city offers activities for everyone, from beaches that merge with the jungle to bird watching and exploring Tayrona colonial treasures.
            </p>
            <div class="space space--19"></div>
            <p class="heading--20 color--666">
            Santa Marta combines culture, history and nature in one place.
            </p>
        </div>
        <ul>
            <?php foreach ($items as $key => $item) { ?>
                <li>
                    <a class="heading--40" href="/<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>