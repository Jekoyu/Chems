<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GeneralModel extends Model
{
    protected $table;

    public function setTableName($table)
    {
        $this->table = $table;
    }

    public function get()
    {
        return DB::table($this->table)->get();
    }
    public function byId($id)
    {
        return DB::table($this->table)->where('id', $id)->first();
    }
    public function create(array $data, $id = null)
    {
        if ($id === null) {
            return DB::table($this->table)->insert($data);
        } else {
            return DB::table($this->table)->where('id', $id)->update($data);
        }
    }

    public function del($id)
    {
        return DB::table($this->table)->where('id', $id)->delete();
    }
}
