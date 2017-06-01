<?php
$score = $_GET["score"];
$scorex = explode(":", $score);
$highscore = $scorex[0];
?>
<html>
<head>
<title>Misi Merah Putih</title>
<meta property="og:title" content="Yeah, saya <?echo $highscore;?> kali gugur dalam Misi Merah Putih. Akhirnya... Merdeka!"/>
<meta property="og:image" content="http://googledrive.com/host/0B0bfhG_T7k_9XzJ5U09UN2RveUk/misi.jpg"/>
<meta property="og:site_name" content="Demidemu"/>
<meta property="og:description" content="Selamat. Anda <?echo $highscore;?> kali gugur dalam Misi Merah Putih. Mampu lebih baik lagi? :D"/>	
</head>
<body>
<meta http-equiv="refresh" content="0;URL=http://demidemu.xyz" />
</body>
</html>