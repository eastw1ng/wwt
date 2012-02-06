<!--
USERS FORMULIER
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Formulier gebruikers</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid form_img_placement">
                            
							<?php echo $this->Form->create('User'); ?>
							<?php echo $this->Form->input('klant_id', array('type' => 'hidden','value' => '1'));?><!-- Dit is een snelle oplossing voor een probleem met de database-->
							<div class="form_container">
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Username</span>
									</div>
									<div class="form_content">
										<?echo $this->Form->input('username', array('label' => '','style' => 'width:200px;float:left;margin-top:2px;','class' => 'global_input'));?>
										<span class="form_notes" style="float:left;">&nbsp;*</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Password</span>
									</div>
									<div class="form_content">
										<?echo $this->Form->input('password', array('label' => '','style' => 'width:200px;float:left;margin-top:2px;','class' => 'global_input'));?>
										<span class="form_notes" style="float:left;">&nbsp;*</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Group id</span>
									</div>
									<div class="form_content">
										<select name="data[User][group_id]" id="UserGroupId" class="global_select" style="width:auto;">
											<? foreach($groups as $g):?>
											<?print_r($groups);?>
											<option value="<?echo $g['groups']['id']?>"><?echo $g['groups']['id']." - ".$g['groups']['name']?></option>
											<? endforeach;?>
										</select>
										<span class="form_notes">&nbsp;*</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_content form_notes">
									* Verplicht in te vullen veld
								</div>
							</div>
							<div style="width:100%;text-align:right;">
								<input type="submit" value="Toevoegen"/>
								<button onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'index'));?>'">Annuleren</button>
							</div>
							<?echo $this->Form->end();?>
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
					<?php echo $isAdmin ? $this->element('admin_panel') : "" ; ?>
					  <?php echo $this->element('top_reizen',array('reizen'=>$this->requestAction(array('controller'=>'Reis', 'action'=>'topReizen')))); ?>
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
