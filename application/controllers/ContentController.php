<?php
 
class ContentController extends Controller
{    public function content( $id = null )
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=xzwy';
        $pdo = new PDO($dsn, 'root', 'root');
        $pdo->exec('set names utf8');

        $navModel = new NavModel();
        $nav = $navModel ->where(['nav_id'=>$id])->selectAll();
        //根据nav_id查询数据
        $model = new ContentModel();
        $content = $model->where(['nav_id'=>$id])->selectAll();

        $sql = "select * from xzwy_content inner join xzwy_nav on xzwy_content.nav_id=xzwy_nav.nav_id
               left join xzwy_img on xzwy_content.content_id=xzwy_img.xzwy_content_content_id where xzwy_nav.nav_id=$id";
        $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        //查询公司数据
        $company = ( new CompanyModel() )->selectAll();



        switch ($nav[0]['nav_name'])
        {
            case  '公司简介':
                $this->assign('data', $content[0]);
                $this->assign('company', $company[0]);
                $this->render('content');
                break;
            case '在线报名':
                $this->render('online');
                break;
            case '专家团队':
                $this->assign('data', $data);
                $this->render('export');
                break;
            case '联系我们':
                $this->assign('company', $company[0]);
                $this->render('contact');
                break;
            default:
                $this->assign('data', $content);
                $this->assign('company', $company[0]);
                $this->render('list');
                break;
        }
    }
    public function info( $id=null ){
        //根据content_id查询数据
        $model = new ContentModel();
        $content = $model->where(['content_id'=>$id])->selectAll();
        $this->assign('content', $content[0]);
        $this->render('info');
    }
}