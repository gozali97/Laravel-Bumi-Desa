<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'                =>  'required',
            'nama_bumdes'              =>  'required',
            'status'         =>  'required',
            'foto'                =>  'required',
            'harga'                =>  'required',
        ]);


        // dd($request);
        $input = $request->all();
        if ($file = $request->file('foto')) {
            $destinationFile = 'assets/home/img/produk';
            $profileFile =  $file->getClientOriginalName();
            $file->move($destinationFile, $profileFile);
            $input['foto'] = "$profileFile";
        }

        Produk::create($input);
        return redirect()->route('admin.produk')->with('success', 'You have successfully created a Produk.');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.edit', [
            'produk' => $produk,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama'                =>  'required',
            'nama_bumdes'              =>  'required',
            'status'         =>  'required',
            'harga'                =>  'required',
        ]);

        $produk = Produk::find($request->id);
        if ($produk) {
            $produk->nama = $request->nama;
            $produk->nama_bumdes = $request->nama_bumdes;
            $produk->status = $request->status;
            if ($request->hasFile('foto')) {
                $this->deletNewslatter($produk);
                if ($file = $request->file('fioto')) {
                    $destinationFile = 'assets/home/img/produk';
                    $profile = $file->getClientOriginalName() . microtime();
                    $file->move($destinationFile, $profile);
                    $produk['foto'] = "$profile";
                }
            }
            $produk->save();
            return redirect()->route('admin.produk')->with('success', 'You have successfully update a Produk.');
        }
        return back()->withError('Invalid archive.');
    }

    public function destroy(Request $request)
    {
        $produk = Produk::find($request->id);
        if ($produk) {
            $this->deletProduk($produk);
            $produk->delete();
            return redirect()->route('admin.produk')->with('success', 'You have successfully delete a Produk.');
        }
        return back()->withError('Invalid produk.');
    }

    private function deletProduk($produk)
    {
        if ($produk->file) {
            // $imgDestroy = 'public/images/banner/'.$banner->image;
            $fileDestroy = 'assets/home/img/produk' . $produk->file;
            if (File::exists($fileDestroy)) {
                File::delete($fileDestroy);
            }
        }
    }
}
