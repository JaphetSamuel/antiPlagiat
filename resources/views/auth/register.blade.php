@extends('layouts.app')


@section('content')

    <fieldset>
        <form action="" method="post">
        @csrf
            <div>
                <label for="">Role</label>
                <select name="role" id="role_id">
                    <option value="entreprise">Entreprise</option>
                    <option value="particular">Particulier</option>
                </select>
            </div>

            <div>
                <label for="">Nom</label>
                <input type="text" name="name">
                @error('name') <small>{{$message}}</small> @enderror
            </div>

            <p>
                <label for="">Email</label>
                <input type="email" name="email" required>
                @error('email') <small>{{$message}}</small> @enderror
            </p>

            <p>
                <label for="">Mot de passe</label>
                <input type="password" name="password" required>
                @error('password') <small>{{$message}}</small> @enderror
            </p>

            <p>
                <button type="submit">S'inscrire</button>
                <a href="{{ route('register') }}">Se connecter</a>
            </p>
        </form>
    </fieldset>

@endsection
