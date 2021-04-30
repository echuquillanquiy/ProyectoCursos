<div class="mb-4">
    {!! Form::label('title', 'Título del Curso') !!}
    {!! Form::text('title', null , ['class' => 'form-input block w-full mt-1 rounded' . ($errors->has('title') ? 'border-red-600' : '')]) !!}

    @error('title')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug del Curso') !!}
    {!! Form::text('slug', null , ['readonly' => 'readonly', 'class' => 'form-input block w-full mt-1 rounded' . ($errors->has('slug') ? 'border-red-600' : '')]) !!}

    @error('slug')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Subtitulo del Curso') !!}
    {!! Form::text('subtitle', null , ['class' => 'form-input block w-full mt-1 rounded' . ($errors->has('subtitle') ? 'border-red-600' : '')]) !!}

    @error('subtitle')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>


<div class="mb-4">
    {!! Form::label('description', 'Descripción del Curso') !!}
    {!! Form::textarea('description', null , ['class' => 'form-input block w-full mt-1 rounded' . ($errors->has('description') ? 'border-red-600' : '')]) !!}

    @error('description')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría:') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-input block w-full mt-1 rounded']) !!}
    </div>

    <div>
        {!! Form::label('level_id', 'Niveles:') !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'form-input block w-full mt-1 rounded']) !!}
    </div>

    <div>
        {!! Form::label('price_id', 'Precio:') !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'form-input block w-full mt-1 rounded']) !!}
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>

        <div class="grid grid-cols-2 gap-4">
            <figure>
                @isset($course->image)
                    <img id="picture" class="w-full h-64 object-cover object-center" src="{{ Storage::url($course->image->url) }}" alt="">
                @else
                    <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/4498362/pexels-photo-4498362.jpeg?cs=srgb&dl=pexels-karolina-grabowska-4498362.jpg&fm=jpg" alt="">
                @endisset
            </figure>

            <div>
                <p class="mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur consequatur corporis cum,
                    distinctio dolore doloribus earum et facilis ipsam, laudantium, molestias nam nihil obcaecati quam sed sunt ullam voluptatum.
                </p>
               <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 rounded-md @error ('file') border-red-600 @enderror">
                   {!! Form::file('file', ['class', 'form-input w-full', 'id' => 'file', 'accept' => 'image/*']) !!}
               </div>

                @error('file')
                    <strong class="text-xs text-red-600">{{ $message }}</strong>
                @enderror
            </div>
        </div>
