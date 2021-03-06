@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
              {{-- <a class="btn button btn-outline-primary" href="/book/create">Add Book <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg></a> --}}
            <br>
            <br>
           

                    @isset($show)
                    
                    @foreach ($show as $book)
                    <div class="card mx-auto" style="width: 24rem;">
                        <img class="card-img-top" src="{{ asset('/storage/img/'.$book->book_img) }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{ $book->book_name }}</h5>
                          <p class="card-text">{{ $book->book_author }}</p>
                        </div>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $book->book_genre }}</li>
                            </ul>
                        <div class="card-body">
                            {{-- <a href='/admin/{{ $book->id }}' class="card-link text-danger">Delete</a> --}}
                            <form id="my_form" style="float: right;" action="{{ route('admin.destroy', $book->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
        
                                <a type="submit" class="text-danger" onclick="document.getElementById('my_form').submit();">Remove <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </a>
                            </form>
   
        
                            <a href="/admin/{{ $book->id }}/edit" class="text-primary">Edit 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg></a>

                        </div>
                      </div>
                    @endforeach


                    @endisset

                    

                    
                </div>
    </div>
</div>
@endsection