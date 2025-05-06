<?php
class Student{
    public $name;
    public $course;
    public $age;
    public $marks;
    public function __construct($name,$course,$age,$marks){
        $this->name=$name;
        $this->course=$course;
        $this->age=$age;
        $this->marks=$marks;
    }
    public function display(){  //displaying data
        echo "Name: ".$this->name."<br>";
        echo "Course: ".$this->course."<br>";
        echo "Age: ".$this->age."<br>";
        echo "Marks: ".$this->marks."<br>";
    }
}
class Students{
    public $students;
    public function __construct(){
        $this->students=array();
    }
    public function add($name,$course,$age,$marks){
        $this->students[]=new Student($name,$course,$age,$marks);
    }
    public function display(){
        foreach($this->students as $student){
            $student->display();
        }
    }
    public function search($name){
        foreach($this->students as $student){
            if($student->name==$name){
                return $student;
            }
        }
        return null;
    }
}
$students=new Students();
$students->add("John","CSE",20,90);
$students->add("John","CSE",20,90);
$students->add("Jane","CSE",20,90);
$students->add("Jane","CSE",20,90);
$students->display();
$student=$students->search("John");



?>