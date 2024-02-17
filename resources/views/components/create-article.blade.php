<div>
    <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data" class="mt-5 mx-auto col-lg-6">
        @csrf
        <h1>Crea il tuo Articolo</h1>
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" name='title' class="form-control" id="title" value="{{old('title')}}" >
          @error('title') <div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">descrizione</label>
          <input type="text" name='description' class="form-control" id="description" value="{{old('description')}}">
          @error('description') <div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
        <div class="mb-3 ">
            <label for="category" class="form-label">category</label>
            <input type="text" name='category' class="form-control" id="category" value="{{old('category')}}">
            @error('category') <div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
        <div class="mb-3 ">
            <label for="body" class="form-label">body</label>
            <input type="text" name='body' class="form-control" id="body" value="{{old('body')}}">
            @error('body') <div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
        <div class="mb-3 ">
            <label for="image" class="form-label">body</label>
            <input type="file" name='image' class="form-control" id="image" value="{{old('image')}}">
            @error('image') <div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
      </form>
</div>