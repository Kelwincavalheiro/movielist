<?php
    include_once("./templates/header.php");
?>

<div id="movie-list-title">
    <h1>Movie List</h1><i class="bi bi-list-task"></i>
</div>

</header>
    
<div id="content-msg">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
                <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
</div>
        
<div id="movie-list">  

    <?php if(count($movielist) > 0): ?>
        <?php foreach($movielist as $movies): ?>
            <ul id="contain-movie-list">
                <li id="conainer-movie-li">
                    <div id="contain-img">
                        <a href="<?= $BASE_URL ?>view.php?id=<?= $movies["id"]?>"><img src="<?= $movies["img"] ?>" alt=""></a>
                    </div>
                    <div id="contain-title">
                        <a href="<?= $BASE_URL ?>view.php?id=<?= $movies["id"]?>"><h3> <?=$movies["title"]?></h3></a>
                    </div>
                </li>
            </ul>
        <?php endforeach; ?>
    <?php else : ?>
        <p id="empty-list-text">You don't have movies in your list, ADD here:<a href="<?= $BASE_URL ?>create.php"> To Add</a>
        </p>
    <?php endif; ?>
</div>

<?php
    include_once("./templates/footer.php");
?>