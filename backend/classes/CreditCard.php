<?php
class CreditCard {
    private $cardNumber;
    private $expiry;
    private $cvv;

    // public function __construct($_cardNumber, $_expiry, $_cvv)
    // {
    //     $this->cardNumber = $_cardNumber;
    //     $this->expiry = $_expiry;
    //     $this->cvv = $_cvv;
    // }

    public function setCardNumber($_cardNumber) {
        if (strlen($_cardNumber) != 16 || !is_numeric($_cardNumber)) {
            throw new Exception("Numero carta non valido\n");
        } else $this->cardNumber = $_cardNumber;
    }

    public function setExpiry($_month, $_year) {
        if (!is_numeric($_month) || !is_numeric($_year) || $_month > 31) {
            throw new Exception("Data di scadenza non valida\n");
        } else {
            $_expiry = "{$_month}-20{$_year}";
            if ($_expiry <= date('m-Y')) {
                throw new Exception("Carta scaduta\n");
            } else $this->expiry = $_expiry;
        }
    }

    public function setCvv($_cvv) {
        if (strlen($_cvv) != 3 || !is_numeric($_cvv)) {
            throw new Exception("CVV non valido\n");
        } else $this->cvv = $_cvv;
    }
}