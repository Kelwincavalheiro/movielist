<?php
    include_once("./templates/header.php");
?>

<div id="movie-list-title">
    <h1>View</h1><i class="bi bi-eye"></i>
</div>
            
</header>

<div id="contain-view">

    <div class="view">
        <div id="contain-img-text">
            <div class="img2">
                <img src="<?= $movies["img"]?>" alt="">
            </div>

            <div id="contain-text">
                <div id="texto">
                    <h1 id="h1-view"><?= $movies["title"] ?></h1>   
                    <h2 id="h2-view">Synopsis</h2>
                    <p class="sinopse"><?= $movies["synopsis"]?></p>
                </div>
            </div>
        </div>

        <div id="contain-buttons-view">
            <a id="contain-btn-nav" href="<?= $BASE_URL ?>edit.php?id=<?= $movies["id"]?>">
                <div id="header-nav"><i id="icon" class="bi bi-pencil-square"></i>
                    <div id="contain-name-link">Edit</div>
                </div>
            </a>
    
            <form class="delet-form" action="<?= $BASE_URL?>/config/process.php" method="POST">
                <input type="hidden" name="type" value="delet">
                <input type="hidden" name="id" value="<?= $movies["id"]?>">
                <div id="contain-btn-nav">
                    <div id="header-nav">
                        <i id="icon" class="bi bi-file-earmark-x"></i><button id="contain-name-link" type="submit" class="delet-btn">Delet</button>
                    </div>
                </div>  
            </form>
        </div>
    </div>
</div>

<?php
    include_once("./templates/footer.php");
?>