<?php

    $company = (new CompanyModel())->selectAll();

    $company = $company[0];

    $img = (new ImgModel())->selectAll();

    $img = $img[0];
?>

<div align="center">

<table id=table473 cellSpacing=0 cellPadding=0 width="100%" border=0 bgcolor="#C5001C">

<tbody>

<tr>

<td height=5></td></tr></tbody></table>

	<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table470" background="images/foot-bg.jpg">

		<tr>

			<td>

			<div align="center">

				<table border="0" width="1100" cellspacing="0" cellpadding="0" height="180" id="table471">

					<tr>

						<td width="250">

						<img border="0" src="http://www.xzwy.com/upload/<?= $img['img_path']?>" width="200" height="120"></td>

						<td>

						　</td>

						<td width="804">

						<table border="0" width="100%" height="120" id="table472">

							<tr>

								<td>

						<p align="left">

						<font style="font-size: 10pt"><strong><span style="font-size:14px;"> <?= $company['com_name']?> </span></strong><a href="<?= $company['web_address']?>"><strong><span style="font-size:14px;"><?= $company['web_address']?></span></strong></a><br />

<p>

	<strong><span style="font-size:14px;">地址：<?= $company['com_address']?>   咨询热线：<?= $company['com_tel']?> </span></strong>

</p>

<strong><span style="font-size:14px;"> 

<div>

	<strong><span style="font-size:14px;">网站备案号：<span style="line-height:20px;background-color:#ffffff;font-family:'lucida Grande', Verdana, 'Microsoft YaHei';">京ICP备</span><span style="line-height:20px;background-color:#ffffff;font-family:'lucida Grande', Verdana, 'Microsoft YaHei';">17019015</span><span style="line-height:20px;background-color:#ffffff;font-family:'lucida Grande', Verdana, 'Microsoft YaHei';">号-1 </span><span style="background-color:#ffffff;font-family:'lucida Grande', Verdana, 'Microsoft YaHei';"></span></span></strong><span style="line-height:1.5;font-size:12px;font-weight:normal;"></span><a href="http://www.xzwy.com" target="_blank"><strong><span style="font-size:14px;">网站管理</span></strong></a>

</div>

</span></strong></font></td>

							</tr>

						</table>

						</td>

					</tr>

				</table>

			</div>

			</td>

		</tr>

	</table>

	</div>





</body>

</html>