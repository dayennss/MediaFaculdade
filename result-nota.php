<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css">

    <title>Calculadora de Media Final Unigranrio.</title>
  </head>
  <body>
  	<section class="unig">
      <div class="center-block box">
        <img src="http://ios.org.br/wp-content/uploads/2017/01/Logo_Unigranrio_Padrao-700x116.png" alt="logo-unigranrio" class="img-logo img-responsive">
        <h3 class="titulo-inicial"> Calculadora de Media Final Unigranrio </h3>

        <?php 	

			$aluno = $_POST['nomealuno'];
			$online1 = $_POST['avaliacao-online-1'];
			$online2 = $_POST['avaliacao-online-2'];
			$online3 = $_POST['avaliacao-online-3'];
			$precencial = $_POST['avaliacao-presencial-1'];


			$tot1Avaliacao = ( ( $online1 * 4) + ($online2 * 6 ) ) / 10;
			// NOTA DA PRIMEIRA AVALIAÇÃO 

			$tot2Avaliacao = ( ($online3 * 3 ) + ($precencial * 7) ) /10;
			// NOTA DA SEGUNDA AVALIAÇÃO 

			$total = ($tot1Avaliacao + $tot2Avaliacao) / 2;
			// NOTA TOTAL DAS DUAS AVALIAÇÕES 

			$media = 7;

			echo " <h4> Olá  <strong>" . $aluno . " </strong>, suas notas são essas aqui ô... </h4>";

			echo "
				
				<strong> Nota total da primeira avaliação: </strong> <i>" . "$tot1Avaliacao" . " </i> <br> 

				<strong> Nota total da segunda avaliação </strong> <i>" . "$tot2Avaliacao<br>" . " </i> <br>

				<strong> AV1 + AV2 dividido por 2 é de </strong> <i> "." $total .  ""

			"
		?>

		<?php 

			if ($total >= $media) {
				echo "<br> Você está na media, não vai precisar fazer a AVS nessa materia";
			} else {
				echo " <br> Você vai precisar fazer a AVS dessa matéria.";
			}
			
		?>


        
        

      </div>
  	</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- Última versão JavaScript compilada e minificada -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
