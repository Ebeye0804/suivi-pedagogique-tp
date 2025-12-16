<script setup>
defineProps({
    enseignants: Array
    });
</script>

<template>
<div class="p-6">
    <h1 class="text-xl font-bold mb-4">Liste des Enseignants</h1>
    <table class="table-auto border w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">Matricule</th>
                <th class="border p-2">Nom</th>
                <th class="border p-2">Prénom</th>
                <th class="border p-2">Spécialité</th>
                <th class="border p-2">Étudiants</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="e in enseignants" :key="e.id">
                <td class="border p-2">{{ e.matricule }}</td>
                <td class="border p-2">{{ e.nom }}</td>
                <td class="border p-2">{{ e.prenom }}</td>
                <td class="border p-2">{{ e.specialite }}</td>
                <td class="border p-2">
                    <ul>
                        <li v-for="et in e.etudiants" :key="et.id">
                            {{ et.nom }} {{ et.prenom }}
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/enseignants/create" class="bg-green-500 text-white p-2 rounded">
        Ajouter un Enseignant
    </a>
</div>
</template>