<?php
		include('montoescrito.php');
		$params = array("author" => "Pdf test", "title" =>"TCPDF Example 002", "subject" => "TCPDF Tutorial", "keywords"=>array("TCPDF, PDF, example, test, guide"), "header" => false, "footer" => false, "output" => "Salida.pdf");
		$pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 'P', 'cm', 'Letter', true, 'UTF-8', $params);
						
		//$html = $this->renderPartial('view', array('model' => $this->loadModel($id)), false, true);
        /*
		$documento=Salidadet::model()->findbyPk($id);
		$criteria= new CDbCriteria();
		$criteria->condition='movimiento_id='.$id;
		*/
	   $empresa_id=$model->empresa_id;
	   $salidaenc_id=$model->salidaenc_id;
	   $tiposalida_id=$model->tiposalida_id;
	   $cliente_id=$model->cliente_id;
	   $fecha=$model->fecha;
	   $fecha_pago=$model->fecha_pago;
	   $condcredito_id=$model->condcredito_id;
	   $vendedor_id=$model->vendedor_id;
	   $bultos=$model->bultos;
	   $unidades=$model->unidades;
	   $docenas=$model->docenas;
	   $saldo=$model->saldo;
       $descuento=$model->descuento;
	   $afectado_id=$model->afectado_id;
	   $empresa=Empresas::model()->findbyPk($empresa_id);
       $tiposalida=Tipossalida::model()->findbyPk($tiposalida_id);
       $cliente=Clientes::model()->findbyPk($cliente_id);
       $condcredito=Condcredito::model()->findbyPk($condcredito_id);          
       $vendedor=Vendedores::model()->findbyPk($vendedor_id);
	   $ivaimp=$empresa->iva;
	   $iva=(($empresa->iva)/100);
       switch ($tiposalida_id)
			{
			case 10:
			  $titsalida="Factura Nro:  ".$salidaenc_id;
			  $titsubtotal="SUB-TOTAL FACTURA :";
			  $tittotal="TOTAL FACTURA :";
			  break;
			case 11:
			  $titsalida="Nota de Credito Nro: ".$salidaenc_id;
			  $titsubtotal="SUB-TOTAL NOTA DE CREDITO:";
			  $tittotal="TOTAL NOTA DE CREDITO:";
			  if ($afectado_id!=NULL){
                 $afectado=Salidaenc::model()->findbyPk($afectado_id);
                 $nro_afectado=$afectado->salidaenc_id;
              }
			  else
			  {
			     $nro_afectado=NULL;
			  }			  
			  break;
			case 12:
			  $titsalida="Ajuste de Salida Nro:".$salidaenc_id;
			  $titsubtotal="SUB-TOTAL AJUSTE:";
			  $tittotal="TOTAL ajuste:";					  
			  break;
			case 13:
			  $titsalida="Nota de Entrega Nro:".$salidaenc_id;
			  $titsubtotal="SUB-TOTAL NOTA DE ENTREGA:";
			  $tittotal="TOTAL NOTA DE ENTREGA:";					  
			  break;			  
			default:
			  echo "Your favorite color is neither red, blue, or green!";
	   }
	   
	   
       switch ($condcredito_id)
			{
			case 1:
		      $fecha_venc = strtotime ($fecha);
			  break;
			case 2:
			  $fecha_venc = strtotime ( '+15 day' , strtotime ($fecha) ) ;
			  break;
			case 3:
			  $fecha_venc = strtotime ( '+30 day' , strtotime ($fecha) ) ;
			  break;
			case 4:
			  $fecha_venc = strtotime ( '+45 day' , strtotime ($fecha) ) ;
			  break;
            case 5:
			  $fecha_venc = strtotime ( '+90 day' , strtotime ($fecha) ) ;
			  break;
            case 6:
			  $fecha_venc = strtotime ( '+100 day' , strtotime ($fecha) ) ;
	   }        
       
	   //$detalle=Salidadet::model()->findByAttributes(array('salidaenc_id'=>$salidaenc_id,'tiposalida_id'=>$tiposalida_id));

	   $pdf->SetCreator(PDF_CREATOR);
  	   $pdf->SetAuthor("NachoSystem");
	   $pdf->SetTitle("Documento de Salida de Inventario ");
	   $pdf->SetSubject("Requisicion de Soporte Tecnico");
	   $pdf->SetKeywords("id, fecha, tecnico, estatus, dependencia");
	   $pdf->SetPrintHeader(false);
       $pdf->SetPrintFooter(false);
	   $pdf->AliasNbPages();
	   $pdf->SetTopMargin(10); 
	   $pdf->SetHeaderMargin(0.2);
	   $pdf->SetFooterMargin(1);
	   if ($tiposalida_id == 13){
	        $pdf->SetPrintHeader(true);
			$image_file = 'jecatex.png'; 
            $pdf->SetHeaderData($image_file, 18, 'Titulo1', 'Titulo2');
	   }
       //$image_file = 'banner_ministerio_salud.JPG'; 
       //$pdf->SetHeaderData($image_file, 18, 'Titulo1', 'Titulo2');
	   $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	   $style2 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
	   $style3 = array('width' => 0.1, 'cap' => 'round', 'join' => 'round', 'dash' => '2,10', 'color' => array(0, 0, 0));
       $pdf->AddPage();
       
	   if ($tiposalida_id == 13){
	        $pdf->SetFont("freesans", "", 6);
		    $pdf->SetXY(1.2,2.5); 
		    $html='Av. Universidad, Esq. Perico, Edif. Perico, Piso 2, Ofic. 2-A, La Candelaria, Caracas - Venezuela';
		    $pdf->writeHTML($html, true, false, false, false, '');
			
		    $pdf->SetXY(2.4,2.7); 
		    $html='Telf.: (0212) 576.49.90 / Correo Electrónico: tex.jecatex@hotmail.com';
		    $pdf->writeHTML($html, true, false, false, false, '');
	   }

		$pdf->SetFont("freesans", "", 9);
		$pdf->SetXY(2,4.5); 
		$html='CLIENTE: '.$cliente_id." ".$cliente->descripcion;
		$pdf->writeHTML($html, true, false, false, false, '');

		$pdf->SetFont("freesans", "", 9);
		$pdf->SetXY(15,4.5); 
		$html='<b>'.$titsalida."</b>";
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("freesans", "", 9);
		$pdf->SetXY(2,5); 
		// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
		$pdf->MultiCell(12, 10, 'DOMICILIO FISCAL: '.$cliente->direccion, 0, 'L',0, 0, '', '', true, 0, false, true, 0);
		//$html='<b>DOMICILIO FISCAL: '.$cliente->direccion.'</b>';
		//$pdf->writeHTML($html, true, false, false, false, '');
        
		$pdf->SetFont("freesans", "", 8);
		$pdf->SetXY(15,5); 
		$html='<b>FECHA DE EMISION    :'. date("d/m/Y",strtotime($fecha))."</b>";
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("freesans", "",8);
		$pdf->SetXY(15,5.5); 
		$html='<b>FECHA DE VENCIMIENTO: '.date("d/m/Y",$fecha_venc)."</b>";
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("freesans", "", 9);
		$pdf->SetXY(2,6); 
		$html='TELEFONOS: '.$cliente->telefono;
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("freesans", "", 9);
		$pdf->SetXY(2,6.5); 
		$html='CONDICION DE PAGO: '.$condcredito->condicion;
		$pdf->writeHTML($html, true, false, false, false, '');

		$pdf->SetFont("freesans", "", 9);
		$pdf->SetXY(15,6); 
		$html='R.I.F.: '.$cliente->rif;
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("freesans", "", 9);
		$pdf->SetXY(15,6.5); 
		$html='VENDEDOR: '.$vendedor->nombre;
		$pdf->writeHTML($html, true, false, false, false, '');
		if ($tiposalida_id == 11){
		   $pdf->SetFont("freesans", "", 9);
		   $pdf->SetXY(15,7);
           if($nro_afectado!=NULL){		   
		      $html='<b>FACTURA AFECTADA: '.$nro_afectado."</b>";
		   }
		   else
		   {
		   $html="";
		   }
		   $pdf->writeHTML($html, true, false, false, false, '');
		}		
		$pdf->Line(2, 7.5, 20, 7.5, $style3);
		
		$pdf->SetFont("freesans", "", 8);
		$pdf->SetXY(2,7.9); 
		$html='<b>CODIGO</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("freesans", "", 8);
		$pdf->SetXY(6,7.9); 
		$html='<b>D  E  S  C  R  I  P  C  I  O  N</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("freesans", "", 8);
		$pdf->SetXY(12,7.9); 
		$html='<b>CANTIDAD</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("freesans", "", 8);
		$pdf->SetXY(15,7.9); 
		$html='<b>P. UNITARIO</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("freesans", "", 9);
		$pdf->SetXY(17,7.9); 
		$html='<b>TOT. RENG. S/I.V.A.</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->Line(2, 8.5, 20, 8.5, $style3);
		
		$pdf->SetXY(2,8.9); 
		
		 //$detalle=Salidadet::model()->findByAttributes(array('salidaenc_id'=>$salidaenc_id,'tiposalida_id'=>$tiposalida_id));
		 
	 $criteria= new CDbCriteria();
     //$criteria->condition='salidaenc_id='.$salidaenc_id;
	 //$criteria->condition='tiposalida_id='.$tiposalida_id;
	 $criteria->condition ='(salidaenc_id='.$salidaenc_id.' AND tiposalida_id='.$tiposalida_id.')';
     $detalle=Salidadet::model()->findAll($criteria);
		
		$html = <<<EOD
    <font size="10">
    <table border="0" >
EOD;
$totaliva=0;
$totalnetodoc=0;
$totaldoc=0;
		foreach ($detalle as $renglon) {
			$salidadet_id=$renglon->salidadet_id;
			$salidaenc_id=$renglon->salidaenc_id;
			$tiposalida_id=$renglon->tiposalida_id;
			$producto_id=$renglon->producto_id;
			$unidad_id=$renglon->unidad_id;
			$cantidad=$renglon->cantidad;
			$precio_unitario=$renglon->precio_unitario;
			//$iva=$renglon->iva;
			$total_neto=$renglon->total_neto;
			$total_final=$renglon->total_final;
			
			$ivareng=$total_final-$total_neto;
			$totaliva=$totaliva+$ivareng;
            $totalnetodoc=$totalnetodoc+$total_neto;
            $totaldoc=$totaldoc+$total_final;
			
			$producto=Productos::model()->findbyPk($producto_id);
			
		    $html .=  <<<EOD
                <tr>
                   <td width="40" align="left">$producto_id</td>
                   <td width="285">$producto->descripcion</td>
                   <td width="75" align="right" >$cantidad</td>
                   <td width="100" align="right" >$precio_unitario</td>
                   <td width="130" align="right" >$total_neto</td>
                </tr>
EOD;
}
$html .= <<<EOD
</table>
</font>
EOD;
$pdf->writeHTML($html, true, false, false, false, '');

 if ($tiposalida_id == 13){
	$pdf->SetFont("freesans", "", 10);
    $pdf->SetXY(6,20.5); 
    $html='<b>FACTURA EN PROCESO</b>';
    $pdf->writeHTML($html, true, false, false, false, '');
 }
$pdf->SetFont("freesans", "", 10);
$pdf->SetXY(13,20.5); 
$html=$titsubtotal.' '.number_format ($totalnetodoc, 2);
$pdf->writeHTML($html, true, false, false, false, 'R');

$pdf->SetFont("freesans", "", 10);
$pdf->SetXY(2,21.5); 
$html='TOTAL NUMERO DE BULTOS :'.$bultos;
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("freesans", "", 10);
$pdf->SetXY(13,21); 
$html='TOTAL DESCUENTO :'.number_format ($descuento, 2);
$pdf->writeHTML($html, true, false, false, false, 'R');
$subtotal=$totalnetodoc-$descuento;
$pdf->SetFont("freesans", "", 10);
$pdf->SetXY(13,21.5); 
$html=$titsubtotal.' '.number_format ($subtotal, 2);
$pdf->writeHTML($html, true, false, false, false, 'R');

$pdf->SetFont("freesans", "", 10);
$pdf->SetXY(2,22); 
$html='TOTAL UNIDADES         :'.$unidades;
$pdf->writeHTML($html, true, false, false, false, '');
$montoiva=$subtotal*$iva;
$pdf->SetFont("freesans", "", 10);
$pdf->SetXY(13,22); 
$html='TOTAL I.V.A. '.$ivaimp.'  % :'.number_format ($montoiva, 2);
$pdf->writeHTML($html, true, false, false, false, 'R');

$pdf->SetFont("freesans", "", 10);
$pdf->SetXY(2,22.5); 
$html='TOTAL DOCENAS          :'.$docenas;
$pdf->writeHTML($html, true, false, false, false, '');
$totald=$montoiva+$subtotal;

$pdf->SetFont("freesans", "", 10);
$pdf->SetXY(13,22.5); 
$html=$tittotal.' '.number_format ($totald, 2);
$pdf->writeHTML($html, true, false, false, false, 'R');

//$totald_text=num2letras(number_format($totald,2,',','.'));
$totald_text=num2letras(number_format($totald, 2));
$pdf->Line(2, 23, 20, 23, $style3);

$pdf->SetFont("freesans", "", 10);
$pdf->SetXY(6,23.2); 
$html=$totald_text;
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("freesans", "", 8);
$pdf->SetXY(8,23.8); 
$html='PRECIOS ACORDADOS Y ACEPTADOS POR EL CLIENTE';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("freesans", "", 8);
$pdf->SetXY(2.5,24.5); 
$html='PARA TODOS LOS EFECTOS LEGALES DE ESTE DOCUMENTO SE ELIGE COMO DOMICILIO ESPECIAL,LA CIUDAD DE CARACAS';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("freesans", "", 8);
$pdf->SetXY(2,25); 
$html='LAS MERCANCIAS VIAJAN POR CUENTA Y RIESGO DEL COMPRADOR, Y ESTE AL RECIBIRLAS SE OBLIGA A VERIFICAR SU CONTENIDO';
$pdf->writeHTML($html, true, false, false, false, '');


                ob_end_clean();
                $pdf->Output($titsalida.".pdf", "I");
                return $pdf;
				?>