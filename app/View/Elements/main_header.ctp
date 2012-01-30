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
						$link = split("/",$_SERVER['REQUEST_URI']);
						$p = $link[count($link)-1];
						if(	$p == 'reis' ||
							$p == 'boeking' ||
							$p == 'klant' ||
							$p == 'bestemming' ||
							$p == 'gebruiker'){
					?>
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
					<?php };?>
					<div id="login_button" class="button_big" style="width:80px;margin-right:4px;float:right;text-align:center;">
						<div class="button_big_cont" style="float:right;padding-right:8px;">
							<div style="float:left;margin-top:6px;">
								Inloggen
							</div>
						</div>
					</div>
					<div class="button_big" style="width:94px;margin-right:4px;float:right;display:;" onClick="javascript:location.href='profiel_form'">
						<div class="button_big_cont" style="padding-right:8px;">
							<div style="float:left;margin-top:6px;">
								Mijn profiel
							</div>
						</div>
					</div>
					<div id="header_login" style="display:none;">
						<div id="header_login_content">
							<?php echo $this->Form->create('Login');?>
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
										<input name="data[Login][username]" class="global_input" type="text" id="LoginUsername"/>
									</td>
								</tr>
								<tr>
									<td class="header_search_one">
										Wachtwoord:
									</td>
									<td class="header_search_two">
										<input name="data[Login][password]" class="global_input" type="password" id="LoginPassword"/>
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
							
							$link = split("/",$_SERVER['REQUEST_URI']);
							
							switch ($link[count($link)-1]) {
								case "reis":
									echo $this->element('zoek_reis');
									break;
								case "boeking":
									echo $this->element('zoek_boeking');
									break;
								case "klant":
									echo $this->element('zoek_klant');
									break;
								case "bestemming":
									echo $this->element('zoek_bestemming');
									break;
								case "gebruiker":
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