<h3>পঞ্চম শ্রেণীর ছাত্রছাত্রীদের কিছু ডাটা নিয়ে একটি এরে স্ট্রাকচার তৈরি করুন</h3>
  <?php
function studentData()
{
    //array structure of all students==============================
    $studentsData = [
        [
            'id' => '1',
            'name' => 'Abdul Baki',
            'father-name' => 'Rashid',
            'age' => '10',
            'contact' => '01712313295',
            'address' => 'Baridhara, Dhaka',
            'marks' => [87, 92, 85, 75, 85, 57]

        ],
        [
            'id' => '2',
            'name' => 'Abdul Baki',
            'father-name' => 'Rashid',
            'age' => '10',
            'contact' => '01712313295',
            'address' => 'Baridhara, Dhaka',
            'marks' => [87, 92, 48, 75, 25, 57]

        ],
        [
            'id' => '3',
            'name' => 'Abdul Baki',
            'father-name' => 'Rashid',
            'age' => '10',
            'contact' => '01712313295',
            'address' => 'Baridhara, Dhaka',
            'marks' => [87, 92, 48, 75, 85, 84]

        ],
        [
            'id' => '4',
            'name' => 'Abdul Baki',
            'father-name' => 'Rashid',
            'age' => '10',
            'contact' => '01712313295',
            'address' => 'Baridhara, Dhaka',
            'marks' => [87, 52, 48, 75, 85, 57]

        ],
        [
            'id' => '5',
            'name' => 'Abdul Baki',
            'father-name' => 'Rashid',
            'age' => '10',
            'contact' => '01712313295',
            'address' => 'Baridhara, Dhaka',
            'marks' => [53, 75, 48, 75, 85, 57]

        ]
    ];


    foreach ($studentsData as $student) {

        $id = $student['id'];
        $studentName = $student['name'];
        $studentFathereName = $student['father-name'];
        $studentAge = $student['age'];
        $studentContact = $student['contact'];
        $studentAddress = $student['address'];
        $bangla = $student['marks'][0];
        $english = $student['marks'][1];
        $math = $student['marks'][2];
        $science = $student['marks'][3];
        $sScience = $student['marks'][4];
        $religion = $student['marks'][5];


        echo "Student Name : " . $studentName . "<br>";
        echo "Student ID : " . $id . "<br>";
        echo "Student Father Name : " . $studentFathereName . "<br>";
        echo "Address : " . $studentAddress . "<br>";
        echo "Student Age : " . $studentAge . "<br>";
        echo "Student Contact : " . $studentContact . "<br>";
        echo "Age  : " . $student['age'] . "<br>";
        echo "============================<br>";

//bangla subject marks logic==============================

        if ($bangla >= 0 and $bangla <= 33) {
            echo "Bangla marks = " . $bangla . " And Grade is = F (0.0)" . "<br>";
            $banGrade = 0.0;
        } elseif ($bangla >= 34 and $bangla <= 39) {
            echo "Bangla marks = " . $bangla . " And Grade is = D (1.00)" . "<br>";
            $banGrade = 1.00;
        } elseif ($bangla >= 40 and $bangla <= 49) {
            echo "Bangla marks = " . $bangla . " And Grade is = C (2.00)" . "<br>";
            $banGrade = 2.00;
        } elseif ($bangla >= 50 and $bangla <= 59) {
            echo "Bangla marks = " . $bangla . " And Grade is = B (3.00)" . "<br>";
            $banGrade = 3.00;
        } elseif ($bangla >= 60 and $bangla <= 69) {
            echo "Bangla marks = " . $bangla . " And Grade is = A- (3.50)" . "<br>";
            $banGrade = 3.50;
        } elseif ($bangla >= 70 and $bangla <= 79) {
            echo "Bangla marks = " . $bangla . " And Grade is = A (4.00)" . "<br>";
            $banGrade = 4.00;
        } elseif ($bangla >= 80 and $bangla <= 100) {
            echo "Bangla marks = " . $bangla . " And Grade is = A+ (5.00)" . "<br>";
            $banGrade = 5.00;
        } else {
            echo "Marks is Invalid";
        }


//English subject marks logic==============================

        if ($english >= 0 and $english <= 33) {
            echo "English marks = " . $english . " And Grade is = F (0.0)" . "<br>";
            $engGrade = 0.0;
        } elseif ($english >= 34 and $english <= 39) {
            echo "English marks = " . $english . " And Grade is = D (1.00)" . "<br>";
            $engGrade = 1.00;
        } elseif ($english >= 40 and $english <= 49) {
            echo "English marks = " . $bangla . " And Grade is = C (2.00)" . "<br>";
            $engGrade = 2.00;
        } elseif ($english >= 50 and $english <= 59) {
            echo "English marks = " . $english . " And Grade is = B (3.00)" . "<br>";
            $engGrade = 3.00;
        } elseif ($english >= 60 and $english <= 69) {
            echo "English marks = " . $english . " And Grade is = A- (3.50)" . "<br>";
            $engGrade = 3.50;
        } elseif ($english >= 70 and $english <= 79) {
            echo "English marks = " . $english . " And Grade is = A (4.00)" . "<br>";
            $engGrade = 4.00;
        } elseif ($english >= 80 and $english <= 100) {
            echo "English marks = " . $english . " And Grade is = A+ (5.00)" . "<br>";
            $engGrade = 5.00;
        } else {
            echo "Marks is Invalid";
        }

//English subject marks logic==============================

        if ($math >= 0 and $math <= 33) {
            echo "Math marks = " . $math . " And Grade is = F (0.0)" . "<br>";
            $mathGrade = 0.0;
        } elseif ($math >= 34 and $math <= 39) {
            echo "Math marks = " . $math . " And Grade is = D (1.00)" . "<br>";
            $mathGrade = 1.00;
        } elseif ($math >= 40 and $math <= 49) {
            echo "Math marks = " . $math . " And Grade is = C (2.00)" . "<br>";
            $mathGrade = 2.00;
        } elseif ($math >= 50 and $math <= 59) {
            echo "Math marks = " . $math . " And Grade is = B (3.00)" . "<br>";
            $mathGrade = 3.00;
        } elseif ($math >= 60 and $math <= 69) {
            echo "Math marks = " . $math . " And Grade is = A- (3.50)" . "<br>";
            $mathGrade = 3.50;
        } elseif ($math >= 70 and $math <= 79) {
            echo "Math marks = " . $math . " And Grade is = A (4.00)" . "<br>";
            $mathGrade = 4.00;
        } elseif ($math >= 80 and $math <= 100) {
            echo "Math marks = " . $math . " And Grade is = A+ (5.00)" . "<br>";
            $mathGrade = 5.00;
        } else {
            echo "Marks is Invalid";
        }

//Science subject marks logic==============================

        if ($science >= 0 and $science <= 33) {
            echo "Science marks = " . $science . " And Grade is = F (0.0)" . "<br>";
            $sciGrade = 0.0;
        } elseif ($science >= 34 and $science <= 39) {
            echo "Science marks = " . $science . " And Grade is = D (1.00)" . "<br>";
            $sciGrade = 1.00;
        } elseif ($science >= 40 and $science <= 49) {
            echo "Science marks = " . $science . " And Grade is = C (2.00)" . "<br>";
            $sciGrade = 2.00;
        } elseif ($science >= 50 and $science <= 59) {
            echo "Science marks = " . $science . " And Grade is = B (3.00)" . "<br>";
            $sciGrade = 3.00;
        } elseif ($science >= 60 and $science <= 69) {
            echo "Science marks = " . $science . " And Grade is = A- (3.50)" . "<br>";
            $sciGrade = 3.50;
        } elseif ($science >= 70 and $science <= 79) {
            echo "Science marks = " . $science . " And Grade is = A (4.00)" . "<br>";
            $sciGrade = 4.00;
        } elseif ($science >= 80 and $science <= 100) {
            echo "Science marks = " . $science . " And Grade is = A+ (5.00)" . "<br>";
            $sciGrade = 5.00;
        } else {
            echo "Marks is Invalid";
        }

//Social Science subject marks logic==============================

        if ($sScience >= 0 and $sScience <= 33) {
            echo "Social Science marks = " . $sScience . " And Grade is = F (0.0)" . "<br>";
            $sSciGrade = 0.0;
        } elseif ($sScience >= 34 and $sScience <= 39) {
            echo "Social Science marks = " . $sScience . " And Grade is = D (1.00)" . "<br>";
            $sSciGrade = 1.00;
        } elseif ($sScience >= 40 and $sScience <= 49) {
            echo "Social Science marks = " . $sScience . " And Grade is = C (2.00)" . "<br>";
            $sSciGrade = 2.00;
        } elseif ($sScience >= 50 and $sScience <= 59) {
            echo "Social Science marks = " . $sScience . " And Grade is = B (3.00)" . "<br>";
            $sSciGrade = 3.00;
        } elseif ($sScience >= 60 and $sScience <= 69) {
            echo "Social Science marks = " . $sScience . " And Grade is = A- (3.50)" . "<br>";
            $sSciGrade = 3.50;
        } elseif ($sScience >= 70 and $sScience <= 79) {
            echo "Social Science marks = " . $sScience . " And Grade is = A (4.00)" . "<br>";
            $sSciGrade = 4.00;
        } elseif ($sScience >= 80 and $sScience <= 100) {
            echo "Social Science marks = " . $sScience . " And Grade is = A+ (5.00)" . "<br>";
            $sSciGrade = 5.00;
        } else {
            echo "Marks is Invalid";
        }

//Religion subject marks logic==============================

        if ($religion >= 0 and $religion <= 33) {
            echo "Religion marks = " . $religion . " And Grade is = F (0.0)" . "<br>";
            $relGrade = 0.0;
        } elseif ($religion >= 34 and $religion <= 39) {
            echo "Religion marks = " . $religion . " And Grade is = D (1.00)" . "<br>";
            $relGrade = 1.00;
        } elseif ($religion >= 40 and $religion <= 49) {
            echo "Religion marks = " . $religion . " And Grade is = C (2.00)" . "<br>";
            $relGrade = 2.00;
        } elseif ($religion >= 50 and $religion <= 59) {
            echo "Religion marks = " . $religion . " And Grade is = B (3.00)" . "<br>";
            $relGrade = 3.00;
        } elseif ($religion >= 60 and $religion <= 69) {
            echo "Religion marks = " . $religion . " And Grade is = A- (3.50)" . "<br>";
            $relGrade = 3.50;
        } elseif ($religion >= 70 and $religion <= 79) {
            echo "Religion marks = " . $religion . " And Grade is = A (4.00)" . "<br>";
            $relGrade = 4.00;
        } elseif ($religion >= 80 and $religion <= 100) {
            echo "Religion marks = " . $religion . " And Grade is = A+ (5.00)" . "<br>";
            $relGrade = 5.00;
        } else {
            echo "Marks is Invalid";
        }


        echo "=========================================<br>";

        $total = 0;
        foreach ($student['marks'] as $mark) {
            $total += $mark;
        }
        $totalGpa = ($banGrade + $engGrade + $mathGrade + $sciGrade + $sSciGrade + $relGrade) / 6;
        echo "Total mark = " . $total . "<br>";
        echo "=========================================<br>";
        echo "GPA is = " . $totalGpa . "<hr>";
        echo "======================================================================================================";
        echo "<hr>";
    }
}
studentData();
