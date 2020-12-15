<?php

class Entradaenc_tmpController extends Controller
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
				'actions'=>array('create','update','admin','delete','index','view'),
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
		$model=new Entradaenc_tmp;
        $tmpentrada = new Entradadet_tmp;
        $tipodoc=$_GET['t'];
		$emp=Yii::app()->user->empresa_id;
		
		$empcorr=Correlativos::model()->findbyPk($emp);
        switch ($tipodoc)
			{
			case 1:
			  $correntrada=$empcorr->tipoentrada_1;
			  $titentrada="Factura de Compra Nro:";
			  break;
			case 2:
			  $correntrada=$empcorr->tipoentrada_2;
			  $titentrada="Nota de Debito Proveedor Nro:";
			  break;
			case 3:
			  $correntrada=$empcorr->tipoentrada_3;
			  $titentrada="Ajuste de Entrada Nro:";
			  break;
			default:
			  echo "Your favorite color is neither red, blue, or green!";
			}
		$iva=$empcorr->iva;	
		$titentrada=$titentrada.$correntrada;	
		Yii::app()->getSession()->add('tipodoc', $_REQUEST['t']);
		Yii::app()->getSession()->add('correntrada', $correntrada);
		Yii::app()->getSession()->add('iva', $iva);
		Yii::app()->getSession()->add('titulo', $titentrada);
		Yii::app()->getSession()->add('totneto', 0.00);
		Yii::app()->getSession()->add('totiva', 0.00);
		Yii::app()->getSession()->add('totbruto', 0.00);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Entradaenc_tmp']))
		{
			$model->attributes=$_POST['Entradaenc_tmp'];
			$criteria = new CDbCriteria;
            $criteria->condition = 'producto_id > 0';
            $exists = Entradadet_tmp::model()->count($criteria);
            if ($exists){
			if($model->save()) {
			 
               $empresa_id = (int)$model->empresa_id;
               $condcredito_id = (int)$model->condcredito_id;
			   
			   $corr=Correlativos::model()->findByPk($empresa_id);
			   switch ($tipodoc)
						{
						case 1:
						  $corr->tipoentrada_1=$corr->tipoentrada_1+1;
						  break;
						case 2:
						  $corr->tipoentrada_2=$corr->tipoentrada_2+1;
						  break;
						case 3:
						  $corr->tipoentrada_3=$corr->tipoentrada_3+1;
						  break;
						case 4:
						  $corr->tipoentrada_4=$corr->tipoentrada_4+1;
						  break;
						case 5:
						  $corr->tipoentrada_5=$corr->tipoentrada_5+1;
						  break;
						default:
						  echo "Your favorite color is neither red, blue, or green!";
						}
			   $corr->save();
			   if ($condcredito_id > 1) {
			      $totaldoc=Yii::app()->getSession()->get('totaldoc');
				}
                else
				{
				  $totaldoc=0;
                } 			  
			   $connection=  Yii::app()->db;
			   
			   Yii::app()->db->createCommand('insert into entradaenc (empresa_id,entradaenc_id,tipoentrada_id,proveedor_id,fecha,condcredito_id,vendedor_id,bultos,unidades,docenas,saldo) 
(select empresa_id,entradaenc_id,tipoentrada_id,proveedor_id,fecha,condcredito_id,vendedor_id,bultos,unidades,docenas,'.$totaldoc.' as saldo from entradaenc_tmp)')->query();
               Yii::app()->db->createCommand('insert into entradadet (entradaenc_id,tipoentrada_id,producto_id,unidad_id,cantidad,precio_unitario,iva,total_neto,total_final)
(select entradaenc_id,'.$tipodoc.' as tipoentrada_id,producto_id,unidad_id,cantidad,precio_unitario,iva,total_neto,total_final from entradadet_tmp)')->query();
			    Yii::app()->db->createCommand('truncate entradaenc_tmp')->query();
			    Yii::app()->db->createCommand('truncate entradadet_tmp')->query();
				$this->redirect(array('entradaenc/admin'));
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

		if(isset($_POST['Entradaenc_tmp']))
		{
			$model->attributes=$_POST['Entradaenc_tmp'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->entradaenc_id));
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
		$dataProvider=new CActiveDataProvider('Entradaenc_tmp');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Entradaenc_tmp('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Entradaenc_tmp']))
			$model->attributes=$_GET['Entradaenc_tmp'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Entradaenc_tmp the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Entradaenc_tmp::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Entradaenc_tmp $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='entradaenc-tmp-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
