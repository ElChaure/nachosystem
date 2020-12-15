<?php
   
     $params = array("author" => "Pdf test", "title" =>"TCPDF Example 002", "subject" => "TCPDF Tutorial", "keywords"=>array("TCPDF, PDF, example, test, guide"), "header" => false, "footer" => false, "output" => "Solicitudes_pendientes.pdf");

     
     $pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 'L', 'cm', 'Letter', true, 'UTF-8', $params);
     

     $dataProvider = $_SESSION['datos_filtrados']->getData();
     $contador=count($dataProvider);


     $hoy = date("d/m/y");

     $pdf->SetCreator(PDF_CREATOR);
     $pdf->SetAuthor("NachoSystem");
     $pdf->SetTitle("Reporte de Documentos Seleccionados");
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

      
     $pdf->SetFont("Roman Condensed", "BIU", 8);
     $pdf->SetXY(9,1.50); 
     $html='<b>Reporte de Documentos al '.$hoy.'</b>';
     $pdf->writeHTML($html, true, false, false, false, '');
 

   
     $pdf->SetFont("Roman Condensed", "BI", 8);

     $linea =4.5;

$html = <<<EOD
    <font size="8">
    <table border="0" >
    <thead>
     <tr style="background-color:#C0C0C0;">
      <td width="50" align="center"><b>Nro Doc</b></td>
      <td width="100" align="center"><b>Tipo Salida</b></td>
      <td width="250" align="center"><b>Cliente</b></td>
	  <td width="50" align="center"><b>Fecha</b></td>
	  <td width="100" align="center"><b>Cond Crediticia</b></td>
	  <td width="100" align="center"><b>Vendedor</b></td>
	  <td width="80" align="center"><b>Saldo</b></td>
	  
     </tr>
    </thead>
EOD;

        $i=0;
        $val=count($dataProvider);
         
         while($i<$val){
		 $tiposalida_id=$dataProvider[$i]["tiposalida_id"];
		 $cliente_id=$dataProvider[$i]["cliente_id"];
		 $condcredito_id=$dataProvider[$i]["condcredito_id"];
		 $vendedor_id=$dataProvider[$i]["vendedor_id"];
		 
		 $tiposal=Tipossalida::model()->findbyPk($tiposalida_id);
         $tiposalida=$tiposal->tiposalida;
		 $clie=Clientes::model()->findbyPk($cliente_id);
         $cliente=$clie->descripcion;
		 $cond=Condcredito::model()->findbyPk($condcredito_id);
         $condcredito=$cond->condicion;
		 $vend=Vendedores::model()->findbyPk($vendedor_id);
         $vendedor=$vend->nombre;
		 
$html.='
            <tr class="odd">
                <td class="odd" width="50">&nbsp;'.$dataProvider[$i]["salidaenc_id"].'</td>
                <td class="odd" width="100">&nbsp;'.$tiposalida.'</td>
                <td class="odd" width="250">&nbsp;'.$cliente.'</td>
                <td class="odd" width="50">&nbsp;'.$dataProvider[$i]["fecha"].'</td>
                <td class="odd" width="100">&nbsp;'.$condcredito.'</td>
                <td class="odd" width="100">&nbsp;'.$vendedor.'</td>
                <td class="odd" width="80" align="right">&nbsp;'.$dataProvider[$i]["saldo"].'</td>
            ';
    $html.='</tr>'; $i++;
                        }
    $html.='</table>';

$pdf->writeHTML($html, true, false, false, false, '');

ob_end_clean();
$pdf->Output("Documentos_Clientes.pdf", "I");
return $pdf;
  
   
 ?>  