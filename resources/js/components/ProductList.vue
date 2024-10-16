<template>
    <div>
        <h2>Product List</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Active Ingredients</th>
                    <th>Batch Number</th>
                    <th>Research Status</th>
                    <th>Manufacturing Date</th>
                    <th>Expiration Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td>{{ product.name }}</td>
                    <td>{{ product.category }}</td>
                    <td>{{ product.active_ingredients }}</td>
                    <td>{{ product.batch_number }}</td>
                    <td>{{ product.research_status }}</td>
                    <td>{{ product.manufacturing_date}}</td>
                    <td>{{ product.expiration_date}}</td>
                    <td>
                        <button @click="editProduct(product.id)">Edit</button>
                        <button @click="deleteProduct(product.id)">Delete</button> <!-- Delete button -->
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Display the UpdateProduct component if a product is selected for editing -->
        <update-product 
            v-if="selectedProductId" 
            :productId="selectedProductId" 
            @close="handleCloseUpdateProduct" 
            @updated="handleProductUpdated"
        />
    </div>
</template>
  
  <script>
  import UpdateProduct from './UpdateProduct.vue'; // Import the UpdateProduct component
  
  export default {
      components: {
          UpdateProduct,
      },
      data() {
          return {
              products: [],
              selectedProductId: null, // To track the currently selected product for editing
          };
      },
      mounted() {
          this.fetchProducts(); // Fetch products when the component is mounted
      },
      methods: {
          fetchProducts() {
              // Fetch the list of products from the API
              fetch('/api/products')
                  .then(response => response.json())
                  .then(data => {
                      this.products = data;
                  })
                  .catch(error => console.error('Error fetching products:', error));
          },
          editProduct(id) {
              // Set the selected product ID when the edit button is clicked
              this.selectedProductId = id;
          },
          // Delete the product
          async deleteProduct(productId) {
              if (confirm('Are you sure you want to delete this product?')) {
                  try {
                      await fetch(`/api/products/${productId}`, {
                          method: 'DELETE',
                      });
                      this.fetchProducts(); // Refresh the list after deletion
                  } catch (error) {
                      console.error('Error deleting product:', error);
                  }
              }
          },

          // Callback for closing the UpdateProduct component
          closeUpdateProduct() {
              this.selectedProduct = null; // Deselect the product
              this.fetchProducts();         // Refresh the product list
          },
          // Handle product updated event
        handleProductUpdated() {
            this.fetchProducts(); // Refresh the product list after an update
            this.selectedProductId = null; // Close the UpdateProduct form
        },
      },
  };
</script>
      
  
  <style scoped>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 2px solid #371dc7;
    padding: 18px;
    text-align: left;
  }
  th {
    background-color: #685ccf;
  }
  </style>
  