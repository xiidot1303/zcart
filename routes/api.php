<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Api')->group(function () {

    // Customer APIs
    include 'api/Customer.php';

    // Delivery boy APIs
    include 'api/DeliveryBoy.php';

    //Vendor APIs
    include 'api/Vendor.php';

    //Payment APIs
    include 'api/Payment.php';
});
