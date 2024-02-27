@extends('layouts.app')

@section('content')
<p class="text-5xl mb-3 text-gray-900 dark:text-white">Daftar Permohonan Baru</p>

<form @if(auth()->user()->type == "admin")
    action="{{ route('posts.store') }}"
    @else
    action="{{ route('posts2.store') }}"
    @endif
    method="POST" enctype="multipart/form-data">
    @csrf

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Keputusan Pengadilan</label>
            <input type="text" id="first_name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh: 122345544" required name="no_keputusan_pengadilan">
        </div>
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Pengajuan</label>
            <select id="status_pengajuan" name="status_pengajuan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="">--Pilih--</option>
                <option value="Milik Sendiri">Milik Sendiri</option>
                <option value="Kuasa">Kuasa</option>
            </select>
        </div>
        <div>
            <label for="Nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input type="text" id="Nama" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh : Krisna Yogantara" required name="nama">
        </div>
        <div>
            <label for="no_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
            <input type="text" id="no_ktp" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh : 32732612345678" required name="no_ktp">
        </div>
        <div>
            <label for="instansi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instansi</label>
            <input type="text" id="instansi" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh : DPR" required name="instansi">
        </div>
        <div>
            <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telp</label>
            <input type="text" id="no_telp" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh : 08123456789" required name="no_telp">
        </div>
    </div>
    <div class="mb-6">
        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
        <input type="text" id="alamat" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh : Jln.Merdeka No.12 Kota bandung" required name="alamat">
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Surat permohonan pengambilan Basan Baran</label>
        <input class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="file1">

    </div>
    <div class="mb-6 ">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Surat penetapan putusan pengadilan</label>
        <input class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="file2">

    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Salinan barang bukti dari instansi penanggung jawab secara yuridis</label>
        <input class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="file3">

    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Surat eksekusi dari Kejaksaan</label>
        <input class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="file4">

    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Surat kuasa dari pemilik Basan Baran (Jika pengambil bukan orang yang bersangkutan)</label>
        <input class=" block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="file5">

    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
    <button type="reset" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Reset</button>
</form>
@endsection