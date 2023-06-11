<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Porsche</title>
</head>
<body>


    <?php
	$xml=simplexml_load_file("porsche911.xml");
	
    $horespower=$xml->horsepow;
    $acce=$xml->acceleration;
    $top_spd=$xml->top_spd;
    $potrosnja= $xml->potrosnja;
    $emisija= $xml->emisija;
	
?>

    <nav>
        <img src="slike/porscheann.jpg" class="logo" alt="Porsche annivirsery logo (75)">
        <a href="#" class="name">PORSCHE</a>
        <a href="login.php">Prijavi se</a>
    </nav>

    <div class="hero">
        <img src="slike/hero-pic.jpg"  class="hero-pic" alt="porsche 911 gt3rs">
        <div class="text-in-hero">
            <h1> <span class="red">></span> Najbolji dio traženja? Pronalazak.</h1>
            <h2>Pronađite svoje vozilo iz snova online - brzo i jednostavno s 
                Porsche Finderom</h2>
        </div>
    </div>

    <div class="model">
        <div class="model-wrapper">
            <div class="top-model">
                <h1>911 GT3 RS</h1>
                <h2>Please start the configuration in the Porsche Car Configurator
                    to see prices or contact your official local Porsche Center.
                </h2>
            </div>
            <div class="middle-model">
                <img src="slike/slika-auta.png" alt="Porsche 911 GT3 RS" class="car-img" />
            </div>
            <div class="lower-model">
                <div class="upper-data">
                    <div class="data">
                        <div class="horsepower">
                            <p><?php echo $horespower?></p>
                        </div>
                        <div class="objasnjenje">
                            <p>Snaga(kW)/Snaga(hp)</p>
                        </div>
                    </div>
                    <div class="data">
                        <div class="acc">
                            <p><?php echo $acce?></p>
                        </div>
                        <div class="objasnjenje">
                            <p>Ubrzanje od 0 - 100 km/h</p>
                        </div>
                    </div>
                    <div class="data">
                        <div class="top-spd">
                            <p><?php echo $top_spd?></p>
                        </div>
                        <div class="objasnjenje">
                            <p>Maksimalna brzina</p>
                        </div>
                    </div>

                </div>
                <div class="lower-data">
                    <div class="eco">
                        <h3>WLTP*</h3>
                        <i class="fa-regular fa-gas-pump"></i>
                        <div class="potrosnja">
                            <h6><?php echo $potrosnja?></h6>
                            <p>l/100km</p>
                        </div>
                    </div>
                    <div class="eco">
                        <h6><?php echo $emisija?></h6>
                        <p>g/km</p>
                    </div>
                    <div class="more-details-btn">
                        <a href="teh-spec.php"  ><span>></span> Thenical Specs</a>
                    </div>
                </div>
                

            </div>

        </div>

    </div>
    <footer>
        <h3>Luka Dužaić 2023. </h3>
    </footer>

    
</body>
</html>