<?php 
function formatCategoryId($category) {
    // Reemplaza guiones bajos por guiones y convierte a minúsculas
    $formatted = strtolower(str_replace(' ', '', $category));
    $formatted = preg_replace('/[^a-z0-9-]/', '', $formatted);
    return $formatted;
}

$places = [
    "HOTELS" => [
        [
            "img" => "hotel-1.png",
            "name" => "Hotel Marriott Playa Dormida",
            "address" => "Cra. 3 No 142 - 60",
            "location" => "Bello Horizonte, Santa Marta",
            "phone" => "57 605 4410000",
            "instagram" => "https://www.instagram.com/santamarta.marriott/"
        ],
        [
            "img" => "hotel-2.png",
            "name" => "Hotel Zuana Beach Resort",
            "address" => "Cra. 2 # 6 - 80",
            "location" => "Bello Horizonte, Santa Marta",
            "phone" => "57 605 4380011",
            "instagram" => "https://www.zuana.com"
        ],
        [
            "img" => "hotel-3.png",
            "name" => "Mercure Santa Marta Emule",
            "address" => "Calle 115 # 2 - 39",
            "location" => "Bello Horizonte, Santa Marta",
            "phone" => "57 605 4368484",
            "instagram" => "https://www.instagram.com/mercuresantamarta/"
        ],
        [
            "img" => "hotel-4.jpg",
            "name" => "GHL Relax Hotel Kosta Azul",
            "address" => "Km. 19 vía Santa Marta",
            "location" => "Ciénaga, Santa Marta",
            "phone" => "57 605 4237074",
            "instagram" => "https://www.ghlhoteles.com/hoteles/colombia/santa-marta/ghl-relax-costa-azul/"
        ],
        [
            "img" => "hotel-5.jpg",
            "name" => "Hotel Santorini Casa Blanca",
            "address" => "Km. 17 vía Santa Marta",
            "location" => "Ciénaga, Santa Marta",
            "phone" => "57 605 4329400",
            "instagram" => "https://hotelsantorini.com.co/hotel-santorini-casablanca/"
        ],
        [
            "img" => "hotel-6.jpg",
            "name" => "Decameron Galeón",
            "address" => "Km 17, vía Ciénaga",
            "location" => "Santa Marta, Colombia",
            "phone" => "57 605 4237200",
            "instagram" => "https://www.decameron.com/es/ec-destinos/colombia/santa-marta/decameron-galeon"
        ]
    ],

    "RESTAURANTS" => [
        [
            "img" => "restaurant-1.png",
            "name" => "Serena Tropical Bistro",
            "address" => "Cra. 1 # 22 - 93",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 310 6981568",
            "instagram" => "https://www.instagram.com/serenabistro/"
        ],
        [
            "img" => "restaurant-2.png",
            "name" => "Caribbean Team",
            "address" => "Cra. 1C # 20 - 134",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 301 3307788",
            "instagram" => "https://www.instagram.com/caribbeanteam/"
        ],
        [
            "img" => "restaurant-3.png",
            "name" => "Agua de Rio Café Bistro",
            "address" => "Cra. 2 # 16 - 47",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 3145159599",
            "instagram" => "https://www.instagram.com/aguaderio_smr/"
        ],
        [
            "img" => "restaurant-4.jpeg",
            "name" => "Casa Magdalena",
            "address" => "Calle 17 # 2 - 09",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 3145096244",
            "instagram" => "https://www.instagram.com/casamagdalena_smr/"
        ],
        [
            "img" => "restaurant-5.jpg",
            "name" => "Holguer Pizza",
            "address" => "Calle 19 # 3 - 07",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 3013163135",
            "instagram" => "https://holguerpizza.com"
        ],
        [
            "img" => "restaurant-6.jpeg",
            "name" => "Lulo Café Bar",
            "address" => "Cra. 3 # 16 - 34",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 3204768870",
            "instagram" => "https://www.instagram.com/lulocafebar/"
        ],
        [
            "img" => "restaurant-7.jpeg",
            "name" => "Porthos Steakhouse & Pub",
            "address" => "Calle 19 # 3 - 25",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 324 2912065",
            "instagram" => "https://www.porthos.com.co/menu"
        ],
        [
            "img" => "restaurant-8.jpeg",
            "name" => "Topping Burgers",
            "address" => "Calle 19 # 3 - 9",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 301 7818368",
            "instagram" => "https://www.instagram.com/toppingburgers_/"
        ]
    ],

    "BAR & PUBS" => [
        [
            "img" => "bar-1.png",
            "name" => "La Plaza Santa Marta",
            "address" => "Calle 19 # 3 - 69",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 300 6877180",
            "instagram" => "https://www.instagram.com/laplazasantamarta/"
        ],
        [
            "img" => "bar-2.png",
            "name" => "BeerTown",
            "address" => "Calle 19 # 3 - 1",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 311 2171328",
            "instagram" => "https://www.instagram.com/beertownsm/"
        ]
    ],

    "BOUTIQUES" => [
        [
            "img" => "boutique-1.png",
            "name" => "Casa Glamel - Casa de Alquiler",
            "address" => "Cra. 3 # 20 - 29",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 305 4869696",
            "instagram" => "https://www.instagram.com/casaglamel/"
        ],
        [
            "img" => "boutique-2.png",
            "name" => "Noche de Etiqueta - Casa de Alquiler",
            "address" => "Calle 21 # 2A - 60",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 300 7060268",
            "instagram" => "https://www.instagram.com/noche_de_etiqueta_alquiler/"
        ]
    ],

    "BEAUTY & SALONS" => [
        [
            "img" => "salon-1.png",
            "name" => "Hernán Restrepo - Peluquería y Spa",
            "address" => "Calle 24A # 2A - 152",
            "location" => "Santa Marta, Magdalena",
            "phone" => "57 605 4211532",
            "instagram" => "https://www.instagram.com/hrpeluqueriaspa/"
        ]
    ]
]   
?>

<section class="sectionSantamartaPage">
    <div class="sectionSantamartaPage__container">
        <?php foreach ($places as $category => $items): ?>
            <?php $formattedId = formatCategoryId($category); // Formatear el ID ?>
            <h2 class="category heading--40 color--A98417" id="<?php echo htmlspecialchars($formattedId); ?>"><?php echo htmlspecialchars($category); ?></h2>
            <div class="slickPlaces">
                <?php foreach ($items as $item): ?>
                    <div class="sectionPlaces__padding">
                        <div class="sectionPlaces__item">
                            <img src="<?php echo IMG_BASE . $item['img']; ?>" alt="">
                            <div class="sectionPlaces__info">
                                <h3 class="title"><?php echo htmlspecialchars($item['name']); ?></h3>
                                <p class="paragraph"><?php echo htmlspecialchars($item['address']); ?></p>
                                <span class="space space--5"></span>
                                <p class="paragraph"><?php echo htmlspecialchars($item['location']); ?></p>
                                <span class="space space--11"></span>
                                <p class="number"><?php echo htmlspecialchars($item['phone']); ?></p>
                                <span class="space space--19"></span>
                                <a class="button button--primary" href="<?php echo htmlspecialchars($item['instagram']); ?>" target="_blank">
                                    VIEW
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>