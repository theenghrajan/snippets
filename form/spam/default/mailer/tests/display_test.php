<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2/19/2019
 * Time: 11:15
 */

require_once __DIR__.'/../functions.php';

echo '<center><h1>Auto Respond Email</h1></center>';
echo renderAutoResponder("Prashanna Panthee");

echo '<center><h1>Admin Email</h1></center>';
echo renderAdminEmail((array)json_decode('{"Email":"prshnx@gmail.com","Full Name":"Gordon H Persona","Phone":"789456523","Zip Code":"8995","Message":"Hellow"}'));