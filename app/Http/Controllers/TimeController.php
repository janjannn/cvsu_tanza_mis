<?php

namespace App\Http\Controllers;

use App\Actions\DtrAction;
use App\Actions\DtrReport;
use App\Exceptions\DtrException;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
class TimeController extends Controller
{

    public function index(Request $request, DtrAction $dtrAction)
    {
        try {

            $validatedData = $request->validate([
                'cvsuId' => ['required'],
            ]);

            $cvsuId = $validatedData['cvsuId'];

            $user = User::where('cvsu_id', $cvsuId)->first();

            if(!isset($user)){
                return redirect('/dtr')->with('error', "User not found");
            }

            $dtrAction->handle($user);

            return redirect("/dtr")->with('message', 'recorded');

        } catch (DtrException $e) {
            report($e);
            return redirect('/dtr')->with('error', $e->getMessage());
        }catch (\Exception $e) {
            report($e);
            return redirect('/dtr')->with('error', "Something went wrong, please try again!");
        }

    }

    public function printDTR($cvsuId, DtrReport $dtrReport)
    {

        $currentMonth = Carbon::now();

        $user = User::where('cvsu_id', '=', $cvsuId)->firstOrFail();

        $userDtr = $dtrReport->handle($currentMonth, $user);

        return view('dtr_report', $userDtr);
    }

}
