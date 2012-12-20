<?php
	include_once("include.php");
	if(!$ses->uid) tai_location('index.php');
	if($_POST['act']=='setting') 
	{
		$stt->post();
		die('');
	}
	include_once("header.php");
?>
	<div data-role="page" id="setting" data-add-back-btn="true">
		<div data-role="header" data-position="fixed">
			<h1>設定</h1>
			<a href="index.php?act=logout" data-icon="alert" data-direction="reverse" class="ui-btn-right" data-ajax="false">登出</a>
<?php echo $pagenav; ?>
		</div>
		<div data-role="content">
			<?php
				if($ses->hasMsg())
				{
					echo '<script>alert(\''. $ses->msg() .'\');</script>';
					$ses->clearMsg();
				}
			?>
			<div data-role="collapsible" data-collapsed="false" data-content-theme="d" data-theme="b">
				<h3>相似度推薦設定</h3>
				<p>說明：在此設定「相似度」這個推薦方法從相似度前三名的使用者中，推薦的新聞最大值。</p>
				<label for="simi_1st">第①相似推薦數量：</label>
				<input type="range" name="simi_1st" id="simi_1st" value="<?=$stt->simi_1st?>" min="0" max="100" step="5" data-highlight="true"  /><br />
				<label for="simi_2st">第②相似推薦數量：</label>
				<input type="range" name="simi_2st" id="simi_2st" value="<?=$stt->simi_2st?>" min="0" max="100" step="5" data-highlight="true"  /><br />
				<label for="simi_3st">第③相似推薦數量：</label>
				<input type="range" name="simi_3st" id="simi_3st" value="<?=$stt->simi_3st?>" min="0" max="100" step="5" data-highlight="true"  />
			</div>
<?php
//==================================================================================================
//==================================================================================================
?>
		</div>
<?php
include_once('footer.php');
?>
