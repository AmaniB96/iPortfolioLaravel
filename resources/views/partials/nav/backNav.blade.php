<aside class="sidebarB">
    <div class="profile">
        <img src="{{ asset('storage/' . $about->avatar->image) }}" class="profile-avatar" width="300" height="300" alt="Profile">
        <h2 class="profile-name">Gary Axen</h2>
        <div class="profile-social">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-solid fa-envelope"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li><a href="{{ route('home') }}#about"><i class="fa-solid fa-right-to-bracket"></i> Log Out</a></li>
            <li><a href=""><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="" class="active"><i class="fa-solid fa-user"></i> About</a></li>
            <li><a href=""><i class="fa-solid fa-book"></i> Portfolio</a></li>
            <li><a href=""><i class="fa-solid fa-briefcase"></i> Services</a></li>
            <li><a href=""><i class="fa-solid fa-briefcase"></i> Testimonials</a></li>
            <li><a href=""><i class="fa-solid fa-phone"></i> Contact</a></li>
            <li><a href=""><i class="fa-solid fa-envelope"></i> Mailbox</a></li>
        </ul>
    </nav>
</aside>