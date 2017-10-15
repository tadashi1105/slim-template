<?php

namespace ItAce\Controllers;

use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class SampleController
 *
 * Sample
 *
 * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
 * @copyright IT-ACE All Rights Reserved
 * @access public
 * @package ItAce\Controllers
 * @category Controller, Sample
 * @version 1.0.0
 */
class SampleController
{
    /**
     * Property $renderer
     *
     * テンプレートをレンダリングする依存関係を格納する。
     *
     * @var \Slim\Views\PhpRenderer
     */
    protected $renderer;

    /**
     * Property $logger
     *
     * ログを書く依存関係を格納する。
     *
     * @var \Monolog\Logger
     */
    protected $logger;

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
        $this->renderer = $c->renderer;
        $this->logger = $c->logger;
    }

    /**
     * Method get
     *
     * Sample
     *
     * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
     * @access public
     * @param \Slim\Http\Request $request
     * @param \Slim\Http\Response $response
     * @param array $args
     * @return \Slim\Http\Response $response
     */
    public function get(Request $request, Response $response, array $args): Response
    {
        // GETリクエストがあったらロギング
        $this->logger->info("GET '/' route");

        return $this->show($request, $response, $args);
    }

    /**
     * Method post
     *
     * Sample
     *
     * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
     * @access public
     * @param \Slim\Http\Request $request
     * @param \Slim\Http\Response $response
     * @param array $args
     * @return \Slim\Http\Response $response
     */
    public function post(Request $request, Response $response, array $args): Response
    {
        // POSTリクエストがあったらロギング
        $this->logger->info("POST '/' route");

        return $this->show($request, $response, $args);
    }

    private function show(Request $request, Response $response, array $args): Response
    {
        // 画面をレンダリング
        return $this->renderer->render($response, 'index.phtml', $args);
    }
}
