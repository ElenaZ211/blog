<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hello<br>";


    function firstElement($array) {
        if (!empty($array)) {
            return $array[0]; 
        } else {
            return null; 
        }
    }

    $numbers = [1, 2, 3, 1, 4, 1, 5];
    echo firstElement($numbers) . "<br>";

    
    function checkLastCharInSecond($str1, $str2) {
        if ($str1 === '') return false;

        $lastChar = substr($str1, -1);

        if (strpos($str2, $lastChar) !== false) {
            return true;  
        } else {
            return false; 
        }
    }

    // Օրինակներ
    var_dump(checkLastCharInSecond("Yelena", "Elena")); 
    echo "<br>";
    var_dump(checkLastCharInSecond("Elena", "Hrach"));  
    
    function countOccurrences($needle, $haystack) {
   
        
    if ($needle === '') return 0;
    return substr_count($haystack, $needle);
}

// Օրինակներ
echo countOccurrences("a", "banana");
echo "<br>";
echo countOccurrences("an", "banana"); 
echo "<br>";
echo countOccurrences("ba", "banana"); 
    ?>
</body>
</html>
