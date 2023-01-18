<?php


$randomNums = [];

while(count($randomNums) < 3) {
    $rand = rand(1, 15);
    if(!in_array($rand, $randomNums)) {
        array_push($randomNums, $rand);
    }
}

try {

    $sth = $conn->prepare('SELECT * FROM news WHERE id IN (?, ?, ?)');
    $sth->bindValue(1, $randomNums[0], PDO::PARAM_INT);
    $sth->bindValue(2, $randomNums[1], PDO::PARAM_INT);
    $sth->bindValue(3, $randomNums[2], PDO::PARAM_INT);
    $sth->execute();

    $result = $sth->fetchAll();
}
catch(PDOException $e) {
    print ("Exception: " . $e->getMessage());
}