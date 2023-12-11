<form method="POST" action="{{ url('createcomment') }}">

    @csrf
   
    
       <div class="mb-3">
           <label class="form-label">Comments</label>
           <textarea class="form-control" name="content" cols="30" rows= "10"></textarea>
           <input type="hidden" name="movie_id" value="{{ $movie->id }}">
       </div>
           <button type="submit" class="btn btn-primary">Create Comment</button>
   </form>
   
   @include('components.errors')