<?php include("header.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {   
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1); 
                echo"<script>
                    // alert('Dodano');
                    window.location.href='index.php';                    
                </script>";
                                        
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);  
            echo"<script>
                    alert('Dodano');
                    window.location.href='index.php';                    
                </script>";
        }
    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>
                    // alert('Usunięto');
                    window.location.href='mycart.php';
                </script>";
            }
        }
    }
}


?>