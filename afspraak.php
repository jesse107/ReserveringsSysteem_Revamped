<?php
    include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Maak een afspraak</h2>
    </div>
<div class="afspraak-box">
<form method="post" action="includes/afspraak.inc.php">
    <p>Naam: </p><input type="text" name="name" required><br>
    <p>Soort personeel benodigd: </p><select name="reden" style="margin: 0 auto;display:block;"required>
        <option>Persoonsbeveiliger</option>
        <option>Medic</option>
        <option>Evenementenbeveiliger</option>
        <option>Brandweerpersoneel</option>
        <option>Verkeersregelaar</option>
    </select><br>
    <p>Evenement:</p> <input type="text" name="evenement" required><br>
    <p>Datum: </p><br>
    <input type="text" id="datepicker" name="datum" required><br>
    <p>Tijd:</p>
    <input type="time" name="time" id="time" required><br>
    <p>Adres:</p>
    <input type="text" name="adres" required><br>
    <input type="submit" name="submit" value="Submit">
</form>
</div>
</section>



<?php
    include_once 'footer.php';
?>
