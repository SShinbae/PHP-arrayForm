<?php
$almari2 = array("baju kurung", "baju kemeja", "baju sukan");

if (isset($_POST['btnCalculate'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $baju = $_POST['baju'];
    $quantity = $_POST['quantity'];

    print_r($baju);

    // $total = 20 * $quantity;

    echo "Shopping Details<br>";

    if (isset($_POST['baju']) && ($_POST['quantity'])) {
        $total = 0;
        $index = 0;

        foreach ($baju as $selectedItem) {
            $total += $quantity[$index] * 20;
            echo $name . '<br>' . $phone . '<br>' . $quantity[$index] . '<br>' . $selectedItem . '<br>';
            $index++;
        }
        echo 'Total price is: RM' . $total;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>

<body>
    <table>
        <form action="" method="post">
            <caption>Welcome to Burtu Shop <h5>Each item is RM20</h5>
            </caption>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="" id="" required></td>
            </tr>
            <tr>
                <td>Phone No</td>
                <td><input type="text" name="phone" value="" id="" required></td>
            </tr>
            <tr>
                <td>Select Item</td>
                <td>
                    <?php
                    $index = 0;
                    foreach ($almari2 as $x => $val) {

                    ?>
                        <input type="checkbox" name="baju[<?php echo $index ?>]" id="" value="<?php echo $almari2[$x] ?>">
                        <?php echo $almari2[$x] ?>
                        <input type="text" name="quantity[<?php echo $index ?>] ">
                        <?php echo '<br>';
                        $index++ ?>

                    <?php
                    }; ?>
                    <!-- <?php
                            //for ($bil = 0; $bil < count($almari2); $bil++) {

                            ?>

                        <input type="checkbox" name="baju[<?php echo "<br>" . $bil; ?>]" value="<?php echo "<br>" . $almari2[$bil]; ?>"><?php echo   $almari2[$bil]; ?>
                        <input type="text" name="quantity[<?php echo ">br>" . $bil; ?>]" value="">
                        <br>

                    <?php
                    //}
                    ?> -->
                </td>
            </tr>
            <tr>

                <td><input type="submit" name="btnCalculate" value="Calculate" id=""></td>
            </tr>
        </form>
    </table>
</body>

</html>