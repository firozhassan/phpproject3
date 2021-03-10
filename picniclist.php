<h3>একটি বনভোজনের জন্য চাদার এরে ডাটা তৈরি করুন যেখানে সবাই সবার বেসিক ইনফরমেসন সহ চাদা প্রদান করবে ইচ্ছামতন</h3>


<?php

  function picnic()
  {
      $students = [
          [
              'name' => 'Akter',
              'address' => 'Mogbazar, Dhaka',
              'number' => '01712313295',
              'amount' => 400
          ],
          [
              'name' => 'Sinthy Akhter',
              'address' => 'Dhanmondi, Dhaka',
              'number' => '01712313295',
              'amount' => 300
          ],
          [
              'name' => 'Juthi',
              'address' => 'Banani, Dhaka',
              'number' => '01712313295',
              'amount' => 200
          ],
          [
              'name' => 'Rahman',
              'address' => 'dhankhet, Dhaka',
              'number' => '01712313295',
              'amount' => 600
          ],
          [
              'name' => 'Arman',
              'address' => 'Kallyanpur, Dhaka',
              'number' => '01712313295',
              'amount' => 500
          ],
          [
              'name' => 'Binoy',
              'address' => 'Mirpur, Dhaka',
              'number' => '01712313295',
              'amount' => 400
          ],
      ];

      foreach ($students as $student) {

          echo "Student Name = " . $student['name'] . "<br>";
          echo "Contact Number = " . $student['number'] . "<br>";
          echo "Address = " . $student['address'] . "<br>";
          echo "Amount = " . $student['amount'] . "<hr><hr>";

      }
      $total = 0;
      for ($i = 0; $i <= 5; $i++) {
          $total = $student['amount'] + $total;
      }
      echo "Total Amount = " . $total;
  }
  picnic();


