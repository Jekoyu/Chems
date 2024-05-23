<?php

namespace App\Http\Controllers\Admin;

use App\Models\GeneralModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductController extends Controller
{

    protected $model;

    public function __construct(GeneralModel $model)
    {
        $this->model = $model;
        $this->model->setTableName('produk');
    }


    public function index()
    {
        $data = $this->model->get();
        return view('admin.default', [
            'title' => 'Produk',
            'content' => view('admin.page.produk.index', [
                'title' => 'Produk',
                'data' => $data
            ])
        ]);
    }
    public function edit($id)
    {

        $produk = $this->model->byId($id);
        return view('admin.default', [
            'title' => 'Produk',
            'content' => view('admin.page.produk.edit', [
                'title' => 'Produk',
                'produk' => $produk
            ])
        ]);
    }
    public function create()
    {
        return view('admin.default', [
            'title' => 'Produk',
            'content' => view('admin.page.produk.tambah', [
                'title' => 'Produk'
            ])
        ]);
    }


    public function save(Request $request, $id = null)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ];
        if ($id != null && !empty($id)) {
            $this->model->create($data, $id);
        } else {
            $this->model->create($data);
        }

        return redirect('/product')->with('success', 'Product saved successfully');
    }
    public function destroy($id)
    {
        $this->model->del($id);
        return redirect('/product')->with('success', 'Product deleted successfully');
    }
}
