<?php

include("CarPolicy2.php");

date_default_timezone_set('GMT'); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $policyNumber = $_POST["policyNumber"];
    $yearlyPremium = $_POST["yearlyPremium"];
    $dateOfLastClaim = $_POST["dateOfLastClaim"];

    $carPolicy = new CarPolicy($policyNumber, $yearlyPremium);
    $carPolicy->setDateOfLastClaim($dateOfLastClaim);

    $initialPremium = $yearlyPremium; // You need to define how to calculate initial premium
    $discountedPremium = $carPolicy->getDiscountedPremium();

    echo "Initial Premium: $initialPremium<br>";
    echo "Discounted Premium: $discountedPremium<br>";
} else {
    echo "Form not submitted";
}

?>
