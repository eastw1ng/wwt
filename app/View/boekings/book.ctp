<!--
BOEKING FORMULIER
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Reis Boeken</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid form_img_placement">
                            
							<?php echo $this->Form->create(); ?>
							<input type="hidden" name="data[Boeking][reis_id]" id="BoekingReisId" value="<?echo $reis['Rei']['id']?>">
							<input type="hidden" name="data[Boeking][klant_id]" id="BoekingKlantId" value="<? echo $klant['Klant']['id'] ?>">
							<input type="hidden" name="data[Boeking][prijs]" id="BoekingPrijs">
							<input type="hidden" name="data[Boeking][boek_datum]" id="BoekingBoekDatum">
							<input type="hidden" name="data[Boeking][annulering_datum]" id="BoekingAnnuleringDatum">
							<div class="form_container">
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Reis code</span>
									</div>
									<div class="form_content">
										<?echo $reis['Rei']['id']?>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Klant code</span>
									</div>
									<div class="form_content">
										<?echo $klant['Klant']['voornaam']." ".$klant['Klant']['achternaam']?>
										
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Aantal personen</span>
										<span class="form_notes"> *</span>
									</div>
									<div class="form_content">
										<select name="data[Boeking][aantal_reizigers]" id="BoekingAantalReizigers" class="global_select" style="width:auto;" onchange="javascript:totalPrice();">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
										</select>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Totale prijs</span>
									</div>
									<div class="form_content">
										&euro; <span id="TotalePrijs"> 0.00</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_content form_notes">
									* Verplicht in te vullen veld
								</div>
							</div>
							<div style="width:100%;text-align:right;">
								<input type="submit" value="Toevoegen"/>
								<button>Annuleren</button>
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


<script type="text/javascript">
	function totalPrice(){
		var p1 = <?echo $reis['Transport']['prijs'];?>;
		var p2 = <?echo $accomodatie['Accomodatie']['accomodatie_prijs'];?>;
		var mod = document.getElementById('BoekingAantalReizigers').value;
		var result = (p1+p2);//*mod;

		document.getElementById("TotalePrijs").innerHTML = result*mod;
		document.getElementById("BoekingPrijs").value = result;
	}
	
	totalPrice();
	
	var date = new Date();
	var a = new Date();
	a.setDate(a.getDate()+14);
	
    document.getElementById("BoekingBoekDatum").value = date.getDate()+"-"+(date.getMonth()+1)+"-"+date.getFullYear();
    document.getElementById("BoekingAnnuleringDatum").value = a.getDate()+"-"+(a.getMonth()+1)+"-"+a.getFullYear();			
</script>