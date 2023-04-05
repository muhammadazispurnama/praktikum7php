<?php




class produk {
    public $nama = 'ini adalah nama',
           $jenis = 'ini jenis',
           $harga = 9999;


    public function __construct($nama, $jenis, $harga){
       $this->nama = $nama;
       $this->jenis = $jenis;
       $this->harga = $harga;
    }


    public function printHarga(){
        return $this->harga;

    }


}

// $produk1 = new produk();
// $produk1->nama='hoodie';
// $produk1->jenis= 'jaket';

// var_dump($produk1);






$produk2 =new produk("baju PDI ", "kaos", 13000);




echo "produk 2 : $produk2->nama, $produk2->jenis";
echo "<br>";
echo "harga :".$produk2->printHarga();

?>