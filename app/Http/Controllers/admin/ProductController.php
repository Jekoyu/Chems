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
        return view('admin.default', [
            'title' => 'Produk',
            'content' => view('admin.page.produk.product', [
                'title' => 'Produk',
            ])
        ]);
    }
    public function getProduct(Request $request)
    {
        if ($request->ajax()) {


            $column = ['id', 'nama', 'harga', 'stok', 'deskripsi'];

            $query = $this->model->select($column);

            return DataTables::eloquent($query)
                ->addColumn('no', function () {
                    static $index = 1;
                    return $index++;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group" role="group">';
                $btn .= '<a href="' . route('addProduct') . '" class="edit btn btn-success btn-sm">Edit</a>';
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
    public function add()
    {
        return view('admin.default', [
            'title' => 'Add Produk',
            'content' => view('admin.page.produk.form', [
                'title' => 'Add Produk',
            ])
        ]);
    }

    public function save(Request $request): RedirectResponse
    {
        // Validasi data jika diperlukan
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif', // Validasi untuk gambar
        ]);

        // echo $request->gambar;

        
        // Simpan gambar
        if ($request->gambar === null) {
            $gambarPath = null;
        } else {
            $gambarPath = $request->file('gambar');
            $gambarPath->storeAs('public/gambar', $gambarPath->hashName());
        }
        // Buat array data untuk disimpan ke dalam database
        $data = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
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
