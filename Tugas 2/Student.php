<?php
class Student {
    public $name;
    public $sex;
    public $birthdate;
    public $gpa;
    public $isStudent;
    public $age;

    public function __construct($name, $sex, $birthdate, $gpa, $isStudent) {
        $this->name = $name;
        $this->sex = $sex;
        $this->birthdate = $birthdate;
        $this->gpa = $gpa;
        $this->isStudent = $isStudent;
        $this->age = (new DateTime())->diff(new DateTime($birthdate))->y;
    }
}

global $student1, $student2, $student3, $student4, $student5;

$student1 = new Student('Jason Bintang Setiawan', 'Male', '2005-03-01', 3.81, true);
$student2 = new Student('Alice', 'Female', '2004-06-15', 3.9, true);
$student3 = new Student('Bob', 'Male', '2003-12-22', 3.5, true);
$student4 = new Student('Charlie', 'Male', '2005-01-17', 3.75, true);
$student5 = new Student('Eve', 'Female', '2005-10-05', 3.95, true);



echo "Student Name: " . $student1->name . "\n";
echo "Student Sex: " . $student1->sex . "\n";
echo "Student Birthdate: " . $student1->birthdate . "\n";
echo "Student GPA: " . $student1->gpa . "\n";
echo "Student Age: " . $student1->age . "\n";
echo "Is a Student: " . ($student1->isStudent ? 'Yes' : 'No') . "\n";
