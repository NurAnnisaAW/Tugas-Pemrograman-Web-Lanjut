<?php
require_once("koneksi.php");
class Library extends koneksi
{
//	public function __construct()
//	{
//		$this->koneksi = new koneksi();
//	}

	//------------------- J E N I S  -  S I M P A N A N ------------------------------
	public function addJenisSimpanan($arg)
	{
		$sql = "INSERT INTO jenis_simpanan(id_jenis_simpanan,nm_jenis_simpanan) 
                 VALUES ('$arg[0]','$arg[1]')";
		$query = $this->db->exec($sql);
		if(!$query)
		{
			return "failed";
		}
		else
		{
			return "success";
		}
	}

	public function editJenisSimpanan($id_jenis)
	{
		$sql = "SELECT * FROM jenis_simpanan WHERE id_jenis_simpanan='$id_jenis'";
		$query = $this->db->query($sql);
		return $query;
	}

	public function updateJenisSimpanan($id_jenis, $nm_jenis)
	{
		$sql = "UPDATE jenis_simpanan SET nm_jenis_simpanan='$nm_jenis'
				WHERE id_jenis_simpanan='$id_jenis'";
		$query = $this->db->query($sql);
		if(!$query)
		{
			return "failed";
		}
		else
		{
			return "success";
		}
	}

	public function showJenisSimpanan()
	{
		$sql = "SELECT * FROM jenis_simpanan";
		$query = $this->db->query($sql);
		return $query;
	}

	public function deleteJenisSimpanan($id_jenis)
	{
		$sql = "DELETE FROM jenis_simpanan WHERE id_jenis_simpanan='$id_jenis'";
		$query = $this->db->query($sql);
	}
	
	//----------------------------- S I M P A N A N -----------------------------

	public function addSimpanan($arg)
	{
		$sql = "INSERT INTO simpanan 
				(id_simpanan,
				id_anggota,
				id_jenis_simpanan,
				nm_simpanan,
				besar_simpanan,
				tgl_simpanan,
				ket,
				jumlah_simpanan) 
                VALUES ('$arg[0]',
                		'$arg[1]',
                		'$arg[2]',
                		'$arg[3]',
                		'$arg[4]',
                		'$arg[5]',
                		'$arg[6]',
                		'$arg[7]')";
		$query = $this->db->exec($sql);
		if(!$query)
		{
			return "failed";
		}
		else
		{
			return "success";
		}
	}

	public function editSimpanan($id_simpanan)
	{
		$sql = "SELECT * FROM simpanan WHERE id_simpanan='$id_simpanan'";
		$query = $this->db->query($sql);
		return $query;
	}

	public function updateSimpanan($id_simpanan, 
									$id_anggota, 
									$id_jenis, 
									$nm_simpanan, 
									$besar_simpanan, 
									$tgl_simpanan, 
									$ket, 
									$jumlah_simpanan)
	{
		$sql = "UPDATE simpanan 
				SET nm_simpanan 		='$nm_simpanan', 
					id_anggota			='$id_anggota', 
					id_jenis_simpanan 	='$id_jenis', 
					besar_simpanan 		='$besar_simpanan', 
					tgl_simpanan 		='$tgl_simpanan', 
					ket 				='$ket', 
					jumlah_simpanan		='$jumlah_simpanan'
				WHERE id_simpanan ='$id_simpanan'";
		$query = $this->db->query($sql);
		if(!$query)
		{
			return "failed";
		}
		else
		{
			return "success";
		}
	}

	public function showSimpanan()
	{
		$sql = "SELECT * FROM simpanan INNER JOIN anggota ON simpanan.id_anggota = anggota.id_anggota INNER JOIN jenis_simpanan ON simpanan.id_jenis_simpanan = jenis_simpanan.id_jenis_simpanan";
		$query = $this->db->query($sql);
		return $query;
	}

	public function deleteSimpanan($id_simpanan)
	{
		$sql = "DELETE FROM simpanan WHERE id_simpanan='$id_simpanan'";
		$query = $this->db->query($sql);
		return $query;
	}

	//----------------------------- A N G G O T A -------------------------------

	public function addAnggota($arg)
	{
		$sql = "INSERT INTO anggota (id_anggota,nm_anggota,gender,alamat,tmp_lahir,tgl_lahir,kota,no_telp) 
                 VALUES ('$arg[0]','$arg[1]','$arg[2]','$arg[3]','$arg[4]','$arg[5]','$arg[6]','$arg[7]')";
		$query = $this->db->exec($sql);
		if(!$query)
		{
			return "failed";
		}
		else
		{
			return "success";
		}
	}

	public function editAnggota($id_anggota)
	{
		$sql = "SELECT * FROM anggota WHERE id_anggota='$id_anggota'";
		$query = $this->db->query($sql);
		return $query;
	}

	public function updateAnggota($id_anggota, $nm_anggota, $gender, $alamat, $tmp_lahir, $tgl_lahir, $kota, $no_telp)
	{
		$sql = "UPDATE anggota SET nm_anggota='$nm_anggota', gender='$gender', alamat='$alamat', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', kota='$kota', no_telp='$no_telp'
				WHERE id_anggota='$id_anggota'";
		$query = $this->db->query($sql);
		if(!$query)
		{
			return "failed";
		}
		else
		{
			return "success";
		}
	}

	public function searchAnggota($id_anggota)
	{
		$sql = "SELECT * FROM anggota WHERE id_anggota = $id_anggota";
		$query = $this->db->query($sql);
		return $query;
	}

	public function showAnggota()
	{	
		$sql = "SELECT * FROM anggota";
		$query = $this->db->query($sql);
		return $query;                           
	}

	public function deleteAnggota($id_anggota)
	{
		$sql = "DELETE FROM anggota WHERE id_anggota='$id_anggota'";
		$query = $this->db->query($sql);
	}

	public function showSumAnggota()
	{
		$sql = "SELECT count(*) as jAnggota FROM Anggota";
		$query = $this->db->query($sql);
		return $query;
	}

	public function showSumJenisSimpanan()
	{
		$sql = "SELECT count(*) as jJenisSimpanan FROM jenis_simpanan";
		$query = $this->db->query($sql);
		return $query;
	}

	public function showSumSimpanan()
	{
		$sql = "SELECT count(*) as jSimpanan FROM simpanan";
		$query = $this->db->query($sql);
		return $query;
	}

}
?>