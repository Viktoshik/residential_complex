<?php

namespace Src\Controllers;

use ORM;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController extends Controller
{
    public function index(
        RequestInterface $request,
        ResponseInterface $response
    )
    {
        $complexes = ORM::forTable('complexes')->findMany();
        return $this->renderer->render($response, 'index.php', [
            'complexes' => $complexes
        ]);
    }
    public function showBuild(
        RequestInterface $request,
        ResponseInterface $response,
        array $args
    )
    {
        $id = $args['id'];
        $builds = ORM::for_table('builds')->where('complex_id', $id)->findMany();
        return $this->renderer->render($response, 'builds/index.php', [
            'builds' => $builds,
            'id' => $id,
        ]);
    }
    public function showApartment(
        RequestInterface $request,
        ResponseInterface $response,
        array $args
    )
    {
        $id = $args['id'];
        $apartments = ORM::for_table('apartments')->where('build_id', $id)->findMany();
        return $this->renderer->render($response, 'apartments/index.php', [
            'apartments' => $apartments,
            'id' => $id,
        ]);
    }
    public function indexApartment(
        RequestInterface $request,
        ResponseInterface $response,
        array $args
    )
    {
        $id = $args['id'];
        $apartments = ORM::for_table('apartments')->where('build_id', $id)->findMany();
        return $this->renderer->render($response, 'apartments/index.php', [
            'apartments' => $apartments,
            'id' => $id,
        ]);
    }
    public function allApartment(
        RequestInterface $request,
        ResponseInterface $response,
    )
    {
        $allApartments = ORM::forTable('apartments')->findMany();
        return $this->renderer->render($response, 'allApartments/index.php', [
            'apartments' => $allApartments
        ]);
//        if($room_count === ){
//
//        }
    }
}