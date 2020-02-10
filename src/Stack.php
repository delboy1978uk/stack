<?php

namespace Del;

use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Stack implements MiddlewareInterface
{
    /** @var MiddlewareInterface[] $middleware */
    private $middleware = [];

    /**
     * @param MiddlewareInterface $middleware
     */
    public function addMiddleWare(MiddlewareInterface $middleware): void
    {
        $this->middleware[] = $middleware;
    }

    /**
     * @param MiddlewareInterface $middleware
     */
    public function prependMiddleWare(MiddlewareInterface $middleware): void
    {
        array_unshift($this->middleware, $middleware);
    }

    /**
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        return new HtmlResponse('Awesome');
    }

    /**
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        
    }
}