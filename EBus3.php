<!DOCTYPE html>
<html>
    <head>
    <h1 style="text-align: center">Payment Summary</h1>
    </head>
    
    <hr>
    <br></br>
    
    <body style="font-size: 25px">
        <!-- //Showing a summary of the customer order -->
        <?php
        
        session_start();
        $totalVal = $_POST['txtTotal'];
        $fullNameVal = $_POST['txtName'];
        echo "The name is : ".$fullNameVal.".";
        echo "<br></br>";
        echo "The total value-is : &euro;".$totalVal.".";
        ?>
        
        <br></br>
        <hr>
        <br></br>
        
        <div>
            <center>
                <form name="Return to Menu" method="post" action="Homepage.html">
                    <input type="submit" name="btnMenu" id="btnReturn" onclick="" value="Menu" style="background-color: yellow; color: white; font-size: 40px">
                </form>
            </center>
        </div>
    </body>
</html>