<div style="width: 100%; height: full; position: relative; background-color: #F8FAFD; z-index: 2000">
    <div style="position: absolute;background-color: white ;width: 100%; height: 100%; z-index: 50"></div>
    <div class="sidebar">
        <div style="width: 100%; display: flex; justify-content: flex-end; padding: 4px;">
            <button id="closeToggle" style="background-color: transparent; border: none; cursor:pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                     stroke="#21BF73" class="menu">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div style="display: flex; flex-direction: column; align-items: flex-end; justify-content: flex-end; padding-right: 10px; row-gap: 0.5rem;">
            @guest
                <a href="{{ route('login') }}" class="w3-bar-item w3-button"
                   style="text-align: end; width: fit-content; padding: 4px 8px; background-color: #21BF73; color: white; border-radius: 0.375rem;">Masuk</a>
                <a href="{{ route('register') }}" class="w3-bar-item w3-button"
                   style="text-align: end; width: fit-content; padding: 4px 8px; background-color: #21BF73; color: white; border-radius: 0.375rem;">Daftar</a>
            @endguest
            @auth
                <p class="w3-bar-item w3-button"
                   style="text-align: end; width: fit-content; padding: 4px 8px; background-color: #F1F864; color: white; border-radius: 0.375rem;">Halo, 
                    {{ Auth::user()->name }}
                </p>
            @endauth
        </div>
        <ul style="margin-top: 8px;text-decoration: none; text-align: end; list-style-type: none; display: flex; flex-direction: column; row-gap: 0.75rem;">
            <li>
                <a href="{{ route('home') }}" class="menu-sidebar" style="text-align: end; color: #21BF73">Beranda</a>
            </li>
            <li>
                <a href="{{ route('profil') }}" class="menu-sidebar" style="text-align: end; color: #21BF73">Profil</a>
            </li>
            <li>
                <a href="{{url('Melihat_Jadwal_Dokter')}}" class="menu-sidebar" style="text-align: end; color: #21BF73">Jadwal Dokter</a>
            </li>
            <li>
                <a href="#" class="menu-sidebar" style="text-align: end; color: #21BF73">Kunjungan Pasien</a>
            </li>
            <li>
                <a href="{{ url('pengambilan-obat') }}" class="menu-sidebar" style="text-align: end; color: #21BF73">Pengambilan Obat</a>
            </li>
            <li>
                <a href="{{ route('jadwalpertemuan') }}" class="menu-sidebar" style="text-align: end; color: #21BF73">Jadwalkan Pertemuan</a>
            </li>
            <li>
                <a href="{{ route('queue.index') }}" class="menu-sidebar" style="text-align: end; color: #21BF73">Antrian</a>
            </li>
            <li>
                <a href="#" class="menu-sidebar" style="text-align: end; color: #21BF73">Artikel Online</a>
            </li>
            <li>
                <a href="{{ url('fasilitas') }}" class="menu-sidebar" style="text-align: end; color: #21BF73">Fasilitas</a>
            </li>
            <li>
                <a href="{{ route('feedback') }}" class="menu-sidebar" style="text-align: end; color: #21BF73">Feedback</a>
            </li>
            @auth
            <li>
                <a href="{{ route('logout') }}" class="w3-bar-item w3-button" style="text-align: end; width: fit-content; padding: 4px 8px; background-color: #21BF73; color: white; border-radius: 0.375rem;"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Log out
</a>

<!-- Form untuk logout -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</li>
@endauth
        </ul>
    </div>
</div>
<script>
    window.addEventListener("DOMContentLoaded", () => {
        document.getElementById("openToggle").addEventListener("click", () => {
            const sidebarEl = document.getElementsByClassName("sidebar")[0];
            sidebarEl.classList.toggle("hidden");
        });
        document.getElementById("closeToggle").addEventListener("click", () => {
            const sidebarEl = document.getElementsByClassName("sidebar")[0];
            sidebarEl.classList.toggle("hidden");
        });
    });
</script>