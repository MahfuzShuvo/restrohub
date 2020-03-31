<template>
  <div class="restro_add_form_wrapper">
    <h3>Add a new Restaurant</h3>

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text"
        class="form-control"
        name="location"
        v-model="restro.name"
        placeholder="Enter restaurant name">
    </div>

    <div class="form-group">
      <label for="name">Address</label>
      <input type="text"
        class="form-control"
        name="address"
        v-model="restro.location"
        placeholder="Enter restaurant address">
    </div>

    <div class="form-group">
      <label for="name">Number of table</label>
      <input type="number"
        class="form-control"
        name="tables"
        v-model="restro.tables"
        placeholder="Enter restaurant tables">
    </div>

    <button class="btn btn-primary" @click="handleAddButton">Add</button>
    <button class="btn btn-warning" @click="handleCancelButton">Cancel</button>
  </div>
</template>

<script>
	import axios from 'axios';

	export default {
	  	data() {
	    	return {
	      		restro: this.basicRestro()
	    	}
	  	},
	  	methods: {
	    	basicRestro() {
	      		return { name: "", location: "", tables: 0 }
	    	},

	    	handleAddButton() {
	      		this.$emit('addRestroEvent', this.restro);
	    	},

	    	handleCancelButton() {
	      		this.restro = this.basicRestro();
	      		this.$emit('modalCancel');
	    	}
	  	}
	}
</script>
