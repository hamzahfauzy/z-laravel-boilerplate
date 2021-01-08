@extends('adminlte::page')

@section('title', 'Regency')

@section('content_header')
    Regency
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Regency') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('regencies.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Province Id</th>
										<th>Name</th>
										<th>Lat</th>
										<th>Long</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($regencies as $regency)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $regency->province_id }}</td>
											<td>{{ $regency->name }}</td>
											<td>{{ $regency->lat }}</td>
											<td>{{ $regency->long }}</td>

                                            <td>
                                                <form action="{{ route('regencies.destroy',$regency->id) }}" method="POST" onsubmit="if(confirm('Are you sure to delete this item ?')){return true}else{return false}">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('regencies.show',$regency->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('regencies.edit',$regency->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6"><i>Data empty!</i></td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $regencies->links() !!}
            </div>
        </div>
    </div>
@endsection
