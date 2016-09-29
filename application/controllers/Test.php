<?php
class TestController extends Yaf_Controller_Abstract {
	protected $connection = array(
			'db_type'  => 'mysql',
			'db_user'  => 'root',
			'db_pwd'   => '',
			'db_host'  => 'localhost',
			'db_port'  => '3306',
			'db_name'  => 'blog',
			'db_charset' => 'utf8',
	);
	
   // default action name
   public function indexAction() {
   		 echo 'TestController indexAction';
   		//import('Net.Http');
   		//Http::sendHttpStatus('404');
//    		global $app;
   		
//    		$conf = $app->getConfig();
//    		//$dbOpt = $conf->database;
//    		var_dump($conf->application);
//    		var_dump($conf['application']);
// 		var_dump($conf);exit;
		
		
   		//$DB = Db::getInstance($this->connection);
   		$model = new Model("dede_admin");
   		var_dump($model);
   		$rows = $model->select();
   		var_dump($rows); exit;
   		
   		$model = new Model("dede_addonarticle",null,$this->connection);
   		//$rows = $model->where('aid=1')->select();
   		$rows = $model->where('aid=1')->field('aid,body')->find();
   		var_dump($rows);
   		
   		//删除操作
   		$model = new Model("dede_addonarticle",null,$this->connection);
   		$ret = $model->where('aid=5')->delete();
   		echo 'Ret:';
   		var_dump($ret);
   		
   		$editRet = $model->where('aid=4')->setField('typeid','444');
   		echo 'edit ret.';
   		var_dump($editRet);
   		exit;
   		$content = phpinfo();
        $this->getView()->content = $content;
   }
   
   public function testAction()
   {
       echo 'testAction';
       exit;	
   }
   
}
?>