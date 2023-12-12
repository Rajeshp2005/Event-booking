<?php
$con = mysqli_connect("localhost", "root", "", "wdbooking");

if (!$con) {
    die("connection failed" . mysqli_connect_error());
}
