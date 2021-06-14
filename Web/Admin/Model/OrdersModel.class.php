<?php
namespace Admin\Model;
use Think\Model;

class OrdersModel extends Model
{
    /**
     * 获得并处理订单表数据
     * @return [array] 返回订单数据
     */
    public function getData() {
        $arr = $this->select();

        // 处理数据
        $status = [1 => '待支付', '待发货' ,'待收货', '待评价', '已完成', '退货中', '退款中', '已取消'];

        // 用于储存地址
        $areaId = '';
        $areaNum = [];
        foreach ($arr as $k => $v) {
            // 切割获得地址id
            $areaNum = array_merge($areaNum, array_slice(explode(',', $v['address']), 0, 3));
        }
        // 查询地址
        $area = M('area');
        $areaData = $area->where(['id' => ['in', $areaNum]])->getField('id,area_name', true);

        // 处理便利数据
        foreach ($arr as $k => $v) {
            $arr[$k]['status'] = $status[$v['status']];
            $arr[$k]['addtime'] = date('Y-m-d H:i:s', $v['addtime']);
            // 切割获得地址id
            $areaArray = explode(',', $v['address']);
            $areaNum = array_slice($areaArray, 0, 3);
            $Fulladdress = $areaArray[3];
            // 拼接获得的地址
            foreach ($areaNum as $key => $val) {
                $areaNum[$key] = $areaData[$val];
                $areaName = join($areaNum, '');
            }
            $arr[$k]['address'] = $areaName.$Fulladdress;
        }

        return $arr;
    }

    /**
     * 修改数据处理
     * @param  [int] $id [订单id]
     * @return [array]     [处理完的数据]
     */
    public function editFind($id) {
        $data = $this->find($id);

        // 拆分记录地址信息
        $areaArray = explode(',', $data['address']);
        $data['address'] = $areaArray[3];
        unset($areaArray[3]);
        // $areaNum = array_slice($areaArray, 0, 3);
        $data['proVal'] = $areaArray[0];
        $data['cityVal'] = $areaArray[1];
        $data['areaVal'] = $areaArray[2];


        // 查询地址
        $area = M('area');
        $areaData = $area->where(['id' => ['in', $areaArray]])->getField('id,area_name', true);

        // 处理数据
        foreach ($areaArray as $key => $val) {
            $areaArray[$key] = $areaData[$val];
        }
        $data['province'] = $areaArray[0];
        $data['city'] = $areaArray[1];
        $data['area'] = $areaArray[2];

        // 处理数据
        $status = [1 => '待支付', '待发货' ,'待收货', '待评价', '已完成', '退货中', '退款中', '已取消'];
        $data['status'] = $status[$data['status']];
        $data['addtime'] = date('Y-m-d H:i:s', $data['addtime']);
        $data['allAddress'] = $data['province'].$data['city'].$data['area'].$data['address;'];
        return $data;
    }
}
