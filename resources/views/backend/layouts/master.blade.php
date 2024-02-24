<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOS Marketplace - Compliance Dashboard</title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="{{asset('./assets/css/sidebar.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/dashboard.css')}}" />

    <!-- Boxicon CDN -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- font awosome CDN -->
    <script
      src="https://kit.fontawesome.com/44f1800e1f.js"
      crossorigin="anonymous"
    ></script>

     {{-- Custom Css  --}}
     <link rel="stylesheet" href="{{asset('assets/css/custom_style.css')}}">

    <!-- Bootstrap CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.css"
      integrity="sha512-nnNXPeQKvNOEUd+TrFbofWwHT0ezcZiFU5E/Lv2+JlZCQwQ/ACM33FxPoQ6ZEFNnERrTho8lF0MCEH9DBZ/wWw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>

@include('backend.components.sidebar')

    <!-- Dashboard Home -->
    <section class="home-section">
@include('backend.components.header')
<div class="container mt-5">
    @yield('contents')

</div>
</section>
    
    <!-- script -->
    <script src="{{asset('./js/sidebar.js')}}"></script>
    <!-- chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.26.3/apexcharts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('./js/chart.js')}}"></script>
    <script src="{{asset('./js/pieChart.js')}}"></script>
    <script src="{{asset('./js/barChart.js')}}"></script>
    <script src="{{asset('./js/indigenousChart.js')}}"></script>
    <script src="{{asset('./js/mpsgChart.js')}}"></script>
    <script src="{{asset('./js/disabilityChart.js')}}"></script>
    <script src="{{asset('./js/priorityChart.js')}}"></script>
    <script src="{{asset('./js/environmentalChart.js')}}"></script>
  </body>
</html>
