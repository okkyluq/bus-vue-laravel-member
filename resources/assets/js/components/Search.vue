<template>
	<form v-on:submit.prevent="cariData">
		<div class="form-group">
			<label for="">Keyword</label>
			<input type="text" class="form-control" v-model="state.keyword">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default">Cari</button>
		</div>
	</form>
</template>

<script>
export default {
  	data() {
	    return {
	    	state : {
	    		keyword: ''
	    	}
	    }
  	},
  	methods: {
  		cariData: function(){
  			this.$bus.$emit('search', this.state.keyword);
  		}
  	}
}
</script>
