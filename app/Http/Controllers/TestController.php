<?php

namespace App\Http\Controllers;

use App\Enums\PostStatusEnum;
use App\Models\Companies;
use App\Models\Post;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    private object $model;
    private string $table;

    public function __construct()
    {
        $this->model = Post::query();
        $this->table = (new Post())->getTable();

        View::share('title',ucwords($this->table));
        View::share('table',$this->table);
    }

    public function test(){

//        return DB::getSchemaBuilder()->getColumnListing('companies');

        $companyName = 'dacap';
        $language ='php';
        $city = 'hn';
        $link  = 'abc';

        $company  = Companies::query()->firstOrCreate([
            'name' => $companyName,
        ],
            [
                'city' => $city,
                'country' => 'VietNam'
            ]);
        dd($company);
        Post::query()
            ->create([
                'job_title' => $language,
                'company_id'=> $company->id,
                'city' => $city,
                'status' => PostStatusEnum::ADMIN_APPROVED,
            ]);
    }
}
