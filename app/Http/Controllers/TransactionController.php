<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Production;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($status)
    {
        // Mendapatkan pengguna yang sedang login
        $loggedInUser = auth()->user();

        // Periksa apakah pengguna memiliki peran "admin"
        if ($loggedInUser->role_id == "admin") {
            // Jika peran pengguna adalah "admin", tampilkan semua detail order
            $transaksi = Transaction::where('status_produksi', $status)->get();
        } else {
            // Jika peran pengguna bukan "admin", tampilkan hanya detail order yang dimiliki oleh pengguna yang login
            $transaksi = Transaction::where('status_produksi', $status)
                ->where('user_id', $loggedInUser->id)
                ->get();
        }



        // Mengirim data detail order ke view
        return view('Transaksi.index', compact('transaksi'))->with('success', 'Transaksi Berhasil Ditambahkan');
    }
    public function all()
    {
        // Mendapatkan pengguna yang sedang login
        $loggedInUser = auth()->user();

        // Periksa apakah pengguna memiliki peran "admin"
        if ($loggedInUser->role_id == "admin") {
            // Jika peran pengguna adalah "admin", tampilkan semua pesanan
            $transaksi = Transaction::orderBy('total_harga', 'desc')->get();
        } else {
            // Jika peran pengguna bukan "admin", tampilkan hanya pesanan yang dimiliki oleh pengguna yang login
            $transaksi = Transaction::where('user_id', $loggedInUser->id)->get();
        }


        // Mengirim data detail order ke view
        return view('Transaksi.index', compact('transaksi'))->with('success', 'Transaksi Berhasil Ditambahkan');
    }

    public function indextransaksi($status_transaksi)
    {
        // Mendapatkan pengguna yang sedang login
        $loggedInUser = auth()->user();

        // Periksa apakah pengguna memiliki peran "admin"
        if ($loggedInUser->role_id == "admin") {
            // Jika peran pengguna adalah "admin", tampilkan semua detail order
            $transaksi = Transaction::where('status_transaksi', $status_transaksi)->get();
        } else {
            // Jika peran pengguna bukan "admin", tampilkan hanya detail order yang dimiliki oleh pengguna yang login
            $transaksi = Transaction::where('status_transaksi', $status_transaksi)
                ->where('user_id', $loggedInUser->id)
                ->get();
        }



        // Mengirim data detail order ke view
        return view('Transaksi.indextransaksi', compact('transaksi'))->with('success', 'Transaksi Berhasil Ditambahkan');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $transaksi = [

            'no_resi' => $request->no_resi,
            'user_id' => $request->user_id,

            'product_id' => $request->product_id,

            'harga' => $request->harga,

            'jumlah' => $request->jumlah,

            'charge' => $request->charge,

            'total_harga' => $request->total_harga,

            'bayar' => $request->bayar,

            'sisa_bayar' => $request->sisa_bayar,

            'tanggal_transaksi' => $request->tanggal_transaksi,
            'tanggal_selesai' => $request->tanggal_selesai,
            'bukti_bayar' => $request->bukti_bayar,

            'status_produksi' => $request->status_produksi,

            'status_transaksi' => $request->status_transaksi,

        ];


        $transaksi = Transaction::create($transaksi);



        if ($request->hasFile('bukti_bayar')) {

            $request->file('bukti_bayar')->move('foto/', $request->file('bukti_bayar')->getClientOriginalName());

            $transaksi->bukti_bayar = $request->file('bukti_bayar')->getClientOriginalName();

            $transaksi->save();
        }


        return redirect('/Transactions/All')->with('success', 'Data berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatestatus(Request $request, $id)
    {

        $transaksi = Transaction::find($id);
        $transaksi->status_produksi = $request->status_produksi;
        $transaksi->status_transaksi = $request->status_transaksi;
        $transaksi->save();
        return redirect('/Transactions/All')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaction::destroy($id);
        return redirect()->route('Transactions-all')->with('success', 'Data Berhasil Dihapus');
    }
}
