@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-header-content">
        <h1>Informasi Publik</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a>
            <span>›</span>
            <span>Informasi Publik</span>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="content-full">
        <div class="service-detail">
            <div class="service-icon-large">
                <img src="{{ asset('images/informasi publik.png') }}" alt="Informasi Publik">
            </div>
            
            <div class="service-content">
                <h2>Informasi Publik PPID BBIA</h2>
                <p>PPID BBIA menyediakan berbagai informasi publik yang dapat diakses oleh masyarakat sesuai dengan ketentuan perundang-undangan yang berlaku.</p>
                
                @php
                    $informasis = \App\Models\InformasiPublik::where('is_active', true)->orderBy('kategori')->orderBy('urutan')->get();
                    $groupedInformasis = $informasis->groupBy('kategori');
                @endphp
                
                @forelse($groupedInformasis as $kategori => $items)
                    <div class="info-category">
                        <h3>{{ $kategori }}</h3>
                        <div class="info-list">
                            @foreach($items as $informasi)
                                <div class="info-item">
                                    <div class="info-content">
                                        <h4>{{ $informasi->judul }}</h4>
                                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($informasi->konten), 200) }}</p>
                                        
                                        @if($informasi->file_path)
                                            <div class="info-file">
                                                <a href="{{ asset($informasi->file_path) }}" target="_blank" class="btn btn-sm btn-info">
                                                    📄 Download Dokumen
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <div class="info-box">
                        <p>Informasi publik sedang dalam pembaruan. Silakan kembali lagi nanti.</p>
                    </div>
                @endforelse
                
                <div class="action-buttons">
                    <a href="{{ url('/form-permohonan') }}" class="btn btn-primary">Ajukan Permohonan Informasi</a>
                    <a href="{{ url('/keberatan') }}" class="btn btn-outline">Ajukan Keberatan</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.info-category {
    margin: 2rem 0;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 4px solid #3498db;
}

.info-category h3 {
    color: #0f2338;
    margin: 0 0 1rem 0;
    font-size: 1.3rem;
}

.info-item {
    background: white;
    padding: 1.5rem;
    margin-bottom: 1rem;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.2s ease;
}

.info-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.info-item h4 {
    color: #2c5282;
    margin: 0 0 0.5rem 0;
    font-size: 1.1rem;
}

.info-item p {
    color: #666;
    margin: 0 0 1rem 0;
    line-height: 1.6;
}

.info-file {
    margin-top: 1rem;
}

.btn-sm {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
}

.action-buttons {
    margin-top: 2rem;
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}
</style>
@endsection
