<!-- Require ile basqa sehifedeki melumati cagirirq -->


<?php require "_variables.php";
# require-mecburi demekdir eger sehv olarsa fatal error verecekdir ve altdaki kodlar oxunmayacaqdir
?>     
<?php require "_fuctions.php";?>


<p><?php echo welcome() ;?></p>

<p>Onun <?php echo $reng?> rengde <?php echo $model?> masini var</p>

<?php include "_footer.php";
# eger include olacaqsa xeta verecekdir Warning ama altdaki kodlari oxuyacaqdir
?>
<?php include_once "_footer.php";?>
<?php include_once "_footer.php";?>
<!-- eger include 2 defe cagrilibsa once ile onda 1dene gelecekdir -->
