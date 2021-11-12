<?php $this->layout('layouts::website');?>

<?php $this->start('sidebar')?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->
<div class="top-10">
	<h3>Wachtwoord vergeten?</h3>
</div>
<?php $this->stop()?>

<h1>Log hier in!</h1>

<p>
    <form action ="signup.php" method="POST">
    <input type = "text" name="username" placeholder="Gebruikersnaam" required><br><br>
    <input type="password" name="password" value="" placeholder="Wachtwoord" required><br><br>
    <input type ="submit" value = "Login"><br><br>
</p>