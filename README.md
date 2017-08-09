PHP Swiss Ephemeris
========
Getting Planets Position using PHP &amp; [AstroDienst Swiss Ephemeris](http://www.astro.com/swisseph/) library.

About Swiss Ephemeris
-------------
The SWISS EPHEMERIS is the high precision ephemeris developed by Astrodienst, largely based upon the DExxx ephemerides from [NASA's JPL](http://en.wikipedia.org/wiki/Jet_Propulsion_Laboratory_Development_Ephemeris).

You can download the Swiss Ephemeris library from the following links:

[http://www.astro.com/ftp/swisseph](http://www.astro.com/ftp/swisseph) OR [ftp://ftp.astro.com/pub/swisseph](ftp://ftp.astro.com/pub/swisseph) 

In this repository, I have included following two time range's files. 

Planetary file   | Moon file 	| Main asteroid file 	| Time range 
-------- 			| ---   		 	| ---   						| ---
sepl_12.se1 | semo_12.se1 | seas_12.se1 | 1200 AD – 1799 AD
sepl_18.se1    | semo_18.se1 | seas_18.se1 | 1800 AD – 2399 AD

Time range from 1200 AD to 2399 AD is enough for general astrological calculation. 
 
Name of library files associated with different time ranges is given in this detailed [**Swiss Ephemeris doc**](http://www.astro.com/ftp/swisseph/doc/swisseph.pdf).
 
You can download the library files for other time ranges from download area: 
[http://www.astro.com/ftp/swisseph/ephe/](http://www.astro.com/ftp/swisseph/ephe/) OR [ftp://ftp.astro.com/pub/swisseph/ephe/](ftp://ftp.astro.com/pub/swisseph/ephe/).  [*Note: Scroll down the list and you will see the files to download.*]

Code & Output
-------------
This code has been tested on Ubuntu Linux Machine.

There are two files at the moment. 

**1. transit.php :** Outputs current planetary positions

**2. natal.php :** Outputs planetary positions and ascendant degree for any particular date (e.g. birth date)

Here's a line of code from *transit.php* which is responsible for outputting current planetary positions:

```
exec ("swetest -edir$libPath -b$date -ut$time -p0123456789mt -n1 -sid1 -eswe -fPls -g, -head", $output_s);

var_dump($output_s); 
```

In the above code, you can see different command line options. You can get details about them from here: 
https://www.astro.com/cgi/swetest.cgi?arg=-h&p=0

In the output array elements: 

- First part is Planet Name
- Second part is Planet Degree
- Third part is Planet Speed per day 

The output of the above code will be like below:

```
array (size=12)
  0 => string 'Sun            , 113.3930700,  0.9587323' (length=40)
  1 => string 'Moon           , 318.8409756, 12.9537458' (length=40)
  2 => string 'Mercury        , 137.1164786,  0.2663238' (length=40)
  3 => string 'Venus          , 76.6969846,  1.1684473' (length=39)
  4 => string 'Mars           , 109.0169143,  0.6400332' (length=40)
  5 => string 'Jupiter        , 174.1758557,  0.1512867' (length=40)
  6 => string 'Saturn         , 237.2760952, -0.0246188' (length=40)
  7 => string 'Uranus         ,  4.4071387, -0.0054264' (length=39)
  8 => string 'Neptune        , 319.4429069, -0.0239242' (length=40)
  9 => string 'Pluto          , 263.3135899, -0.0204321' (length=40)
  10 => string 'mean Node      , 120.4265476, -0.0529537' (length=40)
  11 => string 'true Node      , 120.0887980,  0.0073022' (length=40)
```

Thanks
-------------
Allen Edwall for [PHP Scripts for Astrological Websites](http://www.astrowin.org/php_scripts/index.html)

**#Astrology** **#Astronomy**
