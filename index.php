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



        <form action="result-nota.php" method="post">
          <h5 class="sub-titulos"> Digite seu nome:</h5>
          <input type="text" class="form-control" name="nomealuno" autocomplete="off">
          <hr>  
            
          <!-- primeira avaliação -->

          <h4 class="text-uppercase text-muted"> Notas da primeira Avaliação</h4>

          <h5> Digite a nota da <strong>Avaliação Online I </strong> </h5>
          <input type="text" class="input-sm form-control" name="avaliacao-online-1" required autocomplete="off">
          <h5>Digite a nota da <strong>Avaliação Online II</strong></h5>
          <input type="text" class="input-sm form-control" name="avaliacao-online-2" required autocomplete="off">
          <h6> formula seguida ( (Avaliação Online I * 4) + (Avaliação Online II * 6) ) / 10</h6>
          <br>

          <!-- segunda avaliação -->

          <h4 class="text-uppercase text-muted"> Notas da segunda Avaliação</h4>

          <h5> Digite a nota da <strong>Avaliação Online III </strong> </h5>
          <input type="text" class="input-sm form-control" name="avaliacao-online-3" required autocomplete="off">
          <h5>Digite a nota da <strong>Avaliação Presencial I</strong></h5>
          <input type="text" class="input-sm form-control" name="avaliacao-presencial-1" required autocomplete="off">
          <h6> formula seguida ( (Avaliação Online III * 3) + (Avaliação Presencial * 7) ) / 10</h6>
          
          <br>  
          <input type="submit" name="Calcular" value="Calcular" class="btn center-block btn-config"> 


        </form>

        
        

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
