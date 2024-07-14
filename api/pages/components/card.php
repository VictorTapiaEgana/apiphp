<section id="cardContainer">

    <?php foreach($arrayPersonajes['items'] as $personaje){ ?>

        <div id="card" class="card">      

             <div class="bg-info-subtle d-flex justify-content-center">
                <img class="imgOver img-fluid" src="<?= $personaje['image'] ?>" alt="Imagen de <?= $personaje['name'] ?>"/>                
            </div>   
            

            <div class="card-content">

                <div class="">                 

                    <div class="media-content">                        

                        <form id="postForm" action="functions/get_for_id.php" method="POST" style="display: inline;">
                            <input type="hidden" name="detalle" value="https://dragonball-api.com/api/characters/<?= $personaje['id'] ?>">
                            <button id="btnName" type="submit" class="btn btn-outline-info"><?= $personaje['name'] ?></button>                            
                        </form>

                        <p class="subtitle is-5"><?= $personaje['race'] . " - " . $personaje['gender'] ?></p>
                        
                        <p class="subtitle is-5">
                            Poder:  <span class="" style="font-weight:600;">
                            <br>
                            <?= $personaje['ki'] ?></span>
                        </p>

                        <p class="subtitle is-5">
                            Afilición:  <span class="" style="font-weight:600;">
                            <br>
                            <?= $personaje['affiliation'] ?></span>
                        </p>


                    </div>
                </div>

            </div>

        </div>


    <?php }?>

</section>