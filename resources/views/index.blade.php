<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - {{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset('dist/img/logo/logosekolah.png') }}" type="image/x-icon">
    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="./dist/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/demo.min.css?1684106062') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="{{ asset('dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page">
        <!-- Navbar -->
        <header class="navbar navbar-expand-md d-print-none">
            <div class="container-xl">
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href=".">
                        <img src="{{ asset('dist/img/logo/logosekolah.png') }}" width="110" height="32"
                            alt="SMA Negeri 2 Sumatera Barat" class="navbar-brand-image">
                    </a>
                    SMA N 2 Sumatera Barat
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            @if (auth()->user()->student->gender == 'P')
                                <span class="avatar avatar-sm"style="background-image: url({{ asset('dist/img/user/woman.jpg') }});"></span>
                            @else
                                <span class="avatar avatar-sm"style="background-image: url({{ asset('dist/img/user/man.jpg') }});"></span>
                            @endif
                            <div class="d-none d-xl-block ps-2">
                                <div>{{ ucwords(strtolower(auth()->user()->name)) }}</div>
                                <div class="mt-1 small text-muted">{{auth()->user()->email}}</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                Overview
                            </div>
                            <h2 class="page-title">
                                Dashboard
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards mb-5">
                        <div class="col-12">
                            <div class="card card-md">
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-school">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                                            <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-10">
                                            <h3 class="h1">Halo {{ ucwords(strtolower(auth()->user()->name)) }}👋, Selamat Datang</h3>
                                            <div class="markdown text-muted">
                                                Halaman ini berisi semua informasi penting tentang dirimu. Kamu bisa
                                                melihat data pribadi, informasi akademik, serta data lainnya dengan
                                                mudah di sini.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-status-top bg-success"></div>
                                <div class="card-header">
                                    <h3 class="card-title">Informasi Pribadi</h3>
                                </div>
                                <div class="card-body">
                                    <div class="datagrid" style="gap: 20px;">
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Nama</div>
                                            <div class="datagrid-content">{{auth()->user()->name}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">NIPD</div>
                                            <div class="datagrid-content">{{auth()->user()->student->nipd}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">NISN</div>
                                            <div class="datagrid-content">{{auth()->user()->student->nisn}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Jenis Kelamin</div>
                                            <div class="datagrid-content">
                                                @if (auth()->user()->student->gender == 'P')
                                                    <span class="status status-pink">Perempuan</span>
                                                @else
                                                    <span class="status status-primary">Laki-Laki</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Tempat Lahir</div>
                                            <div class="datagrid-content">{{auth()->user()->student->place_of_birth}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Tanggal Lahir</div>
                                            <div class="datagrid-content">
                                                {{ auth()->user()->student->date_of_birth ? \Carbon\Carbon::parse(auth()->user()->student->date_of_birth)->translatedFormat('d F Y') : '' }}
                                            </div>                                            
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">NIK</div>
                                            <div class="datagrid-content">{{auth()->user()->student->nik}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Agama</div>
                                            <div class="datagrid-content">{{auth()->user()->student->religion}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="ribbon ribbon-top bg-green">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-map-2">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 18.5l-3 -1.5l-6 3v-13l6 -3l6 3l6 -3v7.5" />
                                        <path d="M9 4v13" />
                                        <path d="M15 7v5.5" />
                                        <path
                                            d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />
                                        <path d="M19 18v.01" />
                                    </svg>
                                </div>
                                <div class="card-header">
                                    <h3 class="card-title">Alamat & Kontak Pribadi</h3>
                                </div>
                                <div class="card-body">
                                    <div class="datagrid" style="gap: 20px;">
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Alamat</div>
                                            <div class="datagrid-content">{{auth()->user()->student->contact->address ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">RT</div>
                                            <div class="datagrid-content">{{auth()->user()->student->contact->rt ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">RW</div>
                                            <div class="datagrid-content">{{auth()->user()->student->contact->rw ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Dusun</div>
                                            <div class="datagrid-content">{{auth()->user()->student->contact->dusun ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Kelurahan</div>
                                            <div class="datagrid-content">{{auth()->user()->student->contact->kelurahan ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Kecamatan</div>
                                            <div class="datagrid-content">{{auth()->user()->student->contact->kecamatan ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Kode Pos</div>
                                            <div class="datagrid-content">{{auth()->user()->student->contact->postal_code ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Jenis Tinggal</div>
                                            <div class="datagrid-content">{{auth()->user()->student->contact->living_type ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Alat Transportasi</div>
                                            <div class="datagrid-content">{{auth()->user()->student->contact->transportation ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Telepon</div>
                                            <div class="datagrid-content">{{auth()->user()->student->contact->phone ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">HP</div>
                                            <div class="datagrid-content">
                                                <span class="status status-success">{{auth()->user()->student->contact->mobile ?? '--'}}</span>
                                            </div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">E-Mail</div>
                                            <div class="datagrid-content">{{auth()->user()->email ?? '--'}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card card-stacked">
                              <div class="card-status-start bg-success"></div>
                                <div class="card-header">
                                    <h3 class="card-title">Informasi Ayah</h3>
                                </div>
                                <div class="card-body">
                                    <div class="datagrid row" style="gap: 20px;">
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Nama Ayah</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->father_name ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Tahun Lahir Ayah</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->father_birth_year ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Jenjang Pendidikan Ayah</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->father_education_level ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Pekerjaan Ayah</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->father_occupation ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Penghasilan Ayah</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->father_income ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">NIK Ayah</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->father_nik ?? '--'}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card card-stacked">
                            <div class="card-status-start bg-success"></div>
                                <div class="card-header">
                                    <h3 class="card-title">Informasi Ibu</h3>
                                </div>
                                <div class="card-body">
                                    <div class="datagrid row" style="gap: 20px;">
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Nama Ibu</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->mother_name ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Tahun Lahir Ibu</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->mother_birth_year ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Jenjang Pendidikan Ibu</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->mother_education_level ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Pekerjaan Ibu</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->mother_occupation ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Penghasilan Ibu</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->mother_income ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">NIK Ibu</div>
                                            <div class="datagrid-content">{{auth()->user()->student->family->mother_nik ?? '--'}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="card">
                              <div class="ribbon bg-green">
                                 <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z" /></svg>
                              </div>
                                <div class="card-header">
                                    <h3 class="card-title">Penerimaan Bantuan</h3>
                                </div>
                                <div class="card-body">
                                    <div class="datagrid" style="gap: 20px;">
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Penerima KPS</div>
                                            <div class="datagrid-content">{{auth()->user()->student->assistance->kps_holder ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">No. KPS</div>
                                            <div class="datagrid-content">{{auth()->user()->student->assistance->kps_number ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Penerima KIP</div>
                                            <div class="datagrid-content">{{auth()->user()->student->assistance->kip_holder ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Nomor KIP</div>
                                            <div class="datagrid-content">{{auth()->user()->student->assistance->kip_number ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Nama di KIP</div>
                                            <div class="datagrid-content">{{auth()->user()->student->assistance->kip_name ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Nomor KKS</div>
                                            <div class="datagrid-content">{{auth()->user()->student->assistance->kks_number ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">No Registrasi Akta Lahir</div>
                                            <div class="datagrid-content">{{auth()->user()->student->assistance->registration_number ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Layak PIP (usulan dari sekolah)</div>
                                            <div class="datagrid-content">{{auth()->user()->student->assistance->eligible_pip ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Alasan Layak PIP</div>
                                            <div class="datagrid-content">{{auth()->user()->student->assistance->pip_reason ?? '--'}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Informasi Sekolah</h3>
                                </div>
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-buildings">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 21v-15c0 -1 1 -2 2 -2h5c1 0 2 1 2 2v15" />
                                            <path d="M16 8h2c1 0 2 1 2 2v11" />
                                            <path d="M3 21h18" />
                                            <path d="M10 12v0" />
                                            <path d="M10 16v0" />
                                            <path d="M10 8v0" />
                                            <path d="M7 12v0" />
                                            <path d="M7 16v0" />
                                            <path d="M7 8v0" />
                                            <path d="M17 12v0" />
                                            <path d="M17 16v0" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="datagrid" style="gap: 20px;">
                                        <div class="datagrid-item">
                                            <div class="datagrid-title">Rombel Saat Ini</div>
                                            <div class="datagrid-content">{{auth()->user()->student->school->current_class ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item">
                                            <div class="datagrid-title">No Peserta Ujian Nasional</div>
                                            <div class="datagrid-content">{{auth()->user()->student->school->national_exam_number ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item">
                                            <div class="datagrid-title">SKHUN</div>
                                            <div class="datagrid-content">{{auth()->user()->student->school->skhun_number ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item">
                                            <div class="datagrid-title">No Seri Ijazah</div>
                                            <div class="datagrid-content">{{auth()->user()->student->school->diploma_number ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item">
                                            <div class="datagrid-title">Sekolah Asal</div>
                                            <div class="datagrid-content">{{auth()->user()->student->school->previous_school ?? '--'}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-8 col-12">
                            <div class="card">
                              <div class="ribbon bg-green">
                                 <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h.5" /><path d="M18 22l3.35 -3.284a2.143 2.143 0 0 0 .005 -3.071a2.242 2.242 0 0 0 -3.129 -.006l-.224 .22l-.223 -.22a2.242 2.242 0 0 0 -3.128 -.006a2.143 2.143 0 0 0 -.006 3.071l3.355 3.296z" /></svg>
                              </div>
                                <div class="card-header">
                                    <h3 class="card-title">Informasi Wali</h3>
                                </div>
                                <div class="card-body">
                                    <div class="datagrid" style="gap: 20px;">
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Nama Wali</div>
                                            <div class="datagrid-content">{{auth()->user()->student->guardian->name ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Tahun Lahir Wali</div>
                                            <div class="datagrid-content">{{auth()->user()->student->guardian->birth_year ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Jenjang Pendidikan Wali</div>
                                            <div class="datagrid-content">{{auth()->user()->student->guardian->education_level ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Pekerjaan Wali</div>
                                            <div class="datagrid-content">{{auth()->user()->student->guardian->occupation ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Penghasilan Wali</div>
                                            <div class="datagrid-content">{{auth()->user()->student->guardian->income ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">NIK Wali</div>
                                            <div class="datagrid-content">{{auth()->user()->student->guardian->nik ?? '--'}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Rekening Bank</h3>
                                </div>
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                                            <path d="M3 10l18 0" />
                                            <path d="M7 15l.01 0" />
                                            <path d="M11 15l2 0" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="datagrid" style="gap: 20px;">
                                        <div class="datagrid-item">
                                            <div class="datagrid-title">Bank</div>
                                            <div class="datagrid-content">{{auth()->user()->student->bank->bank_name ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item">
                                            <div class="datagrid-title">Nomor Rekening Bank</div>
                                            <div class="datagrid-content">{{auth()->user()->student->bank->account_number ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item">
                                            <div class="datagrid-title">Rekening Atas Nama</div>
                                            <div class="datagrid-content">{{auth()->user()->student->bank->account_holder ?? '--'}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card bg-success-lt">
                                {{-- <div class="card-status-bottom bg-success"></div> --}}
                                <div class="card-header">
                                    <h3 class="card-title">Informasi Tambahan</h3>
                                </div>
                                <div class="card-body">
                                    <div class="datagrid" style="gap: 20px;">
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Kebutuhan Khusus</div>
                                            <div class="datagrid-content">{{auth()->user()->student->additional->special_needs ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Anak ke-berapa</div>
                                            <div class="datagrid-content">{{auth()->user()->student->additional->child_number ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Lintang</div>
                                            <div class="datagrid-content">{{auth()->user()->student->additional->latitude ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Bujur</div>
                                            <div class="datagrid-content">{{auth()->user()->student->additional->longtitude ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">No KK</div>
                                            <div class="datagrid-content">{{auth()->user()->student->additional->kk_number ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Berat Badan</div>
                                            <div class="datagrid-content">{{auth()->user()->student->additional->weight ?? '--'}} Kg</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Tinggi Badan</div>
                                            <div class="datagrid-content">{{auth()->user()->student->additional->height ?? '--'}} cm</div>
                                        </div>
                                        <div class="datagrid-item col-md-6">
                                            <div class="datagrid-title">Lingkar Kepala</div>
                                            <div class="datagrid-content">{{auth()->user()->student->additional->head_circumference ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Jumlah Saudara Kandung</div>
                                            <div class="datagrid-content">{{auth()->user()->student->additional->sibling_count ?? '--'}}</div>
                                        </div>
                                        <div class="datagrid-item col-md-12">
                                            <div class="datagrid-title">Jarak Rumah ke Sekolah (KM)</div>
                                            <div class="datagrid-content">{{auth()->user()->student->additional->distance_to_school ?? '--'}} Km</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-status-bottom bg-success"></div>
                                <div class="card-header">
                                    <h3 class="card-title">Perbaikan Data</h3>
                                </div>
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            {{-- <label class="form-label">Perbaikan Data</label> --}}
                                            <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Masukkan perbaikan disini.."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0 mx-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2024
                                    <a href="#" class="link-success">Achmad Syahrian</a>.
                                    All rights reserved.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('dist/libs/jsvectormap/dist/maps/world.js?1684106062') }}" defer></script>
    <script src="{{ asset('dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('dist/js/tabler.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('dist/js/demo.min.js?1684106062') }}" defer></script>
</body>

</html>
