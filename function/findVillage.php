<?php 
	require_once("../indexCode.php"); 
	$wharecause=$_GET['GetDisstrictID']; 
	$divID=$_GET['divID']; 

	function LoadVillageList($tokenkey, $wharecause, $api_url)
	{
		$message = '';
	
		$urlRoute = $api_url . 'Account/LoadVillageList';
	
		$jsonData = array(
			'tokenKey' => $tokenkey,
			"district_id" => $wharecause
		);
		$arr = callAPI($jsonData, $urlRoute);
		return $arr;
	} ?>
 <label class="village">ບ້ານ</label>	
<select class="form-control select2" name="txtvillageId<?= $divID ?>" required="true" >
<?php
	$district = LoadVillageList($tokenkey, $wharecause, $api_url);
	foreach ($district as $row) {
	?>
		<option value="<?= $row['village_id'] ?>" <?= $selected ?>><?= $row['villagename_la'] ?></option>
	<?php } ?>
</select>
