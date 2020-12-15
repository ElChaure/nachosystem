<?php
   
     $params = array("author" => "Pdf test", "title" =>"TCPDF Example 002", "subject" => "TCPDF Tutorial", "keywords"=>array("TCPDF, PDF, example, test, guide"), "header" => false, "footer" => false, "output" => "Solicitudes_pendientes.pdf");

     
     $pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 'P', 'cm', 'Letter', true, 'UTF-8', $params);
     

     $criteria= new CDbCriteria();
     $criteria->order='banco_id';
     $orden=Bancos::model()->findAll($criteria);

     $hoy = date("d/m/y");

     $pdf->SetCreator(PDF_CREATOR);
     $pdf->SetAuthor("NachoSystem");
     $pdf->SetTitle("Reporte de Bancos");
     $pdf->SetSubject("Bancos");
     $pdf->SetKeywords("banco_id");
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
     $html='<b>Reporte de Bancos al '.$hoy.'</b>';
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
      <td width="300" align="center"><b>Nombre</b></td>
      <td width="100" align="center"><b>Cuenta</b></td>
	  <td width="100" align="center"><b>Estatus</b></td>
     </tr>
    </thead>
EOD;



   foreach ($orden as $renglon) {
        $id=$renglon->banco_id;
        $descripcion=$renglon->nombre;
		$telefono=$renglon->nro_cuenta;
		$estatus=$renglon->estatus;
		if ($estatus==1){
		    $testatus='Activo';
		 }
		 else
		 {
		       $testatus='Inactivo';
		 }

                $html .=  <<<EOD
                <tr>
                   <td width="50" align="center">$id</td>
                   <td width="300">$descripcion</td>
                   <td width="100" >$telefono</td>
                   <td width="100" >$testatus</td>
                </tr>
EOD;
}

$html .= <<<EOD
</table>
</font>
EOD;
$pdf->writeHTML($html, true, false, false, false, '');
ob_end_clean();
$pdf->Output("Bancos.pdf", "I");
return $pdf;
  
   
 ?>  