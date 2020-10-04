<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Question (QuestionController)
 * Question Class to control all question related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Question extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('question_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the question
     */
    public function index()
    {
        $this->global['pageTitle'] = 'Quiz : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the question list
     */
    function questionListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('question_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            // $count = $this->question_model->questionListingCount($searchText);

			// $returns = $this->paginationCompress("questionListing/", $count, 5 );
            
            $data['questionRecords'] = $this->question_model->questionListing();
            
            $this->global['pageTitle'] = 'Question Listing';
            
            $this->loadViews("admin/manage_questions/list", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function add()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('question_model');
            $data['que_and'] = $this->question_model->getQuestions();
            
            $this->global['pageTitle'] = 'Add New Question';

            $this->loadViews("admin/manage_questions/add", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to add new question to the system
     */
    function addNewQuestion()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('question','Question','required');
            $this->form_validation->set_rules('answer_a','Answer a','required');
            $this->form_validation->set_rules('answer_b','Answer b','required');
            $this->form_validation->set_rules('answer_c','Answer c','required');
            $this->form_validation->set_rules('answer_d','Answer d','required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->add();
            }
            else
            {
                $question = $this->input->post('question');
                $answer_a = $this->input->post('answer_a');
                $answer_b = $this->input->post('answer_b');
                $answer_c = $this->input->post('answer_c');
                $answer_d = $this->input->post('answer_d');
                $ref_que_ans = $this->input->post('ref_que_ans');

                $q_a = explode('_', $ref_que_ans);
                
                $questionInfo = array(
                    'question'=> $question, 
                    'que_id'=> $q_a['0'], 
                    'for_ans_id'=> $q_a['1'], 
                    'created_at'=> date('Y-m-d H:i:s')
                ); 

                $this->load->model('question_model');

                $result = $this->question_model->addNewQuestion($questionInfo);
                
                if($result > 0)
                {
                    $all_answers = array(
                        'answer_a' => $answer_a,
                        'answer_b' => $answer_b,
                        'answer_c' => $answer_c,
                        'answer_d' => $answer_d
                    ); 

                    $i =1;
                    foreach ($all_answers as $key => $value) {


                        $ans_data = array(
                            'q_id'=> $result,
                            'ans_series'=> $i,
                            'answer'=> $value
                        );

                        $this->db->insert('tbl_que_answer',$ans_data);
                        $i++;
                    }

                    $this->session->set_flashdata('success', 'New Question created successfully');
                    redirect('admin/questionListing');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Question creation failed');
                }
                
                redirect('admin/question/add');
            }
        }
    }

    
    /**
     * This function is used load question edit information
     * @param number $questionId : Optional : This is question id
     */
    function edit($questionId = NULL)
    {
        if($this->isAdmin() == TRUE || $questionId == "")
        {
            $this->loadThis();
        }
        else
        {
            // echo $questionId; die;
            if($questionId == null)
            {
                redirect('admin/questionListing');
            }
            
            // $data['roles'] = $this->question_model->getQuestionRoles();
            $data['questionInfo'] = $this->question_model->getQuestionInfo($questionId);
            $data['ansInfo'] = $this->question_model->getAnsById($questionId);
            
// pre($data['questionInfo']); die;
            $this->global['pageTitle'] = 'Edit Question';
            
            $this->loadViews("admin/manage_questions/edit", $this->global, $data, NULL);
        }
    }
    
    
    /**
     * This function is used to edit the question information
     */
    function editQuestion($id)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $questionId = $id; 

            $question = $this->input->post('question');
            $answer_a = $this->input->post('answer_a');
            $answer_b = $this->input->post('answer_b');
            $answer_c = $this->input->post('answer_c');
            $answer_d = $this->input->post('answer_d');

            $ref_que_ans = $this->input->post('ref_que_ans');

                $q_a = explode('_', $ref_que_ans);
                
               

            
            
            $this->form_validation->set_rules('question','Question','required');
            $this->form_validation->set_rules('answer_a','Answer a','required');
            $this->form_validation->set_rules('answer_b','Answer b','required');
            $this->form_validation->set_rules('answer_c','Answer c','required');
            $this->form_validation->set_rules('answer_d','Answer d','required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->edit($questionId);
            }
            else
            {
                 $questionInfo = array(
                    'question'=> $question, 
                    'que_id'=> $q_a['0'], 
                    'for_ans_id'=> $q_a['1'] 
                    // 'created_at'=> date('Y-m-d H:i:s')
                ); 

                $this->load->model('question_model');

                // $result = $this->question_model->addNewQuestion($questionInfo);
                
                $result = $this->question_model->editQuestion($questionInfo, $questionId);
                
                if($questionId > 0)
                {

                   
                    $all_answers = array(
                        'answer_a' => $answer_a,
                        'answer_b' => $answer_b,
                        'answer_c' => $answer_c,
                        'answer_d' => $answer_d
                    ); 
                    
                    $this->db->where('q_id',$questionId);
                    $this->db->delete('tbl_que_answer');
                    $i =1;
                    foreach ($all_answers as $key => $value) {


                        $ans_data = array(
                            'q_id'=> $questionId,
                            'ans_series'=> $i,
                            'answer'=> $value
                        );

                        $this->db->insert('tbl_que_answer',$ans_data);
                        $i++;
                    }

                    $this->session->set_flashdata('success', 'Question updated successfully');
                    redirect('admin/questionListing');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Question updation failed');
                }
                
                redirect('admin/questionListing');
            }
        }
    }



    /**
     * This function is used to delete the question using questionId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteQuestion($id)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $questionId = $id;
            
            $result = $this->question_model->deleteQuestion($questionId);
            
            if ($result > 0) { 
                $this->session->set_flashdata('success', 'Question deleted successfully');
                redirect('admin/questionListing');
                    
            }else{
                $this->session->set_flashdata('error', 'Question deletion failed');
                redirect('admin/questionListing');
            }
        }
    }
    

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'Quiz : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>