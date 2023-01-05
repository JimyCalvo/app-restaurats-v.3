<x-layouts.app title="Platos">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Plato') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('platos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Categoria</th>
										<th>Nombre</th>
										<th>Caracteristicas</th>
									

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($platos as $plato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>
                                                
                                                {{ $plato->categoria->nombre }}
                                            
                                            
                                            </td>


											<td>{{ $plato->nombre }}</td>
											<td>{{ $plato->caracteristicas }}</td>
                                            

                                            <td>
                                                <form action="{{ route('platos.destroy',$plato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('platos.show',$plato->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('platos.edit',$plato->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $platos->links() !!}
            </div>
        </div>
    </div>
   
</x-layouts.app>
