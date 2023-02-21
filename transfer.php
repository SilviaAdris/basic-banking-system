<?php
include("database.php");

$db= $tConn;
$dbUpdate = $tConn;

$id = $_POST['id'];
$amount = $_POST['amount'];

$sql = "INSERT INTO transaction (toCustomer,amount)
VALUES (".$id . "," .$amount .")";

if($db->query($sql) == TRUE){
    update_balance($id, $amount, $dbUpdate);
}
else{
    echo "Error" . $sql . "<br>" . $db->error;
}


function update_balance ( $id, $amount, $dbUpdate) {
    $sql = "SELECT currentBalance FROM customer WHERE id=$id";
    $result = $dbUpdate->query($sql);
    $oldAmount = $result->fetch_assoc();
    $oldAmount = $oldAmount['currentBalance'];
    $newAmount = $oldAmount + $amount;
    $sqlUpdate = "UPDATE customer SET currentBalance=$newAmount WHERE id=$id";
    if($dbUpdate->query($sqlUpdate) == TRUE){
        $dbUpdate->close();
        header("Location: all-customers-page.php", true, 301);
    }
    else{
        echo "Error updating record:" . $dbUpdate->error;
    }

    
}

?>