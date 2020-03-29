<template>
	<div class="add_form__wrapper">
		<form v-on:submit.prevent = "handleSubmit">
			<div class="form-group">
				<label for="name">Food item</label>
				<input class="form-control" type="text" placeholder="Enter food item name" v-model = "food.item"></input>
				<div class="validation-message" v-text="validation.getMessage('item')"></div>
			</div>

			<div class="form-group">
				<label for="name">Select Category</label>
				<multiselect
					v-model = "food.category"
					:options = "categories"
				></multiselect>
				<div class="validation-message" v-text="validation.getMessage('category')"></div>
			</div>

			<div class="form-group">
				<label for="name">Price</label>
				<input class="form-control" type="number" placeholder="Enter food item price" v-model = "food.price"></input>
				<div class="validation-message" v-text="validation.getMessage('price')"></div>
			</div>

			<div class="form-group">
				<label for="name">Description</label>
				<textarea class="form-control" type="number" placeholder="Enter food descriptions" v-model = "food.description"></textarea>
				<div class="validation-message" v-text="validation.getMessage('description')"></div>
			</div>

			<div class="form-group">
				<button class="btn btn-primary">Save</button>
			</div>
		</form>
	</div>
</template>

<script>
	import Multiselect from 'vue-multiselect';
	import Validation from './../../utils/Validation.js';

	export default {
		props: ['categories', 'restroId'],
		components: {
            Multiselect
        },
		data() {
			return {
				food: this.emptyFoodItem(),
				validation: new Validation()
			}
		},
		methods: {
			emptyFoodItem() {
				return {
					item: '',
					category: '',
					description: '',
					price: 0
				};
			},
			handleSubmit() {
				console.log('form data', this.food);

				let postData = this.food;
				postData.restroId = this.restroId;

				window.axios.post('api/item', postData).then(response => {
					console.log('response', response.data);
					
					this.food = this.emptyFoodItem();
					this.$emit('newMenuItemAdded', response.data, postData.category);

				}).catch(error => {
					
					console.log('error', error.response);

					if (error.response.status == 422) {
						this.validation.setMessages(error.response.data.errors);
					}

				});
			}
		}
	}
</script>