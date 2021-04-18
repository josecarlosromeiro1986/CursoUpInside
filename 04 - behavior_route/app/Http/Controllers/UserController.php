<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function index()
    {
        return "<h1>Listagem do usuário com o código 1</h1>";
    }

    public function getData(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou ação de GET</h1>";
    }

    public function postData(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou ação de POST</h1>";
    }

    public function testPut(Request $request)
    {
        echo "<h1>O usuario para edição é o de código 1</h1>";
        var_dump($request);
        return "<h1>Disparou ação de PUT</h1>";
    }

    public function testPatch(Request $request)
    {
        echo "<h1>O usuario para edição é o de código 1</h1>";
        var_dump($request);
        return "<h1>Disparou ação de PATCH</h1>";
    }

    public function testMatch(Request $request)
    {
        echo "<h1>Disparou ação de PUT/PATCH</h1>";
        echo "<h1>O usuario para edição é o de código 2</h1>";
        var_dump($request);
    }

    public function destroy()
    {
        return "<h1>Disparou ação de DELETE para o registro 1</h1>";
    }

    public function any()
    {
        return "<h1>Qualquer verbalização é aceita</h1>";
    }

    public function userComments(Request $request, $id, $comment = null)
    {
        echo "Controller: User Método: userComments";
        var_dump($id, $comment, $request);
    }

    public function inspect()
    {
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();
    
        var_dump($route, $name, $action);
    }
}
