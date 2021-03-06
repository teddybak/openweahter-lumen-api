<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Country extends Model
{


    public static $capitals = array(
        array('alpha2' => 'AD','alpha3' => 'AND','fips' => 'AN','country' => 'Andorra','capital' => 'Andorra la Vella','continent' => 'EU'),
        array('alpha2' => 'AE','alpha3' => 'ARE','fips' => 'AE','country' => 'United Arab Emirates','capital' => 'Abu Dhabi','continent' => 'AS'),
        array('alpha2' => 'AF','alpha3' => 'AFG','fips' => 'AF','country' => 'Afghanistan','capital' => 'Kabul','continent' => 'AS'),
        array('alpha2' => 'AG','alpha3' => 'ATG','fips' => 'AC','country' => 'Antigua and Barbuda','capital' => 'St. John\'s','continent' => 'NA'),
        array('alpha2' => 'AI','alpha3' => 'AIA','fips' => 'AV','country' => 'Anguilla','capital' => 'The Valley','continent' => 'NA'),
        array('alpha2' => 'AL','alpha3' => 'ALB','fips' => 'AL','country' => 'Albania','capital' => 'Tirana','continent' => 'EU'),
        array('alpha2' => 'AM','alpha3' => 'ARM','fips' => 'AM','country' => 'Armenia','capital' => 'Yerevan','continent' => 'AS'),
        array('alpha2' => 'AN','alpha3' => 'ANT','fips' => 'NT','country' => 'Netherlands Antilles','capital' => 'Willemstad','continent' => 'NA'),
        array('alpha2' => 'AO','alpha3' => 'AGO','fips' => 'AO','country' => 'Angola','capital' => 'Luanda','continent' => 'AF'),
        array('alpha2' => 'AQ','alpha3' => 'ATA','fips' => 'AY','country' => 'Antarctica','capital' => '','continent' => 'AN'),
        array('alpha2' => 'AR','alpha3' => 'ARG','fips' => 'AR','country' => 'Argentina','capital' => 'Buenos Aires','continent' => 'SA'),
        array('alpha2' => 'AS','alpha3' => 'ASM','fips' => 'AQ','country' => 'American Samoa','capital' => 'Pago Pago','continent' => 'OC'),
        array('alpha2' => 'AT','alpha3' => 'AUT','fips' => 'AU','country' => 'Austria','capital' => 'Vienna','continent' => 'EU'),
        array('alpha2' => 'AU','alpha3' => 'AUS','fips' => 'AS','country' => 'Australia','capital' => 'Canberra','continent' => 'OC'),
        array('alpha2' => 'AW','alpha3' => 'ABW','fips' => 'AA','country' => 'Aruba','capital' => 'Oranjestad','continent' => 'NA'),
        array('alpha2' => 'AX','alpha3' => 'ALA','fips' => '','country' => '??land','capital' => 'Mariehamn','continent' => 'EU'),
        array('alpha2' => 'AZ','alpha3' => 'AZE','fips' => 'AJ','country' => 'Azerbaijan','capital' => 'Baku','continent' => 'AS'),
        array('alpha2' => 'BA','alpha3' => 'BIH','fips' => 'BK','country' => 'Bosnia and Herzegovina','capital' => 'Sarajevo','continent' => 'EU'),
        array('alpha2' => 'BB','alpha3' => 'BRB','fips' => 'BB','country' => 'Barbados','capital' => 'Bridgetown','continent' => 'NA'),
        array('alpha2' => 'BD','alpha3' => 'BGD','fips' => 'BG','country' => 'Bangladesh','capital' => 'Dhaka','continent' => 'AS'),
        array('alpha2' => 'BE','alpha3' => 'BEL','fips' => 'BE','country' => 'Belgium','capital' => 'Brussels','continent' => 'EU'),
        array('alpha2' => 'BF','alpha3' => 'BFA','fips' => 'UV','country' => 'Burkina Faso','capital' => 'Ouagadougou','continent' => 'AF'),
        array('alpha2' => 'BG','alpha3' => 'BGR','fips' => 'BU','country' => 'Bulgaria','capital' => 'Sofia','continent' => 'EU'),
        array('alpha2' => 'BH','alpha3' => 'BHR','fips' => 'BA','country' => 'Bahrain','capital' => 'Manama','continent' => 'AS'),
        array('alpha2' => 'BI','alpha3' => 'BDI','fips' => 'BY','country' => 'Burundi','capital' => 'Gitega','continent' => 'AF'),
        array('alpha2' => 'BJ','alpha3' => 'BEN','fips' => 'BN','country' => 'Benin','capital' => 'Porto-Novo','continent' => 'AF'),
        array('alpha2' => 'BL','alpha3' => 'BLM','fips' => 'TB','country' => 'Saint Barth??lemy','capital' => 'Gustavia','continent' => 'NA'),
        array('alpha2' => 'BM','alpha3' => 'BMU','fips' => 'BD','country' => 'Bermuda','capital' => 'Hamilton','continent' => 'NA'),
        array('alpha2' => 'BN','alpha3' => 'BRN','fips' => 'BX','country' => 'Brunei','capital' => 'Bandar Seri Begawan','continent' => 'AS'),
        array('alpha2' => 'BO','alpha3' => 'BOL','fips' => 'BL','country' => 'Bolivia','capital' => 'Sucre','continent' => 'SA'),
        array('alpha2' => 'BQ','alpha3' => 'BES','fips' => '','country' => 'Bonaire, Sint Eustatius, and Saba','capital' => '','continent' => 'NA'),
        array('alpha2' => 'BR','alpha3' => 'BRA','fips' => 'BR','country' => 'Brazil','capital' => 'Brasilia','continent' => 'SA'),
        array('alpha2' => 'BS','alpha3' => 'BHS','fips' => 'BF','country' => 'Bahamas','capital' => 'Nassau','continent' => 'NA'),
        array('alpha2' => 'BT','alpha3' => 'BTN','fips' => 'BT','country' => 'Bhutan','capital' => 'Thimphu','continent' => 'AS'),
        array('alpha2' => 'BV','alpha3' => 'BVT','fips' => 'BV','country' => 'Bouvet Island','capital' => '','continent' => 'AN'),
        array('alpha2' => 'BW','alpha3' => 'BWA','fips' => 'BC','country' => 'Botswana','capital' => 'Gaborone','continent' => 'AF'),
        array('alpha2' => 'BY','alpha3' => 'BLR','fips' => 'BO','country' => 'Belarus','capital' => 'Minsk','continent' => 'EU'),
        array('alpha2' => 'BZ','alpha3' => 'BLZ','fips' => 'BH','country' => 'Belize','capital' => 'Belmopan','continent' => 'NA'),
        array('alpha2' => 'CA','alpha3' => 'CAN','fips' => 'CA','country' => 'Canada','capital' => 'Ottawa','continent' => 'NA'),
        array('alpha2' => 'CC','alpha3' => 'CCK','fips' => 'CK','country' => 'Cocos [Keeling] Islands','capital' => 'West Island','continent' => 'AS'),
        array('alpha2' => 'CD','alpha3' => 'COD','fips' => 'CG','country' => 'DR Congo','capital' => 'Kinshasa','continent' => 'AF'),
        array('alpha2' => 'CF','alpha3' => 'CAF','fips' => 'CT','country' => 'Central African Republic','capital' => 'Bangui','continent' => 'AF'),
        array('alpha2' => 'CG','alpha3' => 'COG','fips' => 'CF','country' => 'Congo Republic','capital' => 'Brazzaville','continent' => 'AF'),
        array('alpha2' => 'CH','alpha3' => 'CHE','fips' => 'SZ','country' => 'Switzerland','capital' => 'Bern','continent' => 'EU'),
        array('alpha2' => 'CI','alpha3' => 'CIV','fips' => 'IV','country' => 'Ivory Coast','capital' => 'Yamoussoukro','continent' => 'AF'),
        array('alpha2' => 'CK','alpha3' => 'COK','fips' => 'CW','country' => 'Cook Islands','capital' => 'Avarua','continent' => 'OC'),
        array('alpha2' => 'CL','alpha3' => 'CHL','fips' => 'CI','country' => 'Chile','capital' => 'Santiago','continent' => 'SA'),
        array('alpha2' => 'CM','alpha3' => 'CMR','fips' => 'CM','country' => 'Cameroon','capital' => 'Yaounde','continent' => 'AF'),
        array('alpha2' => 'CN','alpha3' => 'CHN','fips' => 'CH','country' => 'China','capital' => 'Beijing','continent' => 'AS'),
        array('alpha2' => 'CO','alpha3' => 'COL','fips' => 'CO','country' => 'Colombia','capital' => 'Bogota','continent' => 'SA'),
        array('alpha2' => 'CR','alpha3' => 'CRI','fips' => 'CS','country' => 'Costa Rica','capital' => 'San Jose','continent' => 'NA'),
        array('alpha2' => 'CS','alpha3' => 'SCG','fips' => 'YI','country' => 'Serbia and Montenegro','capital' => 'Belgrade','continent' => 'EU'),
        array('alpha2' => 'CU','alpha3' => 'CUB','fips' => 'CU','country' => 'Cuba','capital' => 'Havana','continent' => 'NA'),
        array('alpha2' => 'CV','alpha3' => 'CPV','fips' => 'CV','country' => 'Cabo Verde','capital' => 'Praia','continent' => 'AF'),
        array('alpha2' => 'CW','alpha3' => 'CUW','fips' => 'UC','country' => 'Cura??ao','capital' => 'Willemstad','continent' => 'NA'),
        array('alpha2' => 'CX','alpha3' => 'CXR','fips' => 'KT','country' => 'Christmas Island','capital' => 'Flying Fish Cove','continent' => 'OC'),
        array('alpha2' => 'CY','alpha3' => 'CYP','fips' => 'CY','country' => 'Cyprus','capital' => 'Nicosia','continent' => 'EU'),
        array('alpha2' => 'CZ','alpha3' => 'CZE','fips' => 'EZ','country' => 'Czechia','capital' => 'Prague','continent' => 'EU'),
        array('alpha2' => 'DE','alpha3' => 'DEU','fips' => 'GM','country' => 'Germany','capital' => 'Berlin','continent' => 'EU'),
        array('alpha2' => 'DJ','alpha3' => 'DJI','fips' => 'DJ','country' => 'Djibouti','capital' => 'Djibouti','continent' => 'AF'),
        array('alpha2' => 'DK','alpha3' => 'DNK','fips' => 'DA','country' => 'Denmark','capital' => 'Copenhagen','continent' => 'EU'),
        array('alpha2' => 'DM','alpha3' => 'DMA','fips' => 'DO','country' => 'Dominica','capital' => 'Roseau','continent' => 'NA'),
        array('alpha2' => 'DO','alpha3' => 'DOM','fips' => 'DR','country' => 'Dominican Republic','capital' => 'Santo Domingo','continent' => 'NA'),
        array('alpha2' => 'DZ','alpha3' => 'DZA','fips' => 'AG','country' => 'Algeria','capital' => 'Algiers','continent' => 'AF'),
        array('alpha2' => 'EC','alpha3' => 'ECU','fips' => 'EC','country' => 'Ecuador','capital' => 'Quito','continent' => 'SA'),
        array('alpha2' => 'EE','alpha3' => 'EST','fips' => 'EN','country' => 'Estonia','capital' => 'Tallinn','continent' => 'EU'),
        array('alpha2' => 'EG','alpha3' => 'EGY','fips' => 'EG','country' => 'Egypt','capital' => 'Cairo','continent' => 'AF'),
        array('alpha2' => 'EH','alpha3' => 'ESH','fips' => 'WI','country' => 'Western Sahara','capital' => 'El-Aaiun','continent' => 'AF'),
        array('alpha2' => 'ER','alpha3' => 'ERI','fips' => 'ER','country' => 'Eritrea','capital' => 'Asmara','continent' => 'AF'),
        array('alpha2' => 'ES','alpha3' => 'ESP','fips' => 'SP','country' => 'Spain','capital' => 'Madrid','continent' => 'EU'),
        array('alpha2' => 'ET','alpha3' => 'ETH','fips' => 'ET','country' => 'Ethiopia','capital' => 'Addis Ababa','continent' => 'AF'),
        array('alpha2' => 'FI','alpha3' => 'FIN','fips' => 'FI','country' => 'Finland','capital' => 'Helsinki','continent' => 'EU'),
        array('alpha2' => 'FJ','alpha3' => 'FJI','fips' => 'FJ','country' => 'Fiji','capital' => 'Suva','continent' => 'OC'),
        array('alpha2' => 'FK','alpha3' => 'FLK','fips' => 'FK','country' => 'Falkland Islands','capital' => 'Stanley','continent' => 'SA'),
        array('alpha2' => 'FM','alpha3' => 'FSM','fips' => 'FM','country' => 'Micronesia','capital' => 'Palikir','continent' => 'OC'),
        array('alpha2' => 'FO','alpha3' => 'FRO','fips' => 'FO','country' => 'Faroe Islands','capital' => 'Torshavn','continent' => 'EU'),
        array('alpha2' => 'FR','alpha3' => 'FRA','fips' => 'FR','country' => 'France','capital' => 'Paris','continent' => 'EU'),
        array('alpha2' => 'GA','alpha3' => 'GAB','fips' => 'GB','country' => 'Gabon','capital' => 'Libreville','continent' => 'AF'),

        array('alpha2' => 'GB','alpha3' => 'GBR','fips' => 'UK','country' => 'United Kingdom','capital' => 'London','continent' => 'EU','aliases' => array( 'LDN')),



        array('alpha2' => 'GD','alpha3' => 'GRD','fips' => 'GJ','country' => 'Grenada','capital' => 'St. George\'s','continent' => 'NA'),
        array('alpha2' => 'GE','alpha3' => 'GEO','fips' => 'GG','country' => 'Georgia','capital' => 'Tbilisi','continent' => 'AS'),
        array('alpha2' => 'GF','alpha3' => 'GUF','fips' => 'FG','country' => 'French Guiana','capital' => 'Cayenne','continent' => 'SA'),
        array('alpha2' => 'GG','alpha3' => 'GGY','fips' => 'GK','country' => 'Guernsey','capital' => 'St Peter Port','continent' => 'EU'),
        array('alpha2' => 'GH','alpha3' => 'GHA','fips' => 'GH','country' => 'Ghana','capital' => 'Accra','continent' => 'AF'),
        array('alpha2' => 'GI','alpha3' => 'GIB','fips' => 'GI','country' => 'Gibraltar','capital' => 'Gibraltar','continent' => 'EU'),
        array('alpha2' => 'GL','alpha3' => 'GRL','fips' => 'GL','country' => 'Greenland','capital' => 'Nuuk','continent' => 'NA'),
        array('alpha2' => 'GM','alpha3' => 'GMB','fips' => 'GA','country' => 'Gambia','capital' => 'Banjul','continent' => 'AF'),
        array('alpha2' => 'GN','alpha3' => 'GIN','fips' => 'GV','country' => 'Guinea','capital' => 'Conakry','continent' => 'AF'),
        array('alpha2' => 'GP','alpha3' => 'GLP','fips' => 'GP','country' => 'Guadeloupe','capital' => 'Basse-Terre','continent' => 'NA'),
        array('alpha2' => 'GQ','alpha3' => 'GNQ','fips' => 'EK','country' => 'Equatorial Guinea','capital' => 'Malabo','continent' => 'AF'),
        array('alpha2' => 'GR','alpha3' => 'GRC','fips' => 'GR','country' => 'Greece','capital' => 'Athens','continent' => 'EU'),
        array('alpha2' => 'GS','alpha3' => 'SGS','fips' => 'SX','country' => 'South Georgia and South Sandwich Islands','capital' => 'Grytviken','continent' => 'AN'),
        array('alpha2' => 'GT','alpha3' => 'GTM','fips' => 'GT','country' => 'Guatemala','capital' => 'Guatemala City','continent' => 'NA'),
        array('alpha2' => 'GU','alpha3' => 'GUM','fips' => 'GQ','country' => 'Guam','capital' => 'Hagatna','continent' => 'OC'),
        array('alpha2' => 'GW','alpha3' => 'GNB','fips' => 'PU','country' => 'Guinea-Bissau','capital' => 'Bissau','continent' => 'AF'),
        array('alpha2' => 'GY','alpha3' => 'GUY','fips' => 'GY','country' => 'Guyana','capital' => 'Georgetown','continent' => 'SA'),
        array('alpha2' => 'HK','alpha3' => 'HKG','fips' => 'HK','country' => 'Hong Kong','capital' => 'Hong Kong','continent' => 'AS'),
        array('alpha2' => 'HM','alpha3' => 'HMD','fips' => 'HM','country' => 'Heard Island and McDonald Islands','capital' => '','continent' => 'AN'),
        array('alpha2' => 'HN','alpha3' => 'HND','fips' => 'HO','country' => 'Honduras','capital' => 'Tegucigalpa','continent' => 'NA'),
        array('alpha2' => 'HR','alpha3' => 'HRV','fips' => 'HR','country' => 'Croatia','capital' => 'Zagreb','continent' => 'EU'),
        array('alpha2' => 'HT','alpha3' => 'HTI','fips' => 'HA','country' => 'Haiti','capital' => 'Port-au-Prince','continent' => 'NA'),
        array('alpha2' => 'HU','alpha3' => 'HUN','fips' => 'HU','country' => 'Hungary','capital' => 'Budapest','continent' => 'EU'),
        array('alpha2' => 'ID','alpha3' => 'IDN','fips' => 'ID','country' => 'Indonesia','capital' => 'Jakarta','continent' => 'AS'),
        array('alpha2' => 'IE','alpha3' => 'IRL','fips' => 'EI','country' => 'Ireland','capital' => 'Dublin','continent' => 'EU'),
        array('alpha2' => 'IL','alpha3' => 'ISR','fips' => 'IS','country' => 'Israel','capital' => 'Jerusalem','continent' => 'AS'),
        array('alpha2' => 'IM','alpha3' => 'IMN','fips' => 'IM','country' => 'Isle of Man','capital' => 'Douglas','continent' => 'EU'),
        array('alpha2' => 'IN','alpha3' => 'IND','fips' => 'IN','country' => 'India','capital' => 'New Delhi','continent' => 'AS'),
        array('alpha2' => 'IO','alpha3' => 'IOT','fips' => 'IO','country' => 'British Indian Ocean Territory','capital' => 'Diego Garcia','continent' => 'AS'),
        array('alpha2' => 'IQ','alpha3' => 'IRQ','fips' => 'IZ','country' => 'Iraq','capital' => 'Baghdad','continent' => 'AS'),
        array('alpha2' => 'IR','alpha3' => 'IRN','fips' => 'IR','country' => 'Iran','capital' => 'Tehran','continent' => 'AS'),
        array('alpha2' => 'IS','alpha3' => 'ISL','fips' => 'IC','country' => 'Iceland','capital' => 'Reykjavik','continent' => 'EU'),
        array('alpha2' => 'IT','alpha3' => 'ITA','fips' => 'IT','country' => 'Italy','capital' => 'Rome','continent' => 'EU'),
        array('alpha2' => 'JE','alpha3' => 'JEY','fips' => 'JE','country' => 'Jersey','capital' => 'Saint Helier','continent' => 'EU'),
        array('alpha2' => 'JM','alpha3' => 'JAM','fips' => 'JM','country' => 'Jamaica','capital' => 'Kingston','continent' => 'NA'),
        array('alpha2' => 'JO','alpha3' => 'JOR','fips' => 'JO','country' => 'Jordan','capital' => 'Amman','continent' => 'AS'),
        array('alpha2' => 'JP','alpha3' => 'JPN','fips' => 'JA','country' => 'Japan','capital' => 'Tokyo','continent' => 'AS'),
        array('alpha2' => 'KE','alpha3' => 'KEN','fips' => 'KE','country' => 'Kenya','capital' => 'Nairobi','continent' => 'AF'),
        array('alpha2' => 'KG','alpha3' => 'KGZ','fips' => 'KG','country' => 'Kyrgyzstan','capital' => 'Bishkek','continent' => 'AS'),
        array('alpha2' => 'KH','alpha3' => 'KHM','fips' => 'CB','country' => 'Cambodia','capital' => 'Phnom Penh','continent' => 'AS'),
        array('alpha2' => 'KI','alpha3' => 'KIR','fips' => 'KR','country' => 'Kiribati','capital' => 'Tarawa','continent' => 'OC'),
        array('alpha2' => 'KM','alpha3' => 'COM','fips' => 'CN','country' => 'Comoros','capital' => 'Moroni','continent' => 'AF'),
        array('alpha2' => 'KN','alpha3' => 'KNA','fips' => 'SC','country' => 'St Kitts and Nevis','capital' => 'Basseterre','continent' => 'NA'),
        array('alpha2' => 'KP','alpha3' => 'PRK','fips' => 'KN','country' => 'North Korea','capital' => 'Pyongyang','continent' => 'AS'),
        array('alpha2' => 'KR','alpha3' => 'KOR','fips' => 'KS','country' => 'South Korea','capital' => 'Seoul','continent' => 'AS'),
        array('alpha2' => 'KW','alpha3' => 'KWT','fips' => 'KU','country' => 'Kuwait','capital' => 'Kuwait City','continent' => 'AS'),
        array('alpha2' => 'KY','alpha3' => 'CYM','fips' => 'CJ','country' => 'Cayman Islands','capital' => 'George Town','continent' => 'NA'),
        array('alpha2' => 'KZ','alpha3' => 'KAZ','fips' => 'KZ','country' => 'Kazakhstan','capital' => 'Nur-Sultan','continent' => 'AS'),
        array('alpha2' => 'LA','alpha3' => 'LAO','fips' => 'LA','country' => 'Laos','capital' => 'Vientiane','continent' => 'AS'),
        array('alpha2' => 'LB','alpha3' => 'LBN','fips' => 'LE','country' => 'Lebanon','capital' => 'Beirut','continent' => 'AS'),
        array('alpha2' => 'LC','alpha3' => 'LCA','fips' => 'ST','country' => 'Saint Lucia','capital' => 'Castries','continent' => 'NA'),
        array('alpha2' => 'LI','alpha3' => 'LIE','fips' => 'LS','country' => 'Liechtenstein','capital' => 'Vaduz','continent' => 'EU'),
        array('alpha2' => 'LK','alpha3' => 'LKA','fips' => 'CE','country' => 'Sri Lanka','capital' => 'Colombo','continent' => 'AS'),
        array('alpha2' => 'LR','alpha3' => 'LBR','fips' => 'LI','country' => 'Liberia','capital' => 'Monrovia','continent' => 'AF'),
        array('alpha2' => 'LS','alpha3' => 'LSO','fips' => 'LT','country' => 'Lesotho','capital' => 'Maseru','continent' => 'AF'),
        array('alpha2' => 'LT','alpha3' => 'LTU','fips' => 'LH','country' => 'Lithuania','capital' => 'Vilnius','continent' => 'EU'),
        array('alpha2' => 'LU','alpha3' => 'LUX','fips' => 'LU','country' => 'Luxembourg','capital' => 'Luxembourg','continent' => 'EU'),
        array('alpha2' => 'LV','alpha3' => 'LVA','fips' => 'LG','country' => 'Latvia','capital' => 'Riga','continent' => 'EU'),
        array('alpha2' => 'LY','alpha3' => 'LBY','fips' => 'LY','country' => 'Libya','capital' => 'Tripoli','continent' => 'AF'),
        array('alpha2' => 'MA','alpha3' => 'MAR','fips' => 'MO','country' => 'Morocco','capital' => 'Rabat','continent' => 'AF'),
        array('alpha2' => 'MC','alpha3' => 'MCO','fips' => 'MN','country' => 'Monaco','capital' => 'Monaco','continent' => 'EU'),
        array('alpha2' => 'MD','alpha3' => 'MDA','fips' => 'MD','country' => 'Moldova','capital' => 'Chisinau','continent' => 'EU'),
        array('alpha2' => 'ME','alpha3' => 'MNE','fips' => 'MJ','country' => 'Montenegro','capital' => 'Podgorica','continent' => 'EU'),
        array('alpha2' => 'MF','alpha3' => 'MAF','fips' => 'RN','country' => 'Saint Martin','capital' => 'Marigot','continent' => 'NA'),
        array('alpha2' => 'MG','alpha3' => 'MDG','fips' => 'MA','country' => 'Madagascar','capital' => 'Antananarivo','continent' => 'AF'),
        array('alpha2' => 'MH','alpha3' => 'MHL','fips' => 'RM','country' => 'Marshall Islands','capital' => 'Majuro','continent' => 'OC'),
        array('alpha2' => 'MK','alpha3' => 'MKD','fips' => 'MK','country' => 'North Macedonia','capital' => 'Skopje','continent' => 'EU'),
        array('alpha2' => 'ML','alpha3' => 'MLI','fips' => 'ML','country' => 'Mali','capital' => 'Bamako','continent' => 'AF'),
        array('alpha2' => 'MM','alpha3' => 'MMR','fips' => 'BM','country' => 'Myanmar','capital' => 'Nay Pyi Taw','continent' => 'AS'),
        array('alpha2' => 'MN','alpha3' => 'MNG','fips' => 'MG','country' => 'Mongolia','capital' => 'Ulaanbaatar','continent' => 'AS'),
        array('alpha2' => 'MO','alpha3' => 'MAC','fips' => 'MC','country' => 'Macao','capital' => 'Macao','continent' => 'AS'),
        array('alpha2' => 'MP','alpha3' => 'MNP','fips' => 'CQ','country' => 'Northern Mariana Islands','capital' => 'Saipan','continent' => 'OC'),
        array('alpha2' => 'MQ','alpha3' => 'MTQ','fips' => 'MB','country' => 'Martinique','capital' => 'Fort-de-France','continent' => 'NA'),
        array('alpha2' => 'MR','alpha3' => 'MRT','fips' => 'MR','country' => 'Mauritania','capital' => 'Nouakchott','continent' => 'AF'),
        array('alpha2' => 'MS','alpha3' => 'MSR','fips' => 'MH','country' => 'Montserrat','capital' => 'Plymouth','continent' => 'NA'),
        array('alpha2' => 'MT','alpha3' => 'MLT','fips' => 'MT','country' => 'Malta','capital' => 'Valletta','continent' => 'EU'),
        array('alpha2' => 'MU','alpha3' => 'MUS','fips' => 'MP','country' => 'Mauritius','capital' => 'Port Louis','continent' => 'AF'),
        array('alpha2' => 'MV','alpha3' => 'MDV','fips' => 'MV','country' => 'Maldives','capital' => 'Male','continent' => 'AS'),
        array('alpha2' => 'MW','alpha3' => 'MWI','fips' => 'MI','country' => 'Malawi','capital' => 'Lilongwe','continent' => 'AF'),
        array('alpha2' => 'MX','alpha3' => 'MEX','fips' => 'MX','country' => 'Mexico','capital' => 'Mexico City','continent' => 'NA'),
        array('alpha2' => 'MY','alpha3' => 'MYS','fips' => 'MY','country' => 'Malaysia','capital' => 'Kuala Lumpur','continent' => 'AS'),
        array('alpha2' => 'MZ','alpha3' => 'MOZ','fips' => 'MZ','country' => 'Mozambique','capital' => 'Maputo','continent' => 'AF'),
        array('alpha2' => 'NA','alpha3' => 'NAM','fips' => 'WA','country' => 'Namibia','capital' => 'Windhoek','continent' => 'AF'),
        array('alpha2' => 'NC','alpha3' => 'NCL','fips' => 'NC','country' => 'New Caledonia','capital' => 'Noumea','continent' => 'OC'),
        array('alpha2' => 'NE','alpha3' => 'NER','fips' => 'NG','country' => 'Niger','capital' => 'Niamey','continent' => 'AF'),
        array('alpha2' => 'NF','alpha3' => 'NFK','fips' => 'NF','country' => 'Norfolk Island','capital' => 'Kingston','continent' => 'OC'),
        array('alpha2' => 'NG','alpha3' => 'NGA','fips' => 'NI','country' => 'Nigeria','capital' => 'Abuja','continent' => 'AF'),
        array('alpha2' => 'NI','alpha3' => 'NIC','fips' => 'NU','country' => 'Nicaragua','capital' => 'Managua','continent' => 'NA'),
        array('alpha2' => 'NL','alpha3' => 'NLD','fips' => 'NL','country' => 'Netherlands','capital' => 'Amsterdam','continent' => 'EU'),
        array('alpha2' => 'NO','alpha3' => 'NOR','fips' => 'NO','country' => 'Norway','capital' => 'Oslo','continent' => 'EU'),
        array('alpha2' => 'NP','alpha3' => 'NPL','fips' => 'NP','country' => 'Nepal','capital' => 'Kathmandu','continent' => 'AS'),
        array('alpha2' => 'NR','alpha3' => 'NRU','fips' => 'NR','country' => 'Nauru','capital' => 'Yaren','continent' => 'OC'),
        array('alpha2' => 'NU','alpha3' => 'NIU','fips' => 'NE','country' => 'Niue','capital' => 'Alofi','continent' => 'OC'),
        array('alpha2' => 'NZ','alpha3' => 'NZL','fips' => 'NZ','country' => 'New Zealand','capital' => 'Wellington','continent' => 'OC'),
        array('alpha2' => 'OM','alpha3' => 'OMN','fips' => 'MU','country' => 'Oman','capital' => 'Muscat','continent' => 'AS'),
        array('alpha2' => 'PA','alpha3' => 'PAN','fips' => 'PM','country' => 'Panama','capital' => 'Panama City','continent' => 'NA'),
        array('alpha2' => 'PE','alpha3' => 'PER','fips' => 'PE','country' => 'Peru','capital' => 'Lima','continent' => 'SA'),
        array('alpha2' => 'PF','alpha3' => 'PYF','fips' => 'FP','country' => 'French Polynesia','capital' => 'Papeete','continent' => 'OC'),
        array('alpha2' => 'PG','alpha3' => 'PNG','fips' => 'PP','country' => 'Papua New Guinea','capital' => 'Port Moresby','continent' => 'OC'),
        array('alpha2' => 'PH','alpha3' => 'PHL','fips' => 'RP','country' => 'Philippines','capital' => 'Manila','continent' => 'AS'),
        array('alpha2' => 'PK','alpha3' => 'PAK','fips' => 'PK','country' => 'Pakistan','capital' => 'Islamabad','continent' => 'AS'),
        array('alpha2' => 'PL','alpha3' => 'POL','fips' => 'PL','country' => 'Poland','capital' => 'Warsaw','continent' => 'EU'),
        array('alpha2' => 'PM','alpha3' => 'SPM','fips' => 'SB','country' => 'Saint Pierre and Miquelon','capital' => 'Saint-Pierre','continent' => 'NA'),
        array('alpha2' => 'PN','alpha3' => 'PCN','fips' => 'PC','country' => 'Pitcairn Islands','capital' => 'Adamstown','continent' => 'OC'),
        array('alpha2' => 'PR','alpha3' => 'PRI','fips' => 'RQ','country' => 'Puerto Rico','capital' => 'San Juan','continent' => 'NA'),
        array('alpha2' => 'PS','alpha3' => 'PSE','fips' => 'WE','country' => 'Palestine','capital' => 'East Jerusalem','continent' => 'AS'),
        array('alpha2' => 'PT','alpha3' => 'PRT','fips' => 'PO','country' => 'Portugal','capital' => 'Lisbon','continent' => 'EU'),
        array('alpha2' => 'PW','alpha3' => 'PLW','fips' => 'PS','country' => 'Palau','capital' => 'Melekeok','continent' => 'OC'),
        array('alpha2' => 'PY','alpha3' => 'PRY','fips' => 'PA','country' => 'Paraguay','capital' => 'Asuncion','continent' => 'SA'),
        array('alpha2' => 'QA','alpha3' => 'QAT','fips' => 'QA','country' => 'Qatar','capital' => 'Doha','continent' => 'AS'),
        array('alpha2' => 'RE','alpha3' => 'REU','fips' => 'RE','country' => 'R??union','capital' => 'Saint-Denis','continent' => 'AF'),
        array('alpha2' => 'RO','alpha3' => 'ROU','fips' => 'RO','country' => 'Romania','capital' => 'Bucharest','continent' => 'EU'),
        array('alpha2' => 'RS','alpha3' => 'SRB','fips' => 'RI','country' => 'Serbia','capital' => 'Belgrade','continent' => 'EU'),
        array('alpha2' => 'RU','alpha3' => 'RUS','fips' => 'RS','country' => 'Russia','capital' => 'Moscow','continent' => 'EU'),
        array('alpha2' => 'RW','alpha3' => 'RWA','fips' => 'RW','country' => 'Rwanda','capital' => 'Kigali','continent' => 'AF'),
        array('alpha2' => 'SA','alpha3' => 'SAU','fips' => 'SA','country' => 'Saudi Arabia','capital' => 'Riyadh','continent' => 'AS'),
        array('alpha2' => 'SB','alpha3' => 'SLB','fips' => 'BP','country' => 'Solomon Islands','capital' => 'Honiara','continent' => 'OC'),
        array('alpha2' => 'SC','alpha3' => 'SYC','fips' => 'SE','country' => 'Seychelles','capital' => 'Victoria','continent' => 'AF'),
        array('alpha2' => 'SD','alpha3' => 'SDN','fips' => 'SU','country' => 'Sudan','capital' => 'Khartoum','continent' => 'AF'),
        array('alpha2' => 'SE','alpha3' => 'SWE','fips' => 'SW','country' => 'Sweden','capital' => 'Stockholm','continent' => 'EU'),
        array('alpha2' => 'SG','alpha3' => 'SGP','fips' => 'SN','country' => 'Singapore','capital' => 'Singapore','continent' => 'AS'),
        array('alpha2' => 'SH','alpha3' => 'SHN','fips' => 'SH','country' => 'Saint Helena','capital' => 'Jamestown','continent' => 'AF'),
        array('alpha2' => 'SI','alpha3' => 'SVN','fips' => 'SI','country' => 'Slovenia','capital' => 'Ljubljana','continent' => 'EU'),
        array('alpha2' => 'SJ','alpha3' => 'SJM','fips' => 'SV','country' => 'Svalbard and Jan Mayen','capital' => 'Longyearbyen','continent' => 'EU'),
        array('alpha2' => 'SK','alpha3' => 'SVK','fips' => 'LO','country' => 'Slovakia','capital' => 'Bratislava','continent' => 'EU'),
        array('alpha2' => 'SL','alpha3' => 'SLE','fips' => 'SL','country' => 'Sierra Leone','capital' => 'Freetown','continent' => 'AF'),
        array('alpha2' => 'SM','alpha3' => 'SMR','fips' => 'SM','country' => 'San Marino','capital' => 'San Marino','continent' => 'EU'),
        array('alpha2' => 'SN','alpha3' => 'SEN','fips' => 'SG','country' => 'Senegal','capital' => 'Dakar','continent' => 'AF'),
        array('alpha2' => 'SO','alpha3' => 'SOM','fips' => 'SO','country' => 'Somalia','capital' => 'Mogadishu','continent' => 'AF'),
        array('alpha2' => 'SR','alpha3' => 'SUR','fips' => 'NS','country' => 'Suriname','capital' => 'Paramaribo','continent' => 'SA'),
        array('alpha2' => 'SS','alpha3' => 'SSD','fips' => 'OD','country' => 'South Sudan','capital' => 'Juba','continent' => 'AF'),
        array('alpha2' => 'ST','alpha3' => 'STP','fips' => 'TP','country' => 'S??o Tom?? and Pr??ncipe','capital' => 'Sao Tome','continent' => 'AF'),
        array('alpha2' => 'SV','alpha3' => 'SLV','fips' => 'ES','country' => 'El Salvador','capital' => 'San Salvador','continent' => 'NA'),
        array('alpha2' => 'SX','alpha3' => 'SXM','fips' => 'NN','country' => 'Sint Maarten','capital' => 'Philipsburg','continent' => 'NA'),
        array('alpha2' => 'SY','alpha3' => 'SYR','fips' => 'SY','country' => 'Syria','capital' => 'Damascus','continent' => 'AS'),
        array('alpha2' => 'SZ','alpha3' => 'SWZ','fips' => 'WZ','country' => 'Eswatini','capital' => 'Mbabane','continent' => 'AF'),
        array('alpha2' => 'TC','alpha3' => 'TCA','fips' => 'TK','country' => 'Turks and Caicos Islands','capital' => 'Cockburn Town','continent' => 'NA'),
        array('alpha2' => 'TD','alpha3' => 'TCD','fips' => 'CD','country' => 'Chad','capital' => 'N\'Djamena','continent' => 'AF'),
        array('alpha2' => 'TF','alpha3' => 'ATF','fips' => 'FS','country' => 'French Southern Territories','capital' => 'Port-aux-Francais','continent' => 'AN'),
        array('alpha2' => 'TG','alpha3' => 'TGO','fips' => 'TO','country' => 'Togo','capital' => 'Lome','continent' => 'AF'),
        array('alpha2' => 'TH','alpha3' => 'THA','fips' => 'TH','country' => 'Thailand','capital' => 'Bangkok','continent' => 'AS'),
        array('alpha2' => 'TJ','alpha3' => 'TJK','fips' => 'TI','country' => 'Tajikistan','capital' => 'Dushanbe','continent' => 'AS'),
        array('alpha2' => 'TK','alpha3' => 'TKL','fips' => 'TL','country' => 'Tokelau','capital' => '','continent' => 'OC'),
        array('alpha2' => 'TL','alpha3' => 'TLS','fips' => 'TT','country' => 'Timor-Leste','capital' => 'Dili','continent' => 'OC'),
        array('alpha2' => 'TM','alpha3' => 'TKM','fips' => 'TX','country' => 'Turkmenistan','capital' => 'Ashgabat','continent' => 'AS'),
        array('alpha2' => 'TN','alpha3' => 'TUN','fips' => 'TS','country' => 'Tunisia','capital' => 'Tunis','continent' => 'AF'),
        array('alpha2' => 'TO','alpha3' => 'TON','fips' => 'TN','country' => 'Tonga','capital' => 'Nuku\'alofa','continent' => 'OC'),
        array('alpha2' => 'TR','alpha3' => 'TUR','fips' => 'TU','country' => 'Turkey','capital' => 'Ankara','continent' => 'AS'),
        array('alpha2' => 'TT','alpha3' => 'TTO','fips' => 'TD','country' => 'Trinidad and Tobago','capital' => 'Port of Spain','continent' => 'NA'),
        array('alpha2' => 'TV','alpha3' => 'TUV','fips' => 'TV','country' => 'Tuvalu','capital' => 'Funafuti','continent' => 'OC'),
        array('alpha2' => 'TW','alpha3' => 'TWN','fips' => 'TW','country' => 'Taiwan','capital' => 'Taipei','continent' => 'AS'),
        array('alpha2' => 'TZ','alpha3' => 'TZA','fips' => 'TZ','country' => 'Tanzania','capital' => 'Dodoma','continent' => 'AF'),
        array('alpha2' => 'UA','alpha3' => 'UKR','fips' => 'UP','country' => 'Ukraine','capital' => 'Kyiv','continent' => 'EU'),
        array('alpha2' => 'UG','alpha3' => 'UGA','fips' => 'UG','country' => 'Uganda','capital' => 'Kampala','continent' => 'AF'),
        array('alpha2' => 'UM','alpha3' => 'UMI','fips' => '','country' => 'U.S. Minor Outlying Islands','capital' => '','continent' => 'OC'),
        array('alpha2' => 'US','alpha3' => 'USA','fips' => 'US','country' => 'United States','capital' => 'Washington','continent' => 'NA'),
        array('alpha2' => 'UY','alpha3' => 'URY','fips' => 'UY','country' => 'Uruguay','capital' => 'Montevideo','continent' => 'SA'),
        array('alpha2' => 'UZ','alpha3' => 'UZB','fips' => 'UZ','country' => 'Uzbekistan','capital' => 'Tashkent','continent' => 'AS'),
        array('alpha2' => 'VA','alpha3' => 'VAT','fips' => 'VT','country' => 'Vatican City','capital' => 'Vatican City','continent' => 'EU'),
        array('alpha2' => 'VC','alpha3' => 'VCT','fips' => 'VC','country' => 'St Vincent and Grenadines','capital' => 'Kingstown','continent' => 'NA'),
        array('alpha2' => 'VE','alpha3' => 'VEN','fips' => 'VE','country' => 'Venezuela','capital' => 'Caracas','continent' => 'SA'),
        array('alpha2' => 'VG','alpha3' => 'VGB','fips' => 'VI','country' => 'British Virgin Islands','capital' => 'Road Town','continent' => 'NA'),
        array('alpha2' => 'VI','alpha3' => 'VIR','fips' => 'VQ','country' => 'U.S. Virgin Islands','capital' => 'Charlotte Amalie','continent' => 'NA'),
        array('alpha2' => 'VN','alpha3' => 'VNM','fips' => 'VM','country' => 'Vietnam','capital' => 'Hanoi','continent' => 'AS'),
        array('alpha2' => 'VU','alpha3' => 'VUT','fips' => 'NH','country' => 'Vanuatu','capital' => 'Port Vila','continent' => 'OC'),
        array('alpha2' => 'WF','alpha3' => 'WLF','fips' => 'WF','country' => 'Wallis and Futuna','capital' => 'Mata Utu','continent' => 'OC'),
        array('alpha2' => 'WS','alpha3' => 'WSM','fips' => 'WS','country' => 'Samoa','capital' => 'Apia','continent' => 'OC'),
        array('alpha2' => 'XK','alpha3' => 'XKX','fips' => 'KV','country' => 'Kosovo','capital' => 'Pristina','continent' => 'EU'),
        array('alpha2' => 'YE','alpha3' => 'YEM','fips' => 'YM','country' => 'Yemen','capital' => 'Sanaa','continent' => 'AS'),
        array('alpha2' => 'YT','alpha3' => 'MYT','fips' => 'MF','country' => 'Mayotte','capital' => 'Mamoudzou','continent' => 'AF'),
        array('alpha2' => 'ZA','alpha3' => 'ZAF','fips' => 'SF','country' => 'South Africa','capital' => 'Pretoria','continent' => 'AF'),
        array('alpha2' => 'ZM','alpha3' => 'ZMB','fips' => 'ZA','country' => 'Zambia','capital' => 'Lusaka','continent' => 'AF'),
        array('alpha2' => 'ZW','alpha3' => 'ZWE','fips' => 'ZI','country' => 'Zimbabwe','capital' => 'Harare','continent' => 'AF')
    );


    public static function getCountryByCode ( $name  ) {
         $key = array_search($name, array_column(self::$capitals, 'alpha2'));
        if( isset($key ) && $key !== false){
            return self::$capitals[$key]["capital"];
        }
        return false;
    }


    public static function getCityByCode ( $cityCode  ) {
        foreach (self::$capitals as $key => $value){
            foreach ($value as $key2 => $value2){
                if ($key2 == "aliases") {
                    foreach ($value2 as $val){
                        if ( $cityCode == $val){
                            return self::$capitals[$key]["capital"];
                        }
                    }
                }
            }
        }
     }

    public static function convert($array, $type){

        $array_temp = array();

        array_walk_recursive($array, function($value, $key)  use(&$array_temp, $type) {
            if( $key != 'pressure' && $key != 'humidity') {

                switch ($type) {
                    case  "fahrenheit" :
                        $array_temp [$key] = (float)number_format(($value * 9 / 5)  + 32, 2);
                        break;
                    case  "kelvin" :
                        $array_temp [$key] = (float)number_format(($value + 273.15)  , 2);
                        break;
                    default:
                        break;
                }
            }
        });

        return $array_temp;
    }

}
