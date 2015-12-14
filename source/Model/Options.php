<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Options
 *
 * @author Jackie
 */
class Options {
    
    private $OptionCode;
    private $OptionDesc;
    private $OptionListPrice;
    
    function __construct($OptionCode, $OptionDesc, $OptionListPrice) {
        $this->OptionCode = $OptionCode;
        $this->OptionDesc = $OptionDesc;
        $this->OptionListPrice = $OptionListPrice;
    }

    function getOptionCode() {
        return $this->OptionCode;
    }

    function getOptionDesc() {
        return $this->OptionDesc;
    }

    function getOptionListPrice() {
        return $this->OptionListPrice;
    }

    function setOptionCode($OptionCode) {
        $this->OptionCode = $OptionCode;
        return $this;
    }

    function setOptionDesc($OptionDesc) {
        $this->OptionDesc = $OptionDesc;
        return $this;
    }

    function setOptionListPrice($OptionListPrice) {
        $this->OptionListPrice = $OptionListPrice;
        return $this;
    }


    
}
