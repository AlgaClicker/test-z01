<!DOCTYPE html>
    <html>
        <head>
            <!-- Другие теги head -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            
            <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        </head>
        <body>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Тестоаое задание </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Главная</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Заказы
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Создать заказ</a></li>  
                        <li><a class="dropdown-item" href="#">Список заказов</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Товары
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{URL::to('/goods/new')}}">Добавить товар</a></li>  
                        <li><a class="dropdown-item" href="{{URL::to('/goods')}}">Список товаров</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?=URL::to('/categories/new')?>">Добавить категорию</a></li>  
                        <li><a class="dropdown-item" href="<?=URL::to('/categories')?>">Список категорий</a></li>

                        </ul>
                        </li>

                    </ul>
                    <form class="d-flex">
                        
                        <button class="btn btn-outline-success" type="submit">Корзина</button>
                    </form>
                    </div>
                </div>
            </nav>
            <main class="container">
                    @yield('content') <!-- Сюда будет вставляться контент страниц -->
            </main>

            <footer>
                <p>&copy; {{ date('Y') }} Тестовое задание</p>
            </footer>
            <script src="/js/app.js"></script>
        </body>
</html>