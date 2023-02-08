@extends('main')
@section('content')
    <h1 class="mt-4">Prideti filma</h1>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="title" placeholder="Filmo pavadinimas">
        </div>
        <div class="form-group">
            <input type="text" name="reitingas" placeholder="IMDB reitingas">
        </div>
        <div class="form-group">
            <input type="text" name="director" placeholder="Rezisierius">
        </div>
        <div class="form-group">
            <select name="category" >
                <option selected disabled>Pasirinkite Kategorija</option>
                <option value="1">Veiksmo</option>
                <option value="2">Drama</option>
            </select>
        </div>
        <div class="form-group">
            <textarea name="description" placeholder="Aprasymas" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label >Plakatas</label>
            <input type="file" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit">Saugoti</button>
        </div>
    </form>
@endsection
