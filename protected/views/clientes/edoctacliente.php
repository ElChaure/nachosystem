<?php
   
     $params = array("author" => "Pdf test", "title" =>"TCPDF Example 002", "subject" => "TCPDF Tutorial", "keywords"=>array("TCPDF, PDF, example, test, guide"), "header" => false, "footer" => false, "output" => "Solicitudes_pendientes.pdf");

     
     $pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 'P', 'cm', 'Letter', true, 'UTF-8', $params);
     
	 $cliente_id = $_REQUEST['id'];
     $criteria= new CDbCriteria();
	 $criteria->condition = "cliente_id=".$cliente_id;
     $orden=Edoctacliente::model()->findAll($criteria);
	 
     $cliente=Clientes::model()->findbyPk($cliente_id);
	
	 
     $hoy = date("d/m/y");

     $pdf->SetCreator(PDF_CREATOR);
     $pdf->SetAuthor("NachoSystem");
     $pdf->SetTitle("Estado de Cuenta");
     $pdf->SetSubject("Clientes");
     $pdf->SetKeywords("cliente_id");
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
     $html='<b>Estado de Cuenta al '.$hoy.'</b>';
     $pdf->writeHTML($html, true, false, false, false, '');
     
     $pdf->SetFont("times", "BI", 8);
     $pdf->SetXY(1,2.50); 
     $html='<b>Cliente: '.$cliente_id.' - '.$cliente->descripcion.'</b>';
     $pdf->writeHTML($html, true, false, false, false, '');
     /*$linea =4.5;*/
     $pdf->SetXY(1,3); 
$html = <<<EOD
    <font size="8">
    <table border="1" >
    <thead>
     <tr style="background-color:#C0C0C0;">
      <td width="50" align="center"><b>Movimiento</b></td>
      <td width="200" align="center"><b>Tipo</b></td>
      <td width="60" align="center"><b>Nro Documento</b></td>
	  <td width="60" align="center"><b>Fecha</b></td>
	  <td width="60" align="center"><b>Monto</b></td>
	  <td width="60" align="center"><b>Saldo</b></td>
     </tr>
    </thead>
EOD;


   foreach ($orden as $renglon) {
        $movimiento_id=$renglon->movimiento_id;
		$tiposalida=$renglon->tiposalida;
		$documento_nro=$renglon->documento_nro;
		$fecha=$renglon->fecha;
		$monto=$renglon->monto;
		$saldo=$renglon->saldo;
		
                $html .=  <<<EOD
                <tr>
				         <td width="50" align="center"><b>$movimiento_id</b></td>
						  <td width="200" align="left"><b>$tiposalida</b></td>
						  <td width="60" align="right"><b>$documento_nro</b></td>
						  <td width="60" align="right"><b>$fecha</b></td>
						  <td width="60" align="right"><b>$monto</b></td>
						  <td width="60" align="right"><b>$saldo</b></td>
                </tr>
EOD;
}
$html .=  <<<EOD
				</table>
</font>
EOD;

$pdf->writeHTML($html, true, false, false, false, '');
ob_end_clean();
$pdf->Output("Estado de Cuenta_Cliente.pdf", "I");
return $pdf;
  
   
 ?>  