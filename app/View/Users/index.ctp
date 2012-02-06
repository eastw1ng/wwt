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

                                <div class="tabel_wrapper">
									<div class="users index">
										<h2><?php echo __('Users');?></h2>
										<table cellpadding="0" cellspacing="0">
										<tr>
												<th><?php echo $this->Paginator->sort('id');?></th>
												<th><?php echo $this->Paginator->sort('username');?></th>
												<!--<th><?php //echo $this->Paginator->sort('password');?></th>-->
												<th><?php echo $this->Paginator->sort('group_id');?></th>
												<th><?php echo $this->Paginator->sort('created');?></th>
												<th><?php echo $this->Paginator->sort('modified');?></th>
												<th class="actions"><?php echo __('Actions');?></th>
										</tr>
										<?php
										foreach ($users as $user): ?>
										<tr>
											<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
											<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
											<!--<td><?php //echo h($user['User']['password']); ?>&nbsp;</td>-->
											<td><?php echo h($user['User']['group_id']); ?>&nbsp;</td>
											<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
											<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
											<td class="actions">
												<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
												<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
												<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
											</td>
										</tr>
										<?php endforeach; ?>
										</table>
										<p>
											<?php
											echo $this->Paginator->counter(array(
											'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
											));
											?>	
										</p>

										<div class="paging">
										<?php
											echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
											echo $this->Paginator->numbers(array('separator' => ''));
											echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
										?>
										</div>
									</div>
									<div class="actions">
										<h3><?php echo __('Actions'); ?></h3>
										<ul>
											<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
										</ul>
									</div>
								</div>
                                <div class="bestemming_navigatie">
                                    <span style="float:right;"><?php echo $this->element('navigatie'); ?></span>
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