<template>
	<div class="restro-group__wrapper mb-5">
		<div class="row">
			<div class="col-md-4 mb-4" v-for="restro in localRestro" :key="restro.id">
				<card-component>
					<template slot="title">{{ restro.name }}</template>
					<template slot="body" style="text-align: center;">
						<div class="body-box">
							<i class="fa fa-map-marker" aria-hidden="true"></i> <span style="padding-left: 10px; font-family: monospace;">{{ restro.location }}</span>
							<br>
							<i class="fa fa-table" aria-hidden="true"></i> <span style="padding-left: 10px; font-family: monospace;">{{ restro.tables }} tables</span>
						</div>
						
						
						<div class="menu-box">
							<a v-bind:href="restro.slug" class="card-link btn btn-outline-primary">Menu</a>
							<a v-bind:href="restro.orderSlug" class="card-link btn btn-outline-warning">Orders</a>
							<a href="#" class="card-link btn btn-outline-success">Manage</a>
						</div>
					</template>
				</card-component>
			</div>

			<div class="col-md-4" v-if="showAddForm" >
			    <div class="card">
			    	<div class="card-body" style="height: 294px; display: flex; align-items: center; justify-content: center;">
			    		<button class="btn btn-dark btn-icons btn-rounded" @click="handleAddNewRestro" style="width: 100px; height: 100px; border-radius: 50%; font-size: 40px;"><i class="fa fa-plus"></i></button>
			    	</div>
			    </div>
				
			</div>

			<modal name="add-new-restro" height="60%">
				<div class="container-padding" style="padding: 20px;">
					<RestroAddForm 
						@addRestroEvent="handleSaveRestro"
              			@modalCancel="handleCancelRestro"
					></RestroAddForm>

				</div>
			</modal>

		</div>
	</div>
</template>

<script>
	import RestroAddForm from './RestroAddForm.vue';
	import axios from 'axios';

	export default {
		components: {
		    RestroAddForm
		 },

		props: ['restros'],

		created() {
			// console.log('this.restros.length', this.restros.length);
			this.localRestro = this.restros;
		},

		computed: {
			showAddForm() {
				return (this.localRestro.length < 5) ? true : false;
			}
		},

		data() {
			return {
				localRestro: []
			}
		},

		methods: {
			handleAddNewRestro() {
				this.$modal.show('add-new-restro');
			},

			handleCancelRestro() {
		      	this.$modal.hide('add-new-restro');
		    },
		    
		    handleSaveRestro(restroData) {
		      	// console.log('restroData', restroData);

		      	axios.post('api/restro', restroData).then(response => {
		      		// console.log('response', response.data);

		      		this.localRestro.unshift(response.data);
		      	});

		      	this.$modal.hide('add-new-restro');
		    }

		}
	};
</script>