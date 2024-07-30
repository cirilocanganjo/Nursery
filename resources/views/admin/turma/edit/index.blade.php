@extends('layout.admin.body')
@section('titulo','Actualizar Turma')

@section('conteudo')
    <div class="card shadow mb-4">
        <div class="card-header">
        <strong class="card-title">Actualizar Turma</strong>
        </div>
        <form action="{{route('admin.turma.update',$turma->id)}}" method="post">
            @csrf
            <div class="card-body">
                @include('_form.turmaForm.index')
                <button type="submit" class="btn btn-primary w-md">Actualizar</button>
            </div>
        </form>
    </div>
  @if (session('turma.update.success'))
    <script>
        Swal.fire(
            'Turma Actualizada com sucesso!',
            '',
            'success'
        )
    </script>
  @endif
  @if (session('turma.update.error'))
    <script>
        Swal.fire(
            'Erro ao Actualizar Turma!',
            '',
            'error'
        )
    </script>
  @endif

@endsection
