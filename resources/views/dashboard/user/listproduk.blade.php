@extends('dashboard.main')

@section('title', 'List Produk')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>List Produk</h2>
    </div>
    
    <!-- Default Card -->


    <!-- Card with header and footer -->

    <!-- Card with an image on left -->
    @foreach ($data_barang as $isi)
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('storage/'.$isi->gambar)}}"
                        style="object-fit:cover; background-size:cover; width:100%;" class="rounded-start"
                        alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-header">
                        <h4><span class="badge bg-warning text-dark">{{$isi->nama}}</span></h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><span class="text-info"><i class="ri-bookmark-2-line"></i>
                                {{$isi->kategori()->first()->nama_kategori}}</span> /
                            <span class="text-danger"> <i class="bi bi-person"></i> {{$isi->harga}}</span> /
                            <span class="text-primary"><i class="bi bi-book-half"></i> {{$isi->deskripsi}}</span>
                        </p>
                        <p>Jumlah Stok : {{$isi->stok}}
                        </p>

                        {{-- <div class="card-text">
                            @if ($isi->jumlah_buku > 0)
                            <a href="{{route('chart/',$isi->id)}}" class="btn btn-success"><i
                                    class="bi bi-bag-plus-fill"></i></a>
                            @endif
                            
                            <a href="{{route('detail-buku',$isi->id)}}" class="btn btn-info"><i
                                    class="bi bi-info"></i></a>
                            <a href="{{route('delete-buku',$isi->id)}}"
                                onclick="return confirm('Are you sure you want to delete')"
                                class=" btn btn-danger  float-end"><i class="bi bi-trash"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div><!-- End Card with an image on left -->
    </div>
    {{-- Modal Delete --}}

    @endforeach

@endsection