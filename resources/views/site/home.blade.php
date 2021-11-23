@extends('site.master.layout')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-summer-ice-cream-ice-cream-propaganda-image_11340.jpg" alt="">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Sorveteria Kibom</h1>
            <?php
            if(date('H') >= 0 && date ('H')<=12){
                echo"<p>Bom Dia!</p>";
            }else if(date('H') >= 13 && date ('H')<=18){
                echo"<p>Boa Tarde!</p>";
            }else{
                echo"<p>Boa Noite!</p>";
            }?>
            <p>A Sorveteria Kibom tem na essência de seus produtos a fabricação de forma semi-artesanal produzidas por um Chef Profissional, acolhendo seus clientes em um ambiente de sorveteria tradicional com espaço criança e café para a tranquilidade e casualidade.
</p>
          </div>
        </div>
      </div>
      
  </div>
<br>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
  <center><strong><h2> Empregados: </h2></strong></center>
  <br>

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img src="https://cdn.discordapp.com/attachments/621490820146659369/912542555491676250/Empregado2.png" alt="" height="200" width="" >
        <h2>DaBaby🤩</h2>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://cdn.discordapp.com/attachments/621490820146659369/912540683452166184/Sem_Titulo-1.png" alt="" width="190" height="190" >
        <h2>Muca Lol🤡</h2>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://cdn.discordapp.com/attachments/621490820146659369/912543693406355486/Empregado3.png" alt="" width="" height="190" >
        <h2>Rogerin🤑</h2>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <center><strong><h2> Cardapio: </h2></strong></center>

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Casquão<span class="text-muted"> /Sabores: </span></h2>
        <p>• Casquão Sabor Leite Ninho 🍦</p><p>• Casquão Sabor Mix 🍦</p><p>• Casquão Sabor Chocolate 🍦</p>
      </div>
      <div class="col-md-5">
        <img src="https://cdn.discordapp.com/attachments/621490820146659369/912544889311494154/Sem_Titulo-2.png" width="" height=""  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Milk Shakes<span class="text-muted"> /Sabores: </span></h2>
        <p>• Milk Shake Sabor Chocolate 🍨</p><p>• Milk Shake Sabor Morango 🍨</p><p>• Milk Shake Sabor Ovomaltine  🍨</p><p>• Milk Shake Sabor Chiclete 🍨</p>

      </div>
      <div class="col-md-5 order-md-1">
      <img src="https://cdn.discordapp.com/attachments/621490820146659369/912547604330598451/Sem_Titulo-5.png" width="400" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Açai <span class="text-muted"> /Sabores: </span></h2>
        <p>• Açaí Tradicional ☕</p><p>• Açaí Tropical ☕</p><p>• Açaí Kid ☕</p><p>• Barca de Açaí ☕</p>
      </div>
      <div class="col-md-5">
      <img src="https://cdn.discordapp.com/attachments/621490820146659369/912546917668507758/Sem_Titulo-4.png" width="400" height="400"  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


@endsection
