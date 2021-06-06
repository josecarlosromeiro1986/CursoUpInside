<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        echo "<h1>Dados do Usuário</h1><br />";
        echo "Nome do usuário: {$user->name}<br />";
        echo "E-mail: {$user->email}<br />";

        $userAddress = $user->addressDelivery()->get()->first();

        if ($userAddress) {

            echo "<h1>Endereço de Entrega</h1><br />";
            echo "Endereço: {$userAddress->address}, {$userAddress->number}<br />";
            echo "Complemento: {$userAddress->complement} CEP: {$userAddress->zipcode}<br />";
            echo "Cidade/Estado: {$userAddress->complement}/{$userAddress->zipcode}<br />";
        }

        // $addressTeste = new Address([
        //     'address' => 'Rua teste 11',
        //     'number' => '123',
        //     'complement' => 'Apto 123',
        //     'zipcode' => '86600-846',
        //     'city' => 'Rolândia',
        //     'state' => 'PR'
        // ]);

        // $address = new Address();
        // $address->address = 'Rua teste 22';
        // $address->number = '321';
        // $address->complement = 'Apto 321';
        // $address->zipcode = '86600-846';
        // $address->city = 'Rolândia';
        // $address->state = 'PR';

        // $user->addressDelivery()->save($address);

        // $user->addressDelivery()->saveMany([$addressTeste, $address]);

        // $user->addressDelivery()->create([
        //     'address' => 'Rua teste 11',
        //     'number' => '123',
        //     'complement' => 'Apto 123',
        //     'zipcode' => '86600-846',
        //     'city' => 'Rolândia',
        //     'state' => 'PR'
        // ]);

        // $user->addressDelivery()->createMany([[
        //     'address' => 'Rua teste 333',
        //     'number' => '123',
        //     'complement' => 'Apto 123',
        //     'zipcode' => '86600-846',
        //     'city' => 'Rolândia',
        //     'state' => 'PR'
        // ], [
        //     'address' => 'Rua teste 444',
        //     'number' => '123',
        //     'complement' => 'Apto 123',
        //     'zipcode' => '86600-846',
        //     'city' => 'Rolândia',
        //     'state' => 'PR'
        // ]]);

        // $users = User::with('addressDelivery')->get();
        // dd($users);

        $posts = $user->posts()->orderBy('id', 'DESC')->get();

        if ($posts) {

            echo "<h1>Artigos</h1><br />";

            foreach ($posts as $post) {

                echo "#{$post->id} Título: {$post->title}<br />";
                echo "Subtitulo: {$post->subtitle}<br />";
                echo "Conteúdo: {$post->description}<br /><hr>";
            }
        }

        // $comments = $user->commentsOnMyPost()->get();

        // if ($comments) {

        //     echo "<h1>Comentários nos meus artigos</h1><br />";

        //     foreach ($comments as $comment) {

        //         echo "#Post:{$comment->post} User#{$comment->user} {$comment->content}<br />";
        //     }
        // }

        // $user->comments()->create([
        //     'content' => 'Teste de comentário no modelo de Usuário'
        // ]);

        $comments = $user->comments()->get();

        if ($comments) {

            echo "<h1>Comentários</h1><br />";

            foreach ($comments as $comment) {

                echo "#{$comment->id} Categoria: {$comment->content}<br />";
            }
        }

        $students = User::students()->get();

        if ($students) {

            echo "<h1>Alunos</h1>";

            foreach ($students as $student) {

                echo "Nome do aluno: {$student->name}<br />";
                echo "E-mail: {$student->email}<br />";
            }
        }

        $admins = User::admins()->get();

        if ($admins) {

            echo "<h1>Administradores</h1>";

            foreach ($admins as $admin) {

                echo "Nome do administrador: {$admin->name}<br />";
                echo "E-mail: {$admin->email}<br />";
            }
        }

        $users = User::all();

        var_dump($users->makeVisible('created_at')->toArray());
        var_dump($users->makeHidden('created_at')->toJson());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
