
<?php

// DB configuration
// Note that you can set multiple values in dbname if using multiple DBs
// $dbname should then be a comma separated list of values
// Users should register to only one DB or tool will redirect them randomly

$dbhost     = "127.0.0.1";
$dbname     = "okhunyporacle";
$dbuser     = "poracleuser";
$dbpass     = "p0kem0n";
$dbport     = "3306";

// Scanner DB Configuration (scan_dbtype should be MAD or RDM)

$scan_dbtype     = "MAD";
$scan_dbhost     = "127.0.0.1";
$scan_dbname     = "okhuny_hsdb";
$scan_dbuser     = "okhuny_hsdbuser";
$scan_dbpass     = "p0kem0n";
$scan_dbport     = "3306";


// Poracle Install Directoyy

$poracle_dir="/home/dharmesh/okhunymaps/Poracle";

// Discord Configuration

$redirect_url="https://poracle.okhuny.com";
$discordBotClientId = "379767217618681866";
$discordBotClientSecret = "XE1ICsGXLZKsJkM6mSEcwYIclaU9Gz6I";

// Image Repository 
$imgUrl="https://raw.githubusercontent.com/nileplumb/PkmnShuffleMap/master/PMSF_icons_large/";

// Provide a valid URL to your Tile Server for Displaying a location map
// Arguments should correspond to your server template setup
// Use #LAT# and #LON# as placeholders for latitude and longitude
// An example is provided hereunder

$mapURL="https://tileserver.okhuny.com/multistaticmap/pokesat?id=150&form=0&evolution=&lat=#LAT#&lon=#LON#";

// Other Configuration Items

$max_pokemon="721";
$raid_bosses="6,68,94,105,297,303,306,460,530,532,599,646,661,667,677"; 

?>
