<template>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Utente</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Testo</th>
                    <th>Immagine</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="postcard in postcards" :key='postcard.id'>
                    <td>{{ postcard.sender }}</td>
                    <td>{{ postcard.address }}</td>
                    <td>{{ postcard.text }}</td>
                    <td>
                        <img :src="'/storage/assets/' + postcard.img" alt="" width="100px">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data: function() {

            return {

                postcards: []
            }
        },
        mounted() {
            axios.get('/api/list/postcard')
                .then(r => this.postcards = r.data)
                .catch(e => console.error(e));
        }
    }
</script>
