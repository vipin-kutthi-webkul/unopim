<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => 'Default',
            'attribute-groups'   => [
                'description'      => 'Descriere',
                'general'          => 'General',
                'inventories'      => 'Inventare',
                'meta-description' => 'Meta descriere',
                'price'            => 'Preț',
                'technical'        => 'Tehnic',
                'shipping'         => 'Transport',
            ],
            'attributes' => [
                'brand'                => 'Marca',
                'color'                => 'Culoare',
                'cost'                 => 'Cost',
                'description'          => 'Descriere',
                'featured'             => 'Promovat',
                'guest-checkout'       => 'Checkout pentru oaspeți',
                'height'               => 'Înălțime',
                'length'               => 'Lungime',
                'manage-stock'         => 'Gestionare stocuri',
                'meta-description'     => 'Meta descriere',
                'meta-keywords'        => 'Meta cuvinte cheie',
                'meta-title'           => 'Meta titlu',
                'name'                 => 'Nume',
                'new'                  => 'Nou',
                'price'                => 'Preț',
                'product-number'       => 'Număr produs',
                'short-description'    => 'Descriere scurtă',
                'size'                 => 'Dimensiune',
                'sku'                  => 'SKU',
                'special-price-from'   => 'Preț special de la',
                'special-price-to'     => 'Preț special până la',
                'special-price'        => 'Preț special',
                'status'               => 'Status',
                'tax-category'         => 'Categorie TVA',
                'url-key'              => 'Cheie URL',
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
                'description' => 'Descrierea categoriei rădăcină',
                'name'        => 'Rădăcină',
            ],
            'category_fields' => [
                'name'        => 'Nume',
                'description' => 'Descriere',
            ],
        ],
        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => 'Conținut pagină despre noi',
                    'title'   => 'Despre noi',
                ],
                'contact-us' => [
                    'content' => 'Conținut pagină contact',
                    'title'   => 'Contactează-ne',
                ],
                'customer-service' => [
                    'content' => 'Conținut pagină serviciu clienți',
                    'title'   => 'Serviciu client',
                ],
                'payment-policy' => [
                    'content' => 'Conținut pagină politică plată',
                    'title'   => 'Politica de plată',
                ],
                'privacy-policy' => [
                    'content' => 'Conținut pagină politică confidențialitate',
                    'title'   => 'Politica de confidențialitate',
                ],
                'refund-policy' => [
                    'content' => 'Conținut pagină politică rambursare',
                    'title'   => 'Politica de rambursare',
                ],
                'return-policy' => [
                    'content' => 'Conținut pagină politică returnare',
                    'title'   => 'Politica de returnare',
                ],
                'shipping-policy' => [
                    'content' => 'Conținut pagină politică transport',
                    'title'   => 'Politica de transport',
                ],
                'terms-conditions' => [
                    'content' => 'Conținut pagină termeni și condiții',
                    'title'   => 'Termeni și condiții',
                ],
                'terms-of-use' => [
                    'content' => 'Conținut pagină termeni de utilizare',
                    'title'   => 'Termeni de utilizare',
                ],
                'whats-new' => [
                    'content' => 'Conținut pagină ce este nou',
                    'title'   => 'Ce este nou',
                ],
            ],
        ],
        'core' => [
            'channels' => [
                'meta-title'       => 'Magazin demo',
                'meta-keywords'    => 'Cuvinte cheie meta magazin demo',
                'meta-description' => 'Descriere meta magazin demo',
                'name'             => 'Default',
            ],
            'currencies' => [
                'AED' => 'Dirham',
                'AFN' => 'Afgan',
                'CNY' => 'Yuan chinezesc',
                'EUR' => 'Euro',
                'GBP' => 'Liră sterlină',
                'INR' => 'Rupie indiană',
                'IRR' => 'Rial iranian',
                'JPY' => 'Ien japonez',
                'RUB' => 'Rubla rusă',
                'SAR' => 'Rial saudit',
                'TRY' => 'Liră turcească',
                'UAH' => 'Grivna ucraineană',
                'USD' => 'Dolar american',
            ],
        ],
        'customer' => [
            'customer-groups' => [
                'general'   => 'General',
                'guest'     => 'Invitat',
                'wholesale' => 'Angro',
            ],
        ],
        'inventory' => [
            'inventory-sources' => [
                'name' => 'Default',
            ],
        ],
        'shop' => [
            'theme-customizations' => [
                'all-products' => [
                    'name'    => 'Toate produsele',
                    'options' => [
                        'title' => 'Toate produsele',
                    ],
                ],
                'bold-collections' => [
                    'content' => [
                        'btn-title'   => 'Vezi toate',
                        'description' => 'Descoperă colecțiile îndrăznețe ale noastre! Elevă-ți stilul cu designuri îndrăznețe și culori vibrante. Explorează modele îndrăznețe și tonuri strălucitoare care îți vor defini garderoba. Pregătește-te să îmbrățișezi extraordinarul!',
                        'title'       => 'Pregătește-te pentru colecțiile îndrăznețe noi!',
                    ],
                    'name' => 'Colecții îndrăznețe',
                ],
                'categories-collections' => [
                    'name' => 'Colecțiile de categorii',
                ],
                'featured-collections' => [
                    'name'    => 'Colecții recomandate',
                    'options' => [
                        'title' => 'Produse recomandate',
                    ],
                ],
                'footer-links' => [
                    'name'    => 'Linkuri de subsol',
                    'options' => [
                        'about-us'         => 'Despre noi',
                        'contact-us'       => 'Contactează-ne',
                        'customer-service' => 'Serviciu client',
                        'payment-policy'   => 'Politica de plată',
                        'privacy-policy'   => 'Politica de confidențialitate',
                        'refund-policy'    => 'Politica de rambursare',
                        'return-policy'    => 'Politica de returnare',
                        'shipping-policy'  => 'Politica de transport',
                        'terms-conditions' => 'Termeni și condiții',
                        'terms-of-use'     => 'Termeni de utilizare',
                        'whats-new'        => 'Ce este nou',
                    ],
                ],
                'game-container' => [
                    'content' => [
                        'sub-title-1' => 'Colecțiile noastre',
                        'sub-title-2' => 'Colecțiile noastre',
                        'title'       => 'Jocul cu noile noastre adăugiri!',
                    ],
                    'name' => 'Container de joc',
                ],
                'image-carousel' => [
                    'name'    => 'Carousel de imagini',
                    'sliders' => [
                        'title' => 'Pregătește-te pentru noua colecție',
                    ],
                ],
                'new-products' => [
                    'name'    => 'Produse noi',
                    'options' => [
                        'title' => 'Produse noi',
                    ],
                ],
                'offer-information' => [
                    'content' => [
                        'title' => 'ÎNCEPĂND CU 40% DISCOUNT PE PRIMUL TĂU COMANDĂ',
                    ],
                    'name' => 'Informații despre oferte',
                ],
                'services-content' => [
                    'description' => [
                        'emi-available-info'   => 'Finanțare fără costuri disponibilă pe toate cardurile de credit majore',
                        'free-shipping-info'   => 'Transport gratuit pentru toate comenzile',
                        'product-replace-info' => 'Înlocuire produs ușoară disponibilă!',
                        'time-support-info'    => 'Suport dedicat 24/7 prin chat și e-mail',
                    ],
                    'name'  => 'Conținutul serviciilor',
                    'title' => [
                        'emi-available'   => 'EMI disponibil',
                        'free-shipping'   => 'Transport gratuit',
                        'product-replace' => 'Înlocuire produs',
                        'time-support'    => 'Suport 24/7',
                    ],
                ],
                'top-collections' => [
                    'content' => [
                        'sub-title-1' => 'Nostre colecții',
                        'sub-title-2' => 'Nostre colecții',
                        'sub-title-3' => 'Nostre colecții',
                        'sub-title-4' => 'Nostre colecții',
                        'sub-title-5' => 'Nostre colecții',
                        'sub-title-6' => 'Nostre colecții',
                        'title'       => 'Pregătește-te pentru un joc cu noile noastre lansări!',
                    ],
                    'name' => 'Colecții principale',
                ],
            ],
        ],
        'user' => [
            'roles' => [
                'description' => 'Această rolă va avea toate accesurile',
                'name'        => 'Administrator',
            ],
            'users' => [
                'name' => 'Exemplu',
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Administrator',
                'unopim'           => 'UnoPim',
                'confirm-password' => 'Confirmare Parolă',
                'email-address'    => 'admin@example.com',
                'email'            => 'Email',
                'password'         => 'Parolă',
                'title'            => 'Creare Administrator',
            ],

            'environment-configuration' => [
                'allowed-currencies'  => 'Monede Permise',
                'allowed-locales'     => 'Localizări Permise',
                'application-name'    => 'Nume Aplicație',
                'unopim'              => 'UnoPim',
                'chinese-yuan'        => 'Yuan Chinez (CNY)',
                'database-connection' => 'Conexiune Bază de Date',
                'database-hostname'   => 'Nume Gazdă Bază de Date',
                'database-name'       => 'Nume Bază de Date',
                'database-password'   => 'Parolă Bază de Date',
                'database-port'       => 'Port Bază de Date',
                'database-prefix'     => 'Prefix Bază de Date',
                'database-username'   => 'Utilizator Bază de Date',
                'default-currency'    => 'Monedă Implicită',
                'default-locale'      => 'Localizare Implicită',
                'default-timezone'    => 'Fus Orar Implicit',
                'default-url-link'    => 'https://localhost',
                'default-url'         => 'URL Implicit',
                'dirham'              => 'Dirham (AED)',
                'euro'                => 'Euro (EUR)',
                'iranian'             => 'Rial Iranian (IRR)',
                'israeli'             => 'Șekel Israelian (ILS)',
                'japanese-yen'        => 'Yen Japonez (JPY)',
                'mysql'               => 'MySQL',
                'pgsql'               => 'pgSQL',
                'pound'               => 'Liră Sterlină (GBP)',
                'rupee'               => 'Rupie Indiană (INR)',
                'russian-ruble'       => 'Rublă Rusă (RUB)',
                'saudi'               => 'Riyal Saudit (SAR)',
                'select-timezone'     => 'Selectați Fusul Orar',
                'sqlsrv'              => 'SQLSRV',
                'title'               => 'Configurare Bază de Date',
                'turkish-lira'        => 'Liră Turcească (TRY)',
                'ukrainian-hryvnia'   => 'Hryvnia Ucraineană (UAH)',
                'usd'                 => 'Dolar American (USD)',
                'warning-message'     => 'Atenție! Localizarea și moneda implicită nu pot fi modificate ulterior.',
            ],

            'installation-processing' => [
                'unopim'      => 'Instalare UnoPim',
                'unopim-info' => 'Crearea tabelelor în baza de date poate dura câteva minute.',
                'title'       => 'Proces de Instalare',
            ],

            'installation-completed' => [
                'admin-panel'               => 'Panou Administrativ',
                'unopim-forums'             => 'Forumuri UnoPim',
                'explore-unopim-extensions' => 'Explorează Extensiile UnoPim',
                'title-info'                => 'UnoPim a fost instalat cu succes.',
                'title'                     => 'Instalare Finalizată',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Creare tabele pentru baza de date',
                'install-info-button'     => 'Apăsați butonul de mai jos pentru a începe',
                'install-info'            => 'instalarea UnoPim',
                'install'                 => 'Instalare',
                'populate-database-table' => 'Populare tabele bază de date',
                'start-installation'      => 'Începeți Instalarea',
                'title'                   => 'Pregătit pentru Instalare',
            ],

            'start' => [
                'locale'        => 'Localizare',
                'main'          => 'Principal',
                'select-locale' => 'Selectați Limba',
                'title'         => 'Instalare UnoPim',
                'welcome-title' => 'Bine ați venit la UnoPim :version',
            ],

            'server-requirements' => [
                'calendar'    => 'Calendar',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'DOM',
                'fileinfo'    => 'Informații Fișier',
                'filter'      => 'Filtru',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'Internaționalizare',
                'json'        => 'JSON',
                'mbstring'    => 'MBString',
                'openssl'     => 'OpenSSL',
                'pcre'        => 'PCRE',
                'pdo'         => 'PDO',
                'php-version' => '8.2 sau mai mare',
                'php'         => 'PHP',
                'session'     => 'Sesiune',
                'title'       => 'Cerințe de Sistem',
                'tokenizer'   => 'Tokenizer',
                'xml'         => 'XML',
            ],

            'back'                     => 'Înapoi',
            'unopim-info'              => 'Proiect Comunitar',
            'unopim-logo'              => 'Logo UnoPim',
            'unopim'                   => 'UnoPim',
            'continue'                 => 'Continuare',
            'installation-description' => 'Instalarea UnoPim constă în mai mulți pași. Iată o prezentare generală:',
            'wizard-language'          => 'Limbă Asistent Instalare',
            'installation-info'        => 'Vă mulțumim pentru că sunteți aici!',
            'installation-title'       => 'Bine ați venit la Instalare',
            'save-configuration'       => 'Salvează Configurația',
            'skip'                     => 'Sari Peste',
            'title'                    => 'Asistent de Instalare UnoPim',
            'webkul'                   => 'Webkul',
        ],
    ],
];
