<template>
	<div class="restro-group__wrapper mb-5">
		<div class="row">
			<div class="col-md-4 mb-4" v-for="restro in localRestro" :key="restro.id">
				<card-component>
					<template slot="title">{{ restro.name }}</template>
					<template slot="body">
						{{ restro.location }}
						<br>
						<a v-bind:href="restro.slug" class="card-link">Menu</a>
					</template>
				</card-component>
			</div>

			<div class="col-md-4" v-if="showAddForm">
				<card-component>
					<template slot="title">Add new Restaurant</template>
					<template slot="body">
						<span @click="handleAddNewRestro">+</span>
					</template>
				</card-component>
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