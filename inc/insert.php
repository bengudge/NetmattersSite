<?php

try {

    $sth = $conn->prepare("INSERT INTO `contacts` (`name`, `companyName`, `email`, `telephone`, `subject`, `message`) VALUES (?, ?, ?, ?, ?, ?)");
    $sth->bindValue(1, $_POST["name"], PDO::PARAM_STR);
    $sth->bindValue(2, $_POST["company-name"], PDO::PARAM_STR);
    $sth->bindValue(3, $_POST["email"], PDO::PARAM_STR);
    $sth->bindValue(4, $_POST["telephone"], PDO::PARAM_STR);
    $sth->bindValue(5, $_POST["subject"], PDO::PARAM_STR);
    $sth->bindValue(6, $_POST["message"], PDO::PARAM_STR);
    $sth->execute();

}
catch(PDOException $e) {
    print ("Exception: " . $e->getMessage());
}