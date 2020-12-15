<?php
		
		$params = array("author" => "Pdf test", "title" =>"TCPDF Example 002", "subject" => "TCPDF Tutorial", "keywords"=>array("TCPDF, PDF, example, test, guide"), "header" => false, "footer" => false, "output" => "Entrada.pdf");
		$pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 'P', 'cm', 'Letter', true, 'UTF-8', $params);
						
		//$html = $this->renderPartial('view', array('model' => $this->loadModel($id)), false, true);
        /*
		$documento=Entradadet::model()->findbyPk($id);
		$criteria= new CDbCriteria();
		$criteria->condition='movimiento_id='.$id;
		*/
	   $empresa_id=$model->empresa_id;
	   $entradaenc_id=$model->entradaenc_id;
	   $tipoentrada_id=$model->tipoentrada_id;
	   $proveedor_id=$model->proveedor_id;
	   $fecha=$model->fecha;
	   $fecha_pago=$model->fecha_pago;
	   $condcredito_id=$model->condcredito_id;
	   $vendedor_id=$model->vendedor_id;
	   $bultos=$model->bultos;
	   $unidades=$model->unidades;
	   $docenas=$model->docenas;
	   $saldo=$model->saldo;

	   $empresa=Empresas::model()->findbyPk($empresa_id);
       $tipoentrada=Tiposentrada::model()->findbyPk($tipoentrada_id);
       $proveedor=Proveedores::model()->findbyPk($proveedor_id);
       $condcredito=Condcredito::model()->findbyPk($condcredito_id);          
       $vendedor=Vendedores::model()->findbyPk($vendedor_id); 
	   
       switch ($tipoentrada_id)
			{
			case 1:
			  $titentrada="Factura de Compra Nro:  ".$entradaenc_id;
			  break;
			case 2:
			  $titentrada="Nota de Debito Nro: ".$entradaenc_id;
			  break;
			case 3:
			  $titentrada="Ajuste de Entrada Nr: ".$entradaenc_id;
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
       
	   //$detalle=Entradadet::model()->findByAttributes(array('entradaenc_id'=>$entradaenc_id,'tipoentrada_id'=>$tipoentrada_id));

	   $pdf->SetCreator(PDF_CREATOR);
  	   $pdf->SetAuthor("NachoSystem");
	   $pdf->SetTitle("Documento de Entrada de Inventario ");
	   $pdf->SetSubject("Requisicion de Soporte Tecnico");
	   $pdf->SetKeywords("id, fecha, tecnico, estatus, dependencia");
	   $pdf->SetPrintHeader(false);
       $pdf->SetPrintFooter(false);
	   $pdf->AliasNbPages();
	   $pdf->SetTopMargin(10); 
	   $pdf->SetHeaderMargin(0.2);
	   $pdf->SetFooterMargin(1);
       //$image_file = 'banner_ministerio_salud.JPG'; 
       //$pdf->SetHeaderData($image_file, 18, 'Titulo1', 'Titulo2');
	   $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	   $style2 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
	   $style3 = array('width' => 0.1, 'cap' => 'round', 'join' => 'round', 'dash' => '2,10', 'color' => array(0, 0, 0));
       $pdf->AddPage();


		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(2,4.5); 
		$html='<b>PROVEEDOR: '.$proveedor_id." ".$proveedor->descripcion.'</b>';
		$pdf->writeHTML($html, true, false, false, false, '');

		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(15,4.5); 
		$html='<b>'.$titentrada."</b>";
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(2,5); 
		// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
		$pdf->MultiCell(12, 10, 'DOMICILIO FISCAL: '.$proveedor->direccion, 0, 'L',0, 0, '', '', true, 0, false, true, 0);
		//$html='<b>DOMICILIO FISCAL: '.$proveedor->direccion.'</b>';
		//$pdf->writeHTML($html, true, false, false, false, '');
        
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(15,5); 
		$html='<b>FECHA DE EMISION    :'. date("d/m/Y",strtotime($fecha))."</b>";
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(15,5.5); 
		$html='<b>FECHA DE VENCIMIENTO: '.date("d/m/Y",$fecha_venc)."</b>";
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(2,6); 
		$html='<b>TELEFONOS: '.$proveedor->telefono.'</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(2,6.5); 
		$html='<b>CONDICION DE PAGO: '.$condcredito->condicion.'</b>';
		$pdf->writeHTML($html, true, false, false, false, '');

		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(15,6); 
		$html='<b>R.I.F.: '.$proveedor->rif."</b>";
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(15,6.5); 
		$html='<b>VENDEDOR: '.$vendedor->nombre."</b>";
		$pdf->writeHTML($html, true, false, false, false, '');
				
		$pdf->Line(2, 7.5, 20, 7.5, $style3);
		
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(2,7.9); 
		$html='<b>CODIGO</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(6,7.9); 
		$html='<b>D  E  S  C  R  I  P  C  I  O  N</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(12,7.9); 
		$html='<b>CANTIDAD</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(15,7.9); 
		$html='<b>P. UNITARIO</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->SetFont("times", "B", 8);
		$pdf->SetXY(17,7.9); 
		$html='<b>TOT. RENG. S/I.V.A.</b>';
		$pdf->writeHTML($html, true, false, false, false, '');
		
		$pdf->Line(2, 8.5, 20, 8.5, $style3);
		
		$pdf->SetXY(2,8.9); 
		
		 //$detalle=Entradadet::model()->findByAttributes(array('entradaenc_id'=>$entradaenc_id,'tipoentrada_id'=>$tipoentrada_id));
		 
	 $criteria= new CDbCriteria();
     //$criteria->condition='entradaenc_id='.$entradaenc_id;
	 //$criteria->condition='tipoentrada_id='.$tipoentrada_id;
	 $criteria->condition ='(entradaenc_id='.$entradaenc_id.' AND tipoentrada_id='.$tipoentrada_id.')';
     $detalle=Entradadet::model()->findAll($criteria);
		
		$html = <<<EOD
    <font size="8">
    <table border="0" >
EOD;
$totaliva=0;
$totalnetodoc=0;
$totaldoc=0;
		foreach ($detalle as $renglon) {
			$entradadet_id=$renglon->entradadet_id;
			$entradaenc_id=$renglon->entradaenc_id;
			$tipoentrada_id=$renglon->tipoentrada_id;
			$producto_id=$renglon->producto_id;
			$unidad_id=$renglon->unidad_id;
			$cantidad=$renglon->cantidad;
			$precio_unitario=$renglon->precio_unitario;
			$iva=$renglon->iva;
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

$pdf->SetFont("times", "B", 6);
$pdf->SetXY(15,20.5); 
$html='<b>SUB-TOTAL  :'.number_format ($totalnetodoc, 2).'</b>';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("times", "B", 6);
$pdf->SetXY(2,21.5); 
$html='<b>TOTAL NUMERO DE BULTOS :'.$bultos.'</b>';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("times", "B", 6);
$pdf->SetXY(15,21); 
$html='<b>TOTAL DESCUENTO :  0.00</b>';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("times", "B", 6);
$pdf->SetXY(15,21.5); 
$html='<b>SUB-TOTAL  :'.number_format ($totalnetodoc, 2).'</b>';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("times", "B", 6);
$pdf->SetXY(2,22); 
$html='<b>TOTAL UNIDADES         :'.$unidades.'</b>';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("times", "B", 6);
$pdf->SetXY(15,22); 
$html='<b>TOTAL I.V.A. 12%         :'.number_format ($totaliva, 2).'</b>';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("times", "B", 6);
$pdf->SetXY(2,22.5); 
$html='<b>TOTAL DOCENAS          :'.$docenas.'</b>';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("times", "B", 6);
$pdf->SetXY(15,22.5); 
$html='<b>TOTAL :'.number_format ($totaldoc, 2).'</b>';
$pdf->writeHTML($html, true, false, false, false, '');


$pdf->Line(2, 23, 20, 23, $style3);
$pdf->SetFont("times", "B", 6);
$pdf->SetXY(8,23.5); 
$html='<b>PRECIOS ACORDADOS Y ACEPTADOS CON EL PROVEEDOR</b>';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("times", "B", 6);
$pdf->SetXY(4,24.5); 
$html='<b>PARA TODOS LOS EFECTOS LEGALES DE ESTE DOCUMENTO SE ELIGE COMO DOMICILIO ESPECIAL,LA CIUDAD DE CARACAS</b>';
$pdf->writeHTML($html, true, false, false, false, '');

$pdf->SetFont("times", "B", 6);
$pdf->SetXY(4,25); 
$html='<b></b>';
$pdf->writeHTML($html, true, false, false, false, '');


                ob_end_clean();
                $pdf->Output($titentrada.".pdf", "I");
                return $pdf;
				?>