@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 gapFromNav">
                @can('create', \App\Manufacturer::class)
                    <a href="{{ route('manufacturers.create') }}" class="btn btn-default gap">Add New Manufacturer</a>
                @endcan
                <div class="panel panel-default">
                    <div class="panel-heading">Manufacturers</div>
                    <div class="panel-body">
                        @if (session('message'))
                            <div class="alert alert-info">{{ session('message') }}</div>
                        @endif
                    </div>
                    <div class="panel-body">
                        <table id="manufacturers" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                @can('create', App\Manufacturer::class)
                                    <th>Actions</th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($manufacturers as $manufacturer)
                                <tr>
                                    <td>{{ $manufacturer->name }}</td>
                                    <td>{{ $manufacturer->description }}</td>
                                    @can('create', \App\Manufacturer::class)
                                        <td>
                                            <a href="{{ route('manufacturers.edit', $manufacturer->id) }}"
                                               class="btn btn-default">Edit</a>
                                            @can('create', \App\Manufacturer::class)
                                                <form action="{{ route('manufacturers.destroy', $manufacturer->id) }}"
                                                      method="POST"
                                                      style="display: inline"
                                                      onsubmit="return confirm('Are you sure?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    {{ csrf_field() }}
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            @endcan
                                        </td>
                                    @endcan
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No entries found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{ $manufacturers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
