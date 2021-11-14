<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-body">
                        <h3>Arsip Surat >> Lihat</h3>
                        <table>
                            <tbody>
                                <tr>
                                    <th scope="col">Nomor Surat</th>
                                    <td>: {{ $model->no_surat }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Kategori</th>
                                    <td>: {{ $model->kategori }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Judul Surat</th>
                                    <td>: {{ $model->judul }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Waktu Unggah</th>
                                    <td>: {{ date('d-m-Y', strtotime($model->updated_at)) }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3>Data Surat</h3>
                        {{$model->data_surat}}
                    </div>

                </div>
                <a href="" class="btn btn-secondary">Kembali</a>
                <a href="" class="btn btn-secondary">Unduh</a>
                <a href="" class="btn btn-secondary">Edit/Ganti File</a>
            </div>
        </div>
    </div>
</x-app-layout>