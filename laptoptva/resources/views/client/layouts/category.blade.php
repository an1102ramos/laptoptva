<div class="shop_sidebar">
    <div class="sidebar_section">
        <div class="sidebar_title">Danh mục</div>
        <ul class="sidebar_categories">
            @foreach($categories as $category)
            <li><a href="{{ route('client.category', $category->cat_id) }}">
            {{ $category->cat_name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
