@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="content-wrapper">

                <h1>Cambiar Tema</h1>

                <form method="POST" action="{{ route('themes.update') }}">
                    @csrf
                    @method('PUT')

                    <label for="theme">Selecciona un tema:</label>
                    <select name="theme" id="theme">
                        <option value="white">Blanco</option>
                        <option value="black">Negro</option>
                        <option value="system">Sistema</option>
                    </select>

                    <button type="submit">Guardar Cambios</button>
                </form>

            </div>
        </div>
    </main>
@endsection
