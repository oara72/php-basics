<!DOCTYPE html>
<html>
<head>
<title>Solar System Distance Chart</title>
	<script src="modernizr-1.5.js"></script>
	<link href="solarsys.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<?php
define ("SUN_KM", 1400000);
define ("SUN_MILES", 865000);
define ("MERCURY_KM", 58);
define ("MERCURY_MILES", 36);
define ("VENUS_KM", 108);
define ("VENUS_MILES", 67);
define ("EARTH_KM", 150);
define ("EARTH_MILES", 93);
define ("MARS_KM", 227);
define ("MARS_MILES", 141);
define ("JUPITER_KM", 779);
define ("JUPITER_MILES", 483);
define ("SATURN_KM", 1428);
define ("SATURN_MILES", 886);
define ("URANUS_KM", 2974);
define ("URANUS_MILES", 1782);
define ("NEPTUNE_KM", 4506);
define ("NEPTUNE_MILES", 2794);
define ("PLUTO_KM", 5913);
define ("PLUTO_MILES", 3666);
$author = 'Oliver Rodriguez';
$quote = '"';

?>
<?php
echo "<h2>Solar System Distance Chart by $author</h2>";
?>
<table>
	<tr>
		<td><img src="images/sun.gif" alt="sun"></td>	
		<td>Sun (Diameter of the Sun is <?php echo number_format(SUN_KM); ?> km or <?php echo number_format(SUN_MILES); ?> miles)</td>
	</tr>
	<tr>
		<td><img src="images/mercury.gif" alt="mercury"></td>	
		<td>Mercury (Diameter of the Mercury is <?php echo number_format(MERCURY_KM); ?> million km or <?php echo number_format(MERCURY_MILES); ?> million miles)</td>
	</tr>
	<tr>
		<td><img src="images/venus.gif" alt="venus"></td>	
		<td>Venus (Diameter of the Venus is <?php echo number_format(VENUS_KM); ?> million km or <?php echo number_format(VENUS_MILES); ?> million miles)</td>
	</tr>
	<tr>
		<td><img src="images/earth.gif" alt="earth"></td>	
		<td>Earth (Diameter of the Earth is <?php echo number_format(EARTH_KM); ?> million km or <?php echo number_format(EARTH_MILES); ?> million miles)</td>
	</tr>
	<tr>
		<td><img src="images/mars.gif" alt="mars"></td>	
		<td>Mars (Diameter of the Mars is <?php echo number_format(MARS_KM); ?> million km or <?php echo number_format(MARS_MILES); ?> million miles)</td>
	<tr>
		<td><img src="images/jupiter.gif" alt="jupiter"></td>	
		<td>Jupiter (Diameter of the Jupiter is <?php echo number_format(JUPITER_KM); ?> million km or <?php echo number_format(JUPITER_MILES); ?> million miles)</td>
	</tr>
	<tr>
		<td><img src="images/saturn.gif" alt="saturn"></td>	
		<td>Saturn (Diameter of the Saturn is <?php echo number_format(SATURN_KM); ?> million km or <?php echo number_format(SATURN_MILES); ?> million miles)</td>
	</tr>
	<tr>
		<td><img src="images/uranus.gif" alt="uranus"></td>	
		<td>Uranus (Diameter of the Uranus is <?php echo number_format(URANUS_KM); ?> million km or <?php echo number_format(URANUS_MILES); ?> million miles)</td>
	</tr>
	<tr>
		<td><img src="images/neptune.gif" alt="neptune"></td>	
		<td>Neptune (Diameter of the Neptune is <?php echo number_format(NEPTUNE_KM); ?> million km or <?php echo number_format(NEPTUNE_MILES); ?> million miles)</td>
	</tr>
	<tr>
		<td><img src="images/pluto.gif" alt="pluto"></td>	
		<td>Pluto (Diameter of the Pluto is <?php echo number_format(PLUTO_KM); ?> million km or <?php echo number_format(PLUTO_MILES); ?> million miles)</td>
	</tr>
</table>
<?php
echo "<hr>";
echo "Programmed by - $quote$author$quote ";
?>
</body>
</html>