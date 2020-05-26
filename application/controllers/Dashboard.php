<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('General_model');
    }

    public function index() {

        $data['contents'] = $this->load->view('dashboard', 1, TRUE);
        $this->load->view('template', $data);
    }

    public function upload_cs_shortfile() {
        $file_path = PATH_DIR . 'files/';

        $target_file = $file_path . basename($_FILES["cs_file"]["name"]);

        if ($_FILES["cs_file"]["size"] > 0) {

            move_uploaded_file($_FILES["cs_file"]["tmp_name"], $target_file);
        }
        
$this->General_model->add("ca_short");


        $recArray = file($target_file);
        for ($i = 1; $i < count($recArray); $i++) {
            $strLine = $recArray[$i];
            $row = explode("|", $strLine);

            $record = array(
                "Purchase_Order" => $row[0],
                "PO_Date" => $row[1],
                "Terms" => $row[2],
                "Ship_Via" => $row[3],
                "FOB" => $row[4],
                "Ref" => $row[5],
                "Vendor" => $row[6],
                "PO_Line" => $row[7],
                "CAS_Item" => $row[8],
                "Vendor_Item" => $row[9],
                "Item_Description" => $row[10],
                "Quantity" => $row[11],
                "Item_Cost" => $row[12],
                "UoM" => $row[13],
                "Due_Date" => $row[14],
                "PO_Contact" => $row[15],
                "PO_Contact_Email" => $row[16],
                "Ship_to_Name" => $row[17],
                "Ship_To_Address1" => $row[18],
                "Ship_To_Address2" => $row[19],
                "Ship_To_Address3" => $row[20],
                "Ship_To_City" => $row[21],
                "Ship_To_State" => $row[22],
                "Ship_To_Zip" => $row[23],
                "Ship_To_Country" => $row[24],
                "Ship_To_Contact" => $row[25],
                "Ship_To_Phone" => $row[26]
            );
            // print_r($record);


            $this->General_model->add($record, "ca_short");
        }
    }

    public function download_cs_shortfile() {

        $orderTemp = "";

        error_reporting(0);

        $query = "SELECT * from  ca_short order by id ";

        $rs = $this->General_model->query($query);
       

        if ($rs->num_rows() > 0) {
            foreach ($rs->result_array() as $row) {
                $Purchase_Order = $row['Purchase_Order'];
                $PO_Date = $row['PO_Date'];
                $Terms = $row['Terms'];
                $Ship_Via = $row['Ship_Via'];
                $FOB = $row['FOB'];
                $Ref = $row['Ref'];
                $Vendor = $row['Vendor'];
                $PO_Line = $row['PO_Line'];
                $CAS_Item = $row['CAS_Item'];
                $Vendor_Item = $row['Vendor_Item'];
                $Item_Description = $row['Item_Description'];
                $Quantity = $row['Quantity'];
                $Item_Cost = $row['Item_Cost'];
                $UoM = $row['UoM'];
                $Due_Date = $row['Due_Date'];
                $PO_Contact = $row['PO_Contact'];
                $PO_Contact_Email = $row['PO_Contact_Email'];
                $Ship_to_Name = $row['Ship_to_Name'];
                $Ship_To_Address1 = $row['Ship_To_Address1'];
                $Ship_To_Address2 = $row['Ship_To_Address2'];
                $Ship_To_Address3 = $row['Ship_To_Address3'];
                $Ship_To_City = $row['Ship_To_City'];
                $Ship_To_State = $row['Ship_To_State'];
                $Ship_To_Zip = $row['Ship_To_Zip'];
                $Ship_To_Country = $row['Ship_To_Country'];
                $Ship_To_Contact = $row['Ship_To_Contact'];
                $Ship_To_Phone = $row['Ship_To_Phone'];

                //$=$row[''];

                $orderTemp .= "

---- Start Order ----

ExtOrderID: 
ExtSource: 
date_External: 
id_OrderType: 

CustomerPurchaseOrder: $Purchase_Order 
TermsName: Net $Terms
CustomerServiceRep: 
CustomerType: 
id_CompanyLocation: 
id_SalesStatus: 
sts_CommishAllow: 

date_OrderPlaced: $PO_Date
date_OrderRequestedToShip: 
date_OrderDropDead: $Due_Date

sts_Order_SalesTax_Override: 
sts_ApplySalesTax01: 
sts_ApplySalesTax02: 
sts_ApplySalesTax03:
sts_ApplySalesTax04:
sts_ShippingTaxable: 

coa_AccountSalesTax01: 
coa_AccountSalesTax02: 
coa_AccountSalesTax03:
coa_AccountSalesTax04:

ShipAddressDescription: 
ShipAddressCompany:  $Ship_to_Name
ShipAddress1:  $Ship_To_Address1
ShipAddress2:  $Ship_To_Address2
ShipAddressCity:  $Ship_To_City
ShipAddressState:  $Ship_To_State
ShipAddressZip:  $Ship_To_Zip
ShipAddressCountry:  $Ship_To_Country
ShipMethod:  $Ship_Via
cur_Shipping: 
sts_Order_ShipAddress_Add: 

NotesToArt: 
NotesToProduction: 
NotesToReceiving: 
NotesToPurchasing: 
NotestoShipping: $FOB
NotesToAccounting: 
NotesToPurchasingSub: 

---- End Order ----

---- Start Customer ----

ExtCustomerID: 
id_Customer: 
Company: 
id_CompanyLocation: 
Terms: 
WebsiteURL: 
EmailMain: 

AddressDescription: 
AddressCompany: 
Address1: 
Address2: 
AddressCity: 
AddressState: 
AddressZip: 
AddressCountry: 

sts_ChargeSalesTax: 
TaxExemptNumber: 
coa_AccountSalesTax01: 
coa_AccountSalesTax02: 
coa_AccountSalesTax03: 
coa_AccountSalesTax04: 

id_DiscountLevel: 
id_DefaultCalculator1: 
id_DefaultCalculator2: 

CustomerServiceRep: 
CustomerType: 
CustomerSource: 
ReferenceFrom: 
SICCode: 
SICDescription: 
n_EmployeeCount: 

CustomField01: 
CustomField02: 
CustomField03: 
CustomField04: 
CustomField05: 
CustomField06: 
CustomField07: 
CustomField08: 
CustomField09: 
CustomField10: 

---- End Customer ----

---- Start Contact ----

NameFirst: $PO_Contact
NameLast: 
Department: 
Title: 
Phone: 
Fax: 
Email: $PO_Contact_Email
sts_Contact_Add: 
sts_EnableBulkEmail: 

---- End Contact ----

---- Start Design ----

ExtDesignID: $CAS_Item
id_Design:
id_DesignType: 
DesignName: 

---- Start Location ----

Location: 
StitchesTotal: 
ColorsTotal: 
FlashesTotal: 

Color: 
Color: 
Color: 
Color: 

Map: 
Map: 
Map: 
Map: 

---- End Location ----

---- Start Product ----

PartNumber: $Vendor_Item
PartColorRange: 
PartColor: 
cur_UnitPriceUserEntered: $Item_Cost


Size01_Req: 
Size02_Req: 
Size03_Req:  
Size04_Req: 
Size05_Req: 
Size06_Req: 


sts_Prod_Product_Override: 
PartDescription: $Item_Description
cur_UnitCost: 
sts_EnableCommission: 
id_ProductClass: 

sts_Prod_SalesTax_Override: 
sts_EnableTax01: 
sts_EnableTax02: 
sts_EnableTax03: 
sts_EnableTax04: 

sts_Prod_SecondaryUnits_Override: 
sts_UseSecondaryUnits: 
Units_Qty: 
Units_Type: Square Feet
Units_Area1: 
Units_Area2: 
sts_UnitsPricing: 0
sts_UnitsPurchasing: 1
sts_UnitsPurchasingExtraPercent: 
sts_UnitsPurchasingExtraRound: 


sts_Prod_Behavior_Override: 
sts_ProductSource_Supplied: 
sts_ProductSource_Purchase:
sts_ProductSource_Inventory: 

sts_Production_Designs: 
sts_Production_Subcontract: 
sts_Production_Components: 

sts_Storage_Ship: 
sts_Storage_Inventory: 

sts_Invoicing_Invoice: 

---- End Product ----

";
            }




            header("Content-Type: text/plain");

            header("Content-Disposition: attachment; filename=orderfile.txt" );

            echo $orderTemp;
        }
    }

}
