<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 24.07.2019
 * Time: 13:17
 */

namespace App\Services\Main;


use App\Configs\SalesAreaConfigs;
use App\Contracts\ServiceApplyingGroup;
use App\Models\Applying_group;
use App\Models\Sales_area;
use Illuminate\Support\Facades\App;

class DBApiApplyingGroupsService implements ServiceApplyingGroup
{

    public function showApplyingGroups($sales_area)
    {
        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        if ($sales_area === 'all') return Applying_group::get();
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        $applying_groups = Applying_group::where('sales_area_id',$sales_area_db->id)->get();
        return $applying_groups;
    }

    public function addApplyingGroup(Array $data)
    {
        if ($data['action']==='add'){
            if (Applying_group::where('name', $data['name'])->first())return ['response'=>'this appl group exists'];
            if (Applying_group::create([
                'name' => $data['name'],
                'sales_area_id' => (int)$data['sales_area']
            ])) return ['response'=>'insert success'];
        }
        if ($data['action']==='update'){
            if (Applying_group::where('id',$data['id'])->update([
                'name' => $data['name'],
                'sales_area_id' => (int) $data['sales_area'],
            ])) return ['response'=>'update success'];
        }
        return ['response'=>'error'];
    }

    public function delApplyingGroup(int $id)
    {
        Applying_group::destroy($id);
        return ['response'=>'success'];
    }
}
