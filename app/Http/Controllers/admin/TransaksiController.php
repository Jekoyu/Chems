<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralModel;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    protected $model;

    public function __construct(GeneralModel $model)
    {
        $this->model = $model;
        $this->model->setTableName('transaksi');
    }


    public function index()
    {
        $data = $this->model->join('transaksi', 'produk', 'transaksi.id_produk', 'produk.id', [
            'transaksi.id',
            'transaksi.id_user',
            'produk.nama as nama_produk',
            'transaksi.total_harga',
            'transaksi.status'
        ]);
        return view('admin.default', [
            'title' => 'Transaksi',
            'content' => view('admin.page.transaksi.index', [
                'title' => 'Transaksi',
                'data' => $data
            ])
        ]);
    }
    public function edit($id)
    {

        $transaksi = $this->model->byId($id);
        return view('admin.default', [
            'title' => 'Transaksi',
            'content' => view('admin.page.transaksi.edit', [
                'title' => 'Transaksi',
                'transaksi' => $transaksi
            ])
        ]);
    }
    public function create()
    {
        return view('admin.default', [
            'title' => 'Transaksi',
            'content' => view('admin.page.transaksi.tambah', [
                'title' => 'Transaksi'
            ])
        ]);
    }


    public function save(Request $request, $id = null)
    {
        // Validasi data jika diperlukan
        echo $request;
        $request->validate([
            'id_user' => 'required',
            'id_produk' => 'required',
            'total_harga' => 'required',
            'status' => 'required',
        ]);

        $data = [
            'id_user' => $request->id_user,
            'id_produk' => $request->id_produk,
            'total_harga' => $request->total_harga,
            'status' => $request->status,
        ];
        if ($id != null && !empty($id)) {
            $this->model->create($data, $id);
        } else {
            $this->model->create($data);
        }

        return redirect('/adminTransaksi')->with('success', 'Product saved successfully');
    }
    public function destroy($id)
    {
        $this->model->del($id);
        return redirect('/adminTransaksi')->with('success', 'Product deleted successfully');
    }
}
