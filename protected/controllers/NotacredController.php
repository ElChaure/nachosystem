<?php    
	class NotacredController extends CController  
    {  
     public function actionIndex()  
{  
    $usuarioForm = new NotacredForm();  
               /* Si se cuenta con informaci�n del usuario (request) entonces 
                  se agregar� un nuevo usuario o se realizar� una edici�n del mismo */  
    if(isset($_POST['NotacredForm']))  
    {  
                       /* Carga el modelo con la informaci�n del formulario */  
        $notacredForm -> attributes = $_POST['NotacredForm'];  
                       /* Verifica que su informaci�n sea v�lida */  
          
    $this -> render('index',  
                    array(  
                'notacred' => $notacredForm  
       
            ));  
}    
    }  