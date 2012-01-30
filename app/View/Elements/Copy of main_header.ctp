<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<script>
	$(document).ready(function(){
		$('#login-trigger').click(function(){
			$('#login-content').slideToggle();
			$('#login-content').toggleClass('active');					
		
			if ($('#login-content').hasClass('active')) $(this).find('span').html('&#x25B2;')
			else $(this).find('span').html('&#x25BC;')
		})
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#search_button").click(function(){
			$("#header_search").fadeToggle(200);
		});
	});
</script>
<div id="header">
    <div id="header_mid_left">
        <div id="header_mid_right">
            <div id="header_mid_mid">
                <div id="header_logo"></div>
                <div id="header_content">
					<div class="button_big" id="search_button" style="width:106px;float:right;">
						<div  class="button_big_cont">
							<div style="float:left;margin-top:6px;">
								Zoeken
							</div>
							<div style="float:left">
								<img src="img/icon_search.gif" border="0" style="margin:5px 0px 0px 4px;">
							</div>
							<div style="float:left">
								<img src="img/icon_arrow_down.gif" border="0" style="margin:5px 0px 0px 4px;">
							</div>
						</div>
					</div>
					
					
					<div id="login" class="button_big" style="width:106px;margin-right:4px;float:right;text-align:center;">
						<div id="login-trigger" class="button_big_cont" style="line-height:26px;">
							Inloggen
							<div id="login-content" style="position:absolute;display:none;margin-top:10px;">
							<?php echo $this->Form->create('Login');?>
								<fieldset>
									<legend><?php echo __(''); ?></legend>
									<?php
										echo $this->Form->input('username');
										echo $this->Form->input('password');
									?>
								</fieldset>
							<?php echo $this->Form->end(__('Submit'));?>
							</div>
						</div>
					</div>
					
					
					<div class="button_big" style="width:106px;margin-right:4px;float:right;display:none;">
						<div class="button_big_cont">
							<div style="float:left;margin-top:6px;">
								Mijn profiel
							</div>
						</div>
					</div>
					<div id="header_login" style="display:none;">
						<div id="header_login_content">
							<?php echo $this->Form->create('Login');?>
							<div id="header_login_title">
								Gebruiker inloggen
							</div>
							<div style="height:4px;clear:both;">&nbsp;</div>
							<div class="header_search_one">
								&nbsp;
							</div>
							<div class="header_search_two">
								&nbsp;
							</div>
							<div class="header_search_one">
								Gebruikersnaam:
							</div>
							<div class="header_search_two">
								<?php echo $this->Form->input('username'); ?>
							</div>
							<div class="header_search_one">
								Wachtwoord:
							</div>
							<div class="header_search_two">
								<?php echo $this->Form->input('password'); ?>
							</div>
							<div class="header_search_one">
								&nbsp;
							</div>
							<div class="header_search_two">
								&nbsp;
							</div>
							<div class="header_search_one">
								&nbsp;
							</div>
							<div class="header_search_two" style="text-align:right;">
								<button type="submit">Submit</button>
							</div>
							<?php echo $this->Form->end(__('Submit'));?>
						</div>
					</div>
					<div id="header_search" style="display:none;">
						<div id="header_search_content">
							<div id="header_search_title">
								Gebruikers zoeken
							</div>
							<div style="height:4px;clear:both;">&nbsp;</div>
							<div class="header_search_one">
								Gebruiker code:
							</div>
							<div class="header_search_two">
								<input type="text" name="one" />
							</div>
							<div class="header_search_one">
								Gebruikersnaam:
							</div>
							<div class="header_search_two">
								<input type="text" name="two" />
							</div>
							<div class="header_search_one">
								Adres:
							</div>
							<div class="header_search_two">
								<input type="text" name="two" />
							</div>
							<div class="header_search_one">
								&nbsp;
							</div>
							<div class="header_search_two">
								&nbsp;
							</div>
							<div class="header_search_one">
								&nbsp;
							</div>
							<div class="header_search_two" style="text-align:right;">
								<button type="submit">Submit</button>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <div id="header_bot">
        <div id="header_bot_left">&nbsp;</div>
        <div id="header_bot_mid">&nbsp;</div>
        <div id="header_bot_right">&nbsp;</div>
    </div>
</div>