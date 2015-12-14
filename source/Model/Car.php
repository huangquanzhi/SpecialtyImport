<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Car
 *
 * @author Jackie
 */
class Car {
    
    private $CarSerial;
    private $CarMake;
    private $CarModel;
    private $CarYear;
    private $CarExtColour;
    private $CarTrim;
    private $CarEngine;
    private $BaseListPrice;
    private $PurchInvNo;
    private $PurchCost;
    
    function __construct($CarSerial, $CarMake, $CarModel, $CarYear, $CarExtColour) {
        $this->CarSerial = $CarSerial;
        $this->CarMake = $CarMake;
        $this->CarModel = $CarModel;
        $this->CarYear = $CarYear;
        $this->CarExtColour = $CarExtColour;
    }

    function getCarSerial() {
        return $this->CarSerial;
    }

    function getCarMake() {
        return $this->CarMake;
    }

    function getCarModel() {
        return $this->CarModel;
    }

    function getCarYear() {
        return $this->CarYear;
    }

    function getCarExtColour() {
        return $this->CarExtColour;
    }

    function getCarTrim() {
        return $this->CarTrim;
    }

    function getCarEngine() {
        return $this->CarEngine;
    }

    function getBaseListPrice() {
        return $this->BaseListPrice;
    }

    function getPurchInvNo() {
        return $this->PurchInvNo;
    }

    function getPurchCost() {
        return $this->PurchCost;
    }

    function setCarSerial($CarSerial) {
        $this->CarSerial = $CarSerial;
        return $this;
    }

    function setCarMake($CarMake) {
        $this->CarMake = $CarMake;
        return $this;
    }

    function setCarModel($CarModel) {
        $this->CarModel = $CarModel;
        return $this;
    }

    function setCarYear($CarYear) {
        $this->CarYear = $CarYear;
        return $this;
    }

    function setCarExtColour($CarExtColour) {
        $this->CarExtColour = $CarExtColour;
        return $this;
    }

    function setCarTrim($CarTrim) {
        $this->CarTrim = $CarTrim;
        return $this;
    }

    function setCarEngine($CarEngine) {
        $this->CarEngine = $CarEngine;
        return $this;
    }

    function setBaseListPrice($BaseListPrice) {
        $this->BaseListPrice = $BaseListPrice;
        return $this;
    }

    function setPurchInvNo($PurchInvNo) {
        $this->PurchInvNo = $PurchInvNo;
        return $this;
    }

    function setPurchCost($PurchCost) {
        $this->PurchCost = $PurchCost;
        return $this;
    }


    
}
