<div id="container">

    <div class="card d-flex flex-columns flex-lg-row mx-md-5 mx-2">    

        <figure>
            <img id="mainImg" src="<?= $result['image'] ?>" alt="<?= $result['name'] ?>"/>
        </figure>

        <div class="content">

                <p class="h1 text-center">
                    <?=$result['name']?>
                </p>            
                    
                <br>

                <p class="text-muted" style="margin: 0;">Raza</p>
                <p class="h3"><?=$result['race']?></p>

                <p class="text-muted" style="margin: 0;">Genero</p>
                <p class="h3"><?=$result['gender']?></p>

                <p class="text-muted" style="margin: 0;">Poder ki</p>
                <p class="h3"><?=$result['ki']?></p>

                <p class="text-muted" style="margin: 0;">Afiliación</p>
                <p class="h3"><?=$result['affiliation']?></p> 

        </div>

        <div class="mapDetail has-background-primary-35">

                <p class="text-muted text-center" style="margin: 0;">Planeta</p>
                <p class="h3 text-center"><?=$result['originPlanet']['name']?></p>
                
                <img class="img-fluid" 
                     src="<?= $result['originPlanet']['image'] ?>" 
                     alt="<?= $result['originPlanet']['name']?>"      
                > 

        </div>

        <div class="mapDesciption text-center">

            <p class="h3 text-center" style="margin: 0;">Descripción:</p>
            <br>
            <p class=""><?=$result['originPlanet']['description']?></p> 

        </div>        

    </div>
    
     <?php if (count($result['transformations']) > 0): ?>
            <p class="h1 text-center">TRANSFORMACIONES</p>
     <?php endif ?>     

    <div class="transformaciones d-flex justify-content-center flex-wrap">

       

        <?php foreach ($result['transformations'] as $transf ){?>
            
            <div class="d-flex justify-content-center flex-column">

                <img class="img-fluid" 
                     src= " <?= $transf['image'] ?>"
                     alt="<?= $transf['name'] ?>" 
                >

                <h4 class="text-center"> <?= $transf['name'] ?> </h4>

            </div>

        <?php }?>

    </div>

</div>