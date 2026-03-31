<h1>Edit book</h1>

<form action="/posts/{{ $editBook->id }}/update" method="post">
    @csrf
    @method('PUT')
  <div>
    <label for="title">Title: </label>
    <input type="text" name="title" value='{{$editBook->title}}'/>
  </div>
  <div>
    <label for="author">Author: </label>
    <input type="text" name="author" value='{{$editBook->author}}' />
  </div>
    <div>
    <label for="release">Release: </label>
    <input type="date" name="release" value='{{$editBook->released_at}}' />
  </div>
  <div>
    <input type="submit" value="Update" />
  </div>
</form>