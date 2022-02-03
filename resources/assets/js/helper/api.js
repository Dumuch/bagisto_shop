const yesterday = new Date(Date.now() - 86400000)


const apiToLocalStorage = (key, apiKey) => {

    return new Promise(function (resolve, reject) {
        let data = JSON.parse(localStorage.getItem(key))

        if (!data || data.time < yesterday) {
             fetch(`/api/${apiKey}`)
                .then((r) => r.json())
                .then((r) => r.data)
                .then((r) => {
                    localStorage.setItem(key, JSON.stringify({
                        'items': r,
                        'time': new Date()
                    }))
                    resolve(r)
                })

        } else {
            resolve(data.items);
        }
    })
}

const fetchForProductsVisible = (products, productId, resolve) => {
    fetch(`/api/products/${productId}`)
        .then((r) => r.json())
        .then((r) => r.data)
        .then((r) => {
            products.push(r)
            localStorage.setItem('VisibleProductList', JSON.stringify({
                'items': products,
                'time': new Date()
            }))
            return resolve(r)
        })
}

const apiToLocalStorageArrProducts = (productId) => {
    return new Promise(function (resolve, reject) {
        let data = JSON.parse(localStorage.getItem('VisibleProductList'))
        let products = data ? data.items : []

        if(!data || data.time < yesterday) {
            fetchForProductsVisible(products, productId, resolve)
        } else {
            const product = products.find(item => item.id === Number(productId));

            if(product) {
                resolve(product);
            } else {
                fetchForProductsVisible(products, productId, resolve)
            }
        }
    })
}

export { apiToLocalStorage, apiToLocalStorageArrProducts }