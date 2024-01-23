<?php
    include_once("./templates/header.php");
?>

<div id="movie-list-title">
    <h1>To Create</h1><i class="bi bi-plus-square"></i>
</div>          
</header>

    <div id="centralize-form">
        <div id="contain-form">
            <h1 id="title-create-edit">ADD MOVIE TO LIST </h1>
            <form id="create-edit-list-movie" action="<?= $BASE_URL ?>config/process.php" method="POST">
                <div id="contain-input">
                    <input type="hidden" value="create" name="type">
                    <div id="form-group">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" placeholder="Insert title..." require>
                    </div>                 
                    <div id="form-group">
                        <label for="img">Image link:</label>
                        <input class="form-control" type="text" id="img" name="img" placeholder="Insert image link..." require>
                    </div>
                </div>              
                <div id="form-group">
                    <label for="synopsis">Synopsis:</label>
                    <textarea type="text" id="synopsis" name="synopsis" placeholder="Insert synopsis..." require></textarea>
                </div>
                <button id="button-form" type="submit">ADD TO MOVIE LIST</button>
            </form>
        </div>
    </div>
    
<?php
    include_once("./templates/footer.php");
?>