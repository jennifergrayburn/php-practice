<html>
<head>
    <title>Grade Calculations</title>
</head>

<h1>Report</h1>

<body>
    <p><?php

    /**average exam grades, provide letter grade, and pass/fail message
    

    function calculate_average($exam_array)
    {
        $average = array_sum($exam_array)/count($exam_array);
        }
    
    // }*/

    //divide the sum of the test score by the number of texts
    function calculate_average($exams)
    {
        return array_sum($exams) / count($exams); 
        
    }


    //convert average grade to letter grade
    function calculate_lettergrade($average)
    { 
        $lettergrade = "nope";
    
        if ($average >= 90){
            $lettergrade = "A";
        } elseif ($average >= 80 && $average < 90) {
            $lettergrade = "B";
        } elseif ($average >= 70 && $average < 80) {
            $lettergrade = "C";
        } elseif ($average >= 60 && $average < 70) {
            $lettergrade = "D"; 
        } else {
            $lettergrade = "F";
        }  

        return $lettergrade;
    }

    //convert letter grade into pass/fail

    function calculate_passfail($average)
    {
        $passfail = "nope";

        if ($average >= 60){
            $passfail = "passing.";
        } else {
            $passfail = "failing.";
        }

        return $passfail;
    }


    //individual grades student 1
    $examscores = array(
        "exam1" => "89", 
        "exam2" => "90",
        "exam3" => "90"); 
    extract($examscores);

    $average = calculate_average($examscores);
    $lettergrade = calculate_lettergrade ($average);
    $passfail = calculate_passfail($average);
    echo "Exams: " . $exam1 . ", " . $exam2 . ", " . $exam3 . "<br/>";
    echo "Average: " . round($average) . "<br/>";
    echo "Grade: " . $lettergrade . "<br/>";
    echo "Student is " . $passfail . "<br/>"; 

    ?></p>

    <p><?php
    
    //individual grades student 2   
    $examscores = array(
        "exam1" => "50", 
        "exam2" => "51",
        "exam3" => "0"); 
    extract($examscores);

    $average = calculate_average($examscores);
    $lettergrade = calculate_lettergrade ($average);
    $passfail = calculate_passfail($average);
    echo "Exams: " . $exam1 . ", " . $exam2 . ", " . $exam3 . "<br/>";
    echo "Average: " . round($average) . "<br/>";
    echo "Grade: " . $lettergrade . "<br/>";
    echo "Student is " . $passfail . "<br/>"; 

    ?></p>


</body>


</html>