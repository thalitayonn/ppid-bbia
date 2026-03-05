@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-header-content">
        <h1>Tentang PPID</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a> / Tentang PPID
        </div>
    </div>
</div>

<div class="content-section">
    <div class="content-full">
        <h2>Apa itu PPID?</h2>
        <p>Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab atas penyediaan layanan dan informasi publik di lingkungan Balai Besar Industri Agro (BBIA). PPID BBIA berfungsi sebagai jembatan antara institusi dengan masyarakat dalam hal akses informasi publik.</p>
        
        @php
            $profils = \App\Models\Profil::where('is_active', true)->orderBy('kategori')->orderBy('urutan')->get();
            $groupedProfils = $profils->groupBy('kategori');
        @endphp
        
        @forelse($groupedProfils as $kategori => $items)
            <h2>{{ $kategori }}</h2>
            @foreach($items as $profil)
                <h3>{{ $profil->judul }}</h3>
                <div>{!! $profil->konten !!}</div>
                @if(!$loop->last)<hr style="margin: 2rem 0;">@endif
            @endforeach
        @empty
            <p>Informasi profil sedang dalam pembaruan.</p>
        @endforelse
    </div>
</div>

<style>
.page-header {
    background: linear-gradient(135deg, #0f2338 0%, #2c5282 35%, #1a3a5f 100%);
    color: white;
    padding: 40px 0;
    margin: 0 0 40px 0;
    width: 100%;
    left: 0;
    right: 0;
}

.page-header-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.page-header h1 {
    font-size: 2.5rem;
    margin: 0 0 10px 0;
}

.breadcrumb {
    font-size: 0.9rem;
    opacity: 0.9;
}

.breadcrumb a {
    color: white;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.content-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px 40px;
}

.content-full h2 {
    color: #0f2338;
    border-bottom: 3px solid #3498db;
    padding-bottom: 10px;
    margin: 2.5rem 0 1.5rem 0;
}

.content-full h3 {
    color: #2c5282;
    margin: 1.5rem 0 1rem 0;
}

.content-full p {
    line-height: 1.6;
    margin-bottom: 1rem;
}

.content-full ul {
    margin: 1rem 0;
    padding-left: 2rem;
}

.content-full li {
    margin-bottom: 0.5rem;
    line-height: 1.6;
}

hr {
    border: none;
    border-top: 1px solid #e0e0e0;
}
</style>
@endsection
