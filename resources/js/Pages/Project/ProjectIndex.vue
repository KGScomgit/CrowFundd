<template>
    <div class="container mt-5">
      <h1 class="text-center text-success mb-4">Daftar Donasi</h1>
  
      <div class="text-end mb-3">
        <a href="/donation/create" class="btn btn-success btn-lg shadow-sm">
          + Tambah Donasi
        </a>
      </div>
  
      <div v-if="projects.length === 0" class="alert alert-warning text-center">
        <strong>Belum Ada Data Donasi</strong>
      </div>
  
      <div v-else class="card shadow-sm">
        <div class="card-body">
          <table class="table table-hover text-center">
            <thead class="table-success">
              <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Target</th>
                <th>Donasi</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="project in projects" :key="project.id">
                <td>{{ project.title }}</td>
                <td>{{ project.description }}</td>
                <td>{{ project.target_amount }}</td>
                <td>{{ project.current_amount }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      projects: Array
    }
  };
  </script>
  
  <style>
  .container {
    max-width: 900px;
    margin: auto;
  }
  
  h1 {
    font-weight: bold;
  }
  
  .btn-success {
    transition: 0.3s;
  }
  
  .btn-success:hover {
    background-color: #218838;
  }
  
  .card {
    border-radius: 10px;
  }
  
  .table {
    margin-top: 20px;
  }
  
  .table-hover tbody tr:hover {
    background-color: #f1f1f1;
  }
  
  .alert {
    font-size: 18px;
    padding: 15px;
    border-radius: 8px;
  }
  </style>
  