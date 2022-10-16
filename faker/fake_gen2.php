<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

// $array = array('IN', 'OUT', 'COMPLETE');


// $array2 = array('Signed', 'For approval', 'Pending', '');


$faker = Faker\Factory::create();
for ($start = 1; $start <= 200; $start++) {

    $name =  mysqli_real_escape_string($conn, $faker->company);
    $contact_number = mysqli_real_escape_string($conn, $faker->phoneNumber);
    $email = mysqli_real_escape_string($conn, $faker->companyEmail);
    $address = mysqli_real_escape_string($conn, $faker->streetAddress);
    $city =  mysqli_real_escape_string($conn, $faker->city);
    $country = mysqli_real_escape_string($conn, $faker->country);
    $postal = mysqli_real_escape_string($conn, $faker->postcode);

    $sqlstatement = "INSERT INTO `office`( `name`, `contact_number`, `email`, `address`, `city`, `country`, `postal`) VALUES ('$name','$contact_number','$email','$address','$city','$country','$postal')";
    mysqli_query($conn, $sqlstatement);




    // $date_log = mysqli_real_escape_string($conn, date("F j, Y, g:i a"));
    // $doc_code = mysqli_real_escape_string($conn, $faker->numberBetween($min = 1, $max = 200));
    // $randomnum = rand(0, 2);
    // $action = mysqli_real_escape_string($conn, $array[$randomnum]);
    // $office = mysqli_real_escape_string($conn, $faker->company);
    // $employee = mysqli_real_escape_string($conn, $faker->name);
    // $randomnotes = rand(0, 3);
    // $remarks = mysqli_real_escape_string($conn, $array2[$randomnotes]);


    // $sqlstatement = "INSERT INTO `transactions`( `date_log`, `doc_code`, `action`, `office`, `employee`, `remarks`) VALUES ('$date_log','$doc_code','$action','$office','$employee','$remarks')";
    // mysqli_query($conn, $sqlstatement);
}
