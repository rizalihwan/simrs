<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
                        <li><a href="/home" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        @if (Auth::user()->role == 'admin')
                        {{-- Fitur Admin --}}
                        <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Users</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="{{ route('admin.index') }}" class="">Data Admin</a></li>
                                    <li><a href="{{ route('pengguna.index') }}" class="">Data Pengguna</a></li>
								</ul>
							</div>
                        </li>
                        <li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Data Pasiens</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="{{ route('pasien.index') }}" class="">Daftar Pasien</a></li>
                                    <li><a href="{{ route('pasien.index.inap') }}" class="">Rawat-Inap</a></li>
                                    <li><a href="{{ route('pasien.index.jalan') }}" class="">Rawat-Jalan</a></li>
								</ul>
							</div>
                        </li>
                        <li><a href="{{ route('dokter.index') }}" class=""><i class="lnr lnr-user"></i> <span>Data Dokter</span></a></li>
                        <li><a href="{{ route('poli.index') }}" class=""><i class="lnr lnr-user"></i> <span>Data Poliklinik</span></a></li>
                        <li><a href="#" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan</span></a></li>
                        {{-- End admin --}}
                        @else
                        {{-- Fitur Pengguna --}}
                        <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Users</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
                                    <li><a href="{{ route('pengguna.index') }}" class="">Data Pengguna</a></li>
								</ul>
							</div>
                        </li>
                        <li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Data Pasiens</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="{{ route('pasien.index') }}" class="">Daftar Pasien</a></li>
                                    <li><a href="{{ route('pasien.index.inap') }}" class="">Rawat-Inap</a></li>
                                    <li><a href="{{ route('pasien.index.jalan') }}" class="">Rawat-Jalan</a></li>
								</ul>
							</div>
                        </li>
                        <li><a href="{{ route('dokter.index') }}" class=""><i class="lnr lnr-user"></i> <span>Data Dokter</span></a></li>
                        <li><a href="#" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan</span></a></li>
                        @endif
                        {{-- End Pengguna --}}
                    </ul>
				</nav>
			</div>
		</div>
<!-- END LEFT SIDEBAR -->
