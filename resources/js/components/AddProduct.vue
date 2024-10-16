<template>
    <div>
      <h2>Add Product</h2>
      <form @submit.prevent="addProduct">
        <div>
          <label for="name">Name:</label>
          <input type="text" v-model="product.name" id="name" required />
        </div>
        <div>
          <label for="category">Category:</label>
          <input type="text" v-model="product.category" id="category" required />
        </div>
        <div>
          <label for="active_ingredients">Active Ingredients:</label>
          <input type="text" v-model="product.active_ingredients" id="active_ingredients" required />
        </div>
        <div>
          <label for="batch_number">Batch Number:</label>
          <input type="text" v-model="product.batch_number" id="batch_number" required />
        </div>
        <div>
          <label for="research_status">Research Status:</label>
          <input type="text" v-model="product.research_status" id="research_status" required />
        </div>
        <div>
          <label for="manufacturing_date">Manufacturing Date:</label>
          <input type="date" v-model="product.manufacturing_date" id="manufacturing_date" required />
        </div>
        <div>
          <label for="expiration_date">Expiration Date:</label>
          <input type="date" v-model="product.expiration_date" id="expiration_date" required />
        </div>
        <button type="submit">Add Product</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        product: {
          name: '',
          category: '',
          active_ingredients: '',
          batch_number: '',
          research_status: '',
          manufacturing_date: '',
          expiration_date: ''
        }
      };
    },
    methods: {
      async addProduct() {
        try {
          const response = await axios.post('/api/products', this.product);
          console.log('Product added:', response.data);
          // Optionally reset the form
          this.resetForm();
          // Optionally trigger an event to refresh the product list
        } catch (error) {
          console.error('Error adding product:', error);
        }
      },
      resetForm() {
        this.product = {
          name: '',
          category: '',
          active_ingredients: '',
          batch_number: '',
          research_status: '',
          manufacturing_date: '',
          expiration_date: ''
        };
      }
    }
  };
  </script>
  