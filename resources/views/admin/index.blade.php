@extends('admin.layouts.admin')

@section('title', '')

<!DOCTYPE html>
<title>Map settings | {{ site_name() }}</title>

@section('content')
    <div class="row">
        <div class="my-3">
            <div class="card shadow mb-0">
                <div class="card-header">
                    <h3 class="mb-0">Map</h3>
                </div>
            </div>
            <div class="my-3">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <form action="{{ route('map.admin.settings') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <div class="card-header">
                                    <h4 class="mb-0">Settings</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12 form-group mb-3">
                                        <label class="mb-2">{{ trans('map::messages.settings.map-iframe') }}</label>
                                        <input type="url" class="form-control" placeholder="http://127.0.0.1:8123" name="url" value="{{ setting('map.url') }}" required>
                                    </div>
                                    {{ trans('map::messages.settings.info') }}
                                    <a href="{{ url('/map') }}" class="m-0 font-weight-bold text-primary" target="_blank" rel="noopener noreferrer">
                                        {{ url('/map') }}
                                    </a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
