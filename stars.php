<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<?php
function stars($line)
{
    for ($i = 0; $i < $line; $i++) {
        for ($j = 0; $j < (($line - 1) - $i); $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < ($i * 2 + 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
}

function diamond($rows)
{

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < (($rows - 1) - $i); $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < ($i * 2 + 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = 0; $i < ($rows - 1); $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            echo "&nbsp";
        }
        for ($k = 0; $k < ((($rows - 2) - $i) * 2 + 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
}
function rectangle($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == 0 || $i == ($n - 1)) {
                echo "*";
            } else if ($j == 0 || $j == $n - 1) {
                echo "*";
            } else {
                echo "&nbsp;";
            }

        }
        echo "<br>";
    }
}

diamond(10);
rectangle(10);

// 最後可自訂一個function stars($shape , $rows ){} 
// switch case 直接使用函式name

?>