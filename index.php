<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();
        
        // add first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // add second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        // add third student (me!)
        $third = new Student();
        $third->surname = "Li";
        $third->first_name = "Paul";
        $third->add_email('home', 'bigdudeoncampus@notgmail.com');
        $third->add_grade(100);
        $third->add_grade(85);
        $third->add_grade(55);
        $students['me'] = $third;
                
        // sort the students
        ksort($students); // one of the many sort functions

        // display each student's information
        foreach($students as $student) {
            echo $student->toString();
        }

        ?>
    </body>
</html>
