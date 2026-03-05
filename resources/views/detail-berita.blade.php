@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Detail Berita</h1>
            <p>Berita PPID Balai Besar Industri Agro</p>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb">
    <div class="container">
        <a href="{{ url('/ppid') }}">Beranda</a>
        <span>›</span>
        <a href="{{ url('/berita') }}">Berita</a>
        <span>›</span>
        <span>{{ $berita->judul }}</span>
    </div>
</nav>

<!-- Main Content -->
<main class="main-content">
    <div class="container">
        <div class="content-section">
            <article class="news-detail">
                <div class="news-header">
                    <h1>{{ $berita->judul }}</h1>
                    <div class="news-meta">
                        <span class="news-date">{{ $berita->tanggal_publikasi ? $berita->tanggal_publikasi->format('d F Y') : $berita->created_at->format('d F Y') }}</span>
                        <span class="news-category">Berita</span>
                        <span class="news-author">Admin PPID</span>
                    </div>
                </div>
                
                @if($berita->gambar)
                <div class="news-image">
                    <img src="{{ asset($berita->gambar) }}" alt="{{ $berita->judul }}">
                </div>
                @endif
                
                <div class="news-content">
                    {!! $berita->konten !!}
                </div>
                
                <div class="news-footer">
                    <div class="news-share">
                        <h4>Bagikan Berita:</h4>
                        <div class="share-buttons">
                            <a href="#" class="share-btn">Facebook</a>
                            <a href="#" class="share-btn">Twitter</a>
                            <a href="#" class="share-btn">WhatsApp</a>
                        </div>
                    </div>
                </div>
            </article>
            
            <div class="related-news">
                <h3>Berita Terkait</h3>
                <div class="related-grid">
                    @php
                        $relatedBeritas = \App\Models\Berita::where('status', 'published')
                            ->where('id', '!=', $berita->id)
                            ->latest()
                            ->take(3)
                            ->get();
                    @endphp
                    
                    @forelse ($relatedBeritas as $related)
                    <div class="related-item">
                        @if($related->gambar)
                            <img src="{{ asset($related->gambar) }}" alt="{{ $related->judul }}">
                        @else
                            <img src="{{ asset('images/beranda.jpg') }}" alt="{{ $related->judul }}">
                        @endif
                        <h4><a href="{{ url('/berita/detail/' . $related->slug) }}">{{ $related->judul }}</a></h4>
                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($related->konten), 100) }}</p>
                    </div>
                    @empty
                    <p>Belum ada berita terkait.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
