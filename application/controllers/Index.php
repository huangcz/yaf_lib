<?php
class IndexController extends Yaf_Controller_Abstract {
	
   public function indexAction() 
   {
   		//Demo1 加载Http类库
   		import('Net.Http');
   		$ret = Net\Http::fsockopenDownload('https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=0&rsv_idx=1&tn=baidu&wd=%E8%B1%86%E7%93%A3&rsv_pq=9fc8adc90000005e&rsv_t=920btWL1RmtEjOv9PjD9Qr0X56HYUUAdsrk%2FqdLhPqECRXGzedoAujVX1aI&rqlang=cn&rsv_enter=1&rsv_sug3=6&rsv_sug1=5&rsv_sug7=100');

   		//Demo2 数据库操作--查询
   		$model = new Model("dede_admin");   		
   		$rows = $model->select();
   		var_dump($rows); 
   		
   		//Demo3 数据库操作--条件查询  手动传入数据库信息
   		$model = new Model("dede_addonarticle");
   		$rows = $model->where('aid=1')->field('aid,body')->find();
   		var_dump($rows);
   		
   		//Demo4 数据库操作--删除  手动传入数据库信息
   		$model = new Model("dede_addonarticle");
   		$ret = $model->where('aid=5')->delete();
   		echo 'Ret:';
   		var_dump($ret);
   		
   		//Demo4 数据库操作--编辑 
   		$editRet = $model->where('aid=4')->setField('typeid','555');
   		echo 'edit ret.';
   		var_dump($editRet);
   		
   		//Demo5 数据库操作--添加
   		$model = M("dede_admin");
   		$data['id'] = '2';
   		$data['usertype'] = '10';
   		$data['userid']   = 'YafTest';
   		$data['pwd']      = md5('123456');
   		$data['uname']    = 'YafTest';
   		
   		$addRet = $model->add($data);
   		echo 'Add ret.';
   		var_dump($addRet);
   		
   		exit;
   		//向View传递数据
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