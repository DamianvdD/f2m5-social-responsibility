<?php $this->layout('layouts::website');?>

<?php $this->start('sidebar')?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->
<div class="top-10">
	<h3>Maak je geen zorgen al je gegevens zijn veilig!</h3>
</div>
<?php $this->stop()?>

<h1>Maak hier een account!</h1>

<p>
    <form action ="<?php echo url('registreren.process')?>" method="POST" class="form">
        <input type = "email" name = "email" placeholder = "E-mailadres">*
        <?php if ( isset( $errors['email'] ) ): ?>
        <div class="error"> 
            <?php echo $errors['email'] ?>
        </div>
        <?php endif;?>
        <input type = "text" name = "voornaam" placeholder = "Voornaam" >*<br><br>
        <input type = "text" name = "achternaam" placeholder = "Achternaam" >*<br><br>
        <input type = "text" name = "username" placeholder = "Gebruikersnaam" >*<br><br>
        <input type = "password" name = "wachtwoord" placeholder = "Wachtwoord">*
        <?php if ( isset( $errors['wachtwoord'] ) ): ?>
        <div class="error">
            <?php echo $errors['wachtwoord'] ?>
        </div>
        <?php endif;?>
        <div class="Button">
        <input type = "submit" value = "Aanmelden">
        </div>
    </form>
</p>