<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>" />
<title>�����ɹ�</title>
<meta name="Keywords" content="<?php echo $seo['keywords'];?>">
<meta name="Description" content="<?php echo $seo['description'];?>">
<link href="templates/<?php echo $CFG['tplname'];?>/style/reset.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/style.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/post.css" type="text/css" rel="stylesheet" />
<script src="js/common.js"></script>
<script src="js/jquery.js"></script>
<script src="js/post.js"></script>
</head>
<body class="home-page">
<div class="wrapper">

<?php include template(header); ?>

<!-- ���� -->
<div id="content">
<div class="thd clearfix"><b>�������裺</b><span>1.ѡ�����</span><span>2.��д����</span><span class="current">3.�������</span></div>
<div class="fbd clearfix" style="padding:40px 0;">
<div class="pic"><img src="templates/<?php echo $CFG['tplname'];?>/images/fabu3_03.png" alt="" /></div>
<div class="text">
<p><b>�����ɹ�!</b>��
<a href="<?php echo $CFG['postfile'];?>">�ٷ���һ��</a>��
<a href="member.php?act=info">�����ҵ���Ϣ</a></p>
<p><b>��ʾ��</b>���շ�������Ϣ������Ҫ��˲�����ʾ���������ĵȴ���<br />������
 ע���Աÿ�ɹ�����һ����Ϣ��<b class="red_skin"><?php echo $CFG['post_info_credit'];?></b>���֡�<br />������
 �����ϣ���ɽ��ʸ��ߣ����Թ�����Ϣ�ö����ö��ȷ���</p>
</div>
</div>
</div>
<!-- ���� ���� -->

<?php include template(footer); ?>

</div>
</body>
</html>