<?php
require_once('./lib/Stripe.php');

$stripe = array(
  "secret_key"      => "YOUR_STRIPE_SK_KEY",
  "publishable_key" => "YOUR_STRIPE_PK_KEY"
);

Stripe::setApiKey($stripe['secret_key']);
?>