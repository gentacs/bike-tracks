<?php
$current_map=$_GET["elev"];
if (isset($current_map))
{
echo "current map present";
}
else
{
$current_map=$argv[1];
}
if(!$current_map)
{
die("no map provided\n");
}
else
{
echo "map provided from the command line\n";
}
$data=fopen($current_map,'r');

//$time0=preg_match('/<time>/',$data);
echo "time0: $time0";
while (!feof($data)) {
  $line = fgets($data);
  if(preg_match('/<ele>/',$line))
    $elevation=trim(strip_tags($line));
  if(preg_match('/<time>/',$line))
    $timestamp=strtotime(trim(strip_tags($line),"\t"));
  echo "$elevation"." $timestamp\n";
}
fclose($data);
?>
