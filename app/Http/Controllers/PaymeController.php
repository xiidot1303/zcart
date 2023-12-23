<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Payme\Payment;

class PaymeController extends Controller
{
 public function handleCallback(Request $request)
 {
 $payment = new Payment();
 $data = $request-all();
 $result = $payment->verify($data);

 if ($result) {
 // To'lov tasdiqlangan
 // Bu yerga to'lovni bajarish va mahsulotni yuborishning kerakli logikasini qo'shing
 } else {
 // To'lov muvaffaqiyatsiz yakunlandi yoki xatolik yuz berdi
 // Xatoni qaytarish yoki to'lovni qayta harakat qilishning kerakli logikasini qo'shing
 }
 }
}
