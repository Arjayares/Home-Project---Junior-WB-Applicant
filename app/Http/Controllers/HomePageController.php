<?php

namespace App\Http\Controllers;
 
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\AdminPageModel as Admin;
use App\Models\HomePageModel as HomePage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
use Exception;
use Carbon\Carbon;
use Excel;

use App\Http\Controllers\LogsTrailController as LogsTrail;

class HomePageController extends Controller
{
  
    public function index() {
      return view('pages.home');
    }

    


}
