<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="content" class="p-4 p-md-5 pt-5">
                    <div id="label-page">
                        <h3><b>Arsip Surat >> Unggah</b></h3>
                    </div>
                    <p style="color: black">Unggah surat yang telah terbit pada form ini untuk diarsipkan.<br>
                        Catatan: <br> - Gunakan file berformat PDF
                    </p>

                    <div id="content" style="margin-top: 50px; color: black">
                        <form action="{{url('arsip')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table id="table-input">
                                <tr>
                                    <td class="label-formulir">No Surat</td>
                                    <td class="isian-formulir" style="height: 50px"><input type="text" name="no_surat" class="isian-formulir isian-formulir-border"></td>
                                </tr>
                                <tr>
                                    <td class="label-formulir">Kategori</td>
                                    <td>
                                        <select class="form-select" name="kategori" style="height: 50px">
                                            <option>-- Pilih Jenis Kategori --</option>
                                            <option value="Undangan">Undangan</option>
                                            <option value="Pengumuman">Pengumuman</option>
                                            <option value="Nota Dinas">Nota Dinas</option>
                                            <option value="Pemberitahuan">Pemberitahuan</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-formulir">Judul</td>
                                    <td class="isian-formulir" style="height: 50px; width: 50%"><input type="text" name="judul" class="isian-formulir isian-formulir-border" style="width: 150%"></td>
                                </tr>
                                <tr>
                                    <td class="label-formulir">File Surat ( .pdf )</td>
                                    <td class="isian-formulir" style="height: 50px"><input type="file" name="data_surat" class="isian-formulir isian-formulir-border"></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-success btn-sm" type="kembali">Kembali</button></td>
                                    <td><button class="btn btn-success btn-sm" type="submit" name="simpan">Simpan</button></td>
                                </tr>
                            </table>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>