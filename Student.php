<?php

/**
 * Student class represent a student with a name, a list of emails and 
 * a list of grades.
 *
 * @author Paul
 */
class Student {
    
    // create a new student
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // add an email to the student.
    // $which is the type of email (home, work, etc.)
    // $address is the email address
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    // add a grade to the student
    // $grade is the grade to add
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    // calculate the student's average grade
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    // output the student information as a string
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what) {
            $result .= $which . ': '. $what. "\n";
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
