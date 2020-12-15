<?php

class DatavendController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	    public function actionEdit()
    {
       //create $data instance from DatavendForm class
       $data = new DatavendForm;
 
       //check if $_POST['DatavendForm'] carry data
       if(isset($_POST['DatavendForm'])){
 
       //assign $_POST['DatavendForm'] value to $data object
       $data->attributes=$_POST['DatavendForm'];
 
            //check if $data is valid or not empty
             if($data->validate())
 
                //if data is valid, send data to actionShow to view
                $this->renderPartial('comisiones',array('data'=>$data));
 
                //else if false, render edit page again
                else
                $this->render('edit',array('data'=>$data));
        }else
        $this->render('edit',array('data'=>$data));
    }
 
    public function actionShow()
    {
        //create $data instance from DatavendForm class
        $data = new DatavendForm;
 
        //check is attribute is set
        if(isset($data->inmueble_id))
 
                //render view show
                $this->render('show',array('data'=>data));
        else
                //else if data not set, assign default value
                $data->vendedor_id="Vendedor_id";
                $data->fdesde="Fdesde";
				$data->fhasta="Fhasta";
				
 
                //render view show
                $this->render('show',array('data'=>$data));
 
    }
 
}
	
	
	
	
