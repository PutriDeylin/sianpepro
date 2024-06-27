<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mendapatkan pengguna yang sedang login
        $loggedInUser = auth()->user();

        // Periksa apakah pengguna memiliki peran "admin"
        if ($loggedInUser->role_id == "admin") {
            // Jika peran pengguna adalah "admin", tampilkan semua pesanan
            $order = Order::all();
        } else {
            // Jika peran pengguna bukan "admin", tampilkan hanya pesanan yang dimiliki oleh pengguna yang login
            $order = Order::where('user_id', $loggedInUser->id)->get();
        }

        // Mengirim data pesanan ke view
        return view('Order.index', compact('order'));
    }

    public function indexdetail()
    {
        // Mendapatkan pengguna yang sedang login
        $loggedInUser = auth()->user();

        // Periksa apakah pengguna memiliki peran "admin"
        if ($loggedInUser->role_id == "admin") {
            // Jika peran pengguna adalah "admin", tampilkan semua detail order
            $detail = DetailOrder::orderBy('total_harga', 'desc')->get();
        } else {
            // Jika peran pengguna bukan "admin", tampilkan hanya detail order yang dimiliki oleh pengguna yang login
            $detail = DetailOrder::where('user_id', $loggedInUser->id)->orderBy('total_harga', 'desc')->get();
        }

        // Mengirim data detail order ke view
        return view('Order.detail_index', compact('detail'))->with('success', 'Detail Order Berhasil Ditambahkan');
    }

    public function home()
    {

        $product = Product::all();

        return view('after_login')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {
        $user = User::all();
        $auth = auth()->user();

        if (auth()->user()?->id !== null && $auth?->role !== 'owner') {
            $user = $user->filter(function ($item) {
                return $item->id === auth()->user()->id;
            });
        }
        $produk = Product::find($id);
        $order = Order::all();

        return view('Order.create', ['auth' => $auth, 'order' => $order], compact('produk'));
    }


    public function detail($id)
    {
        $user = User::all();
        $auth = auth()->user();

        if (auth()->user()?->id !== null && $auth?->role !== 'owner') {
            $user = $user->filter(function ($item) {
                return $item->id === auth()->user()->id;
            });
        }
        $produk = Product::find($id);
        $order = Order::find($id);

        return view('Order.create_order', ['auth' => $auth, 'order' => $order, 'produk' => $produk], compact('produk'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create([
            'product_id' => $request->product_id,
            'harga' => $request->harga,
            'user_id' => $request->user_id,
            'tanggal_order' => $request->tanggal_order,
            'status_order' => $request->status_order,
        ]);

        return redirect()->route('Order-Index')->with('success', 'Order Berhasil Ditambahkan');
    }

    public function store_detail(Request $request)
    {
        DetailOrder::create([
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'charge' => $request->charge,
            'total_harga' => $request->total_harga,
        ]);

        return redirect()->route('Order-Detail-Index')->with('success', 'Order Berhasil Ditambahkan');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);

        return redirect()->route('Order-Index')->with('success', 'Order Berhasil Dihapus');
    }
}
