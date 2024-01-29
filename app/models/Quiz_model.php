<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Quiz_model extends Model {

    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }

    public function create_quiz($quiz_title, $quiz_note, $quiz_question, $quiz_type, $quiz_answer, $correct_answer)
    {
        $quizData = array(
            'quiz_title' => $quiz_title,
            'quiz_note' => $quiz_note,
            'quiz_question' => $quiz_question,
            'quiz_type' => $quiz_type,
            'quiz_answer' => $quiz_answer,
            'correct_answer' => $correct_answer,
        );

        $inserted = $this->db->table('quiz_table')->insert($quizData);

        if (!$inserted) {
            // Log or display the error
            echo $this->db->error(); // Example for displaying the error, replace with logging
        }

        return $inserted;
    }

    public function getRowById($id) {
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }

    // public function getAllRows() {
    //     return $this->db->table('quiz_table')->get_all();
    // }
    public function read($quizTitle = null){
    if ($quizTitle !== null) {
        return $this->db->table('quiz_table')->where('quiz_title', $quizTitle)->get_all();
    } else {
        return $this->db->table('quiz_table')->get_all();
    }
}
    public function getDiffRows(){
        return $this->db->table('quiz_table')->get_all();
    }

    public function delete($id){
        $result = $this->db->table('quiz_table')->where(array('id' => $id))->delete();
        if($result)
            return true;
    }

    public function title(){
        $this->db->table('quiz_table')->select('quiz_title')->get_all();
    }

    public function qname(){
        return $this->db->table('name_table')->get_all();
    }

    public function edit($id, $quiz_title, $quiz_note, $quiz_question, $quiz_type, $quiz_answer, $correct_answer)
{
    $data = array(
        'quiz_title' => $quiz_title,
        'quiz_note' => $quiz_note,
        'quiz_question' => $quiz_question,
        'quiz_type' => $quiz_type,
        'quiz_answer' => $quiz_answer,
        'correct_answer' => $correct_answer,
    );
    $result = $this->db->table('quiz_table')->where('id', $id)->update($data);
    return $result; // Return the result of the update operation
}

    public function quiz_data($id)
    {
        return $this->db->table('quiz_table')->where(array('id' => $id))->get();
    }

    public function searchInfo($id){
        return $this->db->table('quiz_table')->where('id', $id)->get();
    }
}
?>
