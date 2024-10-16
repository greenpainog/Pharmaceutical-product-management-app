<template>
    <div>
        <h2>Update Product</h2>
        <form @submit.prevent="updateProduct">
            <div>
                <label for="name">Product Name:</label>
                <input type="text" v-model="product.name" required />
            </div>
            <div>
                <label for="category">Category:</label>
                <input type="text" v-model="product.category" required />
            </div>
            <div>
                <label for="active_ingredients">Active Ingredients:</label>
                <input type="text" v-model="product.active_ingredients" required />
            </div>
            <div>
                <label for="batch_number">Batch Number:</label>
                <input type="text" v-model="product.batch_number" required />
            </div>
            <div>
                <label for="research_status">Research Status:</label>
                <input type="text" v-model="product.research_status" required />
            </div>
            <div>
                <label for="manufacturing_date">Manufacturing Date:</label>
                <input type="date" v-model="product.manufacturing_date" required />
            </div>
            <div>
                <label for="expiration_date">Expiration Date:</label>
                <input type="date" v-model="product.expiration_date" required />
            </div>
            
            <button type="submit">Update Product</button>
        </form>
    </div>
</template>

<script>
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
                expiration_date: '',
            },
        };
    },
    props: {
        productId: {
            type: Number,
            required: true,
        },
    },
    mounted() {
        this.fetchProduct();
    },
    methods: {
        fetchProduct() {
            // Fetch product details from the API
            fetch(`/api/products/${this.productId}`)
                .then(response => response.json())
                .then(data => {
                    this.product = data;
                })
                .catch(error => console.error('Error fetching product:', error));
        },
        updateProduct() {
            // Update the product details via API call
            fetch(`/api/products/${this.productId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(this.product),
            })
                .then(response => {
                    if (response.ok) {
                        alert('Product updated successfully!');
                        this.$emit('updated'); // Emit 'updated' event to parent component
                        this.$emit('close');   // Emit 'close' event to close the update form
                    } else {
                        alert('Failed to update product.');
                    }
                })
                .catch(error => console.error('Error updating product:', error));
        },
    },
};
</script>
