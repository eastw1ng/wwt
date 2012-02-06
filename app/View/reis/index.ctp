<!--
REIZEN
-->
<?php echo $this->element('main_header'); ?>
<div id="body2">
    <?php echo $this->element('main_menu') ?>
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

                            <div style="clear:both;"></div>
                            <div class="reizen_separator"></div>
                            <? //var_dump($reizen) ?>
                            <? foreach($reizen as $reis):?>
                            <div style="width:100%;float:left;">
                                <div class="reizen_list_img">
                                    <div class="reizen_list_admin">
                                    <? if(true):?>
										<? echo $this->Html->image(	'admin_edit.png',
												array(	'style' => 'cursor:pointer;',
												'onclick' => 'javascript:location.href="'.$this->Html->url(array('action' => 'edit', $reis['Rei']['id'])).'"'))
										?>
										<? echo $this->Form->postLink( 
												$this->Html->image('admin_delete.png', array('style' => 'cursor:pointer;','border' => '0')),
												array('action' => 'delete', $reis['Rei']['id']),
												array('escape' => false,'confirm' => 'Are you sure?'));
										?>
                                    <? endif; ?>
                                    </div>
                                </div>
                                <div class="reizen_list_title" style="cursor:pointer;" onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'view', $reis['Rei']['id']));?>'">
                                    <span style="float:left;"><? echo $reis['Bestemming']['Plaat']['naam']?></span>
                                    <span style="float:right;">&euro; <? echo ReisController::calcPrice($reis['Bestemming']['Accomodatie']['accomodatie_prijs'], $reis['Transport']['prijs']) ?>.- p.p.</span>
                                </div>
                                <div class="reizen_list_subtitle">
                                    <? echo $reis['Bestemming']['alias']?>
                                </div>
                                <div class="reizen_list_body">
                                    <? echo $reis['Rei']['omschrijving']?>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="reizen_separator"></div>
                            <? endforeach; ?>

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
		<span style="display:none;"><?print_r($reizen2)?></span>
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