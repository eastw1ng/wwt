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
                        <span class="frame_header">Mijn profiel</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid">

							
							<div style="clear:both;"></div>

							<div class="reizen_list_content">
								Klant code: <? echo $klant['Klant']['id']?>
								<br>
								Voornaam: <? echo $klant['Klant']['voornaam']  ?>
								<br>
								Achternaam: <? echo $klant['Klant']['achternaam']?>
								<br>
								Adres: <? echo $klant['Klant']['adres']?>
								<br>
								Woonplaats: <? echo $klant['Klant']['woonplaats']?>
								<br>
								Postcode: <? echo $klant['Klant']['postcode']?>
								<br>
								Gebruikers naam: <? echo $klant['User']['username']?>
								<br>
								<span style="line-height:32px;">Opmerking:</span>
							</div>
							
							<div class="reizen_list_description">
								* Zijn deze gegevens incorrect neem dan contact op met onze Systeem beheerder
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
	<?php echo $this->element('main_footer'); ?>
</div>