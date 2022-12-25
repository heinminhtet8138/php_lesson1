<?php 
    //Variable
    $name = "Hein Min Htet";
    echo $name;
    echo "<br>";
    echo gettype($name);
    echo "<br>";
    $address = "Mandalay";
    echo $address;
    echo "<br>";

    //String
    echo "My name is $name <br>";
    echo 'My name is $name <br>';
    echo 'My name is '.$name.' <br>';
    echo $name.' live in '.$address;
    echo "<br>";

    $firstName = "Hein";
    $lastName = "Min Htet";
    echo $firstName.' '.$lastName;
    echo '<br>';

    $firstName .= $lastName;
    echo $firstName;
    echo '<br>';

    $singer = " May La Than Sin ";
    echo 'My favrious singer is'.$singer;
    echo '<br>';
    echo 'My favrious singer is'.trim($singer);
    echo '<br>';
    echo strlen($name);
    echo "<br>";

    echo strtolower("HELLO");
    echo "<br>";
    echo strtoupper('hello');
    echo "<br>";

    echo substr($name, 1,3);
    echo '<br>';
    $myCity = "Hello Mandalay";
    echo $myCity."<br>";
    echo str_replace("Mandalay", "Smart City", $myCity);
?>