<h4>একটি স্টুডেন্ট এরে ডাটা দৈরি করুন যেখানে প্রায় ২০ জন এর ডাটা থাকবে এবং সেখানে থেকে শুরু মিরপুরের এবং বনানীর বাসিন্দাদের ডাটা প্রিন্ট করুন</h4>

<?php

    $students=[
      [
        'name' => 'Firoz',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Mohammadpur'
      ],
      [
        'name' => 'Khobir',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Banani'
      ],
      [
        'name' => 'Abir',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Bashundhara'
      ],
      [
        'name' => 'Bose',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Uttara'
      ],
      [
        'name' => 'Celina',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Mirpur'
      ],
      [
        'name' => 'Miraz',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Uttara'
      ],
      [
        'name' => 'Poltu',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Jigatola'
      ],
      [
        'name' => 'boltu',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Bashundhara'
      ],
      [
        'name' => 'Mantu',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Uttara'
      ],
      [
        'name' => 'Santu',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Mirpur'
      ],
      [
        'name' => 'Jhontu',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Dhanmondi'
      ],
      [
        'name' => 'Poltu',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Mirpur'
      ],
      [
        'name' => 'Lalu',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Banani'
      ],
      [
        'name' => 'Boltu',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Bashundhara'
      ],
      [
        'name' => 'Tonmoy',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Uttara'
      ],
      [
        'name' => 'Dilip',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Banani'
      ],
      [
        'name' => 'Barik',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Kochukhet'
      ],
      [
        'name' => 'Modhu',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Baridhara'
      ],
      [
        'name' => 'Gafi',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Khelkhet'
      ],
      [
        'name' => 'Rafi',
        'age'  => '10',
        'cell' => '01712313295',
        'location'=>'Dhanmondi'
      ]
    ];

    foreach($students as $student){

      if($student['location']=='Banani' || $student['location']=='Mirpur'){
        echo "Student Name = ".$student['name']."<br>";
        echo "Age  = ".$student['age']."<br>";
        echo "Cell phone = ".$student['cell']."<br>";
        echo "Student address = ".$student['location']."<hr>";
      }
      else{
        echo "No permission";
      }
    }
