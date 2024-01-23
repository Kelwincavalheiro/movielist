<?php
    include_once("./templates/header.php");
?>

<div id="movie-list-title">
                <h1>To Edit</h1><i class="bi bi-pencil-fill"></i>
            </div>
            
</header>

<div id="centralize-form">
        <div id="contain-form">
            <h1 id="title-create-edit">EDIT</h1>
            <form id="create-edit-list-movie" action="<?= $BASE_URL ?>config/process.php" method="POST">
                <div id="contain-input">

                <input type="hidden" name="type" value="edit">
                <input type="hidden" name="id" value="<?= $movies["id"] ?>">

                    <div id="form-group">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" placeholder="Insert title..." value="<?= $movies["title"] ?>" require>
                    </div>    
                    <div id="form-group">
                        <label for="img">Image link:</label>
                        <input class="form-control" type="text" id="img" name="img" placeholder="Insert image link..." value="<?= $movies["img"] ?>" require>
                    </div>
                </div>                
                <div id="form-group">
                    <label for="synopsis">Synopsis:</label>
                    <textarea type="text" id="synopsis" name="synopsis" placeholder="Insert synopsis..." require><?= $movies["synopsis"] ?></textarea>
                </div>
                <button id="button-form" type="submit">TO UPDATE</button>
            </form>
        </div>
</div>

<?php
    include_once("./templates/footer.php");
?>