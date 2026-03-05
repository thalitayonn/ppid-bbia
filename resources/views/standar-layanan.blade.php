@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-header-content">
        <h1>Standar Layanan</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a>
            <span>›</span>
            <span>Standar Layanan</span>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="content-full">
        <div class="service-detail">
            <div class="service-icon-large">
                <img src="{{ asset('images/standar-layanan.png') }}" alt="Standar Layanan">
            </div>
            
            <div class="service-content">
                <h2>Standar Layanan PPID BBIA</h2>
                <p>PPID BBIA menetapkan standar layanan informasi publik yang harus dipatuhi oleh seluruh unit kerja di lingkungan Balai Besar Industri Agro sesuai dengan peraturan perundang-undangan.</p>
                
                @php
                    $standars = \App\Models\StandarLayanan::where('is_active', true)->orderBy('urutan')->get();
                @endphp
                
                @forelse($standars as $standar)
                    <div class="standar-item">
                        <div class="standar-header">
                            <h3>{{ $standar->jenis }}</h3>
                            <div class="standar-meta">
                                <span class="meta-item">⏱️ {{ $standar->waktu }}</span>
                                <span class="meta-item">💰 {{ $standar->biaya }}</span>
                            </div>
                        </div>
                        
                        <div class="standar-content">
                            <div class="standar-section">
                                <h4>📦 Produk Layanan</h4>
                                <p>{{ $standar->produk }}</p>
                            </div>
                            
                            <div class="standar-section">
                                <h4>📋 Prosedur Pelayanan</h4>
                                <div class="prosedur-content">
                                    {!! nl2br(e($standar->prosedur)) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="info-box">
                        <p>Standar layanan sedang dalam pembaruan. Silakan kembali lagi nanti.</p>
                    </div>
                @endforelse
                
                <div class="action-buttons">
                    <a href="{{ url('/form-permohonan') }}" class="btn btn-primary">Ajukan Permohonan</a>
                    <a href="{{ url('/informasi-publik') }}" class="btn btn-outline">Lihat Informasi Publik</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.standar-item {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    margin: 2rem 0;
    overflow: hidden;
    transition: transform 0.2s ease;
}

.standar-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}

.standar-header {
    background: linear-gradient(135deg, #0f2338 0%, #2c5282 100%);
    color: white;
    padding: 1.5rem;
}

.standar-header h3 {
    margin: 0 0 0.5rem 0;
    font-size: 1.3rem;
}

.standar-meta {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.meta-item {
    background: rgba(255,255,255,0.2);
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.9rem;
}

.standar-content {
    padding: 1.5rem;
}

.standar-section {
    margin-bottom: 1.5rem;
}

.standar-section:last-child {
    margin-bottom: 0;
}

.standar-section h4 {
    color: #2c5282;
    margin: 0 0 0.5rem 0;
    font-size: 1.1rem;
}

.standar-section p {
    color: #666;
    margin: 0;
    line-height: 1.6;
}

.prosedur-content {
    background: #f8f9fa;
    padding: 1rem;
    border-radius: 5px;
    border-left: 3px solid #3498db;
    line-height: 1.6;
    color: #555;
}

.action-buttons {
    margin-top: 2rem;
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}
</style>
@endsection
