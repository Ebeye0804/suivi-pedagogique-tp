<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  matricule: '',
  nom: '',
  prenom: '',
  specialite: ''
})

function submit() {
  form.post('/enseignants')
}
</script>

<template>
  <div class="container mx-auto mt-6">
    <h2 class="text-2xl mb-4 font-bold">Ajouter un enseignant</h2>

    <form @submit.prevent="submit">
      <div class="mb-3">
        <label>Matricule</label>
        <input v-model="form.matricule" class="border p-2 w-full" />
      </div>
      <div class="mb-3">
        <label>Nom</label>
        <input v-model="form.nom" class="border p-2 w-full" />
      </div>
      <div class="mb-3">
        <label>Prénom</label>
        <input v-model="form.prenom" class="border p-2 w-full" />
      </div>
      <div class="mb-3">
        <label>Spécialité</label>
        <input v-model="form.specialite" class="border p-2 w-full" />
      </div>

      <button class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter</button>
    </form>
  </div>
</template>
