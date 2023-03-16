@extends("layout") 
@section("title") Кастомная форма  @endsection

@section("content")
Здесь будут кастомная форма
<main>

    <div class="row col-md-10  mb-4 text-left " >
        <div class="card d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-150">
          <div class="card-body">
            <form method="post" action="/custom_request">
            @csrf
              <input type="text" name="firstName" id="adress" placeholder="Имя" class="w-50 d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow"><br>
              <input type="text"  name="lastName" id="login" placeholder="Фамилия"  class="w-50 d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow"><br>
              <input type="text"  name="middleName" id="login" placeholder="Отчество"  class="w-50 d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow"><br>
              <input type="text"  name="phone" id="login" placeholder="Телефон"  class="w-50 d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow"><br>
              <input type="text"  name="Email" id="password" placeholder="Email" class="w-50 d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow"><br>
              <button type="submit" class="w-50 btn btn-lg">Отправить</button>
            </form>
          </div>
        </div>
      </div>
  </main>
  
  @foreach($errors->all() as $message)
    <div>
    <p>Что-то вы ввели неверно</p>
    </did>
@endforeach

@endsection

