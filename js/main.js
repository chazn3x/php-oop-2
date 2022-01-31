const app = new Vue({
    el: '#app',
    data: {
        users: null,
        products: [],
        user: null
    },
    methods: {
        userChange() {
            this.products = []
            // abbigliamento
            axios.get('backend/products/abbigliamento.php', {
                params: {
                    user: this.users[this.user].level
                }
            })
            .then(response => {
                console.log(response.data);
                this.products.push({
                    category: 'Abbigliamento',
                    listOfProducts: response.data
                })
            })
            // tecnologia
            axios.get('backend/products/tecnologia.php', {
                params: {
                    user: this.users[this.user].level
                }
            })
            .then(response => {
                console.log(response.data);
                this.products.push({
                    category: 'Tecnologia',
                    listOfProducts: response.data
                })
            })
            // casa
            axios.get('backend/products/casa.php', {
                params: {
                    user: this.users[this.user].level
                }
            })
            .then(response => {
                console.log(response.data);
                this.products.push({
                    category: 'Articoli per la casa',
                    listOfProducts: response.data
                })
            })
        }
    },
    beforeCreate() {
        // Get users
        axios.get('backend/users.php')
        .then(response => {
            console.log(response.data);
            this.users = response.data
        })

        // Get products
        // abbigliamento
        axios.get('backend/products/abbigliamento.php', {
            params: {
                user: "free"
            }
        })
        .then(response => {
            console.log(response.data);
            this.products.push({
                category: 'Abbigliamento',
                listOfProducts: response.data
            })
        })
        // tecnologia
        axios.get('backend/products/tecnologia.php', {
            params: {
                user: "free"
            }
        })
        .then(response => {
            console.log(response.data);
            this.products.push({
                category: 'Tecnologia',
                listOfProducts: response.data
            })
        })
        // casa
        axios.get('backend/products/casa.php', {
            params: {
                user: "free"
            }
        })
        .then(response => {
            console.log(response.data);
            this.products.push({
                category: 'Articoli per la casa',
                listOfProducts: response.data
            })
        })
    }
})