<?php

namespace App\Http\Controllers\Admin;

use App\Models\GeneralModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    protected $model;

    public function __construct(GeneralModel $model)
    {
        $this->model = $model;
        $this->model->setTableName('kategori');
    }

    public function index()
    {
        $data = $this->model->get();
        return view('admin.default', [
            'title' => 'Kategori',
            'content' => view('admin.page.kategori.kategori', [
                'title' => 'Kategori',
                'data' => $data
            ])
        ]);
    }
    public function edit($id)
    {

        $kategori = $this->model->byId($id);
        return view('admin.default', [
            'title' => 'Kategori',
            'content' => view('admin.page.kategori.edit', [
                'title' => 'Kategori',
                'kategori' => $kategori
            ])
        ]);
    }
    public function create()
    {
        return view('admin.default', [
            'title' => 'Kategori',
            'content' => view('admin.page.kategori.tambah', [
                'title' => 'Kategori'
            ])
        ]);
    }


    public function save(Request $request, $id = null)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'nama' => 'required',

        ]);

        $data = [
            'nama' => $request->nama,
        ];
        if ($id != null && !empty($id)) {
            $this->model->create($data, $id);
        } else {
            $this->model->create($data);
        }

        return redirect('/adminKategori')->with('success', 'Product saved successfully');
    }
    public function destroy($id)
    {
        $this->model->del($id);
        return redirect('/adminKategori')->with('success', 'Product deleted successfully');
    }
}
