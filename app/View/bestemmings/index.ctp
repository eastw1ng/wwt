<!--
Bestemmingen
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Bestemmingen</span>
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
                                    <table class="standaard_tabel" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <th width="60px">Code</th>
                                            <th>Plaats</th>
                                            <th>Land</th>
                                            <th style="border-width: 0;"></th>
                                        </tr>
										<? $counter = 0; ?>
										<? foreach($bestemmings as $b):?>
										<? $counter++ ?>
                                        <tr <? if(count($bestemmings) == $counter){echo "style='border-width: 0;cursor:pointer;'";}else{echo "style='cursor:pointer;'";}?>>
                                            <td onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'edit', $b['Bestemming']['id']));?>'">
												<? echo $b['Bestemming']['id']?>
											</td>
                                            <td onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'edit', $b['Bestemming']['id']));?>'">
												<? echo $b['Plaat']['naam']?>
											</td>
                                            <td onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'edit', $b['Bestemming']['id']));?>'">
												<? echo $b['Plaat']['Land']['naam']?>
											</td>
                                            <td style="border-width: 0;width:30px;padding:1px;vertical-align:middle;font-size:0px;">
												<?php echo $this->Form->postLink( $this->Html->image(
													'admin_delete.png',
													array('style' => 'float:left;cursor:pointer;margin-left:2px;')),
													array('action' => 'delete', $b['Bestemming']['id']),
													array('escape' => false,'confirm' => 'Are you sure?'));
												?>
											</td>
                                        </tr>
										<? endforeach; ?>
                                    </table>
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
		<span style="display:none;"><?print_r($bestemmings)?></span>
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