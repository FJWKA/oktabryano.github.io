<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;

class ManajemenController extends Controller
{
    public function index()
    {
        $pemasukan = Pemasukan::all();
        $pengeluaran = Pengeluaran::all();
        return view('manajemen', [
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran
        ]);
    }

    // Metode lainnya tetap sama seperti di atas...
}
