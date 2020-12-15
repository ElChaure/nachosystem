<script type="text/javascript">
function cierraventana() {
   window.close();
};
</script>
<?php

class Salidaenc_tmpController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','index','view','notacred','autocompletefinal','selectcliente','selectrenglones','selectcondcredito','cargaclientes'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Salidaenc_tmp;
        $tmpsalida = new Salidadet_tmp;
        $tipodoc=$_GET['t'];
		$emp=Yii::app()->user->empresa_id;
		
		$empcorr=Correlativos::model()->findbyPk($emp);
        switch ($tipodoc)
			{
			case 10:
			  $corrsalida=$empcorr->tiposalida_10;
			  $titsalida="Factura de Venta Nro:";
			  break;
			case 11:
			  $corrsalida=$empcorr->tiposalida_11;
			  $titsalida="Nota de Credito Cliente Nro:";
			  break;
			case 12:
			  $corrsalida=$empcorr->tiposalida_12;
			  $titsalida="Ajuste de Salida Nro:";
			  break;
			case 13:
			  $corrsalida=$empcorr->tiposalida_13;
			  $titsalida="Nota de Entrega Nro:";
			  break;  
			default:
			  echo "Your favorite color is neither red, blue, or green!";
			}
		$iva=$empcorr->iva;	
		$titsalida=$titsalida.$corrsalida;
        		
		Yii::app()->getSession()->add('tipodoc', $_REQUEST['t']);
		Yii::app()->getSession()->add('corrsalida', $corrsalida);
		Yii::app()->getSession()->add('iva', $iva);
		Yii::app()->getSession()->add('titulo', $titsalida);
		Yii::app()->getSession()->add('totneto', 0.00);
		Yii::app()->getSession()->add('totiva', 0.00);
		Yii::app()->getSession()->add('totbruto', 0.00);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Salidaenc_tmp']))
		{
			$model->attributes=$_POST['Salidaenc_tmp'];
			$criteria = new CDbCriteria;
            $criteria->condition = 'producto_id > 0';
            $exists = Salidadet_tmp::model()->count($criteria);
            if ($exists){
			if($model->save()) {
			 
               $empresa_id = (int)$model->empresa_id;
               $condcredito_id = (int)$model->condcredito_id;
			   $descuento = (float)$model->descuento;
			   
			   $corr=Correlativos::model()->findByPk($empresa_id);
			   switch ($tipodoc)
						{
						case 10:
						  $corr->tiposalida_10=$corr->tiposalida_10+1;
						  break;
						case 11:
						  $corr->tiposalida_11=$corr->tiposalida_11+1;
						  break;
						case 12:
						  $corr->tiposalida_12=$corr->tiposalida_12+1;
						  break;
						case 13:
						  $corr->tiposalida_13=$corr->tiposalida_13+1;
						  break;
						case 14:
						  $corr->tiposalida_14=$corr->tiposalida_14+1;
						  break;
						case 15:
						  $corr->tiposalida_15=$corr->tiposalida_15+1;
						  break;			  
						default:
						  echo "Your favorite color is neither red, blue, or green!";
						}
			   $corr->save();
			   
			   
			   
			   if ($condcredito_id > 1) {
			      $descuento=(Yii::app()->getSession()->get('totalnet')*$descuento)/100;
			      $totalnet=(Yii::app()->getSession()->get('totalnet'))-$descuento;
	          	  $iva= Yii::app()->getSession()->get('iva');
			      $totaldoc=$totalnet;
				  //(Yii::app()->getSession()->get('totaldoc'))-$descuento;
				  
				}
                else
				{
				  $descuento=(Yii::app()->getSession()->get('totalnet')*$descuento)/100;
			      $totalnet=(Yii::app()->getSession()->get('totalnet'))-$descuento;
	          	  $iva= Yii::app()->getSession()->get('iva');
				  $totaldoc=0;
                }
               			   
			   $connection=  Yii::app()->db;
			   
			   Yii::app()->db->createCommand('insert into salidaenc (empresa_id,salidaenc_id,tiposalida_id,afectado_id,cliente_id,fecha,condcredito_id,vendedor_id,bultos,unidades,docenas,neto,descuento,iva,saldo) 
(select empresa_id,salidaenc_id,tiposalida_id,afectado_id,cliente_id,fecha,condcredito_id,vendedor_id,bultos,unidades,docenas,'.$totalnet.' as neto,'.$descuento.' as descuento,'.$iva.' as iva,'.$totaldoc.' as saldo from salidaenc_tmp)')->query();
               Yii::app()->db->createCommand('insert into salidadet (salidaenc_id,tiposalida_id,producto_id,unidad_id,cantidad,precio_unitario,iva,total_neto,total_final)
(select salidaenc_id,'.$tipodoc.' as tiposalida_id,producto_id,unidad_id,cantidad,precio_unitario,iva,total_neto,total_final from salidadet_tmp)')->query();
			    Yii::app()->db->createCommand('truncate salidaenc_tmp')->query();
			    Yii::app()->db->createCommand('truncate salidadet_tmp')->query();
				$this->redirect(array('salidaenc/admin'));
				}
				
		}
        else
        {                            
                  Yii::app()->user->setFlash('error', "El Documento debe tener por lo menos un Renglon! ");
				  
        }
		
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Salidaenc_tmp']))
		{
			$model->attributes=$_POST['Salidaenc_tmp'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->salidaenc_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Salidaenc_tmp');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Salidaenc_tmp('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Salidaenc_tmp']))
			$model->attributes=$_GET['Salidaenc_tmp'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Salidaenc_tmp the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Salidaenc_tmp::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Salidaenc_tmp $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='salidaenc-tmp-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionNotacred()
    {
        $this->render('notacred');
    }
	
	public function actionAutocompletefinal() {
		  	$res =array();

	if (isset($_GET['term'])) {
		// http://www.yiiframework.com/doc/guide/database.dao
		$qtxt ="SELECT salidaenc_id FROM salidaenc WHERE salidaenc_id LIKE :salidaenc_id and tiposalida_id=10";
		$command =Yii::app()->db->createCommand($qtxt);
		$command->bindValue(":salidaenc_id", '%'.$_GET['term'].'%', PDO::PARAM_STR);
		$res =$command->queryColumn();
	}

	echo CJSON::encode($res);
	Yii::app()->end();
    }
		
	public function actionSelectcliente()
	{
		$id_uno = $_POST['Salidaenc_tmp']['cliente_id'];
		$data=Facturasclientes::model()->findAllBySql(
		"select * from facturasclientes where cliente_id
         =:keyword order by movimiento_id desc",
         array(':keyword'=>$_POST['Salidaenc_tmp']['cliente_id']));
        $data=CHtml::listData($data,'movimiento_id','linea');
		foreach($data as $value=>$name)
		{
		   echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
		}
	}
	
	public function actionSelectcondcredito()
	{
		$id_uno = $_POST['Salidaenc_tmp']['afectado_id'];
		Yii::app()->getSession()->add('afectado_id', $id_uno);
		$data=Facturasclientes::model()->findAllBySql(
		"SELECT facturasclientes.condcredito_id as condcredito_id,condicion 
		FROM facturasclientes
        inner join condcredito on condcredito.condcredito_id=facturasclientes.condcredito_id 
		where movimiento_id =:keyword order by facturasclientes.condcredito_id desc",
         array(':keyword'=>$_POST['Salidaenc_tmp']['afectado_id']));
        $data=CHtml::listData($data,'condcredito_id','condicion');
		foreach($data as $value=>$name)
		{
		   echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
		}
	}
	
	public function actionSelectcondcredito2()
	{
		
		$id_uno = $_POST['Salidaenc_tmp']['afectado_id'];
		Yii::app()->getSession()->add('afectado_id', $id_uno);
		$data=Clientespendientes::model()->findAllBySql(
		"select * from facturasclientes where movimiento_id
         =:keyword order by movimiento_id desc",
         array(':keyword'=>$_POST['Salidaenc_tmp']['afectado_id']));
        $data=CHtml::listData($data,'condcredito_id','linea');
		foreach($data as $value=>$name)
		{
		   echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
		}
	}
	
	public function actionSelectrenglones()
	{
		$afectado_id=Yii::app()->getSession()->get('afectado_id');
		$tiposalida_id=Yii::app()->getSession()->get('tipodoc'); 
		$Fsalidaenc_id=Yii::app()->getSession()->get('salidaenc_id'); 
		//$afectado_id = $_POST['Salidaenc_tmp']['afectado_id'];
		//$salidaenc_id= $_POST['Salidaenc_tmp']['salidaenc_id'];
		//$tiposalida_id=$_POST['Salidaenc_tmp']['tiposalida_id'];

		$criteria= new CDbCriteria();
    	$criteria->condition ='movimiento_id='.$afectado_id;
        $detalle=Salidaenc::model()->findAll($criteria);
		foreach ($detalle as $renglon) {
			$salidaenc_id=$renglon->salidaenc_id;
			$tiposalida_id=$renglon->tiposalida_id;
		}
		$criteria= new CDbCriteria();
     	$criteria->condition ='(salidaenc_id='.$salidaenc_id.' AND tiposalida_id='.$tiposalida_id.')';
        $detalle=Salidadet::model()->findAll($criteria);
		foreach ($detalle as $renglon) {
			$producto_id=$renglon->producto_id;
			$unidad_id=$renglon->unidad_id;
			$cantidad=$renglon->cantidad;
			$precio_unitario=$renglon->precio_unitario;
			$iva=$renglon->iva;
			$total_neto=$renglon->total_neto;
			$total_final=$renglon->total_final;
			$connection=  Yii::app()->db;
            Yii::app()->db->createCommand('insert into salidadet_tmp (salidaenc_id,producto_id,unidad_id,cantidad,precio_unitario,iva,total_neto,total_final) 
            values ('.$Fsalidaenc_id.','.$producto_id.','.$unidad_id.','.$cantidad.','.$precio_unitario.','.$iva.','.$total_neto.','.$total_final.')')->query();
		} 
		
	}
		
	    public function actionCargaclientes()
        {
            $criteria= new CDbCriteria();
     	    $criteria->order ='descripcion';
            $$lista=Clientes::model()->findAll($criteria);
			$lista = CHtml::listData($lista,'cliente_id','descripcion');
            echo CHtml::tag('option', array('value' => ''), 'Seleccione', true);
            foreach ($lista as $valor => $descripcion){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true );
            }
            
        }
}
