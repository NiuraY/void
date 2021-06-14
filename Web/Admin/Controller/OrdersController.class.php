<?php
namespace Admin\Controller;
use Think\Controller;
class OrdersController extends Controller
{

    /**
     * 订单管理页面
     */
    public function index(){

        $orders = D('Orders');
        $pageTotal = $orders->count();
        //获取当前页，默认为第1页
        $nowpage = I('page',1);
        // 每页显示的页数
        $pageNum = 5;

        $ordersData = $orders->limit(($nowpage-1)*$pageNum, $pageNum)->getData();
        // 分页ajax
        if (IS_AJAX) {
            $this->ajaxReturn($ordersData);
        }

        $this->assign('pageTotal', $pageTotal);
        $this->assign('ordersData', $ordersData);
        $this->show();
    }

    /**
     * 编辑订单
     * @param  [int] $id [订单id]
     * @return [int]     [1、0表示修改成功或失败]
     */
    public function edit($id) {

        if (IS_AJAX) {
            $orders = D('orders');
            $status = ($orders->field('status')->find($id)['status']);
            if ($status > 2) {
                $this->ajaxReturn(0);
            }
            // 修改数据
            $data['getman'] = I('getman');
            $data['phone'] = I('phone');
            $data['code'] = I('code');
            $data['address'] = I('address');

            $row = $orders->field(['getman', 'phone', 'code', 'address'])->where(['id' => $id])->save($data);

            $ordersData = $orders->field(true)->editFind($id);
            $ordersData['row'] = $row;

            $this->ajaxReturn($ordersData);

        } else {
            $orders = D('Orders');

            $data = $orders->field(true)->editFind($id);

            // 查找地址
            $area = M('area');
            $cityData = $area->where(['parent_id' => $data['proVal']])->getField('id, area_name' ,true);
            $areaData = $area->where(['parent_id' => $data['cityVal']])->getField('id, area_name' ,true);

            $this->assign('cityData', $cityData);
            $this->assign('areaData', $areaData);
            $this->assign('data', $data);
            $this->display();
        }
    }

    /**
     * 查找省级数据
     * @return [array] 返回省级数据
     */
    public function changeProvince() {
        if (IS_AJAX) {
            $area = M('area');
            $areaData = $area->field('area_name, id')->where('area_type=1')->select();

            $this->ajaxReturn($areaData);
        }
    }

    /**
     * 查找市级或区级数据
     * @return [array] 返回市级或区级数据
     */
    public function changeArea($pid) {
        if (IS_AJAX) {
            $area = M('area');
            $map['parent_id'] = $pid;
            $areaData = $area->field('area_name, id')->where($map)->select();

            $this->ajaxReturn($areaData);
        }
    }

    /**
     * 订单详情
     */
    public function detail($id) {

        $ordersDetail = M('OrdersDetail');
        $data = $ordersDetail->field(true)->where(['oid' => $id])->select();

        $this->assign('data', $data);
        $this->display();
    }

    /**
     * 修改订单状态
     * @param  [int] $id [订单id]
     * @return [int]     [1、0表示修改成功或失败]
     */
    public function changeStatus($id) {
        if (IS_AJAX) {
            $orders = M('orders');
            $status = ($orders->field('status')->find($id)['status']);
            // 判断订单是否符合修改条件
            if ($status == 2) {
                $row = $orders->field('status')->where(['id' => $id])->save(['status' => 3]);
            } else if ($status == 6 ||$status == 7) {
                $row = $orders->field('status')->where(['id' => $id])->save(['status' => 8]);
            } else {
                $row = 0;
            }
            $this->ajaxReturn($row);
        }
    }
}