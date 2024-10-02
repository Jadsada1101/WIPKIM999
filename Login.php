<?php
// ฟังก์ชันแสดงข้อความผิดพลาด
function ExitAlert($msg) {
    echo $msg;
    exit();
}

// รับข้อมูล JSON จากคำขอ (POST Request)
$JDecode = json_decode(file_get_contents('php://input'), true);

// ดึง Username และ Password จาก JSON
$username = isset($JDecode['Username']) ? trim($JDecode['Username']) : null;
$password = isset($JDecode['Password']) ? trim($JDecode['Password']) : null;

// ตรวจสอบว่าได้รับ Username และ Password มาหรือไม่
if (!$username || !$password) {
    ExitAlert('🚫Invalid Username Or Password🚫');
}

// ถ้าข้อมูลถูกต้อง ให้ลิ้งไปที่ URL ที่กำหนด
header('Location: https://pastebin.com/raw/6LbpUFk5');
exit();
?>