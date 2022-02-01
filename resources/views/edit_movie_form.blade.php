        <button id="edit_modal">Open form.</button>
        <form class="absolute top-1/2 left-1/2 add-movie-form py-2" id="edit_movie" style="display:none;" >
            <div class="relative w-full mt-2">
                <span class="absolute right-0 top-0 close">x</span>
            </div>

            @csrf
            <input type="text" id="series" name="series" placeholder="TITLE" value="{{ $movie->series }}">
            <input type="text" id="title" name="title" placeholder="MOVIE NAME" value="{{ $movie->name }}">
            <input type="text" id="url" name="url" placeholder="URL TO VIDEO" value="{{ $movie->url }}">
            <input type="checkbox" id="favourite" name="favourite" id="favourite" @if($movie->favourite == 1) checked @endif>
            <label for="favourite" >
            Add to favs?
            </label>
            <input type="checkbox" id="watched" name="watched" id="watched" @if($movie->watched == 1) checked @endif>
            <label for="watched" >
            Did u did u watch me?
            </label>
            <input type="button" class="edit_button" value="SAVE" >
            <input type="hidden" id="movieId" value="{{ $movie->id }}">
        </form>