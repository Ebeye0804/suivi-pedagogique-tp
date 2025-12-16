<script setup>
import { useForm } from '@inertiajs/vue3'

// On reçoit la liste des enseignants depuis le contrôleur
defineProps({
  enseignants: Array
})

const form = useForm({
  matricule: '',
  nom: '',
  prenom: '',
  filiere: '',
  niveau: '',
  enseignant_id: '' // <-- ajouter ici
})

function submit() {
  form.post('/etudiants')
}
</script>

<template>
  <div class="container mx-auto mt-6">
    <h2 class="text-2xl mb-4 font-bold">Ajouter un étudiant</h2>

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
        <label>Filière</label>
        <input v-model="form.filiere" class="border p-2 w-full" />
      </div>

      <div class="mb-3">
        <label>Niveau</label>
        <input v-model="form.niveau" class="border p-2 w-full" />
      </div>

      <!-- 🔹 Sélecteur Enseignant -->
      <div class="mb-3">
        <label>Enseignant</label>
        <select v-model="form.enseignant_id" class="border p-2 w-full">
          <option value="">-- Choisir enseignant --</option>
          <option v-for="e in enseignants" :key="e.id" :value="e.id">
            {{ e.nom }} {{ e.prenom }}
          </option>
        </select>
      </div>

      <button class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter</button>
    </form>
  </div>
</template>
