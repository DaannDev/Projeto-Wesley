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
        <img src="https://caianomundo-prod.imgix.net/2014/01/sorvete.jpg?fm=pjpg&ixlib=php-1.2.1" alt="">
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
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Entre Imediatamente</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://moinhoglobo.com.br/wp-content/uploads/2020/10/05-sorvete-caseiro.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Especialidade</h1>
            <p>Nossa especialidade é levar doçura com uma receita de família, nossos sorvetes são feitos com insumos de origem italiana, além de serem produzidos de forma semi-artesanal.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Saiba Mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://polosulsc.com.br/wp-content/webp-express/webp-images/uploads/2018/03/Tr%C3%AAs-tipos-e-sabores-de-sorvete-diferentes-1.jpg.webp" alt="">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Seja Franqueado</h1>
            ?>
            <p>Já pensou em ter um negócio delicioso? Nos últimos anos, o consumo de sorvetes no Brasil cresceu constantemente, segundo a pesquisa da Associação Brasileira das Industrias e do Setor de Sorvetes(ABIS). O volume saltou de 686 milhões de litros em 2003 para 1 bilhão em 2016, com destaque para 2014, que teve uma alta de consumo de 1,3 bilhão. Dê agora o primeiro passo para um negócio saboroso e lucrativo!</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Quero ser Franqueado</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img src="https://pbs.twimg.com/media/DRdahSVXcAAsbrf.jpg" alt="" width="140" height="140" >
        <h2>Empregado Jovirone</h2>
        <p>Depois de Largar a vida de lol e drogas, ele decidiu trabalhar na empresa KiBom e é sempre o funcionario do Mês</p>
        <p><a class="btn btn-secondary" href="#" role="button">Selecionar Empregado &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://pbs.twimg.com/media/ErfafCzXcAEKLqs.png" alt="" width="140" height="140" >
        <h2>Empregado Tteuw</h2>
        <p>tteuw é o sorveteiro mais animado do grupo, sempre fazendo palhaçadas para animar o publico e antes de entrar na KiBom ele era o famoso cria de bangu.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Selecionar Empregado &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://www.cn1.com.br/fotos/noticias/24734/IMAGEM_NOTICIA_0.jpg?v=1c1fc0b095ee02a" alt="" width="140" height="140" >
        <h2>Empregado Nal do Canal</h2>
        <p>Nal do canal é o funcionario mais obediente da empresa, mas sempre que vê algum pokemon, faz muita trapalhada para assustar os clientes</p>
        <p><a class="btn btn-secondary" href="#" role="button">Selecionar Empregado &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">MilkShake<span class="text-muted"> Sabor barro</span></h2>
      </div>
      <div class="col-md-5">
        <img src="http://www.srsorvete.com.br/admin/uploads/images/conteudo/5be096d2b79e6_kinder-ovoKINDER.jpg" width="400" height="400"  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Sandro<span class="text-muted"> de Morango</span></h2>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="http://www.srsorvete.com.br/admin/uploads/images/conteudo/5be09cf4c4e42_sundae7.jpg" width="400" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Açai <span class="text-muted">Infantil</span></h2>
      </div>
      <div class="col-md-5">
      <img src="http://www.srsorvete.com.br/admin/uploads/images/conteudo/5be09cafa20c2_acai-kidsKIDS.jpg" width="400" height="400"  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


@endsection
