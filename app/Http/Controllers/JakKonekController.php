namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JakKonekController extends Controller
{
    public function showData()
    {
        $response = Http::get('https://jakpreneur.jakarta.go.id/api/jak-konek/show-data-jak-konek');

        if ($response->successful()) {
            $xmlData = $response->body();
            $jsonData = json_encode(simplexml_load_string($xmlData));
            $data = json_decode($jsonData, true);

            return view('jak-konek', ['data' => $data]);
        } else {
            return view('jak-konek', ['data' => null, 'error' => 'Failed to fetch data from API.']);
        }
    }
}
