<?php

class StaticPage extends CModel {
    
    public $page_id;  
    public $title;
    public $content;
    public $author;
        
public function attributeNames()
 {

 return array('page_id', 'title', 'content', 'author', 'created'); 

 }

public function tableName()
	{
		return 'brj8_page';
	} 


public function getList()
{
 $db = Yii::app()->db;
 
 $page_table = StaticPage::tableName();
  
 $sql = "SELECT * FROM {$page_table}";
 
 $command=$db->createCommand($sql);
 
 $page = $command->queryAll();
 
 return $page;
}
 
public function getPageById($id) {
    
 $db = Yii::app()->db;
 
 $page_table = StaticPage::tableName();
  
 $sql = "SELECT * FROM {$page_table} WHERE page_id=:ID LIMIT 1";
 
 $command=$db->createCommand($sql);
 $command->bindParam(":ID", $id);
 $row = $command->queryRow();
 
 $page = new StaticPage;
 
 $page->page_id = $row['page_id'];
 $page->title = $row['title'];
 $page->content = $row['content'];
 $page->author = $row['author']; 
 
 return $page; 
    }
    
} 
    
?>
