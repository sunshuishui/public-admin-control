<?php
if($act=='all'){
	$listText='����';	
}elseif($act=='lc'){
	$listText='��˾����';
}elseif($act=='ms'){
	$listText='����ģʽ';
}elseif($act=='ai'){
	$listText='��������';
}elseif($act=='ry'){
	$listText='��ҵ����';
}elseif($act=='wh'){
	$listText='��˾�Ļ�';
}elseif($act=='hezuo'){
	$listText='�������';
}elseif($act=='yjy'){
	$listText='�о�Ժ';
}elseif($act=='peixun'){
	$listText='��ѵ����';
}elseif($act=='zhuanye'){
	$listText='רҵ��ѵ';
}elseif($act=='zhuanti'){
	$listText='ר����ѵ';
}elseif($act=='jingyao'){
	$listText='��Ҫ��ѵ';
}elseif($act=='gangwei'){
	$listText='��λ��ѵ';
}elseif($act=='about_ziben'){
	$listText='�����ʱ�';
}elseif($act=='core_strength'){
	$listText='���ľ�����';
}elseif($act=='investment_strategy'){
	$listText='Ͷ�ʲ���';
}elseif($act=='funds_series'){
	$listText='����ϵ��';
}elseif($act=='track_record'){
	$listText='��������';
}elseif($act=='about_zichan'){
	$listText='�����ʲ�';
}elseif($act=='full_model'){
	$listText='��ҵ��';
}elseif($act=='externally_work_together'){
	$listText='�������';
}elseif($act=='about_build'){
	$listText='���ڽ���';
}elseif($act=='core_advantage'){
	$listText='��������';
}elseif($act=='our_college'){
	$listText='ѧԺ';
}elseif($act=='work_together'){
	$listText='�������';
}elseif($act=='vision'){
	$listText='��˾Ը��';
}elseif($act=='servicearea'){
	$listText='��������';
}elseif($act=='qualifications'){
	$listText='��˾����';
}elseif($act=='core_advantage'){
	$listText='��������';
}


elseif($act=='disign_concept'){
	$listText='�������';
}elseif($act=='design_control'){
	$listText='��ƿ���';
}elseif($act=='service_scrope'){
	$listText='��Ʒ���';
}elseif($act=='collaborative_platform'){
	$listText='Эͬƽ̨';
}elseif($act=='support'){
	$listText='֧��ƽ̨';
}

elseif($act=='idea_goal'){
	$listText='������Ŀ��';
}elseif($act=='training_system'){
	$listText='��ѵ��ϵ';
}elseif($act=='promotion'){
	$listText='������ϵ';
}elseif($act=='organization'){
	$listText='��֯��ʵʩ';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?=base_url()?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery-1.8.2.min.js"></script>
<script src="<?=base_url()?>kindeditor/kindeditor.js"></script>
<script src="<?=base_url()?>kindeditor/lang/zh_CN.js"></script>
<script>
KindEditor.ready(function(K) {
		window.editor = K.create('#company_profile');
		window.editor = K.create('#our_mission');
		window.editor = K.create('#company_scale');
		window.editor = K.create('#company_history');
		window.editor = K.create('#service_model');
		window.editor = K.create('#love');
		window.editor = K.create('#corporate_culture');
		window.editor = K.create('#partner');
		window.editor = K.create('#research_institute');
		window.editor = K.create('#training_base');
		window.editor = K.create('#zhuanti');
		window.editor = K.create('#zhuanye');
		window.editor = K.create('#gangwei');
		window.editor = K.create('#jingyao');
		window.editor = K.create('#about_ziben');
		window.editor = K.create('#core_strength');
		window.editor = K.create('#investment_strategy');
		window.editor = K.create('#funds_series');
		window.editor = K.create('#track_record');
		
		window.editor = K.create('#externally_work_together');
		window.editor = K.create('#full_model');
		window.editor = K.create('#about_zichan');
		
		window.editor = K.create('#about_build');
		window.editor = K.create('#core_advantage');
		window.editor = K.create('#our_college');
		window.editor = K.create('#work_together');
		window.editor = K.create('#vision');
		window.editor = K.create('#servicearea');
		window.editor = K.create('#qualifications');
		
		window.editor = K.create('#disign_concept');
		window.editor = K.create('#design_control');
		window.editor = K.create('#service_scrope');
		window.editor = K.create('#collaborative_platform');
		window.editor = K.create('#support');
		
		window.editor = K.create('#idea_goal');
		window.editor = K.create('#training_system');
		window.editor = K.create('#promotion');
		window.editor = K.create('#organization');
});
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
	font-size:12px;
}
-->
</style>
<title>������</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="<?=base_url()?>images/mail_leftbg.gif"><img src="<?=base_url()?>images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?=base_url()?>images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt"><?=$listText?></div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?=base_url()?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    <?php if($act=='all'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;">��ҵ���ܣ�<textarea id="company_profile" name="company_profile" style="width:735px; height:340px;"><?=$datainfo['company_profile']?></textarea></td>
            </tr>
            
            <tr>
                <td align="left" style="padding-top:25px">���ǵ�ʹ����<textarea id="our_mission" name="our_mission" style="width:735px; height:340px;"><?=$datainfo['our_mission']?></textarea></td>
            </tr>
            <tr>
                <td align="left" style="padding-top:25px">��˾��ģ��<textarea id="company_scale" name="company_scale" style="width:735px; height:340px;"><?=$datainfo['company_scale']?></textarea></td>
            </tr>
            <tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="company_profile,our_mission,company_scale" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='lc'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="company_history" name="company_history" style="width:735px; height:540px;"><?=$datainfo['company_history']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="company_history" /></td>
            </tr>
        </table>
    </form>
     <?php }elseif($act=='ms'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="service_model" name="service_model" style="width:735px; height:540px;"><?=$datainfo['service_model']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="service_model" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='ai'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="love" name="love" style="width:735px; height:540px;"><?=$datainfo['love']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="love" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='wh'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    		<tr><td><a href="<?=site_url('wenhua/wlist')?>">�Ŷӻ</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=site_url('environment/index')?>">��������</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="corporate_culture" name="corporate_culture" style="width:735px; height:540px;"><?=$datainfo['corporate_culture']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="corporate_culture" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='hezuo'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="partner" name="partner" style="width:735px; height:540px;"><?=$datainfo['partner']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="partner" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='yjy'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="research_institute" name="research_institute" style="width:735px; height:540px;"><?=$datainfo['research_institute']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="research_institute" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='peixun'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    		<tr><td height="40"><a href="<?=site_url('about/editlist/zhuanti')?>">ר����ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/zhuanye')?>">רҵ��ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/gangwei')?>">��λ��ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/jingyao')?>">��Ҫ��ѵ</a>|&nbsp;<a href="<?=site_url('photo/index')?>">ѧԱ��Ӱ</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="training_base" name="training_base" style="width:735px; height:540px;"><?=$datainfo['training_base']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="training_base" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='zhuanti'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    		<tr><td height="40"><a href="<?=site_url('about/editlist/zhuanti')?>">ר����ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/zhuanye')?>">רҵ��ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/gangwei')?>">��λ��ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/jingyao')?>">��Ҫ��ѵ</a>|&nbsp;<a href="<?=site_url('photo/index')?>">ѧԱ��Ӱ</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="zhuanti" name="zhuanti" style="width:735px; height:540px;"><?=$datainfo['zhuanti']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="zhuanti" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='zhuanye'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr><td height="40"><a href="<?=site_url('about/editlist/zhuanti')?>">ר����ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/zhuanye')?>">רҵ��ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/gangwei')?>">��λ��ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/jingyao')?>">��Ҫ��ѵ</a>|&nbsp;<a href="<?=site_url('photo/index')?>">ѧԱ��Ӱ</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="zhuanye" name="zhuanye" style="width:735px; height:540px;"><?=$datainfo['zhuanye']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="zhuanye" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='gangwei'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
           <tr><td height="40"><a href="<?=site_url('about/editlist/zhuanti')?>">ר����ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/zhuanye')?>">רҵ��ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/gangwei')?>">��λ��ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/jingyao')?>">��Ҫ��ѵ</a>|&nbsp;<a href="<?=site_url('photo/index')?>">ѧԱ��Ӱ</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="gangwei" name="gangwei" style="width:735px; height:540px;"><?=$datainfo['gangwei']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="gangwei" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='jingyao'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr><td height="40"><a href="<?=site_url('about/editlist/zhuanti')?>">ר����ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/zhuanye')?>">רҵ��ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/gangwei')?>">��λ��ѵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/jingyao')?>">��Ҫ��ѵ</a>|&nbsp;<a href="<?=site_url('photo/index')?>">ѧԱ��Ӱ</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="jingyao" name="jingyao" style="width:735px; height:540px;"><?=$datainfo['jingyao']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="jingyao" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='about_ziben' or $act=='core_strength' or $act=='investment_strategy' or $act=='funds_series' or $act=='track_record' or $act=='externally_work_together' or $act=='full_model' or $act=='about_zichan'){?>
    <form action="<?=site_url('about/editjectsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="<?=$act?>" name="<?=$act?>" style="width:735px; height:540px;"><?=$datainfo[$act]?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="<?=$act?>" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='about_build' or $act=='vision' or $act=='servicearea' or $act=='qualifications'){?>
    <form action="<?=site_url('about/editbuildsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr><td height="40"><a href="<?=site_url('about/buildlist/vision')?>">��˾Ը��</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/servicearea')?>">��������</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/qualifications')?>">����</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="<?=$act?>" name="<?=$act?>" style="width:735px; height:540px;"><?=$datainfo[$act]?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="<?=$act?>" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='core_advantage'){?>
    <form action="<?=site_url('about/editbuildsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    <tr><td height="40"><a href="<?=site_url('about/buildlist/disign_concept')?>">�������</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/design_control')?>">��ƿ���</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/service_scrope')?>">��Ʒ���</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/collaborative_platform')?>">Эͬƽ̨</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/support')?>">֧��ƽ̨</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="core_advantage" name="core_advantage" style="width:735px; height:540px;"><?=$datainfo['core_advantage']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="core_advantage" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='disign_concept' or $act=='design_control' or $act=='service_scrope' or $act=='collaborative_platform' or $act=='support'){?>
    <form action="<?=site_url('about/editbuildsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    <tr><td height="40"><a href="<?=site_url('about/buildlist/disign_concept')?>">�������</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/design_control')?>">��ƿ���</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/service_scrope')?>">��Ʒ���</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/collaborative_platform')?>">Эͬƽ̨</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/support')?>">֧��ƽ̨</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="<?=$act?>" name="<?=$act?>" style="width:735px; height:540px;"><?=$datainfo[$act]?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="<?=$act?>" /></td>
            </tr>
        </table>
    </form>
     <?php }elseif($act=='idea_goal' or $act=='training_system' or $act=='promotion' or $act=='organization' or $act=='our_college'){?>
    <form action="<?=site_url('about/editbuildsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    <tr><td height="40"><a href="<?=site_url('about/buildlist/idea_goal')?>">������Ŀ��</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/training_system')?>">��ѵ��ϵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/promotion')?>">������ϵ</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/organization')?>">��֯��ʵʩ</a>&nbsp;|&nbsp;<a href="<?=site_url('train/tlist')?>">��ѵ��Ӱ</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="<?=$act?>" name="<?=$act?>" style="width:735px; height:540px;"><?=$datainfo[$act]?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="<?=$act?>" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='work_together'){?>
    <form action="<?=site_url('about/editbuildsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="work_together" name="work_together" style="width:735px; height:540px;"><?=$datainfo['work_together']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="����༭" /><input type="hidden" name="val" value="work_together" /></td>
            </tr>
        </table>
    </form>
   
    <?php }?>
    </td>
    <td background="<?=base_url()?>images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="<?=base_url()?>images/mail_leftbg.gif"><img src="<?=base_url()?>images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="<?=base_url()?>images/buttom_bgs.gif"><img src="<?=base_url()?>images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
</html>