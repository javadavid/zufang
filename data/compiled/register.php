<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $seo['title'];?></title>
<meta name="Keywords" content="<?php echo $seo['keywords'];?>">
<meta name="Description" content="<?php echo $seo['description'];?>">
<link href="templates/<?php echo $CFG['tplname'];?>/style/reset.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/style.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/reg.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/validator/validator.min.js"></script>
<link href="js/validator/validator.css" type="text/css" rel="stylesheet" />
</head>
<body class="home-page">
<div class="wrapper">

<?php include template(header); ?>

<!-- ���� -->
<form name="reg" method="post" action="member.php" >
<div id="content">
<div id="regk">
<div id="regz"> �û�ע�᣺</div>
<div class="regc">
<div class="regc_1 clearfix">
<span class="left"><span class="red">*</span>����һ���û���</span>
<input class="input0" type="text" id="username" name="username" /> <span id=c_username></span></div>
<div class="regc_1 clearfix"><span class="left"><span class="red">*</span>������һ������</span><input class="input0" type="password" id="password" name="password" /> <span id=c_password></span></div>
<div class="regc_1 clearfix"><span class="left"><span class="red">*</span>ȷ�����������</span><input class="input0" type="password" id="repassword" name="repassword" /><span id=c_repassword></span></div>

<div class="regc_1 clearfix"><span class="left"><span class="red">*</span>�������ʼ���ַ</span><input class="input0" type="text" id="email" name="email" /> <span id="c_email"></span></div>

<div class="regc_1 clearfix"><span class="left"><span class="red">*</span>������֤</span>
                <input type="text" name="answer" id="answer" size="20" class="textInt"/>
<input type="hidden" id="vid" name="vid" value=<?php echo $verf['vid'];?> />
���⣺<?php echo $verf['question'];?>��&nbsp;<span id=imgid></span><span id=c_checkver></span>
</div>

<div class="regc_1 clearfix">
<input type="hidden" name="act" value="act_register">
<input type="hidden" name="submit" value="1">
<input type="submit" name="submit" value="�ύע����Ϣ">&nbsp;&nbsp;�Ѿ����˺ţ��� <a href="member.php?act=login&refer=<?php echo $PHP_URL;?>" >��½</a>
</div></div>
</div>
</div>
</form>
<!-- ���� ���� -->

<?php include template(footer); ?>

</div>
 <script type="text/javascript">
$.validator("username")
.setDefaultMsg("������8�����֣���16���ַ�(���֣���ĸ���»���)��")
.setFocusMsg("������8�����֣���16���ַ�(���֣���ĸ���»���)��")
.setRequired("����д�û�����")
.setServerCharset("GBK")
.setStrlenType("byte")
.setMaxLength(16, "������8�����֣���16���ַ�(���֣���ĸ���»���)��")
.setAjax("member.php?act=ajax&type=username", "���û����ѱ�ע�ᣬ������һ����")
.setCallback(function(str){ return /^[\w|\u4E00-\u9FA5|-]*$/.test(str); }, "�û�������ʹ�ú��֡���ĸ�����֡����ߡ��»��ߡ�")
.setCallback(function(str){ return ! /^\d{11}$/.test(str); }, "�û���������11λ���֣�������һ��");

$.validator("email")
.setDefaultMsg("��������Ч�ĵ������䣬�����ڵ�¼�����ʻ����һ����롣")
.setFocusMsg("��������Ч�ĵ������䣬�����ڵ�¼�����ʻ����һ����롣")
.setRequired("����д�������䡣")
.setServerCharset("gbk")
.setStrlenType("symbol")
.setMaxLength(50, "�����ʽ����")
.setRegexp(/^\w+((-|\.)\w+)*@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/, "���������ʽ����ȷ��", false)
.setAjax("member.php?act=ajax&type=email", "�˵��������ѱ�ע�ᣬ������һ����");

$.validator("password")
.setDefaultMsg("6��12���ַ�(���֣���ĸ���»��ߣ���ĸ���ִ�Сд)��")
.setFocusMsg("6��12���ַ�(���֣���ĸ���»��ߣ���ĸ���ִ�Сд)��")
.setRequired("����д���롣")
.setRegexp(/^\w+$/, "����ֻ�������֡���ĸ���»�����ɡ�", false)
.setServerCharset("gbk")
.setStrlenType("symbol")
.setMinLength(6, "����̫�̣�����Ϊ6λ��")
.setMaxLength(12, "���벻Ӧ����12���ַ���")
.setCallback(is_complex_password, "��������̫���򵥣�Ϊ��֤��ȫ����������ӵ����롣")
.setCompareField("!=", "username", "���벻�ܺ��û�����ͬ��");

$.validator("repassword")
.setDefaultMsg("6��12���ַ�(���֣���ĸ���»��ߣ���ĸ���ִ�Сд)��")
.setFocusMsg("������һ�����롣")
.setRequired("��������һ�����롣")
.setRegexp(/^\w+$/, "����ֻ�������֡���ĸ���»�����ɡ�", false)
.setServerCharset("gbk")
.setStrlenType("symbol")
.setMinLength(6, "����̫�̣�����Ϊ6λ��")
.setMaxLength(12, "���벻Ӧ����12���ַ���")
.setCompareField("==", "password", "������������벻һ�¡�");

$.validator("answer")
.setRequired("����д������֤��")
.setAjax("do.php?act=ver&vid="+$('#vid').val(), "�ش���ȷ��");
</script>
</body>
</html>