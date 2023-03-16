@extends("layout") 
@section("title") Авторизация Мегаплан  @endsection

@section("content")
<main>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <p class="fs-5 text-muted">Добро пожаловать на наш сайт, позволяющий просматривать заказы, клиенты и товары с сервиса Мегаплан. <br> Для начала работы введите ваш адрес, логин и пароль.</p>
    </div>
    <div class="row col-md-10  mb-4 text-left " >
        <div class="card d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-150">
          <div class="card-body">
            <form method="post" action="/request">
            @csrf
              <input type="text" name="address" id="adress" placeholder="Введите адресс" class="w-50 d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow"><br>
              <input type="text"  name="login" id="login" placeholder="Введите логин"  class="w-50 d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow"><br>
              <input type="text"  name="password" id="password" placeholder="Введите пароль" class="w-50 d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow"><br>
              <button type="submit" class="w-50 btn btn-lg">Отправить</button>
            </form>
          </div>
        </div>
      </div>
  </main>
@endsection
