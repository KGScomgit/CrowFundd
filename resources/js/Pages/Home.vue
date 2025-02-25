<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold text-white">Ayo Donasi</a>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari donasi..." aria-label="Search">
          <button class="btn btn-light" type="submit">Search</button>
        </form>
      </div>
    </nav>
  
    <div class="hero">
      <h1>Selamat datang di <span class="highlight">Ayo Donasi</span></h1>
    </div>
  
    <div class="container mt-5">
      <h2 class="text-center mb-4 text-success fw-bold">Ayo Berdonasi untuk Mereka yang Membutuhkan</h2>
      
      <div class="row g-4">
        <div v-for="index in 6" :key="index" class="col-md-4">
          <div class="card shadow-sm">
            <img :src="getImageUrl('dona.jpeg')" class="card-img-top" alt="donasi">
            <div class="card-body">
              <h5 class="card-title">Bantu Sesama</h5>
              <p class="card-text">Mari berbagi untuk sesama yang membutuhkan uluran tangan.</p>
              <a href="/donation" class="btn btn-success btn-lg w-100">Donasi Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    methods: {
      getImageUrl(filename) {
        return `/img/${filename}`;
      }
    }
  }
  </script>
  
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
  
  body {
    font-family: 'Roboto', sans-serif;
    background-color: #f8f9fa;
  }
  

  .hero {
    position: relative;
    background-image: url('/img/donasi.jpg');
    height: 400px;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    font-size: 36px;
    font-weight: bold;
  }
  
  .hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
  }
  
  .hero h1 {
    position: relative;
    z-index: 2;
  }
  
  .hero .highlight {
    color: #ffcc00;
  }
  

  .container {
    max-width: 1200px;
    margin: auto;
  }
  

  .card {
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
  }
  
  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
  
  .card-img-top {
    height: 200px;
    object-fit: cover;
  }
  
  .card-body {
    text-align: center;
  }
  
  .btn-success {
    transition: 0.3s;
  }
  
  .btn-success:hover {
    background-color: #218838;
  }
  </style>
  