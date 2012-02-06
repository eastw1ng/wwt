<!--
REIZEN VIEW
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Factuur boeking #: <? echo $boeking['Boeking']['id']?></span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid">
                            						
							<div style="width:100%;float:left;margin-top:6px;">
								<div class="reizen_list_title" style="float:left;">
									<span style="float:left;">Factuur</span>
								</div>
								<div class="reizen_list_body" style="float:left;width:100%;padding-top:12px;font-size:16pt;">
									<span style="float:left;">World Wide BV.</span><span style="float:right;">Tel: 0013-038175</span>
									<br>
									<span style="float:left;">Tweet tweet laan 50</span><span style="float:right;">E-mail: info@worldwildtours.nl</span>
									<br>
									<span style="float:left;">2140 BZ</span><span style="float:right;">KvK: 123412341</span>
									<br>
									<span style="float:left;">Vlorderingen</span><span style="float:right;">Rabobank: 1234.12.123</span>
								</div>
							</div>
							
							<div style="clear:both;"></div>
							<div class="reizen_separator_10"></div>
							
							<div class="reizen_list_content" style="float:left;width:100%;font-size:14pt;">
								<span style=""><b>Klant nummer: </b><? echo $boeking['Klant']['id']?></span>
								<br>
								<span style=""><b>Bestelling nummer: </b><? echo $boeking['Boeking']['id']?></span>
								<br>
								<span style=""><b>Besteldatum: </b><? echo $boeking['Boeking']['boek_datum']?></span>
								<br>
								<br>
								<span style="">Wij wensen u een prettige reis</span><br>
								<span style="">Onderstaand vindt u de specificatie van uw factuur</span>
								
								<div class="tabel_wrapper">
                                    <table class="standaard_tabel" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <th width="80px">Reis code</th>
                                            <th>Locatie</th>
                                            <th width="80px">Subtotaal</th>
                                            <th width="80px">Aantal</th>
                                            <th width="80px" style="border-width: 0;">Totaal</th>
                                        </tr>
                                        <tr style="border-width: 0;">
                                            <td>
												<? echo $boeking['Rei']['id']?>
											</td>
                                            <td>
												<? echo $boeking['Rei']['Bestemming']['Plaat']['naam']?>
											</td>
                                            <td align="right">
												&euro; <? echo $boeking['Boeking']['prijs']?>
											</td>
                                            <td align="center">
												<? echo $boeking['Boeking']['aantal_reizigers']?>
											</td>
                                            <td align="right" style="border-width: 0;">
												&euro; <? echo $boeking['Boeking']['prijs']*$boeking['Boeking']['aantal_reizigers']?>
											</td>
                                        </tr>
                                    </table>
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
		<span style="display:none;"><?print_r($boeking)?></span>
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