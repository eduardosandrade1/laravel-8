@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section>
        <table>
            <thead>
                <tr>
                    <th>Cidade</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
              @forelse ($cidades as $cidade)
                  <tr>
                      <td>{{$cidade}}</td>
                      <td>Excluir - remover</td>
                  </tr>
              @empty
                  <tr>
                      <td colspan="2">Não existe cidades cadastradas!</td>
                  </tr>
              @endforelse
            </tbody>
        </table>
    </section>

@endsection
