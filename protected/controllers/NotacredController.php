<?php    
	class NotacredController extends CController  
    {  
     public function actionIndex()  
{  
    $usuarioForm = new NotacredForm();  
               /* Si se cuenta con información del usuario (request) entonces 
                  se agregará un nuevo usuario o se realizará una edición del mismo */  
    if(isset($_POST['NotacredForm']))  
    {  
                       /* Carga el modelo con la información del formulario */  
        $notacredForm -> attributes = $_POST['NotacredForm'];  
                       /* Verifica que su información sea válida */  
          
    $this -> render('index',  
                    array(  
                'notacred' => $notacredForm  
       
            ));  
}    
    }  