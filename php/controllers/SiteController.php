<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SiteController{

    function home(Request $request, Response $response, $args) {
        $response->getBody()->write("Hello world!");
        return $response;
    }

}
?>