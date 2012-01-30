<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

<?php echo $this->element('main_header'); ?>
<div id="body">
    <div id="body_top">
        <div id="body_top_left">&nbsp;</div>
        <div id="body_top_mid">
            <?php echo $this->element('main_menu'); ?>
        </div>
        <div id="body_top_right">&nbsp;</div>
    </div>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Welkom</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid">

                                <?php
                                echo $this->Session->flash('auth');
                                echo $this->Form->create('User');
                                echo $this->Form->input('username');
                                echo $this->Form->input('password');
                                echo $this->Form->end('Login');
                                ?>

                            
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
                    <div id="frame_one" style="float:right;">
                            <div class="frame_right_top_left">
                                    &nbsp;
                            </div>
                            <div class="frame_right_top_mid">
                                    <span class="frame_header">Administratie</span>
                            </div>
                            <div class="frame_right_mid_left">
                                    <div class="frame_right_mid_mid">
                                            <button class="button" style="width:200px;" type="button" value="">Toevoegen Reizen</button><br>
                                            <button class="button" style="width:200px;" type="button" value="">Toevoegen Boekingen</button>
                                            <button class="button" style="width:200px;" type="button" value="">Toevoegen Klanten</button>
                                            <button class="button" style="width:200px;" type="button" value="">Toevoegen Bestemmingen</button>
                                            <button class="button" style="width:200px;" type="button" value="">Toevoegen Gebruikers</button>
                                    </div>
                            </div>
                            <div class="frame_right_bot_left">
                                    &nbsp;
                            </div>
                            <div class="frame_right_bot_mid">
                                    &nbsp;
                            </div>
                    </div>
                    <div style="height:8px;">
                    </div>
                    <div id="frame_two" style="float:right;margin-top:5px;">
                            <div class="frame_right_top_left">
                                    &nbsp;
                            </div>
                            <div class="frame_right_top_mid">
                                    <span class="frame_header">Mid</span>
                            </div>
                            <div class="frame_right_mid_left">
                                    <div class="frame_right_mid_mid">
                                            empty
                                    </div>
                            </div>
                            <div class="frame_right_bot_left">
                                    &nbsp;
                            </div>
                            <div class="frame_right_bot_mid">
                                    &nbsp;
                            </div>
                    </div>
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
</div>
<div id="menu">&nbsp;</div>