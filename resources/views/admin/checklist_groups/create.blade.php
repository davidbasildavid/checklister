@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('admin.checklist_groups.store') }}" method="post">
                           @csrf
                        <div class="card-header">{{ __('New checklist group') }}</div>

                        <div class="card-body">
                            <div class="row">
                               <div class="col-sm-12">
                                  <div class="form-group">
                                     <label>{{ __('Name') }}</label>
                                     <input type="text" class="form-control" placeholder="{{ __('Checklist group name') }}"/>
                                  </div>
                               </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit">{{ __('Save') }}</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
