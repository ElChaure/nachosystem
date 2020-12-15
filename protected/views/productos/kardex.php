<?php
   
     $params = array("author" => "Pdf test", "title" =>"TCPDF Example 002", "subject" => "TCPDF Tutorial", "keywords"=>array("TCPDF, PDF, example, test, guide"), "header" => false, "footer" => false, "output" => "Solicitudes_pendientes.pdf");

     
     $pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 'L', 'cm', 'Letter', true, 'UTF-8', $params);
     
	 $producto_id = $_REQUEST['id'];
     $criteria= new CDbCriteria();
	 $criteria->condition = "producto_id=".$producto_id;
     $orden=Kardex::model()->findAll($criteria);
	 
     $producto=Productos::model()->findbyPk($producto_id);
	
	 
     $hoy = date("d/m/y");

     $pdf->SetCreator(PDF_CREATOR);
     $pdf->SetAuthor("NachoSystem");
     $pdf->SetTitle("Kardex de Producto");
     $pdf->SetSubject("Producto");
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
     $html='<b>Kardex de Producto al '.$hoy.'</b>';
     $pdf->writeHTML($html, true, false, false, false, '');
     
     $pdf->SetFont("times", "BI", 8);
     $pdf->SetXY(1,2.50); 
     $html='<b>Producto: '.$producto_id.' - '.$producto->descripcion.'</b>';
     $pdf->writeHTML($html, true, false, false, false, '');
     /*$linea =4.5;*/
     $pdf->SetXY(1,3); 
$html = <<<EOD
    <font size="8">
    <table border="1" >
    <thead>
     <tr style="background-color:#C0C0C0;" align="center">
         <td width="200"><b>Ente</b></td>
		 <td width="50"><b>Documento Nro</b></td>
		 <td width="60"><b>Tipo Movimiento</b></td>
		 <td width="50"><b>Fecha</b></td>
		 <td width="50"><b>Cantidad</b></td>
		 <td width="50"><b>Precio Unit</b></td>
		 <td width="30"><b>% IVA</b></td>
		 <td width="60"><b>Total Neto</b></td>		 
		 <td width="60"><b>Monto IVA</b></td>
		 <td width="60"><b>Total Final</b></td>
     </tr>
    </thead>
EOD;


   foreach ($orden as $renglon) {
        $documento_id=$renglon->documento_id;
		$ente_id=$renglon->ente_id;
		$fecha=$renglon->fecha;
		$tipomovimiento_id=$renglon->tipomovimiento_id;
		$cantidad=$renglon->cantidad;
		$precio_unitario=$renglon->precio_unitario;
		$iva=$renglon->iva;
		$total_neto=$renglon->total_neto;
		$total_final=$renglon->total_final;
        $miva=$total_final-$total_neto;
		
		if ($tipomovimiento_id < 10 ){
		   $ente=Proveedores::model()->findbyPk($ente_id);
		   $tipo=Tiposentrada::model()->findbyPk($tipomovimiento_id);
		   $tiponomb=$tipo->tipoentrada; 
		}
		else
		{
		   $ente=Clientes::model()->findbyPk($ente_id);
		   $tipo=Tipossalida::model()->findbyPk($tipomovimiento_id);
		   $tiponomb=$tipo->tiposalida;
		}
		$entenomb=$ente->descripcion; 
        
		
                $html .=  <<<EOD
                <tr>
				         <td width="200" align="left"><b>$entenomb</b></td>
						 <td width="50" align="center"><b>$documento_id</b></td>
						 <td width="60" align="left"><b>$tiponomb</b></td>
						 <td width="50" align="left"><b>$fecha</b></td>
						 <td width="50" align="right"><b>$cantidad</b></td>
						 <td width="50" align="right"><b>$precio_unitario</b></td>
						 <td width="30" align="right"><b>$iva</b></td>
						 <td width="60" align="right"><b>$total_neto</b></td>						 
						 <td width="60" align="right"><b>$miva</b></td>
						 <td width="60" align="right"><b>$total_final</b></td>
                </tr>
EOD;
}
$html .=  <<<EOD
				</table>
</font>
EOD;

$pdf->writeHTML($html, true, false, false, false, '');
ob_end_clean();
$pdf->Output("Kardex.pdf", "I");
return $pdf;
  
   
 ?>  