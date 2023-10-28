<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\config;
use App\Services\Admin\ConfigService;
class ConfigController extends Controller
{
    protected $configService;

    public function __construct(ConfigService $configService)
    {
        $this->configService = $configService;
    }
    public function config(){
       //$config= config::first();
       return view('admin.pages.auth.config');
    }
    public function updateConfig(Request $request, $id){
        $config= config::first();
        $this->validate(request(),[
            'key' => 'required',
            'type'    => 'required',
            'group' => 'required',
            'value'=>'nullable',
        ]);

        $data = $request->all();unset($data["_token"]);

        $config = $this->configService->getConfigByKey($data['key']); dd($config);
        if ($request->hasFile('value')) {
            $image = $this->configService->updateFileInStore($request , $config);
            unset($data['value']);
            $data['value'] = $image;
        }
        $this->configService->updateOrCreateData($data , $config);
//        Config::updateOrInsert(['key' => $data['key']], $data);
        return response()->json(['message' => 'Cập nhật thông tin thành công'], 200);
     }

}
