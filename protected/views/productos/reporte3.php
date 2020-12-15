<?php
   
     $params = array("author" => "Pdf test", "title" =>"TCPDF Example 002", "subject" => "TCPDF Tutorial", "keywords"=>array("TCPDF, PDF, example, test, guide"), "header" => false, "footer" => false, "output" => "Solicitudes_pendientes.pdf");

     
     $pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 'P', 'cm', 'Letter', true, 'UTF-8', $params);
     

     $criteria= new CDbCriteria();
     $criteria->order='linea_id,producto_id';
     $orden=Productos::model()->findAll($criteria);

     $hoy = date("d/m/y");

     $pdf->SetCreator(PDF_CREATOR);
     $pdf->SetAuthor("NachoSystem");
     $pdf->SetTitle("Reporte de Productos");
     $pdf->SetSubject("Productos del Inventario");
     $pdf->SetKeywords("producto_id");
     $pdf->SetPrintHeader(true);
     $pdf->SetPrintFooter(true);
     $pdf->AliasNbPages();
     $pdf->SetTopMargin(2); 
     $pdf->SetHeaderMargin(0.2);
     $pdf->SetFooterMargin(1);
     $image_file = 'jecatex.png'; 
     $pdf->SetHeaderData($image_file, 18, 'Titulo1', 'Titulo2');
     $pdf->SetAutoPageBreak(TRUE, 1);
     $pdf->AddPage();

      
     $pdf->SetFont("times", "BIU", 12);
     $pdf->SetXY(9,1.50); 
     $html='<b>Reporte de Productos al '.$hoy.'</b>';
     $pdf->writeHTML($html, true, false, false, false, '');


     $pdf->SetFont("times", "BIU", 8);
     $pdf->SetFont("times", "BI", 8);

     $linea =4.5;

$html = <<<EOD
    <font size="8">
    <table border="0" >
    <thead>
     <tr style="background-color:#C0C0C0;">
      <td width="50" align="center"><b>Codigo</b></td>
      <td width="400" align="center"><b>Descripcion</b></td>
      </tr>
    </thead>
EOD;

$linea_id="";

   foreach ($orden as $renglon) {
        $id=$renglon->producto_id;
        $descripcion=$renglon->descripcion;
		if ($linea_id!=$renglon->linea_id){
		   $linea_id=$renglon->linea_id;
		   $connection=  Yii::app()->db;
           $sql="select linea_id, linea from lineas where linea_id=".$linea_id;
		   $existencia=$connection->createCommand($sql)->queryAll();
           foreach($existencia as $row): 
             $linea_id=$row['linea_id'];
			 $linea=$row['linea'];
           endforeach;
		   $html .=  <<<EOD
                <tr>
                   <td colspan = "2">$linea_id - $linea</td>
                </tr>
EOD;
           }
           $html .=  <<<EOD
                <tr>
                   <td width="50" align="center">$id</td>
                   <td width="400">$descripcion</td>
                </tr>
EOD;
}

$html .= <<<EOD
</table>
</font>
EOD;
$pdf->writeHTML($html, true, false, false, false, '');
ob_end_clean();
$pdf->Output("Productos_lineas.pdf", "I");
return $pdf;
  
   
 ?>  