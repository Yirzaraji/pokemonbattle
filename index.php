<html>
<head>

    <meta charset="UTF-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<title>THE POKEMON BATTLE</title>

</head>

<body>
<?php
//Pokemons POO attributs
        require 'class/pokemon.php';
        
        $Pok1 = new Pokemon('Bulbizarre', '95', '20', 'boulbega.png');
		$Pok2 = new Pokemon('Pikachu', '80', '20', 'pika.jpg');
		$Pok3 = new Pokemon('Salameche', '84', '32', 'salameche.png');
		$Pok4 = new Pokemon('Tortank', '95', '14', 'tortank.png');
?>


<div class="superblock">
                
                        <div class="card" id="card01"
						data-name="<?php echo $Pok1->getName();?>"
						data-life="<?php echo $Pok1->getvie();?>" 
						><!-- FIN DE CELLULE -->
							<img src="img/<?php echo $Pok1->getAvatar()?>"><br>

							<?php echo 'Name: <b>'.$Pok1->getName().'<br></b>Life: <b>'.$Pok1->getVie().'</b><br>Attack power: <b>'.$Pok1->getAtak().'</b><br>';
							?>
							
						</div>
                 
					

						<div class="card" id="card02"
						data-name="<?php echo $Pok2->getName();?>"
						data-life="<?php echo $Pok2->getvie();?>"  
						><!-- FIN DE CELLULE -->

							<img src="img/<?php echo $Pok2->getAvatar()?>"><br>
							<?php
							echo 'Name: <b>'.$Pok2->getName().'<br></b>Life: <b>'.$Pok2->getVie().'</b><br>Attack power: <b>'.$Pok2->getAtak().'</b>';
							?>			
						
						</div>

					


						<div class="card" id="card03"
						data-name="<?php echo $Pok3->getName();?>"
						data-life="<?php echo $Pok3->getvie();?>"  
						><!-- FIN DE CELLULE -->

							<img src="img/<?php echo $Pok3->getAvatar()?>"><br>
							<?php
							echo 'Name: <b>'.$Pok3->getName().'<br></b>Life: <b>'.$Pok3->getVie().'</b><br>Attack power: <b>'.$Pok3->getAtak().'</b>';
							?>
						</div>

						<div class="card" id="card04"
						data-name="<?php echo $Pok4->getName();?>"
						data-life="<?php echo $Pok4->getvie();?>"  
						><!-- FIN DE CELLULE -->

							<img src="img/<?php echo $Pok4->getAvatar()?>"><br>
							<?php
							echo 'Name: <b>'.$Pok4->getName().'<br></b>Life: <b>'.$Pok4->getVie().'</b><br>Attack power: <b>'.$Pok4->getAtak().'</b>';
							?>
						</div>



</div><!-- FIN DIV CARTE -->




<div class="wrapper">
    <button type="button" id="fight" class="btn btn-warning">Ready ? fight !</button>
</div>


<div id="combat">


<?php
//COMBAT SANS POO
$vie = 100;
$atak = 23;
$pok = "pika";
$pok2 = "culbuto";
$dead = 0;

      for($atak=23 ; $vie > $dead ; $vie = $vie - $atak){
          
          
          echo $pok2.' Points de vie; '.$vie.'<br>'.$pok.' attaque '.$pok2.' de '.$atak.' points de degat <br>';
          echo $pok.' Points de vie; '.$vie.'<br>'.$pok2.' attaque '.$pok.' de '.$atak.' points de degat <br>';
          
          
                  if($vie <= 8){
                  
                  echo $pok." est mort<br> ";
                  
                  }
                 else{
                  
                  
                 }
        
  
      };












//COMBAT AVEC POO NON finalisé !
	$bulbizarreN = $Pok1->getName();
	$bulbizarreV = $Pok1->getVie();

	$pikachuN = $Pok2->getName();
	$pikachuV = $Pok2->getVie();

	$salamecheN = $Pok3->getName();
	$salamecheV = $Pok3->getVie();

	$calculCombat = $salamecheV - $Pok2->getAtak();

	echo 'la vie de '.$Pok3->getName().' est de '.$Pok3->getVie().' et son attaque est de '.$Pok3->getAtak();
	echo '<br>'.$Pok3->getName().' Attaque '.$Pok2->getName(). ' lui ingfligeant '.$Pok3->getAtak().' points de degat';
	echo ' <br>La vie de '.$Pok2->getName().' tombe a : ' .$calculCombat.' ! ';




	if($pikachuV == 0){

		echo ($pikachuN.' est mort <br>');

	}
	else{

		echo ('<br>'.$pikachuN.' est toujours vivant<br>');
	};

	/* while ($pikachuV >= 0){
		echo $calculCombat;


	}; */






/* $nameBulbi = $Pok1->getName();
$vieBulbi = $Pok1->getVie();
$atakBulbi = $pok1->getAtak();

$namePika = $Pok2->getName();
$viePika = $Pok2->getVie();
$atakPika = $pok2->getAtak();
 */


?>
</div>





<script type  ="text/javascript" src="script.js"></script>
</body>

</body>

</html>