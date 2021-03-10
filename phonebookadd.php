<h3>একটি পারিবারিক ফোন বুকের জন্য এরে ডাটা শিট দৈরি করুন এবং সেটাকে পাবলিস্ট করুন</h3>
<?php
function personalPhonebook()
{
    $allPhonebook = [
        [
            'name' => 'Tarek',
            'address'   => 'Banglamotor, Dhaka',
            'number' => '01817180389'
        ],
        [
            'name' => 'Mobasser Raj',
            'address'   => 'Mohammadpur, Dhaka',
            'number' => '01712313295'
        ],
        [
            'name' => 'Imran Mia',
            'address'   => 'Uttara, Dhaka',
            'number' => '01712313295'
        ],
        [
            'name' => 'Fatima Khanam',
            'address'   => 'Baridhara, Dhaka',
            'number' => '01712313295'
        ],
        [
            'name' => 'Zui',
            'address'   => 'Kochukhet, Dhaka',
            'number' => '01712313295'
        ],
        [
            'name' => 'Zulekha',
            'address'   => 'Banani, dhaka',
            'number' => '01712313295'
        ],

    ];

    foreach ($allPhonebook as $person) {

        echo "Name : " . $person['name'] . "<br>";
        echo "Address : " . $person['address'] . "<br>";
        echo "=============================<br>";
        echo "Phone Number = " . $person['number'] . "<hr><hr>";

    }
}
personalPhonebook();
