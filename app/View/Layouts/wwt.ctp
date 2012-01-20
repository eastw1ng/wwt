<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//NL" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="generator" content="PSPad editor, www.pspad.com">
        <title><?php echo $page_title?></title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner"></div>
            <div id="main">
                <div id="header">
                    <div id="header_mid_left">
                        <div id="header_mid_right">
                            <div id="header_mid_mid">
                                <div id="header_logo"></div>
                                <div class="button_big" style="width:95px;right:120px;top:3px;position:absolute;">
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
                                        <span class="frame_header">Mid</span>
                                    </div>
                                    <div class="frame_left_top_right">
                                        &nbsp;
                                    </div>
                                    <div class="frame_left_mid_right">
                                        <div class="frame_left_mid_mid">
                                            <?php echo $content_frame_left ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="frame_right">
                                    <div class="frame_right_top_left">
                                        &nbsp;
                                    </div>
                                    <div class="frame_right_top_mid">
                                        <span class="frame_header">Mid</span>
                                    </div>
                                    <div class="frame_right_mid_left">
                                        <div class="frame_right_mid_mid">
                                            <?php echo $content_frame_right ?>
                                        </div>
                                    </div>
                                </div>
                                <div style="clear: both;"></div> <!-- Fix voor een vaag probleem met floats -->
                            </div>
                        </div>
                    </div>
                    <div id="body_bot">
                        <div id="body_bot_left">&nbsp;</div>
                        <div id="body_bot_mid">
                            <div id="body_bot_framefix">
                                <div id="body_bot_framefix_left">
                                    &nbsp;
                                </div>
                                <div id="body_bot_framefix_right">
                                    &nbsp;
                                </div>
                            </div>
                            &nbsp;
                        </div>
                        <div id="body_bot_right">&nbsp;</div>
                    </div>
                </div>
                <div id="menu">&nbsp;</div>
            </div>			
        </div>
    </body>
</html>
<?php
// put your code here
?>