<template>
  <div class="container">
    <h2 class="text-center mb-4">Form Donasi</h2>
    <form @submit.prevent="submitForm" class="donation-form">
      <div class="mb-3">
        <label class="form-label fw-bold">Donasi</label>
        <input type="text" v-model="project.title" class="form-control" placeholder="Masukkan" required />
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Deskripsi</label>
        <textarea v-model="project.description" class="form-control" rows="3" placeholder="Tuliskan deskripsi singkat..."></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Total Target Donasi (Rp)</label>
        <input type="number" v-model="project.target_amount" class="form-control" placeholder="Masukkan target dana..." required />
      </div>
      <button type="submit" class="btn btn-success btn-lg w-100">Simpan Donasi</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      project: {
        title: '',
        description: '',
        target_amount: '',
      }
    };
  },
  methods: {
    submitForm() {
      this.$inertia.post('/donation', this.project);
    }
  }
}
</script>

<style>

.container {
  max-width: 600px;
  margin: 50px auto;
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
}

h2 {
  font-weight: bold;
  color: #28a745;
}

.form-label {
  color: #333;
}

.form-control {
  border-radius: 8px;
  border: 1px solid #ddd;
  padding: 10px;
  font-size: 16px;
}

textarea.form-control {
  resize: none;
}

.btn-success {
  background-color: #28a745;
  border: none;
  transition: 0.3s ease-in-out;
}

.btn-success:hover {
  background-color: #218838;
}
</style>
