<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Question Management
        <small>Add / Edit Question</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Question Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addQuestion" action="<?php echo base_url() ?>admin/question/addNewQuestion" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="question">Question</label>
                                        <input type="text" class="form-control required" id="question" name="question" maxlength="128">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="answer_a">Answer 1</label>
                                        <input type="answer_a" class="form-control required" id="answer_a"  name="answer_a" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="answer_b">Answer 2</label>
                                        <input type="answer_b" class="form-control required equalTo" id="answer_b" name="answer_b" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="answer_c">Answer 3</label>
                                        <input type="answer_c" class="form-control required equalTo" id="answer_c" name="answer_c" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cpassword">Answer 4</label>
                                        <input type="answer_d" class="form-control required equalTo" id="answer_d" name="answer_d" maxlength="10">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Reference Question & Answer</label>
                                        <select class="form-control required" id="ref_que_ans" name="ref_que_ans">
                                            <option value="0_0">Select Question & Answer</option>
                                            <?php
                                            $que_ans = _get_que_ans();
                                            if(!empty($que_ans))
                                            {
                                                foreach ($que_ans as $qa)
                                                {
                                                    ?>
                                                    <option value="<?php echo $qa->q_id.'_'.$qa->ans_series ?>"><?php echo 'Q'.$qa->q_id.' Ans '.$qa->ans_series.' ('.$qa->answer.')' ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" /> 
                            <a class="btn btn-default" href="<?php echo base_url() ?>admin/questionListing" >Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addQuestion.js" type="text/javascript"></script>