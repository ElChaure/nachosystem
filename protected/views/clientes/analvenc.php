<?php
   
     $params = array("author" => "Pdf test", "title" =>"TCPDF Example 002", "subject" => "TCPDF Tutorial", "keywords"=>array("TCPDF, PDF, example, test, guide"), "header" => false, "footer" => false, "output" => "Solicitudes_pendientes.pdf");

     
     $pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 'L', 'cm', 'Letter', true, 'UTF-8', $params);
     

     $criteria= new CDbCriteria();
     $orden=Analisisvencimientocli::model()->findAll($criteria);

	
	 
     $hoy = date("d/m/y");

     $pdf->SetCreator(PDF_CREATOR);
     $pdf->SetAuthor("NachoSystem");
     $pdf->SetTitle("Analisis de Vencimiento CxC");
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
     $html='<b>Analisis de Vencimientos de CxC '.$hoy.'</b>';
     $pdf->writeHTML($html, true, false, false, false, '');


     $pdf->SetFont("times", "BIU", 8);
     $pdf->SetFont("times", "BI", 8);

     $linea =4.5;

$html = <<<EOD
    <font size="8">
    <table border="1" >
    <thead>
     <tr style="background-color:#C0C0C0;">
      <td width="50" align="center"><b>Codigo</b></td>
      <td width="200" align="center"><b>Cliente</b></td>
      <td width="60" align="center"><b>0-15 Dias</b></td>
	  <td width="60" align="center"><b>16-30 Dias</b></td>
	  <td width="60" align="center"><b>31-45 Dias</b></td>
	  <td width="60" align="center"><b>46-60 Dias</b></td>
	  <td width="60" align="center"><b>61-90 Dias</b></td>
	  <td width="60" align="center"><b>+90 Dias</b></td>
	  <td width="100" align="center"><b>Total</b></td>
     </tr>
    </thead>
EOD;

    $t_15_dias=0;
	$t_30_dias=0; 
	$t_45_dias=0;
	$t_60_dias=0;
	$t_90_dias=0;
	$tm_90_dias=0;
    $totalv=0;
   foreach ($orden as $renglon) {
        $cliente_id=$renglon->CODIGO;
		//number_format(
        $nombre_cliente=$renglon->NOMBRE_CLIENTE;
		$a_15_dias=number_format($renglon->A_15_DIAS, 2);
		$a_30_dias=number_format($renglon->A_30_DIAS, 2); 
		$a_45_dias=number_format($renglon->A_45_DIAS, 2);
		$a_60_dias=number_format($renglon->A_60_DIAS, 2);
		$a_90_dias=number_format($renglon->A_90_DIAS, 2);
		$m_90_dias=number_format($renglon->MAS_90_DIAS, 2);
		$totalh=($renglon->A_15_DIAS+$renglon->A_30_DIAS+$renglon->A_45_DIAS+$renglon->A_60_DIAS+$renglon->A_90_DIAS+$renglon->MAS_90_DIAS);
        $th=$totalh; 		
        $totalh=number_format($totalh, 2);
		$t_15_dias=$t_15_dias+$renglon->A_15_DIAS;
		$t_30_dias=$t_30_dias+$renglon->A_30_DIAS;
		$t_45_dias=$t_45_dias+$renglon->A_45_DIAS;
		$t_60_dias=$t_60_dias+$renglon->A_60_DIAS;
		$t_90_dias=$t_90_dias+$renglon->A_90_DIAS;
		$tm_90_dias=$tm_90_dias+$renglon->MAS_90_DIAS;
		$totalv=$totalv+$th;
		
		
		
		
                $html .=  <<<EOD
                <tr>
				         <td width="50" align="center"><b>$cliente_id</b></td>
						  <td width="200" align="left"><b>$nombre_cliente</b></td>
						  <td width="60" align="right"><b>$a_15_dias</b></td>
						  <td width="60" align="right"><b>$a_30_dias</b></td>
						  <td width="60" align="right"><b>$a_45_dias</b></td>
						  <td width="60" align="right"><b>$a_60_dias</b></td>
						  <td width="60" align="right"><b>$a_90_dias</b></td>
						  <td width="60" align="right"><b>$m_90_dias</b></td>
						  <td width="100" align="right"><b>$totalh</b></td>
                   
                </tr>
EOD;
}
$t_15_dias=number_format($t_15_dias, 2);
$t_30_dias=number_format($t_30_dias, 2); 
$t_45_dias=number_format($t_45_dias, 2);
$t_60_dias=number_format($t_60_dias, 2);
$t_90_dias=number_format($t_90_dias, 2);
$tm_90_dias=number_format($tm_90_dias, 2);
$totalv=number_format($totalv, 2);

$html .=  <<<EOD
                <tr>
				         <td colspan="2" align="center"><b>T O T A L E S</b></td>
						  <td width="60" align="right"><b>$t_15_dias</b></td>
						  <td width="60" align="right"><b>$t_30_dias</b></td>
						  <td width="60" align="right"><b>$t_45_dias</b></td>
						  <td width="60" align="right"><b>$t_60_dias</b></td>
						  <td width="60" align="right"><b>$t_90_dias</b></td>
						  <td width="60" align="right"><b>$tm_90_dias</b></td>
						  <td width="100" align="right"><b>$totalv</b></td>
                   
                </tr>
				</table>
</font>
EOD;
/*$html .= <<<EOD
</table>
</font>
EOD;
*/
$pdf->writeHTML($html, true, false, false, false, '');
ob_end_clean();
$pdf->Output("Analisis_Vencimiento_Clientes.pdf", "I");
return $pdf;
  
   
 ?>  