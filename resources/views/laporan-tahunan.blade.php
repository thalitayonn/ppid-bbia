@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-header-content">
        <h1>Laporan Publik</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a>
            <span>›</span>
            <span>Laporan Publik</span>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="content-full">
        <div class="service-detail">
            <div class="service-icon-large">
                <img src="{{ asset('images/statistik layanan.png') }}" alt="Laporan Publik">
            </div>
            
            <div class="service-content">
                <h2>Laporan Publik PPID BBIA</h2>
                <p>Berikut adalah daftar laporan publik PPID BBIA yang berisi informasi mengenai kinerja dan kegiatan dalam penyediaan layanan informasi publik.</p>
                
                @php
                    $laporans = \App\Models\LaporanPublik::where('is_active', true)->orderBy('tahun', 'desc')->orderBy('kategori')->orderBy('judul')->get();
                    $groupedLaporans = $laporans->groupBy('tahun');
                @endphp
                
                @forelse($groupedLaporans as $tahun => $items)
                    <div class="year-section">
                        <h3 class="year-title">📅 Tahun {{ $tahun }}</h3>
                        
                        @php
                            $categorizedItems = $items->groupBy('kategori');
                        @endphp
                        
                        @foreach($categorizedItems as $kategori => $laporanItems)
                            <div class="category-section">
                                <h4 class="category-title">{{ $kategori }}</h4>
                                
                                <div class="report-grid">
                                    @foreach($laporanItems as $laporan)
                                        <div class="report-item">
                                            <div class="report-header">
                                                <h5>{{ $laporan->judul }}</h5>
                                                <span class="report-badge">{{ $kategori }}</span>
                                            </div>
                                            
                                            <div class="report-content">
                                                <div class="report-info">
                                                    <span class="info-item">📅 {{ $laporan->tahun }}</span>
                                                    <span class="info-item">📁 {{ $kategori }}</span>
                                                </div>
                                                
                                                @if($laporan->file_path)
                                                    <div class="report-actions">
                                                        <a href="{{ asset($laporan->file_path) }}" target="_blank" class="btn btn-primary btn-sm">
                                                            📄 Download Laporan
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="no-file">
                                                        <span style="color: #666; font-size: 0.9rem;">File tidak tersedia</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                @empty
                    <div class="info-box">
                        <p>Belum ada laporan publik yang tersedia. Silakan kembali lagi nanti.</p>
                    </div>
                @endforelse
                
                <div class="action-buttons">
                    <a href="{{ url('/form-permohonan') }}" class="btn btn-primary">Ajukan Permohonan Informasi</a>
                    <a href="{{ url('/informasi-publik') }}" class="btn btn-outline">Lihat Informasi Publik</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.year-section {
    margin: 2.5rem 0;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 4px solid #3498db;
}

.year-title {
    color: #0f2338;
    margin: 0 0 1.5rem 0;
    font-size: 1.4rem;
}

.category-section {
    margin-bottom: 2rem;
}

.category-title {
    color: #2c5282;
    margin: 0 0 1rem 0;
    font-size: 1.2rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #e1e8ed;
}

.report-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-top: 1rem;
}

.report-item {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    padding: 1.5rem;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.report-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}

.report-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
}

.report-header h5 {
    color: #2c5282;
    margin: 0;
    font-size: 1.1rem;
    line-height: 1.4;
    flex: 1;
}

.report-badge {
    background: #3498db;
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.75rem;
    font-weight: 500;
    white-space: nowrap;
    margin-left: 0.5rem;
}

.report-content {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.report-info {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.info-item {
    background: #e8f4f8;
    color: #2c5282;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
}

.report-actions {
    margin-top: auto;
}

.btn-sm {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
}

.no-file {
    text-align: center;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 5px;
}

.action-buttons {
    margin-top: 2rem;
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}
</style>
@endsection
