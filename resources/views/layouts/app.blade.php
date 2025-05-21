<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank of Azad Jammu and Kashmir</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .footer { background-color: #228B22; color: white; padding: 40px 0; }
    .footer h5 { border-bottom: 1px solid white; padding-bottom: 10px; margin-bottom: 15px; }
    .footer-bottom { background-color: #006600; color: white; text-align: center; padding: 10px 0; }
    .nav-link { color: white !important; }
    .navbar { background-color: #006600; }
    header { background: #004d00; color: white; padding: 30px 0; text-align: center; }
  .social-icons i {
  font-size: 18px; /* Slightly smaller */
  color: white;
  transition: color 0.3s ease, background 0.3s ease;
  padding: 8px;
  border-radius: 50%;
}

.social-icons a:hover i {
  background: linear-gradient(135deg, #FFA500, #228B22); /* orange to green */
  color: white;
}


  </style>
</head>
<body>

  <header>
    <h1>Bank of Azad Jammu and Kashmir</h1>
    <p>Your trusted financial partner in progress.</p>
  </header>
   {{-- navbar  --}}

  <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to right, #228B22, #FFA500);">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">Bank of AJK</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Financial Rates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Charges</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <main class="py-5">
    @yield('content')
  </main>
{{-- footer class --}}
  <!-- Footer -->
<footer class="footer" style="background-color: #228B22; color: white; padding: 40px 0;">
  <div class="container">

    <!-- Logo + Slogan + Social Icons -->
    <div class="text-center mb-5">
      <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/logo.png" alt="Bank Logo" style="width: 120px;">
      <p class="mt-3">
        A growing Bank in Azad Jammu & Kashmir with 87 branches, mobilizing savings,<br>
        promoting economic development, and offering tailored banking solutions for equal access to resources.
      </p>
      {{-- social icons --}}
      <div class="social-icons mt-3">
        <a href="https://www.facebook.com/BAJKOfficial/" class="text-white me-3"><i class="bi bi-facebook"></i></a>
        <a href="https://twitter.com/BAJKOfficial" class="text-white me-3"><i class="bi bi-twitter"></i></a>
        <a href="https://www.linkedin.com/company/bank-of-azad-kashmir" class="text-white me-3"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.youtube.com/@BANKOFAJK.Official" class=""><i class="bi bi-youtube"></i></a>
      </div>
    </div>

    <!-- Footer Columns -->
    <div class="row">
      <!-- Quick Links -->
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
          <li><a href="#" class="text-white text-decoration-none">Branch Network</a></li>
          <li><a href="#" class="text-white text-decoration-none">News & Update</a></li>
          <li><a href="#" class="text-white text-decoration-none">Gallery</a></li>
          <li><a href="#" class="text-white text-decoration-none">Downloads</a></li>
          <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
        </ul>
      </div>

      <!-- Popular Posts -->
      <div class="col-md-4">
        <h5>Popular Posts</h5>
        <ul class="list-unstyled">
          <li>Advance Salary Loan - <small>May 16, 2025</small></li>
          <li>57th Board of Directors - <small>July 04, 2022</small></li>
          <li>Finance Minister Khan Visit - <small>Sep 04, 2022</small></li>
          <li>Khan Abdul Majid Address - <small>Sep 22, 2022</small></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-4">
        <h5>Contact Us</h5>
        <address>
          Head Office, Bank Square,<br>
          Chattar Domel,<br>
          Muzaffarabad, 13100<br>
          Azad Jammu & Kashmir, Pakistan<br>
          <strong>Phone:</strong> +92 (5822)-924244<br>
          <strong>Email:</strong> <a href="mailto:info@bankajk.com" class="text-white">info@bankajk.com</a>
        </address>
      </div>
    </div>
  </div>
</footer>

<!-- Footer Bottom -->
<div class="footer-bottom text-center py-3" style="background-color: #006600; color: white;">
  &copy; 2025 Bank of Azad Jammu and Kashmir. All rights reserved.
</div>

  <div class="footer-bottom">
    &copy; 2025 Bank of Azad Jammu and Kashmir. All rights reserved.
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
