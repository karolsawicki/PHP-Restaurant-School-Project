<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viet-Thai Koszyk</title>
</head>

<body>
    <div class="container" style="height:100vh;">
        <div class=" row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>Koszyk</h1>
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Danie</th>
                            <th scope="col">Cena</th>
                            <th scope="col">Ilość</th>

                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                        $total = 0;                   
                    if(isset($_SESSION['cart']))
                    {
                        
                        foreach($_SESSION['cart'] as $key => $value)
                        {                            
                            //print_r($value);//dev
                            $total=$total+$value['Price'];
                            echo"
                            <tr>                            
                            <td>$value[Item_Name]</td>
                            <td>$value[Price] zł</td>
                        
                            <td>
                            <form action='manage_cart.php' method='POST'>
                            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Usuń</button>
                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                            </td>
                            </tr>
                            ";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="border bg-light rounded p-4">
                    <h4>Całkowity Koszt:</h4>
                    <h5 class="text-right"><?php echo $total ?>zł</h5>

                    <form>
                        <div class="form-group">
                            <label for="phone">Telefon kontaktowy</label>
                            <input type="phone" class="form-control" id="phone" aria-describedby="phone"
                                placeholder="Wprowadź Numer Telefonu">

                        </div>
                        <div class="form-group">
                            <label for="firstName">Imię</label>
                            <input type="firstName" class="form-control" id="firstName" placeholder="Wprwadź Imię">
                        </div>
                        <div class="form-group">
                            <label for="adres">Adres</label>
                            <input type="adres" class="form-control" id="adres" placeholder="Wprowadź Adres">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>

                            <label class="form-check-label" for="flexRadioDefault2">
                                Płatność gotówką przy dostawie
                            </label>
                        </div>


                        <br>
                        <button class="btn btn-primary btn-block">Zamów</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>