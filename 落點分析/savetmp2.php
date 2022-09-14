<?php
session_start();

$school_order = intval($_POST['school_order']);
$percentage_order = intval($_POST['percentage_order']);
$field_order = intval($_POST['field_order']);
$education = intval($_POST['education']);
$art = intval($_POST['art']);
$social = intval($_POST['social']);
$business = intval($_POST['business']);
$science = intval($_POST['science']);
$cs = intval($_POST['cs']);
$med = intval($_POST['med']);
$constructure = intval($_POST['constructure']);
$agri = intval($_POST['agri']);
$service = intval($_POST['service']);
$other = intval($_POST['other']);
$location_order = intval($_POST['location_order']);
$north = intval($_POST['north']);
$central = intval($_POST['central']);
$south = intval($_POST['south']);
$east = intval($_POST['east']);
$island = intval($_POST['island']);

echo $school_order;
echo $art ;
echo $location_order;
//header("Location: index.php");
?>