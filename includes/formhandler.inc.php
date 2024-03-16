<?php
//var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $address = $_POST["address"];
    $contactNo = $_POST["contactNo"];
    $emailAdd = $_POST["emailAddress"];
    $password = $_POST["password"];


    try {
        require_once "db.inc.php";

        $query = "INSERT INTO external_users (eu_fullname, eu_address, eu_contactNumber, eu_emailAddress, eu_password) VALUES
        (:fullname, :homeaddress, :contactNo, :emailAdd, :pswrd);";

        $stmnt = $pdo->prepare($query);
        $stmnt->bindParam(":fullname", $fullname);
        $stmnt->bindParam(":homeaddress", $address);
        $stmnt->bindParam(":contactNo", $contactNo);
        $stmnt->bindParam(":emailAdd", $emailAdd);
        $stmnt->bindParam(":pswrd", $password);

        $stmnt->execute();
        $pdo = null;
        $stmnt = null;

        header("Location: ../signUp.php");

        die();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

}
else {
    header("Location: ../signUp.php");
}

?>