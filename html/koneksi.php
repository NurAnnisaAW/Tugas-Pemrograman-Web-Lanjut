<?php 
	class koneksi
	{
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $namadb = "koperasi";
		protected $db;
		function __construct()
		{
			try
			{
				$this->db = new PDO("mysql:host={$this->host};dbname={$this->namadb}",$this->user,$this->pass);
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $exception)
			{
				die("Connection error: ".$exception->getMessage());
			}
		}
	}
?>
