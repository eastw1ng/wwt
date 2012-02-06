<!--
Gebruiker
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Gebruiker</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid">

                            <div style="width:100%;float:left;">

                            <div class="pagers">
									<?
									$urls = $this->params['url']; $getv = "";
									
									foreach($urls as $key=>$value)
									{
									if($key == 'url') continue; // we need to ignor the url field
									$getv .= urlencode($key)."=".urlencode($value)."&"; // making the passing parameters
									}
									$getv = substr_replace($getv ,"",-1); // remove the last char '&'
									
									$this->Paginator->options(array('url' => array("?"=>$getv)));
									?>
                                    <?php echo $this->Paginator->prev('<< ' . __('Previous'), array(), null, array('class' => 'prev disabled')); ?> -
                                    <?php echo $this->Paginator->numbers(); ?>
                                    - <?php echo $this->Paginator->next('Next'.' >>', array(), null, array('class' => 'prev disabled')); ?>
                            </div>
                                <div class="tabel_wrapper">
									<div class="users index">
										<table class="standaard_tabel" border="0" cellpadding="0" cellspacing="0">
										<tr>
												<th><?php echo $this->Paginator->sort('id');?></th>
												<th><?php echo $this->Paginator->sort('username');?></th>
												<!--<th><?php //echo $this->Paginator->sort('password');?></th>-->
												<th><?php echo $this->Paginator->sort('group_id');?></th>
												<th><?php echo $this->Paginator->sort('created');?></th>
												<th><?php echo $this->Paginator->sort('modified');?></th>
												<th></th>
										</tr>
										<?php
										foreach ($users as $user): ?>
										<tr style="cursor:pointer;">
											<td onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'edit', $user['User']['id']));?>'"><?php echo h($user['User']['id']); ?>&nbsp;</td>
											<td onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'edit', $user['User']['id']));?>'"><?php echo h($user['User']['username']); ?>&nbsp;</td>
											<!--<td><?php //echo h($user['User']['password']); ?>&nbsp;</td>-->
											<td onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'edit', $user['User']['id']));?>'"><?php echo h($user['User']['group_id']); ?>&nbsp;</td>
											<td onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'edit', $user['User']['id']));?>'"><?php echo h($user['User']['created']); ?>&nbsp;</td>
											<td onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'edit', $user['User']['id']));?>'"><?php echo h($user['User']['modified']); ?>&nbsp;</td>
											<td>
												<?php echo $this->Form->postLink( $this->Html->image(
													'admin_delete.png',
													array('style' => 'float:left;cursor:pointer;margin-left:2px;')),
													array('action' => 'delete', $user['User']['id']),
													array('escape' => false,'confirm' => 'Are you sure?'));
												?>
											</td>
										</tr>
										<?php endforeach; ?>
										</table>
									</div>
								</div>

                            <div class="pagers">
									<?
									$urls = $this->params['url']; $getv = "";
									
									foreach($urls as $key=>$value)
									{
									if($key == 'url') continue; // we need to ignor the url field
									$getv .= urlencode($key)."=".urlencode($value)."&"; // making the passing parameters
									}
									$getv = substr_replace($getv ,"",-1); // remove the last char '&'
									
									$this->Paginator->options(array('url' => array("?"=>$getv)));
									?>
                                    <?php echo $this->Paginator->prev('<< ' . __('Previous'), array(), null, array('class' => 'prev disabled')); ?> -
                                    <?php echo $this->Paginator->numbers(); ?>
                                    - <?php echo $this->Paginator->next('Next'.' >>', array(), null, array('class' => 'prev disabled')); ?>
                            </div>
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
</div>
<div id="menu">&nbsp;</div>