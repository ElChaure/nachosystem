<?php
/*/////////////////////////////////////////////////////////////////////////
// This file is part of the
//  _______                   _               ______  
// (_______)                 | |             (_____ \ 
//  _____  ____  _____   ___ | |__   _   _     ____) )
// |  ___)/ ___)| ___ | /___)|  _ \ | | | |   / ____/ 
// | |   | |    | ____||___ || | | || |_| |  | (_____ 
// |_|   |_|    |_____)(___/ |_| |_| \__  |  |_______)
//                                  (____/            
//                                          Yii theme
//
// Ported from the original Wordpress Freshy 2 theme:
// http://www.jide.fr/english/downloads/freshy2
//
// Licensed under the GPL, like the original theme
// Copyleft 2011 - Jacob 'jacmoe' Moen @ http://www.jacmoe.dk/
/////////////////////////////////////////////////////////////////////////*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
	
	
	
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" media="screen, projection" />
    <?php /* Put the custom style here - like 'custom_bloggy.css', 'custom_vitamin', etc - you can store it in the app params or in a database. */ ?>
    <?php //if((Yii::app()->config->get('style') !== 'freshy2') && (Yii::app()->config->get('style'))) : ?>
<!--        <link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->theme->baseUrl; ?>/css/<?php //echo Yii::app()->config->get('style')?>.css" media="screen, projection" />-->
    <?php //endif; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/yii_style.css" media="screen, projection" />
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div id="body">
    <div id="header">
        <div class="container">
            <div id="title">
                <h1>
                    <?php echo CHtml::link(CHtml::encode(Yii::app()->name), $this->createUrl('')) ?>
                </h1>
                <div class="description">
                    <small><?php echo Yii::app()->params['description']?></small>
                </div>
            </div>
            <div id="header_image">
                <div id="menu">
                    <div class="menu_container">
                        <?php $this->widget('Freshy2Menu',array(
                            'items'=>array(
                                    array('label'=>'INICIO', 'url'=>array('/site/index')),
									array('label'=>'MAESTROS','visible'=>!Yii::app()->user->isGuest,
									'items'=>array( 
									   array('label'=>'EMPRESAS', 'url'=>array('/empresas/admin')),
									   array('label'=>'CORRELATIVOS', 'url'=>array('/correlativos/admin')),
									   array('label'=>'CLIENTES', 'url'=>array('/clientes/admin')),
									   array('label'=>'PROVEEDORES', 'url'=>array('/proveedores/admin')),
									   array('label'=>'CONDICIONES CREDITICIAS', 'url'=>array('/condcredito/admin')),									   
									   array('label'=>'BANCOS', 'url'=>array('/bancos/admin')),
									   array('label'=>'VENDEDORES', 'url'=>array('/vendedores/admin')),
									   array('label'=>'INVENTARIO',
									        'items'=>array( 
									         array('label'=>'Lineas de Inventario', 'url'=>array('/lineas/admin')),
									         array('label'=>'Marcas', 'url'=>array('/marcas/admin')),
											 array('label'=>'Unidades de Medida', 'url'=>array('/unidades/admin')),
											 array('label'=>'Productos', 'url'=>array('/productos/admin')),
											 ),
											 ),
										array('label'=>'ROLES DE USUARIO', 'url'=>array('/roles/admin')),
                                        array('label'=>'USUARIOS', 'url'=>array('/usuarios/admin')),										
									   ),
									   ),
									array('label'=>'MOVIMIENTO DE INVENTARIO', 'visible'=>!Yii::app()->user->isGuest,
									      'items'=>array(
                                             array('label'=>'ENTRADAS AL INVENTARIO',
									        'items'=>array( 
									         array('label'=>'Factura de Compra', 'url'=>array('/entradaenc_tmp/create&t=1')),
									         array('label'=>'ND Proveedor', 'url'=>array('/entradaenc_tmp/create&t=2')),
											 array('label'=>'Ajuste de Entrada', 'url'=>array('/entradaenc_tmp/create&t=3')),
											 ),
											 ),
									  	     array('label'=>'SALIDAS DEL INVENTARIO',
									        'items'=>array( 
									         array('label'=>'Factura de Venta', 'url'=>array('/salidaenc_tmp/create&t=10')),
									         array('label'=>'Nota de Credito', 'url'=>array('/salidaenc_tmp/create&t=11')),
											 array('label'=>'Ajuste de Salida', 'url'=>array('/salidaenc_tmp/create&t=12')),
											 array('label'=>'Nota de Entrega', 'url'=>array('/salidaenc_tmp/create&t=13')),
											 ),
											 ),
											 array('label'=>'ENTRADAS FORMALIZADAS', 'url'=>array('/entradaenc/admin')),
											 array('label'=>'SALIDAS FORMALIZADAS', 'url'=>array('/salidaenc/admin')),
											 
									   		),
									),
                                    array('label'=>'ADMINISTRACION', 'visible'=>!Yii::app()->user->isGuest,
									'items'=>array( 
									   array('label'=>'PAGOS DE CLIENTES', 'url'=>array('/pagocliente/admin')),
									   array('label'=>'PAGOS A PROVEEDORES', 'url'=>array('/site/page', 'view'=>'construccion')),
									),
									),
                                    array('label'=>'RESPALDO', 'url'=>array('/sistema/backup'),'visible'=>!Yii::app()->user->isGuest), 									
                                    array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                            ),
                        )); ?>
                    </div><span class="menu_end"></span>
                </div><!-- menu -->
            </div><!-- header_image -->
        </div><!-- container -->
    </div><!-- header -->
    <?php echo $content; ?>
    <div id="footer">
        <div class="container">
            <div id="footer_content">
                <div style="font-size: 75%;font-style: italic;">Copyright &copy; <?php echo '2013'//Yii::app()->params['copyright_year']; ?> by <?php echo 'Textiles Jecatex, C.A.'//Yii::app()->params['copyright_holder']; ?><br/>Derechos Reservados.<br/></div>
                <a href="http://www.yiiframework.com"><img title="Powered by Yii Framework" alt="Powered by Yii Framework" src="<?php echo Yii::app()->theme->baseUrl ?>/images/yii-powered.png"/></a><br/>
                <a href="http://www.jide.fr"><img alt="design by jide" src="<?php echo Yii::app()->theme->baseUrl ?>/images/micro_jide.png"/></a>
            </div><!-- footer_content -->
        </div><!-- container -->
    </div><!-- footer -->
</div><!-- body -->
</body>
</html>