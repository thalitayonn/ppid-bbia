@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-header-content">
        <h1>Galeri Foto</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a>
            <span>›</span>
            <span>Galeri Foto</span>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="content-full">
        <div class="service-detail">
            <div class="service-icon-large">
                <img src="{{ asset('images/galeri.png') }}" alt="Galeri Foto">
            </div>
        </div>
        
        <div class="service-content">
            <h2>Dokumentasi Kegiatan PPID BBIA</h2>
            <p>Berikut adalah dokumentasi kegiatan PPID BBIA dalam memberikan layanan informasi publik kepada masyarakat.</p>
            
            <div class="gallery-grid">
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="{{ asset('images/beranda.jpg') }}" alt="Sosialisasi PPID">
                    </div>
                    <div class="gallery-caption">
                        <h3>Sosialisasi PPID</h3>
                        <p>Kegiatan sosialisasi keterbukaan informasi publik</p>
                        <span class="gallery-date">15 Februari 2026</span>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="{{ asset('images/beranda.jpg') }}" alt="Pelatihan PPID">
                    </div>
                    <div class="gallery-caption">
                        <h3>Pelatihan PPID</h3>
                        <p>Pelatihan peningkatan kapasitas petugas PPID</p>
                        <span class="gallery-date">10 Februari 2026</span>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="{{ asset('images/beranda.jpg') }}" alt="Layanan Informasi">
                    </div>
                    <div class="gallery-caption">
                        <h3>Layanan Informasi</h3>
                        <p>Melayani permohonan informasi publik</p>
                        <span class="gallery-date">5 Februari 2026</span>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="{{ asset('images/beranda.jpg') }}" alt="Rapat Koordinasi">
                    </div>
                    <div class="gallery-caption">
                        <h3>Rapat Koordinasi</h3>
                        <p>Rapat koordinasi PPID se-Jawa Barat</p>
                        <span class="gallery-date">1 Februari 2026</span>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="{{ asset('images/beranda.jpg') }}" alt="Workshop">
                    </div>
                    <div class="gallery-caption">
                        <h3>Workshop Keterbukaan Informasi</h3>
                        <p>Workshop implementasi UU Keterbukaan Informasi</p>
                        <span class="gallery-date">25 Januari 2026</span>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="{{ asset('images/beranda.jpg') }}" alt="Kunjungan Kerja">
                    </div>
                    <div class="gallery-caption">
                        <h3>Kunjungan Kerja</h3>
                        <p>Kunjungan kerja PPID Kementerian Perindustrian</p>
                        <span class="gallery-date">20 Januari 2026</span>
                    </div>
                </div>
            </div>
            
            <div class="gallery-info">
                <h2>Informasi Galeri</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <h3>Total Foto</h3>
                        <p>156 foto dokumentasi kegiatan PPID BBIA</p>
                    </div>
                    <div class="info-item">
                        <h3>Kategori</h3>
                        <p>Sosialisasi, Pelatihan, Layanan, Rapat, Workshop</p>
                    </div>
                    <div class="info-item">
                        <h3>Periode</h3>
                        <p>Januari 2025 - Februari 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.page-header {
    background: linear-gradient(135deg, #1a3a5f, #2c5282);
    color: white;
    padding: 40px 0;
    margin-bottom: 40px;
}

.page-header h1 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 10px;
}

.breadcrumb {
    font-size: 14px;
    opacity: 0.8;
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
}

.content-card {
    background: white;
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.content-card h2 {
    color: #1a3a5f;
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 15px;
    margin-top: 30px;
}

.content-card h2:first-child {
    margin-top: 0;
}

.content-card p {
    color: #333;
    line-height: 1.6;
    margin-bottom: 15px;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin: 30px 0;
}

.gallery-item {
    background: #f8f9fa;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.gallery-image {
    height: 200px;
    overflow: hidden;
}

.gallery-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-image img {
    transform: scale(1.05);
}

.gallery-caption {
    padding: 20px;
}

.gallery-caption h3 {
    color: #1a3a5f;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 8px;
}

.gallery-caption p {
    color: #333;
    font-size: 14px;
    margin-bottom: 10px;
}

.gallery-date {
    color: #6c757d;
    font-size: 12px;
    font-weight: 500;
}

.gallery-info {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 30px;
    margin: 30px 0;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.info-item {
    text-align: center;
}

.info-item h3 {
    color: #1a3a5f;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 8px;
}

.info-item p {
    color: #333;
    font-size: 14px;
    margin: 0;
}
</style>

@endsection
