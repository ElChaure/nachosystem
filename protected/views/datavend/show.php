<?php
$this->breadcrumbs=array(
 'Datos de los Giros'=>array('/datagiro'),
 'Show',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
 
<p>
</br>
<?php 
$separar = explode('-',$data->fhasta);
 $d = new DateTime($data->fdesde);
 $h = new DateTime($data->fhasta);
 $interval = date_diff($d, $h);
?>

<?php echo 'Vendedor: '.$data->vendedor_id;?></br>
<?php echo 'Desde: '.$data->fdesde;?></br>
<?php echo 'Hasta: '.$data->fhasta;?></br>

</p>
