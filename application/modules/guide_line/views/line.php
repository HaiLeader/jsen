﻿<div id="wapper">
	<div id="content">
		<div id="guideBox">
			<h2 class="areaTTL">全国の路線から探す</h2>
			<div class="inner">
				<p class="blueTTL">都道府県を選択してください</p>
				<?php if(isset($line) && !empty($line)){?>
					<?php foreach ($line as $ka => $va) {	?>
						<h3 class="guideTTLh3"><?php echo $va['area_line_name']; ?></h3>
						<ul class="guideList3">
					<?php foreach ($line_name[$va['area_line_name']] as $kp => $vp) {?>
						<li>
							<a href="<?php echo base_url();?>guide_line/station/<?php echo $vp['line_id'];?>"><?php echo $vp['line_name'];?></a>
						</li>
						<?php }
						echo "</ul>";
					}
				}else{
					if(isset($message) && !empty($message)) echo $message;
				}?>
			</div>
		</div>
	</div>
</div>