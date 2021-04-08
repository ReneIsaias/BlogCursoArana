<div class="form-group">
    {!! Form::label('name', 'Nombre',) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del post']) !!}
    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug',) !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el slug del post', 'readonly']) !!}
    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría',) !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}

            {{$tag->name}}
        </label>
    @endforeach

    @error('tags')
        <br>
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    @error('status')
        <br>
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="row mb-4">
    <div class="col-lg-6 col-md-6 col-sm-12">
        @isset ($post->image)
            <img id="picture" class="figure-img img-fluid rounded" src="{{asset('storage/' . $post->image->url)}}" alt="img">
        @else
            <img id="picture" class="figure-img img-fluid rounded" src="https://images.pexels.com/photos/4916559/pexels-photo-4916559.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="img">
        @endisset
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
                <span class="text-danger">{{$message}}</span>
            @enderror

            <hr>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit deleniti dolor soluta repellat officia eius id? Facilis voluptates libero ipsam eius sed ipsa excepturi, quas voluptatum minima nobis nam dicta!</p>
        </div>

    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
