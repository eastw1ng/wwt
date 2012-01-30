<!--
BOEKINGEN
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Boekingen</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid">
                            
							<div class="pagers">
								< Vorige - 1 - 2 - 3 - 4 - 5 - Volgende >
							</div>
							
							<div style="width:100%;float:left;">
								<div class="reizen_list_img" style="vertical-align:bottom;">
									<div class="reizen_list_admin">
										<img style="cursor:pointer;" src="img/admin_edit.png"/>
										<img style="cursor:pointer;" src="img/admin_delete.png"/>
									</div>
								</div>
								<div class="reizen_list_title" style="cursor:pointer;" onClick="javascript:location.href='boeking_view'">
									<span style="float:left;">Henkiepenkieland</span>
									<span style="float:right;">&euro; 240.50</span>
								</div>
								<div class="reizen_list_subtitle">
									Henkiepenkiestad - Henk de penk drive 57 a
								</div>
								<div class="reizen_list_body">
									Aantal personen: 2
									<br>
									Vertrek datum: 04-05-1988
									<br>
									Vertrek locatie: Schiphol
								</div>
							</div>
							
							<div style="clear:both;"></div>
							<div class="reizen_separator"></div>
							
							<div style="width:100%;float:left;">
								<div class="reizen_list_img" style="vertical-align:bottom;">
									<div class="reizen_list_admin">
										<img style="cursor:pointer;" src="img/admin_edit.png"/>
										<img style="cursor:pointer;" src="img/admin_delete.png"/>
									</div>
								</div>
								<div class="reizen_list_title" style="cursor:pointer;" onClick="javascript:location.href='boeking_view'">
									<span style="float:left;">Henkiepenkieland</span>
									<span style="float:right;">&euro; 240.50</span>
								</div>
								<div class="reizen_list_subtitle">
									Henkiepenkiestad - Henk de penk drive 57 a
								</div>
								<div class="reizen_list_body">
									Aantal personen: 2
									<br>
									Vertrek datum: 04-05-1988
									<br>
									Vertrek locatie: Schiphol
								</div>
							</div>
							
							<div style="clear:both;"></div>
							<div class="reizen_separator"></div>
							
							<div style="width:100%;float:left;">
								<div class="reizen_list_img" style="vertical-align:bottom;">
									<div class="reizen_list_admin">
										<img style="cursor:pointer;" src="img/admin_edit.png"/>
										<img style="cursor:pointer;" src="img/admin_delete.png"/>
									</div>
								</div>
								<div class="reizen_list_title" style="cursor:pointer;" onClick="javascript:location.href='boeking_view'">
									<span style="float:left;">Henkiepenkieland</span>
									<span style="float:right;">&euro; 240.50</span>
								</div>
								<div class="reizen_list_subtitle">
									Henkiepenkiestad - Henk de penk drive 57 a
								</div>
								<div class="reizen_list_body">
									Aantal personen: 2
									<br>
									Vertrek datum: 04-05-1988
									<br>
									Vertrek locatie: Schiphol
								</div>
							</div>
							
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