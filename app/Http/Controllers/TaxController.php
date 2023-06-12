<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function tax_index()
    {
        $data = Tax::all();
        return  view('Tax.index', compact('data'));
    }

    public function tax_add()
    {
        return  view('Tax.add');
    }

    public function tax_insert(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:80|unique:tax,name,',
        ], [
            'name.unique' => 'Nama Pajak Sudah Tersedia',
            'name.max' => 'Judul Maksimal 80 Karakter',
        ]);


        $data = Tax::create([
            'name' => $request->name,
            'tax_amount' => $request->tax_amount,
            'type' => $request->type,
            'company_id' => 1,
        ]);

        // Logika sesuai dengan jenis pajak
        if ($request->jenis === 'gabungan') {
            $tarif1 = $request->tarif1; // Persentase pajak 1
            $tarif2 = $request->tarif2; // Persentase pajak 2
            $tarif3 = $request->tarif3; // Persentase pajak 3
            $nilai_barang = $request->nilai_barang; // Nilai barang

            // Menghitung jumlah pajak dari masing-masing pajak
            $jumlah_pajak1 = $nilai_barang * ($tarif1 / 100);
            $jumlah_pajak2 = $nilai_barang * ($tarif2 / 100);
            $jumlah_pajak3 = $nilai_barang * ($tarif3 / 100);

            // Menggabungkan semua pajak menjadi satu
            $total_pajak = $jumlah_pajak1 + $jumlah_pajak2 + $jumlah_pajak3;

            // Menghitung nilai barang setelah pajak
            $nilai_barang_setelah_pajak = $nilai_barang + $total_pajak;

            // Lakukan sesuatu dengan nilai barang setelah pajak
            // ...

        } elseif ($request->jenis === 'inklusif') {
            $tax_amount = $request->tax_amount; // Persentase pajak
            $nilai_barang = $request->nilai_barang; // Nilai barang termasuk pajak

            $jumlah_pajak = $nilai_barang * ($tax_amount / 100);

            $nilai_barang_setelah_pajak = $nilai_barang - $jumlah_pajak;
        } elseif ($request->jenis === 'normal') {
            $tax_amount = $request->tax_amount; // Persentase pajak
            $nilai_barang = $request->nilai_barang; // Nilai barang sebelum pajak
            $jumlah_barang = $request->jumlah_barang; // Jumlah barang

            // Menghitung total nilai barang sebelum pajak
            $total_nilai_barang = $nilai_barang * $jumlah_barang;

            // Menghitung jumlah pajak
            $jumlah_pajak = $total_nilai_barang * ($tax_amount / 100);

            // Menghitung nilai barang setelah pajak
            $nilai_barang_setelah_pajak = $total_nilai_barang - $jumlah_pajak;

            // Lakukan sesuatu dengan nilai barang setelah pajak
            // ...

        } elseif ($request->jenis === 'pemotongan') {
            $tarif = $request->tarif; // Persentase pajak
            $pendapatan = $request->pendapatan; // Pendapatan sebelum pemotongan pajak

            // Menghitung jumlah pajak yang akan dipotong dari pendapatan
            $jumlah_pajak = $pendapatan * ($tarif / 100);

            // Menghitung pendapatan setelah pemotongan pajak
            $pendapatan_setelah_pajak = $pendapatan - $jumlah_pajak;

            // Lakukan sesuatu dengan pendapatan setelah pemotongan pajak
            // ...


        }

        $data->save();

        return redirect()->route('tax')->withErrors($validatedData)->withInput();
    }

    public function tax_edit($id)
    {
        $data = Tax::find($id);
        return  view('Tax.edit', compact('data'));
    }

    public function tax_update(Request $request, $id)
    {
        $data = Tax::find($id);
        $validatedData = $request->validate([
            'name' => 'required|max:80|unique:tax,name,' . $data->id,
        ], [
            'name.unique' => 'Nama Pajak Sudah Tersedia',
            'name.max' => 'Judul Maksimal 80 Karakter',
        ]);

        $data->update([
            'name' => $request->name,
            'tax_amount' => $request->tax_amount,
            'type' => $request->type,
            'company_id' => 1,
        ]);
        
        // Logika sesuai dengan jenis pajak
        if ($request->jenis === 'gabungan') {
            $tarif1 = $request->tarif1; // Persentase pajak 1
            $tarif2 = $request->tarif2; // Persentase pajak 2
            $tarif3 = $request->tarif3; // Persentase pajak 3
            $nilai_barang = $request->nilai_barang; // Nilai barang

            // Menghitung jumlah pajak dari masing-masing pajak
            $jumlah_pajak1 = $nilai_barang * ($tarif1 / 100);
            $jumlah_pajak2 = $nilai_barang * ($tarif2 / 100);
            $jumlah_pajak3 = $nilai_barang * ($tarif3 / 100);

            // Menggabungkan semua pajak menjadi satu
            $total_pajak = $jumlah_pajak1 + $jumlah_pajak2 + $jumlah_pajak3;

            // Menghitung nilai barang setelah pajak
            $nilai_barang_setelah_pajak = $nilai_barang + $total_pajak;

            // Lakukan sesuatu dengan nilai barang setelah pajak
            // ...

        } elseif ($request->jenis === 'inklusif') {
            $tax_amount = $request->tax_amount; // Persentase pajak
            $nilai_barang = $request->nilai_barang; // Nilai barang termasuk pajak

            $jumlah_pajak = $nilai_barang * ($tax_amount / 100);

            $nilai_barang_setelah_pajak = $nilai_barang - $jumlah_pajak;
        } elseif ($request->jenis === 'normal') {
            $tax_amount = $request->tax_amount; // Persentase pajak
            $nilai_barang = $request->nilai_barang; // Nilai barang sebelum pajak
            $jumlah_barang = $request->jumlah_barang; // Jumlah barang

            // Menghitung total nilai barang sebelum pajak
            $total_nilai_barang = $nilai_barang * $jumlah_barang;

            // Menghitung jumlah pajak
            $jumlah_pajak = $total_nilai_barang * ($tax_amount / 100);

            // Menghitung nilai barang setelah pajak
            $nilai_barang_setelah_pajak = $total_nilai_barang - $jumlah_pajak;

            // Lakukan sesuatu dengan nilai barang setelah pajak
            // ...

        } elseif ($request->jenis === 'pemotongan') {
            $tarif = $request->tarif; // Persentase pajak
            $pendapatan = $request->pendapatan; // Pendapatan sebelum pemotongan pajak

            // Menghitung jumlah pajak yang akan dipotong dari pendapatan
            $jumlah_pajak = $pendapatan * ($tarif / 100);

            // Menghitung pendapatan setelah pemotongan pajak
            $pendapatan_setelah_pajak = $pendapatan - $jumlah_pajak;

            // Lakukan sesuatu dengan pendapatan setelah pemotongan pajak
            // ...


        }

        $data->save();
        return redirect()->route('tax')->withErrors($validatedData)->withInput();
    }

    public function tax_delete($id)
    {
        $data = Tax::find($id);
        $data->delete();
        return redirect()->route('tax');
    }
}
