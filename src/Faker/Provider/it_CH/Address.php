<?php

namespace Faker\Provider\it_CH;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('###', '##', '#', '#a', '#b', '#c');

    protected static $streetPrefix = array('Piazza', 'Strada', 'Via', 'Borgo', 'Contrada', 'Rotonda', 'Incrocio');

    protected static $postcode = array('####');

    protected static $cityNames = array(
        'Aarau', 'Adliswil', 'Aesch', 'Affoltern am Albis', 'Allschwil', 'Altstätten', 'Amriswil', 'Arbon', 'Arth', 'Baar', 'Baden', 'Basilea', 'Bassersdorf', 'Bellinzona', 'Belp', 'Berna', 'Bienne', 'Binningen', 'Birsfelden', 'Briga-Glis', 'Brugg', 'Buchs', 'Bulle', 'Burgdorf', 'Bülach', 'Carouge', 'Cham', 'Chêne-Bougeries', 'Coira', 'Davos', 'Delémont', 'Dietikon', 'Dübendorf', 'Ebikon', 'Ecublens', 'Einsiedeln', 'Emmen', 'Frauenfeld', 'Freienbach', 'Friburgo', 'Ginevra', 'Gland', 'Gossau', 'Grenchen', 'Herisau', 'Hinwil', 'Horgen', 'Horw', 'Illnau-Effretikon', 'Ittigen', 'Kloten', 'Kreuzlingen', 'Kriens', 'Köniz', 'Küsnacht', 'Küssnacht', 'La Chaux-de-Fonds', 'La Tour-de-Peilz', 'Lancy', 'Langenthal', 'Le Grand-Saconnex', 'Le Locle', 'Liestal', 'Locarno', 'Losanna', 'Lucerna', 'Lugano', 'Lyss', 'Martigny', 'Meilen', 'Mendrisio', 'Meyrin', 'Monthey', 'Montreux', 'Morges', 'Muri bei Bern', 'Muttenz', 'Männedorf', 'Möhlin', 'Münchenstein', 'Münsingen', 'Neuchâtel', 'Neuhausen am Rheinfall', 'Nyon', 'Oberwil', 'Oftringen', 'Olten', 'Onex', 'Opfikon', 'Ostermundigen', 'Pfäffikon', 'Pratteln', 'Prilly', 'Pully', 'Rapperswil-Jona', 'Regensdorf', 'Reinach', 'Renens', 'Rheinfelden', 'Richterswil', 'Riehen', 'Rüti', 'San Gallo', 'Schlieren', 'Sciaffusa', 'Sierre', 'Sion', 'Soletta', 'Spiez', 'Spreitenbach', 'Steffisburg', 'Stäfa', 'Svitto', 'Thalwil', 'Thun', 'Thônex', 'Uster', 'Uzwil', 'Val-de-Travers', 'Vernier', 'Versoix', 'Vevey', 'Veyrier', 'Villars-sur-Glâne', 'Volketswil', 'Wallisellen', 'Weinfelden', 'Wettingen', 'Wetzikon', 'Wil', 'Winterthur', 'Wohlen', 'Worb', 'Wädenswil', 'Yverdon-les-Bains', 'Zofingen', 'Zollikon', 'Zugo', 'Zurigo'
    );

    protected static $canton = array(
        array('short' => 'AG', 'name' => 'Argovia'), array('short' => 'AI', 'name' => 'Appenzello Interno'), array('short' => 'AR', 'name' => 'Appenzello Esterno'), array('short' => 'BE', 'name' => 'Berna'), array('short' => 'BL', 'name' => 'Basilea Campagna'), array('short' => 'BS', 'name' => 'Basilea Città'), array('short' => 'FR', 'name' => 'Friburgo'), array('short' => 'GE', 'name' => 'Ginevra'), array('short' => 'GL', 'name' => 'Glarona'), array('short' => 'GR', 'name' => 'Grigioni'), array('short' => 'JU', 'name' => 'Giura'), array('short' => 'LU', 'name' => 'Lucerna'), array('short' => 'NE', 'name' => 'Neuchâtel'), array('short' => 'NW', 'name' => 'Nidvaldo'), array('short' => 'OW', 'name' => 'Obvaldo'), array('short' => 'SG', 'name' => 'San Gallo'), array('short' => 'SH', 'name' => 'Sciaffusa'), array('short' => 'SO', 'name' => 'Soletta'), array('short' => 'SZ', 'name' => 'Svitto'), array('short' => 'TG', 'name' => 'Turgovia'), array('short' => 'TI', 'name' => 'Ticino'), array('short' => 'UR', 'name' => 'Uri'), array('short' => 'VD', 'name' => 'Vaud'), array('short' => 'VS', 'name' => 'Vallese'), array('short' => 'ZG', 'name' => 'Zugo'), array('short' => 'ZH', 'name' => 'Zurigo')
    );

    protected static $country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antartide (territori a sud del 60° parallelo)', 'Antigua e Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Bielorussia', 'Belgio', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia e Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brasile', 'Territorio dell\'arcipelago indiano', 'Isole Vergini Britanniche', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambogia', 'Cameroon', 'Canada', 'Capo Verde', 'Isole Cayman', 'Repubblica Centrale Africana', 'Chad', 'Cile', 'Cina', 'Isola di Pasqua', 'Isola di Cocos (Keeling)', 'Colombia', 'Comoros', 'Congo', 'Isole Cook', 'Costa Rica', 'Costa d\'Avorio', 'Croazia', 'Cuba', 'Cipro', 'Repubblica Ceca',
        'Danimarca', 'Gibuti', 'Repubblica Dominicana',
        'Equador', 'Egitto', 'El Salvador', 'Guinea Equatoriale', 'Eritrea', 'Estonia', 'Etiopia',
        'Isole Faroe', 'Isole Falkland (Malvinas)', 'Fiji', 'Finlandia', 'Francia', 'Guyana Francese', 'Polinesia Francese', 'Territori Francesi del sud',
        'Gabon', 'Gambia', 'Georgia', 'Germania', 'Ghana', 'Gibilterra', 'Grecia', 'Groenlandia', 'Grenada', 'Guadalupa', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Città del Vaticano', 'Honduras', 'Hong Kong', 'Ungheria',
        'Islanda', 'India', 'Indonesia', 'Iran', 'Iraq', 'Irlanda', 'Isola di Man', 'Israele', 'Italia',
        'Giamaica', 'Giappone', 'Jersey', 'Giordania',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Kuwait', 'Republicca Kirgiza',
        'Repubblica del Laos', 'Latvia', 'Libano', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lituania', 'Lussemburgo',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malesia', 'Maldive', 'Mali', 'Malta', 'Isole Marshall', 'Martinica', 'Mauritania', 'Mauritius', 'Mayotte', 'Messico', 'Micronesia', 'Moldova', 'Principato di Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Marocco', 'Mozambico', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Antille Olandesi', 'Olanda', 'Nuova Caledonia', 'Nuova Zelanda', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Isole Norfolk', 'Northern Mariana Islands', 'Norvegia',
        'Oman',
        'Pakistan', 'Palau', 'Palestina', 'Panama', 'Papua Nuova Guinea', 'Paraguay', 'Peru', 'Filippine', 'Pitcairn Islands', 'Polonia', 'Portogallo', 'Porto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russia', 'Rwanda',
        'San Bartolomeo', 'Sant\'Elena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Arabia Saudita', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovenia', 'Isole Solomon', 'Somalia', 'Sud Africa', 'Georgia del sud e South Sandwich Islands', 'Spagna', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Svezia', 'Svizzera', 'Siria',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Tailandia', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad e Tobago', 'Tunisia', 'Turchia', 'Turkmenistan', 'Isole di Turks and Caicos', 'Tuvalu',
        'Uganda', 'Ucraina', 'Emirati Arabi Uniti', 'Regno Unito', 'Stati Uniti d\'America', 'United States Minor Outlying Islands', 'Isole Vergini Statunitensi', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{streetSuffix}} {{firstName}}',
        '{{streetSuffix}} {{lastName}}'
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}",
    );

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    /**
     * Returns a canton
     * @example array('BE' => 'Bern')
     * @return array
     */
    public static function canton()
    {
        return static::randomElement(static::$canton);
    }

    /**
     * Returns the abbreviation of a canton.
     * @return string
     */
    public static function cantonShort()
    {
        $canton = static::canton();
        return $canton['short'];
    }

    /**
     * Returns the name of canton.
     * @return string
     */
    public static function cantonName()
    {
        $canton = static::canton();
        return $canton['name'];
    }
}
