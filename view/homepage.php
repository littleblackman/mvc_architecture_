<?php include('_head.php');?>
<?php include('_header.php');?>

    <div id="container">
        <h2>Liste des devinettes</h2>

        <?php foreach($devinettes as $devinette):?>
            <div class="question">
                <h3><?php echo $devinette['name'];?></h3>
                <?php echo $devinette['question'];?>
                <hr/>
                <button>Voir la réponse</button>
                <button style="">
                    <a href="edit.php?id=<?php echo $devinette['id'];?>">
                        modifier
                    </a>
                </button>
                <button style="">
                    <a href="delete.php?id=<?php echo $devinette['id'];?>">
                        effacer
                    </a>
                </button>
            </div>
        <?php endforeach;?>

    </div>

<?php include('_footer.php');?>