<?php

namespace ItAce\Services;

use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;
use ItAce\Entities\SampleEntity;

/**
 * Class SampleService
 *
 * サービス層
 *
 * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
 * @copyright IT-ACE All Rights Reserved
 * @access public
 * @package ItAce\Services
 * @category Service, Sample
 * @version 1.0.0
 */
class EmployeeService
{
    /**
     * Property $sampleRepository
     *
     * データベースのXXXに接続する依存関係を格納する。
     *
     * @var \ItAce\Repositories\SampleRepository
     */
    protected $sampleRepository;

    /**
     * Property $sampleMessages
     *
     * エラーメッセージの依存関係を格納する。
     *
     * @var \ItAce\Messages\SampleMessages
     */
    protected $sampleMessages;

    /**
     * Property $flash
     *
     * フラッシュメッセージの依存関係を格納する。
     *
     * @var \Slim\Flash\Messages
     */
    protected $flash;

    /**
     * Method __construct
     *
     * 依存関係を注入する。
     *
     * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
     * @access public
     * @param \Slim\Container $c
     */
    public function __construct(Container $c)
    {
        $this->repository = $c->employeeRepository;
        $this->sampleMessages = $c->sampleMessages;
        $this->flash = $c->flash;
    }

    /**
     * Method authenticate
     *
     *
     *
     * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
     * @access public
     * @param string $id 社員ID
     * @param string $plainTextPassword 社員パスワード
     * @return bool
     */
    public function sample(SampleEntity $sampleEntity): bool
    {
    }

}
