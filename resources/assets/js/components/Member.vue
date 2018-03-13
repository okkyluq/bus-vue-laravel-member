<template>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(member, index) in members.data">
                <td>{{ members.from + index }}</td>
                <td>{{ member.nama }}</td>
                <td>{{ member.alamat }}</td>
            </tr>     
        </tbody>
    </table>
</template>

<script>
    export default {
        data(){
            return {
                members:[]
            }
        },
        mounted() {
            const url = "/data/member";


            this.getData(url);

            this.$bus.$on('search', keyword => {
                let params = {
                    keyword : keyword
                }
                this.getData(url, params);
            });

            this.$bus.$on('loadPagination', url => {
                this.getData(url);
            });

        },
        methods: {
            getData: function(url, params = null){
                var vm =this;
                axios.get(url, {params})
                .then(function(response){
                    vm.members = response.data;
                    console.log(vm.members);
                    vm.$bus.$emit('pagination', vm.members);
                    
                })
                .catch(function(error){
                    
                });
            }
        }
    }
</script>
