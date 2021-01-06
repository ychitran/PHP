<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vnd = $_POST["usd"] * 23000;
    $usd = $_POST["usd"];

    class Convert
    {
        public $vnd;
        public $usd;

        public function __construct($vnd, $usd)
        {
            $this->usd = $usd;
            $this->vnd = $vnd;
        }

        public function convert()
        {
            if (empty($this->usd)) {
                return "Vui lòng nhập giá trị";
            } else if ($this->usd == 0) {
                return "Vui lòng nhập số lớn hơn 0";
            } else if ($this->usd < 0) {
                return "Vui lòng nhập giá trị lớn hơn 0";
            } else if ($this->usd > 0) {
                return $this->usd . " USD chuyển đổi được " .  $this->vnd . " VND";
            }
        }
    }
}



$objConvert = new Convert($vnd, $usd);
echo $objConvert->convert();
