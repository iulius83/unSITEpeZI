<!-- Pe partea de PHP vrem sa scrii o implementare cat mai optima a functiei strstr (http://php.net/manual/en/function.strstr.php) fara sa folosesti nicio alta functie a PHP (singura pe care o poti folosi este isset()), si folosind cat mai putine iteratii. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Implementare strstr</title>
</head>
<body>
    <?php

    function mystrstr($haystack, $needle) {
        $result = "";
        $index = 0;
        $i = 0;
        $j = 0;
        
        while (isset($haystack[$i])) {
            if ($haystack[$i] === $needle[$j]) {
                $result .= $haystack[$i];   
                $index = $i;
                $j++;
            } else if ($result === $needle) {
                $index++;
                while (isset($haystack[$index])) {
                    $result .= $haystack[$index];
                    $index++;
                }
                return $result;
            }
            $i++;
        }
        return false;
    }

    var_dump(mystrstr('das dsa dasd sadjsakldjasl;k djsakljd salkdj Ana are aslkdjas lkdjasdsad sa Ana are mere fsd fsdf sdfsd fd', 'Ana are mere'));
    echo '<br>';
    var_dump(strstr('das dsa dasd sadjsakldjasl;k djsakljd salkdj Ana are aslkdjas lkdjasdsad sa Ana are mere fsd fsdf sdfsd fd', 'Ana are mere'));
    ?>

    <script>
    
    function strstr(haystack, needle) {
        let position = haystack.indexOf(needle);

        if (position) {
            return haystack.slice(position);
        } else {
            return false;
        }
    }

    function strstr2(haystack, needle) {
        let result = "";
        let index = 0;
        let i = 0;
        let j = 0;
        
        while (haystack[i] !== undefined) {
            if (haystack[i] === needle[j]) {
                result += haystack[i];   
                index = i;
                j++;
            } else if (result === needle) {
                index++;
                while (haystack[index] !== undefined) {
                    result += haystack[index];
                    index++;
                }
                return result;
            }
            i++;
        }
        return false;
    }


    console.log(strstr('das dsa dasd sadjsakldjasl;k djsakljd salkdj Ana are aslkdjas lkdjasdsad sa Ana are mere fsd fsdf sdfsd fd', 'Ana are mere'));

    console.log(strstr2('das dsa dasd sadjsakldjasl;k djsakljd salkdj Ana are aslkdjas lkdjasdsad sa Ana are mere fsd fsdf sdfsd fd', 'Ana are mere'));
    
    </script>
</body>
</html>
