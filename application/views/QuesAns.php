<?php  $this->load->view('header'); ?>
<meta name="viewport" content="width=device-width">
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="QuesAns_details">
                        <div class="col m12 s12">
                            <div class="col s12 offset-s6 hide-on-med-and-up"><span class="QuesAns-button "><a class="waves-effect waves-light btn"href="<?php echo base_url().'index.php/askQues'?>">Ask a question</a></span></div>
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Questions Categories <span class="QuesAns-button hide-on-small-only"><a class="waves-effect waves-light btn"href="<?php echo base_url().'index.php/askQues'?>">Ask a question</a></span></h1>
                            </div>
                        </div>
						<div class="col m12 s12">
						<div>
                             <div class="school_category_box">
                                <ul class="s_category_list">
                                <?php foreach($categories as $row){
                                    $qc_name = $row['question_category'];
                                     $query2 = $this->db->query("select count(*) as row_count from tbl_questions where question_category = '".$qc_name."' GROUP BY question_category");
                                    // $qc_id = $row['question_category'];
                                     //echo $qc_id;
                                   //  $query2 = $this->db->query("select count(*) as row_count from tbl_questions where question_category ='".$qc_id."'");
                                    ?>
                                    <li class="catrgory_list_item"><a href="<?php echo base_url(); ?>index.php/QuesAns/search?category=<?php echo $qc_name; ?>"><?php echo $qc_name; ?> (<?php echo $query2->result()[0]->row_count; ?>)</a></li>
                                    <?php } ?>
                                </ul>
                            </div>

			                <!-- <div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Accounting (407)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Agricultural Science (140)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Architecture (84)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Art (331)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Biological Science (184)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Biology (972)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Chemistry (1223)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Commerce (97)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Computer (249)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span class="heading3">CRK/CRS (99)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Current Affairs (163)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Economics (458)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span>Education (447)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Engineering (460)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >English Language (690)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Geography (109)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Government (555)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >IRK/IRS (14)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Language (27)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Law (238)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Literature in English (328)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="v<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Management (164)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Mathematics (1119)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Medical Science (540)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Physical Science (58)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Physics (1079)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="<?php //echo base_url() . 'index.php/QuesAns/search?category=Accounting' ?>"><span >Social Science (446)</span></a>
							</div>

 -->
         </div>

						</div>
						
<?php
    if ($this->session->flashdata('message')) {
    ?>
    <div class="message flash">
      <div class="message-data">
        <p class="success-msg"><?php echo $this->session->flashdata('message'); ?></p>
        <button class="btn success-close">Close</button>
        </div>   
        </div>
    <?php
    }
?>
					<form id="sortquesitons" method="post" action="<?php echo base_url() . 'index.php/QuesAns/search' ?>">
                        <div class="col m12 s12">
                            <div class="QuesAns_sort_form col m12">
                                <div class="col s3 m2">
                                    <p class="black-text">Sort Questions:</p>
                                </div>
                                <div class="input-field col s5 m4">
                                        <input id="Caption" type="date" class=" datepicker validate" name="sdate">
                                        <label for="Caption">Questions From</label>
                                    </div>
                                <div class="input-field col s4 m4 ">
                                        <input id="Caption" type="date" class=" datepicker validate" name="edate">
                                        <label for="Caption">Questions To</label>
                                    </div>
                                <div class="input-field col s12 offset-s6 m2">
                                         <button class="btn waves-effect waves-light" type="submit" name="action">search
                                            <i class="material-icons ">search</i>
                                        </button>
                                    </div>
                            </div>
                        </div>
                        </form>
                       <div class="col s12 m12 ">
                            <div class="QuesAns_list_wrap">
                             <ul class="QuesAns_list">
                             <?php
                           /*  if(isset($_POST['action'])){

                                    $date1 = $_POST['sdate'];
                                    $xyz=strtotime($date1);
                                    $sdate=date('Y-m-d',$xyz);

                                    $date2 = $_POST['edate'];
                                    $pqr=strtotime($date2);
                                    $edate=date('Y-m-d',$pqr);

                                    $query = $this->db->query("select * from tbl_questions where question_date between '".$sdate."' and '".$edate."' and question_approve = 1");

                                    }else{


                                        $query = $this->db->query("select * from tbl_questions where question_approve = 1");

                                    } */
                                    $resultcount = count($question);
                                    if($resultcount >= 1){
                                foreach ($question as $row){ 
                                  $que_id = $row->question_id;
                                    ?>
                                    <li class="QuesAns_content">
                                        <a href="<?= base_url() ?>ansQues/show_one/<?= $que_id   ?>" class="QuesAns_link">
                                            <span class="QuesAns_title"><?php echo $row->question_desc; ?></span><br>
                                        </a>
                                        <span id="QuesAnsinfo" class="hmForumDateFormat">by <strong><a href="#">serenityAliyu</a></strong> <?php echo $row->question_date;  ?>            <span>[<?php echo $row->question_time;?>]</span><span class="infoText1"> type  <a href="#"> <?php echo $row->question_category;?></a> <a href="<?= base_url() ?>ansQues/show_one/<?= $que_id   ?>" class="green-text">| Answer this</a>  
                                            </span></span>
                                    </li>
                                     <?php }}else{

                                        echo "Result Not Found";
                                        } ?>
                                        <?php 
                                     $query = $this->db->query("select * from tbl_questions where question_approve=1 limit 10");
                                     foreach ($query->result_array() as $row){
                                        $que_id=$row['question_id'];
                                     ?>
                                     

                                     <?php } ?>
                              </ul>

                              <!--  <ul class="pagination">
                                    <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>  -->
                                <?php echo $pagination; ?>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>