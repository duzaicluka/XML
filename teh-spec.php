<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css"/>
    <title>Porsche 911 GT3 RS</title>
</head>
<body>

    <?php
	$xml=simplexml_load_file("porsche911.xml");
	
    $horespower=$xml->horsepow;
    $acce=$xml->acceleration;
    $top_spd=$xml->top_spd;
    $potrosnja= $xml->potrosnja;
    $emisija= $xml->emisija;
    $br_cilindra=$xml->br_cilindra;
    $promjer_klipa=$xml->br_cilindra;
    $promjer_klipa=$xml->promjer_klipa;
    $hod_klipa=$xml->hod_klipa;
    $zapremnina=$xml->zapremnina;
    $snagakw=$xml->snagakw;
    $snagahp=$xml->snagahp;
    $rpmnm=$xml->rpmnm;
    $rpmmax=$xml->rpmmax;
    $okretnkimoment=$xml->okretnimoment;
    $rpmmaxnm=$xml->rpmmaxnm;
?>

    <div class="hero">
        <div class="hero-center">
            <h1>911 GT3 RS</h1>
            <div class="sub-div">
                <p>Please start the configuration in the Porsche Car Configurator to see prices or contact your official local Porsche Center.</p>
                <div class="horsepower">
                    <p class="data"><?php echo $horespower?></p>
                    <div class="objasnjenje">
                        <p>Snaga (kW)/Snaga (hp)</p>
                    </div>
                </div>
                <div class="acceleration">
                    <p class="data"><?php echo $acce?></p>
                    <div class="objasnjenje">
                        <p>Ubrzanje od 0 - 100 km/h</p>
                    </div>
                </div>
                <div class="top-spd">
                    <p class="data" ><?php echo $top_spd?></p>
                    <div class="objasnjenje">
                        <p>Maksimalna brzina</p>
                    </div>
                </div>
            </div>
            <h3>WLTP*</h3>
            <div class="wltp-data">
                <div class="potrosnja">
                    <h6 class="data"><?php echo $potrosnja?></h6>
                    <p>l/100km</p>
                </div>
                <div class="eco">
                    <h6 class="data"><?php echo $emisija?></h6>
                    <p>g/km</p>
                </div>
            </div>
        </div>
    </div>
    <div class="teh-spc">
         <div class="left">
            <h3>Tehnical Specs</h3>
            <div class="specs">
                <div class="spec">
                    <p>Broj cilindara</p>
                    <p class="data"><?php echo $br_cilindra?></p>
                </div>
                <div class="spec">
                    <p>Promjer klipa</p>
                    <p class="data"> <?php echo $promjer_klipa?></p>
                </div>
                <div class="spec">
                    <p>Hod klipa</p>
                    <p class="data"> <?php echo $hod_klipa?></p>
                </div>
                <div class="spec">
                    <p>Zapremnina motora</p>
                    <p class="data"><?php echo $zapremnina?></p>
                </div>
                <div class="spec">
                    <p>Snaga (kW)</p>
                    <p class="data"><?php echo $snagakw?></p>
                </div>
                <div class="spec">
                    <p>Snaga (hp)</p>
                    <p class="data"><?php echo $snagahp?></p>
                </div>
                <div class="spec">
                    <p>RPM maksimalna snaga razcijena iz broja okretaja</p>
                    <p class="data"><?php echo $rpmnm?></p>
                </div>
                <div class="spec">
                    <p>Maksimalna brzina motora</p>
                    <p class="data"><?php echo $rpmmax?></p>
                </div>
                <div class="spec">
                    <p>Maksimalni okretni moment</p>
                    <p class="data"><?php echo $okretnkimoment?></p>
                </div>
                <div class="spec">
                    <p> RPM maksimalni okretni moment razvijen iz broja okretaja</p>
                    <p class="data"><?php echo $rpmmaxnm?></p>
                </div>

            </div>
         </div>
         <div class="right"> 
            <img src="slike/figure.png" class="silueta" alt="silueta">
         </div>
    </div>

    <footer>
        <h3>Luka Dužaić 2023. </h3>
    </footer>
    
</body>
</html>