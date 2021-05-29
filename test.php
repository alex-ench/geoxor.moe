<?php
$pathName = "./audio/Geoxor - Aether.mp3";
$getID3 = new getID3;
$ThisFileInfo = $getID3->analyze($pathName); // playtime in minutes:seconds, formatted string
$len = @$ThisFileInfo['playtime_string']; //don't get playtime_string, but get playtime_seconds
$len = @$ThisFileInfo['playtime_seconds']*1000; //*1000 as calculate millisecond