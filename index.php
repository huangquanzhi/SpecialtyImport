<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link href="css/bootstrap.css" type="text/css">
    </head>
    <body>

        <?php
        include ('source/Model/SalesInvoiceDAO.php');
        $SalesDAO = new SalesInvoiceDAO();
        $si = $SalesDAO->getSalesInvoice_No("S1234");
        print_r ($si);
        ?>

        <div class="container">

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>SPECIALTY IMPORTS<br>SALES INVOICE</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    InvoiceNo: <?php echo $si["InvNo"] ?>
                </div>
                <div class="col-md-6">
                    Date: <?php echo $si["InvDate"]; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-9">
                    
                </div>
            </div>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                <thead>1</thead>
                <thead>1</thead>
                <thead>1</thead>
                <thead>1</thead>
                </tr>
                </thead>
                
                <tbody>
                    
                </tbody>
            </table>

        </div>


    </body>
</html>
