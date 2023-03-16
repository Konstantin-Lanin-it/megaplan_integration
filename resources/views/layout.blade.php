<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
  </symbol>
</svg>

<div class="container py-3 mx-auto">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Тестовый сервис</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      
        <a class="me-3 py-2 text-dark text-decoration-none" href="/success">Доступ к Мегаплан</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/">Авторизация Мегаплан</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/extract_products_expensive_or_cheap">Наши продукты</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/extract_clients">Наши клиенты</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/contact">Контакты</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/help">Оставить запрос</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/create_form">Кастомный запрос</a>
        <a class="py-2 text-dark text-decoration-none" href="/about">О нас</a>
      </nav>
    </div>

    
  </header>

 

@yield('content')



  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="mx-auto text-center">
            <a class="d-block mb-3 text-muted" href="https://vk.com/id47661492">Сайт создан при поддержке </a>
            <small class="d-block mb-3 text-muted">© 2023</small>
      </div>
    </div>
  </footer>
</div>


    
  

</body>
</html>