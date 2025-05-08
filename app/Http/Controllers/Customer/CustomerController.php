<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Data mockup customer (seolah-olah ini dari database)
    private $customers = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '08123456789',
            'address' => 'Jl. Merdeka No. 1'
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '08987654321',
            'address' => 'Jl. Sudirman No. 2'
        ],
    ];

    // Menampilkan semua customer
    public function index()
    {
        return response()->json($this->customers);
    }

    // Menampilkan form membuat customer baru (mockup)
    public function create()
    {
        return response()->json([
            'message' => 'Form create customer ditampilkan (mockup)'
        ]);
    }

    // Menyimpan customer baru (mockup)
    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Customer baru berhasil disimpan (mockup)',
            'data' => $request->all()
        ]);
    }

    // Menampilkan detail customer berdasarkan ID (mockup)
    public function show($id)
    {
        $customer = collect($this->customers)->firstWhere('id', $id);

        if (!$customer) {
            return response()->json(['message' => 'Customer tidak ditemukan'], 404);
        }

        return response()->json($customer);
    }

    // Menampilkan form edit customer (mockup)
    public function edit($id)
    {
        $customer = collect($this->customers)->firstWhere('id', $id);

        if (!$customer) {
            return response()->json(['message' => 'Customer tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Form edit customer ditampilkan (mockup)',
            'data' => $customer
        ]);
    }

    // Update data customer (mockup)
    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => 'Customer berhasil diperbarui (mockup)',
            'id' => $id,
            'data' => $request->all()
        ]);
    }

    // Menghapus customer (mockup)
    public function destroy($id)
    {
        return response()->json([
            'message' => 'Customer berhasil dihapus (mockup)',
            'id' => $id
        ]);
    }
}
