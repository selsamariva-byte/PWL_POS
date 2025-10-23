<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;
use App\Models\KategoriModel;
use App\Models\SupplierModel;
use Yajra\DataTables\Facades\DataTables;

class BarangController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Daftar Barang',
            'list' => ['Home', 'Barang']
        ];

        $page = (object)[
            'title' => 'Data Barang'
        ];

        $activeMenu = 'barang';

        return view('barang.index', compact('breadcrumb', 'page', 'activeMenu'));
    }

    public function list()
    {
        // Gunakan BarangModel, bukan App\Models\Barang
        $data = BarangModel::with(['kategori', 'supplier'])->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('kategori', fn($row) => $row->kategori->kategori_nama ?? '-')
            ->addColumn('supplier', fn($row) => $row->supplier->supplier_nama ?? '-')
            ->addColumn('harga', fn($row) => 'Rp ' . number_format($row->harga_jual, 0, ',', '.'))
            ->addColumn('aksi', function ($row) {
                $editUrl = url('barang/' . $row->barang_id . '/edit');
                $deleteUrl = url('barang/' . $row->barang_id);
                $csrf = csrf_field();
                $method = method_field('DELETE');
                return <<<HTML
                    <a href="$editUrl" class="btn btn-sm btn-warning">Edit</a>
                    <form action="$deleteUrl" method="POST" style="display:inline;">
                        $csrf
                        $method
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                HTML;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create()
    {
        $breadcrumb = (object)[
            'title' => 'Tambah Barang',
            'list' => ['Home', 'Barang', 'Tambah']
        ];

        $page = (object)[
            'title' => 'Tambah Barang'
        ];

        $activeMenu = 'barang';
        $kategori = KategoriModel::all();
        $supplier = SupplierModel::all();

        return view('barang.create', compact('breadcrumb', 'page', 'activeMenu', 'kategori', 'supplier'));
    }

    public function store(Request $request)
    {
        // Barang_id tidak perlu divalidasi, karena biasanya auto increment
        $request->validate([
            'barang_kode'   => 'required|unique:m_barang,barang_kode',
            'barang_nama'   => 'required',
            'harga_beli'    => 'required|numeric',
            'harga_jual'    => 'required|numeric',
            'kategori_id'   => 'required|exists:m_kategori,kategori_id',
            'supplier_id'   => 'required|exists:m_supplier,supplier_id',
        ]);

        BarangModel::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $barang = BarangModel::findOrFail($id);
        $kategori = KategoriModel::all();
        $supplier = SupplierModel::all();

        $breadcrumb = (object)[
            'title' => 'Edit Barang',
            'list' => ['Home', 'Barang', 'Edit']
        ];

        $page = (object)[
            'title' => 'Edit Barang'
        ];

        $activeMenu = 'barang';

        return view('barang.edit', compact('breadcrumb', 'page', 'activeMenu', 'barang', 'kategori', 'supplier'));
    }

    public function update(Request $request, $id)
    {
        $barang = BarangModel::findOrFail($id);

        $request->validate([
            // barang_id tidak perlu diinput manual
            'barang_kode' => 'required|unique:m_barang,barang_kode,' . $barang->barang_id . ',barang_id',
            'barang_nama' => 'required',
            'harga_beli'  => 'required|numeric',
            'harga_jual'  => 'required|numeric',
            'kategori_id' => 'required|exists:m_kategori,kategori_id',
            'supplier_id' => 'required|exists:m_supplier,supplier_id',
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $barang = BarangModel::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
