<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>" />
<title><?php echo $seo['title'];?></title>
<meta name="Keywords" content="<?php echo $seo['keywords'];?>">
<meta name="Description" content="<?php echo $seo['description'];?>">
<link href="templates/<?php echo $CFG['tplname'];?>/style/reset.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/style.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/user.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/useredit.css" type="text/css" rel="stylesheet" />
<script src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body class="home-page">
<div class="wrapper">

<?php include template(header); ?>

<!-- 主体 -->
<div id="content" class="clearfix">
<div class="col_main">
<div class="edit_box">
<div id="contentfloat">
        <div id="contentt">

<div class="smalltitle">积分规则</div>
  <table cellpadding="2" cellspacing="1" class="table">
<tr>
  <td width="119"  class="tditem">注册：</td>
  <td width="618" class="tdcontent" >增加 <font color="red"><?php echo $CFG['register_credit'];?></font> 分</td>
</tr>
<tr>
  <td width="119"  class="tditem">登陆：</td>
  <td width="618" class="tdcontent" >增加 <font color="red"><?php echo $CFG['login_credit'];?></font> 分</td>
</tr>
<tr>
  <td class="tditem">发布信息：</td>
  <td class="tdcontent">增加 <font color="red"><?php echo $CFG['post_info_credit'];?></font> 分 </td>
</tr>
<tr>
  <td width="119"  class="tditem">评论信息：</td>
  <td width="618" class="tdcontent" >增加 <font color="red"><?php echo $CFG['post_comment_credit'];?></font> 分</td>
</tr>
<tr>
  <td class="tditem">信息置顶：</td>
  <td class="tdcontent">扣除 <font color="red"><?php echo $CFG['info_top_gold'];?></font> 枚 </td>
</tr>
<tr>
  <td class="tditem">一键更新信息：</td>
  <td class="tdcontent">扣除 <font color="red"><?php echo $CFG['info_refer_gold'];?></font> 枚 </td>
</tr>
<tr>
  <td class="tditem">可用积分：</td> 
 <td class="tdcontent"><font color="red"><?php echo $user_info['credit'];?></font> 分</td>
</tr>
<tr>
  <td class="tditem">可用信息币：</td>
  <td class="tdcontent"><font color="red"><?php echo $user_info['gold'];?></font> 枚</td>
</tr>
<tr>
  <td class="tditem">积分兑换信息币：</td>
  <td class="tdcontent"><font color="red"><?php echo $CFG['credit2gold'];?></font> 分/信息币</td>
</tr>
<tr>
  <td class="tditem">资金购买信息币：</td>
  <td class="tdcontent"><font color="red"><?php echo $CFG['money2gold'];?></font> 元/信息币</td>
</tr>
  </table>

 </div>　
</div>
</div>
</div>
<div class="col_sub">
<!-- 侧边栏菜单 开始 -->
<div class="side_bar">
<ul>

<?php include template(member_left); ?>

</ul>
</div>
<!-- 侧边栏菜单 结束 -->
</div>
</div>
<!-- 主体 结束 -->

<?php include template(footer); ?>

</div>
</body>
</html>
