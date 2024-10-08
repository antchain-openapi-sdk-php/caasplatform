<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\CAASPLATFORM\Models;

use AlibabaCloud\Tea\Model;

class GetGeneralRightsbalanceRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 合约服务实例id
    /**
     * @var string
     */
    public $serviceId;

    // 账号的地址
    /**
     * @var string
     */
    public $account;

    // 数据资产ID
    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'serviceId'         => 'service_id',
        'account'           => 'account',
        'id'                => 'id',
    ];

    public function validate()
    {
        Model::validateRequired('serviceId', $this->serviceId, true);
        Model::validateRequired('account', $this->account, true);
        Model::validateRequired('id', $this->id, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->serviceId) {
            $res['service_id'] = $this->serviceId;
        }
        if (null !== $this->account) {
            $res['account'] = $this->account;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGeneralRightsbalanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['service_id'])) {
            $model->serviceId = $map['service_id'];
        }
        if (isset($map['account'])) {
            $model->account = $map['account'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
