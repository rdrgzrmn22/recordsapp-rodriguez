<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$array = array('IN', 'OUT', 'COMPLETE');


$array2 = array('Signed', 'For approval', 'Pending', '');


$faker = Faker\Factory::create();
for ($start = 1; $start <= 200; $start++) {

    $date_log = mysqli_real_escape_string($conn, date("F j, Y, g:i a"));
    $doc_code = mysqli_real_escape_string($conn, $faker->numberBetween($min = 1, $max = 200));
    $randomnum = rand(0, 2);
    $action = mysqli_real_escape_string($conn, $array[$randomnum]);
    $office = mysqli_real_escape_string($conn, $faker->company);
    $employee = mysqli_real_escape_string($conn, $faker->name);
    $randomnotes = rand(0, 3);
    $remarks = mysqli_real_escape_string($conn, $array2[$randomnotes]);


    $sqlstatement = "INSERT INTO `transactions`( `date_log`, `doc_code`, `action`, `office`, `employee`, `remarks`) VALUES ('$date_log','$doc_code','$action','$office','$employee','$remarks')";
    mysqli_query($conn, $sqlstatement);
}
