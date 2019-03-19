<div class="sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
        <ul class="sidebar-category">
            @foreach ($categories as $category)
            <li class="sidebar-category__item">
                <a href="{{route('category.show', ['id' => $category->id])}}" class="sidebar-category__item__link">{{$category->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>