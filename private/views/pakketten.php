<?php $this->layout( 'standard_layout' ) ?>

<?php $this->start('css')?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo url('/assets/css/tarieven.css')?>" />
<?php $this->stop('css')?>

<?php $this->start('title')?>
<title>Stal Rijopleiding | Pakketten</title>
<?php $this->stop('title')?>

<div class="PenP">
        <h1>PAKKETTEN EN PRIJZEN</h1>
        <h3>TARIEVEN</h3>
        <div class="tarieven">
            <div class="prijzen">
                <?php foreach($pakketten as $pakket):?>
                    <p>€ <?php echo $pakket['prijs']?></p>
                <?php endforeach;?>              
            </div>
             
            <div class="pakketen">
                <?php foreach($pakketten as $pakket):?>
                    <p><?php echo $pakket['omschrijving']?></p>
                <?php endforeach;?>              
                <p>Opfriscursus: Op aanvraag!</p>
                <form action="bestel">
                    <input class="button" type="submit" value="SELECTEER EEN PAKKET"/>
                </form>
            </div>
            <div class="pakkettenmo">
                <?php foreach($pakketten as $pakket):?>
                <p><b>€ <?php echo $pakket['prijs']?></b> <?php echo $pakket['omschrijving']?></p>
                <?php endforeach;?>
                <p>Opfriscursus: Op aanvraag!</p>
                <form action="bestel">
                    <input class="button" type="submit" value="SELECTEER EEN PAKKET"/>
                </form>
            </div>
        </div>
    </div>