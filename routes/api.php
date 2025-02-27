use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TradieController;

// API Route for Tradies CRUD
Route::apiResource('tradies', TradieController::class);
