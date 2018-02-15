<?php
include_once('_config.php');

/*** accès au model ***/
$query = "SELECT * FROM devinette";
$bdd = new PDO("mysql:host=localhost;dbname=devinette;charset=utf8", "root", "root");
$req = $bdd->prepare($query);
$req->execute();
while ($row = $req->fetch(PDO::FETCH_ASSOC)) {

    $devinette['id']         = $row['id'];
    $devinette['name']       = $row['name'];
    $devinette['question']   = $row['question'];
    $devinette['answer']     = $row['answer'];
    $devinette['created_at'] = $row['created_at'];

    $devinettes[] = $devinette; // tableau de tableau

};



;?>
<!--- VIEW --->
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