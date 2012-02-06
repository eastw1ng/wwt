<!--
REIZEN FORMULIER
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
                            
							<?php echo $this->Form->create(); ?>
							<div class="form_container">
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Reis code</span>
									</div>
									<div class="form_content">
										-
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Bestemming</span>
									</div>
									<div class="form_content">
										<select name="data[Rei][bestemming_id]" id="ReiBestemming_id" class="global_select" style="width:170px;">
											<? foreach($bestemmingen as $bestemming):?>
											<option value="<?echo $bestemming['bestemming']['id']?>"><?echo $bestemming['bestemming']['alias']?></option>
											<? endforeach;?>
										</select>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Transport soort</span>
									</div>
									<div class="form_content">
										<select name="data[Rei][transport_id]" id="ReiTransport_id" class="global_select" style="width:170px;">
											<? foreach($ts as $tss):?>
											<option value="<?echo $tss['t']['id']?>"><?echo $tss['ts']['naam']?></option>
											<? endforeach;?>
										</select>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Vertrekdatum</span>
									</div>
									<div class="form_content">
										<input name="data[Rei][vertrek_datum]" id="ReiVertrek_datum" class="global_input" style="width:100px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Terugkeerdatum</span>
									</div>
									<div class="form_content">
										<input name="data[Rei][terugkeer_datum]" id="ReiTerugkeer_datum" class="global_input" style="width:100px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Omschrijving</span>
									</div>
									<div class="form_content">
										<textarea name="data[Rei][omschrijving]" id="ReiOmschrijving" class="global_input" style="height:240px;width:99%;"></textarea>
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