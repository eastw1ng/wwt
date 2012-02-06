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
                            <? foreach($boekings as $b):?>
                            <div style="width:100%;float:left;">
                                <div class="reizen_list_img" style="vertical-align:bottom;">
                                    <div class="reizen_list_admin">
                                    <? if(true):?>
										<? echo $this->Html->image(	'admin_edit.png',
												array(	'style' => 'cursor:pointer;',
												'onclick' => 'javascript:location.href="'.$this->Html->url(array('action' => 'edit', $b['Boeking']['id'])).'"'))
										?>
                                        <?php echo $this->Form->postLink( $this->Html->image(
													'admin_delete.png',
													array('style' => 'cursor:pointer;')),
													array('action' => 'delete', $b['Boeking']['id']),
													array('escape' => false,'confirm' => 'Are you sure?'));
										?>
                                    <? endif; ?>
                                    </div>
                                </div>
                                <div class="reizen_list_title" style="cursor:pointer;" onClick="javascript:location.href='<?php echo $this->Html->url(array('action' => 'view', $b['Boeking']['id']));?>'">
                                    <span style="float:left;"><? echo $b['Rei']['Bestemming']['Plaat']['naam']?></span>
                                    <span style="float:right;">&euro; <? echo $b['Boeking']['prijs']*$b['Boeking']['aantal_reizigers'];?></span>
                                </div>
                                <div class="reizen_list_subtitle">
                                    <? echo $b['Rei']['Bestemming']['alias']?>
                                </div>
                                <div class="reizen_list_body">
                                    Aantal reizigers: <? echo $b['Boeking']['aantal_reizigers'];?><br/>
                                    Vertrek datum: <? echo $b['Rei']['vertrek_datum'];?><br/>
                                    Vertrek locatie: <? echo $b['Rei']['Transport']['Plaat']['naam'];?>
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
		<span style="display:none;"><?print_r($boekings)?></span>
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