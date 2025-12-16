<script setup>
defineProps({
  etudiants: Array
})
</script>

<template>
  <div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Liste des étudiants</h2>
	
    <table class="table-auto w-full border">
      <thead class="bg-gray-200">
        <tr>
          <th class="p-2 border">Matricule</th>
          <th class="p-2 border">Nom</th>
          <th class="p-2 border">Prénom</th>
          <th class="p-2 border">Filière</th>
          <th class="p-2 border">Niveau</th>
          <th class="p-2 border">Enseignant</th>
        </tr>
      </thead>

      <tbody>
        <tr v-for="etu in etudiants" :key="etu.id">
          <td class="p-2 border">{{ etu.matricule }}</td>
          <td class="p-2 border">{{ etu.nom }}</td>
          <td class="p-2 border">{{ etu.prenom }}</td>
          <td class="p-2 border">{{ etu.filiere }}</td>
          <td class="p-2 border">{{ etu.niveau }}</td>
          <td class="p-2 border">{{ etu.enseignant ? etu.enseignant.nom + '' + etu.enseignant.prenom : 'aucun' }}</td>
        </tr>
      </tbody>
    </table>

    <a href="/etudiants/create" class="bg-green-500 text-white p-2 rounded">
      Ajouter un étudiant
    </a>
    
  </div>
</template>
