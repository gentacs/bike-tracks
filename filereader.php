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
$first_bool = True;
$first = "";

while (!feof($data)) {
  $line = fgets($data);
  if(preg_match('/<ele>/',$line))
    $elevation=trim(strip_tags($line));
  if(preg_match('/<time>/',$line))
    $timestamp=strtotime(trim(strip_tags($line),"\t"));
    echo "[$line]\n";
    if($first_bool) 
      {
      $first = $timestamp;
      $first_bool = False;
      echo "first: $first";
      }
  echo "$elevation "."$first "."$timestamp\n";
}
fclose($data);
?>
