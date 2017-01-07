<?php
for($i=0;$i<count($people);$i++){
?>

  <div class="people col-md-3
    <?php echo 'col-md-push-1';?>">
    <div class="photo col-md-6"><img src="<?php echo $people[$i]['foto']?>"> </div>
    <div class"col-md-6">
      <div class="nombre text-primary"><?php echo $people[$i]['nombre']?></div>
      <div class="puesto text-muted"><?php echo $people[$i]['puesto']?></div>
    </div >
  </div>
<?php
}
?>
