
<div align="center"> </div>
<style type="text/css">

    .lunhuan {
        POSITION: relative; WIDTH: 100%; HEIGHT: 360px
    }
    .lunhuan #lunhuanback {
        POSITION: absolute; WIDTH: 100%; HEIGHT: 360px; OVERFLOW: hidden; TOP: 0px; LEFT: 0px
    }
    .lunhuan #lunhuanback P {
        POSITION: absolute; FILTER: alpha(opacity=0); WIDTH: 100%; BACKGROUND-REPEAT: no-repeat; BACKGROUND-POSITION: 50% 0px; HEIGHT: 360px; TOP: 0px; LEFT: 0px; opacity: 0; padding:0; margin:0
    }
    .lunhuan .lunhuan_main {
        POSITION: relative; MARGIN: 0px auto; WIDTH: 1190px; HEIGHT: 360px
    }
    .suoyouliebiao {
        Z-INDEX: 200; BORDER-BOTTOM: #e6e6e6 1px solid; POSITION: absolute; BORDER-LEFT: #e6e6e6 1px solid; WIDTH: 239px; TOP: 0px; LEFT: 0px; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2)
    }
    .lunhuancenter {
        POSITION: absolute; WIDTH: 1190px; HEIGHT: 360px; TOP: 0px; LEFT: 0px
    }
    .centergif {
        Z-INDEX: 4; POSITION: absolute; WIDTH: 100%; DISPLAY: block; HEIGHT: 360px; TOP: 0px; LEFT: 0px
    }
    .lunhuancenter B {
        Z-INDEX: 3; POSITION: absolute; FILTER: alpha(opacity=0); WIDTH: 760px; DISPLAY: block; HEIGHT: 360px; TOP: 0px; LEFT: 0px; opacity: 0
    }
    #lunbonum {
        Z-INDEX: 5; POSITION: absolute; LINE-HEIGHT: 23px; HEIGHT: 14px; TOP: 300px; padding:0; left:50%; margin-left:-150px; width:300px;  text-align:center
    }
    #lunbonum LI {
        background-color: #fff; /*鎸夐挳鑳屾櫙鑹�*/
        width: 16px;/*鎸夐挳瀹藉害*/
        height: 16px;  /*鎸夐挳楂樺害*/
        border: 1px solid #fff; /*鎸夐挳杈规*/
        margin-right: 6px;
        overflow: hidden;
        display:inline-block;
        cursor: pointer;
    }
    #lunbonum .lunboone {
        background-color:#FC0;  /*褰撳墠鎸夐挳鑳屾櫙鑹�*/
        border: 1px solid #FC0; /*褰撳墠鎸夐挳杈规*/
    }

</style>
<script type="text/javascript">

    $(document).ready(function(){
        var ali=$('#lunbonum li');
        var aPage=$('#lunhuanback p');
        var aslide_img=$('.lunhuancenter b');
        var iNow=0;
        var timer = 3600; //鍥剧墖杞崲闂撮殧鏃堕棿

        ali.each(function(index){
            $(this).mouseover(function(){
                slide(index);
            })
        });

        function slide(index){
            iNow=index;
            ali.eq(index).addClass('lunboone').siblings().removeClass();
            aPage.eq(index).siblings().stop().animate({opacity:0},600);
            aPage.eq(index).stop().animate({opacity:1},600);
            $('#links').attr('href',aPage.eq(index).attr("href"));
            $('#links').attr('target',aPage.eq(index).attr("target"));
            aslide_img.eq(index).stop().animate({opacity:1,top:0},600).siblings('b').stop().animate({opacity:0,top:0},600);
        }

        function autoRun(){
            iNow++;
            if(iNow==ali.length){
                iNow=0;
            }
            slide(iNow);
        }

        var timer1=setInterval(autoRun,timer);



        $('.lunhuancenter a').hover(function(){
            clearInterval(timer1);
        },function(){
            timer1=setInterval(autoRun,timer);
        });
    })
</script>
<div class="lunhuan">

    <div id="lunhuanback">
        <?php foreach($maxlun as $k=>$v) { ?>
            <p href="javascript:void(0);" target="" style="background-image: url(http://www.xzwy.com/upload/<?= $v['pic_link']?>); opacity: 0;"></p>
        <?php } ?>

    </div>

    <div class="lunhuan_main">
        <div class="lunhuancenter">
            <a id="links" class="centergif" href="javascript:void(0);" target=""></a>
            <b style="opacity: 0; top: 0px;"></b>
            <b style="opacity: 1; top: 0px;"></b>
            <b style="opacity: 0; top: 0px;"></b>
            <b style="opacity: 0; top: 0px;"></b>
            <b style="opacity: 0; top: 0px;"></b>
            <ul id="lunbonum">
                <li class=""></li>
                <li class="lunboone"></li>
                <li class=""></li>
            </ul>
        </div>
    </div>
</div>



<table id=table506 cellSpacing=0 cellPadding=0 width="100%" border=0>

    <tbody>

    <tr>

        <td height=20></td></tr></tbody></table>

<div align="center">

    <table border="0" width="1100" cellspacing="0" cellpadding="0" height="200" id="table928">

        <tr>

            <td width="326" valign="top">

                <style>

                    .zxx_body{line-height: 1.4; font-size: 12px; color: #333; font-family: Arial, sans-serif;}

                    .jd_body1 {

                        height: 268px;

                        overflow: hidden;

                    }

                    .jd_body img {

                        vertical-align: bottom;

                    }

                    .jd_ad_slide1{

                        width:326px; height: 268px;

                        float: left;

                        position: relative;

                    }

                    .jd_ad_img {

                        position: absolute; left: 0; top: 0;

                        width: 100%; height: 100%;

                        display: none;

                    }

                    .jd_ad_btn {

                        position: absolute; right: 3px; bottom: 8px;

                    }

                    .jd_ad_btn_a {

                        width: 22px; height: 22px;

                        line-height: 22px;

                        margin-right: 5px;

                        text-align: center;

                        border-radius: 12px;

                        background-color: #999;

                        color: #fff;

                        float: left;

                    }

                    .jd_ad_btn_a:hover {

                        text-decoration: none;

                    }

                    .jd_ad_btn .active {

                        background-color: #E4393C; color:#FFF

                    }

                </style>

                <div class="zxx_body">

                    <div class="zxx_constr">

                        <div class="jd_body1">

                            <div id="jdAdSlide1" class="jd_ad_slide1">
                                <?php foreach($minlun as $k=>$v) { ?>
                                    <img src="http://www.xzwy.com/upload/<?= $v['pic_link']?>" class="jd_ad_img">
                                <?php } ?>
                                <div id="jdAdBtn1" class="jd_ad_btn"></div>

                            </div>

                        </div>

                    </div>

                </div>

                <script src="<?= APP_PUBLIC ?>js/jquery-powerSwitch-min.js"></script>

                <script>

                    // 大的图片广告

                    // 根据图片创建id,按钮元素等，实际开发建议使用JSON数据类似

                    var timer = 4200;//图片切换时间间隔

                    var htmlAdBtn1 = '';

                    $("#jdAdSlide1 img").each(function(index, image) {

                        var id = "adImage1" + index;

                        htmlAdBtn1 = htmlAdBtn1 + '<a href="javascript:" class="jd_ad_btn_a" data-rel="'+ id +'">'+ (index + 1) +'</a>';

                        image.id = id;

                    });

                    $("#jdAdBtn1").html(htmlAdBtn1).find("a").powerSwitch({

                        eventType: "hover",

                        classAdd: "active",

                        animation: "fade",

                        autoTime: timer,

                        onSwitch: function(image) {

                            if (!image.attr("src")) {

                                image.attr("src", image.attr("data-src"));

                            }

                        }

                    }).eq(0).trigger("mouseover");

                </script></td>

            <td width="20" valign="top">　
            <td width="10" valign="top">　</td>

            <td valign="top">

                <table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table1035">

                    <tbody>

                    <tr>

                        <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

                            <table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table1036">

                                <tbody>

                                <tr>

                                    <td  >

                                        <table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table1037" bgcolor="#C5001C">

                                            <tr>

                                                <td width="10">

                                                    　</td>

                                                <td>

                                                    <font color="#FFFFFF">

                                                        <span style="font-size: 11pt; font-weight:700">培训信息</span></font></td>

                                                <td width="60">

                                                    <p align="center">
                                                        <?php foreach($pro as $kk=>$vv) { ?>
                                                        <a href="<?= APP_HOST ?>content/content/<?= $vv['nav_id']?>">
                                                            <?php } ?>
                                                            <font color="#FFFFFF">更多&gt;&gt;</font></a></td>

                                            </tr>

                                        </table>

                                        <table border="0" width="100%" cellspacing="10" cellpadding="0" id="table1038">

                                            <tr>

                                                <td>

                                                    <p align="left">

                                                    <table border="0" width="100%" cellspacing="0" cellpadding="1" height="10">


                                                        <?php foreach($pro as $k=>$v) { ?>
                                                            <tr>



                                                                <td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

                                                                    <p style="text-align: center"><font size="6">·</font></td>

                                                                <td style="border-bottom:1px #CCCCCC dotted; text-align:left;">
                                                                    <a href="<?php echo APP_HOST ?>content/info/<?php echo $v['content_id']?>" target="_blank" class=""><span style="text-decoration: none"><?= $v['content_title']?></span></a></td>



                                                            </tr>
                                                        <?php } ?>


                                                    </table>

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>

                                </tbody>

                            </table>

                        </td>

                    </tr>

                    </tbody>

                </table>

            </td>

        </tr>

    </table>
    <div align="center">
        <table id="table1022" width="1100" height="200" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
                <td width="326" valign="top">
                    <table id="table1023" width="100%" height="32" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                        <tr>
                            <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">
                                <table id="table1024" width="100%" height="32" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <table id="table1025" width="100%" height="30" cellspacing="0" cellpadding="0" border="0" bgcolor="#C5001C">
                                                <tbody><tr>
                                                    <td width="10">
                                                        &#12288;</td>
                                                    <td>
                                                        <font color="#FFFFFF">
						<span style="font-size: 11pt; font-family: 宋体; font-weight:700">
						企业简介</span></font></td>
                                                    <td width="60">
                                                        <p align="center">
                                                            <?php foreach($intro as $kk=>$vv) { ?>
                                                                <a href="<?= APP_HOST ?>content/content<?= $vv['com_id']?>"></a>
                                                            <?php } ?>
                                                            <font color="#FFFFFF">更多&gt;&gt;</font></p></td>
                                                </tr>
                                                </tbody></table>
                                            <table id="table1026" width="100%" cellspacing="10" cellpadding="0" border="0">
                                                <tbody><tr>
                                                    <td>
						<span style="font-size: 10pt">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody><tr>

        <td>

						<span style="font-size: 10pt">

<table border="0" width="100%" cellspacing="0" cellpadding="0">

    <tr>
        <?php foreach($intro as $k=>$v) { ?>
            <td align="left"><span style="font-size: 10pt"><p style="text-indent:2em;">

                        <span style="font-size:14px;"></span><span style="font-size:14px;"><?php echo $v['com_intro']?></span></td>
        <?php } ?>
    </tr>

</table>

</span></td>
    </tr>
    </tbody></table>
</span></td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td width="10" valign="top">&#12288;</td>
                <td valign="top">
                    <table id="table1027" width="100%" height="32" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                        <tr>
                            <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">
                                <table id="table1028" width="100%" height="32" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <table id="table1029" width="100%" height="30" cellspacing="0" cellpadding="0" border="0" bgcolor="#C5001C">
                                                <tbody><tr>
                                                    <td width="10">
                                                        &#12288;</td>
                                                    <td>
                                                        <font color="#FFFFFF">
                                                            <span style="font-size: 11pt; font-weight:700">项目介绍</span></font></td>
                                                    <td width="60">
                                                        <p align="center">
                                                            <?php foreach($proje as $kk=>$vv) { ?>
                                                            <a href="<?= APP_HOST ?>content/content/<?= $vv['nav_id']?>">
                                                                <?php } ?>
                                                                <font color="#FFFFFF">更多&gt;&gt;</font></a></td>
                                                </tr>
                                                </tbody></table>
                                            <table id="table1030" width="100%" height="243" cellspacing="5" cellpadding="0" border="0">
                                                <tbody><tr>
                                                    <td align="center">
						<span style="background-color: #E9E9E9">
<table width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody><tr>

        <?php foreach($proje as $k3=>$v3) { ?>
            <td>

                <table width="100%" border="0" style="border-left-width: 0px; border-right-width: 0px; border-bottom-width: 0px" cellspacing="5" cellpadding="0">

                    <tr>

                        <td align="center" style="border:1px solid #E6E6E6"><a href="<?= APP_HOST ?>content/info/<?= $v3['content_id']?>" target="_self"><img src="http://www.xzwy.com/upload/<?php echo $v3['img_path']?>" width="120" height="120" border="0" alt="" /></a></td>

                    </tr>

                    <tr>

                        <td align="center" bordercolor="#D6D6D6" style="border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-bottom-style: none; border-bottom-width: medium"> <a href="<?= APP_HOST ?>content/info/<?= $v3['content_id']?>" target="_self">

                                <font size="2"><?= $v3['content_title']?></font></a></td>

                    </tr>

                </table>

            </td>
        <?php } ?>

    </tr>

    </tbody></table>
</span></td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody></table>
        <div align="center">
            <div align="center">
                <div align="center">
                    <div align="center">
                        <table id="table1041" width="1100" height="1" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF">
                            <tbody>
                            <tr>
                                <td height="10" bgcolor="#FFFFFF"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div align="center">

        <div align="center">

            <div align="center">

                <table id=table934 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

                    <tbody>

                    <tr>

                        <td height=10 bgcolor="#FFFFFF"></td>

                    </tr>

                    </tbody>

                </table>

                <div align="center">

                    <div align="center">

                        <table id=table1073 cellSpacing=0 cellPadding=0 width="1100" border=0 height="90">

                            <tbody>

                            <tr>

                                <td height=10 bgcolor="#E9E9E9">

                                    <p align="center"><img src="<?= APP_PUBLIC ?>images/2017-0420170403114455179.jpg" width="1100" height="90" alt="" /></td></tr></tbody></table>

                    </div>

                </div>

                <div align="center">

                    <div align="center">

                        <div align="center">

                            <table id=table1074 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

                                <tbody>

                                <tr>

                                    <td height=10 bgcolor="#FFFFFF"></td>

                                </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

                <div align="center">

                    <table border="0" width="1100" cellspacing="0" cellpadding="0" height="200" id="table935">

                        <tr>

                            <td width="326" valign="top">

                                <table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table936">

                                    <tbody>

                                    <tr>

                                        <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

                                            <table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table937">

                                                <tbody>

                                                <tr>

                                                    <td  >

                                                        <table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table938" bgcolor="#C5001C">

                                                            <tr>

                                                                <td width="10">

                                                                    　</td>

                                                                <td>

                                                                    <font color="#FFFFFF">

                                                                        <span style="font-size: 11pt; font-weight:700">最新资讯</span></font></td>

                                                                <td width="60">

                                                                    <p align="center">
                                                                        <?php foreach($news as $kk=>$vv) { ?>
                                                                        <a href="<?= APP_HOST ?>content/content/<?= $vv['nav_id']?>">
                                                                            <?php } ?>
                                                                            <font color="#FFFFFF">更多&gt;&gt;</font></a></td>

                                                            </tr>

                                                        </table>

                                                    </td>

                                                </tr>

                                                </tbody>

                                            </table>

                                            <table border="0" width="100%" cellspacing="10" cellpadding="0" id="table939">

                                                <tr>

                                                    <td>

                                                        <p align="left">

                                                        <table border="0" width="100%" cellspacing="0" cellpadding="1" height="10">

                                                            <?php foreach($news as $k=>$v) { ?>

                                                                <tr>



                                                                    <td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

                                                                        <p style="text-align: center"><font size="6">·</font></td>

                                                                    <td style="border-bottom:1px #CCCCCC dotted; text-align:left;">

                                                                        <a href="<?= APP_HOST ?>content/info/<?= $v['content_id']?>" target="_self" class=""><span style="text-decoration: none"><?= $v['content_title']?></span></a></td>



                                                                </tr>
                                                            <?php } ?>




                                                        </table>

                                                    </td>

                                                </tr>

                                            </table>

                                        </td>

                                    </tr>

                                    </tbody>

                                </table>

                            </td>

                            <td width="10" valign="top">　</td>

                            <td valign="top" width="377">

                                <table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table940">

                                    <tbody>

                                    <tr>

                                        <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

                                            <table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table941">

                                                <tbody>

                                                <tr>

                                                    <td  >

                                                        <table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table942" bgcolor="#C5001C">

                                                            <tr>

                                                                <td width="10">

                                                                    　</td>

                                                                <td>

                                                                    <font color="#FFFFFF">

                                                                        <span style="font-size: 11pt; font-weight:700">新闻动态</span></font></td>

                                                                <td width="60">

                                                                    <p align="center">

                                                                        <?php foreach($pro as $k7=>$v7) { ?>
                                                                        <a href="<?= APP_HOST ?>content/content/<?= $v7['nav_id']?>">
                                                                            <?php } ?>

                                                                            <font color="#FFFFFF">更多&gt;&gt;</font></a></td>

                                                            </tr>

                                                        </table>

                                                        <table border="0" width="100%" cellspacing="10" cellpadding="0" id="table943">

                                                            <tr>

                                                                <td>

                                                                    <p align="left">

                                                                    <table border="0" width="100%" cellspacing="0" cellpadding="1" height="10">


                                                                        <?php foreach($pro as $k1=>$v1) { ?>
                                                                            <tr>



                                                                                <td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

                                                                                    <p style="text-align: center"><font size="6">·</font></td>

                                                                                <td style="border-bottom:1px #CCCCCC dotted; text-align:left;">
                                                                                    <a href="<?= APP_HOST ?>content/info/<?= $v3['content_id']?>" target="_self" class=""><span style="text-decoration: none"><?= $v1['content_title']?></span></a></td>



                                                                            </tr>
                                                                        <?php } ?>


                                                                    </table>

                                                                </td>

                                                            </tr>

                                                        </table>

                                                    </td>

                                                </tr>

                                                </tbody>

                                            </table>

                                        </td>

                                    </tr>

                                    </tbody>

                                </table>

                            </td>

                            <td width="10" valign="top">　</td>

                            <td width="377" valign="top">

                                <table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table944">

                                    <tbody>

                                    <tr>

                                        <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

                                            <table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table945">

                                                <tbody>

                                                <tr>

                                                    <td  >

                                                        <table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table946" bgcolor="#C5001C">

                                                            <tr>

                                                                <td width="10">

                                                                    　</td>

                                                                <td>

                                                                    <font color="#FFFFFF">

                                                                        <span style="font-size: 11pt; font-weight:700">培训信息</span></font></td>

                                                                <td width="60">

                                                                    <p align="center">
                                                                        <?php foreach($pro as $k4=>$v4) { ?>
                                                                        <a href="<?= APP_HOST ?>content/content/<?= $v4['nav_id']?>">
                                                                            <?php } ?>
                                                                            <font color="#FFFFFF">更多&gt;&gt;</font></a></td>

                                                            </tr>

                                                        </table>

                                                        <table border="0" width="100%" cellspacing="10" cellpadding="0" id="table947">

                                                            <tr>

                                                                <td>

                                                                    <p align="left">

                                                                    <table border="0" width="100%" cellspacing="0" cellpadding="1" height="10">

                                                                        <?php foreach($pro as $key=>$value) { ?>

                                                                            <tr>



                                                                                <td style="border-bottom:1px #CCCCCC dotted; text-align:left;" width="10">

                                                                                    <p style="text-align: center"><font size="6">·</font></td>

                                                                                <td style="border-bottom:1px #CCCCCC dotted; text-align:left;">
                                                                                    <a href="<?= APP_HOST ?>content/info/<?= $v3['content_id']?>" target="_self" class=""><span style="text-decoration: none"><?= $value['content_title']?></span></a></td>



                                                                            </tr>

                                                                        <?php } ?>


                                                                    </table>

                                                                </td>

                                                            </tr>

                                                        </table>

                                                    </td>

                                                </tr>

                                                </tbody>

                                            </table>

                                        </td>

                                    </tr>

                                    </tbody>

                                </table>

                            </td>

                        </tr>

                    </table>

                    <table id=table948 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

                        <tbody>

                        <tr>

                            <td height=10 bgcolor="#FFFFFF"></td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <div align="center">

        <table id=table949 cellSpacing=0 cellPadding=0 width="1100" border=0 height="90">

            <tbody>

            <tr>

                <td height=10 bgcolor="#E9E9E9">

                    <p align="center"><span style="background-color: #E9E9E9"><a href="<?= APP_HOST ?>content/info/<?= $v3['content_id']?>" target="_blank"><img src="<?= APP_PUBLIC ?>images/2017-0420170403120326495.jpg" width="1100" height="90" alt="" /></a></span></td></tr></tbody></table>

        <table id=table1054 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

            <tbody>

            <tr>

                <td height=10 bgcolor="#FFFFFF"></td>

            </tr>

            </tbody>

        </table>

        <div align="center">

            <table border="0" width="1100" cellspacing="0" cellpadding="0" height="200" id="table1055">

                <tr>

                    <td width="326" valign="top">

                        <table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table1056">

                            <tbody>

                            <tr>

                                <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

                                    <table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table1057">

                                        <tbody>

                                        <tr>

                                            <td  >

                                                <table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table1058" bgcolor="#C5001C">

                                                    <tr>

                                                        <td width="10">

                                                            　</td>

                                                        <td>

                                                            <font color="#FFFFFF">

						<span style="font-size: 11pt; font-family: 宋体; font-weight:700">

						在线报名</span></font></td>

                                                        <td width="60">

                                                            <p align="center">

                                                                <a href="<?= APP_HOST ?>content/content">

                                                                    <font color="#FFFFFF">更多&gt;&gt;</font></a></td>

                                                    </tr>

                                                </table>

                                                <table id="table1059" width="100%" cellspacing="10" cellpadding="0" border="0">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <p align="center">
                                                            </p>
                                                            <div class="box">
                                                                <div class="content soupuform">
                                                                    <table width="100%" cellspacing="12" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <form id="myform" method="post" action="<?= APP_HOST ?>online/sign_add" name="myform">
                                                                                    <table class="table_form" width="100%" cellspacing="0">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <th style="word-break: keep-all;" nowrap="nowrap">
                                                                                                <font color="red">*</font>
                                                                                                姓名
                                                                                            </th>
                                                                                            <td class="soupuform1">
                                                                                                <input id="title" class="input-text" name="user_name" size="22" style="width:;" value="" placeholder="姓名" type="text">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th style="word-break: keep-all;" nowrap="nowrap">
                                                                                                <font color="red">*</font>
                                                                                                性别
                                                                                            </th>
                                                                                            <td class="soupuform1">
                                                                                                <label class="ib" style="width:80px">
                                                                                                    <input id="xingbienan" name="user_sex" checked="" value="1" type="radio">
                                                                                                    先生
                                                                                                </label>
                                                                                                <label class="ib" style="width:80px">
                                                                                                    <input id="xingbienv" name="user_sex" value="0" type="radio">
                                                                                                    女士
                                                                                                </label>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th style="word-break: keep-all;" nowrap="nowrap">
                                                                                                <font color="red">*</font>
                                                                                                电话
                                                                                            </th>
                                                                                            <td class="soupuform1">
                                                                                                <input id="dianhua" class="input-text" name="user_tel" size="22" style="width:;" value="" placeholder="电话" type="text">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th style="word-break: keep-all;" nowrap="nowrap"> 备注 </th>
                                                                                            <td class="soupuform1">
                                                                                                <textarea id="beizhu" class="input-textarea" name="user_remark" style="width:18;height:30;" placeholder="备注"></textarea>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td>
                                                                                                <div class="submit fr">
                                                                                                    <input id="reset" class="reset" name="reset" value=" 重置 " type="reset">
                                                                                                    <input id="dosubmit" class="but" name="dosubmit" value=" 提交 " type="submit">
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </td>

                                        </tr>

                                        </tbody>

                                    </table>

                                </td>

                            </tr>

                            </tbody>

                        </table>

                    </td>



                    <td width="10" valign="top">　</td>

                    <td valign="top">

                        <table height=32 cellspacing=0 cellpadding=0 width=100% border=0 id="table1060">

                            <tbody>

                            <tr>

                                <td bordercolor="#e6e6e6" style="border:solid 1px #e8e8e8">

                                    <table height=32 cellspacing=0 cellpadding=0 width=100%  border=0 id="table1061">

                                        <tbody>

                                        <tr>

                                            <td  >

                                                <table border="0" width="100%" cellspacing="0" cellpadding="0" height="30" id="table1062" bgcolor="#C5001C">

                                                    <tr>

                                                        <td width="10">

                                                            　</td>

                                                        <td>

                                                            <font color="#FFFFFF">

                                                                <span style="font-size: 11pt; font-weight:700">专家团队</span></font></td>

                                                        <td width="60">

                                                            <p align="center">
                                                                <?php foreach($ex as $kk=>$vv) { ?>
                                                                <a href="<?= APP_HOST ?>content/content/<?= $vv['nav_id']?>">
                                                                    <?php } ?>
                                                                    <font color="#FFFFFF">更多&gt;&gt;</font></a></td>

                                                    </tr>

                                                </table>

                                                <table border="0" width="100%" cellspacing="10" cellpadding="0" id="table1063">

                                                    <tr>

                                                        <td>

                                                            <p align="center">

                                                                <script src="<?= APP_PUBLIC ?>js/jQuery-jcMarquee.js"></script>

                                                                <style>

                                                                    <!--

                                                                    .Marquee_x { overflow:hidden; width: 746px; height:240px; } /* 浮动区域的宽度和高度 */

                                                                    .Marquee_x ul li ,.Marquee_x ul li div{ float:left;} /* 横向滚动必须让所有li左浮动 */

                                                                    .Marquee_x span{ display:block}

                                                                    .Marquee_x .img{ width:150px; height:200px;}

                                                                    .Marquee_x .title{ text-align:center}

                                                                    -->

                                                                </style>

                                                                <script>

                                                                    var speed=10 //图片滚动速度

                                                                    if(navigator.userAgent.indexOf("MSIE")>0){speed=speed;} else{ speed=speed*2;}

                                                                    $(function(){

                                                                        $('.Marquee_x').jcMarquee({ 'marquee':'x','margin_right':'10px','speed':speed });

                                                                    });

                                                                </script>  <div class="Marquee_x">

                                                                <ul>

                                                                    <li>




                                                                        <?php foreach($ex as $k=>$v) { ?>
                                                                            <div><span class="img"><a href="<?=  APP_HOST ?>content/content/<?= $v['nav_id']?>" target="_self"><img src="http://www.xzwy.com/upload/<?= $v['img_path']?>" width="150" height="200" border="0" alt="<?= $v['content_title']?>" /></a></span>

                                                                                <span class="title"><a href="<?=  APP_HOST ?>content/content/<?= $v['nav_id']?>" target="_self"><font size="2"><?= $v['content_title']?></font></a></span></div>

                                                                        <?php } ?>


                                                                    </li>

                                                                </ul>

                                                            </div>

                                                        </td>

                                                    </tr>

                                                </table>

                                            </td>

                                        </tr>

                                        </tbody>

                                    </table>

                                </td>

                            </tr>

                            </tbody>

                        </table>

                    </td>

                </tr>

            </table>

            <div align="center">

                <div align="center">

                    <div align="center">

                        <div align="center">

                            <table id=table1064 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

                                <tbody>

                                <tr>

                                    <td height=10 bgcolor="#FFFFFF"></td>

                                </tr>

                                </tbody>

                            </table>


                            <div align="center">

                                <table id=table1069 cellSpacing=0 cellPadding=0 width="1100" border=0 height="90">

                                    <tbody>

                                    <tr>

                                        <td height=10 bgcolor="#E9E9E9" width="96">

                                            <p align="center">

                                                <img border="0" src="<?= APP_PUBLIC ?>images/link123.jpg" width="60" height="60"></td>

                                        <td height=10 bgcolor="#E9E9E9">

                                            <p align="left">

                                            <table border="0" width="100%" cellspacing="0" cellpadding="0" height="15">



                                                <tr>


                                                    <?php foreach($friend as $k=>$v) { ?>
                                                        <td> <table width="100%" border="0">

                                                                <tr>

                                                                    <td align="center"><a href="http://zscx.osta.org.cn/" target="_blank"><img src="http://www.xzwy.com/upload/<?= $v['img_path']?>" width="160" height="60" border="0" alt="<?= $v['content_title']?>" /></a></td>

                                                                </tr>

                                                            </table>

                                                        </td>
                                                    <?php } ?>



                                                </tr>



                                            </table>

                                        </td></tr></tbody></table>

                                <table id=table1070 height=1 cellSpacing=0 cellPadding=0 width="1100" border=0 bgcolor="#FFFFFF">

                                    <tbody>

                                    <tr>

                                        <td height=10 bgcolor="#FFFFFF"></td>

                                    </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</td>

</tr>

</table>

</td>

</tr>

</table>


</div>



</td>

<td width="20" valign="top">　</td>



<!--原来你的代码-->

<!--

<td valign="top" bordercolor="#E6E6E6" style="border-style: solid; border-width: 1px">

-->

<!--新的代码，解决表格边框颜色在谷歌浏览器下的异常问题-->

<td valign="top" style="border:1px solid #E6E6E6; ">









</td>

</tr>

</table>

</div>	<table id=table14 height=1 cellSpacing=0 cellPadding=0 width="100%" border=0>

    <tbody>

    <tr>

        <td height=20></td>

    </tr>

    </tbody>

</table>

</div>
