<script type="text/javascript">
	$(document).ready(function(){
		$("#login_button").click(function(){
			$("#header_login").fadeToggle(200);
			if($("#header_search").css('display') != 'none'){
				$("#header_search").fadeOut(200);
			}
		});
		$("#search_button").click(function(){
			$("#header_search").fadeToggle(200);
			if($("#header_login").css('display') != 'none'){
				$("#header_login").fadeOut(200);
			}
		});
	});
</script>
<div id="header">
    <div id="header_mid_left">
        <div id="header_mid_right">
            <div id="header_mid_mid">
                <div id="header_logo"></div>
                <div id="header_content">
					<?php
						$user = $_SESSION['Auth'];
						$loggedIn = false;
						if(isset($user['User'])){
							$loggedIn = true;
						}

						$a = $this->action;
						$p = $this->name;
						if($this->action == 'index'){
							if(	$p == 'Reis' ||
								$p == 'Boekings' ||
								$p == 'Klants' ||
								$p == 'Bestemmings' ||
								$p == 'Users'){
					?>
					<div class="button_big" id="search_button" style="width:106px;float:right;">
						<div  class="button_big_cont">
							<div style="float:left;margin-top:6px;">
								Zoeken
							</div>
							<div style="float:left">
								<? echo $this->Html->image(	'icon_search.gif',
											array(	'style' => 'margin:5px 0px 0px 4px;',
													'border' => '0'));
								?>
							</div>
							<div style="float:left">
								<? echo $this->Html->image(	'icon_arrow_down.gif',
											array(	'style' => 'margin:5px 0px 0px 4px;',
													'border' => '0'));
								?>
							</div>
						</div>
					</div>
					<?php }};?>
					<?php if(!$loggedIn):?>
					<div id="login_button" class="button_big" style="width:80px;margin-right:4px;float:right;text-align:center;">
						<div class="button_big_cont" style="float:right;padding-right:8px;">
							<div style="float:left;margin-top:6px;">
								Inloggen
							</div>
						</div>
					</div>
					<?else :?>
					<div id="logout_button" class="button_big" style="width:80px;margin-right:4px;float:right;text-align:center;" onClick="javascript:location.href='<?php echo $this->Html->url(array("controller" => "Users","action"=>"logout"))?>'">
						<div class="button_big_cont" style="padding-right:8px;">
							<div style="float:left;margin-top:6px;">
								Uitloggen
							</div>
						</div>
					</div>
					<div class="button_big" style="width:94px;margin-right:4px;float:right;display:;" onClick="javascript:location.href='<?php echo $this->Html->url(array("controller" => "Klants","action"=>"myProfile"))?>'">
						<div class="button_big_cont" style="padding-right:8px;">
							<div style="float:left;margin-top:6px;">
								Mijn profiel
							</div>
						</div>
					</div>
					<?endif;?>
					
					<div id="header_login" style="display:none;">
						<div id="header_login_content">

							<?php echo $this->Form->create('Users',  array('action' => 'login'));?>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td id="header_search_title" colspan="2">
										Gebruiker inloggen
									</td>
								</tr>
								<tr>
									<td height="5px" colspan="2" style="font-size:0px;">&nbsp;</td>
								</tr>
								<tr>
									<td class="header_search_one">
										&nbsp;
									</td>
									<td class="header_search_two">
										&nbsp;
									</td>
								</tr>
								<tr>
                    
									<td class="header_search_one">
										Gebruikersnaam:
									</td>
									<td class="header_search_two">
										<input name="data[User][username]" class="global_input" type="text" id="LoginUsername"/>
									</td>
								</tr>
								<tr>
									<td class="header_search_one">
										Wachtwoord:
									</td>
									<td class="header_search_two">
										<input name="data[User][password]" class="global_input" type="password" id="LoginPassword"/>
									</td>
								</tr>
								<tr>
									<td class="header_search_one">
										&nbsp;
									</td>
									<td class="header_search_two">
										&nbsp;
									</td>
								</tr>
								<tr>
									<td class="header_search_one">
										&nbsp;
									</td>
									<td class="header_search_two" style="text-align:right;">
										<?php echo $this->Form->end(__('Submit'));?>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div id="header_search" style="display:none;">
						<div id="header_search_content">
							<?php
							switch ($this->name) {
								case "Reis":
									echo $this->element('zoek_reis');
									break;
								case "Boekings":
									echo $this->element('zoek_boeking');
									break;
								case "Klants":
									echo $this->element('zoek_klant');
									break;
								case "Bestemmings":
									echo $this->element('zoek_bestemming');
									break;
								case "Users":
									echo $this->element('zoek_gebruiker');
									break;
							}
							?>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
            </div>
        </div>
    </div>
    <div id="header_bot">
        <div id="header_bot_left">&nbsp;</div>
        <div id="header_bot_mid">&nbsp;</div>
        <div id="header_bot_right">&nbsp;</div>
    </div>
</div>