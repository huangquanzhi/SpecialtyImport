<?php

/**
 * Description of SalesInvoiceDAO
 *
 * @author Jackie
 */
include 'Options.php';
include 'Customer.php';
include 'Car.php';
include 'SalesInvoice.php';
include 'DBConnection.php';

define("TAX_RATE", 0.15);

class SalesInvoiceDAO {

    function __construct() {
        
    }

    
     function getSalesInvoice_No($salesNo){
        $i = array();
        $preTotalPrice = -1;
        $preTradeAllow = -1;

        $TotalPrice = 0;
        $TotalTradeAllow = 0;
        $Net = 0;
        $Taxes = 0;
        $TotalPayable = 0;

        try {
            $conn = DBConnection::get();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM SalesInvoiceView WHERE InvNo = ?");
            $stmt->bindParam("s", $salesNo);
            $stmt->execute();

            $data = null;

            while (($data = $stmt->fetch()) !== false) {

                $i["InvNo"] = $data['InvNo'];
                $i["InvDate"] = $data['InvDate'];

                $i["Customer"] = array(
                    "CustName" => $data['CustName'],
                    "CustAddress" => $data['CustAddress'],
                    "CustCity" => $data['CustCity'],
                    "CustProvince" => $data['CustProvince'],
                    "CustPostal" => $data['CustPostal'],
                    "CustHomePhone" => $data['CustHomePhone'],
                    "SalesMan" => $data['SalesMan']
                );

                $i["MainCar"] = array(
                    "CarSerial" => $data['CarSerial'],
                    "CarMake" => $data['CarMake'],
                    "CarModel" => $data['CarModel'],
                    "CarYear" => $data['CarYear'],
                    "CarExtColour" => $data['CarExtColour']
                );

                $i["Insurance"] = array(
                    "InsFire" => $data['InsFire'],
                    "InsCollision" => $data['InsCollision'],
                    "InsLiab" => $data['InsLiab'],
                    "InsDamage" => $data['InsDamage']
                );

                if ($preTotalPrice != $data["TotalPrice"] && $preTradeAllow === $data["TotalTradeAllowance"]) {

                    $preTotalPrice = $data["TotalPrice"];

                    $temp = array(
                        "OptionCode" => $data['OptionCode'],
                        "OptionDesc" => $data['OptionDesc'],
                        "OptionListPrice" => $data['OptionListPrice']
                    );

                    array_push($i["Options"], $temp);
                }

                if ($preTradeAllow != $data["TotalTradeAllowance"] && $preTotalPrice === $data["TotalPrice"]) {


                    $preTradeAllow = $data["TotalTradeAllowance"];

                    $temp = array(
                        "TradeSerial" => $data['TradeSerial'],
                        "TradeMake" => $data['TradeMake'],
                        "TradeModel" => $data['TradeModel'],
                        "TradeYear" => $data['TradeYear'],
                        "TradeAllow" => $data['TradeAllow']
                    );

                    array_push($i["TradeInCar"],$temp);
                }

                $i["TotalPrice"] = $data['TotalPrice'];
                $i["TotalTradeAllowance"] = $data['TotalTradeAllowance'];
                $i["Net"] = $TotalPrice + $TotalTradeAllow;
                $i["Taxes"] = $Net * TAX_RATE;
                $i["TotalPayable"] = $Net + $Taxes;
            }
            
            
            if ($data !== false) {
                return $i;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error". $e->getMessage();
        } catch (Exception $e){
            echo "Error 2". $e->getMessage();
        }
    }


}
