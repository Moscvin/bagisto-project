<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => [
                'default' => 'Implicit',
            ],

            'attribute-groups' => [
                'description'       => 'Descriere',
                'general'           => 'General',
                'inventories'       => 'Stocuri',
                'meta-description'  => 'Meta Descriere',
                'price'             => 'Preț',
                'settings'          => 'Setări',
                'shipping'          => 'Livrare',
            ],

            'attributes' => [
                'brand'                => 'Brand',
                'color'                => 'Culoare',
                'cost'                 => 'Cost',
                'description'          => 'Descriere',
                'featured'             => 'Recomandat',
                'guest-checkout'       => 'Finalizare comandă fără cont',
                'height'               => 'Înălțime',
                'length'               => 'Lungime',
                'manage-stock'         => 'Gestionare stoc',
                'meta-description'     => 'Meta Descriere',
                'meta-keywords'        => 'Meta Cuvinte Cheie',
                'meta-title'           => 'Meta Titlu',
                'name'                 => 'Nume',
                'new'                  => 'Nou',
                'price'                => 'Preț',
                'product-number'       => 'Număr produs',
                'short-description'    => 'Descriere scurtă',
                'size'                 => 'Mărime',
                'sku'                  => 'SKU',
                'special-price'        => 'Preț special',
                'special-price-from'   => 'Preț special de la',
                'special-price-to'     => 'Preț special până la',
                'status'               => 'Status',
                'tax-category'         => 'Categorie taxă',
                'url-key'              => 'URL Cheie',
                'visible-individually' => 'Vizibil individual',
                'weight'               => 'Greutate',
                'width'                => 'Lățime',
            ],

            'attribute-options' => [
                'black'  => 'Negru',
                'green'  => 'Verde',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => 'Roșu',
                's'      => 'S',
                'white'  => 'Alb',
                'xl'     => 'XL',
                'yellow' => 'Galben',
            ],
        ],

        'category' => [
            'categories' => [
                'description' => 'Descriere categorie rădăcină',
                'name'        => 'Rădăcină',
            ],
        ],

        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => 'Conținut pagină Despre Noi',
                    'title'   => 'Despre Noi',
                ],

                'contact-us' => [
                    'content' => 'Conținut pagină Contact',
                    'title'   => 'Contact',
                ],

                'customer-service' => [
                    'content' => 'Conținut pagină Servicii Clienți',
                    'title'   => 'Servicii Clienți',
                ],

                'payment-policy' => [
                    'content' => 'Conținut pagină Politică de Plată',
                    'title'   => 'Politică de Plată',
                ],

                'privacy-policy' => [
                    'content' => 'Conținut pagină Politică de Confidențialitate',
                    'title'   => 'Politică de Confidențialitate',
                ],

                'refund-policy' => [
                    'content' => 'Conținut pagină Politică de Rambursare',
                    'title'   => 'Politică de Rambursare',
                ],

                'return-policy' => [
                    'content' => 'Conținut pagină Politică de Returnare',
                    'title'   => 'Politică de Returnare',
                ],

                'shipping-policy' => [
                    'content' => 'Conținut pagină Politică de Livrare',
                    'title'   => 'Politică de Livrare',
                ],

                'terms-conditions' => [
                    'content' => 'Conținut pagină Termeni și Condiții',
                    'title'   => 'Termeni și Condiții',
                ],

                'terms-of-use' => [
                    'content' => 'Conținut pagină Termeni de Utilizare',
                    'title'   => 'Termeni de Utilizare',
                ],

                'whats-new' => [
                    'content' => 'Conținut pagină Noutăți',
                    'title'   => 'Noutăți',
                ],
            ],
        ],

        'core' => [
            'channels' => [
                'name'             => 'Implicit',
                'meta-title'       => 'Magazin demo',
                'meta-keywords'    => 'Cuvinte cheie meta magazin demo',
                'meta-description' => 'Descriere meta magazin demo',
            ],

            'currencies' => [
                'AED' => 'Dirham Emirate Arabe Unite',
                'ARS' => 'Peso Argentinian',
                'AUD' => 'Dolar Australian',
                'BDT' => 'Taka Bangladesh',
                'BHD' => 'Dinar Bahrain',
                'BRL' => 'Real Brazilian',
                'CAD' => 'Dolar Canadian',
                'CHF' => 'Franc Elvețian',
                'CLP' => 'Peso Chilian',
                'CNY' => 'Yuan Chinez',
                'COP' => 'Peso Columbian',
                'CZK' => 'Coroană Cehă',
                'DKK' => 'Coroană Daneză',
                'DZD' => 'Dinar Algerian',
                'EGP' => 'Liră Egipteană',
                'EUR' => 'Euro',
                'FJD' => 'Dolar Fijian',
                'GBP' => 'Liră Sterlină',
                'HKD' => 'Dolar Hong Kong',
                'HUF' => 'Forint Maghiar',
                'IDR' => 'Rupie Indoneziană',
                'ILS' => 'Shekel Israelian',
                'INR' => 'Rupie Indiană',
                'JOD' => 'Dinar Iordanian',
                'JPY' => 'Yen Japonez',
                'KRW' => 'Won Coreean',
                'KWD' => 'Dinar Kuweit',
                'KZT' => 'Tenge Kazahă',
                'LBP' => 'Liră Libaneză',
                'LKR' => 'Rupie Sri Lanka',
                'LYD' => 'Dinar Libian',
                'MAD' => 'Dirham Marocan',
                'MUR' => 'Rupie Mauritia',
                'MXN' => 'Peso Mexican',
                'MYR' => 'Ringgit Malaezian',
                'NGN' => 'Naira Nigeriană',
                'NOK' => 'Coroană Norvegiană',
                'NPR' => 'Rupie Nepal',
                'NZD' => 'Dolar Neozeelandez',
                'OMR' => 'Rial Oman',
                'PAB' => 'Balboa Panama',
                'PEN' => 'Sol Peruvian',
                'PHP' => 'Peso Filipinez',
                'PKR' => 'Rupie Pakistani',
                'PLN' => 'Zlot Polonez',
                'PYG' => 'Guarani Paraguay',
                'QAR' => 'Rial Qatar',
                'RON' => 'Leu Românesc',
                'RUB' => 'Rublă Rusă',
                'SAR' => 'Rial Saudit',
                'SEK' => 'Coroană Suedeză',
                'SGD' => 'Dolar Singapore',
                'THB' => 'Baht Thailandez',
                'TND' => 'Dinar Tunisian',
                'TRY' => 'Liră Turcească',
                'TWD' => 'Dolar Taiwan',
                'UAH' => 'Hryvna Ucraineană',
                'USD' => 'Dolar American',
                'UZS' => 'Som Uzbekistan',
                'VEF' => 'Bolivar Venezuelan',
                'VND' => 'Dong Vietnam',
                'XAF' => 'Franc CFA BEAC',
                'XOF' => 'Franc CFA BCEAO',
                'ZAR' => 'Rand Sud-African',
                'ZMW' => 'Kwacha Zambian',
            ],

            'locales'    => [
                'ar'    => 'Arabă',
                'bn'    => 'Bengali',
                'ca'    => 'Canada',
                'de'    => 'Germană',
                'en'    => 'Engleză',
                'es'    => 'Spaniolă',
                'fa'    => 'Persană',
                'fr'    => 'Franceză',
                'he'    => 'Ebraică',
                'hi_IN' => 'Hindi',
                'it'    => 'Italiană',
                'ja'    => 'Japoneză',
                'nl'    => 'Olandeză',
                'pl'    => 'Poloneză',
                'pt_BR' => 'Portugheză Braziliană',
                'ru'    => 'Rusă',
                'sin'   => 'Sinhala',
                'tr'    => 'Turcă',
                'uk'    => 'Ucraineană',
                'zh_CN' => 'Chineză',
            ],
        ],

        'customer' => [
            'customer-groups' => [
                'general'   => 'General',
                'guest'     => 'Vizitator',
                'wholesale' => 'En-gros',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => 'Implicit',
            ],
        ],

        'shop' => [
            'theme-customizations' => [
                'all-products' => [
                    'name' => 'Toate produsele',

                    'options' => [
                        'title' => 'Toate produsele',
                    ],
                ],

                'bold-collections' => [
                    'content' => [
                        'btn-title'   => 'Vezi colecții',
                        'description' => 'Introducerea noilor noastre colecții îndrăznețe! Ridică-ți stilul cu modele îndrăznețe și declarații vibrante. Explorează modele uimitoare și culori îndrăznețe care redefinesc garderoba ta. Pregătește-te să îmbrățișezi extraordinul!',
                        'title'       => 'Pregătește-te pentru noile noastre colecții îndrăznețe!',
                    ],

                    'name' => 'Colecții Îndrăznețe',
                ],

                'categories-collections' => [
                    'name' => 'Colecții de Categorii',
                ],

                'featured-collections' => [
                    'name' => 'Colecții Recomandate',

                    'options' => [
                        'title' => 'Produse Recomandate',
                    ],
                ],

                'footer-links' => [
                    'name' => 'Linkuri Footer',

                    'options' => [
                        'about-us'         => 'Despre Noi',
                        'contact-us'       => 'Contact',
                        'customer-service' => 'Servicii Clienți',
                        'payment-policy'   => 'Politică de Plată',
                        'privacy-policy'   => 'Politică de Confidențialitate',
                        'refund-policy'    => 'Politică de Rambursare',
                        'return-policy'    => 'Politică de Returnare',
                        'shipping-policy'  => 'Politică de Livrare',
                        'terms-conditions' => 'Termeni și Condiții',
                        'terms-of-use'     => 'Termeni de Utilizare',
                        'whats-new'        => 'Noutăți',
                    ],
                ],

                'game-container' => [
                    'content' => [
                        'sub-title-1' => 'Colecțiile noastre',
                        'sub-title-2' => 'Colecțiile noastre',
                        'title'       => 'Noi achiziții',
                    ],

                    'name' => 'Container Joc',
                ],

                'image-carousel' => [
                    'name' => 'Carusel Imagini',

                    'sliders' => [
                        'title' => 'Pregătește-te pentru noua colecție',
                    ],
                ],

                'new-products' => [
                    'name' => 'Produse Noi',

                    'options' => [
                        'title' => 'Produse Noi',
                    ],
                ],

                'offer-information' => [
                    'content' => [
                        'title' => 'Primește REDUCERE de până la 40% la prima comandă CUMPĂRĂ ACUM',
                    ],

                    'name' => 'Informații Ofertă',
                ],

                'services-content' => [
                    'description' => [
                        'emi-available-info'   => 'EMI fără cost disponibil pe toate cardurile de credit majore',
                        'free-shipping-info'   => 'Bucură-te de livrare gratuită la toate comenzile',
                        'product-replace-info' => 'Înlocuire ușoară a produselor disponibilă!',
                        'time-support-info'    => 'Suport dedicat 24/7 prin chat și email',
                    ],

                    'name' => 'Conținut Servicii',

                    'title' => [
                        'emi-available'   => 'EMI Disponibil',
                        'free-shipping'   => 'Livrare Gratuită',
                        'product-replace' => 'Înlocuire Produs',
                        'time-support'    => 'Suport 24/7',
                    ],
                ],

                'top-collections' => [
                    'content' => [
                        'sub-title-1' => 'Colecțiile noastre',
                        'sub-title-2' => 'Colecțiile noastre',
                        'sub-title-3' => 'Colecțiile noastre',
                        'sub-title-4' => 'Colecțiile noastre',
                        'sub-title-5' => 'Colecțiile noastre',
                        'sub-title-6' => 'Colecțiile noastre',
                        'title'       => 'Noi achiziții',
                    ],

                    'name' => 'Top Colecții',
                ],
            ],
        ],

        'user' => [
            'roles' => [
                'description' => 'Utilizatorii acestui rol vor avea acces total',
                'name'        => 'Administrator',
            ],

            'users' => [
                'name' => 'Exemplu',
            ],
        ],

        'sample-categories' => [
            'category-translation' => [
                '2' => [
                    'description'      => 'Descriere categorie Bărbați',
                    'meta-description' => 'Meta Descriere categorie Bărbați',
                    'meta-keywords'    => 'Meta Cuvinte Cheie categorie Bărbați',
                    'meta-title'       => 'Meta Titlu categorie Bărbați',
                    'name'             => 'Bărbați',
                    'slug'             => 'barbati',
                ],

                '3' => [
                    'description'      => 'Descriere categorie Îmbrăcăminte de Iarnă',
                    'meta-description' => 'Meta Descriere categorie Îmbrăcăminte de Iarnă',
                    'meta-keywords'    => 'Meta Cuvinte Cheie categorie Îmbrăcăminte de Iarnă',
                    'meta-title'       => 'Meta Titlu categorie Îmbrăcăminte de Iarnă',
                    'name'             => 'Îmbrăcăminte de Iarnă',
                    'slug'             => 'imbracaminte-de-iarna',
                ],
            ],
        ],

        'sample-products' => [
            'product-flat' => [
                '1' => [
                    'description'       => 'Boneta unisex Arctic Cozy Knit este soluția ta pentru a rămâne cald, confortabil și stilat în lunile reci. Confecționată dintr-un amestec moale și durabil de tricot acrilic, această bonetă este concepută pentru a oferi un ajustaj confortabil și potrivit. Designul clasic o face potrivită atât pentru bărbați, cât și pentru femei, oferind un accesoriu versatil care completează diverse stiluri. Fie că ieși pentru o zi casual în oraș sau te bucuri de aer liber, această bonetă adaugă un plus de confort și căldură ținutei tale. Materialul moale și respirabil asigură că rămâi confortabil fără a sacrifica stilul. Boneta Arctic Cozy Knit nu este doar un accesoriu; este o declarație de modă de iarnă. Simplitatea sa o face ușor de combinat cu diverse outfituri, făcând-o un element de bază în garderoba ta de iarnă. Ideală pentru dar sau ca răsfăț pentru tine, această bonetă este o completare gândită la orice ținută de iarnă. Este un accesoriu versatil care depășește funcționalitatea, adăugând un plus de căldură și stil lookului tău. Îmbrățișează esența iernii cu boneta Arctic Cozy Knit. Fie că te bucuri de o zi casual sau înfrunți elementele, lasă această bonetă să fie companionul tău pentru confort și stil. Ridică-ți garderoba de iarnă cu acest accesoriu clasic care combină perfect căldura cu un simț atemporal al modei.',
                    'meta-description'  => 'meta descriere',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Titlu',
                    'name'              => 'Bonetă Unisex Arctic Cozy Knit',
                    'short-description' => 'Îmbrățișează zilele reci cu stil cu boneta noastră Arctic Cozy Knit. Confecționată dintr-un amestec moale și durabil de acrilic, această bonetă clasică oferă căldură și versatilitate. Potrivită atât pentru bărbați, cât și pentru femei, este accesoriul ideal pentru purtare casual sau în aer liber. Ridică-ți garderoba de iarnă sau fă un dar cuiva special cu această bonetă esențială.',
                ],

                '2' => [
                    'description'       => 'Eșarfa de iarnă Arctic Bliss este mai mult decât un simplu accesoriu pentru vremea rece; este o declarație de căldură, confort și stil pentru sezonul rece. Confecționată cu grijă dintr-un amestec luxos de acrilic și lână, această eșarfă este concepută pentru a te menține confortabil și cald chiar și în cele mai reci temperaturi. Textura sa moale și pufoasă nu oferă doar izolație împotriva frigului, ci adaugă și un plus de lux garderobei tale de iarnă. Designul eșarfei Arctic Bliss este atât stilat, cât și versatil, făcând-o o completare perfectă pentru o varietate de outfituri de iarnă. Fie că te îmbraci pentru o ocazie specială sau adaugi un strat elegant lookului tău zilnic, această eșarfă îți completează stilul fără efort. Lungimea extra a eșarfei oferă opțiuni personalizabile de stilizare. Înfășoară-te pentru căldură suplimentară, las-o să atârne liber pentru un look casual sau experimentează cu diferite noduri pentru a-ți exprima stilul unic. Această versatilitate o face un accesoriu must-have pentru sezonul rece. Cauți cadoul perfect? Eșarfa Arctic Bliss este o alegere ideală. Fie că surprizezi pe cineva drag sau te răsfeți pe tine însuți, această eșarfă este un cadou atemporal și practic care va fi prețuit pe tot parcursul iernii. Îmbrățișează iarna cu eșarfa Arctic Bliss, unde căldura întâlnește stilul în perfectă armonie. Ridică-ți garderoba de iarnă cu acest accesoriu esențial care nu doar te ține cald, ci adaugă și un plus de sofisticare ținutei tale de iarnă.',
                    'meta-description'  => 'meta descriere',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Titlu',
                    'name'              => 'Eșarfă de Iarnă Stilată Arctic Bliss',
                    'short-description' => 'Experimentează căldura și stilul cu eșarfa noastră Arctic Bliss. Confecționată dintr-un amestec luxos de acrilic și lână, această eșarfă confortabilă este concepută să te țină cald în cele mai reci zile. Designul său stilat și versatil, combinat cu o lungime extra, oferă opțiuni personalizabile de stilizare. Ridică-ți garderoba de iarnă sau surprinde pe cineva special cu acest accesoriu esențial de iarnă.',
                ],

                '3' => [
                    'description'       => 'Introducem mănușile de iarnă Arctic Touchscreen – unde căldura, stilul și conectivitatea se întâlnesc pentru a-ți îmbunătăți experiența de iarnă. Confecționate din acrilic de înaltă calitate, aceste mănuși sunt concepute pentru a oferi căldură excepțională și durabilitate. Vârfurile compatibile cu touchscreen îți permit să rămâi conectat fără a-ți expune mâinile la frig. Răspunde la apeluri, trimite mesaje și navighează pe dispozitive fără efort, totul păstrându-te mâinile calde. Căptușeala termică adaugă un plus de confort, făcând aceste mănuși alegerea ta preferată pentru a înfrunta frigul iernii. Fie că faci naveta, cumperi sau te bucuri de activități în aer liber, aceste mănuși oferă căldura și protecția de care ai nevoie. Manșetele elastice asigură un ajustaj sigur, prevenind curentii de aer rece și menținând mănușile în loc în timpul activităților tale zilnice. Designul stilat adaugă un plus de eleganță ținutei tale de iarnă, făcând aceste mănuși la fel de fashionabile precum sunt de funcționale. Ideale pentru dar sau ca răsfăț pentru tine, mănușile Arctic Touchscreen sunt un accesoriu must-have pentru persoana modernă. Spune adio inconvenientului de a-ți scoate mănușile pentru a folosi dispozitivele și îmbrățișează combinația perfectă între căldură, stil și conectivitate. Rămâi conectat, rămâi cald și rămâi stilat cu mănușile Arctic Touchscreen – companionul tău de încredere pentru a învinge sezonul rece cu încredere.',
                    'meta-description'  => 'meta descriere',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Titlu',
                    'name'              => 'Mănuși de Iarnă Arctic Touchscreen',
                    'short-description' => 'Rămâi conectat și cald cu mănușile noastre Arctic Touchscreen. Aceste mănuși nu sunt doar confecționate din acrilic de înaltă calitate pentru căldură și durabilitate, dar au și un design compatibil cu touchscreen. Cu căptușeală termică, manșete elastice pentru un ajustaj sigur și un aspect stilat, aceste mănuși sunt perfecte pentru purtare zilnică în condiții reci.',
                ],

                '4' => [
                    'description'       => 'Introducem șosetele Arctic Warmth Wool Blend – companionul tău esențial pentru picioare confortabile și calde în sezoanele reci. Confecționate dintr-un amestec premium de lână Merino, acrilic, nailon și spandex, aceste șosete sunt concepute pentru a oferi căldură și confort fără egal. Amestecul de lână asigură că picioarele tale rămân calde chiar și în cele mai reci temperaturi, făcând aceste șosete alegerea perfectă pentru aventurile de iarnă sau purtarea acasă. Textura moale și confortabilă a șosetelor oferă o senzație de lux pe pielea ta. Spune adio picioarelor reci și bucură-te de căldura pufoasă oferită de aceste șosete din amestec de lână. Proiectate pentru durabilitate, șosetele au tălpi și vârfuri întărite, adăugând rezistență suplimentară zonelor cu uzură ridicată. Acest lucru asigură că șosetele tale rezistă în timp, oferind confort și căldură pe termen lung. Natura respirantă a materialului previne supraîncălzirea, permițându-ți picioarelor să rămână confortabile și uscate pe tot parcursul zilei. Fie că mergi pe afară într-o drumeție de iarnă sau te relaxezi în casă, aceste șosete oferă echilibrul perfect între căldură și respirabilitate. Versatile și stilate, aceste șosete din amestec de lână sunt potrivite pentru diverse ocazii. Comboază-le cu ghetele tale preferate pentru un look de iarnă la modă sau poartă-le în casă pentru confort maxim. Ridică-ți garderoba de iarnă și prioritizează confortul cu șosetele Arctic Warmth Wool Blend. Răsfețează-ți picioarele cu luxul pe care îl merită și pășește într-o lume de confort care durează tot sezonul.',
                    'meta-description'  => 'meta descriere',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Titlu',
                    'name'              => 'Șosete Arctic Warmth Wool Blend',
                    'short-description' => 'Experimentează căldura și confortul de neegalat cu șosetele noastre Arctic Warmth Wool Blend. Confecționate dintr-un amestec de lână Merino, acrilic, nailon și spandex, aceste șosete oferă confort suprem pentru vremea rece. Cu tălpi și vârfuri întărite pentru durabilitate, aceste șosete versatile și stilate sunt perfecte pentru diverse ocazii.',
                ],

                '5' => [
                    'description'       => 'Introducem setul de accesorii de iarnă Arctic Frost, soluția ta pentru a rămâne cald, stilat și conectat în zilele reci de iarnă. Acest set gândit cu atenție reunește patru accesorii esențiale de iarnă pentru a crea un ansamblu armonios. Eșarfa luxoasă, țesută dintr-un amestec de acrilic și lână, nu doar adaugă un strat de căldură, ci și un plus de eleganță garderobei tale de iarnă. Boneta moale din tricot, confecționată cu grijă, promite să te țină confortabil în timp ce adaugă un plus de stil lookului tău. Dar nu se oprește aici – setul nostru include și mănuși compatibile cu touchscreen. Rămâi conectat fără a sacrifica căldura în timp ce navighezi fără efort pe dispozitive. Fie că răspunzi la apeluri, trimiți mesaje sau capturezi momente de iarnă pe smartphone, aceste mănuși asigură comoditate fără a compromite stilul. Textura moale și confortabilă a șosetelor oferă o senzație de lux pe pielea ta. Spune adio picioarelor reci și bucură-te de căldura pufoasă oferită de aceste șosete din amestec de lână. Setul Arctic Frost nu este doar despre funcționalitate; este o declarație de modă de iarnă. Fiecare piesă este proiectată nu doar pentru a te proteja de frig, ci și pentru a-ți ridica stilul în sezonul rece. Materialele alese pentru acest set prioritizează atât durabilitatea, cât și confortul, asigurându-te că poți savura iarna în stil. Fie că te răsfeți pe tine însuți sau cauți cadoul perfect, setul Arctic Frost este o alegere versatilă. Bucură pe cineva special în sezonul sărbătorilor sau ridică-ți garderoba de iarnă cu acest ansamblu stilat și funcțional. Îmbrățișează gerul cu încredere, știind că ai accesoriile perfecte pentru a te menține cald și elegant.',
                    'meta-description'  => 'meta descriere',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Titlu',
                    'name'              => 'Accesorii de Iarnă Arctic Frost',
                    'short-description' => 'Îmbrățișează frigul iernii cu setul nostru de accesorii Arctic Frost. Acest set selectat include o eșarfă luxoasă, o bonetă confortabilă, mănuși compatibile cu touchscreen și șosete din amestec de lână. Stilat și funcțional, acest ansamblu este confecționat din materiale de înaltă calitate, asigurând atât durabilitate, cât și confort. Ridică-ți garderoba de iarnă sau surprinde pe cineva special cu această opțiune perfectă de dar.',
                ],

                '6' => [
                    'description'       => 'Introducem setul de accesorii de iarnă Arctic Frost, soluția ta pentru a rămâne cald, stilat și conectat în zilele reci de iarnă. Acest set gândit cu atenție reunește patru accesorii esențiale de iarnă pentru a crea un ansamblu armonios. Eșarfa luxoasă, țesută dintr-un amestec de acrilic și lână, nu doar adaugă un strat de căldură, ci și un plus de eleganță garderobei tale de iarnă. Boneta moale din tricot, confecționată cu grijă, promite să te țină confortabil în timp ce adaugă un plus de stil lookului tău. Dar nu se oprește aici – setul nostru include și mănuși compatibile cu touchscreen. Rămâi conectat fără a sacrifică căldura în timp ce navighezi fără efort pe dispozitive. Fie că răspunzi la apeluri, trimiți mesaje sau capturezi momente de iarnă pe smartphone, aceste mănuși asigură comoditate fără a compromite stilul. Textura moale și confortabilă a șosetelor oferă o senzație de lux pe pielea ta. Spune adio picioarelor reci și bucură-te de căldura pufoasă oferită de aceste șosete din amestec de lână. Setul Arctic Frost nu este doar despre funcționalitate; este o declarație de modă de iarnă. Fiecare piesă este proiectată nu doar pentru a te proteja de frig, ci și pentru a-ți ridica stilul în sezonul rece. Materialele alese pentru acest set prioritizează atât durabilitatea, cât și confortul, asigurându-te că poți savura iarna în stil. Fie că te răsfeți pe tine însuți sau cauți cadoul perfect, setul Arctic Frost este o alegere versatilă. Bucură pe cineva special în sezonul sărbătorilor sau ridică-ți garderoba de iarnă cu acest ansamblu stilat și funcțional. Îmbrățișează gerul cu încredere, știind că ai accesoriile perfecte pentru a te menține cald și elegant.',
                    'meta-description'  => 'meta descriere',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Frost Winter Accessories Bundle',
                    'short-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '7' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '8' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-M',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '9' => [
                    'description'       => 'DescIntroducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.ription 9',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-L',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '10' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-M',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '11' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-L',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],
            ],

            'product-attribute-values' => [
                '1' => [
                    'description'      => 'The Arctic Cozy Knit Beanie is your go-to solution for staying warm, comfortable, and stylish during the colder months. Crafted from a soft and durable blend of acrylic knit, this beanie is designed to provide a cozy and snug fit. The classic design makes it suitable for both men and women, offering a versatile accessory that complements various styles. Whether you\'re heading out for a casual day in town or embracing the great outdoors, this beanie adds a touch of comfort and warmth to your ensemble. The soft and breathable material ensures that you stay cozy without sacrificing style. The Arctic Cozy Knit Beanie isn\'t just an accessory; it\'s a statement of winter fashion. Its simplicity makes it easy to pair with different outfits, making it a staple in your winter wardrobe. Ideal for gifting or as a treat for yourself, this beanie is a thoughtful addition to any winter ensemble. It\'s a versatile accessory that goes beyond functionality, adding a touch of warmth and style to your look. Embrace the essence of winter with the Arctic Cozy Knit Beanie. Whether you\'re enjoying a casual day out or facing the elements, let this beanie be your companion for comfort and style. Elevate your winter wardrobe with this classic accessory that effortlessly combines warmth with a timeless sense of fashion.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Cozy Knit Unisex Beanie',
                    'sort-description' => 'Embrace the chilly days in style with our Arctic Cozy Knit Beanie. Crafted from a soft and durable blend of acrylic, this classic beanie offers warmth and versatility. Suitable for both men and women, it\'s the ideal accessory for casual or outdoor wear. Elevate your winter wardrobe or gift someone special with this essential beanie cap.',
                ],

                '2' => [
                    'description'      => 'The Arctic Bliss Winter Scarf is more than just a cold-weather accessory; it\'s a statement of warmth, comfort, and style for the winter season. Crafted with care from a luxurious blend of acrylic and wool, this scarf is designed to keep you cozy and snug even in the chilliest temperatures. The soft and plush texture not only provides insulation against the cold but also adds a touch of luxury to your winter wardrobe. The design of the Arctic Bliss Winter Scarf is both stylish and versatile, making it a perfect addition to a variety of winter outfits. Whether you\'re dressing up for a special occasion or adding a chic layer to your everyday look, this scarf complements your style effortlessly. The extra-long length of the scarf offers customizable styling options. Wrap it around for added warmth, drape it loosely for a casual look, or experiment with different knots to express your unique style. This versatility makes it a must-have accessory for the winter season. Looking for the perfect gift? The Arctic Bliss Winter Scarf is an ideal choice. Whether you\'re surprising a loved one or treating yourself, this scarf is a timeless and practical gift that will be cherished throughout the winter months. Embrace the winter with the Arctic Bliss Winter Scarf, where warmth meets style in perfect harmony. Elevate your winter wardrobe with this essential accessory that not only keeps you warm but also adds a touch of sophistication to your cold-weather ensemble.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Bliss Stylish Winter Scarf',
                    'sort-description' => 'Experience the embrace of warmth and style with our Arctic Bliss Winter Scarf. Crafted from a luxurious blend of acrylic and wool, this cozy scarf is designed to keep you snug during the coldest days. Its stylish and versatile design, combined with an extra-long length, offers customizable styling options. Elevate your winter wardrobe or delight someone special with this essential winter accessory.',
                ],

                '3' => [
                    'description'      => 'Introducing the Arctic Touchscreen Winter Gloves – where warmth, style, and connectivity meet to enhance your winter experience. Crafted from high-quality acrylic, these gloves are designed to provide exceptional warmth and durability. The touchscreen-compatible fingertips allow you to stay connected without exposing your hands to the cold. Answer calls, send messages, and navigate your devices effortlessly, all while keeping your hands snug. The insulated lining adds an extra layer of coziness, making these gloves your go-to choice for facing the winter chill. Whether you\'re commuting, running errands, or enjoying outdoor activities, these gloves provide the warmth and protection you need. Elastic cuffs ensure a secure fit, preventing cold drafts and keeping the gloves in place during your daily activities. The stylish design adds a touch of flair to your winter ensemble, making these gloves as fashionable as they are functional. Ideal for gifting or as a treat for yourself, the Arctic Touchscreen Winter Gloves are a must-have accessory for the modern individual. Say goodbye to the inconvenience of removing your gloves to use your devices and embrace the seamless blend of warmth, style, and connectivity. Stay connected, stay warm, and stay stylish with the Arctic Touchscreen Winter Gloves – your reliable companion for conquering the winter season with confidence.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Touchscreen Winter Gloves',
                    'sort-description' => 'Stay connected and warm with our Arctic Touchscreen Winter Gloves. These gloves are not only crafted from high-quality acrylic for warmth and durability but also feature a touchscreen-compatible design. With an insulated lining, elastic cuffs for a secure fit, and a stylish look, these gloves are perfect for daily wear in chilly conditions.',
                ],

                '4' => [
                    'description'      => 'Introducing the Arctic Warmth Wool Blend Socks – your essential companion for cozy and comfortable feet during the colder seasons. Crafted from a premium blend of Merino wool, acrylic, nylon, and spandex, these socks are designed to provide unparalleled warmth and comfort. The wool blend ensures that your feet stay toasty even in the coldest temperatures, making these socks the perfect choice for winter adventures or simply staying snug at home. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. Designed for durability, the socks feature a reinforced heel and toe, adding extra strength to high-wear areas. This ensures that your socks withstand the test of time, providing long-lasting comfort and coziness. The breathable nature of the material prevents overheating, allowing your feet to stay comfortable and dry throughout the day. Whether you\'re heading outdoors for a winter hike or relaxing indoors, these socks offer the perfect balance of warmth and breathability. Versatile and stylish, these wool blend socks are suitable for various occasions. Pair them with your favorite boots for a fashionable winter look or wear them around the house for ultimate comfort. Elevate your winter wardrobe and prioritize comfort with the Arctic Warmth Wool Blend Socks. Treat your feet to the luxury they deserve and step into a world of coziness that lasts all season long.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Warmth Wool Blend Socks',
                    'sort-description' => 'Experience the unmatched warmth and comfort of our Arctic Warmth Wool Blend Socks. Crafted from a blend of Merino wool, acrylic, nylon, and spandex, these socks offer ultimate coziness for cold weather. With a reinforced heel and toe for durability, these versatile and stylish socks are perfect for various occasions.',
                ],

                '5' => [
                    'description'      => 'Introducing the Arctic Frost Winter Accessories Bundle, your go-to solution for staying warm, stylish, and connected during the chilly winter days. This thoughtfully curated set brings together Four essential winter accessories to create a harmonious ensemble. The luxurious scarf, woven from a blend of acrylic and wool, not only adds a layer of warmth but also brings a touch of elegance to your winter wardrobe. The soft knit beanie, crafted with care, promises to keep you cozy while adding a fashionable flair to your look. But it doesn\'t end there – our bundle also includes touchscreen-compatible gloves. Stay connected without sacrificing warmth as you navigate your devices effortlessly. Whether you\'re answering calls, sending messages, or capturing winter moments on your smartphone, these gloves ensure convenience without compromising style. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. The Arctic Frost Winter Accessories Bundle is not just about functionality; it\'s a statement of winter fashion. Each piece is designed not only to protect you from the cold but also to elevate your style during the frosty season. The materials chosen for this bundle prioritize both durability and comfort, ensuring that you can enjoy the winter wonderland in style. Whether you\'re treating yourself or searching for the perfect gift, the Arctic Frost Winter Accessories Bundle is a versatile choice. Delight someone special during the holiday season or elevate your own winter wardrobe with this stylish and functional ensemble. Embrace the frost with confidence, knowing that you have the perfect accessories to keep you warm and chic.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Frost Winter Accessories',
                    'sort-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '6' => [
                    'description'      => 'Introducing the Arctic Frost Winter Accessories Bundle, your go-to solution for staying warm, stylish, and connected during the chilly winter days. This thoughtfully curated set brings together Four essential winter accessories to create a harmonious ensemble. The luxurious scarf, woven from a blend of acrylic and wool, not only adds a layer of warmth but also brings a touch of elegance to your winter wardrobe. The soft knit beanie, crafted with care, promises to keep you cozy while adding a fashionable flair to your look. But it doesn\'t end there – our bundle also includes touchscreen-compatible gloves. Stay connected without sacrificing warmth as you navigate your devices effortlessly. Whether you\'re answering calls, sending messages, or capturing winter moments on your smartphone, these gloves ensure convenience without compromising style. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. The Arctic Frost Winter Accessories Bundle is not just about functionality; it\'s a statement of winter fashion. Each piece is designed not only to protect you from the cold but also to elevate your style during the frosty season. The materials chosen for this bundle prioritize both durability and comfort, ensuring that you can enjoy the winter wonderland in style. Whether you\'re treating yourself or searching for the perfect gift, the Arctic Frost Winter Accessories Bundle is a versatile choice. Delight someone special during the holiday season or elevate your own winter wardrobe with this stylish and functional ensemble. Embrace the frost with confidence, knowing that you have the perfect accessories to keep you warm and chic.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Frost Winter Accessories Bundle',
                    'sort-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '7' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '8' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-M',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '9' => [
                    'description'      => 'DescIntroducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.ription 9',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-L',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '10' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-M',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '11' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-L',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],
            ],

            'product-bundle-option-translations' => [
                '1' => [
                    'label' => 'Bundle Option 1',
                ],

                '2' => [
                    'label' => 'Bundle Option 1',
                ],

                '3' => [
                    'label' => 'Bundle Option 2',
                ],

                '4' => [
                    'label' => 'Bundle Option 2',
                ],
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Admin',
                'bagisto'          => 'Bagisto',
                'confirm-password' => 'Confirm Password',
                'email'            => 'Email',
                'email-address'    => 'admin@example.com',
                'password'         => 'Password',
                'title'            => 'Create Administrator',
            ],

            'environment-configuration' => [
                'algerian-dinar'              => 'Algerian Dinar (DZD)',
                'allowed-currencies'          => 'Allowed Currencies',
                'allowed-locales'             => 'Allowed Locales',
                'application-name'            => 'Application Name',
                'argentine-peso'              => 'Argentine Peso (ARS)',
                'australian-dollar'           => 'Australian Dollar (AUD)',
                'bagisto'                     => 'Bagisto',
                'bangladeshi-taka'            => 'Bangladeshi Taka (BDT)',
                'bahraini-dinar'              => 'Bahraini Dinar (BHD)',
                'brazilian-real'              => 'Brazilian Real (BRL)',
                'british-pound-sterling'      => 'British Pound Sterling (GBP)',
                'canadian-dollar'             => 'Canadian Dollar (CAD)',
                'cfa-franc-bceao'             => 'CFA Franc BCEAO (XOF)',
                'cfa-franc-beac'              => 'CFA Franc BEAC (XAF)',
                'chilean-peso'                => 'Chilean Peso (CLP)',
                'chinese-yuan'                => 'Chinese Yuan (CNY)',
                'colombian-peso'              => 'Colombian Peso (COP)',
                'czech-koruna'                => 'Czech Koruna (CZK)',
                'danish-krone'                => 'Danish Krone (DKK)',
                'database-connection'         => 'Database Connection',
                'database-hostname'           => 'Database Hostname',
                'database-name'               => 'Database Name',
                'database-password'           => 'Database Password',
                'database-port'               => 'Database Port',
                'database-prefix'             => 'Database Prefix',
                'database-username'           => 'Database Username',
                'default-currency'            => 'Default Currency',
                'default-locale'              => 'Default Locale',
                'default-timezone'            => 'Default Timezone',
                'default-url'                 => 'Default URL',
                'default-url-link'            => 'https://localhost',
                'egyptian-pound'              => 'Egyptian Pound (EGP)',
                'euro'                        => 'Euro (EUR)',
                'fijian-dollar'               => 'Fijian Dollar (FJD)',
                'hong-kong-dollar'            => 'Hong Kong Dollar (HKD)',
                'hungarian-forint'            => 'Hungarian Forint (HUF)',
                'indian-rupee'                => 'Indian Rupee (INR)',
                'indonesian-rupiah'           => 'Indonesian Rupiah (IDR)',
                'israeli-new-shekel'          => 'Israeli New Shekel (ILS)',
                'japanese-yen'                => 'Japanese Yen (JPY)',
                'jordanian-dinar'             => 'Jordanian Dinar (JOD)',
                'kazakhstani-tenge'           => 'Kazakhstani Tenge (KZT)',
                'kuwaiti-dinar'               => 'Kuwaiti Dinar (KWD)',
                'lebanese-pound'              => 'Lebanese Pound (LBP)',
                'libyan-dinar'                => 'Libyan Dinar (LYD)',
                'malaysian-ringgit'           => 'Malaysian Ringgit (MYR)',
                'mauritian-rupee'             => 'Mauritian Rupee (MUR)',
                'mexican-peso'                => 'Mexican Peso (MXN)',
                'moroccan-dirham'             => 'Moroccan Dirham (MAD)',
                'mysql'                       => 'Mysql',
                'nepalese-rupee'              => 'Nepalese Rupee (NPR)',
                'new-taiwan-dollar'           => 'New Taiwan Dollar (TWD)',
                'new-zealand-dollar'          => 'New Zealand Dollar (NZD)',
                'nigerian-naira'              => 'Nigerian Naira (NGN)',
                'norwegian-krone'             => 'Norwegian Krone (NOK)',
                'omani-rial'                  => 'Omani Rial (OMR)',
                'pakistani-rupee'             => 'Pakistani Rupee (PKR)',
                'panamanian-balboa'           => 'Panamanian Balboa (PAB)',
                'paraguayan-guarani'          => 'Paraguayan Guarani (PYG)',
                'peruvian-nuevo-sol'          => 'Peruvian Nuevo Sol (PEN)',
                'pgsql'                       => 'pgSQL',
                'philippine-peso'             => 'Philippine Peso (PHP)',
                'polish-zloty'                => 'Polish Zloty (PLN)',
                'qatari-rial'                 => 'Qatari Rial (QAR)',
                'romanian-leu'                => 'Romanian Leu (RON)',
                'russian-ruble'               => 'Russian Ruble (RUB)',
                'saudi-riyal'                 => 'Saudi Riyal (SAR)',
                'select-timezone'             => 'Select Timezone',
                'singapore-dollar'            => 'Singapore Dollar (SGD)',
                'south-african-rand'          => 'South African Rand (ZAR)',
                'south-korean-won'            => 'South Korean Won (KRW)',
                'sqlsrv'                      => 'SQLSRV',
                'sri-lankan-rupee'            => 'Sri Lankan Rupee (LKR)',
                'swedish-krona'               => 'Swedish Krona (SEK)',
                'swiss-franc'                 => 'Swiss Franc (CHF)',
                'thai-baht'                   => 'Thai Baht (THB)',
                'title'                       => 'Store Configuration',
                'tunisian-dinar'              => 'Tunisian Dinar (TND)',
                'turkish-lira'                => 'Turkish Lira (TRY)',
                'ukrainian-hryvnia'           => 'Ukrainian Hryvnia (UAH)',
                'united-arab-emirates-dirham' => 'United Arab Emirates Dirham (AED)',
                'united-states-dollar'        => 'United States Dollar (USD)',
                'uzbekistani-som'             => 'Uzbekistani Som (UZS)',
                'venezuelan-bolívar'          => 'Venezuelan Bolívar (VEF)',
                'vietnamese-dong'             => 'Vietnamese Dong (VND)',
                'warning-message'             => 'Beware! The settings for your default system language and default currency are permanent and cannot be changed once set.',
                'zambian-kwacha'              => 'Zambian Kwacha (ZMW)',
            ],

            'sample-products' => [
                'download-sample' => 'download-sample',
                'no'              => 'No',
                'sample-products' => 'Sample Products',
                'title'           => 'Sample Products',
                'yes'             => 'Yes',
            ],

            'installation-processing' => [
                'bagisto'      => 'Installation Bagisto',
                'bagisto-info' => 'Creating the database tables, this can take a few moments',
                'title'        => 'Installation',
            ],

            'installation-completed' => [
                'admin-panel'                => 'Admin Panel',
                'bagisto-forums'             => 'Bagisto Forum',
                'customer-panel'             => 'Customer Panel',
                'explore-bagisto-extensions' => 'Explore Bagisto Extension',
                'title'                      => 'Installation Completed',
                'title-info'                 => 'Bagisto is Successfully installed on your system.',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Create the database table',
                'install'                 => 'Installation',
                'install-info'            => 'Bagisto For Installation',
                'install-info-button'     => 'Click the button below to',
                'populate-database-table' => 'Populate the database tables',
                'start-installation'      => 'Start Installation',
                'title'                   => 'Ready for Installation',
            ],

            'start' => [
                'locale'        => 'Locale',
                'main'          => 'Start',
                'select-locale' => 'Select Locale',
                'title'         => 'Your Bagisto install',
                'welcome-title' => 'Welcome to Bagisto',
            ],

            'server-requirements' => [
                'calendar'    => 'Calendar',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'dom',
                'fileinfo'    => 'fileInfo',
                'filter'      => 'Filter',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'openssl',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'php'         => 'PHP',
                'php-version' => '8.1 or higher',
                'session'     => 'session',
                'title'       => 'System Requirements',
                'tokenizer'   => 'tokenizer',
                'xml'         => 'XML',
            ],

            'arabic'                   => 'Arabic',
            'back'                     => 'Back',
            'bagisto'                  => 'Bagisto',
            'bagisto-info'             => 'a Community Project by',
            'bagisto-logo'             => 'Bagisto Logo',
            'bengali'                  => 'Bengali',
            'chinese'                  => 'Chinese',
            'continue'                 => 'Continue',
            'dutch'                    => 'Dutch',
            'english'                  => 'English',
            'french'                   => 'French',
            'german'                   => 'German',
            'hebrew'                   => 'Hebrew',
            'hindi'                    => 'Hindi',
            'installation-description' => 'Bagisto installation typically involves several steps. Here\'s a general outline of the installation process for Bagisto',
            'installation-info'        => 'We are happy to see you here!',
            'installation-title'       => 'Welcome to Installation',
            'italian'                  => 'Italian',
            'japanese'                 => 'Japanese',
            'persian'                  => 'Persian',
            'polish'                   => 'Polish',
            'portuguese'               => 'Brazilian Portuguese',
            'russian'                  => 'Russian',
            'sinhala'                  => 'Sinhala',
            'spanish'                  => 'Spanish',
            'title'                    => 'Bagisto Installer',
            'turkish'                  => 'Turkish',
            'ukrainian'                => 'Ukrainian',
            'webkul'                   => 'Webkul',
        ],
    ],
];
