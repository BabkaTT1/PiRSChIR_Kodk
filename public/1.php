<html lang="en">
    <head>
        <title>Работа 1.2 часть 1</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <div class="container">
        <?php
            $value = isset($_GET['num']) ? (int)$_GET['num'] : 0;
            $value = $value & 7;
            echo $value; // Выведет 'value'
        ?>

        <br>

        <?php
            if ($value & 2){
                $color = "#131313";
            }
            else {
                $color = "#500000";
            }
            if ($value & 1) {
                if ($value & 4)
                    {
                        $size = "100";
                        $params ="<rect x=\"10\" y=\"10\" width=\"200\" height=\"200\" fill=\"$color\"/>";
                        }
                else{
                    $size = "200";
                    $params ="<rect x=\"10\" y=\"10\" width=\"80\" height=\"80\" fill=\"$color\"/>";
                    }
            }
            else 
            {
                if ($value & 4){
                    $size = "82";
                    $params =  "<ellipse cx=\"81\" cy=\"81\" rx=\"80\" ry=\"80\" stroke=\"$color\" fill=\"transparent\" stroke-width=\"1\"/>";
                    }
                else{
                    $size = "162";
                    $params =  "<ellipse cx=\"41\" cy=\"41\" rx=\"40\" ry=\"40\" stroke=\"$color\" fill=\"transparent\" stroke-width=\"1\"/>";
                }
                }

            echo '<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200">';
            echo $params;
            echo '</svg>';
        ?>
    </body>
</html> 
<!--
1 001 маленький красный  квадрат
2 010 маленький чёрный  круг
3 011 маленький чёрный квадрат
4 100 большой красный круг
5 101 большой красный квадрат
6 110 большой чёрный овал
7 111 большой чёрный квадрат
1 бит - форма: 1 = квадрат, 0 = овал
2 бит - цвет: 1 = чёрный, 0 = красный
4 бит - размер: 1 = маленький, 0 = большой
-->