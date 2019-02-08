<h1>Kaikki seinät ovat tässä</h1>
<p>Lista tähän kunhan db on valmis</p>

<ul>
<?php foreach($seinat as $seina): ?>
    <li>
        <?php echo $seina->nimi; ?>
        <a href="<?php echo base_url();?>wall/delete/<?php echo $seina->id; ?>">Poista</a>
    </li>
<?php endforeach; ?>
</ul>

<h2>Lisää uusi seinä</h2>

<?php echo validation_errors(); ?>

<form action="<?php echo base_url();?>wall/create" method="post" accept-charset="utf-8">
    <input type="text" name="nimi">
    <input type="submit" name="ok" value="Tallenna">
</form>