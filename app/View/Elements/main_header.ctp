<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<div id="header">
    <div id="header_mid_left">
        <div id="header_mid_right">
            <div id="header_mid_mid">
                <div id="header_logo"></div>
                

                                                <div id="login" class="button_big" style="width:106px;right:230px;float:right;top:3px;position:absolute;">
                                    <div  class="button_big_cont">
                                        <a id="login-trigger" href="#" style="line-height:28px; text-decoration: none;">

                                            <center>Inloggen <span>▼</span></center>

                                        </a>


                                        <div id="login-content" style="position:absolute;">
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

                <div class="button_big" style="width:106px;right:120px;top:3px;position:absolute;">
                    <div class="button_big_cont">
                        <div style="float:left;margin-top:6px;">
                            Mijn profiel
                        </div>
                    </div>
                </div>
                <div class="button_big" style="width:106px;right:10px;float:right;top:3px;position:absolute;">
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
            </div>
        </div>
    </div>
    <div id="header_bot">
        <div id="header_bot_left">&nbsp;</div>
        <div id="header_bot_mid">&nbsp;</div>
        <div id="header_bot_right">&nbsp;</div>
    </div>
</div>
        <?php
            echo $this->Html->script('dropdown_script');
        ?>
        <script>
               
            $(document).ready(function(){
                $('#login-trigger').click(function(){
                    $(this).next('#login-content').slideToggle();
                    $(this).toggleClass('active');					
					
                    if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
                    else $(this).find('span').html('&#x25BC;')
                })
            });
        </script>