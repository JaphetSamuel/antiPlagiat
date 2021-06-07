@extends('layouts.app')


@section('content')

    <fieldset>
        <form action="" method="post">
            @csrf
            <!--
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
            </div>

            -->
                @if($loginError)
                    Email ou mit de passe incorrect !
                @endif

            <p>
                <label for="">Email</label>
                <input type="email" name="email" required>
            </p>

            <p>
                <label for="">Mot de passe</label>
                <input type="password" name="password" required>
            </p>

            <p>
                <button type="submit">Se connecter</button>
                <a href="{{ route('register') }}">S'inscrire</a>
            </p>
        </form>
    </fieldset>

@endsection
