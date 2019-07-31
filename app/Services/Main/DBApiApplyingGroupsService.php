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

class DBApiApplyingGroupsService implements ServiceApplyingGroup
{

    public function showApplyingGroups($sales_area)
    {
        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        $applying_groups = Applying_group::where('sales_area_id',$sales_area_db->id)->get();
        return $applying_groups;
    }

    public function addApplyingGroup(Array $data)
    {
        if ($data['sales_area'] === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($data['sales_area'] === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        Applying_group::create([
            'name'=>$data['name'],
            'sales_area_id'=>$sales_area_db->id
        ]);
        return ['response'=>'success'];
    }

    public function delApplyingGroup(int $id)
    {
        Applying_group::destroy($id);
        return ['response'=>'success'];
    }
}
