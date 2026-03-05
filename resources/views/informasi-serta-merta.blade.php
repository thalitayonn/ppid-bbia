@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Informasi Serta Merta</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a> / <a href="{{ url('/informasi-publik') }}">Informasi Publik</a> / Informasi Serta Merta
        </div>
    </div>
    
    <div class="content-section">
        <div class="content-card">
            <h2>Informasi Serta Merta PPID BBIA</h2>
            <p>Informasi serta merta adalah informasi yang dapat mengancam hajat hidup orang banyak atau ketenteraman masyarakat yang harus segera disampaikan.</p>
            
            <div class="alert-box">
                <h3>⚠️ Kategori Informasi Serta Merta</h3>
                <p>Informasi yang termasuk kategori serta merta meliputi:</p>
                <ul>
                    <li>Bencana alam atau keadaan darurat</li>
                    <li>Krisis kesehatan masyarakat</li>
                    <li>Gangguan keamanan dan ketertiban</li>
                    <li>Kebijakan darurat pemerintah</li>
                    <li>Informasi lain yang dapat membahayakan keselamatan umum</li>
                </ul>
            </div>
            
            <h2>Informasi Serta Merta Tersedia</h2>
            <div class="info-list">
                <div class="info-item">
                    <div class="info-header">
                        <h3>Protokol Kesehatan COVID-19</h3>
                        <span class="info-date">15 Februari 2026</span>
                    </div>
                    <p>Panduan protokol kesehatan di lingkungan BBIA sesuai ketentuan pemerintah.</p>
                    <a href="#" class="btn-link">Download PDF</a>
                </div>
                
                <div class="info-item">
                    <div class="info-header">
                        <h3>Prosedur Evakuasi Darurat</h3>
                        <span class="info-date">10 Februari 2026</span>
                    </div>
                    <p>Tata cara evakuasi darurat pengunjung dan pegawai BBIA dalam situasi bahaya.</p>
                    <a href="#" class="btn-link">Download PDF</a>
                </div>
                
                <div class="info-item">
                    <div class="info-header">
                        <h3>Kontak Darurat BBIA</h3>
                        <span class="info-date">5 Februari 2026</span>
                    </div>
                    <p>Daftar kontak darurat dan nomor telepon penting di lingkungan BBIA.</p>
                    <a href="#" class="btn-link">Download PDF</a>
                </div>
            </div>
            
            <h2>Mekanisme Penyampaian</h2>
            <p>Informasi serta merta akan disampaikan melalui:</p>
            <ul>
                <li>Website resmi PPID BBIA</li>
                <li>Papan pengumuman di kantor BBIA</li>
                <li>Media sosial resmi BBIA</li>
                <li>Surat edaran internal dan eksternal</li>
                <li>Press release kepada media massa</li>
            </ul>
            
            <h2>Waktu Penyampaian</h2>
            <p>Informasi serta merta harus disampaikan dalam waktu:</p>
            <ul>
                <li><strong>Segera:</strong> Paling lambat 2x24 jam sejak kejadian</li>
                <li><strong>Update:</strong> Setiap ada perkembangan penting</li>
                <li><strong>Klarifikasi:</strong> Segera setelah ada informasi yang akurat</li>
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
    max-width: 800px;
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

.alert-box {
    background: #fff3cd;
    border: 2px solid #ffc107;
    border-radius: 10px;
    padding: 20px;
    margin: 20px 0;
}

.alert-box h3 {
    color: #856404;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
}

.alert-box p {
    color: #856404;
    margin-bottom: 10px;
}

.alert-box ul {
    color: #856404;
}

.info-list {
    margin: 30px 0;
}

.info-item {
    background: #f8f9fa;
    border: 2px solid #1a3a5f;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
}

.info-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.info-header h3 {
    color: #1a3a5f;
    font-size: 18px;
    font-weight: 600;
}

.info-date {
    color: #6c757d;
    font-size: 14px;
}

.info-item p {
    margin-bottom: 15px;
}

.btn-link {
    color: #1a3a5f;
    text-decoration: none;
    font-weight: 600;
    padding: 8px 16px;
    border: 1px solid #1a3a5f;
    border-radius: 5px;
    font-size: 14px;
    display: inline-block;
}

.btn-link:hover {
    background: #1a3a5f;
    color: white;
}
</style>

@endsection
