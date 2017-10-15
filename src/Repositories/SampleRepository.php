<?php

namespace ItAce\Repositories;

use PDO;
use Slim\Container;
use ItAce\Entities\SampleEntity;

/**
 * Class SampleRepository
 *
 * データベースのXXXに接続する。
 *
 * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
 * @copyright IT-ACE All Rights Reserved
 * @access public
 * @package ItAce\Repositories
 * @category Repository, Sample
 * @version 1.0.0
 */
class SampleRepository
{
    /**
     * Property $db
     *
     * データベースに接続する依存関係を格納する。
     *
     * @var \PDO
     */
    protected $db;

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
        $this->db = $c->db;
        $this->sampleMessages = $c->sampleMessages;
        $this->flash = $c->flash;
    }

    /**
     * Method findBySample
     *
     *
     *
     * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
     * @access public
     * @param string $sampleId
     * @return array|bool $sample
     */
    public function findBySample(string $sampleId)
    {
        try {

            // SQL文の準備
            $prepare = $this->db->prepare('SELECT * FROM sample WHERE sampleId = :sampleId');

            // 値のバインド
            $prepare->bindValue(':sampleId', $sampleId, PDO::PARAM_STR);

            // DBへの接続実行
            $prepare->execute();

            // 結果の１レコード目をフェッチ
            $sample = $prepare->fetch();
            // $sample = $prepare->fetchAll();

            return $sample;
        } catch (\PDOException $e) {
             $this->logger->error($e->getMessage());

            // フラッシュメッセージにエラーメッセージを追加
            $this->flash->addMessageNow('sampleError', $this->sampleMessages->getMessage('sampleError02'));

            return false;
        }
    }
}
