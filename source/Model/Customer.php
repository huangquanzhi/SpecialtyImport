<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author Jackie
 */
class Customer {
    
    private $CustName;
    private $CustAddress;
    private $CustCity;
    private $CustProvince;
    private $CustPostal;
    private $CustHomePhone;
    private $SalesMan;

    
    function __construct($CustName, $CustAddress, $CustCity, $CustProvince, $CustPostal, $CustHomePhone, $SalesMan) {
        $this->CustName = $CustName;
        $this->CustAddress = $CustAddress;
        $this->CustCity = $CustCity;
        $this->CustProvince = $CustProvince;
        $this->CustPostal = $CustPostal;
        $this->CustHomePhone = $CustHomePhone;
        $this->SalesMan = $SalesMan;
    }
    
    function getSalesMan() {
        return $this->SalesMan;
    }

    function setSalesMan($SalesMan) {
        $this->SalesMan = $SalesMan;
        return $this;
    }
    
    function getCustName() {
        return $this->CustName;
    }

    function getCustAddress() {
        return $this->CustAddress;
    }

    function getCustCity() {
        return $this->CustCity;
    }

    function getCustProvince() {
        return $this->CustProvince;
    }

    function getCustPostal() {
        return $this->CustPostal;
    }

    function getCustHomePhone() {
        return $this->CustHomePhone;
    }

    function setCustName($CustName) {
        $this->CustName = $CustName;
        return $this;
    }

    function setCustAddress($CustAddress) {
        $this->CustAddress = $CustAddress;
        return $this;
    }

    function setCustCity($CustCity) {
        $this->CustCity = $CustCity;
        return $this;
    }

    function setCustProvince($CustProvince) {
        $this->CustProvince = $CustProvince;
        return $this;
    }

    function setCustPostal($CustPostal) {
        $this->CustPostal = $CustPostal;
        return $this;
    }

    function setCustHomePhone($CustHomePhone) {
        $this->CustHomePhone = $CustHomePhone;
        return $this;
    }



    
}
