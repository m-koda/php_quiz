<?php
namespace My\Quiz;

abstract class AbstractQuiz
{

   public function __construct()
   {
      shuffle($this->quizzes);
   }

   public function getQuiz($num)
   {
      return $this->quizzes[$num]['question'];
   }

   public function getAnswer($num)
   {
      return $this->quizzes[$num]['answer'];
   }

   public function getChoices($num)
   {
      return $this->quizzes[$num]['choice'];
   }

   public function isCorrect($user_answer, $num)
   {
      $user_answer--;
      return ($user_answer === $this->getAnswer($num)) ? true : false;
   }

}