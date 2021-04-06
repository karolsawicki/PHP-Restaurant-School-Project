<?php include("header.php"); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viet-Thai</title>
</head>

<body>
    <div class="container mt-5" style="height:100%">
        <div class=" row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/1.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mini-Box z kurczakiem</h5>
                            <p class="card-text">65zł.</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Dodaj do koszyka</button>
                            <input type="hidden" name="Item_Name" value="Mini-Box z kurczakiem">
                            <input type="hidden" name="Price" value="65">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/2.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Tom-kha-ryż-surówka</h5>
                            <p class="card-text">75zł.</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Dodaj do koszyka</button>
                            <input type="hidden" name="Item_Name" value="Tom-kha-ryż-surówka">
                            <input type="hidden" name="Price" value="75">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/3.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Makaron smażony</h5>
                            <p class="card-text">105zł.</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Dodaj do koszyka</button>
                            <input type="hidden" name="Item_Name" value="Makaron smażony">
                            <input type="hidden" name="Price" value="105">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/4.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Zupa PHO</h5>
                            <p class="card-text">99zł.</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-primary">Dodaj do koszyka</button>
                            <input type="hidden" name="Item_Name" value="Zupa PHO">
                            <input type="hidden" name="Price" value="99">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php include("footer.php"); ?>