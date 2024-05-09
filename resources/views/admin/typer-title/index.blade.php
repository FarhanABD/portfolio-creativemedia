@extends('admin.layouts.layout')
@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('dashboard')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Typer Title</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All titles</h4>
              <div class="card-header-action">
                <a href="{{route('admin.typer-title.create')}}" class="btn btn-success">Create New <i class ="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="card-body">
            </div>
    
            {{-- <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button
                        class="btn btn-danger">Update</button>
                </div>
            </div> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
