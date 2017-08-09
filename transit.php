<?php 

// path to swiss ephemeris library files
$libPath = './sweph/';

putenv("PATH=$libPath");

//$usersTimezone = 'Asia/Kathmandu';
//$currentDate = new DateTime("now", new DateTimeZone($usersTimezone) );

$currentDate = new DateTime("now");

$date = $currentDate->format('d.m.Y');
$time = $currentDate->format('H:i:s');

# OUTPUT ARRAY
# Planet Name, Planet Degree, Planet Speed per day

// More about command line options: https://www.astro.com/cgi/swetest.cgi?arg=-h&p=0

// TROPICAL ZODIAC
exec ("swetest -edir$libPath -b$date -ut$time -p0123456789mt -eswe -fPls -g, -head", $output_t);
var_dump($output_t); 

// SIDEREAL ZODIAC using Lahiri Ayanamsa | Planetary position for single day
exec ("swetest -edir$libPath -b$date -ut$time -p0123456789mt -n1 -sid1 -eswe -fPls -g, -head", $output_s);
var_dump($output_s); 

// SIDERAL ZODIAC using Lahiri Ayanamsa | Planetary position for 5 consecutive days
exec ("swetest -edir$libPath -b$date -ut$time -p0123456789mt -n5 -sid1 -eswe -fPls -g, -head", $output_s5);
var_dump($output_s5); 

?>