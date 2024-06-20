<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\CAASPLATFORM\Models;

use AlibabaCloud\Tea\Model;

class PayGeneralRightsResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 合约调用交易哈希
    /**
     * @var string
     */
    public $txHash;

    // 合约调用交易块高
    /**
     * @var int
     */
    public $blockNumber;

    // 合约返回结果
    /**
     * @var string
     */
    public $result;

    // 错误码
    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'reqMsgId'    => 'req_msg_id',
        'resultCode'  => 'result_code',
        'resultMsg'   => 'result_msg',
        'txHash'      => 'tx_hash',
        'blockNumber' => 'block_number',
        'result'      => 'result',
        'code'        => 'code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->txHash) {
            $res['tx_hash'] = $this->txHash;
        }
        if (null !== $this->blockNumber) {
            $res['block_number'] = $this->blockNumber;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PayGeneralRightsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['tx_hash'])) {
            $model->txHash = $map['tx_hash'];
        }
        if (isset($map['block_number'])) {
            $model->blockNumber = $map['block_number'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        return $model;
    }
}
