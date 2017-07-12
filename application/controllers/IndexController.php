<?php

header('content-type:text/html;charset=utf-8');
class IndexController extends Controller
{
 

	public function index()
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=xzwy';
        $pdo = new PDO($dsn, 'root', 'root');
        $pdo->exec('set names utf8');
        //轮播图
        $sql = "select * from xzwy_lunbo where `status`=1";
        $maxlun = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $sql1 = "select * from xzwy_lunbo where `status`=0";
        $minlun = $pdo->query($sql1)->fetchAll(PDO::FETCH_ASSOC);
        //企业简介
        $sql3 = "select * from xzwy_company";
        $intro = $pdo->query($sql3)->fetchAll(PDO::FETCH_ASSOC);
//        print_r($intro);die;
        //培训信息
        $nav_name = "培训信息";
        $sql4 = "select * from xzwy_content inner join xzwy_nav on xzwy_content.nav_id=xzwy_nav.nav_id where  xzwy_nav.nav_name like '%$nav_name%'";
        $pro = $pdo->query($sql4)->fetchAll(PDO::FETCH_ASSOC);
        //最新资讯
        $name = "最新资讯";
        $sql5 = "select * from xzwy_content inner join xzwy_nav on xzwy_content.nav_id=xzwy_nav.nav_id where  xzwy_nav.nav_name like '%$name%'";
        $news = $pdo->query($sql5)->fetchAll(PDO::FETCH_ASSOC);
        //项目介绍
        $name1 = "项目介绍";
        $sql6 = "select * from xzwy_content inner join xzwy_nav on xzwy_content.nav_id=xzwy_nav.nav_id left join xzwy_img on xzwy_content.content_id=xzwy_img.xzwy_content_content_id where  xzwy_nav.nav_name like '%$name1%'";
        $project = $pdo->query($sql6)->fetchAll(PDO::FETCH_ASSOC);
        //专家团队
        $name3 = "专家团队";
        $sql7 = "select * from xzwy_content inner join xzwy_nav on xzwy_content.nav_id=xzwy_nav.nav_id
  left join xzwy_img on xzwy_content.content_id=xzwy_img.xzwy_content_content_id where xzwy_nav.nav_name like '%$name3%'";
        $expert = $pdo->query($sql7)->fetchAll(PDO::FETCH_ASSOC);
        //友情链接
        $name4 = "友情链接";
        $sql8 = "select * from xzwy_content inner join xzwy_nav on xzwy_content.nav_id=xzwy_nav.nav_id
  left join xzwy_img on xzwy_content.content_id=xzwy_img.xzwy_content_content_id where xzwy_nav.nav_name like '%$name4%'";
        $friend = $pdo->query($sql8)->fetchAll(PDO::FETCH_ASSOC);

        $this->assign('maxlun', $maxlun);
        $this->assign('minlun', $minlun);
        $this->assign('intro', $intro);
        $this->assign('pro', $pro);
        $this->assign('news', $news);
        $this->assign('proje', $project);
        $this->assign('ex', $expert);
        $this->assign('friend', $friend);
        $this->render();

    }


}