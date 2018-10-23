<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PedidoFormRequest;

use App\Pedido;

use Illuminate\Support\Facades\Mail;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedidos.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PedidoFormRequest $request)
    {
        $slug = uniqid();
        $pedido = new Pedido(array(
            'title' => $request -> get('titulo'),
            'content' => $request -> get('contenido'),
            'slug' => $slug,
        ));

        $pedido->save();
        $data = array(
            'pedido'=> $slug,);

        Mail::send('emails.pedidos', $data, function($message){
        $message->from('esgueva.dam@gmail.com','Rodrigo Esgueva');
        $message->to('esgueva.dam@gmail.com')->subject('Test Email');
    });

        return redirect('/pedidos')->with('status','Su pedido ha sido creado con exito. Su id de pedido es: ' .$slug);

        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $pedido = Pedido::whereSlug($slug)->firstOrFail();
        return view('pedidos.show',compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
         $pedido = Pedido::whereSlug($slug)->firstOrFail();
         return view('pedidos.edit', compact('pedido'));
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
    public function destroy($slug)
    {
        $pedido = Pedido::whereSlug($slug)->firstOrFail();
        $pedido->delete();
        return redirect('/pedidos')->with('status','El pedido ' .$slug.' ha sido borrado.');
    }
}
