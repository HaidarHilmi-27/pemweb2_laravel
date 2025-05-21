@php
    $username = "Ahmad Fauzi";
    $role = "";
@endphp

<h2>Prodi {{ !empty($prodi) ? $prodi : 'Sistem Informasi' }}</h2>

@if($role == 'Admin')
    <h3>Selamat Datang, {{ $username }} !! anda adalah seorang {{ $role }}</h3>
@else
    <h3>Selamat Datang, {{ $username }} !! anda adalah seorang user</h3>
@endif
