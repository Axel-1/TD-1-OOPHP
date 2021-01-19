<?php


class product
{
    static private $productCount;
    static private $maxPrice = 0;
    public $price;
    private $name;
    private $vatCode;
    private $vat;
    private $qty;

    static public function getObjNbr()
    {
        return self::$productCount;
    }

    static public function getMaxPrice()
    {
        return self::$maxPrice;
    }

    public function constructor1($newName, $newVat, $newPrice, $newQty)
    {
        $this->name = $newName;
        $this->price = floatval($newPrice);
        $this->qty = $newQty;

        switch (floatval($newVat)) {
            case 19.6 :
                $this->vatCode = "h";
                $this->vat = 1.196;
                break;
            case 5.5 :
                $this->vatCode = "b";
                $this->vat = 1.55;
                break;
            default :
                $this->vatCode = "x";
                $this->vat = 0;
                break;
        }
        self::$productCount++;
        if ($this->price > self::$maxPrice) {
            self::$maxPrice = $this->price;
        }
    }

    public function constructor2($newName)
    {
        $this->name = $newName;
        self::$productCount++;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function addQty($newQty)
    {
        $this->qty = $this->qty + $newQty;
    }

    public function rmQty($newQty)
    {
        $this->qty = $this->qty - $newQty;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($newPrice)
    {
        $this->price = $newPrice;
    }

    public function printAll()
    {
        print($this->name . "\n");
        switch ($this->vatCode) {
            case "h" :
                print("Taux de TVA 19,6%\n");
                break;
            case "b" :
                print("Taux de TVA 5,5%\n");
                break;
            default :
                print("Taux de TVA non déterminé\n");
                break;
        }

        if ($this->price == 0) {
            print("Prix d'achat HT non déterminé\n");
        } else {
            print("Prix d'achat HT : " . $this->price . "€\n");
        }

        if ($this->price == 0) {
            print("Prix d'achat TTC non déterminé\n");
        } elseif ($this->vat == 0) {
            print("Prix d'achat TTC : N/A\n");
        } else {
            print("Prix d'achat TTC : " . $this->price * $this->vat . "€\n");
        }

        if ($this->qty == 0) {
            print("Pas de stock\n");
        } else {
            print("Qté en stock : " . $this->qty . "\n");
        }
    }
}