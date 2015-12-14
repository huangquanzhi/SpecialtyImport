<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SalesInvoice
 *
 * @author Jackie
 */
class SalesInvoice {

    private $InvNo;
    private $InvDate;
    private $Customer; //Object of Customer
    private $MainCar; //Object of Car
    private $Insurance; //Array of Insurance
    private $Options; //Object of Options
    private $TradeCars; //Array of Trade In Cars
    private $TotalPrice;    //MainCar Price + Options Price
    private $TotalTradeAllowance;   //Total Trade In Car Allowance
    private $Net; //Total + Trade
    private $Taxes; //Net * 0.15
    private $TotalPayable;

    function __construct($InvNo, $InvDate, $Customer, $MainCar, $Insurance, $Options, $TradeCars, $TotalPrice, $TotalTradeAllowance, $Net, $Taxes, $TotalPayable) {
        $this->InvNo = $InvNo;
        $this->InvDate = $InvDate;
        $this->Customer = $Customer;
        $this->MainCar = $MainCar;
        $this->Insurance = $Insurance;
        $this->Options = $Options;
        $this->TradeCars = $TradeCars;
        $this->TotalPrice = $TotalPrice;
        $this->TotalTradeAllowance = $TotalTradeAllowance;
        $this->Net = $Net;
        $this->Taxes = $Taxes;
        $this->TotalPayable = $TotalPayable;
    }

    function getInvNo() {
        return $this->InvNo;
    }

    function getInvDate() {
        return $this->InvDate;
    }

    function getCustomer() {
        return $this->Customer;
    }

    function getMainCar() {
        return $this->MainCar;
    }

    function getInsurance() {
        return $this->Insurance;
    }

    function getOptions() {
        return $this->Options;
    }

    function getTradeCars() {
        return $this->TradeCars;
    }

    function getTotalPrice() {
        return $this->TotalPrice;
    }

    function getTotalTradeAllowance() {
        return $this->TotalTradeAllowance;
    }

    function getNet() {
        return $this->Net;
    }

    function getTaxes() {
        return $this->Taxes;
    }

    function getTotalPayable() {
        return $this->TotalPayable;
    }

    function setInvNo($InvNo) {
        $this->InvNo = $InvNo;
        return $this;
    }

    function setInvDate($InvDate) {
        $this->InvDate = $InvDate;
        return $this;
    }

    function setCustomer($Customer) {
        $this->Customer = $Customer;
        return $this;
    }

    function setMainCar($MainCar) {
        $this->MainCar = $MainCar;
        return $this;
    }

    function setInsurance($Insurance) {
        $this->Insurance = $Insurance;
        return $this;
    }

    function setOptions($Options) {
        $this->Options = $Options;
        return $this;
    }

    function setTradeCars($TradeCars) {
        $this->TradeCars = $TradeCars;
        return $this;
    }

    function setTotalPrice($TotalPrice) {
        $this->TotalPrice = $TotalPrice;
        return $this;
    }

    function setTotalTradeAllowance($TotalTradeAllowance) {
        $this->TotalTradeAllowance = $TotalTradeAllowance;
        return $this;
    }

    function setNet($Net) {
        $this->Net = $Net;
        return $this;
    }

    function setTaxes($Taxes) {
        $this->Taxes = $Taxes;
        return $this;
    }

    function setTotalPayable($TotalPayable) {
        $this->TotalPayable = $TotalPayable;
        return $this;
    }

}
