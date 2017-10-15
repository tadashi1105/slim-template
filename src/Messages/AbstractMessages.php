<?php

namespace ItAce\Messages;

/**
 * Abstract AbstractMessages
 * 
 * メッセージの抽象クラス
 * 
 * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
 * @copyright IT-ACE All Rights Reserved
 * @access public
 * @package ItAce\Messages
 * @category Messages, Abstract
 * @version 1.0.0
 */
abstract class AbstractMessages
{
    /**
     * Property $messages
     * 
     * メッセージを格納する。
     *
     * @var string[]
     */
    protected $messages;
    
    /**
     * Method getMessage
     * 
     * キーを引数にとり、メッセージを返します。キーがセットされていなければ、
     * デフォルトのメッセージを返します。
     * 
     * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
     * @access public
     * @param string $key
     * @return string $this->messages[$key]
     */
    public function getMessage(string $key): string
    {
        if (!isset($this->messages[$key])) {
            return 'There is no message.';
        }

        return $this->messages[$key];
    }
    
    /**
     * Method setMessage
     * 
     * 第一引数にをキーとし、第二引数のメッセージをプロパティ$messagesに格納します。
     * メッセージを一元管理するためこのクラスもしくはサブクラスからしか使うことができません。
     * 
     * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
     * @access protected
     * @param string $key
     * @param string $message
     */
    protected function setMessage(string $key, string $message)
    {
        $this->messages[$key] = $message;
    }
}