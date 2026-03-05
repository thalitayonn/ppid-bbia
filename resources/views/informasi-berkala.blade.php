@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Informasi Berkala</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a> / <a href="{{ url('/informasi-publik') }}">Informasi Publik</a> / Informasi Berkala
        </div>
    </div>
    
    <div class="content-section">
        <div class="content-card">
            <h2>Informasi Berkala PPID BBIA</h2>
            <p>Informasi berkala adalah informasi yang harus disediakan dan diumumkan secara berkala sesuai dengan ketentuan perundang-undangan.</p>
            
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-icon">
                        <img src="{{ asset('images/informasi publik.png') }}" alt="Informasi Tahunan">
                    </div>
                    <div class="info-content">
                        <h3>Informasi Tahunan</h3>
                        <p>Laporan tahunan PPID BBIA yang berisi ringkasan kegiatan dan pencapaian kinerja.</p>
                        <a href="#" class="info-link">Lihat Informasi Tahunan →</a>
                    </div>
                </div>
                
                <div class="info-card">
                    <div class="info-icon">
                        <img src="{{ asset('images/informasi publik.png') }}" alt="Informasi Semesteran">
                    </div>
                    <div class="info-content">
                        <h3>Informasi Semesteran</h3>
                        <p>Laporan semesteran PPID BBIA untuk periode Januari-Juni dan Juli-Desember.</p>
                        <a href="#" class="info-link">Lihat Informasi Semesteran →</a>
                    </div>
                </div>
                
                <div class="info-card">
                    <div class="info-icon">
                        <img src="{{ asset('images/informasi publik.png') }}" alt="Informasi Triwulanan">
                    </div>
                    <div class="info-content">
                        <h3>Informasi Triwulanan</h3>
                        <p>Laporan triwulanan PPID BBIA untuk setiap periode 3 bulanan.</p>
                        <a href="#" class="info-link">Lihat Informasi Triwulanan →</a>
                    </div>
                </div>
                
                <div class="info-card">
                    <div class="info-icon">
                        <img src="{{ asset('images/informasi publik.png') }}" alt="Informasi Bulanan">
                    </div>
                    <div class="info-content">
                        <h3>Informasi Bulanan</h3>
                        <p>Laporan bulanan PPID BBIA yang berisi statistik layanan informasi publik.</p>
                        <a href="#" class="info-link">Lihat Informasi Bulanan →</a>
                    </div>
                </div>
            </div>
            
            <h2>Daftar Informasi Berkala</h2>
            <div class="table-container">
                <table class="info-table">
                    <thead>
                        <tr>
                            <th>Jenis Informasi</th>
                            <th>Periode</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Laporan Tahunan PPID</td>
                            <td>2025</td>
                            <td>Desember 2025</td>
                            <td><a href="#" class="btn-link">Download</a></td>
                        </tr>
                        <tr>
                            <td>Laporan Semesteran</td>
                            <td>Genap 2025</td>
                            <td>Desember 2025</td>
                            <td><a href="#" class="btn-link">Download</a></td>
                        </tr>
                        <tr>
                            <td>Laporan Triwulanan</td>
                            <td>IV 2025</td>
                            <td>Desember 2025</td>
                            <td><a href="#" class="btn-link">Download</a></td>
                        </tr>
                        <tr>
                            <td>Statistik Layanan</td>
                            <td>November 2025</td>
                            <td>2025</td>
                            <td><a href="#" class="btn-link">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <h2>Keterangan</h2>
            <ul>
                <li>Informasi berkala tersedia dalam format PDF dan dapat diunduh secara gratis</li>
                <li>Informasi diperbarui secara berkala sesuai jadwal yang ditetapkan</li>
                <li>Untuk informasi yang tidak tersedia, dapat mengajukan permohonan informasi</li>
                <li>Masyarakat dapat memberikan masukan terkait kualitas informasi yang disediakan</li>
            </ul>
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
    max-width: 1000px;
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

.content-card ul {
    color: #333;
    line-height: 1.6;
    margin-bottom: 15px;
    padding-left: 20px;
}

.content-card li {
    margin-bottom: 8px;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin: 30px 0;
}

.info-card {
    background: #f8f9fa;
    border: 2px solid #1a3a5f;
    border-radius: 10px;
    padding: 30px;
    display: flex;
    gap: 20px;
    align-items: center;
}

.info-icon {
    width: 80px;
    height: 80px;
    border-radius: 10px;
    overflow: hidden;
    flex-shrink: 0;
}

.info-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.info-content h3 {
    color: #1a3a5f;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
}

.info-content p {
    color: #333;
    font-size: 14px;
    line-height: 1.5;
    margin-bottom: 15px;
}

.info-link {
    color: #1a3a5f;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
}

.info-link:hover {
    text-decoration: underline;
}

.table-container {
    overflow-x: auto;
    margin: 30px 0;
}

.info-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.info-table th {
    background: #1a3a5f;
    color: white;
    padding: 15px;
    text-align: left;
    font-weight: 600;
}

.info-table td {
    padding: 15px;
    border-bottom: 1px solid #e9ecef;
    color: #333;
}

.info-table tr:last-child td {
    border-bottom: none;
}

.info-table tr:hover {
    background: #f8f9fa;
}

.btn-link {
    color: #1a3a5f;
    text-decoration: none;
    font-weight: 600;
    padding: 5px 10px;
    border: 1px solid #1a3a5f;
    border-radius: 3px;
    font-size: 12px;
}

.btn-link:hover {
    background: #1a3a5f;
    color: white;
}
</style>

@endsection
