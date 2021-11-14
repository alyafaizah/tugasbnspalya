<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight" style="font-size:22pt;">
            Arsip Surat
        </h2>
        <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.<br>
            Klik "Lihat" pada kolom untuk menampilkan surat</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row pb-5">
                            <form class="row g-3 mt-3" action="">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Cari Surat</label>
                                <div class="col-sm-8">
                                    <input class="form-control me-2" type="search" placeholder="cari berdasarkan judul" aria-label="Search" name="pencarian">
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-outline-success" type="submit" style="width:100px;">Cari</button>
                                </div>
                            </form>
                        </div>
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-stripped table-hover">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th scope="col">Nomor Surat</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Judul Surat</th>
                                        <th scope="col">Waktu Pengarsipan</th>
                                        <th></th>
                                        <th></th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $e=>$dt)
                                    <tr style="text-align: center;">
                                        <td>{{ $dt->no_surat }}</td>
                                        <td>{{ $dt->kategori }}</td>
                                        <td>{{ $dt->judul }}</td>
                                        <td>{{ date('d-m-Y', strtotime($dt->updated_at)) }}</td>
                                        <td>
                                        <td><a href="{{ url('arsip/' .$dt->id) }}" class="btn btn-info btn-sm">Lihat</a></td>
                                        <td><a href="" class="btn btn-success btn-sm">Unduh</a></td>
                                        <td>
                                            <form action="{{ url('arsip/' .$dt->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus data?')">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a class="btn" href="{{url('arsip/create') }}" style="background:#6495ED;">Arsipkan Surat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>