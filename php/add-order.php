<?php
include 'db.php';
$userId = $_POST["user_id"];
$fromLat = doubleval($_POST["from_lat"]);
$fromLng = doubleval($_POST["from_lng"]);
$toLat = doubleval($_POST["to_lat"]);
$toLng = doubleval($_POST["to_lng"]);
$truckType = intval($_POST["truck_type"]);
$senderName = $_POST["sender_name"];
$senderPhone = $_POST["sender_phone"];
$receiverName = $_POST["receiver_name"];
$receiverPhone = $_POST["receiver_phone"];
$paidBySender = intval($_POST["paid_by_sender"]);
$orderDate = intval($_POST["order_date"]);
$itemData = $_POST["item_data"];
$itemType = intval($_POST["item_type"]);
$imgURL = $_POST["img_url"];
$driverNote = $_POST["driver_note"];
$extraService = intval($_POST["extra_service"]);
$extraHelp = $_POST["extra_help"];
$voucherCode = $_POST["voucher_code"];
$distance = doubleval($_POST["distance"]);
$price = intval($_POST["price"]);
$locBenchmarkFrom = doubleval($_POST["loc_benchmark_from"]);
$locBenchmarkTo = doubleval($_POST["loc_benchmark_to"]);
$paymentMethod = $_POST["payment_method"];
$containerName = $_POST["container_name"];
$orderId = uniqid();
$c->query("INSERT INTO orders (id, user_id, from_lat, from_lng, to_lat, to_lng, truck_type, sender_name, sender_phone, receiver_name, receiver_phone, paid_by_sender, order_date, item_data, item_type, img_url, driver_note, extra_service, extra_help, voucher_code, distance, price, loc_benchmark_from, loc_benchmark_to, payment_method, container_name) VALUES ('" . $orderId . "', '" . $userId . "', " . $fromLat . ", " . $fromLng . ", " . $toLat . ", " . $toLng . ", " . $truckType . ", '" . $senderName . "', '" . $senderPhone . "', '" . $receiverName . "', '" . $receiverPhone . "', " . $paidBySender . ", " . $orderDate . ", '" . $itemData . "', " . $itemType . ", '" . $imgURL . "', '" . $driverNote . "', " . $extraService . ", '" . $extraHelp . "', '" . $voucherCode . "', " . $distance . ", " . $price . ", " . $locBenchmarkFrom . ", " . $locBenchmarkTo . ", '" . $paymentMethod . "', '" . $containerName . "')");
$c->query("UPDATE users SET current_order_id='" . $orderId . "' WHERE id='" . $userId . "'");