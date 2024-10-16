import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import ProductList from './components/ProductList.vue'; // Import your new component
import AddProduct from './components/AddProduct.vue'; // Import your new component
import UpdateProduct from './components/UpdateProduct.vue'; // Import the UpdateProduct component

const app = createApp({
    components: {
        ExampleComponent,
        ProductList, // Register the ProductList component
        AddProduct, // Register the AddProduct component
        UpdateProduct, // Register the UpdateProduct component
    },
});

app.mount('#app');
