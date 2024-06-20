<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pemasukan;
use App\Models\tb_Pengeluaran;

class ManajemenController extends Controller
{
    public function index()
    {
        $pemasukan = tb_pemasukan::all();
        $pengeluaran = tb_Pengeluaran::all();

        return view('manajemen',[
        'pemasukan'=> $pemasukan,
        'pengeluaran' => $pengeluaran
        ]);
    }
}

