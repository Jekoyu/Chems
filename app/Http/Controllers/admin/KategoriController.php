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
        return view('admin.default', [
            'title' => 'Kategori',
            'content' => view('admin.page.kategori', [
                'title' => 'Kategori',
            ])
        ]);
    }
    public function getProduct(Request $request)
    {
        if ($request->ajax()) {
            $column = ['id', 'nama'];
            $query = $this->model->select($column);
            return DataTables::eloquent($query)
                ->addColumn('no', function () {
                    static $index = 1;
                    return $index++;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group" role="group">';
                    $btn .= '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>';
                    $btn .= ' <span style="margin-left: 5px;"></span>';
                    $btn .= '<form action="' . route('delProduct', $row->id) . '" method="POST">';
                    $btn .= '<input type="hidden" name="_method" value="DELETE">';
                    $btn .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                    $btn .= '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure?\')">Delete</button>';
                    $btn .= '</form>';
                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['no', 'action'])
                ->make(true);
        }

        return abort(404);
    }

    public function save(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'nama' => 'required',

        ]);

        // Simpan gambar
        if ($request->gambar === null) {
            $gambarPath = null;
        } else {
            $gambarPath = $request->file('gambar')->store('public/images');
        }
        // Buat array data untuk disimpan ke dalam database
        $data = [
            'nama' => $request->nama,

        ];
        if ($request->has('id')) {
            $this->model->create($data, $request->id);
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
