<h3>একটি ক্লাবের সকল মেমবারদের ডাটা এরেতে নিয়ে বয়সের উপর বেইজ করে ১৮ বছরের বেশি সবাইতে একটি স্বাগত মেসেজ পাঠান</h3>
<?php


    function clubWishes(){
        $members=[
            [
                'name' => 'Firoz',
                'age'  => 10
            ],
            [
                'name' => 'picu',
                'age'  => 20
            ],
            [
                'name' => 'litu',
                'age'  => 25
            ],
            [
                'name' => 'titu',
                'age'  => 28
            ],
            [
                'name' => 'Sheik Hasina',
                'age'  => 35
            ],
            [
                'name' => 'Khaleda Zia',
                'age'  => 42
            ],
            [
                'name' => 'Jasim Uddin',
                'age'  => 65
            ],
        ];



        foreach($members as $member){

            if($member['age'] >= 40){
                echo "Your Age is " . $member['age'] . " We appreciate For you. ".$member['name']."<br>";
            }
            elseif($member['age'] >= 18 and $member['age'] <40){
                echo "Welcome. Your Age is " . $member['age'] . " Please continue with us. ".$member['name']."<br>";
            }
            elseif($member['age'] >= 0 and $member['age'] <18){
                echo "Your Age is " . $member['age'] . " You are not allowed, Please Continue studies best. ".$member['name']."<br>";
            }
            else{
                echo "Invalid input";
            }
        }
    }
    clubWishes();
