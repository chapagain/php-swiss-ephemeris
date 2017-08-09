<?php 

// path to swiss ephemeris library files
$libPath = './sweph/';

putenv("PATH=$libPath");

/**
 * Assuming birth date to be 
 * 9th August 2017, 9:35 PM
 */
$birthDate = new DateTime( '09 August 2017 21:35:00');
//echo $birthDate->format('Y-m-d H:i:s'); echo '<br>';

/**
 * Latitude Longitude
 * of Kathmandu, Nepal
 */
$latitude = 27.7172453;
$longitude = 85.3239605;

/**
 * Timezone value for Nepal
 * As Nepal time is 5 hours 45 minutes ahead of UTC
 *
 * Put this value according to your country
 */
$timezone = 5.75; 

/**
 * Converting birth date/time to UTC
 */
$offset = $timezone * (60 * 60);
$birthTimestamp = strtotime($birthDate->format('Y-m-d H:i:s'));
$utcTimestamp = $birthTimestamp - $offset;
//echo date('Y-m-d H:i:s', $utcTimestamp); echo '<br>';

$date = date('d.m.Y', $utcTimestamp);
$time = date('H:i:s', $utcTimestamp);

$h_sys = 'P';

// More about command line options: https://www.astro.com/cgi/swetest.cgi?arg=-h&p=0
exec ("swetest -edir$libPath -b$date -ut$time -p0123456789DAmt -sid1 -eswe -house$longitude,$latitude,$h_sys -fPls -g, -head", $output);


# OUTPUT ARRAY
# Planet Name, Planet Degree, Planet Speed per day
var_dump($output); 

?>