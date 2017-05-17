<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>title</title>
        
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <div class="wrap">
            <h1>Food orders</h1>
            <form method="post" action="">
                <table>
                    <tr>
                        <th>Goods</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <td>Pizza</td>
                        <td><input type="number" name="pizza"></td>
                    </tr>
                    <tr>
                        <td>Milk</td>
                        <td><input type="number" name="milk"></td>
                    </tr>
                    <tr>
                        <td>Sausages</td>
                        <td><input type="number" name="sausages"></td>
                    </tr>
                    <tr>
                        <td>How you'd like to get it ?</td>
                        <td>
                            <select name="delivery">
                                <option>Delivery</option>
                                <option>I will take it</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Send" name="submit"></td>
                        <td><input type="reset" value="Reset"></td>
                    </tr>
                </table>
            </form>
            <div class="answer">
                <?php
                    if (isset($_POST["submit"]))
                    {
                        $pizza = FALSE;
                        $milk = FALSE;
                        $sausages = FALSE;
                        echo "<h2>Order:</h2>";
                        if ($_POST["pizza"])
                        {
                            echo "<img src='imgs/pizza.jpg' width='120' height='120'> - Pizza: {$_POST["pizza"]} pcs.<br/>";
                            $pizza = TRUE;
                        }
                        if ($_POST["milk"])
                        {
                            echo "<img src='imgs/milk.jpg' width='120' height='120'> - Milk: {$_POST["milk"]} pcs.<br/>";
                            $milk = TRUE;
                        }
                        if ($_POST["sausages"])
                        {
                            echo "<img src='imgs/sausage.jpg' width='120' height='120'> - Sausages: {$_POST["sausages"]} pcs.<br/>";
                            $sausages = TRUE;
                        }
                        if ($pizza or $milk or $sausages)
                        {
                            $date = date("H:i:s d M Y");
                            
                            echo "Total: ".($_POST["pizza"] + $_POST["milk"] + $_POST["sausages"])."<br/>";
                            echo "Today: {$date}<br/>";
                            echo "Delivery: {$_POST["delivery"]}";
                        }
                    }
                ?>
            </div>
        </div>  
    </body>
</html>


