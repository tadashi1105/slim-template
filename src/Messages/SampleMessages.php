<?php

namespace ItAce\Messages;

use ItAce\Messages\AbstractMessages;

/**
 * Class SampleMessages
 *
 * メッセージを管理します。
 *
 * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
 * @copyright IT-ACE All Rights Reserved
 * @access public
 * @package ItAce\Messages
 * @category Messages
 * @version 1.0.0
 */
class SampleMessages extends AbstractMessages
{
    /**
     * Method __construct
     *
     * メッセージをキーに関連づけて格納します。
     * メッセージは文字列型を担保するためにsetMessageメソッドを使います。
     *
     * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
     * @access public
     */
    public function __construct()
    {
        $this->messages = [];
        $this->setMessage('sampleError01', 'XXXが違います。');
        $this->setMessage('sampleError02', 'データベース接続エラーです。');
    }
}
