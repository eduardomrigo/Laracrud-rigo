<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Vehicle;
use Illuminate\Http\Request;


class BrandController extends Controller
{
   
    public function index()
    {
        $brands = Brand::all(); //pega todos os dados do banco atraves da model
        return view ('brands.index')->with('brand', $brands); //retorna a view passando os dados
    }

  
    public function create() //C do nosso CRUD
    {
        return view('brands.create'); //retorna a view pra criar (forms)
    }

   
    public function store(Request $request) //envio dos dados do forms para o banco, a request eh quem administra e armazena as requisicoes https
    {
        $brand = $request->all(); //pega todas as requests do POST
        Brand::create($brand); // o mesmo que passar as variaves do banco -> 'name' => $request->name....mas pra todos
        return redirect('brands');

    }

   
    public function show($id) //a show vem c parametro do ID, o R do nosso CRUD
    {
        $brand = Brand::find($id); //recebe o id como argumento pra encontrar ele no banco
        return view('brands.show')->with('brands', $brand); //retorna a view passando a variavel vehicle pro front (como array), no front podemos acessar tipo {{$vehicle->name}}
    }

    
    public function edit($id) //msm coisa da show, obtem registro e retorna view
    {
        
        $brand = Brand::find($id); //recebe o id como argumento pra encontrar ele no banco
        return view('brands.edit')->with('brands', $brand); //retorna view de editar passando a variavel
    }

   
    public function update(Request $request, $id) //o U do CRUD, passamos a request pq tem o form pra ele acessar os dados e a id 
    {
       
        $brand = Brand::find($id); //acha o registro no banco
        $input = $request->all(); //pega todas as requests do POST
        $brand->update($input); //inves de criar ele atualiza o valor dos inputs, no banco
        return redirect('brands')->with('flash_message', 'Veiculo atualizado com sucesso!');  //redireciona com mensagem de sucesso
    }

   
    public function destroy($id) //nosso D do CRUD. remove o registro do banco
    {
        Brand::destroy($id);
        return redirect('brands')->with('flash_message', 'Veiculo removido com sucesso!');  //redireciona c msg de sucesso
    }
}
