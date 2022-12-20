<?php

namespace App\Http\Controllers;
use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function data()
    {
        // variabel laptops untuk menampilkan data laptop (model) semuanya (all)
        $laptops = Laptop::all();
        // menampilkan tampilan data dan menyambungkan variabel laptops (compact('laptops'))
        return view('data', compact('laptops'));
    }


    public function create()
    {
        $laptops = Laptop::all();
        return view('form', compact('laptops'));
    }

    public function done(Request $request, $id)
    {
        $laptop = Laptop::where('id', $id)->update([
            'return_date' => \Carbon\Carbon::now()
        ]);

        return redirect()->back()->with('done', 'a');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'rayon' => 'required',
            'rombel' => 'required',
            'purposes' => 'required',
            'date' => 'required',
            'teacher' => 'required'
        ]);

        Laptop::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'purposes' => $request->purposes,
            'date' => $request->date,
            'teacher' => $request->teacher
        ]);

        return redirect('/data');
    }


    public function show(Laptop $laptops)
    {
        //
    }


    public function edit(Laptop $laptops)
    {
        //
    }


    public function update(Request $request, Laptop $laptops)
    {
        //
    }


    public function destroy($id)
    {
        Laptop::where('id', $id)->delete();
        return redirect()->back();
    }
}
