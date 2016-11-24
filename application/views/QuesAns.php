<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="QuesAns_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Academic Questions Categories <span class="QuesAns-button"><a class="waves-effect waves-light btn"href="<?php echo base_url().'index.php/askQues'?>">Ask a question</a></span></h1>
                            </div>
                        </div>
						<div class="col m12 s12">
						<div>

			                <div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Accounting (407)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Agricultural Science (140)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Architecture (84)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Art (331)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Biological Science (184)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Biology (972)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Chemistry (1223)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Commerce (97)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Computer (249)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span class="heading3">CRK/CRS (99)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Current Affairs (163)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Economics (458)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span>Education (447)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Engineering (460)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >English Language (690)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Geography (109)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Government (555)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >IRK/IRS (14)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Language (27)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Law (238)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Literature in English (328)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Management (164)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Mathematics (1119)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Medical Science (540)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Physical Science (58)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Physics (1079)</span></a>
							</div>
							<div style="float:left; width:200px; margin-top:5px; margin-bottom:5px">
							<a href="#"><span >Social Science (446)</span></a>
							</div>


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
					<form id="sortquesitons" method="post" action="<?php echo base_url() . 'index.php/QuesAns' ?>">
                        <div class="col m12 s12">
                            <div class="QuesAns_sort_form col m12">
                                <div class="col s2">
                                    <p class="black-text">Sort Questions:</p>
                                </div>
                                <div class="input-field col s4">
                                        <input id="Caption" type="date" class=" datepicker validate" name="sdate">
                                        <label for="Caption">Questions From</label>
                                    </div>
                                <div class="input-field col s4">
                                        <input id="Caption" type="date" class=" datepicker validate" name="edate">
                                        <label for="Caption">Questions To</label>
                                    </div>
                                <div class="input-field col s2">
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
                             if(isset($_POST['action'])){

                                    $sdate = $_POST['sdate'];
                                    $edate = $_POST['edate'];

                                    $query = $this->db->query("select * from tbl_questions where question_date between '".$sdate."' and '".$edate."' and question_approve = 1");

                                    }else{


                                        $query = $this->db->query("select * from tbl_questions where question_approve = 1");

                                    }
                                foreach ($query->result_array() as $row){ ?>
                                    <li class="QuesAns_content">
                                        <a href="#" class="QuesAns_link">
                                            <span class="QuesAns_title"><?php echo $row['question_desc']; ?></span><br>
                                        </a>
                                        <span id="QuesAnsinfo" class="hmForumDateFormat">by <strong><a href="#">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1"> type  <a href="#"> <?php echo $row['question_category'];?></a> | Answers [0]  
                                            </span></span>
                                    </li>
                                     <?php } ?>
                              </ul>

                                <ul class="pagination">
                                    <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>