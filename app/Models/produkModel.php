<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id';

    protected $allowedFields = ['sampul', 'nama_produk', 'deskripsi', 'jumlah_suka', 'kota_asal', 'harga'];

    protected $useTimestamps = true;

    public function cari($id)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
