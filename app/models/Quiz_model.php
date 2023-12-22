<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Quiz_model extends Model {

    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }

    public function create_quiz($quiz_title, $quiz_note, $quiz_question, $quiz_type, $quiz_answer)
    {
        $quizData = array(
            'quiz_title' => $quiz_title,
            'quiz_note' => $quiz_note,
            'quiz_question' => $quiz_question,
            'quiz_type' => $quiz_type,
            'quiz_answer' => $quiz_answer,
        );

        $inserted = $this->db->table('quiz_table')->insert($quizData);

        if (!$inserted) {
            // Log or display the error
            echo $this->db->error(); // Example for displaying the error, replace with logging
        }

        return $inserted;
    }
}
?>
