<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Companies;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    private string $table;
    private object $model;

    public function __construct()
    {
        $this->model = User::query();
        $this->table = (new User())->getTable();

        View::share('title',ucwords($this->table));
        View::share('table',$this->table);
    }

    public function index(Request $request)
    {
        $selectRole = $request->get('role');
        $selectCity = $request->get('city');
        $selectCompanies = $request->get('companies');
        $query = $this->model->clone()
            ->with('companies:id,name')
            ->latest();

        if(!empty($selectRole) && $selectRole !== 'All'){
            $query->where('role', $selectRole);
        }
        if(!empty($selectCity) && $selectCity !== 'All'){
            $query->where('city', $selectCity);
        }
        if(!empty($selectCompanies) && $selectCompanies !== 'All'){
            $query->whereHas('companies', function ($q) use ($selectCompanies) {
                return $q->where('id', $selectCompanies);
            });
        }

        $data = $query->paginate();


        $roles = UserRoleEnum::asArray();

        $companies = Companies::query()
            ->select('id','name')
            ->get();

        $cities = $this->model->clone()
            ->distinct()
            ->limit(10)
            ->pluck('city');


        return view("admin.$this->table.index", [
            'data'            => $data,
            'roles'           => $roles,
            'cities'          => $cities,
            'companies'       => $companies,
            'selectRole'      => $selectRole,
            'selectCity'      => $selectCity,
            'selectCompanies' => $selectCompanies,
        ]);
    }


    public function destroy($userId){
        User::destroy($userId);
        return redirect()->back();
    }

}
