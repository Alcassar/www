<?php

class StaticPageController extends Controller
{
	
 // public $layout='//layouts/column2';
    
public $defaultAction='view';

public function actionView($id)
{
   
    $this->render('view',array(
		  'model'=>$this->loadModel($id),
		)); 
    
}

public function actionIndex()
{
       
    $this->render('index',array(
		  'model'=>$this->loadModel($id),
		)); 
 }

public function loadModel($id)
	{
	$model = new StaticPage;
        if (!isset($id))
        {
            $model = $model->getList();
            return $model;
        }
 else {
     $model = $model->getPageById($id);
	if($model===null)
            
	   throw new CHttpException(404,'Запрошенная страница не сущуествует');
	   return $model; 
	} 
 }
     
 }
        
?>
