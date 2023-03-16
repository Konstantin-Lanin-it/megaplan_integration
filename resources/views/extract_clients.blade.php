@extends("layout") 
@section("title") Клиенты  @endsection

@section("content")
Список клиентов

@foreach($client as $el)
    <div>
    <p>{{$el->firstName}} // {{$el->middleName}} // {{$el->lastName}} //  {{$el->phone}} // {{$el->email}}</p>
    </did>


    </form>
@endforeach
@endsection
