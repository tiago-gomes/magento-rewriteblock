<?php

class Inkatia_Rewriteblock_Block_Example extends Mage_Customer_Block_Account_Dashboard_Hello
{

    public function getCustomerName()
    {
        // return Mage::getSingleton('customer/session')->getCustomer()->getName();
        Mage::log("Mage_Customer_Block_Account_Dashboard_Hello");
        return "dummy text!";
    }

}