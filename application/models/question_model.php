<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Question_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    
     function questionListing($searchText = NULL, $page = NULL, $segment = NULL)
    {
        $this->db->select('*');
        $this->db->from('tbl_questions');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    function getQuestions()
    {
        $this->db->select('*');
        $this->db->from('tbl_questions');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }


    
    function getQuestionInfo($id = NULL){

        if($id != NULL){
            $this->db->select('*');
            $this->db->from('tbl_questions');
            $this->db->where('id',$id);
            $query = $this->db->get();
            $result = $query->result();        
            /*$this->db->select('q.question,qa.answer');
            $this->db->from('tbl_questions as q');
            $this->db->join('tbl_que_answer as qa','qa.q_id = q.id');
            $this->db->where('q.id',$id);
            $query = $this->db->get();
            $result = $query->result();        */
        }
            return $result;
    }

    function getAnsById($id = NULL){

        if($id != NULL){
            $this->db->select('*');
            $this->db->from('tbl_que_answer');
            $this->db->where('q_id',$id);
            $query = $this->db->get();
            $result = $query->result();        
            /*$this->db->select('q.question,qa.answer');
            $this->db->from('tbl_questions as q');
            $this->db->join('tbl_que_answer as qa','qa.q_id = q.id');
            $this->db->where('q.id',$id);
            $query = $this->db->get();
            $result = $query->result();        */
        }
            return $result;
    }

    function addNewQuestion($Info)
    {
        // pre($Info); die;
        // $this->db->trans_start();
        $this->db->insert('tbl_questions', $Info);
        
        $insert_id = $this->db->insert_id();
        
        // $this->db->trans_complete();
        
        return $insert_id;
    }


    function editQuestion($data = NULL, $id = NULL)
    {

        $this->db->where('id', $id);
        $this->db->update('tbl_questions', $data);

        return TRUE;
        
    }

     function deleteQuestion($questionId)
    {
        $this->db->where('id',$questionId);
        $this->db->delete('tbl_questions');

        $this->db->where('q_id',$questionId);
        $this->db->delete('tbl_que_answer');
        
        return TRUE;
    }

}

  