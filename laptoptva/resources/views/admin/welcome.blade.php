@if(isset($categories))
    @foreach($categories as $category)
        @if(isset($categoryFilter))
            @if($category->cat_id == $categoryFilter->cat_id)
                <option value="{{$category->cat_id}}"
                        selected>{{ $category->cat_name }}</option>
            @else
                <option
                    value="{{$category->cat_id}}">{{ $category->cat_name }}</option>
            @endif
        @else
            <option value="{{$category->cat_id}}">{{ $category->cat_name }}
            </option>
        @endif
    @endforeach
@endif
