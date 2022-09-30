<?php

//aqui fica toda logica da aplicacao, onde passaremos as funcoes inves de ser direto pela rota
//criamos com [php artisan make::controller NomeMaiusculo --resource] (ja vem c td)

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Vehicle; //importante lembrar de chamar a Model
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = vehicle::all(); //pega todos os dados do banco atraves da model
        return view ('vehicles.index')->with('vehicles', $vehicles); //retorna a view passando os dados
    }

  
    public function create() //C do nosso CRUD
    
    {
        $brands = Brand::all();
        return view('vehicles.create')->with('brands', $brands);
    }

   
   
    public function store(Request $request) //envio dos dados do forms para o banco, a request eh quem administra e armazena as requisicoes https
    {
        $input = $request->all(); //pega todas as requests do POST
        // dd($input);
        vehicle::create($input); // o mesmo que passar as variaves do banco -> 'name' => $request->name....mas pra todos
        return redirect('vehicle')->with('flash_message', 'Veiculo Adicionado com sucesso!');  //redireciona pra vehicle com msg de sucesso
    }

   
    public function show($id) //a show vem c parametro do ID, o R do nosso CRUD
    {
        $vehicle = vehicle::find($id); //recebe o id como argumento pra encontrar ele no banco
        return view('vehicles.show')->with('vehicles', $vehicle); //retorna a view passando a variavel vehicle pro front (como array), no front podemos acessar tipo {{$vehicle->name}}
    }

    
    public function edit($id) //msm coisa da show, obtem registro e retorna view
    {
        
        $vehicle = vehicle::find($id); //recebe o id como argumento pra encontrar ele no banco
        return view('vehicles.edit')->with('vehicles', $vehicle); //retorna view de editar passando a variavel
    }

   
    public function update(Request $request, $id) //o U do CRUD, passamos a request pq tem o form pra ele acessar os dados e a id 
    {
       
        $vehicle = vehicle::find($id); //acha o registro no banco
        $input = $request->all(); //pega todas as requests do POST
        $vehicle->update($input); //inves de criar ele atualiza o valor dos inputs, no banco
        return redirect('vehicle')->with('flash_message', 'Veiculo atualizado com sucesso!');  //redireciona com mensagem de sucesso
    }

   
    public function destroy($id) //nosso D do CRUD. remove o registro do banco
    {
        vehicle::destroy($id); //remove o registro do banco, n tem mt segredo
        return redirect('vehicle')->with('flash_message', 'Veiculo removido com sucesso!');  //redireciona c msg de sucesso
    }
}
