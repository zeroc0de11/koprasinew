<?php 

/**
* 
*/
class Database
{
	public $koneksi;

	function __construct()
	{
		$this->koneksi = NULL;
		try{
			$this->koneksi = new PDO("mysql:host=localhost;dbname=komprasi","root","kumahaaing91");
		} catch (PDOException $e){
			echo "Koneksi Gagal :".$e->getMessage();

		}
		return $this->koneksi;
	}
}
?>