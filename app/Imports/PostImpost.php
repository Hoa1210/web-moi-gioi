<?php

namespace App\Imports;

use App\Enums\PostStatusEnum;
use App\Models\Companies;
use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PostImpost implements ToArray, WithHeadingRow
{

    public function array(array $array) : void
    {
        $companyName = $array['cong_ty'];
        $language = $array['ngon_ngu'];
        $city = $array['dia_diem'];
        $link  = $array['link'];

        $company  = Companies::query()->firstOrCreate([
            'name' => $companyName,
            ],
            [
            'city' => $city,
            'country' => 'VietNam'
        ]);
        Post::query()
            ->create([
                'job_title' => $language,
                'company_id'=>$company->id,
                'city' => $city,
                'status' => PostStatusEnum::ADMIN_APPROVED,
            ]);
    }
}
