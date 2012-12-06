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
$first_bool = True;
$first = "";

//Get Contents of GPX
$gpxData = file_get_contents($current_map);
$gpxXML = new SimpleXMLELement($gpxData);

$date = $gpxXML->trk->trkseg->trkpt->time;

#### add data to gpx table ####a
$latArray = array();
$lonArray = array();
$timeStamps = array();
foreach($gpxXML->trk->trkseg as $trkSeg) {
  foreach($trkSeg->trkpt as $trkPt) {
    $time = $trkPt->time;
    $timestamp = strtotime($time);
    echo "time: $time timestamp: $timestamp";
      if($first_bool) 
      {
      $first = $timestamp;
      $first_bool = False;
      echo "first: $first";
      }
    if(in_array($time, $timeStamps)) {
      continue;
      }
      

    $elev = $trkPt->ele;
    $lat = $trkPt['lat'];
    $lon = $trkPt['lon'];
    echo "$timestamp $elev\n";
       }
}

/*while (!feof($data)) {
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
} */
//fclose($data);
?>
