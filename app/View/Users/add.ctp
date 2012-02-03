<?print_r($klanten)?>
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
                        <span class="frame_header">Formulier reizen</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid form_img_placement">
                            
							<div class="users form">
							<?php echo $this->Form->create('User');?>
								<fieldset>
									<legend><?php echo __('Add User'); ?></legend>
								<?php
									echo $this->Form->input('username');
									echo $this->Form->input('password');
									echo $this->Form->input('group_id');
								?>
								</fieldset>
							<?php echo $this->Form->end(__('Submit'));?>
							</div>
							<div class="actions">
								<h3><?php echo __('Actions'); ?></h3>
								<ul>

									<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
								</ul>
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
