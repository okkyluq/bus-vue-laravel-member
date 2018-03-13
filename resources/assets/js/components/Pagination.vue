<template>
	<ul class="pagination">
		<li v-if="pagination.prev_page_url">
			<a v-on:click.prevent="load(pagination.prev_page_url)" v-bind:href="pagination.prev_page_url">Previous</a>
		</li>
		<li v-if="pagination.next_page_url">
			<a v-on:click.prevent="load(pagination.next_page_url)" v-bind:href="pagination.next_page_url">Next</a>
		</li>
	</ul>  
</template>

<script>
export default {
  	data () {
    	return {
    		pagination: []
    	}
  	},
  	mounted(){
  		var vm = this;
  		this.$bus.$on('pagination', data => {
  			vm.pagination = data;
  			console.log(vm.pagination);
  		});
  	},
  	methods: {
  		load: function(url){
  			this.$bus.$emit('loadPagination', url);
  		}
  	}
}
</script>