@extends('layouts.app')

@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form>
                <div class="mb-5">
                    <label for="name" class="md-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="username" class="md-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="email" class="md-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Tu email de registro"
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password" class="md-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password de registro"
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="md-2 block uppercase text-gray-500 font-bold">Repetir Password</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Repite tu password"
                        class="border p-3 w-full rounded-lg">
                </div>

                <input
                    type="submit"
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection
