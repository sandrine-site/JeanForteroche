<!--titre de la page -->
<?php $title = 'Administration des chapitres';?>

<?php ob_start(); ?>
<div id="administrationChapter">
    <div id="create">
        <h3> Creer un chapitre : </h3>


        <form action="# " method="post">
            <label for="title">
                <h3> titre</h3>
            </label>
            <input type="text" id="title" name="title" />
            <textarea id="mytextarea"></textarea>
        </form>
    </div>
    <div id="upload">
        <h3>Edition de chapitre</h3>

    </div>
</div>


<?php $content=ob_get_clean(); ?>
<?php require('templateBack.php'); ?>
