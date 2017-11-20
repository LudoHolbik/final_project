@if(!$reviews->isEmpty())
@foreach($reviews as $review)
<div class="review" style="border: 1px solid black">
     <p>{{ $review -> review }}</p>
     <p>{{ $review -> rating}}</p>
     <p>Created at {{ $review -> created_at }}  by {{ $review -> user_name}}</p>

     @if(Auth::user()['id'] == $review->user_id)
          <button type="button" name="button"><a href="/places/detail/{{$review->id}}/delete">Delete</a> </button>
     @endif
     </div>
@endforeach
@endif
