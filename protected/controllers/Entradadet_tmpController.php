<?php

class Entradadet_tmpController extends Controller
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
				'actions'=>array('create','update','admin','delete','index','view','autocompleteFinal','findproducto'),
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
		$model=new Entradadet_tmp;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Entradadet_tmp']))
		{
			$model->attributes=$_POST['Entradadet_tmp'];
			$criteria = new CDbCriteria;
            $criteria->condition = 'producto_id='.$model->producto_id;
            $exists = Productos::model()->count($criteria);
            if ($exists){                     
               if($model->save())
                  $this->redirect(array('create'));
               }
             else
               {                            
                  Yii::app()->user->setFlash('error', "El producto no existe en la base de datos!");
				 
               }
			
			
			
			//if($model->save())
				//$this->redirect(array('view','id'=>$model->entradadet_id));
				//$this->redirect(array('create'));
		}

		$this->renderPartial('create',array(
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

		if(isset($_POST['Entradadet_tmp']))
		{
			$model->attributes=$_POST['Entradadet_tmp'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->entradadet_id));
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
		$dataProvider=new CActiveDataProvider('Entradadet_tmp');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		
		$model=new Entradadet_tmp('search');
		
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Entradadet_tmp']))
			$model->attributes=$_GET['Entradadet_tmp'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Entradadet_tmp the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Entradadet_tmp::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Entradadet_tmp $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='entradadet-tmp-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
   public function actionAutocompleteTest () {
      if (isset($_GET['term'])) {
	      $criteria=new CDbCriteria;
          $criteria->alias = "productos";
          $criteria->condition = "productos.producto_id like '" . $_GET['term'] . "%'";
          $criteria->order='producto_id';
 	      $productos = Productos::model()->findAll($criteria);
          $return_array = array();
          foreach($productos as $producto) {
				$return_array[] = array(
                    'label'=>$producto->producto_id,
                    'value'=>$producto->producto_id,
                    'id'=>$producto->producto_id,
       );
    }
    echo CJSON::encode($return_array);
  }
  }
  
  	public function actionAutocompleteTest1() {
		$res =array();

		if (isset($_GET['term'])) {
			// http://www.yiiframework.com/doc/guide/database.dao
			$qtxt ="SELECT producto_id FROM {{productos}} WHERE producto_id LIKE :username";
			$command =Yii::app()->db->createCommand($qtxt);
			$command->bindValue(":producto_id", '%'.$_GET['term'].'%', PDO::PARAM_STR);
			$res =$command->queryColumn();
		}

		echo CJSON::encode($res);
		Yii::app()->end();
	} /* end of actionAutocompleteTest */
  
     public function actionFindproducto() {
       $q = $_GET['term'];
       if (isset($q)) {
           $criteria = new CDbCriteria;
           //condition to find your data, using q as the parameter field
           //$criteria->condition = '...', 
           $criteria->order = 'producto_id'; // correct order-by field
           //$criteria->limit = ...; // probably a good idea to limit the results
           // with trailing wildcard only; probably a good idea for large volumes of data
           $criteria->params = array(':q' => trim($q) . '%'); 
           $Productos = Productos::model()->findAll($criteria);
 
           if (!empty($Productos)) {
               $out = array();
               foreach ($Productos as $p) {
                   $out[] = array(
                       // expression to give the string for the autoComplete drop-down
                       'label' => $p->producto_id,  
                       'value' => $p->producto_id,
                       'id' => $p->producto_id, // return value from autocomplete
                   );
               }
               echo CJSON::encode($out);
               Yii::app()->end();
           }
       }
   }
  
  
}
