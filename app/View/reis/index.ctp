<!--
REIZEN
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Reizen</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid">
                            
							<div class="pagers">
								< Vorige - 1 - 2 - 3 - 4 - 5 - Volgende >
							</div>
							
							<div style="clear:both;"></div>
							<div class="reizen_separator"></div>
							<? var_dump($reizen);?>
							<? foreach($reizen as $reis):?>
							<div style="width:100%;float:left;">
								<div class="reizen_list_img" style="vertical-align:bottom;">
									<div class="reizen_list_admin">
									<? if(false):?>
										<img style="cursor:pointer;" src="img/admin_edit.png"/>
										<img style="cursor:pointer;" src="img/admin_delete.png"/>
									<? endif; ?>
									</div>
								</div>
								<div class="reizen_list_title" style="cursor:pointer;" onClick="javascript:location.href='reis/view/<?=$reis['Rei']['reis_id']?>'">
									<span style="float:left;"><? echo $reis['Accomodatie']['Bestemming']['Plaat']['naam']?></span>
									<span style="float:right;">&euro; 180.- p.p.</span>
								</div>
								<div class="reizen_list_subtitle">
									Henkiepenkiestad - Henk de penk drive 57 a
								</div>
								<div class="reizen_list_body">
									She had been blah blah blah the morning, and she had no blah to blah weekend, at the blah it blah blah blah her blah to be blah with on blah that blah blah.
								</div>
							</div>
							<div style="clear:both;"></div>
							<div class="reizen_separator"></div>
							<? endforeach; ?>
							
							<div class="pagers">
								< Vorige - 1 - 2 - 3 - 4 - 5 - Volgende >
							</div>
                        </div>
                    </div>
                    <div class="frame_left_bot_mid">
						&nbsp;
                    </div>
                    <div class="frame_left_bot_right">
                        &nbsp;
                    </div>
                </div>
                <div class="frame_right">
					<?php echo $this->element('admin_panel'); ?>
					<?php echo $this->element('top_reizen'); ?>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
    <div id="body_bot">
        <div id="body_bot_left">&nbsp;</div>
        <div id="body_bot_mid">
            &nbsp;
        </div>
        <div id="body_bot_right">&nbsp;</div>
    </div>
	<?php echo $this->element('main_footer'); ?>
</div>