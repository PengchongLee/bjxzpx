<div align="center">
    <table width="1100" border="0" cellpadding="0" cellspacing="0" background="images/centerbg.gif" style="border-top-width: 0px; border-bottom-width: 0px; " id="table556">
        <tr>
            <td width="270"  valign="top">
                <div align="center">
                    <table height=40 cellspacing=0 cellpadding=0 width=100% border=0 id="table557" bgcolor="#C5001C" style="border-width: 0px">
                        <tbody>
                        <tr>
                            <td bordercolor="#e6e6e6" style="border:medium none #e6e6e6; ">
                                <table cellspacing=0 cellpadding=0 width=100% border=0 id="table558">
                                    <tbody>
                                    <tr>
                                        <td width="100%">
                                            <p align="left">
                                                <font style="font-size: 11pt; font-weight: 700" color="#FFFFFF">&nbsp;&nbsp;&nbsp;
                                                    栏目导航</font></td>
                                    </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                        </tbody>
                    </table>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0" id="table559" style="border-top-width: 0px">
                        <tr>
                            <td width="100%" height="58" valign="top" bordercolor="#e6e6e6" style="border:solid 1px #e6e6e6">
                                <table width="100%"  border="0" cellspacing="10" cellpadding="0" id="table560">
                                    <tr>
                                        <td width="100%" height="58" valign="top">
                                            <p align="center">
                                                <style type="text/css">
                                                    .leftmenu td{ text-align:center; background:url(images/menu_class_r.gif) no-repeat left top}
                                                    .leftmenu a{ color:#fffffff;  font-size:12px; display:block}
                                                    .leftmenu td:hover{background:url(images/menunow_class_r.gif) no-repeat left top;color:#FFFFFF}/*鼠标停留的样式*/
                                                    .leftmenu .on {background:url(images/menunow_class_r.gif) no-repeat left top;color:#FFFFFF}/*当前栏目的样式*/
                                                    .leftmenu .on a{ color:#FFFFFF}/*当前栏目的文字颜色*/
                                                </style>
                                            <table border="0" width="100%" cellspacing="0" class="leftmenu">

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table id=table561 cellSpacing=0 cellPadding=0 width="100%" border=0 bgcolor="#FFFFFF">
                        <tbody>
                        <tr>
                            <td height=8></td></tr></tbody></table>
                </div>
                <table height=119 cellspacing=0 cellpadding=0 width=100% background=images/lianxiwomen.jpg border=0 id="table562" style="border-width: 0px">
                    <tbody>
                    <tr>
                        <td bordercolor="#e6e6e6" style="border:medium none #e6e6e6; ">
                            　</td>
                    </tr>
                    </tbody>
                </table>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0" id="table563" style="border-top-width: 0px">
                    <tr>
                        <td width="100%" height="58" valign="top" bordercolor="#e6e6e6" style="border:solid 1px #e6e6e6">
                            <table width="100%"  border="0" cellspacing="10" cellpadding="0" id="table564">
                                <tr>
                                    <td width="100%" height="58" valign="top">
                                        <style>
                                            .qqlist a{ display:block}
                                            .qqlist img{ float:left}
                                            .qqlist span{ line-height:25px; padding-top:3px; display:block}
                                        </style>
                                        <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>

                                            <TR>
                                                <TD align="right" vAlign=top width="65">公司地址：</TD>
                                                <TD align="left" vAlign=top><?= $company['com_address']?></TD>
                                            </TR>

                                            <TR>
                                                <TD align="right" vAlign=top width="65">联系电话：</TD>
                                                <TD align="left" vAlign=top><?= $company['com_tel']?><br></TD>
                                            </TR>

                                            <TR>
                                                <TD align="right" vAlign=top width="65">传　　真：</TD>
                                                <TD align="left" vAlign=top><?= $company['com_tel']?></TD>
                                            </TR>

                                            <TR>
                                                <TD align="right" vAlign=top width="65">网站地址：</TD>
                                                <TD align="left" vAlign=top><a href="<?= $company['web_address']?>" target="_blank"><?= $company['web_address']?></a></TD>
                                            </TR>

                                        </TABLE>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="20" valign="top">　</td>

            <!--原来你的代码-->
            <!--
            <td valign="top" bordercolor="#E6E6E6" style="border-style: solid; border-width: 1px">
            -->
            <!--新的代码，解决表格边框颜色在谷歌浏览器下的异常问题-->
            <td valign="top" style="border:1px solid #E6E6E6; ">



                <table height=500 cellspacing=20 cellpadding=0 width="100%" border=0 id="table565">
                    <tbody>
                    <tr valign=top>
                        <td class="imgresize" align="left">
                            <style>
                                .cellcolor{ background:#F5F5F5}
                            </style>
                            <table border="0" width="100%" cellspacing="0" cellpadding="0" height="25">

                                <?php foreach($data as $key=>$val){?>

                                <tr>

                                    <td align="left" class="cellcolor" height="35"><table border="0" width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td>&nbsp; · <a href="<?= APP_HOST?>content/info/<?php echo $val['content_id'] ?>" target="_self"><?= $val['content_title']?></a></td>
                                                <td width="80"><?= $val['create_time']?></td>
                                            </tr>
                                        </table></td>

                                </tr>
l
                                <?php }?>

                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
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
