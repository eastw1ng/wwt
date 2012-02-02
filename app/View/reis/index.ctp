<!--
REIZEN
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Reizen</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid">
                            <script type="text/javascript" src="http://www.google.com/jsapi"></script>
                            <script type="text/javascript">
                                google.load('visualization', '1.1', {packages: ['controls']});
                               function drawVisualization() {
                                    // Prepare the data.
                                    var data = google.visualization.arrayToDataTable([
                                     <?php echo $googleString?>
                                    ]);

                                    // Define a StringFilter control for the 'Name' column
                                    var stringFilter = new google.visualization.ControlWrapper({
                                      'controlType': 'StringFilter',
                                      'containerId': 'control1',
                                      'options': {
                                        'filterColumnLabel': 'Bestemming'
                                      }
                                    });

                                    // Define a table visualization
                                    var table = new google.visualization.ChartWrapper({
                                      'chartType': 'Table',
                                      'containerId': 'chart1',
                                      'page': 'enable',
                                      'pageSize': 5,
                                      'showRowNumber': true,
                                      'pagingSymbols' : {prev: 'prev', next: 'next'}
                                    });

                                 
                                    // Create the dashboard.
                                    var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard')).
                                      // Configure the string filter to affect the table contents
                                      bind(stringFilter, table).
                                      // Draw the dashboard
                                      draw(data, {
                                      'page': 'enable',
                                      'pageSize': 5,
                                      'showRowNumber': true,
                                      'pagingSymbols' : {prev: 'prev', next: 'next'}
                                    });    
                                  }
                                  
                                    function setNumberOfPages(value) {
                                      if (value) {
                                        options['pageSize'] = parseInt(value, 10);
                                        options['page'] = 'enable';
                                      } else {
                                        options['pageSize'] = null;
                                        options['page'] = null;  
                                      }
                                      draw();
                                    }

                                    // Sets custom paging symbols "Prev"/"Next"
                                    function setCustomPagingButtons(toSet) {
                                      options['pagingSymbols'] = toSet ? {next: 'next', prev: 'prev'} : null;
                                      draw();  
                                    }

                                    function setPagingButtonsConfiguration(value) {
                                      options['pagingButtonsConfiguration'] = value;
                                      draw();
                                    }

                                  google.setOnLoadCallback(drawVisualization);

                               </script>
                           

                                <div id="dashboard">
                                  <table>
                                    <tr style='vertical-align: top'>
                                      <td style='width: 300px; font-size: 0.9em;'>
                                        <div id="control1"></div>
                                        <div id="control2"></div>
                                        <div id="control3"></div>
                                      </td>
                                      <td style='width: 600px'>
                                        <div style="float: left;" id="chart1"></div>
                                        <div style="float: left;" id="chart2"></div>
                                        <div style="float: left;" id="chart3"></div>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                            <div class="pagers">
                                <?php echo $this->Paginator->prev('<< ' . __('Previous'), array(), null, array('class' => 'prev disabled')); ?> -
                                <?php echo $this->Paginator->numbers(); ?>
                                - <?php echo $this->Paginator->next('Next'.' >>', array(), null, array('class' => 'prev disabled')); ?>
                            </div>

                            <div style="clear:both;"></div>
                            <div class="reizen_separator"></div>
                            <? //var_dump($reizen) ?>
                            <? foreach($reizen as $reis):?>
                            <div style="width:100%;float:left;">
                                <div class="reizen_list_img" style="vertical-align:bottom;">
                                    <div class="reizen_list_admin">
                                    <? if(false):?>
                                        <img style="cursor:pointer;" src="img/admin_edit.png"/>
                                        <img style="cursor:pointer;" src="img/admin_delete.png"/>
                                    <? endif; ?>
                                    </div>
                                </div>
                                <div class="reizen_list_title" style="cursor:pointer;" onClick="javascript:location.href='reis/view/<?=$reis['Rei']['id']?>'">
                                    <span style="float:left;"><? echo $reis['Bestemming']['Plaat']['naam']?></span>
                                    <span style="float:right;">&euro; <? echo ReisController::calcPrice($reis['Bestemming']['Accomodatie']['accomodatie_prijs'], $reis['Transport']['prijs']) ?>.- p.p.</span>
                                </div>
                                <div class="reizen_list_subtitle">
                                    <? echo $reis['Bestemming']['alias']?>
                                </div>
                                <div class="reizen_list_body">
                                    <? echo $reis['Rei']['beschrijving']?>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="reizen_separator"></div>
                            <? endforeach; ?>

                            <div class="pagers">
                                    <?php echo $this->Paginator->prev('<< ' . __('Previous'), array(), null, array('class' => 'prev disabled')); ?> -
                                    <?php echo $this->Paginator->numbers(); ?>
                                    - <?php echo $this->Paginator->next('Next'.' >>', array(), null, array('class' => 'prev disabled')); ?>
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
					<?php echo $this->element('admin_panel'); ?>
					<?php echo $this->element('top_reizen'); ?>
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