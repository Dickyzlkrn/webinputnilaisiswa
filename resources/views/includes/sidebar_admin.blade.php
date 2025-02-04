
            <li {{$pages=='dashboard' ? 'class=active' : ''}}><a class="nav-link" href="{{route('dashboard')}}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li class="nav-item dropdown {{$pages=='settings' || $pages=='resetpassword' || $pages=='passwordujian'  ? 'active' : ''}}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span>Pengaturan</span></a>
                <ul class="dropdown-menu">

                    <li {{$pages=='settings' ? 'class=active' : ''}}><a class="nav-link" href="{{route('settings')}}"><i class="fas fa-cog"></i> <span>Aplikasi</span></a></li>
                    <li {{$pages=='resetpassword' ? 'class=active' : ''}}><a class="nav-link" href="{{route('settings.resetpassword')}}"><i class="fas fa-retweet"></i> <span>Reset Password</span></a></li>
                    <li {{$pages=='passwordujian' ? 'class=active' : ''}}><a class="nav-link" href="{{route('settings.passwordujian')}}"><i class="fas fa-key"></i><span>Password Ujian</span></a></li>
                </ul>
            </li>
            <li class="nav-item dropdown {{$pages=='users' || $pages=='tapel' || $pages=='siswa' || $pages=='guru'|| $pages=='kelas' || $pages=='guru' || $pages=='mapel' ? 'active' : ''}}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-dumpster"></i>  <span>Mastering</span></a>
                <ul class="dropdown-menu">

                    <li {{$pages=='users' ? 'class=active' : ''}}><a class="nav-link" href="{{route('users')}}"><i class="fas fa-building"></i> <span>User</span></a></li>
                    <li {{$pages=='tapel' ? 'class=active' : ''}}><a class="nav-link" href="{{route('tapel')}}"><i class="fas fa-passport"></i> <span>Tahun Pelajaran</span></a></li>
                    <li {{$pages=='kelas' ? 'class=active' : ''}}><a class="nav-link" href="{{route('kelas')}}"><i class="fas fa-school"></i><span>Kelas</span></a></li>
                    <li {{$pages=='siswa' ? 'class=active' : ''}}><a class="nav-link" href="{{route('siswa')}}"><i class="fas fa-user-graduate"></i><span>Siswa</span></a></li>
                    <li {{$pages=='guru' ? 'class=active' : ''}}><a class="nav-link" href="{{route('guru')}}"><i class="fas fa-chalkboard-teacher"></i><span>Guru</span></a></li>
                </ul>
            </li>


            


