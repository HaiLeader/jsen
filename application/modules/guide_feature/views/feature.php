<div id="wapper">
	<script type="text/javascript">
	Lvs.Guide.initLimitCheckboxes('.limitCheckbox', 2);
	</script> 
    <div id="content">
        <div id="guideBox">
            <div id="guideTTLArea">
                <div class="inner">
                    <h2 class="feature">北海道のバイトを職種から探す</h2>

                    <div class="searchIF clearfix">
                        <p>検索条件を変更</p>
                        <ul class="clearfix">
                            <li><a href="/guide_area1.htm">北海道のエリアから探す</a></li>
                            <li><a href="/guide_area1_line.htm">北海道の路線から探す</a></li>
                            <li><a href="/guide_area1_feature.htm">北海道の特徴から探す</a></li>
                        </ul>

                    </div>
                </div>
            <!-- gudeTTLArea -->
            </div>

            <div class="inner">
                <p class="blueTTL">職種を選択してください
               		<span class="orangeTxt">※特徴は２つまで選択可能です</span>
                </p>
                <form action="/search/" method="get" onsubmit="return Lvs.Guide.alert(document.getElementsByName('feature[]'), '職種');">
                    <input type="hidden" name="area" value="(cac vung))">
                    <input type="hidden" name="city[]" value="1">
                    <div class="blueBox">
                        <ul class="featureList">
							<?php if(isset($feature_name) && !empty($feature_name))?>
                            <?php foreach ($feature_name as $key => $value) { ?>
                            <li id= "<?php echo $value['feature_name'];?>">
                                <input type="checkbox" class="limitCheckbox" name="feature[]" value="<?php echo $value['feature_name'];?>">
                                <a href="<?php echo base_url(); ?>guide_feature/list_work/<?php echo $value['feature_name'];?>"><?php echo $value['feature_name'];?></a>
                                (<?php echo $count_work_feature[$value['feature_name']];?>)                             
                            </li>                                                  
                                <?php }?>                                                   
                        </ul>
                    </div>

                    <div id="searchBtn" class="guideSearchBtn">
                        <p><input type="image" alt="この条件で探す" onmouseover="this.src='template/frontend/image/guide_search_btn_o.png'" onmouseout="this.src='template/frontend/image/guide_search_btn.png'"  src="template/frontend/image/guide_search_btn.png"></p>
                    </div>
                </form>
            </div>
        </div>
        <!-- /guideBox -->
    </div>
</div>