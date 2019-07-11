<?php

namespace App;

use Illuminate\Support\Facades\Storage;

class LogStore
{
    public function store_request($input_data, $ip, $referer, $user_agent)
    {
        $filename = date('Y_m_d_H:i:s');
        $content = implode(',',
            array(
                date('Y-m-d H:i:s'),
                $input_data['todohuken'],
                $input_data['family_name'],
                $input_data['first_name'],
                $input_data['people_num'],
                $ip,
                $referer,
                $user_agent
            )
        );
        Storage::put("logs/$filename", $content);
    }
}
