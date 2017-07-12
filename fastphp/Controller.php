<?php
/**
 * 控制器基类
 */
class Controller
{
    protected $_controller;
    protected $_action;
    protected $_view;

    // 构造函数，初始化属性，并实例化对应模型
    public function __construct($controller, $action)
    {
        $this->_controller = $controller;
        $this->_action = $action;
        $this->_view = new View($controller, $action);
    }

    public function display($url = "")
    {
        $path = APP_HOST;
        header("refresh:0;url=$path/$url");
    }

    // 分配变量
    public function assign($name, $value)
    {
        $this->_view->assign($name, $value);
    }

    // 渲染视图
    public function render( $view='' )
    {
        $view = empty($view) ? $this->_action : $view;
        $this->_view->render($view);
    }

    //跳转控制器，方法
    public function redirect($url=null) {
        //$this->redirect('index')
        $len = strpos($url,'?')+1;
        $param = substr($url,$len);

        $u = explode('/',$url);
        $pau = substr($url,0,$len-1);
//        echo $param.','.$pau;die;

        if($len == 1){
            if(count($u)<=1){
                $url = APP_URL.'/'.$this->_controller.'/'.$url;
            }else{
                $url =APP_URL.'/'.$url;
            }
        }else{
            if(count($u)<=1){
                $url = APP_URL.'/'.$this->_controller.'/'.$pau.'&'.$param;
            }else{
                $url = APP_URL.'/'.$this->_controller.'/'.$pau.'&'.$param;
            }
        }

        header("Location:".$url);
        exit();

    }
}