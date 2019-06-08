<div class="container" style="margin-left: 100px; margin-top: 50px;">
    <div class="row">
        <div class="col-lg-2">
            <!--div class="tile-stats tile-red"-->
            <a href="<?= base_url('admissions'); ?>"><img src="<?= base_url() ?>/public/assets/images/admission.png"
                                                          height="80" width="80"></a><br>
            <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('student');?>" 
                            data-postfix="" data-duration="1500" data-delay="0">0</div>
            <p style="font-size: 16px; margin-left: -5px;" class="text-primary">Admissions</p>
        <!--/div-->
        </div>
        <div class="col-lg-2">
            <a href="<?= site_url('attendance/attend_view'); ?>"><img
                        src="<?= base_url() ?>/public/assets/images/attend.png" height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: -4px;" class="text-primary">Attendance</p>
        </div>
        <div class="col-lg-2">
            <a href="<?= site_url('accounts'); ?>"><img src="<?= base_url() ?>/public/assets/images/accounts.png"
                                                        height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 2px;" class="text-primary">Accounts</p>
        </div>
        <!--div class="col-lg-2">
            <a href="<?= site_url('admin/'); ?>"><img src="<?= base_url() ?>/public/assets/images/admin.png"
                                                      height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 15px;" class="text-primary">Admin</p>
        </div-->
        <div class="col-lg-2">
            <a href="<?= site_url('certificates/'); ?>"><img src="<?= base_url() ?>/public/assets/images/cert.png"
                                                             height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: -2px;" class="text-primary">Certificates</p>
        </div>
        <!--div class="col-lg-2">
            <a href="<?= site_url('discuss'); ?>"><img src="<?= base_url() ?>/public/assets/images/discuss.png"
                                                       height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 10px;" class="text-primary">Discuss</p>
        </div-->
    </div>
    <div class="row">
        <div class="col-lg-2">
            <a href="<?= site_url('fees'); ?>"><img src="<?= base_url() ?>/public/assets/images/fees.png"
                                                    height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 20px;" class="text-primary">Fees</p>
        </div>
        <div class="col-lg-2">
            <a href="<?= site_url('library'); ?>"><img src="<?= base_url() ?>/public/assets/images/library.png"
                                                       height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 15px;" class="text-primary">Library</p>
        </div>
        <div class="col-lg-2">
            <a href="<?= site_url('time_table'); ?>"><img src="<?= base_url() ?>/public/assets/images/tt.png"
                                                          height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 2px;" class="text-primary">Time Table</p>
        </div>
        <!--div class="col-lg-2">
            <a href="<?= site_url('hr'); ?>"><img src="<?= base_url() ?>/public/assets/images/hr.png"
                                                  height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 25px;" class="text-primary">HR</p>
        </div-->
        <div class="col-lg-2">
            <a href="<?= site_url('enquiry/'); ?>"><img src="<?= base_url() ?>/public/assets/images/lms.png"
                                                        height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 16px;" class="text-primary">Enquiry</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <a href="<?= site_url('dues_list/dues_lis'); ?>"><img src="<?= base_url() ?>/public/assets/images/dues.png"
                                                                  height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 2px;" class="text-primary">Dues List</p>
        </div>
        <div class="col-lg-2">
            <a href="<?= site_url('summary/fees_summary'); ?>"><img
                        src="<?= base_url() ?>/public/assets/images/summary.png" height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 2px;" class="text-primary">Summary</p>
        </div>

        <!--div class="col-lg-2">
            <a href="<?= site_url('transport'); ?>"><img
                        src="<?= base_url() ?>/public/assets/images/transport.png" height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 2px;" class="text-primary">Transport</p>
        </div-->

        <div class="col-lg-2">
            <a href="<?= site_url('exams'); ?>"><img src="<?= base_url() ?>/public/assets/images/exams.png"
                                                     height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 10px;" class="text-primary">Exams</p>
        </div>
        <!--div class="col-lg-2">
            <a href="<?= site_url('misc'); ?>"><img src="<?= base_url() ?>/public/assets/images/misc.png"
                                                    height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 20px;" class="text-primary">Misc</p>
        </div>
        <div class="col-lg-2">
            <a href="<?= site_url('calendar'); ?>"><img src="<?= base_url() ?>/public/assets/images/cal.png"
                                                        height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 5px;" class="text-primary">Calendar</p>
        </div-->
        <div class="col-lg-2">
            <a href="<?= site_url('quiz/'); ?>"><img src="<?= base_url() ?>/public/assets/images/quiz.png"
                                                     height="80" width="80"></a><br>
            <p style="font-size: 16px; margin-left: 27px;" class="text-primary">Quiz</p>
        </div>
    </div>
</div>
<br>


<div class="row">
	<div class="col-md-8">
    	<div class="row">
            <!-- CALENDAR-->
            <div class="col-md-12 col-xs-12">    
                <div class="panel panel-primary " data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <i class="fa fa-calendar"></i>
                            <?php echo get_phrase('event_schedule');?>
                        </div>
                    </div>
                    <div class="panel-body" style="padding:0px;">
                        <div class="calendar-env">
                            <div class="calendar-body">
                                <div id="notice_calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<!--div class="col-md-4">
		<div class="row">
            <div class="col-md-12">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('student');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('student');?></h3>
                   <p>Total students</p>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('teacher');?>" 
                    		data-postfix="" data-duration="800" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('teacher');?></h3>
                   <p>Total teachers</p>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats tile-aqua">
                    <div class="icon"><i class="entypo-user"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('parent');?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('parent');?></h3>
                   <p>Total parents</p>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                    <?php 
							$check	=	array(	'date' => date('Y-m-d') , 'status' => '1' );
							$query = $this->db->get_where('attendance' , $check);
							$present_today		=	$query->num_rows();
						?>
                    <div class="num" data-start="0" data-end="<?php echo $present_today;?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('attendance');?></h3>
                   <p>Total present student today</p>
                </div>
                
            </div>
    	</div>
    </div-->
	
</div>



    <script>
  $(document).ready(function() {
	  
	  var calendar = $('#notice_calendar');
				
				$('#notice_calendar').fullCalendar({
					header: {
						left: 'title',
						right: 'today prev,next'
					},
					
					//defaultView: 'basicWeek',
					
					editable: false,
					firstDay: 1,
					height: 530,
					droppable: false,
					
					events: [
						<?php 
						$notices	=	$this->db->get('noticeboard')->result_array();
						foreach($notices as $row):
						?>
						{
							title: "<?php echo $row['notice_title'];?>",
							start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
							end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>) 
						},
						<?php 
						endforeach
						?>
						
					]
				});
	});
  </script>

  
